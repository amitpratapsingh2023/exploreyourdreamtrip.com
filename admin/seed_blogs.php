<?php
require_once __DIR__ . '/bootstrap.php';

// Instantiate models
$authorModel = new AuthorModel();
$categoryModel = new CategoryModel();
$tagModel = new TagModel();
$blogModel = new BlogModel();

echo "Starting Database Seeder for Explore Your Dream Trip...\n\n";

$db = Database::getInstance();

// Clean up existing blog data to avoid mixed content from previous IT templates
try {
    $db->execute("SET FOREIGN_KEY_CHECKS = 0");
    $db->execute("TRUNCATE TABLE blog_tag");
    $db->execute("TRUNCATE TABLE blogs");
    $db->execute("TRUNCATE TABLE blog_categories");
    $db->execute("TRUNCATE TABLE blog_tags");
    $db->execute("TRUNCATE TABLE authors");
    $db->execute("SET FOREIGN_KEY_CHECKS = 1");
    echo "Cleared old blog, category, tag, and author tables.\n";
} catch (Exception $e) {
    echo "Notice: Could not truncate tables: " . $e->getMessage() . "\n";
}

// 1. Create Authors
$authors = [
    [
        'name' => 'Amit Pratap Singh',
        'slug' => 'amit-pratap-singh',
        'email' => 'amit@exploreyourdreamtrip.com',
        'designation' => 'Founder & Luxury Tour Specialist',
        'bio' => 'Amit is the founder of Explore Your Dream Trip, with over 12 years of crafting curated heritage and adventure tours across North India.',
        'avatar' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=150&q=80',
        'status' => 1,
        'created_at' => date('Y-m-d H:i:s')
    ],
    [
        'name' => 'Priya Sharma',
        'slug' => 'priya-sharma',
        'email' => 'priya@exploreyourdreamtrip.com',
        'designation' => 'Destination Experience Designer',
        'bio' => 'Priya designs immersive travel experiences, specializing in luxury stays, local culinary guides, and hidden cultural pathways.',
        'avatar' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=150&q=80',
        'status' => 1,
        'created_at' => date('Y-m-d H:i:s')
    ]
];

$authorIds = [];
foreach ($authors as $data) {
    $id = $authorModel->create($data);
    if ($id) {
        $authorIds[] = $id;
        echo "Created Author: {$data['name']}\n";
    }
}

// 2. Create Categories
$categories = [
    [
        'name' => 'Luxury Tours',
        'slug' => 'luxury-tours',
        'description' => 'Elite tailored travel experiences, 5-star heritage stays, and premium guides across India.',
        'status' => 1,
        'created_at' => date('Y-m-d H:i:s')
    ],
    [
        'name' => 'Travel Guides',
        'slug' => 'travel-guides',
        'description' => 'Chauffeur suggestions, route itineraries, local food reviews, and monuments checklists.',
        'status' => 1,
        'created_at' => date('Y-m-d H:i:s')
    ],
    [
        'name' => 'Fleet & Transits',
        'slug' => 'fleet-transits',
        'description' => 'Detailed reviews and advice on travelling comfortably in premium coaches, customized Tempo Travellers, and SUVs.',
        'status' => 1,
        'created_at' => date('Y-m-d H:i:s')
    ]
];

$categoryIds = [];
foreach ($categories as $data) {
    $id = $categoryModel->create($data);
    if ($id) {
        $categoryIds[] = $id;
        echo "Created Category: {$data['name']}\n";
    }
}

// 3. Create Tags
$tags = [
    ['name' => 'Taj Mahal', 'slug' => 'taj-mahal', 'status' => 1, 'created_at' => date('Y-m-d H:i:s')],
    ['name' => 'Rajasthan', 'slug' => 'rajasthan', 'status' => 1, 'created_at' => date('Y-m-d H:i:s')],
    ['name' => 'Tempo Traveller', 'slug' => 'tempo-traveller', 'status' => 1, 'created_at' => date('Y-m-d H:i:s')],
    ['name' => 'Himachal', 'slug' => 'himachal', 'status' => 1, 'created_at' => date('Y-m-d H:i:s')],
    ['name' => 'Luxury Travel', 'slug' => 'luxury-travel', 'status' => 1, 'created_at' => date('Y-m-d H:i:s')]
];

$tagIds = [];
foreach ($tags as $data) {
    $id = $tagModel->create($data);
    if ($id) {
        $tagIds[] = $id;
        echo "Created Tag: {$data['name']}\n";
    }
}

