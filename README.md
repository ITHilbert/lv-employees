# Employees

## Benötigte Komponenten:
laravelKit
UserAuth

## Berechtigungen
- Mitarbeiterverwaltung 
anlegen

## Install
```
composer require ithilbert/lv-employees
php artisan vendor:publish --provider="ITHilbert\Employees\EmployeesServiceProvider"

//Daten kopieren
php artisan vendor:publish --provider="ITHilbert\Employees\EmployeesServiceProvider"

//Tabellen erstellen
php artisan migrate

//Daten einspielen
php artisan db:seed --class="ITHilbert\Employees\Database\Seeders\DatabaseSeeder"

```

