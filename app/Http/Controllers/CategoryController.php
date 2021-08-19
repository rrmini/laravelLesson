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

    public function show(Category $category) {
//        show news by category_id

        $news = News::all()->where('category_id', $category->id);

        return view('news.index', [
            'category' => $category,
            'newsList' => $news
        ]);

    }
}
