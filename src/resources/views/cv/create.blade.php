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
                <span class="step-num">ШАГ 1</span>
                <h1 class="editor-title">Основная информация</h1>
            </div>
            <div class="actions">
                <button class="btn-outline">Сохранить черновик</button>
                <button class="btn-black">Далее →</button>
            </div>
        </header>

        <section class="form-container">
            <div class="input-group">
                <label>Желаемая должность</label>
                <input type="text" placeholder="Например: Fullstack Developer" class="main-input">
            </div>

            <div class="input-group">
                <label>Профессиональный опыт</label>
                <div class="textarea-wrapper">
                    <textarea placeholder="Опишите ваш опыт в свободной форме. Нейросеть сама структурирует его и подберет нужные ключевые слова..."></textarea>
                </div>
            </div>

            <div class="options-grid">
                <div class="option-card selected">
                    <input type="radio" name="style" id="minimal" checked>
                    <label for="minimal">
                        <span class="option-name">Минимализм</span>
                        <span class="option-desc">Строгий стиль для IT и Финтеха.</span>
                    </label>
                </div>
                <div class="option-card">
                    <input type="radio" name="style" id="creative">
                    <label for="creative">
                        <span class="option-name">Креативный</span>
                        <span class="option-desc">Для дизайнеров и маркетологов.</span>
                    </label>
                </div>
            </div>
        </section>
    </main>
@endsection
