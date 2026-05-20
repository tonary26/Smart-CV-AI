@extends('layouts.main')

@section('title')
    <title>Create Smart CV | Analyze</title>
@endsection

@section('styles')
    @vite(['resources/css/cv/analyze.css'])
@endsection

@section('content')
    <main class="main">
        <h2 class="form-header">Анализируйте свое резюме благодаря ИИ.</h2>
        <form id="step1-form" action="{{ route('cv.analyze') }}" class="form-container" method="post" enctype="multipart/form-data">
            @csrf
            <label class="file-upload-zone">
                <input type="file" name="pdf" accept=".pdf">
                <span class="upload-text">ВЫБРАТЬ PDF ДОКУМЕНТ</span>
            </label>

            @if($errors->any())
                @foreach($errors->all() as $error)
                    <p style="color:red">{{ $error }}</p>
                @endforeach
            @endif

            <button type="submit" class="btn-eval">ОЦЕНИТЬ</button>
        </form>
    </main>
@endsection
