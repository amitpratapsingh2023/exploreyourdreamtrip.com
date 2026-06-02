-- ============================================================
-- Veda Webtech — Complete Admin Panel Database Schema
-- Run this SQL on your MySQL server to set up all tables
-- ============================================================


-- -----------------------------------------------------------
-- 1. Admins
-- -----------------------------------------------------------
CREATE TABLE IF NOT EXISTS admins (
    id          INT AUTO_INCREMENT PRIMARY KEY,
    name        VARCHAR(100)  NOT NULL,
    email       VARCHAR(255)  NOT NULL UNIQUE,
    password    VARCHAR(255)  NOT NULL,
    avatar      VARCHAR(255)  DEFAULT NULL,
    status      TINYINT(1)    NOT NULL DEFAULT 1 COMMENT '0=inactive, 1=active',
    created_at  TIMESTAMP     DEFAULT CURRENT_TIMESTAMP,
    updated_at  TIMESTAMP     DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- -----------------------------------------------------------
-- 2. Authors
-- -----------------------------------------------------------
CREATE TABLE IF NOT EXISTS authors (
    id              INT AUTO_INCREMENT PRIMARY KEY,
    name            VARCHAR(100)  NOT NULL,
    slug            VARCHAR(120)  NOT NULL UNIQUE,
    email           VARCHAR(255)  DEFAULT NULL,
    bio             TEXT          DEFAULT NULL,
    avatar          VARCHAR(255)  DEFAULT NULL,
    designation     VARCHAR(100)  DEFAULT NULL,
    social_twitter  VARCHAR(255)  DEFAULT NULL,
    social_linkedin VARCHAR(255)  DEFAULT NULL,
    status          TINYINT(1)    NOT NULL DEFAULT 1,
    created_at      TIMESTAMP     DEFAULT CURRENT_TIMESTAMP,
    updated_at      TIMESTAMP     DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- -----------------------------------------------------------
-- 3. Blog Categories
-- -----------------------------------------------------------
CREATE TABLE IF NOT EXISTS blog_categories (
    id               INT AUTO_INCREMENT PRIMARY KEY,
    name             VARCHAR(100)  NOT NULL,
    slug             VARCHAR(120)  NOT NULL UNIQUE,
    description      TEXT          DEFAULT NULL,
    meta_title       VARCHAR(255)  DEFAULT NULL,
    meta_description TEXT          DEFAULT NULL,
    meta_keywords    VARCHAR(255)  DEFAULT NULL,
    status           TINYINT(1)    NOT NULL DEFAULT 1,
    created_at       TIMESTAMP     DEFAULT CURRENT_TIMESTAMP,
    updated_at       TIMESTAMP     DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- -----------------------------------------------------------
-- 4. Blog Tags
-- -----------------------------------------------------------
CREATE TABLE IF NOT EXISTS blog_tags (
    id         INT AUTO_INCREMENT PRIMARY KEY,
    name       VARCHAR(100)  NOT NULL,
    slug       VARCHAR(120)  NOT NULL UNIQUE,
    status     TINYINT(1)    NOT NULL DEFAULT 1,
    created_at TIMESTAMP     DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP     DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- -----------------------------------------------------------
-- 5. Blogs
-- -----------------------------------------------------------
CREATE TABLE IF NOT EXISTS blogs (
    id                INT AUTO_INCREMENT PRIMARY KEY,
    category_id       INT           DEFAULT NULL,
    author_id         INT           DEFAULT NULL,
    title             VARCHAR(255)  NOT NULL,
    slug              VARCHAR(255)  NOT NULL UNIQUE,
    short_description TEXT          DEFAULT NULL,
    description       LONGTEXT      DEFAULT NULL,
    image             VARCHAR(255)  DEFAULT NULL,
    image_alt         VARCHAR(255)  DEFAULT NULL,
    image_title       VARCHAR(255)  DEFAULT NULL,
    status            ENUM('draft','published','scheduled') NOT NULL DEFAULT 'draft',
    featured          TINYINT(1)    NOT NULL DEFAULT 0,
    published_at      DATETIME      DEFAULT NULL,
    meta_title        VARCHAR(255)  DEFAULT NULL,
    meta_description  TEXT          DEFAULT NULL,
    meta_keywords     VARCHAR(255)  DEFAULT NULL,
    canonical_url     VARCHAR(255)  DEFAULT NULL,
    og_title          VARCHAR(255)  DEFAULT NULL,
    og_description    TEXT          DEFAULT NULL,
    og_image          VARCHAR(255)  DEFAULT NULL,
    schema_json       TEXT          DEFAULT NULL,
    created_at        TIMESTAMP     DEFAULT CURRENT_TIMESTAMP,
    updated_at        TIMESTAMP     DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (category_id) REFERENCES blog_categories(id) ON DELETE SET NULL,
    FOREIGN KEY (author_id)   REFERENCES authors(id) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- -----------------------------------------------------------
-- 6. Blog ↔ Tag Pivot
-- -----------------------------------------------------------
CREATE TABLE IF NOT EXISTS blog_tag (
    id      INT AUTO_INCREMENT PRIMARY KEY,
    blog_id INT NOT NULL,
    tag_id  INT NOT NULL,
    UNIQUE KEY unique_blog_tag (blog_id, tag_id),
    FOREIGN KEY (blog_id) REFERENCES blogs(id) ON DELETE CASCADE,
    FOREIGN KEY (tag_id)  REFERENCES blog_tags(id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- -----------------------------------------------------------
-- 7. Leads  (status + notes added for admin management)
-- -----------------------------------------------------------
CREATE TABLE IF NOT EXISTS leads (
    id         INT AUTO_INCREMENT PRIMARY KEY,
    name       VARCHAR(255)  NOT NULL,
    phone      VARCHAR(20)   NOT NULL,
    email      VARCHAR(255)  NOT NULL,
    message    TEXT          NOT NULL,
    status     ENUM('new','contacted','qualified','converted','closed') NOT NULL DEFAULT 'new',
    notes      TEXT          DEFAULT NULL,
    created_at TIMESTAMP     DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP     DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- -----------------------------------------------------------
-- Seed: Default super-admin  (password: Admin@123)
-- Generate hash:  php -r "echo password_hash('Admin@123', PASSWORD_BCRYPT);"
-- -----------------------------------------------------------
INSERT INTO admins (name, email, password, status) VALUES
('Super Admin', 'admin@vedawebtech.com',
 '$2y$10$LsrbipAh/o.ceYOftJSSQ.o5rLy/ij.sSfgMHs.34AAvfd34Bfcw2', 1)
ON DUPLICATE KEY UPDATE name=name;

-- -----------------------------------------------------------
-- Seed: Default author
INSERT INTO authors (name, slug, email, designation, status) VALUES
('Veda Webtech', 'veda-webtech', 'vedaawebtech@gmail.com', 'Digital Strategist', 1)
ON DUPLICATE KEY UPDATE name=name;

-- -----------------------------------------------------------
-- 8. Newsletters
-- -----------------------------------------------------------
CREATE TABLE IF NOT EXISTS newsletters (
    id         INT AUTO_INCREMENT PRIMARY KEY,
    email      VARCHAR(255)  NOT NULL UNIQUE,
    created_at TIMESTAMP     DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
