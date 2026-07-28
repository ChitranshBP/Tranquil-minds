<?php
$page_title       = "Contact Us | Tranquil Minds Mental Health";
$page_description = "Get in touch with Tranquil Minds Mental Health in Monticello, MN. Call, email, or visit us — or book a free 15-minute consultation to start your path toward feeling better.";
$hero_title       = 'Let’s Start<br><span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-white to-white/50">the Conversation.</span>';
$hero_subtitle    = 'Whether you’re ready to begin or simply exploring your options, we’d love to hear from you. Reaching out is the first step toward feeling like yourself again.';
$hero_badge       = 'We’re Here to Help';
$hero_cta1_text   = 'Send a Message';
$hero_cta1_link   = '#contact';
$hero_cta2_text   = 'Call 612-429-8280';
$hero_cta2_link   = 'tel:+16124298280';
?>
<?php include 'header.php'; ?>
<?php include 'hero-service.php'; ?>

    <!-- ===== WAYS TO REACH US ===== -->
    <section id="reach" class="py-16 bg-[#FAFAFF] relative overflow-hidden">
        <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-accent/10 rounded-full blur-[140px] translate-x-1/3 -translate-y-1/4 pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-primary/8 rounded-full blur-[120px] -translate-x-1/3 translate-y-1/3 pointer-events-none"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center max-w-2xl mx-auto mb-12 fade-in-section">
                <div class="flex items-center justify-center gap-3 mb-6">
                    <span class="h-px w-12 bg-primary/40"></span>
                    <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">Get in Touch</span>
                    <span class="h-px w-12 bg-primary/40"></span>
                </div>
                <h2 class="text-4xl md:text-5xl text-primary mb-5 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                    Ways to Reach Us
                </h2>
                <p class="text-gray-500 text-lg">
                    Reach out however feels most comfortable. Our team is here to answer your questions with warmth — never pressure.
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-8 items-stretch">

                <!-- LEFT: Contact methods -->
                <div class="fade-in-section flex flex-col gap-5">
                    <?php
                    $methods = [
                        [
                            'label' => 'Call Us',
                            'value' => '612-429-8280',
                            'href'  => 'tel:+16124298280',
                            'desc'  => 'Speak with our team directly — we’re happy to help.',
                            'icon'  => 'M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z',
                        ],
                        [
                            'label' => 'Email Us',
                            'value' => 'roxannedpmhnp@gmail.com',
                            'href'  => 'mailto:roxannedpmhnp@gmail.com',
                            'desc'  => 'Send us a note and we’ll reply as soon as we can.',
                            'icon'  => 'M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z',
                        ],
                        [
                            'label' => 'Visit Us',
                            'value' => '154 East Broadway Street, Suite 2, Monticello, MN 55362',
                            'href'  => 'https://www.google.com/maps/search/?api=1&query=154+East+Broadway+Street+Suite+2+Monticello+MN+55362',
                            'desc'  => 'Come see us at our calming clinic in the heart of Monticello.',
                            'icon'  => 'M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z M15 11a3 3 0 11-6 0 3 3 0 016 0z',
                        ],
                    ];
                    foreach ($methods as $m): ?>
                    <a href="<?php echo $m['href']; ?>" class="group bg-white rounded-[1.5rem] p-6 border border-primary/5 shadow-sm hover:shadow-xl hover:-translate-y-1 hover:border-accent/30 transition-all duration-300 flex items-start gap-5">
                        <div class="w-14 h-14 rounded-2xl bg-accent/10 flex items-center justify-center text-accent flex-shrink-0 group-hover:bg-accent group-hover:text-white transition-all duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="<?php echo $m['icon']; ?>"></path>
                            </svg>
                        </div>
                        <div class="min-w-0">
                            <div class="text-xs font-bold uppercase tracking-widest text-primary/50 mb-1"><?php echo $m['label']; ?></div>
                            <div class="text-lg font-bold text-primary group-hover:text-accent transition-colors break-words"><?php echo $m['value']; ?></div>
                            <p class="text-gray-500 text-sm mt-1 leading-relaxed"><?php echo $m['desc']; ?></p>
                        </div>
                    </a>
                    <?php endforeach; ?>

                    <!-- Availability strip -->
                    <div class="bg-primary rounded-[1.5rem] p-6 flex flex-col sm:flex-row items-center gap-5 text-center sm:text-left relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-52 h-full bg-accent/25 rounded-full blur-3xl pointer-events-none"></div>
                        <div class="w-14 h-14 rounded-2xl bg-white/10 flex items-center justify-center text-white flex-shrink-0 relative z-10">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                        <div class="relative z-10">
                            <div class="inline-flex items-center gap-2 mb-1">
                                <span class="w-2 h-2 rounded-full bg-green-400 animate-pulse"></span>
                                <span class="text-white/80 text-[11px] font-bold uppercase tracking-widest">Accepting New Patients</span>
                            </div>
                            <div class="text-white font-bold text-lg" style="font-family: 'Bauhaus Soft', cursive;">Monday – Friday · 9 AM – 6 PM</div>
                            <p class="text-white/70 text-sm">Free, no-obligation 15-minute consultations available.</p>
                        </div>
                    </div>
                </div>

                <!-- RIGHT: Map -->
                <div class="fade-in-section relative rounded-[2rem] overflow-hidden shadow-[0_30px_80px_-24px_rgba(42,22,63,0.3)] border border-primary/5 min-h-[420px]">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2826.8523714684756!2d-93.79641682374624!3d45.30581447107499!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x52b3a67a4e28b3a5%3A0x5a4568d47bdfd3d5!2s154%20E%20Broadway%20St%20%232%2C%20Monticello%2C%20MN%2055362!5e0!3m2!1sen!2sus!4v1705000000000!5m2!1sen!2sus"
                        width="100%" height="100%" style="border:0; filter: saturate(0.75) hue-rotate(230deg) brightness(0.9);"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                        title="Tranquil Minds Mental Health Location"
                        class="absolute inset-0 w-full h-full"></iframe>
                    <div class="absolute inset-0 bg-primary/10 pointer-events-none"></div>
                    <!-- Address badge -->
                    <div class="absolute bottom-5 left-5 right-5 z-10">
                        <div class="bg-white/90 backdrop-blur-md rounded-2xl px-5 py-4 flex items-center justify-between gap-4 shadow-lg">
                            <div class="min-w-0">
                                <div class="text-primary font-bold text-sm">Tranquil Minds Mental Health</div>
                                <div class="text-gray-500 text-xs truncate">154 E Broadway St, Suite 2, Monticello, MN</div>
                            </div>
                            <a href="https://www.google.com/maps/search/?api=1&query=154+East+Broadway+Street+Suite+2+Monticello+MN+55362" target="_blank" rel="noopener" class="flex-shrink-0 inline-flex items-center gap-1.5 px-4 py-2 bg-accent text-white rounded-full font-bold text-xs hover:bg-accent-light transition-colors whitespace-nowrap">
                                Directions
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pointer to form -->
            <div class="text-center mt-12 fade-in-section">
                <p class="text-gray-500 text-base">
                    Prefer to write?
                    <a href="#contact" class="text-accent font-bold hover:text-primary transition-colors underline underline-offset-4 decoration-accent/40">Fill out the form below</a>
                    and we’ll be in touch.
                </p>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>
