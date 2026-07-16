@extends('main')
@section('title', 'Contact Rooh Ul Quran Academy')
@section('meta_description' , 'Contact Rooh Ul Quran Academy for online Quran classes — reach our team for enrollment,
support, or free trial details')
@section('meta_keywords' , 'contact rooh ul quran, quran academy contact, online quran classes support, quran course
inquiry, contact quran teachers, quran academy help, free trial quran ')


<style>
    #contact.contact-refined {
        background: #ffffff;
        padding: 80px 0 70px;
    }

    #contact.contact-refined .contact-eyebrow {
        display: inline-block;
        color: #FF5528;
        font-weight: 700;
        font-size: 0.9rem;
        letter-spacing: 0.06em;
        text-transform: uppercase;
        margin-bottom: 0.6rem;
    }

    #contact.contact-refined .contact-title {
        color: #122F2A;
        font-weight: 800;
        font-size: clamp(1.6rem, 2.4vw, 2.1rem);
        line-height: 1.25;
        margin-bottom: 0.85rem;
    }

    #contact.contact-refined .contact-lead {
        color: #5f6670;
        line-height: 1.75;
        margin-bottom: 1.75rem;
    }

    #contact.contact-refined .info-card {
        background: #F6F3EE;
        border: 1px solid rgba(18, 47, 42, 0.06);
        border-radius: 18px;
        padding: 1.5rem;
        height: 100%;
    }

    #contact.contact-refined .info-item {
        display: flex;
        align-items: flex-start;
        gap: 1rem;
        padding: 1rem 0;
    }

    #contact.contact-refined .info-item + .info-item {
        border-top: 1px solid rgba(18, 47, 42, 0.08);
    }

    #contact.contact-refined .info-icon {
        width: 52px;
        height: 52px;
        border-radius: 14px;
        background: #122F2A;
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.25rem;
        flex-shrink: 0;
    }

    #contact.contact-refined .info-item small {
        display: block;
        color: #6b7280;
        margin-bottom: 0.25rem;
    }

    #contact.contact-refined .info-item a,
    #contact.contact-refined .info-item strong {
        color: #122F2A;
        font-weight: 700;
        text-decoration: none;
        line-height: 1.45;
    }

    #contact.contact-refined .info-item a:hover {
        color: #FF5528;
    }

    #contact.contact-refined .form-panel {
        background: #fff;
        border: 1px solid rgba(18, 47, 42, 0.08);
        border-radius: 18px;
        padding: 2rem 1.75rem;
        box-shadow: 0 16px 40px rgba(18, 47, 42, 0.08);
        height: 100%;
    }

    #contact.contact-refined .form-panel .form-control,
    #contact.contact-refined .form-panel .form-select {
        border-radius: 10px;
        border-color: rgba(18, 47, 42, 0.12);
        padding: 0.7rem 0.9rem;
    }

    #contact.contact-refined .form-panel .form-control:focus,
    #contact.contact-refined .form-panel .form-select:focus {
        border-color: #1A685B;
        box-shadow: 0 0 0 0.2rem rgba(26, 104, 91, 0.15);
    }

    #get-in-touch {
        background-color: #FF5528 !important;
        border: none !important;
        border-radius: 50px;
        font-weight: 700;
        letter-spacing: 0.03em;
        padding: 0.75rem 1.75rem !important;
        transition: background-color 0.2s ease, transform 0.2s ease;
    }

    #get-in-touch:hover {
        background-color: #e04a22 !important;
        transform: translateY(-2px);
    }

    #contact.contact-refined .map-wrap {
        margin-top: 3.5rem;
    }

    #contact.contact-refined .map-wrap .map-heading {
        text-align: center;
        margin-bottom: 1.25rem;
    }

    .map-responsive {
        position: relative;
        padding-bottom: 45%;
        height: 0;
        overflow: hidden;
        border-radius: 18px;
        box-shadow: 0 18px 40px rgba(18, 47, 42, 0.12);
        border: 1px solid rgba(18, 47, 42, 0.06);
    }

    .map-responsive iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 0;
    }

    @media (max-width: 991px) {
        #contact.contact-refined {
            padding: 60px 0 50px;
        }

        #contact.contact-refined .form-panel {
            padding: 1.5rem 1.25rem;
        }

        .map-responsive {
            padding-bottom: 65%;
        }
    }
