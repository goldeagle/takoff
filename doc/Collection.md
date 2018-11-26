## Collection

### countBy

Creates an array composed of keys generated from the results of running
each element of `collection` through `iteratee`. The corresponding value of
each key is the number of times the key was returned by `iteratee`. The
iteratee is invoked with one argument: (value).



**Arguments:**

@param iterable $collection The collection to iterate over.

@param callable $iteratee The iteratee to transform keys.



**Return:**

@return array Returns the composed aggregate object.

Example:
```php
<?php
 use function _\countBy;

countBy([6.1, 4.2, 6.3], 'floor');
// => ['6' => 2, '4' => 1]

// The `property` iteratee shorthand.
countBy(['one', 'two', 'three'], 'strlen');
// => ['3' => 2, '5' => 1]

```
### each

Iterates over elements of `collection` and invokes `iteratee` for each element.

The iteratee is invoked with three arguments: (value, index|key, collection).
Iteratee functions may exit iteration early by explicitly returning `false`.

**Note:** As with other "Collections" methods, objects with a "length"
property are iterated like arrays. To avoid this behavior use `forIn`
or `forOwn` for object iteration.

**Arguments:**

@param array|object $collection The collection to iterate over.

@param callable $iteratee The function invoked per iteration.



**Return:**

@return array|object Returns `collection`.

Example:
```php
<?php
 use function _\each;

each([1, 2], function ($value) { echo $value; })
// => Echoes `1` then `2`.

each((object) ['a' => 1, 'b' => 2], function ($value, $key) { echo $key; });
// => Echoes 'a' then 'b' (iteration order is not guaranteed).

```
### eachRight

This method is like `each` except that it iterates over elements of
`collection` from right to left.



**Arguments:**

@param array|object $collection The collection to iterate over.

@param callable $iteratee The function invoked per iteration.



**Return:**

@return array|object Returns `collection`.

Example:
```php
<?php
 use function _\eachRight;

eachRight([1, 2], function($value) { echo $value; })
// => Echoes `2` then `1`.

```
### filter

Iterates over elements of `array`, returning an array of all elements
`predicate` returns truthy for. The predicate is invoked with three
arguments: (value, index, array).

**Note:** Unlike `remove`, this method returns a new array.

**Arguments:**

@param iterable $array The array to iterate over.

@param callable $predicate The function invoked per iteration.



**Return:**

@return array the new filtered array.

Example:
```php
<?php
 use function _\filter;

$users = [
    [ 'user' => 'barney', 'age' => 36, 'active' => true],
    [ 'user' => 'fred',   'age' => 40, 'active' => false]
];

filter($users, function($o) { return !$o['active']; });
// => objects for ['fred']

// The `matches` iteratee shorthand.
filter($users, ['age' => 36, 'active' => true]);
// => objects for ['barney']

// The `matchesProperty` iteratee shorthand.
filter($users, ['active', false]);
// => objects for ['fred']

// The `property` iteratee shorthand.
filter($users, 'active');
// => objects for ['barney']

```
### find

Iterates over elements of `collection`, returning the first element
`predicate` returns truthy for. The predicate is invoked with three
arguments: (value, index|key, collection).



**Arguments:**

@param iterable $collection The collection to inspect.

@param callable $predicate The function invoked per iteration.

@param int $fromIndex The index to search from.



**Return:**

@return mixed Returns the matched element, else `null`.

Example:
```php
<?php
 use function _\find;

$users = [
    ['user' => 'barney',  'age' => 36, 'active' => true],
    ['user' => 'fred',    'age' => 40, 'active' => false],
    ['user' => 'pebbles', 'age' => 1,  'active' => true]
];

find($users, function($o) { return $o['age'] < 40; });
// => object for 'barney'

// The `matches` iteratee shorthand.
find($users, ['age' => 1, 'active' => true]);
// => object for 'pebbles'

// The `matchesProperty` iteratee shorthand.
find($users, ['active', false]);
// => object for 'fred'

// The `property` iteratee shorthand.
find($users, 'active');
// => object for 'barney'

```
### findLast

This method is like `find` except that it iterates over elements of
`collection` from right to left.



**Arguments:**

