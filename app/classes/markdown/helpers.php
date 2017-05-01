<?php

if (!function_exists('version_url')) {
    function version_url($version)
    {
        $uri = str_replace(config_get('basepath', 'app'), '', $_SERVER['REQUEST_URI']);
        $uriexp = explode('/', $uri);
        $filter = array_values(array_filter($uriexp));

        if (count($filter)) {
            $filter[1] = $version;

            return url('/'.implode('/', $filter));
        }

        return url('/'.$version);
    }
}
