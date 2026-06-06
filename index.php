<?php
$page_title = "Home - Premium Luxury Travel & Rentals";
$page_desc = "Book premium luxury tours, tempo travellers, and premium cars in India. Customized packages for Agra, Shimla, Manali, Rishikesh, Ayodhya, and more.";
require_once 'includes/config.php';
require_once 'includes/header.php';
?>

<!-- Premium Hero Section with Glassmorphism Search Panel -->
<section
    class="relative min-h-[90vh] md:min-h-screen flex items-center justify-center bg-obsidian-950 overflow-hidden pt-20">
    <!-- Hero Background Image with Premium Dark Overlay -->
    <div class="absolute inset-0 z-0">
        <img src="<?php echo BASE_URL; ?>assets/images/hero.webp" alt="Explore Your Dream Trip Hero"
            class="w-full h-full object-cover object-center opacity-40">
        <div class="absolute inset-0 bg-gradient-to-t from-obsidian-950 via-obsidian-950/60 to-transparent"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-obsidian-950/80 via-transparent to-obsidian-950/20"></div>
    </div>

    <!-- Animated Glow Circles in Background -->
    <div
        class="absolute top-1/4 left-1/4 w-96 h-96 bg-brand/10 rounded-full blur-3xl animate-pulse pointer-events-none">
    </div>
    <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-brand-dark/10 rounded-full blur-3xl animate-pulse pointer-events-none"
        style="animation-delay: 2s;"></div>

    <!-- Hero Content & Search Widget -->
    <div class="max-w-[1440px] mx-auto px-4 z-10 w-full pt-12 pb-16 relative">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

            <!-- Left Side: Copy and Headline -->
            <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                <span
                    class="inline-flex items-center space-x-2 px-3 py-1.5 rounded-full bg-brand/10 border border-brand/20 text-brand text-xs font-bold uppercase tracking-wider animate-float">
                    <i class="fa-solid fa-star text-xs"></i>
                    <span>India's Most Trusted Luxury Tour Operator</span>
                </span>
                <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold text-white leading-tight">
                    Crafting Your <br>
                    <span class="text-gradient-gold">Ultimate Dream Trip</span>
                </h1>
                <p class="text-slate-300 text-base md:text-lg max-w-xl mx-auto lg:mx-0 leading-relaxed">
                    Experience luxury travel like never before. From custom private tours of heritage wonders to
                    executive tempo travellers and premium cars, we redefine Indian hospitality.
                </p>
                <div class="flex flex-wrap justify-center lg:justify-start gap-5 pt-6">
                    <a href="#destinations"
                        class="group inline-flex items-center justify-center px-8 py-4 bg-gradient-gold text-obsidian-950 text-xs uppercase tracking-widest font-extrabold rounded-full hover:shadow-xl hover:shadow-brand/20 transition-all duration-300 hover:-translate-y-0.5 active:translate-y-0 pulse-gold-btn">
                        <span>Explore Packages</span>
                        <i
                            class="fa-solid fa-arrow-right ml-2.5 text-xs transition-transform duration-300 group-hover:translate-x-1.5"></i>
                    </a>
                    <a href="#fleet"
                        class="group inline-flex items-center justify-center px-8 py-4 bg-white/5 hover:bg-white/10 text-white/90 hover:text-white border border-white/10 hover:border-white/20 rounded-full text-xs uppercase tracking-widest font-bold transition-all duration-300 hover:-translate-y-0.5 active:translate-y-0">
                        <span>View Fleet Rental</span>
                        <i
                            class="fa-solid fa-car-side ml-2.5 text-brand/80 transition-transform duration-300 group-hover:scale-110"></i>
                    </a>
                </div>
            </div>

            <!-- Right Side: Luxury Quick Booking Widget -->
            <div class="lg:col-span-5 w-full">
                <div
                    class="bg-slate-950/75 backdrop-blur-xl glow-gold rounded-[32px] p-6 md:p-8 border border-white/10 shadow-2xl shadow-black/60 relative">
                    <h3 class="text-xl md:text-2xl font-bold text-white mb-1.5 font-display">Book Your Luxury Escape
                    </h3>
                    <p class="text-xs text-slate-400 mb-6 uppercase tracking-wider font-semibold">Let us know your
                        travel plans for a free custom quote</p>

                    <form id="hero-booking-form" action="<?php echo BASE_URL; ?>thank-you" method="POST" class="space-y-4">
                        <!-- Name Input -->
                        <div>
                            <label class="block text-[10px] font-bold text-brand uppercase tracking-widest mb-1.5">Your Full Name *</label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-slate-400 pointer-events-none">
                                    <i class="fa-solid fa-user text-brand/80 text-xs"></i>
                                </span>
                                <input type="text" name="name" required placeholder="Enter name"
                                    class="w-full bg-slate-900/40 hover:bg-slate-900/60 focus:bg-slate-950/80 border border-white/10 focus:border-brand text-white rounded-xl py-3.5 pl-10 pr-4 focus:outline-none transition-all duration-300 text-sm focus:shadow-[0_0_15px_rgba(240,210,90,0.15)]">
                            </div>
                        </div>

                        <!-- Phone & Email Row -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-[10px] font-bold text-brand uppercase tracking-widest mb-1.5">Phone Number *</label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-slate-400 pointer-events-none">
                                        <i class="fa-solid fa-phone text-brand/80 text-xs"></i>
                                    </span>
                                    <input type="tel" name="phone" required placeholder="Enter mobile number"
                                        class="w-full bg-slate-900/40 hover:bg-slate-900/60 focus:bg-slate-950/80 border border-white/10 focus:border-brand text-white rounded-xl py-3.5 pl-10 pr-4 focus:outline-none transition-all duration-300 text-sm focus:shadow-[0_0_15px_rgba(240,210,90,0.15)]">
                                </div>
                            </div>
                            <div>
                                <label class="block text-[10px] font-bold text-brand uppercase tracking-widest mb-1.5">Email Address</label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-slate-400 pointer-events-none">
                                        <i class="fa-solid fa-envelope text-brand/80 text-xs"></i>
                                    </span>
                                    <input type="email" name="email" placeholder="Enter email"
                                        class="w-full bg-slate-900/40 hover:bg-slate-900/60 focus:bg-slate-950/80 border border-white/10 focus:border-brand text-white rounded-xl py-3.5 pl-10 pr-4 focus:outline-none transition-all duration-300 text-sm focus:shadow-[0_0_15px_rgba(240,210,90,0.15)]">
                                </div>
                            </div>
                        </div>

                        <!-- Service Select -->
                        <div>
                            <label class="block text-[10px] font-bold text-brand uppercase tracking-widest mb-1.5">Select Tour / Service</label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-slate-400 pointer-events-none">
                                    <i class="fa-solid fa-map-location-dot text-brand/80 text-xs"></i>
                                </span>
                                <select name="service"
                                    class="w-full bg-slate-900/40 hover:bg-slate-900/60 focus:bg-slate-950/80 border border-white/10 focus:border-brand text-white rounded-xl py-3.5 pl-10 pr-10 focus:outline-none transition-all duration-300 appearance-none text-sm font-medium focus:shadow-[0_0_15px_rgba(240,210,90,0.15)]">
                                    <option value="tour">All-Inclusive Tour</option>
                                    <option value="tempo">Tempo Traveller Hire</option>
                                    <option value="car">Premium Car Hire</option>
                                </select>
                                <span class="absolute inset-y-0 right-0 pr-3.5 flex items-center text-brand pointer-events-none">
                                    <i class="fa-solid fa-chevron-down text-xs"></i>
                                </span>
                            </div>
                        </div>

                        <!-- Requirements Textarea -->
                        <div>
                            <label class="block text-[10px] font-bold text-brand uppercase tracking-widest mb-1.5">Your Travel Plans / Requirements</label>
                            <div class="relative">
                                <span class="absolute top-3.5 left-0 pl-3.5 flex items-center text-slate-400 pointer-events-none">
                                    <i class="fa-solid fa-pen-to-square text-brand/80 text-xs"></i>
                                </span>
                                <textarea name="requirements" required rows="3" placeholder="e.g. Travel dates, destination, number of travelers, budget details, etc."
                                    class="w-full bg-slate-900/40 hover:bg-slate-900/60 focus:bg-slate-950/80 border border-white/10 focus:border-brand text-white rounded-xl py-3.5 pl-10 pr-4 focus:outline-none transition-all duration-300 text-sm resize-none focus:shadow-[0_0_15px_rgba(240,210,90,0.15)]"></textarea>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit"
                            class="w-full py-4 mt-2 bg-gradient-gold hover:bg-gradient-gold text-obsidian-950 text-xs uppercase tracking-widest font-extrabold rounded-xl shadow-lg hover:shadow-brand/25 transition-all duration-300 hover:-translate-y-0.5 active:translate-y-0 pulse-gold-btn btn-shimmer">
                            Get Custom Price Quote
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Trust badging section -->
<section class="bg-obsidian-950 py-8 border-y border-white/5 relative z-10">
    <div class="max-w-[1440px] mx-auto px-4">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
            <div class="p-4 border-r border-white/5 last:border-0">
                <h4 class="text-brand font-bold text-3xl font-display">15,000+</h4>
                <p class="text-xs text-slate-400 uppercase tracking-wider mt-1">Happy Guests Served</p>
            </div>
            <div class="p-4 md:border-r border-white/5">
                <h4 class="text-brand font-bold text-3xl font-display">99.8%</h4>
                <p class="text-xs text-slate-400 uppercase tracking-wider mt-1">5-Star Reviews</p>
            </div>
            <div class="p-4 border-r border-white/5 last:border-0">
                <h4 class="text-brand font-bold text-3xl font-display">25+</h4>
                <p class="text-xs text-slate-400 uppercase tracking-wider mt-1">Premium Vehicles</p>
            </div>
            <div class="p-4">
                <h4 class="text-brand font-bold text-3xl font-display">100%</h4>
                <p class="text-xs text-slate-400 uppercase tracking-wider mt-1">Customizable Packages</p>
            </div>
        </div>
    </div>
