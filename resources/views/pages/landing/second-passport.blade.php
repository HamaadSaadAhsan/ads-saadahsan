@extends('layouts.landing')

@section('meta_title', 'Second Passport | Legal Pathways to Obtain Dual Citizenship')
@section('meta_description', 'Learn how to obtain a second passport through government-approved citizenship programs offering lawful dual nationality and global mobility options.')

@push('meta')
<link rel="canonical" href="https://ads.saadahsan.com/second-passport">
<meta property="og:url" content="https://ads.saadahsan.com/second-passport">
<meta property="og:type" content="website">
<meta property="og:title" content="Second Passport | Legal Pathways to Obtain Dual Citizenship">
<meta property="og:description" content="Learn how to obtain a second passport through government-approved citizenship programs offering lawful dual nationality and global mobility options.">
<meta property="og:site_name" content="Saad Ahsan Residency & Citizenship">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="Second Passport | Legal Pathways to Obtain Dual Citizenship">
<meta name="twitter:description" content="Learn how to obtain a second passport through government-approved citizenship programs offering lawful dual nationality and global mobility options.">
<script type="application/ld+json">{"@@context":"https://schema.org","@@type":"WebPage","name":"Second Passport | Legal Pathways to Obtain Dual Citizenship","description":"Learn how to obtain a second passport through government-approved citizenship programs offering lawful dual nationality and global mobility options.","url":"https://ads.saadahsan.com/second-passport","publisher":{"@@type":"Organization","name":"Saad Ahsan Residency & Citizenship","url":"https://saadahsan.com"}}</script>
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@type": "FAQPage",
  "mainEntity": [
    {"@@type":"Question","name":"Is a second passport legal?","acceptedAnswer":{"@@type":"Answer","text":"Yes. A second passport is legal when obtained through a government-approved citizenship program."}},
    {"@@type":"Question","name":"How do I get a second passport?","acceptedAnswer":{"@@type":"Answer","text":"You must qualify under a lawful citizenship pathway defined by the issuing country and receive official approval."}},
    {"@@type":"Question","name":"Does a second passport mean dual citizenship?","acceptedAnswer":{"@@type":"Answer","text":"Yes. Holding a second passport indicates legal dual nationality, subject to the laws of both countries involved."}},
    {"@@type":"Question","name":"Can family members obtain a second passport together?","acceptedAnswer":{"@@type":"Answer","text":"Many citizenship programs allow inclusion of immediate family members under one structured application."}}
  ]
}
</script>
@endpush

@section('content')
<style>
/* ===== SECOND PASSPORT — DUAL IDENTITY ===== */

