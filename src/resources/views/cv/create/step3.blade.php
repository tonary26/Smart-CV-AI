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
                <span class="step-num">ШАГ 3</span>
                <h1 class="editor-title">Дополнительная информация</h1>
            </div>
            <div class="actions">
                <button class="btn-outline">Сохранить черновик</button>
                <button type="submit" class="btn-black" form="step3-form">Далее →</button>
            </div>
        </header>

        <form id="step3-form" action="{{ route('cv.store.step3') }}" class="form-container" method="post">
            @csrf
            <div class="input-group">
                <label>Языки</label>
                <input name="language" type="text" placeholder="Например: Английский: B1, Русский: Носитель" class="main-input">
            </div>

            <div class="input-group">
                <label>Хобби</label>
                <input name="hobby" type="text" placeholder="Например: Баскетбол, плавание, зал" class="main-input">
            </div>
        </form>
    </main>
@endsection
