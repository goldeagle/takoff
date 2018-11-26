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
 * Converts `string`, as a whole, to upper case
 *
 * @category String
 *
 * @param string $string The string to convert.
 *
 * @return string Returns the upper cased string.
 * @example
 * <code>
 * toUpper('--foo-bar--')
 * // => '--FOO-BAR--'
 *
 * toUpper('fooBar')
 * // => 'FOOBAR'
 *
 * toUpper('__foo_bar__')
 * // => '__FOO_BAR__'
 */
function toUpper(string $string): string
{
    return \strtoupper($string);
}
