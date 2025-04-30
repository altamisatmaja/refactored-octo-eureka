<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoriesPageController extends Controller
{
    public function index()
    {
        $laptopBrands = [
            [
                'name' => 'Asus',
                'icon' => 'upload/icons/logo-asus.png',
            ],
            [
                'name' => 'Acer',
                'icon' => 'upload/icons/logo-acer.png',
            ],
            [
                'name' => 'HP',
                'icon' => 'upload/icons/logo-hp.png',
            ],
            [
                'name' => 'Dell',
                'icon' => 'upload/icons/logo-dell.png',
            ],
            [
                'name' => 'Lenovo',
                'icon' => 'upload/icons/logo-lenovo.png',
            ],

        ];


        return view('client.pages.categories.index', compact('laptopBrands'));
    }


    public function show($name)
    {
        $products = Product::whereRaw('LOWER(brand) LIKE ?', [strtolower($name)])
            ->get();

        $brands = ucfirst(strtolower($name));

        return view('client.pages.categories.show', compact('products', 'products', 'brands'));
    }
}
