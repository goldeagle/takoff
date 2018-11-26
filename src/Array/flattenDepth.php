<?php

declare(strict_types=1);

/*
 * This file is part of the goldeagle/takoff project.
 *
 * @author  goldeagle <1308362@gmail.com>
 *
 */

namespace _;

use function _\internal\baseFlatten;

/**
 * Recursively flatten `array` up to `depth` times.
 *
 * @category Array
 *
 * @param array $array The array to flatten.
 * @param int $depth The maximum recursion depth.
 *
 * @return array the new flattened array.
 * @example
 * <code>
 * $array = [1, [2, [3, [4]], 5]]
 *
 * flattenDepth($array, 1)
 * // => [1, 2, [3, [4]], 5]
 *
 * flattenDepth($array, 2)
 * // => [1, 2, 3, [4], 5]
 * </code>
 */
function flattenDepth(array $array, int $depth = 1): array
{
    return baseFlatten($array, $depth);
}
