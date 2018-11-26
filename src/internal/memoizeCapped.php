<?php

declare(strict_types=1);

/*
 * This file is part of the goldeagle/takoff project.
 *
 * @author  goldeagle <1308362@gmail.com>
 * @copyright  Copyright (c) 2018
 */

namespace _\internal;

use function _\memoize;

function memoizeCapped(callable $func)
{
    $MaxMemoizeSize = 500;
    $result = memoize($func, function ($key) use ($MaxMemoizeSize) {
        if ($this->cache->getSize() === $MaxMemoizeSize) {
            $this->cache->clear();
        }

        return $key;
    });

    return $result;
}