.spp-hero {
    min-height: 100vh;
    padding: 140px 0 100px;
    position: relative;
    display: flex;
    align-items: center;
    background: var(--charcoal);
    overflow: hidden;
}
.spp-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background:
        radial-gradient(ellipse 55% 50% at 15% 50%, rgba(128,0,32,.2) 0%, transparent 65%),
        radial-gradient(ellipse 50% 40% at 85% 30%, rgba(201,169,98,.08) 0%, transparent 60%);
}
.spp-hero::after {
    content: '';
    position: absolute;
    inset: 0;
    background: url("data:image/svg+xml,%3Csvg width='80' height='80' viewBox='0 0 80 80' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M0 40 L40 0 L80 40 L40 80Z' fill='none' stroke='%23C9A962' stroke-opacity='0.02' stroke-width='0.5'/%3E%3C/svg%3E");
    pointer-events: none;
}
.spp-hero .container { position: relative; z-index: 1; }
.spp-hero-grid {
    display: grid;
    grid-template-columns: 1fr 460px;
    gap: 60px;
    align-items: center;
}
.spp-hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 8px 20px;
    background: rgba(201,169,98,.1);
    border: 1px solid rgba(201,169,98,.25);
    border-radius: 50px;
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 2.5px;
    text-transform: uppercase;
    color: var(--gold);
    margin-bottom: 28px;
}
.spp-hero-badge::before {
    content: '';
    width: 6px;
    height: 6px;
    background: var(--gold);
    border-radius: 50%;
    animation: pulse 2s infinite;
}
.spp-hero h1 {
    color: var(--white);
    font-size: clamp(2.8rem, 5.5vw, 4.2rem);
    line-height: 1.1;
    margin-bottom: 16px;
}
.spp-hero h1 span {
    display: block;
    background: linear-gradient(135deg, var(--gold) 0%, var(--gold-light) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}
.spp-hero-subtitle {
    font-family: 'Cormorant Garamond', serif;
    font-size: 1.35rem;
    font-weight: 500;
    font-style: italic;
    color: var(--gold-light);
    margin-bottom: 20px;
    opacity: .9;
}
.spp-hero-lead {
    font-size: 1rem;
    line-height: 1.85;
    color: rgba(255,255,255,.8);
    max-width: 540px;
    margin-bottom: 0;
}
.spp-hero-highlights {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    margin-top: 40px;
    padding-top: 36px;
    border-top: 1px solid rgba(201,169,98,.15);
}
.spp-highlight {
    text-align: center;
    padding: 20px 12px;
    background: rgba(201,169,98,.06);
    border: 1px solid rgba(201,169,98,.12);
    border-radius: 16px;
    transition: all .3s ease;
}
.spp-highlight:hover {
    background: rgba(201,169,98,.12);
    border-color: rgba(201,169,98,.25);
    transform: translateY(-3px);
}
.spp-highlight-icon {
    width: 44px;
    height: 44px;
    margin: 0 auto 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, var(--gold) 0%, var(--gold-dark) 100%);
    border-radius: 12px;
}
.spp-highlight-icon svg { width: 22px; height: 22px; color: var(--charcoal); }
.spp-highlight-label {
    font-size: 12px;
    font-weight: 600;
    color: var(--white);
    letter-spacing: .5px;
    line-height: 1.4;
}

/* ===== PROCESS ===== */
.spp-process {
    padding: 100px 0;
    background: var(--white);
}
.spp-process .section-header {
    text-align: center;
    max-width: 680px;
    margin: 0 auto 60px;
}
.spp-process .section-header h2 { color: var(--charcoal); margin-bottom: 16px; }
.spp-steps {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 16px;
    max-width: 1000px;
    margin: 0 auto;
    position: relative;
}
.spp-steps::before {
    content: '';
    position: absolute;
    top: 36px;
    left: 10%;
    right: 10%;
    height: 2px;
    background: linear-gradient(90deg, var(--gold), var(--burgundy), var(--gold));
    opacity: .15;
}
.spp-step {
    text-align: center;
    position: relative;
    z-index: 1;
}
.spp-step-num {
    width: 52px;
    height: 52px;
    margin: 0 auto 18px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: var(--cream);
    border: 2px solid rgba(152,131,88,.2);
    border-radius: 50%;
    font-family: 'Cormorant Garamond', serif;
    font-size: 1.2rem;
    font-weight: 700;
    color: var(--burgundy);
    transition: all .4s ease;
}
.spp-step:hover .spp-step-num {
    background: var(--burgundy);
    color: var(--white);
    border-color: var(--burgundy);
    box-shadow: 0 6px 20px rgba(128,0,32,.2);
}
.spp-step-title {
    font-family: 'Cormorant Garamond', serif;
    font-size: 1rem;
    font-weight: 600;
    color: var(--charcoal);
    line-height: 1.35;
}

