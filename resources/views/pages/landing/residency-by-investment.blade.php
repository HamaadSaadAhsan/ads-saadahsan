@extends('layouts.landing')

@section('meta_title', 'Residency by Investment | Legal Residence Through Government Programs')
@section('meta_description', 'Learn about residency by investment programs that grant legal residence through regulated government-approved investment pathways.')

@push('meta')
<link rel="canonical" href="https://ads.saadahsan.com/residency-by-investment">
<meta property="og:url" content="https://ads.saadahsan.com/residency-by-investment">
<meta property="og:type" content="website">
<meta property="og:title" content="Residency by Investment | Legal Residence Through Government Programs">
<meta property="og:description" content="Learn about residency by investment programs that grant legal residence through regulated government-approved investment pathways.">
<meta property="og:site_name" content="Saad Ahsan Residency & Citizenship">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="Residency by Investment | Legal Residence Through Government Programs">
<meta name="twitter:description" content="Learn about residency by investment programs that grant legal residence through regulated government-approved investment pathways.">
<script type="application/ld+json">{"@@context":"https://schema.org","@@type":"WebPage","name":"Residency by Investment | Legal Residence Through Government Programs","description":"Learn about residency by investment programs that grant legal residence through regulated government-approved investment pathways.","url":"https://ads.saadahsan.com/residency-by-investment","publisher":{"@@type":"Organization","name":"Saad Ahsan Residency & Citizenship","url":"https://saadahsan.com"}}</script>
<script type="application/ld+json">{"@@context":"https://schema.org","@@type":"FAQPage","mainEntity":[{"@@type":"Question","name":"Is residency by investment legal?","acceptedAnswer":{"@@type":"Answer","text":"Yes. These programs operate under national immigration legislation and are regulated by government authorities."}},{"@@type":"Question","name":"Does residency by investment grant citizenship?","acceptedAnswer":{"@@type":"Answer","text":"No. Residency status does not automatically provide citizenship unless separate legal requirements are met."}},{"@@type":"Question","name":"How long is residency valid?","acceptedAnswer":{"@@type":"Answer","text":"Validity depends on the specific program and country, and may be subject to renewal conditions."}},{"@@type":"Question","name":"Can family members be included?","acceptedAnswer":{"@@type":"Answer","text":"Many programs allow inclusion of immediate family members under one structured application."}}]}</script>
@endpush

