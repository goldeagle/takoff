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
 * Converts `string` to
 * [start case](https://en.wikipedia.org/wiki/Letter_case#Stylistic_or_specialised_usage).
 *
 * @category String
 *
 * @param string $string The string to convert.
 *
 * @return string Returns the start cased string.
 * @example
 * <code>
 * startCase('--foo-bar--')
 * // => 'Foo Bar'
 *
 * startCase('fooBar')
 * // => 'Foo Bar'
 *
 * startCase('__FOO_BAR__')
 * // => 'FOO BAR'
 * </code>
 */
function startCase(string $string)
{
    return \implode(' ', \array_map('\ucfirst', words(\preg_replace("/['\x{2019}]/u", '', $string))));
}
