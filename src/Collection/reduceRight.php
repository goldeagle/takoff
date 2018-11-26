<?php

declare(strict_types=1);

/*
 * This file is part of the goldeagle/takoff project.
 *
 * @author  goldeagle <1308362@gmail.com>
 * 
 */

namespace _;

use function _\internal\baseIteratee;
use function _\internal\baseReduce;

/**
 * This method is like `reduce` except that it iterates over elements of
 * `collection` from right to left.
 *
 * @category Collection
 *
 * @param iterable $collection The collection to iterate over.
 * @param mixed $iteratee The function invoked per iteration.
 * @param mixed $accumulator The initial value.
 *
 * @return mixed Returns the accumulated value.
 *
 * @example
 * <code>
 * $array = [[0, 1], [2, 3], [4, 5]];
 *
 * reduceRight(array, (flattened, other) => flattened.concat(other), [])
 * // => [4, 5, 2, 3, 0, 1]
 */
function reduceRight(iterable $collection, $iteratee, $accumulator = null)
{
    return baseReduce(\array_reverse($collection instanceof \Traversable ? \iterator_to_array($collection, true) : $collection, true), baseIteratee($iteratee), $accumulator, null === $accumulator);
}