@section('content')
<style>
.rsi-hero{min-height:100vh;padding:140px 0 100px;position:relative;display:flex;align-items:center;background:var(--charcoal);overflow:hidden}
.rsi-hero::before{content:'';position:absolute;inset:0;background:radial-gradient(ellipse 55% 50% at 75% 45%,rgba(128,0,32,.16) 0%,transparent 60%),radial-gradient(ellipse 45% 40% at 15% 65%,rgba(201,169,98,.1) 0%,transparent 50%)}
.rsi-hero::after{content:'';position:absolute;inset:0;background:url("data:image/svg+xml,%3Csvg width='80' height='80' viewBox='0 0 80 80' xmlns='http://www.w3.org/2000/svg'%3E%3Cline x1='0' y1='40' x2='80' y2='40' stroke='%23C9A962' stroke-opacity='0.02' stroke-width='0.5'/%3E%3Cline x1='40' y1='0' x2='40' y2='80' stroke='%23C9A962' stroke-opacity='0.02' stroke-width='0.5'/%3E%3C/svg%3E");pointer-events:none}
.rsi-hero .container{position:relative;z-index:1}
.rsi-hero-grid{display:grid;grid-template-columns:1fr 460px;gap:60px;align-items:center}
.rsi-hero-badge{display:inline-flex;align-items:center;gap:10px;padding:8px 20px;background:rgba(201,169,98,.1);border:1px solid rgba(201,169,98,.25);border-radius:50px;font-size:11px;font-weight:600;letter-spacing:2.5px;text-transform:uppercase;color:var(--gold);margin-bottom:28px}
.rsi-hero-badge::before{content:'';width:6px;height:6px;background:var(--gold);border-radius:50%;animation:pulse 2s infinite}
.rsi-hero h1{color:var(--white);font-size:clamp(2.8rem,5.5vw,4.2rem);line-height:1.1;margin-bottom:16px}
.rsi-hero h1 span{display:block;background:linear-gradient(135deg,var(--gold) 0%,var(--gold-light) 100%);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text}
.rsi-hero-subtitle{font-family:'Cormorant Garamond','Cormorant Garamond Fallback',Georgia,serif;font-size:1.35rem;font-weight:500;font-style:italic;color:var(--gold-light);margin-bottom:20px;opacity:.9}
.rsi-hero-lead{font-size:1rem;line-height:1.85;color:rgba(255,255,255,.8);max-width:540px;margin-bottom:0}
.rsi-hero-highlights{display:grid;grid-template-columns:repeat(3,1fr);gap:20px;margin-top:40px;padding-top:36px;border-top:1px solid rgba(201,169,98,.15)}
.rsi-highlight{text-align:center;padding:20px 12px;background:rgba(201,169,98,.06);border:1px solid rgba(201,169,98,.12);border-radius:16px;transition:color .3s ease,background .3s ease,border-color .3s ease,transform .3s ease,box-shadow .3s ease,opacity .3s ease}
.rsi-highlight:hover{background:rgba(201,169,98,.12);border-color:rgba(201,169,98,.25);transform:translateY(-3px)}
.rsi-highlight-icon{width:44px;height:44px;margin:0 auto 12px;display:flex;align-items:center;justify-content:center;background:linear-gradient(135deg,var(--gold) 0%,var(--gold-dark) 100%);border-radius:12px}
.rsi-highlight-icon svg{width:22px;height:22px;color:var(--charcoal)}
.rsi-highlight-label{font-size:12px;font-weight:600;color:var(--white);letter-spacing:.5px;line-height:1.4}
.rsi-process{padding:100px 0;background:var(--white)}
.rsi-process .section-header{text-align:center;max-width:680px;margin:0 auto 60px}
.rsi-process .section-header h2{color:var(--charcoal);margin-bottom:16px}
.rsi-steps{max-width:720px;margin:0 auto;position:relative;padding-left:48px}
.rsi-steps::before{content:'';position:absolute;left:38px;top:0;bottom:0;width:2px;background:linear-gradient(180deg,var(--burgundy),var(--gold),rgba(201,169,98,.2))}
.rsi-step{position:relative;padding:0 0 40px 32px}.rsi-step:last-child{padding-bottom:0}
.rsi-step-dot{position:absolute;left:-29px;top:2px;width:40px;height:40px;display:flex;align-items:center;justify-content:center;background:linear-gradient(135deg,var(--burgundy),var(--burgundy-dark));border-radius:50%;font-family:'Cormorant Garamond','Cormorant Garamond Fallback',Georgia,serif;font-size:1rem;font-weight:700;color:var(--white);box-shadow:0 4px 16px rgba(128,0,32,.25);z-index:1}
.rsi-step-title{font-family:'Cormorant Garamond','Cormorant Garamond Fallback',Georgia,serif;font-size:1.2rem;font-weight:600;color:var(--charcoal);margin-bottom:4px}
.rsi-step-desc{font-size:14px;color:var(--text-muted);line-height:1.65;margin:0}
.rsi-about{padding:100px 0;background:var(--cream);position:relative;overflow:hidden}
.rsi-about::before{content:'';position:absolute;bottom:-100px;left:-100px;width:350px;height:350px;background:radial-gradient(circle,rgba(128,0,32,.04) 0%,transparent 70%);border-radius:50%}
.rsi-about-content{max-width:800px;margin:0 auto}
.rsi-about-content h2{color:var(--charcoal);margin-bottom:24px;text-align:center}
.rsi-about-content p{font-size:1rem;line-height:1.85;text-align:center;max-width:700px;margin:0 auto 16px}
.rsi-about-content p:last-of-type{margin-bottom:0}
.rsi-compare{padding:100px 0;background:var(--white)}
.rsi-compare .section-header{text-align:center;max-width:680px;margin:0 auto 60px}
.rsi-compare .section-header h2{color:var(--charcoal);margin-bottom:16px}
.rsi-compare-grid{display:grid;grid-template-columns:1fr 1fr;gap:32px;max-width:880px;margin:0 auto}
.rsi-compare-card{border-radius:24px;padding:44px 36px;position:relative;overflow:hidden;border:1px solid rgba(152,131,88,.12);box-shadow:0 12px 40px rgba(0,0,0,.05)}
.rsi-compare-card--residency{background:var(--cream)}
.rsi-compare-card--residency::before{content:'';position:absolute;top:0;left:0;right:0;height:4px;background:linear-gradient(90deg,var(--gold),var(--gold-dark))}
.rsi-compare-card--citizenship{background:var(--charcoal)}
.rsi-compare-card--citizenship::before{content:'';position:absolute;top:0;left:0;right:0;height:4px;background:linear-gradient(90deg,var(--burgundy),var(--gold))}
.rsi-compare-badge{display:inline-block;padding:6px 16px;border-radius:50px;font-size:11px;font-weight:700;letter-spacing:2px;text-transform:uppercase;margin-bottom:24px}
.rsi-compare-card--residency .rsi-compare-badge{background:rgba(201,169,98,.15);color:var(--gold-dark)}
.rsi-compare-card--citizenship .rsi-compare-badge{background:rgba(128,0,32,.3);color:rgba(255,255,255,.9)}
.rsi-compare-card h3{font-size:1.4rem;margin-bottom:16px}
.rsi-compare-card--residency h3{color:var(--charcoal)}
.rsi-compare-card--citizenship h3{color:var(--white)}
.rsi-compare-card p{font-size:15px;line-height:1.8}
.rsi-compare-card--residency p{color:var(--text-muted)}
.rsi-compare-card--citizenship p{color:rgba(255,255,255,.75)}
.rsi-compare-note{text-align:center;margin-top:32px;font-size:15px;color:var(--text-muted);line-height:1.8;max-width:700px;margin-left:auto;margin-right:auto}
.rsi-features{padding:100px 0;background:var(--cream);position:relative;overflow:hidden}
.rsi-features::before{content:'';position:absolute;top:-80px;right:-80px;width:300px;height:300px;background:radial-gradient(circle,rgba(201,169,98,.05) 0%,transparent 70%);border-radius:50%}
.rsi-features-grid{display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:start}
.rsi-features-content h2{color:var(--charcoal);margin-bottom:20px}
.rsi-features-list{list-style:none;padding:0;margin:28px 0 0}
.rsi-features-list li{display:flex;align-items:flex-start;gap:16px;padding:18px 0;border-bottom:1px solid rgba(152,131,88,.12)}.rsi-features-list li:last-child{border-bottom:none;padding-bottom:0}
.rsi-feature-icon{flex-shrink:0;width:36px;height:36px;display:flex;align-items:center;justify-content:center;background:linear-gradient(135deg,var(--burgundy) 0%,var(--burgundy-dark) 100%);border-radius:10px}.rsi-feature-icon svg{width:18px;height:18px;color:var(--white)}
.rsi-feature-text{font-size:15px;color:var(--text-dark);line-height:1.65;font-weight:500}
.rsi-features-note{margin-top:20px;font-size:14px;color:var(--text-muted);font-style:italic;padding-left:52px}
.rsi-cta-card{background:linear-gradient(135deg,var(--charcoal) 0%,var(--charcoal-light) 100%);border-radius:24px;padding:52px 40px;text-align:center;position:relative;overflow:hidden}
.rsi-cta-card::before{content:'';position:absolute;top:0;left:0;right:0;height:4px;background:linear-gradient(90deg,var(--burgundy),var(--gold),var(--burgundy))}
.rsi-cta-card::after{content:'';position:absolute;bottom:-80px;right:-80px;width:200px;height:200px;background:radial-gradient(circle,rgba(201,169,98,.08) 0%,transparent 70%);border-radius:50%}
.rsi-cta-card h3{color:var(--white);font-size:1.75rem;margin-bottom:16px}.rsi-cta-card .btn{position:relative;z-index:1}
.rsi-eligibility{padding:100px 0;background:var(--white)}
.rsi-eligibility-grid{display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:center}
.rsi-eligibility-content h2{color:var(--charcoal);margin-bottom:20px}
.rsi-eligibility-list{list-style:none;padding:0;margin:32px 0 0}
.rsi-eligibility-list li{display:flex;align-items:flex-start;gap:16px;padding:16px 0;border-bottom:1px solid rgba(152,131,88,.12)}.rsi-eligibility-list li:last-child{border-bottom:none}
.rsi-eligibility-check{flex-shrink:0;width:28px;height:28px;display:flex;align-items:center;justify-content:center;background:linear-gradient(135deg,var(--gold) 0%,var(--gold-dark) 100%);border-radius:50%}.rsi-eligibility-check svg{width:14px;height:14px;color:var(--charcoal)}
.rsi-eligibility-text{font-size:15px;color:var(--text-dark);line-height:1.65}
.rsi-faq{padding:100px 0;background:var(--cream)}.rsi-faq .section-header{text-align:center;max-width:680px;margin:0 auto 60px}.rsi-faq .section-header h2{color:var(--charcoal);margin-bottom:16px}
.rsi-faq-list{max-width:800px;margin:0 auto}
.rsi-faq-item{background:var(--white);border-radius:16px;margin-bottom:16px;overflow:hidden;border:1px solid rgba(152,131,88,.12);transition:color .3s ease,background .3s ease,border-color .3s ease,transform .3s ease,box-shadow .3s ease,opacity .3s ease;box-shadow:0 2px 8px rgba(0,0,0,.03)}
.rsi-faq-item:hover{border-color:rgba(152,131,88,.3);box-shadow:0 8px 24px rgba(0,0,0,.06)}
.rsi-faq-question{padding:24px 30px;font-family:'Cormorant Garamond','Cormorant Garamond Fallback',Georgia,serif;font-size:1.2rem;font-weight:600;color:var(--charcoal);cursor:pointer;display:flex;justify-content:space-between;align-items:center;transition:color .3s ease}.rsi-faq-question:hover{color:var(--burgundy)}
.rsi-faq-toggle{width:36px;height:36px;flex-shrink:0;position:relative;background:var(--cream);border-radius:50%;transition:color .3s ease,background .3s ease,border-color .3s ease,transform .3s ease,box-shadow .3s ease,opacity .3s ease}
.rsi-faq-toggle::before{content:'';position:absolute;top:50%;left:50%;width:14px;height:2px;background:var(--burgundy);transform:translate(-50%,-50%)}
.rsi-faq-toggle::after{content:'';position:absolute;top:50%;left:50%;width:2px;height:14px;background:var(--burgundy);transform:translate(-50%,-50%);transition:color .3s ease,background .3s ease,border-color .3s ease,transform .3s ease,box-shadow .3s ease,opacity .3s ease}
.rsi-faq-item.active .rsi-faq-toggle{background:var(--burgundy);transform:rotate(45deg)}
.rsi-faq-item.active .rsi-faq-toggle::before,.rsi-faq-item.active .rsi-faq-toggle::after{background:var(--white)}
.rsi-faq-answer{max-height:0;overflow:hidden;transition:max-height .4s ease}
.rsi-faq-answer-inner{padding:0 30px 24px;color:var(--text-muted);font-size:15px;line-height:1.85}
.rsi-faq-item.active .rsi-faq-answer{max-height:300px}
.rsi-final-cta{padding:80px 0;background:var(--burgundy);position:relative;overflow:hidden;text-align:center}
.rsi-final-cta::before{content:'';position:absolute;inset:0;background:url("data:image/svg+xml,%3Csvg width='80' height='80' viewBox='0 0 80 80' xmlns='http://www.w3.org/2000/svg'%3E%3Cline x1='0' y1='40' x2='80' y2='40' stroke='%23ffffff' stroke-opacity='0.03' stroke-width='0.5'/%3E%3Cline x1='40' y1='0' x2='40' y2='80' stroke='%23ffffff' stroke-opacity='0.03' stroke-width='0.5'/%3E%3C/svg%3E");pointer-events:none}
.rsi-final-cta .container{position:relative;z-index:1}.rsi-final-cta h2{color:var(--white);margin-bottom:16px}
@media(max-width:1024px){.rsi-hero-grid{grid-template-columns:1fr;gap:48px;text-align:center}.rsi-hero-lead{margin:0 auto}.hero-form{max-width:520px;margin:0 auto}.rsi-compare-grid{grid-template-columns:1fr;max-width:520px;margin:0 auto}.rsi-features-grid,.rsi-eligibility-grid{grid-template-columns:1fr;gap:48px}}
@media(max-width:768px){.rsi-hero{min-height:auto;padding:110px 0 60px}.rsi-process,.rsi-about,.rsi-compare,.rsi-features,.rsi-eligibility,.rsi-faq,.rsi-final-cta{padding:60px 0}.rsi-hero-highlights{grid-template-columns:1fr;gap:12px}.rsi-highlight{flex-direction:row;display:flex;align-items:center;gap:14px;text-align:left;padding:14px 18px}.rsi-highlight-icon{margin:0}.hero-form{padding:28px 20px}.form-row{grid-template-columns:1fr}.rsi-cta-card{padding:40px 24px}.rsi-compare-card{padding:32px 24px}.rsi-steps{padding-left:40px}.rsi-step{padding-left:24px}.rsi-steps::before{left:35px}.rsi-step-dot{left:-21px;width:34px;height:34px;font-size:.9rem}.rsi-features-note{padding-left:0}}
@media(max-width:480px){.rsi-steps::before{left:32px}.rsi-step-dot{left:-24px}}
</style>

