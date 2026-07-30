<?php
$page_title       = "Free Depression Self-Assessment (PHQ-9) | Tranquil Minds Mental Health";
$page_description = "Take a free, confidential PHQ-9 depression self-assessment. This validated 9-question screening tool helps you understand your symptoms — and Tranquil Minds in Monticello, MN is here to help with the next step.";
$hero_title       = 'Depression<br><span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-white to-white/50">Self-Assessment.</span>';
$hero_subtitle    = 'Not sure how you’re really doing? The PHQ-9 is a quick, validated questionnaire that can help you understand your symptoms — and whether it may be time to reach out.';
$hero_badge       = 'Free &amp; Confidential';
$hero_cta1_text   = 'Take the Assessment';
$hero_cta1_link   = '#assessment';
$hero_cta2_text   = 'Talk to Us';
$hero_cta2_link   = '#contact';

$phq_url = 'https://phq9web.azurewebsites.net/PHQ9/Survey/89810';
?>
<?php include 'header.php'; ?>
<?php include 'hero-service.php'; ?>

    <!-- ===== WHAT IS THE PHQ-9 ===== -->
    <section id="about-phq9" class="py-16 bg-[#FAFAFF] relative overflow-hidden">
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
                        What Is the PHQ-9?
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-4">
                        The PHQ-9 (Patient Health Questionnaire-9) is one of the most widely used and clinically validated tools for screening depression. It asks nine short questions about how you’ve been feeling over the past two weeks.
                    </p>
                    <p class="text-gray-600 text-lg leading-relaxed mb-8">
                        It takes about two minutes, and your score offers an objective snapshot of your symptoms — a helpful starting point for a conversation about your mental health.
                    </p>
                    <div class="space-y-3">
                        <?php foreach ([
                            'Just 9 quick questions — about 2 minutes',
                            'Clinically validated and used worldwide',
                            'Private and pressure-free',
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
                <!-- RIGHT: Image -->
                <div class="fade-in-section relative">
                    <div class="relative rounded-[2.5rem] overflow-hidden shadow-[0_40px_80px_-24px_rgba(42,22,63,0.35)] min-h-[420px]">
                        <img src="assets/home/depression.png" alt="A calm moment of self-reflection and checking in on your mental health" class="absolute inset-0 w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/60 via-transparent to-transparent pointer-events-none"></div>
                    </div>
                    <div class="absolute -bottom-6 -left-4 md:-left-8 bg-white rounded-2xl shadow-2xl border border-primary/5 px-5 py-4 flex items-center gap-4 max-w-[80%]">
                        <div class="w-11 h-11 rounded-xl bg-accent flex items-center justify-center text-white flex-shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        </div>
                        <div>
                            <div class="text-primary font-bold text-sm">Validated Screening Tool</div>
                            <div class="text-gray-400 text-xs">Trusted by clinicians</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== TAKE THE ASSESSMENT ===== -->
    <section id="assessment" class="py-16 bg-primary relative overflow-hidden">
        <div class="absolute top-0 right-0 w-[500px] h-full bg-accent/20 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-[300px] h-[300px] bg-accent-light rounded-full blur-[110px] opacity-20 -translate-x-1/3 translate-y-1/3 pointer-events-none"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-5xl mx-auto bg-white/10 backdrop-blur-md border border-white/15 rounded-[2.5rem] p-8 md:p-12">
                <div class="grid lg:grid-cols-2 gap-10 items-center">
                    <!-- Left: text + button -->
                    <div class="text-center lg:text-left fade-in-section">
                        <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-white/10 border border-white/20 text-white/80 text-[11px] font-bold uppercase tracking-widest mb-5">
                            <span class="w-1.5 h-1.5 rounded-full bg-green-400 animate-pulse"></span>
                            Takes About 2 Minutes
                        </div>
                        <h2 class="text-3xl md:text-4xl text-white mb-4 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">Take the PHQ-9 Now</h2>
                        <p class="text-white/70 text-base md:text-lg mb-8">
                            Answer 9 short questions and get an instant score. It’s free, confidential, and there are no wrong answers — just an honest snapshot of how you’ve been feeling.
                        </p>
                        <a href="<?php echo $phq_url; ?>" target="_blank" rel="noopener" class="inline-flex items-center gap-2 px-8 py-4 bg-accent text-white rounded-full font-bold hover:bg-accent-light hover:-translate-y-0.5 hover:shadow-[0_0_40px_rgba(140,120,190,0.5)] transition-all duration-300">
                            Start the Assessment
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                        <p class="text-white/40 text-xs mt-4">Opens the secure PHQ-9 questionnaire in a new tab.</p>
                    </div>
                    <!-- Right: QR code -->
                    <div class="flex flex-col items-center fade-in-section">
                        <div class="bg-white rounded-[1.5rem] p-5 shadow-2xl">
                            <a href="<?php echo $phq_url; ?>" target="_blank" rel="noopener">
                                <img src="assets/QR/phq-form.png" alt="QR code to open the PHQ-9 depression self-assessment" class="w-44 h-44 md:w-52 md:h-52 block" width="256" height="256">
                            </a>
                        </div>
                        <p class="text-white/70 text-sm font-semibold mt-4">Scan to take it on your phone</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== INTERPRET YOUR SCORE ===== -->
    <section id="scores" class="py-16 bg-white relative overflow-hidden">
        <div class="absolute top-0 left-0 w-[500px] h-[500px] bg-accent/6 rounded-full blur-[130px] -translate-x-1/3 -translate-y-1/3 pointer-events-none"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center max-w-2xl mx-auto mb-10 fade-in-section">
                <div class="flex items-center justify-center gap-3 mb-6">
                    <span class="h-px w-12 bg-primary/40"></span>
                    <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">Understanding Results</span>
                    <span class="h-px w-12 bg-primary/40"></span>
                </div>
                <h2 class="text-4xl md:text-5xl text-primary mb-5 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                    How to Interpret Your Score
                </h2>
                <p class="text-gray-500 text-lg">
                    Your total (0–27) falls into one of five ranges. Higher scores suggest more significant symptoms — but only a professional can provide a diagnosis.
                </p>
            </div>

            <div class="max-w-3xl mx-auto space-y-4 fade-in-section">
                <?php
                $ranges = [
                    ['score' => '0–4',   'label' => 'Minimal or none',   'desc' => 'Symptoms are unlikely to be interfering with your life right now.', 'dot' => 'bg-green-500', 'bar' => 'border-green-500'],
                    ['score' => '5–9',   'label' => 'Mild',              'desc' => 'Some symptoms are present. Worth keeping an eye on and checking in.', 'dot' => 'bg-lime-500', 'bar' => 'border-lime-500'],
                    ['score' => '10–14', 'label' => 'Moderate',          'desc' => 'Symptoms may be affecting daily life — a good time to talk to a professional.', 'dot' => 'bg-amber-500', 'bar' => 'border-amber-500'],
                    ['score' => '15–19', 'label' => 'Moderately severe', 'desc' => 'Symptoms are likely significant. Reaching out for support is strongly encouraged.', 'dot' => 'bg-orange-500', 'bar' => 'border-orange-500'],
                    ['score' => '20–27', 'label' => 'Severe',            'desc' => 'Symptoms are serious. Please connect with a professional soon — help is available.', 'dot' => 'bg-red-500', 'bar' => 'border-red-500'],
                ];
                foreach ($ranges as $r): ?>
                <div class="flex items-center gap-5 bg-[#FAFAFF] border-l-4 <?php echo $r['bar']; ?> border-y border-r border-primary/8 rounded-r-2xl rounded-l-md px-6 py-5 hover:shadow-md transition-all duration-300">
                    <div class="text-2xl md:text-3xl font-bold text-primary w-20 flex-shrink-0 text-center" style="font-family: 'Bauhaus Soft', cursive;"><?php echo $r['score']; ?></div>
                    <div class="flex-grow">
                        <div class="flex items-center gap-2 mb-1">
                            <span class="w-2.5 h-2.5 rounded-full <?php echo $r['dot']; ?>"></span>
                            <span class="font-bold text-primary text-base md:text-lg"><?php echo $r['label']; ?></span>
                        </div>
                        <p class="text-gray-500 text-sm leading-relaxed"><?php echo $r['desc']; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- Disclaimer + crisis -->
            <div class="mt-10 max-w-3xl mx-auto space-y-4">
                <div class="flex items-start gap-4 bg-primary/5 border border-primary/10 rounded-2xl px-6 py-5 fade-in-section">
                    <svg class="w-6 h-6 text-primary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        <span class="font-bold text-primary">This is a screening tool, not a diagnosis.</span> Your PHQ-9 score is a helpful starting point, but only a qualified professional can diagnose depression and recommend treatment. We’d be glad to help you make sense of your results.
                    </p>
                </div>
                <div class="flex items-start gap-4 bg-accent/5 border border-accent/20 rounded-2xl px-6 py-5 fade-in-section">
                    <svg class="w-6 h-6 text-accent flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-12.728 12.728M12 2a10 10 0 100 20 10 10 0 000-20z"></path></svg>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        <span class="font-bold text-primary">In crisis or thinking about self-harm?</span> Please seek help immediately. Call or text <a href="tel:988" class="text-accent font-bold underline">988</a> (the Suicide &amp; Crisis Lifeline) any time, day or night. If you are in danger, call 911.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== WHAT HAPPENS NEXT ===== -->
    <section id="next" class="py-16 bg-[#FAFAFF] relative overflow-hidden">
        <div class="absolute bottom-0 right-0 w-[600px] h-[600px] bg-accent/8 rounded-full blur-[150px] translate-x-1/4 translate-y-1/4 pointer-events-none"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center max-w-2xl mx-auto mb-10 fade-in-section">
                <div class="flex items-center justify-center gap-3 mb-6">
                    <span class="h-px w-12 bg-primary/40"></span>
                    <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">Your Next Step</span>
                    <span class="h-px w-12 bg-primary/40"></span>
                </div>
                <h2 class="text-4xl md:text-5xl text-primary mb-5 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                    What Happens Next?
                </h2>
                <p class="text-gray-500 text-lg">
                    Whatever your score, you don’t have to figure it out alone. Here’s how we can help from here.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <?php
                $steps = [
                    ['n' => '01', 't' => 'Reach Out', 'd' => 'Book a free, no-pressure 15-minute consultation — bring your score along, or not.'],
                    ['n' => '02', 't' => 'Talk It Through', 'd' => 'We listen to your experience and help you understand what your results may mean.'],
                    ['n' => '03', 't' => 'Comprehensive Evaluation', 'd' => 'If it makes sense, a thorough assessment gives us the full, accurate picture.'],
                    ['n' => '04', 't' => 'A Plan That Fits You', 'd' => 'Together we build a personalized path forward — therapy, medication, TMS, or a combination.'],
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

            <div class="text-center mt-10 fade-in-section">
                <a href="depression.php" class="inline-flex items-center gap-2 text-accent font-bold text-base hover:text-primary transition-colors">
                    Learn more about our depression care
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>
        </div>
    </section>

    <!-- ===== CTA ===== -->
    <section class="py-16 bg-white relative overflow-hidden">
        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-7xl mx-auto bg-primary rounded-[2.5rem] overflow-hidden shadow-2xl relative fade-in-section">
                <div class="absolute top-0 right-0 w-[400px] h-[400px] bg-accent rounded-full blur-[120px] opacity-25 translate-x-1/3 -translate-y-1/3 pointer-events-none"></div>
                <div class="absolute bottom-0 left-0 w-[300px] h-[300px] bg-accent-light rounded-full blur-[110px] opacity-20 -translate-x-1/3 translate-y-1/3 pointer-events-none"></div>

                <div class="relative z-10 px-8 md:px-14 py-10 flex flex-col lg:flex-row items-center justify-between gap-8 text-center lg:text-left">
                    <div class="max-w-2xl">
                        <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-white/10 border border-white/20 text-white/80 text-[11px] font-bold uppercase tracking-widest mb-4">
                            <span class="w-1.5 h-1.5 rounded-full bg-green-400 animate-pulse"></span>
                            We’re Here to Help
                        </div>
                        <h2 class="text-3xl md:text-4xl text-white mb-2 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                            Ready to Talk About Your Results?
                        </h2>
                        <p class="text-white/70 text-base md:text-lg">
                            Start with a free, confidential 15-minute consultation — no score required.
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
    </style>

<?php include 'footer.php'; ?>
