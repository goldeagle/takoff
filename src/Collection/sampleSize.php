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
 * Gets `n` random elements at unique keys from `array` up to the
 * size of `array`.
 *
 * @category Array
 *
 * @param array $array The array to sample.
 * @param int $n The number of elements to sample.
 *
 * @return array the random elements.
 * @example
 *
 * sampleSize([1, 2, 3], 2)
 * // => [3, 1]
 *
 * sampleSize([1, 2, 3], 4)
 * // => [2, 3, 1]
 */
function sampleSize(array $array, int $n = 1): array
{
    $result = [];
    $count = \count($array);

    foreach ((array)\array_rand($array, $n > $count ? $count : $n) as $index) {
        $result[] = $array[$index];
    }

    return $result;
}
