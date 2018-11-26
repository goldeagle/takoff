<?php

declare(strict_types=1);

/*
 * This file is part of the goldeagle/takoff project.
 *
 * @author  goldeagle <1308362@gmail.com>
 *
 */

namespace _;

use function _\internal\baseRest;

/**
 * Creates an array of grouped elements, the first of which contains the
 * first elements of the given arrays, the second of which contains the
 * second elements of the given arrays, and so on.
 *
 * @category Array
 *
 * @param array ...$arrays The arrays to process.
 *
 * @return array the new array of grouped elements.
 * @example
 * <code>
 * zip(['a', 'b'], [1, 2], [true, false])
 * // => [['a', 1, true], ['b', 2, false]]
 * </code>
 */
function zip(array ...$arrays): array
{
    return baseRest('\_\unzip')($arrays);
}
