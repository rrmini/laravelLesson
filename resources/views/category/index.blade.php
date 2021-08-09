@extends('layouts.main')
@section('content')
    @forelse($categoryList as $category)
    <!-- Post preview-->
    <div class="post-preview">
        <a href= "{{ route('category.show', ['id' => $category['id']]) }}" >
            <h2 class="post-title">{{ $category['title'] }}</h2>
            <h3 class="post-subtitle">brief description of the category {{ $category['desc'] }}</h3>
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
        <h2>Категорий нет</h2>
    @endforelse
@endsection


