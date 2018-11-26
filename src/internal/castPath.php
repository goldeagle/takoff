<?php

declare(strict_types=1);

/*
 * This file is part of the goldeagle/takoff project.
 *
 * @author  goldeagle <1308362@gmail.com>
 * @copyright  Copyright (c) 2018
 */

namespace _\internal;

function castPath($value, $object): array
{
    if (\is_array($value)) {
        return $value;
    }

    return isKey($value, $object) ? [$value] : stringToPath((string)$value);
}
