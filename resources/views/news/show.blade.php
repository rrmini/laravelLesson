@extends('layouts.main')
@section('content')
    <!-- Post preview-->
    <div class="post-preview">
        <h2 class="post-title">{{ $news['title'] }}</h2>
        <p class="post-meta"> {{ $news['content'] }}</p>
        <p class="post-meta">
            Posted by
            <a href="#!">Start Bootstrap</a>
            on September 24, 2021
        </p>
    </div>
    <!-- Divider-->
    <hr class="my-4" />
{{--    назад к списку новостей в категории --}}
    <a class="nav-link" href={{ route('category.show', ['id' => $news['categoryId']]) }}>
        Back to news list <span style="font-weight: bold">"{{ $categoryTitle }}"</span>
    </a>
@endsection

@push('js')
    <script>
        alert("это новость про {{ $news['title'] }}")
    </script>
@endpush

