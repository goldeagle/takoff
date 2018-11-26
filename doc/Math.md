## Math

### add

Adds two numbers.



**Arguments:**

@param int|float|string $augend The first number in an addition.

@param int|float|string $addend The second number in an addition.



**Return:**

@return int|float Returns the total.

Example:
```php
<?php
 use function _\add;

add(6, 4);
// => 10

```
### max

Computes the maximum value of `array`. If `array` is empty or falsey, null is returned.



**Arguments:**

@param array $ array The array to iterate over.



**Return:**

@return int|null Returns the maximum value.

Example:
```php
<?php
 use function _\max;

max([4, 2, 8, 6]);
// => 8

max([]);
// => null

```
### maxBy

This method is like `max` except that it accepts `iteratee` which is
invoked for each element in `array` to generate the criterion by which
the value is ranked. The iteratee is invoked with one argument: (value).



**Arguments:**

@param array $array The array to iterate over.

@param callable|string $iteratee The iteratee invoked per element.



**Return:**

@return mixed Returns the maximum value.

Example:
```php
<?php
 use function _\maxBy;

$objects = [['n' => 1], ['n' => 2]];

maxBy($objects, function($o) { return $o['n']; });
// => ['n' => 2]

// The `property` iteratee shorthand.
maxBy($objects, 'n');
// => ['n' => 2]
```