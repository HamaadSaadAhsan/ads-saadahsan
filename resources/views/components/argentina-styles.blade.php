<style>
/* ===== ARGENTINA PAGES — SOL DE MAYO DESIGN ===== */
:root {
    --arg-celeste: #74ACDF;
    --arg-celeste-light: #A9CDEE;
    --arg-celeste-dark: #3E7CB8;
}

.arg-hero {
    min-height: 100vh;
    padding: 140px 0 100px;
    position: relative;
    display: flex;
    align-items: center;
    background: var(--charcoal);
    overflow: hidden;
}
.arg-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background:
        radial-gradient(ellipse 60% 50% at 15% 40%, rgba(116,172,223,.18) 0%, transparent 70%),
        radial-gradient(ellipse 45% 40% at 90% 20%, rgba(201,169,98,.12) 0%, transparent 60%),
        radial-gradient(ellipse 50% 30% at 50% 110%, rgba(128,0,32,.2) 0%, transparent 70%);
}
.arg-hero::after {
    content: '';
    position: absolute;
    top: 50%;
    left: -220px;
    width: 640px;
    height: 640px;
    transform: translateY(-50%);
    background: repeating-conic-gradient(from 0deg, rgba(201,169,98,.05) 0deg 5deg, transparent 5deg 15deg);
    -webkit-mask: radial-gradient(circle, transparent 0 70px, #000 71px 300px, transparent 320px);
    mask: radial-gradient(circle, transparent 0 70px, #000 71px 300px, transparent 320px);
    pointer-events: none;
}
.arg-hero .container { position: relative; z-index: 1; }
.arg-hero-grid {
    display: grid;
    grid-template-columns: 1fr 460px;
    gap: 60px;
    align-items: center;
}
.arg-stripes {
    display: flex;
    width: 84px;
    height: 4px;
    margin-bottom: 28px;
    border-radius: 4px;
    overflow: hidden;
}
.arg-stripes span { flex: 1; }
.arg-stripes span:nth-child(odd) { background: var(--arg-celeste); }
.arg-stripes span:nth-child(2) { background: var(--white); }
.arg-hero h1 {
    color: var(--white);
    font-size: clamp(2.6rem, 5.2vw, 4rem);
    line-height: 1.1;
    margin-bottom: 20px;
}
.arg-hero-subtitle {
    font-family: 'Cormorant Garamond', 'Cormorant Garamond Fallback', serif;
    font-size: clamp(1.25rem, 2.2vw, 1.5rem);
    font-weight: 600;
    font-style: italic;
    line-height: 1.4;
    color: var(--gold-light);
    margin-bottom: 24px;
}
.arg-hero-lead {
    font-size: 1rem;
    line-height: 1.85;
    color: rgba(255,255,255,.8);
    max-width: 560px;
    margin-bottom: 16px;
}
.arg-hero-lead:last-child { margin-bottom: 0; }

/* Guide sections */
.arg-block {
    padding: 100px 0;
    background: var(--white);
}
.arg-block--cream { background: var(--cream); }
.arg-block-grid {
    display: grid;
    grid-template-columns: 360px 1fr;
    gap: 72px;
    align-items: start;
}
.arg-block-head { position: sticky; top: 110px; }
.arg-block-num {
    display: inline-flex;
    align-items: center;
    gap: 14px;
    margin-bottom: 18px;
    font-family: 'Cormorant Garamond', 'Cormorant Garamond Fallback', serif;
    font-size: 1.1rem;
    font-weight: 700;
    color: var(--burgundy);
    letter-spacing: 1px;
}
.arg-block-num::after {
    content: '';
    width: 48px;
    height: 1px;
    background: linear-gradient(90deg, var(--gold), transparent);
}
.arg-block-head h3 {
    color: var(--charcoal);
    font-size: clamp(1.6rem, 2.8vw, 2.2rem);
    line-height: 1.2;
}
.arg-block-body p {
    font-size: 1.05rem;
    line-height: 1.85;
    color: var(--text-dark);
    margin-bottom: 20px;
}
.arg-block-body p:last-child { margin-bottom: 0; }
.arg-block-body strong { color: var(--burgundy); font-weight: 600; }
.arg-note {
    padding: 20px 24px;
    background: rgba(116,172,223,.1);
    border-left: 3px solid var(--arg-celeste);
    border-radius: 0 12px 12px 0;
    font-size: .95rem !important;
    color: var(--text-muted) !important;
}

/* Ordered steps */
.arg-steps {
    list-style: none;
    margin: 0 0 28px;
    padding: 0;
    counter-reset: arg-step;
    position: relative;
}
.arg-steps::before {
    content: '';
    position: absolute;
    top: 22px;
    bottom: 22px;
    left: 21px;
    width: 1px;
    background: linear-gradient(180deg, var(--gold), var(--arg-celeste));
    opacity: .5;
}
.arg-steps li {
    counter-increment: arg-step;
    position: relative;
    display: flex;
    align-items: center;
    gap: 20px;
    padding: 10px 0;
    font-size: 1rem;
    font-weight: 500;
    color: var(--text-dark);
    line-height: 1.55;
}
.arg-steps li::before {
    content: counter(arg-step, decimal-leading-zero);
    flex-shrink: 0;
    position: relative;
    z-index: 1;
    width: 44px;
    height: 44px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: var(--white);
    border: 1px solid rgba(152,131,88,.3);
    border-radius: 50%;
    font-family: 'Cormorant Garamond', 'Cormorant Garamond Fallback', serif;
    font-size: 1.05rem;
    font-weight: 700;
    color: var(--burgundy);
    transition: background .3s ease, color .3s ease, border-color .3s ease;
}
.arg-steps li:hover::before {
    background: var(--burgundy);
    border-color: var(--burgundy);
    color: var(--white);
}

/* Checklist */
.arg-checklist {
    list-style: none;
    margin: 0 0 28px;
    padding: 0;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 14px;
}
.arg-checklist li {
    display: flex;
    align-items: flex-start;
    gap: 14px;
    padding: 18px 20px;
    background: var(--white);
    border: 1px solid rgba(152,131,88,.14);
    border-radius: 14px;
    font-size: .95rem;
    font-weight: 500;
    line-height: 1.55;
    color: var(--text-dark);
    transition: transform .3s ease, box-shadow .3s ease, border-color .3s ease;
}
.arg-block:not(.arg-block--cream) .arg-checklist li { background: var(--cream); }
.arg-checklist li:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 28px rgba(0,0,0,.06);
    border-color: rgba(152,131,88,.3);
}
.arg-checklist li::before {
    content: '';
    flex-shrink: 0;
    width: 22px;
    height: 22px;
    margin-top: 1px;
    border-radius: 50%;
    background: var(--arg-celeste-dark) url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23fff'%3E%3Cpath d='M9 16.17 4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z'/%3E%3C/svg%3E") center / 14px no-repeat;
}

/* FAQ */
.arg-faq {
    padding: 100px 0;
    background: var(--charcoal);
    position: relative;
    overflow: hidden;
}
.arg-faq::before {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(ellipse 50% 40% at 85% 0%, rgba(116,172,223,.12) 0%, transparent 70%);
    pointer-events: none;
}
.arg-faq .container { position: relative; z-index: 1; }
.arg-faq-header { text-align: center; max-width: 680px; margin: 0 auto 56px; }
.arg-faq-header .arg-stripes { margin: 0 auto 24px; }
.arg-faq-header h3 { color: var(--white); font-size: clamp(2rem, 4vw, 2.8rem); }
.arg-faq-list { max-width: 820px; margin: 0 auto; }
.arg-faq-item {
    background: rgba(255,255,255,.04);
    border: 1px solid rgba(201,169,98,.15);
    border-radius: 16px;
    margin-bottom: 16px;
    overflow: hidden;
    transition: background .3s ease, border-color .3s ease;
}
.arg-faq-item:hover { border-color: rgba(201,169,98,.35); }
.arg-faq-item.active { background: rgba(255,255,255,.07); border-color: rgba(201,169,98,.35); }
.arg-faq-question {
    padding: 24px 30px;
    font-family: 'Cormorant Garamond', 'Cormorant Garamond Fallback', serif;
    font-size: 1.25rem;
    font-weight: 600;
    color: var(--white);
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 20px;
    transition: color .3s ease;
}
.arg-faq-question:hover { color: var(--gold-light); }
.arg-faq-toggle {
    width: 36px;
    height: 36px;
    flex-shrink: 0;
    position: relative;
    border: 1px solid rgba(201,169,98,.4);
    border-radius: 50%;
    transition: background .3s ease, transform .3s ease, border-color .3s ease;
}
.arg-faq-toggle::before,
.arg-faq-toggle::after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    background: var(--gold);
    transform: translate(-50%, -50%);
}
.arg-faq-toggle::before { width: 14px; height: 2px; }
.arg-faq-toggle::after { width: 2px; height: 14px; }
.arg-faq-item.active .arg-faq-toggle { background: var(--gold); border-color: var(--gold); transform: rotate(45deg); }
.arg-faq-item.active .arg-faq-toggle::before,
.arg-faq-item.active .arg-faq-toggle::after { background: var(--charcoal); }
.arg-faq-answer { max-height: 0; overflow: hidden; transition: max-height .4s ease; }
.arg-faq-answer-inner { padding: 0 30px 26px; color: rgba(255,255,255,.75); font-size: 15px; line-height: 1.85; }
.arg-faq-item.active .arg-faq-answer { max-height: 400px; }

