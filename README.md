# Laravel Api Dummy
Laravel Api Dummy

### Requirements
- PHP >= 8.2
- Composer 
- Os Linux Ubuntu newest version (recommended)
- Web Server Nginx or Apache (recommended)
- Database Mysql / Sqllite (recommended)

### Installation
1. Clone the repository `git clone https://github.com/mikhsanw/laravel-api-dummy.git`
2. Run `cd laravel-api-dummy`
3. Run `composer install`
4. Run `php artisan key:generate`
5. Run `copy .env.example` to `.env`
6. Create a database and configure it in `.env`
7. Run `php artisan migrate`
8. Run `php artisan serve`
9. Visit `http://localhost:8000` in your browser