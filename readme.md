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
* Add your database info in *.env*
* `php artisan migrate:refresh --seed` para crear las tablas y ejecutar los registros con sus seeders y factorys
* `php artisan serve` inice el servicio y verifique en http:localhost:8000/

### Credits ###
* Taylor Otwell (Creator of Laravel)
* Carlos Ferrer
* Desarrollado para apoyar en Laravel Colombia.

