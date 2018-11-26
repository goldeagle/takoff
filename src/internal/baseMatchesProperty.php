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

function baseMatchesProperty($property, $source): callable
{
    return function ($value, $index, $collection) use ($property, $source) {
        return isEqual(property($property)($value, $index, $collection), $source);
    };
}