</section>

<!-- Popular Destinations Section -->
<section id="destinations" class="py-20 bg-slate-50">
    <div class="max-w-[1440px] mx-auto px-4">

        <!-- Section Header -->
        <div class="text-center max-w-2xl mx-auto mb-16 space-y-4">
            <span
                class="text-brand-accent font-bold text-xs uppercase tracking-widest bg-brand/10 px-3 py-1.5 rounded-full border border-brand/15">Incredible
                India</span>
            <h2 class="text-3xl md:text-5xl font-extrabold text-obsidian-950 leading-tight">Trending Destinations</h2>
            <p class="text-slate-600">Discover some of the most sought-after scenic and spiritual places across India,
                all planned in luxurious comfort.</p>
        </div>

        <!-- Destinations Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-10">
            <?php
            $count = 0;
            foreach ($TOURS as $key => $tour):
                if ($count >= 6)
                    break; // Display first 6 on homepage
                $count++;
                ?>
                <div
                    class="group bg-white rounded-[32px] overflow-hidden border border-slate-100 flex flex-col justify-between transition-all duration-300 hover:-translate-y-2.5 hover:shadow-[0_20px_40px_rgba(15,23,42,0.08)]">
                    <!-- Image Section with Hover Zoom -->
                    <div class="relative overflow-hidden aspect-[16/11] z-0">
                        <img src="<?php echo $tour['image']; ?>" alt="<?php echo $tour['title']; ?>"
                            class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105">
                        <!-- Premium Soft Dark Overlay Gradient -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/20 to-transparent"></div>

                        <!-- Top Luxury Badges -->
                        <div class="absolute top-5 left-5 right-5 flex justify-between items-center pointer-events-none">
                            <!-- Rating Badge -->
                            <div
                                class="bg-slate-950/70 backdrop-blur-md border border-white/10 px-3 py-1 rounded-full text-white text-[11px] font-bold flex items-center space-x-1.5">
                                <i class="fa-solid fa-star text-brand"></i>
                                <span><?php echo $tour['rating']; ?></span>
                                <span class="text-slate-400 font-normal">(<?php echo $tour['reviews']; ?>)</span>
                            </div>

                            <!-- Featured Tag (If applicable) -->
                            <?php if (isset($tour['featured']) && $tour['featured']): ?>
                                <span
                                    class="bg-gradient-gold text-obsidian-950 text-[9px] uppercase tracking-widest font-extrabold px-3 py-1 rounded-full shadow-sm">Featured</span>
                            <?php endif; ?>
                        </div>

                        <!-- Bottom Title Overlay -->
                        <div class="absolute bottom-5 left-6 right-6">
                            <span
                                class="text-brand-light text-[10px] font-extrabold uppercase tracking-widest"><?php echo $tour['subtitle']; ?></span>
                            <h3 class="text-white text-xl font-bold font-display mt-1 leading-tight tracking-tight">
                                <?php echo $tour['title']; ?>
                            </h3>
                        </div>
                    </div>

                    <!-- Card Body & Inclusions -->
                    <div class="p-6 md:p-7 flex-grow flex flex-col justify-between space-y-6">
                        <!-- Details Columns -->
                        <div class="grid grid-cols-2 gap-4 text-xs font-semibold text-slate-700">
                            <div class="flex items-center space-x-2.5">
                                <span
                                    class="w-8 h-8 rounded-full bg-slate-50 border border-slate-100 flex items-center justify-center text-brand-accent text-xs">
                                    <i class="fa-regular fa-clock"></i>
                                </span>
                                <div>
                                    <p class="text-[10px] text-slate-400 uppercase tracking-wider font-bold">Duration</p>
                                    <p class="text-slate-700 text-[11px]"><?php echo $tour['duration']; ?></p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-2.5">
                                <span
                                    class="w-8 h-8 rounded-full bg-slate-50 border border-slate-100 flex items-center justify-center text-brand-accent text-xs">
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
                                <p class="text-xl font-black text-slate-900 leading-none mt-1 font-display">
                                    <?php echo $tour['price']; ?> <span
                                        class="text-[10px] text-slate-400 font-normal lowercase">/ guest</span>
                                </p>
                            </div>
                            <a href="<?php echo BASE_URL . $tour['link']; ?>"
                                class="relative group/btn overflow-hidden px-5 py-2.5 bg-slate-950 text-white rounded-xl text-xs uppercase tracking-wider font-extrabold shadow-md whitespace-nowrap inline-flex items-center justify-center transition-all duration-300">
                                <!-- Smooth gradient fade-in overlay -->
                                <div
                                    class="absolute inset-0 bg-gradient-gold opacity-0 group-hover/btn:opacity-100 transition-opacity duration-300 z-0">
                                </div>
                                <!-- Button contents on top of overlay -->
                                <span
                                    class="relative z-10 group-hover/btn:text-obsidian-950 transition-colors duration-300">Explore</span>
                                <i
                                    class="fa-solid fa-chevron-right ml-1.5 text-[9px] relative z-10 group-hover/btn:text-obsidian-950 transition-all duration-300 group-hover/btn:translate-x-1.5"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Explore All Destinations Button -->
        <div class="text-center mt-16">
            <a href="<?php echo BASE_URL; ?>tours"
                class="relative group overflow-hidden px-8 py-4 bg-slate-950 text-white border border-slate-800 text-xs uppercase tracking-widest font-extrabold rounded-full inline-flex items-center justify-center transition-all duration-300 shadow-md hover:shadow-xl hover:shadow-brand/10 hover:-translate-y-0.5 active:translate-y-0">
                <!-- Smooth gradient fade-in overlay -->
                <div
                    class="absolute inset-0 bg-gradient-gold opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-0">
                </div>
                <!-- Button contents on top of overlay -->
                <span class="relative z-10 group-hover:text-obsidian-950 transition-colors duration-300">Explore All
                    Destinations</span>
                <i
                    class="fa-solid fa-arrow-right ml-2.5 text-xs text-brand relative z-10 group-hover:text-obsidian-950 transition-all duration-300 group-hover:translate-x-1.5"></i>
            </a>
        </div>

    </div>
