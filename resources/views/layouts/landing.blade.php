<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>@yield('meta_title')</title>
    <meta name="description" content="@yield('meta_description')">
    <link rel="icon" type="image/webp" href="{{ asset('images/favicon.webp') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
    <link rel="dns-prefetch" href="https://ipapi.co">
    <link rel="preload" as="style"
          href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&family=DM+Sans:wght@400;500;600&display=swap"
          onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&family=DM+Sans:wght@400;500;600&display=swap">
    </noscript>
    @stack('preload')
    @vite(['resources/css/landing.css', 'resources/js/app.js'])
    <style>@stack('css')</style>
    @stack('meta')
    <script>let gtmLoaded = false;
    function loadGTM() {
        if (gtmLoaded) return;
        gtmLoaded = true;
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({'gtm.start': new Date().getTime(), event: 'gtm.js'});
            var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WVQWJKL');
    }
    ['mousedown', 'mousemove', 'keypress', 'scroll', 'touchstart', 'click'].forEach(function (e) {
        document.addEventListener(e, loadGTM, {once: true, passive: true});
    });
    setTimeout(loadGTM, 5000);</script>
</head>
<body>
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WVQWJKL" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
</noscript>

<header class="header" id="header">
    <div class="container header-inner">
        <span class="logo"><img src="{{ asset('images/logo-white.svg') }}" alt="Saad Ahsan" width="180" height="44"></span>
    </div>
</header>

<main>@yield('content')</main>

<footer class="footer">
    <div class="container footer-inner">
        <p class="footer-text">&copy; {{ date('Y') }} Saad Ahsan Residency & Citizenship. All rights reserved.</p>
    </div>
</footer>

<script>
    const header = document.getElementById('header');
    let ticking = false;
    window.addEventListener('scroll', () => {
        if (!ticking) {
            window.requestAnimationFrame(() => {
                header.classList.toggle('scrolled', window.scrollY > 50);
                ticking = false
            });
            ticking = true
        }
    }, {passive: true});

    document.querySelectorAll('.faq-question').forEach(q => {
        q.addEventListener('click', () => {
            const item = q.parentElement;
            const isActive = item.classList.contains('active');
            document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('active'));
            if (!isActive) item.classList.add('active')
        })
    });

    (function(){
        var itlLoaded = false;
        function loadIntlTelInput(){
            if(itlLoaded) return;
            itlLoaded = true;
            var css = document.createElement('link');
            css.rel = 'stylesheet';
            css.href = 'https://cdn.jsdelivr.net/npm/intl-tel-input@25.11.2/build/css/intlTelInput.min.css';
            document.head.appendChild(css);
            var js = document.createElement('script');
            js.src = 'https://cdn.jsdelivr.net/npm/intl-tel-input@25.11.2/build/js/intlTelInput.min.js';
            js.onload = initPhoneInput;
            document.body.appendChild(js);
        }
        var form = document.querySelector('#landing-form');
        if(form){
            ['focusin','click','touchstart'].forEach(function(e){
                form.addEventListener(e, loadIntlTelInput, {once:true,passive:true});
            });
        }
    })();

    function initPhoneInput() {
        const phoneInput = document.querySelector('#phone');
        const countryDropdown = document.querySelector('#country');
        if (!phoneInput || !window.intlTelInput) return;

        const iti = intlTelInput(phoneInput, {
            strictMode: true,
            nationalMode: false,
            initialCountry: 'pk',
            geoIpLookup: cb => {
                fetch('https://ipapi.co/json', {mode: 'cors'}).then(r => r.json()).then(d => cb(d.country_code)).catch(() => cb('pk'))
            },
            loadUtils: () => import('https://cdn.jsdelivr.net/npm/intl-tel-input@25.11.2/build/js/utils.js'),
        });

        if (countryDropdown && window.intlTelInput.getCountryData) {
            const data = window.intlTelInput.getCountryData();
            let html = '<option value="">Select country</option>';
            data.forEach(c => {
                html += `<option value="${c.iso2}">${c.name}</option>`
            });
            countryDropdown.innerHTML = html;
        }

        phoneInput.addEventListener('countrychange', () => {
            if (countryDropdown) countryDropdown.value = iti.getSelectedCountryData().iso2
        });
        if (countryDropdown) countryDropdown.addEventListener('change', () => iti.setCountry(countryDropdown.value));
        phoneInput.addEventListener('blur', () => {
            if (iti.isValidNumber()) phoneInput.value = iti.getNumber()
        });
    }
</script>
@stack('scripts')
<script>
document.addEventListener('click',function(e){
    var btn=e.target.closest('[data-dismiss="alert"]');
    if(btn){var alert=btn.closest('.alert');if(alert)alert.remove();}
});
</script>
</body>
</html>