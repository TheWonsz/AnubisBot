## Configuration
[Environment](#environment)  
[Registrar](#registrar)

<a name="environment"></a>
### Environment
AnubisBot manages it's default configuration via `.env` file. This file is generated when you create a new project using Composer. If you did once before and are just cloning your repository, be sure to copy `.env.example` to `.env`

Each of the environment file's options are self explanitory via the option's key. (e.g. `DEBUG=true` means that the app should run in debug mode)

<a name="registrar"></a>
### Registrar
AnubisBot hosts it's command registrar in `registrar.php`. This file contains all of the class names for your bot's commands as well as the built-in commands that come stock with AnubisBot. To add your command/alias/console command to the bot's registrar, just add your command's class name to the registrar file like so:

```php
...
'commands' => [
    ...
    App\Commands\MyNewCommand::class,
    ...
],
...
```
