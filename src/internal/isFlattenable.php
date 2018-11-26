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
 * Checks if `value` is a flattenable `arguments` object or array.
 *
 * @private
 *
 * @param mixed $value The value to check.
 *
 * @return boolean Returns `true` if `value` is flattenable, else `false`.
 */
function isFlattenable($value): bool
{
    return \is_array($value) && \range(0, \count($value) - 1) === \array_keys($value);
}
