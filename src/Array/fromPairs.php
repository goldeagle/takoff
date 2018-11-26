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
 * The inverse of `toPairs`, this method returns an object composed
 * from key-value `pairs`.
 *
 * @category Array
 *
 * @param array $pairs The key-value pairs.
 *
 * @return \stdClass the new object.
 *
 * @example
 * <code>
 * fromPairs([['a', 1], ['b', 2]])
 * // => stdClass(
 * // 'a' => 1,
 * //'b' => 2,
 * // )
 * </code>
 */
function fromPairs(array $pairs): \stdClass
{
    if (!\count($pairs)) {
        return new \stdClass();
    }

    $result = new \stdClass();

    foreach ($pairs as $pair) {
        $result->{$pair[0]} = $pair[1];
    }

    return $result;
}
