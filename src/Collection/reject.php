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

/**
 * The opposite of `filter` this method returns the elements of `collection`
 * that `predicate` does **not** return truthy for.
 *
 * @category Collection
 *
 * @param iterable $collection The collection to iterate over.
 * @param callable $predicate The function invoked per iteration.
 *
 * @return array the new filtered array.
 *
 * @example
 * <code>
 * $users = [
 *   ['user' => 'barney', 'active' => true],
 *   ['user' => 'fred',   'active' => false]
 * ]
 *
 * reject($users, 'active')
 * // => objects for ['fred']
 * </code>
 */
function reject(iterable $collection, $predicate = null): array
{
    return filter($collection, negate(baseIteratee($predicate)));
}
