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
 * This method returns the first argument it receives.
 *
 * @category Util
 *
 * @param mixed $value Any value.
 *
 * @return mixed Returns `value`.
 * @example
 * <code>
 * $object = ['a' => 1];
 *
 * identity($object) === $object;
 * // => true
 * </code>
 */
function identity($value = null)
{
    return $value;
}
