<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $products = [
            [
                'title' => 'Apple MacBook Air M1 - 13" - 256GB SSD',
                'slug' => 'Apple-MacBook-Air-M1-13"-256GB-SSD',
                'description' => 'Apple MacBook Air with M1 chip, 8-core CPU, 7-core GPU, and 256GB SSD. Ultra-thin and powerful for everyday tasks.',
                'brand' => 'Apple',
                'price' => 999999.0,
                'ram' => 8,
                'type_storage' => 'SSD',
                'storage' => 256,
                'processor' => 'Apple M1',
                'screen_size' => 13.3,
                'image' => 'upload/images/macbook_pro.png',
                'stock' => 10,
                'color' => 'Silver',
                'os' => 'macOS',
            ],
            [
                'title' => 'Dell XPS 13 - Intel i7 - 512GB SSD - Windows 11',
                'slug' => 'Dell-XPS-13-Intel-i7-512GB-SSD-Windows-11',
                'description' => 'Dell XPS 13 with Intel i7 11th Gen processor, 16GB RAM, and 512GB SSD. Perfect for multitasking and portability.',
                'brand' => 'Dell',
                'price' => 135000.0,
                'ram' => 16,
                'type_storage' => 'SSD',
                'storage' => 512,
                'processor' => 'Intel Core i7',
                'screen_size' => 13.4,
                'image' => 'upload/images/dell_xps_13.jpeg',
                'stock' => 5,
                'color' => 'Platinum Silver',
                'os' => 'Windows 11',
            ],
            [
                'title' => 'HP Spectre x360 - Intel i5 - 256GB SSD - Windows 10',
                'slug' => 'HP-Spectre-x360-Intel-i5-256GB-SSD-Windows-10',
                'description' => 'HP Spectre x360 2-in-1 with Intel i5, 8GB RAM, and 256GB SSD. Stylish design with touchscreen and versatile functionality.',
                'brand' => 'HP',
                'price' => 120000.0,
                'ram' => 8,
                'type_storage' => 'SSD',
                'storage' => 256,
                'processor' => 'Intel Core i5',
                'screen_size' => 13.3,
                'image' => 'upload/images/hp_spectre_x360.jpeg',
                'stock' => 8,
                'color' => 'Nightfall Black',
                'os' => 'Windows 10',
            ],
            [
                'title' => 'Lenovo ThinkPad X1 Carbon - Intel i7 - 1TB SSD - Windows 11 Pro',
                'slug' => 'Lenovo-ThinkPad-X1-Carbon-Intel-i7-1TB-SSD-Windows-11-Pro',
                'description' => 'Lenovo ThinkPad X1 Carbon Gen 9 with Intel i7, 16GB RAM, and 1TB SSD. Reliable and powerful for business use.',
                'brand' => 'Lenovo',
                'price' => 175000.0,
                'ram' => 16,
                'type_storage' => 'SSD',
                'storage' => 1024,
                'processor' => 'Intel Core i7',
                'screen_size' => 14.0,
                'image' => 'upload/images/lenovo_thinkpad_x1.jpg',
                'stock' => 4,
                'color' => 'Black',
                'os' => 'Windows 11 Pro',
            ],
            [
                'title' => 'ASUS ROG Strix G15 - AMD Ryzen 7 - 512GB SSD - Windows 11',
                'slug' => 'ASUS-RO-Strix-G15-AMD-Ryzen-7-512GB-SSD-Windows-11',
                'description' => 'ASUS ROG Strix G15 gaming laptop with Ryzen 7, NVIDIA GTX 1650, 16GB RAM, and 512GB SSD. Built for serious gaming.',
                'brand' => 'ASUS',
                'price' => 140000.0,
                'ram' => 16,
                'type_storage' => 'SSD',
                'storage' => 512,
                'processor' => 'AMD Ryzen 7',
                'screen_size' => 15.6,
                'image' => 'upload/images/asus_rog_strix_g15.jpg',
                'stock' => 3,
                'color' => 'Eclipse Gray',
                'os' => 'Windows 11',
            ],
            [
                'title' => 'Microsoft Surface Laptop 4 - AMD Ryzen 5 - 256GB SSD - Windows 11',
                'slug' => 'Microsoft-Surface-Laptop-4-AMD-Ryzen-5-256GB-SSD-Windows-11',
                'description' => 'Microsoft Surface Laptop 4 with Ryzen 5, 8GB RAM, and 256GB SSD. Thin, lightweight, and perfect for productivity.',
                'brand' => 'Microsoft',
                'price' => 900000.0,
                'ram' => 8,
                'type_storage' => 'SSD',
                'storage' => 256,
                'processor' => 'AMD Ryzen 5',
                'screen_size' => 13.5,
                'image' => 'upload/images/microsoft_surface_laptop_4.webp',
                'stock' => 12,
                'color' => 'Platinum',
                'os' => 'Windows 11',
            ],
            [
                'title' => 'Acer Aspire 5 - Intel i3 - 1TB HDD - Windows 10 Home',
                'slug' => 'Acer-Aspire-5-Intel-i3-1TB-HDD-Windows-10-Home',
                'description' => 'Affordable Acer Aspire 5 laptop with Intel i3, 8GB RAM, and 1TB HDD storage. Ideal for students and everyday use.',
                'brand' => 'Acer',
                'price' => 500000.0,
                'ram' => 8,
                'type_storage' => 'HDD',
                'storage' => 1024,
                'processor' => 'Intel Core i3',
                'screen_size' => 15.6,
                'image' => 'upload/images/acer_aspire_5.webp',
                'stock' => 15,
                'color' => 'Charcoal Black',
                'os' => 'Windows 10 Home',
            ],
            [
                'title' => 'Apple MacBook Pro M2 - 14" - 512GB SSD',
                'slug' => 'Apple-MacBook-Pro-M2-14"-512GB-SSD',
                'description' => 'Apple MacBook Pro with M2 chip, 16GB RAM, and 512GB SSD. Ideal for professionals with powerful performance.',
                'brand' => 'Apple',
                'price' => 180000.0,
                'ram' => 16,
                'type_storage' => 'SSD',
                'storage' => 512,
                'processor' => 'Apple M2',
                'screen_size' => 14.0,
                'image' => 'upload/images/macbook_pro.png',
                'stock' => 6,
                'color' => 'Space Gray',
                'os' => 'macOS',
            ],
            [
                'title' => 'Samsung Galaxy Book Pro - Intel i5 - 256GB SSD - Windows 11',
                'slug' => 'Samsung-Galaxy-Book-Pro-Intel-i5-256GB-SSD-Windows-11',
                'description' => 'Samsung Galaxy Book Pro with Intel i5, 8GB RAM, and 256GB SSD. Lightweight and perfect for on-the-go productivity.',
                'brand' => 'Samsung',
                'price' => 105000.0,
                'ram' => 8,
                'type_storage' => 'SSD',
                'storage' => 256,
                'processor' => 'Intel Core i5',
                'screen_size' => 15.6,
                'image' => 'upload/images/samsung_galaxy_book_pro.jpg',
                'stock' => 9,
                'color' => 'Mystic Silver',
                'os' => 'Windows 11',
            ],
            [
                'title' => 'Lenovo IdeaPad 3 - AMD Ryzen 3 - 128GB SSD - Windows 10',
                'slug' => 'Lenovo-IdeaPad-3-AMD-Ryzen-3-128GB-SSD-Windows-10',
                'description' => 'Affordable Lenovo IdeaPad 3 with Ryzen 3, 4GB RAM, and 128GB SSD. Suitable for basic tasks and students.',
                'brand' => 'Lenovo',
                'price' => 400000.0,
                'ram' => 4,
                'type_storage' => 'SSD',
                'storage' => 128,
                'processor' => 'AMD Ryzen 3',
                'screen_size' => 14.0,
                'image' => 'upload/images/lenovo_ideapad_3.webp',
                'stock' => 20,
                'color' => 'Abyss Blue',
                'os' => 'Windows 10',
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
