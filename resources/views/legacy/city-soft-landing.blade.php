@extends('main')

@section('title', 'Online Quran Classes in ' . $cityName . ' | Free Trial')
@section('meta_description', 'Book a free online Quran trial with Rooh Ul Quran Academy. Live teachers for kids and adults in ' . $cityName . ', ' . $countryName . '.')
@section('canonical', url('/contact-us'))
@section('meta')
    <meta name="robots" content="noindex, follow">
@endsection

@section('content')
<section class="py-5" style="background:#f6f3ee;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center mb-4">
                <p class="mb-2" style="color:#FF5528;font-weight:700;letter-spacing:.04em;text-transform:uppercase;font-size:.85rem;">
                    Online Quran Academy
                </p>
                <h1 class="fw-bold mb-3" style="color:#122F2A;">
                    Online Quran Classes for Families in {{ $cityName }}
                </h1>
                <p class="mb-0 mx-auto" style="max-width:640px;color:#5f6670;line-height:1.75;">
                    Book a free online Quran trial for your family in {{ $cityName }}.
                    Live one-to-one classes for kids and adults, with flexible timings for {{ $countryName }} and worldwide.
                </p>
            </div>
        </div>

        <div class="row g-4 justify-content-center align-items-stretch">
            <div class="col-lg-5">
                <div class="h-100 p-4 rounded-4 bg-white border" style="border-color:rgba(18,47,42,.08)!important;">
                    <h2 class="h5 fw-bold mb-3" style="color:#122F2A;">What you get</h2>
                    <ul class="mb-4" style="color:#5f6670;line-height:1.9;padding-left:1.1rem;">
                        <li>3-day free trial class</li>
                        <li>Tajweed, Qaida, Hifz &amp; kids classes</li>
                        <li>One-to-one live teachers online</li>
                        <li>Flexible timings for Europe &amp; worldwide</li>
                    </ul>
                    <div class="d-flex flex-wrap gap-2">
                        <a href="{{ route('home.contact.us') }}" class="btn btn-dark">Contact page</a>
                        <a href="{{ route('home.pricing') }}" class="btn btn-outline-dark">View pricing</a>
                        <a href="https://wa.me/19172036999?text={{ rawurlencode('Assalamu Alaikum, I want a free trial Quran class. I found your page for '.$cityName.', '.$countryName.'.') }}"
                           class="btn btn-success" target="_blank" rel="noopener">WhatsApp</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="h-100 p-4 rounded-4 bg-white border" style="border-color:rgba(18,47,42,.08)!important;">
                    <h2 class="h5 fw-bold mb-3" style="color:#122F2A;">Book your free trial</h2>
                    <form id="legacy-city-form" method="post" action="{{ route('trial-class.store') }}">
                        @csrf
                        <input type="text" name="website" class="d-none" tabindex="-1" autocomplete="off">
                        <input type="hidden" name="form_started_at" value="{{ time() }}">
                        @include('layouts.partials.public-form-fields')
                        @include('layouts.partials.form-turnstile')
                        <button type="submit" id="legacy-city-submit" class="btn btn-dark w-100 py-2 mt-1">
                            GET FREE TRIAL
                        </button>
                    </form>
                    <p class="small text-muted mt-3 mb-0">
                        Source tracked as: <code>{{ request()->path() }}</code>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if(env('TURNSTILE_SITE_KEY'))
<script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
@endif
<script>
(function() {
    function initLegacyForm() {
        var form = document.getElementById('legacy-city-form');
        var submitBtn = document.getElementById('legacy-city-submit');
        if (!form || !submitBtn) return;

        form.addEventListener('submit', function(e) {
            e.preventDefault();
            var btnText = submitBtn.textContent;
            submitBtn.disabled = true;
            submitBtn.textContent = 'Sending...';

            var userMsg = form.querySelector('textarea[name="message"]');
            var tracking = 'Legacy page: {{ $cityName }}, {{ $countryName }} ({{ request()->path() }})';
            if (userMsg) {
                userMsg.value = (userMsg.value.trim() ? userMsg.value.trim() + ' | ' : '') + tracking;
            }

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
                if (typeof window.trackLeadConversion === 'function') window.trackLeadConversion();
                if (typeof Swal !== 'undefined') {
                    Swal.fire('JazakAllah', data.message || 'We received your query. InshAllah we will contact you soon.', 'success');
                } else {
                    alert(data.message || 'Thank you! We will contact you soon.');
                }
                form.reset();
                var startedAtField = form.querySelector('input[name="form_started_at"]');
                if (startedAtField) startedAtField.value = Math.floor(Date.now() / 1000);
                var turnstileWidget = form.querySelector('.cf-turnstile');
                if (window.turnstile && turnstileWidget) window.turnstile.reset(turnstileWidget);
            })
            .catch(function(err) {
                var message = 'Something went wrong. Please try again or call us.';
                if (err.status === 422 && err.data && err.data.errors) {
                    message = Object.values(err.data.errors).flat().join('\n');
                } else if (err.data && err.data.message) {
                    message = err.data.message;
                }
                if (typeof Swal !== 'undefined') Swal.fire('Error', message, 'error');
                else alert(message);
            })
            .finally(function() {
                submitBtn.disabled = false;
                submitBtn.textContent = btnText;
            });
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initLegacyForm);
    } else {
        initLegacyForm();
    }
})();
</script>
@include('layouts.partials.trial-form-scripts')
@endsection
