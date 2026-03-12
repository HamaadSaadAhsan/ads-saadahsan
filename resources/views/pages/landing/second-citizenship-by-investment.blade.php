@extends('layouts.landing')

@section('meta_title', 'Second Citizenship by Investment | Legal Dual Nationality Programs')
@section('meta_description', 'Explore second citizenship by investment programs offering legal dual nationality through government-approved economic contribution pathways.')

@push('meta')
    <link rel="canonical" href="https://ads.saadahsan.com/second-citizenship-by-investment">
    <meta property="og:url" content="https://ads.saadahsan.com/second-citizenship-by-investment">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Second Citizenship by Investment | Legal Dual Nationality Programs">
    <meta property="og:description"
          content="Explore second citizenship by investment programs offering legal dual nationality through government-approved economic contribution pathways.">
    <meta property="og:site_name" content="Saad Ahsan Residency & Citizenship">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Second Citizenship by Investment | Legal Dual Nationality Programs">
    <meta name="twitter:description"
          content="Explore second citizenship by investment programs offering legal dual nationality through government-approved economic contribution pathways.">
    <script type="application/ld+json">{"@@context
        ":"https://schema.org","@@type":"WebPage","name":"Second Citizenship by Investment | Legal Dual Nationality Programs","description":"Explore second citizenship by investment programs offering legal dual nationality through government-approved economic contribution pathways.","url":"https://ads.saadahsan.com/second-citizenship-by-investment","publisher":{"@@type":"Organization","name":"Saad Ahsan Residency & Citizenship","url":"https://saadahsan.com"}}
    </script>
    <script type="application/ld+json">{"@@context
        ":"https://schema.org","@@type":"FAQPage","mainEntity":[{"@@type":"Question","name":"Is second citizenship by investment legal?","acceptedAnswer":{"@@type":"Answer","text":"Yes. These programs operate under national legislation and are regulated by sovereign governments."}},{"@@type":"Question","name":"How long does second citizenship by investment take?","acceptedAnswer":{"@@type":"Answer","text":"Processing timelines vary depending on the country and its due diligence procedures."}},{"@@type":"Question","name":"Does investment automatically guarantee second citizenship?","acceptedAnswer":{"@@type":"Answer","text":"No. All applications are subject to regulatory review and official approval."}},{"@@type":"Question","name":"Can family members apply together?","acceptedAnswer":{"@@type":"Answer","text":"Most programs allow inclusion of immediate family members under one structured application."}}]}
    </script>
@endpush

@section('content')
    <style>
        .sci-hero {
            min-height: 100vh;
            padding: 140px 0 100px;
            position: relative;
            display: flex;
            align-items: center;
            background: var(--charcoal);
            overflow: hidden
        }

        .sci-hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background: radial-gradient(ellipse 60% 55% at 20% 55%, rgba(128, 0, 32, .18) 0%, transparent 65%), radial-gradient(ellipse 50% 45% at 80% 25%, rgba(201, 169, 98, .1) 0%, transparent 55%)
        }

        .sci-hero::after {
            content: '';
            position: absolute;
            inset: 0;
            background: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cline x1='0' y1='50' x2='100' y2='50' stroke='%23C9A962' stroke-opacity='0.015' stroke-width='0.5'/%3E%3Cline x1='50' y1='0' x2='50' y2='100' stroke='%23C9A962' stroke-opacity='0.015' stroke-width='0.5'/%3E%3C/svg%3E");
            pointer-events: none
        }

        .sci-hero .container {
            position: relative;
            z-index: 1
        }

        .sci-hero-grid {
            display: grid;
            grid-template-columns:1fr 460px;
            gap: 60px;
            align-items: center
        }

        .sci-hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 8px 20px;
            background: rgba(201, 169, 98, .1);
            border: 1px solid rgba(201, 169, 98, .25);
            border-radius: 50px;
            font-size: 11px;
            font-weight: 600;
            letter-spacing: 2.5px;
            text-transform: uppercase;
            color: var(--gold);
            margin-bottom: 28px
        }

        .sci-hero-badge::before {
            content: '';
            width: 6px;
            height: 6px;
            background: var(--gold);
            border-radius: 50%;
            animation: pulse 2s infinite
        }

        .sci-hero h1 {
            color: var(--white);
            font-size: clamp(2.8rem, 5.5vw, 4.2rem);
            line-height: 1.1;
            margin-bottom: 16px
        }

        .sci-hero h1 span {
            display: block;
            background: linear-gradient(135deg, var(--gold) 0%, var(--gold-light) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text
        }

        .sci-hero-subtitle {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.35rem;
            font-weight: 500;
            font-style: italic;
            color: var(--gold-light);
            margin-bottom: 20px;
            opacity: .9
        }

        .sci-hero-lead {
            font-size: 1rem;
            line-height: 1.85;
            color: rgba(255, 255, 255, .8);
            max-width: 540px;
            margin-bottom: 0
        }

        .sci-hero-highlights {
            display: grid;
            grid-template-columns:repeat(3, 1fr);
            gap: 20px;
            margin-top: 40px;
            padding-top: 36px;
            border-top: 1px solid rgba(201, 169, 98, .15)
        }

        .sci-highlight {
            text-align: center;
            padding: 20px 12px;
            background: rgba(201, 169, 98, .06);
            border: 1px solid rgba(201, 169, 98, .12);
            border-radius: 16px;
            transition: all .3s ease
        }

        .sci-highlight:hover {
            background: rgba(201, 169, 98, .12);
            border-color: rgba(201, 169, 98, .25);
            transform: translateY(-3px)
        }

        .sci-highlight-icon {
            width: 44px;
            height: 44px;
            margin: 0 auto 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, var(--gold) 0%, var(--gold-dark) 100%);
            border-radius: 12px
        }

        .sci-highlight-icon svg {
            width: 22px;
            height: 22px;
            color: var(--charcoal)
        }

        .sci-highlight-label {
            font-size: 12px;
            font-weight: 600;
            color: var(--white);
            letter-spacing: .5px;
            line-height: 1.4
        }

        .sci-process {
            padding: 100px 0;
            background: var(--white)
        }

        .sci-process .section-header {
            text-align: center;
            max-width: 680px;
            margin: 0 auto 60px
        }

        .sci-process .section-header h2 {
            color: var(--charcoal);
            margin-bottom: 16px
        }

        .sci-cards {
            display: grid;
            grid-template-columns:repeat(3, 1fr);
            gap: 24px;
            max-width: 960px;
            margin: 0 auto
        }

        .sci-card {
            background: var(--cream);
            border-radius: 20px;
            padding: 36px 28px;
            border: 1px solid rgba(152, 131, 88, .1);
            transition: all .4s ease;
            position: relative;
            overflow: hidden
        }

        .sci-card::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, var(--burgundy), var(--gold));
            opacity: 0;
            transition: opacity .3s ease
        }

        .sci-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 16px 40px rgba(0, 0, 0, .08)
        }

        .sci-card:hover::after {
            opacity: 1
        }

        .sci-card-num {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 48px;
            height: 48px;
            background: linear-gradient(135deg, var(--burgundy), var(--burgundy-dark));
            border-radius: 14px;
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--white);
            margin-bottom: 20px
        }

        .sci-card-title {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.15rem;
            font-weight: 600;
            color: var(--charcoal);
            margin-bottom: 8px
        }

        .sci-card-desc {
            font-size: 14px;
            color: var(--text-muted);
            line-height: 1.65;
            margin: 0
        }

        .sci-about {
            padding: 100px 0;
            background: var(--cream);
            position: relative;
            overflow: hidden
        }

        .sci-about::before {
            content: '';
            position: absolute;
            top: -120px;
            right: -120px;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(128, 0, 32, .04) 0%, transparent 70%);
            border-radius: 50%
        }

        .sci-about-grid {
            display: grid;
            grid-template-columns:1fr 1fr;
            gap: 80px;
            align-items: start
        }

        .sci-about-content h2 {
            color: var(--charcoal);
            margin-bottom: 24px
        }

        .sci-about-content p {
            font-size: 1rem;
            line-height: 1.85
        }

        .sci-adv-card {
            background: var(--white);
            border-radius: 24px;
            padding: 44px 36px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, .06);
            border: 1px solid rgba(152, 131, 88, .1);
            position: relative
        }

        .sci-adv-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 32px;
            right: 32px;
            height: 4px;
            background: linear-gradient(90deg, var(--burgundy), var(--gold));
            border-radius: 0 0 4px 4px
        }

        .sci-adv-card h3 {
            color: var(--charcoal);
            margin-bottom: 28px;
            font-size: 1.5rem
        }

        .sci-adv-item {
            display: flex;
            align-items: flex-start;
            gap: 16px;
            padding: 18px 0;
            border-bottom: 1px solid rgba(152, 131, 88, .1)
        }

        .sci-adv-item:last-child {
            border-bottom: none;
            padding-bottom: 0
        }

        .sci-adv-icon {
            flex-shrink: 0;
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, var(--burgundy) 0%, var(--burgundy-dark) 100%);
            border-radius: 10px
        }

        .sci-adv-icon svg {
            width: 18px;
            height: 18px;
            color: var(--white)
        }

        .sci-adv-text {
            font-size: 15px;
            color: var(--text-dark);
            line-height: 1.6;
            font-weight: 500
        }

        .sci-eligibility {
            padding: 100px 0;
            background: var(--white)
        }

        .sci-eligibility-grid {
            display: grid;
            grid-template-columns:1fr 1fr;
            gap: 80px;
            align-items: center
        }

        .sci-eligibility-content h2 {
            color: var(--charcoal);
            margin-bottom: 20px
        }

        .sci-eligibility-list {
            list-style: none;
            padding: 0;
            margin: 32px 0 0
        }

        .sci-eligibility-list li {
            display: flex;
            align-items: flex-start;
            gap: 16px;
            padding: 16px 0;
            border-bottom: 1px solid rgba(152, 131, 88, .12)
        }

        .sci-eligibility-list li:last-child {
            border-bottom: none
        }

        .sci-eligibility-check {
            flex-shrink: 0;
            width: 28px;
            height: 28px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, var(--gold) 0%, var(--gold-dark) 100%);
            border-radius: 50%
        }

        .sci-eligibility-check svg {
            width: 14px;
            height: 14px;
            color: var(--charcoal)
        }

        .sci-eligibility-text {
            font-size: 15px;
            color: var(--text-dark);
            line-height: 1.65
        }

        .sci-cta-card {
            background: linear-gradient(135deg, var(--charcoal) 0%, var(--charcoal-light) 100%);
            border-radius: 24px;
            padding: 52px 40px;
            text-align: center;
            position: relative;
            overflow: hidden
        }

        .sci-cta-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--burgundy), var(--gold), var(--burgundy))
        }

        .sci-cta-card::after {
            content: '';
            position: absolute;
            bottom: -80px;
            right: -80px;
            width: 200px;
            height: 200px;
            background: radial-gradient(circle, rgba(201, 169, 98, .08) 0%, transparent 70%);
            border-radius: 50%
        }

        .sci-cta-card h3 {
            color: var(--white);
            font-size: 1.75rem;
            margin-bottom: 16px
        }

        .sci-cta-card .btn {
            position: relative;
            z-index: 1
        }

        .sci-faq {
            padding: 100px 0;
            background: var(--cream)
        }

        .sci-faq .section-header {
            text-align: center;
            max-width: 680px;
            margin: 0 auto 60px
        }

        .sci-faq .section-header h2 {
            color: var(--charcoal);
            margin-bottom: 16px
        }

        .sci-faq-list {
            max-width: 800px;
            margin: 0 auto
        }

        .sci-faq-item {
            background: var(--white);
            border-radius: 16px;
            margin-bottom: 16px;
            overflow: hidden;
            border: 1px solid rgba(152, 131, 88, .12);
            transition: all .3s ease;
            box-shadow: 0 2px 8px rgba(0, 0, 0, .03)
        }

        .sci-faq-item:hover {
            border-color: rgba(152, 131, 88, .3);
            box-shadow: 0 8px 24px rgba(0, 0, 0, .06)
        }

        .sci-faq-question {
            padding: 24px 30px;
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--charcoal);
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: color .3s ease
        }

        .sci-faq-question:hover {
            color: var(--burgundy)
        }

        .sci-faq-toggle {
            width: 36px;
            height: 36px;
            flex-shrink: 0;
            position: relative;
            background: var(--cream);
            border-radius: 50%;
            transition: all .3s ease
        }

        .sci-faq-toggle::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 14px;
            height: 2px;
            background: var(--burgundy);
            transform: translate(-50%, -50%)
        }

        .sci-faq-toggle::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 2px;
            height: 14px;
            background: var(--burgundy);
            transform: translate(-50%, -50%);
            transition: all .3s ease
        }

        .sci-faq-item.active .sci-faq-toggle {
            background: var(--burgundy);
            transform: rotate(45deg)
        }

        .sci-faq-item.active .sci-faq-toggle::before, .sci-faq-item.active .sci-faq-toggle::after {
            background: var(--white)
        }

        .sci-faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height .4s ease
        }

        .sci-faq-answer-inner {
            padding: 0 30px 24px;
            color: var(--text-muted);
            font-size: 15px;
            line-height: 1.85
        }

        .sci-faq-item.active .sci-faq-answer {
            max-height: 300px
        }

        .sci-final-cta {
            padding: 80px 0;
            background: var(--burgundy);
            position: relative;
            overflow: hidden;
            text-align: center
        }

        .sci-final-cta::before {
            content: '';
            position: absolute;
            inset: 0;
            background: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cline x1='0' y1='50' x2='100' y2='50' stroke='%23ffffff' stroke-opacity='0.02' stroke-width='0.5'/%3E%3C/svg%3E");
            pointer-events: none
        }

        .sci-final-cta .container {
            position: relative;
            z-index: 1
        }

        .sci-final-cta h2 {
            color: var(--white);
            margin-bottom: 16px
        }

        @media (max-width: 1024px) {
            .sci-hero-grid {
                grid-template-columns:1fr;
                gap: 48px;
                text-align: center
            }

            .sci-hero-lead {
                margin: 0 auto
            }

            .hero-form {
                max-width: 520px;
                margin: 0 auto
            }

            .sci-about-grid, .sci-eligibility-grid {
                grid-template-columns:1fr;
                gap: 48px
            }

            .sci-cards {
                grid-template-columns:repeat(2, 1fr)
            }
        }

        @media (max-width: 768px) {
            .sci-hero {
                min-height: auto;
                padding: 110px 0 60px
            }

            .sci-process, .sci-about, .sci-eligibility, .sci-faq, .sci-final-cta {
                padding: 60px 0
            }

            .sci-hero-highlights {
                grid-template-columns:1fr;
                gap: 12px
            }

            .sci-highlight {
                flex-direction: row;
                display: flex;
                align-items: center;
                gap: 14px;
                text-align: left;
                padding: 14px 18px
            }

            .sci-highlight-icon {
                margin: 0
            }

            .hero-form {
                padding: 28px 20px
            }

            .form-row {
                grid-template-columns:1fr
            }

            .sci-adv-card {
                padding: 32px 24px
            }

            .sci-cta-card {
                padding: 40px 24px
            }

            .sci-cards {
                grid-template-columns:1fr
            }
        }
    </style>

    <section class="sci-hero">
        <div class="container">
            <div class="sci-hero-grid">
                <div class="sci-hero-content">
                    <div class="sci-hero-badge">Legal Dual Nationality Programs</div>
                    <h1>Second Citizenship by Investment<span>Through Legal Government Programs</span></h1>
                    <p class="sci-hero-subtitle">Government-Approved Investment Programs for Acquiring Dual
                        Nationality</p>
                    <p class="sci-hero-lead">Second citizenship by investment is a lawful process established by
                        sovereign governments that allows eligible individuals and families to obtain dual nationality
                        through a qualifying economic contribution. These programs operate under national legislation
                        and grant citizenship only after due diligence, compliance screening, and official government
                        approval.</p>
                    <p class="sci-hero-lead" style="margin-top:-8px">Citizenship is conferred strictly in accordance
                        with the laws of the issuing country.</p>
                    <div class="sci-hero-highlights">
                        <div class="sci-highlight">
                            <div class="sci-highlight-icon">
                                <svg viewBox="0 0 24 24" fill="currentColor">
                                    <path
                                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/>
                                </svg>
                            </div>
                            <span class="sci-highlight-label">Government-Approved Programs</span></div>
                        <div class="sci-highlight">
                            <div class="sci-highlight-icon">
                                <svg viewBox="0 0 24 24" fill="currentColor">
                                    <path
                                        d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/>
                                </svg>
                            </div>
                            <span class="sci-highlight-label">Sovereign Legal Framework</span></div>
                        <div class="sci-highlight">
                            <div class="sci-highlight-icon">
                                <svg viewBox="0 0 24 24" fill="currentColor">
                                    <path
                                        d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/>
                                </svg>
                            </div>
                            <span class="sci-highlight-label">Family Inclusion Eligible</span></div>
                    </div>
                </div>
                <x-landing-form
                    source="second-citizenship-by-investment"
                    consultancy="citizenship-by-investment"
                    title="Request Information About Dual Nationality Investment Programs"
                    subtitle="Share your details and our experts will assess your eligibility."
                >Request Information
                </x-landing-form>
            </div>
        </div>
    </section>

    <section class="sci-process">
        <div class="container">
            <div class="section-header"><h2>How Second Citizenship by Investment Works</h2>
                <p>Most second citizenship by investment programs follow a regulated framework. Each country defines its
                    own processing standards and legal procedures.</p></div>
            <div class="sci-cards">
                <div class="sci-card">
                    <div class="sci-card-num">01</div>
                    <div class="sci-card-title">Eligibility Assessment</div>
                    <p class="sci-card-desc">Eligibility assessment under the applicable program</p></div>
                <div class="sci-card">
                    <div class="sci-card-num">02</div>
                    <div class="sci-card-title">Documentation Submission</div>
                    <p class="sci-card-desc">Submission of required documentation</p></div>
                <div class="sci-card">
                    <div class="sci-card-num">03</div>
                    <div class="sci-card-title">Due Diligence & Verification</div>
                    <p class="sci-card-desc">Government due diligence and background verification</p></div>
                <div class="sci-card">
                    <div class="sci-card-num">04</div>
                    <div class="sci-card-title">Approval in Principle</div>
                    <p class="sci-card-desc">Approval in principle from national authorities</p></div>
                <div class="sci-card">
                    <div class="sci-card-num">05</div>
                    <div class="sci-card-title">Qualifying Investment</div>
                    <p class="sci-card-desc">Completion of the qualifying investment</p></div>
                <div class="sci-card">
                    <div class="sci-card-num">06</div>
                    <div class="sci-card-title">Citizenship & Passport</div>
                    <p class="sci-card-desc">Issuance of citizenship certificate and passport</p></div>
            </div>
        </div>
    </section>

    <section style="padding:80px 0;background:var(--cream)">
        <div class="container" style="max-width:800px;text-align:center">
            <h2 style="color:var(--charcoal);margin-bottom:20px">Second Citizenship by Investment Programs
                Worldwide</h2>
            <p style="font-size:1rem;line-height:1.85;color:var(--text-muted);margin-bottom:16px">Several countries
                operate legally established second citizenship by investment programs under national law. These programs
                are structured to attract foreign capital while maintaining strict compliance, identity verification,
                and financial transparency requirements.</p>
            <p style="font-size:1rem;line-height:1.85;color:var(--text-muted)">Program structure, eligibility
                thresholds, and timelines vary depending on the issuing state.</p>
        </div>
    </section>

    <section class="sci-about">
        <div class="container">
            <div class="sci-about-grid">
                <div class="sci-about-content">
                    <h2>What Is Second Citizenship by Investment?</h2>
                    <p>Second citizenship by investment refers to structured programs enacted by governments that enable
                        foreign applicants to acquire citizenship in exchange for an approved investment. The investment
                        is directed toward national development funds or other government-authorized economic
                        initiatives.</p>
                    <p>Applicants must meet defined eligibility standards and successfully complete regulatory review
                        before citizenship is granted.</p>
                </div>
                <div class="sci-adv-card">
                    <h3>Advantages of Second Citizenship by Investment</h3>
                    <div class="sci-adv-item">
                        <div class="sci-adv-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/>
                            </svg>
                        </div>
                        <span
                            class="sci-adv-text">Legal acquisition of dual nationality under sovereign legislation</span>
                    </div>
                    <div class="sci-adv-item">
                        <div class="sci-adv-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/>
                            </svg>
                        </div>
                        <span class="sci-adv-text">Citizenship status issued by a government authority</span></div>
                    <div class="sci-adv-item">
                        <div class="sci-adv-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/>
                            </svg>
                        </div>
                        <span class="sci-adv-text">Diversification of nationality for long-term planning</span></div>
                    <div class="sci-adv-item">
                        <div class="sci-adv-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/>
                            </svg>
                        </div>
                        <span class="sci-adv-text">Family inclusion under a single structured application</span></div>
                    <div class="sci-adv-item">
                        <div class="sci-adv-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M14 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z"/>
                            </svg>
                        </div>
                        <span class="sci-adv-text">Regulated and documented approval process</span></div>
                </div>
            </div>
        </div>
    </section>

    <section class="sci-eligibility">
        <div class="container">
            <div class="sci-eligibility-grid">
                <div class="sci-eligibility-content">
                    <h2>Who Can Apply for Second Citizenship by Investment?</h2>
                    <p>Eligibility depends on the legal framework of the issuing country. Applicants are generally
                        required to:</p>
                    <ul class="sci-eligibility-list">
                        <li><span class="sci-eligibility-check"><svg viewBox="0 0 24 24" fill="currentColor"><path
                                        d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span><span
                                class="sci-eligibility-text">Meet financial qualification requirements</span></li>
                        <li><span class="sci-eligibility-check"><svg viewBox="0 0 24 24" fill="currentColor"><path
                                        d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span><span
                                class="sci-eligibility-text">Demonstrate lawful source of funds</span></li>
                        <li><span class="sci-eligibility-check"><svg viewBox="0 0 24 24" fill="currentColor"><path
                                        d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span><span
                                class="sci-eligibility-text">Pass comprehensive background and due diligence checks</span>
                        </li>
                        <li><span class="sci-eligibility-check"><svg viewBox="0 0 24 24" fill="currentColor"><path
                                        d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span><span
                                class="sci-eligibility-text">Comply with official citizenship application procedures</span>
                        </li>
                    </ul>
                    <p style="margin-top:24px">Final approval is granted only after government review.</p>
                </div>
                <div class="sci-cta-card"><h3>Request Information About Dual Nationality Investment Programs</h3><a
                        href="#top" class="btn btn-gold"
                        onclick="document.querySelector('.hero-form input[name=name]').focus();return false;">Request
                        Information</a></div>
            </div>
        </div>
    </section>

    <section class="sci-faq">
        <div class="container">
            <div class="section-header"><h2>Second Citizenship by Investment FAQs</h2></div>
            <div class="sci-faq-list">
                <div class="sci-faq-item faq-item active">
                    <div class="sci-faq-question faq-question">Is second citizenship by investment legal?<span
                            class="sci-faq-toggle"></span></div>
                    <div class="sci-faq-answer">
                        <div class="sci-faq-answer-inner">Yes. These programs operate under national legislation and are
                            regulated by sovereign governments.
                        </div>
                    </div>
                </div>
                <div class="sci-faq-item faq-item">
                    <div class="sci-faq-question faq-question">How long does second citizenship by investment take?<span
                            class="sci-faq-toggle"></span></div>
                    <div class="sci-faq-answer">
                        <div class="sci-faq-answer-inner">Processing timelines vary depending on the country and its due
                            diligence procedures.
                        </div>
                    </div>
                </div>
                <div class="sci-faq-item faq-item">
                    <div class="sci-faq-question faq-question">Does investment automatically guarantee second citizenship?<span
                            class="sci-faq-toggle"></span></div>
                    <div class="sci-faq-answer">
                        <div class="sci-faq-answer-inner">No. All applications are subject to regulatory review and
                            official approval.
                        </div>
                    </div>
                </div>
                <div class="sci-faq-item faq-item">
                    <div class="sci-faq-question faq-question">Can family members apply together?<span class="sci-faq-toggle"></span>
                    </div>
                    <div class="sci-faq-answer">
                        <div class="sci-faq-answer-inner">Most programs allow inclusion of immediate family members
                            under one structured application.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sci-final-cta">
        <div class="container"><h2>Request Information About Dual Nationality Investment Programs</h2><a href="#top"
                                                                                                         class="btn btn-gold"
                                                                                                         onclick="document.querySelector('.hero-form input[name=name]').focus();return false;">Request
                Information</a></div>
    </section>

    <a href="https://wa.me/+923099992229" target="_blank" class="btn btn-whatsapp whatsapp-float"
       aria-label="Chat on WhatsApp">
        <svg viewBox="0 0 24 24" fill="currentColor">
            <path
                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
        </svg>
    </a>
@endsection
