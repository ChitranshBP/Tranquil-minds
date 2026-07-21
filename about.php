<?php
$page_title = "About Us | Tranquil Minds Mental Health";
$page_description = "Learn about Tranquil Minds Mental Health — our mission, our compassionate team, and our commitment to advanced, science-backed mental wellness care in Monticello, MN.";
$hero_title = 'Where Science Meets <br><span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-white to-white/50">Compassion.</span>';
$hero_subtitle = 'We believe healing is possible. Our team combines cutting-edge neuroscience with deep human care to help every patient reclaim their life.';
$hero_badge = 'Our Story & Team';
$hero_cta1_text = 'Meet Our Providers';
$hero_cta1_link = '#team';
$hero_cta2_text = 'Our Mission';
$hero_cta2_link = '#mission';
?>
<?php include 'header.php'; ?>
<?php include 'hero-service.php'; ?>

    <!-- ===== MISSION SECTION ===== -->
    <section id="mission" class="py-24 bg-[#FAFAFF] relative overflow-hidden">
        <!-- Decorative blobs -->
        <div class="absolute top-0 left-0 w-[700px] h-[700px] bg-accent/10 rounded-full blur-[140px] -translate-x-1/2 -translate-y-1/2 pointer-events-none"></div>
        <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-primary/8 rounded-full blur-[120px] translate-x-1/3 translate-y-1/3 pointer-events-none"></div>

        <div class="container mx-auto px-6 relative z-10">
            <!-- Section label -->
            <div class="flex items-center gap-3 mb-6 fade-in-section">
                <span class="h-px w-12 bg-primary/40"></span>
                <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">Our Purpose</span>
            </div>

            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <!-- Left: Text -->
                <div class="fade-in-section">
                    <h2 class="text-5xl md:text-6xl text-primary mb-8 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                        A Sanctuary for<br>Mental Wellness
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-6">
                        Tranquil Minds Mental Health was founded on a single, unwavering belief: that every person deserves access to compassionate, evidence-based care tailored to their unique neurobiology.
                    </p>
                    <p class="text-gray-600 text-lg leading-relaxed mb-8">
                        We combine the latest breakthroughs in neuroscience — including Neurostar® TMS, Ketamine, and precision psychiatry — with the kind of human connection that makes healing truly possible.
                    </p>

                    <!-- Mission pillars -->
                    <div class="space-y-4">
                        <?php
                        $pillars = [
                            ['icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z', 'label' => 'Science-First', 'desc' => 'Every treatment is rooted in peer-reviewed evidence.'],
                            ['icon' => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z', 'label' => 'Human-Centered', 'desc' => 'We treat the whole person, not just the diagnosis.'],
                            ['icon' => 'M13 10V3L4 14h7v7l9-11h-7z', 'label' => 'Innovative', 'desc' => 'Pioneering advanced therapies unavailable elsewhere.'],
                        ];
                        foreach ($pillars as $p): ?>
                        <div class="flex items-start gap-4 p-4 rounded-2xl hover:bg-primary/5 transition-colors group">
                            <div class="w-10 h-10 rounded-xl bg-accent/10 flex items-center justify-center text-accent flex-shrink-0 group-hover:bg-accent group-hover:text-white transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?php echo $p['icon']; ?>"></path>
                                </svg>
                            </div>
                            <div>
                                <div class="font-bold text-primary text-base"><?php echo $p['label']; ?></div>
                                <div class="text-gray-500 text-sm"><?php echo $p['desc']; ?></div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Right: Stats mosaic -->
                <div class="fade-in-section grid grid-cols-2 gap-4">
                    <!-- Big stat card -->
                    <div class="col-span-2 bg-primary rounded-[2rem] p-8 relative overflow-hidden group">
                        <div class="absolute top-0 right-0 w-[300px] h-[300px] bg-accent rounded-full blur-[100px] opacity-20 translate-x-1/2 -translate-y-1/2 group-hover:opacity-30 transition-opacity"></div>
                        <div class="relative z-10">
                            <div class="text-6xl md:text-7xl font-bold text-white mb-2" style="font-family: 'Bauhaus Soft', cursive;" data-counter="15" data-suffix="+">15+</div>
                            <div class="text-accent font-semibold text-lg mb-1">Years of Experience</div>
                            <div class="text-white/60 text-sm leading-relaxed">Serving the Monticello community with advanced psychiatric and neurological care.</div>
                        </div>
                    </div>
                    <!-- Small stat 1 -->
                    <div class="bg-accent/10 border border-accent/20 rounded-[1.5rem] p-6 flex flex-col justify-between hover:bg-accent/15 transition-colors">
                        <div class="w-8 h-8 rounded-full bg-accent/20 flex items-center justify-center text-accent mb-4">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        </div>
                        <div class="text-4xl font-bold text-primary mb-1" style="font-family: 'Bauhaus Soft', cursive;" data-counter="2000" data-suffix="+">2,000+</div>
                        <div class="text-gray-500 text-sm">Patients Helped</div>
                    </div>
                    <!-- Small stat 2 -->
                    <div class="bg-[#2A163F] rounded-[1.5rem] p-6 flex flex-col justify-between">
                        <div class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center text-white/70 mb-4">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
                        </div>
                        <div class="text-4xl font-bold text-white mb-1" style="font-family: 'Bauhaus Soft', cursive;" data-counter="98" data-suffix="%">98%</div>
                        <div class="text-white/50 text-sm">Patient Satisfaction</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== NEUROSTAR TMS SECTION ===== -->
    <section id="neurostar" class="py-24 bg-[#2A163F] relative overflow-hidden">
        <!-- Background glows -->
        <div class="absolute top-0 right-0 w-[700px] h-[700px] bg-accent rounded-full blur-[200px] opacity-10 translate-x-1/2 -translate-y-1/3 pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-primary rounded-full blur-[150px] opacity-30 -translate-x-1/3 translate-y-1/3 pointer-events-none"></div>
        <!-- Noise texture overlay -->
        <div class="absolute inset-0 opacity-[0.03] bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0naHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmcnIHdpZHRoPSc0MDAnIGhlaWdodD0nNDAwJz48ZmlsdGVyIGlkPSdub2lzZSc+PGZlVHVyYnVsZW5jZSB0eXBlPSdmcmFjdGFsTm9pc2UnIGJhc2VGcmVxdWVuY3k9JzAuNjUnIG51bW9jdGF2ZXM9JzMnIHN0aXRjaFRpbGVzPSdzdGl0Y2gnLz48L2ZpbHRlcj48cmVjdCB3aWR0aD0nMTAwJScgaGVpZ2h0PScxMDAlJyBmaWx0ZXI9J3VybCgjbm9pc2UpJyBvcGFjaXR5PScwLjQnLz48L3N2Zz4=')] pointer-events-none"></div>

        <div class="container mx-auto px-6 relative z-10">

            <!-- Section label -->
            <div class="flex items-center gap-3 mb-6 fade-in-section">
                <span class="h-px w-12 bg-white/20"></span>
                <span class="text-white/40 font-bold tracking-widest uppercase text-xs">Our Signature Technology</span>
            </div>

            <!-- Main two-column grid -->
            <div class="grid lg:grid-cols-2 gap-16 items-center mb-20">

                <!-- Left: Content -->
                <div class="fade-in-section">
                    <!-- Badge -->
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/5 border border-white/15 backdrop-blur-sm mb-8">
                        <svg class="w-4 h-4 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        <span class="text-white/70 text-xs font-bold uppercase tracking-widest">FDA-Cleared &amp; Clinically Proven</span>
                    </div>

                    <h2 class="text-5xl md:text-6xl text-white mb-6 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                        Neurostar® TMS<br><span class="text-accent">Therapy</span>
                    </h2>
                    <p class="text-white/60 text-lg leading-relaxed mb-6">
                        Depression is a biological condition that physically alters brain function. Neurostar® Transcranial Magnetic Stimulation targets the exact neural circuits involved in mood regulation — directly at the source, without medication.
                    </p>
                    <p class="text-white/60 text-lg leading-relaxed mb-10">
                        As a <span class="text-accent font-semibold">certified Neurostar® provider</span>, Tranquil Minds is one of the few clinics in Minnesota offering this precision neurostimulation therapy to patients who haven't found relief through traditional treatments.
                    </p>

                    <!-- Feature pills -->
                    <div class="flex flex-wrap gap-3 mb-10">
                        <?php
                        $pills = [
                            'Non-Invasive', 'Drug-Free Option', 'No Sedation Required',
                            'Outpatient Treatment', 'In-Chair in 20–40 min', 'Long-Lasting Results',
                        ];
                        foreach ($pills as $pill): ?>
                        <span class="px-4 py-2 rounded-full bg-white/5 border border-white/10 text-white/70 text-sm font-medium hover:bg-accent/20 hover:border-accent/40 hover:text-white transition-all duration-200"><?php echo $pill; ?></span>
                        <?php endforeach; ?>
                    </div>

                    <!-- Stat row -->
                    <div class="flex flex-wrap gap-8 pt-8 border-t border-white/10">
                        <div>
                            <div class="text-3xl font-bold text-white mb-1" style="font-family: 'Bauhaus Soft', cursive;" data-counter="83" data-suffix="%">83%</div>
                            <div class="text-white/40 text-xs uppercase tracking-widest">Response Rate</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-white mb-1" style="font-family: 'Bauhaus Soft', cursive;" data-counter="62" data-suffix="%">62%</div>
                            <div class="text-white/40 text-xs uppercase tracking-widest">Full Remission</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-white mb-1" style="font-family: 'Bauhaus Soft', cursive;">36+</div>
                            <div class="text-white/40 text-xs uppercase tracking-widest">TMS Sessions Available</div>
                        </div>
                    </div>
                </div>

                <!-- Right: Image stack -->
                <div class="fade-in-section relative">
                    <!-- Main image: brain targeting -->
                    <div class="relative rounded-[2rem] overflow-hidden shadow-[0_40px_80px_-20px_rgba(0,0,0,0.6)]">
                        <img
                            src="assets/neurostar/neurostar-2.webp"
                            alt="Neurostar® TMS targeting brain regions for depression treatment"
                            class="w-full h-auto block"
                        />
                        <!-- Gradient overlay bottom -->
                        <div class="absolute inset-0 bg-gradient-to-t from-[#2A163F]/80 via-transparent to-transparent pointer-events-none"></div>
                        <!-- Floating label -->
                        <div class="absolute bottom-6 left-6 right-6">
                            <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl px-5 py-4">
                                <div class="text-white/40 text-[10px] font-bold uppercase tracking-widest mb-1">Target Zone</div>
                                <div class="text-white font-semibold text-sm">Left Dorsolateral Prefrontal Cortex (DLPFC)</div>
                            </div>
                        </div>
                    </div>

                    <!-- Floating equipment card -->
                    <div class="absolute -bottom-8 -right-4 md:-right-8 w-40 md:w-52 bg-white rounded-[1.5rem] shadow-2xl overflow-hidden border border-primary/10 rotate-3 hover:rotate-0 transition-transform duration-500">
                        <img src="assets/neurostar/neurostar-equipment.webp" alt="Neurostar® TMS Equipment" class="w-full h-auto block" />
                        <div class="px-4 py-3 bg-white">
                            <div class="text-[10px] text-gray-400 font-bold uppercase tracking-widest">Equipment</div>
                            <div class="text-primary text-xs font-bold">Neurostar® Advanced</div>
                        </div>
                    </div>

                    <!-- Certification badge -->
                    <div class="absolute -top-4 -left-4 md:-left-8 bg-accent rounded-2xl px-4 py-3 shadow-xl rotate-[-3deg] hover:rotate-0 transition-transform duration-500">
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <div>
                                <div class="text-white font-bold text-xs">Certified</div>
                                <div class="text-white/70 text-[10px]">Neurostar® Provider</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- How It Works strip -->
            <div class="border-t border-white/10 pt-16 fade-in-section">
                <div class="text-center mb-12">
                    <h3 class="text-3xl md:text-4xl text-white mb-3" style="font-family: 'Bauhaus Soft', cursive;">How It Works</h3>
                    <p class="text-white/40 text-sm max-w-xl mx-auto">A typical TMS treatment course runs 5 days a week for 4–6 weeks, with each session lasting just 20–40 minutes.</p>
                </div>

                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <?php
                    $steps = [
                        ['num' => '01', 'title' => 'Mapping Session', 'desc' => 'We precisely locate the optimal treatment site on your scalp using our motor threshold protocol.', 'icon' => 'M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7'],
                        ['num' => '02', 'title' => 'Coil Placement', 'desc' => 'The Neurostar® coil is positioned over the left prefrontal cortex, the region regulating mood.', 'icon' => 'M15 12a3 3 0 11-6 0 3 3 0 016 0z M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z'],
                        ['num' => '03', 'title' => 'Magnetic Pulses', 'desc' => 'Gentle, focused magnetic pulses stimulate underactive neurons — like physical therapy for the brain.', 'icon' => 'M13 10V3L4 14h7v7l9-11h-7z'],
                        ['num' => '04', 'title' => 'Neural Rewiring', 'desc' => 'Over time, repeated stimulation restores healthy connectivity and improves mood regulation long-term.', 'icon' => 'M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z'],
                    ];
                    foreach ($steps as $i => $step): ?>
                    <div class="relative bg-white/[0.04] border border-white/10 rounded-[1.5rem] p-6 hover:bg-white/[0.07] hover:border-accent/30 transition-all duration-300 group">
                        <!-- Step number watermark -->
                        <div class="absolute top-4 right-5 text-5xl font-bold text-white/[0.06] group-hover:text-white/10 transition-colors select-none" style="font-family: 'Bauhaus Soft', cursive;"><?php echo $step['num']; ?></div>
                        <!-- Icon -->
                        <div class="w-11 h-11 rounded-xl bg-accent/10 flex items-center justify-center text-accent mb-5 group-hover:bg-accent group-hover:text-white transition-all duration-300 relative z-10">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?php echo $step['icon']; ?>"></path>
                            </svg>
                        </div>
                        <h4 class="text-base font-bold text-white mb-2 relative z-10"><?php echo $step['title']; ?></h4>
                        <p class="text-white/45 text-sm leading-relaxed relative z-10"><?php echo $step['desc']; ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>

                <!-- CTA -->
                <div class="text-center mt-12">
                    <a href="#contact" class="inline-flex items-center gap-3 px-8 py-4 bg-accent text-white rounded-full font-bold hover:bg-accent-light hover:-translate-y-0.5 hover:shadow-[0_0_40px_rgba(140,120,190,0.5)] transition-all duration-300">
                        Start Your TMS Journey
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </a>
                    <p class="text-white/30 text-xs mt-4">Most insurance plans accepted · Free 15-min consultation</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== STORY TIMELINE ===== -->
    <section id="story" class="py-24 bg-white relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-primary/3 to-transparent pointer-events-none"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center mb-16 fade-in-section">
                <div class="flex items-center justify-center gap-3 mb-6">
                    <span class="h-px w-12 bg-primary/40"></span>
                    <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">Our Journey</span>
                    <span class="h-px w-12 bg-primary/40"></span>
                </div>
                <h2 class="text-5xl md:text-6xl text-primary mb-6 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                    The Tranquil Minds Story
                </h2>
                <p class="text-gray-500 text-lg max-w-2xl mx-auto leading-relaxed">
                    From a small community clinic to a nationally recognized center of mental health innovation.
                </p>
            </div>

            <!-- Timeline -->
            <div class="relative max-w-4xl mx-auto">
                <!-- Vertical line -->
                <div class="absolute left-1/2 top-0 bottom-0 w-px bg-gradient-to-b from-primary/5 via-primary/30 to-primary/5 -translate-x-1/2 hidden md:block"></div>

                <?php
                $timeline = [
                    ['year' => '2009', 'title' => 'Founded with a Vision', 'desc' => 'Dr. Rosana Chen opened Tranquil Minds with a commitment to individualized, evidence-based psychiatric care in the heart of Monticello.', 'side' => 'left'],
                    ['year' => '2015', 'title' => 'Pioneering TMS Therapy', 'desc' => 'We became one of the first clinics in the region to offer Neurostar® TMS therapy, giving hope to patients who had exhausted other options.', 'side' => 'right'],
                    ['year' => '2020', 'title' => 'Expanding Our Reach', 'desc' => 'Launched telehealth services and expanded our team, ensuring access to care for patients across Minnesota during unprecedented times.', 'side' => 'left'],
                    ['year' => '2023', 'title' => 'Ketamine & Spravato', 'desc' => 'Introduced cutting-edge esketamine (Spravato) and IV ketamine protocols for treatment-resistant depression, anxiety, and PTSD.', 'side' => 'right'],
                    ['year' => '2026', 'title' => 'The Future of Healing', 'desc' => 'Continuing to push the frontier of mental health care with precision psychiatry, advanced neuroimaging, and personalized treatment programs.', 'side' => 'left'],
                ];
                foreach ($timeline as $i => $item): ?>
                <div class="relative flex items-center mb-12 md:mb-16 fade-in-section <?php echo $item['side'] === 'right' ? 'md:flex-row-reverse' : ''; ?>">
                    <!-- Content card -->
                    <div class="w-full md:w-[calc(50%-2rem)] <?php echo $item['side'] === 'right' ? 'md:ml-auto' : 'md:mr-auto'; ?>">
                        <div class="bg-white border border-primary/10 rounded-[1.5rem] p-6 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-300 group">
                            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-accent/10 text-accent text-xs font-bold mb-4">
                                <span class="w-1.5 h-1.5 rounded-full bg-accent"></span>
                                <?php echo $item['year']; ?>
                            </div>
                            <h3 class="text-xl font-bold text-primary mb-2 group-hover:text-accent transition-colors"><?php echo $item['title']; ?></h3>
                            <p class="text-gray-500 text-sm leading-relaxed"><?php echo $item['desc']; ?></p>
                        </div>
                    </div>
                    <!-- Center dot -->
                    <div class="hidden md:flex absolute left-1/2 -translate-x-1/2 w-4 h-4 rounded-full bg-primary border-4 border-white shadow-md z-10"></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ===== TEAM SECTION ===== -->
    <section id="team" class="py-24 bg-[#F5F3FF] relative overflow-hidden">
        <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-accent/15 rounded-full blur-[130px] translate-x-1/3 -translate-y-1/2 pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-primary/10 rounded-full blur-[100px] -translate-x-1/3 translate-y-1/3 pointer-events-none"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center mb-16 fade-in-section">
                <div class="flex items-center justify-center gap-3 mb-6">
                    <span class="h-px w-12 bg-primary/40"></span>
                    <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">The People Behind Your Care</span>
                    <span class="h-px w-12 bg-primary/40"></span>
                </div>
                <h2 class="text-5xl md:text-6xl text-primary mb-6 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                    Meet Our Expert Team
                </h2>
                <p class="text-gray-500 text-lg max-w-2xl mx-auto">
                    Board-certified clinicians, compassionate care coordinators, and dedicated support staff — all united by one goal: your wellbeing.
                </p>
            </div>

            <!-- Featured provider -->
            <div class="max-w-5xl mx-auto mb-16 fade-in-section">
                <div class="bg-white rounded-[2.5rem] overflow-hidden shadow-xl border border-primary/5 flex flex-col lg:flex-row">
                    <!-- Photo -->
                    <div class="lg:w-2/5 relative overflow-hidden min-h-[400px]">
                        <img
                            src="assets/rosana.png"
                            alt="Dr. Rosana Chen, Founder & Lead Psychiatrist"
                            class="absolute inset-0 w-full h-full object-cover object-top"
                        />
                        <!-- Overlay gradient -->
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/60 via-transparent to-transparent lg:bg-gradient-to-r lg:from-transparent lg:to-white/20"></div>
                        <!-- Badge -->
                        <div class="absolute bottom-6 left-6 lg:hidden">
                            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/20 backdrop-blur-md border border-white/30 text-white text-sm font-semibold">
                                <span class="w-2 h-2 rounded-full bg-accent animate-pulse"></span>
                                Accepting Patients
                            </div>
                        </div>
                    </div>
                    <!-- Info -->
                    <div class="lg:w-3/5 p-8 md:p-12 flex flex-col justify-center">
                        <div class="hidden lg:inline-flex items-center gap-2 px-4 py-2 rounded-full bg-accent/10 border border-accent/20 text-accent text-sm font-semibold mb-6 w-fit">
                            <span class="w-2 h-2 rounded-full bg-accent animate-pulse"></span>
                            Accepting New Patients
                        </div>
                        <h3 class="text-3xl md:text-4xl font-bold text-primary mb-1" style="font-family: 'Bauhaus Soft', cursive;">Dr. Rosana Chen</h3>
                        <p class="text-accent font-semibold text-lg mb-6">Founder & Lead Psychiatrist, MD, FAPA</p>
                        <p class="text-gray-600 leading-relaxed mb-6">
                            Dr. Chen is a board-certified psychiatrist with over 15 years of experience specializing in treatment-resistant depression, TMS therapy, and precision psychopharmacology. Her patient-first philosophy has transformed the lives of thousands across Minnesota.
                        </p>
                        <p class="text-gray-600 leading-relaxed mb-8">
                            A graduate of the University of Minnesota School of Medicine, she completed her residency at Mayo Clinic and holds a Fellowship in Transcranial Magnetic Stimulation (TMS) from Harvard Medical School.
                        </p>
                        <!-- Credentials -->
                        <div class="flex flex-wrap gap-3">
                            <?php
                            $credentials = ['Board-Certified Psychiatrist', 'TMS Fellowship — Harvard', 'FAPA Member', 'APA Member'];
                            foreach ($credentials as $cred): ?>
                            <span class="px-3 py-1.5 bg-primary/5 text-primary text-xs font-semibold rounded-full border border-primary/10"><?php echo $cred; ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Other team members -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-5xl mx-auto fade-in-section">
                <?php
                $team = [
                    ['name' => 'Sarah Mitchell', 'role' => 'Licensed Clinical Social Worker', 'initials' => 'SM', 'color' => 'from-violet-400 to-purple-600', 'specialties' => ['Trauma-Focused CBT', 'Grief Counseling', 'EMDR']],
                    ['name' => 'James Harlow', 'role' => 'Psychiatric Mental Health NP', 'initials' => 'JH', 'color' => 'from-indigo-400 to-blue-600', 'specialties' => ['Medication Management', 'Anxiety Disorders', 'ADHD']],
                    ['name' => 'Priya Nair', 'role' => 'TMS Coordinator & RN', 'initials' => 'PN', 'color' => 'from-fuchsia-400 to-pink-600', 'specialties' => ['Neurostar® TMS', 'Patient Education', 'Ketamine Protocol']],
                ];
                foreach ($team as $member): ?>
                <div class="bg-white rounded-[1.5rem] p-6 shadow-sm border border-primary/5 hover:shadow-md hover:-translate-y-1 transition-all duration-300 flex flex-col">
                    <!-- Avatar -->
                    <div class="w-16 h-16 rounded-2xl bg-gradient-to-br <?php echo $member['color']; ?> flex items-center justify-center text-white font-bold text-xl mb-4 shadow-lg">
                        <?php echo $member['initials']; ?>
                    </div>
                    <h4 class="text-lg font-bold text-primary mb-1"><?php echo $member['name']; ?></h4>
                    <p class="text-accent text-sm font-medium mb-4"><?php echo $member['role']; ?></p>
                    <div class="flex flex-wrap gap-2 mt-auto">
                        <?php foreach ($member['specialties'] as $s): ?>
                        <span class="px-2.5 py-1 bg-primary/5 text-primary text-[11px] font-semibold rounded-full"><?php echo $s; ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ===== VALUES SECTION ===== -->
    <section id="values" class="py-24 bg-[#2A163F] relative overflow-hidden">
        <!-- Decorative blobs -->
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-accent rounded-full blur-[160px] opacity-10 translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-primary/60 rounded-full blur-[120px] opacity-20 -translate-x-1/3 translate-y-1/3"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center mb-16 fade-in-section">
                <div class="flex items-center justify-center gap-3 mb-6">
                    <span class="h-px w-12 bg-white/20"></span>
                    <span class="text-white/40 font-bold tracking-widest uppercase text-xs">What Drives Us</span>
                    <span class="h-px w-12 bg-white/20"></span>
                </div>
                <h2 class="text-5xl md:text-6xl text-white mb-6 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                    Our Core Values
                </h2>
                <p class="text-white/50 text-lg max-w-2xl mx-auto">
                    These principles guide every decision, every interaction, and every treatment we provide.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 fade-in-section">
                <?php
                $values = [
                    ['number' => '01', 'title' => 'Dignity', 'desc' => 'Every patient is treated with unconditional respect, empathy, and without stigma.', 'icon' => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z'],
                    ['number' => '02', 'title' => 'Excellence', 'desc' => 'We hold ourselves to the highest clinical and ethical standards in mental health care.', 'icon' => 'M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z'],
                    ['number' => '03', 'title' => 'Innovation', 'desc' => 'We continuously adopt the most advanced, evidence-based therapies available.', 'icon' => 'M13 10V3L4 14h7v7l9-11h-7z'],
                    ['number' => '04', 'title' => 'Hope', 'desc' => 'We believe recovery is achievable for everyone, no matter how long they have struggled.', 'icon' => 'M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z'],
                ];
                foreach ($values as $v): ?>
                <div class="relative bg-white/[0.04] border border-white/10 rounded-[1.5rem] p-8 hover:bg-white/[0.08] hover:border-white/20 transition-all duration-300 group overflow-hidden">
                    <!-- Number watermark -->
                    <div class="absolute top-4 right-6 text-6xl font-bold text-white/5 group-hover:text-white/10 transition-colors" style="font-family: 'Bauhaus Soft', cursive;"><?php echo $v['number']; ?></div>
                    <!-- Icon -->
                    <div class="w-12 h-12 rounded-2xl bg-accent/10 flex items-center justify-center text-accent mb-6 group-hover:bg-accent group-hover:text-white transition-all duration-300 relative z-10">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?php echo $v['icon']; ?>"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3 relative z-10"><?php echo $v['title']; ?></h3>
                    <p class="text-white/50 text-sm leading-relaxed relative z-10"><?php echo $v['desc']; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ===== LOCATION / CTA SECTION ===== -->
    <section id="visit" class="py-24 bg-[#FAFAFF] relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-accent/5 to-transparent pointer-events-none"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-5xl mx-auto bg-primary rounded-[2.5rem] overflow-hidden shadow-2xl fade-in-section">
                <div class="flex flex-col lg:flex-row">
                    <!-- Left: Info -->
                    <div class="lg:w-1/2 p-10 md:p-14 relative overflow-hidden">
                        <!-- Decorative blob -->
                        <div class="absolute top-0 right-0 w-[300px] h-[300px] bg-accent rounded-full blur-[100px] opacity-20 translate-x-1/2 -translate-y-1/2"></div>
                        <div class="relative z-10">
                            <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-white/10 border border-white/20 text-white/80 text-xs font-bold uppercase tracking-widest mb-8">
                                <span class="w-1.5 h-1.5 rounded-full bg-green-400 animate-pulse"></span>
                                Now Open &amp; Accepting Patients
                            </div>
                            <h2 class="text-4xl md:text-5xl text-white mb-6 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                                Visit Us in<br>Monticello, MN
                            </h2>
                            <p class="text-white/60 leading-relaxed mb-8">
                                We welcome new patients and referrals. Our welcoming clinic is designed to feel like a sanctuary — because healing starts the moment you walk through our door.
                            </p>

                            <div class="space-y-4 mb-8">
                                <div class="flex items-start gap-3">
                                    <div class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center flex-shrink-0 mt-0.5">
                                        <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                    </div>
                                    <p class="text-white/80 text-sm leading-relaxed">154 East Broadway Street Suite 2,<br>Monticello, MN 55362</p>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center flex-shrink-0">
                                        <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                    </div>
                                    <a href="tel:+16124298280" class="text-white/80 text-sm hover:text-accent transition-colors font-semibold">612-429-8280</a>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center flex-shrink-0">
                                        <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                    </div>
                                    <a href="mailto:referrals@tranquilmindsmentalhealth.com" class="text-white/80 text-sm hover:text-accent transition-colors break-all">referrals@tranquilmindsmentalhealth.com</a>
                                </div>
                            </div>

                            <a href="#contact"
                                class="inline-flex items-center gap-3 px-8 py-4 bg-accent text-white rounded-full font-bold hover:bg-accent-light hover:-translate-y-0.5 hover:shadow-[0_0_30px_rgba(140,120,190,0.5)] transition-all duration-300">
                                Book a Free Consultation
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Right: Map embed (decorative) -->
                    <div class="lg:w-1/2 min-h-[360px] relative overflow-hidden">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2826.8523714684756!2d-93.79641682374624!3d45.30581447107499!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x52b3a67a4e28b3a5%3A0x5a4568d47bdfd3d5!2s154%20E%20Broadway%20St%20%232%2C%20Monticello%2C%20MN%2055362!5e0!3m2!1sen!2sus!4v1705000000000!5m2!1sen!2sus"
                            width="100%"
                            height="100%"
                            style="border:0; filter: saturate(0.7) hue-rotate(230deg) brightness(0.8);"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            title="Tranquil Minds Mental Health Location"
                            class="absolute inset-0 w-full h-full"
                        ></iframe>
                        <!-- Overlay tint -->
                        <div class="absolute inset-0 bg-primary/20 pointer-events-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== TESTIMONIALS ===== -->
    <section id="testimonials" class="py-24 bg-white relative overflow-hidden">
        <div class="absolute top-0 left-0 w-[600px] h-[600px] bg-accent/8 rounded-full blur-[140px] -translate-x-1/3 -translate-y-1/3 pointer-events-none"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center mb-16 fade-in-section">
                <div class="flex items-center justify-center gap-3 mb-6">
                    <span class="h-px w-12 bg-primary/40"></span>
                    <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">Patient Stories</span>
                    <span class="h-px w-12 bg-primary/40"></span>
                </div>
                <h2 class="text-5xl md:text-6xl text-primary mb-6 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                    Real People,<br>Real Recovery
                </h2>
                <p class="text-gray-500 text-lg max-w-xl mx-auto">
                    Hear what our patients say about their experience at Tranquil Minds.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-6 fade-in-section">
                <?php
                $testimonials = [
                    [
                        'quote' => 'After years of trying different medications with little relief, Neurostar TMS at Tranquil Minds gave me my life back. I feel like myself again for the first time in a decade.',
                        'name' => 'Jennifer M.',
                        'detail' => 'TMS Patient, 2 years',
                        'stars' => 5,
                        'highlight' => true,
                    ],
                    [
                        'quote' => 'Dr. Chen truly listens. She takes the time to understand you as a whole person, not just your symptoms. The entire staff is warm and professional.',
                        'name' => 'Marcus T.',
                        'detail' => 'Psychiatric Care Patient',
                        'stars' => 5,
                        'highlight' => false,
                    ],
                    [
                        'quote' => 'The Spravato treatment combined with Dr. Chen\'s guidance was transformative. I went from barely functioning to thriving at work and with my family.',
                        'name' => 'Rachel K.',
                        'detail' => 'Spravato Patient, 18 months',
                        'stars' => 5,
                        'highlight' => false,
                    ],
                ];
                foreach ($testimonials as $t): ?>
                <div class="relative rounded-[1.5rem] p-8 flex flex-col gap-5 hover:-translate-y-1 transition-all duration-300 <?php echo $t['highlight'] ? 'bg-primary text-white shadow-xl shadow-primary/20' : 'bg-[#F5F3FF] border border-primary/8'; ?>">
                    <!-- Stars -->
                    <div class="flex gap-1">
                        <?php for ($s = 0; $s < $t['stars']; $s++): ?>
                        <svg class="w-4 h-4 <?php echo $t['highlight'] ? 'text-accent' : 'text-accent'; ?>" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                        <?php endfor; ?>
                    </div>
                    <!-- Quote mark -->
                    <div class="text-6xl leading-none font-serif <?php echo $t['highlight'] ? 'text-white/20' : 'text-primary/10'; ?> -mt-4 select-none">&ldquo;</div>
                    <!-- Text -->
                    <p class="text-base leading-relaxed -mt-8 <?php echo $t['highlight'] ? 'text-white/80' : 'text-gray-600'; ?>">
                        <?php echo $t['quote']; ?>
                    </p>
                    <!-- Author -->
                    <div class="flex items-center gap-3 mt-auto pt-4 border-t <?php echo $t['highlight'] ? 'border-white/10' : 'border-primary/10'; ?>">
                        <div class="w-9 h-9 rounded-full <?php echo $t['highlight'] ? 'bg-white/20' : 'bg-accent/20'; ?> flex items-center justify-center font-bold <?php echo $t['highlight'] ? 'text-white' : 'text-accent'; ?> text-sm flex-shrink-0">
                            <?php echo substr($t['name'], 0, 1); ?>
                        </div>
                        <div>
                            <div class="font-bold text-sm <?php echo $t['highlight'] ? 'text-white' : 'text-primary'; ?>"><?php echo $t['name']; ?></div>
                            <div class="text-xs <?php echo $t['highlight'] ? 'text-white/50' : 'text-gray-400'; ?>"><?php echo $t['detail']; ?></div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- Trust bar -->
            <div class="mt-12 flex flex-wrap justify-center gap-8 items-center fade-in-section">
                <div class="flex items-center gap-2 text-gray-400 text-sm">
                    <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    <span>Verified Patient Reviews</span>
                </div>
                <div class="w-px h-4 bg-gray-200 hidden sm:block"></div>
                <div class="flex items-center gap-2 text-gray-400 text-sm">
                    <svg class="w-5 h-5 text-accent" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                    <span class="font-semibold text-primary">4.9 / 5</span>
                    <span>Average Rating</span>
                </div>
                <div class="w-px h-4 bg-gray-200 hidden sm:block"></div>
                <div class="flex items-center gap-2 text-gray-400 text-sm">
                    <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    <span>200+ Reviews</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== ACCREDITATIONS MARQUEE ===== -->
    <section class="py-10 bg-[#F5F3FF] border-y border-primary/8 overflow-hidden">
        <div class="flex items-center gap-3 mb-4 justify-center">
            <span class="h-px w-8 bg-primary/30"></span>
            <span class="text-primary/50 font-bold tracking-widest uppercase text-[10px]">Accreditations &amp; Affiliations</span>
            <span class="h-px w-8 bg-primary/30"></span>
        </div>
        <!-- Marquee wrapper -->
        <div class="relative w-full overflow-hidden">
            <div class="marquee-track flex gap-12 items-center whitespace-nowrap animate-marquee">
                <?php
                $accreds = [
                    ['label' => 'American Psychiatric Association', 'abbr' => 'APA Member'],
                    ['label' => 'Neurostar® Certified Provider', 'abbr' => 'TMS Certified'],
                    ['label' => 'Joint Commission Accredited', 'abbr' => 'JCAHO'],
                    ['label' => 'SAMHSA Recognized Facility', 'abbr' => 'SAMHSA'],
                    ['label' => 'Minnesota Medical Association', 'abbr' => 'MMA Member'],
                    ['label' => 'Harvard TMS Fellowship Program', 'abbr' => 'Harvard Trained'],
                    ['label' => 'Mayo Clinic Residency Alumni', 'abbr' => 'Mayo Alumni'],
                    ['label' => 'NAMI Partner Organization', 'abbr' => 'NAMI Partner'],
                ];
                // Duplicate for seamless scroll
                $all = array_merge($accreds, $accreds);
                foreach ($all as $a): ?>
                <div class="flex-shrink-0 flex items-center gap-3 px-6 py-3 bg-white rounded-full border border-primary/10 shadow-sm">
                    <div class="w-6 h-6 rounded-full bg-accent/15 flex items-center justify-center flex-shrink-0">
                        <svg class="w-3 h-3 text-accent" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                    </div>
                    <span class="text-sm font-semibold text-primary"><?php echo $a['label']; ?></span>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>


    <style>
        /* Smooth scroll offset for anchors */
        html { scroll-padding-top: 6rem; }

        /* Animate timeline dots on hover */
        .timeline-dot {
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        /* Marquee animation */
        @keyframes marquee {
            0%   { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
        .animate-marquee {
            animation: marquee 28s linear infinite;
        }
        .animate-marquee:hover {
            animation-play-state: paused;
        }

        /* Staggered fade-in for grid children */
        .stagger-children > * {
            opacity: 0;
            transform: translateY(24px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }
        .stagger-children.visible > *:nth-child(1) { opacity:1; transform:none; transition-delay: 0.05s; }
        .stagger-children.visible > *:nth-child(2) { opacity:1; transform:none; transition-delay: 0.15s; }
        .stagger-children.visible > *:nth-child(3) { opacity:1; transform:none; transition-delay: 0.25s; }
        .stagger-children.visible > *:nth-child(4) { opacity:1; transform:none; transition-delay: 0.35s; }

        /* Counter pulse */
        .counter-val { display: inline-block; }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', () => {

            // --- Intersection Observer: fade-in + stagger ---
            const io = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        io.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.12 });

            document.querySelectorAll('.fade-in-section, .stagger-children').forEach(el => io.observe(el));

            // --- Animated number counters ---
            const counters = document.querySelectorAll('[data-counter]');
            const counterObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (!entry.isIntersecting) return;
                    const el = entry.target;
                    const target = parseFloat(el.dataset.counter);
                    const suffix = el.dataset.suffix || '';
                    const duration = 1800;
                    const step = 16;
                    const increment = target / (duration / step);
                    let current = 0;
                    const timer = setInterval(() => {
                        current = Math.min(current + increment, target);
                        el.textContent = (Number.isInteger(target)
                            ? Math.floor(current).toLocaleString()
                            : current.toFixed(1)) + suffix;
                        if (current >= target) clearInterval(timer);
                    }, step);
                    counterObserver.unobserve(el);
                });
            }, { threshold: 0.5 });

            counters.forEach(el => counterObserver.observe(el));
        });
    </script>

<?php include 'footer.php'; ?>
