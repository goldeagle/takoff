## 数组

### chunk

Creates an array of elements split into groups the length of `size`.

If `array` can't be split evenly, the final chunk will be the remaining
elements.

**Arguments:**

@param array $array array The array to process.

@param int $number [size=1] The length of each chunk



**Return:**

@return array Returns the new array of chunks.

Example:
```php
<?php
 use function _\chunk;

chunk(['a', 'b', 'c', 'd'], 2)
// => [['a', 'b'], ['c', 'd']]

chunk(['a', 'b', 'c', 'd'], 3)
// => [['a', 'b', 'c'], ['d']]

```
### compact

Creates an array with all falsey values removed. The values `false`, `null`,
`0`, `""`, `undefined`, and `NaN` are falsey.



**Arguments:**

@param array $array The array to compact.



**Return:**

@return array Returns the new array of filtered values.

Example:
```php
<?php
 use function _\compact;

compact([0, 1, false, 2, '', 3])
// => [1, 2, 3]

```
### concat

Creates a new array concatenating `array` with any additional arrays
and/or values.



**Arguments:**

@param array $array The array to concatenate.

@param mixed $values The values to concatenate.



**Return:**

@return array Returns the new concatenated array.

Example:
```php
<?php
 use function _\concat;

$array = [1];
$other = concat($array, 2, [3], [[4]]);

var_dump($other)
// => [1, 2, 3, [4]]

var_dump($array)
// => [1]

```
### difference

