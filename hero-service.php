<?php
/**
 * Preserved Hero Section for Service Pages
 * Features the interactive Three.js neural background animation
 */
$hero_title = $hero_title ?? 'Rewiring Hope. <br><span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-white to-white/50">One Pulse at a Time.</span>';
$hero_subtitle = $hero_subtitle ?? 'Advanced mental wellness & Neurostar® TMS therapy. Restoring balance through the perfect synthesis of science and compassion.';
$hero_badge = $hero_badge ?? 'Accepting New Patients for 2026';
$hero_cta1_text = $hero_cta1_text ?? 'Begin Your Journey';
$hero_cta1_link = $hero_cta1_link ?? '#welcome';
$hero_cta2_text = $hero_cta2_text ?? 'Explore Treatment';
$hero_cta2_link = $hero_cta2_link ?? '#tms';
?>
    <!-- Hero Section (Epic & Innovative Redesign - Preserved Three.js Variant) -->
    <header
        class="relative min-h-[80vh] md:min-h-[520px] flex items-center overflow-hidden mx-2 md:mx-6 mb-6 rounded-b-[2rem] md:rounded-b-[3rem] mt-0 pt-28 pb-14 md:pt-36 md:pb-20"
        id="home">
        <!-- Three.js Canvas Container -->
        <div id="hero-canvas" class="absolute inset-0 z-0 scale-100"></div>

        <!-- Decoration: Noise Overlay (Optional Texture) -->
        <div
            class="absolute inset-0 z-0 pointer-events-none opacity-20 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0naHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmcnIHdpZHRoPSc0MDAnIGhlaWdodD0nNDAwJz48ZmlsdGVyIGlkPSdub2lzZSc+PGZlVHVyYnVsZW5jZSB0eXBlPSdmcmFjdGFsTm9pc2UnIGJhc2VGcmVxdWVuY3k9JzAuNjUnIG51bW9jdGF2ZXM9JzMnIHN0aXRjaFRpbGVzPSdzdGl0Y2gnLz48L2ZpbHRlcj48cmVjdCB3aWR0aD0nMTAwJScgaGVpZ2h0PScxMDAlJyBmaWx0ZXI9J3VybCgjbm9pc2UpJyBvcGFjaXR5PScwLjQnLz48L3N2Zz4=')]">
        </div>

        <!-- Hero Content -->
        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-3xl fade-in-section">
                <!-- Badge -->
                <?php if (!empty($hero_badge)): ?>
                <div
                    class="inline-flex items-center mt-4 md:mt-0 gap-2 px-4 py-2 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-white/90 text-sm font-medium mb-8 animate-pulse">
                    <span class="w-2 h-2 rounded-full bg-accent"></span>
                    <?php echo $hero_badge; ?>
                </div>
                <?php endif; ?>

                <!-- Main Heading -->
                <h1 class="text-4xl md:text-5xl lg:text-6xl leading-[1.1] text-white mb-8"
                    style="font-family: 'Bauhaus Soft', cursive;">
                    <?php echo $hero_title; ?>
                </h1>

                <!-- Subtitle with Glass Card Effect -->
                <p class="text-xl md:text-2xl text-gray-200 font-light mb-10 max-w-2xl leading-relaxed">
                    <?php echo $hero_subtitle; ?>
                </p>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="<?php echo $hero_cta1_link; ?>"
                        class="px-8 py-4 bg-accent text-white rounded-full font-bold text-lg shadow-[0_0_20px_rgba(197,94,42,0.5)] hover:bg-accent-light hover:shadow-[0_0_30px_rgba(197,94,42,0.7)] hover:-translate-y-1 transition-all text-center">
                        <?php echo $hero_cta1_text; ?>
                    </a>
                    <a href="<?php echo $hero_cta2_link; ?>"
                        class="px-8 py-4 bg-white/5 backdrop-blur-sm border border-white/20 text-white rounded-full font-bold text-lg hover:bg-white/20 hover:border-white/40 transition-all text-center flex items-center justify-center gap-2 group">
                        <span><?php echo $hero_cta2_text; ?></span>
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
