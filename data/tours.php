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
    'agra' => [
        'title' => 'Agra Tour',
        'subtitle' => 'The Monument of Love',
        'duration' => '2 Days / 1 Night',
        'price' => 0,
        'image' => BASE_URL . 'assets/images/tours/agra-hero.webp',
        'link' => 'tours/agra',
        'rating' => '4.9',
        'reviews' => '120',
        'featured' => true,
        'page_title' => 'Agra Tour – Premium 2-Day Historical Getaway',
        'page_desc' => 'Experience the rich heritage of Agra with our premium 2-day Agra tour from Delhi. Includes Taj Mahal at sunrise, Agra Fort, Baby Taj, Sikandra, and luxury stays.',
        'overview_heading' => 'Discover the Eternal <span class="text-gradient-gold">Mughal Grandeur</span>',
        'overview' => 'Embark on a memorable 2-day luxury tour to Agra, the legendary city of the Taj Mahal. Travel from Delhi via the Yamuna Expressway in a premium private vehicle. Experience the stunning Taj Mahal at sunrise, the majestic Agra Fort, the exquisite Itimad-ud-Daulah (Baby Taj), and the historical Sikandra (Akbar\'s Tomb). Savor local delicacies, explore bustling markets, and enjoy a comfortable overnight stay at a premium hotel, making this a perfect weekend getaway.',
        'highlights' => [
            'Sunrise view of the Taj Mahal',
            'Visit Agra Fort (UNESCO World Heritage)',
            'Explore Itimad-ud-Daulah (Baby Taj)',
            'Discover Sikandra (Akbar\'s Tomb)',
            'Sunset views at Mehtab Bagh gardens',
            'Private Cab / Tempo Traveller transport',
            'Breakfast & dinner included at hotel'
        ],
        'key_facts' => [
            'duration' => '2 Days / 1 Night',
            'group_size' => '1–8 Persons',
            'best_season' => 'Oct – Mar (Winter)',
            'difficulty' => 'Easy (Walking Tour)',
            'pickup' => 'Delhi NCR (Hotel/Airport)',
            'languages' => 'English, Hindi'
        ],
        'itinerary' => [
            [
                'time' => 'Day 1',
                'title' => 'Delhi to Agra — Drive & Initial Exploration',
                'desc' => 'Morning pickup from Delhi in a premium private vehicle. Drive to Agra via the Yamuna Expressway. Upon arrival, check in to your hotel and relax. In the afternoon, visit the magnificent red sandstone Agra Fort, explore the beautiful Mehtab Bagh gardens overlooking the Taj Mahal, and browse local markets. Savor a delicious dinner at the hotel. Overnight stay in Agra.',
                'icon' => 'fa-solid fa-car-side'
            ],
            [
                'time' => 'Day 2',
                'title' => 'Agra Sightseeing & Return Journey',
                'desc' => 'Early morning visit to the iconic Taj Mahal to witness its breathtaking beauty at sunrise. Return to the hotel for breakfast. After check-out, visit the exquisite Itimad-ud-Daulah (Baby Taj) and Sikandra (Akbar\'s Tomb). Later, embark on the comfortable drive back to Delhi with drop-off at your preferred location.',
                'icon' => 'fa-solid fa-mosque'
            ]
        ],
        'inclusions' => [
            '1 Night Hotel Accommodation',
            'Welcome Drink on Arrival',
            '1 Breakfast & 1 Dinner included at the hotel',
            'Private Vehicle (AC Sedan/SUV/Tempo Traveller) for the Entire Tour',
            'All highway tolls, parking, and driver allowance charges',
            'Sightseeing as per the itinerary',
            'All applicable taxes (GST)',
            '24/7 on-call travel support'
        ],
        'exclusions' => [
            'Monument entry tickets',
            'Personal expenses (shopping, laundry, tips, etc.)',
            'Lunch and personal meals',
            'Anything not explicitly mentioned in inclusions'
        ],
        'gallery' => [
            [
                'src' => BASE_URL . 'assets/images/tours/agra-hero.webp',
                'title' => 'Taj Mahal — The Monument of Love'
            ],
            [
                'src' => BASE_URL . 'assets/images/tours/agra-gallery-2.webp',
                'title' => 'Taj Mahal Reflection Pool'
            ],
            [
                'src' => BASE_URL . 'assets/images/tours/agra-gallery-3.webp',
                'title' => 'Agra Fort — Red Sandstone Fortress'
            ],
            [
                'src' => BASE_URL . 'assets/images/tours/agra-hero.webp',
                'title' => 'Mehtab Bagh Panoramic View'
            ],
            [
                'src' => BASE_URL . 'assets/images/tours/agra-hero.webp',
                'title' => 'Taj Mahal at Golden Hour'
            ],
            [
                'src' => BASE_URL . 'assets/images/tours/agra-hero.webp',
                'title' => 'Heritage Architecture of Agra'
            ]
        ],
        'pricing' => [
            [
                'vehicle' => 'Swift Dzire (Sedan)',
                'capacity' => '1–4 Guests',
                'price' => 0,
                'per' => 'per person',
                'icon' => 'fa-solid fa-car',
                'popular' => false
            ],
            [
                'vehicle' => 'Toyota Innova Crysta (SUV)',
                'capacity' => '1–6 Guests',
                'price' => 0,
                'per' => 'per person',
                'icon' => 'fa-solid fa-truck-pickup',
                'popular' => true
            ],
            [
                'vehicle' => 'Tempo Traveller (12-Seater)',
                'capacity' => '7–12 Guests',
                'price' => 0,
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
        'schema_price' => '0'
    ],
    'shimla-manali' => [
        'title' => 'Shimla & Manali Tour',
        'subtitle' => 'The Majestic Himalayas',
        'duration' => '6 Days / 5 Nights',
        'price' => 0,
        'image' => BASE_URL . 'assets/images/tours/shimla-hero.webp',
        'link' => 'tours/shimla-manali',
        'rating' => '4.8',
        'reviews' => '245',
        'featured' => true,
        'page_title' => 'Shimla & Manali Tour – 6 Day Premium Himalayan Package',
        'page_desc' => 'Discover the majestic Himalayas with our 6-day premium Shimla & Manali tour from Delhi. Snow-capped peaks, lush valleys, adventure activities, and luxury stays. Best rates guaranteed.',
        'overview_heading' => 'Experience the Majestic <span class="text-gradient-gold">Himalayan Beauty</span>',
        'overview' => 'Embark on a breathtaking 6-day journey through the crown jewels of Himachal Pradesh — Shimla and Manali. From the colonial charm of Shimla\'s Mall Road and the panoramic vistas at Kufri to the snow-capped splendor of Solang Valley and the ancient Hadimba Temple in Manali, this tour weaves together adventure, culture, and relaxation in the most stunning mountain setting. Travel in luxury vehicles through winding mountain roads with dramatic valley views, stay in premium hillside hotels, and create memories that last a lifetime. Perfect for families, couples, and friend groups seeking the ultimate Himalayan escape.',
        'highlights' => [
            'Shimla Sightseeing & Mall Road Walk',
            'Kufri Excursion & Panoramic Vistas',
            'Kullu Valley Visit & River Crossing',
            'Solang Valley Adventure & Activities',
            'Manali Local Sightseeing & Temples',
            'Private Cab / Tempo Traveller Transport',
            'Premium Hotel Stays with Breakfast & Dinner'
        ],
        'key_facts' => [
            'duration' => '6 Days / 5 Nights',
            'group_size' => '2–12 Persons',
            'best_season' => 'Oct – Mar (Snow), Apr – Jun (Pleasant)',
            'difficulty' => 'Easy to Moderate',
            'pickup' => 'Delhi NCR (Hotel/Airport)',
            'languages' => 'English, Hindi'
        ],
        'itinerary' => [
            [
                'time' => 'Day 1',
                'title' => 'Delhi to Shimla — Scenic Himalayan Drive',
                'desc' => 'Morning pickup from Delhi (airport, railway station, or hotel). Embark on a scenic drive to Shimla, enjoying the winding roads and mountain views. Upon arrival, check in to your hotel. Savor a delicious dinner and enjoy a comfortable overnight stay in Shimla.',
                'icon' => 'fa-solid fa-mountain-sun'
            ],
            [
                'time' => 'Day 2',
                'title' => 'Shimla & Kufri Sightseeing — Pine Valleys & Heritage Walks',
                'desc' => 'After breakfast, enjoy an excursion to Kufri, famous for its scenic beauty, pine forests, and adventure activities. En route, visit the beautiful Green Valley. In the afternoon, return to Shimla to explore the iconic Mall Road, The Ridge, historic Christ Church, and Lakkar Bazaar for local woodcraft shopping. Dinner and overnight stay in Shimla.',
                'icon' => 'fa-solid fa-church'
            ],
            [
                'time' => 'Day 3',
                'title' => 'Shimla to Manali — Journey via Kullu Valley & Pandoh Dam',
                'desc' => 'Check out from the Shimla hotel after breakfast. Depart for Manali, a spectacular drive passing through Kullu Valley, Pandoh Dam, and Hanogi Mata Temple. Upon arriving in Manali, check in at your hotel. Enjoy a warm dinner and rest overnight in Manali.',
                'icon' => 'fa-solid fa-road'
            ],
            [
                'time' => 'Day 4',
                'title' => 'Solang Valley Excursion — Adventure & Panoramas',
                'desc' => 'After breakfast, head out for a thrilling excursion to Solang Valley. Renowned for its stunning mountain views and glaciers, it is the perfect spot for optional adventure activities like paragliding, zorbing, quad biking, and cable car rides. Return to Manali in the evening for dinner and overnight stay.',
                'icon' => 'fa-solid fa-person-skiing'
            ],
            [
                'time' => 'Day 5',
                'title' => 'Manali Local Sightseeing — Historic Temples & Nature Trails',
                'desc' => 'Spend the day exploring local sights in Manali. Visit the ancient wooden Hadimba Devi Temple built in 1553, the hot sulfur springs and temple of Vashisht, the Club House, and the peaceful Van Vihar. In the evening, take a leisurely walk along Mall Road. Dinner and overnight stay in Manali.',
                'icon' => 'fa-solid fa-tree'
            ],
            [
                'time' => 'Day 6',
                'title' => 'Manali to Delhi — Return Journey',
                'desc' => 'After breakfast, check out from the hotel and begin the return journey to Delhi. Travel back with wonderful memories of your Himalayan holiday. Drop-off at your designated location in Delhi.',
                'icon' => 'fa-solid fa-house-chimney'
            ]
        ],
        'inclusions' => [
            'Private Vehicle / Cab / Tempo Traveller (Delhi ↔ Shimla ↔ Manali roundtrip)',
            'Professional chauffeur experienced in mountain driving & driver charges',
            '5 nights premium hotel accommodation (2N Shimla + 3N Manali)',
            'Daily Breakfast & Dinner included at the hotels',
            'All highway tolls, parking & fuel charges',
            'Sightseeing as per the itinerary',
            'All applicable taxes (GST)',
            '24/7 on-call travel support'
        ],
        'exclusions' => [
            'Airfare / Train Tickets to/from Delhi',
            'Adventure activity charges (paragliding, skiing, etc.)',
            'Rohtang Pass/Rohtang charges & Atal Tunnel permit fees',
            'Personal expenses, shopping & souvenirs',
            'Lunch and any extra meals not specified in inclusions',
            'Travel insurance',
            'Tips and gratuities'
        ],
        'gallery' => [
            [
                'src' => BASE_URL . 'assets/images/tours/shimla-hero.webp',
                'title' => 'Shimla — Queen of Hills'
            ],
            [
                'src' => BASE_URL . 'assets/images/tours/shimla-hero.webp',
                'title' => 'Mall Road Colonial Charm'
            ],
            [
                'src' => BASE_URL . 'assets/images/tours/shimla-hero.webp',
                'title' => 'Snow-Capped Himalayan Peaks'
            ],
            [
                'src' => BASE_URL . 'assets/images/tours/shimla-hero.webp',
                'title' => 'Solang Valley Adventures'
            ],
            [
                'src' => BASE_URL . 'assets/images/tours/shimla-hero.webp',
                'title' => 'Hadimba Temple in Manali'
            ],
            [
                'src' => BASE_URL . 'assets/images/tours/shimla-hero.webp',
                'title' => 'Kullu Valley Panorama'
            ]
        ],
        'pricing' => [
            [
                'vehicle' => 'Swift Dzire (Sedan)',
                'capacity' => '1–3 Guests',
                'price' => 0,
                'per' => 'per person',
                'icon' => 'fa-solid fa-car',
                'popular' => false
            ],
            [
                'vehicle' => 'Toyota Innova Crysta (SUV)',
                'capacity' => '1–6 Guests',
                'price' => 0,
                'per' => 'per person',
                'icon' => 'fa-solid fa-truck-pickup',
                'popular' => true
            ],
            [
                'vehicle' => 'Tempo Traveller (12-Seater)',
                'capacity' => '7–12 Guests',
                'price' => 0,
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
        'schema_price' => '0'
    ],
    'rishikesh' => [
        'title' => 'Rishikesh Adventure Tour',
        'subtitle' => 'Spiritual & Adventure Capital',
        'duration' => '3 Days / 2 Nights',
        'price' => 0,
        'image' => BASE_URL . 'assets/images/tours/rishikesh-hero.webp',
        'link' => 'tours/rishikesh',
        'rating' => '4.7',
        'reviews' => '98',
        'featured' => true,
        'page_title' => 'Rishikesh Adventure Tour – 3 Day Spiritual & Rafting Package',
        'page_desc' => 'Experience the thrill of white-water rafting, bungee jumping, and spiritual serenity in Rishikesh. 3-day premium adventure tour from Delhi with luxury transport. Best rates guaranteed.',
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
                'src' => BASE_URL . 'assets/images/tours/rishikesh-hero.webp',
                'title' => 'Rishikesh — Yoga Capital of the World'
            ],
            [
                'src' => BASE_URL . 'assets/images/tours/rishikesh-gallery-1.webp',
                'title' => 'White-Water Rafting on the Ganges'
            ],
            [
                'src' => BASE_URL . 'assets/images/tours/rishikesh-hero.webp',
                'title' => 'Laxman Jhula Suspension Bridge'
            ],
            [
                'src' => BASE_URL . 'assets/images/tours/rishikesh-hero.webp',
                'title' => 'Sacred Ganga Aarti Ceremony'
            ],
            [
                'src' => BASE_URL . 'assets/images/tours/rishikesh-hero.webp',
                'title' => 'Beatles Ashram Graffiti Art'
            ],
            [
                'src' => BASE_URL . 'assets/images/tours/rishikesh-gallery-3.webp',
                'title' => 'Riverside Camping Experience'
            ]
        ],
        'pricing' => [
            [
                'vehicle' => 'Swift Dzire (Sedan)',
                'capacity' => '1–3 Guests',
                'price' => 0,
                'per' => 'per person',
                'icon' => 'fa-solid fa-car',
                'popular' => false
            ],
            [
                'vehicle' => 'Toyota Innova Crysta (SUV)',
                'capacity' => '1–6 Guests',
                'price' => 0,
                'per' => 'per person',
                'icon' => 'fa-solid fa-truck-pickup',
                'popular' => true
            ],
            [
                'vehicle' => 'Tempo Traveller (12-Seater)',
                'capacity' => '7–12 Guests',
                'price' => 0,
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
        'schema_price' => '0'
    ],
    'vrindavan' => [
        'title' => 'Vrindavan & Mathura Tour',
        'subtitle' => 'The Land of Lord Krishna',
        'duration' => '2 Days / 1 Night',
        'price' => 0,
        'image' => BASE_URL . 'assets/images/tours/vrindavan-card.jpg',
        'link' => 'tours/vrindavan',
        'rating' => '4.9',
        'reviews' => '180',
        'featured' => false,
        'page_title' => 'Vrindavan & Mathura Tour – 2 Day Divine Pilgrimage Package',
        'page_desc' => 'Visit the sacred land of Lord Krishna. Premium 2-day Vrindavan & Mathura tour from Delhi with temple visits, Yamuna Aarti, and luxury transport. Best rates guaranteed.',
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
                'src' => BASE_URL . 'assets/images/tours/vrindavan-hero.webp',
                'title' => 'Vrindavan — Land of Lord Krishna'
            ],
            [
                'src' => BASE_URL . 'assets/images/tours/vrindavan-hero.webp',
                'title' => 'Prem Mandir White Marble Temple'
            ],
            [
                'src' => BASE_URL . 'assets/images/tours/vrindavan-hero.webp',
                'title' => 'ISKCON Temple Vrindavan'
            ],
            [
                'src' => BASE_URL . 'assets/images/tours/vrindavan-hero.webp',
                'title' => 'Yamuna Aarti at Vishram Ghat'
            ],
            [
                'src' => BASE_URL . 'assets/images/tours/vrindavan-hero.webp',
                'title' => 'Colorful Lanes of Vrindavan'
            ],
            [
                'src' => BASE_URL . 'assets/images/tours/vrindavan-hero.webp',
                'title' => 'Krishna Janmabhoomi Temple'
            ]
        ],
        'pricing' => [
            [
                'vehicle' => 'Swift Dzire (Sedan)',
                'capacity' => '1–4 Guests',
                'price' => 0,
                'per' => 'per person',
                'icon' => 'fa-solid fa-car',
                'popular' => false
            ],
            [
                'vehicle' => 'Toyota Innova Crysta (SUV)',
                'capacity' => '1–6 Guests',
                'price' => 0,
                'per' => 'per person',
                'icon' => 'fa-solid fa-truck-pickup',
                'popular' => true
            ],
            [
                'vehicle' => 'Tempo Traveller (12-Seater)',
                'capacity' => '7–12 Guests',
                'price' => 0,
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
        'schema_price' => '0'
    ],
    'ayodhya' => [
        'title' => 'Ayodhya Ram Mandir Tour',
        'subtitle' => 'The Holy Birthplace',
        'duration' => '2 Days / 1 Night',
        'price' => 0,
        'image' => BASE_URL . 'assets/images/tours/ayodhya-hero.webp',
        'link' => 'tours/ayodhya',
        'rating' => '4.9',
        'reviews' => '310',
        'featured' => true,
        'page_title' => 'Ayodhya Ram Mandir Tour – 2 Day Divine Pilgrimage Package',
        'page_desc' => 'Visit the magnificent Ram Mandir in Ayodhya. Premium 2-day pilgrimage tour from Delhi with temple visits, Saryu Aarti, and luxury transport. Best rates guaranteed.',
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
                'src' => BASE_URL . 'assets/images/tours/ayodhya-hero.webp',
                'title' => 'Shri Ram Janmabhoomi Mandir'
            ],
            [
                'src' => BASE_URL . 'assets/images/tours/ayodhya-hero.webp',
                'title' => 'Ram Mandir Architecture Detail'
            ],
            [
                'src' => BASE_URL . 'assets/images/tours/ayodhya-hero.webp',
                'title' => 'Saryu River Evening Aarti'
            ],
            [
                'src' => BASE_URL . 'assets/images/tours/ayodhya-hero.webp',
                'title' => 'Hanuman Garhi Hilltop Temple'
            ],
            [
                'src' => BASE_URL . 'assets/images/tours/ayodhya-hero.webp',
                'title' => 'Sacred Ayodhya Heritage Walk'
            ],
            [
                'src' => BASE_URL . 'assets/images/tours/ayodhya-hero.webp',
                'title' => 'Illuminated Ram Path at Night'
            ]
        ],
        'pricing' => [
            [
                'vehicle' => 'Swift Dzire (Sedan)',
                'capacity' => '1–4 Guests',
                'price' => 0,
                'per' => 'per person',
                'icon' => 'fa-solid fa-car',
                'popular' => false
            ],
            [
                'vehicle' => 'Toyota Innova Crysta (SUV)',
                'capacity' => '1–6 Guests',
                'price' => 0,
                'per' => 'per person',
                'icon' => 'fa-solid fa-truck-pickup',
                'popular' => true
            ],
            [
                'vehicle' => 'Tempo Traveller (12-Seater)',
                'capacity' => '7–12 Guests',
                'price' => 0,
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
        'schema_price' => '0'
    ],
    'mahakaleshwar' => [
        'title' => 'Ujjain Mahakaleshwar Tour',
        'subtitle' => 'The Sacred Jyotirlinga',
        'duration' => '3 Days / 2 Nights',
        'price' => 0,
        'image' => BASE_URL . 'assets/images/tours/mahakaleshwar-hero.webp',
        'link' => 'tours/mahakaleshwar',
        'rating' => '4.8',
        'reviews' => '150',
        'featured' => false,
        'page_title' => 'Ujjain Mahakaleshwar Tour – 3 Day Sacred Jyotirlinga Package',
        'page_desc' => 'Visit the sacred Mahakaleshwar Jyotirlinga in Ujjain. Premium 3-day spiritual tour with Bhasma Aarti, temple visits, and luxury transport from Delhi. Best rates guaranteed.',
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
                'src' => BASE_URL . 'assets/images/tours/mahakaleshwar-hero.webp',
                'title' => 'Mahakaleshwar Temple — Sacred Jyotirlinga'
            ],
            [
                'src' => BASE_URL . 'assets/images/tours/mahakaleshwar-hero.webp',
                'title' => 'Bhasma Aarti Spiritual Ceremony'
            ],
            [
                'src' => BASE_URL . 'assets/images/tours/mahakaleshwar-hero.webp',
                'title' => 'Ram Ghat on Shipra River'
            ],
            [
                'src' => BASE_URL . 'assets/images/tours/mahakaleshwar-hero.webp',
                'title' => 'Evening Aarti at Ram Ghat'
            ],
            [
                'src' => BASE_URL . 'assets/images/tours/mahakaleshwar-hero.webp',
                'title' => 'Kal Bhairav Temple Ancient Shrine'
            ],
            [
                'src' => BASE_URL . 'assets/images/tours/mahakaleshwar-hero.webp',
                'title' => 'Ujjain Heritage Architecture'
            ]
        ],
        'pricing' => [
            [
                'vehicle' => 'Swift Dzire (Sedan)',
                'capacity' => '1–4 Guests',
                'price' => 0,
                'per' => 'per person',
                'icon' => 'fa-solid fa-car',
                'popular' => false
            ],
            [
                'vehicle' => 'Toyota Innova Crysta (SUV)',
                'capacity' => '1–6 Guests',
                'price' => 0,
                'per' => 'per person',
                'icon' => 'fa-solid fa-truck-pickup',
                'popular' => true
            ],
            [
                'vehicle' => 'Tempo Traveller (12-Seater)',
                'capacity' => '7–12 Guests',
                'price' => 0,
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
        'schema_price' => '0'
    ],
    'golden-temple' => [
        'title' => 'Amritsar Golden Temple Tour',
        'subtitle' => 'Spiritual Peace & Patriotism',
        'duration' => '3 Days / 2 Nights',
        'price' => 0,
        'image' => BASE_URL . 'assets/images/tours/golden-temple-hero.webp',
        'link' => 'tours/golden-temple',
        'rating' => '4.8',
        'reviews' => '115',
        'featured' => false,
        'page_title' => 'Amritsar Golden Temple Tour – 3 Day Spiritual & Heritage Package',
        'page_desc' => 'Visit the magnificent Golden Temple in Amritsar. Premium 3-day tour with Wagah Border ceremony, Jallianwala Bagh, Langar experience, and luxury transport. Best rates guaranteed.',
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
                'src' => BASE_URL . 'assets/images/tours/golden-temple-hero.webp',
                'title' => 'Golden Temple — Harmandir Sahib'
            ],
            [
                'src' => BASE_URL . 'assets/images/tours/golden-temple-hero.webp',
                'title' => 'Golden Temple Night Illumination'
            ],
            [
                'src' => BASE_URL . 'assets/images/tours/golden-temple-hero.webp',
                'title' => 'Wagah Border Ceremony'
            ],
            [
                'src' => BASE_URL . 'assets/images/tours/golden-temple-hero.webp',
                'title' => 'Jallianwala Bagh Memorial'
            ],
            [
                'src' => BASE_URL . 'assets/images/tours/golden-temple-hero.webp',
                'title' => 'Amritsar Heritage Architecture'
            ],
            [
                'src' => BASE_URL . 'assets/images/tours/golden-temple-hero.webp',
                'title' => 'Amritsari Culinary Delights'
            ]
        ],
        'pricing' => [
            [
                'vehicle' => 'Swift Dzire (Sedan)',
                'capacity' => '1–3 Guests',
                'price' => 0,
                'per' => 'per person',
                'icon' => 'fa-solid fa-car',
                'popular' => false
            ],
            [
                'vehicle' => 'Toyota Innova Crysta (SUV)',
                'capacity' => '1–6 Guests',
                'price' => 0,
                'per' => 'per person',
                'icon' => 'fa-solid fa-truck-pickup',
                'popular' => true
            ],
            [
                'vehicle' => 'Tempo Traveller (12-Seater)',
                'capacity' => '7–12 Guests',
                'price' => 0,
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
        'schema_price' => '0'
    ],
    'jaipur' => [
        'title' => 'Jaipur (Pink City) Tour',
        'subtitle' => 'The Royal Heritage of Rajasthan',
        'duration' => '3 Days / 2 Nights',
        'price' => 0,
        'image' => BASE_URL . 'assets/images/tours/jaipur-hero.webp',
        'link' => 'tours/jaipur',
        'rating' => '4.7',
        'reviews' => '142',
        'featured' => true,
        'page_title' => 'Jaipur (Pink City) Tour – 3 Day Royal Heritage Package',
        'page_desc' => 'Explore the royal heritage of Jaipur Pink City. Premium 3-day tour with Amber Fort, Hawa Mahal, City Palace, elephant rides, and luxury transport from Delhi. Best rates guaranteed.',
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
                'src' => BASE_URL . 'assets/images/tours/jaipur-hero.webp',
                'title' => 'Jaipur — The Pink City Skyline'
            ],
            [
                'src' => BASE_URL . 'assets/images/tours/jaipur-hero.webp',
                'title' => 'Amber Fort Majestic Architecture'
            ],
            [
                'src' => BASE_URL . 'assets/images/tours/jaipur-hero.webp',
                'title' => 'Hawa Mahal — Palace of Winds'
            ],
            [
                'src' => BASE_URL . 'assets/images/tours/jaipur-hero.webp',
                'title' => 'City Palace Royal Courtyard'
            ],
            [
                'src' => BASE_URL . 'assets/images/tours/jaipur-hero.webp',
                'title' => 'Nahargarh Fort Sunset View'
            ],
            [
                'src' => BASE_URL . 'assets/images/tours/jaipur-hero.webp',
                'title' => 'Rajasthani Heritage & Crafts'
            ]
        ],
        'pricing' => [
            [
                'vehicle' => 'Swift Dzire (Sedan)',
                'capacity' => '1–3 Guests',
                'price' => 0,
                'per' => 'per person',
                'icon' => 'fa-solid fa-car',
                'popular' => false
            ],
            [
                'vehicle' => 'Toyota Innova Crysta (SUV)',
                'capacity' => '1–6 Guests',
                'price' => 0,
                'per' => 'per person',
                'icon' => 'fa-solid fa-truck-pickup',
                'popular' => true
            ],
            [
                'vehicle' => 'Tempo Traveller (12-Seater)',
                'capacity' => '7–12 Guests',
                'price' => 0,
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
        'schema_price' => '0'
    ],
    'nainital' => [
        'title' => 'Nainital Tour Package',
        'subtitle' => 'The Lake City of India',
        'duration' => '3 Days / 2 Nights',
        'price' => 0,
        'image' => BASE_URL . 'assets/images/tours/nainital-card.jpg',
        'link' => 'tours/nainital',
        'rating' => '4.8',
        'reviews' => '150',
        'featured' => false,
        'page_title' => 'Nainital Tour Package – Premium 3-Day Hill Station Getaway',
        'page_desc' => 'Book our premium 3-day Nainital tour package from Delhi. Experience Naini Lake boating, Mall Road shopping, Snow View Point, Naina Devi Temple, and beautiful lake tours.',
        'overview_heading' => 'Experience the Serene Beauty of <span class="text-gradient-gold">Nainital</span>',
        'overview' => 'Escape to Nainital, the breathtaking lake city nestled in the hills of Uttarakhand. This premium 3-day tour takes you from Delhi to the peaceful valleys of Kumaon. Enjoy private boating on the pristine Naini Lake, explore the colonial charm of Mall Road, visit the sacred Naina Devi Temple, and witness panoramic Himalayan views from Snow View Point. With luxury transportation, handpicked accommodations, and an exquisite itinerary, it is the perfect relaxing holiday for families, couples, and groups.',
        'highlights' => [
            'Private boating on pristine Naini Lake',
            'Explore the iconic Mall Road',
            'Panoramic views from Snow View Point',
            'Visit the sacred Naina Devi Temple',
            'Excursion to Bhimtal, Sattal & Naukuchiatal',
            'Private Cab / Tempo Traveller transport',
            'Breakfast & dinner included at hotel'
        ],
        'key_facts' => [
            'duration' => '3 Days / 2 Nights',
            'group_size' => '2–12 Persons',
            'best_season' => 'Mar – Jun (Summer), Oct – Feb (Winter)',
            'difficulty' => 'Easy (Hill Station Tour)',
            'pickup' => 'Delhi NCR (Hotel/Airport)',
            'languages' => 'English, Hindi'
        ],
        'itinerary' => [
            [
                'time' => 'Day 1',
                'title' => 'Delhi to Nainital — Arrival & Evening Walk',
                'desc' => 'Morning pickup from your preferred location in Delhi NCR. Drive towards Nainital, enjoying the changing landscapes as you climb into the hills of Uttarakhand. Upon arrival, check in to your premium hotel and relax. In the evening, stroll along the famous Mall Road and enjoy a scenic private boating experience on the serene Naini Lake. Savor a delicious dinner at the hotel. Overnight stay in Nainital.',
                'icon' => 'fa-solid fa-car-side'
            ],
            [
                'time' => 'Day 2',
                'title' => 'Nainital Local Sightseeing — Lakes, Temples & View Points',
                'desc' => 'Start the day with a hearty breakfast at the hotel. Visit the sacred Naina Devi Temple on the banks of Naini Lake. Head to the Eco Cave Gardens and ride the ropeway to Snow View Point for stunning panoramic views of the snow-capped Himalayas. Explore the scenic Tiffin Top (Dorothy\'s Seat) and spend the evening shopping at the local markets. Enjoy dinner and a comfortable overnight stay in Nainital.',
                'icon' => 'fa-solid fa-mountain'
            ],
            [
                'time' => 'Day 3',
                'title' => 'Nainital to Delhi — Lake Excursion & Return Journey',
                'desc' => 'After breakfast and checkout, proceed on a beautiful excursion of the surrounding lake district, visiting Bhimtal, Sattal, and Naukuchiatal (as time permits). Later, embark on the comfortable drive back to Delhi. Drop-off at your designated location in Delhi with unforgettable memories of the Lake City.',
                'icon' => 'fa-solid fa-house-chimney'
            ]
        ],
        'inclusions' => [
            '2 Nights Premium Hotel Accommodation',
            'Welcome Drink on Arrival',
            '2 Breakfasts & 2 Dinners included at the hotel',
            'Private Vehicle (AC Sedan/SUV/Tempo Traveller) for the Complete Tour',
            'All highway tolls, parking, and driver allowance charges',
            'Sightseeing as per the itinerary',
            'All applicable taxes (GST)',
            '24/7 on-call travel support'
        ],
        'exclusions' => [
            'Boating charges and ropeway tickets',
            'Monument entry fees and adventure activities',
            'Lunch and personal meals',
            'Personal shopping, tips, and souvenirs',
            'Anything not explicitly mentioned in inclusions'
        ],
        'gallery' => [
            [
                'src' => BASE_URL . 'assets/images/tours/nainital-hero.jpg',
                'title' => 'Nainital — Beautiful Lake City View'
            ],
            [
                'src' => BASE_URL . 'assets/images/tours/nainital-card.jpg',
                'title' => 'Naini Lake Boating Experience'
            ],
            [
                'src' => BASE_URL . 'assets/images/tours/nainital-hero.jpg',
                'title' => 'Snow-Capped Himalayan Peak Vistas'
            ],
            [
                'src' => BASE_URL . 'assets/images/tours/nainital-card.jpg',
                'title' => 'Scenic Mall Road Evening Walk'
            ],
            [
                'src' => BASE_URL . 'assets/images/tours/nainital-hero.jpg',
                'title' => 'Bhimtal Lake Panorama'
            ],
            [
                'src' => BASE_URL . 'assets/images/tours/nainital-card.jpg',
                'title' => 'Eco Cave Gardens Exploration'
            ]
        ],
        'pricing' => [
            [
                'vehicle' => 'Swift Dzire (Sedan)',
                'capacity' => '1–3 Guests',
                'price' => 0,
                'per' => 'per person',
                'icon' => 'fa-solid fa-car',
                'popular' => false
            ],
            [
                'vehicle' => 'Toyota Innova Crysta (SUV)',
                'capacity' => '1–6 Guests',
                'price' => 0,
                'per' => 'per person',
                'icon' => 'fa-solid fa-truck-pickup',
                'popular' => true
            ],
            [
                'vehicle' => 'Tempo Traveller (12-Seater)',
                'capacity' => '7–12 Guests',
                'price' => 0,
                'per' => 'per person',
                'icon' => 'fa-solid fa-van-shuttle',
                'popular' => false
            ]
        ],
        'trust_props' => [
            [
                'icon' => 'fa-solid fa-mountain',
                'title' => 'Lake Specialists',
                'desc' => 'Experienced drivers for high altitude mountain roads'
            ],
            [
                'icon' => 'fa-solid fa-hotel',
                'title' => 'Premium Stays',
                'desc' => 'Handpicked lakeside or hill-view hotels'
            ],
            [
                'icon' => 'fa-solid fa-compass',
                'title' => 'Complete Lake Tour',
                'desc' => 'Covers Bhimtal, Sattal & Naukuchiatal'
            ],
            [
                'icon' => 'fa-solid fa-headset',
                'title' => '24/7 Trip Support',
                'desc' => 'Dedicated travel coordinator on call'
            ]
        ],
        'schema_tourist_type' => [
            'Leisure',
            'Nature',
            'Adventure'
        ],
        'schema_price' => '0'
    ]
];
