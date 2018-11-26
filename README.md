# TakOff

TakOff 是一个fork自 lodash-php 的工具包，尽量向 lodash (lodash.com) 学习，并参照模仿 lodash.js 的功能。此外还增加了一些针对中文区域特有的功能。

# 安装

直接使用 composer 安装即可：

```bash
$ composer require goldeagle/takoff
```

# 使用方法

例：可以独立引用 camelToDash 方法，并使用在代码中：

```php
<?php

use function _\camelToDash;

echo camelToDash('HelloWorld');
```

也可以使用全局对象“_”来静态调用方法

```php
<?php

echo _::camelToDash('HelloWorld');
```

也可以使用

```php
<?php

echo _\camelToDash('HelloWorld');
```

# 方法列表
- [Array](doc/Array.md)
- [Collection](doc/Collection.md)
- [Database](doc/Database.md)
- [Date](doc/Date.md)
- [Function](doc/Function.md)
- [Lang](doc/Lang.md)
- [Math](doc/Math.md)
- [Net](doc/Net.md)
- [Number](doc/Number.md)
- [Object](doc/Object.md)
- [Seq](doc/Seq.md)
- [String](doc/String.md)
- [Util](doc/Util.md)