# SmartCV AI

SmartCV AI - веб-приложение на Laravel для создания и анализа резюме с помощью ИИ. Пользователь может зарегистрироваться, заполнить данные резюме в несколько шагов, сгенерировать улучшенную версию CV и скачать ее в PDF. Также доступна загрузка существующего PDF-резюме для оценки, выявления сильных и слабых сторон и получения рекомендаций.

## Возможности

- регистрация, вход и выход пользователя;
- создание резюме в 3 шага;
- генерация профессионального текста резюме через AI-провайдера;
- сохранение созданных CV в базе данных;
- скачивание резюме в PDF;
- анализ PDF-резюме с оценкой от 1 до 100;
- вывод краткого фидбэка, сильных сторон, слабых сторон и советов по улучшению;
- удаление сохраненных резюме.

## Стек

- PHP 8.3+ / PHP-FPM 8.4 в Docker;
- Laravel 13;
- MySQL 8.0;
- Laravel AI;
- Gemini как AI-провайдер по умолчанию;
- DomPDF для генерации PDF;
- Spatie PDF to Text для чтения PDF;
- Vite;
- Tailwind CSS 4;
- Nginx;
- Docker Compose.

## Структура проекта

```text
.
├── docker-compose.yml        # Docker Compose окружение
├── dockerfiles/              # Dockerfile для PHP и Composer
├── nginx/                    # Nginx конфигурация
└── src/                      # Laravel приложение
    ├── app/
    ├── config/
    ├── database/
    ├── public/
    ├── resources/
    ├── routes/
    └── tests/
```

## Требования

Для запуска через Docker:

- Docker;
- Docker Compose.

Для локального запуска без Docker:

- PHP 8.3+;
- Composer;
- Node.js 20+;
- npm;
- MySQL или SQLite;
- Poppler Utils, так как `spatie/pdf-to-text` использует утилиту `pdftotext`.

## Переменные окружения

В проекте используются два `.env` файла:

- `.env` в корне проекта - переменные для Docker Compose и MySQL;
- `src/.env` - переменные Laravel-приложения.

Пример корневого `.env`:

```env
DB_DATABASE=smartcv
DB_USERNAME=smartcv
DB_PASSWORD=secret
DB_ROOT_PASSWORD=root_secret
UID=1000
GID=1000
```

Пример важных настроек в `src/.env` для Docker:

```env
APP_NAME="SmartCV AI"
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost:8080

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=smartcv
DB_USERNAME=smartcv
DB_PASSWORD=secret

QUEUE_CONNECTION=database
SESSION_DRIVER=database
CACHE_STORE=database

GEMINI_API_KEY=your_gemini_api_key
```

По умолчанию в `src/config/ai.php` выбран провайдер `gemini`, поэтому для генерации и анализа CV нужен `GEMINI_API_KEY`. При необходимости можно настроить другой провайдер в этом же конфиге.

## Запуск через Docker

1. Создайте корневой `.env` вручную по примеру из раздела "Переменные окружения".

2. Создайте `src/.env`:

```bash
cd src
cp .env.example .env
cd ..
```

3. Соберите и запустите контейнеры:

```bash
docker compose up -d --build
```

4. Установите PHP-зависимости:

```bash
docker compose run --rm composer install
```

5. Установите npm-зависимости:

```bash
docker compose run --rm node npm install
```

6. Сгенерируйте ключ приложения:

```bash
docker compose run --rm artisan php artisan key:generate
```

7. Выполните миграции:

```bash
docker compose run --rm artisan php artisan migrate
```

8. Откройте приложение:

```text
http://localhost:8080
```

Vite dev server доступен на:

```text
http://localhost:5173
```

## Локальный запуск без Docker

Перейдите в директорию Laravel-приложения:

```bash
cd src
```

Установите зависимости:

```bash
composer install
npm install
```

Создайте окружение и ключ:

```bash
cp .env.example .env
php artisan key:generate
```

Настройте базу данных и `GEMINI_API_KEY` в `src/.env`, затем выполните миграции:

```bash
php artisan migrate
```

Запустите приложение:

```bash
composer run dev
```

Эта команда поднимает Laravel server, очередь, логи и Vite.

## Основные маршруты

- `/` - главная страница;
- `/auth/register` - регистрация;
- `/auth/login` - вход;
- `/cv` - список резюме пользователя;
- `/cv/create/step1` - первый шаг создания CV;
- `/cv/create/step2` - второй шаг создания CV;
- `/cv/create/step3` - третий шаг создания CV;
- `/cv/create/generate` - генерация PDF;
- `/cv/analyze` - загрузка и анализ PDF-резюме.

## Команды разработки

Из директории `src`:

```bash
composer run dev
composer run test
npm run dev
npm run build
php artisan migrate
php artisan route:list
```

Через Docker:

```bash
docker compose run --rm artisan php artisan migrate
docker compose run --rm artisan php artisan test
docker compose run --rm node npm run build
docker compose logs -f
```

## Тесты

Запуск тестов локально:

```bash
cd src
composer run test
```

Запуск тестов через Docker:

```bash
docker compose run --rm artisan php artisan test
```

## Примечания

- Анализ PDF работает только для PDF-файлов.
- Для извлечения текста из PDF в окружении должна быть установлена утилита `pdftotext`.
- AI-ответы ожидаются в формате JSON. Если провайдер вернет невалидный JSON, результат анализа или генерации может быть некорректным.
- Docker-приложение доступно через Nginx на порту `8080`, MySQL проброшен на порт `3316`, Vite - на порт `5173`.
