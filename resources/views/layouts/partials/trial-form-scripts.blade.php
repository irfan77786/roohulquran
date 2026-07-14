@if(env('TURNSTILE_SITE_KEY'))
<script>
(function () {
    var forms = document.querySelectorAll('#trial-form, #trial-form-submit');
    if (!forms.length || !('IntersectionObserver' in window)) return;
    var loaded = false;
    function loadTurnstile() {
        if (loaded) return;
        loaded = true;
        var s = document.createElement('script');
        s.src = 'https://challenges.cloudflare.com/turnstile/v0/api.js';
        s.async = true;
        s.defer = true;
        document.head.appendChild(s);
    }
    var obs = new IntersectionObserver(function (entries) {
        if (entries.some(function (e) { return e.isIntersecting; })) {
            obs.disconnect();
            loadTurnstile();
        }
    }, { rootMargin: '100px' });
    forms.forEach(function (f) { obs.observe(f); });
})();
</script>
@endif
<script>
    (function(){
        var swalPromise = null;
        function loadSwal() {
            if (window.Swal) return Promise.resolve(window.Swal);
            if (swalPromise) return swalPromise;
            swalPromise = new Promise(function (resolve, reject) {
                var css = document.createElement('link');
                css.rel = 'stylesheet';
                css.href = '{{ asset('assets/vendor/sweetalert2/sweetalert2.min.css') }}';
                document.head.appendChild(css);
                var s = document.createElement('script');
                s.src = '{{ asset('assets/vendor/sweetalert2/sweetalert2.min.js') }}';
                s.onload = function () { resolve(window.Swal); };
                s.onerror = reject;
                document.head.appendChild(s);
            });
            return swalPromise;
        }

        var csrfMeta = document.querySelector('meta[name="csrf-token"]');
        if (!csrfMeta) return;
        var csrf = csrfMeta.getAttribute('content');

        function handleSubmit(formId) {
            var form = document.getElementById(formId);
            if (!form || form.dataset.trialBound) return;
            form.dataset.trialBound = '1';
            form.addEventListener('submit', async function(e){
                e.preventDefault();
                var submitBtn = this.querySelector('#submit-btn');
                var btnText = this.querySelector('#btn-text');
                var btnLoading = this.querySelector('#btn-loading');
                if (btnText) btnText.classList.add('d-none');
                if (btnLoading) btnLoading.classList.remove('d-none');
                if (submitBtn) submitBtn.disabled = true;

                try {
                    var Swal = await loadSwal();
                    var formData = new FormData(this);
                    var response = await fetch('{{ route('trial-class.store') }}', {
                        method: 'POST',
                        headers: { 'X-CSRF-TOKEN': csrf },
                        body: new URLSearchParams([...formData])
                    });
                    if (!response.ok) throw response;
                    var data = await response.json();
                    Swal.fire('JazakAllah', data.message || 'Submitted successfully', 'success');
                    this.reset();
                    var startedAtField = this.querySelector('input[name="form_started_at"]');
                    if (startedAtField) startedAtField.value = Math.floor(Date.now() / 1000);
                    var turnstileWidget = this.querySelector('.cf-turnstile');
                    if (window.turnstile && turnstileWidget) turnstile.reset(turnstileWidget);
                } catch (err) {
                    var message = 'Something went wrong.';
                    try {
                        var json = await err.json();
                        if (json && json.errors) {
                            message = Object.values(json.errors).flat().join('\n');
                        }
                    } catch(_) {}
                    loadSwal().then(function (Swal) {
                        Swal.fire('Error', message, 'error');
                    });
                } finally {
                    if (btnText) btnText.classList.remove('d-none');
                    if (btnLoading) btnLoading.classList.add('d-none');
                    if (submitBtn) submitBtn.disabled = false;
                }
            });
        }

        handleSubmit('trial-form');
        handleSubmit('trial-form-submit');
    })();
</script>
