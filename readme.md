# Relacion de muchos a muchos 
Este repositorio a sido implementado para mostrar como ejecutar relaciones N + N.

### Requerimientos ###
* PHP >= 7.1.3
* Laravel >= 5.7
* Composer
* Git
* MySQL

### Installation ###

* `git clone https://github.com/Carlosferrerhernandez/eloquentmtm.git`
* `cd eloquentmtm`
* `composer install`
* `cp .env.example .env`
* `php artisan key:generate`
*  Añade la información de tu base de datos en *.env*
* `php artisan migrate:refresh --seed` Ejecutar las migraciones y los seeder para ingresar los registros.
* `php artisan serve` inicie el servicio y verifique en http:localhost:8000/

### Credits ###
* Taylor Otwell (Creator of Laravel)
* Carlos Ferrer
* Desarrollado para apoyar en comunidad Laravel Colombia.

