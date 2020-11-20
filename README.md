# Sqola

Sqola is an e-learning web based platform. 

### Tech stack:
1. Laravel 8
2. MySQL
3. TailwindCSS

### How to run it:
1. Clone this project
2. Make sure you have MySQL and PHP installed on your machine
3. Open this project directory root and type `cp .env.example .env` on your terminal. This will make a new `.env` file for your environment
4. Then generate the `APP_KEY` using: `php artisan key:generate`
5. Run migration: `php artisan migrate`
6. Run command `php artisan serve` , the site is deployed on your localhost
