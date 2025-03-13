<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    private $products = [
        [
            'id' => '001',
            'name' => 'Google Nest Learning Thermostat 4th Gen with Sensor',
            'model_number' => 'GA05169-US',
            'price' => 239,
            'images' => ['ecoheat-5000.jpeg', 'ecoheat-5000.jpeg', 'ecoheat-5000.jpeg', 'p1.webp', 'p2.webp', 'p3.webp'],
            'category' => 'Climate Control',
            'discount' => '10%',
            'short_description' => 'Take control of your home with Nest’s Learning Thermostat. Enjoy personalized comfort and savings with minimum effort.',
        
            'description' => 'The Smart Schedule adapts to your preferred temperatures and timing, offering personalized adjustments to help you save energy—all conveniently managed through the Google Home app.
        
            Natural heating and cooling help conserve energy by understanding how external temperatures affect your home—like how it warms up on sunny days.
        
            Adaptive Eco discovers the perfect energy-efficient temperature for your home, saving energy while you’re away and ensuring comfort when you return.
        
            The Nest Learning Thermostat can help save an average of 12% on heating bills and 15% on cooling bills.',
        
            'weight' => '0.35 lbs',
            'dimensions' => 'Depth (in) 1.1, Display Height (in) 2.7, Display Width (in) 2.7, Diameter (in) 3.9',
            'color_options' => 'Polished Steel, Polished Gold, Polished Obsidian/Black',
            'material' => 'Metal',
        
            'key_features' => [
                '2.7″ (600x600p) Diameter Circular Liquid Crystal Display',
                'Remote Control With Apple Watch, Smartphone, Tablet, Or Laptop',
                'Soli Sensor for Motion Sense, Temperature, Humidity, Ambient Light Sensors',
                'HVAC System Wiring Power Source',
                'Wi-Fi 802.11n (2.4 GHz / 5 GHz)',
                'Bluetooth Low Energy (BLE)',
                'Built-In Rechargeable Lithium-Ion Battery',
                'Polished Obsidian/Black Finish',
            ],
        
            'technical_specs' => [
                'Brand' => 'Google',
                'Type' => 'Programmable Wifi Thermostat',
                'Color' => 'Polished Steel, Polished Gold, Polished Obsidian/Black',
                'Control Type' => 'Touch',
                'Item Weight' => '0.35 lbs',
                'Application' => 'Google Home',
                'Voltage' => '24 Volts',
                'Connectivity Protocol' => 'Wi-Fi 802.11n (2.4 GHz / 5 GHz)',
                'Sensors' => 'Motion, Temperature, Humidity, Ambient Light',
                'Model No.' => 'GA05169-US',
                'Display Resolution' => '2.7" (600x600p) Diameter Circular Liquid Crystal Display',
                'Power Source' => 'HVAC System Wiring',
                'Supported Languages' => 'English, Spanish, French',
                'Batteries' => 'Built-In Rechargeable Lithium-Ion Battery',
                'Item Package Quantity' => '1',
                'In the box' => 'Nest Learning Thermostat (4th gen), Thermostat base, Trim plate, Steel plate, Nest Temperature Sensor (2nd gen), Mounting screws and wiring labels',
            ],
        
            'features' => ['Energy Efficient', 'Compact Design', 'Smart Scheduling', 'Remote Access', 'Eco Mode', 'Voice Control'],
            
            'categories' => ['Nest', 'Simple Products', 'Smart Thermostats'],
    
        ],
        
        [
            'id' => '002',
            'name' => 'ThermaSense X1',
            'price' => 289,
            'images' => ['thermasense-x1.jpeg', 'thermasense-x1.jpeg', 'thermasense-x1.jpeg', 'p1.webp', 'p2.webp'],
            'category' => 'Climate Control',
            'discount' => '20%',
            'description' => 'Advanced temperature sensing technology for optimal comfort.',
            'weight' => '4 kg',
            'dimensions' => '25 x 15 x 8 cm',
            'color_options' => 'Silver, Black',
            'material' => 'Plastic',
            'features' => ['Advanced Temperature Control', 'Compact Design'],
            'reviews' => [
                ['text' => 'Excellent temperature control.', 'author' => 'Mike Brown'],
                ['text' => 'Easy to use interface.', 'author' => 'Emily Lee'],
            ],
        ],
        [
            'id' => '003',
            'name' => 'FrostWave Elite',
            'price' => 189,
            'images' => ['frostwave-elite.jpeg', 'frostwave-elite.jpeg', 'frostwave-elite.jpeg', 'p1.webp', 'p2.webp'],
            'category' => 'Smart Home',
            'discount' => '10%',
            'description' => 'Smart home solution for efficient cooling and heating.',
            'weight' => '3 kg',
            'dimensions' => '20 x 10 x 5 cm',
            'color_options' => 'White, Gray',
            'material' => 'Plastic',
            'features' => ['Smart Home Integration', 'Energy Efficient'],
            'reviews' => [
                ['text' => 'Great for smart home integration.', 'author' => 'David Kim'],
                ['text' => 'Easy to install.', 'author' => 'Sarah Taylor'],
            ],
        ],
        [
            'id' => '004',
            'name' => 'Sentinel Vision X',
            'price' => 319,
            'images' => ['sentinel-vision-x.jpeg', 'sentinel-vision-x.jpeg', 'sentinel-vision-x.jpeg', 'p1.webp', 'p2.webp'],
            'category' => 'Security',
            'discount' => '15%',
            'description' => 'Advanced security solution with enhanced vision capabilities.',
            'weight' => '6 kg',
            'dimensions' => '35 x 25 x 12 cm',
            'color_options' => 'Black, Silver',
            'material' => 'Metal',
            'features' => ['Advanced Motion Detection', 'High-Resolution Display'],
            'reviews' => [
                ['text' => 'Excellent security features.', 'author' => 'James Davis'],
                ['text' => 'Easy to set up.', 'author' => 'Lisa Nguyen'],
            ],
        ],
        [
            'id' => '005',
            'name' => 'KeylessGuard 2.0',
            'price' => 259,
            'images' => ['keylessguard-2.jpeg', 'keylessguard-2.jpeg', 'keylessguard-2.jpeg', 'p1.webp', 'p2.webp'],
            'category' => 'Security',
            'discount' => '5%',
            'description' => 'Keyless entry solution for enhanced security and convenience.',
            'weight' => '2 kg',
            'dimensions' => '15 x 10 x 5 cm',
            'color_options' => 'Silver, Black',
            'material' => 'Plastic',
            'features' => ['Keyless Entry', 'Compact Design'],
            'reviews' => [
                ['text' => 'Convenient keyless entry.', 'author' => 'Tom Johnson'],
                ['text' => 'Easy to install.', 'author' => 'Jessica Martin'],
            ],
        ],
    ];

    public function index()
    {
        return view('pages.products-listing', ['products' => $this->products]);
    }

    public function show($id)
    {
        $product = collect($this->products)->firstWhere('id', $id);
        if (!$product) {
            abort(404, "Product Not Found");
        }

        // Fetch related products
        $relatedProducts = collect($this->products)->filter(function ($item) use ($product) {
            return $item['category'] === $product['category'] && $item['id'] !== $product['id'];
        })->take(4); // Show up to 3 related products

        return view('pages.product-details', [
            "product"         => $product,
            "relatedProducts" => $relatedProducts,
        ]);
    }
}