</style>
@section('content')
{{-- Page banner (same as About / Teachers) --}}
<section id="hero" class="hero section tauheed-page-banner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-10 col-sm-12 mb-2 mb-md-0" data-aos="fade-up" data-aos-delay="100">
                <div class="tauheed-banner-panel">
                    <h1 class="fw-bold mb-3" style="font-size: 2.4rem !important">Contact <span>Us</span></h1>
                    <p style="font-size: larger" class="col-lg-10 col-md-12 col-sm-12">
                        We’re here to help! Whether you have questions about our Quran courses, need
                        assistance with enrollment, or want to share feedback, feel free to reach out.
                    </p>
                    <a href="#contact" class="btn-get-started text-bold">Get In Touch</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="contact-refined">
    <div class="container">
        <div class="row gy-4 align-items-stretch">
            <!-- Left Side Contact Info -->
            <div class="col-lg-5" data-aos="fade-right">
                <span class="contact-eyebrow">Get In Touch</span>
                <h2 class="contact-title">Contact Us Now</h2>
                <p class="contact-lead">We’re here to help! Whether you have questions about our Quran courses, need
                    assistance with enrollment, or want to share feedback, feel free to reach out.</p>

                <div class="info-card">
                    <div class="info-item">
                        <div class="info-icon"><i class="bi bi-telephone-fill"></i></div>
                        <div>
                            <small>Call us or whatsapp Anytime</small>
                            <a href="tel:+923344066429">+92-334-4066429</a>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon"><i class="bi bi-envelope-fill"></i></div>
                        <div>
                            <small>E-mail us Anytime</small>
                            <a href="mailto:info@roohulquranacademy.com">info@roohulquranacademy.com</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side Contact Form -->
            <div class="col-lg-7" data-aos="fade-left">
                <div class="form-panel">
                    <span class="contact-eyebrow">Contact Us</span>
                    <h2 class="contact-title">Get in Touch with Us</h2>
                    <form id="trial-form" method="post" action="{{ route('trial-class.store') }}">
                        @csrf
                        <input type="text" name="website" class="d-none" tabindex="-1" autocomplete="off">
                        <input type="hidden" name="form_started_at" value="{{ time() }}">
                        <div class="row g-3">
                            <div class="col-12">
                                @include('layouts.partials.public-form-fields')
                                @include('layouts.partials.form-turnstile')
                            </div>
                            <div class="col-12">
                                <button type="submit" id="get-in-touch" class="btn btn-dark px-4 mt-2 py-2">GET IN
                                    TOUCH</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <script type="application/ld+json">
        {
  "@context": "https://schema.org",
  "@type": "ContactPage",
  "url": "https://roohulquranacademy.com/contact-us",
  "name": "Contact Rooh Ul Quran Academy",
  "description": "Get in touch with Rooh Ul Quran Academy for inquiries about online Quran classes, enrollment, and support. Contact us via phone, WhatsApp, or email.",
  "publisher": {
    "@type": "EducationalOrganization",
    "name": "Rooh Ul Quran Academy",
    "url": "https://roohulquranacademy.com"
  },
  "contactPoint": [
    {
      "@type": "ContactPoint",
      "telephone": "+92-334-4066429",
      "contactType": "Customer Support",
      "availableLanguage": ["English", "Urdu"]
    },
    {
      "@type": "ContactPoint",
      "email": "info@roohulquranacademy.com",
      "contactType": "Customer Support",
      "availableLanguage": ["English", "Urdu"]
    }
  ],
  "sameAs": [
    "https://www.facebook.com/roohulquranacademy",
    "https://wa.me/923344066429"
  ]
}
    </script>

</section>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if(env('TURNSTILE_SITE_KEY'))
<script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
@endif
<script>
(function() {
    function initContactForm() {
        var form = document.getElementById('trial-form');
        var submitBtn = document.getElementById('get-in-touch');
        if (!form || !submitBtn) return;

        form.addEventListener('submit', function(e) {
            e.preventDefault();

            var btnText = submitBtn.textContent;
            submitBtn.disabled = true;
            submitBtn.textContent = 'Sending...';

            var formData = new FormData(form);

            fetch('{{ route('trial-class.store') }}', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json'
                },
                credentials: 'same-origin'
            })
            .then(function(response) {
                return response.json().then(function(data) {
                    if (!response.ok) throw { status: response.status, data: data };
                    return data;
                });
            })
            .then(function(data) {
                if (typeof Swal !== 'undefined') {
                    Swal.fire('JazakAllah', data.message || 'We received your query. InshAllah we will contact you soon.', 'success');
                } else {
                    alert(data.message || 'Thank you! We will contact you soon.');
                }
                form.reset();
                var startedAtField = form.querySelector('input[name="form_started_at"]');
                if (startedAtField) {
                    startedAtField.value = Math.floor(Date.now() / 1000);
                }
                var turnstileWidget = form.querySelector('.cf-turnstile');
                if (window.turnstile && turnstileWidget) {
                    window.turnstile.reset(turnstileWidget);
                }
            })
            .catch(function(err) {
                var message = 'Something went wrong. Please try again or call us.';
                if (err.status === 422 && err.data && err.data.errors) {
                    message = Object.values(err.data.errors).flat().join('\n');
                } else if (err.data && err.data.message) {
                    message = err.data.message;
                }
                if (typeof Swal !== 'undefined') {
                    Swal.fire('Error', message, 'error');
                } else {
                    alert(message);
                }
            })
            .finally(function() {
                submitBtn.disabled = false;
                submitBtn.textContent = btnText;
            });
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initContactForm);
    } else {
        initContactForm();
    }
})();
</script>
@endsection
