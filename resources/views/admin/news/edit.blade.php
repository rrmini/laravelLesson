@extends('layouts/admin')
@section('content')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Редактировать новость</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <div class="float-sm-right">
                <a href="{{ route('admin.news.index') }}"
                   class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                    <i class="fas fa-list fa-sm text-white-50"></i>К списку новостей</a>
            </div>
        </div><!-- /.col -->
    </div><!-- /.row -->
    <div class="row mb-2">
        <div class="col-12">
{{--            @if($errors->any())--}}
{{--                @foreach($errors->all() as $error)--}}
{{--                    <div class="alert alert-danger">--}}
{{--                        {{ $error }}--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            @endif--}}
{{--            @include('inc.message')--}}
            <form action="{{ route('admin.news.update', [ 'news' => $news]) }}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="category_id">Категория</label>
                    <select name="category_id" id="category_id" class="form-control">
                        <option value="0">Выбрать категорию</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}"
                                    @if($news->category_id === $category->id) selected @endif>
                                {{ $category->title }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="title">Заголовок</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{ $news->title }}">
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="author">Автор</label>
                    <input type="text" class="form-control" name="author" id="author" value="{{ $news->author }}"></input>
                    @error('author')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="image">Изображение</label>
                    <input type="text" class="form-control" name="image" id="image" value="{{ $news->image }}"></input>
                </div>
                <div class="form-group">
                    <label for="status">Статус</label>
                    <select name="status" id="status" class="form-control">
                        <option value="DRAFT" @if($news->status === 'DRAFT') selected @endif>DRAFT</option>
                        <option value="PUBLISHED" @if($news->status === 'PUBLISHED') selected @endif>PUBLISHED</option>
                        <option value="DELETED" @if($news->status === 'DELETED') selected @endif>DELETED</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="content">Описание</label>
                    <textarea class="form-control" name="content" id="content">{!! $news->content !!}</textarea>
                </div>
                <button class="btn btn-primary">Сохранить</button>
            </form>
        </div>
    </div>

@endsection