/* ===== ABOUT + ADVANTAGES ===== */
.spp-about {
    padding: 100px 0;
    background: var(--cream);
    position: relative;
    overflow: hidden;
}
.spp-about::before {
    content: '';
    position: absolute;
    top: -150px;
    left: -150px;
    width: 400px;
    height: 400px;
    background: radial-gradient(circle, rgba(128,0,32,.04) 0%, transparent 70%);
    border-radius: 50%;
}
.spp-about-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 80px;
    align-items: start;
}
.spp-about-content h2 { color: var(--charcoal); margin-bottom: 24px; }
.spp-about-content p { font-size: 1rem; line-height: 1.85; }
.spp-adv-card {
    background: var(--white);
    border-radius: 24px;
    padding: 44px 36px;
    box-shadow: 0 20px 60px rgba(0,0,0,.06);
    border: 1px solid rgba(152,131,88,.1);
    position: relative;
}
.spp-adv-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 32px;
    right: 32px;
    height: 4px;
    background: linear-gradient(90deg, var(--burgundy), var(--gold));
    border-radius: 0 0 4px 4px;
}
.spp-adv-card h3 { color: var(--charcoal); margin-bottom: 28px; font-size: 1.5rem; }
.spp-adv-item {
    display: flex;
    align-items: flex-start;
    gap: 16px;
    padding: 18px 0;
    border-bottom: 1px solid rgba(152,131,88,.1);
}
.spp-adv-item:last-child { border-bottom: none; padding-bottom: 0; }
.spp-adv-icon {
    flex-shrink: 0;
    width: 36px;
    height: 36px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, var(--burgundy) 0%, var(--burgundy-dark) 100%);
    border-radius: 10px;
}
.spp-adv-icon svg { width: 18px; height: 18px; color: var(--white); }
.spp-adv-text { font-size: 15px; color: var(--text-dark); line-height: 1.6; font-weight: 500; }

/* ===== ELIGIBILITY ===== */
.spp-eligibility {
    padding: 100px 0;
    background: var(--white);
}
.spp-eligibility-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 80px;
    align-items: center;
}
.spp-eligibility-content h2 { color: var(--charcoal); margin-bottom: 20px; }
.spp-eligibility-list {
    list-style: none;
    padding: 0;
    margin: 32px 0 0;
}
.spp-eligibility-list li {
    display: flex;
    align-items: flex-start;
    gap: 16px;
    padding: 16px 0;
    border-bottom: 1px solid rgba(152,131,88,.12);
}
.spp-eligibility-list li:last-child { border-bottom: none; }
.spp-eligibility-check {
    flex-shrink: 0;
    width: 28px;
    height: 28px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, var(--gold) 0%, var(--gold-dark) 100%);
    border-radius: 50%;
}
.spp-eligibility-check svg { width: 14px; height: 14px; color: var(--charcoal); }
.spp-eligibility-text { font-size: 15px; color: var(--text-dark); line-height: 1.65; }
.spp-cta-card {
    background: linear-gradient(135deg, var(--charcoal) 0%, var(--charcoal-light) 100%);
    border-radius: 24px;
    padding: 52px 40px;
    text-align: center;
    position: relative;
    overflow: hidden;
}
.spp-cta-card::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 4px;
    background: linear-gradient(90deg, var(--burgundy), var(--gold), var(--burgundy));
}
.spp-cta-card::after {
    content: '';
    position: absolute;
    bottom: -80px; right: -80px;
    width: 200px; height: 200px;
    background: radial-gradient(circle, rgba(201,169,98,.08) 0%, transparent 70%);
    border-radius: 50%;
}
.spp-cta-card h3 { color: var(--white); font-size: 1.75rem; margin-bottom: 16px; }
.spp-cta-card .btn { position: relative; z-index: 1; }

