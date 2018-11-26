# TakOff

TakOff 是一个fork自 lodash-php 的工具包，尽量向 lodash (lodash.com) 学习，并参照模仿 lodash.js 的功能。此外还增加了一些针对中文区域特有的功能。

# 安装

直接使用 composer 安装即可：

```bash
$ composer require goldeagle/takoff
```

# 使用方法

可以独立引用 camelToDash 方法，并使用在代码中：

```php
<?php

use function _\camelToDash;

echo camelToDash('HelloWorld');
```

也可以使用全局对象“_”来静态调用方法：

```php
<?php

echo _::camelToDash('HelloWorld');
```

还可以直接使用命名空间来引用方法：

```php
<?php

echo _\camelToDash('HelloWorld');
```

# 文档列表
- [数组 Array](doc/Array.md)
- [集合 Collection](doc/Collection.md)
- [数据库 Database](doc/Database.md)
- [日期 Date](doc/Date.md)
- [函数 Function](doc/Function.md)
- [语言扩展 Lang](doc/Lang.md)
- [数学 Math](doc/Math.md)
- [网络 Net](doc/Net.md)
- [数字 Number](doc/Number.md)
- [对象操作 Object](doc/Object.md)
- [序列 Seq](doc/Seq.md)
- [字符串 String](doc/String.md)
- [工具 Util](doc/Util.md)

# 感谢
- [lodash](https://lodash.com)
- [lodash-php](https://github.com/lodash-php/lodash-php)