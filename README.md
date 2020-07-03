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

//Daten kopieren
php artisan vendor:publish --provider="ITHilbert\Employees\EmployeesServiceProvider"

//Tabellen erstellen
php artisan migrate

//Daten einspielen
php artisan db:seed --class="ITHilbert\Employees\Database\Seeders\DatabaseSeeder"

```

## Model anpassen
### App\User
```
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use ITHilbert\Employees\Traits\UserExtendEmployee;
use ITHilbert\UserAuth\Traits\UserAuth;


class User extends Authenticatable
{
    use Notifiable;
    use UserAuth;
    use UserExtendEmployee;

    // Wichtig für die UserExtendEmployee 
    public function __construct(){
        parent::__construct();
    }

    ...code...
}
```