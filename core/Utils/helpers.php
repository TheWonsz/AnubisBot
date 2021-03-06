<?php

use Carbon\Carbon;
use Core\Foundation\Application;
use Core\Foundation\Environment;
use Core\Utils\Color;
use Core\Utils\Configuration;

// This file houses a host of helper functions.

if (!function_exists('aliases_path')) {
    /**
     * Gets the custom aliases path.
     *
     * @return string
     */
    function aliases_path()
    {
        return app_path().'/aliases';
    }
}

if (!function_exists('app_path')) {
    /**
     * Gets the application path.
     *
     * @return string
     */
    function app_path()
    {
        return base_path().'/app';
    }
}

if (!function_exists('base_path')) {
    /**
     * Gets the base app path.
     *
     * @return string
     */
    function base_path()
    {
        return getcwd();
    }
}

if (!function_exists('commands_path')) {
    /**
     * Gets the custom commands path.
     *
     * @return string
     */
    function commands_path()
    {
        return app_path().'/commands';
    }
}

if (!function_exists('config_get')) {
    /**
     * Gets a configuration option.
     *
     * @param string $config
     *
     * @return mixed
     */
    function config_get($config)
    {
        $c = new Configuration();

        return $c->get($config);
    }
}

if (!function_exists('console_path')) {
    /**
     * Gets the custom console commands path.
     *
     * @return string
     */
    function console_path()
    {
        return app_path().'/console';
    }
}

if (!function_exists('data_path')) {
    /**
     * Gets the guild data.
     *
     * @return string
     */
    function data_path()
    {
        return storage_path().'/data';
    }
}

if (!function_exists('tmp_path')) {
    /**
     * Gets the guild data.
     *
     * @return string
     */
    function tmp_path()
    {
        return storage_path().'/tmp';
    }
}

if (!function_exists('env')) {
    /**
     * Gets and environment variable.
     *
     * @param string $key
     * @param string $default
     *
     * @return mixed
     */
    function env($key, $default = '')
    {
        $env = new Environment();

        return $env->get($key, $default);
    }
}

if (!function_exists('logs_path')) {
    /**
     * Gets the logger's logs path.
     *
     * @return string
     */
    function logs_path()
    {
        return storage_path().'/logs';
    }
}

if (!function_exists('storage_path')) {
    /**
     * Gets the logger's logs path.
     *
     * @return string
     */
    function storage_path()
    {
        return base_path().'/storage';
    }
}

if (!function_exists('tsleep')) {
    /**
     * Allows ints and doubles to use for sleeping script.
     *
     * @param mixed $time
     *
     * @return void
     */
    function tsleep($time = 0)
    {
        usleep($time * 1000000);
    }
}

if (!function_exists('version')) {
    /**
     * Gets the bot's current version.
     *
     * @return string
     */
    function version()
    {
        $version = Application::VERSION;

        if (Application::branch() == 'develop') {
            $version .= ' dev-develop';
        }

        return $version;
    }
}

if (!function_exists('rgb_to_int')) {
    /**
     * Returns an RGB color to an integer color.
     *
     * @param int $red
     * @param int $green
     * @param int blue
     *
     * @return int
     */
    function rgb_to_int($red, $green, $blue)
    {
        return Color::rgbToInt($red, $green, $blue);
    }
}

if (!function_exists('rgb_to_hex')) {
    /**
     * Converts an RGB color to a hexadecimal color.
     *
     * @param int $red
     * @param int $green
     * @param int $blue
     *
     * @return string
     */
    function rgb_to_hex($red, $green, $blue)
    {
        return Color::rgbToHex($red, $green, $blue);
    }
}

if (!function_exists('int_to_rgb')) {
    /**
     * Converts an integer color to an RGB color.
     *
     * @param int $int
     *
     * @return array
     */
    function int_to_rgb($int)
    {
        return Color::intToRgb($int);
    }
}

if (!function_exists('int_to_hex')) {
    /**
     * Converts integer color to a hexadecimal color.
     *
     * @param int $int
     *
     * @return string
     */
    function int_to_hex($int)
    {
        return Color::intToHex($int);
    }
}

if (!function_exists('hex_to_rgb')) {
    /**
     * Converts hexadecimal color to RGB.
     *
     * @param string $hex
     *
     * @return array
     */
    function hex_to_rgb($hex)
    {
        return Color::hexToRgb($hex);
    }
}

if (!function_exists('hex_to_int')) {
    /**
     * Converts hexadecimal color to an integer color.
     *
     * @param string $hex
     *
     * @return int
     */
    function hex_to_int($hex)
    {
        return Color::hexToInt($hex);
    }
}

if (!function_exists('carbon')) {
    /**
     * Creates a new Carbon instance.
     *
     * @param int $timestamp
     *
     * @return \Carbon\Carbon
     */
    function carbon($timestamp = 0)
    {
        if ($timestamp == 0) {
            $timestamp = time();
        }

        return Carbon::createFromTimestamp($timestamp);
    }
}
