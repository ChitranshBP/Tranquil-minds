<?php
$page_title       = "Insurance & Coverage | Tranquil Minds Mental Health";
$page_description = "Tranquil Minds Mental Health in Monticello, MN accepts most major insurance plans — including Aetna, Cigna, Blue Cross MN, Optum, UnitedHealthcare, Medica, Medicare, and Medicaid. We handle the pre-authorization for you.";
$hero_title       = 'Insurance,<br><span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-white to-white/50">Made Simple.</span>';
$hero_subtitle    = 'Quality mental-health care should be accessible. We accept most major insurance plans and handle the entire pre-authorization process — so you can focus on feeling better.';
$hero_badge       = 'Insurance &amp; Coverage';
$hero_cta1_text   = 'Verify Your Insurance';
$hero_cta1_link   = '#contact';
$hero_cta2_text   = 'Call 612-429-8280';
$hero_cta2_link   = 'tel:+16124298280';
?>
<?php include 'header.php'; ?>
<?php include 'hero-service.php'; ?>

    <!-- ===== ACCEPTED PLANS ===== -->
    <section id="plans" class="py-16 bg-[#FAFAFF] relative overflow-hidden">
        <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-accent/10 rounded-full blur-[140px] translate-x-1/3 -translate-y-1/4 pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-primary/8 rounded-full blur-[120px] -translate-x-1/3 translate-y-1/3 pointer-events-none"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center max-w-2xl mx-auto mb-12 fade-in-section">
                <div class="flex items-center justify-center gap-3 mb-6">
                    <span class="h-px w-12 bg-primary/40"></span>
                    <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">Accepted Plans</span>
                    <span class="h-px w-12 bg-primary/40"></span>
                </div>
                <h2 class="text-4xl md:text-5xl text-primary mb-5 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                    Plans We Accept
                </h2>
                <p class="text-gray-500 text-lg">
                    We're in-network with many of the region's leading insurers. If you don't see your plan below, reach out — we're often able to help.
                </p>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-5 max-w-5xl mx-auto">
                <?php
                $plans = [
                    ['alt' => 'Aetna', 'img' => 'assets/insurances/aetna-logo.png'],
                    ['alt' => 'Cigna', 'img' => 'assets/insurances/cigna.webp'],
                    ['alt' => 'Blue Cross Blue Shield of Minnesota', 'img' => 'assets/insurances/blue-cross-logo.png'],
                    ['alt' => 'Optum', 'img' => 'assets/insurances/optum-logo.png'],
                    ['alt' => 'UnitedHealthcare', 'img' => 'assets/insurances/united-new.png'],
                    ['alt' => 'Medica', 'svg' => true],
                    ['alt' => 'Medicare', 'img' => 'assets/insurances/medicare.webp'],
                    ['alt' => 'Medicaid (MN &amp; WY)', 'img' => 'assets/insurances/medicaid-gov-logo.png'],
                ];
                foreach ($plans as $p): ?>
                <div class="bg-white rounded-2xl border border-primary/8 shadow-sm h-28 flex items-center justify-center p-6 hover:shadow-lg hover:border-accent/30 hover:-translate-y-1 transition-all duration-300 group">
                    <?php if (!empty($p['svg'])): ?>
                    <svg viewBox="0 0 120 40" class="max-h-10 w-auto grayscale group-hover:grayscale-0 opacity-80 group-hover:opacity-100 transition-all"><text x="50%" y="60%" dominant-baseline="middle" text-anchor="middle" font-family="'Quicksand','sans-serif'" font-weight="800" font-size="28" fill="#113e94" letter-spacing="-0.5">medica</text></svg>
                    <?php else: ?>
                    <img src="<?php echo $p['img']; ?>" alt="<?php echo $p['alt']; ?>" class="max-h-12 max-w-[80%] object-contain mix-blend-multiply grayscale group-hover:grayscale-0 opacity-80 group-hover:opacity-100 transition-all duration-300">
                    <?php endif; ?>
                </div>
                <?php endforeach; ?>
            </div>

            <p class="text-center text-gray-400 text-sm mt-8 max-w-2xl mx-auto">Coverage and benefits vary by individual plan. We'll verify your specific coverage before your first visit.</p>
        </div>
    </section>

    <!-- ===== WE HANDLE THE PAPERWORK ===== -->
    <section id="process" class="py-16 bg-white relative overflow-hidden">
        <div class="absolute top-0 left-0 w-[500px] h-[500px] bg-accent/6 rounded-full blur-[130px] -translate-x-1/3 -translate-y-1/3 pointer-events-none"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center max-w-2xl mx-auto mb-10 fade-in-section">
                <div class="flex items-center justify-center gap-3 mb-6">
                    <span class="h-px w-12 bg-primary/40"></span>
                    <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">Stress-Free Billing</span>
                    <span class="h-px w-12 bg-primary/40"></span>
                </div>
                <h2 class="text-4xl md:text-5xl text-primary mb-5 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                    We Handle the Paperwork
                </h2>
                <p class="text-gray-500 text-lg">
                    Insurance can be confusing. Our team takes care of the details so there are no surprises — just clear, straightforward care.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <?php
                $steps = [
                    ['n' => '01', 't' => 'Verify Your Benefits', 'd' => 'Share your plan details and we\'ll confirm your coverage before your first visit.'],
                    ['n' => '02', 't' => 'Handle Pre-Authorization', 'd' => 'We manage the entire pre-authorization process with your insurer for you.'],
                    ['n' => '03', 't' => 'Explain Your Costs', 'd' => 'We walk you through what\'s covered and any out-of-pocket costs up front — no surprises.'],
                    ['n' => '04', 't' => 'You Focus on Healing', 'd' => 'With the paperwork handled, you can put your energy where it matters most: you.'],
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

    <!-- ===== COVERAGE NOTE ===== -->
    <section class="py-16 bg-[#FAFAFF] relative overflow-hidden">
        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-5xl mx-auto grid lg:grid-cols-2 gap-8">
                <div class="bg-primary rounded-[2rem] p-8 md:p-10 text-white relative overflow-hidden fade-in-section">
                    <div class="absolute top-0 right-0 w-56 h-56 bg-accent/25 rounded-full blur-3xl pointer-events-none"></div>
                    <div class="relative z-10">
                        <div class="w-12 h-12 rounded-2xl bg-white/10 flex items-center justify-center text-accent mb-5"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg></div>
                        <h3 class="text-2xl font-bold text-white mb-3" style="font-family: 'Bauhaus Soft', cursive;">TMS Is Often Covered</h3>
                        <p class="text-white/75 text-base leading-relaxed">Most major insurers — including Medicare — cover Neurostar® TMS for treatment-resistant depression. Our care coordinators handle the pre-authorization to make it seamless.</p>
                    </div>
                </div>
                <div class="bg-white rounded-[2rem] p-8 md:p-10 border border-primary/10 shadow-sm fade-in-section">
                    <div class="w-12 h-12 rounded-2xl bg-accent/10 flex items-center justify-center text-accent mb-5"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a5 5 0 00-10 0v2a2 2 0 00-2 2v7a2 2 0 002 2h10a2 2 0 002-2v-7a2 2 0 00-2-2zM7 9h10"></path></svg></div>
                    <h3 class="text-2xl font-bold text-primary mb-3" style="font-family: 'Bauhaus Soft', cursive;">Don't Have Insurance?</h3>
                    <p class="text-gray-500 text-base leading-relaxed">You still have options. Reach out and we'll talk through self-pay rates and ways to make care work for your situation — cost shouldn't be a barrier to getting help.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== FAQ ===== -->
    <section id="faq" class="py-16 bg-white relative overflow-hidden">
        <div class="absolute top-0 left-0 w-[500px] h-[500px] bg-primary/6 rounded-full blur-[140px] -translate-x-1/3 -translate-y-1/3 pointer-events-none"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-3xl mx-auto">
                <div class="text-center mb-12 fade-in-section">
                    <div class="flex items-center justify-center gap-3 mb-6">
                        <span class="h-px w-12 bg-primary/40"></span>
                        <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">Common Questions</span>
                        <span class="h-px w-12 bg-primary/40"></span>
                    </div>
                    <h2 class="text-4xl md:text-5xl text-primary leading-tight" style="font-family: 'Bauhaus Soft', cursive;">Insurance Questions</h2>
                </div>
                <div class="space-y-4 fade-in-section">
                    <?php
                    $faqs = [
                        ['q' => 'How do I know if you accept my insurance?', 'a' => 'The simplest way is to reach out — share your plan details and our team will verify your specific coverage and benefits before your first visit.'],
                        ['q' => 'Do you handle pre-authorization?', 'a' => 'Yes. We manage the entire pre-authorization process with your insurer so you don\'t have to navigate it alone.'],
                        ['q' => 'Is Neurostar® TMS covered by insurance?', 'a' => 'Often, yes. Most major insurers, including Medicare, cover TMS for treatment-resistant depression. We\'ll confirm your coverage and handle the authorization.'],
                        ['q' => 'What if my plan isn\'t listed?', 'a' => 'We work with many plans beyond those shown. Get in touch and we\'ll check whether we can work with your specific insurance.'],
                        ['q' => 'What if I don\'t have insurance?', 'a' => 'We offer self-pay options and are happy to discuss ways to make care affordable. Please reach out so we can find a solution that works for you.'],
                    ];
                    foreach ($faqs as $f): ?>
                    <details class="group bg-[#FAFAFF] border border-primary/8 rounded-2xl overflow-hidden hover:border-accent/30 transition-colors">
                        <summary class="flex items-center justify-between gap-4 px-6 py-5 cursor-pointer list-none select-none">
                            <span class="text-primary font-bold text-base md:text-lg"><?php echo $f['q']; ?></span>
                            <span class="w-8 h-8 rounded-full bg-accent/10 flex items-center justify-center text-accent flex-shrink-0 group-open:rotate-45 transition-transform duration-300">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                            </span>
                        </summary>
                        <div class="px-6 pb-6 -mt-1"><p class="text-gray-500 text-base leading-relaxed"><?php echo $f['a']; ?></p></div>
                    </details>
                    <?php endforeach; ?>
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
                            We'll Do the Legwork
                        </div>
                        <h2 class="text-3xl md:text-4xl text-white mb-2 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">Let's Verify Your Coverage</h2>
                        <p class="text-white/70 text-base md:text-lg">Share your plan and we'll confirm your benefits — free, and with no obligation.</p>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-4 flex-shrink-0">
                        <a href="#contact" class="px-7 py-3.5 bg-accent text-white rounded-full font-bold hover:bg-accent-light hover:-translate-y-0.5 hover:shadow-[0_0_40px_rgba(140,120,190,0.5)] transition-all duration-300 text-center whitespace-nowrap">Verify Your Insurance</a>
                        <a href="tel:+16124298280" class="px-7 py-3.5 bg-white/10 border border-white/25 text-white rounded-full font-bold hover:bg-white/20 transition-all duration-300 flex items-center justify-center gap-2 whitespace-nowrap">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            612-429-8280
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>html { scroll-padding-top: 6rem; } details summary::-webkit-details-marker { display: none; }</style>

<?php include 'footer.php'; ?>
