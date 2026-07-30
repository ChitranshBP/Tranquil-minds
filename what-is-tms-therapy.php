<?php
$page_title       = "What Is TMS Therapy? | Tranquil Minds Mental Health";
$page_description = "A complete guide to TMS therapy — what it is, how it works, TMS vs. medication, safety and side effects, the clinical evidence, and the treatment schedule. Non-drug, FDA-cleared care in Monticello, MN.";
$hero_title       = 'What Is<br><span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-white to-white/50">TMS Therapy?</span>';
$hero_subtitle    = 'A clear, complete guide to Transcranial Magnetic Stimulation — the non-drug, FDA-cleared therapy that treats depression at its source in the brain.';
$hero_badge       = 'The Complete Guide';
$hero_cta1_text   = 'Book a Free Consultation';
$hero_cta1_link   = '#contact';
$hero_cta2_text   = 'How It Works';
$hero_cta2_link   = '#how';
?>
<?php include 'header.php'; ?>
<?php include 'hero-service.php'; ?>

    <!-- ===== 1. WHAT IS TMS ===== -->
    <section id="what" class="py-16 bg-[#FAFAFF] relative overflow-hidden">
        <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-accent/10 rounded-full blur-[140px] translate-x-1/3 -translate-y-1/4 pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-primary/8 rounded-full blur-[120px] -translate-x-1/3 translate-y-1/3 pointer-events-none"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="grid lg:grid-cols-2 gap-14 lg:gap-20 items-center">
                <div class="fade-in-section">
                    <div class="flex items-center gap-3 mb-6">
                        <span class="h-px w-12 bg-primary/40"></span>
                        <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">The Basics</span>
                    </div>
                    <h2 class="text-4xl md:text-5xl text-primary mb-6 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                        Treating the Brain,<br>Not Just the Symptoms
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-4">
                        TMS — Transcranial Magnetic Stimulation — is a non-invasive, non-drug therapy that uses focused magnetic pulses (similar to those used in an MRI) to stimulate the underactive nerve cells in the mood-regulating regions of the brain.
                    </p>
                    <p class="text-gray-600 text-lg leading-relaxed mb-8">
                        Depression is a biological condition. Rather than sending medication through your whole body, TMS works precisely where it's needed — gently "waking up" the brain circuits behind depression, with lasting effects.
                    </p>
                    <div class="space-y-3">
                        <?php foreach ([
                            'Non-invasive — no surgery, no anesthesia, no sedation',
                            'Non-drug — none of the body-wide side effects of medication',
                            'FDA-cleared for depression, anxious depression, and OCD',
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
                    <div class="relative rounded-[2.5rem] overflow-hidden shadow-[0_40px_80px_-24px_rgba(42,22,63,0.35)] min-h-[440px]">
                        <img src="assets/neurostar/neurostar-2.webp" alt="TMS therapy targeting the brain regions that regulate mood" class="absolute inset-0 w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/60 via-transparent to-transparent pointer-events-none"></div>
                    </div>
                    <div class="absolute -bottom-6 -left-4 md:-left-8 bg-white rounded-2xl shadow-2xl border border-primary/5 px-5 py-4 flex items-center gap-4 max-w-[80%]">
                        <div class="w-11 h-11 rounded-xl bg-accent flex items-center justify-center text-white flex-shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </div>
                        <div>
                            <div class="text-primary font-bold text-sm">Magnetic, Not Medication</div>
                            <div class="text-gray-400 text-xs">Precise, targeted stimulation</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== 2. HOW TMS WORKS ===== -->
    <section id="how" class="py-16 bg-white relative overflow-hidden">
        <div class="absolute top-0 left-0 w-[500px] h-[500px] bg-accent/6 rounded-full blur-[130px] -translate-x-1/3 -translate-y-1/3 pointer-events-none"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="grid lg:grid-cols-2 gap-14 lg:gap-20 items-center mb-14">
                <div class="fade-in-section relative order-2 lg:order-1">
                    <div class="relative rounded-[2.5rem] overflow-hidden shadow-[0_40px_80px_-24px_rgba(42,22,63,0.35)] min-h-[400px]">
                        <img src="assets/neurostar/neurostar-1.webp" alt="A patient comfortably receiving TMS therapy" class="absolute inset-0 w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/50 via-transparent to-transparent pointer-events-none"></div>
                    </div>
                </div>
                <div class="fade-in-section order-1 lg:order-2">
                    <div class="flex items-center gap-3 mb-6">
                        <span class="h-px w-12 bg-primary/40"></span>
                        <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">The Science</span>
                    </div>
                    <h2 class="text-4xl md:text-5xl text-primary mb-6 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                        How TMS Works
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-4">
                        In depression, certain brain circuits that regulate mood become underactive. TMS delivers gentle, focused magnetic pulses to these areas, stimulating the neurons and encouraging them to fire again — like physical therapy for the brain.
                    </p>
                    <p class="text-gray-600 text-lg leading-relaxed">
                        Over a course of treatment, this repeated stimulation helps restore healthier connectivity and improves the brain's ability to regulate mood — an effect that often lasts well beyond the treatment itself.
                    </p>
                </div>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <?php
                $steps = [
                    ['n' => '01', 't' => 'Brain Mapping', 'd' => 'We precisely locate your optimal treatment site using a personalized motor-threshold protocol.'],
                    ['n' => '02', 't' => 'Coil Placement', 'd' => 'A magnetic coil is positioned comfortably over the left prefrontal cortex — the mood-regulating region.'],
                    ['n' => '03', 't' => 'Magnetic Pulses', 'd' => 'Gentle, focused pulses stimulate underactive neurons, reactivating dormant connections.'],
                    ['n' => '04', 't' => 'Neural Rewiring', 'd' => 'Repeated sessions restore healthier connectivity and lasting mood regulation.'],
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

    <!-- ===== 3. TMS VS MEDICATION ===== -->
    <section id="vs" class="py-16 bg-[#FAFAFF] relative overflow-hidden">
        <div class="absolute bottom-0 right-0 w-[600px] h-[600px] bg-accent/8 rounded-full blur-[150px] translate-x-1/4 translate-y-1/4 pointer-events-none"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center max-w-2xl mx-auto mb-10 fade-in-section">
                <div class="flex items-center justify-center gap-3 mb-6">
                    <span class="h-px w-12 bg-primary/40"></span>
                    <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">A Different Approach</span>
                    <span class="h-px w-12 bg-primary/40"></span>
                </div>
                <h2 class="text-4xl md:text-5xl text-primary mb-5 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                    TMS vs. Medication
                </h2>
                <p class="text-gray-500 text-lg">
                    Both can help — they simply work differently. For many people, TMS succeeds where medication couldn't, and the two can even complement each other.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-6 max-w-5xl mx-auto">
                <!-- TMS -->
                <div class="bg-primary rounded-[2rem] p-8 md:p-10 text-white relative overflow-hidden fade-in-section">
                    <div class="absolute top-0 right-0 w-56 h-56 bg-accent/25 rounded-full blur-3xl pointer-events-none"></div>
                    <div class="relative z-10">
                        <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-white/10 border border-white/20 text-white/80 text-[11px] font-bold uppercase tracking-widest mb-5">Neurostar® TMS</div>
                        <h3 class="text-2xl font-bold mb-6" style="font-family: 'Bauhaus Soft', cursive;">Targeted &amp; Drug-Free</h3>
                        <ul class="space-y-4">
                            <?php foreach ([
                                'Works directly on the brain circuits behind depression',
                                'No systemic side effects — no weight gain, drowsiness, or sexual dysfunction',
                                'No daily pill to remember',
                                'Effects are often long-lasting',
                                'Non-invasive, outpatient, and no downtime',
                            ] as $pt): ?>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-accent-light flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                                <span class="text-white/85 text-base leading-relaxed"><?php echo $pt; ?></span>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <!-- Medication -->
                <div class="bg-white rounded-[2rem] p-8 md:p-10 border border-primary/10 shadow-sm fade-in-section">
                    <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-primary/5 text-primary/70 text-[11px] font-bold uppercase tracking-widest mb-5">Antidepressant Medication</div>
                    <h3 class="text-2xl font-bold text-primary mb-6" style="font-family: 'Bauhaus Soft', cursive;">Systemic &amp; Widely Used</h3>
                    <ul class="space-y-4">
                        <?php foreach ([
                            'Travels through the whole body to affect brain chemistry',
                            'Can cause side effects like weight gain, fatigue, or nausea',
                            'Requires consistent daily dosing',
                            'Often involves trial and error to find the right fit',
                            'Effective and the right choice for many — and can pair with TMS',
                        ] as $pt): ?>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-primary/40 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <span class="text-gray-600 text-base leading-relaxed"><?php echo $pt; ?></span>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <p class="text-center text-gray-400 text-sm mt-8 max-w-2xl mx-auto">TMS is not a replacement for medication in every case. We'll help you understand which approach — or combination — is right for you.</p>
        </div>
    </section>

    <!-- ===== 4. SAFETY & SIDE EFFECTS ===== -->
    <section id="safety" class="py-16 bg-white relative overflow-hidden">
        <div class="container mx-auto px-6 relative z-10">
            <div class="grid lg:grid-cols-2 gap-14 lg:gap-20 items-center">
                <div class="fade-in-section">
                    <div class="flex items-center gap-3 mb-6">
                        <span class="h-px w-12 bg-primary/40"></span>
                        <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">Is It Safe?</span>
                    </div>
                    <h2 class="text-4xl md:text-5xl text-primary mb-6 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                        Safety &amp; Side Effects
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-8">
                        TMS is very well tolerated and has been used in millions of treatments. Because it doesn't circulate through the body like medication, it avoids the systemic side effects patients often worry about.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-start gap-4 bg-[#FAFAFF] border border-primary/8 rounded-2xl px-5 py-4">
                            <div class="w-10 h-10 rounded-xl bg-accent/10 flex items-center justify-center text-accent flex-shrink-0"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg></div>
                            <div>
                                <h3 class="font-bold text-primary text-base mb-1">Most Common</h3>
                                <p class="text-gray-500 text-sm leading-relaxed">Mild scalp discomfort or a light headache during the first week — which typically fades quickly.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 bg-[#FAFAFF] border border-primary/8 rounded-2xl px-5 py-4">
                            <div class="w-10 h-10 rounded-xl bg-accent/10 flex items-center justify-center text-accent flex-shrink-0"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg></div>
                            <div>
                                <h3 class="font-bold text-primary text-base mb-1">No Systemic Effects</h3>
                                <p class="text-gray-500 text-sm leading-relaxed">Unlike medication, no weight gain, drowsiness, nausea, or sexual side effects.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 bg-[#FAFAFF] border border-primary/8 rounded-2xl px-5 py-4">
                            <div class="w-10 h-10 rounded-xl bg-accent/10 flex items-center justify-center text-accent flex-shrink-0"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01M5.07 19H18.93a2 2 0 001.72-3L13.72 4a2 2 0 00-3.44 0L3.35 16a2 2 0 001.72 3z"></path></svg></div>
                            <div>
                                <h3 class="font-bold text-primary text-base mb-1">Rare Risks</h3>
                                <p class="text-gray-500 text-sm leading-relaxed">Seizures are a very rare risk (well under 0.1%). TMS isn't suitable for those with non-removable metal implants in or near the head — we screen carefully for safety.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fade-in-section relative">
                    <div class="relative rounded-[2.5rem] overflow-hidden shadow-[0_40px_80px_-24px_rgba(42,22,63,0.35)] min-h-[440px] bg-cream">
                        <img src="landing/assets/neurostar-device/NeuroStar%20Side%20View.png" alt="The NeuroStar TMS device used for safe, precise treatment" class="absolute inset-0 w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/30 via-transparent to-transparent pointer-events-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== 5. CLINICAL EVIDENCE ===== -->
    <section id="evidence" class="py-16 bg-[#2A163F] relative overflow-hidden">
        <div class="absolute top-0 right-0 w-[700px] h-[700px] bg-accent rounded-full blur-[200px] opacity-10 translate-x-1/2 -translate-y-1/3 pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-primary rounded-full blur-[150px] opacity-30 -translate-x-1/3 translate-y-1/3 pointer-events-none"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center max-w-2xl mx-auto mb-12 fade-in-section">
                <div class="flex items-center justify-center gap-3 mb-6">
                    <span class="h-px w-12 bg-white/20"></span>
                    <span class="text-white/40 font-bold tracking-widest uppercase text-xs">The Proof</span>
                    <span class="h-px w-12 bg-white/20"></span>
                </div>
                <h2 class="text-4xl md:text-5xl text-white mb-5 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                    Clinical Evidence &amp; Research
                </h2>
                <p class="text-white/60 text-lg">
                    TMS is backed by extensive research and millions of real-world treatments.
                </p>
            </div>

            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 text-center mb-10 fade-in-section">
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

            <div class="grid sm:grid-cols-3 gap-6 max-w-5xl mx-auto fade-in-section">
                <?php
                $research = [
                    ['t' => 'Decades of Study', 'd' => 'TMS has been researched for years and refined into today\'s precise, effective protocols.'],
                    ['t' => 'FDA-Cleared', 'd' => 'Cleared for major depression, anxious depression, OCD, and adolescent depression (15–21).'],
                    ['t' => 'Real-World Results', 'd' => 'Millions of treatments show meaningful, lasting relief for people with hard-to-treat depression.'],
                ];
                foreach ($research as $r): ?>
                <div class="bg-white/[0.04] border border-white/10 rounded-[1.5rem] p-6">
                    <div class="w-11 h-11 rounded-xl bg-white/10 flex items-center justify-center text-accent mb-4"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg></div>
                    <h3 class="text-white font-bold text-lg mb-2"><?php echo $r['t']; ?></h3>
                    <p class="text-white/50 text-sm leading-relaxed"><?php echo $r['d']; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
            <p class="text-center text-white/40 text-xs mt-8 max-w-2xl mx-auto">Efficacy figures reflect patients completing a full course of NeuroStar treatment, as reported by NeuroStar clinical data. Individual results vary.</p>
        </div>
    </section>

    <!-- ===== 6. TREATMENT SCHEDULE & TIMELINE ===== -->
    <section id="timeline" class="py-16 bg-white relative overflow-hidden">
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-primary/6 rounded-full blur-[140px] -translate-x-1/3 translate-y-1/3 pointer-events-none"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="grid lg:grid-cols-2 gap-14 lg:gap-20 items-center">
                <!-- Timeline -->
                <div class="fade-in-section order-2 lg:order-1">
                    <div class="flex items-center gap-3 mb-6">
                        <span class="h-px w-12 bg-primary/40"></span>
                        <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">What to Expect</span>
                    </div>
                    <h2 class="text-4xl md:text-5xl text-primary mb-8 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                        Treatment Schedule<br>&amp; Timeline
                    </h2>
                    <div class="relative pl-8">
                        <div class="absolute left-[9px] top-2 bottom-2 w-0.5 bg-accent/20"></div>
                        <?php
                        $timeline = [
                            ['t' => 'Free Consultation', 'd' => 'We review your history and goals to confirm TMS is right for you.'],
                            ['t' => 'Brain Mapping (Session 1)', 'd' => 'Your first visit personalizes the treatment to your brain.'],
                            ['t' => 'Weeks 1–6: Daily Sessions', 'd' => 'About 36 sessions total — roughly 5 days a week, each around 19 minutes.'],
                            ['t' => 'Tapering Phase', 'd' => 'Sessions gradually reduce over the final few weeks.'],
                            ['t' => 'Lasting Relief', 'd' => 'Because TMS changes brain function, results are often durable long after treatment.'],
                        ];
                        foreach ($timeline as $tl): ?>
                        <div class="relative mb-7 last:mb-0">
                            <div class="absolute -left-8 top-1 w-5 h-5 rounded-full bg-accent border-4 border-white shadow"></div>
                            <h3 class="text-lg font-bold text-primary mb-1"><?php echo $tl['t']; ?></h3>
                            <p class="text-gray-500 text-sm leading-relaxed"><?php echo $tl['d']; ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <!-- Image -->
                <div class="fade-in-section relative order-1 lg:order-2">
                    <div class="relative rounded-[2.5rem] overflow-hidden shadow-[0_40px_80px_-24px_rgba(42,22,63,0.35)] min-h-[440px]">
                        <img src="assets/neurostar/neurostar-equipment.webp" alt="The NeuroStar TMS treatment chair and equipment" class="absolute inset-0 w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/50 via-transparent to-transparent pointer-events-none"></div>
                        <div class="absolute bottom-6 left-6 right-6">
                            <div class="bg-white/15 backdrop-blur-md border border-white/25 rounded-2xl px-5 py-4">
                                <div class="text-white/70 text-[10px] font-bold uppercase tracking-widest mb-1">Each Session</div>
                                <div class="text-white font-semibold text-sm">~19 minutes · fully awake · drive yourself home</div>
                            </div>
                        </div>
                    </div>
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
                        <h2 class="text-3xl md:text-4xl text-white mb-2 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">Curious If TMS Could Help?</h2>
                        <p class="text-white/70 text-base md:text-lg">Start with a free, confidential 15-minute consultation — we'll answer every question.</p>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-4 flex-shrink-0">
                        <a href="#contact" class="px-7 py-3.5 bg-accent text-white rounded-full font-bold hover:bg-accent-light hover:-translate-y-0.5 hover:shadow-[0_0_40px_rgba(140,120,190,0.5)] transition-all duration-300 text-center whitespace-nowrap">Book Free Consultation</a>
                        <a href="neurostar-tms.php" class="px-7 py-3.5 bg-white/10 border border-white/25 text-white rounded-full font-bold hover:bg-white/20 transition-all duration-300 flex items-center justify-center gap-2 whitespace-nowrap">Explore Neurostar® TMS</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>html { scroll-padding-top: 6rem; } details summary::-webkit-details-marker { display: none; }</style>

<?php include 'footer.php'; ?>
