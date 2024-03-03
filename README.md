req: PHP 8.3

Uzyta wersja Laravel: 10.46.0

Po pobraniu:

1. trzeba skopiować .env-example -> .env
2. composer install 
3. php artisan migrate --seed 
4. php artisan serve

urls

**upload obrazków:** /upload

**index obrazków:** /index

Jeśli użytkownik nie jest zalogowany to zostanie przekierowany do /login

dane logowania (zdefiniowane w seeder: database/seeders/DatabaseSeeder.php)

email: admin@example.com

password: admin

użyta jest baza sqlite więc nie trzeba definiować połączenia z bazą.




