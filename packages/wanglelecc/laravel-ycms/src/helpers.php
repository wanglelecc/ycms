<?php

if (!function_exists('yycms_path')) {

    /**
     * Get admin path.
     *
     * @param string $path
     *
     * @return string
     */
    function yycms_path($path = '')
    {
        return ucfirst(config('yycms.directory')).($path ? DIRECTORY_SEPARATOR.$path : $path);
    }
}