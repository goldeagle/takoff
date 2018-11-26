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
 * The inverse of `escape`this method converts the HTML entities
 * `&amp;`, `&lt;`, `&gt;`, `&quot;` and `&#39;` in `string` to
 * their corresponding characters.
 *
 * @category String
 *
 * @param string $string The string to unescape.
 *
 * @return string Returns the unescaped string.
 * @example
 * <code>
 * unescape('fred, barney, &amp; pebbles')
 * // => 'fred, barney, & pebbles'
 * </code>
 */
function unescape(string $string): string
{
    return \html_entity_decode($string);
}
