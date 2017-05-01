<?php

if (!function_exists('version_url')) {
    function version_url($version)
    {
        $uriexp = explode('/', $_SERVER['REQUEST_URI']);
        $filter = array_values(array_filter($uriexp));

        if (count($filter)) {
            $filter[1] = $version;

            return url('/'.implode('/', $filter));
        }

        return url('/'.$version);
    }
}