</section>

<!-- Luxury Tempo Traveller Fleet Section -->
<section id="tempo-travellers" class="py-20 bg-gradient-dark text-white relative overflow-hidden">
    <!-- Glow Effect in Background -->
    <div class="absolute top-1/4 left-1/4 w-[400px] h-[400px] bg-brand/5 rounded-full blur-[120px] pointer-events-none">
    </div>
    <div class="absolute bottom-1/4 right-1/4 w-[400px] h-[400px] bg-brand-dark/5 rounded-full blur-[120px] pointer-events-none"
        style="animation-delay: 3s;"></div>

    <div class="max-w-[1440px] mx-auto px-4 relative z-10">

        <!-- Header -->
        <div class="text-center max-w-2xl mx-auto mb-16 space-y-4">
            <span
                class="inline-flex items-center space-x-2 px-3 py-1.5 rounded-full bg-white/5 border border-white/10 text-brand text-xs font-bold uppercase tracking-wider">
                <i class="fa-solid fa-star text-xs"></i>
                <span>Group Travel in Style</span>
            </span>
            <h2 class="text-3xl md:text-5xl font-extrabold text-white leading-tight">
                Luxury <span class="text-gradient-gold font-display">Tempo Travellers</span>
            </h2>
            <p class="text-slate-400 text-sm md:text-base leading-relaxed">
                Travel together without compromising on elegance. Our executive tempo travellers feature premium
                pushback seating, individual climate vents, and modern high-end styling.
            </p>
        </div>

        <!-- Fleet Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-10">
            <?php foreach ($TEMPO_TRAVELLERS as $key => $fleet): ?>
                <div
                    class="group/card bg-slate-900/40 backdrop-blur-md rounded-[32px] overflow-hidden flex flex-col justify-between border border-white/5 hover:border-brand/20 transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_20px_50px_rgba(240,210,90,0.06)]">
                    <!-- Vehicle Image -->
                    <div class="relative overflow-hidden aspect-[16/10] z-0">
                        <img src="<?php echo $fleet['image']; ?>" alt="<?php echo $fleet['title']; ?>"
                            class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover/card:scale-105">
                        <!-- Soft luxury overlays -->
                        <div class="absolute inset-0 bg-gradient-to-t from-obsidian-950 via-obsidian-950/20 to-transparent">
                        </div>
                        <div class="absolute top-4 left-4">
                            <span
                                class="text-white/80 bg-slate-950/60 backdrop-blur-md border border-white/10 px-3 py-1.5 rounded-full text-[10px] font-bold uppercase tracking-wider flex items-center space-x-1.5">
                                <i class="fa-solid fa-crown text-brand text-[9px]"></i>
                                <span>Executive Class</span>
                            </span>
                        </div>
                    </div>

                    <!-- Info -->
                    <div class="p-6 md:p-8 space-y-6 flex-grow flex flex-col justify-between">
                        <div class="space-y-4">
                            <h3
                                class="text-xl font-bold font-display text-white transition-colors duration-300 group-hover/card:text-brand-light leading-tight">
                                <?php echo $fleet['title']; ?>
                            </h3>
                            <div class="flex items-center space-x-2">
                                <span
                                    class="text-[10px] text-brand bg-brand/10 border border-brand/25 px-3 py-1 rounded-full font-bold uppercase tracking-wider">
                                    <i class="fa-solid fa-users mr-1"></i> <?php echo $fleet['capacity']; ?>
                                </span>
                                <span
                                    class="text-[10px] text-slate-400 bg-white/5 border border-white/10 px-3 py-1 rounded-full font-semibold uppercase tracking-wider">
                                    AC Vehicles
                                </span>
                            </div>
                        </div>

                        <!-- Amenities list -->
                        <ul class="space-y-2.5 text-xs font-medium text-slate-300/95 pt-2">
                            <?php foreach (array_slice($fleet['features'], 0, 4) as $feature): ?>
                                <li class="flex items-center">
                                    <span
                                        class="w-5 h-5 rounded-full bg-brand/10 border border-brand/20 flex items-center justify-center text-brand text-[8px] mr-2.5 flex-shrink-0">
                                        <i class="fa-solid fa-check"></i>
                                    </span>
                                    <span><?php echo $feature; ?></span>
                                </li>
                            <?php endforeach; ?>
                        </ul>

                        <div class="pt-6 border-t border-white/5 flex justify-between items-center mt-auto">
                            <div>
                                <p class="text-[10px] text-slate-400 uppercase tracking-widest font-semibold">Starting From
                                </p>
                                <p class="text-xl font-extrabold text-brand font-display leading-none mt-1">
                                    <?php echo $fleet['price']; ?>
                                </p>
                            </div>

                            <a href="<?php echo BASE_URL; ?>tempo-traveller"
                                class="relative group/btn overflow-hidden px-5 py-2.5 bg-slate-950 text-white rounded-xl text-xs uppercase tracking-wider font-extrabold shadow-md whitespace-nowrap inline-flex items-center justify-center transition-all duration-300 border border-white/10">
                                <!-- Smooth gradient fade-in overlay -->
                                <div
                                    class="absolute inset-0 bg-gradient-gold opacity-0 group-hover/btn:opacity-100 transition-opacity duration-300 z-0">
                                </div>
                                <!-- Button contents on top of overlay -->
                                <span
                                    class="relative z-10 group-hover/btn:text-obsidian-950 transition-colors duration-300">Rent
                                    Now</span>
                                <i
                                    class="fa-solid fa-chevron-right ml-1.5 text-[9px] relative z-10 group-hover/btn:text-obsidian-950 transition-all duration-300 group-hover/btn:translate-x-1.5"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<!-- Executive Car Rental Section -->
