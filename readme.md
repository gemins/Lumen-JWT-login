# Lumen 5.4 + JWT (Login de usuario).

[![N|Solid](https://manu.cloud/wp-content/uploads/2017/03/manucloud_createby.png)](https://manu.cloud)

Este repositorio cuenta con la version de Lumen 5.4 + JWT para login de usuario, listo para clonar e iniciar todos tus proyectos.

## Correr servicio en localhost

Para correr el servicio del repositorio puedes usar el siguiente comando:

```sh
php -S localhost:8000 -t public
```

## Instalación y configuración

1. Recuerda Rellenar tu archivo .env con los datos de tu base de datos.
2. Una vez iniciado el servidor del respositorio, ingresa a la ruta /key para copiar la clave de 32 chars y luego pegarlo en tu archivo .env (APP_KEY).
3. Corre las migraciones y las semillas:

```sh
php artisan migrate
php artisan db:seed
```

3. Listo! Configura tu Lumen a gusto.

Las instrucciones para generar este proyecto las podras encontrar aquí:
https://manu.cloud/framework/lumen/inicio-de-sesion-con-jwt-en-lumen/

Si deseas aprender a instalar Lumen desde cero:
https://manu.cloud/framework/lumen/como-instalar-lumen-5-4-en-nuestro-localhost/

## License

# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://poser.pugx.org/laravel/lumen-framework/d/total.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/lumen-framework/v/stable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/lumen-framework/v/unstable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://poser.pugx.org/laravel/lumen-framework/license.svg)](https://packagist.org/packages/laravel/lumen-framework)

The Lumen framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
