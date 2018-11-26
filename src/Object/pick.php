<?php

declare(strict_types=1);

/*
 * This file is part of the goldeagle/takoff project.
 *
 * @author  goldeagle <1308362@gmail.com>
 * @copyright  Copyright (c) 2018
 */

namespace _;

use function _\internal\basePick;
use function _\internal\flatRest;

/**
 * Creates an object composed of the picked `object` properties.
 *
 * @category Object
 *
 * @param object $object The source object.
 * @param string|string[] $paths The property paths to pick.
 *
 * @return \stdClass Returns the new object.
 * @example
 *
 * $object = (object) ['a' => 1, 'b' => '2', 'c' => 3];
 *
 * pick($object, ['a', 'c']);
 * // => (object) ['a' => 1, 'c' => 3]
 */
function pick($object, $paths): \stdClass
{
    return flatRest(function ($object, ...$paths) {
        return basePick($object, $paths);
    })($object, $paths);
}
