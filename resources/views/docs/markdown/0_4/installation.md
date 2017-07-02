## Installation
[System Requirements](#system-requirements)  
[Setting Up](#setting-up)  
[Configure](#configure)  
[Running](#running)  

<a name="system-requirements"></a>
### System Requirements
AnubisBot uses libraries which utilize some newer PHP stuff. Thus, you need a newer version of PHP (Soon only PHP v7+ will be supported)

* PHP >= 5.6

<a name="setting-up"></a>
### Setting Up
AnubisBot utilizes [Composer](https://getcomposer.org), so you'll need it.

To create a new project for AnubisBot, execute the following:

```bash
$ composer create-project pazuzu156/anubisbot --prefer-dist
```

If you want the latest code base, use `dev-develop`. **CAUTION** `dev-develop` is the development branch, and thus is considered unstable. Only use it if you're fine with things breaking all the time ;)

```bash
$ composer create-project pazuzu156/anubisbot:dev-develop --stability=dev --prefer-dist
```

<a name="configure"></a>
### Configure
Configuring AnubisBot is easy. There are only 2 files to configure (yeah, sorry...)

The first is `.env`. This file contains environment variables to use in the PHP application. It also serves as the default configuration file. This file is loaded through `Core\Foundation\Environment::class` and should work properly, even if you do not specify a variable in this file.

Upon creating the project, a .env file should have been generated for you. If one is not, rename `.env.example` to `.env`

`registrar.php` is the command registrar. All commands you will use for AnubisBot along with all their aliases AND Symfony commands are registered in this file.

To add a class (command/alias/etc.) into the registrar, place it in it's designated array (aptly named array keys) using the following syntax:

```php
...
'commands' => [
    ...
    App\Commands\MyNewCommand::class,
    ...
],
...
```

<a name="running"></a>
### Running
From here, you should be set to running the default bot with all the built in commands. To run, execute the following:

```bash
$ php cli run
```
