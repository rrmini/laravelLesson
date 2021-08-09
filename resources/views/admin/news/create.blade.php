@extends('layouts/admin')
@section('content')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Добавить новость</h1>
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
            <form action="" method="post">
                <div class="form-group">
                    <label for="title">Заголовок</label>
                    <input type="text" class="form-control" name="title" id="title">
                </div>
                <div class="form-group">
                    <label for="content">Описание</label>
                    <textarea class="form-control" name="content" id="content"></textarea>
                </div>
                <button class="btn btn-primary">Сохранить</button>
            </form>
        </div>
    </div>

@endsection
