<?php
$page_title       = "Medication Management | Tranquil Minds Mental Health";
$page_description = "Expert psychiatric medication management in Monticello, MN. Personalized, carefully monitored prescribing for depression, anxiety, ADHD, bipolar disorder, and more — never by guesswork.";
$hero_title       = 'Medication,<br><span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-white to-white/50">Done Thoughtfully.</span>';
$hero_subtitle    = 'The right medication at the right dose can be life-changing. At Tranquil Minds, prescribing is a careful, ongoing partnership — precise, monitored, and built entirely around you.';
$hero_badge       = 'Our Services · Medication Management';
$hero_cta1_text   = 'Book a Free Consultation';
$hero_cta1_link   = '#contact';
$hero_cta2_text   = 'Our Approach';
$hero_cta2_link   = '#approach';
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
                        More Than Just<br>a Prescription
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-4">
                        Medication management is an ongoing, collaborative partnership — not a one-time script. It means carefully selecting the right medication, dialing in the dose, and monitoring how you respond over time.
                    </p>
                    <p class="text-gray-600 text-lg leading-relaxed mb-8">
                        The goal is simple: the greatest possible relief with the fewest side effects. As a board-certified psychiatric provider, Roxanne brings precision and genuine attentiveness to every plan.
                    </p>

                    <div class="space-y-3">
                        <?php
                        $points = [
                            'Precise prescribing tailored to your biology and history',
                            'Careful monitoring and adjustment — never “set and forget”',
                            'Works beautifully alongside therapy and TMS when helpful',
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
                        <img src="assets/home/medication-management.png" alt="A calming clinical setting for personalized psychiatric care" class="absolute inset-0 w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/60 via-transparent to-transparent pointer-events-none"></div>
                    </div>
                    <!-- Floating card -->
                    <div class="absolute -bottom-6 -left-4 md:-left-8 bg-white rounded-2xl shadow-2xl border border-primary/5 px-5 py-4 flex items-center gap-4 max-w-[80%]">
                        <div class="w-11 h-11 rounded-xl bg-accent flex items-center justify-center text-white flex-shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2V9a2 2 0 012-2h14zm-9 4h4"></path></svg>
                        </div>
                        <div>
                            <div class="text-primary font-bold text-sm">Personalized Psychiatry</div>
                            <div class="text-gray-400 text-xs">Precise, monitored care</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CONDITIONS WE PRESCRIBE FOR ===== -->
    <section id="conditions" class="py-16 bg-white relative overflow-hidden">
        <div class="absolute top-0 left-0 w-[500px] h-[500px] bg-accent/6 rounded-full blur-[130px] -translate-x-1/3 -translate-y-1/3 pointer-events-none"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center max-w-2xl mx-auto mb-10 fade-in-section">
                <div class="flex items-center justify-center gap-3 mb-6">
                    <span class="h-px w-12 bg-primary/40"></span>
                    <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">What We Help With</span>
                    <span class="h-px w-12 bg-primary/40"></span>
                </div>
                <h2 class="text-4xl md:text-5xl text-primary mb-5 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                    Conditions We<br>Prescribe For
                </h2>
                <p class="text-gray-500 text-lg">
                    We provide expert medication management across a wide range of mental-health conditions — tap any to learn more.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <?php
                $conds = [
                    ['t' => 'Depression', 'link' => 'depression.php', 'img' => 'assets/home/depression.png'],
                    ['t' => 'Anxiety', 'link' => 'anxiety.php', 'img' => 'assets/home/anxiety.png'],
                    ['t' => 'Bipolar Disorder', 'link' => 'bipolar.php', 'img' => 'assets/home/bipolar.png'],
                    ['t' => 'ADHD / ADD', 'link' => 'adhd.php', 'img' => 'assets/home/adhd.png'],
                    ['t' => 'OCD', 'link' => 'ocd.php', 'img' => 'assets/home/ocd.png'],
                    ['t' => 'PTSD', 'link' => 'ptsd.php', 'img' => 'assets/home/ptsd.png'],
                    ['t' => 'Sleep Disorders', 'link' => 'sleep-disorders.php', 'img' => 'assets/home/sleep-disorders.png'],
                    ['t' => 'Chronic Pain', 'link' => 'chronic-pain.php', 'img' => 'assets/home/chronic-pain.png'],
                ];
                foreach ($conds as $c): ?>
                <a href="<?php echo $c['link']; ?>" class="group bg-white border border-primary/8 rounded-[1.5rem] overflow-hidden shadow-sm hover:shadow-xl hover:border-accent/30 hover:-translate-y-1 transition-all duration-300 flex flex-col">
                    <div class="h-40 w-full overflow-hidden relative">
                        <img src="<?php echo $c['img']; ?>" alt="<?php echo $c['t']; ?>" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    </div>
                    <div class="p-5 flex items-center justify-between gap-3">
                        <span class="text-base font-bold text-primary group-hover:text-accent transition-colors"><?php echo $c['t']; ?></span>
                        <svg class="w-5 h-5 text-accent flex-shrink-0 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>

            <!-- View All Conditions CTA -->
            <div class="text-center mt-12 fade-in-section">
                <a href="conditions.php" class="inline-flex items-center gap-2 px-8 py-4 bg-primary text-white rounded-full font-bold hover:bg-primary/90 hover:-translate-y-0.5 hover:shadow-xl transition-all duration-300">
                    View All Conditions
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>
        </div>
    </section>

    <!-- ===== OUR PRINCIPLES ===== -->
    <section id="principles" class="py-16 bg-[#2A163F] relative overflow-hidden">
        <div class="absolute top-0 right-0 w-[700px] h-[700px] bg-accent rounded-full blur-[200px] opacity-10 translate-x-1/2 -translate-y-1/3 pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-primary rounded-full blur-[150px] opacity-30 -translate-x-1/3 translate-y-1/3 pointer-events-none"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-2xl mb-10 fade-in-section">
                <div class="flex items-center gap-3 mb-6">
                    <span class="h-px w-12 bg-white/20"></span>
                    <span class="text-white/40 font-bold tracking-widest uppercase text-xs">How We Prescribe</span>
                </div>
                <h2 class="text-4xl md:text-5xl text-white mb-5 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                    Careful, Precise<br>&amp; Personal
                </h2>
                <p class="text-white/60 text-lg leading-relaxed">
                    Great psychiatric care is equal parts science and attentiveness. These principles guide every prescription we write.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php
                $principles = [
                    ['n' => '01', 't' => 'Personalized to You', 'd' => 'Your history, biology, lifestyle, and goals shape every decision — no two plans are alike.'],
                    ['n' => '02', 't' => 'Evidence-Based', 'd' => 'Every choice is grounded in current clinical research and best practice, not guesswork.'],
                    ['n' => '03', 't' => 'Collaborative', 'd' => 'You’re a partner in your care. Your preferences and concerns genuinely guide the plan.'],
                    ['n' => '04', 't' => 'Carefully Monitored', 'd' => 'Regular check-ins let us track your response and fine-tune the plan as you go.'],
                    ['n' => '05', 't' => 'Safety First', 'd' => 'We watch closely for interactions and side effects, adjusting to keep you safe and comfortable.'],
                    ['n' => '06', 't' => 'Whole-Person Care', 'd' => 'Medication is one piece — we combine it with therapy and TMS whenever it helps you thrive.'],
                ];
                foreach ($principles as $p): ?>
                <div class="relative bg-white/[0.04] border border-white/10 rounded-[1.5rem] p-8 hover:bg-white/[0.08] hover:border-accent/30 transition-all duration-300 group overflow-hidden">
                    <div class="absolute top-4 right-6 text-6xl font-bold text-white/25 group-hover:text-white/40 transition-colors" style="font-family: 'Bauhaus Soft', cursive;"><?php echo $p['n']; ?></div>
                    <h3 class="text-xl font-bold text-white mb-3 relative z-10 pr-10"><?php echo $p['t']; ?></h3>
                    <p class="text-white/50 text-sm leading-relaxed relative z-10"><?php echo $p['d']; ?></p>
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
                        Roxanne DoBrava is a board-certified Psychiatric Mental Health Nurse Practitioner (PMHNP-BC) and the founder of Tranquil Minds Mental Health. Medication management is central to her practice — precise, closely monitored prescribing for patients across the Monticello, MN community.
                    </p>
                    <p class="text-gray-600 leading-relaxed mb-8 italic">
                        &ldquo;The right medication, thoughtfully managed, can change a life. I take the time to get it right — and to keep it right — because you deserve nothing less.&rdquo;
                    </p>
                    <div class="flex flex-wrap gap-3 mb-8">
                        <?php
                        $creds = ['APRN-CNP', 'PMHNP-BC', 'Medication Management', 'Psychiatric Care', 'Whole-Person Care'];
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

    <!-- ===== WHAT TO EXPECT ===== -->
    <section id="approach" class="py-16 bg-white relative overflow-hidden">
        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center max-w-2xl mx-auto mb-10 fade-in-section">
                <div class="flex items-center justify-center gap-3 mb-6">
                    <span class="h-px w-12 bg-primary/40"></span>
                    <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">What to Expect</span>
                    <span class="h-px w-12 bg-primary/40"></span>
                </div>
                <h2 class="text-4xl md:text-5xl text-primary mb-5 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                    How It Works
                </h2>
                <p class="text-gray-500 text-lg">
                    From your first visit onward, prescribing is a careful, guided process — with you involved at every step.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <?php
                $steps = [
                    ['n' => '01', 't' => 'Comprehensive Evaluation', 'd' => 'A thorough review of your symptoms, history, and any past medications — the foundation of the right plan.'],
                    ['n' => '02', 't' => 'Personalized Plan', 'd' => 'Together we choose a medication and starting dose matched to your needs, goals, and preferences.'],
                    ['n' => '03', 't' => 'Start &amp; Fine-Tune', 'd' => 'We begin carefully and adjust as needed, watching closely for response and side effects.'],
                    ['n' => '04', 't' => 'Ongoing Monitoring', 'd' => 'Regular check-ins keep your plan optimized as your life and needs evolve over time.'],
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
        </div>
    </section>

    <!-- ===== FAQ ===== -->
    <section id="faq" class="py-16 bg-[#FAFAFF] relative overflow-hidden">
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
                        ['q' => 'What exactly is medication management?', 'a' => 'It’s the ongoing process of prescribing and overseeing your psychiatric medication — selecting the right one, finding the right dose, monitoring how you respond, and adjusting over time. It’s a partnership, not a one-time prescription.'],
                        ['q' => 'Will I have to be on medication forever?', 'a' => 'Not necessarily. Some people benefit from short-term support, others from longer-term treatment. We’ll discuss your goals openly and revisit the plan regularly — medication is always a shared decision.'],
                        ['q' => 'What if I’ve had bad side effects in the past?', 'a' => 'Please tell us — that history is valuable. It helps us avoid what didn’t work and choose options more likely to suit you. We start carefully and monitor closely to keep you comfortable.'],
                        ['q' => 'Can medication be combined with therapy or TMS?', 'a' => 'Absolutely, and it often works best that way. We take a whole-person approach and coordinate medication with therapy and, when helpful, Neurostar® TMS.'],
                        ['q' => 'Do you accept insurance?', 'a' => 'We accept most major insurance plans. During your consultation, we’ll help you verify your specific benefits.'],
                    ];
                    foreach ($faqs as $f): ?>
                    <details class="group bg-white border border-primary/8 rounded-2xl overflow-hidden hover:border-accent/30 transition-colors">
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
    <section class="py-16 bg-white relative overflow-hidden">
        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-7xl mx-auto bg-primary rounded-[2.5rem] overflow-hidden shadow-2xl relative fade-in-section">
                <div class="absolute top-0 right-0 w-[400px] h-[400px] bg-accent rounded-full blur-[120px] opacity-25 translate-x-1/3 -translate-y-1/3 pointer-events-none"></div>
                <div class="absolute bottom-0 left-0 w-[300px] h-[300px] bg-accent-light rounded-full blur-[110px] opacity-20 -translate-x-1/3 translate-y-1/3 pointer-events-none"></div>

                <div class="relative z-10 px-8 md:px-14 py-10 flex flex-col lg:flex-row items-center justify-between gap-8 text-center lg:text-left">
                    <div class="max-w-2xl">
                        <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-white/10 border border-white/20 text-white/80 text-[11px] font-bold uppercase tracking-widest mb-4">
                            <span class="w-1.5 h-1.5 rounded-full bg-green-400 animate-pulse"></span>
                            Accepting New Patients
                        </div>
                        <h2 class="text-3xl md:text-4xl text-white mb-2 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                            Let’s Find What Works for You
                        </h2>
                        <p class="text-white/70 text-base md:text-lg">
                            Start with a free, confidential 15-minute consultation — and take the guesswork out of your care.
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
