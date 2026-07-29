<?php
$page_title       = "Creyos Cognitive Testing | Tranquil Minds Mental Health";
$page_description = "Objective cognitive and ADHD testing in Monticello, MN using Creyos — a scientifically validated digital assessment platform built on 30+ years of neuroscience and 400+ peer-reviewed studies.";
$hero_title       = 'Cognitive Testing,<br><span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-white to-white/50">Backed by Science.</span>';
$hero_subtitle    = 'We use Creyos — a validated digital platform built on decades of neuroscience — to objectively measure how your brain is really performing, so your diagnosis rests on real data.';
$hero_badge       = 'Our Services · Cognitive Testing';
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
                        Objective Insight<br>Into Your Mind
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-4">
                        Creyos (formerly Cambridge Brain Sciences) is a scientifically validated cognitive assessment platform used by clinicians worldwide. It measures core brain functions — like attention, memory, and reasoning — through short, engaging online tasks.
                    </p>
                    <p class="text-gray-600 text-lg leading-relaxed mb-8">
                        Instead of relying on guesswork or self-report alone, Creyos gives us objective, data-driven insight into how your brain is really performing — so your diagnosis and care plan are built on real evidence.
                    </p>

                    <div class="space-y-3">
                        <?php
                        $points = [
                            'Objective and data-driven — not guesswork',
                            'Built on decades of peer-reviewed neuroscience',
                            'Central to our ADHD and cognitive evaluations',
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
                    <div class="relative rounded-[2.5rem] overflow-hidden shadow-[0_40px_80px_-24px_rgba(42,22,63,0.35)]">
                        <img src="landing/assets/creyos/Banner%201%20-%20v1.png" alt="The Creyos cognitive assessment platform" class="w-full h-auto block">
                    </div>
                    <!-- Floating card -->
                    <div class="absolute -bottom-6 -left-4 md:-left-8 bg-white rounded-2xl shadow-2xl border border-primary/5 px-5 py-4 flex items-center gap-4 max-w-[80%]">
                        <div class="w-11 h-11 rounded-xl bg-accent flex items-center justify-center text-white flex-shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path></svg>
                        </div>
                        <div>
                            <div class="text-primary font-bold text-sm">Science-Backed</div>
                            <div class="text-gray-400 text-xs">30+ years of research</div>
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
                    ['n' => '400+', 'l' => 'Peer-reviewed studies validating the platform'],
                    ['n' => '30+', 'l' => 'Years of neuroscience research behind it'],
                    ['n' => '85K+', 'l' => 'People in its normative comparison data'],
                    ['n' => '20M+', 'l' => 'Cognitive tasks completed to date'],
                ];
                foreach ($stats as $s): ?>
                <div>
                    <div class="text-4xl md:text-5xl font-bold text-white mb-2" style="font-family: 'Bauhaus Soft', cursive;"><?php echo $s['n']; ?></div>
                    <div class="text-white/60 text-sm leading-relaxed max-w-[190px] mx-auto"><?php echo $s['l']; ?></div>
                </div>
                <?php endforeach; ?>
            </div>
            <p class="text-center text-white/40 text-xs mt-8 max-w-2xl mx-auto">As reported by Creyos. The platform is built on the research of Dr. Adrian Owen, whose work has been published in journals including <em>Nature</em> and <em>Neuron</em>.</p>
        </div>
    </section>

    <!-- ===== WHAT IT MEASURES ===== -->
    <section id="measures" class="py-16 bg-white relative overflow-hidden">
        <div class="absolute top-0 left-0 w-[500px] h-[500px] bg-accent/6 rounded-full blur-[130px] -translate-x-1/3 -translate-y-1/3 pointer-events-none"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center max-w-2xl mx-auto mb-10 fade-in-section">
                <div class="flex items-center justify-center gap-3 mb-6">
                    <span class="h-px w-12 bg-primary/40"></span>
                    <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">What It Measures</span>
                    <span class="h-px w-12 bg-primary/40"></span>
                </div>
                <h2 class="text-4xl md:text-5xl text-primary mb-5 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                    The Core of<br>How You Think
                </h2>
                <p class="text-gray-500 text-lg">
                    Creyos assesses the key building blocks of cognition — giving a detailed, domain-by-domain picture rather than a single score.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <?php
                $measures = [
                    ['t' => 'Memory', 'd' => 'Short-term and working memory — how you hold on to and use information.', 'icon' => 'M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z'],
                    ['t' => 'Reasoning', 'd' => 'Problem-solving, planning, and clear, logical thinking.', 'icon' => 'M9.663 17h4.673M12 3v1m0 16v1m9-9h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z'],
                    ['t' => 'Attention', 'd' => 'Your ability to concentrate and filter out distractions.', 'icon' => 'M15 12a3 3 0 11-6 0 3 3 0 016 0z M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z'],
                    ['t' => 'Verbal Ability', 'd' => 'Language processing and verbal reasoning skills.', 'icon' => 'M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z'],
                ];
                foreach ($measures as $m): ?>
                <div class="bg-[#FAFAFF] border border-primary/8 rounded-[1.5rem] p-6 hover:bg-white hover:shadow-lg hover:border-accent/30 hover:-translate-y-1 transition-all duration-300 group">
                    <div class="w-11 h-11 rounded-xl bg-accent/10 flex items-center justify-center text-accent mb-4 group-hover:bg-accent group-hover:text-white transition-all duration-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?php echo $m['icon']; ?>"></path></svg>
                    </div>
                    <h3 class="text-base font-bold text-primary mb-1.5"><?php echo $m['t']; ?></h3>
                    <p class="text-gray-500 text-sm leading-relaxed"><?php echo $m['d']; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ===== SHOWCASE ===== -->
    <section class="py-16 bg-[#FAFAFF] relative overflow-hidden">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-primary/6 rounded-full blur-[140px] translate-x-1/3 -translate-y-1/3 pointer-events-none"></div>
        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center max-w-2xl mx-auto mb-10 fade-in-section">
                <div class="flex items-center justify-center gap-3 mb-6">
                    <span class="h-px w-12 bg-primary/40"></span>
                    <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">A Closer Look</span>
                    <span class="h-px w-12 bg-primary/40"></span>
                </div>
                <h2 class="text-4xl md:text-5xl text-primary mb-5 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                    Inside the Creyos Platform
                </h2>
                <p class="text-gray-500 text-lg">
                    A closer look at the science-backed platform behind your cognitive assessment.
                </p>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 fade-in-section">
                <?php
                $banners = [
                    'landing/assets/creyos/Banner%202%20-%20v1.png',
                    'landing/assets/creyos/Banner%203%20-%20v1.png',
                    'landing/assets/creyos/Banner%204%20-%20v1.png',
                ];
                foreach ($banners as $b): ?>
                <div class="rounded-[1.5rem] overflow-hidden shadow-lg border border-primary/8 bg-white hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                    <img src="<?php echo $b; ?>" alt="The Creyos cognitive assessment platform" class="w-full h-auto block">
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ===== HOW IT WORKS ===== -->
    <section id="how" class="py-16 bg-[#FAFAFF] relative overflow-hidden">
        <div class="absolute bottom-0 right-0 w-[600px] h-[600px] bg-accent/8 rounded-full blur-[150px] translate-x-1/4 translate-y-1/4 pointer-events-none"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center max-w-2xl mx-auto mb-10 fade-in-section">
                <div class="flex items-center justify-center gap-3 mb-6">
                    <span class="h-px w-12 bg-primary/40"></span>
                    <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">The Process</span>
                    <span class="h-px w-12 bg-primary/40"></span>
                </div>
                <h2 class="text-4xl md:text-5xl text-primary mb-5 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                    Simple, Engaging<br>&amp; Stress-Free
                </h2>
                <p class="text-gray-500 text-lg">
                    Testing feels more like a set of puzzles than a stressful exam — and it fits easily into a normal visit.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <?php
                $steps = [
                    ['n' => '01', 't' => 'Game-Like Tasks', 'd' => 'You complete a series of short, engaging online tasks — more like puzzles than a test.'],
                    ['n' => '02', 't' => 'Self-Administered', 'd' => 'The assessment runs itself, in the clinic or from home, with no pressure and no timers looming over you.'],
                    ['n' => '03', 't' => 'Instant, Objective Scoring', 'd' => 'Results are scored right away and compared against a large normative group by age and background.'],
                    ['n' => '04', 't' => 'Plain-Language Results', 'd' => 'We walk you through clear, easy-to-understand results to guide your diagnosis and next steps.'],
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
        </div>
    </section>

    <!-- ===== WHAT WE USE IT FOR ===== -->
    <section id="uses" class="py-16 bg-white relative overflow-hidden">
        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center max-w-2xl mx-auto mb-10 fade-in-section">
                <div class="flex items-center justify-center gap-3 mb-6">
                    <span class="h-px w-12 bg-primary/40"></span>
                    <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">How We Use It</span>
                    <span class="h-px w-12 bg-primary/40"></span>
                </div>
                <h2 class="text-4xl md:text-5xl text-primary mb-5 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                    Clearer Answers,<br>Better Care
                </h2>
                <p class="text-gray-500 text-lg">
                    Objective cognitive data helps us make more accurate diagnoses and track your progress over time.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <?php
                $uses = [
                    ['t' => 'ADHD Assessment', 'd' => 'Objective data on attention and executive function to support an accurate ADHD diagnosis.', 'icon' => 'M13 10V3L4 14h7v7l9-11h-7z', 'link' => 'adhd.php'],
                    ['t' => 'Cognitive Health', 'd' => 'A clear baseline of your brain health that we can measure and monitor over time.', 'icon' => 'M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z', 'link' => '#contact'],
                    ['t' => 'Mental Health Context', 'd' => 'Insight into how mood, focus, and thinking connect — informing your whole-person care.', 'icon' => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z', 'link' => '#contact'],
                    ['t' => 'Progress Monitoring', 'd' => 'Re-testing over time shows real change — so we can see how well treatment is working.', 'icon' => 'M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15', 'link' => '#contact'],
                ];
                foreach ($uses as $u): ?>
                <a href="<?php echo $u['link']; ?>" class="group bg-[#FAFAFF] rounded-[1.5rem] p-7 border border-primary/8 hover:bg-white hover:shadow-lg hover:border-accent/30 hover:-translate-y-1 transition-all duration-300 flex flex-col">
                    <div class="w-12 h-12 rounded-xl bg-accent/10 flex items-center justify-center text-accent mb-5 group-hover:bg-accent group-hover:text-white transition-all duration-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="<?php echo $u['icon']; ?>"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-primary mb-2 group-hover:text-accent transition-colors"><?php echo $u['t']; ?></h3>
                    <p class="text-gray-500 text-sm leading-relaxed"><?php echo $u['d']; ?></p>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ===== THE SCIENCE ===== -->
    <section class="py-16 bg-[#2A163F] relative overflow-hidden">
        <div class="absolute top-0 right-0 w-[700px] h-[700px] bg-accent rounded-full blur-[200px] opacity-10 translate-x-1/2 -translate-y-1/3 pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-primary rounded-full blur-[150px] opacity-30 -translate-x-1/3 translate-y-1/3 pointer-events-none"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-2xl mb-10 fade-in-section">
                <div class="flex items-center gap-3 mb-6">
                    <span class="h-px w-12 bg-white/20"></span>
                    <span class="text-white/40 font-bold tracking-widest uppercase text-xs">Why Trust It</span>
                </div>
                <h2 class="text-4xl md:text-5xl text-white mb-5 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                    Born in the Lab,<br>Not the Boardroom
                </h2>
                <p class="text-white/60 text-lg leading-relaxed">
                    Creyos isn’t a wellness gimmick — it’s a clinical-grade tool grounded in rigorous, published science.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php
                $science = [
                    ['n' => '01', 't' => '30+ Years of Research', 'd' => 'Founded on decades of neuroscience by Dr. Adrian Owen at Cambridge and Western University.'],
                    ['n' => '02', 't' => '400+ Peer-Reviewed Studies', 'd' => 'The tasks are validated across hundreds of published scientific studies.'],
                    ['n' => '03', 't' => 'Normative Benchmarking', 'd' => 'Your results are compared against a large reference population, accounting for age and background.'],
                    ['n' => '04', 't' => 'Longitudinal Tracking', 'd' => 'It can distinguish real cognitive change from normal test-to-test variation over time.'],
                    ['n' => '05', 't' => 'Secure &amp; Private', 'd' => 'The platform is HIPAA-compliant, keeping your health information protected.'],
                    ['n' => '06', 't' => 'Trusted by Clinicians', 'd' => 'Used by thousands of healthcare providers, with 20 million+ tasks completed.'],
                ];
                foreach ($science as $sc): ?>
                <div class="relative bg-white/[0.04] border border-white/10 rounded-[1.5rem] p-8 hover:bg-white/[0.08] hover:border-accent/30 transition-all duration-300 group overflow-hidden">
                    <div class="absolute top-4 right-6 text-6xl font-bold text-white/25 group-hover:text-white/40 transition-colors" style="font-family: 'Bauhaus Soft', cursive;"><?php echo $sc['n']; ?></div>
                    <h3 class="text-xl font-bold text-white mb-3 relative z-10 pr-10"><?php echo $sc['t']; ?></h3>
                    <p class="text-white/50 text-sm leading-relaxed relative z-10"><?php echo $sc['d']; ?></p>
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
                            Accepting Patients
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
                        Roxanne DoBrava is a board-certified Psychiatric Mental Health Nurse Practitioner (PMHNP-BC) and the founder of Tranquil Minds Mental Health. She uses objective Creyos cognitive testing as part of thorough, accurate ADHD and cognitive evaluations for patients across Monticello, MN.
                    </p>
                    <p class="text-gray-600 leading-relaxed mb-8 italic">
                        &ldquo;Objective data changes everything. With Creyos, I can base a diagnosis on real measurements of how your brain works — not just a checklist — so your care plan actually fits you.&rdquo;
                    </p>
                    <div class="flex flex-wrap gap-3 mb-8">
                        <?php
                        $creds = ['APRN-CNP', 'PMHNP-BC', 'Creyos Testing', 'ADHD Evaluation', 'Cognitive Assessment'];
                        foreach ($creds as $cred): ?>
                        <span class="px-3 py-1.5 bg-primary/5 text-primary text-xs font-semibold rounded-full border border-primary/10"><?php echo $cred; ?></span>
                        <?php endforeach; ?>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#contact" class="inline-flex items-center justify-center gap-2 px-7 py-3.5 bg-accent text-white rounded-full font-bold hover:bg-accent-light hover:-translate-y-0.5 transition-all duration-300">
                            Book with Roxanne
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                        <a href="adhd.php" class="inline-flex items-center justify-center gap-2 px-7 py-3.5 bg-white border border-primary/15 text-primary rounded-full font-bold hover:border-primary/40 transition-all duration-300">
                            Explore ADHD Care
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
                        ['q' => 'What is Creyos?', 'a' => 'Creyos (formerly Cambridge Brain Sciences) is a scientifically validated digital platform for cognitive assessment. It uses short, engaging tasks to objectively measure areas like attention, memory, and reasoning — giving us real data to guide diagnosis and care.'],
                        ['q' => 'What does the test actually involve?', 'a' => 'You complete a series of short, game-like tasks on a screen — think puzzles rather than a stressful exam. It’s self-administered, so you can do it comfortably at your own pace.'],
                        ['q' => 'How long does it take?', 'a' => 'It’s a handful of brief tasks that most people finish comfortably in a single sitting. We’ll let you know what to expect for your specific assessment.'],
                        ['q' => 'Is Creyos only for ADHD?', 'a' => 'No. While it’s a powerful tool for ADHD evaluation, Creyos also helps establish a cognitive baseline, track brain health over time, and understand how thinking connects with mood and mental health.'],
                        ['q' => 'Is my information private?', 'a' => 'Yes. Creyos is a HIPAA-compliant platform, so your health information is kept secure and protected throughout the process.'],
                        ['q' => 'Do you accept insurance?', 'a' => 'We accept most major insurance plans. During your consultation, we’ll help you verify your specific benefits for evaluation and testing.'],
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
                            Objective Cognitive Testing
                        </div>
                        <h2 class="text-3xl md:text-4xl text-white mb-2 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                            Get Answers You Can Trust
                        </h2>
                        <p class="text-white/70 text-base md:text-lg">
                            Curious whether cognitive testing is right for you? Start with a free, confidential 15-minute consultation.
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
