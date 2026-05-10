<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart CV | Welcome</title>
    @vite(['resources/css/main.css'])
</head>
<body>

<aside class="sidebar">
    <div class="logo">Smart CV</div>
    <nav class="nav-menu">
        <a href="#" class="nav-link active">Главная</a>
    </nav>
</aside>

<main class="main">
    <section class="hero">
        <h1 class="title">Добро пожаловать.</h1>
        <p class="subtitle">Ваше рабочее пространство для создания идеального резюме.</p>
    </section>

    <div class="action-grid">
        <div class="action-card primary">
            <span class="label">Новый документ</span>
            <h2>Создать Smart CV</h2>
            <p>Используйте ИИ для автоматического подбора навыков и формулировок.</p>
            <button class="btn btn-white">Начать</button>
        </div>

        <div class="action-card outline">
            <span class="label">Архив</span>
            <h2>Загрузить резюме</h2>
            <p>Импортируйте существующий PDF или DOCX для анализа нейросетью.</p>
            <button class="btn btn-black">Выбрать файл</button>
        </div>
    </div>
</main>

</body>
</html>