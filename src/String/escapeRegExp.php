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
 * Used to match `RegExp`
 * [syntax characters](http://ecma-international.org/ecma-262/7.0/#sec-patterns).
 */
const reRegExpChar = '/([\\^$.*+?()[\]{}|])/';

/**
 * Escapes the `RegExp` special characters "^", "$", "\", ".", "*", "+",
 * "?", "(", ")", "[", "]", "{", "}", and "|" in `string`.
 *
 * @category String
 *
 * @param string $string The string to escape.
 *
 * @return string Returns the escaped string.
 * @example
 * <code>
 * escapeRegExp('[lodash](https://lodash.com/)')
 * // => '\[lodash\]\(https://lodash\.com/\)'
 * </code>
 */
function escapeRegExp(string $string): string
{
    return \preg_replace(reRegExpChar, '\\\$0', $string);
}
