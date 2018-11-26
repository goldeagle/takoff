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
 * Removes leading and trailing whitespace or specified characters from `string`.
 *
 * @category String
 *
 * @param string $string The string to trim.
 * @param string $chars The characters to trim.
 *
 * @return string Returns the trimmed string.
 * @example
 * <code>
 * trim('  abc  ')
 * // => 'abc'
 *
 * trim('-_-abc-_-', '_-')
 * // => 'abc'
 * </code>
 */
function trim(string $string, string $chars = ' '): string
{
    return \trim($string, $chars);
}
