<?php
$page_title = "Home - Premium Luxury Travel & Rentals";
$page_desc = "Book premium luxury tours, tempo travellers, and premium cars in India. Customized packages for Agra, Shimla, Manali, Rishikesh, Ayodhya, and more.";
require_once 'includes/config.php';
require_once 'includes/header.php';
?>

<!-- Premium Hero Section with Glassmorphism Search Panel -->
<section class="relative min-h-[90vh] md:min-h-screen flex items-center justify-center bg-obsidian-950 overflow-hidden pt-20">
    <!-- Hero Background Image with Premium Dark Overlay -->
    <div class="absolute inset-0 z-0">
        <img src="<?php echo BASE_URL; ?>assets/images/hero.png" alt="Explore Your Dream Trip Hero" class="w-full h-full object-cover object-center opacity-40">
        <div class="absolute inset-0 bg-gradient-to-t from-obsidian-950 via-obsidian-950/60 to-transparent"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-obsidian-950/80 via-transparent to-obsidian-950/20"></div>
    </div>

    <!-- Animated Glow Circles in Background -->
    <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-brand/10 rounded-full blur-3xl animate-pulse pointer-events-none"></div>
    <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-brand-dark/10 rounded-full blur-3xl animate-pulse pointer-events-none" style="animation-delay: 2s;"></div>

    <!-- Hero Content & Search Widget -->
    <div class="max-w-[1440px] mx-auto px-4 z-10 w-full pt-12 pb-16 relative">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Left Side: Copy and Headline -->
            <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                <span class="inline-flex items-center space-x-2 px-3 py-1.5 rounded-full bg-brand/10 border border-brand/20 text-brand text-xs font-bold uppercase tracking-wider animate-float">
                    <i class="fa-solid fa-star text-xs"></i>
                    <span>India's Most Trusted Luxury Tour Operator</span>
                </span>
                <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold text-white leading-tight">
                    Crafting Your <br>
                    <span class="text-gradient-gold">Ultimate Dream Trip</span>
                </h1>
                <p class="text-slate-300 text-base md:text-lg max-w-xl mx-auto lg:mx-0 leading-relaxed">
                    Experience luxury travel like never before. From custom private tours of heritage wonders to executive tempo travellers and premium cars, we redefine Indian hospitality.
                </p>
                <div class="flex flex-wrap justify-center lg:justify-start gap-5 pt-6">
                    <a href="#destinations" class="group inline-flex items-center justify-center px-8 py-4 bg-gradient-gold text-obsidian-950 text-xs uppercase tracking-widest font-extrabold rounded-full hover:shadow-xl hover:shadow-brand/20 transition-all duration-300 hover:-translate-y-0.5 active:translate-y-0 pulse-gold-btn">
                        <span>Explore Packages</span>
                        <i class="fa-solid fa-arrow-right ml-2.5 text-xs transition-transform duration-300 group-hover:translate-x-1.5"></i>
                    </a>
                    <a href="#fleet" class="group inline-flex items-center justify-center px-8 py-4 bg-white/5 hover:bg-white/10 text-white/90 hover:text-white border border-white/10 hover:border-white/20 rounded-full text-xs uppercase tracking-widest font-bold transition-all duration-300 hover:-translate-y-0.5 active:translate-y-0">
                        <span>View Fleet Rental</span>
                        <i class="fa-solid fa-car-side ml-2.5 text-brand/80 transition-transform duration-300 group-hover:scale-110"></i>
                    </a>
                </div>
            </div>

            <!-- Right Side: Luxury Quick Booking Widget -->
            <div class="lg:col-span-5 w-full">
                <div class="bg-slate-950/75 backdrop-blur-xl glow-gold rounded-[32px] p-6 md:p-8 border border-white/10 shadow-2xl shadow-black/60 relative">
                    <h3 class="text-xl md:text-2xl font-bold text-white mb-1.5 font-display">Book Your Luxury Escape</h3>
                    <p class="text-xs text-slate-400 mb-6 uppercase tracking-wider font-semibold">Let us know your travel plans for a free custom quote</p>
                    
                    <form action="#inquiry" method="GET" class="space-y-5">
                        <!-- Destination Input -->
                        <div>
                            <label class="block text-[10px] font-bold text-brand uppercase tracking-widest mb-2">Where To?</label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-slate-400 pointer-events-none">
                                    <i class="fa-solid fa-location-dot text-brand/80"></i>
                                </span>
                                <select name="destination" class="w-full bg-slate-900/40 hover:bg-slate-900/60 focus:bg-slate-950/80 border border-white/10 focus:border-brand text-white rounded-xl py-3.5 pl-10 pr-10 focus:outline-none transition-all duration-300 appearance-none font-medium text-sm focus:shadow-[0_0_15px_rgba(240,210,90,0.15)]">
                                    <option value="" class="bg-slate-950 text-white/80">Select Destination</option>
                                    <?php foreach ($TOURS as $key => $tour): ?>
                                        <option value="<?php echo $key; ?>" class="bg-slate-950 text-white"><?php echo $tour['title']; ?></option>
                                    <?php endforeach; ?>
                                    <option value="other" class="bg-slate-950 text-white">Custom Tour Plan</option>
                                </select>
                                <span class="absolute inset-y-0 right-0 pr-3.5 flex items-center text-brand pointer-events-none">
                                    <i class="fa-solid fa-chevron-down text-xs"></i>
                                </span>
                            </div>
                        </div>

                        <!-- Date & Traveler Row -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div>
                                <label class="block text-[10px] font-bold text-brand uppercase tracking-widest mb-2">Departure Date</label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-slate-400 pointer-events-none">
                                        <i class="fa-solid fa-calendar-days text-brand/80"></i>
                                    </span>
                                    <input type="date" name="travel_date" class="w-full bg-slate-900/40 hover:bg-slate-900/60 focus:bg-slate-950/80 border border-white/10 focus:border-brand text-white rounded-xl py-3 pl-10 pr-4 focus:outline-none transition-all duration-300 text-sm focus:shadow-[0_0_15px_rgba(240,210,90,0.15)]">
                                </div>
                            </div>
                            <div>
                                <label class="block text-[10px] font-bold text-brand uppercase tracking-widest mb-2">Service Type</label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-slate-400 pointer-events-none">
                                        <i class="fa-solid fa-car-side text-brand/80"></i>
                                    </span>
                                    <select name="service" class="w-full bg-slate-900/40 hover:bg-slate-900/60 focus:bg-slate-950/80 border border-white/10 focus:border-brand text-white rounded-xl py-3.5 pl-10 pr-10 focus:outline-none transition-all duration-300 appearance-none text-sm font-medium focus:shadow-[0_0_15px_rgba(240,210,90,0.15)]">
                                        <option value="tour" class="bg-slate-950 text-white">All-Inclusive Tour</option>
                                        <option value="tempo" class="bg-slate-950 text-white">Tempo Traveller Hire</option>
                                        <option value="car" class="bg-slate-950 text-white">Premium Car Hire</option>
                                    </select>
                                    <span class="absolute inset-y-0 right-0 pr-3.5 flex items-center text-brand pointer-events-none">
                                        <i class="fa-solid fa-chevron-down text-xs"></i>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Phone Number -->
                        <div>
                            <label class="block text-[10px] font-bold text-brand uppercase tracking-widest mb-2">Mobile Number</label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-slate-400 pointer-events-none">
                                    <i class="fa-solid fa-phone text-brand/80"></i>
                                </span>
                                <input type="tel" placeholder="Enter your contact number" required class="w-full bg-slate-900/40 hover:bg-slate-900/60 focus:bg-slate-950/80 border border-white/10 focus:border-brand text-white rounded-xl py-3.5 pl-10 pr-4 focus:outline-none transition-all duration-300 text-sm focus:shadow-[0_0_15px_rgba(240,210,90,0.15)]">
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="w-full py-4 mt-3 bg-gradient-gold hover:bg-gradient-gold text-obsidian-950 text-xs uppercase tracking-widest font-extrabold rounded-xl shadow-lg hover:shadow-brand/25 transition-all duration-300 hover:-translate-y-0.5 active:translate-y-0 pulse-gold-btn">
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
            <span class="text-brand-accent font-bold text-xs uppercase tracking-widest bg-brand/10 px-3 py-1.5 rounded-full border border-brand/15">Incredible India</span>
            <h2 class="text-3xl md:text-5xl font-extrabold text-obsidian-950 leading-tight">Trending Destinations</h2>
            <p class="text-slate-600">Discover some of the most sought-after scenic and spiritual places across India, all planned in luxurious comfort.</p>
        </div>

        <!-- Destinations Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php 
            $count = 0;
            foreach ($TOURS as $key => $tour): 
                if ($count >= 6) break; // Display first 6 on homepage
                $count++;
            ?>
            <div class="group relative rounded-3xl overflow-hidden shadow-lg bg-white border border-slate-100 flex flex-col justify-between transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                <!-- Image Container with Zoom & Badge -->
                <div class="relative overflow-hidden aspect-[4/3] z-0">
                    <img src="<?php echo $tour['image']; ?>" alt="<?php echo $tour['title']; ?>" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-80"></div>
                    
                    <!-- Rating Badge -->
                    <div class="absolute top-4 right-4 bg-slate-950/80 backdrop-blur-md border border-white/10 px-3 py-1 rounded-full text-white text-xs font-semibold flex items-center space-x-1">
                        <i class="fa-solid fa-star text-brand"></i>
                        <span><?php echo $tour['rating']; ?></span>
                    </div>

                    <!-- Destination Short Title Overlay -->
                    <div class="absolute bottom-4 left-6">
                        <span class="text-brand-light text-xs font-bold uppercase tracking-wider"><?php echo $tour['subtitle']; ?></span>
                        <h3 class="text-white text-xl font-bold font-display mt-0.5"><?php echo $tour['title']; ?></h3>
                    </div>
                </div>

                <!-- Info Body -->
                <div class="p-6 space-y-4 flex-grow">
                    <div class="flex justify-between items-center text-sm text-slate-500">
                        <span><i class="fa-regular fa-clock text-brand mr-2"></i><?php echo $tour['duration']; ?></span>
                        <span><i class="fa-regular fa-user text-brand mr-2"></i>Group & Private</span>
                    </div>
                    <div class="pt-4 border-t border-slate-100 flex justify-between items-center">
                        <div>
                            <p class="text-xs text-slate-400">Starting From</p>
                            <p class="text-lg font-extrabold text-obsidian-950"><?php echo $tour['price']; ?> <span class="text-xs text-slate-400 font-normal">/ person</span></p>
                        </div>
                        <a href="<?php echo BASE_URL . $tour['link']; ?>" class="px-5 py-2 bg-slate-900 hover:bg-brand hover:text-obsidian-950 text-white font-bold rounded-xl transition-all duration-300 text-sm">
                            View Tour
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<!-- Luxury Tempo Traveller Fleet Section -->
<section id="tempo-travellers" class="py-20 bg-gradient-dark text-white relative overflow-hidden">
    <!-- Glow Effect in Background -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-brand/5 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-[1440px] mx-auto px-4 relative z-10">
        
        <!-- Header -->
        <div class="text-center max-w-2xl mx-auto mb-16 space-y-4">
            <span class="text-brand font-bold text-xs uppercase tracking-widest bg-white/5 px-3 py-1.5 rounded-full border border-white/10">Group Travel in Style</span>
            <h2 class="text-3xl md:text-5xl font-extrabold text-white leading-tight">Luxury Tempo Travellers</h2>
            <p class="text-slate-400">Travel together without compromising on elegance. Our executive tempo travellers feature premium pushback seats, individual climate vents, and modern styling.</p>
        </div>

        <!-- Fleet Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <?php foreach ($TEMPO_TRAVELLERS as $key => $fleet): ?>
            <div class="glass-card rounded-3xl overflow-hidden flex flex-col justify-between border border-white/5 hover:border-brand/20 transition-all duration-300 hover:shadow-xl hover:shadow-brand/5">
                <!-- Vehicle Image -->
                <div class="relative overflow-hidden aspect-[16/10]">
                    <img src="<?php echo $fleet['image']; ?>" alt="<?php echo $fleet['title']; ?>" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-obsidian-950 via-transparent to-transparent"></div>
                </div>

                <!-- Info -->
                <div class="p-6 md:p-8 space-y-6 flex-grow">
                    <div>
                        <h3 class="text-xl font-bold font-display text-white mb-2"><?php echo $fleet['title']; ?></h3>
                        <p class="text-xs text-brand bg-brand/10 border border-brand/20 px-2.5 py-1 rounded inline-block font-semibold">
                            <i class="fa-solid fa-users mr-1.5"></i> <?php echo $fleet['capacity']; ?>
                        </p>
                    </div>

                    <!-- Amenities list -->
                    <ul class="space-y-2 text-sm text-slate-300">
                        <?php foreach (array_slice($fleet['features'], 0, 4) as $feature): ?>
                        <li class="flex items-center">
                            <i class="fa-solid fa-circle-check text-brand text-xs mr-2"></i>
                            <?php echo $feature; ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>

                    <div class="pt-6 border-t border-white/10 flex justify-between items-center">
                        <div>
                            <p class="text-xs text-slate-400">Rate starts at</p>
                            <p class="text-lg font-bold text-brand"><?php echo $fleet['price']; ?></p>
                        </div>
                        <a href="<?php echo BASE_URL; ?>tempo-traveller.php" class="px-5 py-2.5 bg-gradient-gold text-obsidian-950 font-bold rounded-xl hover:shadow-lg transition-all duration-300 text-sm">
                            Rent Now
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<!-- Executive Car Rental Section -->
<section id="fleet" class="py-20 bg-slate-50">
    <div class="max-w-[1440px] mx-auto px-4">
        
        <!-- Header -->
        <div class="text-center max-w-2xl mx-auto mb-16 space-y-4">
            <span class="text-brand-accent font-bold text-xs uppercase tracking-widest bg-brand/10 px-3 py-1.5 rounded-full border border-brand/15">Luxury Vehicles</span>
            <h2 class="text-3xl md:text-5xl font-extrabold text-obsidian-950 leading-tight">Premium Car Rentals</h2>
            <p class="text-slate-600">Choose from our premium class sedans and SUVs for a smooth and comfortable voyage. Perfect for local corporate transfers, outstation packages, and VIP family trips.</p>
        </div>

        <!-- Cars list -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <?php foreach ($CARS as $key => $car): ?>
            <div class="group bg-white rounded-3xl border border-slate-100 overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col justify-between">
                <!-- Vehicle Image -->
                <div class="relative overflow-hidden aspect-[4/3] bg-slate-100">
                    <img src="<?php echo $car['image']; ?>" alt="<?php echo $car['title']; ?>" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                </div>

                <!-- Info -->
                <div class="p-5 flex-grow space-y-4 flex flex-col justify-between">
                    <div>
                        <h3 class="text-lg font-bold text-obsidian-950 font-display line-clamp-1"><?php echo $car['title']; ?></h3>
                        <p class="text-xs text-slate-500 mt-1 flex items-center">
                            <i class="fa-solid fa-users mr-1"></i> Max Capacity: <?php echo $car['capacity']; ?>
                        </p>
                    </div>

                    <!-- Short amenities -->
                    <div class="flex flex-wrap gap-1.5">
                        <?php foreach (array_slice($car['features'], 0, 2) as $f): ?>
                        <span class="bg-slate-100 text-slate-600 text-[10px] px-2 py-0.5 rounded-full font-medium"><?php echo $f; ?></span>
                        <?php endforeach; ?>
                    </div>

                    <div class="pt-4 border-t border-slate-100 flex justify-between items-center">
                        <div>
                            <p class="text-[10px] text-slate-400">Per km rate</p>
                            <p class="text-base font-bold text-slate-900"><?php echo $car['price']; ?></p>
                        </div>
                        <a href="<?php echo BASE_URL; ?>car-rental.php" class="p-2.5 bg-slate-900 hover:bg-brand hover:text-obsidian-950 text-white rounded-lg transition-colors">
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<!-- Why Choose Us & Trust Badges Section -->
<section class="py-20 bg-obsidian-950 text-white relative border-t border-white/5">
    <div class="max-w-[1440px] mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Left: Description and Image (Taj Mahal/Scenic) -->
            <div class="lg:col-span-5 space-y-6">
                <span class="text-brand font-bold text-xs uppercase tracking-widest bg-white/5 px-3 py-1.5 rounded-full border border-white/10">Unmatched Quality</span>
                <h2 class="text-3xl md:text-5xl font-extrabold font-display leading-tight">Why Choose <br><span class="text-gradient-gold">Explore Your Dream Trip?</span></h2>
                <p class="text-slate-400 text-base leading-relaxed">
                    With over a decade of excellence in the Indian travel space, we create memories that linger forever. Our dedication to safety, local immersion, and premium comfort sets us apart from ordinary operators.
                </p>
                <div class="p-6 glass-card rounded-2xl border border-white/5 flex items-start space-x-4">
                    <div class="text-brand text-3xl mt-1">
                        <i class="fa-solid fa-headset"></i>
                    </div>
                    <div>
                        <h4 class="text-white font-bold text-lg mb-1">24/7 Guest Assistance</h4>
                        <p class="text-slate-400 text-sm">We provide continuous concierge support for flight/train changes, itinerary adjustments, and queries.</p>
                    </div>
                </div>
            </div>

            <!-- Right: Feature Cards Grid -->
            <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-2 gap-6">
                
                <!-- Card 1: Govt Approved -->
                <div class="p-8 bg-white/5 rounded-3xl border border-white/5 hover:border-brand/10 transition-colors space-y-4">
                    <div class="w-12 h-12 bg-brand/15 text-brand rounded-2xl flex items-center justify-center text-xl">
                        <i class="fa-solid fa-shield-circle-check"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white">Govt. Certified Operator</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">We are fully registered and approved by the Ministry of Tourism, ensuring 100% safety and standards.</p>
                </div>

                <!-- Card 2: Custom Itineraries -->
                <div class="p-8 bg-white/5 rounded-3xl border border-white/5 hover:border-brand/10 transition-colors space-y-4">
                    <div class="w-12 h-12 bg-brand/15 text-brand rounded-2xl flex items-center justify-center text-xl">
                        <i class="fa-solid fa-sliders"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white">Fully Customized Tours</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">Tailor your trip at your own pace. Add destinations, customize hotels, and pick your choice of cars.</p>
                </div>

                <!-- Card 3: Safe Payments -->
                <div class="p-8 bg-white/5 rounded-3xl border border-white/5 hover:border-brand/10 transition-colors space-y-4">
                    <div class="w-12 h-12 bg-brand/15 text-brand rounded-2xl flex items-center justify-center text-xl">
                        <i class="fa-solid fa-credit-card"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white">Secure Flexible Booking</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">Secure your booking with a small token amount and pay the balance during the tour safely.</p>
                </div>

                <!-- Card 4: Veteran Drivers -->
                <div class="p-8 bg-white/5 rounded-3xl border border-white/5 hover:border-brand/10 transition-colors space-y-4">
                    <div class="w-12 h-12 bg-brand/15 text-brand rounded-2xl flex items-center justify-center text-xl">
                        <i class="fa-solid fa-user-tie"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white">Professional Drivers</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">Our drivers are background verified, highly experienced in tourist routes, and strictly professional.</p>
                </div>

            </div>

        </div>
    </div>
