<?php

declare(strict_types=1);

/*
 * This file is part of the goldeagle/takoff project.
 *
 * @author  goldeagle <1308362@gmail.com>
 *
 */

namespace _\internal;

function baseIndexOfWith(array $array, $value, int $fromIndex, $comparator)
{
    $index = $fromIndex - 1;

    foreach (\array_slice($array, $fromIndex, null, true) as $val) {
        ++$index;
        if ($comparator($val, $value)) {
            return $index;
        }
    }

    return -1;
}
