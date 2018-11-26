<?php

declare(strict_types=1);

/*
 * This file is part of the goldeagle/takoff project.
 *
 * @author  goldeagle <1308362@gmail.com>
 * 
 */

namespace _\internal;

use function _\property;

function baseIteratee($value): callable
{
    if (\is_callable($value)) {
        return $value;
    }

    if (null === $value) {
        return '_\identity';
    }

    if (\is_array($value)) {
        return 2 === \count($value) && [0, 1] === \array_keys($value)
            ? baseMatchesProperty($value[0], $value[1])
            : baseMatches($value);
    }

    return property($value);
}