</section>

<!-- Customer Testimonials Section -->
<section class="py-20 bg-slate-50 overflow-hidden">
    <div class="max-w-4xl mx-auto px-4 relative">
        
        <!-- Header -->
        <div class="text-center mb-12 space-y-3">
            <span class="text-brand-accent font-bold text-xs uppercase tracking-widest bg-brand/10 px-3 py-1.5 rounded-full border border-brand/15">Guest Feedback</span>
            <h2 class="text-3xl md:text-5xl font-extrabold text-obsidian-950 font-display">What Our Guests Say</h2>
        </div>

        <!-- Testimonial Slider Container -->
        <div class="relative bg-white border border-slate-100 rounded-3xl p-8 md:p-12 shadow-sm glow-gold/5 min-h-[250px]">
            <!-- Quote Icon -->
            <div class="absolute -top-6 left-12 w-12 h-12 bg-brand rounded-2xl flex items-center justify-center text-obsidian-950 text-xl shadow-lg shadow-brand/10">
                <i class="fa-solid fa-quote-left"></i>
            </div>

            <!-- Slide 1 -->
            <div class="testimonial-slide space-y-6 transition-opacity duration-500">
                <div class="flex items-center space-x-1 text-brand text-sm">
                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                </div>
                <p class="text-slate-600 text-base md:text-lg italic leading-relaxed">
                    "We rented a 12 seater tempo traveller for our family trip to Agra and Jaipur. The vehicle was in immaculate condition with superb pushback seats and strong air-conditioning. The driver, Rajesh, was extremely polite and guided us nicely. High-end experience!"
                </p>
                <div class="flex items-center space-x-3 pt-2">
                    <div class="w-10 h-10 rounded-full bg-slate-200 flex items-center justify-center text-obsidian-950 font-bold text-sm">AS</div>
                    <div>
                        <h4 class="font-bold text-obsidian-950 text-sm">Amit Singh</h4>
                        <p class="text-xs text-slate-400">Delhi, India</p>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="testimonial-slide space-y-6 transition-opacity duration-500 hidden">
                <div class="flex items-center space-x-1 text-brand text-sm">
                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                </div>
                <p class="text-slate-600 text-base md:text-lg italic leading-relaxed">
                    "The Shimla-Manali tour planned by Explore Your Dream Trip was flawless. Right from hotel pickup to the mountain drivers and premium property bookings, everything felt very executive. Highly recommended for family travels!"
                </p>
                <div class="flex items-center space-x-3 pt-2">
                    <div class="w-10 h-10 rounded-full bg-slate-200 flex items-center justify-center text-obsidian-950 font-bold text-sm">PM</div>
                    <div>
                        <h4 class="font-bold text-obsidian-950 text-sm">Priya Mehta</h4>
                        <p class="text-xs text-slate-400">Mumbai, India</p>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="testimonial-slide space-y-6 transition-opacity duration-500 hidden">
                <div class="flex items-center space-x-1 text-brand text-sm">
                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                </div>
                <p class="text-slate-600 text-base md:text-lg italic leading-relaxed">
                    "Booked an Innova Crysta for outstation travel to Ayodhya. The car was clean, smells fresh and driver knows the routes perfectly. Very professional support team available on phone even at midnight. Will book again."
                </p>
                <div class="flex items-center space-x-3 pt-2">
                    <div class="w-10 h-10 rounded-full bg-slate-200 flex items-center justify-center text-obsidian-950 font-bold text-sm">RK</div>
                    <div>
                        <h4 class="font-bold text-obsidian-950 text-sm">Rohit Kapoor</h4>
                        <p class="text-xs text-slate-400">Gurugram, India</p>
                    </div>
                </div>
            </div>

            <!-- Dots Navigation -->
            <div class="flex justify-center space-x-2 mt-8">
                <button class="testimonial-dot w-2.5 h-2.5 rounded-full bg-brand focus:outline-none" aria-label="Slide 1"></button>
                <button class="testimonial-dot w-2.5 h-2.5 rounded-full bg-gray-400 focus:outline-none" aria-label="Slide 2"></button>
                <button class="testimonial-dot w-2.5 h-2.5 rounded-full bg-gray-400 focus:outline-none" aria-label="Slide 3"></button>
            </div>
            
            <!-- Prev/Next Buttons (Desktop Only) -->
            <button id="testimonial-prev" class="absolute -left-6 top-1/2 -translate-y-1/2 w-12 h-12 bg-white border border-slate-100 shadow-lg rounded-full flex items-center justify-center hover:bg-brand hover:text-obsidian-950 text-slate-600 transition-colors hidden md:flex" aria-label="Previous testimonial">
                <i class="fa-solid fa-chevron-left"></i>
            </button>
            <button id="testimonial-next" class="absolute -right-6 top-1/2 -translate-y-1/2 w-12 h-12 bg-white border border-slate-100 shadow-lg rounded-full flex items-center justify-center hover:bg-brand hover:text-obsidian-950 text-slate-600 transition-colors hidden md:flex" aria-label="Next testimonial">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
        </div>

    </div>
