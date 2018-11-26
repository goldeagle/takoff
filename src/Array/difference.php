<?php

declare(strict_types=1);

/*
 * This file is part of the goldeagle/takoff project.
 *
 * @author  goldeagle <1308362@gmail.com>
 * 
 */

namespace _;

/**
 * Creates an array of `array` values not included in the other given arrays
 * using [`SameValueZero`](http://ecma-international.org/ecma-262/7.0/#sec-samevaluezero)
 * for equality comparisons. The order and references of result values are
 * determined by the first array.
 *
 * **Note:** Unlike `pullAll`, this method returns a new array.
 *
 * @category Array
 *
 * @param array $array The array to inspect.
 * @param array ...$values The values to exclude.
 *
 * @return array Returns the new array of filtered values.
 *
 * @example
 * <code>
 * difference([2, 1], [2, 3])
 * // => [1]
 * </code>
 */
function difference(array $array, array ...$values): array
{
    return \array_values(\array_diff($array, ...$values));
}
