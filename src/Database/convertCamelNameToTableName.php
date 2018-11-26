<?php
declare(strict_types=1);

/*
 * This file is a part of goldeagle/takoff project.
 *
 * @author goldeagle <1308362@gmail.com>
 */

namespace _;

/**
 * 将模型的驼峰式命名方式转换为数据表的下划线命名方式
 *
 * @param string $name
 * @param string $table_prefix
 * @return string
 */
function convertCamelNameToTableName(string $name, string $table_prefix = ''): string
{
    $s = $table_prefix == '' ? camelToDash($name) : $table_prefix . '_' . camelToDash($name);

    return $s;
}
