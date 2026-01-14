<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $products = [
            [
                'name' => 'E-commerce Platform - Laravel',
                'slug' => 'ecommerce-platform-laravel',
                'short_description' => 'Complete Laravel e-commerce solution with admin panel, payment integration, and responsive design.',
                'description' => 'A fully featured e-commerce platform built with Laravel 10, Vue.js, and Tailwind CSS.',
                'price' => 299.99,
                'sale_price' => 199.99,
                'category' => 'E-commerce',
                'technology' => 'Laravel, Vue.js, MySQL',
                'features' => json_encode([
                    'Multi-vendor support',
                    'Payment gateway integration',
                    'Admin dashboard',
                    'Mobile responsive',
                    'SEO optimized',
                    'Email notifications',
                    'Product reviews & ratings',
                    'Order tracking system'
                ]),
                'demo_url' => 'https://demo.example.com',
                'documentation_url' => 'https://docs.example.com',
                'license' => 'MIT',
                'version' => '2.0',
                'requirements' => 'PHP 8.1+, MySQL 5.7+, Composer',
                'is_featured' => true,
                'is_active' => true
            ],
            [
                'name' => 'SaaS Admin Dashboard',
                'slug' => 'saas-admin-dashboard',
                'short_description' => 'Modern SaaS admin panel with analytics, user management, and reporting.',
                'description' => 'A comprehensive SaaS admin dashboard built with React, Node.js, and MongoDB.',
                'price' => 249.99,
                'category' => 'Admin Panel',
                'technology' => 'React, Node.js, MongoDB',
                'features' => json_encode([
                    'User management',
                    'Analytics dashboard',
                    'Role-based access control',
                    'Real-time notifications',
                    'Dark/Light mode',
                    'Multi-language support',
                    'Export reports',
                    'API documentation'
                ]),
                'license' => 'Commercial',
                'version' => '1.5',
                'requirements' => 'Node.js 16+, MongoDB 6.0+',
                'is_featured' => true,
                'is_active' => true
            ],
            [
                'name' => 'Mobile App - React Native',
                'slug' => 'mobile-app-react-native',
                'short_description' => 'Cross-platform mobile app with authentication, push notifications, and offline support.',
                'description' => 'A production-ready React Native mobile application template.',
                'price' => 179.99,
                'sale_price' => 149.99,
                'category' => 'Mobile App',
                'technology' => 'React Native, Firebase',
                'features' => json_encode([
                    'User authentication',
                    'Push notifications',
                    'Offline support',
                    'Social login',
                    'Image upload',
                    'In-app purchases',
                    'Chat functionality',
                    'Deep linking'
                ]),
                'license' => 'MIT',
                'version' => '1.2',
                'requirements' => 'React Native 0.70+, Firebase',
                'is_featured' => false,
                'is_active' => true
            ],
            [
                'name' => 'CRM System',
                'slug' => 'crm-system',
                'short_description' => 'Complete Customer Relationship Management system with lead tracking and analytics.',
                'description' => 'A comprehensive CRM system built with Laravel and Vue.js.',
                'price' => 399.99,
                'category' => 'Business',
                'technology' => 'Laravel, Vue.js, PostgreSQL',
                'features' => json_encode([
                    'Lead management',
                    'Contact management',
                    'Deal pipeline',
                    'Email integration',
                    'Task management',
                    'Reporting dashboard',
                    'Team collaboration',
                    'Custom fields'
                ]),
                'license' => 'Commercial',
                'version' => '3.0',
                'requirements' => 'PHP 8.0+, PostgreSQL 13+',
                'is_featured' => true,
                'is_active' => true
            ],
            [
                'name' => 'Blog Platform',
                'slug' => 'blog-platform',
                'short_description' => 'Modern blog platform with rich text editor, comments, and SEO optimization.',
                'description' => 'A feature-rich blog platform built with Next.js and Strapi headless CMS.',
                'price' => 129.99,
                'sale_price' => 99.99,
                'category' => 'CMS',
                'technology' => 'Next.js, Strapi, PostgreSQL',
                'features' => json_encode([
                    'Rich text editor',
                    'Comment system',
                    'SEO optimization',
                    'Social sharing',
                    'Newsletter integration',
                    'Search functionality',
                    'Tag system',
                    'Scheduled posts'
                ]),
                'license' => 'MIT',
                'version' => '1.8',
                'requirements' => 'Node.js 18+, PostgreSQL 14+',
                'is_featured' => false,
                'is_active' => true
            ],
            [
                'name' => 'Real Estate Portal',
                'slug' => 'real-estate-portal',
                'short_description' => 'Complete real estate listing portal with property search and agent management.',
                'description' => 'A comprehensive real estate portal built with Laravel and Vue.js.',
                'price' => 349.99,
                'category' => 'Real Estate',
                'technology' => 'Laravel, Vue.js, MySQL',
                'features' => json_encode([
                    'Property listings',
                    'Advanced search filters',
                    'Agent management',
                    'Mortgage calculator',
                    'Virtual tours',
                    'Favorite properties',
                    'Lead generation',
                    'Map integration'
                ]),
                'license' => 'Commercial',
                'version' => '2.5',
                'requirements' => 'PHP 8.1+, MySQL 8.0+',
                'is_featured' => true,
                'is_active' => true
            ]
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}