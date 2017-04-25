<?php

if (!function_exists('lavatar_img')) {
    function lavatar_img($string, $size = 120, $backgroundColor = 'FFFFFF')
    {
        return app('lavatar')->displayAvatar($string, $size, null, $backgroundColor);
    }
}

if (!function_exists('lavatar_base64')) {
    function lavatar_base64($string, $size = 120, $backgroundColor = 'FFFFFF')
    {
        return app('lavatar')->getAvatarBase64($string, $size, null, $backgroundColor);
    }
}