## Date

### isValidZhDateFormat

判断一个字符串是否是合法的中式时间格式，例如“2018年11月27日”。

**Arguments:**

@param string $date 时间字符串

**Return:**

@return bool 返回判断结果，是或者否

示例：
```php
<?php
	_\isValidZhDateFormat('2018年11月27日');
	// => true

```


### now

获得自 Unix 纪元时间 (1 January 1970 00:00:00 UTC) 起的毫秒数



**Arguments:**



**Return:**

@return int 返回 timestamp 时间戳记

Example:
```php
<?php
	_\now();
	// => 1511180325735

```

### replaceZhCharacters

将中文时间字符串中的中文文字替代成连接符，例如从“2018年11月27日”替换成“2018-11-27”

**Arguments:**

@param string $date_str 日期字符串

@param string $connector 字符串的连接符

**Return:**

@return string 生成的字符串

示例：
```php
<?php
	_\replaceZhCharacters('2018年11月27日');
	// => '2018-11-27'

```

### humanized

人性化表达时间点过去了多久

**Arguments:**

@param string $date_time 时间点字符串

**Return:**

@return string 生成的人性化表达的字符串

示例：
```php
<?php
	_\replaceZhCharacters('2018-11-26 00:00:00'); //假设当前时间为 2018-11-27 7:00:00
	// => '1天7个小时前'

	_\replaceZhCharacters('2018-11-27 01:00:00'); //假设当前时间为 2018-11-27 7:00:00
	// => '6个小时前'

	_\replaceZhCharacters('2018-11-26 00:00:00'); //假设当前时间为 2018-11-27 00:12:00
	// => '12分钟前'

```