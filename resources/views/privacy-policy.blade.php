@extends('main')
@section('title', 'Privacy Policy | Rooh Ul Quran Academy')
@section('meta_description', 'Privacy Policy for Rooh Ul Quran Academy. Learn what personal data we collect from trial and contact forms, why we use it, who can see it, how long we keep it, and how to request deletion.')
@section('meta_keywords', 'privacy policy, rooh ul quran academy, data protection, trial class privacy, whatsapp privacy')

@section('content')
<style>
    .privacy-page {
        padding: 140px 0 72px;
        background:
            radial-gradient(circle at top right, rgba(26, 104, 91, 0.08), transparent 42%),
            linear-gradient(180deg, #f7faf9 0%, #ffffff 55%);
    }

    .privacy-card {
        max-width: 860px;
        margin: 0 auto;
        background: #ffffff;
        border: 1px solid rgba(18, 47, 42, 0.08);
        border-radius: 18px;
        padding: 36px 28px;
        box-shadow: 0 12px 36px rgba(18, 47, 42, 0.06);
    }

    .privacy-card h1 {
        color: #122F2A;
        font-weight: 800;
        font-size: clamp(1.7rem, 3vw, 2.2rem);
        margin-bottom: 10px;
    }

    .privacy-updated {
        color: #797E88;
        font-size: 0.92rem;
        margin-bottom: 22px;
    }

    .privacy-card h2 {
        color: #122F2A;
        font-weight: 800;
        font-size: 1.15rem;
        margin: 28px 0 10px;
    }

    .privacy-card p,
    .privacy-card li {
        color: #444444;
        font-size: 1rem;
        line-height: 1.75;
    }

    .privacy-card ul {
        padding-left: 1.2rem;
        margin-bottom: 0;
    }

    .privacy-card a {
        color: #1A685B;
        font-weight: 700;
        text-decoration: none;
    }

    .privacy-card a:hover {
        color: #FF5528;
    }

    @media (max-width: 767.98px) {
        .privacy-page {
            padding: 120px 0 48px;
        }

        .privacy-card {
            padding: 26px 18px;
            border-radius: 14px;
        }
    }
</style>

<section class="privacy-page">
    <div class="container">
        <article class="privacy-card">
            <h1>Privacy Policy</h1>
            <p class="privacy-updated">Last updated: {{ now()->format('F j, Y') }}</p>

            <p>
                This Privacy Policy explains how <strong>Rooh Ul Quran Academy</strong>
                (“we”, “us”, or “our”) collects and uses personal information when you use
                <a href="https://roohulquranacademy.com">roohulquranacademy.com</a>, including when you
                request a free trial class or contact us by form or WhatsApp.
            </p>

            <h2>1. What we collect</h2>
            <p>When you submit a trial or contact form, we may collect:</p>
            <ul>
                <li>Your full name</li>
                <li>Your WhatsApp / phone number</li>
                <li>Any message you choose to send (for example preferred time, student age, or course interest)</li>
            </ul>
            <p>
                We may also receive basic technical details needed to run the website securely
                (such as IP address for spam protection and approximate country).
            </p>

            <h2>2. Why we collect it</h2>
            <p>We use this information only to:</p>
            <ul>
                <li>Arrange and schedule free trial classes</li>
                <li>Respond to your inquiry about online Quran courses</li>
                <li>Contact you on WhatsApp or phone about class timing and enrollment</li>
                <li>Improve our support and prevent spam or abuse of our forms</li>
            </ul>
            <p>We do not sell your personal information.</p>

            <h2>3. Who can see your information</h2>
            <p>
                Your information is visible only to authorized Rooh Ul Quran Academy staff
                who handle inquiries, scheduling, and student support. Service providers that help us
                operate the website (for example email delivery or form spam protection such as
                Cloudflare Turnstile) may process data only as needed to provide those services.
            </p>

            <h2>4. How long we keep it</h2>
            <p>
                We keep inquiry and trial-request details for as long as needed to follow up with you
                and manage enrollment—typically up to <strong>24 months</strong> from your last contact,
                unless a longer period is required for an active student relationship or a legal obligation.
                After that, we delete or anonymize the data when it is no longer needed.
            </p>

            <h2>5. How to ask for deletion</h2>
            <p>
                You can ask us to delete your personal information at any time. Send a request by email to
                <a href="mailto:info@roohulquranacademy.com">info@roohulquranacademy.com</a>
                or WhatsApp us at
                <a href="https://wa.me/19172036999" target="_blank" rel="noopener">+1 (917) 203-6999</a>
                (USA) or
                <a href="https://wa.me/923344066429" target="_blank" rel="noopener">+92-334-4066429</a>
                (Pakistan). Please include the name and WhatsApp number you used so we can find your record.
                We will process deletion requests as soon as reasonably possible.
            </p>

            <h2>6. Contact</h2>
            <p>
                Questions about this Privacy Policy?
                Email <a href="mailto:info@roohulquranacademy.com">info@roohulquranacademy.com</a>
                or visit our <a href="{{ route('home.contact.us') }}">Contact Us</a> page.
            </p>
        </article>
    </div>
</section>
@endsection
@endsection
