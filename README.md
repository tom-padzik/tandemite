req: PHP 8.3

Uzyta wersja Laravel: 10.46.0

Po pobraniu:

1. composer install
2. php artisan migrate --seed
3. php artisan serve

urls

**upload obrazków:** /upload

**index obrazków:** /index

Jeśli użytkownik nie jest zalogowany to zostanie przekierowany do /login

dane logowania (zdefiniowane w seeder: database/seeders/DatabaseSeeder.php)

email: admin@example.com

password: admin



