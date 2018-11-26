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
 * Gets all but the last element of `array`.
 *
 * @category Array
 *
 * @param array $array The array to query.
 *
 * @return array the slice of `array`.
 * @example
 *
 * initial([1, 2, 3])
 * // => [1, 2]
 */
function initial(array $array): array
{
    \array_pop($array);
    return $array;
}
