## Number

### clamp

Clamps `number` within the inclusive `lower` and `upper` bounds.



**Arguments:**

@param int $ number The number to clamp.

@param int $ lower The lower bound.

@param int $ upper The upper bound.



**Return:**

@return int Returns the clamped number.

Example:
```php
<?php
 use function _\clamp;

clamp(-10, -5, 5)
// => -5

clamp(10, -5, 5)
// => 5

```
### inRange

Checks if `number` is between `start` and up to, but not including, `end`. If
`end` is not specified, it's set to `start` with `start` then set to `0`.

If `start` is greater than `end` the params are swapped to support
negative ranges.

**Arguments:**

@param float $ number The number to check.

@param float $start The start of the range.

@param float $end The end of the range.



**Return:**

@return bool Returns `true` if `number` is in the range, else `false`.

Example:
```php
<?php
 use function _\inRange;

inRange(3, 2, 4)
// => true

inRange(4, 8)
// => true

inRange(4, 2)
// => false

inRange(2, 2)
// => false

inRange(1.2, 2)
// => true

inRange(5.2, 4)
// => false

inRange(-3, -2, -6)
// => true

```
### random

Produces a random number between the inclusive `lower` and `upper` bounds.

If only one argument is provided a number between `0` and the given number
is returned. If `floating` is `true`, or either `lower` or `upper` are
floats, a floating-point number is returned instead of an integer.

**Arguments:**

@param int|float $lower The lower bound.

@param int|float $upper The upper bound.

@param bool $floating Specify returning a floating-point number.



**Return:**

@return int|float Returns the random number.

Example:
```php
<?php
 use function _\random;
random(0, 5)
// => an integer between 0 and 5

random(5)
// => also an integer between 0 and 5

random(5, true)
// => a floating-point number between 0 and 5

random(1.2, 5.2)
// => a floating-point number between 1.2 and 5.2
```