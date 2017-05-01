<?php

if (!function_exists('version_url')) {
    function version_url($version)
    {
        $uri = $_SERVER['REQUEST_URI'];
        $basepath = config_get('basepath', 'app');

        if ($basepath != '/') {
            $uri = str_replace($basepath, '', $uri);
        }

        $uriexp = explode('/', $uri);
        $filter = array_values(array_filter($uriexp));

        if (count($filter)) {
            $filter[1] = $version;

            return url('/'.implode('/', $filter));
        }

        return url('/'.$version);
    }
}
