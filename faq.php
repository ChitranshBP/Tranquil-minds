<?php
$page_title       = "Frequently Asked Questions | Tranquil Minds Mental Health";
$page_description = "Answers to common questions about Tranquil Minds Mental Health in Monticello, MN — getting started, insurance, Neurostar® TMS, medication management, psychotherapy, ADHD testing, and more.";
$hero_title       = 'Frequently Asked<br><span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-white to-white/50">Questions.</span>';
$hero_subtitle    = 'Starting care brings a lot of questions — and that’s a good thing. Here are clear, honest answers to the ones we hear most.';
$hero_badge       = 'Help &amp; Answers';
$hero_cta1_text   = 'Book a Free Consultation';
$hero_cta1_link   = '#contact';
$hero_cta2_text   = 'Contact Us';
$hero_cta2_link   = 'contact.php';
?>
<?php include 'header.php'; ?>
<?php include 'hero-service.php'; ?>

    <?php
    $faqGroups = [
        [
            'id'    => 'getting-started',
            'label' => 'Getting Started',
            'items' => [
                ['q' => 'How do I get started?', 'a' => 'The easiest first step is a free, no-pressure 15-minute consultation. We’ll listen to what’s going on, answer your questions, and help you understand your options — with no obligation to continue.'],
                ['q' => 'What happens during the free consultation?', 'a' => 'We take time to hear your story, discuss what you’re experiencing, explain how we might help, and go over practical matters like insurance and scheduling. It’s a relaxed conversation to see if we’re the right fit.'],
                ['q' => 'What conditions do you treat?', 'a' => 'We provide care for a wide range of conditions — including depression, anxiety, ADHD, PTSD, OCD, bipolar disorder, postpartum depression, sleep disorders, chronic pain, and more. You can explore them all on our Conditions page.'],
                ['q' => 'Do you see teenagers as well as adults?', 'a' => 'Yes. We provide compassionate, age-appropriate care for adolescents as well as adults. Reach out and we’ll confirm we’re the right fit for your or your child’s specific needs.'],
                ['q' => 'How do I know if I need professional help?', 'a' => 'If symptoms like low mood, anxiety, or trouble functioning have lasted more than a couple of weeks and are affecting your daily life, it’s worth talking to a professional. A free consultation is a low-pressure way to find out.'],
            ],
        ],
        [
            'id'    => 'insurance-cost',
            'label' => 'Insurance &amp; Cost',
            'items' => [
                ['q' => 'Do you accept insurance?', 'a' => 'Yes — we accept most major insurance plans. During your consultation, we’ll help you verify your specific benefits so there are no surprises.'],
                ['q' => 'Is the consultation really free?', 'a' => 'Yes. The initial 15-minute consultation is completely free and carries no obligation. It’s simply a chance to talk and see how we can help.'],
                ['q' => 'Is Neurostar® TMS covered by insurance?', 'a' => 'Often, yes. Most major insurers — including Medicare and many commercial plans — cover TMS for treatment-resistant depression. Our team helps handle the pre-authorization process for you.'],
            ],
        ],
        [
            'id'    => 'tms',
            'label' => 'Neurostar® TMS',
            'items' => [
                ['q' => 'Is Neurostar® TMS therapy painful?', 'a' => 'Most patients report only a mild tapping sensation on the scalp. It’s generally not painful, requires no anesthesia, and you can drive yourself home immediately after each session.'],
                ['q' => 'Does TMS require sedation?', 'a' => 'No. TMS is non-invasive and requires no sedation. You stay fully awake and alert throughout, and can return to your normal day right away.'],
                ['q' => 'How long does a course of TMS take?', 'a' => 'A standard course typically involves sessions five days a week for about six weeks, followed by a tapering phase. Each session lasts roughly 19–37 minutes, fitting easily into your routine.'],
                ['q' => 'Are there side effects with TMS?', 'a' => 'TMS is very well tolerated. The most common side effect is mild scalp discomfort during the first few sessions, which usually fades. Unlike medications, there are no systemic side effects like weight gain or drowsiness.'],
                ['q' => 'Is TMS FDA-cleared for OCD too?', 'a' => 'Yes. In addition to depression, TMS is FDA-cleared as a treatment for OCD. It’s non-invasive, drug-free, and can help when other treatments haven’t been enough.'],
            ],
        ],
        [
            'id'    => 'medication',
            'label' => 'Medication Management',
            'items' => [
                ['q' => 'What is medication management?', 'a' => 'It’s the ongoing process of prescribing and overseeing your psychiatric medication — selecting the right one, finding the right dose, monitoring your response, and adjusting over time. It’s a partnership, not a one-time prescription.'],
                ['q' => 'Will I have to be on medication forever?', 'a' => 'Not necessarily. Some people benefit from short-term support, others from longer-term treatment. We’ll discuss your goals openly and revisit the plan regularly — it’s always a shared decision.'],
                ['q' => 'What if I’ve had bad side effects in the past?', 'a' => 'Please tell us — that history is valuable. It helps us avoid what didn’t work and choose options more likely to suit you. We start carefully and monitor closely to keep you comfortable.'],
                ['q' => 'Can medication be combined with therapy or TMS?', 'a' => 'Absolutely, and it often works best that way. We take a whole-person approach and coordinate medication with therapy and, when helpful, Neurostar® TMS.'],
            ],
        ],
        [
            'id'    => 'therapy',
            'label' => 'Psychotherapy',
            'items' => [
                ['q' => 'What is psychotherapy, exactly?', 'a' => 'Psychotherapy — or talk therapy — is a collaborative process with a trained professional to help you understand your thoughts and emotions, work through challenges, and develop healthier ways of coping. It’s confidential and tailored to you.'],
                ['q' => 'Do I need therapy if I’m already on medication?', 'a' => 'Many people benefit from both. Medication can ease symptoms while therapy helps you understand patterns and build lasting skills — together they often work better than either alone. It’s entirely your choice.'],
                ['q' => 'What happens in the first therapy session?', 'a' => 'Mostly, we get to know each other. We’ll talk about what brought you in and what you’re hoping for. There’s no pressure to dive into anything you’re not ready to share — it moves at your pace.'],
                ['q' => 'Is what I say in therapy kept private?', 'a' => 'Yes. Therapy is confidential, within the standard legal and safety limits we’ll explain up front. Your privacy and trust are the foundation of the work.'],
            ],
        ],
        [
            'id'    => 'adhd-testing',
            'label' => 'ADHD &amp; Testing',
            'items' => [
                ['q' => 'How is ADHD diagnosed?', 'a' => 'Diagnosis combines a detailed clinical evaluation with objective testing. We use Creyos, a validated cognitive-screening platform, to measure attention, memory, and executive function — so your diagnosis is based on real data, not guesswork.'],
                ['q' => 'What is Creyos?', 'a' => 'Creyos is a science-based digital platform for cognitive assessment. It uses short, engaging tasks to objectively measure areas like attention and executive function, helping us screen for ADHD and track cognitive health over time.'],
                ['q' => 'Can adults be tested for ADHD?', 'a' => 'Absolutely. ADHD often goes undiagnosed into adulthood. Our evaluation and Creyos testing are well suited for adults who suspect ADHD may explain lifelong challenges with focus and organization.'],
            ],
        ],
        [
            'id'    => 'treatment',
            'label' => 'Treatment &amp; Results',
            'items' => [
                ['q' => 'What if antidepressants haven’t worked for me before?', 'a' => 'You’re not out of options. Treatment-resistant depression is one of our areas of focus. Therapies like Neurostar® TMS work differently than traditional medication and can help many people who haven’t found relief elsewhere.'],
                ['q' => 'How soon will I start to feel better?', 'a' => 'Every person and treatment is different. Some options work gradually over several weeks, while others act more rapidly. We’ll set clear expectations for your specific plan and track your progress closely.'],
                ['q' => 'How is postpartum depression different from the baby blues?', 'a' => 'The baby blues are mild and usually pass within two weeks. Postpartum depression is more intense and persistent, lasting longer and interfering with daily life. If symptoms linger beyond two weeks, it’s worth reaching out.'],
                ['q' => 'Do you help with quitting smoking?', 'a' => 'Yes. We offer doctor-supported smoking cessation, combining proven medications with behavioral and mood support to make quitting far more achievable than willpower alone.'],
            ],
        ],
    ];
    ?>

    <!-- ===== JUMP NAV ===== -->
    <section class="py-12 bg-[#FAFAFF] relative overflow-hidden">
        <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-accent/10 rounded-full blur-[140px] translate-x-1/3 -translate-y-1/4 pointer-events-none"></div>
        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center max-w-2xl mx-auto mb-8 fade-in-section">
                <div class="flex items-center justify-center gap-3 mb-6">
                    <span class="h-px w-12 bg-primary/40"></span>
                    <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">Browse by Topic</span>
                    <span class="h-px w-12 bg-primary/40"></span>
                </div>
                <h2 class="text-4xl md:text-5xl text-primary mb-5 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                    Jump to a Section
                </h2>
            </div>
            <div class="flex flex-wrap justify-center gap-3 fade-in-section">
                <?php foreach ($faqGroups as $g): ?>
                <a href="#<?php echo $g['id']; ?>" class="px-5 py-2.5 rounded-full bg-white border border-primary/10 text-primary text-sm font-bold hover:bg-primary hover:text-white hover:border-primary transition-all duration-300"><?php echo $g['label']; ?></a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ===== FAQ GROUPS ===== -->
    <section class="py-16 bg-white relative overflow-hidden">
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-primary/6 rounded-full blur-[140px] -translate-x-1/3 translate-y-1/3 pointer-events-none"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-3xl mx-auto space-y-14">
                <?php foreach ($faqGroups as $g): ?>
                <div id="<?php echo $g['id']; ?>" class="scroll-mt-28 fade-in-section">
                    <div class="flex items-center gap-3 mb-6">
                        <span class="h-px w-10 bg-accent/50"></span>
                        <h3 class="text-2xl md:text-3xl text-primary font-bold" style="font-family: 'Bauhaus Soft', cursive;"><?php echo $g['label']; ?></h3>
                    </div>
                    <div class="space-y-4">
                        <?php foreach ($g['items'] as $f): ?>
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
                            Still Have Questions?
                        </div>
                        <h2 class="text-3xl md:text-4xl text-white mb-2 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                            We’re Happy to Help
                        </h2>
                        <p class="text-white/70 text-base md:text-lg">
                            Didn’t find your answer? Reach out — a free, confidential 15-minute consultation is the best place to start.
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