<section id="fleet" class="py-20 bg-slate-50 relative overflow-hidden">
    <!-- Subtle Ambient Background Accents -->
    <div class="absolute top-1/4 right-0 w-96 h-96 bg-brand/5 rounded-full blur-[100px] pointer-events-none"></div>

    <div class="max-w-[1440px] mx-auto px-4 relative z-10">

        <!-- Header -->
        <div class="text-center max-w-2xl mx-auto mb-16 space-y-4">
            <span
                class="inline-flex items-center space-x-2 px-3 py-1.5 rounded-full bg-brand/10 border border-brand/15 text-brand-accent text-xs font-bold uppercase tracking-widest">
                <i class="fa-solid fa-crown text-[9px]"></i>
                <span>Elite Fleet Experience</span>
            </span>
            <h2 class="text-3xl md:text-5xl font-extrabold text-obsidian-950 leading-tight">
                Premium Car Rentals
            </h2>
            <p class="text-slate-600 text-sm md:text-base leading-relaxed">
                Choose from our premium class sedans and SUVs for a smooth and comfortable voyage. Perfect for local
                corporate transfers, outstation packages, and VIP family trips.
            </p>
        </div>

        <!-- Cars list -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <?php foreach ($CARS as $key => $car): ?>
                <div
                    class="group/card bg-white rounded-[32px] border border-slate-100 overflow-hidden shadow-sm hover:shadow-[0_20px_40px_rgba(15,23,42,0.06)] hover:border-brand/35 hover:-translate-y-2 transition-all duration-500 flex flex-col justify-between">
                    <!-- Vehicle Image -->
                    <div class="relative overflow-hidden aspect-[4/3] bg-slate-50 z-0">
                        <img src="<?php echo $car['image']; ?>" alt="<?php echo $car['title']; ?>"
                            class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover/card:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/20 via-transparent to-transparent">
                        </div>
                        <div class="absolute top-4 left-4">
                            <span
                                class="text-slate-900 bg-white/95 backdrop-blur-md border border-slate-200/50 px-3 py-1 rounded-full text-[9px] font-bold uppercase tracking-wider flex items-center space-x-1.5 shadow-sm">
                                <i class="fa-solid fa-user-tie text-brand-accent"></i>
                                <span>Chauffeur Driven</span>
                            </span>
                        </div>
                    </div>

                    <!-- Info -->
                    <div class="p-6 flex-grow space-y-5 flex flex-col justify-between">
                        <div class="space-y-3">
                            <h3
                                class="text-lg font-bold text-obsidian-950 font-display transition-colors duration-300 group-hover/card:text-brand-accent line-clamp-1 leading-tight">
                                <?php echo $car['title']; ?>
                            </h3>
                            <div
                                class="flex items-center space-x-2 text-[10px] text-slate-500 font-bold uppercase tracking-wider">
                                <span class="bg-slate-100 px-2.5 py-1 rounded-full flex items-center gap-1">
                                    <i class="fa-solid fa-user-group text-slate-400"></i> Max
                                    <?php echo $car['capacity']; ?>
                                </span>
                                <span class="bg-slate-100 px-2.5 py-1 rounded-full flex items-center gap-1">
                                    <i class="fa-solid fa-snowflake text-slate-400"></i> AC Cab
                                </span>
                            </div>
                        </div>

                        <!-- Short amenities -->
                        <div class="flex flex-wrap gap-1.5 pt-1">
                            <?php foreach (array_slice($car['features'], 0, 2) as $f): ?>
                                <span
                                    class="bg-slate-100 text-slate-700 text-[10px] px-3 py-1 rounded-full font-semibold"><?php echo $f; ?></span>
                            <?php endforeach; ?>
                        </div>

                        <div class="pt-5 border-t border-slate-100 flex justify-between items-center mt-auto">
                            <div>
                                <p class="text-[10px] text-slate-400 uppercase tracking-widest font-semibold">Per KM Rate
                                </p>
                                <p class="text-lg font-extrabold text-slate-900 font-display leading-none mt-1">
                                    <?php echo $car['price']; ?>
                                </p>
                            </div>

                            <a href="<?php echo BASE_URL; ?>car-rental"
                                class="relative group/btn overflow-hidden w-10 h-10 bg-slate-950 text-white rounded-xl inline-flex items-center justify-center transition-all duration-300 shadow-md flex-shrink-0">
                                <!-- Smooth gradient fade-in overlay -->
                                <div
                                    class="absolute inset-0 bg-gradient-gold opacity-0 group-hover/btn:opacity-100 transition-opacity duration-300 z-0">
                                </div>
                                <!-- Button contents on top of overlay -->
                                <i
                                    class="fa-solid fa-chevron-right text-[11px] relative z-10 group-hover/btn:text-obsidian-950 transition-all duration-300 group-hover/btn:translate-x-0.5"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<!-- Why Choose Us & Trust Badges Section -->
