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
                <h1 class="editor-title">Персональная информация</h1>
            </div>
            <div class="actions">
                <button class="btn-outline">Сохранить черновик</button>
                <button type="submit" class="btn-black" form="step1-form">Далее →</button>
            </div>
        </header>

        <form id="step1-form" class="form-container" action="{{ route('cv.store.step1') }}" method="post">
            @csrf
            <div class="input-group">
                <label>Имя</label>
                <input name="name" type="text" placeholder="Иван, Родион и т.д" class="main-input">
            </div>

            <div class="input-group">
                <label>Фамилия</label>
                <input name="lastname" type="text" placeholder="Орлов, Стрельцов и т.д" class="main-input">
            </div>

            <div class="input-group">
                <label>Номер телефона</label>
                <input name="number" type="tel" placeholder="+373, +7 и т.д" class="main-input">
            </div>

            <div class="input-group">
                <label>Эл. почта</label>
                <input name="email" type="email" placeholder="example@gmail.com" class="main-input">
            </div>

            <div class="input-group">
                <label>Место обучения</label>
                <input name="education" type="text" placeholder="CUTM, UTM, CEITI.." class="main-input">
            </div>

{{--            <div class="options-grid">--}}
{{--                <div class="option-card selected">--}}
{{--                    <input type="radio" name="style" id="minimal" checked>--}}
{{--                    <label for="minimal">--}}
{{--                        <span class="option-name">Минимализм</span>--}}
{{--                        <span class="option-desc">Строгий стиль для IT и Финтеха.</span>--}}
{{--                    </label>--}}
{{--                </div>--}}
{{--                <div class="option-card">--}}
{{--                    <input type="radio" name="style" id="creative">--}}
{{--                    <label for="creative">--}}
{{--                        <span class="option-name">Креативный</span>--}}
{{--                        <span class="option-desc">Для дизайнеров и маркетологов.</span>--}}
{{--                    </label>--}}
{{--                </div>--}}
{{--            </div>--}}
        </form>
    </main>
@endsection
