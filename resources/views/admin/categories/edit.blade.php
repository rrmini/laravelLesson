@extends('layouts/admin')
@section('content')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Редактировать категорию</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <div class="float-sm-right">
                <a href="{{ route('admin.categories.index') }}"
                   class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                    <i class="fas fa-list fa-sm text-white-50"></i>К списку категорий</a>
            </div>
        </div><!-- /.col -->
    </div><!-- /.row -->
    <div class="row mb-2">
        @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">
                    {{ $error }}
                </div>
            @endforeach
        @endif
        @include('inc.message')
        <div class="col-12">
            <form action="{{ route('admin.categories.update', ['category' => $category]) }}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="title">Заголовок</label>
                    <input
                        type="text"
                        class="form-control"
                        name="title"
                        id="title"
                        value="{{ $category->title }}"
                    >
                </div>
                <div class="form-group">
                    <label for="description">Описание</label>
                    <textarea
                        class="form-control"
                        name="description"
                        id="description"
                    >{!! $category->description !!}</textarea>
                </div>
                <button class="btn btn-primary">Сохранить</button>
            </form>
        </div>
    </div>

@endsection