<section class="py-20 bg-obsidian-950 text-white relative border-t border-white/5 overflow-hidden">
    <!-- Subtle Background Glows -->
    <div class="absolute top-1/4 left-1/4 w-[400px] h-[400px] bg-brand/5 rounded-full blur-[120px] pointer-events-none">
    </div>
    <div class="absolute bottom-1/4 right-1/4 w-[400px] h-[400px] bg-brand-dark/5 rounded-full blur-[120px] pointer-events-none"
        style="animation-delay: 2s;"></div>

    <div class="max-w-[1440px] mx-auto px-4 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">

            <!-- Left: Description and Image (Taj Mahal/Scenic) -->
            <div class="lg:col-span-5 space-y-8">
                <span
                    class="inline-flex items-center space-x-2 px-3 py-1.5 rounded-full bg-white/5 border border-white/10 text-brand text-xs font-bold uppercase tracking-wider">
                    <i class="fa-solid fa-shield text-[10px]"></i>
                    <span>Unmatched Quality</span>
                </span>
                <h2 class="text-3xl md:text-5xl font-extrabold font-display leading-tight">
                    Why Choose <br><span class="text-gradient-gold">Explore Your Dream Trip?</span>
                </h2>
                <p class="text-slate-400 text-base leading-relaxed">
                    With over a decade of excellence in the Indian travel space, we create memories that linger forever.
                    Our dedication to safety, local immersion, and premium comfort sets us apart from ordinary
                    operators.
                </p>
                <div
                    class="p-6 bg-slate-900/40 backdrop-blur-md rounded-3xl border border-white/5 flex items-start space-x-4 hover:border-brand/20 transition-all duration-300">
                    <div
                        class="w-12 h-12 bg-brand/10 border border-brand/20 text-brand rounded-2xl flex items-center justify-center text-xl flex-shrink-0">
                        <i class="fa-solid fa-headset"></i>
                    </div>
                    <div>
                        <h4 class="text-white font-bold text-lg mb-1">24/7 Guest Assistance</h4>
                        <p class="text-slate-400 text-sm leading-relaxed">We provide continuous concierge support for
                            flight/train changes, itinerary adjustments, and queries.</p>
                    </div>
                </div>
            </div>

            <!-- Right: Feature Cards Grid -->
            <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-2 gap-6">

                <!-- Card 1: Govt Approved -->
                <div
                    class="group p-8 bg-slate-900/40 backdrop-blur-md rounded-[32px] border border-white/5 hover:border-brand/25 transition-all duration-300 hover:-translate-y-1.5 hover:shadow-[0_15px_35px_rgba(240,210,90,0.05)] space-y-5">
                    <div
                        class="w-12 h-12 bg-white/5 text-brand rounded-2xl flex items-center justify-center text-xl border border-white/10 group-hover:bg-brand/10 group-hover:text-brand-light group-hover:border-brand/40 transition-all duration-300">
                        <i class="fa-solid fa-award transition-colors duration-300 group-hover:text-brand-light"></i>
                    </div>
                    <h3
                        class="text-xl font-bold text-white font-display group-hover:text-brand transition-colors duration-300">
                        Govt. Certified Operator</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">We are fully registered and approved by the
                        Ministry of Tourism, ensuring 100% safety and standards.</p>
                </div>

                <!-- Card 2: Custom Itineraries -->
                <div
                    class="group p-8 bg-slate-900/40 backdrop-blur-md rounded-[32px] border border-white/5 hover:border-brand/25 transition-all duration-300 hover:-translate-y-1.5 hover:shadow-[0_15px_35px_rgba(240,210,90,0.05)] space-y-5">
                    <div
                        class="w-12 h-12 bg-white/5 text-brand rounded-2xl flex items-center justify-center text-xl border border-white/10 group-hover:bg-brand/10 group-hover:text-brand-light group-hover:border-brand/40 transition-all duration-300">
                        <i class="fa-solid fa-sliders transition-colors duration-300 group-hover:text-brand-light"></i>
                    </div>
                    <h3
                        class="text-xl font-bold text-white font-display group-hover:text-brand transition-colors duration-300">
                        Fully Customized Tours</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">Tailor your trip at your own pace. Add
                        destinations, customize hotels, and pick your choice of cars.</p>
                </div>

                <!-- Card 3: Safe Payments -->
                <div
                    class="group p-8 bg-slate-900/40 backdrop-blur-md rounded-[32px] border border-white/5 hover:border-brand/25 transition-all duration-300 hover:-translate-y-1.5 hover:shadow-[0_15px_35px_rgba(240,210,90,0.05)] space-y-5">
                    <div
                        class="w-12 h-12 bg-white/5 text-brand rounded-2xl flex items-center justify-center text-xl border border-white/10 group-hover:bg-brand/10 group-hover:text-brand-light group-hover:border-brand/40 transition-all duration-300">
                        <i
                            class="fa-solid fa-credit-card transition-colors duration-300 group-hover:text-brand-light"></i>
                    </div>
                    <h3
                        class="text-xl font-bold text-white font-display group-hover:text-brand transition-colors duration-300">
                        Secure Flexible Booking</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">Secure your booking with a small token amount and
                        pay the balance during the tour safely.</p>
                </div>

                <!-- Card 4: Veteran Drivers -->
                <div
                    class="group p-8 bg-slate-900/40 backdrop-blur-md rounded-[32px] border border-white/5 hover:border-brand/25 transition-all duration-300 hover:-translate-y-1.5 hover:shadow-[0_15px_35px_rgba(240,210,90,0.05)] space-y-5">
                    <div
                        class="w-12 h-12 bg-white/5 text-brand rounded-2xl flex items-center justify-center text-xl border border-white/10 group-hover:bg-brand/10 group-hover:text-brand-light group-hover:border-brand/40 transition-all duration-300">
                        <i class="fa-solid fa-user-tie transition-colors duration-300 group-hover:text-brand-light"></i>
                    </div>
                    <h3
                        class="text-xl font-bold text-white font-display group-hover:text-brand transition-colors duration-300">
                        Professional Drivers</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">Our drivers are background verified, highly
                        experienced in tourist routes, and strictly professional.</p>
                </div>

            </div>

        </div>
    </div>
