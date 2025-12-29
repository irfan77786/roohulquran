<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('students', function (Blueprint $table) {
            $table->time('start_time')->nullable()->after('timezone');
            $table->time('end_time')->nullable()->after('start_time');
            $table->foreignId('teacher_id')->nullable()->after('end_time')->constrained('teachers')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            $table->dropForeign(['teacher_id']);
            $table->dropColumn(['start_time', 'end_time', 'teacher_id']);
        });
    }
};
