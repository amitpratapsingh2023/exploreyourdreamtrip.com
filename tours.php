<?php
$page_title = "Premium Luxury Tour Packages";
$page_desc = "Discover our handcrafted premium luxury tours in India. Choose from custom packages for Agra, Shimla, Manali, Rishikesh, Ayodhya, Vrindavan, Jaipur, and more.";
require_once 'includes/config.php';
require_once 'includes/header.php';
?>

<!-- Premium Tours Page Hero Section -->
<section class="relative min-h-[45vh] flex items-center justify-center bg-obsidian-950 overflow-hidden pt-32 pb-16">
    <!-- Background Overlay -->
    <div class="absolute inset-0 z-0">
        <img src="<?php echo BASE_URL; ?>assets/images/hero.png" alt="Luxury Travel Packages" class="w-full h-full object-cover object-center opacity-30">
        <div class="absolute inset-0 bg-gradient-to-t from-obsidian-950 via-obsidian-950/70 to-transparent"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-obsidian-950/80 via-transparent to-obsidian-950/20"></div>
    </div>

    <!-- Animated Glow Circles in Background -->
    <div class="absolute top-1/4 left-1/3 w-80 h-80 bg-brand/5 rounded-full blur-3xl animate-pulse pointer-events-none"></div>

    <!-- Content -->
    <div class="max-w-[1440px] mx-auto px-4 z-10 w-full text-center space-y-4">
        <span class="inline-flex items-center space-x-2 px-3 py-1.5 rounded-full bg-brand/10 border border-brand/20 text-brand text-xs font-bold uppercase tracking-wider">
            <i class="fa-solid fa-compass text-xs"></i>
            <span>Curated Luxury Destinations</span>
        </span>
        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-white leading-tight font-display">
            Our Premium <br class="sm:hidden"> <span class="text-gradient-gold">Tour Packages</span>
        </h1>
        <p class="text-slate-300 text-sm md:text-base max-w-xl mx-auto leading-relaxed">
            Handcrafted luxury itineraries offering custom private transportation, 5-star hospitality, and immersive sightseeing across India's heritage and spiritual marvels.
        </p>
    </div>
</section>

