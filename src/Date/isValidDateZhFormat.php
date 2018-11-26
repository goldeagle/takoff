<?php
declare(strict_types=1);

/*
 * This file is a part of goldeagle/takoff project.
 *
 * @author goldeagle <1308362@gmail.com>
 */

namespace _;

/**
 * 校验日期格式是否合法
 * @param string $date
 * @return bool
 */
function isValidZhDateFormat($date): bool
{
    $date = replaceZhCharacters($date, '-');
    return preg_match('/^[0-9]{2,4}\-[0-9]{1,2}\-[0-9]{1,2}\-?$/', $date) !== false;
}
