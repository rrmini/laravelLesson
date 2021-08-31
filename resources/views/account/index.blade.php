@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Привет, {{ Auth::user()->name }}</h1>
        @if(Auth::user()->avatar)
            <img src="{{ Auth::user()->avatar }}" alt="avatar" style="width: 250px">
        @endif
        <h3>Кабинет пользователя</h3>
        <p>
            <a href="{{ route('admin.index') }}">Перейти в панель администратора</a>
        </p>
    </div>

@endsection
