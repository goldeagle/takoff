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
 * Creates an array with all falsey values removed. The values `false`, `null`,
 * `0`, `""`, `undefined`, and `NaN` are falsey.
 *
 * @since    0.1.0
 * @category Array
 *
 * @param array $array The array to compact.
 *
 * @return array Returns the new array of filtered values.
 * @example
 * <code>
 * compact([0, 1, false, 2, '', 3])
 * // => [1, 2, 3]
 * </code>
 */
function compact(?array $array): array
{
    return \array_values(\array_filter($array ?? []));
}
