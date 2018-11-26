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
 * Creates a duplicate-free version of an array, using
 * [`SameValueZero`](http://ecma-international.org/ecma-262/7.0/#sec-samevaluezero)
 * for equality comparisons, in which only the first occurrence of each element
 * is kept. The order of result values is determined by the order they occur
 * in the array.
 *
 * @category Array
 *
 * @param array $array The array to inspect.
 *
 * @return array the new duplicate free array.
 * @example
 * <code>
 * uniq([2, 1, 2])
 * // => [2, 1]s
 * </code>
 */
function uniq(array $array = []): array
{
    return \array_unique($array);
}
