<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $services = [
            [
                'name' => 'Home Services',
                'services' => [
                    ['id' => 1, 'title' => 'AC Maintenance', 'description' => 'Keep your AC running smoothly.', 'image' => 'ac-maintenance.jpg'],
                    ['id' => 2, 'title' => 'Home Automation', 'description' => 'Automate your home systems.', 'image' => 'home-automation.jpg'],
                    ['id' => 3, 'title' => 'Energy Audits', 'description' => 'Optimize energy use in your home.', 'image' => 'energy-audits.jpg'],
                ]
            ],
            [
                'name' => 'Security Services',
                'services' => [
                    ['id' => 4, 'title' => 'CCTV Installation', 'description' => 'Secure your home with advanced CCTV cameras.', 'image' => 'cctv-installation.jpg'],
                    ['id' => 5, 'title' => 'Smart Lock Setup', 'description' => 'Get professional installation for smart locks.', 'image' => 'smart-lock-setup.jpg'],
                    ['id' => 6, 'title' => 'Alarm System Setup', 'description' => 'Protect your home with an advanced alarm system.', 'image' => 'alarm-setup.jpg'],
                ]
            ]
        ];

        return view('pages.services', compact('services'));
    }

    public function show($id)
    {
        $allServices = [
            1 => ['title' => 'AC Maintenance', 'description' => 'Keep your AC running smoothly.', 'image' => 'ac-maintenance.jpg'],
            2 => ['title' => 'Home Automation', 'description' => 'Automate your home systems.', 'image' => 'home-automation.jpg'],
            3 => ['title' => 'Energy Audits', 'description' => 'Optimize energy use in your home.', 'image' => 'energy-audits.jpg'],
            4 => ['title' => 'CCTV Installation', 'description' => 'Secure your home with advanced CCTV cameras.', 'image' => 'cctv-installation.jpg'],
            5 => ['title' => 'Smart Lock Setup', 'description' => 'Get professional installation for smart locks.', 'image' => 'smart-lock-setup.jpg'],
            6 => ['title' => 'Alarm System Setup', 'description' => 'Protect your home with an advanced alarm system.', 'image' => 'alarm-setup.jpg'],
        ];

        if (!isset($allServices[$id])) {
            abort(404);
        }

        return view('pages.service-details', ['service' => $allServices[$id]]);
    }
}
