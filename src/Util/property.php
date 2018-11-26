<?php

declare(strict_types=1);

/*
 * This file is part of the goldeagle/takoff project.
 *
 * @author  goldeagle <1308362@gmail.com>
 * 
 */

namespace _;

use Symfony\Component\PropertyAccess\PropertyAccess;

/**
 * Creates a function that returns the value at `path` of a given object.
 *
 * @category Util
 *
 * @param array|string $path The path of the property to get.
 *
 * @return callable Returns the new accessor function.
 * @example
 * <code>
 * $objects = [
 *   [ 'a' => [ 'b' => 2 ] ],
 *   [ 'a' => [ 'b' => 1 ] ]
 * ];
 *
 * map($objects, property('a.b'));
 * // => [2, 1]
 *
 * map(sortBy($objects, property(['a', 'b'])), 'a.b');
 * // => [1, 2]
 * </code>
 */
function property($path): callable
{
    $propertyAccess = PropertyAccess::createPropertyAccessorBuilder()
        ->disableExceptionOnInvalidIndex()
        ->getPropertyAccessor();

    return function ($value, $index = 0, $collection = []) use ($path, $propertyAccess) {
        $path = \implode('.', (array)$path);

        if (\is_array($value)) {
            if (false !== \strpos($path, '.')) {
                $paths = \explode('.', $path);

                foreach ($paths as $path) {
                    $value = property($path)($value, $index, $collection);
                }

                return $value;
            }

            if (\is_string($path) && $path[0] !== '[' && $path[-1] !== ']') {
                $path = "[$path]";
            }
        }

        return $propertyAccess->getValue($value, $path);
    };
}
