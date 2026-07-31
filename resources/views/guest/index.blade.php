<x-layouts.guest>
    <x-slot name="title">AVKS.cloud — Zero-Knowledge Cloud Storage You Actually Control</x-slot>
    <x-slot name="meta">
        <meta name="description" content="AVKS.cloud is secure, PIN-protected cloud storage with zero-knowledge encryption. Store archives, media, code and documents — only you hold the key. Start free with 10MB.">
        <meta property="og:title" content="AVKS.cloud — Your Files. Your PIN. Nobody Else.">
        <meta property="og:description" content="Zero-knowledge, PIN-protected cloud storage. Advanced encryption, public share links, and plans that scale with you. Start free.">
        <meta property="og:type" content="website">
    </x-slot>

    <style>
        /* ============================================================
           AVKS.cloud landing — scoped styles (dark & light aware)
           ============================================================ */
        .avks_lp {
            --lp-accent: var(--techwave-main-color1, #41FF2C);
            --lp-accent2: var(--techwave-main-color2, #C2FFBB);
            --lp-bg: var(--techwave-site-bg-color, #0f0e11);
            --lp-card: var(--techwave-header-bg-color, #17151b);
            --lp-soft: var(--techwave-some-a-bg-color, #2b2830);
            --lp-border: var(--techwave-border-color, #312e37);
            --lp-heading: var(--techwave-hover-color, #fff);
            --lp-sub: var(--techwave-heading-color, #c0bcca);
            --lp-body: var(--techwave-body-color, #7e7a86);
            --lp-hfont: var(--techwave-heading-font-family, 'Heebo', sans-serif);
            color: var(--lp-body);
            font-family: var(--techwave-body-font-family, 'Work Sans', sans-serif);
            overflow-x: hidden;
        }
        .avks_lp * { box-sizing: border-box; }
        .avks_lp a { text-decoration: none; }
        .avks_lp .lp_wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
        .avks_lp h1, .avks_lp h2, .avks_lp h3, .avks_lp h4 { font-family: var(--lp-hfont); color: var(--lp-heading); margin: 0; line-height: 1.15; }
        .avks_lp p { margin: 0; }
        .avks_lp .lp_grad {
            background: linear-gradient(120deg, var(--lp-accent), var(--lp-accent2));
            -webkit-background-clip: text; background-clip: text;
            -webkit-text-fill-color: transparent; color: transparent;
        }

        /* ---- Buttons ---- */
        .avks_lp .lp_btn {
            display: inline-flex; align-items: center; gap: 8px;
            height: 52px; padding: 0 30px; border-radius: 28px;
            font-family: var(--lp-hfont); font-weight: 600; font-size: 15px; letter-spacing: .3px;
            cursor: pointer; transition: transform .25s ease, box-shadow .25s ease, background .25s ease;
            white-space: nowrap;
        }
        .avks_lp .lp_btn_primary {
            color: #06210a;
            background: linear-gradient(120deg, var(--lp-accent), var(--lp-accent2));
            box-shadow: 0 10px 30px -8px rgba(65,255,44,.45);
        }
        .avks_lp .lp_btn_primary:hover { transform: translateY(-3px); box-shadow: 0 16px 40px -8px rgba(65,255,44,.6); }
        .avks_lp .lp_btn_ghost {
            color: var(--lp-heading); background: transparent; border: 1px solid var(--lp-border);
        }
        .avks_lp .lp_btn_ghost:hover { border-color: var(--lp-accent); color: var(--lp-heading); transform: translateY(-3px); }

        /* ---- Nav ---- */
        .avks_lp .lp_nav {
            position: sticky; top: 0; z-index: 50;
            backdrop-filter: blur(14px);
            background: color-mix(in srgb, var(--lp-bg) 78%, transparent);
            border-bottom: 1px solid var(--lp-border);
        }
        .avks_lp .lp_nav_in { display: flex; align-items: center; justify-content: space-between; height: 74px; }
        .avks_lp .lp_nav_logo { display: flex; align-items: center; gap: 10px; }
        .avks_lp .lp_nav_logo img { height: 30px; width: auto; }
        .avks_lp .lp_nav_links { display: flex; align-items: center; gap: 30px; }
        .avks_lp .lp_nav_links a.lp_link { color: var(--lp-sub); font-size: 14px; font-weight: 500; transition: color .2s; }
        .avks_lp .lp_nav_links a.lp_link:hover { color: var(--lp-accent); }
        .avks_lp .lp_nav_cta { display: flex; align-items: center; gap: 12px; }
        @media (max-width: 900px) { .avks_lp .lp_nav_links a.lp_link { display: none; } }

        /* ---- Hero ---- */
        .avks_lp .lp_hero { position: relative; padding: 90px 0 60px; text-align: center; }
        .avks_lp .lp_hero::before {
            content: ""; position: absolute; inset: -20% 0 auto 0; height: 620px; z-index: 0;
            background:
                radial-gradient(600px 300px at 50% 0%, color-mix(in srgb, var(--lp-accent) 22%, transparent), transparent 70%),
                radial-gradient(400px 260px at 15% 20%, color-mix(in srgb, var(--lp-accent2) 14%, transparent), transparent 70%);
            pointer-events: none;
        }
        .avks_lp .lp_hero .lp_wrap { position: relative; z-index: 1; }
        .avks_lp .lp_pill {
            display: inline-flex; align-items: center; gap: 8px;
            padding: 7px 16px; border-radius: 30px; margin-bottom: 26px;
            background: color-mix(in srgb, var(--lp-accent) 12%, transparent);
            border: 1px solid color-mix(in srgb, var(--lp-accent) 40%, transparent);
            color: var(--lp-accent2); font-size: 13px; font-weight: 600; letter-spacing: .4px;
        }
        .avks_lp .lp_pill .lp_dot { width: 8px; height: 8px; border-radius: 50%; background: var(--lp-accent); box-shadow: 0 0 10px var(--lp-accent); animation: lp_pulse 1.6s infinite; }
        @keyframes lp_pulse { 0%,100% { opacity: 1; transform: scale(1);} 50% { opacity:.4; transform: scale(.7);} }
        .avks_lp .lp_hero h1 { font-size: clamp(38px, 6vw, 68px); font-weight: 800; letter-spacing: -1.5px; }
        .avks_lp .lp_hero .lp_lead { max-width: 620px; margin: 22px auto 0; font-size: clamp(16px, 2vw, 19px); line-height: 1.6; color: var(--lp-sub); }
        .avks_lp .lp_hero_cta { display: flex; gap: 14px; justify-content: center; flex-wrap: wrap; margin-top: 34px; }
        .avks_lp .lp_hero_note { margin-top: 16px; font-size: 13px; color: var(--lp-body); }

        .avks_lp .lp_hero_visual { position: relative; margin: 56px auto 0; max-width: 900px; }
        .avks_lp .lp_hero_visual img { width: 100%; height: auto; display: block; border-radius: 16px; filter: drop-shadow(0 40px 80px rgba(0,0,0,.55)); }
        .avks_lp .lp_float {
            position: absolute; display: flex; align-items: center; gap: 10px;
            padding: 12px 16px; border-radius: 14px;
            background: color-mix(in srgb, var(--lp-card) 88%, transparent);
            border: 1px solid var(--lp-border); backdrop-filter: blur(8px);
            box-shadow: 0 20px 50px -20px rgba(0,0,0,.7);
            animation: lp_float 5s ease-in-out infinite;
        }
        .avks_lp .lp_float .lp_ic { width: 34px; height: 34px; border-radius: 10px; display: grid; place-items: center; background: color-mix(in srgb, var(--lp-accent) 18%, transparent); font-size: 18px; }
        .avks_lp .lp_float b { color: var(--lp-heading); font-family: var(--lp-hfont); font-size: 14px; display: block; }
        .avks_lp .lp_float span { font-size: 12px; color: var(--lp-body); }
        .avks_lp .lp_float.f1 { top: 14%; left: -18px; animation-delay: 0s; }
        .avks_lp .lp_float.f2 { top: 55%; right: -22px; animation-delay: 1.4s; }
        .avks_lp .lp_float.f3 { bottom: -18px; left: 22%; animation-delay: .7s; }
        @keyframes lp_float { 0%,100% { transform: translateY(0);} 50% { transform: translateY(-14px);} }
        @media (max-width: 720px) { .avks_lp .lp_float { display: none; } }

        /* ---- Stats bar ---- */
        .avks_lp .lp_stats { border-top: 1px solid var(--lp-border); border-bottom: 1px solid var(--lp-border); padding: 40px 0; margin-top: 30px; }
        .avks_lp .lp_stats_grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px; text-align: center; }
        .avks_lp .lp_stat h3 { font-size: clamp(26px, 4vw, 40px); font-weight: 800; }
        .avks_lp .lp_stat p { margin-top: 6px; font-size: 13px; letter-spacing: .3px; text-transform: uppercase; color: var(--lp-body); }
        @media (max-width: 720px) { .avks_lp .lp_stats_grid { grid-template-columns: repeat(2, 1fr); gap: 30px; } }

        /* ---- Section base ---- */
        .avks_lp .lp_section { padding: 96px 0; }
        .avks_lp .lp_head { text-align: center; max-width: 680px; margin: 0 auto 56px; }
        .avks_lp .lp_kicker { display: inline-block; font-size: 13px; font-weight: 700; letter-spacing: 2px; text-transform: uppercase; color: var(--lp-accent); margin-bottom: 14px; }
        .avks_lp .lp_head h2 { font-size: clamp(30px, 4.5vw, 46px); font-weight: 800; letter-spacing: -1px; }
        .avks_lp .lp_head p { margin-top: 16px; font-size: 17px; line-height: 1.6; color: var(--lp-sub); }

        /* ---- Features ---- */
        .avks_lp .lp_features { display: grid; grid-template-columns: repeat(3, 1fr); gap: 22px; }
        .avks_lp .lp_feat {
            padding: 30px; border-radius: 18px; background: var(--lp-card);
            border: 1px solid var(--lp-border); transition: transform .3s ease, border-color .3s ease;
            position: relative; overflow: hidden;
        }
        .avks_lp .lp_feat:hover { transform: translateY(-6px); border-color: color-mix(in srgb, var(--lp-accent) 55%, transparent); }
        .avks_lp .lp_feat_ic { width: 52px; height: 52px; border-radius: 14px; display: grid; place-items: center; font-size: 24px; margin-bottom: 20px; background: color-mix(in srgb, var(--lp-accent) 14%, transparent); border: 1px solid color-mix(in srgb, var(--lp-accent) 30%, transparent); }
        .avks_lp .lp_feat h3 { font-size: 19px; font-weight: 700; margin-bottom: 10px; }
        .avks_lp .lp_feat p { font-size: 15px; line-height: 1.6; }
        @media (max-width: 940px) { .avks_lp .lp_features { grid-template-columns: repeat(2, 1fr); } }
        @media (max-width: 640px) { .avks_lp .lp_features { grid-template-columns: 1fr; } }

        /* ---- How it works ---- */
        .avks_lp .lp_steps { display: grid; grid-template-columns: repeat(3, 1fr); gap: 22px; counter-reset: step; }
        .avks_lp .lp_step { padding: 34px 28px; border-radius: 18px; background: var(--lp-card); border: 1px solid var(--lp-border); position: relative; }
        .avks_lp .lp_step::before {
            counter-increment: step; content: counter(step, decimal-leading-zero);
            font-family: var(--lp-hfont); font-size: 42px; font-weight: 800; line-height: 1;
            display: block; margin-bottom: 18px;
            background: linear-gradient(120deg, var(--lp-accent), var(--lp-accent2));
            -webkit-background-clip: text; background-clip: text; -webkit-text-fill-color: transparent;
        }
        .avks_lp .lp_step h3 { font-size: 18px; margin-bottom: 10px; }
        .avks_lp .lp_step p { font-size: 15px; line-height: 1.6; }
        @media (max-width: 860px) { .avks_lp .lp_steps { grid-template-columns: 1fr; } }

        /* ---- Security spotlight ---- */
        .avks_lp .lp_split { display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center; }
        .avks_lp .lp_split_media { position: relative; }
        .avks_lp .lp_split_media img { width: 100%; border-radius: 18px; border: 1px solid var(--lp-border); box-shadow: 0 40px 80px -30px rgba(0,0,0,.7); }
        .avks_lp .lp_split_media::after { content: ""; position: absolute; inset: -30px; z-index: -1; background: radial-gradient(closest-side, color-mix(in srgb, var(--lp-accent) 20%, transparent), transparent); }
        .avks_lp .lp_check_list { list-style: none; padding: 0; margin: 26px 0 32px; display: grid; gap: 16px; }
        .avks_lp .lp_check_list li { display: flex; gap: 14px; align-items: flex-start; }
        .avks_lp .lp_check_list .lp_cm { flex: 0 0 26px; width: 26px; height: 26px; border-radius: 50%; display: grid; place-items: center; font-size: 14px; color: #06210a; background: linear-gradient(120deg, var(--lp-accent), var(--lp-accent2)); margin-top: 2px; }
        .avks_lp .lp_check_list b { color: var(--lp-heading); font-family: var(--lp-hfont); }
        .avks_lp .lp_check_list span { display: block; font-size: 14px; margin-top: 3px; }
        @media (max-width: 860px) { .avks_lp .lp_split { grid-template-columns: 1fr; gap: 40px; } .avks_lp .lp_split_media { order: -1; } }

        /* ---- File types ---- */
        .avks_lp .lp_types { display: flex; flex-wrap: wrap; gap: 12px; justify-content: center; max-width: 900px; margin: 0 auto; }
        .avks_lp .lp_chip { padding: 12px 20px; border-radius: 30px; background: var(--lp-card); border: 1px solid var(--lp-border); color: var(--lp-sub); font-size: 14px; font-weight: 500; transition: all .25s; }
        .avks_lp .lp_chip:hover { border-color: var(--lp-accent); color: var(--lp-heading); transform: translateY(-3px); }
        .avks_lp .lp_chip b { color: var(--lp-heading); }

        /* ---- Pricing ---- */
        .avks_lp .lp_price_grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 22px; align-items: stretch; }
        .avks_lp .lp_price { display: flex; flex-direction: column; padding: 36px 30px; border-radius: 20px; background: var(--lp-card); border: 1px solid var(--lp-border); position: relative; }
        .avks_lp .lp_price.pop { border-color: color-mix(in srgb, var(--lp-accent) 60%, transparent); box-shadow: 0 30px 70px -30px rgba(65,255,44,.35); }
        .avks_lp .lp_price .lp_pop_tag { position: absolute; top: -13px; left: 50%; transform: translateX(-50%); padding: 6px 16px; border-radius: 20px; font-size: 12px; font-weight: 700; letter-spacing: .5px; color: #06210a; background: linear-gradient(120deg, var(--lp-accent), var(--lp-accent2)); }
        .avks_lp .lp_price h3 { font-size: 20px; font-weight: 700; }
        .avks_lp .lp_price .lp_price_tag { margin: 18px 0 6px; font-size: 40px; font-weight: 800; color: var(--lp-heading); font-family: var(--lp-hfont); }
        .avks_lp .lp_price .lp_price_tag small { font-size: 15px; font-weight: 500; color: var(--lp-body); }
        .avks_lp .lp_price .lp_price_desc { font-size: 14px; color: var(--lp-body); min-height: 40px; }
        .avks_lp .lp_price ul { list-style: none; padding: 0; margin: 22px 0 28px; display: grid; gap: 12px; flex: 1; }
        .avks_lp .lp_price ul li { display: flex; gap: 10px; align-items: flex-start; font-size: 14.5px; }
        .avks_lp .lp_price ul li::before { content: "✓"; color: var(--lp-accent); font-weight: 700; }
        .avks_lp .lp_price .lp_btn { justify-content: center; width: 100%; }
        @media (max-width: 860px) { .avks_lp .lp_price_grid { grid-template-columns: 1fr; max-width: 420px; margin: 0 auto; } }

        /* ---- Offers band ---- */
        .avks_lp .lp_offers { display: grid; grid-template-columns: 1fr 1fr; gap: 22px; }
        .avks_lp .lp_offer { padding: 34px; border-radius: 18px; border: 1px dashed color-mix(in srgb, var(--lp-accent) 45%, transparent); background: color-mix(in srgb, var(--lp-accent) 6%, transparent); }
        .avks_lp .lp_offer h3 { font-size: 20px; margin-bottom: 10px; }
        .avks_lp .lp_offer h3 span { color: var(--lp-accent); }
        .avks_lp .lp_offer p { font-size: 15px; line-height: 1.6; }
        @media (max-width: 720px) { .avks_lp .lp_offers { grid-template-columns: 1fr; } }

        /* ---- FAQ ---- */
        .avks_lp .lp_faq { max-width: 820px; margin: 0 auto; display: grid; gap: 14px; }
        .avks_lp .lp_faq details { border: 1px solid var(--lp-border); border-radius: 14px; background: var(--lp-card); padding: 4px 24px; transition: border-color .25s; }
        .avks_lp .lp_faq details[open] { border-color: color-mix(in srgb, var(--lp-accent) 45%, transparent); }
        .avks_lp .lp_faq summary { list-style: none; cursor: pointer; padding: 20px 0; font-family: var(--lp-hfont); font-weight: 600; font-size: 17px; color: var(--lp-heading); display: flex; justify-content: space-between; align-items: center; gap: 16px; }
        .avks_lp .lp_faq summary::-webkit-details-marker { display: none; }
        .avks_lp .lp_faq summary::after { content: "+"; font-size: 24px; color: var(--lp-accent); transition: transform .25s; }
        .avks_lp .lp_faq details[open] summary::after { transform: rotate(45deg); }
        .avks_lp .lp_faq details p { padding: 0 0 22px; font-size: 15px; line-height: 1.7; }

        /* ---- Final CTA ---- */
        .avks_lp .lp_final { text-align: center; padding: 90px 40px; border-radius: 26px; position: relative; overflow: hidden; border: 1px solid var(--lp-border); background: var(--lp-card); }
        .avks_lp .lp_final::before { content: ""; position: absolute; inset: 0; background: radial-gradient(500px 260px at 50% 0%, color-mix(in srgb, var(--lp-accent) 24%, transparent), transparent 70%); }
        .avks_lp .lp_final > * { position: relative; z-index: 1; }
        .avks_lp .lp_final h2 { font-size: clamp(30px, 5vw, 48px); font-weight: 800; letter-spacing: -1px; }
        .avks_lp .lp_final p { max-width: 520px; margin: 18px auto 30px; font-size: 17px; color: var(--lp-sub); }

        /* ---- Footer ---- */
        .avks_lp .lp_footer { border-top: 1px solid var(--lp-border); padding: 44px 0; margin-top: 90px; }
        .avks_lp .lp_footer_in { display: flex; justify-content: space-between; align-items: center; gap: 20px; flex-wrap: wrap; }
        .avks_lp .lp_footer img { height: 26px; }
        .avks_lp .lp_footer .lp_fnav { display: flex; gap: 24px; flex-wrap: wrap; }
        .avks_lp .lp_footer .lp_fnav a { color: var(--lp-body); font-size: 14px; }
        .avks_lp .lp_footer .lp_fnav a:hover { color: var(--lp-accent); }
        .avks_lp .lp_footer .lp_copy { font-size: 13px; color: var(--lp-body); }

        /* ---- Reveal on scroll ---- */
        .avks_lp .lp_reveal { opacity: 0; transform: translateY(30px); transition: opacity .7s ease, transform .7s ease; }
        .avks_lp .lp_reveal.in { opacity: 1; transform: none; }
    </style>

    <div class="avks_lp">

        <!-- ===================== NAV ===================== -->
        <nav class="lp_nav">
            <div class="lp_wrap lp_nav_in">
                <a href="/" class="lp_nav_logo">
                    <img src="{{ URL::asset('build/img/logo_avks.svg') }}" alt="AVKS.cloud">
                </a>
                <div class="lp_nav_links">
                    <a href="#features" class="lp_link">Features</a>
                    <a href="#security" class="lp_link">Security</a>
                    <a href="#how" class="lp_link">How it works</a>
                    <a href="#pricing" class="lp_link">Pricing</a>
                    <a href="#faq" class="lp_link">FAQ</a>
                </div>
                <div class="lp_nav_cta">
                    <a href="/login" class="lp_btn lp_btn_ghost">Sign in</a>
                    <a href="/register" class="lp_btn lp_btn_primary">Start free</a>
                </div>
            </div>
        </nav>

        <!-- ===================== HERO ===================== -->
        <header class="lp_hero">
            <div class="lp_wrap">
                <span class="lp_pill"><span class="lp_dot"></span> Zero-knowledge encryption &middot; Your PIN is the only key</span>
                <h1>Your files. Your PIN.<br><span class="lp_grad">Nobody else. Ever.</span></h1>
                <p class="lp_lead">
                    AVKS.cloud is secure, PIN-protected cloud storage built for people who take privacy
                    seriously. Upload archives, media, code and documents behind advanced encryption —
                    where only <em>you</em> hold the key that unlocks them.
                </p>
                <div class="lp_hero_cta">
                    <a href="/register" class="lp_btn lp_btn_primary">Create your free vault →</a>
                    <a href="#how" class="lp_btn lp_btn_ghost">See how it works</a>
                </div>
                <p class="lp_hero_note">Start free with 10&nbsp;MB · No credit card required · Scale up any time</p>

                <div class="lp_hero_visual lp_reveal">
                    <img src="{{ URL::asset('build/img/intro/mac.png') }}" alt="AVKS.cloud secure storage dashboard">
                    <div class="lp_float f1">
                        <div class="lp_ic">🔒</div>
                        <div><b>End-to-end encrypted</b><span>Sealed with your PIN</span></div>
                    </div>
                    <div class="lp_float f2">
                        <div class="lp_ic">⚡</div>
                        <div><b>Instant access</b><span>High-availability storage</span></div>
                    </div>
                    <div class="lp_float f3">
                        <div class="lp_ic">🔗</div>
                        <div><b>Public share links</b><span>Encrypted &amp; on your terms</span></div>
                    </div>
                </div>
            </div>
        </header>

        <!-- ===================== STATS ===================== -->
        <section class="lp_stats">
            <div class="lp_wrap lp_stats_grid">
                <div class="lp_stat"><h3 class="lp_grad">100%</h3><p>Zero-knowledge</p></div>
                <div class="lp_stat"><h3 class="lp_grad">6+</h3><p>File type families</p></div>
                <div class="lp_stat"><h3 class="lp_grad">2–8</h3><p>Character PIN vaults</p></div>
                <div class="lp_stat"><h3 class="lp_grad">$0</h3><p>To get started</p></div>
            </div>
        </section>

        <!-- ===================== FEATURES ===================== -->
        <section class="lp_section" id="features">
            <div class="lp_wrap">
                <div class="lp_head lp_reveal">
                    <span class="lp_kicker">Why AVKS.cloud</span>
                    <h2>Everything you need to keep data safe — and nothing you don't</h2>
                    <p>Whether you're a student, a creator, or running a business, AVKS.cloud gives you a secure home for your most valuable files with the control you'd expect and the simplicity you won't.</p>
                </div>
                <div class="lp_features">
                    <div class="lp_feat lp_reveal">
                        <div class="lp_feat_ic">🛡️</div>
                        <h3>Unmatched security</h3>
                        <p>Advanced encryption and a unique security script mean no one but you can open your data. You have exclusive control — and total peace of mind.</p>
                    </div>
                    <div class="lp_feat lp_reveal">
                        <div class="lp_feat_ic">🗂️</div>
                        <h3>Flexible storage</h3>
                        <p>From personal vaults to full commercial storage, choose the product that fits your data — and reshape it whenever your needs change.</p>
                    </div>
                    <div class="lp_feat lp_reveal">
                        <div class="lp_feat_ic">⚡</div>
                        <h3>Fast &amp; reliable access</h3>
                        <p>State-of-the-art infrastructure delivers quick access and high availability, so your files are always within reach the moment you need them.</p>
                    </div>
                    <div class="lp_feat lp_reveal">
                        <div class="lp_feat_ic">💸</div>
                        <h3>Competitive pricing</h3>
                        <p>Affordable rates and scalable plans that grow with you. Start free, then add exactly the space you need — never more than you use.</p>
                    </div>
                    <div class="lp_feat lp_reveal">
                        <div class="lp_feat_ic">🤝</div>
                        <h3>Expert support</h3>
                        <p>A team of experienced data specialists is ready to guide you every step of the way, with personalized advice whenever you reach out.</p>
                    </div>
                    <div class="lp_feat lp_reveal">
                        <div class="lp_feat_ic">📄</div>
                        <h3>Transparent terms</h3>
                        <p>No hidden fees, no surprises. We believe in complete clarity so you always understand exactly what you're getting and paying for.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===================== SECURITY SPOTLIGHT ===================== -->
        <section class="lp_section" id="security" style="padding-top: 0;">
            <div class="lp_wrap">
                <div class="lp_split">
                    <div class="lp_reveal">
                        <span class="lp_kicker">Zero-knowledge by design</span>
                        <h2 style="font-size: clamp(28px,4vw,42px); letter-spacing:-1px;">The only person who can open your data is <span class="lp_grad">you</span></h2>
                        <ul class="lp_check_list">
                            <li>
                                <span class="lp_cm">✓</span>
                                <div><b>Your PIN, your key.</b><span>Every vault is locked with a 2–8 character PIN that maps to its own private location. Enter it and your files unlock instantly.</span></div>
                            </li>
                            <li>
                                <span class="lp_cm">✓</span>
                                <div><b>We never store your PIN.</b><span>For your security we don't keep your PINs on record — which means not even our team can reach inside your vault.</span></div>
                            </li>
                            <li>
                                <span class="lp_cm">✓</span>
                                <div><b>Encrypted public links.</b><span>Need to share? Generate a public or encrypted link on your terms, and revoke access whenever you like.</span></div>
                            </li>
                        </ul>
                        <a href="/register" class="lp_btn lp_btn_primary">Lock in my first vault →</a>
                    </div>
                    <div class="lp_split_media lp_reveal">
                        <img src="{{ URL::asset('build/img/intro/img-generation.png') }}" alt="Encrypted, PIN-protected file vault">
                    </div>
                </div>
            </div>
        </section>

        <!-- ===================== HOW IT WORKS ===================== -->
        <section class="lp_section" id="how" style="padding-top: 0;">
            <div class="lp_wrap">
                <div class="lp_head lp_reveal">
                    <span class="lp_kicker">Up and running in minutes</span>
                    <h2>Three steps between you and a secure vault</h2>
                </div>
                <div class="lp_steps">
                    <div class="lp_step lp_reveal">
                        <h3>Create your account</h3>
                        <p>Sign up in seconds and land in a clean dashboard that shows every feature included in your plan — no clutter, no guesswork.</p>
                    </div>
                    <div class="lp_step lp_reveal">
                        <h3>Generate your PIN</h3>
                        <p>Pick a unique 2–8 character PIN. Each one becomes a private location for your files. Just remember it — it's the single key to your vault.</p>
                    </div>
                    <div class="lp_step lp_reveal">
                        <h3>Upload &amp; relax</h3>
                        <p>Drop in your files up to your plan's limit. They're encrypted, always available, and ready to retrieve, view or share whenever you need.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===================== FILE TYPES ===================== -->
        <section class="lp_section" style="padding-top: 0;">
            <div class="lp_wrap">
                <div class="lp_head lp_reveal">
                    <span class="lp_kicker">Bring anything</span>
                    <h2>Built to store the formats you actually work with</h2>
                    <p>Our servers support a wide range of data — and if your format isn't listed, our support team is one message away.</p>
                </div>
                <div class="lp_types lp_reveal">
                    <div class="lp_chip"><b>Archives</b> · ZIP, RAR, tar, gzip</div>
                    <div class="lp_chip"><b>Audio</b> · MP3, WAV, OGG, OPUS</div>
                    <div class="lp_chip"><b>Images</b> · JPEG, PNG, GIF, SVG, TIFF</div>
                    <div class="lp_chip"><b>Code &amp; markup</b> · HTML, CSS, JS, PHP, Java, Py, C/C++</div>
                    <div class="lp_chip"><b>Documents</b> · TXT</div>
                    <div class="lp_chip"><b>Video</b> · MP4, MOV, AVI, WebM, WMV, FLV</div>
                </div>
            </div>
        </section>

        <!-- ===================== PRICING ===================== -->
        <section class="lp_section" id="pricing" style="padding-top: 0;">
            <div class="lp_wrap">
                <div class="lp_head lp_reveal">
                    <span class="lp_kicker">Simple, honest pricing</span>
                    <h2>Start free. Scale only when you need to.</h2>
                    <p>Every plan includes the same zero-knowledge encryption. The only thing that changes is how much room you have to grow.</p>
                </div>
                <div class="lp_price_grid">
                    <div class="lp_price lp_reveal">
                        <h3>Free</h3>
                        <div class="lp_price_tag">$0</div>
                        <p class="lp_price_desc">The perfect way to try zero-knowledge storage, risk-free.</p>
                        <ul>
                            <li>10&nbsp;MB secure storage</li>
                            <li>PIN-protected vaults</li>
                            <li>Full encryption included</li>
                            <li>All supported file types</li>
                        </ul>
                        <a href="/register" class="lp_btn lp_btn_ghost">Get started free</a>
                    </div>
                    <div class="lp_price pop lp_reveal">
                        <span class="lp_pop_tag">Most popular</span>
                        <h3>Personal</h3>
                        <div class="lp_price_tag">Flexible <small>/ pay as you grow</small></div>
                        <p class="lp_price_desc">Add exactly the space you need, upgradeable any time from 50&nbsp;MB.</p>
                        <ul>
                            <li>Everything in Free</li>
                            <li>Scalable storage upgrades</li>
                            <li>Encrypted public share links</li>
                            <li>Priority, high-availability access</li>
                            <li>First-time user discount</li>
                        </ul>
                        <a href="/register" class="lp_btn lp_btn_primary">Upgrade my vault</a>
                    </div>
                    <div class="lp_price lp_reveal">
                        <h3>Commercial</h3>
                        <div class="lp_price_tag">Custom <small>/ built to scale</small></div>
                        <p class="lp_price_desc">For teams and businesses that need serious, dependable capacity.</p>
                        <ul>
                            <li>Everything in Personal</li>
                            <li>Large-scale commercial storage</li>
                            <li>Dedicated expert support</li>
                            <li>Transparent, no-surprise terms</li>
                        </ul>
                        <a href="/register" class="lp_btn lp_btn_ghost">Talk to us</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===================== OFFERS ===================== -->
        <section class="lp_section" style="padding-top: 0;">
            <div class="lp_wrap">
                <div class="lp_offers">
                    <div class="lp_offer lp_reveal">
                        <h3>🎉 <span>First-time user discount</span></h3>
                        <p>New to AVKS.cloud? Enjoy reduced rates on your very first storage plan — a warm welcome to a safer way of storing your data.</p>
                    </div>
                    <div class="lp_offer lp_reveal">
                        <h3>💚 <span>Refer a friend, both win</span></h3>
                        <p>Invite someone you trust. When their plan activates, you <em>both</em> receive a special bonus. Good security is better shared.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===================== FAQ ===================== -->
        <section class="lp_section" id="faq" style="padding-top: 0;">
            <div class="lp_wrap">
                <div class="lp_head lp_reveal">
                    <span class="lp_kicker">Good to know</span>
                    <h2>Frequently asked questions</h2>
                </div>
                <div class="lp_faq lp_reveal">
                    <details open>
                        <summary>How secure is my data with AVKS.cloud?</summary>
                        <p>Security is our top priority. We use advanced encryption and a unique security script that ensures only you can access your data. The system is designed for the highest level of protection, giving you complete peace of mind.</p>
                    </details>
                    <details>
                        <summary>What happens if I forget my PIN?</summary>
                        <p>For your security, we intentionally don't collect or store your PINs. That means if you lose or forget one, we can't recover the files behind it. Please remember your PIN — or keep it somewhere safe, outside of our platform.</p>
                    </details>
                    <details>
                        <summary>What types of files can I store?</summary>
                        <p>A wide range: archives (ZIP, RAR, tar, gzip), audio (MP3, WAV, OGG, OPUS), images (JPEG, PNG, GIF, SVG, TIFF and more), code and markup (HTML, CSS, JS, PHP, Java, Python, C/C++), text files, and video (MP4, MOV, AVI, WebM and more). Need another format? Just contact our support team.</p>
                    </details>
                    <details>
                        <summary>How does uploading work?</summary>
                        <p>After logging in, you'll see everything included in your plan. Create a unique 2–8 character PIN, and it becomes a dedicated location for your files. Upload up to your plan's storage limit — it's that simple.</p>
                    </details>
                    <details>
                        <summary>Can I upgrade if I need more space?</summary>
                        <p>Absolutely. Plans are flexible and scalable — you can upgrade at any time as your data grows. Upgrades start from 50&nbsp;MB, so you simply add the space you want, when you want it.</p>
                    </details>
                    <details>
                        <summary>Is it really free to start?</summary>
                        <p>Yes. You get 10&nbsp;MB of secure, encrypted storage completely free — no credit card required. Upgrade only if and when you need more room.</p>
                    </details>
                </div>
            </div>
        </section>

        <!-- ===================== FINAL CTA ===================== -->
        <section class="lp_section" style="padding-top: 0;">
            <div class="lp_wrap">
                <div class="lp_final lp_reveal">
                    <h2>Secure your data today</h2>
                    <p>Join the people who've already taken control of their files with AVKS.cloud. Start your free vault now and take the first step toward truly private, reliable storage.</p>
                    <div class="lp_hero_cta">
                        <a href="/register" class="lp_btn lp_btn_primary">Start free — it takes a minute</a>
                        <a href="/login" class="lp_btn lp_btn_ghost">I already have an account</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===================== FOOTER ===================== -->
        <footer class="lp_footer">
            <div class="lp_wrap lp_footer_in">
                <a href="/" class="lp_nav_logo">
                    <img src="{{ URL::asset('build/img/logo_avks.svg') }}" alt="AVKS.cloud">
                </a>
                <nav class="lp_fnav">
                    <a href="#features">Features</a>
                    <a href="#security">Security</a>
                    <a href="#pricing">Pricing</a>
                    <a href="#faq">FAQ</a>
                    <a href="mailto:contact@avks.cloud">Contact</a>
                </nav>
                <div class="lp_copy">&copy; {{ date('Y') }} AVKS.cloud — Your files, your key.</div>
            </div>
        </footer>
    </div>

    <script>
        (function () {
            var reveals = document.querySelectorAll('.avks_lp .lp_reveal');
            if (!('IntersectionObserver' in window)) {
                reveals.forEach(function (el) { el.classList.add('in'); });
                return;
            }
            var io = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('in');
                        io.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.12 });
            reveals.forEach(function (el) { io.observe(el); });

            // Smooth-scroll for in-page anchors
            document.querySelectorAll('.avks_lp a[href^="#"]').forEach(function (a) {
                a.addEventListener('click', function (e) {
                    var target = document.querySelector(a.getAttribute('href'));
                    if (target) {
                        e.preventDefault();
                        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    }
                });
            });
        })();
    </script>
</x-layouts.guest>