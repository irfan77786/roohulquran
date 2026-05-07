@extends('main')
@section('title', 'Contact Rooh Ul Quran Academy')
@section('meta_description' , 'Contact Rooh Ul Quran Academy for online Quran classes — reach our team for enrollment,
support, or free trial details')
@section('meta_keywords' , 'contact rooh ul quran, quran academy contact, online quran classes support, quran course
inquiry, contact quran teachers, quran academy help, free trial quran ')


<style>
    #get-in-touch {
        background: linear-gradient(120deg, #44137c, #2bab6d);
        /* Gradient from #44137c to #2bab6d */

    }

    #get-in-touch:hover {
        background: linear-gradient(120deg, #2bab6d, #44137c);
        /* Gradient from #2bab6d to #44137c */
    }

    .map-responsive {
        position: relative;
        padding-bottom: 56.25%;
        /* 16:9 ratio */
        height: 0;
        overflow: hidden;
        border-radius: 8px;
        /* Optional: rounded corners */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        /* Optional: slight shadow */
        margin-top: 2rem;
    }

    .map-responsive iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 0;
    }
</style>
@section('content')
<!-- Contact Section -->
<section id="contact" class="py-5 bg-light">
    <div class="container">
        <div class="row gy-5">
            <!-- Left Side Contact Info -->
            <div class="col-lg-5">
                <h6 class="text-danger mb-2">Get In Touch</h6>
                <h1 class="fw-bold"><strong>Contact</strong> Us <span class="fw-normal">Now</span></h1>
                <p class="text-muted">We’re here to help! Whether you have questions about our Quran courses, need
                    assistance with enrollment, or want to share feedback, feel free to reach out.</p>

                <div class="bg-white p-4 rounded shadow-sm">
                    <div class="d-flex align-items-center mb-4">
                        <div class="me-3">
                            <i class="bi bi-telephone-fill fs-2 text-dark"></i>
                        </div>
                        <div>
                            <small class="text-muted">Call us or whatsapp Anytime</small><br>
                            <strong class="text-dark">+92-344-6781539</strong><br>
                            <strong class="text-dark">+92-334-4066429</strong>
                        </div>
                    </div>

                    <hr>

                    <div class="d-flex align-items-center mb-4">
                        <div class="me-3">
                            <i class="bi bi-envelope-fill fs-2 text-dark"></i>
                        </div>
                        <div>
                            <small class="text-muted">E-mail us Anytime</small><br>
                            <strong class="text-dark">info@roohulquranacademy.com</strong>
                        </div>
                    </div>

                    <hr>
                    {{--
                    <div class="d-flex align-items-center">
                        <div class="me-3">
                            <i class="bi bi-geo-alt-fill fs-2 text-dark"></i>
                        </div>
                        <div>
                            <small class="text-muted">Our Locations</small><br>
                            <strong class="text-dark">Hatton Garden, London, United Kingdom</strong>
                        </div>
                    </div> --}}
                </div>
            </div>

            <!-- Right Side Contact Form -->
            <div class="col-lg-7">
                <h6 class="text-danger">Contact Us</h6>
                <h2 class="fw-bold">Get in <strong>Touch</strong> with Us</h2>
                <form id="trial-form" method="post" action="{{ route('trial-class.store') }}">
                    @csrf
                    <input type="text" name="website" class="d-none" tabindex="-1" autocomplete="off">
                    <input type="hidden" name="form_started_at" value="{{ time() }}">
                    @if(env('TURNSTILE_SITE_KEY'))
                        <div class="mb-3">
                            <div class="cf-turnstile" data-sitekey="{{ env('TURNSTILE_SITE_KEY') }}"></div>
                        </div>
                    @endif
                    <div class="row g-3">
                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                        </div>
                        <div class="col-md-6">
                            <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="phone" class="form-control" placeholder="Your Phone Number"
                                required>
                        </div>
                        <div class="mb-3">
                            <select class="form-select rounded-pill" id="country" name="country" required>
                                <option value="" disabled selected>Select your country</option>
                                @foreach(config('countries.countries') as $country)
                                <option value="{{ $country }}">{{ $country }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12">
                            <textarea name="message" class="form-control" rows="4"
                                placeholder="Add Your Notes"></textarea>

                            <div class="col-12">
                                <button type="submit" id="get-in-touch" class="btn btn-dark px-4 mt-4 py-2">GET IN
                                    TOUCH</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>

        <!-- Responsive Google Map -->
        <div class="map-responsive mt-5">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d425.38244067771757!2d74.31309193330307!3d31.467548682519304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391907f295d971db%3A0x3bd96ab23fa64997!2sRoohul%20Quran%20Online%20Academy!5e0!3m2!1sen!2s!4v1757942220971!5m2!1sen!2s"
                frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
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
      "telephone": "+92-344-6781539",
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