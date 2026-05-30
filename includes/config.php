<?php
/**
 * Site Configuration - Explore Your Dream Trip
 */

// Define Base URL dynamically or fallback for local development
if (!defined('BASE_URL')) {
    // Check if hosted locally or on server
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $domainName = $_SERVER['HTTP_HOST'];
    
    // For local XAMPP setup: check if directory exists in request URI
    if (strpos($_SERVER['REQUEST_URI'], '/Git/exploreyourdreamtrip.com') !== false) {
        define('BASE_URL', $protocol . $domainName . '/Git/exploreyourdreamtrip.com/');
    } else {
        define('BASE_URL', $protocol . $domainName . '/');
    }
}

// Global Site Information
define('SITE_NAME', 'Explore Your Dream Trip');
define('SITE_TITLE', 'Premium Travel Agency & Luxury Tour Planner in India');
define('SITE_DESC', 'Discover India with Explore Your Dream Trip. We offer premium luxury tours, tempo traveller rentals, and high-end car rental services for Agra, Shimla, Manali, Rishikesh, and beyond.');

// Contact & Social Information
define('CONTACT_PHONE', '+91 99999 08888');
define('CONTACT_PHONE_RAW', '9999908888'); // For tel: links
define('CONTACT_EMAIL', 'info@exploreyourdreamtrip.com');
define('CONTACT_ADDRESS', '124, Luxury Travel Hub, Near Connaught Place, New Delhi, India');

define('WHATSAPP_NUMBER', '9999908888');
define('WHATSAPP_TEXT', 'Hi, I want to book a tour/vehicle with Explore Your Dream Trip. Please share details.');
define('WHATSAPP_LINK', 'https://wa.me/91' . WHATSAPP_NUMBER . '?text=' . urlencode(WHATSAPP_TEXT));

// Social Media Links
define('SOCIAL_FACEBOOK', 'https://facebook.com/exploreyourdreamtrip');
define('SOCIAL_INSTAGRAM', 'https://instagram.com/exploreyourdreamtrip');
define('SOCIAL_TWITTER', 'https://twitter.com/dreamtrip');
define('SOCIAL_YOUTUBE', 'https://youtube.com/exploreyourdreamtrip');

// Top Destinations / Tours
$TOURS = [
    'agra-taj-mahal' => [
        'title' => 'Agra (Taj Mahal) Tour',
        'subtitle' => 'The Monument of Love',
        'duration' => '1 Day / 1 Night',
        'price' => '₹1,999',
        'image' => 'assets/images/tours/agra.png',
        'link' => 'tours/agra-taj-mahal.php',
        'rating' => '4.9',
        'reviews' => '120',
        'featured' => true
    ],
    'shimla-manali' => [
        'title' => 'Shimla & Manali Tour',
        'subtitle' => 'The Majestic Himalayas',
        'duration' => '5 Days / 4 Nights',
        'price' => '₹12,499',
        'image' => 'assets/images/tours/shimla-manali.png',
        'link' => 'tours/shimla-manali.php',
        'rating' => '4.8',
        'reviews' => '245',
        'featured' => true
    ],
    'rishikesh' => [
        'title' => 'Rishikesh Adventure Tour',
        'subtitle' => 'Spiritual & Adventure Capital',
        'duration' => '3 Days / 2 Nights',
        'price' => '₹5,999',
        'image' => 'https://images.unsplash.com/photo-1545630526-4ee6296a093b?auto=format&fit=crop&w=600&q=80',
        'link' => 'tours/rishikesh.php',
        'rating' => '4.7',
        'reviews' => '98',
        'featured' => true
    ],
    'vrindavan' => [
        'title' => 'Vrindavan & Mathura Tour',
        'subtitle' => 'The Land of Lord Krishna',
        'duration' => '2 Days / 1 Night',
        'price' => '₹3,499',
        'image' => 'https://images.unsplash.com/photo-1627894483216-2138af692e32?auto=format&fit=crop&w=600&q=80',
        'link' => 'tours/vrindavan.php',
        'rating' => '4.9',
        'reviews' => '180',
        'featured' => false
    ],
    'ayodhya' => [
        'title' => 'Ayodhya Ram Mandir Tour',
        'subtitle' => 'The Holy Birthplace',
        'duration' => '2 Days / 1 Night',
        'price' => '₹4,499',
        'image' => 'https://images.unsplash.com/photo-1707119293883-9b16893e36e3?auto=format&fit=crop&w=600&q=80',
        'link' => 'tours/ayodhya.php',
        'rating' => '4.9',
        'reviews' => '310',
        'featured' => true
    ],
    'mahakaleshwar' => [
        'title' => 'Ujjain Mahakaleshwar Tour',
        'subtitle' => 'The Sacred Jyotirlinga',
        'duration' => '3 Days / 2 Nights',
        'price' => '₹6,499',
        'image' => 'https://images.unsplash.com/photo-1669046638069-42b781a95e6f?auto=format&fit=crop&w=600&q=80',
        'link' => 'tours/mahakaleshwar.php',
        'rating' => '4.8',
        'reviews' => '150',
        'featured' => false
    ],
    'golden-temple' => [
        'title' => 'Amritsar Golden Temple Tour',
        'subtitle' => 'Spiritual Peace & Patriotism',
        'duration' => '3 Days / 2 Nights',
        'price' => '₹5,499',
        'image' => 'https://images.unsplash.com/photo-1588598130782-690a298573ec?auto=format&fit=crop&w=600&q=80',
        'link' => 'tours/golden-temple.php',
        'rating' => '4.8',
        'reviews' => '115',
        'featured' => false
    ],
    'jaipur' => [
        'title' => 'Jaipur (Pink City) Tour',
        'subtitle' => 'The Royal Heritage of Rajasthan',
        'duration' => '3 Days / 2 Nights',
        'price' => '₹5,999',
        'image' => 'https://images.unsplash.com/photo-1477584322813-4372685598e4?auto=format&fit=crop&w=600&q=80',
        'link' => 'tours/jaipur.php',
        'rating' => '4.7',
        'reviews' => '142',
        'featured' => true
    ]
];

