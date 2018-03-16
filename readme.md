# Lumen 5.6 + JWT 1.0-rc2 (Login de usuario) - UPDATED: 16/03/2018.

[![License](https://manu.cloud/wp-content/uploads/2017/03/manucloud_creador.png)](https://manu.cloud)
[![License](https://poser.pugx.org/laravel/lumen-framework/license.svg)](https://opensource.org/licenses/MIT)

Este repositorio cuenta con la version de Lumen 5.6 + JWT 1.0-rc2 para login de usuario, listo para clonar e iniciar todos tus proyectos.

## Correr servicio en localhost

Para correr el servicio del repositorio puedes usar el siguiente comando:

```sh
php -S localhost:8000 -t public
``

## Instalación y configuración

1. Recuerda Rellenar tu archivo .env con los datos de tu base de datos.
2. Una vez iniciado el servidor del respositorio, ingresa a la ruta /key para copiar la clave de 32 chars y luego pegarlo en tu archivo .env (APP_KEY).
3. Corre las migraciones y las semillas:

```sh
php artisan migrate
php artisan db:seed
```

4. Listo! Configura tu Lumen a gusto.

[![N|Solid](http://manu.cloud/wp-content/uploads/2017/03/manucloud_createby.png)](https://manu.cloud)

Las instrucciones para generar este proyecto las podras encontrar aquí:
http://manu.cloud/framework/lumen/inicio-de-sesion-con-jwt-en-lumen/

Si deseas aprender a instalar Lumen desde cero:
http://manu.cloud/framework/lumen/como-instalar-lumen-5-4-en-nuestro-localhost/

## License
The Lumen framework is open-sourced software licensed under the MIT license

# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://poser.pugx.org/laravel/lumen-framework/d/total.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/lumen-framework/v/stable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/lumen-framework/v/unstable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://poser.pugx.org/laravel/lumen-framework/license.svg)](https://packagist.org/packages/laravel/lumen-framework)

The Lumen framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)


# JWT-AUTH by tymondesigns

![jwt-auth-banner](https://cloud.githubusercontent.com/assets/1801923/9915273/119b9350-5cae-11e5-850b-c941cac60b32.png)

[![Build Status](http://img.shields.io/travis/tymondesigns/jwt-auth/master.svg?style=flat-square)](https://travis-ci.org/tymondesigns/jwt-auth)
[![Codecov branch](https://img.shields.io/codecov/c/github/tymondesigns/jwt-auth/develop.svg?style=flat-square)](https://codecov.io/github/tymondesigns/jwt-auth)
[![StyleCI](https://styleci.io/repos/23680678/shield?style=flat-square)](https://styleci.io/repos/23680678)
[![Latest Version](http://img.shields.io/packagist/v/tymon/jwt-auth.svg?style=flat-square)](https://packagist.org/packages/tymon/jwt-auth)
[![Latest Dev Version](https://img.shields.io/packagist/vpre/tymon/jwt-auth.svg?style=flat-square)](https://packagist.org/packages/tymon/jwt-auth#dev-develop)
[![Monthly Downloads](https://img.shields.io/packagist/dm/tymon/jwt-auth.svg?style=flat-square)](https://packagist.org/packages/tymon/jwt-auth)
[![Dependency Status](https://www.versioneye.com/php/tymon:jwt-auth/dev-develop/badge?style=flat-square)](https://www.versioneye.com/php/tymon:jwt-auth/dev-develop)
[![PHP-Eye](https://php-eye.com/badge/tymon/jwt-auth/tested.svg?style=flat-square)](https://php-eye.com/package/tymon/jwt-auth)