<section class="rsi-hero"><div class="container"><div class="rsi-hero-grid"><div class="rsi-hero-content">
<div class="rsi-hero-badge">Government-Approved Programs</div>
<h1>Residency by Investment<span>Programs Explained</span></h1>
<p class="rsi-hero-subtitle">Government-Regulated Pathways to Obtain Legal Residence</p>
<p class="rsi-hero-lead">Residency by investment refers to structured government programs that grant legal residence to foreign nationals in exchange for a qualifying investment. These programs operate under national immigration laws and provide residency status without automatically granting citizenship.</p>
<p class="rsi-hero-lead" style="margin-top:-8px">Residence is granted only after regulatory review, documentation verification, and formal approval by the issuing country.</p>
<div class="rsi-hero-highlights">
    <div class="rsi-highlight"><div class="rsi-highlight-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 10.99h7c-.53 4.12-3.28 7.79-7 8.94V12H5V6.3l7-3.11v8.8z"/></svg></div><span class="rsi-highlight-label">Government-Regulated Status</span></div>
    <div class="rsi-highlight"><div class="rsi-highlight-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/></svg></div><span class="rsi-highlight-label">Investment-Based Eligibility</span></div>
    <div class="rsi-highlight"><div class="rsi-highlight-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg></div><span class="rsi-highlight-label">Family Inclusion Eligible</span></div>
