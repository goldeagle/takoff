<?php

declare(strict_types=1);

/*
 * This file is part of the goldeagle/takoff project.
 *
 * @author  goldeagle <1308362@gmail.com>
 * 
 */

namespace _;

const reQuotes = "/['\x{2019}]/u";

/**
 * Converts `string`, as space separated words, to lower case.
 *
 * @category String
 *
 * @param string $string The string to convert.
 *
 * @return string Returns the lower cased string.
 * @example
 * <code>
 * lowerCase('--Foo-Bar--')
 * // => 'foo bar'
 *
 * lowerCase('fooBar')
 * // => 'foo bar'
 *
 * lowerCase('__FOO_BAR__')
 * // => 'foo bar'
 * </code>
 */
function lowerCase(string $string)
{
    return \implode(' ', \array_map('\strtolower', words(\preg_replace(reQuotes, '', $string))));
}
