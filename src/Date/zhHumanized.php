<?php
declare(strict_types=1);

/*
 * This file is a part of goldeagle/takoff project.
 *
 * @author goldeagle <1308362@gmail.com>
 */

namespace _;

/**
 * 人性化显示发生在过去的时间点
 * @param string $date_time
 * @return string
 */
function humanized(string $date_time): string
{
    $date_time1 = new \DateTime($date_time);
    $date_time2 = new \DateTime("now");
    $interval = $date_time2->diff($date_time1);

    $years = $interval->format("%y");
    $months = $interval->format("%m");
    $days = $interval->format("%d");
    $hours = $interval->format("%h");
    $minutes = $interval->format("%i");
    $seconds = $interval->format("%s");

    if ($years > 0) return $years . '年前';
    if ($months > 0) return $months . '个月前';
    if ($days > 0) return $days . '天前';
    if ($hours > 0) return $hours . '个小时前';
    if ($minutes > 0) return $minutes . '分钟前';
    if ($seconds > 0) return $seconds . '秒前';
    return '';
}
