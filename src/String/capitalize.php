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
 * Converts the first character of `string` to upper case and the remaining
 * to lower case.
 *
 * @category String
 *
 * @param string $string The string to capitalize.
 *
 * @return string Returns the capitalized string.
 * @example
 * <code>
 * capitalize('FRED')
 * // => 'Fred'
 * </code>
 */

function capitalize(string $string): string
{
    return \ucfirst(\mb_strtolower($string));
}
