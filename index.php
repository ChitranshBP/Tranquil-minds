<?php
$page_title = "Tranquil Minds Mental Health - Mental Wellness Clinic";
$page_description = "Tranquil Minds Mental Health: A sanctuary for mental wellness offering Neurostar TMS, medication management, and personalized care.";
?>
<?php include 'header.php'; ?>

    <!-- Hero Section (Epic & Innovative Redesign) -->
    <header
        class="relative h-[65vh] min-h-[500px] flex items-center overflow-hidden mx-2 md:mx-6 mb-6 rounded-b-[3rem] mt-0"
        id="home">
        <!-- Background Video -->
        <video autoplay loop muted playsinline preload="auto" class="absolute inset-0 w-full h-full object-cover z-0">
            <source src="assets/home/WhatsApp Video 2026-07-10 at 15.54.21.mp4" type="video/mp4">
        </video>
        <!-- Dark Overlay for Readability -->
        <div class="absolute inset-0 bg-primary/45 mix-blend-multiply z-[1]"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-primary/80 via-transparent to-black/20 z-[1]"></div>


        <!-- Decoration: Noise Overlay (Optional Texture) -->
        <div
            class="absolute inset-0 z-0 pointer-events-none opacity-20 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0naHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmcnIHdpZHRoPSc0MDAnIGhlaWdodD0nNDAwJz48ZmlsdGVyIGlkPSdub2lzZSc+PGZlVHVyYnVsZW5jZSB0eXBlPSdmcmFjdGFsTm9pc2UnIGJhc2VGcmVxdWVuY3k9JzAuNjUnIG51bW9jdGF2ZXM9JzMnIHN0aXRjaFRpbGVzPSdzdGl0Y2gnLz48L2ZpbHRlcj48cmVjdCB3aWR0aD0nMTAwJScgaGVpZ2h0PScxMDAlJyBmaWx0ZXI9J3VybCgjbm9pc2UpJyBvcGFjaXR5PScwLjQnLz48L3N2Zz4=')]">
        </div>

        <!-- Hero Content -->
        <div class="container mx-auto px-6 relative z-10 mt-16">
            <div class="max-w-3xl fade-in-section">
                <!-- Badge -->
                <!-- <div
                    class="inline-flex items-center mt-4 md:mt-0 gap-2 px-4 py-2 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-white/90 text-sm font-medium mb-8 animate-pulse">
                    <span class="w-2 h-2 rounded-full bg-accent"></span>
                    Accepting New Patients for 2026
                </div> -->

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
                        class="px-8 py-4 bg-accent text-white rounded-full font-bold text-lg  hover:bg-accent-light hover:shadow-[0_0_30px_rgba(197,94,42,0.7)] hover:-translate-y-1 transition-all text-center">
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
                    <div class="image-wrapper w-full max-w-md rounded-2xl md:rounded-[2rem] overflow-hidden shadow-lg hover:shadow-xl transition-all duration-500 group">
                        <img src="assets/home/tranquil-main-image-home.webp" alt="Peaceful Clinic Interior" class="block w-full h-auto transition-transform duration-500 group-hover:scale-105">
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
                        class="relative overflow-hidden rounded-2xl aspect-[4/3] mb-5 bg-white/10 border border-white/20 group-hover:border-accent/50 transition-colors">
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
                        class="relative overflow-hidden rounded-2xl aspect-[4/3] mb-5 bg-white/10 border border-white/20 group-hover:border-accent/50 transition-colors">
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
                        class="relative overflow-hidden rounded-2xl aspect-[4/3] mb-5 bg-white/10 border border-white/20 group-hover:border-accent/50 transition-colors">
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
            <div class="flex flex-wrap gap-6 justify-center max-w-6xl mx-auto">

                <!-- Depression -->
                <div class="group border border-primary/5 fade-in-section w-[calc(50%-0.75rem)] md:w-[calc(50%-1.5rem)] lg:w-[calc(33.333%-1.5rem)] bg-white/70 backdrop-blur-md rounded-[2rem] p-4 hover:bg-white hover:shadow-2xl hover:scale-[1.02] transition-all duration-500 flex flex-col justify-between">
                    <div>
                        <div class="h-40 md:h-48 w-full rounded-2xl overflow-hidden mb-4 relative">
                            <img src="assets/home/depression.png" alt="Depression" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        </div>
                        <div class="px-2 pb-2">
                            <h3 class="text-base md:text-xl font-bold text-primary mb-1 md:mb-2 group-hover:text-accent transition-colors">
                                Depression
                            </h3>
                            <p class="text-xs md:text-sm text-gray-500 leading-relaxed">Treatment-Resistant protocols.</p>
                        </div>
                    </div>
                </div>

                <!-- Anxiety -->
                <div class="group border border-primary/5 fade-in-section w-[calc(50%-0.75rem)] md:w-[calc(50%-1.5rem)] lg:w-[calc(33.333%-1.5rem)] bg-white/70 backdrop-blur-md rounded-[2rem] p-4 hover:bg-white hover:shadow-2xl hover:scale-[1.02] transition-all duration-500 flex flex-col justify-between" style="transition-delay: 50ms;">
                    <div>
                        <div class="h-40 md:h-48 w-full rounded-2xl overflow-hidden mb-4 relative">
                            <img src="assets/home/anxiety.png" alt="Anxiety" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        </div>
                        <div class="px-2 pb-2">
                            <h3 class="text-base md:text-xl font-bold text-primary mb-1 md:mb-2 group-hover:text-accent transition-colors">
                                Anxiety
                            </h3>
                            <p class="text-xs md:text-sm text-gray-500 leading-relaxed">Relief from panic & worry.</p>
                        </div>
                    </div>
                </div>

                <!-- ADHD / ADD -->
                <div class="group border border-primary/5 fade-in-section w-[calc(50%-0.75rem)] md:w-[calc(50%-1.5rem)] lg:w-[calc(33.333%-1.5rem)] bg-white/70 backdrop-blur-md rounded-[2rem] p-4 hover:bg-white hover:shadow-2xl hover:scale-[1.02] transition-all duration-500 flex flex-col justify-between" style="transition-delay: 100ms;">
                    <div>
                        <div class="h-40 md:h-48 w-full rounded-2xl overflow-hidden mb-4 relative">
                            <img src="assets/home/adhd.png" alt="ADHD / ADD" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        </div>
                        <div class="px-2 pb-2">
                            <h3 class="text-base md:text-xl font-bold text-primary mb-1 md:mb-2 group-hover:text-accent transition-colors">
                                ADHD / ADD
                            </h3>
                            <p class="text-xs md:text-sm text-gray-500 leading-relaxed">Focus & executive function.</p>
                        </div>
                    </div>
                </div>

                <!-- PTSD -->
                <div class="group border border-primary/5 fade-in-section w-[calc(50%-0.75rem)] md:w-[calc(50%-1.5rem)] lg:w-[calc(33.333%-1.5rem)] bg-white/70 backdrop-blur-md rounded-[2rem] p-4 hover:bg-white hover:shadow-2xl hover:scale-[1.02] transition-all duration-500 flex flex-col justify-between" style="transition-delay: 150ms;">
                    <div>
                        <div class="h-40 md:h-48 w-full rounded-2xl overflow-hidden mb-4 relative">
                            <img src="assets/home/ptsd.png" alt="PTSD" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        </div>
                        <div class="px-2 pb-2">
                            <h3 class="text-base md:text-xl font-bold text-primary mb-1 md:mb-2 group-hover:text-accent transition-colors">
                                PTSD
                            </h3>
                            <p class="text-xs md:text-sm text-gray-500 leading-relaxed">Processing trauma safely.</p>
                        </div>
                    </div>
                </div>

                <!-- OCD -->
                <div class="group border border-primary/5 fade-in-section w-[calc(50%-0.75rem)] md:w-[calc(50%-1.5rem)] lg:w-[calc(33.333%-1.5rem)] bg-white/70 backdrop-blur-md rounded-[2rem] p-4 hover:bg-white hover:shadow-2xl hover:scale-[1.02] transition-all duration-500 flex flex-col justify-between" style="transition-delay: 200ms;">
                    <div>
                        <div class="h-40 md:h-48 w-full rounded-2xl overflow-hidden mb-4 relative">
                            <img src="assets/home/ocd.png" alt="OCD" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        </div>
                        <div class="px-2 pb-2">
                            <h3 class="text-base md:text-xl font-bold text-primary mb-1 md:mb-2 group-hover:text-accent transition-colors">
                                OCD
                            </h3>
                            <p class="text-xs md:text-sm text-gray-500 leading-relaxed">Breaking intrusive loops.</p>
                        </div>
                    </div>
                </div>

                <!-- Bipolar Disorder -->
                <div class="group border border-primary/5 fade-in-section w-[calc(50%-0.75rem)] md:w-[calc(50%-1.5rem)] lg:w-[calc(33.333%-1.5rem)] bg-white/70 backdrop-blur-md rounded-[2rem] p-4 hover:bg-white hover:shadow-2xl hover:scale-[1.02] transition-all duration-500 flex flex-col justify-between" style="transition-delay: 250ms;">
                    <div>
                        <div class="h-40 md:h-48 w-full rounded-2xl overflow-hidden mb-4 relative">
                            <img src="assets/home/bipolar.png" alt="Bipolar Disorder" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        </div>
                        <div class="px-2 pb-2">
                            <h3 class="text-base md:text-xl font-bold text-primary mb-1 md:mb-2 group-hover:text-accent transition-colors">
                                Bipolar Disorder
                            </h3>
                            <p class="text-xs md:text-sm text-gray-500 leading-relaxed">Mood stabilization specialized.</p>
                        </div>
                    </div>
                </div>

                <!-- Suicidal Ideation -->
                <div class="group border border-primary/5 fade-in-section w-[calc(50%-0.75rem)] md:w-[calc(50%-1.5rem)] lg:w-[calc(33.333%-1.5rem)] bg-white/70 backdrop-blur-md rounded-[2rem] p-4 hover:bg-white hover:shadow-2xl hover:scale-[1.02] transition-all duration-500 flex flex-col justify-between" style="transition-delay: 300ms;">
                    <div>
                        <div class="h-40 md:h-48 w-full rounded-2xl overflow-hidden mb-4 relative">
                            <img src="assets/home/suicidal-ideation.png" alt="Suicidal Ideation" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        </div>
                        <div class="px-2 pb-2">
                            <h3 class="text-base md:text-xl font-bold text-primary mb-1 md:mb-2 group-hover:text-accent transition-colors">
                                Suicidal Ideation
                            </h3>
                            <p class="text-xs md:text-sm text-gray-500 leading-relaxed">Rapid reduction of acute risks.</p>
                        </div>
                    </div>
                </div>

                <!-- Sleep Disorders -->
                <div class="group border border-primary/5 fade-in-section w-[calc(50%-0.75rem)] md:w-[calc(50%-1.5rem)] lg:w-[calc(33.333%-1.5rem)] bg-white/70 backdrop-blur-md rounded-[2rem] p-4 hover:bg-white hover:shadow-2xl hover:scale-[1.02] transition-all duration-500 flex flex-col justify-between" style="transition-delay: 350ms;">
                    <div>
                        <div class="h-40 md:h-48 w-full rounded-2xl overflow-hidden mb-4 relative">
                            <img src="assets/home/sleep-disorders.png" alt="Sleep Disorders" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        </div>
                        <div class="px-2 pb-2">
                            <h3 class="text-base md:text-xl font-bold text-primary mb-1 md:mb-2 group-hover:text-accent transition-colors">
                                Sleep Disorders
                            </h3>
                            <p class="text-xs md:text-sm text-gray-500 leading-relaxed">Restoring natural sleep cycles.</p>
                        </div>
                    </div>
                </div>

                <!-- Chronic Pain -->
                <div class="group border border-primary/5 fade-in-section w-[calc(50%-0.75rem)] md:w-[calc(50%-1.5rem)] lg:w-[calc(33.333%-1.5rem)] bg-white/70 backdrop-blur-md rounded-[2rem] p-4 hover:bg-white hover:shadow-2xl hover:scale-[1.02] transition-all duration-500 flex flex-col justify-between" style="transition-delay: 400ms;">
                    <div>
                        <div class="h-40 md:h-48 w-full rounded-2xl overflow-hidden mb-4 relative">
                            <img src="assets/home/chronic-pain.png" alt="Chronic Pain" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        </div>
                        <div class="px-2 pb-2">
                            <h3 class="text-base md:text-xl font-bold text-primary mb-1 md:mb-2 group-hover:text-accent transition-colors">
                                Chronic Pain
                            </h3>
                            <p class="text-xs md:text-sm text-gray-500 leading-relaxed">Relieving fibromyalgia & neural discomfort.</p>
                        </div>
                    </div>
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
                        <img src="assets/home/rox-image.png" alt="Roxanne DoBrava, APRN-CNP, PMHNP-BC"
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
 
                    <h2 class="text-5xl md:text-6xl text-primary mb-4" style="font-family: 'Bauhaus Soft', cursive;">Roxanne DoBrava</h2>
                    <p class="text-xl text-gray-500 font-light mb-10 italic font-serif">APRN-CNP, PMHNP-BC</p>

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
                                        class="w-1.5 h-1.5 rounded-full bg-accent"></span>Medication Management</li>
                                <li class="flex items-center gap-3"><span
                                        class="w-1.5 h-1.5 rounded-full bg-accent"></span>TMS Therapy</li>
                                <li class="flex items-center gap-3"><span
                                        class="w-1.5 h-1.5 rounded-full bg-accent"></span>Psychotherapy</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Google Reviews Section -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <section id="reviews" class="py-16 bg-cream relative overflow-hidden">
        <!-- Abstract Background Decorative Blobs -->
        <div class="absolute top-0 left-0 w-64 h-64 bg-accent/5 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-primary/5 rounded-full blur-3xl pointer-events-none"></div>

        <div class="container mx-auto px-6 relative z-10">
            <!-- Section Header -->
            <div class="text-center max-w-2xl mx-auto mb-12 fade-in-section">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary/5 border border-primary/10 text-primary font-bold text-xs tracking-wider uppercase mb-6">
                    <!-- Google SVG Icon -->
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12.24 10.285V13.4h6.887c-.279 1.56-1.602 4.58-6.887 4.58-4.59 0-8.332-3.799-8.332-8.486S7.65 1.009 12.24 1.009c2.61 0 4.35 1.127 5.35 2.083l2.45-2.355C18.47 1.832 15.62 0 12.24 0 5.58 0 0 5.372 0 12s5.58 12 12.24 12c6.96 0 11.57-4.887 11.57-11.787 0-.796-.08-1.402-.19-1.928H12.24z"/>
                    </svg>
                    Google Reviews
                </div>
                <h2 class="text-4xl md:text-5xl text-primary mb-4" style="font-family: 'Bauhaus Soft', cursive;">
                    Real Stories. Real Healing.
                </h2>
                <!-- Global rating display -->
                <div class="flex items-center justify-center gap-2 mb-2">
                    <span class="text-lg font-bold text-primary">5.0</span>
                    <div class="flex text-amber-500">
                        <!-- 5 filled stars -->
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    </div>
                    <span class="text-sm text-gray-500 font-medium">(48 reviews)</span>
                </div>
                <p class="text-gray-500 text-sm md:text-base leading-relaxed">
                    We are dedicated to helping our patients reclaim their wellness. Read the verified experiences of individuals who have undergone treatment at our clinic.
                </p>
            </div>

            <!-- Swiper Slider Container -->
            <div class="swiper reviews-swiper px-4 py-8 relative">
                <div class="swiper-wrapper">
                    <!-- Review Card 1 -->
                    <div class="swiper-slide h-auto">
                        <div class="bg-white border border-accent/10 p-8 rounded-[2.5rem] shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between h-full group">
                            <div>
                                <div class="flex items-center justify-between mb-6">
                                    <div class="flex text-amber-500">
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    </div>
                                    <svg class="w-4 h-4 text-gray-300" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M12.24 10.285V13.4h6.887c-.279 1.56-1.602 4.58-6.887 4.58-4.59 0-8.332-3.799-8.332-8.486S7.65 1.009 12.24 1.009c2.61 0 4.35 1.127 5.35 2.083l2.45-2.355C18.47 1.832 15.62 0 12.24 0 5.58 0 0 5.372 0 12s5.58 12 12.24 12c6.96 0 11.57-4.887 11.57-11.787 0-.796-.08-1.402-.19-1.928H12.24z"/>
                                    </svg>
                                </div>
                                <p class="text-primary/70 text-sm leading-relaxed mb-6 font-light">
                                    "The care I received at Tranquil Minds was absolute life-changing. After years of struggling with treatment-resistant depression, their Neurostar TMS therapy gave me my life back. The staff is incredibly supportive and compassionate."
                                </p>
                            </div>
                            <div class="flex items-center gap-4 border-t border-gray-100 pt-4 mt-auto">
                                <div class="w-10 h-10 rounded-full bg-accent/10 flex items-center justify-center font-bold text-accent">
                                    SM
                                </div>
                                <div>
                                    <h4 class="text-primary font-bold text-sm">Sarah Miller</h4>
                                    <p class="text-[10px] text-gray-400">Verified Google Reviewer</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Review Card 2 -->
                    <div class="swiper-slide h-auto">
                        <div class="bg-white border border-accent/10 p-8 rounded-[2.5rem] shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between h-full group">
                            <div>
                                <div class="flex items-center justify-between mb-6">
                                    <div class="flex text-amber-500">
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    </div>
                                    <svg class="w-4 h-4 text-gray-300" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M12.24 10.285V13.4h6.887c-.279 1.56-1.602 4.58-6.887 4.58-4.59 0-8.332-3.799-8.332-8.486S7.65 1.009 12.24 1.009c2.61 0 4.35 1.127 5.35 2.083l2.45-2.355C18.47 1.832 15.62 0 12.24 0 5.58 0 0 5.372 0 12s5.58 12 12.24 12c6.96 0 11.57-4.887 11.57-11.787 0-.796-.08-1.402-.19-1.928H12.24z"/>
                                    </svg>
                                </div>
                                <p class="text-primary/70 text-sm leading-relaxed mb-6 font-light">
                                    "A highly professional and clean environment. Roxanne DoBrava and the entire team are incredibly thorough, taking the time to answer every question. The personalized care and attention is unlike any other clinic."
                                </p>
                            </div>
                            <div class="flex items-center gap-4 border-t border-gray-100 pt-4 mt-auto">
                                <div class="w-10 h-10 rounded-full bg-accent/10 flex items-center justify-center font-bold text-accent">
                                    JD
                                </div>
                                <div>
                                    <h4 class="text-primary font-bold text-sm">James Davis</h4>
                                    <p class="text-[10px] text-gray-400">Verified Google Reviewer</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Review Card 3 -->
                    <div class="swiper-slide h-auto">
                        <div class="bg-white border border-accent/10 p-8 rounded-[2.5rem] shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between h-full group">
                            <div>
                                <div class="flex items-center justify-between mb-6">
                                    <div class="flex text-amber-500">
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    </div>
                                    <svg class="w-4 h-4 text-gray-300" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M12.24 10.285V13.4h6.887c-.279 1.56-1.602 4.58-6.887 4.58-4.59 0-8.332-3.799-8.332-8.486S7.65 1.009 12.24 1.009c2.61 0 4.35 1.127 5.35 2.083l2.45-2.355C18.47 1.832 15.62 0 12.24 0 5.58 0 0 5.372 0 12s5.58 12 12.24 12c6.96 0 11.57-4.887 11.57-11.787 0-.796-.08-1.402-.19-1.928H12.24z"/>
                                    </svg>
                                </div>
                                <p class="text-primary/70 text-sm leading-relaxed mb-6 font-light">
                                    "I was very skeptical about TMS at first, but after completing the program, my depression and anxiety symptoms have dramatically reduced. Very grateful for this treatment and the wonderful clinic team."
                                </p>
                            </div>
                            <div class="flex items-center gap-4 border-t border-gray-100 pt-4 mt-auto">
                                <div class="w-10 h-10 rounded-full bg-accent/10 flex items-center justify-center font-bold text-accent">
                                    ER
                                </div>
                                <div>
                                    <h4 class="text-primary font-bold text-sm">Emily Rodriguez</h4>
                                    <p class="text-[10px] text-gray-400">Verified Google Reviewer</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Review Card 4 -->
                    <div class="swiper-slide h-auto">
                        <div class="bg-white border border-accent/10 p-8 rounded-[2.5rem] shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between h-full group">
                            <div>
                                <div class="flex items-center justify-between mb-6">
                                    <div class="flex text-amber-500">
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    </div>
                                    <svg class="w-4 h-4 text-gray-300" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M12.24 10.285V13.4h6.887c-.279 1.56-1.602 4.58-6.887 4.58-4.59 0-8.332-3.799-8.332-8.486S7.65 1.009 12.24 1.009c2.61 0 4.35 1.127 5.35 2.083l2.45-2.355C18.47 1.832 15.62 0 12.24 0 5.58 0 0 5.372 0 12s5.58 12 12.24 12c6.96 0 11.57-4.887 11.57-11.787 0-.796-.08-1.402-.19-1.928H12.24z"/>
                                    </svg>
                                </div>
                                <p class="text-primary/70 text-sm leading-relaxed mb-6 font-light">
                                    "From scheduling my first consult to completing my sessions, the process was seamless. The staff handles insurance directly which was a huge relief, and the clinic is incredibly relaxing."
                                </p>
                            </div>
                            <div class="flex items-center gap-4 border-t border-gray-100 pt-4 mt-auto">
                                <div class="w-10 h-10 rounded-full bg-accent/10 flex items-center justify-center font-bold text-accent">
                                    MT
                                </div>
                                <div>
                                    <h4 class="text-primary font-bold text-sm">Michael Thompson</h4>
                                    <p class="text-[10px] text-gray-400">Verified Google Reviewer</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Review Card 5 -->
                    <div class="swiper-slide h-auto">
                        <div class="bg-white border border-accent/10 p-8 rounded-[2.5rem] shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between h-full group">
                            <div>
                                <div class="flex items-center justify-between mb-6">
                                    <div class="flex text-amber-500">
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    </div>
                                    <svg class="w-4 h-4 text-gray-300" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M12.24 10.285V13.4h6.887c-.279 1.56-1.602 4.58-6.887 4.58-4.59 0-8.332-3.799-8.332-8.486S7.65 1.009 12.24 1.009c2.61 0 4.35 1.127 5.35 2.083l2.45-2.355C18.47 1.832 15.62 0 12.24 0 5.58 0 0 5.372 0 12s5.58 12 12.24 12c6.96 0 11.57-4.887 11.57-11.787 0-.796-.08-1.402-.19-1.928H12.24z"/>
                                    </svg>
                                </div>
                                <p class="text-primary/70 text-sm leading-relaxed mb-6 font-light">
                                    "I felt truly heard for the first time in years. Roxanne DoBrava combines clinical expertise with deep compassion. The TMS sessions were simple, painless, and highly effective for me."
                                </p>
                            </div>
                            <div class="flex items-center gap-4 border-t border-gray-100 pt-4 mt-auto">
                                <div class="w-10 h-10 rounded-full bg-accent/10 flex items-center justify-center font-bold text-accent">
                                    JC
                                </div>
                                <div>
                                    <h4 class="text-primary font-bold text-sm">Jessica Carter</h4>
                                    <p class="text-[10px] text-gray-400">Verified Google Reviewer</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Review Card 6 -->
                    <div class="swiper-slide h-auto">
                        <div class="bg-white border border-accent/10 p-8 rounded-[2.5rem] shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between h-full group">
                            <div>
                                <div class="flex items-center justify-between mb-6">
                                    <div class="flex text-amber-500">
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    </div>
                                    <svg class="w-4 h-4 fill-current text-gray-300" viewBox="0 0 24 24">
                                        <path d="M12.24 10.285V13.4h6.887c-.279 1.56-1.602 4.58-6.887 4.58-4.59 0-8.332-3.799-8.332-8.486S7.65 1.009 12.24 1.009c2.61 0 4.35 1.127 5.35 2.083l2.45-2.355C18.47 1.832 15.62 0 12.24 0 5.58 0 0 5.372 0 12s5.58 12 12.24 12c6.96 0 11.57-4.887 11.57-11.787 0-.796-.08-1.402-.19-1.928H12.24z"/>
                                    </svg>
                                </div>
                                <p class="text-primary/70 text-sm leading-relaxed mb-6 font-light">
                                    "Highly recommended clinic. It is clean, modern, and very welcoming. The treatments are based on strong science and delivered by staff who genuinely care about your mental wellbeing."
                                </p>
                            </div>
                            <div class="flex items-center gap-4 border-t border-gray-100 pt-4 mt-auto">
                                <div class="w-10 h-10 rounded-full bg-accent/10 flex items-center justify-center font-bold text-accent">
                                    DP
                                </div>
                                <div>
                                    <h4 class="text-primary font-bold text-sm">David Patel</h4>
                                    <p class="text-[10px] text-gray-400">Verified Google Reviewer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navigation & Pagination -->
                <div class="flex justify-center items-center gap-6 mt-8">
                    <button class="reviews-prev w-12 h-12 rounded-full border border-primary/20 hover:border-primary/60 flex items-center justify-center text-primary transition-all hover:bg-primary hover:text-white">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                    </button>
                    <!-- Pagination dots -->
                    <div class="reviews-pagination flex justify-center items-center gap-2"></div>
                    <button class="reviews-next w-12 h-12 rounded-full border border-primary/20 hover:border-primary/60 flex items-center justify-center text-primary transition-all hover:bg-primary hover:text-white">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Write & Read reviews links -->
            <div class="flex flex-col sm:flex-row justify-center items-center gap-4 mt-12 fade-in-section">
                <a href="https://www.google.com/maps/search/?api=1&query=Tranquil+Minds+Mental+Health+Castle+Rock+CO" target="_blank"
                    class="px-8 py-3 bg-primary text-white rounded-full font-bold text-sm shadow-md hover:bg-opacity-95 hover:shadow-lg hover:-translate-y-0.5 transition-all text-center">
                    Read All Reviews
                </a>
                <a href="https://www.google.com/maps/search/?api=1&query=Tranquil+Minds+Mental+Health+Castle+Rock+CO" target="_blank"
                    class="px-8 py-3 bg-transparent border-2 border-primary/20 hover:border-primary/60 text-primary rounded-full font-bold text-sm hover:-translate-y-0.5 transition-all text-center">
                    Write a Review
                </a>
            </div>
        </div>
    </section>

    <!-- Swiper Initialization -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const swiper = new Swiper('.reviews-swiper', {
                slidesPerView: 1,
                spaceBetween: 24,
                loop: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                navigation: {
                    nextEl: '.reviews-next',
                    prevEl: '.reviews-prev',
                },
                pagination: {
                    el: '.reviews-pagination',
                    clickable: true,
                    bulletClass: 'w-2 h-2 rounded-full bg-primary/20 cursor-pointer transition-all duration-300',
                    bulletActiveClass: 'w-6 bg-accent',
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                    },
                    1024: {
                        slidesPerView: 3,
                    }
                }
            });
        });
    </script>

    <!-- Insurance Section -->
    <section id="insurance-partners" class="py-16 bg-cream relative overflow-hidden border-t border-primary/5">
        <!-- Background Elements -->
        <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-accent/5 rounded-full blur-3xl pointer-events-none"></div>

        <div class="container mx-auto px-6 relative z-10">
            <!-- Section Header -->
            <div class="text-center max-w-2xl mx-auto mb-12 fade-in-section">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary/5 border border-primary/10 text-primary font-bold text-xs tracking-wider uppercase mb-6">
                    <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                    Insurance Coverage
                </div>
                <h2 class="text-4xl md:text-5xl text-primary mb-4" style="font-family: 'Bauhaus Soft', cursive;">
                    We Accept Major Insurance Plans
                </h2>
                <p class="text-gray-500 text-sm md:text-base leading-relaxed">
                    We work with most major insurance providers to help you access the mental health care you need. Our team handles the entire pre-authorization process for you.
                </p>
            </div>

            <!-- Insurance Logos Grid -->
            <div class="flex flex-wrap justify-center items-center gap-8 md:gap-12 lg:gap-16 max-w-6xl mx-auto fade-in-section">
                <!-- Aetna -->
                <div class="h-12 w-32 md:w-40 flex items-center justify-center filter grayscale hover:grayscale-0 opacity-70 hover:opacity-100 transition-all duration-300 hover:scale-105">
                    <img src="assets/insurances/aetna-logo.png" alt="Aetna" class="max-h-full max-w-full object-contain mix-blend-multiply">
                </div>
                <!-- Anthem -->
                <div class="h-12 w-32 md:w-40 flex items-center justify-center filter grayscale hover:grayscale-0 opacity-70 hover:opacity-100 transition-all duration-300 hover:scale-105">
                    <img src="assets/insurances/anthem.webp" alt="Anthem" class="max-h-full max-w-full object-contain mix-blend-multiply">
                </div>
                <!-- Carelon -->
                <div class="h-12 w-32 md:w-40 flex items-center justify-center filter grayscale hover:grayscale-0 opacity-70 hover:opacity-100 transition-all duration-300 hover:scale-105">
                    <img src="assets/insurances/carelon-logo.png" alt="Carelon" class="max-h-full max-w-full object-contain mix-blend-multiply">
                </div>
                <!-- Blue Cross Blue Shield -->
                <div class="h-12 w-32 md:w-40 flex items-center justify-center filter grayscale hover:grayscale-0 opacity-70 hover:opacity-100 transition-all duration-300 hover:scale-105">
                    <img src="assets/insurances/blue-cross-logo.png" alt="Blue Cross Blue Shield" class="max-h-full max-w-full object-contain mix-blend-multiply">
                </div>
                <!-- Cigna -->
                <div class="h-12 w-32 md:w-40 flex items-center justify-center filter grayscale hover:grayscale-0 opacity-70 hover:opacity-100 transition-all duration-300 hover:scale-105">
                    <img src="assets/insurances/cigna.webp" alt="Cigna" class="max-h-full max-w-full object-contain mix-blend-multiply">
                </div>
                <!-- Humana -->
                <div class="h-12 w-32 md:w-40 flex items-center justify-center filter grayscale hover:grayscale-0 opacity-70 hover:opacity-100 transition-all duration-300 hover:scale-105">
                    <img src="assets/insurances/humana-logo.png" alt="Humana" class="max-h-full max-w-full object-contain mix-blend-multiply">
                </div>
                <!-- Kaiser Permanente -->
                <div class="h-12 w-32 md:w-40 flex items-center justify-center filter grayscale hover:grayscale-0 opacity-70 hover:opacity-100 transition-all duration-300 hover:scale-105">
                    <img src="assets/insurances/Kaiser-Permanente-Logo.png" alt="Kaiser Permanente" class="max-h-full max-w-full object-contain mix-blend-multiply">
                </div>
                <!-- Medicaid -->
                <div class="h-12 w-32 md:w-40 flex items-center justify-center filter grayscale hover:grayscale-0 opacity-70 hover:opacity-100 transition-all duration-300 hover:scale-105">
                    <img src="assets/insurances/medicaid-gov-logo.png" alt="Medicaid" class="max-h-full max-w-full object-contain mix-blend-multiply">
                </div>
                <!-- Medicare -->
                <div class="h-12 w-32 md:w-40 flex items-center justify-center filter grayscale hover:grayscale-0 opacity-70 hover:opacity-100 transition-all duration-300 hover:scale-105">
                    <img src="assets/insurances/medicare.webp" alt="Medicare" class="max-h-full max-w-full object-contain mix-blend-multiply">
                </div>
                <!-- Meritain Health -->
                <div class="h-12 w-32 md:w-40 flex items-center justify-center filter grayscale hover:grayscale-0 opacity-70 hover:opacity-100 transition-all duration-300 hover:scale-105">
                    <img src="assets/insurances/meritain-health-logo.jpeg" alt="Meritain Health" class="max-h-full max-w-full object-contain mix-blend-multiply">
                </div>
                <!-- TRICARE -->
                <div class="h-12 w-32 md:w-40 flex items-center justify-center filter grayscale hover:grayscale-0 opacity-70 hover:opacity-100 transition-all duration-300 hover:scale-105">
                    <img src="assets/insurances/tricare.webp" alt="TRICARE" class="max-h-full max-w-full object-contain mix-blend-multiply">
                </div>
                <!-- UnitedHealthcare -->
                <div class="h-12 w-32 md:w-40 flex items-center justify-center filter grayscale hover:grayscale-0 opacity-70 hover:opacity-100 transition-all duration-300 hover:scale-105">
                    <img src="assets/insurances/united-healthcare-logo.jpeg" alt="UnitedHealthcare" class="max-h-full max-w-full object-contain mix-blend-multiply">
                </div>
            </div>

            <!-- Call to Action -->
            <div class="text-center mt-12 fade-in-section">
                <a href="#contact" class="inline-flex items-center gap-2 px-8 py-3 bg-primary hover:bg-opacity-95 text-white rounded-full font-bold text-sm shadow-md hover:shadow-lg hover:-translate-y-0.5 transition-all">
                    Verify Your Insurance
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>
