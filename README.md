req: PHP 8.3

Uzyta wersja Laravel: 10.46.0

Po pobraniu:

1. trzeba skopiować .env-example -> .env
2. composer install
3. php artisan migrate --seed

   WARN  The SQLite database does not exist: database/database.sqlite.
   
   Would you like to create it?

   oczywiście zaznaczyć - **Yes**.

4. php artisan serve

Standardowo artisan działa na: http://127.0.0.1:8000

**URLs**

**upload obrazków:** http://127.0.0.1:8000/upload

**index obrazków:** http://127.0.0.1:8000/index

Jeśli użytkownik nie jest zalogowany to zostanie przekierowany do http://127.0.0.1:8000/login

dane logowania (zdefiniowane w seeder: database/seeders/DatabaseSeeder.php)

email: admin@example.com

password: admin

użyta jest baza sqlite więc nie trzeba definiować połączenia z bazą.

Pomimo tego że zadanie jest nieduże, to postanowiłem podzielić całość na Modules (app/Modules).
Wolę taki podział niż trzymanie razem wszystkich modeli, kontrolerów czy innych klas w oddzielnych katalogach.



