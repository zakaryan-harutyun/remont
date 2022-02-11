<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Review;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        $reviews = Review::all();
        $news = News::all();

        return view('index', compact('news', 'reviews'));
    }
}
