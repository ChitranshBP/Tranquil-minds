<?php
/**
 * FAQ Section (Serene & Professional Redesign)
 * Standalone section partial — include it on any page that needs the FAQ accordion.
 * Requires the shared accordion JS in footer.php.
 */
?>
    <!-- ===== FAQ ===== -->
    <section id="faq" class="py-10 relative bg-[#F5F7F4] overflow-hidden">
        <!-- Decor: Theme Orange Gradients -->
        <div
            class="absolute top-0 right-0 w-[600px] h-[600px] bg-accent/20 rounded-full blur-[120px] -translate-y-1/2 translate-x-1/2 pointer-events-none">
        </div>
        <div
            class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-accent/20 rounded-full blur-[100px] translate-y-1/2 -translate-x-1/2 pointer-events-none">
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="grid lg:grid-cols-12 gap-12 lg:gap-20 items-start">

                <!-- Left Column: Heading & Visual -->
                <div class="lg:col-span-5 flex flex-col gap-10 lg:sticky lg:top-32 fade-in-section  lg:pb-0">
                    <div>
                        <div class="flex items-center gap-3 mb-4">
                            <span class="h-px w-12 bg-primary/40"></span>
                            <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">Clarity &
                                Comfort</span>
                        </div>
                        <h2 class="text-5xl md:text-6xl text-primary mb-6 leading-tight"
                            style="font-family: 'Bauhaus Soft', cursive;">Common <br>Questions</h2>
                        <p class="text-gray-600 text-lg leading-relaxed">
                            Embarking on a new treatment path can raise many questions. We are here to provide
                            transparent, scientifically-backed answers to help you feel confident in your care.
                        </p>
                    </div>
                </div>

                <!-- Right Column: Accordion -->
                <div class="lg:col-span-7 flex flex-col gap-4 pt-4 fade-in-section">

                    <!-- Item 1 -->
                    <div class="border-b border-primary/10 overflow-hidden group">
                        <button
                            class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                             <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Is
                                 Neurostar® TMS therapy painful?</span>
                            <div
                                class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                                <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                            </div>
                        </button>
                        <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                            <div class="pb-6 text-gray-600 leading-relaxed text-base max-w-3xl">
                                Most patients report a mild tapping sensation on the scalp resembling a woodpecker
                                tapping. It is generally not painful, requires no anesthesia, and you can drive yourself
                                home immediately after each session.
                            </div>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="border-b border-primary/10 overflow-hidden group">
                        <button
                            class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                             <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Does
                                 insurance cover Neurostar® TMS?</span>
                            <div
                                class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                                <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                            </div>
                        </button>
                        <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                            <div class="pb-6 text-gray-600 leading-relaxed text-base max-w-3xl">
                                 Yes, most major insurance providers (including Medicare, Blue Cross, United, and Aetna)
                                 cover TMS for Treatment-Resistant Depression. Our care coordinators handle the
                                 entire
                                pre-authorization process for you to ensure seamless coverage.
                            </div>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="border-b border-primary/10 overflow-hidden group">
                        <button
                            class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                            <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">How
                                long does a course take?</span>
                            <div
                                class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                                <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                            </div>
                        </button>
                        <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                            <div class="pb-6 text-gray-600 leading-relaxed text-base max-w-3xl">
                                A standard course typically involves daily sessions (Mon-Fri) for about 6 weeks,
                                followed by a 3-week tapering phase. Each session lasts between 19 to 37 minutes,
                                integrating perfectly into your daily routine.
                            </div>
                        </div>
                    </div>

                    <!-- Item 4 (New) -->
                    <div class="border-b border-primary/10 overflow-hidden group">
                        <button
                            class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                            <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Are
                                there any side effects?</span>
                            <div
                                class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                                <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                            </div>
                        </button>
                        <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                            <div class="pb-6 text-gray-600 leading-relaxed text-base max-w-3xl">
                                 Neurostar® TMS is extremely well-tolerated. The most common side effect is mild scalp
                                discomfort
                                during the first few sessions, which typically resolves quickly. Unlike medications,
                                there are no systemic side effects like weight gain, drowsiness, or sexual dysfunction.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