Creates an array of `array` values not included in the other given arrays
using [`SameValueZero`](http://ecma-international.org/ecma-262/7.0/#sec-samevaluezero)
for equality comparisons. The order and references of result values are
determined by the first array.

**Note:** Unlike `pullAll`, this method returns a new array.

**Arguments:**

@param array $array The array to inspect.

@param array $values The values to exclude.



**Return:**

@return array Returns the new array of filtered values.

Example:
```php
<?php
 use function _\difference;

difference([2, 1], [2, 3])
// => [1]

```
### differenceBy

This method is like `difference` except that it accepts `iteratee` which
is invoked for each element of `array` and `values` to generate the criterion
by which they're compared. The order and references of result values are
determined by the first array. The iteratee is invoked with one argument:
(value).

**Note:** Unlike `pullAllBy`, this method returns a new array.

**Arguments:**

@param array $array The array to inspect.

@param array $values The values to exclude.

@param callable $ iteratee The iteratee invoked per element.



**Return:**

@return array Returns the new array of filtered values.

Example:
```php
<?php
 use function _\differenceBy;
differenceBy([2.1, 1.2], [2.3, 3.4], 'floor')
// => [1.2]
```
### differenceWith

This method is like `difference` except that it accepts `comparator`
which is invoked to compare elements of `array` to `values`. The order and
references of result values are determined by the first array. The comparator
is invoked with two arguments: (arrVal, othVal).

**Note:** Unlike `pullAllWith`, this method returns a new array.

**Arguments:**

@param array $array The array to inspect.

@param array[] $values The values to exclude.

@param callable $comparator The comparator invoked per element.



**Return:**

@return array Returns the new array of filtered values.

Example:
```php
<?php
 use function _\differenceWith;

$objects = [[ 'x' => 1, 'y' => 2 ], [ 'x' => 2, 'y' => 1 ]]

differenceWith($objects, [[ 'x' => 1, 'y' => 2 ]], '_::isEqual')
// => [[ 'x' => 2, 'y' => 1 ]]

```
### drop

Creates a slice of `array` with `n` elements dropped from the beginning.

**NOTE:** This function will reorder and reset the array indices

**Arguments:**

@param array $array The array to query.

@param int $n The number of elements to drop.



**Return:**

@return array the slice of `array`.

Example:
```php
<?php
 use function _\drop;

drop([1, 2, 3])
// => [2, 3]

drop([1, 2, 3], 2)
// => [3]

drop([1, 2, 3], 5)
// => []

drop([1, 2, 3], 0)
// => [1, 2, 3]

```
### dropRight

Creates a slice of `array` with `n` elements dropped from the end.

**NOTE:** This function will reorder and reset the array indices

**Arguments:**

@param array $array The array to query.

@param int $n The number of elements to drop.



**Return:**

@return array the slice of `array`.

Example:
```php
<?php
 use function _\dropRight;

dropRight([1, 2, 3])
// => [1, 2]

dropRight([1, 2, 3], 2)
// => [1]

dropRight([1, 2, 3], 5)
// => []

dropRight([1, 2, 3], 0)
// => [1, 2, 3]

```
### dropRightWhile

Creates a slice of `array` excluding elements dropped from the end.

Elements are dropped until `predicate` returns falsey. The predicate is
invoked with three arguments: (value, index, array).

**Arguments:**

@param array $array The array to query.

@param callable $predicate The function invoked per iteration.



**Return:**

@return array the slice of `array`.

Example:
```php
<?php
 use function _\dropRightWhile;

$users = [
  [ 'user' => 'barney',  'active' => false ],
  [ 'user' => 'fred',    'active' => true ],
  [ 'user' => 'pebbles', 'active' => true ]
]

dropRightWhile($users, function($user) { return $user['active']; })
// => objects for ['barney']

```
### dropWhile

Creates a slice of `array` excluding elements dropped from the beginning.

Elements are dropped until `predicate` returns falsey. The predicate is
invoked with three arguments: (value, index, array).

**Arguments:**

@param array $array The array to query.

@param callable $predicate The function invoked per iteration.



**Return:**

@return array the slice of `array`.

Example:
```php
<?php
 use function _\dropWhile;

$users = [
  [ 'user' => 'barney',  'active' => true ],
  [ 'user' => 'fred',    'active' => true ],
  [ 'user' => 'pebbles', 'active' => false ]
]

dropWhile($users, function($user) { return $user['active']; } )
// => objects for ['pebbles']

```
### every

Checks if `predicate` returns truthy for **all** elements of `array`.

Iteration is stopped once `predicate` returns falsey. The predicate is
invoked with three arguments: (value, index, array).

**Note:** This method returns `true` for
[empty arrays](https://en.wikipedia.org/wiki/Empty_set) because
[everything is true](https://en.wikipedia.org/wiki/Vacuous_truth) of
elements of empty arrays.

**Arguments:**

@param iterable $collection The array to iterate over.

@param callable $predicate The function invoked per iteration.



**Return:**

@return bool `true` if all elements pass the predicate check, else `false`.

Example:
```php
<?php
 use function _\every;

every([true, 1, null, 'yes'], function ($value) { return is_bool($value);})
// => false

$users = [
    ['user' => 'barney', 'age' => 36, 'active' => false],
    ['user' => 'fred', 'age' => 40, 'active' => false],
];

// The `matches` iteratee shorthand.
$this->assertFalse(every($users, ['user' => 'barney', 'active' => false]));
// false

// The `matchesProperty` iteratee shorthand.
$this->assertTrue(every($users, ['active', false]));
// true

// The `property` iteratee shorthand.
$this->assertFalse(every($users, 'active'));
//false


```
### findIndex

This method is like `find` except that it returns the index of the first element predicate returns truthy for instead of the element itself.



**Arguments:**

@param array $array The array to inspect.

@param callable $predicate The function invoked per iteration.

@param int $fromIndex The index to search from.



**Return:**

@return int the index of the found element, else `-1`.

Example:
```php
<?php
 use function _\findIndex;

$users = [
    ['user' => 'barney',  'active' => false],
    ['user' => 'fred',    'active' => false],
    ['user' => 'pebbles', 'active' => true],
];

findIndex($users, function($o) { return $o['user'] s== 'barney'; });
// => 0

// The `matches` iteratee shorthand.
findIndex($users, ['user' => 'fred', 'active' => false]);
// => 1

// The `matchesProperty` iteratee shorthand.
findIndex($users, ['active', false]);
// => 0

// The `property` iteratee shorthand.
findIndex($users, 'active');
// => 2

```
### findLastIndex

This method is like `findIndex` except that it iterates over elements
of `collection` from right to left.



**Arguments:**

@param array $array The array to inspect.

@param mixed $predicate The function invoked per iteration.

@param int $fromIndex The index to search from.



**Return:**

@return int the index of the found element, else `-1`.

Example:
```php
<?php
 use function _\findLastIndex;

$users = [
  ['user' => 'barney',  'active' => true ],
  ['user' => 'fred',    'active' => false ],
  ['user' => 'pebbles', 'active' => false ]
]

findLastIndex($users, function($user) { return $user['user'] === 'pebbles'; })
// => 2

```
### flatten

Flattens `array` a single level deep.



**Arguments:**

@param array $array The array to flatten.



**Return:**

@return array the new flattened array.

Example:
```php
<?php
 use function _\flatten;
flatten([1, [2, [3, [4]], 5]])
// => [1, 2, [3, [4]], 5]
```
### flattenDeep

Recursively flattens `array`.



**Arguments:**

@param array $array The array to flatten.



**Return:**

@return array Returns the new flattened array.

Example:
```php
<?php
 use function _\flattenDeep;

flattenDeep([1, [2, [3, [4]], 5]]);
// => [1, 2, 3, 4, 5]

```
### flattenDepth

Recursively flatten `array` up to `depth` times.



**Arguments:**

@param array $array The array to flatten.

@param int $depth The maximum recursion depth.



**Return:**

@return array the new flattened array.

Example:
```php
<?php
 use function _\flattenDepth;

$array = [1, [2, [3, [4]], 5]]

flattenDepth($array, 1)
// => [1, 2, [3, [4]], 5]

flattenDepth($array, 2)
// => [1, 2, 3, [4], 5]

```
### fromPairs

The inverse of `toPairs`, this method returns an object composed
from key-value `pairs`.



**Arguments:**

@param array $pairs The key-value pairs.



**Return:**

@return object the new object.

Example:
```php
<?php
 use function _\fromPairs;

fromPairs([['a', 1], ['b', 2]])
// => stdClass(
// 'a' => 1,
//'b' => 2,
// )

```
### head

Gets the first element of `array`.



**Arguments:**

@param array $array The array to query.



**Return:**

@return mixed Returns the first element of `array`.

Example:
```php
<?php
 use function _\head;

head([1, 2, 3])
// => 1

head([])
// => null

```
### indexOf

Gets the index at which the first occurrence of `value` is found in `array`
using [`SameValueZero`](http://ecma-international.org/ecma-262/7.0/#sec-samevaluezero)
for equality comparisons. If `fromIndex` is negative, it's used as the
offset from the end of `array`.



**Arguments:**

@param array $array The array to inspect.

@param mixed $value The value to search for.

@param int $fromIndex The index to search from.



**Return:**

@return int the index of the matched value, else `-1`.

Example:
```php
<?php
 use function _\indexOf;

indexOf([1, 2, 1, 2], 2)
// => 1

// Search from the `fromIndex`.
indexOf([1, 2, 1, 2], 2, 2)
// => 3

```
### initial

Gets all but the last element of `array`.



**Arguments:**

@param array $array The array to query.



**Return:**

@return array the slice of `array`.

Example:
```php
<?php
 use function _\initial;
initial([1, 2, 3])
// => [1, 2]
```
### intersection

Creates an array of unique values that are included in all given arrays
using [`SameValueZero`](http://ecma-international.org/ecma-262/7.0/#sec-samevaluezero)
for equality comparisons. The order and references of result values are
determined by the first array.



**Arguments:**

@param array[] $arrays



**Return:**

@return array the new array of intersecting values.

Example:
```php
<?php
 use function _\intersection;
intersection([2, 1], [2, 3])
// => [2]
```
### intersectionBy

This method is like `intersection` except that it accepts `iteratee`
which is invoked for each element of each `arrays` to generate the criterion
by which they're compared. The order and references of result values are
determined by the first array. The iteratee is invoked with one argument:
(value).



**Arguments:**

@param array[] $arrays

@param callable $iteratee The iteratee invoked per element.



**Return:**

@return array the new array of intersecting values.

Example:
```php
<?php
 use function _\intersectionBy;

intersectionBy([2.1, 1.2], [2.3, 3.4], Math.floor)
// => [2.1]

// The `property` iteratee shorthand.
intersectionBy([[ 'x' => 1 ]], [[ 'x' => 2 ], [ 'x' => 1 ]], 'x');
// => [[ 'x' => 1 ]]

```
### intersectionWith

This method is like `intersection` except that it accepts `comparator`
which is invoked to compare elements of `arrays`. The order and references
of result values are determined by the first array. The comparator is
invoked with two arguments: (arrVal, othVal).



**Arguments:**

@param array[] $arrays

@param callable $comparator The comparator invoked per element.



**Return:**

@return array the new array of intersecting values.

Example:
```php
<?php
 use function _\intersectionWith;

$objects = [[ 'x' => 1, 'y' => 2 ], [ 'x' => 2, 'y' => 1 ]]
$others = [[ 'x' => 1, 'y' => 1 ], [ 'x' => 1, 'y' => 2 ]]

intersectionWith($objects, $others, '_::isEqual')
// => [[ 'x' => 1, 'y' => 2 ]]

```
### last

Gets the last element of `array`.



**Arguments:**

@param array $array The array to query.



**Return:**

@return mixed Returns the last element of `array`.

Example:
```php
<?php
 use function _\last;

last([1, 2, 3])
// => 3

```
### lastIndexOf

This method is like `indexOf` except that it iterates over elements of
`array` from right to left.



**Arguments:**

@param array $array The array to inspect.

@param mixed $value The value to search for.

@param int $fromIndex The index to search from.



**Return:**

@return int the index of the matched value, else `-1`.

Example:
```php
<?php
 use function _\lastIndexOf;

lastIndexOf([1, 2, 1, 2], 2)
// => 3

// Search from the `fromIndex`.
lastIndexOf([1, 2, 1, 2], 2, 2)
// => 1

```
### nth

Gets the element at index `n` of `array`. If `n` is negative, the nth
element from the end is returned.



**Arguments:**

@param array $array The array to query.

@param int $n The index of the element to return.



**Return:**

@return mixed Returns the nth element of `array`.

Example:
```php
<?php
 use function _\nth;
$array = ['a', 'b', 'c', 'd']

nth($array, 1)
// => 'b'

nth($array, -2)
// => 'c'
```
### pull

Removes all given values from `array` using
[`SameValueZero`](http://ecma-international.org/ecma-262/7.0/#sec-samevaluezero)
for equality comparisons.

**Note:** Unlike `without`, this method mutates `array`. Use `remove`
to remove elements from an array by predicate.

**Arguments:**

@param array $array The array to modify.

@param array $values The values to remove.



**Return:**

@return array

Example:
```php
<?php
 use function _\pull;

$array = ['a', 'b', 'c', 'a', 'b', 'c']

pull($array, 'a', 'c')
var_dump($array)
// => ['b', 'b']

```
### pullAll

This method is like `pull` except that it accepts an array of values to remove.

**Note:** Unlike `difference`, this method mutates `array`.

**Arguments:**

@param array $array The array to modify.

@param array $values The values to remove.



**Return:**

@return array `array`.

Example:
```php
<?php
 use function _\pullAll;

$array = ['a', 'b', 'c', 'a', 'b', 'c']

pullAll($array, ['a', 'c'])
var_dump($array)
// => ['b', 'b']

```
### pullAllBy

This method is like `pullAll` except that it accepts `iteratee` which is
invoked for each element of `array` and `values` to generate the criterion
by which they're compared. The iteratee is invoked with one argument: (value).

**Note:** Unlike `differenceBy`, this method mutates `array`.

**Arguments:**

@param array $array The array to modify.

@param array $values The values to remove.

@param callable $iteratee The iteratee invoked per element.



**Return:**

@return array `array`.

Example:
```php
<?php
 use function _\pullAllBy;
$array = [[ 'x' => 1 ], [ 'x' => 2 ], [ 'x' => 3 ], [ 'x' => 1 ]]

pullAllBy($array, [[ 'x' => 1 ], [ 'x' => 3 ]], 'x')
var_dump($array)
// => [[ 'x' => 2 ]]
```
### pullAllWith

This method is like `pullAll` except that it accepts `comparator` which
is invoked to compare elements of `array` to `values`. The comparator is
invoked with two arguments: (arrVal, othVal).

**Note:** Unlike `differenceWith`, this method mutates `array`.

**Arguments:**

@param array $array The array to modify.

@param array $values The values to remove.

@param callable $comparator The comparator invoked per element.



**Return:**

@return array `array`.

Example:
```php
<?php
 use function _\pullAllWith;

$array = [[ 'x' => 1, 'y' => 2 ], [ 'x' => 3, 'y' => 4 ], [ 'x' => 5, 'y' => 6 ]]

pullAllWith($array, [[ 'x' => 3, 'y' => 4 ]], '_\isEqual')
var_dump($array)
// => [[ 'x' => 1, 'y' => 2 ], [ 'x' => 5, 'y' => 6 ]]

```
### pullAt

Removes elements from `array` corresponding to `indexes` and returns an
array of removed elements.

**Note:** Unlike `at`, this method mutates `array`.

**Arguments:**

@param array $array The array to modify.

@param int|int[] $indexes The indexes of elements to remove.



**Return:**

@return array the new array of removed elements.

Example:
```php
<?php
 use function _\pullAt;

$array = ['a', 'b', 'c', 'd']
$pulled = pullAt($array, [1, 3])

var_dump($array)
// => ['a', 'c']

var_dump($pulled)
// => ['b', 'd']

```
### remove

Removes all elements from `array` that `predicate` returns truthy for
and returns an array of the removed elements. The predicate is invoked
with three arguments: (value, index, array).

**Note:** Unlike `filter`, this method mutates `array`. Use `pull`
to pull elements from an array by value.

**Arguments:**

@param array $array The array to modify.

@param callable $predicate The function invoked per iteration.



**Return:**

@return array the new array of removed elements.

Example:
```php
<?php
 use function _\remove;
$array = [1, 2, 3, 4]
$evens = remove($array, function ($n) { return $n % 2 === 0; })

var_dump($array)
// => [1, 3]

var_dump($evens)
// => [2, 4]
```
### sample

Gets a random element from `array`.



**Arguments:**

@param array $array The array to sample.



**Return:**

@return mixed Returns the random element.

Example:
```php
<?php
 use function _\sample;

sample([1, 2, 3, 4])
// => 2

```
### sampleSize

Gets `n` random elements at unique keys from `array` up to the
size of `array`.



**Arguments:**

@param array $array The array to sample.

@param int $n The number of elements to sample.



**Return:**

@return array the random elements.

Example:
```php
<?php
 use function _\sampleSize;
sampleSize([1, 2, 3], 2)
// => [3, 1]

sampleSize([1, 2, 3], 4)
// => [2, 3, 1]
```
### shuffle

Creates an array of shuffled values



**Arguments:**

@param array $array The array to shuffle.



**Return:**

@return array the new shuffled array.

Example:
```php
<?php
 use function _\shuffle;
shuffle([1, 2, 3, 4])
// => [4, 1, 3, 2]
```
### slice

Creates a slice of `array` from `start` up to, but not including, `end`.



**Arguments:**

@param array $array The array to slice.

@param int $start The start position.

@param int $end The end position.



**Return:**

@return array the slice of `array`.

### tail

Gets all but the first element of `array`.



**Arguments:**

@param array $array The array to query.



**Return:**

@return array the slice of `array`.

Example:
```php
<?php
 use function _\tail;

tail([1, 2, 3])
// => [2, 3]

```
### take

Creates a slice of `array` with `n` elements taken from the beginning.



**Arguments:**

@param array $array The array to query.

@param int $n The number of elements to take.



**Return:**

@return array the slice of `array`.

Example:
```php
<?php
 use function _\take;

take([1, 2, 3])
// => [1]

take([1, 2, 3], 2)
// => [1, 2]

take([1, 2, 3], 5)
// => [1, 2, 3]

take([1, 2, 3], 0)
// => []

```
### takeRight

Creates a slice of `array` with `n` elements taken from the end.



**Arguments:**

@param array $array The array to query.

@param int $n The number of elements to take.



**Return:**

@return array the slice of `array`.

Example:
```php
<?php
 use function _\takeRight;

takeRight([1, 2, 3])
// => [3]

takeRight([1, 2, 3], 2)
// => [2, 3]

takeRight([1, 2, 3], 5)
// => [1, 2, 3]

takeRight([1, 2, 3], 0)
// => []

```
### takeRightWhile

Creates a slice of `array` with elements taken from the end. Elements are
taken until `predicate` returns falsey. The predicate is invoked with
three arguments: (value, index, array).



**Arguments:**

@param array $array The array to query.

@param callable $predicate The function invoked per iteration.



**Return:**

@return array the slice of `array`.

Example:
```php
<?php
 use function _\takeRightWhile;

$users = [
  [ 'user' => 'barney',  'active' => false ],
  [ 'user' => 'fred',    'active' => true ],
  [ 'user' => 'pebbles', 'active' => true ]
];

takeRightWhile($users, function($value) { return $value['active']; })
// => objects for ['fred', 'pebbles']

```
### takeWhile

Creates a slice of `array` with elements taken from the beginning. Elements
are taken until `predicate` returns falsey. The predicate is invoked with
three arguments: (value, index, array).



**Arguments:**

@param array $array The array to query.

@param mixed $predicate The function invoked per iteration.



**Return:**

@return array the slice of `array`.

Example:
```php
<?php
 use function _\takeWhile;

$users = [
  [ 'user' => 'barney',  'active' => true ],
  [ 'user' => 'fred',    'active' => true ],
  [ 'user' => 'pebbles', 'active' => false ]
]

takeWhile($users, function($value) { return $value['active']; })
// => objects for ['barney', 'fred']

```
### union

Creates an array of unique values, in order, from all given arrays using
[`SameValueZero`](http://ecma-international.org/ecma-262/7.0/#sec-samevaluezero)
for equality comparisons.



**Arguments:**

@param array[] $arrays The arrays to inspect.



**Return:**

@return array the new array of combined values.

Example:
```php
<?php
 use function _\union;

union([2], [1, 2])
// => [2, 1]

```
### unionBy

This method is like `union` except that it accepts `iteratee` which is
invoked for each element of each `arrays` to generate the criterion by
which uniqueness is computed. Result values are chosen from the first
array in which the value occurs. The iteratee is invoked with one argument:
(value).



**Arguments:**

@param array[] $arrays The arrays to inspect.

@param callable $iteratee The iteratee invoked per element.



**Return:**

@return array the new array of combined values.

Example:
```php
<?php
 use function _\unionBy;

unionBy([2.1], [1.2, 2.3], 'floor')
// => [2.1, 1.2]

// The `_::property` iteratee shorthand.
unionBy([['x' => 1]], [['x' => 2], ['x' => 1]], 'x');
// => [['x' => 1], ['x' => 2]]

```
### unionWith

This method is like `union` except that it accepts `comparator` which
is invoked to compare elements of `arrays`. Result values are chosen from
the first array in which the value occurs. The comparator is invoked
with two arguments: (arrVal, othVal).



**Arguments:**

@param array[] $arrays The arrays to inspect.

@param callable $comparator The comparator invoked per element.



**Return:**

@return array the new array of combined values.

Example:
```php
<?php
 use function _\unionWith;
$objects = [['x' => 1, 'y' => 2], ['x' => 2, 'y' => 1]]
$others = [['x' => 1, 'y' => 1], ['x' => 1, 'y' => 2]]

unionWith($objects, $others, '_::isEqual')
// => [['x' => 1, 'y' => 2], ['x' => 2, 'y' => 1], ['x' => 1, 'y' => 1]]
```
### uniq

Creates a duplicate-free version of an array, using
[`SameValueZero`](http://ecma-international.org/ecma-262/7.0/#sec-samevaluezero)
for equality comparisons, in which only the first occurrence of each element
is kept. The order of result values is determined by the order they occur
in the array.



**Arguments:**

@param array $array The array to inspect.



**Return:**

@return array the new duplicate free array.

Example:
```php
<?php
 use function _\uniq;

uniq([2, 1, 2])
// => [2, 1]s

```
### uniqBy

This method is like `uniq` except that it accepts `iteratee` which is
invoked for each element in `array` to generate the criterion by which
uniqueness is computed. The order of result values is determined by the
order they occur in the array. The iteratee is invoked with one argument:
(value).



**Arguments:**

@param array $array The array to inspect.

@param mixed $iteratee The iteratee invoked per element.



**Return:**

@return array the new duplicate free array.

Example:
```php
<?php
 use function _\uniqBy;

uniqBy([2.1, 1.2, 2.3], 'floor')
// => [2.1, 1.2]

```
### uniqWith

This method is like `uniq` except that it accepts `comparator` which
is invoked to compare elements of `array`. The order of result values is
determined by the order they occur in the array.The comparator is invoked
with two arguments: (arrVal, othVal).



**Arguments:**

@param array $array The array to inspect.

@param callable $comparator The comparator invoked per element.



**Return:**

@return array the new duplicate free array.

Example:
```php
<?php
 use function _\uniqWith;

$objects = [['x' => 1, 'y' => 2], ['x' => 2, 'y' => 1], ['x' => 1, 'y' => 2]]

uniqWith($objects, '_::isEqual')
// => [['x' => 1, 'y' => 2], ['x' => 2, 'y' => 1]]

```
### unzip

This method is like `zip` except that it accepts an array of grouped
elements and creates an array regrouping the elements to their pre-zip
configuration.



**Arguments:**

@param array $array The array of grouped elements to process.



**Return:**

@return array the new array of regrouped elements.

Example:
```php
<?php
 use function _\unzip;

$zipped = zip(['a', 'b'], [1, 2], [true, false])
// => [['a', 1, true], ['b', 2, false]]

unzip($zipped)
// => [['a', 'b'], [1, 2], [true, false]]

```
### unzipWith

This method is like `unzip` except that it accepts `iteratee` to specify
how regrouped values should be combined. The iteratee is invoked with the
elements of each group: (.

..group).

**Arguments:**

@param array $array The array of grouped elements to process.

@param callable $iteratee The function to combine regrouped values.



**Return:**

@return array the new array of regrouped elements.

Example:
```php
<?php
 use function _\unzipWith;

$zipped = zip([1, 2], [10, 20], [100, 200])
// => [[1, 10, 100], [2, 20, 200]]

unzipWith(zipped, '_::add')
// => [3, 30, 300]

```
### without

Creates an array excluding all given values using
[`SameValueZero`](http://ecma-international.org/ecma-262/7.0/#sec-samevaluezero)
for equality comparisons.

**Note:** Unlike `pull`, this method returns a new array.

**Arguments:**

@param array $array The array to inspect.

@param array $values The values to exclude.



**Return:**

@return array the new array of filtered values.

Example:
```php
<?php
 use function _\without;

without([2, 1, 2, 3], 1, 2)
// => [3]

```
### zip

Creates an array of grouped elements, the first of which contains the
first elements of the given arrays, the second of which contains the
second elements of the given arrays, and so on.



**Arguments:**

@param array[] $arrays The arrays to process.



**Return:**

@return array the new array of grouped elements.

Example:
```php
<?php
 use function _\zip;

zip(['a', 'b'], [1, 2], [true, false])
// => [['a', 1, true], ['b', 2, false]]

```
### zipObject

This method is like `fromPairs` except that it accepts two arrays,
one of property identifiers and one of corresponding values.



**Arguments:**

@param array $props The property identifiers.

@param array $values The property values.



**Return:**

@return object the new object.

Example:
```php
<?php
 use function _\zipObject;

zipObject(['a', 'b'], [1, 2])
/* => object(stdClass)#210 (2) {
["a"] => int(1)
["b"] => int(2)
}
*\/

```
### zipObjectDeep

This method is like `zipObject` except that it supports property paths.



**Arguments:**

@param array $props The property identifiers.

@param array $values The property values.



**Return:**

@return object the new object.

Example:
```php
<?php
 use function _\zipObjectDeep;

zipObjectDeep(['a.b[0].c', 'a.b[1].d'], [1, 2])
/* => class stdClass#20 (1) {
 public $a => class stdClass#19 (1) {
     public $b =>
         array(2) {
             [0] => class stdClass#17 (1) {
                     public $c => int(1)
                 }
            [1] => class stdClass#18 (1) {
                 public $d => int(2)
                 }
         }
     }
 }
*\/

```
### zipWith

This method is like `zip` except that it accepts `iteratee` to specify
how grouped values should be combined. The iteratee is invoked with the
elements of each group: (.

..group).

**Arguments:**

@param array[] $arrays The arrays to process.

@param callable $iteratee The function to combine grouped values.



**Return:**

@return array the new array of grouped elements.

Example:
```php
<?php
 use function _\zipWith;

zipWith([1, 2], [10, 20], [100, 200], function($a, $b, $c) { return $a + $b + $c; })
// => [111, 222]

```