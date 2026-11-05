/**
 * Bootstrap-compatible accordion, modern syntax only.
 * Public pages use data-bs-toggle="collapse" and do not need the full Bootstrap bundle.
 */
(function () {
    "use strict";

    function buttonFor(panel) {
        return document.querySelector('[data-bs-target="#' + panel.id + '"], [href="#' + panel.id + '"]');
    }

    function finish(panel, open) {
        panel.classList.remove("collapsing");
        panel.classList.add("collapse");
        panel.style.height = "";
        if (open) {
            panel.classList.add("show");
        } else {
            panel.classList.remove("show");
        }
    }

    function setButton(panel, open) {
        var btn = buttonFor(panel);
        if (!btn) return;
        btn.classList.toggle("collapsed", !open);
        btn.setAttribute("aria-expanded", open ? "true" : "false");
    }

    function animate(panel, open) {
        if (panel.classList.contains("collapsing")) return;
        var btn = buttonFor(panel);
        if (btn) btn.classList.toggle("collapsed", !open);

        panel.classList.remove("collapse", "show");
        panel.classList.add("collapsing");
        panel.style.height = open ? "0px" : panel.scrollHeight + "px";

        requestAnimationFrame(function () {
            panel.style.height = open ? panel.scrollHeight + "px" : "0px";
        });

        var settled = false;
        var timer = setTimeout(finishOnce, 400);
        function finishOnce() {
            if (settled) return;
            settled = true;
            clearTimeout(timer);
            finish(panel, open);
            setButton(panel, open);
        }
        panel.addEventListener("transitionend", function (event) {
            if (event.propertyName !== "height") return;
            finishOnce();
        });
    }

    document.addEventListener("click", function (event) {
        var btn = event.target.closest('[data-bs-toggle="collapse"]');
        if (!btn) return;
        var sel = btn.getAttribute("data-bs-target") || btn.getAttribute("href");
        if (!sel || sel.charAt(0) !== "#") return;
        var panel = document.querySelector(sel);
        if (!panel) return;
        event.preventDefault();

        var parentSel = panel.getAttribute("data-bs-parent");
        var willOpen = !panel.classList.contains("show");
        if (willOpen && parentSel) {
            document.querySelectorAll(parentSel + " .accordion-collapse.show").forEach(function (openPanel) {
                if (openPanel !== panel) animate(openPanel, false);
            });
        }
        animate(panel, willOpen);
    });
})();
