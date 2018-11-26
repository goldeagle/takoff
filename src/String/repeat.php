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
 * Repeats the given string `n` times.
 *
 * @category String
 *
 * @param string $string The string to repeat.
 * @param    int $n The number of times to repeat the string.
 *
 * @return string Returns the repeated string.
 *
 * @example
 * <code>
 * repeat('*', 3)
 * // => '***'
 *
 * repeat('abc', 2)
 * // => 'abcabc'
 *
 * repeat('abc', 0)
 * // => ''
 * </code>
 */
function repeat(string $string, int $n = 1): string
{
    return \str_repeat($string, $n);
}
