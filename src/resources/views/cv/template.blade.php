<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: DejaVu Sans, sans-serif;
            background: #ffffff;
            color: #111111;
            font-size: 11px;
            line-height: 1.5;
        }

        .header {
            border-bottom: 3px solid #111111;
            padding: 28px 36px 20px;
            display: block;
        }

        .header-name {
            font-size: 30px;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: #111111;
        }

        .header-job {
            font-size: 12px;
            letter-spacing: 4px;
            text-transform: uppercase;
            color: #555555;
            margin-top: 4px;
            border-left: 3px solid #111111;
            padding-left: 10px;
            margin-top: 8px;
        }

        .header-contacts {
            margin-top: 12px;
            font-size: 10px;
            color: #333333;
        }

        .header-contacts span {
            margin-right: 20px;
        }

        .header-contacts .dot {
            margin-right: 20px;
            color: #aaaaaa;
        }

        .body {
            display: block;
            padding: 24px 36px;
        }

        .section {
            margin-bottom: 22px;
        }

        .section-title {
            font-size: 9px;
            font-weight: 700;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: #111111;
            border-bottom: 1px solid #111111;
            padding-bottom: 4px;
            margin-bottom: 12px;
        }

        .experience-text {
            font-size: 11px;
            color: #222222;
            line-height: 1.7;
            text-align: justify;
        }

        .education-text {
            font-size: 11px;
            color: #222222;
            line-height: 1.7;
        }

        .tags {
            margin-top: 4px;
        }

        .tag {
            display: inline-block;
            border: 1px solid #111111;
            font-size: 9px;
            padding: 2px 8px;
            margin: 3px 3px 0 0;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            color: #111111;
        }

        .tag-filled {
            background: #111111;
            color: #ffffff;
        }

        @page {
            margin: 0;
            size: A4;
        }
    </style>
</head>
<body>

<div class="header">
    <div class="header-name">{{ $cv['name'] ?? '' }} {{ $cv['lastname'] ?? '' }}</div>
    @if(!empty($cv['job']))
        <div class="header-job">{{ $cv['job'] }}</div>
    @endif
    <div class="header-contacts" style="margin-top: 12px;">
        @if(!empty($cv['email']))
            <span>{{ $cv['email'] }}</span>
        @endif
        @if(!empty($cv['number']))
            <span class="dot">·</span>
            <span>{{ $cv['number'] }}</span>
        @endif
    </div>
</div>
<div class="body">
    @if(!empty($cv['experience']))
        <div class="section">
            <div class="section-title">Опыт работы</div>
            <div class="experience-text">{{ $cv['experience'] }}</div>
        </div>
    @endif

    @if(!empty($cv['education']))
        <div class="section">
            <div class="section-title">Образование</div>
            <div class="education-text">{{ $cv['education'] }}</div>
        </div>
    @endif

    @if(!empty($cv['stack']) && count($cv['stack']) > 0)
        <div class="section">
            <div class="section-title">Технический стек</div>
            <div class="tags">
                @foreach($cv['stack'] as $item)
                    <span class="tag tag-filled">{{ $item }}</span>
                @endforeach
            </div>
        </div>
    @endif

    @if(!empty($cv['hobby']) && count($cv['hobby']) > 0)
        <div class="section">
            <div class="section-title">Компании</div>

            <div class="tags">
                @foreach($cv['company'] as $c)
                        <span class="tag">{{ $c }}</span>
                @endforeach
            </div>
        </div>
    @endif

    @if(!empty($cv['language']) && count($cv['language']) > 0)
        <div class="section">
            <div class="section-title">Языки</div>
            <div class="tags">
                @foreach($cv['language'] as $lang)
                    <span class="tag">{{ $lang }}</span>
                @endforeach
            </div>
        </div>
    @endif

    @if(!empty($cv['hobby']) && count($cv['hobby']) > 0)
        <div class="section">
            <div class="section-title">Интересы</div>
            <div class="tags">
                @foreach($cv['hobby'] as $h)
                    <span class="tag">{{ $h }}</span>
                @endforeach
            </div>
        </div>
    @endif
</div>
</body>
</html>