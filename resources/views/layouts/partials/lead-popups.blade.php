@php
    $waNumber = preg_replace('/\D+/', '', (string) config('lead-popups.whatsapp', '923344066429'));
    $coursePaths = collect([
        'quran.tajweed',
        'quran.recitation',
        'quran.memorization',
        'quran.tafseer',
        'beginner.classes',
        'kids.classes',
    ])->map(fn ($name) => rtrim(parse_url(route($name), PHP_URL_PATH), '/') ?: '/')->values();
    $leadConfig = [
        'storeUrl' => route('trial-class.store'),
        'csrf' => csrf_token(),
        'whatsapp' => $waNumber,
        'popupDelay' => (int) config('lead-popups.dwell_delay_ms', 15000),
        'dwellDelay' => (int) config('lead-popups.dwell_delay_ms', 15000),
        'pageDelay' => (int) config('lead-popups.page_delay_ms', 15000),
        'pricingPath' => rtrim(parse_url(route('home.pricing'), PHP_URL_PATH), '/') ?: '/pricing',
        'contactPath' => rtrim(parse_url(route('home.contact.us'), PHP_URL_PATH), '/') ?: '/contact-us',
        'coursePaths' => $coursePaths,
        'turnstileKey' => env('TURNSTILE_SITE_KEY'),
    ];
@endphp

<style>
    .rq-lead-btn-wa.rq-lead-btn-wa-highlight {
        display: inline-flex !important;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        width: 100%;
        border: 0;
        border-radius: 999px;
        padding: 0.95rem 1.2rem;
        font-weight: 800;
        font-size: 1.05rem;
        background: #25D366 !important;
        color: #fff !important;
        box-shadow: 0 8px 22px rgba(37, 211, 102, 0.5);
        animation: rqWaPulse 1.7s ease-in-out infinite;
        cursor: pointer;
    }
    .rq-lead-dwell-aside .rq-lead-btn-wa-highlight {
        margin-top: 1.15rem;
    }
    .rq-lead-courses .rq-lead-btn-wa-highlight {
        margin: 0.85rem 0 0.35rem;
    }
    @keyframes rqWaPulse {
        0%, 100% { box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.55); transform: scale(1); }
        50% { box-shadow: 0 0 0 10px rgba(37, 211, 102, 0); transform: scale(1.015); }
    }
</style>

