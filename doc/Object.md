## Object

### pick

Creates an object composed of the picked `object` properties.



**Arguments:**

@param object $object The source object.

@param string|string[] $paths The property paths to pick.



**Return:**

@return \stdClass Returns the new object.

Example:
```php
<?php
 use function _\pick;
$object = (object) ['a' => 1, 'b' => '2', 'c' => 3];

pick($object, ['a', 'c']);
// => (object) ['a' => 1, 'c' => 3]
```
### pickBy

Creates an object composed of the `object` properties `predicate` returns
truthy for. The predicate is invoked with two arguments: (value, key).



**Arguments:**

@param object $object The source object.

@param callable $predicate The function invoked per property.



**Return:**

@return \stdClass Returns the new object.

Example:
```php
<?php
 use function _\pickBy;
$object = (object) ['a' => 1, 'b' => 'abc', 'c' => 3];

pickBy(object, 'is_numeric');
// => (object) ['a' => 1, 'c' => 3]
```