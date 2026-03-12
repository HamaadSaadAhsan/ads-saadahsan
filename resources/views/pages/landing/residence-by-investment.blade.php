@extends('layouts.landing')

@section('meta_title', 'Residence by Investment | Legal Residency Through Government Programs')
@section('meta_description', 'Learn about residence by investment programs that grant lawful residence through government-approved investment pathways under national immigration laws.')

@push('meta')
<link rel="canonical" href="https://ads.saadahsan.com/residence-by-investment">
<meta property="og:url" content="https://ads.saadahsan.com/residence-by-investment">
<meta property="og:type" content="website">
<meta property="og:title" content="Residence by Investment | Legal Residency Through Government Programs">
<meta property="og:description" content="Learn about residence by investment programs that grant lawful residence through government-approved investment pathways under national immigration laws.">
<meta property="og:site_name" content="Saad Ahsan Residency & Citizenship">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="Residence by Investment | Legal Residency Through Government Programs">
<meta name="twitter:description" content="Learn about residence by investment programs that grant lawful residence through government-approved investment pathways under national immigration laws.">
<script type="application/ld+json">{"@@context":"https://schema.org","@@type":"WebPage","name":"Residence by Investment | Legal Residency Through Government Programs","description":"Learn about residence by investment programs that grant lawful residence through government-approved investment pathways under national immigration laws.","url":"https://ads.saadahsan.com/residence-by-investment","publisher":{"@@type":"Organization","name":"Saad Ahsan Residency & Citizenship","url":"https://saadahsan.com"}}</script>
<script type="application/ld+json">{"@@context":"https://schema.org","@@type":"FAQPage","mainEntity":[{"@@type":"Question","name":"Is residence by investment legal?","acceptedAnswer":{"@@type":"Answer","text":"Yes. These programs operate under national immigration legislation and are regulated by government authorities."}},{"@@type":"Question","name":"Does residence by investment grant citizenship?","acceptedAnswer":{"@@type":"Answer","text":"No. Residence status does not automatically provide citizenship unless separate legal criteria are met."}},{"@@type":"Question","name":"How long is residence valid?","acceptedAnswer":{"@@type":"Answer","text":"Validity depends on the specific program and country, and may require periodic renewal."}},{"@@type":"Question","name":"Can family members be included?","acceptedAnswer":{"@@type":"Answer","text":"Many programs allow inclusion of immediate family members under one structured application."}}]}</script>
@endpush

