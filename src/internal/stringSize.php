<?php

declare(strict_types=1);

/*
 * This file is part of the goldeagle/takoff project.
 *
 * @author  goldeagle <1308362@gmail.com>
 * 
 */

namespace _\internal;

/**
 * Gets the number of symbols in `string`.
 *
 * @private
 *
 * @param string $string The string to inspect.
 *
 * @return int Returns the string size.
 */
function stringSize(string $string): int
{
    return hasUnicode($string) ? unicodeSize($string) : \strlen($string);
}