<!-- Tours Grid Section -->
<section class="py-20 bg-slate-50 relative z-10">
    <div class="max-w-[1440px] mx-auto px-4">
        
        <!-- Filters Bar (Desktop) / Info Label -->
        <div class="flex flex-col md:flex-row md:justify-between md:items-center mb-12 pb-6 border-b border-slate-200/60 gap-4">
            <div>
                <p class="text-xs text-slate-400 font-bold uppercase tracking-wider">Showing Packages</p>
                <h2 class="text-xl font-bold text-obsidian-950 mt-1 font-display">All Trending India Packages (<?php echo count($TOURS); ?>)</h2>
            </div>
            <!-- Trust badges/highlights -->
            <div class="flex flex-wrap items-center gap-3">
                <span class="bg-white px-4 py-2 rounded-xl text-slate-600 text-xs font-semibold shadow-sm border border-slate-100 flex items-center gap-1.5">
                    <i class="fa-solid fa-shield text-brand text-[10px]"></i> 100% Customized
                </span>
                <span class="bg-white px-4 py-2 rounded-xl text-slate-600 text-xs font-semibold shadow-sm border border-slate-100 flex items-center gap-1.5">
                    <i class="fa-solid fa-car text-brand text-[10px]"></i> Private Fleet
                </span>
                <span class="bg-white px-4 py-2 rounded-xl text-slate-600 text-xs font-semibold shadow-sm border border-slate-100 flex items-center gap-1.5">
                    <i class="fa-solid fa-headset text-brand text-[10px]"></i> 24/7 Support
                </span>
            </div>
        </div>

        <!-- Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-10">
            <?php foreach ($TOURS as $key => $tour): ?>
            <div class="group bg-white rounded-[32px] overflow-hidden border border-slate-100 flex flex-col justify-between transition-all duration-300 hover:-translate-y-2.5 hover:shadow-[0_20px_40px_rgba(15,23,42,0.08)]">
                <!-- Image Section with Hover Zoom -->
                <div class="relative overflow-hidden aspect-[16/11] z-0">
                    <img src="<?php echo $tour['image']; ?>" alt="<?php echo $tour['title']; ?>" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105">
                    <!-- Premium Soft Dark Overlay Gradient -->
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/20 to-transparent"></div>
                    
                    <!-- Top Luxury Badges -->
                    <div class="absolute top-5 left-5 right-5 flex justify-between items-center pointer-events-none">
                        <!-- Rating Badge -->
                        <div class="bg-slate-950/70 backdrop-blur-md border border-white/10 px-3 py-1 rounded-full text-white text-[11px] font-bold flex items-center space-x-1.5">
                            <i class="fa-solid fa-star text-brand"></i>
                            <span><?php echo $tour['rating']; ?></span>
                            <span class="text-slate-400 font-normal">(<?php echo $tour['reviews']; ?>)</span>
                        </div>
                        
                        <!-- Featured Tag (If applicable) -->
                        <?php if (isset($tour['featured']) && $tour['featured']): ?>
                            <span class="bg-gradient-gold text-obsidian-950 text-[9px] uppercase tracking-widest font-extrabold px-3 py-1 rounded-full shadow-sm">Featured</span>
                        <?php endif; ?>
                    </div>

                    <!-- Bottom Title Overlay -->
                    <div class="absolute bottom-5 left-6 right-6">
                        <span class="text-brand-light text-[10px] font-extrabold uppercase tracking-widest"><?php echo $tour['subtitle']; ?></span>
                        <h3 class="text-white text-xl font-bold font-display mt-1 leading-tight tracking-tight"><?php echo $tour['title']; ?></h3>
                    </div>
                </div>

                <!-- Card Body & Inclusions -->
                <div class="p-6 md:p-7 flex-grow flex flex-col justify-between space-y-6">
                    <!-- Details Columns -->
                    <div class="grid grid-cols-2 gap-4 text-xs font-semibold text-slate-700">
                        <div class="flex items-center space-x-2.5">
                            <span class="w-8 h-8 rounded-full bg-slate-50 border border-slate-100 flex items-center justify-center text-brand-accent text-xs">
                                <i class="fa-regular fa-clock"></i>
                            </span>
                            <div>
                                <p class="text-[10px] text-slate-400 uppercase tracking-wider font-bold">Duration</p>
                                <p class="text-slate-700 text-[11px]"><?php echo $tour['duration']; ?></p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-2.5">
                            <span class="w-8 h-8 rounded-full bg-slate-50 border border-slate-100 flex items-center justify-center text-brand-accent text-xs">
                                <i class="fa-solid fa-route"></i>
                            </span>
                            <div>
                                <p class="text-[10px] text-slate-400 uppercase tracking-wider font-bold">Tour Type</p>
                                <p class="text-slate-700 text-[11px]">Private/Group</p>
                            </div>
                        </div>
                    </div>

                    <!-- Bottom pricing section -->
                    <div class="pt-5 border-t border-slate-100 flex justify-between items-center">
                        <div>
                            <p class="text-[10px] text-slate-400 uppercase tracking-widest font-bold">Starting From</p>
                            <p class="text-xl font-black text-slate-900 leading-none mt-1 font-display"><?php echo $tour['price']; ?> <span class="text-[10px] text-slate-400 font-normal lowercase">/ guest</span></p>
                        </div>
                        <a href="<?php echo BASE_URL . $tour['link']; ?>" class="relative group/btn overflow-hidden px-5 py-2.5 bg-slate-950 text-white rounded-xl text-xs uppercase tracking-wider font-extrabold shadow-md whitespace-nowrap inline-flex items-center justify-center transition-all duration-300">
                            <!-- Smooth gradient fade-in overlay -->
                            <div class="absolute inset-0 bg-gradient-gold opacity-0 group-hover/btn:opacity-100 transition-opacity duration-300 z-0"></div>
                            <!-- Button contents on top of overlay -->
                            <span class="relative z-10 group-hover/btn:text-obsidian-950 transition-colors duration-300">Explore</span>
                            <i class="fa-solid fa-chevron-right ml-1.5 text-[9px] relative z-10 group-hover/btn:text-obsidian-950 transition-all duration-300 group-hover/btn:translate-x-1.5"></i>
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<!-- Direct Lead Generation & Contact Inquiry Form -->
<section id="inquiry" class="py-20 bg-white relative z-10">
    <div class="max-w-[1440px] mx-auto px-4">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 bg-obsidian-950 rounded-[40px] overflow-hidden border border-white/5 shadow-2xl glow-gold/5">
            
            <!-- Left Side: Call and Info details -->
            <div class="lg:col-span-5 p-8 md:p-12 space-y-8 bg-gradient-dark flex flex-col justify-between">
                <div class="space-y-4">
                    <span class="text-brand font-bold text-xs uppercase tracking-widest bg-white/5 px-3 py-1.5 rounded-full border border-white/10 inline-block">Direct Booking</span>
                    <h3 class="text-3xl font-bold font-display text-white">Let's Design Your Dream Tour</h3>
                    <p class="text-slate-400 text-sm md:text-base leading-relaxed">
                        Fill out this simple form, and our travel specialists will get back to you with custom itinerary suggestions and direct competitive pricing details.
                    </p>
                </div>

                <!-- Specific details -->
                <div class="space-y-6">
                    <a href="tel:<?php echo CONTACT_PHONE_RAW; ?>" class="flex items-center space-x-4 group">
                        <div class="w-12 h-12 rounded-full bg-white/5 group-hover:bg-brand/10 border border-white/10 group-hover:border-brand/20 flex items-center justify-center text-brand text-lg transition-colors">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div>
                            <p class="text-xs text-slate-400">Speak With Our Expert</p>
                            <p class="text-white font-bold text-lg group-hover:text-brand transition-colors"><?php echo CONTACT_PHONE; ?></p>
                        </div>
                    </a>

                    <a href="mailto:<?php echo CONTACT_EMAIL; ?>" class="flex items-center space-x-4 group">
                        <div class="w-12 h-12 rounded-full bg-white/5 group-hover:bg-brand/10 border border-white/10 group-hover:border-brand/20 flex items-center justify-center text-brand text-lg transition-colors">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div>
                            <p class="text-xs text-slate-400">Email Inquiry Desk</p>
                            <p class="text-white font-bold group-hover:text-brand transition-colors"><?php echo CONTACT_EMAIL; ?></p>
                        </div>
                    </a>

                    <a href="<?php echo WHATSAPP_LINK; ?>" target="_blank" class="flex items-center space-x-4 group">
                        <div class="w-12 h-12 rounded-full bg-emerald-500/10 border border-emerald-500/20 group-hover:bg-emerald-500 group-hover:text-white flex items-center justify-center text-emerald-500 text-xl transition-all">
                            <i class="fa-brands fa-whatsapp"></i>
                        </div>
                        <div>
                            <p class="text-xs text-slate-400">Instant Chat Assistance</p>
                            <p class="text-emerald-500 font-bold group-hover:text-emerald-400 transition-colors">Click to Chat on WhatsApp</p>
                        </div>
                    </a>
                </div>

                <!-- Trust tagline -->
                <p class="text-xs text-slate-500">
                    * By submitting this form you consent to our travel operators calling or messaging you to assist with your bookings. We respect your privacy.
                </p>
            </div>

            <!-- Right Side: Lead Capture Form -->
            <div class="lg:col-span-7 p-8 md:p-12 border-t lg:border-t-0 lg:border-l border-white/5">
                <form action="javascript:void(0);" onsubmit="alert('Thank you for your inquiry! Our travel representative will contact you shortly.');" class="space-y-6">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-xs font-bold text-brand uppercase tracking-wider mb-2">Your Full Name *</label>
                            <input type="text" required placeholder="Enter name" class="w-full bg-white/5 border border-white/10 text-white rounded-xl py-3 px-4 focus:outline-none focus:border-brand transition-colors text-sm">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-brand uppercase tracking-wider mb-2">Phone Number *</label>
                            <input type="tel" required placeholder="Enter mobile number" class="w-full bg-white/5 border border-white/10 text-white rounded-xl py-3 px-4 focus:outline-none focus:border-brand transition-colors text-sm">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-xs font-bold text-brand uppercase tracking-wider mb-2">Email Address</label>
                            <input type="email" placeholder="Enter email" class="w-full bg-white/5 border border-white/10 text-white rounded-xl py-3 px-4 focus:outline-none focus:border-brand transition-colors text-sm">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-brand uppercase tracking-wider mb-2">Select Tour / Service</label>
                            <select class="w-full bg-slate-900 border border-white/10 text-white rounded-xl py-3 px-4 focus:outline-none focus:border-brand transition-colors text-sm appearance-none">
                                <option value="">Select Option</option>
                                <optgroup label="Tours" class="bg-slate-950 text-white">
                                    <?php foreach ($TOURS as $key => $tour): ?>
                                        <option value="<?php echo $key; ?>"><?php echo $tour['title']; ?></option>
                                    <?php endforeach; ?>
                                </optgroup>
                                <optgroup label="Vehicles" class="bg-slate-950 text-white">
                                    <option value="tempo-traveller">Luxury Tempo Traveller</option>
                                    <option value="car-rental">Premium Sedan/SUV Hire</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-brand uppercase tracking-wider mb-2">Tell Us About Your Requirements</label>
                        <textarea rows="4" placeholder="e.g. Travel dates, number of travelers, budget details, etc." class="w-full bg-white/5 border border-white/10 text-white rounded-xl py-3 px-4 focus:outline-none focus:border-brand transition-colors text-sm resize-none"></textarea>
                    </div>

                    <button type="submit" class="w-full py-4 bg-gradient-gold text-obsidian-950 font-bold rounded-xl shadow-lg hover:shadow-brand/10 transition-transform active:scale-98 text-center uppercase tracking-wider text-sm pulse-gold-btn">
                        Submit Custom Request
                    </button>
                </form>
            </div>

        </div>

    </div>
</section>

<?php
require_once 'includes/footer.php';
?>
