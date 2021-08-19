@extends('layouts.main')
@section('title')  @stop
@section('slug') Новость категории: "{{ $category->title }}" @stop
@section('content')
    <!-- Post preview-->
    <div class="post-preview">
        <h2 class="post-title">{{ $news->title }}</h2>
        <p class="post-meta"> {{ $news->content }}</p>
        <p class="post-meta">
            Posted by
            <a href="#!">{{ $news->author }}</a>
            on  @if($news->updated_at){{ $news->updated_at->format('d-m-Y H:i') }}
            @else{{ now()->format('d-m-Y H:i') }}@endif
        </p>
    </div>
    <!-- Divider-->
    <hr class="my-4" />
{{--    назад к списку новостей в категории --}}
    <a class="nav-link" href={{ route('category.show', [$news->category_id]) }}>
        Back to news list <span style="font-weight: bold">"{{ $category->title }}"</span>
    </a>
@endsection

