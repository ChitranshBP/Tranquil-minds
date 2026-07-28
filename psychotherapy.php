<?php
$page_title       = "Psychotherapy | Tranquil Minds Mental Health";
$page_description = "Compassionate, evidence-based psychotherapy in Monticello, MN. A safe, judgment-free space to understand yourself, build coping skills, and heal — for depression, anxiety, trauma, and more.";
$hero_title       = 'Healing Through<br><span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-white to-white/50">Connection.</span>';
$hero_subtitle    = 'Sometimes the most powerful medicine is being truly heard. Our psychotherapy offers a safe, judgment-free space to understand yourself and grow.';
$hero_badge       = 'Our Services · Psychotherapy';
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
                        A Space to<br>Be Heard
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-4">
                        Psychotherapy — often called talk therapy — is a collaborative, evidence-based process that helps you understand your thoughts and feelings, work through challenges, and build lasting coping skills.
                    </p>
                    <p class="text-gray-600 text-lg leading-relaxed mb-8">
                        It’s not about being “broken” or being told what to do. It’s a supportive partnership, at your pace, in a space where you can be completely honest without fear of judgment.
                    </p>

                    <div class="space-y-3">
                        <?php
                        $points = [
                            'A safe, confidential, judgment-free space',
                            'Evidence-based approaches like cognitive behavioral therapy (CBT)',
                            'Works beautifully on its own or alongside medication and TMS',
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
                        <img src="assets/home/psychotherapy.png" alt="A warm, calming space for psychotherapy sessions" class="absolute inset-0 w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/60 via-transparent to-transparent pointer-events-none"></div>
                    </div>
                    <!-- Floating card -->
                    <div class="absolute -bottom-6 -left-4 md:-left-8 bg-white rounded-2xl shadow-2xl border border-primary/5 px-5 py-4 flex items-center gap-4 max-w-[80%]">
                        <div class="w-11 h-11 rounded-xl bg-accent flex items-center justify-center text-white flex-shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                        </div>
                        <div>
                            <div class="text-primary font-bold text-sm">Safe &amp; Confidential</div>
                            <div class="text-gray-400 text-xs">A judgment-free space</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== WHAT THERAPY HELPS WITH ===== -->
    <section id="conditions" class="py-16 bg-white relative overflow-hidden">
        <div class="absolute top-0 left-0 w-[500px] h-[500px] bg-accent/6 rounded-full blur-[130px] -translate-x-1/3 -translate-y-1/3 pointer-events-none"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center max-w-2xl mx-auto mb-10 fade-in-section">
                <div class="flex items-center justify-center gap-3 mb-6">
                    <span class="h-px w-12 bg-primary/40"></span>
                    <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">What It Helps With</span>
                    <span class="h-px w-12 bg-primary/40"></span>
                </div>
                <h2 class="text-4xl md:text-5xl text-primary mb-5 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                    Therapy Can Help<br>With So Much
                </h2>
                <p class="text-gray-500 text-lg">
                    Psychotherapy supports healing across a wide range of conditions and life challenges — tap any to learn more.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <?php
                $conds = [
                    ['t' => 'Depression', 'link' => 'depression.php', 'img' => 'assets/home/depression.png'],
                    ['t' => 'Anxiety', 'link' => 'anxiety.php', 'img' => 'assets/home/anxiety.png'],
                    ['t' => 'PTSD', 'link' => 'ptsd.php', 'img' => 'assets/home/ptsd.png'],
                    ['t' => 'OCD', 'link' => 'ocd.php', 'img' => 'assets/home/ocd.png'],
                    ['t' => 'Bipolar Disorder', 'link' => 'bipolar.php', 'img' => 'assets/home/bipolar.png'],
                    ['t' => 'ADHD / ADD', 'link' => 'adhd.php', 'img' => 'assets/home/adhd.png'],
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

    <!-- ===== OUR APPROACH (PRINCIPLES) ===== -->
    <section id="principles" class="py-16 bg-[#2A163F] relative overflow-hidden">
        <div class="absolute top-0 right-0 w-[700px] h-[700px] bg-accent rounded-full blur-[200px] opacity-10 translate-x-1/2 -translate-y-1/3 pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-primary rounded-full blur-[150px] opacity-30 -translate-x-1/3 translate-y-1/3 pointer-events-none"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-2xl mb-10 fade-in-section">
                <div class="flex items-center gap-3 mb-6">
                    <span class="h-px w-12 bg-white/20"></span>
                    <span class="text-white/40 font-bold tracking-widest uppercase text-xs">Our Approach</span>
                </div>
                <h2 class="text-4xl md:text-5xl text-white mb-5 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                    Therapy That<br>Meets You Where You Are
                </h2>
                <p class="text-white/60 text-lg leading-relaxed">
                    Good therapy is built on trust and tailored to you. These principles guide every session.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php
                $principles = [
                    ['n' => '01', 't' => 'Safe &amp; Confidential', 'd' => 'A private, judgment-free space where you can be completely honest and feel secure.'],
                    ['n' => '02', 't' => 'Evidence-Based', 'd' => 'Grounded in proven approaches — like cognitive behavioral therapy — that genuinely work.'],
                    ['n' => '03', 't' => 'Collaborative', 'd' => 'We work together as partners. Your goals, values, and pace lead the way.'],
                    ['n' => '04', 't' => 'Personalized', 'd' => 'No scripts or one-size-fits-all. Therapy is shaped around your unique story.'],
                    ['n' => '05', 't' => 'Whole-Person', 'd' => 'We look at the full picture and coordinate with medication or TMS when it helps.'],
                    ['n' => '06', 't' => 'Goal-Oriented', 'd' => 'Sessions build toward real, meaningful change — not just talking in circles.'],
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
                        Roxanne DoBrava is a board-certified Psychiatric Mental Health Nurse Practitioner (PMHNP-BC) and the founder of Tranquil Minds Mental Health. She combines psychotherapy with medication management and TMS to care for the whole person — with warmth and genuine attentiveness — across the Monticello, MN community.
                    </p>
                    <p class="text-gray-600 leading-relaxed mb-8 italic">
                        &ldquo;Real healing happens in relationship. My goal is to create a space where you feel genuinely heard — and to walk with you toward the change you’re seeking.&rdquo;
                    </p>
                    <div class="flex flex-wrap gap-3 mb-8">
                        <?php
                        $creds = ['APRN-CNP', 'PMHNP-BC', 'Psychotherapy', 'Medication Management', 'Whole-Person Care'];
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
                    Starting therapy can feel like a big step. Here’s what the journey looks like — always at a pace that feels right for you.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <?php
                $steps = [
                    ['n' => '01', 't' => 'Reach Out', 'd' => 'A free, no-pressure consultation to share what’s on your mind and ask any questions.'],
                    ['n' => '02', 't' => 'Your First Session', 'd' => 'We get to know you and your goals — no pressure to share more than you’re ready to.'],
                    ['n' => '03', 't' => 'Ongoing Sessions', 'd' => 'Together we explore patterns, build coping skills, and work toward meaningful change.'],
                    ['n' => '04', 't' => 'Growth &amp; Progress', 'd' => 'We track how you’re feeling and adjust, so therapy keeps serving you well over time.'],
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
                        ['q' => 'What is psychotherapy, exactly?', 'a' => 'Psychotherapy — or talk therapy — is a collaborative process with a trained professional to help you understand your thoughts and emotions, work through challenges, and develop healthier ways of coping. It’s confidential and tailored to you.'],
                        ['q' => 'Do I need therapy if I’m already on medication?', 'a' => 'Many people benefit from both. Medication can ease symptoms while therapy helps you understand patterns and build lasting skills — together they often work better than either alone. It’s entirely your choice.'],
                        ['q' => 'What happens in the first session?', 'a' => 'Mostly, we get to know each other. We’ll talk about what brought you in and what you’re hoping for. There’s no pressure to dive into anything you’re not ready to share — it moves at your pace.'],
                        ['q' => 'How long will I need to be in therapy?', 'a' => 'It varies widely. Some people come for a few focused sessions, others for longer-term support. We’ll revisit your goals together and you’re always in control of how long you continue.'],
                        ['q' => 'Is what I say kept private?', 'a' => 'Yes. Therapy is confidential, within the standard legal and safety limits we’ll explain up front. Your privacy and trust are the foundation of the work.'],
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
                            You Deserve to Be Heard
                        </h2>
                        <p class="text-white/70 text-base md:text-lg">
                            Start with a free, confidential 15-minute consultation — and take the first step at your own pace.
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
