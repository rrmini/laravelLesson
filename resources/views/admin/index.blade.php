@extends('layouts/admin')
@section('content')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Панель администратора</h1>
        </div><!-- /.col -->

    </div> <!-- /.row -->
    <div class="row">
        <div class="col-sm-6">
            <p>всего категорий: {{ $countCategories }}</p>
        </div>
        <div class="col-sm-6">
            <p>всего новостей: {{ $countNews }}</p>
        </div>


    </div>
@endsection
