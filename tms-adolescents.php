<?php
$page_title       = "TMS Therapy for Adolescents (Ages 15+) | Tranquil Minds Mental Health";
$page_description = "Neurostar® TMS therapy for adolescents ages 15+ in Monticello, MN — a non-drug, FDA-cleared option for teen depression, especially when medication hasn't been enough.";
$hero_title       = 'TMS Therapy<br><span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-white to-white/50">for Teens (Ages 15+).</span>';
$hero_subtitle    = 'A non-drug, FDA-cleared option for adolescents with depression — especially when medication hasn\'t been enough. Gentle, non-invasive, and family-involved.';
$hero_badge       = 'TMS Therapy · Adolescents';
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
                        <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">TMS for Adolescents</span>
                    </div>
                    <h2 class="text-4xl md:text-5xl text-primary mb-6 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                        Hope for Teens<br>Facing Depression
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-4">
                        Neurostar® TMS is now FDA-cleared as an add-on treatment for depression in adolescents ages 15 to 21. It uses gentle magnetic pulses to reactivate the brain circuits behind mood — without medication.
                    </p>
                    <p class="text-gray-600 text-lg leading-relaxed mb-8">
                        For teens who haven't responded to antidepressants or struggle with their side effects, TMS offers a safe, non-drug path forward — with families informed and involved every step of the way.
                    </p>
                    <div class="space-y-3">
                        <?php foreach ([
                            'FDA-cleared for adolescent depression (ages 15–21)',
                            'Non-drug and non-invasive — no systemic side effects',
                            'Family-informed care that fits a school schedule',
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
                    <div class="relative rounded-[2.5rem] overflow-hidden shadow-[0_40px_80px_-24px_rgba(42,22,63,0.35)] min-h-[420px]">
                        <img src="assets/neurostar/teen.webp" alt="A teen finding relief through Neurostar® TMS therapy" class="absolute inset-0 w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/60 via-transparent to-transparent pointer-events-none"></div>
                    </div>
                    <div class="absolute -bottom-6 -left-4 md:-left-8 bg-white rounded-2xl shadow-2xl border border-primary/5 px-5 py-4 flex items-center gap-4 max-w-[80%]">
                        <div class="w-11 h-11 rounded-xl bg-accent flex items-center justify-center text-white flex-shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        </div>
                        <div>
                            <div class="text-primary font-bold text-sm">FDA-Cleared · Ages 15+</div>
                            <div class="text-gray-400 text-xs">A drug-free option for teens</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== WHY TEENS STRUGGLE (STATS) ===== -->
    <section class="py-16 bg-primary relative overflow-hidden">
        <div class="absolute top-0 right-0 w-[500px] h-full bg-accent/20 rounded-full blur-3xl pointer-events-none"></div>
        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center max-w-2xl mx-auto mb-10 fade-in-section">
                <div class="flex items-center justify-center gap-3 mb-6">
                    <span class="h-px w-12 bg-white/20"></span>
                    <span class="text-white/40 font-bold tracking-widest uppercase text-xs">The Bigger Picture</span>
                    <span class="h-px w-12 bg-white/20"></span>
                </div>
                <h2 class="text-4xl md:text-5xl text-white mb-5 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                    Why So Many Teens Struggle
                </h2>
                <p class="text-white/70 text-lg">
                    Adolescent mental health has never been more important. If your teen is struggling, they are far from alone — and early help makes a real difference.
                </p>
            </div>
            <div class="grid sm:grid-cols-3 gap-8 text-center fade-in-section max-w-4xl mx-auto">
                <?php
                $stats = [
                    ['n' => '1 in 5', 'l' => 'adolescents lives with a mental health condition'],
                    ['n' => '~50%', 'l' => 'of lifetime mental illness begins by age 14'],
                    ['n' => '3 in 5', 'l' => 'young people with depression don\'t receive treatment'],
                ];
                foreach ($stats as $s): ?>
                <div>
                    <div class="text-4xl md:text-5xl font-bold text-white mb-2" style="font-family: 'Bauhaus Soft', cursive;"><?php echo $s['n']; ?></div>
                    <div class="text-white/60 text-sm leading-relaxed max-w-[220px] mx-auto"><?php echo $s['l']; ?></div>
                </div>
                <?php endforeach; ?>
            </div>
            <p class="text-center text-white/40 text-xs mt-8 max-w-2xl mx-auto">National estimates from public-health sources including the CDC and NIMH. Figures are approximate and provided for general awareness.</p>
        </div>
    </section>

    <!-- ===== FDA CLEARANCE ===== -->
    <section class="py-16 bg-[#FAFAFF] relative overflow-hidden">
        <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-accent/8 rounded-full blur-[140px] translate-x-1/4 translate-y-1/4 pointer-events-none"></div>
        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-4xl mx-auto bg-white rounded-[2.5rem] p-8 md:p-12 shadow-xl border border-primary/8 fade-in-section">
                <div class="flex flex-col md:flex-row items-center gap-8 text-center md:text-left">
                    <div class="w-20 h-20 rounded-3xl bg-accent/10 flex items-center justify-center text-accent flex-shrink-0">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    </div>
                    <div>
                        <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-primary/5 text-primary/70 text-[11px] font-bold uppercase tracking-widest mb-3">FDA-Cleared</div>
                        <h2 class="text-2xl md:text-3xl text-primary mb-2 font-bold leading-tight" style="font-family: 'Bauhaus Soft', cursive;">Cleared for Teens Ages 15–21</h2>
                        <p class="text-gray-600 text-base md:text-lg leading-relaxed">
                            Neurostar® TMS is FDA-cleared as an add-on treatment for major depressive disorder in adolescents <span class="font-semibold text-primary">ages 15 to 21</span> — a milestone that brings safe, non-drug depression care to more young people, especially when medication alone hasn't been enough.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== PROVEN RESULTS IN ADOLESCENTS ===== -->
    <section id="results" class="py-16 bg-white relative overflow-hidden">
        <div class="absolute top-0 left-0 w-[500px] h-[500px] bg-accent/6 rounded-full blur-[130px] -translate-x-1/3 -translate-y-1/3 pointer-events-none"></div>
        <div class="container mx-auto px-6 relative z-10">
            <div class="grid lg:grid-cols-2 gap-14 lg:gap-20 items-center">
                <!-- Stats -->
                <div class="fade-in-section">
                    <div class="flex items-center gap-3 mb-6">
                        <span class="h-px w-12 bg-primary/40"></span>
                        <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">The Evidence</span>
                    </div>
                    <h2 class="text-4xl md:text-5xl text-primary mb-6 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                        Proven Results<br>in Adolescents
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-8">
                        In clinical study, adolescents treated with Neurostar® TMS saw meaningful, measurable improvement in their depression — offering real hope for teens who haven't found relief elsewhere.
                    </p>
                    <div class="grid sm:grid-cols-2 gap-5">
                        <div class="bg-[#FAFAFF] border border-primary/8 rounded-2xl p-6">
                            <div class="text-5xl font-bold text-accent mb-2" style="font-family: 'Bauhaus Soft', cursive;">78%</div>
                            <div class="text-primary font-bold text-sm mb-0.5">Improvement</div>
                            <div class="text-gray-500 text-sm leading-relaxed">saw improvement in depression symptoms</div>
                        </div>
                        <div class="bg-[#FAFAFF] border border-primary/8 rounded-2xl p-6">
                            <div class="text-5xl font-bold text-accent mb-2" style="font-family: 'Bauhaus Soft', cursive;">48%</div>
                            <div class="text-primary font-bold text-sm mb-0.5">Remission</div>
                            <div class="text-gray-500 text-sm leading-relaxed">achieved symptom relief (remission)</div>
                        </div>
                    </div>
                    <p class="text-gray-400 text-xs mt-6">As reported by NeuroStar clinical data for adolescents. Individual results vary.</p>
                </div>
                <!-- Image -->
                <div class="fade-in-section relative">
                    <div class="relative rounded-[2.5rem] overflow-hidden shadow-[0_40px_80px_-24px_rgba(42,22,63,0.35)] min-h-[440px]">
                        <img src="assets/neurostar/adolescent-depression.webp" alt="A teenager finding relief from depression through Neurostar® TMS therapy" class="absolute inset-0 w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/50 via-transparent to-transparent pointer-events-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== WHY FAMILIES CHOOSE IT ===== -->
    <section class="py-16 bg-white relative overflow-hidden">
        <div class="absolute top-0 left-0 w-[500px] h-[500px] bg-accent/6 rounded-full blur-[130px] -translate-x-1/3 -translate-y-1/3 pointer-events-none"></div>
        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center max-w-2xl mx-auto mb-10 fade-in-section">
                <div class="flex items-center justify-center gap-3 mb-6">
                    <span class="h-px w-12 bg-primary/40"></span>
                    <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">Why Families Choose It</span>
                    <span class="h-px w-12 bg-primary/40"></span>
                </div>
                <h2 class="text-4xl md:text-5xl text-primary mb-5 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">Gentle, Safe &amp; Drug-Free</h2>
                <p class="text-gray-500 text-lg">A treatment that respects a teen's developing body and busy life.</p>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <?php
                $why = [
                    ['t' => 'Drug-Free', 'd' => 'No medication — and none of the systemic side effects that can be hard for teens.', 'icon' => 'M13 10V3L4 14h7v7l9-11h-7z'],
                    ['t' => 'Non-Invasive', 'd' => 'No surgery and no sedation. Teens stay fully awake and comfortable.', 'icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z'],
                    ['t' => 'Fits School Life', 'd' => 'Short sessions with no downtime slot in around school and activities.', 'icon' => 'M12 14l9-5-9-5-9 5 9 5z M12 14l6.16-3.42a12 12 0 01.84 4.42c0 1.657-3.134 3-7 3s-7-1.343-7-3a12 12 0 01.84-4.42L12 14z'],
                    ['t' => 'Family-Informed', 'd' => 'Parents stay involved and informed throughout the whole process.', 'icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z'],
                ];
                foreach ($why as $w): ?>
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

    <!-- ===== HOW IT WORKS ===== -->
    <section id="how" class="py-16 bg-[#FAFAFF] relative overflow-hidden">
        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center max-w-2xl mx-auto mb-10 fade-in-section">
                <div class="flex items-center justify-center gap-3 mb-6">
                    <span class="h-px w-12 bg-primary/40"></span>
                    <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">What to Expect</span>
                    <span class="h-px w-12 bg-primary/40"></span>
                </div>
                <h2 class="text-4xl md:text-5xl text-primary mb-5 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">Simple, Comfortable Sessions</h2>
                <p class="text-gray-500 text-lg">Easy to fit into a teen's routine — no medication, no downtime.</p>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <?php
                $steps = [
                    ['n' => '01', 't' => 'Brain Mapping', 'd' => 'We gently locate the optimal treatment spot using NeuroStar\'s precise protocol.'],
                    ['n' => '02', 't' => 'Quick Sessions', 'd' => 'Each session takes about 19 minutes. Your teen stays awake and relaxed.'],
                    ['n' => '03', 't' => 'A Full Course', 'd' => 'A typical course runs about six weeks, usually five days a week after school.'],
                    ['n' => '04', 't' => 'No Downtime', 'd' => 'No sedation — teens head right back to school, homework, or activities.'],
                ];
                foreach ($steps as $i => $st): ?>
                <div class="relative fade-in-section">
                    <div class="bg-white border border-primary/8 rounded-[1.5rem] p-7 h-full hover:border-accent/30 hover:shadow-lg transition-all duration-300">
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
            <!-- School accommodations note -->
            <div class="mt-12 max-w-4xl mx-auto fade-in-section">
                <div class="flex flex-col sm:flex-row items-start gap-5 bg-white border border-primary/8 rounded-2xl px-6 py-6 shadow-sm">
                    <div class="w-12 h-12 rounded-2xl bg-accent/10 flex items-center justify-center text-accent flex-shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 14l9-5-9-5-9 5 9 5z M12 14l6.16-3.42a12 12 0 01.84 4.42c0 1.657-3.134 3-7 3s-7-1.343-7-3a12 12 0 01.84-4.42L12 14zM12 14v7"></path></svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-primary mb-1.5">Works Around School</h3>
                        <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                            Sessions are short (about 19 minutes) with no downtime, so they schedule easily after school or around classes. If needed, we're glad to provide documentation to support school accommodations — such as a 504 plan or IEP — and to coordinate with your family so treatment never gets in the way of learning.
                        </p>
                    </div>
                </div>
            </div>

            <div class="text-center mt-10 fade-in-section">
                <a href="adolescent-mental-health.php" class="inline-flex items-center gap-2 text-accent font-bold text-base hover:text-primary transition-colors">
                    Explore our full adolescent mental-health care
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
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
                        ['q' => 'What ages is TMS approved for?', 'a' => 'Neurostar® TMS is FDA-cleared as an add-on treatment for depression in adolescents ages 15 to 21. We\'ll confirm it\'s the right fit during a consultation.'],
                        ['q' => 'Is TMS safe for teenagers?', 'a' => 'Yes. TMS is non-invasive, drug-free, and well tolerated. The most common side effect is mild scalp discomfort that usually fades after the first week.'],
                        ['q' => 'Will it interfere with school?', 'a' => 'Very little. Sessions are short (about 19 minutes) with no downtime, so most teens fit them around school and activities.'],
                        ['q' => 'Are parents involved?', 'a' => 'Absolutely. We keep families informed and involved throughout, while creating a supportive, respectful space for your teen.'],
                        ['q' => 'Is it covered by insurance?', 'a' => 'Many plans cover TMS for depression. Our team will help you verify your specific benefits.'],
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
                        <h2 class="text-3xl md:text-4xl text-white mb-2 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">Support for Your Teen Starts Here</h2>
                        <p class="text-white/70 text-base md:text-lg">Start with a free, confidential 15-minute consultation to see if TMS is right for your teen.</p>
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
