<?php
$page_title = "Thank You – Explore Your Dream Trip";
$page_desc = "Thank you for contacting Explore Your Dream Trip. Our travel consultation desk will review your details and connect with you shortly.";
require_once 'includes/config.php';
require_once 'includes/header.php';
?>

<!-- Robots meta override (added via JS to prevent indexing of confirmation page) -->
<script>
    const meta = document.createElement('meta');
    meta.name = 'robots';
    meta.content = 'noindex, follow';
    document.getElementsByTagName('head')[0].appendChild(meta);
</script>

<!-- ═══════════════════════════════════════════════════════════════════════
     CONFIRMATION PANEL SECTION
     ═══════════════════════════════════════════════════════════════════════ -->
<section class="py-24 md:py-32 bg-gradient-dark text-white flex-grow relative z-10 overflow-hidden">
    <!-- Glow Details -->
    <div class="absolute top-1/4 left-1/3 w-[400px] h-[400px] bg-brand/5 rounded-full blur-[120px] pointer-events-none"></div>
    <div class="absolute bottom-1/4 right-1/3 w-[400px] h-[400px] bg-brand-dark/5 rounded-full blur-[120px] pointer-events-none" style="animation-delay: 2.5s;"></div>
    
    <div class="max-w-[1440px] mx-auto px-4 flex flex-col items-center">
        
        <!-- Glass Luxury Panel -->
        <div class="max-w-2xl w-full bg-slate-900/40 backdrop-blur-xl rounded-[40px] border border-white/5 border-luxury-gold p-8 md:p-12 shadow-2xl text-center space-y-8 hover:shadow-[0_20px_50px_rgba(240,210,90,0.08)] transition-all duration-500 mb-16">
            
            <!-- Success Animated Check Badge -->
            <div class="relative w-20 h-20 mx-auto flex items-center justify-center">
                <div class="absolute inset-0 bg-emerald-500/10 rounded-full border border-emerald-500/20 animate-ping" style="animation-duration: 3s;"></div>
                <div class="w-16 h-16 bg-emerald-500/20 border border-emerald-500/40 rounded-full flex items-center justify-center text-emerald-400 text-3xl shadow-lg relative z-10">
                    <i class="fa-solid fa-circle-check"></i>
                </div>
            </div>

            <!-- Headings -->
            <div class="space-y-3">
                <span class="text-brand font-bold text-xs uppercase tracking-[0.25em]">Inquiry Submitted Successfully</span>
                <h1 class="text-3xl md:text-4xl font-black text-white leading-tight font-display tracking-tight">
                    Thank You For <br>
                    <span class="text-gradient-gold">Choosing Us!</span>
                </h1>
            </div>

            <!-- Descriptive Text -->
            <p class="text-slate-300 text-xs md:text-sm leading-relaxed max-w-md mx-auto">
                Your travel preferences have been successfully forwarded to our premium desk. A dedicated specialist is hand-crafting your custom itinerary.
            </p>

            <!-- Custom Concierge Timeline -->
            <div class="space-y-4 text-left max-w-md mx-auto bg-slate-950/40 p-6 rounded-3xl border border-white/5">
                <h4 class="text-xs uppercase tracking-widest text-brand font-bold mb-4 flex items-center gap-2">
                    <i class="fa-solid fa-clock-rotate-left"></i> Next Steps & Response Status
                </h4>
                <div class="relative pl-6 border-l border-white/10 space-y-6 text-xs">
                    <!-- Step 1 -->
                    <div class="relative">
                        <div class="absolute -left-[31px] top-0.5 w-4 h-4 bg-emerald-500 rounded-full border-4 border-slate-900 flex items-center justify-center">
                            <i class="fa-solid fa-check text-[7px] text-white"></i>
                        </div>
                        <div>
                            <h5 class="font-bold text-white uppercase tracking-wider text-[10px]">Inquiry Logged & Verified</h5>
                            <p class="text-slate-400 mt-1 leading-relaxed">Your routing options and group size requirements are secured in our system.</p>
                        </div>
                    </div>
                    
                    <!-- Step 2 -->
                    <div class="relative">
                        <div class="absolute -left-[31px] top-0.5 w-4 h-4 bg-brand rounded-full border-4 border-slate-900 animate-pulse"></div>
                        <div>
                            <h5 class="font-bold text-brand uppercase tracking-wider text-[10px] flex items-center gap-1.5">
                                <span>Designing Custom Route Plan</span>
                                <i class="fa-solid fa-compass animate-spin text-[9px]" style="animation-duration: 6s;"></i>
                            </h5>
                            <p class="text-slate-400 mt-1 leading-relaxed">Our senior travel planner is sizing your vehicle selection and pricing hotel packages.</p>
                        </div>
                    </div>
                    
                    <!-- Step 3 -->
                    <div class="relative">
                        <div class="absolute -left-[31px] top-0.5 w-4 h-4 bg-slate-700 rounded-full border-4 border-slate-900"></div>
                        <div>
                            <h5 class="font-bold text-slate-500 uppercase tracking-wider text-[10px]">Personal Consultation Call</h5>
                            <p class="text-slate-500 mt-1 leading-relaxed">Our representative will reach out via call or WhatsApp to finalise details.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Assigned Representative Card -->
            <div class="bg-gradient-to-r from-brand/10 to-brand-dark/10 p-5 rounded-2xl border border-brand/20 text-left space-y-3 max-w-md mx-auto">
                <div class="flex items-center justify-between border-b border-brand/15 pb-2.5">
                    <div class="flex items-center gap-2">
                        <div class="w-8 h-8 rounded-full bg-brand/10 border border-brand/35 flex items-center justify-center text-brand text-xs">
                            <i class="fa-solid fa-crown"></i>
                        </div>
                        <div>
                            <p class="text-[9px] text-brand uppercase tracking-widest font-extrabold">Assigned Office Desk</p>
                            <h5 class="text-xs font-bold text-white">Senior Luxury Concierge</h5>
                        </div>
                    </div>
                    <span class="text-[9px] bg-brand/20 text-brand px-2.5 py-1 rounded-full font-bold uppercase tracking-wider">Active</span>
                </div>
                <div class="grid grid-cols-2 gap-4 text-[11px] text-slate-300">
                    <div>
                        <p class="text-[9px] text-slate-500 font-bold uppercase tracking-wider">Response SLA</p>
                        <p class="font-semibold text-white mt-0.5">2 - 4 Hours</p>
                    </div>
                    <div>
                        <p class="text-[9px] text-slate-500 font-bold uppercase tracking-wider">Direct Hotline</p>
                        <a href="tel:<?php echo CONTACT_PHONE_RAW; ?>" class="font-semibold text-brand hover:underline mt-0.5 inline-block"><?php echo CONTACT_PHONE; ?></a>
                    </div>
                </div>
            </div>

            <!-- Divider -->
            <div class="gold-fade-divider"></div>

            <!-- Call to Actions -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="<?php echo BASE_URL; ?>" 
                    class="w-full sm:w-auto relative group overflow-hidden px-6 py-3.5 bg-slate-950 text-white rounded-xl text-xs uppercase tracking-wider font-extrabold shadow-md inline-flex items-center justify-center transition-all duration-300 border border-white/10 hover:border-brand/40">
                    <div class="absolute inset-0 bg-gradient-gold opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-0"></div>
                    <span class="relative z-10 group-hover:text-obsidian-950 transition-colors duration-300">Back To Home</span>
                </a>
                <a href="<?php echo BASE_URL; ?>tours" 
                    class="w-full sm:w-auto relative group overflow-hidden px-6 py-3.5 bg-white/5 hover:bg-white/10 text-white/90 hover:text-white border border-white/10 hover:border-white/20 rounded-xl text-xs uppercase tracking-wider font-extrabold shadow-sm inline-flex items-center justify-center transition-all duration-300">
                    <span>Explore Packages</span>
                </a>
                <a href="<?php echo WHATSAPP_LINK; ?>" target="_blank" 
                    class="w-full sm:w-auto relative overflow-hidden px-6 py-3.5 bg-emerald-500 hover:bg-emerald-600 text-white rounded-xl text-xs uppercase tracking-wider font-extrabold shadow-md inline-flex items-center justify-center transition-colors duration-300 btn-shimmer">
                    <i class="fa-brands fa-whatsapp mr-1.5 text-sm"></i> WhatsApp Us
                </a>
            </div>

        </div>

        <!-- Dynamic Recommended Tour Cards (Matching Dark Theme) -->
        <div class="w-full max-w-[1440px] mt-12">
            <div class="text-center max-w-2xl mx-auto mb-12 space-y-3">
                <span class="text-brand font-bold text-xs uppercase tracking-[0.25em]">Bespoke Escapes</span>
                <h3 class="text-3xl font-extrabold text-white leading-tight font-display">Explore Other Destinations</h3>
                <div class="w-16 h-[2px] bg-gradient-gold mx-auto mt-2"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <?php
                $suggested_tours = [];
                // Let's pick 3 other random / popular tours
                foreach ($TOURS as $key => $tour) {
                    if (isset($tour['featured']) && $tour['featured']) {
                        $suggested_tours[$key] = $tour;
                        if (count($suggested_tours) >= 3) break;
                    }
                }
                if (count($suggested_tours) < 3) {
                    foreach ($TOURS as $key => $tour) {
                        if (!isset($suggested_tours[$key])) {
                            $suggested_tours[$key] = $tour;
                            if (count($suggested_tours) >= 3) break;
                        }
                    }
                }
                
                foreach ($suggested_tours as $key => $tour):
                ?>
                <div class="group bg-slate-900/40 backdrop-blur-md rounded-[32px] overflow-hidden flex flex-col justify-between border border-white/5 hover:border-brand/20 transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_20px_50px_rgba(240,210,90,0.06)]">
                    <!-- Image Section -->
                    <div class="relative overflow-hidden aspect-[16/11] z-0">
                        <img src="<?php echo $tour['image']; ?>" alt="<?php echo $tour['title']; ?>" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-obsidian-950 via-obsidian-950/20 to-transparent"></div>
                        
                        <!-- Top Badges -->
                        <div class="absolute top-5 left-5 right-5 flex justify-between items-center pointer-events-none">
                            <!-- Rating -->
                            <div class="bg-slate-950/70 backdrop-blur-md border border-white/10 px-3 py-1 rounded-full text-white text-[11px] font-bold flex items-center space-x-1.5">
                                <i class="fa-solid fa-star text-brand"></i>
                                <span><?php echo $tour['rating']; ?></span>
                            </div>
                        </div>

                        <!-- Bottom Title -->
                        <div class="absolute bottom-5 left-6 right-6">
                            <span class="text-brand text-[10px] font-extrabold uppercase tracking-widest"><?php echo $tour['subtitle']; ?></span>
                            <h4 class="text-white text-xl font-bold font-display mt-1 leading-tight tracking-tight"><?php echo $tour['title']; ?></h4>
                        </div>
                    </div>

                    <!-- Details & Action -->
                    <div class="p-6 space-y-6 flex-grow flex flex-col justify-between">
                        <div class="grid grid-cols-2 gap-4 text-xs font-semibold text-slate-300">
                            <div class="flex items-center space-x-2.5">
                                <span class="w-8 h-8 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-brand text-xs">
                                    <i class="fa-regular fa-clock"></i>
                                </span>
                                <div>
                                    <p class="text-[9px] text-slate-500 uppercase tracking-wider font-bold">Duration</p>
                                    <p class="text-[11px]"><?php echo $tour['duration']; ?></p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-2.5">
                                <span class="w-8 h-8 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-brand text-xs">
                                    <i class="fa-solid fa-route"></i>
                                </span>
                                <div>
                                    <p class="text-[9px] text-slate-500 uppercase tracking-wider font-bold">Type</p>
                                    <p class="text-[11px]">Private/Group</p>
                                </div>
                            </div>
                        </div>

                        <!-- Pricing & CTA -->
                        <div class="pt-5 border-t border-white/5 flex justify-between items-center mt-auto">
                            <div>
                                <p class="text-[9px] text-slate-500 uppercase tracking-widest font-bold">Starting From</p>
                                <?php if (empty($tour['price']) || $tour['price'] == '0'): ?>
                                    <p class="text-xs font-bold text-brand leading-none mt-1.5 font-display">Contact Us for Best Price</p>
                                <?php else: ?>
                                    <p class="text-lg font-black text-brand leading-none mt-1 font-display"><?php echo $tour['price']; ?></p>
                                <?php endif; ?>
                            </div>
                            <a href="<?php echo BASE_URL . $tour['link']; ?>" class="relative group/btn overflow-hidden px-5 py-2.5 bg-slate-950 text-white rounded-xl text-xs uppercase tracking-wider font-extrabold shadow-md whitespace-nowrap inline-flex items-center justify-center border border-white/15 transition-all duration-300">
                                <div class="absolute inset-0 bg-gradient-gold opacity-0 group-hover/btn:opacity-100 transition-opacity duration-300 z-0"></div>
                                <span class="relative z-10 group-hover/btn:text-obsidian-950 transition-colors duration-300">Explore</span>
                                <i class="fa-solid fa-chevron-right ml-1.5 text-[9px] relative z-10 group-hover/btn:text-obsidian-950 transition-all duration-300 group-hover/btn:translate-x-1.5"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</section>

<?php
require_once 'includes/footer.php';
?>
