<?php

declare(strict_types=1);

/*
 * This file is part of the goldeagle/takoff project.
 *
 * @author  goldeagle <1308362@gmail.com>
 * @copyright  Copyright (c) 2018
 */

namespace _\internal;

function baseTimes(int $n, callable $iteratee)
{
    $index = -1;
    $result = [];

    while (++$index < $n) {
        $result[$index] = $iteratee($index);
    }

    return $result;
}
