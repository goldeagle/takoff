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
 * Casts `array` to a slice if it's needed.
 *
 * @private
 *
 * @param array $array The array to inspect.
 * @param int $start The start position.
 * @param int $end The end position.
 *
 * @return array Returns the cast slice.
 */
function castSlice(array $array, int $start, ?int $end = null): array
{
    $length = \count($array);
    $end = null === $end ? $length : $end;

    return (!$start && $end >= $length) ? $array : \array_slice($array, $start, $end);
}
