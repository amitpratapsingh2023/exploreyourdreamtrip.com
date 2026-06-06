<!-- Direct Lead Generation & Contact Inquiry Form -->
<section id="inquiry" class="py-20 bg-white relative z-10">
    <div class="max-w-[1440px] mx-auto px-4">

        <div
            class="grid grid-cols-1 lg:grid-cols-12 gap-12 bg-obsidian-950 rounded-[40px] overflow-hidden border border-white/5 shadow-2xl glow-gold/5">

            <!-- Left Side: Call and Info details -->
            <div class="lg:col-span-5 p-8 md:p-12 space-y-8 bg-gradient-dark flex flex-col justify-between">
                <div class="space-y-4">
                    <span
                        class="inline-flex items-center space-x-2 px-3 py-1.5 rounded-full bg-white/5 border border-white/10 text-brand text-xs font-bold uppercase tracking-wider">
                        <i class="fa-solid fa-compass text-[10px]"></i>
                        <span>Tailored Experiences</span>
                    </span>
                    <h3 class="text-3xl font-bold font-display text-white">Let's Design Your <span
                            class="text-gradient-gold">Dream Tour</span></h3>
                    <p class="text-slate-400 text-sm md:text-base leading-relaxed">
                        Fill out this simple form, and our travel specialists will get back to you with custom itinerary
                        suggestions and direct competitive pricing details.
                    </p>
                </div>

                <!-- Specific details -->
                <div class="space-y-6">
                    <a href="tel:<?php echo CONTACT_PHONE_RAW; ?>" class="flex items-center space-x-4 group">
                        <div
                            class="w-12 h-12 rounded-2xl bg-white/5 text-brand border border-white/10 group-hover:bg-brand/10 group-hover:text-brand-light group-hover:border-brand/40 flex items-center justify-center text-lg transition-all duration-300">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div>
                            <p class="text-xs text-slate-400">Speak With Our Expert</p>
                            <p class="text-white font-bold text-lg group-hover:text-brand transition-colors">
                                <?php echo CONTACT_PHONE; ?>
                            </p>
                        </div>
                    </a>

                    <a href="mailto:<?php echo CONTACT_EMAIL; ?>" class="flex items-center space-x-4 group">
                        <div
                            class="w-12 h-12 rounded-2xl bg-white/5 text-brand border border-white/10 group-hover:bg-brand/10 group-hover:text-brand-light group-hover:border-brand/40 flex items-center justify-center text-lg transition-all duration-300">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div>
                            <p class="text-xs text-slate-400">Email Inquiry Desk</p>
                            <p class="text-white font-bold group-hover:text-brand transition-colors">
                                <?php echo CONTACT_EMAIL; ?>
                            </p>
                        </div>
                    </a>

                    <a href="<?php echo WHATSAPP_LINK; ?>" target="_blank" class="flex items-center space-x-4 group">
                        <div
                            class="w-12 h-12 rounded-2xl bg-emerald-500/10 text-emerald-400 border border-emerald-500/20 group-hover:bg-emerald-500 group-hover:text-white group-hover:border-transparent flex items-center justify-center text-xl transition-all duration-300">
                            <i class="fa-brands fa-whatsapp"></i>
                        </div>
                        <div>
                            <p class="text-xs text-slate-400">Instant Chat Assistance</p>
                            <p class="text-emerald-400 font-bold group-hover:text-emerald-300 transition-colors">Click
                                to Chat on WhatsApp</p>
                        </div>
                    </a>
                </div>

                <!-- Trust tagline -->
                <p class="text-xs text-slate-500 leading-relaxed">
                    * By submitting this form you consent to our travel operators calling or messaging you to assist
                    with your bookings. We respect your privacy.
                </p>
            </div>

            <!-- Right Side: Lead Capture Form -->
            <div class="lg:col-span-7 p-8 md:p-12 border-t lg:border-t-0 lg:border-l border-white/5">
                <form id="cta-global-form" action="<?php echo BASE_URL; ?>thank-you" method="POST" class="space-y-6">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <label for="cta-name"
                                class="block text-xs font-bold text-brand uppercase tracking-wider mb-2">Your Full Name
                                *</label>
                            <div class="relative">
                                <span
                                    class="absolute inset-y-0 left-0 pl-4 flex items-center text-slate-400 pointer-events-none">
                                    <i class="fa-solid fa-user text-brand/80 text-xs"></i>
                                </span>
                                <input id="cta-name" name="name" type="text" required placeholder="Enter name"
                                    class="w-full bg-slate-900/50 hover:bg-slate-900/80 focus:bg-slate-950 border border-white/10 focus:border-brand text-white rounded-xl py-3.5 pl-10 pr-4 focus:outline-none transition-all duration-300 text-sm focus:shadow-[0_0_15px_rgba(240,210,90,0.15)]">
                            </div>
                        </div>
                        <div>
                            <label for="cta-phone"
                                class="block text-xs font-bold text-brand uppercase tracking-wider mb-2">Phone Number
                                *</label>
                            <div class="relative">
                                <span
                                    class="absolute inset-y-0 left-0 pl-4 flex items-center text-slate-400 pointer-events-none">
                                    <i class="fa-solid fa-phone text-brand/80 text-xs"></i>
                                </span>
                                <input id="cta-phone" name="phone" type="tel" required placeholder="Enter mobile number" value="<?php echo isset($_GET['phone']) ? htmlspecialchars($_GET['phone']) : ''; ?>"
                                    class="w-full bg-slate-900/50 hover:bg-slate-900/80 focus:bg-slate-950 border border-white/10 focus:border-brand text-white rounded-xl py-3.5 pl-10 pr-4 focus:outline-none transition-all duration-300 text-sm focus:shadow-[0_0_15px_rgba(240,210,90,0.15)]">
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <label for="cta-email"
                                class="block text-xs font-bold text-brand uppercase tracking-wider mb-2">Email
                                Address</label>
                            <div class="relative">
                                <span
                                    class="absolute inset-y-0 left-0 pl-4 flex items-center text-slate-400 pointer-events-none">
                                    <i class="fa-solid fa-envelope text-brand/80 text-xs"></i>
                                </span>
                                <input id="cta-email" name="email" type="email" placeholder="Enter email"
                                    class="w-full bg-slate-900/50 hover:bg-slate-900/80 focus:bg-slate-950 border border-white/10 focus:border-brand text-white rounded-xl py-3.5 pl-10 pr-4 focus:outline-none transition-all duration-300 text-sm focus:shadow-[0_0_15px_rgba(240,210,90,0.15)]">
                            </div>
                        </div>
                        <div>
                            <label for="cta-service"
                                class="block text-xs font-bold text-brand uppercase tracking-wider mb-2">Select Tour /
                                Service</label>
                            <div class="relative">
                                <span
                                    class="absolute inset-y-0 left-0 pl-4 flex items-center text-slate-400 pointer-events-none">
                                    <i class="fa-solid fa-map-location-dot text-brand/80 text-xs"></i>
                                </span>
                                <select id="cta-service" name="service"
                                    class="w-full bg-slate-900/50 hover:bg-slate-900/80 focus:bg-slate-950 border border-white/10 focus:border-brand text-white rounded-xl py-3.5 pl-10 pr-10 focus:outline-none transition-all duration-300 text-sm focus:shadow-[0_0_15px_rgba(240,210,90,0.15)] appearance-none font-medium">
                                    <option value="tour" <?php echo (isset($_GET['service']) && $_GET['service'] === 'tour') ? 'selected' : ''; ?>>All-Inclusive Tour</option>
                                    <option value="tempo" <?php echo (isset($_GET['service']) && $_GET['service'] === 'tempo') ? 'selected' : ''; ?>>Tempo Traveller Hire</option>
                                    <option value="car" <?php echo (isset($_GET['service']) && $_GET['service'] === 'car') ? 'selected' : ''; ?>>Premium Car Hire</option>
                                </select>
                                <span
                                    class="absolute inset-y-0 right-0 pr-4 flex items-center text-brand pointer-events-none">
                                    <i class="fa-solid fa-chevron-down text-xs"></i>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div>
                        <label for="cta-requirements"
                            class="block text-xs font-bold text-brand uppercase tracking-wider mb-2">Tell Us About Your
                            Requirements</label>
                        <div class="relative">
                            <span
                                class="absolute top-4 left-0 pl-4 flex items-center text-slate-400 pointer-events-none">
                                <i class="fa-solid fa-pen-to-square text-brand/80 text-xs"></i>
                            </span>
                            <textarea id="cta-requirements" name="requirements" required rows="4"
                                placeholder="e.g. Travel dates, number of travelers, budget details, etc."
                                class="w-full bg-slate-900/50 hover:bg-slate-900/80 focus:bg-slate-950 border border-white/10 focus:border-brand text-white rounded-xl py-3.5 pl-10 pr-4 focus:outline-none transition-all duration-300 text-sm resize-none focus:shadow-[0_0_15px_rgba(240,210,90,0.15)]"><?php 
                            if (isset($_GET['destination']) || isset($_GET['travel_date'])) {
                                $dest = isset($_GET['destination']) ? htmlspecialchars($_GET['destination']) : '';
                                $date = isset($_GET['travel_date']) ? htmlspecialchars($_GET['travel_date']) : '';
                                if ($dest && isset($TOURS[$dest])) {
                                    $dest_title = $TOURS[$dest]['title'];
                                } else {
                                    $dest_title = ucfirst($dest);
                                }
                                echo "Interested in booking: " . ($dest_title ? $dest_title : 'Custom Plan');
                                if ($date) {
                                    echo " on " . date('d-M-Y', strtotime($date));
                                }
                            }
                            ?></textarea>
                        </div>
                    </div>

                    <button type="submit"
                        class="w-full py-4 bg-gradient-gold text-obsidian-950 font-extrabold rounded-xl shadow-lg hover:shadow-brand/25 transition-all duration-300 hover:-translate-y-0.5 active:translate-y-0 pulse-gold-btn btn-shimmer uppercase tracking-widest text-xs">
                        Submit Custom Request
                    </button>
                </form>
            </div>

        </div>

    </div>
</section>