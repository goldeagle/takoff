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
 * Flattens `array` a single level deep.
 *
 * @category Array
 *
 * @param array $array The array to flatten.
 *
 * @return array the new flattened array.
 * @example
 *
 * flatten([1, [2, [3, [4]], 5]])
 * // => [1, 2, [3, [4]], 5]
 */
function flatten(array $array = null): array
{
    return baseFlatten($array, 1);
}
