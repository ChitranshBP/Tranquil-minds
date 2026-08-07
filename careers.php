<?php
$page_title       = "Careers | Tranquil Minds Mental Health";
$page_description = "Join the team at Tranquil Minds Mental Health in Monticello, MN. We're looking for compassionate people who want to make a real difference in mental-health care. Apply with your resume.";
$hero_title       = 'Do Work<br><span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-white to-white/50">That Matters.</span>';
$hero_subtitle    = 'At Tranquil Minds, we\'re building a warm, science-driven place to heal — and we\'re looking for compassionate people to grow with us.';
$hero_badge       = 'Careers';
$hero_cta1_text   = 'Apply Now';
$hero_cta1_link   = '#apply';
$hero_cta2_text   = 'Meet the Team';
$hero_cta2_link   = 'about.php#team';
$hide_contact     = true; // Careers page has its own application form — hide the footer contact form
?>
<?php include 'header.php'; ?>
<?php include 'hero-service.php'; ?>

    <!-- ===== WHY WORK WITH US ===== -->
    <section id="why" class="py-16 bg-[#FAFAFF] relative overflow-hidden">
        <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-accent/10 rounded-full blur-[140px] translate-x-1/3 -translate-y-1/4 pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-primary/8 rounded-full blur-[120px] -translate-x-1/3 translate-y-1/3 pointer-events-none"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center max-w-2xl mx-auto mb-12 fade-in-section">
                <div class="flex items-center justify-center gap-3 mb-6">
                    <span class="h-px w-12 bg-primary/40"></span>
                    <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">Why Join Us</span>
                    <span class="h-px w-12 bg-primary/40"></span>
                </div>
                <h2 class="text-4xl md:text-5xl text-primary mb-5 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                    A Place to Grow &amp; Give Back
                </h2>
                <p class="text-gray-500 text-lg">
                    We believe great care starts with a supported, values-driven team. Here's what it's like to work at Tranquil Minds.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php
                $perks = [
                    ['t' => 'Meaningful Work', 'd' => 'Every day, you help people reclaim their mental wellness — work that genuinely matters.', 'icon' => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z'],
                    ['t' => 'Cutting-Edge Care', 'd' => 'Work with advanced, science-backed therapies like Neurostar® TMS and Creyos testing.', 'icon' => 'M13 10V3L4 14h7v7l9-11h-7z'],
                    ['t' => 'Supportive Culture', 'd' => 'A warm, collaborative team where your voice is heard and your growth is supported.', 'icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z'],
                    ['t' => 'Room to Learn', 'd' => 'Opportunities to build new skills and advance in a growing practice.', 'icon' => 'M12 14l9-5-9-5-9 5 9 5z M12 14l6.16-3.42a12 12 0 01.84 4.42c0 1.657-3.134 3-7 3s-7-1.343-7-3a12 12 0 01.84-4.42L12 14z'],
                    ['t' => 'Whole-Person Wellness', 'd' => 'We care about our team\'s wellbeing as much as our patients\' — because you matter too.', 'icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z'],
                    ['t' => 'Community Roots', 'd' => 'Be part of a local practice making a real difference in the Monticello community.', 'icon' => 'M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z M15 11a3 3 0 11-6 0 3 3 0 016 0z'],
                ];
                foreach ($perks as $p): ?>
                <div class="bg-white border border-primary/8 rounded-[1.5rem] p-7 hover:shadow-lg hover:border-accent/30 hover:-translate-y-1 transition-all duration-300 group">
                    <div class="w-12 h-12 rounded-2xl bg-accent/10 flex items-center justify-center text-accent mb-5 group-hover:bg-accent group-hover:text-white transition-all duration-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="<?php echo $p['icon']; ?>"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-primary mb-2"><?php echo $p['t']; ?></h3>
                    <p class="text-gray-500 text-sm leading-relaxed"><?php echo $p['d']; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ===== ROLES ===== -->
    <section id="roles" class="py-16 bg-white relative overflow-hidden">
        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center max-w-2xl mx-auto mb-10 fade-in-section">
                <div class="flex items-center justify-center gap-3 mb-6">
                    <span class="h-px w-12 bg-primary/40"></span>
                    <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">Who We Hire</span>
                    <span class="h-px w-12 bg-primary/40"></span>
                </div>
                <h2 class="text-4xl md:text-5xl text-primary mb-5 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                    Roles We Look For
                </h2>
                <p class="text-gray-500 text-lg">
                    We're always glad to hear from talented, caring people. Even if you don't see your exact role, reach out — great people are always welcome.
                </p>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 max-w-5xl mx-auto">
                <?php
                $roles = ['Psychiatric Nurse Practitioner', 'TMS Technician', 'Therapist / Counselor', 'Front Office &amp; Administrative'];
                foreach ($roles as $r): ?>
                <div class="bg-[#FAFAFF] border border-primary/8 rounded-[1.5rem] p-6 text-center hover:bg-white hover:shadow-lg hover:border-accent/30 transition-all duration-300">
                    <div class="w-11 h-11 mx-auto rounded-xl bg-accent/10 flex items-center justify-center text-accent mb-4"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg></div>
                    <h3 class="text-sm font-bold text-primary leading-snug"><?php echo $r; ?></h3>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ===== APPLICATION FORM ===== -->
    <section id="apply" class="py-16 bg-[#FAFAFF] relative overflow-hidden">
        <div class="absolute top-0 left-0 w-[500px] h-[500px] bg-accent/8 rounded-full blur-[140px] -translate-x-1/3 -translate-y-1/3 pointer-events-none"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-start">
                <!-- Left: intro -->
                <div class="fade-in-section lg:sticky lg:top-32">
                    <div class="flex items-center gap-3 mb-6">
                        <span class="h-px w-12 bg-primary/40"></span>
                        <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">Apply Now</span>
                    </div>
                    <h2 class="text-4xl md:text-5xl text-primary mb-6 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                        Tell Us About You
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-8">
                        Fill out the form and attach your resume — we review every application personally and will reach out if there's a fit. We can't wait to learn about you.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-center gap-3 text-gray-600">
                            <div class="w-9 h-9 rounded-xl bg-accent/10 flex items-center justify-center text-accent flex-shrink-0"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg></div>
                            <a href="mailto:roxannedpmhnp@gmail.com" class="hover:text-accent transition-colors break-all">roxannedpmhnp@gmail.com</a>
                        </div>
                        <div class="flex items-center gap-3 text-gray-600">
                            <div class="w-9 h-9 rounded-xl bg-accent/10 flex items-center justify-center text-accent flex-shrink-0"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg></div>
                            <a href="tel:+16124298280" class="hover:text-accent transition-colors">612-429-8280</a>
                        </div>
                    </div>
                </div>

                <!-- Right: form -->
                <div class="fade-in-section bg-white p-8 md:p-10 rounded-[2rem] shadow-xl shadow-accent/5 border border-primary/5">
                    <form name="careers" accept-charset="UTF-8" action="https://app.formester.com/forms/eidpLzAyh/submissions" method="POST" enctype="multipart/form-data" class="space-y-6">

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label for="c-first" class="text-sm font-bold text-primary block tracking-wide">First Name *</label>
                                <input type="text" id="c-first" name="first_name" required placeholder="First Name"
                                    class="w-full px-4 py-3 bg-white border border-gray-200 rounded-lg focus:ring-2 focus:ring-accent/20 focus:border-accent outline-none transition-all placeholder-gray-300 text-primary">
                            </div>
                            <div class="space-y-2">
                                <label for="c-last" class="text-sm font-bold text-primary block tracking-wide">Last Name *</label>
                                <input type="text" id="c-last" name="last_name" required placeholder="Last Name"
                                    class="w-full px-4 py-3 bg-white border border-gray-200 rounded-lg focus:ring-2 focus:ring-accent/20 focus:border-accent outline-none transition-all placeholder-gray-300 text-primary">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label for="c-email" class="text-sm font-bold text-primary block tracking-wide">Email *</label>
                                <input type="email" id="c-email" name="email" required placeholder="Email"
                                    class="w-full px-4 py-3 bg-white border border-gray-200 rounded-lg focus:ring-2 focus:ring-accent/20 focus:border-accent outline-none transition-all placeholder-gray-300 text-primary">
                            </div>
                            <div class="space-y-2">
                                <label for="c-phone" class="text-sm font-bold text-primary block tracking-wide">Phone</label>
                                <input type="tel" id="c-phone" name="phone" placeholder="Phone"
                                    class="w-full px-4 py-3 bg-white border border-gray-200 rounded-lg focus:ring-2 focus:ring-accent/20 focus:border-accent outline-none transition-all placeholder-gray-300 text-primary">
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label for="c-position" class="text-sm font-bold text-primary block tracking-wide">Position of Interest *</label>
                            <select id="c-position" name="position" required
                                class="w-full px-4 py-3 bg-white border border-gray-200 rounded-lg focus:ring-2 focus:ring-accent/20 focus:border-accent outline-none transition-all text-primary appearance-none bg-[url('data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20fill%3D%22none%22%20viewBox%3D%220%200%2024%2024%22%20stroke%3D%22%23502882%22%3E%3Cpath%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%20stroke-width%3D%222%22%20d%3D%22M19%209l-7%207-7-7%22/%3E%3C/svg%3E')] bg-[length:1.25rem] bg-[right_1rem_center] bg-no-repeat pr-12 cursor-pointer">
                                <option value="" selected>Select a position</option>
                                <option value="Psychiatric Nurse Practitioner">Psychiatric Nurse Practitioner</option>
                                <option value="TMS Technician">TMS Technician</option>
                                <option value="Therapist / Counselor">Therapist / Counselor</option>
                                <option value="Front Office / Administrative">Front Office / Administrative</option>
                                <option value="Medical Assistant">Medical Assistant</option>
                                <option value="Other / General Application">Other / General Application</option>
                            </select>
                        </div>

                        <div class="space-y-2">
                            <label for="c-resume" class="text-sm font-bold text-primary block tracking-wide">Resume *</label>
                            <input type="file" id="c-resume" name="resume" required accept=".pdf,.doc,.docx,.rtf"
                                class="w-full text-sm text-gray-600 bg-white border border-gray-200 rounded-lg p-2 cursor-pointer file:mr-4 file:py-2.5 file:px-5 file:rounded-full file:border-0 file:text-sm file:font-bold file:bg-accent file:text-white hover:file:bg-accent-light file:cursor-pointer">
                            <p class="text-xs text-gray-400">PDF or Word document (.pdf, .doc, .docx), up to 10&nbsp;MB.</p>
                        </div>

                        <div class="space-y-2">
                            <label for="c-message" class="text-sm font-bold text-primary block tracking-wide">Cover Letter / Message</label>
                            <textarea id="c-message" name="message" rows="4" placeholder="Tell us a little about yourself and why you'd like to join Tranquil Minds"
                                class="w-full px-4 py-3 bg-white border border-gray-200 rounded-lg focus:ring-2 focus:ring-accent/20 focus:border-accent outline-none transition-all placeholder-gray-300 text-primary resize-y"></textarea>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="flex items-center h-5 mt-1">
                                <input id="c-consent" name="consent" type="checkbox" required
                                    class="w-4 h-4 text-accent border-2 border-gray-300 rounded focus:ring-accent focus:ring-offset-0 cursor-pointer">
                            </div>
                            <label for="c-consent" class="text-xs text-gray-500 leading-relaxed cursor-pointer select-none">
                                I confirm the information provided is accurate and consent to Tranquil Minds Mental Health contacting me about my application.
                            </label>
                        </div>

                        <button type="submit"
                            class="w-full px-8 py-4 bg-accent text-white rounded-full font-bold text-base hover:bg-accent-light hover:-translate-y-0.5 hover:shadow-[0_0_30px_rgba(140,120,190,0.5)] transition-all duration-300 flex items-center justify-center gap-2">
                            Submit Application
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <style>html { scroll-padding-top: 6rem; }</style>

<?php include 'footer.php'; ?>
