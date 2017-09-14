<?php

if (function_exists('ColorColorCall')) {
    function ColorColorCall($method, $color, $p)
    {
        return (Color\Color::create($color))->$method($p);
    }
}

if (function_exists('lighten')) {
    function lighten($color, $p)
    {
        return ColorColorCall('lighten', $color, $p);
    }
}

if (function_exists('darken')) {
    function darken($color, $p)
    {
        return ColorColorCall('darken', $color, $p);
    }
}

if (function_exists('saturate')) {
    function saturate($color, $p)
    {
        return ColorColorCall('saturate', $color, $p);
    }
}

if (function_exists('desaturate')) {
    function desaturate($color, $p)
    {
        return ColorColorCall('desaturate', $color, $p);
    }
}
