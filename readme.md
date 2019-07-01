
# Calculator

<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Installation

**Server Requirements**
The Laravel framework has a few system requirements. All of these requirements are satisfied by the Laravel Homestead virtual machine, so it's highly recommended that you use Homestead as your local Laravel development environment.

However, if you are not using Homestead, you will need to make sure your server meets the following requirements:

PHP >= 7.1.3
BCMath PHP Extension
Ctype PHP Extension
JSON PHP Extension
Mbstring PHP Extension
OpenSSL PHP Extension
PDO PHP Extension
Tokenizer PHP Extension
XML PHP Extension

**Procedure**
Make a folder than clone or download the content of the repository on local environment

    mkdir calculator

  Change directory to the project folder

    cd calculator

Set up the component of the project required by the framework 

    composer install

It may be required to set a series of serial key.

    php artisan key:generate

This project does not require any seeding or migration. nor the installation of npm and the set up of node_modules.

If Valet is in use run to following command to start the web server

    php artisan serve

## How does it work

In this Laravel project the index page routes to a GET request to localhost at port 8000.

*[http://127.0.0.1:8000/](http://127.0.0.1:8000/)*
and
*[http://127.0.0.1:8000/calculator](http://127.0.0.1:8000/calculator)*

<p align="center"><img src="https://i.ibb.co/tp6yWFc/Screenshot-from-2019-07-02-00-15-02.png" alt="Screenshot-from-2019-07-02-00-15-02" border="0"></p>


The calculator requires 1 or 2 field to be filled and an operation to be selected.
The default value is set to 0 and it is possible to edit both number for the first calculation.
From the second calculation onwards the current number (*$result*) will be automatically updated.

The form hit the method calculato of the *CalculatorController* with a POST request.
after validating the input, the controller set the right operation via the use of the *OperatorInterface* and does the calculation using the *operate()* method.

## Test
Several tests are available in the *tests* directory
the result is visible by running the following command from the root of the project.

    vendor/bin/phpunit

<p align="center"><img src="https://i.ibb.co/sJZWt82/Screenshot-from-2019-07-02-00-15-49.png" alt="Screenshot-from-2019-07-02-00-15-49" border="0"></p>

## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
