<?php

namespace App\Jobs;

use App\Models\Enrollment;
use App\Models\ClassSession;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class GenerateBulkMonthlySessionsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $month;
    protected $year;
    protected $daysOfWeek;
    protected $startTime;
    protected $endTime;
    protected $teacherId;
    protected $meetingLink;
    protected $courseIds;

    /**
     * Create a new job instance.
     */
    public function __construct($month, $year, $daysOfWeek, $startTime, $endTime, $teacherId = null, $meetingLink = null, $courseIds = null)
    {
        $this->month = $month;
        $this->year = $year;
        $this->daysOfWeek = $daysOfWeek;
        $this->startTime = $startTime;
        $this->endTime = $endTime;
        $this->teacherId = $teacherId;
        $this->meetingLink = $meetingLink;
        $this->courseIds = $courseIds;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // Map day names to Carbon day constants
        $dayMap = [
            'Monday' => Carbon::MONDAY,
            'Tuesday' => Carbon::TUESDAY,
            'Wednesday' => Carbon::WEDNESDAY,
            'Thursday' => Carbon::THURSDAY,
            'Friday' => Carbon::FRIDAY,
            'Saturday' => Carbon::SATURDAY,
            'Sunday' => Carbon::SUNDAY,
        ];
        
        $daysOfWeekNumeric = array_map(function($day) use ($dayMap) {
            return $dayMap[$day];
        }, $this->daysOfWeek);
        
        // Get the first day of the month
        $startDate = Carbon::create($this->year, $this->month, 1);
        $endDate = $startDate->copy()->endOfMonth();
        
        // Get all active enrollments
        $enrollmentsQuery = Enrollment::with(['student', 'course', 'classSession'])
            ->where('status', 'active');
        
        // Filter by course IDs if provided
        if ($this->courseIds && count($this->courseIds) > 0) {
            $enrollmentsQuery->whereIn('course_id', $this->courseIds);
        }
        
        $enrollments = $enrollmentsQuery->get();
        
        $totalSessionsCreated = 0;
        $totalSessionsSkipped = 0;
        
        foreach ($enrollments as $enrollment) {
            $student = $enrollment->student;
            
            // Use student's specific schedule if available, otherwise use job defaults, or skip if neither available
            $studentStartTime = null;
            $studentEndTime = null;
            
            if ($student->start_time && $student->end_time) {
                $studentStartTime = $student->start_time->format('H:i');
                $studentEndTime = $student->end_time->format('H:i');
            } elseif ($this->startTime && $this->endTime) {
                $studentStartTime = $this->startTime;
                $studentEndTime = $this->endTime;
            } else {
                // Skip this enrollment if no time is available
                Log::warning("Skipping enrollment {$enrollment->id} for student {$student->name}: No start/end time configured");
                continue;
            }
            
            // Get teacher priority: student's teacher > job's teacher > enrollment's teacher
            $teacherId = null;
            if ($student->teacher_id) {
                $teacherId = $student->teacher_id;
            } elseif ($this->teacherId) {
                $teacherId = $this->teacherId;
            } elseif ($enrollment->classSession && $enrollment->classSession->teacher_id) {
                $teacherId = $enrollment->classSession->teacher_id;
            }
            
            $currentDate = $startDate->copy();
            
            // Generate sessions for each matching day in the month
            while ($currentDate->lte($endDate)) {
                if (in_array($currentDate->dayOfWeek, $daysOfWeekNumeric)) {
                    // Check if session already exists for this date and course
                    $existingSession = ClassSession::where('course_id', $enrollment->course_id)
                        ->whereDate('start_date', $currentDate->toDateString())
                        ->where('start_time', $studentStartTime)
                        ->first();
                    
                    if (!$existingSession) {
                        ClassSession::create([
                            'course_id' => $enrollment->course_id,
                            'teacher_id' => $teacherId,
                            'name' => $enrollment->course->name . ' - ' . $currentDate->format('M d, Y'),
                            'description' => 'Bulk generated session for ' . $student->name,
                            'type' => 'individual',
                            'capacity' => 1,
                            'enrolled_count' => 0,
                            'day_of_week' => $currentDate->format('l'),
                            'start_time' => $studentStartTime,
                            'end_time' => $studentEndTime,
                            'start_date' => $currentDate->toDateString(),
                            'end_date' => $currentDate->toDateString(),
                            'meeting_link' => $this->meetingLink,
                            'status' => 'scheduled',
                        ]);
                        $totalSessionsCreated++;
                    } else {
                        $totalSessionsSkipped++;
                    }
                }
                $currentDate->addDay();
            }
        }
        
        Log::info("Bulk session generation completed", [
            'month' => $this->month,
            'year' => $this->year,
            'sessions_created' => $totalSessionsCreated,
            'sessions_skipped' => $totalSessionsSkipped,
        ]);
    }
}

