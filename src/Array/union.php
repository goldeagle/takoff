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
 * Creates an array of unique values, in order, from all given arrays using
 * [`SameValueZero`](http://ecma-international.org/ecma-262/7.0/#sec-samevaluezero)
 * for equality comparisons.
 *
 * @category Array
 *
 * @param array ...$arrays The arrays to inspect.
 *
 * @return array the new array of combined values.
 *
 * @example
 * <code>
 * union([2], [1, 2])
 * // => [2, 1]
 * </code>
 */
function union(array ...$arrays): array
{
    return array_unique(array_merge(...$arrays));
}
