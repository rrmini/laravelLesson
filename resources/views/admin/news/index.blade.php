@extends('layouts/admin')
@section('content')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Новости</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <div class="float-sm-right">
                <a href="{{route('admin.news.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                    <i class="fas fa-plus fa-sm text-white-50"></i> Добавить новую</a>
            </div>
        </div><!-- /.col -->
    </div><!-- /.row -->
    <div class="row mb-2">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Заголовок</th>
                            <th>Текст</th>
                            <th>Дата добавления</th>
                            <th>Управление</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($newsList as $news)
                            <tr>
                                <td>{{ $news['title'] }}</td>
                                <td>{{ $news['content'] }}</td>
                                <td>{{ now()->format('d-m-Y H:i') }}</td>
                                <td>
                                    <a href="{{ route('admin.news.edit', [ 'news' => $news['id']]) }}" class="d-sm-inline-block btn btn-sm">
                                        <i class="fas fa-edit fa-sm text-black-50 fa-align-right"></i>
                                    </a>
                                    <a href="javascript:" class="d-sm-inline-block btn btn-sm ">
                                        <i class="fas fa-trash fa-sm  text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">Новостей нет</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
