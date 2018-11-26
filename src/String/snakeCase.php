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
 * [snake case](https://en.wikipedia.org/wiki/Snake_case).
 *
 * @category String
 * @param string $string The string to convert.
 * @return string Returns the snake cased string.
 * @example
 *
 * snakeCase('Foo Bar')
 * // => 'foo_bar'
 *
 * snakeCase('fooBar')
 * // => 'foo_bar'
 *
 * snakeCase('--FOO-BAR--')
 * // => 'foo_bar'
 */
function snakeCase(string $string): string
{
    return \implode('_', \array_map('\strtolower', words(\preg_replace("/['\x{2019}]/u", '', $string))));
}
