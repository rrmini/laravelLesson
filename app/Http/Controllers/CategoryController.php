<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        $model = new Category();
        $categories = $model->getCategories();
        return view('category.index', [
            'categoryList' => $categories
        ]);
    }

    public function show(int $id) {
        $categoryModel = new Category();
        $newsModel = new News();

        $categoryList = $categoryModel->getCategories();
        $newsList = $newsModel->getNews();

        foreach ($categoryList as $category){
            if( $category->id === $id ){
                $categoryList = $category;
            }
        }

        if(empty($categoryList)) {
            abort(404);
        }

        foreach ($newsList as $news) {
            if($news->category_id === $id){
                $newsList[] = $news;
            }
        }

//        dd($newsList);

        return view('news.index', [
            'category' => $categoryList,
            'newsList' => $newsList
        ]);

    }
}
