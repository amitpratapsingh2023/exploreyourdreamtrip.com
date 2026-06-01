<?php
/**
 * Centralized Tour Data — Single Source of Truth
 * ───────────────────────────────────────────────
 * Contains the complete tour data (both card listings and details)
 * used across the entire site.
 *
 * To add a new tour:
 *   1. Add a new entry to the $TOURS array with all details.
 *   That's it — no new files needed!
 *
 * @used-by includes/config.php (auto-included → available everywhere)
 * @used-by tours/details.php
 */

$TOURS = [
    'agra-taj-mahal' => [
        'title' => 'Agra (Taj Mahal) Tour',
        'subtitle' => 'The Monument of Love',
        'duration' => '1 Day / 1 Night',
        'price' => '₹1,999',
        'image' => BASE_URL . 'assets/images/tours/agra.png',
        'link' => 'tours/agra-taj-mahal',
        'rating' => '4.9',
        'reviews' => '120',
        'featured' => true,
        'page_title' => 'Agra (Taj Mahal) Tour – Premium Day Trip Package',
        'page_desc' => 'Book our premium Agra Taj Mahal day trip from Delhi. Experience the iconic monument of love with private luxury transport, expert guide, Agra Fort, Mehtab Bagh, and more. Starting ₹1,999/person.',
        'overview_heading' => 'Discover the Eternal <span class="text-gradient-gold">Mughal Grandeur</span>',
        'overview' => 'Experience the timeless grandeur of the Taj Mahal — one of the Seven Wonders of the World — on this meticulously curated premium day trip from Delhi. Our luxury Agra tour takes you on a journey through Mughal splendor, from the breathtaking ivory-white marble mausoleum to the imposing red sandstone Agra Fort and the serene Mehtab Bagh gardens. Travel in air-conditioned comfort with a professional chauffeur and licensed heritage guide, enjoying VIP skip-the-line entry and personalized attention throughout. Whether you\'re a solo traveler, a couple seeking romance, or a family creating lifelong memories — this tour is designed to deliver an unforgettable, hassle-free experience of India\'s most iconic landmark.',
        'highlights' => [
            'Sunrise/Sunset view of the Taj Mahal',
            'Skip-the-line VIP entry tickets',
            'Licensed English-speaking heritage guide',
            'Luxury AC sedan or SUV transport',
            'Visit Agra Fort (UNESCO World Heritage)',
            'Photo stop at Mehtab Bagh gardens'
        ],
        'key_facts' => [
            'duration' => '1 Day / 1 Night',
            'group_size' => '1–8 Persons',
            'best_season' => 'Oct – Mar (Winter)',
            'difficulty' => 'Easy (Walking Tour)',
            'pickup' => 'Delhi NCR (Hotel/Airport)',
            'languages' => 'English, Hindi'
        ],
        'itinerary' => [
            [
                'time' => '05:00 AM',
                'title' => 'Hotel Pickup & Departure from Delhi',
                'desc' => 'Our professional chauffeur picks you up from your Delhi NCR hotel or preferred location in a luxury air-conditioned sedan (Swift Dzire / Innova Crysta). Enjoy complimentary bottled water and a fresh newspaper as you settle in for the scenic 3-hour Yamuna Expressway drive to Agra.',
                'icon' => 'fa-solid fa-car-side'
            ],
            [
                'time' => '08:00 AM',
                'title' => 'Arrive at the Taj Mahal',
                'desc' => 'Arrive at the East Gate of the Taj Mahal. Your licensed heritage guide meets you with pre-arranged VIP skip-the-line entry tickets. Witness the awe-inspiring ivory marble masterpiece built by Emperor Shah Jahan as a testament of eternal love. Explore the intricate pietra dura inlay work, the perfectly symmetrical gardens, and the reflective pool — all while learning the fascinating history from your expert guide.',
                'icon' => 'fa-solid fa-mosque'
            ],
            [
                'time' => '10:30 AM',
                'title' => 'Explore Agra Fort (UNESCO Heritage)',
                'desc' => 'Drive to the magnificent Agra Fort, a sprawling 16th-century Mughal fortress of red sandstone. Walk through the Diwan-i-Am (Hall of Public Audience), the Diwan-i-Khas (Hall of Private Audience), the Sheesh Mahal (Mirror Palace), and the Musamman Burj — the octagonal tower where Shah Jahan spent his final days gazing at the Taj Mahal.',
                'icon' => 'fa-solid fa-fort-awesome'
            ],
            [
                'time' => '12:30 PM',
                'title' => 'Authentic Mughlai Lunch',
                'desc' => 'Enjoy a sumptuous lunch at a premium heritage restaurant in Agra. Savor authentic Mughlai cuisine — from tender kebabs and rich biryanis to creamy dal makhani and freshly baked naan. Vegetarian and Jain options are available upon request. (Lunch cost is at your own expense but we pre-arrange the finest options.)',
                'icon' => 'fa-solid fa-utensils'
            ],
            [
                'time' => '02:00 PM',
                'title' => 'Mehtab Bagh & Local Marble Crafts',
                'desc' => 'Visit Mehtab Bagh (Moonlight Garden) on the opposite bank of the Yamuna River for stunning panoramic views and perfect photo opportunities of the Taj Mahal. Optionally, explore a local marble inlay workshop to witness the same pietra dura artistry used in the Taj Mahal, and shop for authentic Agra marble souvenirs.',
                'icon' => 'fa-solid fa-camera'
            ],
            [
                'time' => '04:00 PM',
                'title' => 'Return Journey to Delhi',
                'desc' => 'Begin your comfortable return drive to Delhi on the Yamuna Expressway. Relax, reflect on the day\'s incredible experiences, and enjoy the sunset views along the way. Expected drop-off at your Delhi hotel by 7:30 PM.',
                'icon' => 'fa-solid fa-route'
            ]
        ],
        'inclusions' => [
            'Luxury AC sedan/SUV (Delhi ↔ Agra roundtrip)',
            'Professional chauffeur with verified background',
            'Licensed English-speaking heritage guide',
            'All highway tolls & parking charges',
            'Skip-the-line monument entry facilitation',
            'Complimentary water bottles & refreshments',
            'All applicable taxes (GST)',
            '24/7 on-call travel support'
        ],
        'exclusions' => [
            'Monument entry tickets (₹50 Indians / ₹1,100 Foreigners)',
            'Lunch and personal meals',
            'Camera/video permits at monuments',
            'Personal shopping & souvenirs',
            'Travel insurance',
            'Tips and gratuities'
        ],
        'gallery' => [
            [
                'src' => 'https://images.unsplash.com/photo-1564507592333-c60657eea523?auto=format&fit=crop&w=800&q=80',
                'title' => 'Taj Mahal — The Monument of Love'
            ],
            [
                'src' => 'https://images.unsplash.com/photo-1585135497273-1a86d9d9e2e3?auto=format&fit=crop&w=800&q=80',
                'title' => 'Taj Mahal Reflection Pool'
            ],
            [
                'src' => 'https://images.unsplash.com/photo-1548013146-72479768bada?auto=format&fit=crop&w=800&q=80',
                'title' => 'Agra Fort — Red Sandstone Fortress'
            ],
            [
                'src' => 'https://images.unsplash.com/photo-1515091943-9d5c0ad475af?auto=format&fit=crop&w=800&q=80',
                'title' => 'Mehtab Bagh Panoramic View'
            ],
            [
                'src' => 'https://images.unsplash.com/photo-1524492412937-b28074a5d7da?auto=format&fit=crop&w=800&q=80',
                'title' => 'Taj Mahal at Golden Hour'
            ],
            [
                'src' => 'https://images.unsplash.com/photo-1587474260584-136574528ed5?auto=format&fit=crop&w=800&q=80',
                'title' => 'Heritage Architecture of Agra'
            ]
        ],
        'pricing' => [
            [
                'vehicle' => 'Swift Dzire (Sedan)',
                'capacity' => '1–4 Guests',
                'price' => '₹1,999',
                'per' => 'per person',
                'icon' => 'fa-solid fa-car',
                'popular' => false
            ],
            [
                'vehicle' => 'Toyota Innova Crysta (SUV)',
                'capacity' => '1–6 Guests',
                'price' => '₹2,499',
                'per' => 'per person',
                'icon' => 'fa-solid fa-truck-pickup',
                'popular' => true
            ],
            [
                'vehicle' => 'Tempo Traveller (12-Seater)',
                'capacity' => '7–12 Guests',
                'price' => '₹1,499',
                'per' => 'per person',
                'icon' => 'fa-solid fa-van-shuttle',
                'popular' => false
            ]
        ],
        'trust_props' => [
            [
                'icon' => 'fa-solid fa-car-side',
                'title' => 'Private Luxury Car',
                'desc' => 'AC Sedan/SUV with professional driver'
            ],
            [
                'icon' => 'fa-solid fa-award',
                'title' => 'Heritage Specialist',
                'desc' => 'Licensed government-approved guides'
            ],
            [
                'icon' => 'fa-solid fa-sliders',
                'title' => '100% Customisable',
                'desc' => 'Bespoke timings & flexible itinerary'
            ],
            [
                'icon' => 'fa-solid fa-passport',
                'title' => 'VIP Skip-The-Line',
                'desc' => 'All monument passes pre-arranged'
            ]
        ],
        'schema_tourist_type' => [
            'Leisure',
            'Cultural',
            'Heritage'
        ],
        'schema_price' => '1999'
    ],
    'shimla-manali' => [
        'title' => 'Shimla & Manali Tour',
        'subtitle' => 'The Majestic Himalayas',
        'duration' => '5 Days / 4 Nights',
        'price' => '₹12,499',
        'image' => BASE_URL . 'assets/images/tours/shimla-manali.png',
        'link' => 'tours/shimla-manali',
        'rating' => '4.8',
        'reviews' => '245',
        'featured' => true,
        'page_title' => 'Shimla & Manali Tour – 5 Day Premium Himalayan Package',
        'page_desc' => 'Discover the majestic Himalayas with our 5-day premium Shimla & Manali tour from Delhi. Snow-capped peaks, lush valleys, adventure activities, and luxury stays. Starting ₹12,499/person.',
        'overview_heading' => 'Experience the Majestic <span class="text-gradient-gold">Himalayan Beauty</span>',
        'overview' => 'Embark on a breathtaking 5-day journey through the crown jewels of Himachal Pradesh — Shimla and Manali. From the colonial charm of Shimla\'s Mall Road and the panoramic vistas at Kufri to the snow-capped splendor of Solang Valley and the ancient Hadimba Temple in Manali, this tour weaves together adventure, culture, and relaxation in the most stunning mountain setting. Travel in luxury vehicles through winding mountain roads with dramatic valley views, stay in premium hillside hotels, and create memories that last a lifetime. Perfect for families, couples, and friend groups seeking the ultimate Himalayan escape.',
        'highlights' => [
            'Mall Road & Ridge Walk in Shimla',
            'Kufri snow point & adventure activities',
            'Solang Valley paragliding & skiing',
            'Ancient Hadimba Devi Temple visit',
            'Rohtang Pass excursion (seasonal)',
            'Premium hillside hotel accommodation'
        ],
        'key_facts' => [
            'duration' => '5 Days / 4 Nights',
            'group_size' => '2–12 Persons',
            'best_season' => 'Oct – Mar (Snow), Apr – Jun (Pleasant)',
            'difficulty' => 'Easy to Moderate',
            'pickup' => 'Delhi NCR (Hotel/Airport)',
            'languages' => 'English, Hindi'
        ],
        'itinerary' => [
            [
                'time' => 'Day 1',
                'title' => 'Delhi to Shimla — Scenic Mountain Drive',
                'desc' => 'Early morning pickup from your Delhi hotel in a luxury AC vehicle. Drive through the lush Shivalik foothills via Chandigarh. Enjoy the winding mountain roads and misty valleys as you ascend to Shimla (approx. 8-9 hours). Check in to your premium hillside hotel, freshen up, and enjoy an evening stroll on the iconic Mall Road. Overnight stay in Shimla.',
                'icon' => 'fa-solid fa-mountain-sun'
            ],
            [
                'time' => 'Day 2',
                'title' => 'Shimla Sightseeing — Ridge, Kufri & Temples',
                'desc' => 'After a hearty breakfast, explore Shimla\'s highlights: visit The Ridge for panoramic Himalayan views, the Christ Church (one of North India\'s oldest churches), Jakhoo Temple dedicated to Lord Hanuman, and the charming Lakkar Bazaar. Post-lunch, drive to Kufri for snow activities, yak rides, and stunning photography. Return to Shimla for an evening at leisure. Overnight in Shimla.',
                'icon' => 'fa-solid fa-church'
            ],
            [
                'time' => 'Day 3',
                'title' => 'Shimla to Manali — Valley of the Gods',
                'desc' => 'After breakfast, check out and begin the spectacular 7-8 hour drive to Manali through the Kullu Valley. Stop at the Sundernagar Lake and the confluence of Beas and Parvati rivers. Arrive in Manali by evening and check in to your premium hotel. Enjoy the cool mountain air and a relaxed dinner. Overnight in Manali.',
                'icon' => 'fa-solid fa-road'
            ],
            [
                'time' => 'Day 4',
                'title' => 'Manali Exploration — Solang Valley & Temples',
                'desc' => 'Full day exploring Manali\'s treasures. Morning visit to the ancient Hadimba Devi Temple set amidst towering cedar forests, followed by Vashisht Hot Springs and the Tibetan Monastery. After lunch, head to Solang Valley for adventure activities — paragliding, zorbing, skiing (seasonal), or simply enjoy the dramatic mountain vistas. Return for an evening bonfire (seasonal). Overnight in Manali.',
                'icon' => 'fa-solid fa-person-skiing'
            ],
            [
                'time' => 'Day 5',
                'title' => 'Manali to Delhi — Return Journey',
                'desc' => 'After breakfast, check out and begin your comfortable return journey to Delhi. The drive takes approximately 10-12 hours via the Chandigarh-Delhi highway. Stop for lunch en route at a handpicked restaurant. Arrive in Delhi by late evening with a treasure trove of Himalayan memories. Drop-off at your Delhi hotel/airport.',
                'icon' => 'fa-solid fa-house-chimney'
            ]
        ],
        'inclusions' => [
            'Luxury AC sedan/SUV (Delhi ↔ Shimla ↔ Manali roundtrip)',
            'Professional chauffeur experienced in mountain driving',
            '4 nights premium hotel accommodation (2N Shimla + 2N Manali)',
            'Daily breakfast at hotel',
            'All highway tolls, parking & fuel charges',
            'Sightseeing as per itinerary',
            'All applicable taxes (GST)',
            '24/7 on-call travel support'
        ],
        'exclusions' => [
            'Lunch, dinner, and personal meals',
            'Adventure activity charges (paragliding, skiing, etc.)',
            'Rohtang Pass permit & Atal Tunnel fees',
            'Entry fees to monuments and temples',
            'Personal shopping & souvenirs',
            'Travel insurance',
            'Tips and gratuities'
        ],
        'gallery' => [
            [
                'src' => 'https://images.unsplash.com/photo-1597074866923-dc0589150a81?auto=format&fit=crop&w=800&q=80',
                'title' => 'Shimla — Queen of Hills'
            ],
            [
                'src' => 'https://images.unsplash.com/photo-1626621341517-bbf3d9990a23?auto=format&fit=crop&w=800&q=80',
                'title' => 'Mall Road Colonial Charm'
            ],
            [
                'src' => 'https://images.unsplash.com/photo-1593181629936-11c tried-4ed3-9d87-c3153e8dce78?auto=format&fit=crop&w=800&q=80',
                'title' => 'Snow-Capped Himalayan Peaks'
            ],
            [
                'src' => 'https://images.unsplash.com/photo-1585136917228-c5a75fec5b84?auto=format&fit=crop&w=800&q=80',
                'title' => 'Solang Valley Adventures'
            ],
            [
                'src' => 'https://images.unsplash.com/photo-1573756285822-ae tried-44c6-abde-0e5c1c1f8e1e?auto=format&fit=crop&w=800&q=80',
                'title' => 'Hadimba Temple in Manali'
            ],
            [
                'src' => 'https://images.unsplash.com/photo-1590766940554-634ae3e0e1e5?auto=format&fit=crop&w=800&q=80',
                'title' => 'Kullu Valley Panorama'
            ]
        ],
        'pricing' => [
            [
                'vehicle' => 'Swift Dzire (Sedan)',
                'capacity' => '1–3 Guests',
                'price' => '₹12,499',
                'per' => 'per person',
                'icon' => 'fa-solid fa-car',
                'popular' => false
            ],
            [
                'vehicle' => 'Toyota Innova Crysta (SUV)',
                'capacity' => '1–6 Guests',
                'price' => '₹14,999',
                'per' => 'per person',
                'icon' => 'fa-solid fa-truck-pickup',
                'popular' => true
            ],
            [
                'vehicle' => 'Tempo Traveller (12-Seater)',
                'capacity' => '7–12 Guests',
                'price' => '₹10,999',
                'per' => 'per person',
                'icon' => 'fa-solid fa-van-shuttle',
                'popular' => false
            ]
        ],
        'trust_props' => [
            [
                'icon' => 'fa-solid fa-mountain-sun',
                'title' => 'Mountain Specialist',
                'desc' => 'Expert drivers for Himalayan roads'
            ],
            [
                'icon' => 'fa-solid fa-hotel',
                'title' => 'Premium Hotels',
                'desc' => 'Handpicked 3-4 star hillside stays'
            ],
            [
                'icon' => 'fa-solid fa-snowflake',
                'title' => 'Snow Experiences',
                'desc' => 'Curated snow & adventure activities'
            ],
            [
                'icon' => 'fa-solid fa-headset',
                'title' => '24/7 Trip Support',
                'desc' => 'Dedicated travel coordinator on call'
            ]
        ],
        'schema_tourist_type' => [
            'Leisure',
            'Adventure',
            'Nature'
        ],
        'schema_price' => '12499'
    ],
    'rishikesh' => [
        'title' => 'Rishikesh Adventure Tour',
        'subtitle' => 'Spiritual & Adventure Capital',
        'duration' => '3 Days / 2 Nights',
        'price' => '₹5,999',
        'image' => 'https://images.unsplash.com/photo-1712510817140-917938f92e5b?q=80&w=1074&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
        'link' => 'tours/rishikesh',
        'rating' => '4.7',
        'reviews' => '98',
        'featured' => true,
        'page_title' => 'Rishikesh Adventure Tour – 3 Day Spiritual & Rafting Package',
        'page_desc' => 'Experience the thrill of white-water rafting, bungee jumping, and spiritual serenity in Rishikesh. 3-day premium adventure tour from Delhi with luxury transport. Starting ₹5,999/person.',
        'overview_heading' => 'Adventure Meets <span class="text-gradient-gold">Spiritual Serenity</span>',
        'overview' => 'Rishikesh, the Yoga Capital of the World, offers the perfect blend of adrenaline-pumping adventure and soul-soothing spirituality. Nestled in the foothills of the Himalayas along the sacred Ganges, this 3-day tour immerses you in thrilling white-water rafting, cliff jumping, and optional bungee jumping while also offering the peace of the iconic Ganga Aarti at Triveni Ghat, meditation at ashrams, and the mystical Beatles Ashram. Travel from Delhi in luxury comfort and experience Rishikesh\'s duality — where ancient temples stand alongside world-class adventure sports.',
        'highlights' => [
            'White-water rafting on the Ganges (16 km)',
            'Evening Ganga Aarti at Triveni Ghat',
            'Visit Laxman Jhula & Ram Jhula bridges',
            'Optional bungee jumping (83 meters)',
            'Beatles Ashram (Maharishi Mahesh Yogi)',
            'Riverside camping under the stars'
        ],
        'key_facts' => [
            'duration' => '3 Days / 2 Nights',
            'group_size' => '2–15 Persons',
            'best_season' => 'Sep – Jun (Rafting closed Jul-Aug)',
            'difficulty' => 'Moderate (Adventure)',
            'pickup' => 'Delhi NCR (Hotel/Airport)',
            'languages' => 'English, Hindi'
        ],
        'itinerary' => [
            [
                'time' => 'Day 1',
                'title' => 'Delhi to Rishikesh — Sacred Arrival',
                'desc' => 'Early morning pickup from Delhi in a luxury AC vehicle. Enjoy the 6-hour scenic drive through Haridwar. Arrive in Rishikesh by afternoon and check into your riverside resort or premium camp. Evening visit to the iconic Laxman Jhula and Ram Jhula suspension bridges. Witness the mesmerizing Ganga Aarti ceremony at Triveni Ghat as hundreds of oil lamps float on the sacred Ganges. Dinner at a riverside café. Overnight in Rishikesh.',
                'icon' => 'fa-solid fa-water'
            ],
            [
                'time' => 'Day 2',
                'title' => 'Adventure Day — Rafting, Cliffs & Thrills',
                'desc' => 'After breakfast, gear up for the highlight — 16 km white-water rafting on the Ganges through Grade III and IV rapids including "Roller Coaster," "Golf Course," and "Club House." Experienced instructors ensure safety and maximum fun. Post-rafting, enjoy cliff jumping at designated safe points. Afternoon free for optional activities: bungee jumping (83m), giant swing, or flying fox. Evening bonfire with music at the riverside camp. Overnight in Rishikesh.',
                'icon' => 'fa-solid fa-person-swimming'
            ],
            [
                'time' => 'Day 3',
                'title' => 'Spiritual Exploration & Return',
                'desc' => 'Morning yoga session by the Ganges (optional). After breakfast, visit the Beatles Ashram (Maharishi Mahesh Yogi Ashram) with its iconic graffiti art and meditation caves. Explore Rishikesh\'s vibrant markets for organic products and spiritual souvenirs. Post-lunch, begin the comfortable return drive to Delhi. Arrive by evening with a perfect blend of adventure and peace.',
                'icon' => 'fa-solid fa-om'
            ]
        ],
        'inclusions' => [
            'Luxury AC sedan/SUV (Delhi ↔ Rishikesh roundtrip)',
            'Professional chauffeur with verified background',
            '2 nights accommodation (hotel/riverside camp)',
            'White-water rafting (16 km) with equipment & instructor',
            'All highway tolls & parking charges',
            'Sightseeing as per itinerary',
            'All applicable taxes (GST)',
            '24/7 on-call travel support'
        ],
        'exclusions' => [
            'Meals (lunch & dinner)',
            'Bungee jumping, giant swing, flying fox charges',
            'Entry fees to ashrams and temples',
            'Personal adventure gear purchases',
            'Travel insurance',
            'Tips and gratuities'
        ],
        'gallery' => [
            [
                'src' => 'https://images.unsplash.com/photo-1712510817140-917938f92e5b?auto=format&fit=crop&w=800&q=80',
                'title' => 'Rishikesh — Yoga Capital of the World'
            ],
            [
                'src' => 'https://images.unsplash.com/photo-1588668214407-6ea9a6d8c272?auto=format&fit=crop&w=800&q=80',
                'title' => 'White-Water Rafting on the Ganges'
            ],
            [
                'src' => 'https://images.unsplash.com/photo-1583309219338-a582f1f9ca6b?auto=format&fit=crop&w=800&q=80',
                'title' => 'Laxman Jhula Suspension Bridge'
            ],
            [
                'src' => 'https://images.unsplash.com/photo-1602508876364-840184ef5e47?auto=format&fit=crop&w=800&q=80',
                'title' => 'Sacred Ganga Aarti Ceremony'
            ],
            [
                'src' => 'https://images.unsplash.com/photo-1590050752117-238cb0fb12b1?auto=format&fit=crop&w=800&q=80',
                'title' => 'Beatles Ashram Graffiti Art'
            ],
            [
                'src' => 'https://images.unsplash.com/photo-1544735716-392fe2489ffa?auto=format&fit=crop&w=800&q=80',
                'title' => 'Riverside Camping Experience'
            ]
        ],
        'pricing' => [
            [
                'vehicle' => 'Swift Dzire (Sedan)',
                'capacity' => '1–3 Guests',
                'price' => '₹5,999',
                'per' => 'per person',
                'icon' => 'fa-solid fa-car',
                'popular' => false
            ],
            [
                'vehicle' => 'Toyota Innova Crysta (SUV)',
                'capacity' => '1–6 Guests',
                'price' => '₹7,499',
                'per' => 'per person',
                'icon' => 'fa-solid fa-truck-pickup',
                'popular' => true
            ],
            [
                'vehicle' => 'Tempo Traveller (12-Seater)',
                'capacity' => '7–12 Guests',
                'price' => '₹4,999',
                'per' => 'per person',
                'icon' => 'fa-solid fa-van-shuttle',
                'popular' => false
            ]
        ],
        'trust_props' => [
            [
                'icon' => 'fa-solid fa-person-swimming',
                'title' => 'Certified Instructors',
                'desc' => 'AHAR-certified rafting & safety experts'
            ],
            [
                'icon' => 'fa-solid fa-campground',
                'title' => 'Premium Riverside',
                'desc' => 'Handpicked camps & boutique hotels'
            ],
            [
                'icon' => 'fa-solid fa-om',
                'title' => 'Spiritual Immersion',
                'desc' => 'Yoga, Aarti & ashram experiences'
            ],
            [
                'icon' => 'fa-solid fa-shield-halved',
                'title' => 'Safety First',
                'desc' => 'All equipment & insurance included'
            ]
        ],
        'schema_tourist_type' => [
            'Adventure',
            'Spiritual',
            'Nature'
        ],
        'schema_price' => '5999'
    ],
    'vrindavan' => [
        'title' => 'Vrindavan & Mathura Tour',
        'subtitle' => 'The Land of Lord Krishna',
        'duration' => '2 Days / 1 Night',
        'price' => '₹3,499',
        'image' => 'https://images.unsplash.com/photo-1627894483216-2138af692e32?auto=format&fit=crop&w=600&q=80',
        'link' => 'tours/vrindavan',
        'rating' => '4.9',
        'reviews' => '180',
        'featured' => false,
        'page_title' => 'Vrindavan & Mathura Tour – 2 Day Divine Pilgrimage Package',
        'page_desc' => 'Visit the sacred land of Lord Krishna. Premium 2-day Vrindavan & Mathura tour from Delhi with temple visits, Yamuna Aarti, and luxury transport. Starting ₹3,499/person.',
        'overview_heading' => 'Walk Through the <span class="text-gradient-gold">Land of Lord Krishna</span>',
        'overview' => 'Step into the divine realm of Lord Krishna with this carefully curated 2-day pilgrimage to Vrindavan and Mathura. Visit the birthplace of Lord Krishna at the Shri Krishna Janmabhoomi Temple, witness the grandeur of the ISKCON Temple, explore the vibrant Banke Bihari Temple, and experience the enchanting Yamuna Aarti. From the colorful lanes of Vrindavan filled with devotional music to the ancient ghats of Mathura, every moment of this journey is steeped in devotion, history, and spiritual upliftment. Travel from Delhi in luxury comfort with an experienced guide who brings the legends to life.',
        'highlights' => [
            'Shri Krishna Janmabhoomi Temple',
            'ISKCON Temple Vrindavan (Glory of India)',
            'Banke Bihari Temple darshan',
            'Prem Mandir light & sound show',
            'Yamuna Aarti at Vishram Ghat',
            'Govardhan Parikrama (optional)'
        ],
        'key_facts' => [
            'duration' => '2 Days / 1 Night',
            'group_size' => '1–10 Persons',
            'best_season' => 'Oct – Mar, Janmashtami & Holi',
            'difficulty' => 'Easy (Pilgrimage)',
            'pickup' => 'Delhi NCR (Hotel/Airport)',
            'languages' => 'English, Hindi'
        ],
        'itinerary' => [
            [
                'time' => 'Day 1',
                'title' => 'Delhi to Mathura — Birthplace of Lord Krishna',
                'desc' => 'Morning pickup from Delhi in a luxury AC vehicle. Drive to Mathura (approx. 3.5 hours). Visit the Shri Krishna Janmabhoomi Temple — the sacred birthplace of Lord Krishna. Explore the Dwarkadhish Temple with its stunning architecture and vibrant atmosphere. Afternoon visit to the Mathura Museum to see ancient artifacts from the Kushan period. Evening Yamuna Aarti at Vishram Ghat — a deeply spiritual experience. Check into your hotel. Overnight in Mathura/Vrindavan.',
                'icon' => 'fa-solid fa-gopuram'
            ],
            [
                'time' => 'Day 2',
                'title' => 'Vrindavan Temples & Return to Delhi',
                'desc' => 'Early morning visit to the iconic Banke Bihari Temple for the opening darshan. Experience the electric devotional energy of this 200-year-old temple. Visit the magnificent ISKCON Temple (Sri Sri Krishna Balaram Mandir) with its serene gardens and spiritual ambiance. Explore Prem Mandir — a stunning white marble temple with an evening light show. Optional: Govardhan Parikrama or Radha Raman Temple. Post-lunch, begin the return journey to Delhi. Arrive by evening.',
                'icon' => 'fa-solid fa-hands-praying'
            ]
        ],
        'inclusions' => [
            'Luxury AC sedan/SUV (Delhi ↔ Mathura/Vrindavan roundtrip)',
            'Professional chauffeur with verified background',
            '1 night hotel accommodation (Mathura/Vrindavan)',
            'All highway tolls & parking charges',
            'Sightseeing as per itinerary',
            'All applicable taxes (GST)',
            '24/7 on-call travel support'
        ],
        'exclusions' => [
            'Meals (lunch & dinner)',
            'Temple donation & prasad charges',
            'Special darshan/VIP entry fees',
            'Personal shopping & souvenirs',
            'Travel insurance',
            'Tips and gratuities'
        ],
        'gallery' => [
            [
                'src' => 'https://images.unsplash.com/photo-1627894483216-2138af692e32?auto=format&fit=crop&w=800&q=80',
                'title' => 'Vrindavan — Land of Lord Krishna'
            ],
            [
                'src' => 'https://images.unsplash.com/photo-1609947017136-9daa5f0c6fca?auto=format&fit=crop&w=800&q=80',
                'title' => 'Prem Mandir White Marble Temple'
            ],
            [
                'src' => 'https://images.unsplash.com/photo-1605649487212-47bdab064df7?auto=format&fit=crop&w=800&q=80',
                'title' => 'ISKCON Temple Vrindavan'
            ],
            [
                'src' => 'https://images.unsplash.com/photo-1636559072523-4fdb20adf25a?auto=format&fit=crop&w=800&q=80',
                'title' => 'Yamuna Aarti at Vishram Ghat'
            ],
            [
                'src' => 'https://images.unsplash.com/photo-1590766940554-634ae3e0e1e5?auto=format&fit=crop&w=800&q=80',
                'title' => 'Colorful Lanes of Vrindavan'
            ],
            [
                'src' => 'https://images.unsplash.com/photo-1590050752117-238cb0fb12b1?auto=format&fit=crop&w=800&q=80',
                'title' => 'Krishna Janmabhoomi Temple'
            ]
        ],
        'pricing' => [
            [
                'vehicle' => 'Swift Dzire (Sedan)',
                'capacity' => '1–4 Guests',
                'price' => '₹3,499',
                'per' => 'per person',
                'icon' => 'fa-solid fa-car',
                'popular' => false
            ],
            [
                'vehicle' => 'Toyota Innova Crysta (SUV)',
                'capacity' => '1–6 Guests',
                'price' => '₹4,499',
                'per' => 'per person',
                'icon' => 'fa-solid fa-truck-pickup',
                'popular' => true
            ],
            [
                'vehicle' => 'Tempo Traveller (12-Seater)',
                'capacity' => '7–12 Guests',
                'price' => '₹2,999',
                'per' => 'per person',
                'icon' => 'fa-solid fa-van-shuttle',
                'popular' => false
            ]
        ],
        'trust_props' => [
            [
                'icon' => 'fa-solid fa-gopuram',
                'title' => 'Sacred Pilgrimage',
                'desc' => 'Curated darshan at all major temples'
            ],
            [
                'icon' => 'fa-solid fa-book-open',
                'title' => 'Spiritual Guide',
                'desc' => 'Knowledgeable local pandit/guide'
            ],
            [
                'icon' => 'fa-solid fa-hand-holding-heart',
                'title' => 'Hassle-Free Darshan',
                'desc' => 'Optimized timing to avoid crowds'
            ],
            [
                'icon' => 'fa-solid fa-car-side',
                'title' => 'Luxury Transport',
                'desc' => 'AC vehicle with experienced driver'
            ]
        ],
        'schema_tourist_type' => [
            'Pilgrimage',
            'Cultural',
            'Spiritual'
        ],
        'schema_price' => '3499'
    ],
    'ayodhya' => [
        'title' => 'Ayodhya Ram Mandir Tour',
        'subtitle' => 'The Holy Birthplace',
        'duration' => '2 Days / 1 Night',
        'price' => '₹4,499',
        'image' => 'https://images.unsplash.com/photo-1710429068963-1f6c853134a4?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8YXlvZGh5YXxlbnwwfHwwfHx8MA%3D%3D',
        'link' => 'tours/ayodhya',
        'rating' => '4.9',
        'reviews' => '310',
        'featured' => true,
        'page_title' => 'Ayodhya Ram Mandir Tour – 2 Day Divine Pilgrimage Package',
        'page_desc' => 'Visit the magnificent Ram Mandir in Ayodhya. Premium 2-day pilgrimage tour from Delhi with temple visits, Saryu Aarti, and luxury transport. Starting ₹4,499/person.',
        'overview_heading' => 'Experience the Divine <span class="text-gradient-gold">Ram Janmabhoomi</span>',
        'overview' => 'Witness the grandeur of the newly built Shri Ram Janmabhoomi Mandir — India\'s most anticipated and revered temple — on this meticulously planned 2-day pilgrimage from Delhi. Ayodhya, the ancient capital of Lord Rama\'s kingdom, is experiencing a magnificent transformation. Beyond the iconic Ram Mandir, explore the serene Saryu River ghats, the ancient Hanuman Garhi temple, Kanak Bhawan, and the vibrant Dashrath Mahal. Experience the soul-stirring Saryu Aarti and walk through the sacred streets where the Ramayana comes alive. Travel in luxury comfort with an experienced guide who brings the epic history to life.',
        'highlights' => [
            'Shri Ram Janmabhoomi Mandir darshan',
            'Hanuman Garhi Temple visit',
            'Saryu River Aarti experience',
            'Kanak Bhawan & Dashrath Mahal',
            'Nageshwarnath Temple exploration',
            'Guided heritage walk through Ayodhya'
        ],
        'key_facts' => [
            'duration' => '2 Days / 1 Night',
            'group_size' => '1–10 Persons',
            'best_season' => 'Oct – Mar (Pleasant), Ram Navami',
            'difficulty' => 'Easy (Pilgrimage)',
            'pickup' => 'Delhi NCR (Hotel/Airport)',
            'languages' => 'English, Hindi'
        ],
        'itinerary' => [
            [
                'time' => 'Day 1',
                'title' => 'Delhi to Ayodhya — Sacred Journey Begins',
                'desc' => 'Early morning pickup from Delhi (or Lucknow airport transfer available). Travel to Ayodhya via the Purvanchal Expressway (approx. 10-11 hours by road, or 1.5 hours from Lucknow). Upon arrival, check into your hotel and freshen up. Evening visit to the magnificent Saryu River ghats for the enchanting Aarti ceremony — thousands of oil lamps creating a divine spectacle. Stroll through the illuminated Ram Path (pilgrim walkway). Dinner at a local restaurant. Overnight in Ayodhya.',
                'icon' => 'fa-solid fa-gopuram'
            ],
            [
                'time' => 'Day 2',
                'title' => 'Ram Mandir Darshan & Temple Trail',
                'desc' => 'Early morning darshan at the magnificent Shri Ram Janmabhoomi Mandir — marvel at the stunning Nagara-style architecture, the intricate stone carvings, and the divine atmosphere. Visit Hanuman Garhi — a 10th-century hilltop temple with 76 steps leading to panoramic views. Explore Kanak Bhawan (Palace of Gold) and Dashrath Mahal. Visit the ancient Nageshwarnath Temple built by Lord Kush. Post-lunch, begin the return journey to Delhi/Lucknow. Arrive by evening.',
                'icon' => 'fa-solid fa-hands-praying'
            ]
        ],
        'inclusions' => [
            'Luxury AC sedan/SUV (Delhi ↔ Ayodhya roundtrip)',
            'Professional chauffeur with verified background',
            '1 night hotel accommodation in Ayodhya',
            'All highway tolls & parking charges',
            'Sightseeing as per itinerary',
            'All applicable taxes (GST)',
            '24/7 on-call travel support'
        ],
        'exclusions' => [
            'Meals (lunch & dinner)',
            'Temple donation & prasad charges',
            'VIP darshan pass fees (if applicable)',
            'Personal shopping & souvenirs',
            'Flight tickets (if opting for Lucknow transfer)',
            'Travel insurance',
            'Tips and gratuities'
        ],
        'gallery' => [
            [
                'src' => 'https://images.unsplash.com/photo-1710429068963-1f6c853134a4?auto=format&fit=crop&w=800&q=80',
                'title' => 'Shri Ram Janmabhoomi Mandir'
            ],
            [
                'src' => 'https://images.unsplash.com/photo-1710429068832-1a82a30260c0?auto=format&fit=crop&w=800&q=80',
                'title' => 'Ram Mandir Architecture Detail'
            ],
            [
                'src' => 'https://images.unsplash.com/photo-1697976382711-9e4d4e7c0a58?auto=format&fit=crop&w=800&q=80',
                'title' => 'Saryu River Evening Aarti'
            ],
            [
                'src' => 'https://images.unsplash.com/photo-1589308078059-be1415eab4c3?auto=format&fit=crop&w=800&q=80',
                'title' => 'Hanuman Garhi Hilltop Temple'
            ],
            [
                'src' => 'https://images.unsplash.com/photo-1605649487212-47bdab064df7?auto=format&fit=crop&w=800&q=80',
                'title' => 'Sacred Ayodhya Heritage Walk'
            ],
            [
                'src' => 'https://images.unsplash.com/photo-1636559072523-4fdb20adf25a?auto=format&fit=crop&w=800&q=80',
                'title' => 'Illuminated Ram Path at Night'
            ]
        ],
        'pricing' => [
            [
                'vehicle' => 'Swift Dzire (Sedan)',
                'capacity' => '1–4 Guests',
                'price' => '₹4,499',
                'per' => 'per person',
                'icon' => 'fa-solid fa-car',
                'popular' => false
            ],
            [
                'vehicle' => 'Toyota Innova Crysta (SUV)',
                'capacity' => '1–6 Guests',
                'price' => '₹5,999',
                'per' => 'per person',
                'icon' => 'fa-solid fa-truck-pickup',
                'popular' => true
            ],
            [
                'vehicle' => 'Tempo Traveller (12-Seater)',
                'capacity' => '7–12 Guests',
                'price' => '₹3,499',
                'per' => 'per person',
                'icon' => 'fa-solid fa-van-shuttle',
                'popular' => false
            ]
        ],
        'trust_props' => [
            [
                'icon' => 'fa-solid fa-gopuram',
                'title' => 'Sacred Darshan',
                'desc' => 'Priority entry timing at Ram Mandir'
            ],
            [
                'icon' => 'fa-solid fa-book-open',
                'title' => 'Expert Guide',
                'desc' => 'Knowledgeable local spiritual guide'
            ],
            [
                'icon' => 'fa-solid fa-hand-holding-heart',
                'title' => 'Hassle-Free Journey',
                'desc' => 'All logistics managed end-to-end'
            ],
            [
                'icon' => 'fa-solid fa-car-side',
                'title' => 'Luxury Transport',
                'desc' => 'AC vehicle with experienced driver'
            ]
        ],
        'schema_tourist_type' => [
            'Pilgrimage',
            'Cultural',
            'Heritage'
        ],
        'schema_price' => '4499'
    ],
    'mahakaleshwar' => [
        'title' => 'Ujjain Mahakaleshwar Tour',
        'subtitle' => 'The Sacred Jyotirlinga',
        'duration' => '3 Days / 2 Nights',
        'price' => '₹6,499',
        'image' => 'https://images.unsplash.com/photo-1676029091588-48cc90569541?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8dWpqYWlufGVufDB8fDB8fHww',
        'link' => 'tours/mahakaleshwar',
        'rating' => '4.8',
        'reviews' => '150',
        'featured' => false,
        'page_title' => 'Ujjain Mahakaleshwar Tour – 3 Day Sacred Jyotirlinga Package',
        'page_desc' => 'Visit the sacred Mahakaleshwar Jyotirlinga in Ujjain. Premium 3-day spiritual tour with Bhasma Aarti, temple visits, and luxury transport from Delhi. Starting ₹6,499/person.',
        'overview_heading' => 'Seek Blessings at the <span class="text-gradient-gold">Sacred Jyotirlinga</span>',
        'overview' => 'Embark on a deeply spiritual 3-day pilgrimage to Ujjain — one of India\'s seven sacred cities and home to the revered Mahakaleshwar Jyotirlinga, one of the twelve Jyotirlingas of Lord Shiva. Witness the extraordinary Bhasma Aarti — a unique pre-dawn ritual performed with sacred ash. Explore the ancient Kal Bhairav Temple, the historic Ram Ghat on the Shipra River, and the astronomical marvel of Vedha Shala (Jantar Mantar of Ujjain). This holy city, which hosts the legendary Kumbh Mela, offers a profound spiritual experience that transcends time. Travel from Delhi via comfortable overnight train or flight to Indore with luxury ground transport throughout.',
        'highlights' => [
            'Mahakaleshwar Jyotirlinga darshan',
            'Sacred Bhasma Aarti (pre-dawn ritual)',
            'Kal Bhairav Temple visit',
            'Ram Ghat on Shipra River',
            'Vedha Shala (ancient observatory)',
            'Harsiddhi Mata Temple & Sandipani Ashram'
        ],
        'key_facts' => [
            'duration' => '3 Days / 2 Nights',
            'group_size' => '2–10 Persons',
            'best_season' => 'Oct – Mar, Shravan Month',
            'difficulty' => 'Easy (Pilgrimage)',
            'pickup' => 'Delhi NCR / Indore Airport',
            'languages' => 'English, Hindi'
        ],
        'itinerary' => [
            [
                'time' => 'Day 1',
                'title' => 'Arrival in Ujjain — Evening Temple Trail',
                'desc' => 'Arrive in Ujjain via train from Delhi or flight to Indore (1-hour drive to Ujjain). Meet our representative and transfer to your hotel in a luxury AC vehicle. After freshening up, embark on an evening temple trail — visit the ancient Harsiddhi Mata Temple with its spectacular lamp pillars, explore the Gopal Mandir in the bustling bazaar, and walk along the illuminated Ram Ghat on the Shipra River. Evening Aarti at Ram Ghat. Dinner and overnight in Ujjain.',
                'icon' => 'fa-solid fa-gopuram'
            ],
            [
                'time' => 'Day 2',
                'title' => 'Bhasma Aarti & Mahakaleshwar Darshan',
                'desc' => 'Wake up at 3:00 AM for the once-in-a-lifetime Bhasma Aarti at the Mahakaleshwar Temple (prior registration required). This sacred pre-dawn ritual, where the Shivling is adorned with sacred ash from funeral pyres, is a deeply moving spiritual experience. After the Aarti, explore the magnificent temple complex — the underground sanctum, the Omkareshwar Mahadev on the upper floor, and the Nandi Hall. Visit Kal Bhairav Temple — Ujjain\'s guardian deity. Afternoon visit to Vedha Shala (ancient astronomical observatory) and Sandipani Ashram where Lord Krishna studied. Evening at leisure. Overnight in Ujjain.',
                'icon' => 'fa-solid fa-fire'
            ],
            [
                'time' => 'Day 3',
                'title' => 'Mangalnath Temple & Departure',
                'desc' => 'Morning visit to Mangalnath Temple — believed to be the birthplace of Mars (Mangal) and significant for those seeking astrological remedies. Visit the Chintaman Ganesh Temple and explore the local market for religious souvenirs and prasad. Post-lunch, transfer to Indore airport or Ujjain railway station for your return journey to Delhi. Departure with divine blessings.',
                'icon' => 'fa-solid fa-hands-praying'
            ]
        ],
        'inclusions' => [
            'Luxury AC vehicle for all Ujjain sightseeing',
            'Airport/railway station transfers (Indore/Ujjain)',
            'Professional chauffeur with local knowledge',
            '2 nights hotel accommodation in Ujjain',
            'Bhasma Aarti registration assistance',
            'All local tolls & parking charges',
            'All applicable taxes (GST)',
            '24/7 on-call travel support'
        ],
        'exclusions' => [
            'Train/flight tickets (Delhi ↔ Indore/Ujjain)',
            'Meals (lunch & dinner)',
            'Temple donation & special pooja charges',
            'VIP darshan passes',
            'Personal shopping & souvenirs',
            'Travel insurance',
            'Tips and gratuities'
        ],
        'gallery' => [
            [
                'src' => 'https://images.unsplash.com/photo-1676029091588-48cc90569541?auto=format&fit=crop&w=800&q=80',
                'title' => 'Mahakaleshwar Temple — Sacred Jyotirlinga'
            ],
            [
                'src' => 'https://images.unsplash.com/photo-1609947017136-9daa5f0c6fca?auto=format&fit=crop&w=800&q=80',
                'title' => 'Bhasma Aarti Spiritual Ceremony'
            ],
            [
                'src' => 'https://images.unsplash.com/photo-1605649487212-47bdab064df7?auto=format&fit=crop&w=800&q=80',
                'title' => 'Ram Ghat on Shipra River'
            ],
            [
                'src' => 'https://images.unsplash.com/photo-1636559072523-4fdb20adf25a?auto=format&fit=crop&w=800&q=80',
                'title' => 'Evening Aarti at Ram Ghat'
            ],
            [
                'src' => 'https://images.unsplash.com/photo-1589308078059-be1415eab4c3?auto=format&fit=crop&w=800&q=80',
                'title' => 'Kal Bhairav Temple Ancient Shrine'
            ],
            [
                'src' => 'https://images.unsplash.com/photo-1590766940554-634ae3e0e1e5?auto=format&fit=crop&w=800&q=80',
                'title' => 'Ujjain Heritage Architecture'
            ]
        ],
        'pricing' => [
            [
                'vehicle' => 'Swift Dzire (Sedan)',
                'capacity' => '1–4 Guests',
                'price' => '₹6,499',
                'per' => 'per person',
                'icon' => 'fa-solid fa-car',
                'popular' => false
            ],
            [
                'vehicle' => 'Toyota Innova Crysta (SUV)',
                'capacity' => '1–6 Guests',
                'price' => '₹8,499',
                'per' => 'per person',
                'icon' => 'fa-solid fa-truck-pickup',
                'popular' => true
            ],
            [
                'vehicle' => 'Tempo Traveller (12-Seater)',
                'capacity' => '7–12 Guests',
                'price' => '₹5,499',
                'per' => 'per person',
                'icon' => 'fa-solid fa-van-shuttle',
                'popular' => false
            ]
        ],
        'trust_props' => [
            [
                'icon' => 'fa-solid fa-fire',
                'title' => 'Bhasma Aarti Access',
                'desc' => 'Pre-registration & timing assistance'
            ],
            [
                'icon' => 'fa-solid fa-book-open',
                'title' => 'Spiritual Guide',
                'desc' => 'Knowledgeable local pandit/guide'
            ],
            [
                'icon' => 'fa-solid fa-hand-holding-heart',
                'title' => 'Complete Pilgrimage',
                'desc' => 'All major temples & sacred sites'
            ],
            [
                'icon' => 'fa-solid fa-car-side',
                'title' => 'Comfortable Transport',
                'desc' => 'AC vehicle for all local transfers'
            ]
        ],
        'schema_tourist_type' => [
            'Pilgrimage',
            'Spiritual',
            'Cultural'
        ],
        'schema_price' => '6499'
    ],
    'golden-temple' => [
        'title' => 'Amritsar Golden Temple Tour',
        'subtitle' => 'Spiritual Peace & Patriotism',
        'duration' => '3 Days / 2 Nights',
        'price' => '₹5,499',
        'image' => 'https://images.unsplash.com/photo-1599840309126-7ece88628ded?q=80&w=1190&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
        'link' => 'tours/golden-temple',
        'rating' => '4.8',
        'reviews' => '115',
        'featured' => false,
        'page_title' => 'Amritsar Golden Temple Tour – 3 Day Spiritual & Heritage Package',
        'page_desc' => 'Visit the magnificent Golden Temple in Amritsar. Premium 3-day tour with Wagah Border ceremony, Jallianwala Bagh, Langar experience, and luxury transport. Starting ₹5,499/person.',
        'overview_heading' => 'Discover the Golden <span class="text-gradient-gold">City of Punjab</span>',
        'overview' => 'Amritsar — the spiritual and cultural heart of Sikhism — welcomes you with open arms and the shimmering golden reflection of the Harmandir Sahib (Golden Temple). This 3-day premium tour immerses you in the divine atmosphere of the world\'s most visited religious site, the patriotic fervor of the Wagah Border flag-lowering ceremony, and the poignant history of Jallianwala Bagh. Experience the world\'s largest free community kitchen (Langar) serving over 100,000 meals daily, explore the vibrant Hall Bazaar, and savor authentic Punjabi cuisine — from butter chicken to kulcha-chole at legendary eateries. A journey of faith, flavor, and unforgettable memories.',
        'highlights' => [
            'Golden Temple (Harmandir Sahib) darshan',
            'Wagah Border flag-lowering ceremony',
            'Jallianwala Bagh historical memorial',
            'Langar — world\'s largest community kitchen',
            'Partition Museum visit',
            'Authentic Punjabi culinary trail'
        ],
        'key_facts' => [
            'duration' => '3 Days / 2 Nights',
            'group_size' => '2–12 Persons',
            'best_season' => 'Oct – Mar (Pleasant), Baisakhi & Diwali',
            'difficulty' => 'Easy (Heritage Tour)',
            'pickup' => 'Delhi NCR / Amritsar Airport',
            'languages' => 'English, Hindi, Punjabi'
        ],
        'itinerary' => [
            [
                'time' => 'Day 1',
                'title' => 'Delhi to Amritsar — Golden Temple First Darshan',
                'desc' => 'Early morning departure from Delhi in a luxury AC vehicle (7-8 hours via NH44) or transfer from Amritsar Airport/Railway Station. Check into your premium hotel near the Golden Temple. After freshening up, visit the magnificent Harmandir Sahib (Golden Temple) for your first darshan. Witness the stunning gold-plated architecture reflecting in the sacred Amrit Sarovar (Pool of Nectar). Experience the soul-stirring continuous Kirtan (devotional hymns). Participate in the Langar — the world\'s largest free community kitchen. Evening walk through the illuminated Temple complex. Overnight in Amritsar.',
                'icon' => 'fa-solid fa-place-of-worship'
            ],
            [
                'time' => 'Day 2',
                'title' => 'Wagah Border, Jallianwala Bagh & Heritage Walk',
                'desc' => 'Morning visit to Jallianwala Bagh — the poignant memorial of the 1919 massacre. See the preserved bullet marks and the Martyrs\' Well. Visit the Partition Museum at Town Hall — India\'s first museum dedicated to the 1947 Partition. Lunch at a legendary Amritsari dhaba — enjoy kulcha-chole, amritsari naan, and lassi. Afternoon drive to the Wagah Border (30 km) for the electrifying flag-lowering ceremony between India and Pakistan. Return to the Golden Temple for the magical nighttime darshan when the temple glows golden against the dark sky. Overnight in Amritsar.',
                'icon' => 'fa-solid fa-flag'
            ],
            [
                'time' => 'Day 3',
                'title' => 'Morning Palki Sahib Ceremony & Return',
                'desc' => 'Wake early for the Palki Sahib ceremony (3:30 AM) — the sacred procession of the Guru Granth Sahib from the Akal Takht to the Golden Temple, accompanied by hymns and devotional fervor. After this spiritual start, enjoy breakfast and explore the vibrant Hall Bazaar for traditional Punjabi handicrafts, phulkari dupattas, and juttis. Visit the Gobindgarh Fort — a 250-year-old heritage fort with immersive shows. Post-lunch, begin the return journey to Delhi or transfer to Amritsar Airport. Arrive in Delhi by evening.',
                'icon' => 'fa-solid fa-hands-praying'
            ]
        ],
        'inclusions' => [
            'Luxury AC sedan/SUV (Delhi ↔ Amritsar roundtrip)',
            'Professional chauffeur with verified background',
            '2 nights premium hotel accommodation near Golden Temple',
            'All highway tolls & parking charges',
            'Wagah Border ceremony seating arrangement',
            'Sightseeing as per itinerary',
            'All applicable taxes (GST)',
            '24/7 on-call travel support'
        ],
        'exclusions' => [
            'Meals (lunch & dinner)',
            'Temple donation & prasad charges',
            'Gobindgarh Fort entry tickets',
            'Personal shopping & souvenirs',
            'Flight/train tickets (if not driving)',
            'Travel insurance',
            'Tips and gratuities'
        ],
        'gallery' => [
            [
                'src' => 'https://images.unsplash.com/photo-1599840309126-7ece88628ded?auto=format&fit=crop&w=800&q=80',
                'title' => 'Golden Temple — Harmandir Sahib'
            ],
            [
                'src' => 'https://images.unsplash.com/photo-1609947017136-9daa5f0c6fca?auto=format&fit=crop&w=800&q=80',
                'title' => 'Golden Temple Night Illumination'
            ],
            [
                'src' => 'https://images.unsplash.com/photo-1589308078059-be1415eab4c3?auto=format&fit=crop&w=800&q=80',
                'title' => 'Wagah Border Ceremony'
            ],
            [
                'src' => 'https://images.unsplash.com/photo-1590766940554-634ae3e0e1e5?auto=format&fit=crop&w=800&q=80',
                'title' => 'Jallianwala Bagh Memorial'
            ],
            [
                'src' => 'https://images.unsplash.com/photo-1605649487212-47bdab064df7?auto=format&fit=crop&w=800&q=80',
                'title' => 'Amritsar Heritage Architecture'
            ],
            [
                'src' => 'https://images.unsplash.com/photo-1636559072523-4fdb20adf25a?auto=format&fit=crop&w=800&q=80',
                'title' => 'Amritsari Culinary Delights'
            ]
        ],
        'pricing' => [
            [
                'vehicle' => 'Swift Dzire (Sedan)',
                'capacity' => '1–3 Guests',
                'price' => '₹5,499',
                'per' => 'per person',
                'icon' => 'fa-solid fa-car',
                'popular' => false
            ],
            [
                'vehicle' => 'Toyota Innova Crysta (SUV)',
                'capacity' => '1–6 Guests',
                'price' => '₹7,499',
                'per' => 'per person',
                'icon' => 'fa-solid fa-truck-pickup',
                'popular' => true
            ],
            [
                'vehicle' => 'Tempo Traveller (12-Seater)',
                'capacity' => '7–12 Guests',
                'price' => '₹4,499',
                'per' => 'per person',
                'icon' => 'fa-solid fa-van-shuttle',
                'popular' => false
            ]
        ],
        'trust_props' => [
            [
                'icon' => 'fa-solid fa-place-of-worship',
                'title' => 'Temple Specialist',
                'desc' => 'Guided darshan at optimal timings'
            ],
            [
                'icon' => 'fa-solid fa-flag',
                'title' => 'Wagah Border',
                'desc' => 'Reserved seating & transport arranged'
            ],
            [
                'icon' => 'fa-solid fa-utensils',
                'title' => 'Culinary Trail',
                'desc' => 'Authentic Amritsari food experiences'
            ],
            [
                'icon' => 'fa-solid fa-headset',
                'title' => '24/7 Trip Support',
                'desc' => 'Dedicated coordinator on call'
            ]
        ],
        'schema_tourist_type' => [
            'Pilgrimage',
            'Cultural',
            'Heritage'
        ],
        'schema_price' => '5499'
    ],
    'jaipur' => [
        'title' => 'Jaipur (Pink City) Tour',
        'subtitle' => 'The Royal Heritage of Rajasthan',
        'duration' => '3 Days / 2 Nights',
        'price' => '₹5,999',
        'image' => 'https://images.unsplash.com/photo-1603262110263-fb0112e7cc33?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8amFpcHVyfGVufDB8fDB8fHww',
        'link' => 'tours/jaipur',
        'rating' => '4.7',
        'reviews' => '142',
        'featured' => true,
        'page_title' => 'Jaipur (Pink City) Tour – 3 Day Royal Heritage Package',
        'page_desc' => 'Explore the royal heritage of Jaipur Pink City. Premium 3-day tour with Amber Fort, Hawa Mahal, City Palace, elephant rides, and luxury transport from Delhi. Starting ₹5,999/person.',
        'overview_heading' => 'Royal Heritage of <span class="text-gradient-gold">The Pink City</span>',
        'overview' => 'Step into the regal world of Rajputana grandeur with this immersive 3-day tour of Jaipur — the magnificent Pink City and capital of Rajasthan. From the imposing Amber Fort perched on hilltops to the iconic wind-catching façade of Hawa Mahal, from the opulent City Palace to the astronomical precision of Jantar Mantar, every corner of Jaipur tells a story of royal ambition and artistic mastery. Experience the vibrant bazaars of Johari Bazaar and Bapu Bazaar, savor authentic Rajasthani thali meals, and witness the magical sunset from Nahargarh Fort. This tour is a feast for history lovers, photographers, and anyone who wants to experience India\'s royal heritage at its finest.',
        'highlights' => [
            'Amber Fort with elephant/jeep ride',
            'Hawa Mahal (Palace of Winds) visit',
            'City Palace museum exploration',
            'Jantar Mantar (UNESCO Observatory)',
            'Nahargarh Fort sunset viewpoint',
            'Traditional Rajasthani dinner experience'
        ],
        'key_facts' => [
            'duration' => '3 Days / 2 Nights',
            'group_size' => '2–10 Persons',
            'best_season' => 'Oct – Mar (Pleasant), Jaipur Literature Fest',
            'difficulty' => 'Easy (Heritage Tour)',
            'pickup' => 'Delhi NCR / Jaipur Airport',
            'languages' => 'English, Hindi'
        ],
        'itinerary' => [
            [
                'time' => 'Day 1',
                'title' => 'Delhi to Jaipur — Amber Fort & Evening Bazaars',
                'desc' => 'Early morning departure from Delhi in a luxury AC vehicle (5 hours via NH48 Expressway). Arrive in Jaipur and proceed directly to the magnificent Amber Fort — ride up the hill by elephant or jeep and explore the Sheesh Mahal (Mirror Palace), Ganesh Pol, and the stunning Maota Lake views. After lunch at a heritage restaurant, visit Jal Mahal (Water Palace) for photos from the lakeside. Evening free to explore the colorful Johari Bazaar and Bapu Bazaar for traditional Rajasthani handicrafts, gems, and textiles. Overnight in Jaipur.',
                'icon' => 'fa-solid fa-chess-rook'
            ],
            [
                'time' => 'Day 2',
                'title' => 'Pink City Heritage Trail — Palaces & Observatories',
                'desc' => 'After breakfast, begin the full-day Pink City heritage trail. Visit the iconic Hawa Mahal — the Palace of Winds with its 953 honeycomb windows. Explore the opulent City Palace — a stunning blend of Rajput and Mughal architecture still partially occupied by the royal family. Walk through the UNESCO-listed Jantar Mantar observatory with its massive astronomical instruments. Afternoon visit to Albert Hall Museum for Rajasthani art and artifacts. Evening drive to Nahargarh Fort for a spectacular sunset over the Pink City. Traditional Rajasthani thali dinner at a heritage haveli. Overnight in Jaipur.',
                'icon' => 'fa-solid fa-landmark'
            ],
            [
                'time' => 'Day 3',
                'title' => 'Birla Mandir, Local Crafts & Return',
                'desc' => 'Morning visit to the pristine white marble Birla Mandir (Laxmi Narayan Temple). Explore the vibrant Tripolia Bazaar and visit a traditional block-printing or blue pottery workshop to see artisans at work. Optional: Visit Elefantastic — an ethical elephant sanctuary experience. Post-lunch, begin the comfortable return drive to Delhi via the expressway. Arrive in Delhi by evening. Alternatively, transfer to Jaipur Airport for your onward journey.',
                'icon' => 'fa-solid fa-palette'
            ]
        ],
        'inclusions' => [
            'Luxury AC sedan/SUV (Delhi ↔ Jaipur roundtrip)',
            'Professional chauffeur with verified background',
            '2 nights premium hotel/heritage haveli accommodation',
            'All highway tolls & parking charges',
            'Sightseeing as per itinerary',
            'Traditional Rajasthani dinner (1 evening)',
            'All applicable taxes (GST)',
            '24/7 on-call travel support'
        ],
        'exclusions' => [
            'Lunch and personal meals (except included dinner)',
            'Monument entry tickets',
            'Elephant/jeep ride at Amber Fort',
            'Camera/video permits at monuments',
            'Personal shopping & souvenirs',
            'Travel insurance',
            'Tips and gratuities'
        ],
        'gallery' => [
            [
                'src' => 'https://images.unsplash.com/photo-1603262110263-fb0112e7cc33?auto=format&fit=crop&w=800&q=80',
                'title' => 'Jaipur — The Pink City Skyline'
            ],
            [
                'src' => 'https://images.unsplash.com/photo-1599661046289-e31897846e41?auto=format&fit=crop&w=800&q=80',
                'title' => 'Amber Fort Majestic Architecture'
            ],
            [
                'src' => 'https://images.unsplash.com/photo-1477587458883-47145ed94245?auto=format&fit=crop&w=800&q=80',
                'title' => 'Hawa Mahal — Palace of Winds'
            ],
            [
                'src' => 'https://images.unsplash.com/photo-1602216056096-3b40cc0c9944?auto=format&fit=crop&w=800&q=80',
                'title' => 'City Palace Royal Courtyard'
            ],
            [
                'src' => 'https://images.unsplash.com/photo-1590766940554-634ae3e0e1e5?auto=format&fit=crop&w=800&q=80',
                'title' => 'Nahargarh Fort Sunset View'
            ],
            [
                'src' => 'https://images.unsplash.com/photo-1605649487212-47bdab064df7?auto=format&fit=crop&w=800&q=80',
                'title' => 'Rajasthani Heritage & Crafts'
            ]
        ],
        'pricing' => [
            [
                'vehicle' => 'Swift Dzire (Sedan)',
                'capacity' => '1–3 Guests',
                'price' => '₹5,999',
                'per' => 'per person',
                'icon' => 'fa-solid fa-car',
                'popular' => false
            ],
            [
                'vehicle' => 'Toyota Innova Crysta (SUV)',
                'capacity' => '1–6 Guests',
                'price' => '₹7,999',
                'per' => 'per person',
                'icon' => 'fa-solid fa-truck-pickup',
                'popular' => true
            ],
            [
                'vehicle' => 'Tempo Traveller (12-Seater)',
                'capacity' => '7–12 Guests',
                'price' => '₹4,999',
                'per' => 'per person',
                'icon' => 'fa-solid fa-van-shuttle',
                'popular' => false
            ]
        ],
        'trust_props' => [
            [
                'icon' => 'fa-solid fa-chess-rook',
                'title' => 'Royal Heritage',
                'desc' => 'Expert guides for palace & fort tours'
            ],
            [
                'icon' => 'fa-solid fa-hotel',
                'title' => 'Heritage Havelis',
                'desc' => 'Stay in authentic Rajasthani properties'
            ],
            [
                'icon' => 'fa-solid fa-palette',
                'title' => 'Cultural Immersion',
                'desc' => 'Artisan workshops & culinary trails'
            ],
            [
                'icon' => 'fa-solid fa-headset',
                'title' => '24/7 Trip Support',
                'desc' => 'Dedicated travel coordinator on call'
            ]
        ],
        'schema_tourist_type' => [
            'Leisure',
            'Cultural',
            'Heritage'
        ],
        'schema_price' => '5999'
    ]
];
