<?php

declare(strict_types=1);

/*
 * This file is part of the goldeagle/takoff project.
 *
 * @author  goldeagle <1308362@gmail.com>
 * 
 */

namespace _\internal;

use function _\indexOf;

function arrayIncludes(?array $array, $value)
{
    return null !== $array && indexOf($array, $value, 0) > -1;
}
