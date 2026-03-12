@extends('layouts.landing')

@section('meta_title', 'Portugal Residency by Investment | Legal Residence Through Investment')
@section('meta_description', 'Learn about Portugal residency by investment programs offering legal residence under government-regulated immigration pathways.')

@push('meta')
<link rel="canonical" href="https://ads.saadahsan.com/portugal-residency-by-investment">
<meta property="og:url" content="https://ads.saadahsan.com/portugal-residency-by-investment">
<meta property="og:type" content="website">
<meta property="og:title" content="Portugal Residency by Investment | Legal Residence Through Investment">
<meta property="og:description" content="Learn about Portugal residency by investment programs offering legal residence under government-regulated immigration pathways.">
<meta property="og:site_name" content="Saad Ahsan Residency & Citizenship">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="Portugal Residency by Investment | Legal Residence Through Investment">
<meta name="twitter:description" content="Learn about Portugal residency by investment programs offering legal residence under government-regulated immigration pathways.">
<script type="application/ld+json">{"@@context":"https://schema.org","@@type":"WebPage","name":"Portugal Residency by Investment | Legal Residence Through Investment","description":"Learn about Portugal residency by investment programs offering legal residence under government-regulated immigration pathways.","url":"https://ads.saadahsan.com/portugal-residency-by-investment","publisher":{"@@type":"Organization","name":"Saad Ahsan Residency & Citizenship","url":"https://saadahsan.com"}}</script>
<script type="application/ld+json">{"@@context":"https://schema.org","@@type":"FAQPage","mainEntity":[{"@@type":"Question","name":"Is Portugal residency by investment legal?","acceptedAnswer":{"@@type":"Answer","text":"Yes. It operates under Portuguese immigration legislation and is regulated by government authorities."}},{"@@type":"Question","name":"Does residency grant citizenship automatically?","acceptedAnswer":{"@@type":"Answer","text":"No. Residency does not automatically provide citizenship unless separate naturalization requirements are met."}},{"@@type":"Question","name":"Can family members be included?","acceptedAnswer":{"@@type":"Answer","text":"Yes. Eligible applicants may include immediate family members under one structured application."}},{"@@type":"Question","name":"Is government approval required?","acceptedAnswer":{"@@type":"Answer","text":"Yes. All applications are subject to formal review and approval."}}]}</script>
@endpush

