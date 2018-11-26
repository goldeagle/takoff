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
 * Converts the first character of `string` to lower case.
 *
 * @category String
 *
 * @param string $string The string to convert.
 *
 * @return string Returns the converted string.
 * @example
 * <code>
 * lowerFirst('Fred')
 * // => 'fred'
 *
 * lowerFirst('FRED')
 * // => 'fRED'
 * </code>
 */

function lowerFirst(string $string): string
{
    return \lcfirst($string);
}
