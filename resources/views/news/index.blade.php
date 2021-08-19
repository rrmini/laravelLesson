@extends('layouts.main')
@section('title')  @stop
@section('slug') Новости категории: "{{ $category->title }}" @stop
@section('content')

    @forelse($newsList as $news)
        <!-- Post preview-->
        <div class="post-preview">
            <a href= "{{ route('news.show', [ 'news' => $news->id]) }}" >
                <h2 class="post-title"> {{ $news->title }}</h2>
                <h3 class="post-subtitle">{{ $news->content }}</h3>
            </a>
            <p class="post-meta">
                Posted by
                <a href="#!">{{ $news->author }}</a>
                on {{ $news->updated_at }}
            </p>
        </div>
        <!-- Divider-->
        <hr class="my-4" />
    @empty
        <h2>Новостей нет</h2>
    @endforelse
@endsection

