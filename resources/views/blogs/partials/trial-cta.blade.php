@php
    $ctaWhatsapp = 'https://wa.me/923344066429?text=' . rawurlencode('Assalamu Alaikum, I want to book a 3-day free trial Quran class.');
@endphp

<section class="rq-blog-cta">
    <div class="rq-blog-cta-inner">
        <span class="rq-blog-cta-kicker">3-day free trial</span>
        <h2>Start learning Quran with a certified teacher</h2>
        <p>Rooh Ul Quran Academy offers one-on-one online classes for kids and adults — Tajweed, Noorani Qaida, Hifz, and Tafseer. Try 3 days free, then choose a time that fits your family.</p>
        <div class="rq-blog-cta-actions">
            <a href="{{ route('home.contact.us') }}" class="rq-blog-cta-btn rq-blog-cta-btn-trial">
                <i class="bi bi-calendar-check-fill"></i>
                <span>Book a free trial</span>
            </a>
            <a href="{{ $ctaWhatsapp }}" class="rq-blog-cta-btn rq-blog-cta-btn-wa" target="_blank" rel="noopener">
                <i class="bi bi-whatsapp"></i>
                <span>Chat on WhatsApp</span>
            </a>
        </div>
    </div>
</section>