// 4. Create Blogs
$blogs = [
    [
        'title' => 'Agra Luxury Tour: A Private Guide to the Taj Mahal',
        'slug' => 'agra-luxury-tour-private-guide-taj-mahal',
        'category_id' => $categoryIds[0],
        'author_id' => $authorIds[0],
        'short_description' => 'Explore the monument of love with VIP entries, 5-star heritage stays, and customized local guides.',
        'description' => '<p>The Taj Mahal stands as an eternal monument to love, attracting millions of travelers from around the globe. However, to truly experience its grandeur without the rush, planning a luxury tour is essential. In this private guide, we explore how to turn a standard visit into an unforgettable five-star journey.</p>
        
        <h2>1. The Art of Timing: Sunrise Access</h2>
        <p>There is nothing quite like witnessing the white marble of the Taj Mahal change colors from soft grey and pale pink to shimmering gold at dawn. To experience this, secure VIP early-morning entry passes. Not only will you beat the heat of the day, but you will also avoid the heavy tourist crowds, allowing for quiet reflection and perfect photography conditions.</p>
        
        <h2>2. Luxury Accommodations with a View</h2>
        <p>To keep the magic alive throughout your stay, choose a hotel that honors the view. The Oberoi Amarvilas is located just 600 meters from the Taj Mahal, and every single room and suite offers an uninterrupted view of the monument. Indulge in Mughal-inspired architecture, lush terraced lawns, and private butler services.</p>
        
        <h2>3. Seamless Transit in a Chauffeur-Driven SUV</h2>
        <p>The journey from Delhi to Agra via the Yamuna Expressway is smooth and fast, but it is best enjoyed from the plush leather cabin of a luxury SUV like the Toyota Innova Crysta or a private sedan. Having a dedicated professional driver ensures you can relax, enjoy the rural scenery, and transit between locations like the Agra Fort and Fatehpur Sikri with absolute comfort.</p>',
        'image' => 'https://images.unsplash.com/photo-1564507592333-c60657eea523?auto=format&fit=crop&w=1200&q=80',
        'image_alt' => 'The iconic Taj Mahal at sunrise during a luxury tour',
        'image_title' => 'Taj Mahal Luxury Tour',
        'meta_title' => 'Agra Luxury Tour: A Private Guide to the Taj Mahal',
        'meta_description' => 'Plan a premium private tour to the Taj Mahal in Agra. Read our expert guide on luxury hotels, VIP entries, and transit tips.',
        'meta_keywords' => 'taj mahal luxury tour, private agra guide, premium travel india, overoi amarvilas agra',
        'status' => 'published',
        'featured' => 1,
        'published_at' => date('Y-m-d H:i:s'),
        'created_at' => date('Y-m-d H:i:s')
    ],
    [
        'title' => 'Riding in Comfort: The Premium Tempo Traveller Rental Guide',
        'slug' => 'riding-comfort-premium-tempo-traveller-rental-guide',
        'category_id' => $categoryIds[2],
        'author_id' => $authorIds[0],
        'short_description' => 'How to choose the perfect luxury coach or Force Urbania for premium family road trips to Shimla, Manali, and beyond.',
        'description' => '<p>When travelling with family, friends, or corporate colleagues across North India, the journey itself should be just as comfortable as the destination. Standard vans often fall short on legroom, suspension, and amenities. That is where premium Tempo Travellers and cruisers step in.</p>
        
        <h2>1. Why Choose a Luxury Tempo Traveller?</h2>
        <p>A customized luxury Tempo Traveller offers the space of a small coach with the luxury of a private jet. Key features to look for include:
        <ul>
            <li><strong>Reclining Captain Seats:</strong> Placed in a 1x1 or 2x1 configuration to give every passenger maximum personal space.</li>
            <li><strong>Premium Air Conditioning:</strong> Individual vents that keep the cabin cool even during hot summer months.</li>
            <li><strong>Entertainment Systems:</strong> LED screens, high-fidelity sound, and USB charging ports at every seat.</li>
            <li><strong>Air Suspension:</strong> Critical for absorbing the bumps on winding mountain routes to destinations like Rishikesh or Manali.</li>
        </ul></p>
        
        <h2>2. The Force Urbania: The Next Generation of Travel</h2>
        <p>For those seeking the ultimate premium transit, the Force Urbania is the cruiser of choice. With its high roof, wide standing aisle, panoramic side windows, and advanced safety features like ABS and airbags, it provides an unparalleled ride quality that rivals European luxury touring coaches.</p>
        
        <h2>3. Planning Your Hill Station Route</h2>
        <p>Long mountain drives require experienced chauffeurs who know the terrain. When you hire a premium vehicle, ensure your agency provides certified, verified drivers trained specifically in high-altitude routes. This guarantees both safety and a smooth, stress-free ride.</p>',
        'image' => 'https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?auto=format&fit=crop&w=1200&q=80',
        'image_alt' => 'A luxury cruiser driving along a beautiful scenic highway',
        'image_title' => 'Premium Tempo Traveller Ride',
        'meta_title' => 'Luxury Tempo Traveller & Force Urbania Rental Guide',
        'meta_description' => 'Learn how to choose the right premium Tempo Traveller or Force Urbania for group road trips across North India.',
        'meta_keywords' => 'luxury tempo traveller rental, force urbania hire, group travel india, luxury road trip delhi',
        'status' => 'published',
        'featured' => 0,
        'published_at' => date('Y-m-d H:i:s', strtotime('-1 day')),
        'created_at' => date('Y-m-d H:i:s', strtotime('-1 day'))
    ],
    [
        'title' => 'Top 5 Luxury Experiences in Rajasthan\'s Golden Triangle',
        'slug' => 'top-5-luxury-experiences-rajasthans-golden-triangle',
        'category_id' => $categoryIds[0],
        'author_id' => $authorIds[1],
        'short_description' => 'Discover royal palaces, private desert dining, and customized heritage tours in Jaipur, Jodhpur, and Udaipur.',
        'description' => '<p>Rajasthan is a land of kings, fortresses, and vibrant colors. To experience its true spirit, one must delve into the royal lifestyle. From dining under the stars in private desert camps to staying in palaces that have hosted maharajas, here are the top 5 luxury experiences you cannot miss.</p>
        
        <h2>1. Private Tour of Jaipur\'s City Palace</h2>
        <p>While the public areas of the City Palace are beautiful, the real magic lies behind closed doors. Book a private curator-led tour that grants you access to the private residential quarters of the royal family, including the spectacular Chandra Mahal and the breathtaking Peacock Courtyard. Sip champagne as a guide narrates the history of the Kachwaha dynasty.</p>
        
        <h2>2. Cruising Lake Pichola in Udaipur</h2>
        <p>Known as the Venice of the East, Udaipur is centered around its pristine lakes. Arrange a private sunset solar boat cruise on Lake Pichola. Drift past the floating Lake Palace (now Taj Lake Palace) and Jag Mandir, taking in the golden reflection of the Aravalli hills on the water.</p>
        
        <h2>3. Stay at a Heritage Palace Hotel</h2>
        <p>Rajasthan is famous for converting its historic forts and palaces into world-class hotels. Experience authentic royal hospitality at Rambagh Palace in Jaipur or Umaid Bhawan Palace in Jodhpur. Expect rose petal showers upon arrival, peacock-filled gardens, and heritage spa therapies.</p>
        
        <h2>4. Private Desert Glamping in Jaisalmer</h2>
        <p>Escape the cities for the Thar Desert, but do it in style. Luxury desert camps offer air-conditioned tents with hand-carved furniture and attached marble bathrooms. Spend your evening listening to traditional Rajasthani folk musicians around a bonfire, followed by a private multi-course dinner on a secluded sand dune.</p>
        
        <h2>5. Custom Crafted Travel Routes</h2>
        <p>To tie these experiences together, skip standard buses or trains. Book a custom private tour with a professional chauffeur who can adapt to your pace. This allows you to stop at ancient stepwells, explore village craft shops, and enjoy the journey without rigid timetables.</p>',
        'image' => 'https://images.unsplash.com/photo-1599661046289-e31897846e41?auto=format&fit=crop&w=1200&q=80',
        'image_alt' => 'A luxury heritage palace in Jaipur, Rajasthan',
        'image_title' => 'Rajasthan Heritage Palace',
        'meta_title' => 'Top 5 Luxury Experiences in Rajasthan | Golden Triangle Tour',
        'meta_description' => 'Discover the finest private tours, palace hotels, and luxury excursions in Jaipur, Udaipur, and Jodhpur.',
        'meta_keywords' => 'rajasthan luxury travel, private jaipur tour, udaipur boat cruise, heritage hotels rajasthan',
        'status' => 'published',
        'featured' => 1,
        'published_at' => date('Y-m-d H:i:s', strtotime('-3 days')),
        'created_at' => date('Y-m-d H:i:s', strtotime('-3 days'))
    ]
];

foreach ($blogs as $data) {
    // We randomly assign 2 tag IDs
    $selectedTags = [
        $tagIds[array_rand($tagIds)],
        $tagIds[array_rand($tagIds)]
    ];
    // Remove duplicates
    $selectedTags = array_unique($selectedTags);

    $blogId = $blogModel->createWithTags($data, $selectedTags);
    if ($blogId) {
        echo "Created Blog Post: {$data['title']}\n";
    } else {
        echo "Failed to create Blog Post: {$data['title']}\n";
    }
}

echo "\nSeeding Completed Successfully!\n";
