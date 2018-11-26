## Function

### memoize

Creates a function that memoizes the result of `func`. If `resolver` is
provided, it determines the cache key for storing the result based on the
arguments provided to the memoized function. By default, the first argument
provided to the memoized function is used as the map cache key

**Note:** The cache is exposed as the `cache` property on the memoized
function. Its creation may be customized by replacing the `_.memoize.Cache`
constructor with one whose instances implement the
[`Map`](http://ecma-international.org/ecma-262/7.0/#sec-properties-of-the-map-prototype-object)
method interface of `clear`, `delete`, `get`, `has`, and `set`.

**Arguments:**

@param callable $func The function to have its output memoized.

@param callable $resolver The function to resolve the cache key.



**Return:**

@return callable Returns the new memoized function.

Example:
```php
<?php
 use function _\memoize;

$object = ['a' => 1, 'b' => 2];
$other = ['c' => 3, 'd' => 4];

$values = memoize('_\values');
$values($object);
// => [1, 2]

$values($other);
// => [3, 4]

$object['a'] = 2;
$values($object);
// => [1, 2]

// Modify the result cache.
$values->cache->set($object, ['a', 'b']);
$values($object);
// => ['a', 'b']

```
### negate

Creates a function that negates the result of the predicate `func`



**Arguments:**

@param callable $predicate The predicate to negate.



**Return:**

@return callable Returns the new negated function.

Example:
```php
<?php
 use function _\negate;

function isEven($n) {
  return $n % 2 == 0;
}

filter([1, 2, 3, 4, 5, 6], negate($isEven));
// => [1, 3, 5]
```