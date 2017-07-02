## Helpers
[Introduction](#introduction)  
[Available Helpers](#available-helpers)  
[Helper Function Demonstration](#helper-function-demonstration)

<a name="introduction"></a>
### Introduction
AnubisBot has a few helper functions built in. Since Laravel's Support module is included within Scara's framework, natually all of the [helper functions](https://github.com/laravel/framework/blob/5.3/src/Illuminate/Support/helpers.php) provided by the module are available for use.

<a name="available-helpers"></a>
### Available Helpers
Below is a list of the available helper methods provided by Scara. The ones provided by Laravel's Support module are **NOT** included in this list

#### Paths [<span class="caret"></span>](#paths)
[aliases_path](#aliases-path)  
[app_path](#app-path)  
[base_path](#base-path)  
[commands_path](#commands-path)  
[console_path](#console-path)  
[data_path](#data-path)  
[logs_path](#logs-path)  
[storage_path](#storage-path)  

#### Configuration [<span class="caret"></span>](#configuration)
[config_get](#config-get)  
[env](#env)  
[env_set](#env-set)  

#### Extras [<span class="caret"></span>](#extras)
[tsleep](#tsleep)  
[version](#version)  

<a name="helper-function-demonstration"></a>
### Helper Function Demonstration

<a name="paths"></a>
#### Paths {.header-heading}
<a name="aliases-path"></a>
#### `aliases_path()` {.header-method .first-method}
The `aliases_path` function gets AnubisBot's custom aliases path within the `app/` directory

```php
$aliases = aliases_path();

// /path/to/anubisbot/app/aliases
```

<a name="app-path"></a>
#### `app_path()` {.header-method .first-method}
The `app_path` function gets AnubisBot's `app/` directory

```php
$appPath = app_path();

// /path/to/anubisbot/app
```

<a name="base-path"></a>
#### `base_path()` {.header-method .first-method}
The `base_path` function gets AnubisBot's base application path

```php
$basePath = base_path();

// /path/to/anubisbot
```

<a name="commands-path"></a>
#### `commands_path()` {.header-method .first-method}
The `commands_path` function gets AnubisBot's custom commands path within the `app/` directory

```php
$commands = commands_path();

// /path/to/anubisbot/app/commands
```

<a name="console-path"></a>
#### `console_path()` {.header-method .first-method}
The `console_path` function gets AnubisBot's custom console commands path within the `app/` directory

```php
$console = console_path();

// /path/to/anubisbot/app/console
```

<a name="data-path"></a>
#### `data_path()` {.header-method .first-method}
The `data_path` function gets AnubisBot's server data directory

```php
$data = data_path();

// /path/to/anubisbot/storage/data
```

<a name="logs-path"></a>
#### `logs_path()` {.header-method .first-method}
The `logs_path` function gets AnubisBot's logs directory

```php
$logs = logs_path();

// /path/to/anubisbot/storage/logs
```

<a name="storage-path"></a>
#### `storage_path()` {.header-method .first-method}
The `storage_path` function gets AnubisBot's application storage directory

```php
$storage = storage_path();

// /path/to/anubisbot/storage
```

<a name="configuration"></a>
#### Configuration {.header-heading}
<a name="config-get"></a>
#### `config_get()` {.header-method .first-method}
The `config_get` function gets a config value from `registrar.php`

```php
$commands = config_get('commands');

...
// returns
$commands = [
    App\Commands\MyNewCommand::class,
];
...
```

<a name="env"></a>
#### `env()` {.header-method .first-method}
The `env` function gets an environment variable

```php
$debug = env('DEBUG', false);

// true|false (depending on data set in .env)
```

<a name="env-set"></a>
#### `env_set()` {.header-method .first-method}
The `env_set` function sets an environment variable and writes it to .env

```php
$debug = env_set('DEBUG', true);

// true|false (returns a boolean true on success, false on fail)
```

<a name="extras"></a>
#### Extras {.header-heading}
<a name="tsleep"></a>
#### `tsleep()` {.header-method .first-method}
The `tsleep` functions like `sleep` only it allows for floating point numbers

```php
...
tsleep(1.5); // Sleep for 1.5 seconds
...
```

<a name="storage-path"></a>
#### `version()` {.header-method .first-method}
The `version` function gets AnubisBot's current version

```php
$version = version();

// 0.4
```
