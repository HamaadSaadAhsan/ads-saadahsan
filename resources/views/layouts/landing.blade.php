<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>@yield('meta_title')</title>
    <meta name="description" content="@yield('meta_description')">
    <link rel="icon" type="image/webp" href="{{ asset('images/favicon.webp') }}">
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
    <link rel="dns-prefetch" href="https://ipapi.co">
    <link rel="preload" href="{{ asset('fonts/cormorant-garamond-latin.woff2') }}" as="font" type="font/woff2"
          crossorigin>
    <link rel="preload" href="{{ asset('fonts/dm-sans-latin.woff2') }}" as="font" type="font/woff2" crossorigin>
    @stack('preload')
    <style>@font-face {
            font-family: 'Cormorant Garamond';
            font-style: normal;
            font-weight: 400;
            font-display: optional;
            src: url('{{ asset('fonts/cormorant-garamond-latin.woff2') }}') format('woff2')
        }

        @font-face {
            font-family: 'Cormorant Garamond';
            font-style: normal;
            font-weight: 600;
            font-display: optional;
            src: url('{{ asset('fonts/cormorant-garamond-latin.woff2') }}') format('woff2')
        }

        @font-face {
            font-family: 'Cormorant Garamond';
            font-style: normal;
            font-weight: 700;
            font-display: optional;
            src: url('{{ asset('fonts/cormorant-garamond-latin.woff2') }}') format('woff2')
        }

        @font-face {
            font-family: 'DM Sans';
            font-style: normal;
            font-weight: 400;
            font-display: optional;
            src: url('{{ asset('fonts/dm-sans-latin.woff2') }}') format('woff2')
        }

        @font-face {
            font-family: 'DM Sans';
            font-style: normal;
            font-weight: 500;
            font-display: optional;
            src: url('{{ asset('fonts/dm-sans-latin.woff2') }}') format('woff2')
        }

        @font-face {
            font-family: 'DM Sans';
            font-style: normal;
            font-weight: 600;
            font-display: optional;
            src: url('{{ asset('fonts/dm-sans-latin.woff2') }}') format('woff2')
        }

        @font-face {
            font-family: 'Cormorant Garamond Fallback';
            src: local('Georgia'), local('Times New Roman');
            size-adjust: 112%;
            ascent-override: 95%;
            descent-override: 22%;
            line-gap-override: 0%
        }

        @font-face {
            font-family: 'DM Sans Fallback';
            src: local('Arial'), local('Helvetica');
            size-adjust: 105%;
            ascent-override: 93%;
            descent-override: 25%;
            line-gap-override: 0%
        }

        *, *::before, *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0
        }

        html {
            font-size: 16px;
            -webkit-text-size-adjust: 100%
        }

        body {
            font-family: 'DM Sans', 'DM Sans Fallback', system-ui, sans-serif;
            line-height: 1.7;
            color: #1a1a1f;
            background: #FAF7F0;
            overflow-x: hidden
        }

        h1, h2, h3, h4 {
            font-family: 'Cormorant Garamond', 'Cormorant Garamond Fallback', Georgia, serif;
            font-weight: 600;
            line-height: 1.2;
            letter-spacing: -0.02em
        }

        h1 {
            font-size: clamp(2.5rem, 5vw, 4rem)
        }

        p {
            margin-bottom: 1.25em;
            color: #6a6760
        }

        img {
            max-width: 100%;
            height: auto;
            display: block
        }

        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 24px
        }

        .header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            padding: 16px 0;
            background: transparent;
            transition: padding .4s ease, background .4s ease, backdrop-filter .4s ease, box-shadow .4s ease
        }

        .header-inner {
            display: flex;
            justify-content: space-between;
            align-items: center
        }

        .logo img {
            height: 44px;
            width: auto
        }

        .hero {
            min-height: 100vh;
            padding: 120px 0 80px;
            position: relative;
            display: flex;
            align-items: center;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat
        }

        .hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(26, 26, 31, .92) 0%, rgba(26, 26, 31, .85) 50%, rgba(90, 0, 22, .8) 100%)
        }

        .hero .container {
            position: relative;
            z-index: 1
        }

        .hero-grid {
            display: grid;
            grid-template-columns:1fr 480px;
            gap: 50px;
            align-items: center
        }

        .hero-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            padding: 10px 20px;
            background: rgba(201, 169, 98, .15);
            border: 1px solid rgba(201, 169, 98, .3);
            border-radius: 50px;
            font-size: 11px;
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: #C9A962;
            margin-bottom: 24px
        }

        .hero-eyebrow::before {
            content: '';
            width: 8px;
            height: 8px;
            background: #C9A962;
            border-radius: 50%
        }

        .hero h1 {
            color: #fff;
            margin-bottom: 20px;
            text-shadow: 0 4px 30px rgba(0, 0, 0, .3)
        }

        .hero h1 span {
            color: #C9A962
        }

        .hero-subtitle {
            font-family: 'Cormorant Garamond', 'Cormorant Garamond Fallback', Georgia, serif;
            font-size: 1.5rem;
            font-weight: 500;
            font-style: italic;
            color: #E8D5A3;
            margin-bottom: 24px
        }

        .hero-lead {
            font-size: 1.05rem;
            line-height: 1.9;
            color: rgba(255, 255, 255, .85);
            max-width: 560px;
            margin-bottom: 0
        }

        .hero-features {
            display: flex;
            flex-wrap: wrap;
            gap: 24px;
            margin-top: 32px
        }

        .hero-feature {
            display: flex;
            align-items: center;
            gap: 12px;
            color: #fff;
            font-size: 14px;
            font-weight: 500
        }

        .hero-feature svg {
            width: 20px;
            height: 20px;
            color: #C9A962
        }

        .hero-cta {
            display: flex;
            gap: 16px;
            flex-wrap: wrap;
            margin-top: 40px
        }

        .hero-stat {
            text-align: left
        }

        .hero-stats {
            display: flex;
            gap: 32px;
            margin-top: 48px;
            padding-top: 32px;
            border-top: 1px solid rgba(201, 169, 98, .2)
        }

        .hero-stat-value {
            font-family: 'Cormorant Garamond', 'Cormorant Garamond Fallback', Georgia, serif;
            font-size: 2.75rem;
            font-weight: 700;
            color: #C9A962;
            line-height: 1
        }

        .hero-stat-label {
            font-size: 12px;
            color: rgba(255, 255, 255, .7);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-top: 6px
        }

        .hero-form {
            background: #fff;
            padding: 36px;
            border-radius: 24px;
            box-shadow: 0 30px 60px rgba(0, 0, 0, .4);
            position: relative;
            overflow: hidden
        }

        .hero-form::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, #800020, #C9A962);
            border-radius: 24px 24px 0 0
        }

        .hero-form .form-title {
            color: #1a1a1f;
            margin-bottom: 8px;
            font-size: 1.5rem
        }

        .hero-form .form-subtitle {
            color: #6a6760;
            font-size: 14px;
            margin-bottom: 24px;
            line-height: 1.6
        }

        .form-group {
            margin-bottom: 16px
        }

        .form-group label {
            display: block;
            font-size: 11px;
            font-weight: 600;
            color: #1a1a1f;
            margin-bottom: 6px;
            letter-spacing: .5px;
            text-transform: uppercase
        }

        .form-group input, .form-group select, .form-group textarea {
            width: 100%;
            padding: 12px 14px;
            border: 2px solid rgba(152, 131, 88, .2);
            border-radius: 10px;
            font-family: 'DM Sans', 'DM Sans Fallback', system-ui, sans-serif;
            font-size: 14px;
            color: #1a1a1f;
            background: #FAF7F0;
            transition: border-color .3s ease, box-shadow .3s ease
        }

        .form-row {
            display: grid;
            grid-template-columns:1fr 1fr;
            gap: 16px
        }

        .form-row.full {
            grid-template-columns:1fr
        }

        .form-submit {
            width: 100%;
            margin-top: 8px;
            padding: 14px 28px;
            font-size: 14px
        }

        .form-note {
            text-align: center;
            font-size: 11px;
            color: #6a6760;
            margin-top: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 6px
        }

        .form-note svg {
            width: 14px;
            height: 14px;
            flex-shrink: 0
        }

        a {
            text-decoration: none
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 14px 28px;
            border-radius: 50px;
            font-family: 'DM Sans', 'DM Sans Fallback', system-ui, sans-serif;
            font-weight: 600;
            font-size: 14px;
            letter-spacing: .5px;
            text-transform: uppercase;
            border: none;
            cursor: pointer;
            position: relative;
            overflow: hidden
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%
        }

        .btn-primary {
            background: linear-gradient(135deg, #800020 0%, #5a0016 100%);
            color: #fff;
            box-shadow: 0 4px 20px rgba(128, 0, 32, .3)
        }

        .btn-gold {
            background: linear-gradient(135deg, #C9A962 0%, #988358 100%);
            color: #1a1a1f;
            box-shadow: 0 4px 20px rgba(201, 169, 98, .3)
        }

        .alert {
            padding: 14px 18px;
            border-radius: 8px;
            margin-bottom: 16px;
            font-size: .95rem;
            position: relative
        }

        .alert p {
            margin: 0
        }

        .alert-success {
            background: #e8f5e9;
            color: #2e7d32;
            border: 1px solid #c8e6c9
        }

        .alert-danger {
            background: #fce4ec;
            color: #c62828;
            border: 1px solid #ef9a9a
        }

        .trust-section {
            padding: 40px 0;
            background: #1a1a1f;
            position: relative
        }

        .trust-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, #C9A962, transparent)
        }

        .trust-grid {
            display: flex;
            justify-content: center;
            gap: 60px;
            flex-wrap: wrap
        }

        .trust-item {
            display: flex;
            align-items: center;
            gap: 16px;
            color: #fff
        }

        .trust-icon {
            width: 48px;
            height: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #C9A962 0%, #988358 100%);
            border-radius: 12px
        }

        .trust-icon svg {
            width: 24px;
            height: 24px;
            color: #1a1a1f
        }

        .trust-text {
            font-size: 14px;
            font-weight: 500;
            letter-spacing: .5px
        }

        @media (max-width: 768px) {
            .form-row {
                grid-template-columns:1fr
            }
        }

        @media (max-width: 1024px) {
            .hero-grid {
                grid-template-columns:1fr;
                gap: 48px;
                text-align: center
            }

            .hero-lead {
                margin: 0 auto
            }

            .hero-features {
                justify-content: center
            }

            .hero-cta {
                justify-content: center
            }

            .hero-stats {
                justify-content: center
            }

            .hero-form {
                max-width: 520px;
                margin: 0 auto
            }
        }

        @media (max-width: 768px) {
            .hero {
                min-height: auto;
                padding: 100px 0 60px
            }

            .hero-form {
                padding: 28px 20px
            }

            .hero-stats {
                gap: 20px;
                flex-wrap: wrap
            }

            .hero-stat-value {
                font-size: 2rem
            }
        }@stack('css')</style>
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/landing.css') }}" media="print"
          onload="this.onload=null;this.media='all'">
    <noscript>
        <link rel="stylesheet" href="{{ Vite::asset('resources/css/landing.css') }}">
    </noscript>
    @stack('meta')
</head>
<body>
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WVQWJKL" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
</noscript>

<header class="header" id="header">
    <div class="container header-inner">
        <span class="logo"><img src="{{ asset('images/logo-white.svg') }}" alt="Saad Ahsan" width="180"
                                height="44"></span>
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

    (function () {
        var itlLoaded = false;

        function loadIntlTelInput() {
            if (itlLoaded) return;
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
        if (form) {
            ['focusin', 'click', 'touchstart'].forEach(function (e) {
                form.addEventListener(e, loadIntlTelInput, {once: true, passive: true});
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
@vite(['resources/js/app.js'])
@stack('scripts')
<script>
    document.addEventListener('click', function (e) {
        var btn = e.target.closest('[data-dismiss="alert"]');
        if (btn) {
            var alert = btn.closest('.alert');
            if (alert) alert.remove();
        }
    });
    var gtmLoaded = false;

    function loadGTM() {
        if (gtmLoaded) return;
        gtmLoaded = true;
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({'gtm.start': new Date().getTime(), event: 'gtm.js'});
            var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f)
        })(window, document, 'script', 'dataLayer', 'GTM-WVQWJKL')
    }

    ['mousedown', 'mousemove', 'keypress', 'scroll', 'touchstart', 'click'].forEach(function (e) {
        document.addEventListener(e, loadGTM, {once: true, passive: true})
    });
    setTimeout(loadGTM, 5000);
</script>
</body>
</html>