</div></div>
<x-landing-form
                source="residency-by-investment"
                consultancy="residency-by-investment"
                title="Check Eligibility for Legal Residency Pathways"
                subtitle="Share your details and our experts will assess your eligibility."
            >Check Eligibility</x-landing-form></div></div></section>

<section class="rsi-about"><div class="container">
<div class="rsi-about-content">
    <h2>What Is Residency by Investment?</h2>
    <p>Residency by investment is a legal framework that allows individuals to obtain residence rights in a country by completing an approved economic contribution. The investment may be directed toward real estate, business activity, government funds, or other authorized economic channels defined by law.</p>
    <p>Residency status differs from citizenship and does not automatically confer nationality.</p>
</div></div></section>

<section class="rsi-process"><div class="container">
<div class="section-header"><h2>How Residency by Investment Programs Work</h2><p>Most residency by investment programs follow a structured process:</p></div>
<div class="rsi-steps">
    <div class="rsi-step"><div class="rsi-step-dot">1</div><div class="rsi-step-title">Initial Eligibility Assessment</div><p class="rsi-step-desc">Review of applicant qualifications against program requirements</p></div>
    <div class="rsi-step"><div class="rsi-step-dot">2</div><div class="rsi-step-title">Investment Category Selection</div><p class="rsi-step-desc">Selection of an approved investment category</p></div>
    <div class="rsi-step"><div class="rsi-step-dot">3</div><div class="rsi-step-title">Documentation Submission</div><p class="rsi-step-desc">Submission of required documentation</p></div>
    <div class="rsi-step"><div class="rsi-step-dot">4</div><div class="rsi-step-title">Compliance & Background Checks</div><p class="rsi-step-desc">Government compliance and background checks</p></div>
    <div class="rsi-step"><div class="rsi-step-dot">5</div><div class="rsi-step-title">Qualifying Investment</div><p class="rsi-step-desc">Completion of qualifying investment</p></div>
    <div class="rsi-step"><div class="rsi-step-dot">6</div><div class="rsi-step-title">Residence Permit Issuance</div><p class="rsi-step-desc">Issuance of residence permit or residency card</p></div>