</section>

<!-- Beautiful Masonry Travel Gallery Section -->
<section class="py-20 bg-white">
    <div class="max-w-[1440px] mx-auto px-4">
        
        <!-- Header -->
        <div class="text-center max-w-2xl mx-auto mb-16 space-y-4">
            <span class="text-brand-accent font-bold text-xs uppercase tracking-widest bg-brand/10 px-3 py-1.5 rounded-full border border-brand/15">Visions of India</span>
            <h2 class="text-3xl md:text-5xl font-extrabold text-obsidian-950 font-display">Our Travel Gallery</h2>
            <p class="text-slate-600">Visual glimpses from our guests' memorable journeys across gorgeous landscapes and monumental heritage sites.</p>
        </div>

        <!-- Gallery Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
            <div class="rounded-2xl overflow-hidden aspect-square relative group">
                <img src="https://images.unsplash.com/photo-1545630526-4ee6296a093b?auto=format&fit=crop&w=500&q=80" alt="Ganges Rishikesh" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                    <span class="text-white font-bold text-sm bg-obsidian-950/70 border border-white/10 px-4 py-2 rounded-full">Rishikesh Ganga</span>
                </div>
            </div>
            <div class="rounded-2xl overflow-hidden aspect-square relative group">
                <img src="https://images.unsplash.com/photo-1477584322813-4372685598e4?auto=format&fit=crop&w=500&q=80" alt="Jaipur Palace" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                    <span class="text-white font-bold text-sm bg-obsidian-950/70 border border-white/10 px-4 py-2 rounded-full">Hawa Mahal Jaipur</span>
                </div>
            </div>
            <div class="rounded-2xl overflow-hidden aspect-square relative group">
                <img src="https://images.unsplash.com/photo-1588598130782-690a298573ec?auto=format&fit=crop&w=500&q=80" alt="Golden Temple Amritsar" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                    <span class="text-white font-bold text-sm bg-obsidian-950/70 border border-white/10 px-4 py-2 rounded-full">Amritsar Shrine</span>
                </div>
            </div>
            <div class="rounded-2xl overflow-hidden aspect-square relative group">
                <img src="https://images.unsplash.com/photo-1627894483216-2138af692e32?auto=format&fit=crop&w=500&q=80" alt="Vrindavan Temple" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                    <span class="text-white font-bold text-sm bg-obsidian-950/70 border border-white/10 px-4 py-2 rounded-full">Vrindavan Holi</span>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Frequently Asked Questions (FAQ) Section -->
