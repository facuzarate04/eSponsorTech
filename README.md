# eSponsorTech

- Este proyecto fue desarrollado en lenguaje PHP, utilizando el framework Laravel.
- Es un proyecto Web, que utiliza el patrón de arquitectura MVC (modelo, vista, controlador).

Durante el desarrollo del mismo, se utilizó la metodología GitFlow de Git, para realizar una pseudo integración contínua.

## Versions.
- PHP v 8.0.3
- Laravel v 8.49.2
- Maria DB 10.4.18

## Requeriments.
- Tener instalado Laravel en la versión definida anteriormente o superior.
- Tener instalado PHP en la versión definida anteriormente o superior.

## Instructions.
### Instalar dependencias
- composer install
- npm install

### Crear DB
Para este proyecto se utilizó el motor de DB MySQL y el gestor María DB

### Generar archivo .env cob las siguientes consideraciones.
- BROADCAST_DRIVER=log
- CACHE_DRIVER=file
- FILESYSTEM_DRIVER=local
- QUEUE_CONNECTION=sync
- SESSION_DRIVER=database
- SESSION_LIFETIME=120

### Generar una clave.
php artisan key:generate

### Ejecutar migraciones y seeders para utilizar la app.
php artisan migrate:fresh --seed

#### En caso de ser necesario, crear un VHost local, para acceder a la URL definida en el archivo .env.

## Importante!
- En el video se muestra la corrección de un pequeño error de redireccionamiento.
- En el HomeController, método store, hay que redireccionar a la vista principal "/" y NO al "/home".
- En la view Home, hay que cambiar el action del formulario para guardar el Tweet, y colocar el action="" (vacío).


