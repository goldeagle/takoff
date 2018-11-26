<?php
declare(strict_types=1);

/*
 * This file is a part of goldeagle/takoff project.
 *
 * @author goldeagle <1308362@gmail.com>
 */

namespace _;

/**
 * 将类的下划线命名方式转换为驼峰式命名方式
 * @param string $name
 * @return string
 */
function dashToCamel(string $name): string
{
    $s = '';
    $names = explode('_', $name);
    foreach ($names as $n) {
        $s .= ucfirst($n);
    }
    return $s;
}
