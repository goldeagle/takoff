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
 * Gets the size of a Unicode `string`.
 *
 * @private
 *
 * @param string $string The string inspect.
 *
 * @return int Returns the string size.
 */
function unicodeSize(string $string): int
{
    return \preg_match_all(reUnicode, $string) ?: 0;
}
