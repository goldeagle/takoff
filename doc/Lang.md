## Lang

### eq

Performs a comparison between two values to determine if they are equivalent.



**Arguments:**

@param mixed $value The value to compare.

@param mixed $other The other value to compare.



**Return:**

@return bool Returns `true` if the values are equivalent, else `false`.

Example:
```php
<?php
 use function _\eq;

$object = (object) ['a' => 1];
$other = (object) ['a' => 1];

eq($object, $object);
// => true

eq($object, $other);
// => false

eq('a', 'a');
// => true

eq(['a'], (object) ['a']);
// => false

eq(INF, INF);
// => true

```
### isEqual

Performs a deep comparison between two values to determine if they are
equivalent.

**Note:** This method supports comparing arrays, booleans,
DateTime objects, exception objects, SPLObjectStorage, numbers,
strings, typed arrays, resources, DOM Nodes. objects are compared
by their own, not inherited, enumerable properties.

**Arguments:**

@param mixed $value The value to compare.

@param mixed $other The other value to compare.



**Return:**

@return bool Returns `true` if the values are equivalent, else `false`.

Example:
```php
<?php
 use function _\isEqual;


$object = [ 'a' => 1]
$other = ['a' => '1']

isEqual($object, $other)
// => true

$object === $other
// => false

```
### isError

Checks if `value` is an `\Exception`, `\ParseError`, \Error`, \Throwable`, \SoapFault`, \DOMException`, \PDOException`, object.



**Arguments:**

@param mixed $value The value to check.



**Return:**

@return bool Returns `true` if `value` is an error object, else `false`.

Example:
```php
<?php
 use function _\isError;

isError(new \Exception())
// => true

isError(\Exception::Class)
// => false
```