/* ===== FAQ ===== */
.spp-faq {
    padding: 100px 0;
    background: var(--cream);
}
.spp-faq .section-header { text-align: center; max-width: 680px; margin: 0 auto 60px; }
.spp-faq .section-header h2 { color: var(--charcoal); margin-bottom: 16px; }
.spp-faq-list { max-width: 800px; margin: 0 auto; }
.spp-faq-item {
    background: var(--white);
    border-radius: 16px;
    margin-bottom: 16px;
    overflow: hidden;
    border: 1px solid rgba(152,131,88,.12);
    transition: all .3s ease;
    box-shadow: 0 2px 8px rgba(0,0,0,.03);
}
.spp-faq-item:hover { border-color: rgba(152,131,88,.3); box-shadow: 0 8px 24px rgba(0,0,0,.06); }
.spp-faq-question {
    padding: 24px 30px;
    font-family: 'Cormorant Garamond', serif;
    font-size: 1.2rem;
    font-weight: 600;
    color: var(--charcoal);
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
    transition: color .3s ease;
}
.spp-faq-question:hover { color: var(--burgundy); }
.spp-faq-toggle {
    width: 36px; height: 36px;
    flex-shrink: 0;
    position: relative;
    background: var(--cream);
    border-radius: 50%;
    transition: all .3s ease;
}
.spp-faq-toggle::before {
    content: '';
    position: absolute;
    top: 50%; left: 50%;
    width: 14px; height: 2px;
    background: var(--burgundy);
    transform: translate(-50%, -50%);
}
.spp-faq-toggle::after {
    content: '';
    position: absolute;
    top: 50%; left: 50%;
    width: 2px; height: 14px;
    background: var(--burgundy);
    transform: translate(-50%, -50%);
    transition: all .3s ease;
}
.spp-faq-item.active .spp-faq-toggle { background: var(--burgundy); transform: rotate(45deg); }
.spp-faq-item.active .spp-faq-toggle::before,
.spp-faq-item.active .spp-faq-toggle::after { background: var(--white); }
.spp-faq-answer { max-height: 0; overflow: hidden; transition: max-height .4s ease; }
.spp-faq-answer-inner { padding: 0 30px 24px; color: var(--text-muted); font-size: 15px; line-height: 1.85; }
.spp-faq-item.active .spp-faq-answer { max-height: 300px; }

/* ===== FINAL CTA ===== */
.spp-final-cta {
    padding: 80px 0;
    background: var(--burgundy);
    position: relative;
    overflow: hidden;
    text-align: center;
}
.spp-final-cta::before {
    content: '';
    position: absolute;
    inset: 0;
    background: url("data:image/svg+xml,%3Csvg width='80' height='80' viewBox='0 0 80 80' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M0 40 L40 0 L80 40 L40 80Z' fill='none' stroke='%23ffffff' stroke-opacity='0.03' stroke-width='0.5'/%3E%3C/svg%3E");
    pointer-events: none;
}
.spp-final-cta .container { position: relative; z-index: 1; }
.spp-final-cta h2 { color: var(--white); margin-bottom: 16px; }
.spp-final-cta p { color: rgba(255,255,255,.8); font-size: 1.05rem; max-width: 560px; margin: 0 auto 32px; }

/* ===== RESPONSIVE ===== */
@@media (max-width: 1024px) {
    .spp-hero-grid { grid-template-columns: 1fr; gap: 48px; text-align: center; }
    .spp-hero-lead { margin: 0 auto; }
    .spp-hero-highlights { justify-content: center; }
    .hero-form { max-width: 520px; margin: 0 auto; }
    .spp-about-grid, .spp-eligibility-grid { grid-template-columns: 1fr; gap: 48px; }
    .spp-steps { grid-template-columns: repeat(3, 1fr); gap: 24px; }
}
@@media (max-width: 768px) {
    .spp-hero { min-height: auto; padding: 110px 0 60px; }
    .spp-process, .spp-about, .spp-eligibility, .spp-faq, .spp-final-cta { padding: 60px 0; }
    .spp-hero-highlights { grid-template-columns: 1fr; gap: 12px; }
    .spp-highlight { flex-direction: row; display: flex; align-items: center; gap: 14px; text-align: left; padding: 14px 18px; }
    .spp-highlight-icon { margin: 0; }
    .hero-form { padding: 28px 20px; }
    .form-row { grid-template-columns: 1fr; }
    .spp-adv-card { padding: 32px 24px; }
    .spp-cta-card { padding: 40px 24px; }
    .spp-steps { grid-template-columns: repeat(2, 1fr); }
}
@@media (max-width: 480px) {
    .spp-steps { grid-template-columns: 1fr; }
}
</style>

