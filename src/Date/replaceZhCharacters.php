<?php
declare(strict_types=1);

/*
 * This file is a part of goldeagle/takoff project.
 *
 * @author goldeagle <1308362@gmail.com>
 */

namespace _;

/**
 * 将中文时间字符串中的中文文字替代成连接符
 * @param string $date_str
 * @param string  $connector
 * @return string
 */
function replaceZhCharacters($date_str, $connector): string
{
    $zh_characters = ['年', '月', '日', '点', '分', '秒'];

    foreach ($zh_characters as $char) {
        $date_str = str_replace($char, $connector, $date_str);
    }

    return $date_str;
}
