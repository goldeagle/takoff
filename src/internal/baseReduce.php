<?php

declare(strict_types=1);

/*
 * This file is part of the goldeagle/takoff project.
 *
 * @author  goldeagle <1308362@gmail.com>
 * @copyright  Copyright (c) 2018
 */

namespace _\internal;

function baseReduce(iterable $array, $iteratee, $accumulator, $initAccum = null)
{
    $length = \is_array($array) || $array instanceof \Countable ? \count($array) : 0;

    if ($initAccum && $length) {
        $accumulator = \current($array);
    }

    foreach ($array as $key => $value) {
        $accumulator = $iteratee($accumulator, $value, $key, $array);
    }

    return $accumulator;
}
