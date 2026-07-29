<?php
$page_title       = "Neurostar® TMS Therapy | Tranquil Minds Mental Health";
$page_description = "Neurostar® TMS therapy in Monticello, MN — a non-drug, non-invasive, FDA-cleared treatment for depression, anxious depression, and OCD. Treating depression at the source, without medication.";
$hero_title       = 'Treating Depression<br><span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-white to-white/50">at the Source.</span>';
$hero_subtitle    = 'Neurostar® TMS is a non-drug, non-invasive therapy that gently reactivates the brain circuits behind mood — no medication, no sedation, no downtime.';
$hero_badge       = 'Our Services · Neurostar® TMS';
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

                <!-- LEFT: Text -->
                <div class="fade-in-section">
                    <div class="flex items-center gap-3 mb-6">
                        <span class="h-px w-12 bg-primary/40"></span>
                        <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">What It Is</span>
                    </div>
                    <h2 class="text-4xl md:text-5xl text-primary mb-6 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                        A New Possibility<br>for Depression
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-4">
                        Neurostar® Transcranial Magnetic Stimulation (TMS) uses focused magnetic pulses — similar to those used in an MRI — to gently stimulate the underactive nerve cells in the mood-regulating regions of the brain.
                    </p>
                    <p class="text-gray-600 text-lg leading-relaxed mb-8">
                        It’s an outpatient treatment that requires no medication, no anesthesia, and no sedation. You stay fully awake, and you can drive yourself home and return to your day right afterward.
                    </p>

                    <div class="space-y-3">
                        <?php
                        $points = [
                            'Non-drug and non-invasive — no systemic medication side effects',
                            'FDA-cleared and the #1 physician-recommended TMS treatment',
                            'Covered by most major insurance plans, including Medicare',
                        ];
                        foreach ($points as $pt): ?>
                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 rounded-full bg-accent/15 flex items-center justify-center text-accent flex-shrink-0 mt-0.5">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <span class="text-gray-700 text-base leading-relaxed"><?php echo $pt; ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- RIGHT: Image -->
                <div class="fade-in-section relative">
                    <div class="relative rounded-[2.5rem] overflow-hidden shadow-[0_40px_80px_-24px_rgba(42,22,63,0.35)] min-h-[420px]">
                        <img src="assets/neurostar/neurostar-2.webp" alt="Neurostar® TMS therapy targeting the brain regions involved in mood" class="absolute inset-0 w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/60 via-transparent to-transparent pointer-events-none"></div>
                    </div>
                    <!-- Floating card -->
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

    <!-- ===== STATS ===== -->
    <section class="py-14 bg-primary relative overflow-hidden">
        <div class="absolute top-0 right-0 w-[500px] h-full bg-accent/20 rounded-full blur-3xl pointer-events-none"></div>
        <div class="container mx-auto px-6 relative z-10">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 text-center fade-in-section">
                <?php
                $stats = [
                    ['n' => '83%', 'l' => 'Experienced measurable depression relief'],
                    ['n' => '62%', 'l' => 'Achieved full remission of symptoms'],
                    ['n' => '8.5M+', 'l' => 'Treatments performed to date'],
                    ['n' => '230K+', 'l' => 'Patients treated with NeuroStar'],
                ];
                foreach ($stats as $s): ?>
                <div>
                    <div class="text-4xl md:text-5xl font-bold text-white mb-2" style="font-family: 'Bauhaus Soft', cursive;"><?php echo $s['n']; ?></div>
                    <div class="text-white/60 text-sm leading-relaxed max-w-[180px] mx-auto"><?php echo $s['l']; ?></div>
                </div>
                <?php endforeach; ?>
            </div>
            <p class="text-center text-white/40 text-xs mt-8 max-w-2xl mx-auto">Outcomes for patients completing a full course of NeuroStar treatment, as reported by NeuroStar clinical data. Individual results vary.</p>
        </div>
    </section>

    <!-- ===== HOW IT WORKS ===== -->
    <section id="how" class="py-16 bg-white relative overflow-hidden">
        <div class="absolute top-0 left-0 w-[500px] h-[500px] bg-accent/6 rounded-full blur-[130px] -translate-x-1/3 -translate-y-1/3 pointer-events-none"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center max-w-2xl mx-auto mb-10 fade-in-section">
                <div class="flex items-center justify-center gap-3 mb-6">
                    <span class="h-px w-12 bg-primary/40"></span>
                    <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">The Science</span>
                    <span class="h-px w-12 bg-primary/40"></span>
                </div>
                <h2 class="text-4xl md:text-5xl text-primary mb-5 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                    How Neurostar® TMS Works
                </h2>
                <p class="text-gray-500 text-lg">
                    Depression is a biological condition. TMS gently “wakes up” the underactive brain circuits behind it — like physical therapy for the brain.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <?php
                $steps = [
                    ['n' => '01', 't' => 'Brain Mapping', 'd' => 'We precisely locate your optimal treatment site using NeuroStar’s motor-threshold protocol — care tailored to your brain.'],
                    ['n' => '02', 't' => 'Coil Placement', 'd' => 'A magnetic coil is positioned comfortably over the left prefrontal cortex, the region that regulates mood.'],
                    ['n' => '03', 't' => 'Magnetic Pulses', 'd' => 'Gentle, focused pulses stimulate underactive neurons — reactivating dormant neural connections.'],
                    ['n' => '04', 't' => 'Neural Rewiring', 'd' => 'Over the course, repeated stimulation restores healthier connectivity and improves mood regulation — with lasting effects.'],
                ];
                foreach ($steps as $i => $st): ?>
                <div class="relative fade-in-section">
                    <div class="bg-[#FAFAFF] border border-primary/8 rounded-[1.5rem] p-7 h-full hover:border-accent/30 hover:shadow-lg transition-all duration-300">
                        <div class="text-4xl font-bold text-accent/30 mb-3" style="font-family: 'Bauhaus Soft', cursive;"><?php echo $st['n']; ?></div>
                        <h3 class="text-lg font-bold text-primary mb-2"><?php echo $st['t']; ?></h3>
                        <p class="text-gray-500 text-sm leading-relaxed"><?php echo $st['d']; ?></p>
                    </div>
                    <?php if ($i < 3): ?>
                    <div class="hidden lg:block absolute top-1/2 -right-3 w-6 h-6 text-accent/30 z-10">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </div>
                    <?php endif; ?>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- Video: How NeuroStar Works -->
            <div class="mt-14 max-w-4xl mx-auto fade-in-section">
                <div class="text-center mb-6">
                    <h3 class="text-2xl md:text-3xl text-primary font-bold" style="font-family: 'Bauhaus Soft', cursive;">See How Neurostar® Works for Depression</h3>
                </div>
                <div class="relative rounded-[2rem] overflow-hidden shadow-2xl border border-primary/10 bg-primary" style="padding-bottom: 56.25%; height: 0;">
                    <iframe class="absolute inset-0 w-full h-full"
                        src="https://www.youtube-nocookie.com/embed/4yWqQ_VVzgE"
                        title="How Does NeuroStar Work for People with Depression?"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin"
                        loading="lazy"
                        allowfullscreen></iframe>
                </div>
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
                    <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">FDA-Cleared For</span>
                    <span class="h-px w-12 bg-primary/40"></span>
                </div>
                <h2 class="text-4xl md:text-5xl text-primary mb-5 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                    What Neurostar® TMS Treats
                </h2>
                <p class="text-gray-500 text-lg">
                    NeuroStar is FDA-cleared for several conditions — a proven option when medication alone hasn’t been enough.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <?php
                $treats = [
                    ['t' => 'Depression (MDD)', 'd' => 'For adults with major depressive disorder — especially when antidepressants haven’t brought relief.', 'link' => 'depression.php', 'img' => 'assets/home/depression.png'],
                    ['t' => 'Anxious Depression', 'd' => 'FDA-cleared for adults whose depression comes with co-occurring anxiety.', 'link' => 'anxiety.php', 'img' => 'assets/home/anxiety.png'],
                    ['t' => 'OCD', 'd' => 'FDA-cleared as a treatment for obsessive-compulsive disorder in adults.', 'link' => 'ocd.php', 'img' => 'assets/home/ocd.png', 'pos' => 'center 30%'],
                    ['t' => 'Adolescent Depression', 'd' => 'FDA-cleared as an add-on therapy for depression in adolescents ages 15–21.', 'link' => 'adolescent-mental-health.php', 'img' => 'assets/home/adolescent-mental-health.png'],
                ];
                foreach ($treats as $t): ?>
                <a href="<?php echo $t['link']; ?>" class="group bg-white rounded-[1.5rem] overflow-hidden border border-primary/8 shadow-sm hover:shadow-xl hover:border-accent/30 hover:-translate-y-1 transition-all duration-300 flex flex-col">
                    <div class="h-40 w-full overflow-hidden relative">
                        <img src="<?php echo $t['img']; ?>" alt="<?php echo $t['t']; ?>" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"<?php if (!empty($t['pos'])): ?> style="object-position: <?php echo $t['pos']; ?>;"<?php endif; ?>>
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-lg font-bold text-primary mb-2 group-hover:text-accent transition-colors"><?php echo $t['t']; ?></h3>
                        <p class="text-gray-500 text-sm leading-relaxed flex-grow"><?php echo $t['d']; ?></p>
                        <span class="inline-flex items-center gap-1.5 text-accent font-bold text-sm mt-4 group-hover:gap-3 transition-all">
                            Learn more
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </span>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ===== WHAT TO EXPECT ===== -->
    <section id="expect" class="py-16 bg-white relative overflow-hidden">
        <div class="container mx-auto px-6 relative z-10">
            <div class="grid lg:grid-cols-2 gap-14 lg:gap-20 items-center">
                <!-- Image -->
                <div class="fade-in-section relative order-2 lg:order-1">
                    <div class="relative rounded-[2.5rem] overflow-hidden shadow-[0_40px_80px_-24px_rgba(42,22,63,0.35)] min-h-[380px]">
                        <img src="landing/assets/neurostar-device/NeuroStar%20Side%20View.png" alt="The NeuroStar TMS device, side view" class="absolute inset-0 w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/40 via-transparent to-transparent pointer-events-none"></div>
                    </div>
                </div>
                <!-- Text -->
                <div class="fade-in-section order-1 lg:order-2">
                    <div class="flex items-center gap-3 mb-6">
                        <span class="h-px w-12 bg-primary/40"></span>
                        <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">What to Expect</span>
                    </div>
                    <h2 class="text-4xl md:text-5xl text-primary mb-6 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                        Simple, Comfortable<br>Sessions
                    </h2>
                    <div class="space-y-5">
                        <?php
                        $expect = [
                            ['t' => 'Quick Daily Sessions', 'd' => 'Each treatment takes about 19 minutes. You relax in a comfortable chair, fully awake the whole time.'],
                            ['t' => 'A Full Course', 'd' => 'A typical course is about 36 sessions over roughly six weeks, usually five days a week.'],
                            ['t' => 'No Downtime', 'd' => 'No sedation and no recovery time — you can drive yourself and get right back to your day.'],
                            ['t' => 'Gentle Sensation', 'd' => 'Most people feel a light tapping on the scalp. Any mild discomfort typically fades after the first week.'],
                        ];
                        foreach ($expect as $e): ?>
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-xl bg-accent/10 flex items-center justify-center text-accent flex-shrink-0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-primary mb-1"><?php echo $e['t']; ?></h3>
                                <p class="text-gray-500 text-sm leading-relaxed"><?php echo $e['d']; ?></p>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== HOW IS NEUROSTAR DIFFERENT ===== -->
    <section id="different" class="py-16 bg-[#FAFAFF] relative overflow-hidden">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-primary/6 rounded-full blur-[140px] translate-x-1/3 -translate-y-1/3 pointer-events-none"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center max-w-2xl mx-auto mb-10 fade-in-section">
                <div class="flex items-center justify-center gap-3 mb-6">
                    <span class="h-px w-12 bg-primary/40"></span>
                    <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">What Sets It Apart</span>
                    <span class="h-px w-12 bg-primary/40"></span>
                </div>
                <h2 class="text-4xl md:text-5xl text-primary mb-5 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                    How Is Neurostar® Different?
                </h2>
                <p class="text-gray-500 text-lg">
                    Unlike medication, Neurostar® TMS doesn’t travel through your digestive system or affect the rest of your body — so it treats depression at the source, without the common side effects of medication.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php
                $diffs = [
                    [
                        't' => 'No Body-Wide Side Effects',
                        'd' => 'Because Neurostar® doesn’t go through the digestive system or affect the rest of the body, it avoids the common side effects associated with antidepressant medications.',
                        'icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z',
                    ],
                    [
                        't' => 'Precise “Figure-8” Coil',
                        'd' => 'Neurostar’s unique figure-8 coil focuses treatment precisely where it’s needed — right at the source of depression in the brain.',
                        'icon' => 'M15 12a3 3 0 11-6 0 3 3 0 016 0z M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z',
                    ],
                    [
                        't' => 'Contact Sensing Technology',
                        'd' => 'Neurostar’s patented Contact Sensing technology ensures you receive the prescribed dosage — every treatment, every pulse.',
                        'icon' => 'M13 10V3L4 14h7v7l9-11h-7z',
                    ],
                ];
                foreach ($diffs as $d): ?>
                <div class="bg-white rounded-[2rem] p-8 border border-primary/5 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group">
                    <div class="w-14 h-14 rounded-2xl bg-accent/10 flex items-center justify-center text-accent mb-5 group-hover:bg-accent group-hover:text-white transition-all duration-300">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="<?php echo $d['icon']; ?>"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-primary mb-3" style="font-family: 'Bauhaus Soft', cursive;"><?php echo $d['t']; ?></h3>
                    <p class="text-gray-500 text-base leading-relaxed"><?php echo $d['d']; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ===== WHY NEUROSTAR ===== -->
    <section class="py-16 bg-[#2A163F] relative overflow-hidden">
        <div class="absolute top-0 right-0 w-[700px] h-[700px] bg-accent rounded-full blur-[200px] opacity-10 translate-x-1/2 -translate-y-1/3 pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-primary rounded-full blur-[150px] opacity-30 -translate-x-1/3 translate-y-1/3 pointer-events-none"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-2xl mb-10 fade-in-section">
                <div class="flex items-center gap-3 mb-6">
                    <span class="h-px w-12 bg-white/20"></span>
                    <span class="text-white/40 font-bold tracking-widest uppercase text-xs">Why Choose It</span>
                </div>
                <h2 class="text-4xl md:text-5xl text-white mb-5 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                    A Different Kind<br>of Treatment
                </h2>
                <p class="text-white/60 text-lg leading-relaxed">
                    For many, TMS succeeds where medication couldn’t — and without the trade-offs.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php
                $why = [
                    ['n' => '01', 't' => 'Drug-Free', 'd' => 'No pills and none of the systemic side effects like weight gain, drowsiness, or sexual dysfunction.'],
                    ['n' => '02', 't' => 'Non-Invasive', 'd' => 'No surgery, no anesthesia, and nothing like ECT — you stay fully awake and alert.'],
                    ['n' => '03', 't' => 'Proven &amp; Trusted', 'd' => 'The #1 physician-recommended TMS, with millions of treatments performed.'],
                    ['n' => '04', 't' => 'Lasting Results', 'd' => 'By changing brain function at the source, relief is often durable long after treatment.'],
                    ['n' => '05', 't' => 'Widely Covered', 'd' => 'Covered by most major insurers, including Medicare — our team helps with authorization.'],
                    ['n' => '06', 't' => 'Fits Your Life', 'd' => 'Short outpatient sessions with no downtime slot easily into a normal day.'],
                ];
                foreach ($why as $w): ?>
                <div class="relative bg-white/[0.04] border border-white/10 rounded-[1.5rem] p-8 hover:bg-white/[0.08] hover:border-accent/30 transition-all duration-300 group overflow-hidden">
                    <div class="absolute top-4 right-6 text-6xl font-bold text-white/25 group-hover:text-white/40 transition-colors" style="font-family: 'Bauhaus Soft', cursive;"><?php echo $w['n']; ?></div>
                    <h3 class="text-xl font-bold text-white mb-3 relative z-10 pr-10"><?php echo $w['t']; ?></h3>
                    <p class="text-white/50 text-sm leading-relaxed relative z-10"><?php echo $w['d']; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ===== ABOUT THE DOCTOR ===== -->
    <section id="provider" class="py-16 bg-[#FAFAFF] relative overflow-hidden">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-accent/6 rounded-full blur-[140px] translate-x-1/3 -translate-y-1/3 pointer-events-none"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-5xl mx-auto bg-white rounded-[2.5rem] overflow-hidden shadow-xl border border-primary/5 flex flex-col lg:flex-row fade-in-section">

                <div class="lg:w-2/5 relative overflow-hidden min-h-[380px]">
                    <img src="assets/home/rox-image.png" alt="Roxanne DoBrava, Founder & Psychiatric Nurse Practitioner" class="absolute inset-0 w-full h-full object-cover object-top">
                    <div class="absolute inset-0 bg-gradient-to-t from-primary/50 via-transparent to-transparent lg:bg-gradient-to-r lg:from-transparent lg:to-white/30 pointer-events-none"></div>
                    <div class="absolute bottom-6 left-6 lg:hidden">
                        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/20 backdrop-blur-md border border-white/30 text-white text-sm font-semibold">
                            <span class="w-2 h-2 rounded-full bg-accent animate-pulse"></span>
                            Certified NeuroStar® Provider
                        </div>
                    </div>
                </div>

                <div class="lg:w-3/5 p-8 md:p-12 flex flex-col justify-center">
                    <div class="flex items-center gap-3 mb-5">
                        <span class="h-px w-10 bg-primary/30"></span>
                        <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">Meet Your Provider</span>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold text-primary mb-1" style="font-family: 'Bauhaus Soft', cursive;">Roxanne DoBrava</h2>
                    <p class="text-accent font-semibold text-lg mb-6">Founder &amp; Psychiatric Nurse Practitioner · APRN-CNP, PMHNP-BC</p>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Roxanne DoBrava is a board-certified Psychiatric Mental Health Nurse Practitioner (PMHNP-BC) and the founder of Tranquil Minds Mental Health. As a certified Neurostar® provider, she offers this precision neurostimulation therapy to patients across Monticello, MN who haven’t found relief through traditional treatments.
                    </p>
                    <p class="text-gray-600 leading-relaxed mb-8 italic">
                        &ldquo;TMS gives me a way to help patients heal at the source — safely, without medication. For so many people, it’s the turning point they’d stopped believing was possible.&rdquo;
                    </p>
                    <div class="flex flex-wrap gap-3 mb-8">
                        <?php
                        $creds = ['APRN-CNP', 'PMHNP-BC', 'Certified Neurostar® Provider', 'Depression Care', 'OCD Care'];
                        foreach ($creds as $cred): ?>
                        <span class="px-3 py-1.5 bg-primary/5 text-primary text-xs font-semibold rounded-full border border-primary/10"><?php echo $cred; ?></span>
                        <?php endforeach; ?>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#contact" class="inline-flex items-center justify-center gap-2 px-7 py-3.5 bg-accent text-white rounded-full font-bold hover:bg-accent-light hover:-translate-y-0.5 transition-all duration-300">
                            Book with Roxanne
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                        <a href="about.php" class="inline-flex items-center justify-center gap-2 px-7 py-3.5 bg-white border border-primary/15 text-primary rounded-full font-bold hover:border-primary/40 transition-all duration-300">
                            Meet the Full Team
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== FAQ ===== -->
    <section id="faq" class="py-16 bg-white relative overflow-hidden">
        <div class="absolute top-0 left-0 w-[500px] h-[500px] bg-primary/6 rounded-full blur-[140px] -translate-x-1/3 -translate-y-1/3 pointer-events-none"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-3xl mx-auto">
                <div class="text-center mb-14 fade-in-section">
                    <div class="flex items-center justify-center gap-3 mb-6">
                        <span class="h-px w-12 bg-primary/40"></span>
                        <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">Common Questions</span>
                        <span class="h-px w-12 bg-primary/40"></span>
                    </div>
                    <h2 class="text-4xl md:text-5xl text-primary leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                        Questions, Answered
                    </h2>
                </div>

                <div class="space-y-4 fade-in-section">
                    <?php
                    $faqs = [
                        ['q' => 'Is Neurostar® TMS painful?', 'a' => 'Most patients report only a mild tapping sensation on the scalp. It’s generally not painful, requires no anesthesia, and you can drive yourself home immediately after each session.'],
                        ['q' => 'Does TMS require sedation or medication?', 'a' => 'No. TMS is non-drug and non-invasive. You stay fully awake and alert throughout, with no sedation and no recovery time.'],
                        ['q' => 'How long does a course of treatment take?', 'a' => 'A typical course is about 36 sessions over roughly six weeks. Each session lasts around 19 minutes, so it fits easily into your daily routine.'],
                        ['q' => 'What are the side effects?', 'a' => 'TMS is very well tolerated. The most common side effect is mild scalp discomfort or headache, which usually resolves after the first week. Serious side effects are rare, and there are none of the systemic effects associated with medication.'],
                        ['q' => 'Is it covered by insurance?', 'a' => 'Usually, yes. NeuroStar is covered by most major insurance plans, including Medicare and Tricare, for treatment-resistant depression. Our team helps handle the pre-authorization for you.'],
                        ['q' => 'Is TMS FDA-cleared for OCD?', 'a' => 'Yes. In addition to depression and anxious depression, NeuroStar TMS is FDA-cleared as a treatment for OCD in adults.'],
                    ];
                    foreach ($faqs as $f): ?>
                    <details class="group bg-[#FAFAFF] border border-primary/8 rounded-2xl overflow-hidden hover:border-accent/30 transition-colors">
                        <summary class="flex items-center justify-between gap-4 px-6 py-5 cursor-pointer list-none select-none">
                            <span class="text-primary font-bold text-base md:text-lg"><?php echo $f['q']; ?></span>
                            <span class="w-8 h-8 rounded-full bg-accent/10 flex items-center justify-center text-accent flex-shrink-0 group-open:rotate-45 transition-transform duration-300">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                            </span>
                        </summary>
                        <div class="px-6 pb-6 -mt-1">
                            <p class="text-gray-500 text-base leading-relaxed"><?php echo $f['a']; ?></p>
                        </div>
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
                        <h2 class="text-3xl md:text-4xl text-white mb-2 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                            Tap Into a New Possibility
                        </h2>
                        <p class="text-white/70 text-base md:text-lg">
                            See if Neurostar® TMS is right for you with a free, confidential 15-minute consultation.
                        </p>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-4 flex-shrink-0">
                        <a href="#contact" class="px-7 py-3.5 bg-accent text-white rounded-full font-bold hover:bg-accent-light hover:-translate-y-0.5 hover:shadow-[0_0_40px_rgba(140,120,190,0.5)] transition-all duration-300 text-center whitespace-nowrap">
                            Book Free Consultation
                        </a>
                        <a href="tel:+16124298280" class="px-7 py-3.5 bg-white/10 border border-white/25 text-white rounded-full font-bold hover:bg-white/20 transition-all duration-300 flex items-center justify-center gap-2 whitespace-nowrap">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            612-429-8280
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        html { scroll-padding-top: 6rem; }
        details summary::-webkit-details-marker { display: none; }
    </style>

<?php include 'footer.php'; ?>
