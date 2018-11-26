<?php

declare(strict_types=1);

namespace _\internal;

/*
 * This file is part of the goldeagle/takoff project.
 *
 * @author  goldeagle <1308362@gmail.com>
 * @copyright  Copyright (c) 2018
 */

function baseUniq(array $array, callable $iteratee = null, callable $comparator = null)
{
    $index = -1;
    $includes = '\_\internal\arrayIncludes';
    $length = \count($array);
    $isCommon = true;
    $result = [];
    $seen = $result;

    if ($comparator) {
        $isCommon = false;
        $includes = '\_\internal\arrayIncludesWith';
    } else {
        $seen = $iteratee ? [] : $result;
    }

    while (++$index < $length) {
        $value = $array[$index];
        $computed = $iteratee ? $iteratee($value) : $value;

        $value = ($comparator || $value !== 0) ? $value : 0;

        if ($isCommon && $computed) {
            $seenIndex = \count($seen);
            while ($seenIndex--) {
                if ($seen[$seenIndex] === $computed) {
                    continue 2;
                }
            }
            if ($iteratee) {
                $seen[] = $computed;
            }

            $result[] = $value;
        } elseif (!$includes($result, $computed, $comparator)) {
            if ($seen !== $result) {
                $seen[] = $computed;
            }
            $result[] = $value;
        }
    }

    return $result;
}
