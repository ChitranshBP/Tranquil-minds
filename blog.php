<?php
$page_title       = "Blog & Resources | Tranquil Minds Mental Health";
$page_description = "Insights, guides, and resources from Tranquil Minds Mental Health in Monticello, MN — on depression, anxiety, TMS therapy, cognitive testing, and living well.";
$hero_title       = 'Insights &amp;<br><span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-white to-white/50">Resources.</span>';
$hero_subtitle    = 'Clear, compassionate guides to help you understand your mental health and the care that can help. Explore our resources below — with more articles on the way.';
$hero_badge       = 'The Tranquil Minds Blog';
$hero_cta1_text   = 'Book a Free Consultation';
$hero_cta1_link   = '#contact';
$hero_cta2_text   = 'Browse Resources';
$hero_cta2_link   = '#articles';
?>
<?php include 'header.php'; ?>
<?php include 'hero-service.php'; ?>

    <!-- ===== ARTICLES / RESOURCES ===== -->
    <section id="articles" class="py-16 bg-[#FAFAFF] relative overflow-hidden">
        <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-accent/10 rounded-full blur-[140px] translate-x-1/3 -translate-y-1/4 pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-primary/8 rounded-full blur-[120px] -translate-x-1/3 translate-y-1/3 pointer-events-none"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center max-w-2xl mx-auto mb-12 fade-in-section">
                <div class="flex items-center justify-center gap-3 mb-6">
                    <span class="h-px w-12 bg-primary/40"></span>
                    <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">Learn &amp; Explore</span>
                    <span class="h-px w-12 bg-primary/40"></span>
                </div>
                <h2 class="text-4xl md:text-5xl text-primary mb-5 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                    Guides to Feeling Better
                </h2>
                <p class="text-gray-500 text-lg">
                    Understanding your options is the first step. These guides break down conditions, treatments, and tools in plain language.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php
                $posts = [
                    ['t' => 'Understanding Depression: Signs, Types &amp; Treatment', 'cat' => 'Depression', 'read' => '5 min read', 'excerpt' => 'Depression is more than sadness. Learn the common signs, the different forms it takes, and the treatments that truly help.', 'link' => 'depression.php', 'img' => 'assets/home/depression.png'],
                    ['t' => 'What Is TMS Therapy? A Complete Guide', 'cat' => 'TMS Therapy', 'read' => '7 min read', 'excerpt' => 'How TMS works, its safety and side effects, the clinical evidence, and exactly what to expect from a course of treatment.', 'link' => 'what-is-tms-therapy.php', 'img' => 'assets/neurostar/neurostar-2.webp'],
                    ['t' => 'TMS vs. Medication for Depression', 'cat' => 'TMS Therapy', 'read' => '4 min read', 'excerpt' => 'How magnetic stimulation and antidepressants differ — and why, for many people, they can work well together.', 'link' => 'what-is-tms-therapy.php#vs', 'img' => 'assets/neurostar/NeuroStar-adult.webp'],
                    ['t' => 'ADHD &amp; Cognitive Testing with Creyos', 'cat' => 'Testing', 'read' => '5 min read', 'excerpt' => 'How objective, science-based cognitive testing brings clarity to an ADHD diagnosis — no guesswork involved.', 'link' => 'creyos.php', 'img' => 'assets/home/adhd.png'],
                    ['t' => 'Is It Anxiety? Common Signs to Know', 'cat' => 'Anxiety', 'read' => '4 min read', 'excerpt' => 'When does everyday worry become something more? Learn the signs of anxiety and the evidence-based ways we help.', 'link' => 'anxiety.php', 'img' => 'assets/home/anxiety.png'],
                    ['t' => 'Check In on Your Mood: The PHQ-9', 'cat' => 'Self-Care', 'read' => '2 min quiz', 'excerpt' => 'Not sure how you\'re really doing? Take our free, confidential 2-minute depression self-assessment.', 'link' => 'depression-assessment.php', 'img' => 'assets/home/sleep-disorders.png'],
                ];
                foreach ($posts as $p): ?>
                <a href="<?php echo $p['link']; ?>" class="group bg-white border border-primary/8 rounded-[1.5rem] overflow-hidden shadow-sm hover:shadow-xl hover:border-accent/30 hover:-translate-y-1.5 transition-all duration-300 flex flex-col">
                    <div class="h-52 w-full overflow-hidden relative">
                        <img src="<?php echo $p['img']; ?>" alt="<?php echo strip_tags($p['t']); ?>" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 rounded-full bg-white/90 backdrop-blur-sm text-primary text-[10px] font-bold uppercase tracking-widest"><?php echo $p['cat']; ?></span>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <div class="text-gray-400 text-[11px] font-semibold uppercase tracking-widest mb-2"><?php echo $p['read']; ?></div>
                        <h3 class="text-xl font-bold text-primary mb-2 leading-snug group-hover:text-accent transition-colors" style="font-family: 'Bauhaus Soft', cursive;"><?php echo $p['t']; ?></h3>
                        <p class="text-gray-500 text-sm leading-relaxed mb-5 flex-grow"><?php echo $p['excerpt']; ?></p>
                        <span class="inline-flex items-center gap-1.5 text-accent font-bold text-sm group-hover:gap-3 transition-all">
                            Read the guide
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </span>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>

            <!-- More coming soon -->
            <div class="text-center mt-12 fade-in-section">
                <div class="inline-flex items-center gap-2 px-5 py-3 rounded-full bg-white border border-primary/10 text-primary/70 text-sm font-semibold shadow-sm">
                    <span class="w-2 h-2 rounded-full bg-accent animate-pulse"></span>
                    More articles &amp; guides coming soon
                </div>
            </div>
        </div>
    </section>

    <!-- ===== TOPICS ===== -->
    <section class="py-16 bg-white relative overflow-hidden">
        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center max-w-2xl mx-auto mb-10 fade-in-section">
                <div class="flex items-center justify-center gap-3 mb-6">
                    <span class="h-px w-12 bg-primary/40"></span>
                    <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">Browse by Topic</span>
                    <span class="h-px w-12 bg-primary/40"></span>
                </div>
                <h2 class="text-4xl md:text-5xl text-primary mb-5 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                    Explore More
                </h2>
            </div>
            <div class="flex flex-wrap justify-center gap-3 fade-in-section">
                <?php
                $topics = [
                    ['t' => 'Conditions We Treat', 'link' => 'conditions.php'],
                    ['t' => 'Neurostar® TMS', 'link' => 'neurostar-tms.php'],
                    ['t' => 'Medication Management', 'link' => 'medication-management.php'],
                    ['t' => 'Psychotherapy', 'link' => 'psychotherapy.php'],
                    ['t' => 'Cognitive Testing', 'link' => 'creyos.php'],
                    ['t' => 'FAQ', 'link' => 'faq.php'],
                ];
                foreach ($topics as $t): ?>
                <a href="<?php echo $t['link']; ?>" class="px-5 py-2.5 rounded-full bg-[#FAFAFF] border border-primary/10 text-primary text-sm font-bold hover:bg-primary hover:text-white hover:border-primary transition-all duration-300"><?php echo $t['t']; ?></a>
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
                            Have a Question?
                        </div>
                        <h2 class="text-3xl md:text-4xl text-white mb-2 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                            Let's Talk About Your Care
                        </h2>
                        <p class="text-white/70 text-base md:text-lg">
                            Reading up is a great start. When you're ready, a free 15-minute consultation is the next step.
                        </p>
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

    <style>html { scroll-padding-top: 6rem; }</style>

<?php include 'footer.php'; ?>
