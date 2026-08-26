<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            if (! Schema::hasColumn('blogs', 'meta_title')) {
                $table->string('meta_title')->nullable()->after('slug');
            }
            if (! Schema::hasColumn('blogs', 'meta_description')) {
                $table->text('meta_description')->nullable();
            }
            if (! Schema::hasColumn('blogs', 'meta_keywords')) {
                $table->text('meta_keywords')->nullable();
            }
            if (! Schema::hasColumn('blogs', 'primary_keyword')) {
                $table->string('primary_keyword')->nullable()->after('excerpt');
            }
            if (! Schema::hasColumn('blogs', 'secondary_keywords')) {
                $table->text('secondary_keywords')->nullable()->after('primary_keyword');
            }
            if (! Schema::hasColumn('blogs', 'faqs')) {
                $table->json('faqs')->nullable();
            }
            if (! Schema::hasColumn('blogs', 'internal_links')) {
                $table->json('internal_links')->nullable();
            }
        });
    }

    public function down(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            foreach (['primary_keyword', 'secondary_keywords', 'faqs', 'internal_links'] as $column) {
                if (Schema::hasColumn('blogs', $column)) {
                    $table->dropColumn($column);
                }
            }
        });
    }
};