</div>
<p style="text-align:center;margin-top:48px;font-size:15px;color:var(--text-muted);line-height:1.8">Each country defines its own eligibility criteria and legal requirements.</p>
</div></section>

<section class="rsi-compare"><div class="container">
<div class="section-header"><h2>Residency by Investment vs Citizenship by Investment</h2></div>
<div class="rsi-compare-grid">
    <div class="rsi-compare-card rsi-compare-card--residency">
        <span class="rsi-compare-badge">Residency</span>
        <h3>Residency by Investment</h3>
        <p>Residency by investment grants the right to live in a country under a legal residence permit. It provides lawful residence status within the issuing jurisdiction.</p>
    </div>
    <div class="rsi-compare-card rsi-compare-card--citizenship">
        <span class="rsi-compare-badge">Citizenship</span>
        <h3>Citizenship by Investment</h3>
        <p>Citizenship by investment results in nationality and issuance of a passport. It confers full citizenship rights under the laws of the approving country.</p>
    </div>
</div>
<p class="rsi-compare-note">Residency programs do not automatically grant citizenship unless separate naturalization requirements are fulfilled under national law.</p>
</div></section>

<section class="rsi-features"><div class="container"><div class="rsi-features-grid">
<div class="rsi-features-content">
    <h2>Common Features of Residency by Investment Programs</h2>
    <ul class="rsi-features-list">
        <li><div class="rsi-feature-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg></div><span class="rsi-feature-text">Government-regulated residence status</span></li>
        <li><div class="rsi-feature-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/></svg></div><span class="rsi-feature-text">Investment-based eligibility structure</span></li>
        <li><div class="rsi-feature-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg></div><span class="rsi-feature-text">Legal right to reside in the issuing country</span></li>
        <li><div class="rsi-feature-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/></svg></div><span class="rsi-feature-text">Defined validity period subject to renewal rules</span></li>
        <li><div class="rsi-feature-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z"/></svg></div><span class="rsi-feature-text">Compliance with immigration regulations</span></li>
    </ul>
    <p class="rsi-features-note">All residency approvals are subject to official government review.</p>
