@extends('layouts.admin')
@section('content')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Категории</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <div class="float-sm-right">
                <a href="{{ route('admin.categories.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                    <i class="fas fa-plus fa-sm text-white-50"></i> Добавить новую</a>
            </div>
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection

