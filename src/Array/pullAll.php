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
 * This method is like `pull` except that it accepts an array of values to remove.
 *
 * **Note:** Unlike `difference`, this method mutates `array`.
 *
 * @category Array
 *
 * @param array $array The array to modify.
 * @param array $values The values to remove.
 *
 * @return array `array`.
 * @example
 * <code>
 * $array = ['a', 'b', 'c', 'a', 'b', 'c']
 *
 * pullAll($array, ['a', 'c'])
 * var_dump($array)
 * // => ['b', 'b']
 * </code>
 */
function pullAll(array &$array, array $values): array
{
    return pull($array, ...$values);
}
