## Util

### attempt

Attempts to invoke `func`, returning either the result or the caught error
object. Any additional arguments are provided to `func` when it's invoked.



**Arguments:**

@param callable $func The function to attempt.

@param array $args The arguments to invoke `func` with.



**Return:**

@return mixed|\Throwable Returns the `func` result or error object.

Example:
```php
<?php
 use function _\attempt;

// Avoid throwing errors for invalid PDO data source.
$elements = attempt(function () {
   new \PDO(null);
});

if (isError($elements)) {
  $elements = [];
}
s
```
### identity

This method returns the first argument it receives.



**Arguments:**

@param mixed $value Any value.



**Return:**

@return mixed Returns `value`.

Example:
```php
<?php
 use function _\identity;

$object = ['a' => 1];

identity($object) === $object;
// => true

```
### property

Creates a function that returns the value at `path` of a given object.



**Arguments:**

@param array|string $ path The path of the property to get.



**Return:**

@return callable Returns the new accessor function.

Example:
```php
<?php
 use function _\property;

$objects = [
  [ 'a' => [ 'b' => 2 ] ],
  [ 'a' => [ 'b' => 1 ] ]
];

map($objects, property('a.b'));
// => [2, 1]

map(sortBy($objects, property(['a', 'b'])), 'a.b');
// => [1, 2]

```