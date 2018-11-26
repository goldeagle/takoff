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
 * Gets all but the first element of `array`.
 *
 * @category Array
 *
 * @param array $array The array to query.
 *
 * @return array the slice of `array`.
 *
 * @example
 * <code>
 * tail([1, 2, 3])
 * // => [2, 3]
 * </code>
 */
function tail(array $array): array
{
    array_shift($array);

    return $array;
}
