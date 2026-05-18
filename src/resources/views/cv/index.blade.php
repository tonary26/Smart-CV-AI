@extends('layouts.main')

@section('title')
    <title>Smart CV</title>
@endsection

@section('styles')
    @vite(['resources/css/cv/index.css'])
@endsection

@section('content')
    <main class="main">
        <header class="list-header">
            <div>
                <h1 class="page-title">Мои резюме</h1>
                <p class="count-label">Всего документов: {{ $cvs->count() }}</p>
            </div>
            <a href="{{ route('cv.create.step1') }}" class="btn-black">+ Создать новое</a>
        </header>

        <section class="resume-grid">
            @foreach($cvs as $cv)
                <div class="resume-card">
                    <div class="card-info">
                        <h2 class="resume-name">{{ $cv->job }}</h2>
                    </div>
                    <div class="card-stats">
                        <div class="stat">
                            <span class="val">88%</span>
                            <span class="lab">ATS Score</span>
                        </div>
                    </div>
                    <form action="{{ route('cv.delete', $cv->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <div class="card-actions">
                            <button class="btn-text danger" type="submit">Удалить</button>
                        </div>
                    </form>
                </div>
            @endforeach
        </section>
    </main>
@endsection
