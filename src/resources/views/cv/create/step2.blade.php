@extends('layouts.main')

@section('title')
    <title>Create Smart CV | Builder</title>
@endsection

@section('styles')
    @vite(['resources/css/cv/create.css'])
@endsection

@section('content')
    <main class="main">
        <header class="editor-header">
            <div class="step-info">
                <span class="step-num">ШАГ 2</span>
                <h1 class="editor-title">Основная информация</h1>
            </div>
            <div class="actions">
                <button type="submit" class="btn-black" form="step2-form">Далее →</button>
            </div>
        </header>

        <form id="step2-form" action="{{ route('cv.store.step2') }}" class="form-container" method="post">
            @csrf
            <div class="input-group">
                <label>Желаемая должность</label>
                <input name="job" type="text" placeholder="Например: Fullstack Developer" class="main-input">
            </div>

            <div class="input-group">
                <label>Профессиональный опыт</label>
                <div class="textarea-wrapper">
                    <textarea name="experience" placeholder="Опишите ваш опыт в свободной форме. Нейросеть сама структурирует его и подберет нужные ключевые слова..."></textarea>
                </div>
            </div>

            <div class="input-group">
                <label>Стек</label>
                <input name="stack" type="text" placeholder="Например: Docker, PHP, GitHub" class="main-input">
            </div>
        </form>
    </main>
@endsection
