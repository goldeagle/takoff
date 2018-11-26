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
 * Converts `string` to an array.
 *
 * @private
 *
 * @param string $string The string to convert.
 *
 * @return array Returns the converted array.
 */
function stringToArray(string $string): array
{
    return hasUnicode($string) ? unicodeToArray($string) : \str_split($string);
}
