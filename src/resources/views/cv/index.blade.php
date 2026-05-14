@extends('layouts.main')

@section('styles')
    @vite(['resources/css/cv/index.css'])
@endsection

@section('content')
    <main class="main">
        <header class="list-header">
            <div>
                <h1 class="page-title">Мои резюме</h1>
                <p class="count-label">Всего документов: 3</p>
            </div>
            <a href="{{ route('cv.create.step1') }}" class="btn-black">+ Создать новое</a>
        </header>

        <section class="resume-grid">

            <div class="resume-card">
                <div class="card-info">
                    <h2 class="resume-name">Fullstack Developer</h2>
                </div>
                <div class="card-stats">
                    <div class="stat">
                        <span class="val">88%</span>
                        <span class="lab">ATS Score</span>
                    </div>
                </div>
                <div class="card-actions">
                    <button class="btn-text">Редактировать</button>
                    <button class="btn-text danger">Удалить</button>
                </div>
            </div>

            <div class="resume-card">
                <div class="card-info">
                    <h2 class="resume-name">Backend Engineer (PHP)</h2>
                </div>
                <div class="card-stats">
                    <div class="stat">
                        <span class="val">64%</span>
                        <span class="lab">ATS Score</span>
                    </div>
                </div>
                <div class="card-actions">
                    <button class="btn-text">Редактировать</button>
                    <button class="btn-text danger">Удалить</button>
                </div>
            </div>

            <a href="create.html" class="add-card">
                <span>+ Добавить проект</span>
            </a>

        </section>
    </main>
@endsection
