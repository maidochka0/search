# Техническое задание (ТЗ)

1. Запустить Ларадок с нужными контейнерами [Laradock](https://laradock.io/).
2. Установить чистое приложение Ларавел с Laravel Jetstream на инерции и Vue [Laravel Jetstream](https://jetstream.laravel.com/introduction.html).
3. Создать 100 рандомных статей в базе данных.
4. Сделать примитивную поисковую строку на главной странице.
5. Подключить Скаут и Мейлисёрч, сделать полнотекстовый поиск [Laravel Scout](https://laravel.com/docs/11.x/scout).
6. Залить на GitLab, расшарить доступ для @genamalugin.

# Реализация

Убрал из .gitignore БД и .env-файлы. Если нужно перезаписывать БД, то есть миграция и сид. Команда для сида:

```bash
php artisan db:seed --class=ArticlesTableSeeder
```

# Деплой

Когда пересоздавал проект, клонируя этот репозиторий, использовал такие контейнеры:

```bash
docker-compose up -d nginx workspace meilisearch```
Внутри воркспейса использовал Composer, npm и индексацию Скаута:
```

```bash
composer install
npm install
npm run build
php artisan scout:import "App\Models\Article"
```

<hr>
телеграм для оперативной связи https://t.me/vsevolodson0