/* Final CTA */
.arg-final-cta {
    padding: 72px 0;
    background: linear-gradient(135deg, var(--burgundy) 0%, var(--burgundy-dark) 100%);
    text-align: center;
    position: relative;
    overflow: hidden;
}
.arg-final-cta::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 560px;
    height: 560px;
    transform: translate(-50%, -50%);
    background: repeating-conic-gradient(from 0deg, rgba(232,213,163,.07) 0deg 5deg, transparent 5deg 15deg);
    -webkit-mask: radial-gradient(circle, transparent 0 60px, #000 61px 260px, transparent 280px);
    mask: radial-gradient(circle, transparent 0 60px, #000 61px 260px, transparent 280px);
    pointer-events: none;
}
.arg-final-cta .container { position: relative; z-index: 1; }

/* Responsive */
@@media (max-width: 1024px) {
    .arg-hero-grid { grid-template-columns: 1fr; gap: 48px; text-align: center; }
    .arg-stripes { margin-left: auto; margin-right: auto; }
    .arg-hero-lead { margin-left: auto; margin-right: auto; }
    .hero-form { max-width: 520px; margin: 0 auto; }
    .arg-block-grid { grid-template-columns: 1fr; gap: 32px; }
    .arg-block-head { position: static; }
}
@@media (max-width: 768px) {
    .arg-hero { min-height: auto; padding: 110px 0 60px; }
    .arg-hero::after { display: none; }
    .arg-block, .arg-faq, .arg-final-cta { padding: 60px 0; }
    .arg-checklist { grid-template-columns: 1fr; }
    .arg-faq-question { padding: 20px 22px; font-size: 1.1rem; }
    .arg-faq-answer-inner { padding: 0 22px 22px; }
    .hero-form { padding: 28px 20px; }
    .form-row { grid-template-columns: 1fr; }
    .arg-final-cta .btn { white-space: normal; }
}
</style>