</section>

<!-- Customer Testimonials Section -->
<section id="testimonials" class="py-20 bg-slate-50 relative overflow-hidden">
    <!-- Subtle Ambient Glow Accent -->
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-brand/5 rounded-full blur-[100px] pointer-events-none"></div>

    <div class="max-w-[1440px] mx-auto px-4 relative z-10">

        <!-- Header -->
        <div class="text-center max-w-2xl mx-auto mb-16 space-y-4">
            <span
                class="inline-flex items-center space-x-2 px-3 py-1.5 rounded-full bg-brand/10 border border-brand/15 text-brand-accent text-xs font-bold uppercase tracking-widest">
                <i class="fa-solid fa-star text-[9px]"></i>
                <span>Guest Experiences</span>
            </span>
            <h2 class="text-3xl md:text-5xl font-extrabold text-obsidian-950 leading-tight">
                What Our Guests Say
            </h2>
            <p class="text-slate-600 text-sm md:text-base leading-relaxed">
                Read real reviews and feedback from travelers who experienced India in luxurious comfort with our
                premium fleet and tours.
            </p>
        </div>

        <!-- Testimonial Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

            <!-- Card 1 -->
            <div
                class="group bg-white rounded-[32px] border border-slate-100 p-8 shadow-sm hover:shadow-[0_20px_45px_rgba(15,23,42,0.06)] hover:border-brand/35 hover:-translate-y-2 transition-all duration-500 flex flex-col justify-between">
                <div class="space-y-5">
                    <div class="flex justify-between items-center">
                        <span
                            class="w-10 h-10 rounded-xl bg-brand/5 border border-brand/10 flex items-center justify-center text-brand text-sm group-hover:bg-brand/10 group-hover:border-brand/30 transition-all duration-300">
                            <i class="fa-solid fa-quote-left"></i>
                        </span>
                        <div class="flex items-center space-x-1 text-brand text-xs">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i>
                        </div>
                    </div>
                    <p class="text-slate-600 text-sm italic leading-relaxed">
                        "We rented a 12 seater tempo traveller for our family trip to Agra and Jaipur. The vehicle was
                        in immaculate condition with superb pushback seats and strong air-conditioning. The driver,
                        Rajesh, was extremely polite and guided us nicely. High-end experience!"
                    </p>
                </div>
                <div class="flex items-center space-x-3 pt-6 mt-6 border-t border-slate-100">
                    <div
                        class="w-10 h-10 rounded-full bg-slate-950 text-white font-bold text-xs flex items-center justify-center border-2 border-brand/40 uppercase">
                        AS</div>
                    <div>
                        <h4
                            class="font-bold text-obsidian-950 text-sm font-display leading-none group-hover:text-brand-accent transition-colors duration-300">
                            Amit Singh</h4>
                        <p class="text-[10px] text-slate-400 font-bold uppercase mt-1.5">Delhi, India</p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div
                class="group bg-white rounded-[32px] border border-slate-100 p-8 shadow-sm hover:shadow-[0_20px_45px_rgba(15,23,42,0.06)] hover:border-brand/35 hover:-translate-y-2 transition-all duration-500 flex flex-col justify-between">
                <div class="space-y-5">
                    <div class="flex justify-between items-center">
                        <span
                            class="w-10 h-10 rounded-xl bg-brand/5 border border-brand/10 flex items-center justify-center text-brand text-sm group-hover:bg-brand/10 group-hover:border-brand/30 transition-all duration-300">
                            <i class="fa-solid fa-quote-left"></i>
                        </span>
                        <div class="flex items-center space-x-1 text-brand text-xs">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i>
                        </div>
                    </div>
                    <p class="text-slate-600 text-sm italic leading-relaxed">
                        "The Shimla-Manali tour planned by Explore Your Dream Trip was flawless. Right from hotel pickup
                        to the mountain drivers and premium property bookings, everything felt very executive. Highly
                        recommended for family travels!"
                    </p>
                </div>
                <div class="flex items-center space-x-3 pt-6 mt-6 border-t border-slate-100">
                    <div
                        class="w-10 h-10 rounded-full bg-slate-950 text-white font-bold text-xs flex items-center justify-center border-2 border-brand/40 uppercase">
                        PM</div>
                    <div>
                        <h4
                            class="font-bold text-obsidian-950 text-sm font-display leading-none group-hover:text-brand-accent transition-colors duration-300">
                            Priya Mehta</h4>
                        <p class="text-[10px] text-slate-400 font-bold uppercase mt-1.5">Mumbai, India</p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div
                class="group bg-white rounded-[32px] border border-slate-100 p-8 shadow-sm hover:shadow-[0_20px_45px_rgba(15,23,42,0.06)] hover:border-brand/35 hover:-translate-y-2 transition-all duration-500 flex flex-col justify-between">
                <div class="space-y-5">
                    <div class="flex justify-between items-center">
                        <span
                            class="w-10 h-10 rounded-xl bg-brand/5 border border-brand/10 flex items-center justify-center text-brand text-sm group-hover:bg-brand/10 group-hover:border-brand/30 transition-all duration-300">
                            <i class="fa-solid fa-quote-left"></i>
                        </span>
                        <div class="flex items-center space-x-1 text-brand text-xs">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i>
                        </div>
                    </div>
                    <p class="text-slate-600 text-sm italic leading-relaxed">
                        "Booked an Innova Crysta for outstation travel to Ayodhya. The car was clean, smells fresh and
                        driver knows the routes perfectly. Very professional support team available on phone even at
                        midnight. Will book again."
                    </p>
                </div>
                <div class="flex items-center space-x-3 pt-6 mt-6 border-t border-slate-100">
                    <div
                        class="w-10 h-10 rounded-full bg-slate-950 text-white font-bold text-xs flex items-center justify-center border-2 border-brand/40 uppercase">
                        RK</div>
                    <div>
                        <h4
                            class="font-bold text-obsidian-950 text-sm font-display leading-none group-hover:text-brand-accent transition-colors duration-300">
                            Rohit Kapoor</h4>
                        <p class="text-[10px] text-slate-400 font-bold uppercase mt-1.5">Gurugram, India</p>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div
                class="group bg-white rounded-[32px] border border-slate-100 p-8 shadow-sm hover:shadow-[0_20px_45px_rgba(15,23,42,0.06)] hover:border-brand/35 hover:-translate-y-2 transition-all duration-500 flex flex-col justify-between">
                <div class="space-y-5">
                    <div class="flex justify-between items-center">
                        <span
                            class="w-10 h-10 rounded-xl bg-brand/5 border border-brand/10 flex items-center justify-center text-brand text-sm group-hover:bg-brand/10 group-hover:border-brand/30 transition-all duration-300">
                            <i class="fa-solid fa-quote-left"></i>
                        </span>
                        <div class="flex items-center space-x-1 text-brand text-xs">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i>
                        </div>
                    </div>
                    <p class="text-slate-600 text-sm italic leading-relaxed">
                        "Outstanding coordination! We rented a Force Urbania for a corporate tour to Rishikesh. The
                        captain seating was exceptionally comfortable, and the client managers handled everything with
                        great detail. 5-star service all the way!"
                    </p>
                </div>
                <div class="flex items-center space-x-3 pt-6 mt-6 border-t border-slate-100">
                    <div
                        class="w-10 h-10 rounded-full bg-slate-950 text-white font-bold text-xs flex items-center justify-center border-2 border-brand/40 uppercase">
                        SS</div>
                    <div>
                        <h4
                            class="font-bold text-obsidian-950 text-sm font-display leading-none group-hover:text-brand-accent transition-colors duration-300">
                            Dr. Sandeep Sharma</h4>
                        <p class="text-[10px] text-slate-400 font-bold uppercase mt-1.5">Bengaluru, India</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- Beautiful Masonry Travel Gallery Section -->
