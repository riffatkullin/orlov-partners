# ORLOV & PARTNERS

Корпоративный сайт юридической компании с административной панелью для обработки клиентских обращений.

## Возможности

- Адаптивный корпоративный сайт
- Форма консультации
- Валидация данных
- Сохранение заявок в MySQL
- Административная панель
- Авторизация администратора
- Управление статусами заявок
- E-mail уведомления

## Стек

- PHP 8.5
- Laravel 13
- MySQL
- Blade
- JavaScript
- CSS
- Vite
- Docker / Laravel Sail

## Запуск

```bash
git clone git@github.com:riffatkullin/orlov-partners.git
cd orlov-partners

composer install
npm install

cp .env.example .env
php artisan key:generate

./vendor/bin/sail up -d
./vendor/bin/sail artisan migrate
./vendor/bin/sail npm run build
