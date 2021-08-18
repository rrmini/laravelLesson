<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
//        $model = new Category();
        $categories = Category::all(); //$model->getCategories();
        return view('category.index', [
            'categoryList' => $categories
        ]);
    }

    public function show(int $category_id) {
//        show news by category_id
        $newsModel = new News();

        $category = Category::all();//$categoryModel->getCategories(); ->find(['id'=> $category_id])

        dd($category->where('id', $category_id));
        $news = News::all()->where('category_id', $category_id);

//        dd($news);

//        foreach ($categoryList as $category){
//            if( $category->id === $id ){
//                $categoryList = $category;//?
//            }
//        }
//
//        if(empty($categoryList)) {
//            abort(404);
//        }
//
//        foreach ($newsList as $news) {
//            if($news->category_id === $id){
//                $newsList[] = $news;
//            }
//        }

//        dd($newsList);

        return view('news.index', [
            'category' => $category,
            'newsList' => $news
        ]);

    }
}
