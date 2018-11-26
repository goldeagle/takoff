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
 * Converts `string`, as a whole, to lower case
 *
 * @category String
 *
 * @param string $string The string to convert.
 *
 * @return string Returns the lower cased string.
 * @example
 * <code>
 * toLower('--Foo-Bar--')
 * // => '--foo-bar--'
 *
 * toLower('fooBar')
 * // => 'foobar'
 *
 * toLower('__FOO_BAR__')
 * // => '__foo_bar__'
 * </code>
 */
function toLower(string $string): string
{
    return \strtolower($string);
}
