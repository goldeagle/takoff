<?php
declare(strict_types=1);

/*
 * This file is a part of goldeagle/takoff project.
 *
 * @author goldeagle <1308362@gmail.com>
 */

namespace _;

/**
 * 将数据表的下划线命名方式转换为模型的驼峰式命名方式
 * @param string $name
 * @param string $table_prefix
 * @return string
 */
function convertTableNameToCamelName(string $name, string $table_prefix = ''): string
{
    $name = str_replace($table_prefix, '', $name);
    return dashToCamel($name);
}
