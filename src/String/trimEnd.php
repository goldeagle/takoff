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
 * Removes trailing whitespace or specified characters from `string`.
 *
 * @category String
 *
 * @param string $string The string to trim.
 * @param string $chars The characters to trim.
 *
 * @return string Returns the trimmed string.
 * @example
 *
 * trimEnd('  abc  ')
 * // => '  abc'
 *
 * trimEnd('-_-abc-_-', '_-')
 * // => '-_-abc'
 */
function trimEnd(string $string, string $chars = ' '): string
{
    return \rtrim($string, $chars);
}