@param iterable $collection The collection to inspect.

@param callable $predicate The function invoked per iteration.

@param int $fromIndex The index to search from.



**Return:**

@return mixed Returns the matched element, else `undefined`.

Example:
```php
<?php
 use function _\findLast;

findLast([1, 2, 3, 4], function ($n) { return $n % 2 == 1; })
// => 3
</cdoe>
```
### flatMap

Creates a flattened array of values by running each element in `collection`
through `iteratee` and flattening the mapped results. The iteratee is invoked
with three arguments: (value, index|key, collection).



**Arguments:**

@param iterable $ collection The collection to iterate over.

@param callable $iteratee The function invoked per iteration.



**Return:**

@return array the new flattened array.

Example:
```php
<?php
 use function _\flatMap;

function duplicate($n) {
  return [$n, $n]
}

flatMap([1, 2], 'duplicate')
// => [1, 1, 2, 2]

```
### flatMapDeep

This method is like `flatMap` except that it recursively flattens the
mapped results.



**Arguments:**

@param iterable $ collection The collection to iterate over.

@param callable $iteratee The function invoked per iteration.



**Return:**

@return array Returns the new flattened array.

Example:
```php
<?php
 use function _\flatMapDeep;

function duplicate($n) {
  return [[[$n, $n]]];
}

flatMapDeep([1, 2], 'duplicate');
// => [1, 1, 2, 2]

```
### flatMapDepth

This method is like `flatMap` except that it recursively flattens the
mapped results up to `depth` times.



**Arguments:**

@param iterable $ collection The collection to iterate over.

@param callable $iteratee The function invoked per iteration.

@param int $depth The maximum recursion depth.



**Return:**

@return array the new flattened array.

Example:
```php
<?php
 use function _\flatMapDepth;

function duplicate($n) {
  return [[[$n, $n]]]
}

flatMapDepth([1, 2], 'duplicate', 2)
// => [[1, 1], [2, 2]]

```
### groupBy

Creates an array composed of keys generated from the results of running
each element of `collection` through `iteratee`. The order of grouped values
is determined by the order they occur in `collection`. The corresponding
value of each key is an array of elements responsible for generating the
key. The iteratee is invoked with one argument: (value).



**Arguments:**

@param iterable $ collection The collection to iterate over.

@param callable $iteratee The iteratee to transform keys.



**Return:**

@return array Returns the composed aggregate object.

Example:
```php
<?php
 use function _\groupBy;

groupBy([6.1, 4.2, 6.3], 'floor');
// => ['6' => [6.1, 6.3], '4' => [4.2]]

groupBy(['one', 'two', 'three'], 'strlen');
// => ['3' => ['one', 'two'], '5' => ['three']]

```
### invokeMap

Invokes the method at `path` of each element in `collection`, returning
an array of the results of each invoked method. Any additional arguments
are provided to each invoked method. If `path` is a function, it's invoked
for, and `this` bound to, each element in `collection`.



**Arguments:**

@param iterable $collection The collection to iterate over.

@param array|callable|string $path The path of the method to invoke or the function invoked per iteration.

@param array $args The arguments to invoke each method with.



**Return:**

@return array the array of results.

Example:
```php
<?php
 use function _\invokeMap;

invokeMap([[5, 1, 7], [3, 2, 1]], function($result) { sort($result); return $result;})
// => [[1, 5, 7], [1, 2, 3]]

invokeMap([123, 456], 'str_split')
// => [['1', '2', '3'], ['4', '5', '6']]

```
### keyBy

Creates an object composed of keys generated from the results of running
each element of `collection` through `iteratee`. The corresponding value of
each key is the last element responsible for generating the key. The
iteratee is invoked with one argument: (value).



**Arguments:**

@param iterable $collection The collection to iterate over.

@param callable $iteratee The iteratee to transform keys.



**Return:**

@return array the composed aggregate object.

Example:
```php
<?php
 use function _\keyBy;

$array = [
  ['direction' => 'left', 'code' => 97],
  ['direction' => 'right', 'code' => 100],
];

keyBy($array, function ($o) { return \chr($o['code']); })
// => ['a' => ['direction' => 'left', 'code' => 97], 'd' => ['direction' => 'right', 'code' => 100]]

keyBy($array, 'direction');
// => ['left' => ['direction' => 'left', 'code' => 97], 'right' => ['direction' => 'right', 'code' => 100]]

```
### map

