<?php

declare(strict_types=1);

/*
 * This file is part of the goldeagle/takoff project.
 *
 * @author  goldeagle <1308362@gmail.com>
 * @copyright  Copyright (c) 2018
 */

namespace _\internal;

use function _\each;

function createAggregator($setter, $initializer = null)
{
    return function ($collection, $iteratee) use ($setter, $initializer) {
        $accumulator = null !== $initializer ? $initializer() : [];

        $func = function ($collection, $setter, &$accumulator, $iteratee) {
            each($collection, function ($value, $key, $collection) use ($setter, &$accumulator, $iteratee) {
                $accumulator = $setter($accumulator, $value, $iteratee($value), $collection);
            });

            return $accumulator;
        };

        return $func($collection, $setter, $accumulator, baseIteratee($iteratee));
    };
}
