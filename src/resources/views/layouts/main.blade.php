<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('title')
    @vite(['resources/css/main.css'])
    @yield('styles')
</head>
<body>

<aside class="sidebar">
    <div class="logo">Smart CV</div>
    <nav class="nav-menu">
        <a href="{{ route('dashboard.index') }}" class="nav-link active">Главная</a>
        <a href="{{ route('cv.index') }}" class="nav-link active">Резюме</a>
        <a href="{{ route('cv.create.step1')  }}" class="nav-link active">Создать CV</a>
        <a href="{{ route('cv.analyze.show')  }}" class="nav-link active">Анализ CV</a>
        @guest
            <a href="{{ route('auth.show-register') }}" class="nav-link active">Регистрация</a>
            <a href="{{ route('auth.show-login') }}" class="nav-link active">Войти</a>
        @endguest
        
        @auth
            <form action="{{ route('auth.logout') }}" method="post">
                @csrf
                <button type="submit" class="logout-btn">Выйти</button>
            </form>
        @endauth
    </nav>
</aside>

@yield('content')

</body>
</html>