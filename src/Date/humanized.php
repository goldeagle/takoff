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
 * @param string $date_time 时间点
 * @param string $lang 显示的语言
 * @return string
 */
function humanized(string $date_time, $lang = 'zh'): string
{
	/** @var $exp 多语言人性化表达字符 **/
	$exps = [
		'zh' => [
			'years' => '年前',
			'months' => '个月前',
			'days' => '天前',
			'hours' => '个小时前',
			'minutes' => '分钟前',
			'seconds' => '秒前',
			'now' => '刚刚'
		],
		'zh' => [
			'years' => 'years ago',
			'months' => 'montths ago',
			'days' => 'days ago',
			'hours' => 'hours ago',
			'minutes' => 'minutes ago',
			'seconds' => 'seconds ago',
			'now' => 'now'
		]
	];
	
	$exp = !empty($exps[$lang]) ? $exps[$lang] : $exps['zh'];
	
    $date_time1 = new \DateTime($date_time);
    $date_time2 = new \DateTime("now");
    $interval = $date_time2->diff($date_time1);

    $years = $interval->format("%y");
    $months = $interval->format("%m");
    $days = $interval->format("%d");
    $hours = $interval->format("%h");
    $minutes = $interval->format("%i");
    $seconds = $interval->format("%s");

    if ($years > 0) return $years . $exp['years'];
    if ($months > 0) return $months . $exp['months'];
    if ($days > 0) return $days . $exp['days'];
    if ($hours > 0) return $hours . $exp['hours'];
    if ($minutes > 0) return $minutes . $exp['minutes'];
    if ($seconds > 0) return $seconds . $exp['seconds'];
    return $exp['now'];
}
