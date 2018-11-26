<?php

declare(strict_types=1);

/*
 * This file is part of the goldeagle/takoff project.
 *
 * @author  goldeagle <1308362@gmail.com>
 * 
 */

namespace _\internal;

function arrayIncludesWith(?array $array, $value, callable $comparator)
{
    $array = $array ?? [];

    foreach ($array as $v) {
        if ($comparator($value, $v)) {
            return true;
        }
    }

    return false;
}
