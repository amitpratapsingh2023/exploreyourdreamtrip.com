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
define('CONTACT_PHONE', '+91 8076 341848');
define('CONTACT_PHONE_RAW', '8076341848'); // For tel: links
define('CONTACT_EMAIL', 'exploreyourdreamtrip@gmail.com');
define('CONTACT_ADDRESS', 'Street no -8 ,25 foota road , part -2 Mukund pur, near by Jc Gaur public school , Delhi -110042');

define('WHATSAPP_NUMBER', '8448987148');
define('WHATSAPP_TEXT', 'Hi, I want to book a tour/vehicle with Explore Your Dream Trip. Please share details.');
define('WHATSAPP_LINK', 'https://wa.me/91' . WHATSAPP_NUMBER . '?text=' . urlencode(WHATSAPP_TEXT));

// Social Media Links
define('SOCIAL_FACEBOOK', 'https://facebook.com/exploreyourdreamtrip');
define('SOCIAL_INSTAGRAM', 'https://instagram.com/exploreyourdreamtrip');
define('SOCIAL_TWITTER', 'https://x.com/dreamtripyours');
define('SOCIAL_YOUTUBE', 'https://youtube.com/exploreyourdreamtrip');

// Top Destinations / Tours — loaded from centralized data file
require_once __DIR__ . '/../data/tours.php';


// Tempo Traveller Services
$TEMPO_TRAVELLERS = [
    '12-seater' => [
        'title' => 'Luxury 12 Seater Tempo Traveller',
        'capacity' => '12 Passengers + 1 Driver',
        'features' => ['Pushback Luxury Seats', 'Ample Luggage Space', 'Premium Music System', 'Ice Box & Charging Points', 'AC with Individual Vents'],
        'price' => 0,
        'image' => 'assets/images/fleet/tempo-12.jpg'
    ],
    '16-seater' => [
        'title' => 'Luxury 16 Seater Tempo Traveller',
        'capacity' => '16 Passengers + 1 Driver',
        'features' => ['Premium Leather Seating', 'Individual LED Screen (Optional)', 'Wi-Fi Enabled', 'Spacious Cabin & Boot Space', 'Top-tier Suspension'],
        'price' => 0,
        'image' => 'assets/images/fleet/tempo-16.jpeg'
    ],
    '20-seater' => [
        'title' => 'Luxury 20 Seater Tempo Traveller',
        'capacity' => '20 Passengers + 1 Driver',
        'features' => ['Extra Legroom Premium Seats', 'Microphone for Tour Guide', 'Mood Lighting', 'Surround Sound System', 'Large Glass Windows for Sightseeing'],
        'price' => 0,
        'image' => 'assets/images/fleet/tempo-20.png'
    ]
];

// Car Rental Services
$CARS = [
    'force-urbania' => [
        'title' => 'Force Urbania Premium Cruiser',
        'capacity' => '10-17 Seater Options',
        'price' => 0,
        'features' => ['Ultra-Luxury Captain Seats', 'Individual AC Vents & USB Ports', 'High Ceiling & Wide Aisle', 'Panoramic Windows'],
        'image' => 'assets/images/fleet/force-urbania.jpg'
    ],
    'swift-dzire' => [
        'title' => 'Swift Dzire (Sedan)',
        'capacity' => '4 Passengers + 1 Driver',
        'price' => 0,
        'features' => ['Comfortable Seating', 'Air Conditioner', 'Bluetooth Music System', 'Best for Small Families'],
        'image' => 'assets/images/fleet/dzire.png'
    ],
    'innova-crysta' => [
        'title' => 'Toyota Innova Crysta (SUV)',
        'capacity' => '6-7 Passengers + 1 Driver',
        'price' => 0,
        'features' => ['Plush Captain Seats', 'Premium Air Conditioning', 'Dual Airbags & ABS', 'Highly Safe & Comfortable'],
        'image' => 'assets/images/fleet/innova-crysta.jpg'
    ],
    'ertiga' => [
        'title' => 'Maruti Suzuki Ertiga (MUV)',
        'capacity' => '6 Passengers + 1 Driver',
        'price' => 0,
        'features' => ['Spacious 3-Row Cabin', 'Roof Mounted AC Vents', 'Excellent Fuel Efficiency', 'Budget Luxury Option'],
        'image' => 'assets/images/fleet/ertiga.png'
    ],
    'innova-hycross' => [
        'title' => 'Toyota Innova Hycross',
        'capacity' => '6 Passengers + 1 Driver',
        'price' => 0,
        'features' => ['Spacious 3-Row Cabin', 'Roof Mounted AC Vents', 'Excellent Fuel Efficiency', 'Budget Luxury Option'],
        'image' => 'assets/images/fleet/innova-hycross.jpg'
    ],
];
