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
        'Asus',
        'Acer',
        'HP',
        'Dell',
        'Lenovo',
        'Apple',
        'MSI',
        'Samsung',
        'Toshiba',
        'Razer',
        'Sony',
        'Huawei',
        'Microsoft',
        'Gigabyte',
        'Alienware',
        'LG',
        'Fujitsu',
        'Panasonic',
    ];

    return view('client.pages.categories.index', compact('laptopBrands'));
}


    public function show($name)
    {
        $products = Product::whereRaw('LOWER(title) LIKE ?', ['%acer%'])
            ->whereRaw('LOWER(brand) = ?', [strtolower($name)])
            ->get();

        $brands = ucfirst(strtolower($name));

        return view('client.pages.categories.show', compact('products', 'products', 'brands'));
    }
}
