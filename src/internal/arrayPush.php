<?php

declare(strict_types=1);

/*
 * This file is part of the goldeagle/takoff project.
 *
 * @author  goldeagle <1308362@gmail.com>
 * @copyright  Copyright (c) 2018
 */

namespace _\internal;

function arrayPush(&$array, $values)
{
    $index = -1;
    $length = \is_array($values) ? \count($values) : \strlen($values);
    $offset = \count($array);

    while (++$index < $length) {
        $array[$offset + $index] = $values[$index];
    }

    return $array;
}