@section('content')
<style>
.pri-hero{min-height:100vh;padding:140px 0 100px;position:relative;display:flex;align-items:center;background:linear-gradient(165deg,#1a1a1f 0%,#2a1f24 40%,#1a1a1f 100%);overflow:hidden}
.pri-hero::before{content:'';position:absolute;inset:0;background:radial-gradient(ellipse 70% 50% at 50% 80%,rgba(201,169,98,.08) 0%,transparent 60%),radial-gradient(ellipse 40% 40% at 15% 30%,rgba(128,0,32,.14) 0%,transparent 55%)}
.pri-hero::after{content:'';position:absolute;top:0;left:50%;transform:translateX(-50%);width:600px;height:300px;border-radius:0 0 300px 300px;border:1px solid rgba(201,169,98,.08);pointer-events:none}
.pri-hero .container{position:relative;z-index:1}
.pri-hero-grid{display:grid;grid-template-columns:1fr 460px;gap:60px;align-items:center}
.pri-arch-badge{display:inline-flex;align-items:center;gap:10px;padding:10px 24px;background:rgba(201,169,98,.07);border:1px solid rgba(201,169,98,.2);border-radius:0 0 20px 20px;font-size:11px;font-weight:600;letter-spacing:2.5px;text-transform:uppercase;color:var(--gold);margin-bottom:28px}
.pri-arch-badge::before{content:'';width:18px;height:1px;background:linear-gradient(90deg,transparent,var(--gold))}
.pri-arch-badge::after{content:'';width:18px;height:1px;background:linear-gradient(90deg,var(--gold),transparent)}
.pri-hero h1{color:var(--white);font-size:clamp(2.6rem,5.2vw,4rem);line-height:1.1;margin-bottom:16px}
.pri-hero h1 span{display:block;background:linear-gradient(135deg,var(--gold) 0%,var(--gold-light) 50%,var(--gold) 100%);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text}
.pri-hero-subtitle{font-family:'Cormorant Garamond',serif;font-size:1.3rem;font-weight:500;font-style:italic;color:var(--gold-light);margin-bottom:22px;opacity:.9}
.pri-hero-lead{font-size:1rem;line-height:1.85;color:rgba(255,255,255,.78);max-width:540px;margin-bottom:0}
.pri-hero-markers{display:flex;gap:28px;margin-top:40px;padding-top:36px;border-top:1px solid rgba(201,169,98,.12)}
.pri-marker{display:flex;align-items:center;gap:12px;padding:14px 20px;background:rgba(255,255,255,.03);border:1px solid rgba(201,169,98,.1);border-radius:0 0 16px 16px;flex:1;transition:all .3s ease}
.pri-marker:hover{background:rgba(201,169,98,.08);border-color:rgba(201,169,98,.25)}
.pri-marker-icon{width:40px;height:40px;display:flex;align-items:center;justify-content:center;background:linear-gradient(180deg,var(--gold) 0%,var(--gold-dark) 100%);border-radius:0 0 12px 12px;flex-shrink:0}
.pri-marker-icon svg{width:20px;height:20px;color:var(--charcoal)}
.pri-marker-label{font-size:12px;font-weight:600;color:var(--white);letter-spacing:.4px;line-height:1.4}
.pri-about{padding:100px 0;background:var(--white);position:relative}
.pri-about::before{content:'';position:absolute;top:0;left:50%;transform:translateX(-50%);width:1px;height:60px;background:linear-gradient(180deg,var(--gold),transparent)}
.pri-about-wrap{max-width:800px;margin:0 auto;text-align:center}
.pri-about-wrap h2{color:var(--charcoal);margin-bottom:24px}
.pri-about-wrap p{font-size:1rem;line-height:1.85;color:var(--text-muted);margin-bottom:16px}
.pri-about-wrap p:last-child{margin-bottom:0}
.pri-process{padding:100px 0;background:var(--cream);position:relative;overflow:hidden}
.pri-process::before{content:'';position:absolute;top:-200px;left:50%;transform:translateX(-50%);width:500px;height:500px;border-radius:50%;border:1px solid rgba(152,131,88,.06);pointer-events:none}
.pri-process .section-header{text-align:center;max-width:680px;margin:0 auto 60px}
.pri-process .section-header h2{color:var(--charcoal);margin-bottom:16px}
.pri-steps{display:grid;grid-template-columns:repeat(3,1fr);gap:20px;max-width:960px;margin:0 auto}
.pri-step{background:var(--white);border-radius:0 0 24px 24px;padding:36px 28px;border:1px solid rgba(152,131,88,.1);border-top:3px solid transparent;position:relative;transition:all .4s ease;overflow:hidden}
.pri-step::before{content:'';position:absolute;top:0;left:0;right:0;height:3px;background:linear-gradient(90deg,var(--burgundy),var(--gold));transition:opacity .3s ease}
.pri-step:hover{transform:translateY(-4px);box-shadow:0 20px 48px rgba(0,0,0,.07)}
.pri-step-num{display:inline-flex;align-items:center;justify-content:center;width:44px;height:44px;background:linear-gradient(180deg,var(--burgundy),#5a0016);border-radius:0 0 12px 12px;font-family:'Cormorant Garamond',serif;font-size:1.2rem;font-weight:700;color:var(--white);margin-bottom:18px}
.pri-step-title{font-family:'Cormorant Garamond',serif;font-size:1.15rem;font-weight:600;color:var(--charcoal);margin-bottom:0}
.pri-step-close{font-size:14px;color:var(--text-muted);line-height:1.7;max-width:960px;margin:32px auto 0;text-align:center}
.pri-invest{padding:100px 0;background:var(--white);position:relative;overflow:hidden}
.pri-invest::after{content:'';position:absolute;bottom:-100px;right:-100px;width:300px;height:300px;border-radius:50%;border:1px solid rgba(201,169,98,.05);pointer-events:none}
.pri-invest-grid{display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:start}
.pri-invest-content h2{color:var(--charcoal);margin-bottom:20px}
.pri-invest-content p{font-size:1rem;line-height:1.85;color:var(--text-muted);margin-bottom:16px}
.pri-invest-cards{display:grid;grid-template-columns:1fr 1fr;gap:16px}
.pri-inv-card{background:var(--cream);border-radius:0 0 20px 20px;padding:28px 22px;border:1px solid rgba(152,131,88,.1);border-top:3px solid var(--gold);transition:all .4s ease;text-align:center}
.pri-inv-card:hover{transform:translateY(-3px);box-shadow:0 12px 36px rgba(0,0,0,.06)}
.pri-inv-card-icon{width:48px;height:48px;margin:0 auto 16px;display:flex;align-items:center;justify-content:center;background:linear-gradient(180deg,var(--gold) 0%,var(--gold-dark) 100%);border-radius:0 0 14px 14px}
.pri-inv-card-icon svg{width:24px;height:24px;color:var(--charcoal)}
.pri-inv-card-title{font-family:'Cormorant Garamond',serif;font-size:1.05rem;font-weight:600;color:var(--charcoal);line-height:1.4;margin:0}
.pri-invest-note{font-size:14px;color:var(--text-muted);line-height:1.7;margin-top:20px;font-style:italic}
.pri-features{padding:100px 0;background:var(--cream);position:relative}
.pri-features::before{content:'';position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);width:400px;height:400px;border-radius:0 0 200px 200px;border:1px solid rgba(128,0,32,.04);pointer-events:none}
.pri-features-split{display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:center}
.pri-features-panel{background:var(--white);border-radius:0 0 28px 28px;padding:48px 36px;box-shadow:0 20px 60px rgba(0,0,0,.06);border:1px solid rgba(152,131,88,.1);position:relative}
.pri-features-panel::before{content:'';position:absolute;top:0;left:28px;right:28px;height:4px;background:linear-gradient(90deg,var(--burgundy),var(--gold));border-radius:0 0 4px 4px}
.pri-features-panel h3{color:var(--charcoal);margin-bottom:28px;font-size:1.45rem}
.pri-feat-item{display:flex;align-items:flex-start;gap:16px;padding:16px 0;border-bottom:1px solid rgba(152,131,88,.1)}
.pri-feat-item:last-child{border-bottom:none;padding-bottom:0}
.pri-feat-icon{flex-shrink:0;width:34px;height:34px;display:flex;align-items:center;justify-content:center;background:linear-gradient(180deg,var(--burgundy) 0%,#5a0016 100%);border-radius:0 0 10px 10px}
.pri-feat-icon svg{width:17px;height:17px;color:var(--white)}
.pri-feat-text{font-size:15px;color:var(--text-dark);line-height:1.6;font-weight:500}
.pri-features-content h2{color:var(--charcoal);margin-bottom:24px}
.pri-features-note{font-size:14px;color:var(--text-muted);font-style:italic;margin-top:8px;line-height:1.7}
.pri-eligibility{padding:100px 0;background:var(--white)}
.pri-eligibility-grid{display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:center}
.pri-eligibility-content h2{color:var(--charcoal);margin-bottom:20px}
.pri-eligibility-content>p{font-size:1rem;line-height:1.85;color:var(--text-muted)}
.pri-eligibility-list{list-style:none;padding:0;margin:28px 0 0}
.pri-eligibility-list li{display:flex;align-items:flex-start;gap:16px;padding:16px 0;border-bottom:1px solid rgba(152,131,88,.12)}
.pri-eligibility-list li:last-child{border-bottom:none}
.pri-eligibility-check{flex-shrink:0;width:28px;height:28px;display:flex;align-items:center;justify-content:center;background:linear-gradient(180deg,var(--gold) 0%,var(--gold-dark) 100%);border-radius:50%}
.pri-eligibility-check svg{width:14px;height:14px;color:var(--charcoal)}
.pri-eligibility-text{font-size:15px;color:var(--text-dark);line-height:1.65}
.pri-eligibility-close{font-size:14px;color:var(--text-muted);margin-top:24px;line-height:1.7}
.pri-cta-card{background:linear-gradient(135deg,var(--charcoal) 0%,#2a2a30 100%);border-radius:0 0 28px 28px;padding:52px 40px;text-align:center;position:relative;overflow:hidden}
.pri-cta-card::before{content:'';position:absolute;top:0;left:0;right:0;height:4px;background:linear-gradient(90deg,var(--burgundy),var(--gold),var(--burgundy))}
.pri-cta-card::after{content:'';position:absolute;bottom:-60px;right:-60px;width:180px;height:180px;background:radial-gradient(circle,rgba(201,169,98,.08) 0%,transparent 70%);border-radius:50%}
.pri-cta-card h3{color:var(--white);font-size:1.7rem;margin-bottom:16px}
.pri-cta-card .btn{position:relative;z-index:1}
.pri-faq{padding:100px 0;background:var(--cream)}
.pri-faq .section-header{text-align:center;max-width:680px;margin:0 auto 60px}
.pri-faq .section-header h2{color:var(--charcoal);margin-bottom:16px}
.pri-faq-list{max-width:800px;margin:0 auto}
.pri-faq-item{background:var(--white);border-radius:0 0 16px 16px;margin-bottom:16px;overflow:hidden;border:1px solid rgba(152,131,88,.12);transition:all .3s ease;box-shadow:0 2px 8px rgba(0,0,0,.03)}
.pri-faq-item:hover{border-color:rgba(152,131,88,.3);box-shadow:0 8px 24px rgba(0,0,0,.06)}
.pri-faq-question{padding:24px 30px;font-family:'Cormorant Garamond',serif;font-size:1.2rem;font-weight:600;color:var(--charcoal);cursor:pointer;display:flex;justify-content:space-between;align-items:center;transition:color .3s ease}
.pri-faq-question:hover{color:var(--burgundy)}
.pri-faq-toggle{width:36px;height:36px;flex-shrink:0;position:relative;background:var(--cream);border-radius:0 0 10px 10px;transition:all .3s ease}
.pri-faq-toggle::before{content:'';position:absolute;top:50%;left:50%;width:14px;height:2px;background:var(--burgundy);transform:translate(-50%,-50%)}
.pri-faq-toggle::after{content:'';position:absolute;top:50%;left:50%;width:2px;height:14px;background:var(--burgundy);transform:translate(-50%,-50%);transition:all .3s ease}
.pri-faq-item.active .pri-faq-toggle{background:var(--burgundy);transform:rotate(45deg);border-radius:50%}
.pri-faq-item.active .pri-faq-toggle::before,.pri-faq-item.active .pri-faq-toggle::after{background:var(--white)}
.pri-faq-answer{max-height:0;overflow:hidden;transition:max-height .4s ease}
.pri-faq-answer-inner{padding:0 30px 24px;color:var(--text-muted);font-size:15px;line-height:1.85}
.pri-faq-item.active .pri-faq-answer{max-height:300px}
.pri-final-cta{padding:80px 0;background:var(--burgundy);position:relative;overflow:hidden;text-align:center}
.pri-final-cta::before{content:'';position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);width:500px;height:250px;border-radius:0 0 250px 250px;border:1px solid rgba(255,255,255,.04);pointer-events:none}
.pri-final-cta .container{position:relative;z-index:1}
.pri-final-cta h2{color:var(--white);margin-bottom:16px}
@media(max-width:1024px){.pri-hero-grid{grid-template-columns:1fr;gap:48px;text-align:center}.pri-hero-lead{margin:0 auto}.hero-form{max-width:520px;margin:0 auto}.pri-hero-markers{justify-content:center;flex-wrap:wrap}.pri-invest-grid,.pri-features-split,.pri-eligibility-grid{grid-template-columns:1fr;gap:48px}.pri-steps{grid-template-columns:repeat(2,1fr)}}
@media(max-width:768px){.pri-hero{min-height:auto;padding:110px 0 60px}.pri-about,.pri-process,.pri-invest,.pri-features,.pri-eligibility,.pri-faq,.pri-final-cta{padding:60px 0}.pri-hero-markers{flex-direction:column;gap:12px}.pri-marker{justify-content:flex-start}.hero-form{padding:28px 20px}.form-row{grid-template-columns:1fr}.pri-steps{grid-template-columns:1fr}.pri-invest-cards{grid-template-columns:1fr}.pri-features-panel{padding:32px 24px}.pri-cta-card{padding:40px 24px}}
@media(max-width:480px){.pri-hero h1{font-size:2.2rem}.pri-about-wrap{padding:0 8px}}
</style>

<section class="pri-hero"><div class="container"><div class="pri-hero-grid"><div class="pri-hero-content">
<div class="pri-arch-badge">Government-Regulated Pathway</div>
<h1>Portugal Residency by Investment<span>Explained</span></h1>
<p class="pri-hero-subtitle">Government-Regulated Pathways to Legal Residence in Portugal</p>
<p class="pri-hero-lead">Portugal residency by investment refers to structured immigration programs that allow eligible foreign nationals to obtain legal residence in Portugal through a qualifying economic contribution. These programs operate under national immigration legislation and are administered by authorized government authorities.</p>
<p class="pri-hero-lead" style="margin-top:12px">Residency is granted only after documentation review, compliance screening, and formal approval under Portuguese law.</p>
<div class="pri-hero-markers">
    <div class="pri-marker"><div class="pri-marker-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg></div><span class="pri-marker-label">Government-Regulated Status</span></div>
    <div class="pri-marker"><div class="pri-marker-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/></svg></div><span class="pri-marker-label">Portuguese Immigration Law</span></div>
    <div class="pri-marker"><div class="pri-marker-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg></div><span class="pri-marker-label">Family Inclusion Eligible</span></div>
</div></div>
<x-landing-form
                source="portugal-residency-by-investment"
                consultancy="portugal-golden-visa"
                title="Check Eligibility for Portugal Residency Programs"
                subtitle="Share your details and our experts will assess your eligibility."
            >Check Eligibility</x-landing-form></div></div></section>

<section class="pri-about"><div class="container">
<div class="pri-about-wrap">
    <h2>What Is Portugal Residency by Investment?</h2>
    <p>Portugal residency by investment is a legal framework that enables foreign applicants to secure residence rights in Portugal by completing an approved investment. The investment must meet regulatory criteria defined by national immigration rules.</p>
    <p>Residency status grants the right to live in Portugal but does not automatically confer Portuguese citizenship.</p>
</div></div></section>

<section class="pri-process"><div class="container">
<div class="section-header"><h2>How Portugal Residency by Investment Works</h2></div>
<div class="pri-steps">
    <div class="pri-step"><div class="pri-step-num">01</div><div class="pri-step-title">Initial Eligibility Assessment</div></div>
    <div class="pri-step"><div class="pri-step-num">02</div><div class="pri-step-title">Selection of an Approved Investment Category</div></div>
    <div class="pri-step"><div class="pri-step-num">03</div><div class="pri-step-title">Submission of Required Documentation</div></div>
    <div class="pri-step"><div class="pri-step-num">04</div><div class="pri-step-title">Government Compliance and Background Checks</div></div>
    <div class="pri-step"><div class="pri-step-num">05</div><div class="pri-step-title">Completion of Qualifying Investment</div></div>
    <div class="pri-step"><div class="pri-step-num">06</div><div class="pri-step-title">Issuance of Residence Permit</div></div>
</div>
<p class="pri-step-close">Each application is reviewed individually in accordance with immigration legislation.</p>
</div></section>

<section class="pri-invest"><div class="container"><div class="pri-invest-grid">
<div class="pri-invest-content">
    <h2>Common Investment Categories</h2>
    <p>Investment routes may include:</p>
    <p class="pri-invest-note">Program structure and eligibility standards may evolve based on regulatory updates.</p>
</div>
<div class="pri-invest-cards">
    <div class="pri-inv-card"><div class="pri-inv-card-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M11.8 10.9c-2.27-.59-3-1.2-3-2.15 0-1.09 1.01-1.85 2.7-1.85 1.78 0 2.44.85 2.5 2.1h2.21c-.07-1.72-1.12-3.3-3.21-3.81V3h-3v2.16c-1.94.42-3.5 1.68-3.5 3.61 0 2.31 1.91 3.46 4.7 4.13 2.5.6 3 1.48 3 2.41 0 .69-.49 1.79-2.7 1.79-2.06 0-2.87-.92-2.98-2.1h-2.2c.12 2.19 1.76 3.42 3.68 3.83V21h3v-2.15c1.95-.37 3.5-1.5 3.5-3.55 0-2.84-2.43-3.81-4.7-4.4z"/></svg></div><div class="pri-inv-card-title">Regulated Investment Funds</div></div>
    <div class="pri-inv-card"><div class="pri-inv-card-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 7V3H2v18h20V7H12zM6 19H4v-2h2v2zm0-4H4v-2h2v2zm0-4H4V9h2v2zm0-4H4V5h2v2zm4 12H8v-2h2v2zm0-4H8v-2h2v2zm0-4H8V9h2v2zm0-4H8V5h2v2zm10 12h-8v-2h2v-2h-2v-2h2v-2h-2V9h8v10zm-2-8h-2v2h2v-2zm0 4h-2v2h2v-2z"/></svg></div><div class="pri-inv-card-title">Business or Entrepreneurial Activity</div></div>
    <div class="pri-inv-card"><div class="pri-inv-card-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 3L1 9l4 2.18v6L12 21l7-3.82v-6l2-1.09V17h2V9L12 3zm6.82 6L12 12.72 5.18 9 12 5.28 18.82 9zM17 15.99l-5 2.73-5-2.73v-3.72L12 15l5-2.73v3.72z"/></svg></div><div class="pri-inv-card-title">Cultural or Research Contributions</div></div>
    <div class="pri-inv-card"><div class="pri-inv-card-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z"/></svg></div><div class="pri-inv-card-title">Other Categories Defined by Current Portuguese Law</div></div>
</div></div></div></section>

<section class="pri-features"><div class="container"><div class="pri-features-split">
<div class="pri-features-panel">
    <h3>Key Features of Portugal Residency by Investment</h3>
    <div class="pri-feat-item"><div class="pri-feat-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg></div><span class="pri-feat-text">Government-regulated residency status</span></div>
    <div class="pri-feat-item"><div class="pri-feat-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg></div><span class="pri-feat-text">Legal right to reside in Portugal</span></div>
    <div class="pri-feat-item"><div class="pri-feat-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/></svg></div><span class="pri-feat-text">Defined validity periods subject to renewal</span></div>
    <div class="pri-feat-item"><div class="pri-feat-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg></div><span class="pri-feat-text">Eligibility to include immediate family members</span></div>
    <div class="pri-feat-item"><div class="pri-feat-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/></svg></div><span class="pri-feat-text">Compliance with national immigration regulations</span></div>
</div>
<div class="pri-features-content">
    <h2>A Structured Pathway to Residence</h2>
    <p class="pri-features-note">All approvals remain subject to official government review.</p>
</div></div></div></section>

<section class="pri-eligibility"><div class="container"><div class="pri-eligibility-grid">
<div class="pri-eligibility-content">
    <h2>Who Can Apply for Portugal Residency by Investment?</h2>
    <p>Eligibility is determined under the legal framework governing Portuguese immigration. Applicants are generally required to:</p>
    <ul class="pri-eligibility-list">
        <li><span class="pri-eligibility-check"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span><span class="pri-eligibility-text">Meet financial qualification thresholds</span></li>
        <li><span class="pri-eligibility-check"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span><span class="pri-eligibility-text">Demonstrate lawful source of funds</span></li>
        <li><span class="pri-eligibility-check"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span><span class="pri-eligibility-text">Pass background and compliance screening</span></li>
        <li><span class="pri-eligibility-check"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span><span class="pri-eligibility-text">Fulfill documentation and investment requirements</span></li>
    </ul>
    <p class="pri-eligibility-close">Final approval is granted solely by authorized immigration authorities.</p>
</div>
<div class="pri-cta-card"><h3>Check Eligibility for Portugal Residency Programs</h3><a href="#top" class="btn btn-gold" onclick="document.querySelector('.hero-form input[name=name]').focus();return false;">Check Eligibility</a></div>
</div></div></section>

<section class="pri-faq"><div class="container">
<div class="section-header"><h2>Portugal Residency by Investment FAQs</h2></div>
<div class="pri-faq-list">
    <div class="pri-faq-item faq-item active"><div class="pri-faq-question faq-question">Is Portugal residency by investment legal?<span class="pri-faq-toggle"></span></div><div class="pri-faq-answer"><div class="pri-faq-answer-inner">Yes. It operates under Portuguese immigration legislation and is regulated by government authorities.</div></div></div>
    <div class="pri-faq-item faq-item"><div class="pri-faq-question faq-question">Does residency grant citizenship automatically?<span class="pri-faq-toggle"></span></div><div class="pri-faq-answer"><div class="pri-faq-answer-inner">No. Residency does not automatically provide citizenship unless separate naturalization requirements are met.</div></div></div>
    <div class="pri-faq-item faq-item"><div class="pri-faq-question faq-question">Can family members be included?<span class="pri-faq-toggle"></span></div><div class="pri-faq-answer"><div class="pri-faq-answer-inner">Yes. Eligible applicants may include immediate family members under one structured application.</div></div></div>
    <div class="pri-faq-item faq-item"><div class="pri-faq-question faq-question">Is government approval required?<span class="pri-faq-toggle"></span></div><div class="pri-faq-answer"><div class="pri-faq-answer-inner">Yes. All applications are subject to formal review and approval.</div></div></div>
</div></div></section>

<section class="pri-final-cta"><div class="container"><h2>Check Eligibility for Portugal Residency Programs</h2><a href="#top" class="btn btn-gold" onclick="document.querySelector('.hero-form input[name=name]').focus();return false;">Check Eligibility</a></div></section>

<a href="https://wa.me/+923099992229" target="_blank" class="btn btn-whatsapp whatsapp-float" aria-label="Chat on WhatsApp"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg></a>
@endsection
