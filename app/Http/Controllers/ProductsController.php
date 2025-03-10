<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    private $products = [
        ['name' => 'EcoHeat 5000', 'price' => 239, 'image' => 'ecoheat-5000.jpeg', 'category' => 'Climate Control', 'discount' => '10%'],
        ['name' => 'ThermaSense X1', 'price' => 289, 'image' => 'thermasense-x1.jpeg', 'category' => 'Climate Control', 'discount' => '20%'],
        ['name' => 'FrostWave Elite', 'price' => 189, 'image' => 'frostwave-elite.jpeg', 'category' => 'Smart Home', 'discount' => '10%'],
        ['name' => 'Sentinel Vision X', 'price' => 319, 'image' => 'sentinel-vision-x.jpeg', 'category' => 'Security', 'discount' => '15%'],
        ['name' => 'KeylessGuard 2.0', 'price' => 259, 'image' => 'keylessguard-2.jpeg', 'category' => 'Security', 'discount' => '5%'],
        ['name' => 'EcoHeat 5000', 'price' => 239, 'image' => 'ecoheat-5000.jpeg', 'category' => 'Climate Control', 'discount' => '10%'],
        ['name' => 'ThermaSense X1', 'price' => 289, 'image' => 'thermasense-x1.jpeg', 'category' => 'Climate Control', 'discount' => '20%'],
        ['name' => 'FrostWave Elite', 'price' => 189, 'image' => 'frostwave-elite.jpeg', 'category' => 'Smart Home', 'discount' => '10%'],
        ['name' => 'Sentinel Vision X', 'price' => 319, 'image' => 'sentinel-vision-x.jpeg', 'category' => 'Security', 'discount' => '15%'],
        ['name' => 'KeylessGuard 2.0', 'price' => 259, 'image' => 'keylessguard-2.jpeg', 'category' => 'Security', 'discount' => '5%'],
    ];

    // ✅ Fetch only the 3 latest products for the home page
    public function home()
    {
        return view('pages.home', [
            'products' => array_slice($this->products, -3) // Show latest 3 products
        ]);
    }

    // ✅ Fetch all products for the products page
    public function index()
    {
        return view('pages.products', [
            'products' => $this->products
        ]);
    }
}
