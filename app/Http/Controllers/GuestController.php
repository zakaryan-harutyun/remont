<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use App\Models\Review;
use App\Models\Service;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        $reviews = Review::all();
        $news = News::all();

        return view('index', compact('news', 'reviews'));
    }

    public function category($id)
    {
        $category = Category::findOrFail($id);
        $categories = Category::where('category_id', $id)->get();

        return view('category', compact('categories','category'));
    }

    public function service($id)
    {
        $services = Service::where('category_id', $id)->get();

        return view('services', compact('services'));
    }

}