</div>
<div class="rsi-cta-card"><h3>Check Eligibility for Legal Residency Pathways</h3><a href="#top" class="btn btn-gold" onclick="document.querySelector('.hero-form input[name=name]').focus();return false;">Check Eligibility</a></div>
</div></div></section>

<section class="rsi-eligibility"><div class="container"><div class="rsi-eligibility-grid">
<div class="rsi-eligibility-content">
    <h2>Who Can Apply for Residency by Investment?</h2>
    <p>Eligibility depends on the legal framework of the issuing country. Applicants are generally required to:</p>
    <ul class="rsi-eligibility-list">
        <li><span class="rsi-eligibility-check"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span><span class="rsi-eligibility-text">Meet financial qualification thresholds</span></li>
        <li><span class="rsi-eligibility-check"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span><span class="rsi-eligibility-text">Demonstrate lawful source of funds</span></li>
        <li><span class="rsi-eligibility-check"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span><span class="rsi-eligibility-text">Pass background and compliance checks</span></li>
        <li><span class="rsi-eligibility-check"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span><span class="rsi-eligibility-text">Fulfill investment and documentation requirements</span></li>
    </ul>
    <p style="margin-top:24px">Final approval is granted only by the relevant immigration authority.</p>
</div>
<div class="rsi-cta-card"><h3>Check Eligibility for Legal Residency Pathways</h3><a href="#top" class="btn btn-gold" onclick="document.querySelector('.hero-form input[name=name]').focus();return false;">Check Eligibility</a></div>
</div></div></section>