<!-- ===== HERO ===== -->
<section class="spp-hero">
    <div class="container">
        <div class="spp-hero-grid">
            <div class="spp-hero-content">
                <div class="spp-hero-badge">Legal Dual Citizenship Programs</div>
                <h1>Second Passport Through<span>Legal Citizenship Programs</span></h1>
                <p class="spp-hero-subtitle">Government-Approved Pathways to Acquire a Second Nationality</p>
                <p class="spp-hero-lead">A second passport is issued when an individual legally acquires citizenship of another country under its national laws. Governments that operate regulated citizenship programs may grant eligible applicants second nationality following due diligence, verification, and approval procedures.</p>
                <p class="spp-hero-lead" style="margin-top:-8px">A second passport is not a travel document obtained independently, but a result of lawful citizenship granted by a sovereign state.</p>
                <div class="spp-hero-highlights">
                    <div class="spp-highlight">
                        <div class="spp-highlight-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M14 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z"/></svg>
                        </div>
                        <span class="spp-highlight-label">Official Passport Issuance</span>
                    </div>
                    <div class="spp-highlight">
                        <div class="spp-highlight-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg>
                        </div>
                        <span class="spp-highlight-label">Legal Dual Nationality</span>
                    </div>
                    <div class="spp-highlight">
                        <div class="spp-highlight-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
                        </div>
                        <span class="spp-highlight-label">Family Inclusion Eligible</span>
                    </div>
                </div>
            </div>
            <x-landing-form
                source="second-passport"
                consultancy="second-passport"
                title="Request Details About Legal Second Citizenship Options"
                subtitle="Share your details and our experts will assess your eligibility."
            >Request Details</x-landing-form>
        </div>
    </div>
</section>

<!-- ===== PROCESS ===== -->
<section class="spp-process">
    <div class="container">
        <div class="section-header">
            <h2>How to Obtain a Second Passport Legally</h2>
            <p>Each country sets its own legal standards and regulatory procedures.</p>
        </div>
        <div class="spp-steps">
            <div class="spp-step">
                <div class="spp-step-num">01</div>
                <div class="spp-step-title">Meeting eligibility criteria defined by the issuing country</div>
            </div>
            <div class="spp-step">
                <div class="spp-step-num">02</div>
                <div class="spp-step-title">Submitting required documentation and identity verification</div>
            </div>
            <div class="spp-step">
                <div class="spp-step-num">03</div>
                <div class="spp-step-title">Undergoing government due diligence and background screening</div>
            </div>
            <div class="spp-step">
                <div class="spp-step-num">04</div>
                <div class="spp-step-title">Completing an approved citizenship pathway</div>
            </div>
            <div class="spp-step">
                <div class="spp-step-num">05</div>
                <div class="spp-step-title">Receiving citizenship approval and passport issuance</div>
            </div>
        </div>
    </div>
</section>

<!-- ===== WORLDWIDE ===== -->
<section style="padding:80px 0;background:var(--cream)">
    <div class="container" style="max-width:800px;text-align:center">
        <h2 style="color:var(--charcoal);margin-bottom:20px">Second Passport Programs Worldwide</h2>
        <p style="font-size:1rem;line-height:1.85;color:var(--text-muted);margin-bottom:16px">Several sovereign states operate legally established citizenship programs that allow qualified foreign applicants to acquire nationality under defined investment or economic contribution structures.</p>
        <p style="font-size:1rem;line-height:1.85;color:var(--text-muted)">These programs are regulated by national authorities and include compliance, background checks, and legislative oversight before citizenship is granted.</p>
    </div>
</section>

<!-- ===== ABOUT + ADVANTAGES ===== -->
<section class="spp-about">
    <div class="container">
        <div class="spp-about-grid">
            <div class="spp-about-content">
                <h2>What Is a Second Passport?</h2>
                <p>A second passport refers to a passport issued by a country after an individual becomes its citizen. It represents legal nationality and is granted under the laws of the issuing state.</p>
                <p>Second passports are obtained through structured legal pathways established by governments, including citizenship programs enacted under national legislation.</p>
            </div>
            <div class="spp-adv-card">
                <h3>Advantages of Holding a Second Passport</h3>
                <div class="spp-adv-item">
                    <div class="spp-adv-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/></svg>
                    </div>
                    <span class="spp-adv-text">Legal dual nationality issued by a sovereign government</span>
                </div>
                <div class="spp-adv-item">
                    <div class="spp-adv-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg>
                    </div>
                    <span class="spp-adv-text">Expanded international mobility depending on the issuing country</span>
                </div>
                <div class="spp-adv-item">
                    <div class="spp-adv-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
                    </div>
                    <span class="spp-adv-text">Diversification of nationality for long-term planning</span>
                </div>
                <div class="spp-adv-item">
                    <div class="spp-adv-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
                    </div>
                    <span class="spp-adv-text">Family inclusion under structured citizenship applications</span>
                </div>
                <div class="spp-adv-item">
                    <div class="spp-adv-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M14 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z"/></svg>
                    </div>
                    <span class="spp-adv-text">Citizenship status protected under national law</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== ELIGIBILITY ===== -->
