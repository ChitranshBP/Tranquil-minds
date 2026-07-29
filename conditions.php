<?php
$page_title       = "Conditions We Treat | Tranquil Minds Mental Health";
$page_description = "Explore the mental-health conditions treated at Tranquil Minds Mental Health in Monticello, MN — from depression, anxiety, and ADHD to PTSD, OCD, bipolar disorder, sleep disorders, and chronic pain.";
$hero_title       = 'Conditions<br><span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-white to-white/50">We Treat.</span>';
$hero_subtitle    = 'Whatever you’re facing, you don’t have to face it alone. Explore the conditions we care for — each with a personalized, evidence-based path to relief.';
$hero_badge       = 'Conditions We Treat';
$hero_cta1_text   = 'Book a Free Consultation';
$hero_cta1_link   = '#contact';
$hero_cta2_text   = 'Our Treatments';
$hero_cta2_link   = '#treatments';
?>
<?php include 'header.php'; ?>
<?php include 'hero-service.php'; ?>

    <!-- ===== CONDITIONS GRID ===== -->
    <section id="conditions" class="py-16 bg-[#FAFAFF] relative overflow-hidden">
        <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-accent/10 rounded-full blur-[140px] translate-x-1/3 -translate-y-1/4 pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-primary/8 rounded-full blur-[120px] -translate-x-1/3 translate-y-1/3 pointer-events-none"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center max-w-2xl mx-auto mb-12 fade-in-section">
                <div class="flex items-center justify-center gap-3 mb-6">
                    <span class="h-px w-12 bg-primary/40"></span>
                    <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">Specialized Care</span>
                    <span class="h-px w-12 bg-primary/40"></span>
                </div>
                <h2 class="text-4xl md:text-5xl text-primary mb-5 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                    Care for Every Mind
                </h2>
                <p class="text-gray-500 text-lg">
                    We provide advanced, compassionate treatment across a wide range of mental-health conditions. Select any to learn more.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php
                $conditions = [
                    ['t' => 'Depression', 'cat' => 'Mood', 'd' => 'From treatment-resistant depression to everyday lows — relief through TMS, medication management, and therapy.', 'link' => 'depression.php', 'img' => 'assets/home/depression.png'],
                    ['t' => 'Anxiety', 'cat' => 'Anxiety', 'd' => 'Quiet persistent worry, panic, and social anxiety with evidence-based, personalized care.', 'link' => 'anxiety.php', 'img' => 'assets/home/anxiety.png'],
                    ['t' => 'ADHD / ADD', 'cat' => 'Focus &amp; Neuro', 'd' => 'Accurate diagnosis with objective Creyos testing, plus tailored plans for children, teens, and adults.', 'link' => 'adhd.php', 'img' => 'assets/home/adhd.png'],
                    ['t' => 'PTSD', 'cat' => 'Trauma', 'd' => 'Compassionate, trauma-informed care to process the past and reclaim a sense of safety — at your pace.', 'link' => 'ptsd.php', 'img' => 'assets/home/ptsd.png'],
                    ['t' => 'OCD', 'cat' => 'Anxiety', 'd' => 'Break the obsessive-compulsive cycle with ERP therapy and FDA-cleared Neurostar® TMS for OCD.', 'link' => 'ocd.php', 'img' => 'assets/home/ocd.png'],
                    ['t' => 'Bipolar Disorder', 'cat' => 'Mood', 'd' => 'Careful, consistent psychiatric care to smooth the highs and lows and build lasting stability.', 'link' => 'bipolar.php', 'img' => 'assets/home/bipolar.png'],
                    ['t' => 'Sleep Disorders', 'cat' => 'Wellness', 'd' => 'Restore restful sleep by treating the root cause — from anxiety and mood to daily habits.', 'link' => 'sleep-disorders.php', 'img' => 'assets/home/sleep-disorders.png'],
                    ['t' => 'Chronic Pain', 'cat' => 'Wellness', 'd' => 'Whole-person support for the mind-body connection, working alongside your medical team.', 'link' => 'chronic-pain.php', 'img' => 'assets/home/chronic-pain.png'],
                    ['t' => 'Treatment-Resistant Depression', 'cat' => 'Mood', 'd' => 'When antidepressants haven’t worked, advanced options like Neurostar® TMS offer new hope.', 'link' => 'treatment-resistant-depression.php', 'img' => 'assets/home/treatment-resistant-depression.png'],
                    ['t' => 'Postpartum Depression', 'cat' => 'Perinatal', 'd' => 'Compassionate, judgment-free care for new and expecting parents facing depression or anxiety.', 'link' => 'postpartum-depression.php', 'img' => 'assets/home/postpartum-depression.png'],
                    ['t' => 'Adolescent Mental Health', 'cat' => 'Teens', 'd' => 'Specialized, age-appropriate support for teens who are struggling — with families involved.', 'link' => 'adolescent-mental-health.php', 'img' => 'assets/home/adolescent-mental-health.png'],
                    ['t' => 'Smoking Cessation', 'cat' => 'Wellness', 'd' => 'Quit for good with proven medication and real behavioral and mood support — not willpower alone.', 'link' => 'smoking-cessation.php', 'img' => 'assets/home/smoking-cessation.png'],
                ];
                foreach ($conditions as $c): ?>
                <a href="<?php echo $c['link']; ?>" class="group bg-white border border-primary/8 rounded-[2rem] overflow-hidden shadow-sm hover:shadow-xl hover:border-accent/30 hover:-translate-y-1.5 transition-all duration-300 flex flex-col">
                    <div class="h-64 w-full overflow-hidden relative">
                        <img src="<?php echo $c['img']; ?>" alt="<?php echo $c['t']; ?>" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 rounded-full bg-white/90 backdrop-blur-sm text-primary text-[10px] font-bold uppercase tracking-widest"><?php echo $c['cat']; ?></span>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold text-primary mb-2 group-hover:text-accent transition-colors" style="font-family: 'Bauhaus Soft', cursive;"><?php echo $c['t']; ?></h3>
                        <p class="text-gray-500 text-sm leading-relaxed mb-5 flex-grow"><?php echo $c['d']; ?></p>
                        <span class="inline-flex items-center gap-1.5 text-accent font-bold text-sm group-hover:gap-3 transition-all">
                            Learn more
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </span>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>

            <!-- Reassurance note -->
            <div class="mt-12 max-w-3xl mx-auto fade-in-section">
                <div class="flex items-start gap-4 bg-white border border-primary/8 rounded-2xl px-6 py-5 shadow-sm">
                    <svg class="w-6 h-6 text-accent flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        <span class="font-bold text-primary">Not sure where you fit?</span> That’s completely okay. Many people experience more than one of these at once. Reach out for a free consultation and we’ll help you find the right path.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== TREATMENTS ===== -->
    <section id="treatments" class="py-16 bg-white relative overflow-hidden">
        <div class="absolute bottom-0 right-0 w-[600px] h-[600px] bg-accent/8 rounded-full blur-[150px] translate-x-1/4 translate-y-1/4 pointer-events-none"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center max-w-2xl mx-auto mb-10 fade-in-section">
                <div class="flex items-center justify-center gap-3 mb-6">
                    <span class="h-px w-12 bg-primary/40"></span>
                    <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">How We Help</span>
                    <span class="h-px w-12 bg-primary/40"></span>
                </div>
                <h2 class="text-4xl md:text-5xl text-primary mb-5 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                    Our Treatment Approaches
                </h2>
                <p class="text-gray-500 text-lg">
                    No single treatment fits everyone. We combine advanced, evidence-based therapies into a plan built around you.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php
                // Our three core services — interlinked.
                $treatments = [
                    ['t' => 'Neurostar® TMS', 'd' => 'Non-invasive, drug-free magnetic therapy — FDA-cleared for depression and OCD.', 'icon' => 'M13 10V3L4 14h7v7l9-11h-7z', 'link' => 'neurostar-tms.php'],
                    ['t' => 'Medication Management', 'd' => 'Precise, closely monitored prescribing tailored to your biology and goals.', 'icon' => 'M19 7a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2V9a2 2 0 012-2h14zm-9 4h4', 'link' => 'medication-management.php'],
                    ['t' => 'Psychotherapy', 'd' => 'Compassionate, evidence-based talk therapy that heals the whole person.', 'icon' => 'M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z', 'link' => 'psychotherapy.php'],
                ];
                foreach ($treatments as $tr): ?>
                <a href="<?php echo $tr['link']; ?>" class="bg-[#FAFAFF] rounded-[1.5rem] p-7 border border-primary/8 hover:bg-white hover:shadow-lg hover:border-accent/30 hover:-translate-y-1 transition-all duration-300 group flex flex-col">
                    <div class="w-12 h-12 rounded-xl bg-accent/10 flex items-center justify-center text-accent mb-5 group-hover:bg-accent group-hover:text-white transition-all duration-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="<?php echo $tr['icon']; ?>"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-primary mb-2 group-hover:text-accent transition-colors"><?php echo $tr['t']; ?></h3>
                    <p class="text-gray-500 text-sm leading-relaxed"><?php echo $tr['d']; ?></p>
                </a>
                <?php endforeach; ?>
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
                            Accepting New Patients
                        </div>
                        <h2 class="text-3xl md:text-4xl text-white mb-2 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                            Take the First Step Today
                        </h2>
                        <p class="text-white/70 text-base md:text-lg">
                            Start with a free, confidential 15-minute consultation — let’s find the path that works for you.
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
