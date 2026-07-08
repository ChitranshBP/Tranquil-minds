<?php
$page_title = "Tranquil Minds Mental Health - Mental Wellness Clinic";
$page_description = "Tranquil Minds Mental Health: A sanctuary for mental wellness offering Neurostar TMS, medication management, and personalized care.";
?>
<?php include 'header.php'; ?>

    <!-- Hero Section (Epic & Innovative Redesign) -->
    <header
        class="relative h-[65vh] min-h-[500px] flex items-center overflow-hidden mx-2 md:mx-6 mb-6 rounded-b-[3rem] mt-0"
        id="home">
        <!-- Three.js Canvas Container -->
        <div id="hero-canvas" class="absolute inset-0 z-0 scale-100"></div>

        <!-- Decoration: Noise Overlay (Optional Texture) -->
        <div
            class="absolute inset-0 z-0 pointer-events-none opacity-20 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0naHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmcnIHdpZHRoPSc0MDAnIGhlaWdodD0nNDAwJz48ZmlsdGVyIGlkPSdub2lzZSc+PGZlVHVyYnVsZW5jZSB0eXBlPSdmcmFjdGFsTm9pc2UnIGJhc2VGcmVxdWVuY3k9JzAuNjUnIG51bW9jdGF2ZXM9JzMnIHN0aXRjaFRpbGVzPSdzdGl0Y2gnLz48L2ZpbHRlcj48cmVjdCB3aWR0aD0nMTAwJScgaGVpZ2h0PScxMDAlJyBmaWx0ZXI9J3VybCgjbm9pc2UpJyBvcGFjaXR5PScwLjQnLz48L3N2Zz4=')]">
        </div>

        <!-- Hero Content -->
        <div class="container mx-auto px-6 relative z-10 mt-16">
            <div class="max-w-3xl fade-in-section">
                <!-- Badge -->
                <div
                    class="inline-flex items-center mt-4 md:mt-0 gap-2 px-4 py-2 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-white/90 text-sm font-medium mb-8 animate-pulse">
                    <span class="w-2 h-2 rounded-full bg-accent"></span>
                    Accepting New Patients for 2026
                </div>

                <!-- Main Heading -->
                <h1 class="text-4xl md:text-5xl lg:text-6xl leading-[1.1] text-white mb-8"
                    style="font-family: 'Bauhaus Soft', cursive;">
                    Rewiring Hope. <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-white to-white/50">One Pulse at a Time.</span>
                </h1>

                <!-- Subtitle with Glass Card Effect -->
                <p class="text-xl md:text-2xl text-gray-200 font-light mb-10 max-w-2xl leading-relaxed">
                    Advanced mental wellness & Neurostar TMS therapy. Restoring balance through the perfect synthesis of
                    science
                    and compassion.
                </p>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#welcome"
                        class="px-8 py-4 bg-accent text-white rounded-full font-bold text-lg shadow-[0_0_20px_rgba(197,94,42,0.5)] hover:bg-accent-light hover:shadow-[0_0_30px_rgba(197,94,42,0.7)] hover:-translate-y-1 transition-all text-center">
                        Begin Your Journey
                    </a>
                    <a href="#tms"
                        class="px-8 py-4 bg-white/5 backdrop-blur-sm border border-white/20 text-white rounded-full font-bold text-lg hover:bg-white/20 hover:border-white/40 transition-all text-center flex items-center justify-center gap-2 group">
                        <span>Explore Treatment</span>
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Decorative Abstract Blur (Bottom Right) -->
        <div
            class="absolute bottom-0 right-0 w-1/2 h-1/2 bg-gradient-to-tl from-primary/50 to-transparent blur-[120px] pointer-events-none">
        </div>
    </header>

    <!-- Welcome Section (Compact Redesign) -->
    <section id="welcome" class="relative py-16 bg-cream overflow-hidden">
        <!-- Preserved Blob Background -->
        <div class="blob-bg absolute top-0 left-0 w-full h-full pointer-events-none opacity-40"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">

                <!-- Text Content -->
                <div class="fade-in-section order-2 md:order-1">
                    <span class="text-accent font-bold tracking-widest uppercase text-xs mb-2 block">A Sanctuary for
                        Healing</span>
                    <h2 class="text-5xl md:text-6xl text-primary mb-6" style="font-family: 'Bauhaus Soft', cursive;">
                        Welcome to Tranquil Minds</h2>

                    <p class="text-lg text-primary/80 font-medium mb-4 leading-snug">
                        Where science meets serenity. We believe mental wellness is a journey best taken with
                        compassionate guides.
                    </p>
                    <p class="text-gray-600 text-sm leading-relaxed mb-8">
                        At Tranquil Minds Mental Health, our clinic provides a serene environment where advanced technology meets
                        compassionate care. We are dedicated to restoring balance to your life.
                    </p>
                    <a href="#contact"
                        class="inline-block px-8 py-4 bg-accent text-white rounded-full font-bold shadow-lg hover:bg-accent-light transition-all hover:-translate-y-1 text-lg">
                        Our Philosophy
                    </a>
                </div>

                <!-- Image Content -->
                <div class="fade-in-section order-1 md:order-2 flex justify-center md:justify-end">
                    <div class="image-wrapper organic-shape w-full max-w-sm">
                        <img src="assets/clinic.png" alt="Peaceful Clinic Interior" class="block w-full h-auto">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- What is TMS (Compact & Innovative Redesign) -->
    <section id="tms" class="py-10 relative bg-cover bg-center bg-fixed"
        style="background-image: url('assets/bg-homepage-tranquil.webp');">
        <div class="absolute inset-0"></div>
        <div class="container mx-auto px-6 relative z-10">
            <div
                class="bg-white/60 backdrop-blur-md rounded-[2.5rem] p-8 md:p-12 shadow-2xl border border-white/50 overflow-hidden">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <!-- Text Content -->
                    <div class="fade-in-section">
                        <div class="flex items-center gap-3 mb-4">
                            <span
                                class="px-3 py-1 bg-accent/10 text-accent text-xs font-bold tracking-widest uppercase rounded-full">FDA
                                Cleared</span>
                            <span
                                class="px-3 py-1 bg-primary/10 text-primary text-xs font-bold tracking-widest uppercase rounded-full">Non-Invasive</span>
                        </div>
                        <h2 class="text-4xl md:text-5xl text-primary mb-6"
                            style="font-family: 'Bauhaus Soft', cursive;">Healing at the Source</h2>
                        <p class="text-lg text-gray-700 leading-relaxed mb-8">
                            Neurostar TMS uses gentle magnetic pulses to <span
                                class="text-accent font-bold">reactivate</span>
                            dormant neural pathways. It's not just treating symptoms—it's physically waking up your
                            brain's ability to regulate mood.
                        </p>

                        <div class="grid grid-cols-2 gap-4 mb-8">
                            <div class="bg-white/80 p-4 rounded-2xl border border-white shadow-sm">
                                <div class="text-3xl font-bold text-primary mb-1"
                                    style="font-family: 'Bauhaus Soft', cursive;">80%</div>
                                <div class="text-xs text-gray-600 uppercase tracking-wide font-semibold">Response Rate
                                </div>
                            </div>
                            <div class="bg-white/80 p-4 rounded-2xl border border-white shadow-sm">
                                <div class="text-3xl font-bold text-accent mb-1"
                                    style="font-family: 'Bauhaus Soft', cursive;">50%</div>
                                <div class="text-xs text-gray-600 uppercase tracking-wide font-semibold">Full Remission
                                </div>
                            </div>
                        </div>

                        <a href="#contact"
                            class="inline-flex items-center gap-2 text-primary font-bold hover:text-accent transition-colors group">
                            Check if you qualify
                            <span
                                class="w-8 h-8 rounded-full bg-white flex items-center justify-center shadow-md group-hover:bg-accent group-hover:text-white transition-all">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </span>
                        </a>
                    </div>

                    <!-- Brain Comparison Visual -->
                    <div class="relative fade-in-section">
                        <div class="absolute inset-0 bg-gradient-to-tr from-accent/20 to-primary/5 rounded-3xl blur-xl">
                        </div>

                        <!-- Placeholder Image -->
                        <img src="assets/bef-aft.webp" alt="Brain Activity Comparison"
                            class="w-full h-auto rounded-2xl">

                        <p class="text-center text-xs text-primary/60 mt-4 font-medium italic">Visualization of neural
                            activity increases after TMS treatment.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why It Helps (Compact & High Contrast) -->
    <section id="why-it-helps" class="py-16 bg-primary text-white relative overflow-hidden">
        <!-- Abstract Background Detail -->
        <div class="absolute top-0 left-0 w-full h-full opacity-40 pointer-events-none">
            <svg class="h-full w-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                <defs>
                    <linearGradient id="themeGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" style="stop-color:#502882;stop-opacity:1" /> <!-- Primary Purple -->
                        <stop offset="100%" style="stop-color:#8C78BE;stop-opacity:1" /> <!-- Accent Lavender -->
                    </linearGradient>
                </defs>
                <path d="M0 100 C 20 0 50 0 100 100 Z" fill="url(#themeGradient)" />
            </svg>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12 fade-in-section gap-6">
                <div class="max-w-xl">
                    <h2 class="text-4xl md:text-5xl mb-4 leading-tight text-white"
                        style="font-family: 'Bauhaus Soft', cursive;">Restoring <span class="text-accent">Balance</span>
                    </h2>
                    <p class="text-gray-100 text-lg leading-relaxed">Depression is a biological condition that
                        physically alters brain function. Neurostar TMS targets these changes directly.</p>
                </div>
                <div class="hidden md:block pb-2">
                    <div class="h-px w-32 bg-accent/50"></div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div class="group fade-in-section">
                    <div
                        class="relative overflow-hidden rounded-2xl aspect-video mb-5 bg-white/10 border border-white/20 group-hover:border-accent/50 transition-colors">
                        <!-- Image Placeholder -->
                        <img src="assets/neurostar-precision.png"
                            alt="Precision Targeting Visual"
                            class="absolute inset-0 w-full h-full object-cover opacity-90 group-hover:opacity-100 group-hover:scale-105 transition-all duration-700">
                        <div
                            class="absolute bottom-4 right-4 w-8 h-8 rounded-full border border-white/30 flex items-center justify-center font-bold text-sm bg-black/40 backdrop-blur-md text-white">
                            1</div>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold mb-2 text-white group-hover:text-accent transition-colors"
                            style="font-family: 'Bauhaus Soft', cursive;">Precision</h3>
                        <p
                            class="text-gray-100 text-sm leading-relaxed border-l-2 border-white/20 pl-4 group-hover:border-accent/50 transition-colors">
                            Unlike medications that circulate throughout your entire body, Neurostar TMS uses focused
                            magnetic
                            fields to target only the specific neural circuits involved in mood regulation.
                        </p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="group fade-in-section" style="transition-delay: 100ms;">
                    <div
                        class="relative overflow-hidden rounded-2xl aspect-video mb-5 bg-white/10 border border-white/20 group-hover:border-accent/50 transition-colors">
                        <!-- Image Placeholder -->
                        <img src="assets/neurostar-awakening.png"
                            alt="Neuroplasticity Visual"
                            class="absolute inset-0 w-full h-full object-cover opacity-90 group-hover:opacity-100 group-hover:scale-105 transition-all duration-700">
                        <div
                            class="absolute bottom-4 right-4 w-8 h-8 rounded-full border border-white/30 flex items-center justify-center font-bold text-sm bg-black/40 backdrop-blur-md text-white">
                            2</div>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold mb-2 text-white group-hover:text-accent transition-colors"
                            style="font-family: 'Bauhaus Soft', cursive;">Awakening</h3>
                        <p
                            class="text-gray-100 text-sm leading-relaxed border-l-2 border-white/20 pl-4 group-hover:border-accent/50 transition-colors">
                            Think of it as physical therapy for the brain. The pulses "wake up" underactive neurons,
                            encouraging them to fire again and rebuild vital connections.
                        </p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="group fade-in-section" style="transition-delay: 200ms;">
                    <div
                        class="relative overflow-hidden rounded-2xl aspect-video mb-5 bg-white/10 border border-white/20 group-hover:border-accent/50 transition-colors">
                        <!-- Image Placeholder -->
                        <img src="assets/neurostar-longevity.png"
                            alt="Long-term Relief Visual"
                            class="absolute inset-0 w-full h-full object-cover opacity-90 group-hover:opacity-100 group-hover:scale-105 transition-all duration-700">
                        <div
                            class="absolute bottom-4 right-4 w-8 h-8 rounded-full border border-white/30 flex items-center justify-center font-bold text-sm bg-black/40 backdrop-blur-md text-white">
                            3</div>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold mb-2 text-white group-hover:text-accent transition-colors"
                            style="font-family: 'Bauhaus Soft', cursive;">Longevity</h3>
                        <p
                            class="text-gray-100 text-sm leading-relaxed border-l-2 border-white/20 pl-4 group-hover:border-accent/50 transition-colors">
                            Because it changes how the brain functions physically, the results are often durable. Many
                            patients experience remission that lasts long after treatment concludes.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Conditions (Compact & Concise) -->
    <section id="conditions" class="py-16 relative overflow-hidden bg-cover bg-center"
        style="background-image: url('assets/bg2.jpg');">
        <!-- Gradient Blur Overlay -->
        <div class="absolute inset-0 bg-gradient-to-b from-white/90 via-white/80 to-white/90 pointer-events-none z-0">
        </div>

        <div class="container mx-auto relative z-10">
            <!-- Header -->
            <div class="flex flex-col md:flex-row justify-between items-end mb-10 fade-in-section gap-8">
                <div>
                    <h2 class="text-3xl md:text-5xl text-primary mb-2" style="font-family: 'Bauhaus Soft', cursive;">
                        Healing <span class="text-accent">Spectrum</span></h2>
                    <p class="text-gray-500 text-lg max-w-2xl">Specialized care for conditions where neural pathways
                        need realignment.</p>
                </div>
                <div class="hidden md:block">
                    <a href="#contact"
                        class="text-accent font-bold text-sm tracking-widest hover:text-primary transition-colors flex items-center gap-2 group">
                        START ASSESSMENT
                        <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <!-- Cards Grid -->
            <div class="flex flex-wrap gap-3 md:gap-6 justify-center">

                <!-- Depression -->
                <div
                    class="group border-2 border-accent/5 fade-in-section w-[calc(50%-0.5rem)] md:w-[calc(50%-1.5rem)] lg:w-[calc(33.333%-1.5rem)] bg-accent/5 backdrop-blur-sm rounded-2xl p-4 md:p-8 hover:bg-white hover:shadow-xl hover:scale-[1.02] transition-all duration-300">
                    <div
                        class="w-10 h-10 md:w-12 md:h-12 bg-primary/10 rounded-xl flex items-center justify-center text-primary mb-3 md:mb-6 group-hover:bg-accent group-hover:text-white transition-colors">
                        <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                            </path>
                        </svg>
                    </div>
                    <h3
                        class="text-sm md:text-xl font-bold text-primary mb-1 md:mb-3 group-hover:text-accent transition-colors">
                        Depression
                    </h3>
                    <p class="text-[10px] md:text-sm text-gray-500 leading-relaxed">Treatment-Resistant protocols.</p>
                </div>

                <!-- Anxiety -->
                <div class="group border-2 border-accent/5 fade-in-section w-[calc(50%-0.5rem)] md:w-[calc(50%-1.5rem)] lg:w-[calc(33.333%-1.5rem)] bg-accent/5 backdrop-blur-sm rounded-2xl p-4 md:p-8 hover:bg-white hover:shadow-xl hover:scale-[1.02] transition-all duration-300"
                    style="transition-delay: 50ms;">
                    <div
                        class="w-10 h-10 md:w-12 md:h-12 bg-primary/10 rounded-xl flex items-center justify-center text-primary mb-3 md:mb-6 group-hover:bg-accent group-hover:text-white transition-colors">
                        <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3
                        class="text-sm md:text-xl font-bold text-primary mb-1 md:mb-3 group-hover:text-accent transition-colors">
                        Anxiety
                    </h3>
                    <p class="text-[10px] md:text-sm text-gray-500 leading-relaxed">Relief from panic & worry.</p>
                </div>

                <!-- ADHD / ADD -->
                <div class="group border-2 border-accent/5 fade-in-section w-[calc(50%-0.5rem)] md:w-[calc(50%-1.5rem)] lg:w-[calc(33.333%-1.5rem)] bg-accent/5 backdrop-blur-sm rounded-2xl p-4 md:p-8 hover:bg-white hover:shadow-xl hover:scale-[1.02] transition-all duration-300"
                    style="transition-delay: 100ms;">
                    <div
                        class="w-10 h-10 md:w-12 md:h-12 bg-primary/10 rounded-xl flex items-center justify-center text-primary mb-3 md:mb-6 group-hover:bg-accent group-hover:text-white transition-colors">
                        <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3
                        class="text-sm md:text-xl font-bold text-primary mb-1 md:mb-3 group-hover:text-accent transition-colors">
                        ADHD / ADD
                    </h3>
                    <p class="text-[10px] md:text-sm text-gray-500 leading-relaxed">Focus & executive function.</p>
                </div>

                <!-- PTSD -->
                <div class="group border-2 border-accent/5 fade-in-section w-[calc(50%-0.5rem)] md:w-[calc(50%-1.5rem)] lg:w-[calc(33.333%-1.5rem)] bg-accent/5 backdrop-blur-sm rounded-2xl p-4 md:p-8 hover:bg-white hover:shadow-xl hover:scale-[1.02] transition-all duration-300"
                    style="transition-delay: 150ms;">
                    <div
                        class="w-10 h-10 md:w-12 md:h-12 bg-primary/10 rounded-xl flex items-center justify-center text-primary mb-3 md:mb-6 group-hover:bg-accent group-hover:text-white transition-colors">
                        <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                            </path>
                        </svg>
                    </div>
                    <h3
                        class="text-sm md:text-xl font-bold text-primary mb-1 md:mb-3 group-hover:text-accent transition-colors">
                        PTSD
                    </h3>
                    <p class="text-[10px] md:text-sm text-gray-500 leading-relaxed">Processing trauma safely.</p>
                </div>

                <!-- OCD -->
                <div class="group border-2 border-accent/5 fade-in-section w-[calc(50%-0.5rem)] md:w-[calc(50%-1.5rem)] lg:w-[calc(33.333%-1.5rem)] bg-accent/5 backdrop-blur-sm rounded-2xl p-4 md:p-8 hover:bg-white hover:shadow-xl hover:scale-[1.02] transition-all duration-300"
                    style="transition-delay: 200ms;">
                    <div
                        class="w-10 h-10 md:w-12 md:h-12 bg-primary/10 rounded-xl flex items-center justify-center text-primary mb-3 md:mb-6 group-hover:bg-accent group-hover:text-white transition-colors">
                        <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15">
                            </path>
                        </svg>
                    </div>
                    <h3
                        class="text-sm md:text-xl font-bold text-primary mb-1 md:mb-3 group-hover:text-accent transition-colors">
                        OCD
                    </h3>
                    <p class="text-[10px] md:text-sm text-gray-500 leading-relaxed">Breaking intrusive loops.</p>
                </div>

                <!-- Bipolar Disorder -->
                <div class="group border-2 border-accent/5 fade-in-section w-[calc(50%-0.5rem)] md:w-[calc(50%-1.5rem)] lg:w-[calc(33.333%-1.5rem)] bg-accent/5 backdrop-blur-sm rounded-2xl p-4 md:p-8 hover:bg-white hover:shadow-xl hover:scale-[1.02] transition-all duration-300"
                    style="transition-delay: 250ms;">
                    <div
                        class="w-10 h-10 md:w-12 md:h-12 bg-primary/10 rounded-xl flex items-center justify-center text-primary mb-3 md:mb-6 group-hover:bg-accent group-hover:text-white transition-colors">
                        <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                    </div>
                    <h3
                        class="text-sm md:text-xl font-bold text-primary mb-1 md:mb-3 group-hover:text-accent transition-colors">
                        Bipolar Disorder
                    </h3>
                    <p class="text-[10px] md:text-sm text-gray-500 leading-relaxed">Mood stabilization specialized.</p>
                </div>

                <!-- Suicidal Ideation -->
                <div class="group border-2 border-accent/5 fade-in-section w-[calc(50%-0.5rem)] md:w-[calc(50%-1.5rem)] lg:w-[calc(33.333%-1.5rem)] bg-accent/5 backdrop-blur-sm rounded-2xl p-4 md:p-8 hover:bg-white hover:shadow-xl hover:scale-[1.02] transition-all duration-300"
                    style="transition-delay: 300ms;">
                    <div
                        class="w-10 h-10 md:w-12 md:h-12 bg-primary/10 rounded-xl flex items-center justify-center text-primary mb-3 md:mb-6 group-hover:bg-accent group-hover:text-white transition-colors">
                        <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                    </div>
                    <h3
                        class="text-sm md:text-xl font-bold text-primary mb-1 md:mb-3 group-hover:text-accent transition-colors">
                        Suicidal Ideation
                    </h3>
                    <p class="text-[10px] md:text-sm text-gray-500 leading-relaxed">Rapid reduction of acute risks.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Meet Rosana (Light Theme Redesign) -->
    <section id="founder" class="pb-10 bg-white relative overflow-hidden">
        <!-- Decoration -->
        <div class="absolute top-0 right-0 w-1/3 h-full bg-[#FAFAFF] transform skew-x-12 origin-top-right -z-10"></div>
        <div class="absolute bottom-0 left-10 w-64 h-64 bg-accent/5 rounded-full blur-3xl pointer-events-none"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-16 lg:gap-24">

                <!-- Image Composition (Left) -->
                <div class="w-full lg:w-5/12 fade-in-section relative group">
                    <!-- Frame -->
                    <div
                        class="absolute inset-0 border border-primary/10 rounded-tl-[4rem] rounded-br-[4rem] transform translate-x-4 translate-y-4 group-hover:translate-x-2 group-hover:translate-y-2 transition-transform duration-500">
                    </div>
                    <!-- Image -->
                    <div
                        class="relative rounded-tl-[4rem] rounded-br-[4rem] overflow-hidden shadow-xl group-hover:shadow-2xl transition-all duration-700">
                        <img src="assets/rosana.JPG" alt="Rosana Graves, CEO"
                            class="w-full h-auto object-cover transform scale-100 group-hover:scale-105 transition-transform duration-700  max-h-[600px] grayscale-0">
                    </div>
                </div>

                <!-- Text Content (Right) -->
                <div class="w-full lg:w-7/12 text-primary fade-in-section">
                    <div class="mb-4 flex items-center gap-4">
                        <span class="h-px w-12 bg-accent"></span>
                        <span class="text-accent font-bold tracking-[0.2em] uppercase text-xs">Visionary
                            Leadership</span>
                    </div>

                    <h2 class="text-6xl text-primary mb-4" style="font-family: 'Bauhaus Soft', cursive;">Rosana Graves
                    </h2>
                    <p class="text-xl text-gray-500 font-light mb-10 italic font-serif">Founder & CEO</p>

                    <!-- Quote Box -->
                    <div
                        class="relative bg-[#FAFAFF] border-l-4 border-accent p-8 mb-10 rounded-r-2xl hover:bg-[#F3EFFF] transition-colors duration-300">
                        <p class="text-lg md:text-xl text-primary/80 leading-relaxed font-light">
                            "I founded Tranquil Minds Mental Health with a simple belief: that every patient deserves to feel truly
                            heard. Combining clinical expertise with deep compassion, we've created a space where
                            healing is not just a medical procedure, but a human experience."
                        </p>
                    </div>

                    <!-- Credentials -->
                    <div
                        class="flex flex-col sm:flex-row justify-between items-start sm:items-end gap-8 border-t border-gray-100 pt-8">
                        <div>
                            <h4 class="text-primary font-bold text-lg mb-3">Clinical Focus</h4>
                            <ul class="space-y-2 text-gray-500 text-sm">
                                <li class="flex items-center gap-3"><span
                                        class="w-1.5 h-1.5 rounded-full bg-accent"></span>Integrative Psychiatry</li>
                                <li class="flex items-center gap-3"><span
                                        class="w-1.5 h-1.5 rounded-full bg-accent"></span>Neurostar TMS Specialist</li>
                                <li class="flex items-center gap-3"><span
                                        class="w-1.5 h-1.5 rounded-full bg-accent"></span>Patient Advocacy</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BrainsWay SWIFT (New CTA Section) -->
    <section id="swift-offer" class="py-10 relative overflow-hidden bg-[#231238] text-white">
        <!-- Background Elements -->
        <div
            class="absolute top-0 right-0 w-[600px] h-[600px] bg-accent rounded-full blur-[120px] opacity-10 translate-x-1/2 -translate-y-1/2 pointer-events-none">
        </div>
        <div
            class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-[#8C78BE] rounded-full blur-[100px] opacity-10 -translate-x-1/3 translate-y-1/3 pointer-events-none">
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-10 lg:gap-16">

                <!-- Left Content: The Pitch -->
                <div class="lg:w-5/12 fade-in-section">
                    <div
                        class="inline-flex items-center gap-2 px-3 py-1 rounded-full border border-accent/30 bg-accent/5 text-accent font-medium text-[10px] tracking-[0.2em] uppercase mb-6 backdrop-blur-md">
                        <span class="w-1 h-1 rounded-full bg-accent animate-pulse"></span>
                        New Accelerated Protocol
                    </div>

                    <h2 class="text-4xl md:text-5xl mb-4 leading-tight text-white/95"
                        style="font-family: 'Bauhaus Soft', cursive;">
                        Hope <span class="font-light italic text-white/60">in a hurry.</span>
                    </h2>

                    <p class="text-base text-gray-400 mb-8 leading-relaxed font-light">
                        The FDA-cleared <strong>SWIFT Protocol</strong> condenses a month of therapy into just 6 days.
                        Fast-track your path to relief without compromising on care.
                    </p>

                    <div class="flex items-center gap-6">
                        <a href="#contact"
                            class="px-8 py-3 bg-accent text-white rounded-full text-sm font-bold hover:bg-accent-light transition-all shadow-lg shadow-accent/20 flex items-center gap-2 group">
                            Inquire Now
                            <svg class="w-4 h-4 group-hover:translate-x-0.5 transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                        <p class="text-[10px] text-white/30 uppercase tracking-wider">*Self-pay eligible</p>
                    </div>
                </div>

                <!-- Right Content: The Stats (Horizontal Strip) -->
                <div class="lg:w-7/12 w-full fade-in-section">
                    <div
                        class="bg-white/[0.02] border border-white/5 backdrop-blur-md rounded-3xl p-2 flex flex-col md:flex-row gap-2">

                        <!-- Block 1: Time -->
                        <div
                            class="flex-1 bg-white/[0.03] rounded-2xl p-5 hover:bg-white/[0.05] transition-colors border border-transparent hover:border-white/5 group">
                            <div class="flex items-center justify-between mb-2">
                                <div
                                    class="w-8 h-8 rounded-full bg-white/5 flex items-center justify-center text-white/80">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <span class="text-[9px] uppercase tracking-widest text-accent font-bold">Duration</span>
                            </div>
                            <div class="text-3xl text-white mb-1" style="font-family: 'Bauhaus Soft', cursive;">6 Days
                            </div>
                            <p class="text-xs text-gray-500 font-light leading-snug">Complete 30 sessions in less than a
                                week.</p>
                        </div>

                        <!-- Block 2: Price -->
                        <div
                            class="flex-1 bg-white/[0.03] rounded-2xl p-5 hover:bg-white/[0.05] transition-colors border border-transparent hover:border-white/5 group">
                            <div class="flex items-center justify-between mb-2">
                                <div
                                    class="w-8 h-8 rounded-full bg-accent/10 flex items-center justify-center text-accent">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                        </path>
                                    </svg>
                                </div>
                                <span class="text-[9px] uppercase tracking-widest text-accent font-bold">Total
                                    Cost</span>
                            </div>
                            <div class="text-3xl text-white mb-1" style="font-family: 'Bauhaus Soft', cursive;">$4,900
                            </div>
                            <p class="text-xs text-gray-500 font-light leading-snug">Transparent flat rate. No hidden
                                fees.</p>
                        </div>

                        <!-- Block 3: Efficacy -->
                        <div
                            class="flex-1 bg-gradient-to-br from-white/[0.05] to-transparent rounded-2xl p-5 border border-white/10 group relative overflow-hidden">
                            <div
                                class="absolute right-0 top-0 w-24 h-24 bg-accent/10 rounded-full blur-[40px] -mr-8 -mt-8 group-hover:bg-accent/20 transition-all">
                            </div>
                            <div class="flex items-center justify-between mb-2 relative z-10">
                                <div
                                    class="w-8 h-8 rounded-full bg-green-500/10 flex items-center justify-center text-green-400">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <span
                                    class="text-[9px] uppercase tracking-widest text-green-400 font-bold border border-green-500/20 px-1.5 py-0.5 rounded-full">FDA
                                    Cleared</span>
                            </div>
                            <div class="text-xl text-white mb-1 mt-1 leading-tight font-medium">Clinical<br>Strength
                            </div>
                            <p class="text-xs text-gray-500 font-light leading-snug mt-1">Effectiveness comparable to
                                standard TMS.</p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>
