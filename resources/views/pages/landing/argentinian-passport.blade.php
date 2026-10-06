@extends('layouts.landing')

@section('meta_title', 'Argentinian Passport, Eligibility and Citizenship Pathways')
@section('meta_description', 'Explore Argentinian passport eligibility and learn how foreign nationals may pursue Argentine citizenship through eligible legal pathways.')

@push('meta')
<link rel="canonical" href="https://ads.saadahsan.com/argentinian-passport">
<meta property="og:url" content="https://ads.saadahsan.com/argentinian-passport">
<meta property="og:type" content="website">
<meta property="og:title" content="Argentinian Passport, Eligibility and Citizenship Pathways">
<meta property="og:description" content="Explore Argentinian passport eligibility and learn how foreign nationals may pursue Argentine citizenship through eligible legal pathways.">
<meta property="og:site_name" content="Saad Ahsan Residency & Citizenship">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="Argentinian Passport, Eligibility and Citizenship Pathways">
<meta name="twitter:description" content="Explore Argentinian passport eligibility and learn how foreign nationals may pursue Argentine citizenship through eligible legal pathways.">
<script type="application/ld+json">{"@@context":"https://schema.org","@@type":"WebPage","name":"Argentinian Passport, Eligibility and Citizenship Pathways","description":"Explore Argentinian passport eligibility and learn how foreign nationals may pursue Argentine citizenship through eligible legal pathways.","url":"https://ads.saadahsan.com/argentinian-passport","publisher":{"@@type":"Organization","name":"Saad Ahsan Residency & Citizenship","url":"https://saadahsan.com"}}</script>
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@type": "FAQPage",
  "mainEntity": [
    {"@@type":"Question","name":"Who can obtain an Argentinian passport?","acceptedAnswer":{"@@type":"Answer","text":"Argentine citizens who satisfy the applicable passport requirements."}},
    {"@@type":"Question","name":"Can foreigners obtain one?","acceptedAnswer":{"@@type":"Answer","text":"A foreign national must first become an Argentine citizen through an applicable legal route."}},
    {"@@type":"Question","name":"Can investment lead to citizenship eligibility?","acceptedAnswer":{"@@type":"Answer","text":"Yes. Argentina has established an investment based citizenship pathway for qualifying foreign investors."}}
  ]
}
</script>
@endpush

@section('hero')
<x-argentina-styles />

<!-- ===== HERO ===== -->
<section class="arg-hero">
    <div class="container">
        <div class="arg-hero-grid">
            <div class="arg-hero-content">
                <div class="arg-stripes" aria-hidden="true"><span></span><span></span><span></span></div>
                <h1>Argentinian Passport Eligibility and Citizenship</h1>
                <h2 class="arg-hero-subtitle">From Argentine Citizenship to Passport Eligibility</h2>
                <p class="arg-hero-lead">An Argentinian passport, formally an Argentine passport, is an official travel document available to Argentine citizens.</p>
                <p class="arg-hero-lead">Foreign applicants interested in obtaining a passport should therefore first understand the citizenship pathways available under Argentine law.</p>
            </div>
            <x-landing-form
                source="argentinian-passport"
                consultancy="argentina-citizenship-by-investment"
                title="Check Your Citizenship Options"
            />
        </div>
    </div>
</section>

@endsection

@section('content')

<!-- ===== HOW TO QUALIFY FOR AN ARGENTINIAN PASSPORT ===== -->
<section class="arg-block">
    <div class="container">
        <div class="arg-block-grid">
            <div class="arg-block-head">
                <div class="arg-block-num" aria-hidden="true">01</div>
                <h3>How to Qualify for an Argentinian Passport</h3>
            </div>
            <div class="arg-block-body">
                <p>For foreign nationals, the journey generally begins by determining eligibility for Argentine citizenship.</p>
                <p>Depending on the circumstances, this may involve naturalization based on legal residence or the country's investment based citizenship framework.</p>
                <p>Once citizenship has been officially granted, the applicant can proceed with the relevant identity and passport procedures.</p>
            </div>
        </div>
    </div>
</section>

<!-- ===== ARGENTINIAN PASSPORT THROUGH CITIZENSHIP BY INVESTMENT ===== -->
<section class="arg-block arg-block--cream">
    <div class="container">
        <div class="arg-block-grid">
            <div class="arg-block-head">
                <div class="arg-block-num" aria-hidden="true">02</div>
                <h3>Argentinian Passport Through Citizenship by Investment</h3>
            </div>
            <div class="arg-block-body">
                <p>Argentina now has a legal framework through which a foreign national who makes an investment considered relevant can apply for citizenship without the standard residence period applying to that route.</p>
                <p>This is a <strong>citizenship application pathway</strong>, not a direct passport purchase.</p>
            </div>
        </div>
    </div>
</section>

<!-- ===== GOVERNMENT ASSESSMENT ===== -->
<section class="arg-block">
    <div class="container">
        <div class="arg-block-grid">
            <div class="arg-block-head">
                <div class="arg-block-num" aria-hidden="true">03</div>
                <h3>Government Assessment</h3>
            </div>
            <div class="arg-block-body">
                <p>Investment based citizenship applications undergo government evaluation and security related assessments before a recommendation is made.</p>
                <p>The National Directorate of Migration retains responsibility for the final decision.</p>
            </div>
        </div>
    </div>
</section>

<!-- ===== FAQ ===== -->
<section class="arg-faq">
    <div class="container">
        <div class="arg-faq-header">
            <div class="arg-stripes" aria-hidden="true"><span></span><span></span><span></span></div>
            <h3>Argentinian Passport FAQs</h3>
        </div>
        <div class="arg-faq-list">
            <div class="arg-faq-item faq-item active">
                <div class="arg-faq-question faq-question">Who can obtain an Argentinian passport?<span class="arg-faq-toggle"></span></div>
                <div class="arg-faq-answer"><div class="arg-faq-answer-inner">Argentine citizens who satisfy the applicable passport requirements.</div></div>
            </div>
            <div class="arg-faq-item faq-item">
                <div class="arg-faq-question faq-question">Can foreigners obtain one?<span class="arg-faq-toggle"></span></div>
                <div class="arg-faq-answer"><div class="arg-faq-answer-inner">A foreign national must first become an Argentine citizen through an applicable legal route.</div></div>
            </div>
            <div class="arg-faq-item faq-item">
                <div class="arg-faq-question faq-question">Can investment lead to citizenship eligibility?<span class="arg-faq-toggle"></span></div>
                <div class="arg-faq-answer"><div class="arg-faq-answer-inner">Yes. Argentina has established an investment based citizenship pathway for qualifying foreign investors.</div></div>
            </div>
        </div>
    </div>
</section>

<!-- ===== FINAL CTA ===== -->
<section class="arg-final-cta">
    <div class="container">
        <a href="#top" class="btn btn-gold" onclick="document.querySelector('.hero-form input[name=name]').focus();return false;">Check Your Citizenship Options</a>
    </div>
</section>

<!-- ===== WhatsApp Float ===== -->
<a href="https://wa.me/+923099992229" target="_blank" class="btn btn-whatsapp whatsapp-float" aria-label="Chat on WhatsApp">
    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
</a>
@endsection
