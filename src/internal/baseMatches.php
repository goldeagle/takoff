<?php

declare(strict_types=1);

/*
 * This file is part of the goldeagle/takoff project.
 *
 * @author  goldeagle <1308362@gmail.com>
 * 
 */

namespace _\internal;

use function _\isEqual;
use function _\property;

function baseMatches($source): callable
{
    return function ($value, $index, $collection) use ($source): bool {
        if ($value === $source || isEqual($value, $source)) {
            return true;
        }

        if (\is_array($source) || $source instanceof \Traversable) {
            foreach ($source as $k => $v) {
                if (!isEqual(property($k)($value, $index, $collection), $v)) {
                    return false;
                }
            }

            return true;
        }

        return false;
    };
}
