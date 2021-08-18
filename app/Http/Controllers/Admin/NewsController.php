<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $model = new News();
//        $newsList = $model->getNews();
        $newsList = News::select(News::$allowedFields)->paginate(
            config('paginate.admin.news')
        );
//        dd($newsList);
        return view('admin.news.index',[
            'newsList' => $newsList
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.news.create',[
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//
        $request->validate([
            'title' => ['required', 'string']
        ]);

        $data = $request->only(['title', 'content', 'author', 'status']);
        $news = News::create($data);

        if($news){
            return redirect()
                ->route('admin.news.index')
                ->with('success', 'Новость успешно добавлена');
        }

        return back()
            ->withInput()
            ->with('error', 'Не удалось добавить новость');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  News $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        $categories = Category::all();
        return view('admin.news.edit', [
            'news' => $news,
            'categories' => $categories,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $request->validate([
            'title' => ['required', 'string']
        ]);

        $data = $request->only(['title', 'content', 'author', 'status']);
        $news = $news->fill($data)->save();

        if($news){
            return redirect()
                ->route('admin.news.index')
                ->with('success', 'Новость успешно отредактирована');
        }

        return back()
            ->withInput()
            ->with('error', 'Не удалось отредактировать новость');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
