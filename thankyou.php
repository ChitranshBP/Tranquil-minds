<?php
$page_title       = "Thank You | Tranquil Minds Mental Health";
$page_description = "Thank you for contacting Tranquil Minds Mental Health. A member of our care team will reach out within one business day to schedule your free 15-minute consultation.";
$hide_contact     = true; // Thank-you page should not repeat the contact form
?>
<?php include 'header.php'; ?>

    <!-- ===== THANK YOU ===== -->
    <section class="relative pt-36 pb-16 md:pt-40 md:pb-20 bg-primary text-white overflow-hidden mx-2 md:mx-6 mb-10 rounded-b-[2rem] md:rounded-b-[3rem]">
        <div class="absolute top-0 right-0 w-[500px] h-full bg-accent/20 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-72 h-72 bg-accent-light/20 rounded-full blur-3xl pointer-events-none"></div>

        <div class="container mx-auto px-6 relative z-10 text-center max-w-3xl">
            <!-- Check icon -->
            <div class="w-20 h-20 mx-auto mb-7 rounded-full bg-white/10 border border-white/20 flex items-center justify-center">
                <svg class="w-10 h-10 text-accent-light" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 border border-white/20 text-white/80 text-xs font-bold uppercase tracking-widest mb-5">
                Message Received
            </div>
            <h1 class="text-4xl md:text-6xl text-white mb-5 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                Thank You for<br>Reaching Out
            </h1>
            <p class="text-white/70 text-lg leading-relaxed">
                Your request has been received. A member of our care team will contact you within one business day to schedule your free, confidential 15-minute consultation.
            </p>
            <div class="flex flex-wrap justify-center gap-4 mt-9">
                <a href="tel:+16124298280" class="inline-flex items-center gap-2 px-7 py-3.5 bg-accent text-white rounded-full font-bold hover:bg-accent-light hover:-translate-y-0.5 transition-all duration-300">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    Call 612-429-8280
                </a>
                <a href="index.php" class="inline-flex items-center gap-2 px-7 py-3.5 bg-white/10 border border-white/25 text-white rounded-full font-bold hover:bg-white/20 transition-all duration-300">
                    Back to Home
                </a>
            </div>
        </div>
    </section>

    <!-- ===== WHAT HAPPENS NEXT ===== -->
    <section class="py-16 bg-white relative overflow-hidden">
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-primary/6 rounded-full blur-[140px] -translate-x-1/3 translate-y-1/3 pointer-events-none"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center max-w-2xl mx-auto mb-12 fade-in-section">
                <div class="flex items-center justify-center gap-3 mb-6">
                    <span class="h-px w-12 bg-primary/40"></span>
                    <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">What Happens Next</span>
                    <span class="h-px w-12 bg-primary/40"></span>
                </div>
                <h2 class="text-4xl md:text-5xl text-primary mb-5 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                    Your Next Steps
                </h2>
                <p class="text-gray-500 text-lg">
                    Here is exactly what to expect after submitting your request.
                </p>
            </div>

            <div class="grid md:grid-cols-3 auto-rows-fr gap-6 max-w-5xl mx-auto">
                <?php
                $steps = [
                    ['n' => '1', 't' => 'We Review Your Request', 'd' => 'Our clinical coordinator reviews the details you shared so your first conversation starts with context, not paperwork.'],
                    ['n' => '2', 't' => 'We Call You',           'd' => 'You will hear from us within one business day at the phone number you provided to answer questions and check insurance eligibility.'],
                    ['n' => '3', 't' => 'We Book Your Visit',    'd' => 'Together we choose a time that works for you and walk you through everything to expect at your first appointment.'],
                ];
                foreach ($steps as $s): ?>
                <div class="bg-[#FAFAFF] border border-primary/8 rounded-[1.5rem] p-8 flex flex-col hover:bg-white hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                    <div class="w-11 h-11 rounded-2xl bg-accent/15 flex items-center justify-center font-bold text-accent text-lg mb-5">
                        <?php echo $s['n']; ?>
                    </div>
                    <h3 class="text-primary font-bold text-lg mb-2"><?php echo $s['t']; ?></h3>
                    <p class="text-gray-500 text-sm leading-relaxed"><?php echo $s['d']; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ===== CRISIS NOTE + EXPLORE ===== -->
    <section class="py-14 bg-[#2A163F] relative overflow-hidden">
        <div class="absolute top-0 right-0 w-[500px] h-full bg-accent/15 rounded-full blur-3xl pointer-events-none"></div>
        <div class="container mx-auto px-6 relative z-10 max-w-4xl">
            <div class="text-center mb-10">
                <h3 class="text-white font-bold text-xl mb-2">In Crisis or Need Help Now?</h3>
                <p class="text-white/60 text-sm leading-relaxed">
                    This form is not monitored 24/7. If you are experiencing a mental health emergency, call or text <a href="tel:988" class="text-accent-light font-bold hover:underline">988</a> (Suicide &amp; Crisis Lifeline) or dial 911.
                </p>
            </div>
            <div class="grid sm:grid-cols-3 gap-4">
                <?php
                $links = [
                    ['href' => 'what-is-tms-therapy.php', 'label' => 'How TMS Therapy Works'],
                    ['href' => 'insurance.php',           'label' => 'Insurance &amp; Coverage'],
                    ['href' => 'faq.php',                 'label' => 'Frequently Asked Questions'],
                ];
                foreach ($links as $l): ?>
                <a href="<?php echo $l['href']; ?>" class="flex items-center justify-between gap-3 px-5 py-4 rounded-2xl bg-white/5 border border-white/10 text-white/80 text-sm font-semibold hover:bg-white/10 hover:text-white transition-all duration-300">
                    <?php echo $l['label']; ?>
                    <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>
