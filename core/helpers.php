<?php

// This file houses a host of helper functions.

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
        $env = new \Core\Environment();

        return $env->get($key, $default);
    }
}

if (!function_exists('env_set')) {
    /**
     * Sets an environment variable and saves it into .env.
     *
     * @param string $key
     * @param string $value
     *
     * @return bool
     */
    function env_set($key, $value)
    {
        $env = new \Core\Environment();

        return $env->set($key, $value);
    }
}
