<?php

declare(strict_types=1);

/*
 * This file is part of the goldeagle/takoff project.
 *
 * @author  goldeagle <1308362@gmail.com>
 * @copyright  Copyright (c) 2018
 */

namespace _\internal;

use function _\eq;

function assocIndexOf(array $array, $key): int
{
    $length = \count($array);
    while ($length--) {
        if (eq($array[$length][0], $key)) {
            return $length;
        }
    }

    return -1;
}