<div class="rq-lead-root" id="rq-lead-root" hidden>
    <div class="rq-lead-overlay" data-rq-close></div>

    {{-- 1) Stay 15 seconds — trial form --}}
    <div class="rq-lead-modal rq-lead-dwell" id="rq-lead-dwell" role="dialog" aria-modal="true" aria-labelledby="rq-lead-dwell-title" hidden>
        <button type="button" class="rq-lead-close" data-rq-close aria-label="Close">&times;</button>
        <div class="rq-lead-dwell-grid">
            <div class="rq-lead-dwell-aside">
                <span class="rq-lead-kicker rq-lead-kicker-light">Free Trial Class</span>
                <h2 id="rq-lead-dwell-title">Start learning Quran today</h2>
                <p>One-on-one class with a certified teacher. Leave your number and we will contact you on WhatsApp.</p>
                <ul>
                    <li>Flexible timing for kids &amp; adults</li>
                    <li>Tajweed, Qaida, Hifz &amp; Tafseer</li>
                    <li>No payment for the trial class</li>
                </ul>
                <button type="button" class="rq-lead-btn rq-lead-btn-wa rq-lead-btn-wa-highlight" data-wa="Assalamu Alaikum, I want to book a free trial Quran class.">
                    <i class="bi bi-whatsapp"></i> Chat on WhatsApp
                </button>
            </div>
            <div class="rq-lead-dwell-form">
                <p class="rq-lead-or">or leave your number</p>
                <form class="rq-lead-form" data-source="Free trial popup">
                    @csrf
                    <input type="text" name="website" class="d-none" tabindex="-1" autocomplete="off">
                    <input type="hidden" name="form_started_at" value="{{ time() }}">
                    <input type="hidden" name="message" value="Free trial class request from website popup">
                    <label>Full name</label>
                    <input type="text" name="name" placeholder="Your name" required>
                    <label>YourWhatsApp number</label>
                    <input type="tel" name="phone" placeholder="Please enter your WhatsApp number" required>
                    <div class="rq-lead-turnstile"></div>
                    <button type="submit" class="rq-lead-btn rq-lead-btn-primary">
                        <span class="rq-lead-btn-text">Book my free class</span>
                        <span class="rq-lead-btn-loading d-none">Please wait…</span>
                    </button>
                </form>
            </div>
        </div>
    </div>

    {{-- 2) Courses page — question picker --}}
    <div class="rq-lead-modal rq-lead-courses" id="rq-lead-courses" role="dialog" aria-modal="true" aria-labelledby="rq-lead-courses-title" hidden>
        <button type="button" class="rq-lead-close" data-rq-close aria-label="Close">&times;</button>
        <div class="rq-lead-courses-inner">
            <span class="rq-lead-kicker">Quick question</span>
            <h2 id="rq-lead-courses-title">Which course do you want to join?</h2>
            <p>Chat with us on WhatsApp and we will connect you with a teacher.</p>
            <button type="button" class="rq-lead-btn rq-lead-btn-wa rq-lead-btn-wa-highlight" data-wa="Assalamu Alaikum, I want to join an online Quran course. Please share details.">
                <i class="bi bi-whatsapp"></i> Chat on WhatsApp
            </button>
            <p class="rq-lead-or">or pick a course</p>
            <div class="rq-lead-choices">
                <button type="button" class="rq-lead-choice" data-wa="Assalamu Alaikum, I want to join Quran Reading with Tajweed.">
                    <i class="bi bi-book"></i>
                    <strong>Tajweed</strong>
                    <span>Quran reading</span>
                </button>
                <button type="button" class="rq-lead-choice" data-wa="Assalamu Alaikum, I want to join Noorani Qaida classes.">
                    <i class="bi bi-pencil"></i>
                    <strong>Noorani Qaida</strong>
                    <span>For beginners</span>
                </button>
                <button type="button" class="rq-lead-choice" data-wa="Assalamu Alaikum, I want to join Hifz / Quran memorization classes.">
                    <i class="bi bi-stars"></i>
                    <strong>Hifz</strong>
                    <span>Memorization</span>
                </button>
                <button type="button" class="rq-lead-choice" data-wa="Assalamu Alaikum, I want to join Tafseer classes.">
                    <i class="bi bi-lightbulb"></i>
                    <strong>Tafseer</strong>
                    <span>Meaning &amp; understanding</span>
                </button>
            </div>
            <p class="rq-lead-or">or leave your number for a callback</p>
            <form class="rq-lead-form rq-lead-form-inline" data-source="Courses popup">
                @csrf
                <input type="text" name="website" class="d-none" tabindex="-1" autocomplete="off">
                <input type="hidden" name="form_started_at" value="{{ time() }}">
                <input type="hidden" name="message" value="Course enquiry from website popup">
                <input type="text" name="name" placeholder="Your name" required>
                <input type="tel" name="phone" placeholder="Please enter your WhatsApp number" required>
                <div class="rq-lead-turnstile"></div>
                <button type="submit" class="rq-lead-btn rq-lead-btn-primary">
                    <span class="rq-lead-btn-text">Request callback</span>
                    <span class="rq-lead-btn-loading d-none">Please wait…</span>
                </button>
            </form>
        </div>
    </div>

    {{-- 3) Pricing page — fee info + contact --}}
    <div class="rq-lead-modal rq-lead-pricing" id="rq-lead-pricing" role="dialog" aria-modal="true" aria-labelledby="rq-lead-pricing-title" hidden>
        <button type="button" class="rq-lead-close rq-lead-close-light" data-rq-close aria-label="Close">&times;</button>
        <div class="rq-lead-pricing-banner">
            <span class="rq-lead-kicker rq-lead-kicker-light">Fee details</span>
            <h2 id="rq-lead-pricing-title">Need more information about the fee?</h2>
            <p>Contact us and we will explain the class fee, timing, and the right package for you.</p>
            <button type="button" class="rq-lead-btn rq-lead-btn-wa rq-lead-btn-wa-highlight" data-wa="Assalamu Alaikum, I want more information about the fee for online Quran classes.">
                <i class="bi bi-whatsapp"></i> Contact us on WhatsApp
            </button>
        </div>
        <div class="rq-lead-pricing-form">
            <p>Or leave your number — we will contact you with fee details.</p>
            <form class="rq-lead-form rq-lead-form-inline" data-source="Pricing popup">
                @csrf
                <input type="text" name="website" class="d-none" tabindex="-1" autocomplete="off">
                <input type="hidden" name="form_started_at" value="{{ time() }}">
                <input type="hidden" name="message" value="Fee information enquiry from pricing popup">
                <input type="text" name="name" placeholder="Your name" required>
                <input type="tel" name="phone" placeholder="Please enter your WhatsApp number" required>
                <div class="rq-lead-turnstile"></div>
                <button type="submit" class="rq-lead-btn rq-lead-btn-primary">
                    <span class="rq-lead-btn-text">Contact me about fees</span>
                    <span class="rq-lead-btn-loading d-none">Please wait…</span>
                </button>
            </form>
        </div>
    </div>
</div>

<script>
    window.RQ_LEAD_POPUPS = @json($leadConfig);
</script>
<script defer src="{{ asset('assets/js/lead-popups.js') }}"></script>
