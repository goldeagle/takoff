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
 * Removes leading whitespace or specified characters from `string`.
 *
 * @param string $string The string to trim.
 * @param string $chars The characters to trim.
 *
 * @category String
 *
 * @return string Returns the trimmed string.
 * @example
 * <code>
 * trimStart('  abc  ')
 * // => 'abc  '
 *
 * trimStart('-_-abc-_-', '_-')
 * // => 'abc-_-'
 * </code>
 */
function trimStart(string $string, string $chars = ' '): string
{
    return \ltrim($string, $chars);
}
