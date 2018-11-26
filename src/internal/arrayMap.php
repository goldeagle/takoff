<?php

declare(strict_types=1);

/*
 * This file is part of the goldeagle/takoff project.
 *
 * @author  goldeagle <1308362@gmail.com>
 * @copyright  Copyright (c) 2018
 */

namespace _\internal;

function arrayMap(?array $array, callable $iteratee)
{
    $index = -1;
    $length = null === $array ? 0 : \count($array);
    $result = [];

    while (++$index < $length) {
        $result[$index] = $iteratee($array[$index], $index, $array);
    }

    return $result;
}