<section class="py-20 bg-slate-50">
    <div class="max-w-4xl mx-auto px-4">
        
        <!-- Header -->
        <div class="text-center mb-16 space-y-4">
            <span class="text-brand-accent font-bold text-xs uppercase tracking-widest bg-brand/10 px-3 py-1.5 rounded-full border border-brand/15">Got Questions?</span>
            <h2 class="text-3xl md:text-5xl font-extrabold text-obsidian-950 font-display">FAQ Panel</h2>
            <p class="text-slate-600">Quick answers to common questions about bookings, rentals, pricing guidelines, and custom itinerary options.</p>
        </div>

        <!-- FAQ List -->
        <div class="space-y-4">
            
            <!-- FAQ Item 1 -->
            <div class="faq-item bg-white border border-slate-100 rounded-2xl overflow-hidden shadow-sm">
                <button class="faq-btn w-full px-6 py-5 flex justify-between items-center text-left focus:outline-none">
                    <span class="font-bold text-obsidian-950 md:text-lg">How do I book a tour or a tempo traveller?</span>
                    <span class="faq-icon text-brand transition-transform duration-300"><i class="fa-solid fa-chevron-down"></i></span>
                </button>
                <div class="accordion-content bg-slate-50/50">
                    <p class="p-6 text-sm md:text-base text-slate-600 leading-relaxed">
                        You can easily book by filling out the online quick inquiry form below, sending a direct message via WhatsApp, or calling our helpline at <?php echo CONTACT_PHONE; ?>. Our travel managers will provide a customized quote and itinerary within 30 minutes.
                    </p>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="faq-item bg-white border border-slate-100 rounded-2xl overflow-hidden shadow-sm">
                <button class="faq-btn w-full px-6 py-5 flex justify-between items-center text-left focus:outline-none">
                    <span class="font-bold text-obsidian-950 md:text-lg">Are the rates for Tempo Travellers and Car Rentals inclusive of toll taxes?</span>
                    <span class="faq-icon text-brand transition-transform duration-300"><i class="fa-solid fa-chevron-down"></i></span>
                </button>
                <div class="accordion-content bg-slate-50/50">
                    <p class="p-6 text-sm md:text-base text-slate-600 leading-relaxed">
                        Our baseline per-kilometer rates exclude state permits, highway toll taxes, parking fees, and driver allowances. However, when we build custom tour packages for you, we can offer an **all-inclusive fixed package price** that covers everything so you don't face unexpected charges.
                    </p>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="faq-item bg-white border border-slate-100 rounded-2xl overflow-hidden shadow-sm">
                <button class="faq-btn w-full px-6 py-5 flex justify-between items-center text-left focus:outline-none">
                    <span class="font-bold text-obsidian-950 md:text-lg">Can I customize the destinations and duration of the tour packages?</span>
                    <span class="faq-icon text-brand transition-transform duration-300"><i class="fa-solid fa-chevron-down"></i></span>
                </button>
                <div class="accordion-content bg-slate-50/50">
                    <p class="p-6 text-sm md:text-base text-slate-600 leading-relaxed">
                        Absolutely! 100% customization is our primary feature. You can modify any preset itinerary (like Agra, Rishikesh, or Shimla), extend or shorten the stay, add specific attractions, and choose your preferred hotels and vehicles.
                    </p>
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="faq-item bg-white border border-slate-100 rounded-2xl overflow-hidden shadow-sm">
                <button class="faq-btn w-full px-6 py-5 flex justify-between items-center text-left focus:outline-none">
                    <span class="font-bold text-obsidian-950 md:text-lg">What safety measures are taken during journeys?</span>
                    <span class="faq-icon text-brand transition-transform duration-300"><i class="fa-solid fa-chevron-down"></i></span>
                </button>
                <div class="accordion-content bg-slate-50/50">
                    <p class="p-6 text-sm md:text-base text-slate-600 leading-relaxed">
                        All our tempo travellers and cars undergo regular security and mechanical checks before departure. Our vehicles are equipped with first-aid kits, fire extinguishers, GPS tracking, and fully functioning seat belts. All drivers are verified professionals with years of tourist driving experience.
                    </p>
                </div>
            </div>

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