<section class="rsi-faq"><div class="container">
<div class="section-header"><h2>Residency by Investment FAQs</h2></div>
<div class="rsi-faq-list">
    <div class="rsi-faq-item faq-item active"><div class="rsi-faq-question faq-question">Is residency by investment legal?<span class="rsi-faq-toggle"></span></div><div class="rsi-faq-answer"><div class="rsi-faq-answer-inner">Yes. These programs operate under national immigration legislation and are regulated by government authorities.</div></div></div>
    <div class="rsi-faq-item faq-item"><div class="rsi-faq-question faq-question">Does residency by investment grant citizenship?<span class="rsi-faq-toggle"></span></div><div class="rsi-faq-answer"><div class="rsi-faq-answer-inner">No. Residency status does not automatically provide citizenship unless separate legal requirements are met.</div></div></div>
    <div class="rsi-faq-item faq-item"><div class="rsi-faq-question faq-question">How long is residency valid?<span class="rsi-faq-toggle"></span></div><div class="rsi-faq-answer"><div class="rsi-faq-answer-inner">Validity depends on the specific program and country, and may be subject to renewal conditions.</div></div></div>
    <div class="rsi-faq-item faq-item"><div class="rsi-faq-question faq-question">Can family members be included?<span class="rsi-faq-toggle"></span></div><div class="rsi-faq-answer"><div class="rsi-faq-answer-inner">Many programs allow inclusion of immediate family members under one structured application.</div></div></div>
</div></div></section>

<section class="rsi-final-cta"><div class="container"><h2>Check Eligibility for Legal Residency Pathways</h2><a href="#top" class="btn btn-gold" onclick="document.querySelector('.hero-form input[name=name]').focus();return false;">Check Eligibility</a></div></section>

<a href="https://wa.me/+923099992229" target="_blank" class="btn btn-whatsapp whatsapp-float" aria-label="Chat on WhatsApp"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg></a>
@endsection
