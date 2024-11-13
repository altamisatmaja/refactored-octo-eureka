<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RecommendationPageController extends Controller
{
    public function index()
    {
        return view('client.pages.recommendation.index');
    }
}