Creates an array of values by running each element in `collection` through
`iteratee`. The iteratee is invoked with three arguments:
(value, index|key, collection).

Many lodash-php methods are guarded to work as iteratees for methods like
`_::every`, `_::filter`, `_::map`, `_::mapValues`, `_::reject`, and `_::some`.

The guarded methods are:
`ary`, `chunk`, `curry`, `curryRight`, `drop`, `dropRight`, `every`,
`fill`, `invert`, `parseInt`, `random`, `range`, `rangeRight`, `repeat`,
`sampleSize`, `slice`, `some`, `sortBy`, `split`, `take`, `takeRight`,
`template`, `trim`, `trimEnd`, `trimStart`, and `words`

**Arguments:**

@param array|object $collection The collection to iterate over.

@param callable|string|array $iteratee The function invoked per iteration.



**Return:**

@return array Returns the new mapped array.

Example:
```php
<?php
 use function _\map;

function square(int $n) {
  return $n * $n;
}

map([4, 8], $square);
// => [16, 64]

map((object) ['a' => 4, 'b' => 8], $square);
// => [16, 64] (iteration order is not guaranteed)

$users = [
  [ 'user' => 'barney' ],
  [ 'user' => 'fred' ]
];

// The `property` iteratee shorthand.
map($users, 'user');
// => ['barney', 'fred']

```
### orderBy

This method is like `sortBy` except that it allows specifying the sort
orders of the iteratees to sort by. If `orders` is unspecified, all values
are sorted in ascending order. Otherwise, specify an order of "desc" for
descending or "asc" for ascending sort order of corresponding values.



**Arguments:**

@param iterable $collection The collection to iterate over.

@param array[]|callable[]|string[] $iteratee The iteratee(s) to sort by.

@param string[] $orders The sort orders of `iteratees`.



**Return:**

@return array the new sorted array.

Example:
```php
<?php
 use function _\orderBy;

$users = [
  ['user' => 'fred',   'age' => 48],
  ['user' => 'barney', 'age' => 34],
  ['user' => 'fred',   'age' => 40],
  ['user' => 'barney', 'age' => 36]
]

// Sort by `user` in ascending order and by `age` in descending order.
orderBy($users, ['user', 'age'], ['asc', 'desc'])
// => [['user' => 'barney', 'age' => 36], ['user' => 'barney', 'age' => 34], ['user' => 'fred', 'age' => 48], ['user' => 'fred', 'age' => 40]]

```
### partition

Creates an array of elements split into two groups, the first of which
contains elements `predicate` returns truthy for, the second of which
contains elements `predicate` returns falsey for. The predicate is
invoked with one argument: (value).



**Arguments:**

@param iterable $collection The collection to iterate over.

@param callable $predicate The function invoked per iteration.



**Return:**

@return array the array of grouped elements.

Example:
```php
<?php
 use function _\partition;
$users = [
  ['user' => 'barney',  'age' => 36, 'active' => false],
  ['user' => 'fred',    'age' => 40, 'active' => true],
  ['user' => 'pebbles', 'age' => 1,  'active' => false]
];

partition($users, function($user) { return $user['active']; })
// => objects for [['fred'], ['barney', 'pebbles']]
```
### reduce

Reduces `collection` to a value which is the accumulated result of running
each element in `collection` thru `iteratee`, where each successive
invocation is supplied the return value of the previous. If `accumulator`
is not given, the first element of `collection` is used as the initial
value. The iteratee is invoked with four arguments:
(accumulator, value, index|key, collection).

Many lodash methods are guarded to work as iteratees for methods like
`reduce`, `reduceRight`, and `transform`.

The guarded methods are:
`assign`, `defaults`, `defaultsDeep`, `includes`, `merge`, `orderBy`,
and `sortBy`

**Arguments:**

@param iterable $collection The collection to iterate over.

@param mixed $iteratee The function invoked per iteration.

