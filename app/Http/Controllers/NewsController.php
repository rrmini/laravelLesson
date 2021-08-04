<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index () {
        return view('news.index', [
            'news' => $this->newsList
        ]);
    }

    public function show (int $id) {
        $newsList = [];
        $categoryTitle = '';

        foreach ($this->newsList as $news) {
            if ($news['id'] === $id) {
                $newsList = $news;
            }
        }

        if(empty($newsList)) {
            abort(404);
        }

        foreach ($this->categoryList as $category) {
            if ($category['id'] === $newsList['categoryId']){
                $categoryTitle = $category['title'];
            }
        }

        return view('news.show', [
            'news' => $newsList,
            'categoryTitle' => $categoryTitle
//            'id' => $id
        ]);
    }
}