// Tempo Traveller Services
$TEMPO_TRAVELLERS = [
    '12-seater' => [
        'title' => 'Luxury 12 Seater Tempo Traveller',
        'capacity' => '12 Passengers + 1 Driver',
        'features' => ['Pushback Luxury Seats', 'Ample Luggage Space', 'Premium Music System', 'Ice Box & Charging Points', 'AC with Individual Vents'],
        'price' => '₹18 / km',
        'image' => 'assets/images/fleet/tempo-12.png'
    ],
    '16-seater' => [
        'title' => 'Luxury 16 Seater Tempo Traveller',
        'capacity' => '16 Passengers + 1 Driver',
        'features' => ['Premium Leather Seating', 'Individual LED Screen (Optional)', 'Wi-Fi Enabled', 'Spacious Cabin & Boot Space', 'Top-tier Suspension'],
        'price' => '₹22 / km',
        'image' => 'assets/images/fleet/tempo-16.png'
    ],
    '20-seater' => [
        'title' => 'Luxury 20 Seater Tempo Traveller',
        'capacity' => '20 Passengers + 1 Driver',
        'features' => ['Extra Legroom Premium Seats', 'Microphone for Tour Guide', 'Mood Lighting', 'Surround Sound System', 'Large Glass Windows for Sightseeing'],
        'price' => '₹26 / km',
        'image' => 'assets/images/fleet/tempo-20.png'
    ]
];

// Car Rental Services
$CARS = [
    'force-urbania' => [
        'title' => 'Force Urbania Premium Cruiser',
        'capacity' => '10-17 Seater Options',
        'price' => '₹28 / km',
        'features' => ['Ultra-Luxury Captain Seats', 'Individual AC Vents & USB Ports', 'High Ceiling & Wide Aisle', 'Panoramic Windows'],
        'image' => 'assets/images/fleet/force-urbania.png'
    ],
    'swift-dzire' => [
        'title' => 'Swift Dzire (Sedan)',
        'capacity' => '4 Passengers + 1 Driver',
        'price' => '₹12 / km',
        'features' => ['Comfortable Seating', 'Air Conditioner', 'Bluetooth Music System', 'Best for Small Families'],
        'image' => 'https://images.unsplash.com/photo-1549399542-7e3f8b79c341?auto=format&fit=crop&w=600&q=80'
    ],
    'innova-crysta' => [
        'title' => 'Toyota Innova Crysta (SUV)',
        'capacity' => '6-7 Passengers + 1 Driver',
        'price' => '₹18 / km',
        'features' => ['Plush Captain Seats', 'Premium Air Conditioning', 'Dual Airbags & ABS', 'Highly Safe & Comfortable'],
        'image' => 'https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?auto=format&fit=crop&w=600&q=80'
    ],
    'ertiga' => [
        'title' => 'Maruti Suzuki Ertiga (MUV)',
        'capacity' => '6 Passengers + 1 Driver',
        'price' => '₹14 / km',
        'features' => ['Spacious 3-Row Cabin', 'Roof Mounted AC Vents', 'Excellent Fuel Efficiency', 'Budget Luxury Option'],
        'image' => 'https://images.unsplash.com/photo-1568605117036-5fe5e7bab0b7?auto=format&fit=crop&w=600&q=80'
    ]
];
