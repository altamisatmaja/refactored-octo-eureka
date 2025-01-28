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
            [
                'name' => 'Apple',
                'icon' => 'upload/icons/logo-apple.png',
            ],
            [
                'name' => 'MSI',
                'icon' => 'upload/icons/logo-msi.png',
            ],
            [
                'name' => 'Samsung',
                'icon' => 'upload/icons/logo-samsung.png',
            ],
            [
                'name' => 'Toshiba',
                'icon' => 'upload/icons/logo-toshiba.png',
            ],
            [
                'name' => 'Razer',
                'icon' => 'upload/icons/logo-razer.png',
            ],
            [
                'name' => 'Sony',
                'icon' => 'upload/icons/logo-sony.png',
            ],
            [
                'name' => 'Huawei',
                'icon' => 'upload/icons/logo-huawei.png',
            ],
            [
                'name' => 'Microsoft',
                'icon' => 'upload/icons/logo-microsoft.png',
            ],
            [
                'name' => 'Gigabyte',
                'icon' => 'upload/icons/logo-gigabyte.svg',
            ],
            [
                'name' => 'Alienware',
                'icon' => 'upload/icons/logo-alienware.png',
            ],
            [
                'name' => 'LG',
                'icon' => 'upload/icons/logo-lg.png',
            ],
            [
                'name' => 'Fujitsu',
                'icon' => 'upload/icons/logo-fujitsu.png',
            ],
            [
                'name' => 'Panasonic',
                'icon' => 'upload/icons/logo-panasonic.png',
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