<section id="gallery" class="py-20 bg-white">
    <div class="max-w-[1440px] mx-auto px-4">

        <!-- Header -->
        <div class="text-center max-w-2xl mx-auto mb-16 space-y-4">
            <span
                class="inline-flex items-center space-x-2 px-3 py-1.5 rounded-full bg-brand/10 border border-brand/15 text-brand-accent text-xs font-bold uppercase tracking-widest">
                <i class="fa-solid fa-images text-[9px]"></i>
                <span>Visions of India</span>
            </span>
            <h2 class="text-3xl md:text-5xl font-extrabold text-obsidian-950 font-display">Our Travel Gallery</h2>
            <p class="text-slate-600 text-sm md:text-base leading-relaxed">Visual glimpses from our guests' memorable
                journeys across gorgeous landscapes and monumental heritage sites.</p>
        </div>

        <!-- Gallery Grid (8 Items in Responsive Layout) -->
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-6">
            <?php
            $GALLERY = [
                ['title' => 'Rishikesh Ganga', 'image' => BASE_URL . 'assets/images/tours/rishikesh-hero.webp'],
                ['title' => 'Hawa Mahal Jaipur', 'image' => BASE_URL . 'assets/images/tours/jaipur-hero.webp'],
                ['title' => 'Golden Temple Amritsar', 'image' => BASE_URL . 'assets/images/tours/golden-temple-hero.webp'],
                ['title' => 'Vrindavan Holi Celebration', 'image' => BASE_URL . 'assets/images/tours/vrindavan-hero.webp'],
                ['title' => 'Taj Mahal Agra', 'image' => BASE_URL . 'assets/images/tours/agra-hero.webp'],
                ['title' => 'Himalayan Ridge Shimla', 'image' => BASE_URL . 'assets/images/tours/shimla-hero.webp'],
                ['title' => 'White Water Rafting Rishikesh', 'image' => BASE_URL . 'assets/images/tours/rishikesh-hero.webp'],
                ['title' => 'Amer Fort Jaipur', 'image' => BASE_URL . 'assets/images/tours/jaipur-hero.webp'],
            ];
            foreach ($GALLERY as $index => $item):
                ?>
                <button data-gallery-item data-index="<?php echo $index; ?>" data-src="<?php echo $item['image']; ?>"
                    data-title="<?php echo $item['title']; ?>"
                    class="group rounded-[28px] overflow-hidden aspect-[4/3] relative z-0 focus:outline-none shadow-sm hover:shadow-lg transition-all duration-300 text-left w-full">
                    <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['title']; ?>"
                        class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105">
                    <!-- Soft Dark Overlay Gradient on Hover -->
                    <div
                        class="absolute inset-0 bg-slate-950/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <span
                            class="text-white font-bold text-xs uppercase tracking-wider bg-obsidian-950/80 backdrop-blur-md border border-white/10 px-4 py-2.5 rounded-full flex items-center space-x-2 transform translate-y-2 group-hover:translate-y-0 transition-all duration-300 shadow-md">
                            <i class="fa-solid fa-magnifying-glass-plus text-brand text-xs"></i>
                            <span>View Larger</span>
                        </span>
                    </div>
                </button>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<!-- Premium Lightbox Modal -->
<div id="gallery-lightbox"
    class="fixed inset-0 bg-slate-950/95 backdrop-blur-md z-[200] hidden flex flex-col justify-center items-center opacity-0 transition-opacity duration-300"
    role="dialog" aria-modal="true">
    <!-- Close Button -->
    <button id="lightbox-close"
        class="absolute top-6 right-6 w-12 h-12 bg-white/5 border border-white/10 hover:border-brand/40 text-white hover:text-brand rounded-full flex items-center justify-center text-xl transition-all focus:outline-none z-[210]"
        aria-label="Close Gallery">
        <i class="fa-solid fa-xmark"></i>
    </button>

    <!-- Main Image & Container -->
    <div class="relative max-w-5xl max-h-[70vh] w-full px-12 md:px-16 flex items-center justify-center">
        <!-- Prev Button -->
        <button id="lightbox-prev"
            class="absolute left-4 md:left-6 w-12 h-12 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-white hover:bg-brand hover:text-obsidian-950 transition-all focus:outline-none z-[210]"
            aria-label="Previous Image">
            <i class="fa-solid fa-chevron-left text-base"></i>
        </button>

        <!-- Slide Image -->
        <img id="lightbox-img" src="" alt="Gallery Image"
            class="max-w-full max-h-[70vh] object-contain rounded-2xl border border-white/5 shadow-2xl transition-all duration-300">

        <!-- Next Button -->
        <button id="lightbox-next"
            class="absolute right-4 md:right-6 w-12 h-12 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-white hover:bg-brand hover:text-obsidian-950 transition-all focus:outline-none z-[210]"
            aria-label="Next Image">
            <i class="fa-solid fa-chevron-right text-base"></i>
        </button>
    </div>

    <!-- Image Caption / Title -->
    <div class="mt-8 text-center px-6">
        <h4 id="lightbox-caption"
            class="text-white font-bold font-display text-lg md:text-xl tracking-wide leading-tight"></h4>
        <p id="lightbox-counter" class="text-slate-400 text-xs font-semibold uppercase tracking-wider mt-1.5"></p>
    </div>
</div>

