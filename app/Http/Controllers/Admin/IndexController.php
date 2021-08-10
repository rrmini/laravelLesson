<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(Request $request)
    {
        // TODO: Implement __invoke() method.
        return view('admin.index', [
            'countNews' => count($this->newsList),
            'countCategories' => count($this->categoryList)
        ]);
    }
}
