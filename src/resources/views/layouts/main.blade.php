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
        <a href="{{ route('cv.create')  }}" class="nav-link active">Создать CV</a>
    </nav>
</aside>

@yield('content')

</body>
</html>