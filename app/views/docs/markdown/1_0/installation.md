## Installation
[System Requirements](#system-requirements)  
[Setting Up](#setting-up)  
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

<a name="running"></a>
### Running
From here, you should be set to running the default bot with all the built in commands. To run, execute the following:

```bash
$ php cli run
```
