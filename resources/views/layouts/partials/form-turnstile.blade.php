@if(env('TURNSTILE_SITE_KEY'))
    <div class="mb-3">
        <div class="cf-turnstile" data-sitekey="{{ env('TURNSTILE_SITE_KEY') }}"></div>
    </div>
@endif
