<?php

namespace App\Support;

class LocationPageCopy
{
    /**
     * Visitor-facing copy for a location landing page.
     *
     * @param  array<string, mixed>  $location
     * @return array<string, mixed>
     */
    public static function make(array $location): array
    {
        $city = (string) ($location['name'] ?? 'your city');
        $region = (string) ($location['region'] ?? $location['region_name'] ?? '');
        $country = (string) ($location['country_name'] ?? 'United Kingdom');
        $countryKey = (string) ($location['country_key'] ?? 'uk');
        $isUs = $countryKey === 'us';
        $areas = array_values(array_filter($location['areas'] ?? []));
        $areaList = self::list($areas);
        $audience = (string) ($location['audience'] ?? 'kids, sisters, and adults');
        $focus = (string) ($location['focus'] ?? 'tajweed');
        $schedule = (string) ($location['schedule_note'] ?? (
            $isUs
                ? 'US evenings, weekends, and after-school slots across major time zones'
                : 'UK evenings, weekends, and after-school slots (GMT/BST)'
        ));
        $tzLabel = $isUs ? 'local US' : 'UK';
        $timezone = (string) ($location['timezone'] ?? ($isUs ? 'America/New_York' : 'Europe/London'));

        $focusBlocks = $isUs ? [
            'tajweed' => [
                'label' => 'Tajweed',
                'title' => "Quran with Tajweed for students in {$city}",
                'body' => "Many students in {$city} can already read, but letters run together and rules are skipped in a busy weekend class. In a live one-to-one Tajweed lesson the tutor stops the recitation, corrects makharij and madd, then rebuilds fluency at a pace that fits {$region} school evenings. Parents hear the difference within a few weeks because homework is a short, clear revision list, not a rushed page count.",
            ],
            'hifz' => [
                'label' => 'Hifz',
                'title' => "Online Hifz classes designed for {$city} school life",
                'body' => "Hifz only sticks when yesterday's lesson is still strong. For families in {$city} we set a realistic new sabaq plus a revision map that respects homework, sports, and jumu'ah. The same tutor stays with the student, so memorisation does not restart every time a classroom teacher changes. If midterms, finals, or SAT prep weeks arrive, we shrink new lesson size and protect old Juz instead of pretending it is a normal week.",
            ],
            'qaida' => [
                'label' => 'Madani Qaida',
                'title' => "Madani Qaida online for beginners in {$city}",
                'body' => "A calm Qaida start matters more than speed. Children and adults in {$city} who are new to Arabic letters learn with repetition, clear English explanation, and a tutor who can see lip and tongue position on camera. We do not jump to Quran pages until the letters are stable. That is how recitation stays clean when the student later joins Tajweed or Hifz.",
            ],
            'kids' => [
                'label' => 'Kids classes',
                'title' => "After-school Quran classes for children in {$city}",
                'body' => "Elementary-age students in {$city} learn best in short, focused live sessions after the school day, not in a long hall class when they are already tired. Lessons stay about 30 minutes for most children, with a female tutor available for girls and younger kids. Parents can sit nearby, and siblings can take consecutive private slots on the same device.",
            ],
        ] : [
            'tajweed' => [
                'label' => 'Tajweed',
                'title' => "Quran with Tajweed for students in {$city}",
                'body' => "Many students in {$city} can already read, but letters run together and rules are skipped in a busy group class. In a live one-to-one Tajweed lesson the tutor stops the recitation, corrects makharij and madd, then rebuilds fluency at a pace that fits {$region} school evenings. Parents hear the difference within a few weeks because homework is a short, clear revision list, not a rushed page count.",
            ],
            'hifz' => [
                'label' => 'Hifz',
                'title' => "Online Hifz classes designed for {$city} school life",
                'body' => "Hifz only sticks when yesterday's lesson is still strong. For families in {$city} we set a realistic new sabaq plus a revision map that respects homework, exams, and jumu'ah. The same tutor stays with the student, so memorisation does not restart every time a hall teacher changes. If SATs, GCSEs, or Scottish exams arrive, we shrink new lesson size and protect old Juz instead of pretending it is a normal week.",
            ],
            'qaida' => [
                'label' => 'Madani Qaida',
                'title' => "Madani Qaida online for beginners in {$city}",
                'body' => "A calm Qaida start matters more than speed. Children and adults in {$city} who are new to Arabic letters learn with repetition, clear English explanation, and a tutor who can see lip and tongue position on camera. We do not jump to Quran pages until the letters are stable. That is how recitation stays clean when the student later joins Tajweed or Hifz.",
            ],
            'kids' => [
                'label' => 'Kids classes',
                'title' => "After-school Quran classes for children in {$city}",
                'body' => "Primary-age students in {$city} learn best in short, focused live sessions after the school run, not in a long hall class when they are already tired. Lessons stay 30 minutes for most children, with a female tutor available for girls and younger kids. Parents can sit nearby, and siblings can take consecutive private slots on the same device.",
            ],
        ];

        $focusBlock = $focusBlocks[$focus] ?? $focusBlocks['tajweed'];

        $faqs = array_values($location['faqs'] ?? []);
        $faqs[] = [
            'q' => "How do online Quran classes work for a family in {$city}?",
            'a' => "You book a free trial in {$tzLabel} time. We assess whether the student needs Qaida, Quran reading with Tajweed, or Hifz, then assign a male or female tutor. Regular classes are live and one-to-one over video. A phone, tablet, or laptop with a headset is enough. After each lesson you receive a short revision note so practice at home in {$city} is clear.",
        ];
        $faqs[] = [
            'q' => "What is the best time for Quran class in {$city}?",
            'a' => "Most households book after school or later in the evening, plus weekend mornings. We timetable around {$schedule}. If a parent works shifts or commutes, tell us at trial. A later slot you can keep is better than an early class you will miss every week.",
        ];
        $faqs[] = [
            'q' => "Do you provide female Quran teachers for sisters and kids in {$city}?",
            'a' => "Yes. Request a female tutor on the trial form. Girls, mothers, and young children can learn in a private 1-1 session from home. This is often easier than waiting for a local sisters' circle with the right hour.",
        ];
        $faqs[] = [
            'q' => "Can beginners and adults in {$city} join, or only children?",
            'a' => "All levels are welcome: complete beginners on Madani Qaida, fluent readers who need Tajweed repair, Hifz students, and adults who recited as children and want to correct old habits. Teaching is in clear English with Arabic recitation.",
        ];
        $faqs[] = [
            'q' => "Is there a free trial for students in {$city}?",
            'a' => "Yes. The trial is free and booked around your local schedule so you are not asked to join in the middle of a school or work day unless you choose that. After the trial you can start regular weekly classes if a tutor slot fits.",
        ];

        $crumbLabel = $isUs ? 'US Quran classes' : 'UK Quran classes';
        $trialLabel = $isUs ? 'Local-time trial' : 'UK-time trial';

        return [
            'heroTitle' => "Online Quran Classes in {$city}",
            'heroSubtitle' => "Live 1-to-1 Quran lessons for kids and adults in {$city}, {$region}. Learn Madani Qaida, Tajweed, and Hifz at home on {$tzLabel} time, with a dedicated tutor and a free trial class.",
            'heroFeatures' => [
                "One-to-one live classes for {$city} students (not a crowded hall)",
                'Male and female Quran tutors, including sisters-only pairing',
                $schedule,
                "Qaida, Tajweed, and Hifz paced for {$region} school terms",
            ],
            'introTitle' => "Learn Quran online with expert teachers in {$city}",
            'intro' => $location['intro'] ?? '',
            'need' => $location['need'] ?? '',
            'teaching' => $location['teaching'] ?? '',
            'audienceLine' => "We teach {$audience}. Each student keeps a private tutor, even if siblings enrol on the same evening.",
            'coverageTitle' => "Join from home anywhere in {$city}",
            'coverageBody' => $areaList !== ''
                ? "Families across {$city} book live classes after school and on weekends, including students in {$areaList}. You do not travel to a hall: the tutor joins you on video in {$timezone} time, so recitation stays consistent through busy evenings, exam weeks, and long commutes in {$region}."
                : "Families across {$city} book live classes after school and on weekends. The tutor joins you on video in {$tzLabel} time, so recitation stays consistent through school terms in {$region}.",
            'localContext' => $location['community'] ?? '',
            'focus' => $focusBlock,
            'areas' => $areas,
            'steps' => [
                ['title' => 'Book a free trial', 'text' => "Tell us the student's level in {$city} (Qaida, reading, or Hifz) and an evening you can keep."],
                ['title' => 'Meet your tutor', 'text' => 'We match a qualified male or female teacher and agree a weekly plan after the trial recitation.'],
                ['title' => 'Learn every week', 'text' => 'Live 1-1 lessons plus a short homework list. Missed weeks can be rescheduled so progress does not collapse.'],
            ],
            'whyItems' => [
                ['title' => 'Qualified online Quran teachers', 'text' => "A dedicated tutor for each student in {$city}, with weekly correction you can actually hear."],
                ['title' => 'Female Quran tutors', 'text' => 'Private classes for sisters and children who learn more comfortably at home.'],
                ['title' => 'Flexible local schedules', 'text' => $schedule.'. Book the hour your household can keep.'],
                ['title' => 'Step-by-step courses', 'text' => 'Madani Qaida for beginners, Tajweed for readers, and Hifz with an honest revision map.'],
                ['title' => 'Fits mosque and school', 'text' => "Keep weekend madrasa if you already go. Use weekday online time for precision Tajweed in {$city}."],
                ['title' => 'Free trial class', 'text' => 'Meet the teacher first. Start regular classes only if the method and slot feel right.'],
            ],
            'faqs' => $faqs,
            'city' => $city,
            'region' => $region,
            'country' => $country,
            'countryKey' => $countryKey,
            'crumbLabel' => $crumbLabel,
            'trialLabel' => $trialLabel,
            'scheduleNote' => $schedule,
            'timezone' => $timezone,
        ];
    }

    /**
     * @param  array<int, string>  $items
     */
    private static function list(array $items): string
    {
        $items = array_values($items);
        $count = count($items);
        if ($count === 0) {
            return '';
        }
        if ($count === 1) {
            return $items[0];
        }

        $last = array_pop($items);

        return implode(', ', $items) . ' and ' . $last;
    }
}
