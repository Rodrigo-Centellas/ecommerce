<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //LAPTOSPS
        for ($i=0; $i < 5; $i++){
            Product::create([
                'name' => 'laptop' . $i,
                'slug' => 'laptop-' . $i,
                'details' => 'Jumper 16 Inch Laptop, 16GB RAM 512GB SSD, 11th Gen Intel Celeron N5095',
                'price' => 400,
                'category_id' => 1,
                'image' => 'products/dummy/Laptops/Laptop1/portada.jpg',
                'images' => '["products/dummy/Laptops/Laptop1/2.jpg", "products/dummy/Laptops/Laptop1/2.jpg","products/dummy/Laptops/Laptop1/3.jpg"]',
                'description' => 'Jumper 16 Inch Laptop, 16GB RAM 512GB SSD, 11th Gen Intel Celeron N5095, FHD IPS Screen(1920*1200), Windows 11 Laptops Computer with 2.4G/5G WiFi, Four Stereo Speakers, Cooling Fan, 38000mWH Battery.',
                'quantity' => 10
            ]);
        }

        for ($i=5; $i < 10; $i++){
            Product::create([
                'name' => 'laptop' . $i,
                'slug' => 'laptop-' . $i,
                'details' => 'MSI Pulse GL66 15.6',
                'price' => 999,
                'category_id' => 1,
                'image' => 'products/dummy/Laptops/Laptop2/portada.jpg',
                'images' => '["products/dummy/Laptops/Laptop2/1.jpg", "products/dummy/Laptops/Laptop2/2.jpg", "products/dummy/Laptops/Laptop2/3.jpg"]',
                'description' => 'MSI Pulse GL66 15.6" FHD 144Hz Gaming Laptop: Intel Core i7-12700H RTX 3070 16GB 512GB NVMe SSD, Type-C USB 3.2 Gen 1, RGB Gaming Keyboard, Cooler Boost 5, Win11 Home: Black 12UGKV-464  .',
                'quantity' => 10
            ]);
        }
        for ($i=10; $i < 15; $i++){
            Product::create([
                'name' => 'laptop' . $i,
                'slug' => 'laptop-' . $i,
                'details' => 'Jumper 16 Inch Laptop, 16GB RAM 512GB SSD, 11th Gen Intel Celeron N5095',
                'price' => 219,    
                'category_id' => 1,
                'image' => 'products/dummy/Laptops/Laptop3/portada.jpg',
                'images' => '["products/dummy/Laptops/Laptop3/1.jpg", "products/dummy/Laptops/Laptop3/2.jpg", "products/dummy/Laptops/Laptop3/3.jpg"]',
                'description' => 'Newest HP 14" HD Laptop, Windows 11, Intel Celeron Dual-Core Processor Up to 2.60GHz, 4GB RAM, 64GB SSD, Webcam, Dale Pink(Renewed) (Dale Pink).',
                'quantity' => 10
            ]);}
            for ($i=15; $i < 20; $i++){
            Product::create([
                'name' => 'laptop' . $i,
                'slug' => 'laptop-' . $i,
                'details' => 'ASUS Chromebook Vibe C55 Flip, Cloud Gaming Laptop, 15.6',
                'price' => 700,
                'category_id' => 1,
                'image' => 'products/dummy/Laptops/Laptop4/portada.jpg',
                'images' => '["products/dummy/Phones/Phone1/1.webp", "products/dummy/Phones/Phone1/2.webp", "products/dummy/Phones/Phone1/3.webp"]',
                'description' => 'ASUS Chromebook Vibe C55 Flip, Cloud Gaming Laptop, 15.6" Full HD 144 Hz Touch Display, Intel® Core™ i5-1135G7 Processor, 512GB SSD, 16GB RAM, ChromeOS, Mineral Gray, CX5501FEA-AS562T.',
                'quantity' => 10
            ]);}

            //final de laptos


      //iphone
        for ($i=0; $i < 10; $i++) {
            Product::create([
                'name' => 'Phone' . $i,
                'slug' => 'phone-' . $i,
                'details' => 'Apple iPhone 14 Pro Max 256GB Plateado',
                'price' => rand(1000, 1200),
                'category_id' => 3,
                'image' => 'products/dummy/Phones/phone2/portada.webp',
                'images' => '["products/dummy/Phones/Phone2/1.webp", "products/dummy/Phones/Phone1/2.webp", "products/dummy/Phones/Phone1/3.webp"]',
                'description' => 'Deslumbra con el iPhone 14 Pro Max de 256GB Plateado, 
                Cuenta con procesador Chip A16 Bionic con Dynamic Island, Pantalla OLED Super 
                Retina XDR 6.7 pulgadas y sistema de cámara dual de 48 Mpx.',
                'quantity' => 10
            ]);
        }
        for ($i=10; $i < 20; $i++) {
            Product::create([
                'name' => 'Phone' . $i,
                'slug' => 'phone-' . $i,
                'details' => 'Samsung s23 128Gb',
                'price' => rand(1000, 1200),
                'category_id' => 3,
                'image' => 'products/dummy/Phones/phone1/portada.webp',
                'images' => '["products/dummy/Phones/Phone1/1.webp", "products/dummy/Phones/Phone1/2.webp", "products/dummy/Phones/Phone1/3.webp"]',
                'description' => 'Pantalla: Dynamic AMOLED 2X touchscreen capacitivo, 16M colores 6.8", 1440 x 3088 pixels
                Refresco de pantalla: 120Hz
                HDR+: Si
                Procesador: Snapdragon 8 Gen2
                RAM: 12GB',
                'quantity' => 10
            ]);
        }
        
        //inicio desktop

    
        for ($i=0; $i < 10; $i++) {
            Product::create([
                'name' => 'Desktop' . $i,
                'slug' => 'desktop-' . $i,
                'details' => 'SkyTech Shadow 3.0 Gaming Computer PC Desktop - Ryzen 7 3700X 8-Core 3.6GHz, RTX 3060 12GB, 1TB SSD, 16GB DDR4 3200, RGB Fans, AC WiFi, 600W Gold PSU, Windows 11 Home 64-bit, Black',
                'price' => rand(1000, 9999),
                'category_id' => 2,
                'image' => 'products/dummy/Phones/phone1/Desktop/desktop1/portada.jpg',
                'images' => '["products/dummy/Phones/phone1/Desktop/desktop1/1.jpg", "products/dummy/Phones/phone1/Desktop/desktop1/2.jpg",products/dummy/Phones/phone1/Desktop/desktop1/3.jpg]',
                'description' => '✔ AMD Ryzen 7 3700X 8-Core 3.6 GHz (4.4 GHz Turbo) CPU Processor | 1TB SSD |
                ✔ GeForce RTX 3060 GDDR6 12GB Graphics Card (Brand May Varies) | 16GB DDR4 3200MHz Gaming Memory | Windows 11 Home 64-bit
                ✔ 802.11AC | No Bloatware | Graphic output options include 1 x HDMI, and 1 x Display Port Guranteed, Additional Ports may vary | USB Ports Including 2.0, 3.0, and 3.2 Gen1 Ports | HD Audio and Mic | Free Gaming Keyboard and Mouse
                ✔ Heatsink & 3 x RGB Fans | Powered by 80 Plus Gold Certified 600 Watt Power Supply | Skytech Shadow Gaming Case with Tempered Glass – Black
                ✔ 1 Year Warranty on Parts and Labor | Lifetime Free Technical Support | Assembled in the USA | This powerful gaming PC is capable of running all your favorite games such as World of Warcraft, League of Legends, Grand Theft Auto V, Apex Legends, Fortnite, Roblox, PLAYERUNKNOWN’s Battlegrounds, Overwatch, Counter-Strike: Global Offensive, Battlefield V, Minecraft, The Division 2, hogwarts legacy(1440p), and more at High to Ultra settings, crisp 1440p Full HD resolution and smooth 60+ FPS game play.',
                'quantity' => 10
            ]);
        }
        for ($i=10; $i < 20; $i++) {
            Product::create([
                'name' => 'Desktop' . $i,
                'slug' => 'desktop-' . $i,
                'details' => 'Acer Aspire TC-1760-UA92 Desktop | 12th Gen Intel Core i5-12400 6-Core Processor | 12GB 3200MHz DDR4 | 512GB NVMe M.2 SSD | 8X DVD | Intel Wireless Wi-Fi 6 AX201 | Bluetooth 5.2 | Windows 11 Home',
                'price' => rand(1000, 9999),
                'category_id' => 2,
                'image' => 'products/dummy/Phones/phone1/Desktop/desktop2/portada.jpg',
                'images' => '["products/dummy/Phones/phone1/Desktop/desktop2/1.jpg", "products/dummy/Phones/phone1/Desktop/desktop2/2.jpg", "products/dummy/Phones/phone1/Desktop/desktop2/3.jpg"]',
                'description' => 'ROBUST COMPUTING HUB: Tackle any task—from basic computing to multimedia entertainment—every time you power up this beastly machine. Easily expandable and driven by a 12th Gen Intel Core i5 processor, it has the speed, power and storage to do more—everyday.
                12th Generation Intel Core i5-12400 6-Core Processor (Up to 4.4GHz) | Intel UHD Graphics 730
                12GB 3200MHz DDR4 Memory | 512GB M.2 2280 NVMe SSD | 8X DVD-Writer Double-Layer Drive (DVD-RW)
                Intel Wireless Wi-Fi 6 AX201 802.11ax Dual-Band 2.4GHz and 5GHz featuring 2x2 MU-MIMO technology | Bluetooth 5.2 | 10/100/1000 Gigabit Ethernet LAN
                1 - USB 3.2 Type C Gen 1 port (up to 5 Gbps) (Front) | 2 - USB 3.2 Gen 1 Ports (1 Front and 1 Rear) | 4 - USB 2.0 Ports (Rear) | 2 - HDMI Ports (Rear)
                USB Keyboard and Mouse Included | Windows 11 Home.',
                'quantity' => 10
            ]);
        }




        for ($i=0; $i < 10; $i++) {
            Product::create([
                'name' => 'Tablet' . $i,
                'slug' => 'tablet-' . $i,
                'details' => 'SAMSUNG Galaxy Tab A8 10.5” 32GB Android Tablet w/ LCD Screen, Long Lasting Battery, Kids Content, Smart Switch, Expandable Memory, US Version, Silver, Amazon Exclusive',
                'price' => rand(400, 500),
                'category_id' => 4,
                'image' => 'products/dummy/tablets/tablets1/portada.jpg',
                'images' => '["products/dummy/tablets/tablets1/1.jpg", "products/dummy/tablets/tablets1/2.jpg", "products/dummy/tablets/tablets1/3.jpg"]',
                'description' => 'A SCREEN EVERYONE WILL LOVE: Whether your family is streaming or video chatting with friends, the Galaxy Tab A8 tablet brings out the best in every moment on a 10.5" LCD screen
                POWER AND STORAGE FOR ALL: Get the power, storage and speed your family needs with an upgraded chipset and plenty of room to keep files — up to 128GB of storage; A long-lasting battery lets you go unplugged for hours to keep the family fun going
                CHARGE FAST, POWER FOR HOURS: Go for hours on a single charge and back to 100% with the fast charging USB C port; Battery life may vary depending on network environment, usage patterns and other factors
                GALAXY ECOSYSTEM EXPERIENCE: Open up a new world of convenient possibilities with the Galaxy ecosystem experience — your devices, including your phone, laptop computer, and tablet, all automatically talk to one another seamlessly
                YOUR NOTES, ALL IN ONE PLACE: Do more with your notes with Galaxy connectivity that automatically syncs everything from to-do lists to school work, whether youre on your tablet, phone or watch
                KIDS DIGITAL LEARNING: Children can enjoy access to Samsung Kids, a library of safe and fun games, books and videos that are kid friendly and parent approved
                EASIEST. TRANSFER. EVER: No matter what operating system youre using, Smart Switch makes it a breeze to move your data and favorite files in three easy steps',
                'quantity' => 10
            ]);
        }
        
        for ($i=11; $i < 20; $i++) {
            Product::create([
                'name' => 'Tablet' . $i,
                'slug' => 'tablet-' . $i,
                'details' => 'Apple iPad (9th Generation): with A13 Bionic chip, 10.2-inch Retina Display, 64GB, Wi-Fi, 12MP front/8MP Back Camera, Touch ID, All-Day Battery Life – Silver',
                'price' => rand(200, 300),
                'category_id' => 4,
                'image' => 'products/dummy/tablets/tablets2/portada.jpg',
                'images' => '["products/dummy/tablets/tablets2/1.jpg", "products/dummy/tablets/tablets2/2.jpg", "products/dummy/tablets/tablets2/3.jpg"]',
                'description' => 'WHY IPAD — All the essentials in the most affordable iPad, with a beautiful 10.2-inch Retina display, powerful A13 Bionic chip, and an Ultra Wide front camera with Center Stage. Work, play, create, learn, stay connected, and more.
                IPADOS + APPS — iPadOS makes iPad more productive, intuitive, and versatile. With iPadOS, run multiple apps at once, use Apple Pencil to write in any text field with Scribble, and edit and share photos. iPad comes with essential apps like Safari, Messages, and Keynote, with over a million more apps available on the App Store.
                FAST WI-FI CONNECTIVITY — Fast Wi-Fi keeps you connected at home, work, school, or wherever you go with your iPad.
                PERFORMANCE AND STORAGE — The A13 Bionic chip gives you the graphics performance you need. And with all-day battery life, iPad is perfect for playing immersive games and more. Choose from 64GB or 256GB storage options.
                APPLE PENCIL AND SMART KEYBOARD — Apple Pencil (1st generation) transforms iPad into an immersive drawing canvas and the world’s best note‑taking device. The Smart Keyboard features a comfortable typing experience and folds into a slim, lightweight cover for protection.
                10.2-INCH RETINA DISPLAY — With incredible detail and vivid colors, it’s perfect for watching movies or drawing your next masterpiece. True Tone adjusts the display to the color temperature of the room to make viewing comfortable in any light.
                UNLOCK AND PAY WITH TOUCH ID — Touch ID is built into the top button, so you can use your fingerprint to unlock your iPad, sign in to apps, and make payments securely with Apple Pay.',
                'quantity' => 10
            ]);
        }
        for ($i=0; $i < 10; $i++) {
            Product::create([
                'name' => 'TV Amazon' . $i,
                'slug' => 'tv-' . $i,
                'details' => 'Amazon Fire TV 50" 4-Series 4K UHD smart TV, stream live TV without cable',
                'price' => rand(300, 500),
                'category_id' => 5,
                'image' => 'products/dummy/tv/tv1/portada.jpg',
                'images' => '["products/dummy/tv/tv1/1.jpg", "products/dummy/tv/tv1/2.jpg", "products/dummy/tv/tv1/3.jpg"]',
                'description' => 'Bring movies and shows to life with support for vivid 4K Ultra HD, HDR 10, HLG, and Dolby Digital Plus.
                4K Ultra HD, HDR 10, and HLG deliver a clearer and more vibrant picture with brighter colors compared to 1080p Full HD.
                Press and ask Alexa to easily find, launch, and control your content, or check the weather, sports scores, and more.
                Stream over 1 million movies and TV episodes with subscriptions to Netflix, Prime Video, Disney+, and more.
                Watch live and free TV, play video games, and stream music.
                Fire TV adds new Alexa skills, features, smart home capabilities, and voice functionality all the time.
                Use the 4 HDMI inputs to connect all your gaming, cable and audio equipment.',
                'quantity' => 10
            ]);
        }

        for ($i=10; $i < 20; $i++) {
            Product::create([
                'name' => 'TV Samsung' . $i,
                'slug' => 'tv-' . $i,
                'details' => 'SAMSUNG 32-Inch Class QLED 4K Q60C Series Quantum HDR, Dual LED, Object Tracking Sound Lite, Q-Symphony, Motion Xcelerator, Gaming Hub, Smart TV with Alexa Built-in (QN32Q60C, 2023 Model)',
                'price' => rand(400, 600),
                'category_id' => 5,
                'image' => 'products/dummy/tv/tv2/portada.jpg',
                'images' => '["products/dummy/tv/tv2/1.jpg", "products/dummy/tv/tv2/2.jpg", "products/dummy/tv/tv2/3.jpg"]',
                'description' => '100% COLOR VOLUME W/ QUANTUM DOT: Take in a billion shades of unwavering color and enjoy vivid, lifelike color at any brightness level as Quantum Dot technology works to create every shade you see on screen*
                QUANTUM PROCESSOR LITE W/ 4K UPSCALING: See shows and movies in a whole new light with 4K optimization; Enjoy enhanced clarity and depth in every scene as our Quantum Processor Lite with 4K Upscaling automatically transforms everything you watch
                DUAL LED: Don’t call it temperamental; You’ll enjoy beautifully balanced colors with dedicated warm and cool Dual LED backlights; Get stronger and accurate contrast with innovative technology that adapts automatically to match your content
                QUANTUM HDR: Watch the details shine through with Quantum HDR that goes beyond leading standards to create deep blacks, impressive contrast, and picture quality that’s analyzed and refined to match the creator’s vison
                MOTION XCELERATOR: Experience smooth motion and improved clarity with Motion Xcelerator; Now you can fuel your need for speed with high intensity sports, movies, and games, and enjoy crisp and clear details at the same time
                OBJECT TRACKING SOUND LITE: You’ll hear 3D surround sound that follows the movement on screen using our incredible virtual top channel audio—putting you right in the middle of the car chase, stampede or party scene',
                'quantity' => 10
            ]);
        }
        for ($i=0; $i < 20; $i++) {
            Product::create([
                'name' => 'Camera' . $i,
                'slug' => 'camera-' . $i,
                'details' => '4K Digital Camera with Viewfinder Flash & Dial, 48MP Vlogging Camera for Photography and Video Autofocus Anti-Shake, Travel Portable Digital Camera with SD Card 2 Batteries, 16X Zoom Fashion Camera',
                'price' => rand(1000, 9999),
                'category_id' => 6,
                'image' => 'products/dummy/image5.jpg',
                'images' => '["products/dummy/image5.jpg", "products/dummy/image5.jpg", "products/dummy/image5.jpg"]',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, nisi. Exercitationem, explicabo obcaecati dicta libero inventore soluta ducimus, necessitatibus quaerat magnam sapiente mollitia eum beatae quidem et perferendis quis similique.',
                'quantity' => 10
            ]);
        }
        $products = Product::all();
        foreach ($products as $product) {
            if($product->id % 3 == 0) {
                $product->featured = true;
                $product->save();
            }
        }
    }
}
