(function () {
    var cfg = window.RQ_LEAD_POPUPS;
    if (!cfg) return;

    var params = new URLSearchParams(window.location.search);
    if (params.get('nopopup') === '1') return;

    var root = document.getElementById('rq-lead-root');
    if (!root) return;

    var path = (window.location.pathname.replace(/\/+$/, '') || '/');
    var overlay = root.querySelector('.rq-lead-overlay');
    var openKey = null;
    var turnstileLoaded = false;

    function captured() {
        try { return localStorage.getItem('rq_lead_captured') === '1'; } catch (e) { return false; }
    }

    function markCaptured() {
        try { localStorage.setItem('rq_lead_captured', '1'); } catch (e) {}
    }

    function shown(key) {
        try { return sessionStorage.getItem('rq_popup_' + key) === '1'; } catch (e) { return false; }
    }

    function markShown(key) {
        try { sessionStorage.setItem('rq_popup_' + key, '1'); } catch (e) {}
    }

    function isCourse() {
        return (cfg.coursePaths || []).indexOf(path) !== -1;
    }

    function loadTurnstile(cb) {
        if (!cfg.turnstileKey) { if (cb) cb(); return; }
        if (window.turnstile) { if (cb) cb(); return; }
        if (turnstileLoaded) { if (cb) cb(); return; }
        turnstileLoaded = true;
        var s = document.createElement('script');
        s.src = 'https://challenges.cloudflare.com/turnstile/v0/api.js';
        s.async = true;
        s.defer = true;
        s.onload = function () { if (cb) cb(); };
        document.head.appendChild(s);
    }

    function stampForms(modal) {
        var now = Math.floor(Date.now() / 1000);
        modal.querySelectorAll('input[name="form_started_at"]').forEach(function (el) {
            el.value = now;
        });
        modal.querySelectorAll('.rq-lead-turnstile').forEach(function (holder) {
            holder.innerHTML = '';
            if (!cfg.turnstileKey) return;
            var box = document.createElement('div');
            holder.appendChild(box);
            if (window.turnstile) {
                window.turnstile.render(box, { sitekey: cfg.turnstileKey });
            } else {
                box.className = 'cf-turnstile';
                box.setAttribute('data-sitekey', cfg.turnstileKey);
            }
        });
    }

    function open(key) {
        if (captured() || shown(key) || openKey) return;
        var modal = document.getElementById('rq-lead-' + key);
        if (!modal) return;

        root.hidden = false;
        modal.hidden = false;
        document.body.classList.add('rq-lead-open');
        openKey = key;
        markShown(key);

        loadTurnstile(function () { stampForms(modal); });

        var focusEl = modal.querySelector('input[name="name"], .rq-lead-choice, .rq-lead-btn-wa');
        if (focusEl) {
            setTimeout(function () { focusEl.focus(); }, 180);
        }
    }

    function close() {
        root.hidden = true;
        root.querySelectorAll('.rq-lead-modal').forEach(function (modal) {
            modal.hidden = true;
        });
        document.body.classList.remove('rq-lead-open');
        openKey = null;
    }

    function showSuccess(form) {
        var wrap = form.closest('.rq-lead-dwell-form, .rq-lead-courses-inner, .rq-lead-pricing-form') || form.parentElement;
        wrap.innerHTML = '<div class="rq-lead-success"><i class="bi bi-check-circle"></i><h3>JazakAllah</h3><p>We received your request. InshaAllah we will contact you soon on WhatsApp.</p></div>';
        markCaptured();
        setTimeout(close, 2200);
    }

    root.querySelectorAll('[data-rq-close]').forEach(function (el) {
        el.addEventListener('click', close);
    });

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && openKey) close();
    });

    root.querySelectorAll('.rq-lead-choice').forEach(function (btn) {
        btn.addEventListener('click', function () {
            var text = btn.getAttribute('data-wa') || 'Assalamu Alaikum, I want to join a Quran class.';
            markCaptured();
            window.open('https://wa.me/' + cfg.whatsapp + '?text=' + encodeURIComponent(text), '_blank', 'noopener');
            close();
        });
    });

    root.querySelectorAll('.rq-lead-btn-wa, .rq-lead-wa-link').forEach(function (link) {
        link.addEventListener('click', function () {
            markCaptured();
        });
    });

    root.querySelectorAll('.rq-lead-form').forEach(function (form) {
        form.addEventListener('submit', function (e) {
            e.preventDefault();
            var btn = form.querySelector('button[type="submit"]');
            var text = form.querySelector('.rq-lead-btn-text');
            var loading = form.querySelector('.rq-lead-btn-loading');
            if (text) text.classList.add('d-none');
            if (loading) loading.classList.remove('d-none');
            if (btn) btn.disabled = true;

            var data = new FormData(form);
            var source = form.getAttribute('data-source');
            if (source) {
                var current = (data.get('message') || '').toString().trim();
                data.set('message', current ? (source + ' — ' + current) : source);
            }

            fetch(cfg.storeUrl, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': cfg.csrf,
                    'Accept': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: new URLSearchParams(data)
            }).then(function (res) {
                if (!res.ok) throw res;
                return res.json();
            }).then(function () {
                showSuccess(form);
            }).catch(function (err) {
                var fallback = 'Please check your details and try again.';
                if (err && err.json) {
                    err.json().then(function (json) {
                        var msg = json.message || fallback;
                        if (json.errors) msg = Object.values(json.errors).flat().join('\n');
                        alert(msg);
                    }).catch(function () { alert(fallback); });
                } else {
                    alert(fallback);
                }
            }).finally(function () {
                if (text) text.classList.remove('d-none');
                if (loading) loading.classList.add('d-none');
                if (btn) btn.disabled = false;
            });
        });
    });

    function schedule() {
        if (captured()) return;
        if (path === cfg.pricingPath) {
            setTimeout(function () { open('pricing'); }, cfg.pageDelay || 1500);
            return;
        }
        if (isCourse()) {
            setTimeout(function () { open('courses'); }, cfg.pageDelay || 1500);
            return;
        }
        if (path !== cfg.contactPath) {
            setTimeout(function () { open('dwell'); }, cfg.dwellDelay || 5000);
        }
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', schedule);
    } else {
        schedule();
    }
})();
