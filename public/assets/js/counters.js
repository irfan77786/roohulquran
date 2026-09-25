/**
 * Counts up .purecounter elements when they scroll into view.
 */
(function () {
    "use strict";

    var nodes = document.querySelectorAll(".purecounter");
    if (!nodes.length) return;

    function paint(el, value) {
        el.textContent = String(value);
    }

    function run(el) {
        var end = parseInt(el.getAttribute("data-purecounter-end") || "0", 10);
        var duration = parseFloat(el.getAttribute("data-purecounter-duration") || "1") * 1000;
        if (!duration || duration < 0) duration = 1000;
        var start = performance.now();

        function frame(now) {
            var progress = Math.min(1, (now - start) / duration);
            paint(el, Math.round(end * progress));
            if (progress < 1) requestAnimationFrame(frame);
        }
        requestAnimationFrame(frame);
    }

    if (!("IntersectionObserver" in window)) {
        nodes.forEach(function (el) { run(el); });
        return;
    }

    var observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (!entry.isIntersecting) return;
            observer.unobserve(entry.target);
            run(entry.target);
        });
    }, { threshold: 0.4 });

    nodes.forEach(function (el) { observer.observe(el); });
})();
