<?php
require_once __DIR__ . '/bootstrap.php';

// Instantiate models
$authorModel = new AuthorModel();
$categoryModel = new CategoryModel();
$tagModel = new TagModel();
$blogModel = new BlogModel();

echo "Starting Database Seeder...\n\n";

// 1. Create Authors
$authors = [
    [
        'name' => 'John Doe',
        'slug' => 'john-doe',
        'email' => 'john@vedawebtech.com',
        'designation' => 'Lead Developer',
        'bio' => 'John is a senior software engineer with over 10 years of experience in PHP and modern web technologies.',
        'avatar' => 'assets/images/clients/client-1.jpg',
        'status' => 1,
        'created_at' => date('Y-m-d H:i:s')
    ],
    [
        'name' => 'Jane Smith',
        'slug' => 'jane-smith',
        'email' => 'jane@vedawebtech.com',
        'designation' => 'Digital Marketing Expert',
        'bio' => 'Jane specializes in SEO and content marketing, helping businesses scale their organic reach.',
        'avatar' => 'assets/images/clients/client-2.jpg',
        'status' => 1,
        'created_at' => date('Y-m-d H:i:s')
    ]
];

$authorIds = [];
foreach ($authors as $data) {
    // Check if exists
    $existing = $authorModel->where(['email' => $data['email']]);
    if (empty($existing)) {
        $id = $authorModel->create($data);
        $authorIds[] = $id;
        echo "Created Author: {$data['name']}\n";
    } else {
        $authorIds[] = $existing[0]['id'];
        echo "Author already exists: {$data['name']}\n";
    }
}

// 2. Create Categories
$categories = [
    ['name' => 'Web Development', 'slug' => 'web-development', 'description' => 'All about building websites.', 'status' => 1, 'created_at' => date('Y-m-d H:i:s')],
    ['name' => 'Digital Marketing', 'slug' => 'digital-marketing', 'description' => 'Tips and tricks for online marketing.', 'status' => 1, 'created_at' => date('Y-m-d H:i:s')],
    ['name' => 'UI/UX Design', 'slug' => 'ui-ux-design', 'description' => 'User interface and user experience design principles.', 'status' => 1, 'created_at' => date('Y-m-d H:i:s')]
];

$categoryIds = [];
foreach ($categories as $data) {
    $existing = $categoryModel->where(['slug' => $data['slug']]);
    if (empty($existing)) {
        $id = $categoryModel->create($data);
        $categoryIds[] = $id;
        echo "Created Category: {$data['name']}\n";
    } else {
        $categoryIds[] = $existing[0]['id'];
        echo "Category already exists: {$data['name']}\n";
    }
}

// 3. Create Tags
$tags = [
    ['name' => 'PHP', 'slug' => 'php', 'status' => 1, 'created_at' => date('Y-m-d H:i:s')],
    ['name' => 'Laravel', 'slug' => 'laravel', 'status' => 1, 'created_at' => date('Y-m-d H:i:s')],
    ['name' => 'SEO', 'slug' => 'seo', 'status' => 1, 'created_at' => date('Y-m-d H:i:s')],
    ['name' => 'Google Ads', 'slug' => 'google-ads', 'status' => 1, 'created_at' => date('Y-m-d H:i:s')],
    ['name' => 'Figma', 'slug' => 'figma', 'status' => 1, 'created_at' => date('Y-m-d H:i:s')]
];

$tagIds = [];
foreach ($tags as $data) {
    $existing = $tagModel->where(['slug' => $data['slug']]);
    if (empty($existing)) {
        $id = $tagModel->create($data);
        $tagIds[] = $id;
        echo "Created Tag: {$data['name']}\n";
    } else {
        $tagIds[] = $existing[0]['id'];
        echo "Tag already exists: {$data['name']}\n";
    }
}

// 4. Create Blogs
$blogs = [
    [
        'title' => '10 Tips for Modern PHP Web Development',
        'slug' => '10-tips-modern-php-web-development',
        'category_id' => $categoryIds[0],
        'author_id' => $authorIds[0],
        'description' => '<p>PHP has evolved significantly over the years. In this post, we discuss the top 10 tips to keep your PHP applications modern, secure, and fast.</p><h2>1. Use PHP 8+</h2><p>Always upgrade to the latest stable version to enjoy performance boosts and new features like JIT.</p><h2>2. Adopt a Framework</h2><p>Frameworks like Laravel or Symfony can save you hundreds of hours.</p>',
        'image' => 'assets/images/blog/blog-placeholder.svg',
        'image_alt' => 'Modern PHP Development',
        'meta_title' => '10 Tips for Modern PHP Web Development',
        'meta_description' => 'Discover the top 10 best practices for modern PHP web development in 2026.',
        'status' => 'published',
        'featured' => 1,
        'published_at' => date('Y-m-d H:i:s'),
        'created_at' => date('Y-m-d H:i:s')
    ],
    [
        'title' => 'Mastering SEO in 2026',
        'slug' => 'mastering-seo-in-2026',
        'category_id' => $categoryIds[1],
        'author_id' => $authorIds[1],
        'description' => '<p>Search Engine Optimization is constantly changing. Let us explore the newest strategies to dominate search rankings.</p><h2>Focus on Core Web Vitals</h2><p>Speed is everything. Ensure your website loads quickly and provides a smooth user experience.</p>',
        'image' => 'assets/images/blog/blog-placeholder.svg',
        'image_alt' => 'Mastering SEO',
        'meta_title' => 'Mastering SEO in 2026',
        'meta_description' => 'Learn the newest strategies to dominate search rankings this year.',
        'status' => 'published',
        'featured' => 0,
        'published_at' => date('Y-m-d H:i:s', strtotime('-2 days')),
        'created_at' => date('Y-m-d H:i:s', strtotime('-2 days'))
    ],
    [
        'title' => 'The Future of UI/UX Design',
        'slug' => 'future-of-ui-ux-design',
        'category_id' => $categoryIds[2],
        'author_id' => $authorIds[1],
        'description' => '<p>What does the future hold for UI/UX design? Will AI take over? We dive deep into the next big trends in design.</p><ul><li>Glassmorphism</li><li>Neumorphism</li><li>AI-driven personalized interfaces</li></ul>',
        'image' => 'assets/images/blog/blog-placeholder.svg',
        'image_alt' => 'UI UX Design',
        'meta_title' => 'The Future of UI/UX Design',
        'meta_description' => 'Explore the upcoming trends in UI/UX design.',
        'status' => 'published',
        'featured' => 1,
        'published_at' => date('Y-m-d H:i:s', strtotime('-5 days')),
        'created_at' => date('Y-m-d H:i:s', strtotime('-5 days'))
    ]
];

foreach ($blogs as $data) {
    $existing = $blogModel->where(['slug' => $data['slug']]);
    if (empty($existing)) {
        // Create the blog and randomly attach some tags
        $blogId = $blogModel->createWithTags($data, [
            $tagIds[array_rand($tagIds)],
            $tagIds[array_rand($tagIds)]
        ]);
        if ($blogId) {
            echo "Created Blog Post: {$data['title']}\n";
        } else {
            echo "Failed to create Blog Post: {$data['title']}\n";
        }
    } else {
        echo "Blog Post already exists: {$data['title']}\n";
    }
}

echo "\nSeeding Completed Successfully!\n";
