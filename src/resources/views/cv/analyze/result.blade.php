@extends('layouts.main')

@section('title')
    <title>Create Smart CV | Result</title>
@endsection

@section('styles')
    @vite(['resources/css/cv/result.css'])
@endsection

@section('content')
    <main class="main">
        <header class="result-header">
            <div class="score-giant">
                <span class="score-num">{{ $result['score'] }}%</span>
                <span class="score-label">ATS SCORE</span>
            </div>
            <div class="header-text">
                <h1 class="page-title">Анализ резюме: {{ $fileName }}</h1>
                <p class="summary-text">{{ $result['feedback'] }}</p>
            </div>
        </header>

        <div class="analysis-grid">
            <section class="analysis-section critical">
                <h2 class="section-title">Критические замечания</h2>

                @foreach($result['weaknesses'] as $weakness)
                    <div class="issue-card">
                        <p>{{ $weakness }}</p>
                    </div>
                @endforeach
            </section>

            <section class="analysis-section success">
                <h2 class="section-title">Сильные стороны</h2>

                @foreach($result['strengths'] as $strength)
                    <div class="issue-card">
                        <p>{{ $strength }}</p>
                    </div>
                @endforeach
            </section>
        </div>

        <div class="tip-card">
            <div class="tip-content">
                @foreach($result['tips'] as $tip)
                    <h3 class="tip-desc">{{ $tip }}</h3>
                @endforeach
            </div>
        </div>
    </main>
@endsection
