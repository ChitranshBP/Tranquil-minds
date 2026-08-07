<?php
$page_title       = "Patient Testimonials & Reviews | Tranquil Minds Mental Health";
$page_description = "Read what patients say about Tranquil Minds Mental Health in Monticello, MN — real experiences with Neurostar® TMS, medication management, and compassionate psychiatric care.";
$hero_title       = 'Real People,<br><span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-white to-white/50">Real Stories.</span>';
$hero_subtitle    = 'Healing looks different for everyone. Here are some of the experiences our patients have chosen to share about their care at Tranquil Minds.';
$hero_badge       = 'Patient Testimonials';
$hero_cta1_text   = 'Book a Free Consultation';
$hero_cta1_link   = '#contact';
$hero_cta2_text   = 'Read on Google';
$hero_cta2_link   = 'https://www.google.com/search?q=Tranquil+Minds+Mental+Health+Monticello+MN+reviews';
?>
<?php include 'header.php'; ?>
<?php include 'hero-service.php'; ?>

    <!-- ===== RATING STRIP ===== -->
    <section class="py-12 bg-[#FAFAFF] relative overflow-hidden">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-accent/10 rounded-full blur-[140px] translate-x-1/3 -translate-y-1/3 pointer-events-none"></div>
        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-3xl mx-auto text-center fade-in-section">
                <!-- Google-style rating -->
                <div class="inline-flex items-center gap-3 bg-white rounded-2xl border border-primary/8 shadow-sm px-6 py-4">
                    <svg class="w-8 h-8" viewBox="0 0 24 24"><path fill="#4285F4" d="M12.24 10.285V13.4h6.887c-.279 1.56-1.602 4.58-6.887 4.58-4.59 0-8.332-3.799-8.332-8.486S7.65 1.009 12.24 1.009c2.61 0 4.35 1.127 5.35 2.083l2.45-2.355C18.47 1.832 15.62 0 12.24 0 5.58 0 0 5.372 0 12s5.58 12 12.24 12c6.96 0 11.57-4.887 11.57-11.787 0-.796-.08-1.402-.19-1.928H12.24z"/></svg>
                    <div class="text-left">
                        <div class="flex items-center gap-2">
                            <span class="text-2xl font-bold text-primary">4.2</span>
                            <div class="flex text-amber-500">
                                <?php for ($i = 0; $i < 4; $i++): ?>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <?php endfor; ?>
                                <svg class="w-4 h-4" viewBox="0 0 20 20"><defs><linearGradient id="tstar42"><stop offset="20%" stop-color="#F59E0B"/><stop offset="20%" stop-color="#D1D5DB"/></linearGradient></defs><path fill="url(#tstar42)" d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            </div>
                        </div>
                        <div class="text-gray-500 text-xs font-medium">Based on 6 Google reviews</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== TESTIMONIALS GRID ===== -->
    <section id="testimonials" class="py-16 bg-white relative overflow-hidden">
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-primary/6 rounded-full blur-[140px] -translate-x-1/3 translate-y-1/3 pointer-events-none"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center max-w-2xl mx-auto mb-12 fade-in-section">
                <div class="flex items-center justify-center gap-3 mb-6">
                    <span class="h-px w-12 bg-primary/40"></span>
                    <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">In Their Words</span>
                    <span class="h-px w-12 bg-primary/40"></span>
                </div>
                <h2 class="text-4xl md:text-5xl text-primary mb-5 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                    Stories of Healing
                </h2>
                <p class="text-gray-500 text-lg">
                    Every journey is personal. These are a few of the experiences patients have been kind enough to share.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 auto-rows-fr gap-6">
                <?php
                $reviews = [
                    ['name' => 'Kaitlyn Charlson',      'initials' => 'KC', 'quote' => 'I had an amazing experience with the team at Tranquil Minds Mental Health. While going through TMS treatment both Roxanne and Tiana were very invested in my experience and accommodating for my needs. The environment is extremely welcoming and you instantly feel at home. You also know you will be well taken care of as they both work so well along side one another. The treatment itself will make you walk away from it feeling mentally stronger to tackle your everyday life and be able to enjoy it while doing so. They truly want the best for their patients and are invested in them because even after treatment they will continue to check-in on you. If you&rsquo;re considering doing TMS or looking for ways to help your mental health I would highly recommend Tranquil Minds Mental Health.'],
                    ['name' => 'Linnae Efraimson',     'initials' => 'LE', 'quote' => 'These ladies are the best in the business hands down! Fully trust Roxanne. She is so knowledgeable and has your best interests at heart. Super easy to get ahold of and communicate with! Highly recommend :)'],
                    ['name' => 'David DoBrava',        'initials' => 'DD', 'quote' => 'I completed TMS treatment at Tranquil Minds Mental Health. Tiana and Roxenne went out of there way to help me. As a retired USAF veteran TMS has help me with PTSD, anxiety and depression. I would recommend TMS to everyone that it could help. Give Tranquil Minds Mental Health a call today.'],
                    ['name' => 'Linda Wipper Anderson','initials' => 'LW', 'quote' => 'Roxanne knows her stuff and is very easy to talk to.'],
                    ['name' => 'Lynnette Redinger',    'initials' => 'LR', 'quote' => 'I am so glad I found Tranquil Minds and I was able to complete TMS therapy with them. It is a life changer for sure, and Tiana and Roxanne are awesome:)'],
                ];
                foreach ($reviews as $rv): ?>
                <div class="bg-[#FAFAFF] border border-primary/8 rounded-[1.5rem] p-8 flex flex-col hover:bg-white hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                    <!-- Stars + Google -->
                    <div class="flex items-center justify-between mb-5">
                        <div class="flex text-amber-500">
                            <?php for ($i = 0; $i < 5; $i++): ?>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <?php endfor; ?>
                        </div>
                        <svg class="w-5 h-5" viewBox="0 0 24 24"><path fill="#4285F4" d="M12.24 10.285V13.4h6.887c-.279 1.56-1.602 4.58-6.887 4.58-4.59 0-8.332-3.799-8.332-8.486S7.65 1.009 12.24 1.009c2.61 0 4.35 1.127 5.35 2.083l2.45-2.355C18.47 1.832 15.62 0 12.24 0 5.58 0 0 5.372 0 12s5.58 12 12.24 12c6.96 0 11.57-4.887 11.57-11.787 0-.796-.08-1.402-.19-1.928H12.24z"/></svg>
                    </div>
                    <!-- Quote -->
                    <div class="flex-grow mb-6">
                        <p class="text-gray-600 text-base leading-relaxed review-text">&ldquo;<?php echo $rv['quote']; ?>&rdquo;</p>
                        <button type="button" class="review-more text-accent mt-3" aria-expanded="false">Read more</button>
                    </div>
                    <!-- Author -->
                    <div class="flex items-center gap-3 pt-4 border-t border-primary/10 mt-auto">
                        <div class="w-10 h-10 rounded-full bg-accent/15 flex items-center justify-center font-bold text-accent text-sm flex-shrink-0"><?php echo $rv['initials']; ?></div>
                        <div>
                            <div class="font-bold text-primary text-sm"><?php echo $rv['name']; ?></div>
                            <div class="text-gray-400 text-[11px] font-medium">Verified Google Reviewer</div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- Google reviews CTA -->
            <div class="text-center mt-12 fade-in-section">
                <a href="https://www.google.com/search?q=Tranquil+Minds+Mental+Health+Monticello+MN+reviews" target="_blank" rel="noopener" class="inline-flex items-center gap-2 px-8 py-4 bg-white border border-primary/15 text-primary rounded-full font-bold hover:border-primary/40 hover:shadow-lg transition-all duration-300">
                    <svg class="w-5 h-5" viewBox="0 0 24 24"><path fill="#4285F4" d="M12.24 10.285V13.4h6.887c-.279 1.56-1.602 4.58-6.887 4.58-4.59 0-8.332-3.799-8.332-8.486S7.65 1.009 12.24 1.009c2.61 0 4.35 1.127 5.35 2.083l2.45-2.355C18.47 1.832 15.62 0 12.24 0 5.58 0 0 5.372 0 12s5.58 12 12.24 12c6.96 0 11.57-4.887 11.57-11.787 0-.796-.08-1.402-.19-1.928H12.24z"/></svg>
                    Read &amp; Leave a Review on Google
                </a>
            </div>
        </div>
    </section>

    <!-- ===== TRUST BAR ===== -->
    <section class="py-14 bg-[#2A163F] relative overflow-hidden">
        <div class="absolute top-0 right-0 w-[500px] h-full bg-accent/15 rounded-full blur-3xl pointer-events-none"></div>
        <div class="container mx-auto px-6 relative z-10">
            <div class="grid sm:grid-cols-3 gap-8 text-center fade-in-section max-w-4xl mx-auto">
                <?php
                $trust = [
                    ['t' => 'FDA-Cleared Care', 'd' => 'Neurostar® TMS, an FDA-cleared, non-drug therapy'],
                    ['t' => 'Whole-Person Approach', 'd' => 'Therapy, medication management, and TMS under one roof'],
                    ['t' => 'Compassion First', 'd' => 'A calm, welcoming space where you feel truly heard'],
                ];
                foreach ($trust as $t): ?>
                <div>
                    <div class="w-12 h-12 mx-auto rounded-2xl bg-white/10 flex items-center justify-center text-accent mb-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    </div>
                    <h3 class="text-white font-bold text-lg mb-1"><?php echo $t['t']; ?></h3>
                    <p class="text-white/50 text-sm leading-relaxed"><?php echo $t['d']; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ===== CTA ===== -->
    <section class="py-16 bg-white relative overflow-hidden">
        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-7xl mx-auto bg-primary rounded-[2.5rem] overflow-hidden shadow-2xl relative fade-in-section">
                <div class="absolute top-0 right-0 w-[400px] h-[400px] bg-accent rounded-full blur-[120px] opacity-25 translate-x-1/3 -translate-y-1/3 pointer-events-none"></div>
                <div class="absolute bottom-0 left-0 w-[300px] h-[300px] bg-accent-light rounded-full blur-[110px] opacity-20 -translate-x-1/3 translate-y-1/3 pointer-events-none"></div>

                <div class="relative z-10 px-8 md:px-14 py-10 flex flex-col lg:flex-row items-center justify-between gap-8 text-center lg:text-left">
                    <div class="max-w-2xl">
                        <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-white/10 border border-white/20 text-white/80 text-[11px] font-bold uppercase tracking-widest mb-4">
                            <span class="w-1.5 h-1.5 rounded-full bg-green-400 animate-pulse"></span>
                            Your Story Starts Here
                        </div>
                        <h2 class="text-3xl md:text-4xl text-white mb-2 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                            Ready to Write Your Own?
                        </h2>
                        <p class="text-white/70 text-base md:text-lg">
                            Start with a free, confidential 15-minute consultation — and take the first step toward feeling better.
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
    </style>

<?php include 'footer.php'; ?>
