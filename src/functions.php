<?php
if (!function_exists('env')) {
    function env($key, $default = null)
    {
        return \AgeGlow\Base\Framework\Utility\Env::get($key, $default);
    }
}
