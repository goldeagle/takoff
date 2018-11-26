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
 * Gets the timestamp of the number of milliseconds that have elapsed since the Unix epoch (1 January 1970 00:00:00 UTC).
 *
 * @return int Returns the timestamp.
 *
 * @category Date
 *
 * @example
 * <code>
 * now();
 * // => 1511180325735
 * </code>
 */
function now(): int
{
    return (int)(\microtime(true) * 1000);
}
