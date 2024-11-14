<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoriesPageController extends Controller
{
    public function index()
    {
        $products = Product::get();
        return view('client.pages.categories.index', compact('products'));
    }
}
