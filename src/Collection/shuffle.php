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
 * Creates an array of shuffled values
 *
 * @category Array
 *
 * @param array $array The array to shuffle.
 *
 * @return array the new shuffled array.
 * @example
 *
 * shuffle([1, 2, 3, 4])
 * // => [4, 1, 3, 2]
 */
function shuffle(array $array = []): array
{
    \shuffle($array);

    return $array;
}
