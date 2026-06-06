<?php
$page_title = "Contact Us – Plan Your Premium Trip & Rental Services";
$page_desc = "Get in touch with Explore Your Dream Trip. Speak with our experts to book customized tour packages, luxury cars, or tempo travellers. Safe bookings, WhatsApp chat support, and details.";
require_once 'includes/config.php';

// Custom breadcrumb for this page
$breadcrumb_custom = [
    ['title' => 'Contact Us', 'url' => '', 'active' => true],
];

require_once 'includes/header.php';
?>

<!-- Structured Data (JSON-LD) - Organization ContactPoint Schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "<?php echo SITE_NAME; ?>",
  "url": "<?php echo BASE_URL; ?>",
  "logo": "<?php echo BASE_URL; ?>assets/images/brand/header-logo.png",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "<?php echo CONTACT_PHONE; ?>",
    "contactType": "customer service",
    "email": "<?php echo CONTACT_EMAIL; ?>",
    "availableLanguage": ["English", "Hindi"]
  }
}
</script>

<!-- BreadcrumbList JSON-LD -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Home",
      "item": "<?php echo BASE_URL; ?>"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Contact Us",
      "item": "<?php echo BASE_URL; ?>contact.php"
    }
  ]
}
</script>

<!-- ═══════════════════════════════════════════════════════════════════════
     SECTION 1: PREMIUM HERO BANNER
     ═══════════════════════════════════════════════════════════════════════ -->
<section class="relative min-h-[50vh] md:min-h-[55vh] flex items-end bg-obsidian-950 overflow-hidden pt-36 pb-16 md:pb-20">
    <!-- Background Image with vignette and gradient overlays -->
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1534536281715-e28d76689b4d?auto=format&fit=crop&q=80&w=1200" alt="Contact Explore Your Dream Trip"
            class="w-full h-full object-cover object-center opacity-20 scale-105 transition-transform duration-1000">
        <div class="absolute inset-0 bg-gradient-to-t from-obsidian-950 via-obsidian-950/70 to-obsidian-950/20"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-obsidian-950/85 via-transparent to-obsidian-950/20"></div>
        <div class="absolute inset-0 luxury-vignette opacity-70"></div>
    </div>

    <!-- Animated Glows -->
    <div class="absolute top-1/4 right-1/4 w-[400px] h-[400px] bg-brand/5 rounded-full blur-[120px] animate-pulse pointer-events-none"></div>
    <div class="absolute bottom-1/3 left-1/3 w-[300px] h-[300px] bg-brand-dark/5 rounded-full blur-[100px] animate-pulse pointer-events-none" style="animation-delay: 1.5s;"></div>

    <!-- Content Container -->
    <div class="max-w-[1440px] mx-auto px-4 z-10 w-full space-y-7 text-center">
        <!-- Breadcrumb -->
        <div class="flex justify-center">
            <?php require 'includes/breadcrumb.php'; ?>
        </div>

        <!-- Subtitle Badge -->
        <span class="inline-flex items-center space-x-2 px-4 py-2 rounded-full bg-brand/10 border border-brand/25 text-brand text-[11px] font-extrabold uppercase tracking-[0.18em] shadow-[0_2px_20px_rgba(240,210,90,0.15)]">
            <i class="fa-solid fa-envelope text-[9px]"></i>
            <span>Get In Touch</span>
        </span>

        <!-- Page Title -->
        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-black text-white leading-tight font-display tracking-tight max-w-4xl mx-auto">
            Contact Our Travel <br class="hidden sm:inline">
            <span class="text-gradient-gold">Consulting Desk</span>
        </h1>

        <p class="text-slate-300 text-sm md:text-base max-w-2xl mx-auto leading-relaxed font-medium">
            Have questions about custom tour packages, tempo travellers, or car rentals? Reach out to us. Our concierge support is available 24/7.
        </p>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════════════════════
     SECTION 2: CONTACT INFORMATION & PREMIUM FORM
     ═══════════════════════════════════════════════════════════════════════ -->
