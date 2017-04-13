# AnubisBot
[![StyleCI](https://styleci.io/repos/87753072/shield?branch=master)](https://styleci.io/repos/87753072)
[![Latest Stable Version](https://poser.pugx.org/pazuzu156/anubisbot/v/stable?format=flat-square)](https://packagist.org/packages/pazuzu156/anubisbot)
[![Packagist](https://img.shields.io/packagist/dt/pazuzu156/anubisbot.svg?style=flat-square)](https://packagist.org/packages/pazuzu156/anubisbot)
[![Libraries.io for GitHub](https://img.shields.io/librariesio/github/pazuzu156/anubisbot.svg?style=flat-square)](https://libraries.io/github/pazuzu156/AnubisBot)
[![Packagist](https://img.shields.io/packagist/l/pazuzu156/anubisbot.svg?style=flat-square)](https://github.com/pazuzu156/AnubisBot/blob/master/LICENSE)

A Discord bot built in PHP

## Install
Use composer to install the latest stable version of AnubisBot

`$ composer create-project pazuzu156/anubisbot --prefer-dist`

If you want the latest codebase for AnubisBot, please use the `dev-develop` branch:

`$ composer create-project pazuzu156/anubisbot:dev-develop --stability=dev --prefer-dist`  
or  
`$ composer create-project pazuzu156/anubisbot:dev-master --stability=dev --prefer-dist`  
for the master branch

`dev-develop` is the most active branch. If you want to use `master`, `dev-develop` is merged into `master` daily, so while changes are always frequent, it's more stable than `dev-develop`

## Config
`config.php` holds commands to register 

A seperate .env file houses bot information  
`TOKEN` houses your bot's auth token  
`NAME` is for the name of your bot  
`DESCRIPTION` is the description of your bot  
`PREFIX` is the prefix to use for your bot (used for recognizing commands)  
`PREFIX_SPACE` tells the bot whether prefixes should also include a space  
`BOTSPAM_CHANNEL_ID` the channel id that AnubisBot's auto-messages should go

## Command
Create a command with `$ php cli command:make <COMMAND>`

Sub commands are basically public methods within your command class. While the base command has `protected $description` as it's description for `!help`, sub commands get their descriptions from their method's docblocks.

Command descriptions (including sub commands) can house variables using `{VAR_NAME}`

`PREFIX` and `NAME` are the only suppored ones at the moment though..

## Run
Run the bot with `$ php cli run`

Running the above will also run the on-start changelog message. To disable this, add `false` at the end
