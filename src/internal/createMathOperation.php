<?php

declare(strict_types=1);

/*
 * This file is part of the goldeagle/takoff project.
 *
 * @author  goldeagle <1308362@gmail.com>
 * @copyright  Copyright (c) 2018
 */

namespace _\internal;

function createMathOperation(callable $operator, $defaultValue)
{
    return function ($value, $other) use ($defaultValue, $operator) {
        if (null === $value && null === $other) {
            return $defaultValue;
        }

        $result = null;

        if (null !== $value) {
            $result = $value;
        }

        if (null !== $other) {
            if (null === $result) {
                return $other;
            }

            $result = $operator($value, $other);
        }

        return $result;
    };
}