<section class="py-20 bg-white relative z-10" id="contact-info">
    <div class="max-w-[1440px] mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16">
            
            <!-- Left Column: Contact Cards -->
            <div class="lg:col-span-5 space-y-8 flex flex-col justify-between">
                <div class="space-y-4">
                    <span class="text-brand-accent font-bold text-xs uppercase tracking-widest bg-brand/10 px-3 py-1.5 rounded-full border border-brand/15">Reach Us Directly</span>
                    <h2 class="text-3xl font-extrabold text-obsidian-950 leading-tight font-display">Speak With Travel Experts</h2>
                    <p class="text-slate-600 text-sm md:text-base leading-relaxed">
                        Whether you are planning a spiritual yatra, family mountain trip, or outstation fleet rental, our desk offers competitive direct estimates.
                    </p>
                </div>

                <div class="space-y-6">
                    <!-- Phone -->
                    <a href="tel:<?php echo CONTACT_PHONE_RAW; ?>" class="group flex items-start space-x-4 bg-slate-50 p-6 rounded-[24px] border border-slate-200/60 hover:border-brand/25 transition-all duration-300">
                        <div class="w-12 h-12 rounded-2xl bg-brand/10 border border-brand/20 flex items-center justify-center text-brand-accent text-lg flex-shrink-0 group-hover:bg-brand/20 transition-colors">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div>
                            <p class="text-xs text-slate-400 font-bold uppercase tracking-wider">Voice Assistance Desk</p>
                            <p class="text-obsidian-950 font-bold text-lg group-hover:text-brand-accent transition-colors mt-0.5"><?php echo CONTACT_PHONE; ?></p>
                        </div>
                    </a>

                    <!-- Email -->
                    <a href="mailto:<?php echo CONTACT_EMAIL; ?>" class="group flex items-start space-x-4 bg-slate-50 p-6 rounded-[24px] border border-slate-200/60 hover:border-brand/25 transition-all duration-300">
                        <div class="w-12 h-12 rounded-2xl bg-brand/10 border border-brand/20 flex items-center justify-center text-brand-accent text-lg flex-shrink-0 group-hover:bg-brand/20 transition-colors">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div>
                            <p class="text-xs text-slate-400 font-bold uppercase tracking-wider">Email Inquiry Desk</p>
                            <p class="text-obsidian-950 font-bold text-base group-hover:text-brand-accent transition-colors mt-0.5 break-all"><?php echo CONTACT_EMAIL; ?></p>
                        </div>
                    </a>

                    <!-- Address -->
                    <div class="group flex items-start space-x-4 bg-slate-50 p-6 rounded-[24px] border border-slate-200/60 hover:border-brand/25 transition-all duration-300">
                        <div class="w-12 h-12 rounded-2xl bg-brand/10 border border-brand/20 flex items-center justify-center text-brand-accent text-lg flex-shrink-0 group-hover:bg-brand/20 transition-colors">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div>
                            <p class="text-xs text-slate-400 font-bold uppercase tracking-wider">Registered Office</p>
                            <p class="text-obsidian-950 font-semibold text-sm leading-relaxed mt-1"><?php echo CONTACT_ADDRESS; ?></p>
                        </div>
                    </div>

                    <!-- WhatsApp Live Support -->
                    <a href="<?php echo WHATSAPP_LINK; ?>" target="_blank" class="group flex items-start space-x-4 bg-emerald-500/5 p-6 rounded-[24px] border border-emerald-500/10 hover:border-emerald-500/25 transition-all duration-300">
                        <div class="w-12 h-12 rounded-2xl bg-emerald-500/10 border border-emerald-500/20 flex items-center justify-center text-emerald-500 text-xl flex-shrink-0 group-hover:bg-emerald-500 group-hover:text-white transition-all duration-300">
                            <i class="fa-brands fa-whatsapp"></i>
                        </div>
                        <div>
                            <p class="text-xs text-slate-400 font-bold uppercase tracking-wider">Instant Chat Desk</p>
                            <p class="text-emerald-600 font-bold text-base group-hover:text-emerald-500 transition-colors mt-0.5">Click to Chat on WhatsApp</p>
                        </div>
                    </a>
                </div>

                <p class="text-xs text-slate-400 leading-relaxed font-medium">
                    * Our booking agents are available 24 hours a day, 7 days a week, including national holidays, to assist with active trips and direct inquiries.
                </p>
            </div>

            <!-- Right Column: Premium Form -->
            <div class="lg:col-span-7 bg-slate-950/75 backdrop-blur-xl border border-white/10 shadow-2xl rounded-[32px] p-6 md:p-10 relative text-white glow-gold/5">
                <div class="space-y-2 mb-8">
                    <h3 class="text-2xl font-bold font-display text-white">Send Direct Message</h3>
                    <p class="text-slate-400 text-xs uppercase tracking-wider font-semibold">Let us know your travel plans for a free custom quote</p>
                </div>

                <form id="contact-page-form" action="<?php echo BASE_URL; ?>thank-you" method="POST" class="space-y-6">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <!-- Full Name -->
                        <div>
                            <label for="contact-name" class="block text-[10px] font-bold text-brand uppercase tracking-widest mb-2">Your Full Name *</label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-slate-400 pointer-events-none">
                                    <i class="fa-solid fa-user text-brand/80 text-xs"></i>
                                </span>
                                <input id="contact-name" name="name" type="text" required placeholder="Enter name" 
                                    class="w-full bg-slate-900/40 hover:bg-slate-900/60 focus:bg-slate-950/80 border border-white/10 focus:border-brand text-white rounded-xl py-3.5 pl-10 pr-4 focus:outline-none transition-all duration-300 text-sm focus:shadow-[0_0_15px_rgba(240,210,90,0.15)]">
                            </div>
                        </div>

                        <!-- Phone Number -->
                        <div>
                            <label for="contact-phone" class="block text-[10px] font-bold text-brand uppercase tracking-widest mb-2">Phone Number *</label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-slate-400 pointer-events-none">
                                    <i class="fa-solid fa-phone text-brand/80 text-xs"></i>
                                </span>
                                <input id="contact-phone" name="phone" type="tel" required placeholder="Enter mobile number" 
                                    class="w-full bg-slate-900/40 hover:bg-slate-900/60 focus:bg-slate-950/80 border border-white/10 focus:border-brand text-white rounded-xl py-3.5 pl-10 pr-4 focus:outline-none transition-all duration-300 text-sm focus:shadow-[0_0_15px_rgba(240,210,90,0.15)]">
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <!-- Email Address -->
                        <div>
                            <label for="contact-email" class="block text-[10px] font-bold text-brand uppercase tracking-widest mb-2">Email Address</label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-slate-400 pointer-events-none">
                                    <i class="fa-solid fa-envelope text-brand/80 text-xs"></i>
                                </span>
                                <input id="contact-email" name="email" type="email" placeholder="Enter email" 
                                    class="w-full bg-slate-900/40 hover:bg-slate-900/60 focus:bg-slate-950/80 border border-white/10 focus:border-brand text-white rounded-xl py-3.5 pl-10 pr-4 focus:outline-none transition-all duration-300 text-sm focus:shadow-[0_0_15px_rgba(240,210,90,0.15)]">
                            </div>
                        </div>

                        <!-- Select Service -->
                        <div>
                            <label for="contact-service" class="block text-[10px] font-bold text-brand uppercase tracking-widest mb-2">Select Service</label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-slate-400 pointer-events-none">
                                    <i class="fa-solid fa-map-location-dot text-brand/80 text-xs"></i>
                                </span>
                                <select id="contact-service" name="service"
                                    class="w-full bg-slate-900/40 hover:bg-slate-900/60 focus:bg-slate-950/80 border border-white/10 focus:border-brand text-white rounded-xl py-3.5 pl-10 pr-10 focus:outline-none transition-all duration-300 text-sm focus:shadow-[0_0_15px_rgba(240,210,90,0.15)] appearance-none font-medium">
                                    <option value="" class="bg-slate-950 text-white/80">Select Option</option>
                                    <option value="tour" class="bg-slate-950 text-white">All-Inclusive Tour</option>
                                    <option value="tempo" class="bg-slate-950 text-white">Tempo Traveller Hire</option>
                                    <option value="car" class="bg-slate-950 text-white">Premium Car Hire</option>
                                </select>
                                <span class="absolute inset-y-0 right-0 pr-4 flex items-center text-brand pointer-events-none">
                                    <i class="fa-solid fa-chevron-down text-xs"></i>
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Message Requirements -->
                    <div>
                        <label for="contact-requirements" class="block text-[10px] font-bold text-brand uppercase tracking-widest mb-2">Requirements / Message</label>
                        <div class="relative">
                            <span class="absolute top-4 left-0 pl-4 flex items-center text-slate-400 pointer-events-none">
                                <i class="fa-solid fa-pen-to-square text-brand/80 text-xs"></i>
                            </span>
                            <textarea id="contact-requirements" name="requirements" required rows="5" placeholder="e.g. Travel dates, routes, guest count, or rental duration details..." 
                                class="w-full bg-slate-900/40 hover:bg-slate-900/60 focus:bg-slate-950/80 border border-white/10 focus:border-brand text-white rounded-xl py-3.5 pl-10 pr-4 focus:outline-none transition-all duration-300 text-sm resize-none focus:shadow-[0_0_15px_rgba(240,210,90,0.15)]"></textarea>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="w-full py-4 bg-gradient-gold text-obsidian-950 font-bold rounded-xl shadow-lg hover:shadow-brand/25 transition-all duration-300 hover:-translate-y-0.5 active:translate-y-0 pulse-gold-btn btn-shimmer uppercase tracking-widest text-xs font-extrabold">
                        Submit Inquiry Message
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════════════════════
     SECTION 3: GOOGLE MAP SECTION
     ═══════════════════════════════════════════════════════════════════════ -->
<section class="w-full bg-slate-50 relative overflow-hidden border-t border-slate-200/60">
    <div class="w-full h-[350px] sm:h-[450px] relative z-10">
        <!-- Interactive Embedded Map Frame -->
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3497.8741366914565!2d77.1627914755057!3d28.753174975600204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d0246dd24b423%3A0xe54fb7a216447c2!2sPart-2%2C%20Mukundpur%2C%20Delhi%2C%20110042!5e0!3m2!1sen!2sin!4v1717252000000!5m2!1sen!2sin" 
            class="w-full h-full border-0 grayscale opacity-80 hover:grayscale-0 transition-all duration-700 ease-out" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade"
            title="Explore Your Dream Trip Office Location Map">
        </iframe>
    </div>
</section>

<?php
require_once 'includes/footer.php';
?>
