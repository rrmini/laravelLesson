@extends('layouts.main')
@section('title') Новости {{ $category['title'] }} -@parent @stop
@section('slug') Новости {{ $category['title'] }} @stop
@section('content')
    <h1 class="">News {{ $category['title'] }}</h1>
    @forelse($newsList as $news)
        <!-- Post preview-->
        <div class="post-preview">
            <a href= "{{ route('news.show', [ 'id' => $news['id']]) }}" >
                <h2 class="post-title"> {{ $news['title'] }}</h2>
                <h3 class="post-subtitle">{{ $news['content'] }}</h3>
            </a>
            <p class="post-meta">
                Posted by
                <a href="#!">Start Bootstrap</a>
                on September 24, 2021
            </p>
        </div>
        <!-- Divider-->
        <hr class="my-4" />
    @empty
        <h2>Новостей нет</h2>
    @endforelse
@endsection

