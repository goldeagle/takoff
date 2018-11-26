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
 * Splits `string` by `separator`.
 *
 * **Note:** This method is based on
 * [`String#split`](https://mdn.io/String/split).
 *
 * @category String
 *
 * @param string $string The string to split.
 * @param string $separator The separator pattern to split by.
 * @param int $limit The length to truncate results to.
 *
 * @return array Returns the string segments.
 * @example
 * <code>
 * split('a-b-c', '-', 2)
 * // => ['a', 'b']
 * </code>
 */
function split(string $string, string $separator, int $limit = 0): array
{
    if (\preg_match(reRegExpChar, $separator)) {
        return \preg_split($separator, $string, $limit ?? -1, PREG_SPLIT_DELIM_CAPTURE) ?: [];
    }

    /** @var array $result */
    $result = \explode($separator, $string);

    if ($limit > 0) {
        return \array_splice($result, 0, $limit);
    }

    return $result;
}
