<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RecommendationPageController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('budget') || $request->has('ram') || $request->has('storage') || $request->has('screen_size') || $request->has('storage_type') || $request->has('processor')) {
            $baseUrl = 'http://127.0.0.1:5000/recommend';

            $queryParams = [
                'price' => $request->input('budget', 0),
                'ram' => $request->input('ram', 0),
                'storage' => $request->input('storage', 0),
                'screen_size' => $request->input('screen_size', 0),
                'type_storage' => $request->input('storage_type', ''),
                'processor' => $request->input('processor', ''),
            ];

            $response = Http::get($baseUrl, $queryParams);

            if ($response->successful()) {
                $products = $response->json();
                return view('client.pages.recommendation.index', compact('products'));
            } else {
                return ['error' => 'Unable to fetch recommendations'];
            }
        }
        return view('client.pages.recommendation.index');
    }
}
