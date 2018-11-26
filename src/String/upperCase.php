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
 * Converts `string`, as space separated words, to upper case.
 *
 * @category String
 * @param string $string The string to convert.
 * @return string Returns the upper cased string.s
 * @example
 * <code>
 * upperCase('--foo-bar')
 * // => 'FOO BAR'
 *
 * upperCase('fooBar')
 * // => 'FOO BAR'
 *
 * upperCase('__foo_bar__')
 * // => 'FOO BAR'
 * </code>
 */
function upperCase(string $string)
{
    return \implode(' ', \array_map('\strtoupper', words(\preg_replace(reQuotes, '', $string))));
}
