@extends('layouts.main')

@section('title')
    <title>Smart CV | Регистрация</title>
@endsection

@section('styles')
    @vite(['resources/css/auth/register.css'])
@endsection

@section('content')
    <main>
        <div class="auth-container">
            <header class="auth-header">
                <h1 class="auth-title">Создать аккаунт</h1>
                <p class="auth-subtitle">Присоединяйтесь к Smart CV для оптимизации вашего резюме с помощью ИИ.</p>
            </header>

            <form class="auth-form" action="{{ route('auth.register') }}" method="post">
                @csrf
                <div class="input-group">
                    <label for="name">Имя пользователя</label>
                    <input type="text" id="name" name="name" placeholder="Дмитрий" required class="auth-input">
                </div>

                <div class="input-group">
                    <label for="email">Электронная почта</label>
                    <input type="email" id="email" name="email" placeholder="example@mail.com" required class="auth-input">
                </div>

                <div class="input-group">
                    <label for="password">Пароль</label>
                    <input type="password" id="password" name="password" placeholder="••••••••" required class="auth-input">
                </div>

                <button type="submit" class="btn-submit">Зарегистрироваться</button>
            </form>

            <footer class="auth-footer">
                <span>Уже есть аккаунт?</span>
                <a href="{{ route('auth.show-login') }}" class="form-link bold">Войти</a>
            </footer>
        </div>
    </main>
@endsection