<!-- Frequently Asked Questions (FAQ) Section -->
<section class="py-20 bg-slate-50 relative overflow-hidden">
    <!-- Subtle Background Ambient Glow -->
    <div
        class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-brand/5 rounded-full blur-[100px] pointer-events-none">
    </div>

    <div class="max-w-4xl mx-auto px-4 relative z-10">

        <!-- Header -->
        <div class="text-center mb-16 space-y-4">
            <span
                class="inline-flex items-center space-x-2 px-3 py-1.5 rounded-full bg-brand/10 border border-brand/15 text-brand-accent text-xs font-bold uppercase tracking-widest">
                <i class="fa-solid fa-star text-[9px]"></i>
                <span>Got Questions?</span>
            </span>
            <h2 class="text-3xl md:text-5xl font-extrabold text-obsidian-950 leading-tight font-display">
                Frequently Asked Questions
            </h2>
            <p class="text-slate-600 text-sm md:text-base leading-relaxed">Quick answers to common questions about
                bookings, rentals, pricing guidelines, and custom itinerary options.</p>
        </div>

        <!-- FAQ List -->
        <div class="space-y-5">

            <!-- FAQ Item 1 -->
            <div
                class="faq-item group bg-white border border-slate-100 rounded-[28px] overflow-hidden shadow-sm hover:shadow-md hover:border-brand/20 transition-all duration-300">
                <button
                    class="faq-btn w-full px-7 py-6 flex justify-between items-center text-left focus:outline-none gap-4">
                    <span
                        class="font-bold text-obsidian-950 font-display text-base md:text-lg transition-colors duration-300 group-hover:text-brand-accent">How
                        do I book a tour or a tempo traveller?</span>
                    <span
                        class="faq-icon w-8 h-8 rounded-full bg-brand/10 border border-brand/25 text-brand-accent flex items-center justify-center text-xs transition-all duration-300 group-hover:bg-brand/20 group-hover:border-brand/50 flex-shrink-0">
                        <i class="fa-solid fa-chevron-down"></i>
                    </span>
                </button>
                <div class="accordion-content bg-slate-50/30 border-t border-slate-100/50">
                    <div
                        class="p-7 text-sm md:text-base text-slate-600 leading-relaxed border-l-2 border-brand ml-7 my-2">
                        You can easily book by filling out the online quick inquiry form below, sending a direct message
                        via WhatsApp, or calling our helpline at <?php echo CONTACT_PHONE; ?>. Our travel managers will
                        provide a customized quote and itinerary within 30 minutes.
                    </div>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div
                class="faq-item group bg-white border border-slate-100 rounded-[28px] overflow-hidden shadow-sm hover:shadow-md hover:border-brand/20 transition-all duration-300">
                <button
                    class="faq-btn w-full px-7 py-6 flex justify-between items-center text-left focus:outline-none gap-4">
                    <span
                        class="font-bold text-obsidian-950 font-display text-base md:text-lg transition-colors duration-300 group-hover:text-brand-accent">Are
                        the rates for Tempo Travellers and Car Rentals inclusive of toll taxes?</span>
                    <span
                        class="faq-icon w-8 h-8 rounded-full bg-brand/10 border border-brand/25 text-brand-accent flex items-center justify-center text-xs transition-all duration-300 group-hover:bg-brand/20 group-hover:border-brand/50 flex-shrink-0">
                        <i class="fa-solid fa-chevron-down"></i>
                    </span>
                </button>
                <div class="accordion-content bg-slate-50/30 border-t border-slate-100/50">
                    <div
                        class="p-7 text-sm md:text-base text-slate-600 leading-relaxed border-l-2 border-brand ml-7 my-2">
                        Our driver per-kilometer rates exclude state permits, highway toll taxes, parking fees, and
                        driver allowances. However, when we build custom tour packages for you, we can offer an
                        **all-inclusive fixed package price** that covers everything so you don't face unexpected
                        charges.
                    </div>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div
                class="faq-item group bg-white border border-slate-100 rounded-[28px] overflow-hidden shadow-sm hover:shadow-md hover:border-brand/20 transition-all duration-300">
                <button
                    class="faq-btn w-full px-7 py-6 flex justify-between items-center text-left focus:outline-none gap-4">
                    <span
                        class="font-bold text-obsidian-950 font-display text-base md:text-lg transition-colors duration-300 group-hover:text-brand-accent">Can
                        I customize the destinations and duration of the tour packages?</span>
                    <span
                        class="faq-icon w-8 h-8 rounded-full bg-brand/10 border border-brand/25 text-brand-accent flex items-center justify-center text-xs transition-all duration-300 group-hover:bg-brand/20 group-hover:border-brand/50 flex-shrink-0">
                        <i class="fa-solid fa-chevron-down"></i>
                    </span>
                </button>
                <div class="accordion-content bg-slate-50/30 border-t border-slate-100/50">
                    <div
                        class="p-7 text-sm md:text-base text-slate-600 leading-relaxed border-l-2 border-brand ml-7 my-2">
                        Absolutely! 100% customization is our primary feature. You can modify any preset itinerary (like
                        Agra, Rishikesh, or Shimla), extend or shorten the stay, add specific attractions, and choose
                        your preferred hotels and vehicles.
                    </div>
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div
                class="faq-item group bg-white border border-slate-100 rounded-[28px] overflow-hidden shadow-sm hover:shadow-md hover:border-brand/20 transition-all duration-300">
                <button
                    class="faq-btn w-full px-7 py-6 flex justify-between items-center text-left focus:outline-none gap-4">
                    <span
                        class="font-bold text-obsidian-950 font-display text-base md:text-lg transition-colors duration-300 group-hover:text-brand-accent">What
                        safety measures are taken during journeys?</span>
                    <span
                        class="faq-icon w-8 h-8 rounded-full bg-brand/10 border border-brand/25 text-brand-accent flex items-center justify-center text-xs transition-all duration-300 group-hover:bg-brand/20 group-hover:border-brand/50 flex-shrink-0">
                        <i class="fa-solid fa-chevron-down"></i>
                    </span>
                </button>
                <div class="accordion-content bg-slate-50/30 border-t border-slate-100/50">
                    <div
                        class="p-7 text-sm md:text-base text-slate-600 leading-relaxed border-l-2 border-brand ml-7 my-2">
                        All our tempo travellers and cars undergo regular security and mechanical checks before
                        departure. Our vehicles are equipped with first-aid kits, fire extinguishers, GPS tracking, and
                        fully functioning seat belts. All drivers are verified professionals with years of tourist
                        driving experience.
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<?php require_once 'includes/cta.php'; ?>

<?php
require_once 'includes/footer.php';
?>