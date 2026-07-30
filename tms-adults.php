<?php
$page_title       = "TMS Therapy for Adults | Tranquil Minds Mental Health";
$page_description = "Neurostar® TMS therapy for adults in Monticello, MN — a non-drug, FDA-cleared treatment for depression, anxious depression, and OCD. Proven relief at the source, without medication side effects.";
$hero_title       = 'TMS Therapy<br><span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-white to-white/50">for Adults.</span>';
$hero_subtitle    = 'For adults living with depression, anxious depression, or OCD, Neurostar® TMS offers a proven, non-drug path to relief — no medication, no sedation, no downtime.';
$hero_badge       = 'TMS Therapy · Adults';
$hero_cta1_text   = 'Book a Free Consultation';
$hero_cta1_link   = '#contact';
$hero_cta2_text   = 'How It Works';
$hero_cta2_link   = '#how';
?>
<?php include 'header.php'; ?>
<?php include 'hero-service.php'; ?>

    <!-- ===== OVERVIEW ===== -->
    <section id="overview" class="py-16 bg-[#FAFAFF] relative overflow-hidden">
        <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-accent/10 rounded-full blur-[140px] translate-x-1/3 -translate-y-1/4 pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-primary/8 rounded-full blur-[120px] -translate-x-1/3 translate-y-1/3 pointer-events-none"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="grid lg:grid-cols-2 gap-14 lg:gap-20 items-center">
                <div class="fade-in-section">
                    <div class="flex items-center gap-3 mb-6">
                        <span class="h-px w-12 bg-primary/40"></span>
                        <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">TMS for Adults</span>
                    </div>
                    <h2 class="text-4xl md:text-5xl text-primary mb-6 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                        A Proven Option<br>When Medication Isn't Enough
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-4">
                        Neurostar® TMS uses gentle magnetic pulses to reactivate the underactive brain circuits behind depression and related conditions. For many adults — especially those who haven't found relief from antidepressants — it's a genuine turning point.
                    </p>
                    <p class="text-gray-600 text-lg leading-relaxed mb-8">
                        It's an outpatient treatment with no medication, no sedation, and no downtime. You stay awake, and you can drive yourself home and get right back to your day.
                    </p>
                    <div class="space-y-3">
                        <?php foreach ([
                            'Non-drug and non-invasive — no systemic side effects',
                            'FDA-cleared for depression, anxious depression, and OCD',
                            'Covered by most major insurance plans',
                        ] as $pt): ?>
                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 rounded-full bg-accent/15 flex items-center justify-center text-accent flex-shrink-0 mt-0.5">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <span class="text-gray-700 text-base leading-relaxed"><?php echo $pt; ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="fade-in-section relative">
                    <div class="relative rounded-[2.5rem] overflow-hidden shadow-[0_40px_80px_-24px_rgba(42,22,63,0.35)] min-h-[440px]">
                        <img src="assets/neurostar/NeuroStar-adult.webp" alt="An adult receiving Neurostar® TMS therapy" class="absolute inset-0 w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/60 via-transparent to-transparent pointer-events-none"></div>
                    </div>
                    <div class="absolute -bottom-6 -left-4 md:-left-8 bg-white rounded-2xl shadow-2xl border border-primary/5 px-5 py-4 flex items-center gap-4 max-w-[80%]">
                        <div class="w-11 h-11 rounded-xl bg-accent flex items-center justify-center text-white flex-shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </div>
                        <div>
                            <div class="text-primary font-bold text-sm">FDA-Cleared</div>
                            <div class="text-gray-400 text-xs">Non-drug &amp; non-invasive</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== WHO BENEFITS MOST ===== -->
    <section id="who" class="py-16 bg-white relative overflow-hidden">
        <div class="absolute top-0 left-0 w-[500px] h-[500px] bg-accent/6 rounded-full blur-[130px] -translate-x-1/3 -translate-y-1/3 pointer-events-none"></div>
        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center max-w-2xl mx-auto mb-10 fade-in-section">
                <div class="flex items-center justify-center gap-3 mb-6">
                    <span class="h-px w-12 bg-primary/40"></span>
                    <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">Is It Right for You?</span>
                    <span class="h-px w-12 bg-primary/40"></span>
                </div>
                <h2 class="text-4xl md:text-5xl text-primary mb-5 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                    Who Benefits Most
                </h2>
                <p class="text-gray-500 text-lg">TMS is an especially good fit for adults who recognize themselves here.</p>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php
                $who = [
                    ['t' => 'Antidepressants Haven\'t Worked', 'd' => 'You\'ve tried one or more medications without lasting relief.', 'icon' => 'M19 7a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2V9a2 2 0 012-2h14zm-9 4h4'],
                    ['t' => 'Medication Side Effects', 'd' => 'Side effects have made it hard to stay on a medication that helps.', 'icon' => 'M12 9v2m0 4h.01M5.07 19H18.93a2 2 0 001.72-3L13.72 4a2 2 0 00-3.44 0L3.35 16a2 2 0 001.72 3z'],
                    ['t' => 'You Want a Drug-Free Option', 'd' => 'You\'d prefer to treat depression without adding another daily pill.', 'icon' => 'M13 10V3L4 14h7v7l9-11h-7z'],
                    ['t' => 'Treatment-Resistant Depression', 'd' => 'Depression that just hasn\'t responded to the usual approaches.', 'icon' => 'M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15'],
                    ['t' => 'Depression With Anxiety', 'd' => 'Low mood that comes with persistent, co-occurring anxiety.', 'icon' => 'M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z'],
                    ['t' => 'A Busy, Full Life', 'd' => 'You need a treatment with short sessions and zero downtime.', 'icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z'],
                ];
                foreach ($who as $w): ?>
                <div class="bg-[#FAFAFF] border border-primary/8 rounded-[1.5rem] p-6 hover:bg-white hover:shadow-lg hover:border-accent/30 hover:-translate-y-1 transition-all duration-300 group">
                    <div class="w-11 h-11 rounded-xl bg-accent/10 flex items-center justify-center text-accent mb-4 group-hover:bg-accent group-hover:text-white transition-all duration-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?php echo $w['icon']; ?>"></path></svg>
                    </div>
                    <h3 class="text-base font-bold text-primary mb-1.5"><?php echo $w['t']; ?></h3>
                    <p class="text-gray-500 text-sm leading-relaxed"><?php echo $w['d']; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ===== WHAT IT TREATS ===== -->
    <section id="treats" class="py-16 bg-[#FAFAFF] relative overflow-hidden">
        <div class="absolute bottom-0 right-0 w-[600px] h-[600px] bg-accent/8 rounded-full blur-[150px] translate-x-1/4 translate-y-1/4 pointer-events-none"></div>
        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center max-w-2xl mx-auto mb-10 fade-in-section">
                <div class="flex items-center justify-center gap-3 mb-6">
                    <span class="h-px w-12 bg-primary/40"></span>
                    <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">FDA-Cleared For Adults</span>
                    <span class="h-px w-12 bg-primary/40"></span>
                </div>
                <h2 class="text-4xl md:text-5xl text-primary mb-5 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                    What TMS Treats
                </h2>
                <p class="text-gray-500 text-lg">A proven option for adults, especially when medication alone hasn't been enough.</p>
            </div>
            <div class="grid sm:grid-cols-3 gap-6">
                <?php
                $treats = [
                    ['t' => 'Depression (MDD)', 'd' => 'For adults with major depressive disorder — including treatment-resistant depression.', 'link' => 'depression.php', 'img' => 'assets/home/depression.png'],
                    ['t' => 'Anxious Depression', 'd' => 'For adults whose depression comes with co-occurring anxiety.', 'link' => 'anxiety.php', 'img' => 'assets/home/anxiety.png'],
                    ['t' => 'OCD', 'd' => 'FDA-cleared as a treatment for obsessive-compulsive disorder in adults.', 'link' => 'ocd.php', 'img' => 'assets/home/ocd.png'],
                ];
                foreach ($treats as $t): ?>
                <a href="<?php echo $t['link']; ?>" class="group bg-white border border-primary/8 rounded-[1.5rem] overflow-hidden shadow-sm hover:shadow-xl hover:border-accent/30 hover:-translate-y-1 transition-all duration-300 flex flex-col">
                    <div class="h-44 w-full overflow-hidden relative">
                        <img src="<?php echo $t['img']; ?>" alt="<?php echo $t['t']; ?>" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-lg font-bold text-primary mb-2 group-hover:text-accent transition-colors"><?php echo $t['t']; ?></h3>
                        <p class="text-gray-500 text-sm leading-relaxed flex-grow"><?php echo $t['d']; ?></p>
                        <span class="inline-flex items-center gap-1.5 text-accent font-bold text-sm mt-4 group-hover:gap-3 transition-all">Learn more
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </span>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ===== WHAT TO EXPECT ===== -->
    <section id="how" class="py-16 bg-white relative overflow-hidden">
        <div class="container mx-auto px-6 relative z-10">
            <div class="grid lg:grid-cols-2 gap-14 lg:gap-20 items-center">
                <div class="fade-in-section relative order-2 lg:order-1">
                    <div class="relative rounded-[2.5rem] overflow-hidden shadow-[0_40px_80px_-24px_rgba(42,22,63,0.35)] min-h-[420px]">
                        <img src="assets/neurostar/neurostar-equipment.webp" alt="The NeuroStar TMS treatment chair and equipment" class="absolute inset-0 w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/50 via-transparent to-transparent pointer-events-none"></div>
                        <div class="absolute bottom-6 left-6 right-6">
                            <div class="bg-white/15 backdrop-blur-md border border-white/25 rounded-2xl px-5 py-4">
                                <div class="text-white/70 text-[10px] font-bold uppercase tracking-widest mb-1">Each Session</div>
                                <div class="text-white font-semibold text-sm">~19 minutes · fully awake · drive yourself home</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fade-in-section order-1 lg:order-2">
                    <div class="flex items-center gap-3 mb-6">
                        <span class="h-px w-12 bg-primary/40"></span>
                        <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">What to Expect</span>
                    </div>
                    <h2 class="text-4xl md:text-5xl text-primary mb-8 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">Simple, Comfortable Sessions</h2>
                    <div class="space-y-5">
                        <?php
                        $steps = [
                            ['t' => 'Brain Mapping', 'd' => 'Your first visit personalizes the treatment to your brain using a precise motor-threshold protocol.'],
                            ['t' => 'Quick Daily Sessions', 'd' => 'Each treatment takes about 19 minutes. You relax in a chair, fully awake the whole time.'],
                            ['t' => 'A Full Course', 'd' => 'A typical course is about 36 sessions over roughly six weeks, usually five days a week.'],
                            ['t' => 'No Downtime', 'd' => 'No sedation and no recovery time — drive yourself and get right back to your day.'],
                        ];
                        foreach ($steps as $st): ?>
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-xl bg-accent/10 flex items-center justify-center text-accent flex-shrink-0"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg></div>
                            <div>
                                <h3 class="text-lg font-bold text-primary mb-1"><?php echo $st['t']; ?></h3>
                                <p class="text-gray-500 text-sm leading-relaxed"><?php echo $st['d']; ?></p>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <a href="what-is-tms-therapy.php" class="inline-flex items-center gap-2 mt-8 text-accent font-bold text-base hover:text-primary transition-colors">
                        Learn more about how TMS works
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== WHY ADULTS CHOOSE TMS ===== -->
    <section class="py-16 bg-[#2A163F] relative overflow-hidden">
        <div class="absolute top-0 right-0 w-[700px] h-[700px] bg-accent rounded-full blur-[200px] opacity-10 translate-x-1/2 -translate-y-1/3 pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-primary rounded-full blur-[150px] opacity-30 -translate-x-1/3 translate-y-1/3 pointer-events-none"></div>
        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-2xl mb-10 fade-in-section">
                <div class="flex items-center gap-3 mb-6">
                    <span class="h-px w-12 bg-white/20"></span>
                    <span class="text-white/40 font-bold tracking-widest uppercase text-xs">Why Choose It</span>
                </div>
                <h2 class="text-4xl md:text-5xl text-white mb-5 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">The Advantages for Adults</h2>
                <p class="text-white/60 text-lg leading-relaxed">For many, TMS succeeds where medication couldn't — and without the trade-offs.</p>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php
                $adv = [
                    ['n' => '01', 't' => 'Drug-Free', 'd' => 'No pills and none of the systemic side effects like weight gain or drowsiness.'],
                    ['n' => '02', 't' => 'Non-Invasive', 'd' => 'No surgery, no anesthesia, and nothing like ECT — you stay fully awake.'],
                    ['n' => '03', 't' => 'Proven &amp; Trusted', 'd' => 'The #1 physician-recommended TMS, with millions of treatments performed.'],
                    ['n' => '04', 't' => 'Lasting Results', 'd' => 'By changing brain function at the source, relief is often durable.'],
                    ['n' => '05', 't' => 'Widely Covered', 'd' => 'Covered by most major insurers — our team helps with authorization.'],
                    ['n' => '06', 't' => 'Fits Your Life', 'd' => 'Short outpatient sessions with no downtime slot into a normal day.'],
                ];
                foreach ($adv as $a): ?>
                <div class="relative bg-white/[0.04] border border-white/10 rounded-[1.5rem] p-8 hover:bg-white/[0.08] hover:border-accent/30 transition-all duration-300 group overflow-hidden">
                    <div class="absolute top-4 right-6 text-6xl font-bold text-white/25 group-hover:text-white/40 transition-colors" style="font-family: 'Bauhaus Soft', cursive;"><?php echo $a['n']; ?></div>
                    <h3 class="text-xl font-bold text-white mb-3 relative z-10 pr-10"><?php echo $a['t']; ?></h3>
                    <p class="text-white/50 text-sm leading-relaxed relative z-10"><?php echo $a['d']; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ===== FAQ ===== -->
    <section id="faq" class="py-16 bg-white relative overflow-hidden">
        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-3xl mx-auto">
                <div class="text-center mb-12 fade-in-section">
                    <div class="flex items-center justify-center gap-3 mb-6">
                        <span class="h-px w-12 bg-primary/40"></span>
                        <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">Common Questions</span>
                        <span class="h-px w-12 bg-primary/40"></span>
                    </div>
                    <h2 class="text-4xl md:text-5xl text-primary leading-tight" style="font-family: 'Bauhaus Soft', cursive;">Questions, Answered</h2>
                </div>
                <div class="space-y-4 fade-in-section">
                    <?php
                    $faqs = [
                        ['q' => 'Is TMS right for me?', 'a' => 'TMS is often a great fit for adults with depression — especially if antidepressants haven\'t worked well or caused difficult side effects. A free consultation is the best way to find out.'],
                        ['q' => 'Does it hurt or require sedation?', 'a' => 'No. You feel a light tapping on the scalp, stay fully awake, and need no sedation. Most mild discomfort fades after the first week.'],
                        ['q' => 'How long is a course of treatment?', 'a' => 'Typically about 36 sessions over six weeks, with each session lasting around 19 minutes.'],
                        ['q' => 'Can I keep taking my medication during TMS?', 'a' => 'Often, yes. Many adults continue medication during TMS — we coordinate your full plan so everything works together safely.'],
                        ['q' => 'Is it covered by insurance?', 'a' => 'Usually, yes — most major insurers cover TMS for treatment-resistant depression. Our team helps handle the pre-authorization for you.'],
                    ];
                    foreach ($faqs as $f): ?>
                    <details class="group bg-[#FAFAFF] border border-primary/8 rounded-2xl overflow-hidden hover:border-accent/30 transition-colors">
                        <summary class="flex items-center justify-between gap-4 px-6 py-5 cursor-pointer list-none select-none">
                            <span class="text-primary font-bold text-base md:text-lg"><?php echo $f['q']; ?></span>
                            <span class="w-8 h-8 rounded-full bg-accent/10 flex items-center justify-center text-accent flex-shrink-0 group-open:rotate-45 transition-transform duration-300">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                            </span>
                        </summary>
                        <div class="px-6 pb-6 -mt-1"><p class="text-gray-500 text-base leading-relaxed"><?php echo $f['a']; ?></p></div>
                    </details>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CTA ===== -->
    <section class="py-16 bg-[#FAFAFF] relative overflow-hidden">
        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-7xl mx-auto bg-primary rounded-[2.5rem] overflow-hidden shadow-2xl relative fade-in-section">
                <div class="absolute top-0 right-0 w-[400px] h-[400px] bg-accent rounded-full blur-[120px] opacity-25 translate-x-1/3 -translate-y-1/3 pointer-events-none"></div>
                <div class="absolute bottom-0 left-0 w-[300px] h-[300px] bg-accent-light rounded-full blur-[110px] opacity-20 -translate-x-1/3 translate-y-1/3 pointer-events-none"></div>
                <div class="relative z-10 px-8 md:px-14 py-10 flex flex-col lg:flex-row items-center justify-between gap-8 text-center lg:text-left">
                    <div class="max-w-2xl">
                        <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-white/10 border border-white/20 text-white/80 text-[11px] font-bold uppercase tracking-widest mb-4">
                            <span class="w-1.5 h-1.5 rounded-full bg-green-400 animate-pulse"></span>
                            Certified NeuroStar® Provider
                        </div>
                        <h2 class="text-3xl md:text-4xl text-white mb-2 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">See If TMS Is Right for You</h2>
                        <p class="text-white/70 text-base md:text-lg">Start with a free, confidential 15-minute consultation.</p>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-4 flex-shrink-0">
                        <a href="#contact" class="px-7 py-3.5 bg-accent text-white rounded-full font-bold hover:bg-accent-light hover:-translate-y-0.5 hover:shadow-[0_0_40px_rgba(140,120,190,0.5)] transition-all duration-300 text-center whitespace-nowrap">Book Free Consultation</a>
                        <a href="tel:+16124298280" class="px-7 py-3.5 bg-white/10 border border-white/25 text-white rounded-full font-bold hover:bg-white/20 transition-all duration-300 flex items-center justify-center gap-2 whitespace-nowrap">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            612-429-8280
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>html { scroll-padding-top: 6rem; } details summary::-webkit-details-marker { display: none; }</style>

<?php include 'footer.php'; ?>