@param mixed $accumulator The initial value.



**Return:**

@return mixed Returns the accumulated value.

Example:
```php
<?php
 use function _\reduce;

reduce([1, 2], function($sum, $n) { return $sum + $n; }, 0)
// => 3

reduce(['a' => 1, 'b' => 2, 'c' => 1], function ($result, $value, $key) {
    if (!isset($result[$value])) {
        $result[$value] = [];
    }
    $result[$value][] = $key;

    return $result;
 }, [])
// => ['1' => ['a', 'c'], '2' => ['b']] (iteration order is not guaranteed)

```
### reduceRight

This method is like `reduce` except that it iterates over elements of
`collection` from right to left.



**Arguments:**

@param iterable $collection The collection to iterate over.

@param mixed $iteratee The function invoked per iteration.

@param mixed $accumulator The initial value.



**Return:**

@return mixed Returns the accumulated value.

Example:
```php
<?php
 use function _\reduceRight;

$array = [[0, 1], [2, 3], [4, 5]];

reduceRight(array, (flattened, other) => flattened.concat(other), [])
// => [4, 5, 2, 3, 0, 1]
```
### reject

The opposite of `filter` this method returns the elements of `collection`
that `predicate` does **not** return truthy for.



**Arguments:**

@param iterable $collection The collection to iterate over.

@param callable $predicate The function invoked per iteration.



**Return:**

@return array the new filtered array.

Example:
```php
<?php
 use function _\reject;

$users = [
  ['user' => 'barney', 'active' => true],
  ['user' => 'fred',   'active' => false]
]

reject($users, 'active')
// => objects for ['fred']

```
### size

Gets the size of `collection` by returning its length for array
values or the number of public properties for objects.



**Arguments:**

@param array|object|string $collection The collection to inspect.



**Return:**

@return int Returns the collection size.

Example:
```php
<?php
 use function _\size;
size([1, 2, 3]);
// => 3

size(new class { public $a = 1; public $b = 2; private $c = 3; });
// => 2

size('pebbles');
// => 7
```
### some

Checks if `predicate` returns truthy for **any** element of `collection`.

Iteration is stopped once `predicate` returns truthy. The predicate is
invoked with three arguments: (value, index|key, collection).

**Arguments:**

@param iterable $collection The collection to iterate over.

@param callable|string|array $predicate The function invoked per iteration.



**Return:**

@return bool Returns `true` if any element passes the predicate check, else `false`.

Example:
```php
<?php
 use function _\some;

some([null, 0, 'yes', false], , function ($value) { return \is_bool($value); }));
// => true

$users = [
  ['user' => 'barney', 'active' => true],
  ['user' => 'fred',   'active' => false]
];

// The `matches` iteratee shorthand.
some($users, ['user' => 'barney', 'active' => false ]);
// => false

// The `matchesProperty` iteratee shorthand.
some($users, ['active', false]);
// => true

// The `property` iteratee shorthand.
some($users, 'active');
// => true

```
### sortBy

Creates an array of elements, sorted in ascending order by the results of
running each element in a collection through each iteratee. This method
performs a stable sort, that is, it preserves the original sort order of
equal elements. The iteratees are invoked with one argument: (value).



**Arguments:**

@param array|object $collection The collection to iterate over.

@param callable|callable[] $iteratees The iteratees to sort by.



**Return:**

@return array Returns the new sorted array.

Example:
```php
<?php
 use function _\sortBy;

$users = [
  [ 'user' => 'fred',   'age' => 48 ],
  [ 'user' => 'barney', 'age' => 36 ],
  [ 'user' => 'fred',   'age' => 40 ],
  [ 'user' => 'barney', 'age' => 34 ],
];

sortBy($users, [function($o) { return $o['user']; }]);
// => [['user' => 'barney', 'age' => 36], ['user' => 'barney', 'age' => 34], ['user' => 'fred', 'age' => 48], ['user' => 'fred', 'age' => 40]]

sortBy($users, ['user', 'age']);
// => [['user' => 'barney', 'age' => 34], ['user' => 'barney', 'age' => 36], ['user' => 'fred', 'age' => 40], ['user' => 'fred', 'age' => 48]]

```