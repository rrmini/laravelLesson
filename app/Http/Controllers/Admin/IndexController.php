<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(Request $request)
    {
        // TODO: Implement __invoke() method.
        $newsModel = new News();
        $categoryModel = new Category();
        return view('admin.index', [
            'countNews' => $newsModel->getCount(),
            'countCategories' => $categoryModel->getCount()
        ]);
    }
}
