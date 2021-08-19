<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
//use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index () {
        return view('news.index', [
            'news' => $this->newsList
        ]);
    }

    public function show (News $news)
    {
//        dd($news->category_id);
        $category = Category::all()->where('id', '==', $news->category_id); //

//        dd($category);

        return view('news.show', [
            'news' => $news,
            'categories' => $category
        ]);
    }
}
