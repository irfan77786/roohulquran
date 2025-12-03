<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Helpers\CloudinaryImageHelper;
use Illuminate\Support\Facades\Config;

class UploadHomeImagesToCloudinary extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cloudinary:upload-site-images {--force : Force upload even if already exists}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Upload all website images to Cloudinary';

    /**
     * List of images to upload from entire website
     *
     * @var array
     */
    protected $images = [
        // Home page images
        'assets/img/hero-bg-1.webp',
        'assets/img/hero-bg-1-320.webp',
        'assets/img/hero-bg-4-768.webp',
        'assets/img/hero-bg-4.webp',
        'assets/img/about.webp',
        'assets/img/about-bg.png',
        'assets/img/choos-us.png',
        'assets/img/ai/course-1.webp',
        'assets/img/ai/course-2.webp',
        'assets/img/ai/course-3.webp',
        'assets/img/ai/course-4.webp',
        'assets/img/ai/thumbsup1.webp',
        'assets/img/ai/contact-us.jpg',
        'assets/img/icons/pointing-up.avif',
        'assets/img/icons/schedule.avif',
        'assets/img/icons/koran.avif',
        'assets/img/icons/quality.avif',
        
        // Header/Logo images
        'assets/img/logo.svg',
        'assets/img/logo.png',
        'assets/img/header-bg.webp',
        'assets/img/tab-logo.webp',
        'assets/img/tab-logo.png',
        
        // About page images
        'assets/img/ai/about-1.webp',
        'assets/img/ai/about.webp',
        'assets/img/ai/our-mission.webp',
        
        // Course pages images
        'assets/img/hero-bg-3.webp',
        
        // Teachers page images
        'assets/img/ai/teacher-1.webp',
        'assets/img/ai/teachers.webp',
        
        // Testimonial images
        'assets/img/ai/test-1.webp',
        'assets/img/ai/test-2.webp',
        'assets/img/ai/test-3.webp',
        'assets/img/ai/test-4.webp',
        'assets/img/ai/test-5.webp',
        'assets/img/ai/happystudent.webp',
        
        // Video thumbnail
        'assets/img/video-thumb.webp',
    ];

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Starting upload of all website images to Cloudinary...');
        $this->newLine();

        $mappings = Config::get('cloudinary-images', []);
        $uploaded = 0;
        $skipped = 0;
        $failed = 0;

        foreach ($this->images as $imagePath) {
            // Check if already uploaded
            if (!$this->option('force') && isset($mappings[$imagePath])) {
                $this->line("⏭️  Skipped: {$imagePath} (already uploaded)");
                $skipped++;
                continue;
            }

            // Check if file exists
            $fullPath = public_path($imagePath);
            if (!file_exists($fullPath)) {
                $this->error("❌ File not found: {$imagePath}");
                $failed++;
                continue;
            }

            // Upload to Cloudinary
            $this->info("📤 Uploading: {$imagePath}...");
            $cloudinaryUrl = CloudinaryImageHelper::upload($imagePath, 'home');

            if ($cloudinaryUrl) {
                $mappings[$imagePath] = $cloudinaryUrl;
                $this->info("✅ Uploaded: {$imagePath}");
                $this->line("   URL: {$cloudinaryUrl}");
                $uploaded++;
            } else {
                $this->error("❌ Failed to upload: {$imagePath}");
                $failed++;
            }

            $this->newLine();
        }

        // Save mappings
        CloudinaryImageHelper::setMappings($mappings);

        $this->newLine();
        $this->info("📊 Upload Summary:");
        $this->line("   ✅ Uploaded: {$uploaded}");
        $this->line("   ⏭️  Skipped: {$skipped}");
        $this->line("   ❌ Failed: {$failed}");
        $this->newLine();
        $this->info("✨ Done! All mappings saved to config/cloudinary-images.php");
        $this->info("💡 Don't forget to update your view files to use cloudinary_image() helper function!");

        return Command::SUCCESS;
    }
}
