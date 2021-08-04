<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        return view('category.index', [
            'category' => $this->categoryList
        ]);
    }

    public function show(int $id) {
        $categoryList = [];
        $newsList = [];

        foreach ($this->categoryList as $category){
            if( $category['id'] === $id ){
                $categoryList = $category;
            }
        }

        if(empty($categoryList)) {
            abort(404);
        }

        foreach ($this->newsList as $news) {
            if($news['categoryId'] === $id){
                $newsList[] = $news;
            }
        }

//        dd($newsList);

        return view('news.index', [
            'category' => $categoryList,
            'news' => $newsList
        ]);

    }
}
