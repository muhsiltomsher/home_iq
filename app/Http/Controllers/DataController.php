<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index(Request $request)
    {
        // Sample Products Data
        $products = [
            ['name' => 'EcoHeat 5000', 'price' => 239, 'image' => 'ecoheat-5000.jpeg', 'category' => 'Climate Control', 'discount' => '10%'],
            ['name' => 'ThermaSense X1', 'price' => 289, 'image' => 'thermasense-x1.jpeg', 'category' => 'Climate Control', 'discount' => '20%'],
            ['name' => 'FrostWave Elite', 'price' => 189, 'image' => 'frostwave-elite.jpeg', 'category' => 'Smart Home', 'discount' => '10%'],
            ['name' => 'Sentinel Vision X', 'price' => 319, 'image' => 'sentinel-vision-x.jpeg', 'category' => 'Security', 'discount' => '15%'],
            ['name' => 'KeylessGuard 2.0', 'price' => 259, 'image' => 'keylessguard-2.jpeg', 'category' => 'Security', 'discount' => '5%'],
        ];

        // ✅ Get the latest 3 products for the home page
        $latestProducts = array_slice($products, -3);

        // Sample Services Data
        $services = [
            [
                'id' => 1,
                'title' => 'Smart Thermostats',
                'subtitle' => 'Reduce energy consumption and save money.',
                'description' => 'Did you know that your home’s air conditioners use up to 70% of your energy use? Using smart thermostats like Nest or Ecobee can cut your electricity bill by 20% to 35%. These thermostats learn your habits and automatically regulate temperature based on your schedule.',
                'image' => 'smart-thermostat.jpg',
                'price' => 500
            ],
            [
                'id' => 2,
                'title' => 'Indoor & Outdoor Security Cameras',
                'subtitle' => 'Advanced motion sensors for home security.',
                'description' => 'Protect your home with our range of indoor and outdoor security cameras with built-in lights, night vision, siren alarm, and two-way audio. These cameras offer object and facial detection, along with solar, battery, or hardwired options.',
                'image' => 'security-cameras.jpg',
                'price' => 750
            ],
            [
                'id' => 3,
                'title' => 'AC Service & Maintenance',
                'subtitle' => 'Ensure your air conditioning system runs efficiently.',
                'description' => 'Regular AC maintenance helps your system perform better, reduces electricity bills, and extends its lifespan. Our services include filter replacement, coil cleaning, and full system checkups.',
                'image' => 'ac-service.jpg',
                'price' => 150
            ],
            [
                'id' => 4,
                'title' => 'Smart Locks & Doorbells',
                'subtitle' => 'Secure your home with advanced smart locks.',
                'description' => 'See who’s at your door, grant time-limited access, and enjoy keyless entry with our smart lock and doorbell solutions. Monitor and control access from anywhere via your smartphone.',
                'image' => 'smart-lock.jpg',
                'price' => 300
            ],
            [
                'id' => 5,
                'title' => 'Annual Maintenance Contract',
                'subtitle' => 'Comprehensive home service coverage.',
                'description' => 'Our annual maintenance contract covers unforeseen repairs and ensures your home remains safe, clean, and comfortable. Prevent major costs and inconveniences with regular inspections and repairs.',
                'image' => 'annual-maintenance.jpg',
                'price' => 1200
            ],
            [
                'id' => 6,
                'title' => 'Smart Smoke Detectors',
                'subtitle' => 'Instant alerts for smoke and carbon monoxide.',
                'description' => 'Smart smoke detectors send real-time alerts to your phone and notify you when battery levels are low. They provide voice alerts indicating the exact location of a fire hazard, enhancing home safety.',
                'image' => 'smoke-detector.jpg',
                'price' => 180
            ]
        ];
        
        // return view('pages.services', compact('services'));
        

        // Sample Categories Data
        // $categories = [
        //     ['name' => 'Smart Thermostats', 'image' => 'smart-thermostats.png'],
        //     ['name' => 'Indoor & Outdoor Cameras', 'image' => 'indoor-outdoor-cameras.png'],
        //     ['name' => 'AC Maintenance & Installation', 'image' => 'ac-service-maintenance.png'],
        //     ['name' => 'Smart Locks & Doorbells', 'image' => 'smart-locks-doorbells.png'],
        //     ['name' => 'Home Automation Solutions', 'image' => 'home-automation-solutions.png'],
        //     ['name' => 'Smart Smoke Detectors', 'image' => 'smart-smoke-detectors.png'],
        // ];


        $categories = [
            [
                'name' => 'Smart Thermostats  frff',
                'image' => 'smart-thermostats.png',
                'products' => [
                    ['title' => 'EcoHeat 5000', 'description' => 'Energy-efficient heating.', 'image' => 'ecoheat-5000.jpeg'],
                    ['title' => 'ThermaSense X1', 'description' => 'Smart climate control.', 'image' => 'thermasense-x1.jpeg'],
                ],
            ],
            [
                'name' => 'Indoor & Outdoor Cameras',
                'image' => 'indoor-outdoor-cameras.png',
                'products' => [
                    ['title' => 'Sentinel Vision X', 'description' => 'AI-powered surveillance.', 'image' => 'sentinel-vision-x.jpeg'],
                    ['title' => 'SecureView Pro', 'description' => '24/7 home security.', 'image' => 'secureview-pro.jpeg'],
                ],
            ],
            [
                'name' => 'AC Maintenance & Installation',
                'image' => 'ac-service-maintenance.png',
                'products' => [
                    ['title' => 'FrostWave Elite', 'description' => 'Advanced cooling system.', 'image' => 'frostwave-elite.jpeg'],
                ],
            ],
            [
                'name' => 'Smart Locks & Doorbells',
                'image' => 'smart-locks-doorbells.png',
                'products' => [
                    ['title' => 'KeylessGuard 2.0', 'description' => 'Secure keyless entry.', 'image' => 'keylessguard-2.jpeg'],
                    ['title' => 'Ring DoorCam', 'description' => 'See who’s at your door.', 'image' => 'ring-doorcam.jpeg'],
                ],
            ],
            [
                'name' => 'Home Automation Solutions',
                'image' => 'home-automation-solutions.png',
                'products' => [
                    ['title' => 'Smart Lighting', 'description' => 'Automated LED control.', 'image' => 'smart-lighting.jpeg'],
                    ['title' => 'Smart Plugs', 'description' => 'Remote power management.', 'image' => 'smart-plugs.jpeg'],
                ],
            ],
            [
                'name' => 'Smart Smoke Detectors',
                'image' => 'smart-smoke-detectors.png',
                'products' => [
                    ['title' => 'FireShield X', 'description' => 'Advanced fire detection.', 'image' => 'fireshield-x.jpeg'],
                ],
            ],
        ];
        


                // ✅ Sample Testimonials Data
                $testimonials = [
                    [
                        'name' => 'Sarah L.',
                        'title' => 'A Game-Changer for My Home!',
                        'review' => 'I never realized how much convenience smart home technology could bring until I installed their solutions. Everything from lighting to security is now automated and easy to control. The setup was quick, and their team guided me through every step. Highly recommend for anyone looking to upgrade their home!',
                        'image' => 'sarah-l.jpg',
                    ],
                    [
                        'name' => 'James R.',
                        'title' => 'Professional Installation & Support!',
                        'review' => 'The installation team was prompt and extremely professional. They made sure my smart security system was set up perfectly, and I now feel much safer. The support team is always available for any queries!',
                        'image' => 'james-r.jpg',
                    ],
                    [
                        'name' => 'Olivia M.',
                        'title' => 'Seamless Integration!',
                        'review' => 'I had concerns about integrating my smart devices with my existing home setup, but these guys made it a breeze! Now I can control everything from my phone effortlessly!',
                        'image' => 'olivia-m.jpg',
                    ],
                ];




                $blogs = [
                    [
                        'id' => 1,
                        'title' => 'Top 10 Smart Home Trends in 2025',
                        'excerpt' => 'Discover the latest innovations in smart home technology, from AI-powered assistants to energy-efficient automation...',
                        'image' => 'blog1.jpg',
                        'link' => route('blog.details', ['id' => 1])
                    ],
                    [
                        'id' => 2,
                        'title' => 'How to Secure Your Home with Smart Locks',
                        'excerpt' => 'Learn how to enhance your home security using smart locks, biometric authentication, and remote access...',
                        'image' => 'blog2.jpg',
                        'link' => route('blog.details', ['id' => 2])
                    ],
                    [
                        'id' => 3,
                        'title' => 'The Future of Home Automation: What’s Next?',
                        'excerpt' => 'Explore the future of home automation and how AI, IoT, and smart sensors are revolutionizing the industry...',
                        'image' => 'blog3.jpg',
                        'link' => route('blog.details', ['id' => 3])
                    ],
                ];
        
                // ✅ Sample Testimonials Data
                $testimonials = [
                    [
                        'name' => 'Sarah L.',
                        'title' => 'A Game-Changer for My Home!',
                        'review' => 'I never realized how much convenience smart home technology could bring until I installed their solutions...',
                        'image' => 'sarah-l.jpg',
                    ],
                    [
                        'name' => 'James R.',
                        'title' => 'Professional Installation & Support!',
                        'review' => 'The installation team was prompt and extremely professional. They made sure my smart security system was set up perfectly...',
                        'image' => 'james-r.jpg',
                    ],
                ];

                





        // ✅ **Apply Filters**
        if ($request->has('category') && $request->category !== 'All Categories') {
            $products = array_filter($products, fn($product) => $product['category'] === $request->category);
        }

        if ($request->has('discount') && $request->discount !== 'All Discounts') {
            $products = array_filter($products, fn($product) => $product['discount'] === $request->discount);
        }

        if ($request->has('price_range')) {
            [$min, $max] = explode('-', $request->price_range);
            $products = array_filter($products, fn($product) => $product['price'] >= $min && $product['price'] <= $max);
        }

        // ✅ **Sorting Logic**
        if ($request->has('sort_by')) {
            if ($request->sort_by === 'price_low_high') {
                usort($products, fn($a, $b) => $a['price'] <=> $b['price']);
            } elseif ($request->sort_by === 'price_high_low') {
                usort($products, fn($a, $b) => $b['price'] <=> $a['price']);
            }
        }

        return view('pages.home', [
            'products' => $products,
            'services' => $services,
            'categories' => $categories,
            'testimonials' => $testimonials,
            'blogs' => $blogs, 
        ]);
    }
 // ✅ Blog Listing Page
 public function blogList()
 {
     $blogs = [
         [
             'id' => 1,
             'title' => 'Top 10 Smart Home Trends in 2025',
             'excerpt' => 'Discover the latest innovations in smart home technology...',
             'image' => 'blog1.jpg',
         ],
         [
             'id' => 2,
             'title' => 'How to Secure Your Home with Smart Locks',
             'excerpt' => 'Learn how to enhance your home security using smart locks...',
             'image' => 'blog2.jpg',
         ],
     ];

     return view('pages.blog', compact('blogs'));
 }

 // ✅ Blog Details Page


 public function blogDetails($id)
{
    $blogs = [
        1 => [
            'id' => 1,
            'title' => 'Top 10 Smart Home Trends in 2025',
            'content' => '
                <p>Discover the latest innovations in smart home technology, from AI-powered assistants to energy-efficient automation. This year, we can expect significant advancements in voice control, smart lighting, and home security systems.</p>
                <p>One of the most exciting trends is the integration of smart devices with AI assistants like Alexa and Google Home. This integration allows for seamless voice control over various aspects of your home, making it easier to manage lighting, temperature, and security.</p>
                <p>Another trend gaining traction is the use of smart sensors to optimize energy efficiency. These sensors can detect when you are not home and automatically adjust lighting and heating to save energy.</p>
            ',
            'image' => 'blog1.jpg',
            'author' => 'John Doe',
            'published_at' => now()->format('M d, Y'),
        ],
        2 => [
            'id' => 2,
            'title' => 'How to Secure Your Home with Smart Locks',
            'content' => '
                <p>Smart locks are revolutionizing home security by offering advanced features like biometric authentication, remote access, and real-time alerts. Here’s how you can enhance your home security with smart locks:</p>
                <p>First, consider investing in a smart lock with fingerprint or facial recognition capabilities. This ensures that only authorized individuals can enter your home.</p>
                <p>Second, look for locks that allow remote access. This feature lets you grant temporary access to guests or service providers without having to physically hand over keys.</p>
                <p>Lastly, ensure your smart lock integrates with your existing smart home system for a unified security solution.</p>
            ',
            'image' => 'blog2.jpg',
            'author' => 'Jane Smith',
            'published_at' => now()->format('M d, Y'),
        ],
        3 => [
            'id' => 3,
            'title' => 'The Future of Home Automation: What’s Next?',
            'content' => '
                <p>Home automation is rapidly evolving, driven by advancements in IoT, AI, and smart sensors. In the near future, we can expect even more sophisticated automation systems that integrate seamlessly with our daily lives.</p>
                <p>One exciting development is the use of machine learning algorithms to predict and adjust home settings based on your habits. For instance, your home could automatically adjust lighting and temperature based on your daily routine.</p>
                <p>Another area of growth is voice-controlled interfaces. As voice assistants become more prevalent, we will see more homes controlled entirely by voice commands.</p>
            ',
            'image' => 'blog3.jpg',
            'author' => 'Bob Johnson',
            'published_at' => now()->format('M d, Y'),
        ],
        4 => [
            'id' => 4,
            'title' => 'Smart Lighting Solutions for Energy Efficiency',
            'content' => '
                <p>Smart lighting is a simple yet effective way to enhance energy efficiency in your home. By integrating smart bulbs with sensors and timers, you can significantly reduce energy consumption.</p>
                <p>One strategy is to use occupancy sensors that turn lights on and off based on whether a room is occupied. This ensures that lights are never left on unnecessarily.</p>
                <p>Another approach is to use smart timers that adjust lighting levels throughout the day. For example, you can set your lights to dim during peak sun hours when natural light is abundant.</p>
            ',
            'image' => 'blog4.jpg',
            'author' => 'Emily Davis',
            'published_at' => now()->format('M d, Y'),
        ],
        5 => [
            'id' => 5,
            'title' => 'Enhancing Home Security with Smart Cameras',
            'content' => '
                <p>Smart cameras are a crucial component of modern home security systems. They offer real-time video feeds, motion detection, and alerts to your smartphone.</p>
                <p>When choosing a smart camera, look for features like night vision, weather resistance, and integration with your existing smart home setup.</p>
                <p>Additionally, consider cameras with facial recognition capabilities to identify known individuals and alert you to unknown visitors.</p>
            ',
            'image' => 'blog5.jpg',
            'author' => 'Michael Brown',
            'published_at' => now()->format('M d, Y'),
        ],
    ];

    if (!isset($blogs[$id])) {
        abort(404);
    }

    // Fetch related posts
    $relatedPosts = [
        [
            'id' => 1,
            'title' => 'Another Relevant Post',
            'excerpt' => 'Summary of the post...',
            'image' => 'blog5.jpg',
        ],
        [
            'id' => 2,
            'title' => 'Yet Another Post',
            'excerpt' => 'Summary of the second post...',
            'image' => 'blog1.jpg',
        ],
    ];

    // Fetch previous and next blog posts
    $blogIds = array_keys($blogs);
    $currentIndex = array_search($id, $blogIds);
    $previousBlog = $currentIndex > 0 ? $blogs[$blogIds[$currentIndex - 1]] : null;
    $nextBlog = $currentIndex < count($blogIds) - 1 ? $blogs[$blogIds[$currentIndex + 1]] : null;

    return view('pages.blog-details', [
        'blog' => $blogs[$id],
        'relatedPosts' => $relatedPosts,
        'previousBlog' => $previousBlog,
        'nextBlog' => $nextBlog,
    ]);
}



}