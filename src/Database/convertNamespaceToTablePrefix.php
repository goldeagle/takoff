<?php
declare(strict_types=1);

/*
 * This file is a part of goldeagle/takoff project.
 *
 * @author goldeagle <1308362@gmail.com>
 */

namespace _;

/**
 * 将 namespace 转换成表名前缀
 * 如果以 '\' 开头，则去除 '\'，并取第一部分（应用名称）作为前缀
 * @param string $namespace
 * @return string
 */
function convertNamespaceToTablePrefix(string $namespace): string
{
    if (!preg_match('/^\S/', $namespace)) $namespace = substr($namespace, 1);
    $list = explode('\\', $namespace);

    return $list[0];
}
