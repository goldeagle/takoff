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
 * Gets the last element of `array`.
 *
 * @category Array
 *
 * @param array $array The array to query.
 *
 * @return mixed Returns the last element of `array`.
 * @example
 * <code>
 * last([1, 2, 3])
 * // => 3
 * </code>
 */
function last(array $array)
{
    return \end($array) ?: null;
}
