<?php
declare(strict_types=1);

/*
 * This file is a part of goldeagle/takoff project.
 *
 * @author goldeagle <1308362@gmail.com>
 */

namespace _;

/**
 * 请求
 * @category Net
 * @param string $url request url
 * @param array|string $data request parameters
 * @param array $header request headers
 * @param bool $ipv4_only if use ipv4 only for speed
 * @return mixed
 */
function curl($url, $data, $header = [], bool $ipv4_only = true)
{
    $headers = [
        'Content-Type: application/json; charset=utf-8',
        'Content-Length: ' . strlen(is_array($data)?implode('', $data):$data)
    ];
    $header && $headers = array_merge($header, $headers); $curl = curl_init();

    //设置提交的url
    curl_setopt($curl, CURLOPT_URL, $url);
    //设置头文件的信息作为数据流输出
    curl_setopt($curl, CURLOPT_HEADER, 0);
    //设置获取的信息以文件流的形式返回。而不是直接输出。
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    //设置curl默认访问为IPv4
    curl_setopt($curl, CURLOPT_IPRESOLVE, $ipv4_only);
    //设置post方式提交
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    //设置post数据
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    //运行命令
    $data = curl_exec($curl);
    //关闭URL请求
    curl_close($curl);
    //获得数据并返回
    return $data;
}

