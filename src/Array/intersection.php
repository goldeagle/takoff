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
 * Creates an array of unique values that are included in all given arrays
 * using [`SameValueZero`](http://ecma-international.org/ecma-262/7.0/#sec-samevaluezero)
 * for equality comparisons. The order and references of result values are
 * determined by the first array.
 *
 * @category Array
 *
 * @param array ...$arrays
 *
 * @return array the new array of intersecting values.
 *
 * @example
 * <code>
 * intersection([2, 1], [2, 3])
 * // => [2]
 * </code>
 */
function intersection(array ...$arrays): array
{
    return \array_intersect(...$arrays);
}
