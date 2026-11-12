<?php

/**
 * White-hat internal linking map for Rooh Ul Quran Academy.
 * Used for contextual related links, footer, and orphan-page coverage.
 */
return [

    'courses' => [
        'quran.recitation' => [
            'label' => 'Madani Qaida Course',
            'desc' => 'Beginner foundation for Arabic letters and pronunciation',
        ],
        'beginner.classes' => [
            'label' => 'Quran Reading Course',
            'desc' => 'Build fluent Quran reading for all ages',
        ],
        'quran.tajweed' => [
            'label' => 'Learn Quran With Tajweed',
            'desc' => 'Accurate recitation with proper Tajweed rules',
        ],
        'quran.memorization' => [
            'label' => 'Online Quran Memorization',
            'desc' => 'Structured Hifz with revision and testing',
        ],
        'quran.tafseer' => [
            'label' => 'Online Quran Tafsir - Translation',
            'desc' => 'Understand meanings and practical guidance',
        ],
        'quran.ijazah' => [
            'label' => 'Online Ijazah Course',
            'desc' => 'Advanced certification with qualified scholars',
        ],
        'kids.classes' => [
            'label' => 'Kids Quran Classes',
            'desc' => 'Fun, age-friendly Quran lessons for children',
        ],
    ],

    'utility' => [
        'home.about' => 'About Us',
        'teachers' => 'Our Teachers',
        'home.pricing' => 'Pricing',
        'home.faq' => 'FAQ',
        'home.contact.us' => 'Contact Us',
        'blogs.index' => 'Blogs',
        'home.video' => 'Introduction Video',
        'home.privacy.policy' => 'Privacy Policy',
    ],

    /*
    | Related links per page key (route name).
    | Keep 3–6 highly relevant links — quality over quantity.
    */
    'related' => [
        'home.index' => [
            'kids.classes',
            'quran.tajweed',
            'quran.memorization',
            'home.pricing',
            'teachers',
            'blogs.index',
        ],
        'quran.recitation' => [
            'kids.classes',
            'beginner.classes',
            'quran.tajweed',
            'home.pricing',
            'home.faq',
            'home.contact.us',
        ],
        'beginner.classes' => [
            'quran.recitation',
            'quran.tajweed',
            'kids.classes',
            'home.pricing',
            'home.faq',
            'home.contact.us',
        ],
        'quran.tajweed' => [
            'beginner.classes',
            'quran.memorization',
            'quran.recitation',
            'home.pricing',
            'teachers',
            'home.contact.us',
        ],
        'quran.memorization' => [
            'quran.tajweed',
            'kids.classes',
            'quran.ijazah',
            'home.pricing',
            'home.faq',
            'home.contact.us',
        ],
        'quran.tafseer' => [
            'quran.tajweed',
            'quran.memorization',
            'home.about',
            'home.pricing',
            'blogs.index',
            'home.contact.us',
        ],
        'quran.ijazah' => [
            'quran.memorization',
            'quran.tajweed',
            'teachers',
            'home.pricing',
            'home.faq',
            'home.contact.us',
        ],
        'kids.classes' => [
            'quran.recitation',
            'beginner.classes',
            'quran.memorization',
            'home.pricing',
            'teachers',
            'home.contact.us',
        ],
        'home.about' => [
            'teachers',
            'quran.tajweed',
            'kids.classes',
            'home.pricing',
            'home.video',
            'home.contact.us',
        ],
        'teachers' => [
            'kids.classes',
            'quran.tajweed',
            'quran.memorization',
            'home.pricing',
            'home.faq',
            'home.contact.us',
        ],
        'home.pricing' => [
            'quran.recitation',
            'quran.tajweed',
            'quran.memorization',
            'kids.classes',
            'home.faq',
            'home.contact.us',
        ],
        'home.faq' => [
            'home.pricing',
            'kids.classes',
            'quran.tajweed',
            'quran.memorization',
            'teachers',
            'home.contact.us',
        ],
        'home.contact.us' => [
            'home.pricing',
            'home.faq',
            'kids.classes',
            'quran.tajweed',
            'teachers',
            'blogs.index',
        ],
        'home.video' => [
            'home.about',
            'teachers',
            'kids.classes',
            'quran.tajweed',
            'home.pricing',
            'home.contact.us',
        ],
        'home.privacy.policy' => [
            'home.index',
            'home.contact.us',
            'home.faq',
            'home.about',
        ],
        'blogs.index' => [
            'kids.classes',
            'quran.tajweed',
            'quran.memorization',
            'home.pricing',
            'home.faq',
            'home.contact.us',
        ],
    ],
];
