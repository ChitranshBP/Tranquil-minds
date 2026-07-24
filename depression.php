<?php
$page_title = "Depression Treatment | Tranquil Minds Mental Health";
$page_description = "Compassionate, evidence-based depression treatment in Monticello, MN. From treatment-resistant depression to Neurostar® TMS, Spravato®, medication management, and therapy — Tranquil Minds helps you feel like yourself again.";
$hero_title = 'Depression Is Treatable.<br><span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-white to-white/50">And You Don\'t Have to Face It Alone.</span>';
$hero_subtitle = 'Depression is a real, biological condition — not a weakness. At Tranquil Minds, we treat it at the source with advanced, science-backed care tailored to you.';
$hero_badge = 'Conditions We Treat · Depression';
$hero_cta1_text = 'Book a Free Consultation';
$hero_cta1_link = '#contact';
$hero_cta2_text = 'Explore Treatments';
$hero_cta2_link = '#treatments';
?>
<?php include 'header.php'; ?>
<?php include 'hero-service.php'; ?>

    <!-- ===== OVERVIEW ===== -->
    <section id="overview" class="py-24 bg-[#FAFAFF] relative overflow-hidden">
        <!-- Decorative blobs -->
        <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-accent/10 rounded-full blur-[140px] translate-x-1/3 -translate-y-1/4 pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-primary/8 rounded-full blur-[120px] -translate-x-1/3 translate-y-1/3 pointer-events-none"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="grid lg:grid-cols-2 gap-14 lg:gap-20 items-center">

                <!-- LEFT: Text -->
                <div class="fade-in-section">
                    <div class="flex items-center gap-3 mb-6">
                        <span class="h-px w-12 bg-primary/40"></span>
                        <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">Understanding Depression</span>
                    </div>
                    <h2 class="text-4xl md:text-5xl text-primary mb-6 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                        More Than Just<br>Feeling Sad
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-4">
                        Depression is one of the most common — and most treatable — mental health conditions. It physically changes how the brain regulates mood, energy, and motivation, which is why simply "trying harder" is never the answer.
                    </p>
                    <p class="text-gray-600 text-lg leading-relaxed mb-8">
                        If low mood, exhaustion, or a loss of interest in the things you once loved have lingered for weeks, it may be more than a rough patch. The right care can help — and recovery is absolutely possible.
                    </p>

                    <!-- Key points -->
                    <div class="space-y-3">
                        <?php
                        $points = [
                            'A medical condition rooted in brain chemistry — not a personal failing',
                            'Highly responsive to modern, evidence-based treatment',
                            'Often treatable even when past medications have not worked',
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
                        <img
                            src="assets/home/depression.png"
                            alt="A person finding hope and relief through depression treatment"
                            class="absolute inset-0 w-full h-full object-cover"
                        />
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/60 via-transparent to-transparent pointer-events-none"></div>
                    </div>
                    <!-- Floating card -->
                    <div class="absolute -bottom-6 -left-4 md:-left-8 bg-white rounded-2xl shadow-2xl border border-primary/5 px-5 py-4 flex items-center gap-4 max-w-[80%]">
                        <div class="w-11 h-11 rounded-xl bg-accent flex items-center justify-center text-white flex-shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        </div>
                        <div>
                            <div class="text-primary font-bold text-sm">FDA-Cleared TMS</div>
                            <div class="text-gray-400 text-xs">A drug-free path to relief</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== SYMPTOMS ===== -->
    <section id="symptoms" class="py-24 bg-white relative overflow-hidden">
        <div class="absolute top-0 left-0 w-[500px] h-[500px] bg-accent/6 rounded-full blur-[130px] -translate-x-1/3 -translate-y-1/3 pointer-events-none"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center max-w-2xl mx-auto mb-16 fade-in-section">
                <div class="flex items-center justify-center gap-3 mb-6">
                    <span class="h-px w-12 bg-primary/40"></span>
                    <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">Signs &amp; Symptoms</span>
                    <span class="h-px w-12 bg-primary/40"></span>
                </div>
                <h2 class="text-4xl md:text-5xl text-primary mb-5 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                    Do These Feel Familiar?
                </h2>
                <p class="text-gray-500 text-lg">
                    Everyone experiences depression differently. If several of these have persisted for two weeks or more, it may be time to reach out.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5">
                <?php
                $symptoms = [
                    ['t' => 'Persistent Low Mood', 'd' => 'A heavy sadness or emptiness that lingers most of the day.', 'icon' => 'M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z'],
                    ['t' => 'Loss of Interest', 'd' => 'Little pleasure in hobbies, people, or activities you once enjoyed.', 'icon' => 'M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 10-7.78 7.78L12 21.23l8.84-8.84a5.5 5.5 0 000-7.78z'],
                    ['t' => 'Fatigue &amp; Low Energy', 'd' => 'Feeling drained, slowed down, or exhausted even after rest.', 'icon' => 'M13 10V3L4 14h7v7l9-11h-7z'],
                    ['t' => 'Sleep Changes', 'd' => 'Sleeping far too much or too little, or waking unrested.', 'icon' => 'M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z'],
                    ['t' => 'Trouble Concentrating', 'd' => 'Difficulty focusing, remembering, or making decisions.', 'icon' => 'M9.663 17h4.673M12 3v1m0 16v1m9-9h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z'],
                    ['t' => 'Appetite Shifts', 'd' => 'Noticeable changes in appetite or weight, up or down.', 'icon' => 'M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z'],
                    ['t' => 'Feelings of Worthlessness', 'd' => 'Harsh self-criticism, guilt, or a sense of not being enough.', 'icon' => 'M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636'],
                    ['t' => 'Loss of Hope', 'd' => 'A sense that things won\'t improve — or thoughts of giving up.', 'icon' => 'M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z'],
                ];
                foreach ($symptoms as $s): ?>
                <div class="bg-[#FAFAFF] border border-primary/8 rounded-[1.5rem] p-6 hover:bg-white hover:shadow-lg hover:border-accent/30 hover:-translate-y-1 transition-all duration-300 group">
                    <div class="w-11 h-11 rounded-xl bg-accent/10 flex items-center justify-center text-accent mb-4 group-hover:bg-accent group-hover:text-white transition-all duration-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?php echo $s['icon']; ?>"></path>
                        </svg>
                    </div>
                    <h3 class="text-base font-bold text-primary mb-1.5"><?php echo $s['t']; ?></h3>
                    <p class="text-gray-500 text-sm leading-relaxed"><?php echo $s['d']; ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- Crisis note -->
            <div class="mt-12 max-w-3xl mx-auto fade-in-section">
                <div class="flex items-start gap-4 bg-accent/5 border border-accent/20 rounded-2xl px-6 py-5">
                    <svg class="w-6 h-6 text-accent flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-12.728 12.728M12 2a10 10 0 100 20 10 10 0 000-20z"></path></svg>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        <span class="font-bold text-primary">In crisis or thinking about self-harm?</span> You deserve immediate support. Call or text <a href="tel:988" class="text-accent font-bold underline">988</a> (the Suicide &amp; Crisis Lifeline) any time, day or night. If you are in danger, call 911.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== TYPES WE TREAT ===== -->
    <section id="types" class="py-24 bg-[#2A163F] relative overflow-hidden">
        <div class="absolute top-0 right-0 w-[700px] h-[700px] bg-accent rounded-full blur-[200px] opacity-10 translate-x-1/2 -translate-y-1/3 pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-primary rounded-full blur-[150px] opacity-30 -translate-x-1/3 translate-y-1/3 pointer-events-none"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-2xl mb-16 fade-in-section">
                <div class="flex items-center gap-3 mb-6">
                    <span class="h-px w-12 bg-white/20"></span>
                    <span class="text-white/40 font-bold tracking-widest uppercase text-xs">Forms of Depression</span>
                </div>
                <h2 class="text-4xl md:text-5xl text-white mb-5 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                    Depression Wears<br>Many Faces
                </h2>
                <p class="text-white/60 text-lg leading-relaxed">
                    We provide personalized care for the full spectrum of depressive conditions — including cases that haven't responded to previous treatment.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php
                $types = [
                    ['n' => '01', 't' => 'Major Depressive Disorder', 'd' => 'Persistent, intense symptoms that interfere with work, relationships, and daily life.'],
                    ['n' => '02', 't' => 'Treatment-Resistant Depression', 'd' => 'Depression that hasn\'t improved after one or more medication trials — a focus of our advanced therapies.'],
                    ['n' => '03', 't' => 'Persistent Depressive Disorder', 'd' => 'A long-lasting, lower-grade depression (dysthymia) that can quietly wear you down for years.'],
                    ['n' => '04', 't' => 'Postpartum Depression', 'd' => 'Depression during pregnancy or after childbirth, requiring sensitive, specialized support.'],
                    ['n' => '05', 't' => 'Seasonal Affective Disorder', 'd' => 'Depression that follows the seasons, often deepening through the shorter, darker months.'],
                    ['n' => '06', 't' => 'Depression with Anxiety', 'd' => 'When low mood and persistent worry overlap, we treat both together as one connected picture.'],
                ];
                foreach ($types as $ty): ?>
                <div class="relative bg-white/[0.04] border border-white/10 rounded-[1.5rem] p-8 hover:bg-white/[0.08] hover:border-accent/30 transition-all duration-300 group overflow-hidden">
                    <div class="absolute top-4 right-6 text-6xl font-bold text-white/25 group-hover:text-white/40 transition-colors" style="font-family: 'Bauhaus Soft', cursive;"><?php echo $ty['n']; ?></div>
                    <h3 class="text-xl font-bold text-white mb-3 relative z-10 pr-10"><?php echo $ty['t']; ?></h3>
                    <p class="text-white/50 text-sm leading-relaxed relative z-10"><?php echo $ty['d']; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ===== TREATMENTS ===== -->
    <section id="treatments" class="py-24 bg-[#FAFAFF] relative overflow-hidden">
        <div class="absolute bottom-0 right-0 w-[600px] h-[600px] bg-accent/8 rounded-full blur-[150px] translate-x-1/4 translate-y-1/4 pointer-events-none"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center max-w-2xl mx-auto mb-16 fade-in-section">
                <div class="flex items-center justify-center gap-3 mb-6">
                    <span class="h-px w-12 bg-primary/40"></span>
                    <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">How We Help</span>
                    <span class="h-px w-12 bg-primary/40"></span>
                </div>
                <h2 class="text-4xl md:text-5xl text-primary mb-5 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                    Advanced Treatments<br>for Depression
                </h2>
                <p class="text-gray-500 text-lg">
                    There is no one-size-fits-all cure. We combine proven therapies into a plan built around your biology, history, and goals.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-6">
                <?php
                $treatments = [
                    [
                        't' => 'Neurostar® TMS Therapy',
                        'd' => 'A non-invasive, drug-free therapy that uses gentle magnetic pulses to reactivate the brain circuits involved in mood. FDA-cleared and especially effective for treatment-resistant depression.',
                        'tag' => 'Drug-Free · FDA-Cleared',
                        'icon' => 'M13 10V3L4 14h7v7l9-11h-7z',
                        'link' => '#tms',
                    ],
                    [
                        't' => 'Spravato® &amp; Ketamine',
                        'd' => 'Rapid-acting options for those who haven\'t found relief elsewhere. Administered in a safe, monitored, and calming clinical setting.',
                        'tag' => 'Rapid-Acting',
                        'icon' => 'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z',
                        'link' => '#contact',
                    ],
                    [
                        't' => 'Medication Management',
                        'd' => 'Thoughtful, precise psychiatric care. We find the right medication and dose for you — and adjust carefully over time, never by guesswork.',
                        'tag' => 'Personalized Psychiatry',
                        'icon' => 'M19 7a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2V9a2 2 0 012-2h14zm-9 4h4',
                        'link' => '#contact',
                    ],
                    [
                        't' => 'Psychotherapy &amp; Support',
                        'd' => 'Compassionate, evidence-based talk therapy that helps you understand patterns, build coping skills, and heal the whole person — not just the diagnosis.',
                        'tag' => 'Whole-Person Care',
                        'icon' => 'M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z',
                        'link' => '#contact',
                    ],
                ];
                foreach ($treatments as $tr): ?>
                <div class="bg-white rounded-[2rem] p-8 border border-primary/5 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group flex flex-col">
                    <div class="flex items-start justify-between mb-5">
                        <div class="w-14 h-14 rounded-2xl bg-accent/10 flex items-center justify-center text-accent group-hover:bg-accent group-hover:text-white transition-all duration-300">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="<?php echo $tr['icon']; ?>"></path>
                            </svg>
                        </div>
                        <span class="px-3 py-1 rounded-full bg-primary/5 text-primary/70 text-[11px] font-bold uppercase tracking-widest"><?php echo $tr['tag']; ?></span>
                    </div>
                    <h3 class="text-2xl font-bold text-primary mb-3" style="font-family: 'Bauhaus Soft', cursive;"><?php echo $tr['t']; ?></h3>
                    <p class="text-gray-500 text-base leading-relaxed mb-6 flex-grow"><?php echo $tr['d']; ?></p>
                    <a href="<?php echo $tr['link']; ?>" class="inline-flex items-center gap-2 text-accent font-bold text-sm group-hover:gap-3 transition-all">
                        Learn more
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ===== OUR APPROACH ===== -->
    <section id="approach" class="py-24 bg-white relative overflow-hidden">
        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center max-w-2xl mx-auto mb-16 fade-in-section">
                <div class="flex items-center justify-center gap-3 mb-6">
                    <span class="h-px w-12 bg-primary/40"></span>
                    <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">What to Expect</span>
                    <span class="h-px w-12 bg-primary/40"></span>
                </div>
                <h2 class="text-4xl md:text-5xl text-primary mb-5 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                    Your Path to Feeling Better
                </h2>
                <p class="text-gray-500 text-lg">
                    From your very first call, you're met with warmth, expertise, and a plan made just for you.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <?php
                $steps = [
                    ['n' => '01', 't' => 'Reach Out', 'd' => 'A free, no-pressure consultation to hear your story and answer your questions.'],
                    ['n' => '02', 't' => 'Comprehensive Evaluation', 'd' => 'A thorough assessment of your symptoms, history, and goals — the foundation of great care.'],
                    ['n' => '03', 't' => 'Personalized Plan', 'd' => 'Together we choose the right combination of therapies for your unique needs.'],
                    ['n' => '04', 't' => 'Ongoing Support', 'd' => 'We track your progress and adjust as you heal — you\'re never in this alone.'],
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
    <section id="faq" class="py-24 bg-[#FAFAFF] relative overflow-hidden">
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
                        ['q' => 'How do I know if it\'s depression or just a rough patch?', 'a' => 'If symptoms like low mood, fatigue, or loss of interest have lasted most days for two weeks or more — and they\'re affecting your work, relationships, or daily life — it\'s worth talking to a professional. A free consultation is a low-pressure first step to find out.'],
                        ['q' => 'What if antidepressants haven\'t worked for me before?', 'a' => 'You\'re not out of options. Treatment-resistant depression is one of our areas of focus. Therapies like Neurostar® TMS and Spravato® work differently than traditional medication and can help many people who haven\'t found relief elsewhere.'],
                        ['q' => 'Is TMS therapy painful or does it require sedation?', 'a' => 'No. Neurostar® TMS is non-invasive and requires no sedation. You stay fully awake and alert, sessions last about 20–40 minutes, and most people return to their normal day immediately afterward.'],
                        ['q' => 'Do you accept insurance?', 'a' => 'We accept most major insurance plans, and many depression treatments — including TMS — are covered. During your consultation we\'ll help you verify your specific benefits.'],
                        ['q' => 'How soon will I start to feel better?', 'a' => 'Every person and treatment is different. Some options work gradually over several weeks, while others act more rapidly. We\'ll set clear expectations for your specific plan and track your progress closely.'],
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
    <section class="py-24 bg-white relative overflow-hidden">
        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-5xl mx-auto bg-primary rounded-[2.5rem] overflow-hidden shadow-2xl relative fade-in-section">
                <!-- Decorative blobs -->
                <div class="absolute top-0 right-0 w-[400px] h-[400px] bg-accent rounded-full blur-[120px] opacity-25 translate-x-1/3 -translate-y-1/3 pointer-events-none"></div>
                <div class="absolute bottom-0 left-0 w-[300px] h-[300px] bg-accent-light rounded-full blur-[110px] opacity-20 -translate-x-1/3 translate-y-1/3 pointer-events-none"></div>

                <div class="relative z-10 px-8 md:px-16 py-16 text-center">
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 border border-white/20 text-white/80 text-xs font-bold uppercase tracking-widest mb-8">
                        <span class="w-1.5 h-1.5 rounded-full bg-green-400 animate-pulse"></span>
                        Accepting New Patients
                    </div>
                    <h2 class="text-4xl md:text-5xl text-white mb-5 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                        Relief Is Closer<br>Than You Think
                    </h2>
                    <p class="text-white/70 text-lg max-w-xl mx-auto mb-10">
                        Take the first step today with a free, confidential 15-minute consultation. Let's find the path that works for you.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                        <a href="#contact" data-condition="Depression" class="condition-card px-8 py-4 bg-accent text-white rounded-full font-bold hover:bg-accent-light hover:-translate-y-0.5 hover:shadow-[0_0_40px_rgba(140,120,190,0.5)] transition-all duration-300">
                            Book Your Free Consultation
                        </a>
                        <a href="tel:+16124298280" class="px-8 py-4 bg-white/10 border border-white/25 text-white rounded-full font-bold hover:bg-white/20 transition-all duration-300 flex items-center gap-2">
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
