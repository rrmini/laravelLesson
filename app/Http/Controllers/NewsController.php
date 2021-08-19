<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;

class NewsController extends Controller
{
    public function index () {
        return view('news.index', [
            'news' => $this->newsList
        ]);
    }

    public function show (News $news)
    {
        $category = Category::find($news->category_id);

        return view('news.show', [
            'news' => $news,
            'category' => $category
        ]);
    }
}