<section class="spp-eligibility">
    <div class="container">
        <div class="spp-eligibility-grid">
            <div class="spp-eligibility-content">
                <h2>Who Can Apply for a Second Passport?</h2>
                <p>Eligibility depends on the laws of the issuing country. Applicants are generally required to:</p>
                <ul class="spp-eligibility-list">
                    <li>
                        <span class="spp-eligibility-check"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span>
                        <span class="spp-eligibility-text">Meet financial or qualification standards</span>
                    </li>
                    <li>
                        <span class="spp-eligibility-check"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span>
                        <span class="spp-eligibility-text">Provide verified documentation and source of funds</span>
                    </li>
                    <li>
                        <span class="spp-eligibility-check"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span>
                        <span class="spp-eligibility-text">Pass strict background and due diligence checks</span>
                    </li>
                    <li>
                        <span class="spp-eligibility-check"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span>
                        <span class="spp-eligibility-text">Comply with the legal citizenship framework</span>
                    </li>
                </ul>
                <p style="margin-top:24px">Final approval is granted only by the relevant government authority.</p>
            </div>
            <div class="spp-cta-card">
                <h3>Request Details About Legal Second Citizenship Options</h3>
                <a href="#top" class="btn btn-gold" onclick="document.querySelector('.hero-form input[name=name]').focus();return false;">Request Details</a>
            </div>
        </div>
    </div>
</section>

<!-- ===== FAQ ===== -->
<section class="spp-faq">
    <div class="container">
        <div class="section-header">
            <h2>Second Passport FAQs</h2>
        </div>
        <div class="spp-faq-list">
            <div class="spp-faq-item faq-item active">
                <div class="spp-faq-question faq-question">Is a second passport legal?<span class="spp-faq-toggle"></span></div>
                <div class="spp-faq-answer"><div class="spp-faq-answer-inner">Yes. A second passport is legal when obtained through a government-approved citizenship program.</div></div>
            </div>
            <div class="spp-faq-item faq-item">
                <div class="spp-faq-question faq-question">How do I get a second passport?<span class="spp-faq-toggle"></span></div>
                <div class="spp-faq-answer"><div class="spp-faq-answer-inner">You must qualify under a lawful citizenship pathway defined by the issuing country and receive official approval.</div></div>
            </div>
            <div class="spp-faq-item faq-item">
                <div class="spp-faq-question faq-question">Does a second passport mean dual citizenship?<span class="spp-faq-toggle"></span></div>
                <div class="spp-faq-answer"><div class="spp-faq-answer-inner">Yes. Holding a second passport indicates legal dual nationality, subject to the laws of both countries involved.</div></div>
            </div>
            <div class="spp-faq-item faq-item">
                <div class="spp-faq-question faq-question">Can family members obtain a second passport together?<span class="spp-faq-toggle"></span></div>
                <div class="spp-faq-answer"><div class="spp-faq-answer-inner">Many citizenship programs allow inclusion of immediate family members under one structured application.</div></div>
            </div>
        </div>
    </div>
</section>

<!-- ===== FINAL CTA ===== -->
<section class="spp-final-cta">
    <div class="container">
        <h2>Request Details About Legal Second Citizenship Options</h2>
        <a href="#top" class="btn btn-gold" onclick="document.querySelector('.hero-form input[name=name]').focus();return false;">Request Details</a>
    </div>
</section>

<!-- ===== WhatsApp Float ===== -->
<a href="https://wa.me/+923099992229" target="_blank" class="btn btn-whatsapp whatsapp-float" aria-label="Chat on WhatsApp">
    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
</a>
@endsection
