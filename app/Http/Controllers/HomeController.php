<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = [
            ['name' => 'Tranditional Wear'],
            ['name' => 'Western Wear'],
            ['name' => 'Swim & Beachwear'],
            ['name' => 'Beaty & Groomng'],
            ['name' => 'Juwellery'],
            ['name' => 'Personal care Appliances'],
            ['name' => 'International Brands'],
            ['name' => 'Foot Wear'],
            ['name' => 'Watches'],
            ['name' => 'Accessories'],
        ];

        $images = [
            [
                'name' => 'GUCCI bage',
                'price' => '200 Bdt',
                'discount' => '350 Bdt',
                'image' => asset('images/Tui-xach-nu.png')
            ],
            [
                'name' => 'Sony DSC-RX10M3',
                'price' => '200 Bdt',
                'discount' => '700 Bdt',
                'image' => asset('images/mayanh.png')
            ],
            [
                'name' => 'Face Cream',
                'price' => '2200 Bdt',
                'discount' => '6500 Bdt',
                'image' => asset('images/facecream.png')
            ],
            [
                'name' => 'Wallet',
                'price' => '2400 Bdt',
                'discount' => '3400 Bdt',
                'image' => asset('images/wallet.png')
            ],
            [
                'name' => 'Baseus Encok WM02',
                'price' => '2004 Bdt',
                'discount' => '3550 Bdt',
                'image' => asset('images/bluetooth.png')
            ]
        ];
        return view('card', ['products'=>$products], ['images' =>$images]);
    }
}