@section('content')
<style>
.rbi-hero{min-height:100vh;padding:140px 0 100px;position:relative;display:flex;align-items:center;background:var(--charcoal);overflow:hidden}
.rbi-hero::before{content:'';position:absolute;inset:0;background:radial-gradient(ellipse 55% 50% at 75% 40%,rgba(201,169,98,.12) 0%,transparent 60%),radial-gradient(ellipse 60% 55% at 15% 60%,rgba(128,0,32,.15) 0%,transparent 55%)}
.rbi-hero::after{content:'';position:absolute;inset:0;background:url("data:image/svg+xml,%3Csvg width='20' height='20' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'%3E%3Ccircle cx='10' cy='10' r='1' fill='%23C9A962' fill-opacity='0.06'/%3E%3C/svg%3E");pointer-events:none}
.rbi-hero .container{position:relative;z-index:1}
.rbi-hero-grid{display:grid;grid-template-columns:1fr 460px;gap:60px;align-items:center}
.rbi-hero-badge{display:inline-flex;align-items:center;gap:10px;padding:8px 20px;background:rgba(201,169,98,.1);border:1px solid rgba(201,169,98,.25);border-radius:50px;font-size:11px;font-weight:600;letter-spacing:2.5px;text-transform:uppercase;color:var(--gold);margin-bottom:28px}
.rbi-hero-badge::before{content:'';width:6px;height:6px;background:var(--gold);border-radius:50%;animation:pulse 2s infinite}
.rbi-hero h1{color:var(--white);font-size:clamp(2.8rem,5.5vw,4.2rem);line-height:1.1;margin-bottom:16px}
.rbi-hero h1 span{display:block;background:linear-gradient(135deg,var(--gold) 0%,var(--gold-light) 100%);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text}
.rbi-hero-subtitle{font-family:'Cormorant Garamond',serif;font-size:1.35rem;font-weight:500;font-style:italic;color:var(--gold-light);margin-bottom:20px;opacity:.9}
.rbi-hero-lead{font-size:1rem;line-height:1.85;color:rgba(255,255,255,.8);max-width:540px;margin-bottom:0}
.rbi-hero-highlights{display:grid;grid-template-columns:repeat(3,1fr);gap:20px;margin-top:40px;padding-top:36px;border-top:1px solid rgba(201,169,98,.15)}
.rbi-highlight{text-align:center;padding:20px 12px;background:rgba(201,169,98,.06);border:1px solid rgba(201,169,98,.12);border-radius:16px;transition:all .3s ease}
.rbi-highlight:hover{background:rgba(201,169,98,.12);border-color:rgba(201,169,98,.25);transform:translateY(-3px)}
.rbi-highlight-icon{width:44px;height:44px;margin:0 auto 12px;display:flex;align-items:center;justify-content:center;background:linear-gradient(135deg,var(--gold) 0%,var(--gold-dark) 100%);border-radius:12px}
.rbi-highlight-icon svg{width:22px;height:22px;color:var(--charcoal)}
.rbi-highlight-label{font-size:12px;font-weight:600;color:var(--white);letter-spacing:.5px;line-height:1.4}
.rbi-what{padding:100px 0;background:var(--white);position:relative;overflow:hidden}
.rbi-what::before{content:'';position:absolute;top:-100px;left:-100px;width:350px;height:350px;background:radial-gradient(circle,rgba(201,169,98,.05) 0%,transparent 70%);border-radius:50%}
.rbi-what-grid{display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:start}
.rbi-what-content h2{color:var(--charcoal);margin-bottom:24px}.rbi-what-content p{font-size:1rem;line-height:1.85;color:var(--text-muted);margin-bottom:16px}.rbi-what-content p:last-child{margin-bottom:0}
.rbi-what-visual{background:var(--cream);border-radius:24px;padding:44px 36px;box-shadow:0 20px 60px rgba(0,0,0,.06);border:1px solid rgba(152,131,88,.1);position:relative}
.rbi-what-visual::before{content:'';position:absolute;top:0;left:32px;right:32px;height:4px;background:linear-gradient(90deg,var(--gold),var(--burgundy));border-radius:0 0 4px 4px}
.rbi-what-visual h3{color:var(--charcoal);margin-bottom:24px;font-size:1.4rem}
.rbi-globe-dots{display:grid;grid-template-columns:repeat(8,1fr);gap:6px;margin-bottom:24px;padding:20px;background:var(--white);border-radius:16px;border:1px solid rgba(152,131,88,.08)}
.rbi-globe-dot{width:100%;aspect-ratio:1;border-radius:50%;background:rgba(201,169,98,.15);transition:all .4s ease}
.rbi-globe-dot.active{background:linear-gradient(135deg,var(--gold),var(--gold-dark));box-shadow:0 0 8px rgba(201,169,98,.3)}
.rbi-globe-dot.accent{background:linear-gradient(135deg,var(--burgundy),#600018);box-shadow:0 0 8px rgba(128,0,32,.2)}
.rbi-globe-label{text-align:center;font-size:13px;color:var(--text-muted);font-weight:500;font-style:italic}
.rbi-process{padding:100px 0;background:var(--cream)}.rbi-process .section-header{text-align:center;max-width:680px;margin:0 auto 60px}.rbi-process .section-header h2{color:var(--charcoal);margin-bottom:16px}
.rbi-timeline{max-width:800px;margin:0 auto;position:relative}
.rbi-timeline::before{content:'';position:absolute;left:28px;top:0;bottom:0;width:2px;background:linear-gradient(to bottom,var(--gold),var(--burgundy))}
.rbi-step{display:flex;gap:28px;align-items:flex-start;padding:24px 0;position:relative}
.rbi-step-num{flex-shrink:0;width:56px;height:56px;display:flex;align-items:center;justify-content:center;background:var(--white);border:2px solid var(--gold);border-radius:50%;font-family:'Cormorant Garamond',serif;font-size:1.2rem;font-weight:700;color:var(--burgundy);position:relative;z-index:1;transition:all .3s ease}
.rbi-step:hover .rbi-step-num{background:linear-gradient(135deg,var(--burgundy),#600018);color:var(--white);border-color:var(--burgundy)}
.rbi-step-content{background:var(--white);border-radius:16px;padding:24px 28px;flex:1;border:1px solid rgba(152,131,88,.1);transition:all .3s ease;box-shadow:0 2px 8px rgba(0,0,0,.03)}
.rbi-step:hover .rbi-step-content{box-shadow:0 12px 32px rgba(0,0,0,.08);border-color:rgba(152,131,88,.25)}
.rbi-step-title{font-family:'Cormorant Garamond',serif;font-size:1.15rem;font-weight:600;color:var(--charcoal);margin-bottom:0}
.rbi-compare{padding:100px 0;background:var(--white);position:relative;overflow:hidden}
.rbi-compare::after{content:'';position:absolute;bottom:-80px;right:-80px;width:300px;height:300px;background:radial-gradient(circle,rgba(128,0,32,.04) 0%,transparent 70%);border-radius:50%}
.rbi-compare .section-header{text-align:center;max-width:680px;margin:0 auto 60px}.rbi-compare .section-header h2{color:var(--charcoal);margin-bottom:16px}
.rbi-compare-card{max-width:860px;margin:0 auto;background:var(--cream);border-radius:24px;overflow:hidden;border:1px solid rgba(152,131,88,.12);box-shadow:0 20px 60px rgba(0,0,0,.06)}
.rbi-compare-header{display:grid;grid-template-columns:1fr 1fr 1fr;background:linear-gradient(135deg,var(--charcoal) 0%,#2a2a30 100%)}
.rbi-compare-header-cell{padding:24px 20px;text-align:center;font-family:'Cormorant Garamond',serif;font-size:1.1rem;font-weight:600;color:var(--white)}
.rbi-compare-header-cell:first-child{text-align:left;padding-left:32px;color:var(--gold)}
.rbi-compare-header-cell:nth-child(2){border-left:1px solid rgba(255,255,255,.1);border-right:1px solid rgba(255,255,255,.1)}
.rbi-compare-row{display:grid;grid-template-columns:1fr 1fr 1fr;border-bottom:1px solid rgba(152,131,88,.1)}
.rbi-compare-row:last-child{border-bottom:none}
.rbi-compare-cell{padding:18px 20px;font-size:14px;color:var(--text-dark);display:flex;align-items:center;justify-content:center}
.rbi-compare-cell:first-child{font-weight:600;color:var(--charcoal);justify-content:flex-start;padding-left:32px}
.rbi-compare-cell:nth-child(2){border-left:1px solid rgba(152,131,88,.08);border-right:1px solid rgba(152,131,88,.08);background:rgba(201,169,98,.04)}
.rbi-compare-check{width:24px;height:24px;display:flex;align-items:center;justify-content:center;background:linear-gradient(135deg,var(--gold),var(--gold-dark));border-radius:50%}.rbi-compare-check svg{width:12px;height:12px;color:var(--charcoal)}
.rbi-compare-x{width:24px;height:24px;display:flex;align-items:center;justify-content:center;background:rgba(152,131,88,.15);border-radius:50%}.rbi-compare-x svg{width:10px;height:10px;color:var(--text-muted)}
.rbi-features{padding:100px 0;background:var(--cream);position:relative}
.rbi-features .section-header{text-align:center;max-width:680px;margin:0 auto 60px}.rbi-features .section-header h2{color:var(--charcoal);margin-bottom:16px}
.rbi-feature-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:24px;max-width:960px;margin:0 auto}
.rbi-feature-card{background:var(--white);border-radius:20px;padding:36px 28px;border:1px solid rgba(152,131,88,.1);transition:all .4s ease;position:relative;overflow:hidden;text-align:center}
.rbi-feature-card::before{content:'';position:absolute;top:0;left:0;right:0;height:3px;background:linear-gradient(90deg,var(--gold),var(--burgundy));opacity:0;transition:opacity .3s ease}
.rbi-feature-card:hover{transform:translateY(-4px);box-shadow:0 16px 40px rgba(0,0,0,.08)}.rbi-feature-card:hover::before{opacity:1}
.rbi-feature-icon{width:52px;height:52px;margin:0 auto 20px;display:flex;align-items:center;justify-content:center;background:linear-gradient(135deg,var(--burgundy) 0%,#600018 100%);border-radius:14px}.rbi-feature-icon svg{width:24px;height:24px;color:var(--white)}
.rbi-feature-title{font-family:'Cormorant Garamond',serif;font-size:1.1rem;font-weight:600;color:var(--charcoal);margin-bottom:0}
.rbi-feature-note{max-width:680px;margin:32px auto 0;text-align:center;font-size:14px;color:var(--text-muted);font-style:italic;line-height:1.7}
.rbi-eligibility{padding:100px 0;background:var(--white)}
.rbi-eligibility-grid{display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:center}
.rbi-eligibility-content h2{color:var(--charcoal);margin-bottom:20px}
.rbi-eligibility-list{list-style:none;padding:0;margin:32px 0 0}
.rbi-eligibility-list li{display:flex;align-items:flex-start;gap:16px;padding:16px 0;border-bottom:1px solid rgba(152,131,88,.12)}.rbi-eligibility-list li:last-child{border-bottom:none}
.rbi-eligibility-check{flex-shrink:0;width:28px;height:28px;display:flex;align-items:center;justify-content:center;background:linear-gradient(135deg,var(--gold) 0%,var(--gold-dark) 100%);border-radius:50%}.rbi-eligibility-check svg{width:14px;height:14px;color:var(--charcoal)}
.rbi-eligibility-text{font-size:15px;color:var(--text-dark);line-height:1.65}
.rbi-cta-card{background:linear-gradient(135deg,var(--charcoal) 0%,#2a2a30 100%);border-radius:24px;padding:52px 40px;text-align:center;position:relative;overflow:hidden}
.rbi-cta-card::before{content:'';position:absolute;top:0;left:0;right:0;height:4px;background:linear-gradient(90deg,var(--gold),var(--burgundy),var(--gold))}
.rbi-cta-card::after{content:'';position:absolute;inset:0;background:url("data:image/svg+xml,%3Csvg width='20' height='20' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'%3E%3Ccircle cx='10' cy='10' r='1' fill='%23C9A962' fill-opacity='0.04'/%3E%3C/svg%3E");pointer-events:none}
.rbi-cta-card h3{color:var(--white);font-size:1.75rem;margin-bottom:16px;position:relative;z-index:1}.rbi-cta-card .btn{position:relative;z-index:1}
.rbi-faq{padding:100px 0;background:var(--cream)}.rbi-faq .section-header{text-align:center;max-width:680px;margin:0 auto 60px}.rbi-faq .section-header h2{color:var(--charcoal);margin-bottom:16px}
.rbi-faq-list{max-width:800px;margin:0 auto}
.rbi-faq-item{background:var(--white);border-radius:16px;margin-bottom:16px;overflow:hidden;border:1px solid rgba(152,131,88,.12);transition:all .3s ease;box-shadow:0 2px 8px rgba(0,0,0,.03)}
.rbi-faq-item:hover{border-color:rgba(152,131,88,.3);box-shadow:0 8px 24px rgba(0,0,0,.06)}
.rbi-faq-question{padding:24px 30px;font-family:'Cormorant Garamond',serif;font-size:1.2rem;font-weight:600;color:var(--charcoal);cursor:pointer;display:flex;justify-content:space-between;align-items:center;transition:color .3s ease}.rbi-faq-question:hover{color:var(--burgundy)}
.rbi-faq-toggle{width:36px;height:36px;flex-shrink:0;position:relative;background:var(--cream);border-radius:50%;transition:all .3s ease}
.rbi-faq-toggle::before{content:'';position:absolute;top:50%;left:50%;width:14px;height:2px;background:var(--burgundy);transform:translate(-50%,-50%)}
.rbi-faq-toggle::after{content:'';position:absolute;top:50%;left:50%;width:2px;height:14px;background:var(--burgundy);transform:translate(-50%,-50%);transition:all .3s ease}
.rbi-faq-item.active .rbi-faq-toggle{background:var(--burgundy);transform:rotate(45deg)}
.rbi-faq-item.active .rbi-faq-toggle::before,.rbi-faq-item.active .rbi-faq-toggle::after{background:var(--white)}
.rbi-faq-answer{max-height:0;overflow:hidden;transition:max-height .4s ease}
.rbi-faq-answer-inner{padding:0 30px 24px;color:var(--text-muted);font-size:15px;line-height:1.85}
.rbi-faq-item.active .rbi-faq-answer{max-height:300px}
.rbi-final-cta{padding:80px 0;background:var(--burgundy);position:relative;overflow:hidden;text-align:center}
.rbi-final-cta::before{content:'';position:absolute;inset:0;background:url("data:image/svg+xml,%3Csvg width='20' height='20' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'%3E%3Ccircle cx='10' cy='10' r='1' fill='%23ffffff' fill-opacity='0.03'/%3E%3C/svg%3E");pointer-events:none}
.rbi-final-cta .container{position:relative;z-index:1}.rbi-final-cta h2{color:var(--white);margin-bottom:16px}
@media(max-width:1024px){.rbi-hero-grid{grid-template-columns:1fr;gap:48px;text-align:center}.rbi-hero-lead{margin:0 auto}.hero-form{max-width:520px;margin:0 auto}.rbi-what-grid,.rbi-eligibility-grid{grid-template-columns:1fr;gap:48px}.rbi-compare-card{margin:0 -16px;border-radius:16px}.rbi-feature-grid{grid-template-columns:repeat(2,1fr)}}
@media(max-width:768px){.rbi-hero{min-height:auto;padding:110px 0 60px}.rbi-process,.rbi-what,.rbi-compare,.rbi-features,.rbi-eligibility,.rbi-faq,.rbi-final-cta{padding:60px 0}.rbi-hero-highlights{grid-template-columns:1fr;gap:12px}.rbi-highlight{flex-direction:row;display:flex;align-items:center;gap:14px;text-align:left;padding:14px 18px}.rbi-highlight-icon{margin:0}.hero-form{padding:28px 20px}.form-row{grid-template-columns:1fr}.rbi-what-visual{padding:32px 24px}.rbi-step{gap:20px}.rbi-step-num{width:48px;height:48px;font-size:1rem}.rbi-timeline::before{left:23px}.rbi-compare-header-cell,.rbi-compare-cell{padding:14px 12px;font-size:13px}.rbi-compare-cell:first-child,.rbi-compare-header-cell:first-child{padding-left:16px}.rbi-cta-card{padding:40px 24px}.rbi-feature-grid{grid-template-columns:1fr}}
@media(max-width:480px){.rbi-compare-header-cell,.rbi-compare-cell{padding:12px 8px;font-size:12px}}
</style>

<section class="rbi-hero"><div class="container"><div class="rbi-hero-grid"><div class="rbi-hero-content">
<div class="rbi-hero-badge">Government-Approved Programs</div>
<h1>Residence by Investment<span>Programs Explained</span></h1>
<p class="rbi-hero-subtitle">Government-Regulated Pathways to Obtain Legal Residence Status</p>
<p class="rbi-hero-lead">Residence by investment refers to structured immigration programs established by governments that grant legal residence to foreign nationals in exchange for a qualifying economic contribution. These programs operate under national immigration legislation and provide residence status without automatically conferring citizenship.</p>
<p class="rbi-hero-lead" style="margin-top:-8px">Residence is granted only after documentation review, compliance checks, and formal approval by the relevant authorities.</p>
<div class="rbi-hero-highlights">
    <div class="rbi-highlight"><div class="rbi-highlight-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg></div><span class="rbi-highlight-label">Government-Regulated Programs</span></div>
    <div class="rbi-highlight"><div class="rbi-highlight-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/></svg></div><span class="rbi-highlight-label">National Immigration Law</span></div>
    <div class="rbi-highlight"><div class="rbi-highlight-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg></div><span class="rbi-highlight-label">Family Inclusion Eligible</span></div>
</div></div>
<x-landing-form
                source="residence-by-investment"
                consultancy="residence-by-investment"
                title="Check Eligibility for Legal Residence Pathways"
                subtitle="Share your details and our experts will assess your eligibility."
            >Check Eligibility</x-landing-form></div></div></section>

<section class="rbi-what"><div class="container"><div class="rbi-what-grid">
<div class="rbi-what-content">
    <h2>What Is Residence by Investment?</h2>
    <p>Residence by investment is a legal framework that allows individuals to obtain the right to reside in a country by completing an approved investment. The investment may involve real estate, business development, government funds, or other authorized economic channels defined by law.</p>
    <p>Residence status is distinct from citizenship and does not automatically provide nationality.</p>
</div>
<div class="rbi-what-visual">
    <h3>Global Residency Programs</h3>
    <div class="rbi-globe-dots">
        <div class="rbi-globe-dot"></div><div class="rbi-globe-dot"></div><div class="rbi-globe-dot active"></div><div class="rbi-globe-dot"></div><div class="rbi-globe-dot"></div><div class="rbi-globe-dot active"></div><div class="rbi-globe-dot"></div><div class="rbi-globe-dot"></div>
        <div class="rbi-globe-dot"></div><div class="rbi-globe-dot active"></div><div class="rbi-globe-dot"></div><div class="rbi-globe-dot accent"></div><div class="rbi-globe-dot"></div><div class="rbi-globe-dot"></div><div class="rbi-globe-dot active"></div><div class="rbi-globe-dot"></div>
        <div class="rbi-globe-dot active"></div><div class="rbi-globe-dot"></div><div class="rbi-globe-dot"></div><div class="rbi-globe-dot active"></div><div class="rbi-globe-dot"></div><div class="rbi-globe-dot accent"></div><div class="rbi-globe-dot"></div><div class="rbi-globe-dot active"></div>
        <div class="rbi-globe-dot"></div><div class="rbi-globe-dot"></div><div class="rbi-globe-dot accent"></div><div class="rbi-globe-dot"></div><div class="rbi-globe-dot active"></div><div class="rbi-globe-dot"></div><div class="rbi-globe-dot"></div><div class="rbi-globe-dot"></div>
    </div>
    <p class="rbi-globe-label">Multiple countries offer structured residence programs worldwide</p>
</div></div></div></section>

<section class="rbi-process"><div class="container">
<div class="section-header"><h2>How Residence by Investment Programs Work</h2><p>Most residence by investment programs follow a structured process:</p></div>
<div class="rbi-timeline">
    <div class="rbi-step"><div class="rbi-step-num">1</div><div class="rbi-step-content"><div class="rbi-step-title">Initial eligibility assessment</div></div></div>
    <div class="rbi-step"><div class="rbi-step-num">2</div><div class="rbi-step-content"><div class="rbi-step-title">Selection of an approved investment category</div></div></div>
    <div class="rbi-step"><div class="rbi-step-num">3</div><div class="rbi-step-content"><div class="rbi-step-title">Submission of required documentation</div></div></div>
    <div class="rbi-step"><div class="rbi-step-num">4</div><div class="rbi-step-content"><div class="rbi-step-title">Government compliance and background checks</div></div></div>
    <div class="rbi-step"><div class="rbi-step-num">5</div><div class="rbi-step-content"><div class="rbi-step-title">Completion of the qualifying investment</div></div></div>
    <div class="rbi-step"><div class="rbi-step-num">6</div><div class="rbi-step-content"><div class="rbi-step-title">Issuance of a residence permit or residency card</div></div></div>
</div>
<p style="text-align:center;max-width:680px;margin:40px auto 0;font-size:14px;color:var(--text-muted);font-style:italic">Each country defines its own legal requirements and approval procedures.</p>
</div></section>

<section class="rbi-compare"><div class="container">
<div class="section-header"><h2>Residence by Investment Compared to Citizenship</h2><p>Residence by investment grants legal residence rights within a country. Citizenship programs, in contrast, grant nationality and a passport. Residence does not automatically lead to citizenship unless separate naturalization requirements are fulfilled under national law.</p></div>
<div class="rbi-compare-card">
    <div class="rbi-compare-header"><div class="rbi-compare-header-cell">Feature</div><div class="rbi-compare-header-cell">Residence</div><div class="rbi-compare-header-cell">Citizenship</div></div>
    <div class="rbi-compare-row"><div class="rbi-compare-cell">Legal right to reside</div><div class="rbi-compare-cell"><span class="rbi-compare-check"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span></div><div class="rbi-compare-cell"><span class="rbi-compare-check"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span></div></div>
    <div class="rbi-compare-row"><div class="rbi-compare-cell">Grants nationality</div><div class="rbi-compare-cell"><span class="rbi-compare-x"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/></svg></span></div><div class="rbi-compare-cell"><span class="rbi-compare-check"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span></div></div>
    <div class="rbi-compare-row"><div class="rbi-compare-cell">Passport issuance</div><div class="rbi-compare-cell"><span class="rbi-compare-x"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/></svg></span></div><div class="rbi-compare-cell"><span class="rbi-compare-check"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span></div></div>
    <div class="rbi-compare-row"><div class="rbi-compare-cell">Subject to renewal</div><div class="rbi-compare-cell"><span class="rbi-compare-check"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span></div><div class="rbi-compare-cell"><span class="rbi-compare-x"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/></svg></span></div></div>
    <div class="rbi-compare-row"><div class="rbi-compare-cell">Investment-based eligibility</div><div class="rbi-compare-cell"><span class="rbi-compare-check"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span></div><div class="rbi-compare-cell"><span class="rbi-compare-check"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span></div></div>
</div></div></section>

<section class="rbi-features"><div class="container">
<div class="section-header"><h2>Common Features of Residence by Investment Programs</h2></div>
<div class="rbi-feature-grid">
    <div class="rbi-feature-card"><div class="rbi-feature-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg></div><div class="rbi-feature-title">Government-regulated residence status</div></div>
    <div class="rbi-feature-card"><div class="rbi-feature-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M11.8 10.9c-2.27-.59-3-1.2-3-2.15 0-1.09 1.01-1.85 2.7-1.85 1.78 0 2.44.85 2.5 2.1h2.21c-.07-1.72-1.12-3.3-3.21-3.81V3h-3v2.16c-1.94.42-3.5 1.68-3.5 3.61 0 2.31 1.91 3.46 4.7 4.13 2.5.6 3 1.48 3 2.41 0 .69-.49 1.79-2.7 1.79-2.06 0-2.87-.92-2.98-2.1h-2.2c.12 2.19 1.76 3.42 3.68 3.83V21h3v-2.15c1.95-.37 3.5-1.5 3.5-3.55 0-2.84-2.43-3.81-4.7-4.4z"/></svg></div><div class="rbi-feature-title">Investment-based eligibility criteria</div></div>
    <div class="rbi-feature-card"><div class="rbi-feature-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/></svg></div><div class="rbi-feature-title">Legal right to reside in the issuing country</div></div>
    <div class="rbi-feature-card"><div class="rbi-feature-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/></svg></div><div class="rbi-feature-title">Defined validity period subject to renewal conditions</div></div>
    <div class="rbi-feature-card"><div class="rbi-feature-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/></svg></div><div class="rbi-feature-title">Ongoing compliance with immigration regulations</div></div>
</div>
<p class="rbi-feature-note">All approvals are subject to formal review by the relevant immigration authority.</p>
</div></section>

<section class="rbi-eligibility"><div class="container"><div class="rbi-eligibility-grid">
<div class="rbi-eligibility-content">
    <h2>Who Can Apply for Residence by Investment?</h2>
    <p>Eligibility depends on the legal framework of the issuing country. Applicants are generally required to:</p>
    <ul class="rbi-eligibility-list">
        <li><span class="rbi-eligibility-check"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span><span class="rbi-eligibility-text">Meet financial qualification thresholds</span></li>
        <li><span class="rbi-eligibility-check"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span><span class="rbi-eligibility-text">Demonstrate lawful source of funds</span></li>
        <li><span class="rbi-eligibility-check"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span><span class="rbi-eligibility-text">Pass background and compliance screening</span></li>
        <li><span class="rbi-eligibility-check"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span><span class="rbi-eligibility-text">Fulfill documentation and investment requirements</span></li>
    </ul>
    <p style="margin-top:24px">Final approval is granted solely by authorized government bodies.</p>
</div>
<div class="rbi-cta-card"><h3>Check Eligibility for Legal Residence Pathways</h3><a href="#top" class="btn btn-gold" onclick="document.querySelector('.hero-form input[name=name]').focus();return false;">Check Eligibility</a></div>
</div></div></section>

<section class="rbi-faq"><div class="container">
<div class="section-header"><h2>Residence by Investment FAQs</h2></div>
<div class="rbi-faq-list">
    <div class="rbi-faq-item faq-item active"><div class="rbi-faq-question faq-question">Is residence by investment legal?<span class="rbi-faq-toggle"></span></div><div class="rbi-faq-answer"><div class="rbi-faq-answer-inner">Yes. These programs operate under national immigration legislation and are regulated by government authorities.</div></div></div>
    <div class="rbi-faq-item faq-item"><div class="rbi-faq-question faq-question">Does residence by investment grant citizenship?<span class="rbi-faq-toggle"></span></div><div class="rbi-faq-answer"><div class="rbi-faq-answer-inner">No. Residence status does not automatically provide citizenship unless separate legal criteria are met.</div></div></div>
    <div class="rbi-faq-item faq-item"><div class="rbi-faq-question faq-question">How long is residence valid?<span class="rbi-faq-toggle"></span></div><div class="rbi-faq-answer"><div class="rbi-faq-answer-inner">Validity depends on the specific program and country, and may require periodic renewal.</div></div></div>
    <div class="rbi-faq-item faq-item"><div class="rbi-faq-question faq-question">Can family members be included?<span class="rbi-faq-toggle"></span></div><div class="rbi-faq-answer"><div class="rbi-faq-answer-inner">Many programs allow inclusion of immediate family members under one structured application.</div></div></div>
</div></div></section>

<section class="rbi-final-cta"><div class="container"><h2>Check Eligibility for Legal Residence Pathways</h2><a href="#top" class="btn btn-gold" onclick="document.querySelector('.hero-form input[name=name]').focus();return false;">Check Eligibility</a></div></section>

<a href="https://wa.me/+923099992229" target="_blank" class="btn btn-whatsapp whatsapp-float" aria-label="Chat on WhatsApp"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg></a>
@endsection
