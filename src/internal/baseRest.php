<?php

declare(strict_types=1);

/*
 * This file is part of the goldeagle/takoff project.
 *
 * @author  goldeagle <1308362@gmail.com>
 * @copyright  Copyright (c) 2018
 */

namespace _\internal;

function baseRest(callable $func, $start = null): callable
{
    return overRest($func, $start, '\_\identity');
}
