<?php

declare(strict_types=1);

/*
 * This file is part of the goldeagle/takoff project.
 *
 * @author  goldeagle <1308362@gmail.com>
 *
 */

namespace _\internal;

/** Used to detect strings with [zero-width joiners or code points from the astral planes](http://eev.ee/blog/2015/09/12/dark-corners-of-unicode/). */
const reHasUnicode = '[' . rsZWJ . rsAstralRange . rsComboRange . rsVarRange . ']';

/**
 * Checks if `string` contains Unicode symbols.
 *
 * @private
 *
 * @param string $string The string to inspect.
 *
 * @return boolean Returns `true` if a symbol is found, else `false`.
 */
function hasUnicode(string $string): bool
{
    return \preg_match('#' . reHasUnicode . '#u', $string) > 0;
}
