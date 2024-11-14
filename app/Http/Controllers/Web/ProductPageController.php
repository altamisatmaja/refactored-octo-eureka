<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductPageController extends Controller
{
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->first();
        return view('client.pages.product.show', compact('product'));
    }
}
