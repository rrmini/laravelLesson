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

    public function show (int $id)
    {
        $newsModel = new News();
        $categoryModel = new Category();

        $news = $newsModel->getNewsById($id);

        $category = $categoryModel->getCategoryById($news->category_id);

        return view('news.show', [
            'news' => $news,
            'categoryTitle' => $category->title
        ]);
    }
}
