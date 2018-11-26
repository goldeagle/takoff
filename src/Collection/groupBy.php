<?php

declare(strict_types=1);

/*
 * This file is part of the goldeagle/takoff project.
 *
 * @author  goldeagle <1308362@gmail.com>
 * 
 */

namespace _;

use function _\internal\createAggregator;

/**
 * Creates an array composed of keys generated from the results of running
 * each element of `collection` through `iteratee`. The order of grouped values
 * is determined by the order they occur in `collection`. The corresponding
 * value of each key is an array of elements responsible for generating the
 * key. The iteratee is invoked with one argument: (value).
 *
 * @category Collection
 *
 * @param iterable $collection The collection to iterate over.
 * @param callable $iteratee The iteratee to transform keys.
 *
 * @return array Returns the composed aggregate object.
 * @example
 * <code>
 * groupBy([6.1, 4.2, 6.3], 'floor');
 * // => ['6' => [6.1, 6.3], '4' => [4.2]]
 *
 * groupBy(['one', 'two', 'three'], 'strlen');
 * // => ['3' => ['one', 'two'], '5' => ['three']]
 * </code>
 */
function groupBy(iterable $collection, $iteratee): array
{
    return createAggregator(function ($result, $value, $key) {
        if (!isset($result[$key])) {
            $result[$key] = [];
        }

        $result[$key][] = $value;

        return $result;
    })($collection, $iteratee);
}
