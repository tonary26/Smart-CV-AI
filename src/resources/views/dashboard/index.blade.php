@extends('layouts.main')

@section('title')
    <title>Главная</title>
@endsection

@section('styles')
    @vite(['resources/css/dashboard/index.css'])
@endsection

@section('content')
    <main class="main">
        <section class="hero">
            <h1 class="title">Добро пожаловать.</h1>
            <p class="subtitle">Ваше рабочее пространство для создания идеального резюме.</p>
        </section>

        <div class="action-grid">
            <div class="action-card primary">
                <h2>Создать Smart CV</h2>
                <p>Используйте ИИ для автоматического подбора навыков и формулировок.</p>
                <a href="{{ route('cv.create.step1') }}" class="btn btn-white">Начать</a>
            </div>

            <div class="action-card outline">
                <h2>Загрузить резюме</h2>
                <p>Импортируйте существующий PDF или DOCX для анализа нейросетью.</p>
                <button class="btn btn-black">Выбрать файл</button>
            </div>
        </div>
    </main>
@endsection