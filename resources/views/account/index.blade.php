@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Привет, {{ Auth::user()->name }}</h1>
        <h3>Кабинет пользователя</h3>
        <p>
            <a href="{{ route('admin.index') }}">Перейти в панель администратора</a>
        </p>
    </div>

@endsection
