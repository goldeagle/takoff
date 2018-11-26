<?php

declare(strict_types=1);

/*
 * This file is part of the goldeagle/takoff project.
 *
 * @author  goldeagle <1308362@gmail.com>
 * @copyright  Copyright (c) 2018
 */

namespace _\internal;

use function _\property;

function baseGet($object, $path)
{
    $path = castPath($path, $object);

    $index = 0;
    $length = \count($path);

    while ($object !== null && $index < $length) {
        $object = property(toKey($path[$index++]))($object);
    }

    return ($index > 0 && $index === $length) ? $object : null;
}
