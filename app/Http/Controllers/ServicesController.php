<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
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

        return view('pages.services', compact('services'));
    }

    public function show($id)
    {
  
  
  
  
        $services = [
            1 => [
                'title' => 'Smart Thermostats',
                'description' => 'A smart thermostat offers a wide range of innovative functions designed to optimize home comfort while significantly reducing heating and cooling costs. These advanced devices integrate seamlessly with your lifestyle, learning your daily routines and preferences to automatically adjust temperatures. With features like geofencing, remote access via mobile apps, and integration with voice assistants, smart thermostats provide unparalleled convenience and energy efficiency.',
               
               
'features' => [
    [
        'title' => 'Energy cost may be reduced by up to 25%',
        'icon' => 'energy-saving.png', // Replace with the actual icon filename
        'description' => 'Lower your electricity bills with intelligent energy-saving algorithms that optimize heating and cooling.'
    ],
    [
        'title' => 'Temperature control using a timer',
        'icon' => 'timer.png',
        'description' => 'Schedule automated temperature changes throughout the day to match your lifestyle and maximize efficiency.'
    ],
    [
        'title' => 'Thermostat with built-in Wi-Fi',
        'icon' => 'wifi.png',
        'description' => 'Connect your thermostat to the internet, enabling remote monitoring and control from any smart device.'
    ],
    [
        'title' => 'Control from anywhere and anytime',
        'icon' => 'remote-control.png',
        'description' => 'Adjust your home\'s temperature from anywhere using your smartphone or tablet, ensuring comfort at all times.'
    ],
    [
        'title' => 'Geofencing for automatic adjustments based on location',
        'icon' => 'geofencing.png',
        'description' => 'Smart geofencing technology automatically adapts your home\'s climate based on your presence or absence.'
    ],
    [
        'title' => 'Integration with voice assistants like Alexa or Google Assistant',
        'icon' => 'voice-assistant.png',
        'description' => 'Use voice commands to set temperatures, create schedules, or get climate reports with AI-powered assistants.'
    ]
    ],




                'duration' => '2 Hours',
                'price' => 500,
                'image' => 'smart-thermostat.jpg',
                'contact' => 'Call us at +971 55 123 4567 for bookings.',
                'sub_services' => [
                    [
                        'title' => 'Nest Thermostat Installation',
                        'description' => 'Expert installation of Nest Thermostat for efficient home automation. Includes setup of Nest Temperature Sensors for precise room-by-room temperature control.',
                        'price' => 250
                    ],
                    [
                        'title' => 'Ecobee Thermostat Setup',
                        'description' => 'Professional installation and setup of Ecobee thermostats, including integration with Ecobee SmartSensors for enhanced comfort and energy efficiency.',
                        'price' => 300
                    ]
                ]
                    ],
     
        
            2 => [
                'title' => 'Security Cameras',
                'description' => 'Protect your home with cutting-edge indoor and outdoor security cameras featuring night vision, motion detection, and cloud storage options. These advanced cameras offer real-time alerts, high-resolution video recording, and two-way audio for seamless communication. With AI-driven facial recognition and customizable motion zones, our security camera systems ensure your property remains safe and monitored at all times.',
                'features' => [
                    '1080p HD or 4K Ultra HD video recording',
                    'Motion detection and real-time alerts',
                    'Infrared night vision for 24/7 security',
                    'Two-way audio communication',
                    'Cloud storage and local backup options',
                    'Integration with smart home ecosystems like Alexa & Google Assistant'
                ],
                'duration' => '3 Hours',
                'price' => 600,
                'image' => 'security-camera.jpg',
                'contact' => 'Contact us at +971 55 654 3210 for installation inquiries.',
                'sub_services' => [
                    [
                        'title' => 'CCTV Camera Installation',
                        'description' => 'Professional installation of wired and wireless CCTV cameras with remote monitoring capabilities and cloud storage integration.',
                        'price' => 400
                    ],
                    [
                        'title' => 'Smart Doorbell Camera Setup',
                        'description' => 'Setup and configuration of video doorbells with motion alerts, two-way audio, and smartphone connectivity for enhanced entryway security.',
                        'price' => 200
                    ]
                ]
            ],
        
            3 => [
                'title' => 'Smart Locks',
                'description' => 'Upgrade your home security with smart locks that offer keyless entry, remote access, and biometric authentication. Our smart locks are designed to provide maximum security and convenience, allowing you to control access from anywhere using a mobile app. With advanced encryption and real-time notifications, you can always stay informed about who is entering your home.',
                'features' => [
                    'Keyless entry via PIN, fingerprint, or smartphone',
                    'Remote lock/unlock functionality',
                    'Tamper-proof and encrypted security',
                    'Integration with smart home automation systems',
                    'Auto-locking for added safety',
                    'Guest access management for visitors'
                ],
                'duration' => '1.5 Hours',
                'price' => 450,
                'image' => 'smart-lock.jpg',
                'contact' => 'For installation inquiries, call us at +971 55 789 1234.',
                'sub_services' => [
                    [
                        'title' => 'Fingerprint Smart Lock Installation',
                        'description' => 'Professional installation of biometric smart locks for keyless access and enhanced home security.',
                        'price' => 350
                    ],
                    [
                        'title' => 'Smart Keypad Lock Setup',
                        'description' => 'Installation and setup of smart keypad locks with programmable passcodes and mobile app integration.',
                        'price' => 280
                    ]
                ]
            ],
        
            4 => [
                'title' => 'Home Automation',
                'description' => 'Transform your living space into a fully automated smart home with our customized home automation solutions. Control lighting, security, entertainment, and climate from a single platform using voice commands or a smartphone app. Our expert technicians will set up and integrate your devices to create a seamless and efficient smart home experience.',
                'features' => [
                    'Centralized control of all smart devices',
                    'Voice command integration with Alexa & Google Assistant',
                    'Automated lighting and climate scheduling',
                    'Remote access via smartphone',
                    'Energy-efficient automation features',
                    'Customizable home security automation'
                ],
                'duration' => '5 Hours',
                'price' => 800,
                'image' => 'home-automation.jpg',
                'contact' => 'Book a free consultation at +971 55 456 7890.',
                'sub_services' => [
                    [
                        'title' => 'Smart Lighting Setup',
                        'description' => 'Installation of smart lights and automated lighting schedules for energy efficiency and ambiance control.',
                        'price' => 220
                    ],
                    [
                        'title' => 'Voice Assistant Integration',
                        'description' => 'Configuration of smart home devices with Amazon Alexa or Google Assistant for seamless automation.',
                        'price' => 180
                    ]
                ]
            ]
        ];
        






        if (!isset($services[$id])) {
            abort(404);
        }

        return view('pages.service-details', ['service' => $services[$id]]);
    }
}
