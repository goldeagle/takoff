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
 * Converts a Unicode `string` to an array.
 *
 * @private
 *
 * @param string $string The string to convert.
 *
 * @return array Returns the converted array.
 */
function unicodeToArray(string $string): array
{
    if (\preg_match_all('#' . reUnicode . '#u', $string, $matches)) {
        return $matches[0];
    }

    return [];
}
