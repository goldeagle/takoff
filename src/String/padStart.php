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
 * Pads `string` on the left side if it's shorter than `length`. Padding
 * characters are truncated if they exceed `length`.
 *
 * @category String
 *
 * @param string $string ='' The string to pad.
 * @param int $length The padding length.
 * @param string $chars The string used as padding.
 *
 * @return string Returns the padded string.
 * @example
 * <code>
 * padStart('abc', 6)
 * // => '   abc'
 *
 * padStart('abc', 6, '_-')
 * // => '_-_abc'
 *
 * padStart('abc', 2)
 * // => 'abc'
 * </code>s
 */
function padStart(string $string, int $length, string $chars = ' '): string
{
    return \str_pad($string, $length, $chars, \STR_PAD_LEFT);
}
