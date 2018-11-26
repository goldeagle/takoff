<?php
declare(strict_types=1);

/*
 * This file is a part of goldeagle/takoff project.
 *
 * @author goldeagle <1308362@gmail.com>
 */

namespace _;

/**
 * 将类的驼峰式命名方式转换为下划线命名方式
 *
 * @param string $name
 * @return string
 */
function camelToDash(string $name): string
{
    $s = '';
    $array = [];
    for ($i = 0; $i < strlen($name); $i++) {
        if ($name[$i] == strtolower($name[$i])) {
            $array[] = $name[$i];
        } else {
            if ($i > 0) {
                $array[] = '_';
            }
            $array[] = strtolower($name[$i]);
        }
    }

    $s .= implode('', $array);

    return $s;
}
