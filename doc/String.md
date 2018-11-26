## String

### camelCase

Converts `string` to [camel case](https://en.wikipedia.org/wiki/CamelCase).



**Arguments:**

@param string $string The string to convert.



**Return:**

@return string Returns the camel cased string.

Example:
```php
<?php
 use function _\camelCase;

camelCase('Foo Bar')
// => 'fooBar'

camelCase('--foo-bar--')
// => 'fooBar'

camelCase('__FOO_BAR__')
// => 'fooBar'

```
### capitalize

Converts the first character of `string` to upper case and the remaining
to lower case.



**Arguments:**

@param string $string The string to capitalize.



**Return:**

@return string Returns the capitalized string.

Example:
```php
<?php
 use function _\capitalize;

capitalize('FRED')
// => 'Fred'

```
### deburr

Deburrs `string` by converting
[Latin-1 Supplement](https =>//en.wikipedia.org/wiki/Latin-1_Supplement_(Unicode_block)#Character_table)
and [Latin Extended-A](https =>//en.wikipedia.org/wiki/Latin_Extended-A)
letters to basic Latin letters and removing
[combining diacritical marks](https =>//en.wikipedia.org/wiki/Combining_Diacritical_Marks).



**Arguments:**

@param string $string The string to deburr.



**Return:**

@return string Returns the deburred string.

Example:
```php
<?php
 use function _\deburr;
deburr('déjà vu')
// => 'deja vu'
```
### endsWith

Checks if `string` ends with the given target string.



**Arguments:**

@param string $string The string to inspect.

@param string $target The string to search for.

@param int $position The position to search up to.



**Return:**

@return bool Returns `true` if `string` ends with `target`, else `false`.

Example:
```php
<?php
 use function _\endsWith;

endsWith('abc', 'c')
// => true

endsWith('abc', 'b')
// => false

endsWith('abc', 'b', 2)
// => true

```
### escape

Converts the characters "&", "<", ">", '"', and "'" in `string` to their
corresponding HTML entities.

Though the ">" character is escaped for symmetry, characters like
">" and "/" don't need escaping in HTML and have no special meaning
unless they're part of a tag or unquoted attribute value. See
[Mathias Bynens's article](https://mathiasbynens.be/notes/ambiguous-ampersands)
(under "semi-related fun fact") for more details.

When working with HTML you should always
[quote attribute values](http://wonko.com/post/html-escaping) to reduce
XSS vectors.

**Arguments:**

@param string $string The string to escape.



**Return:**

@return string Returns the escaped string.

Example:
```php
<?php
 use function _\escape;

escape('fred, barney, & pebbles')
// => 'fred, barney, &amp pebbles'

```
### escapeRegExp

Escapes the `RegExp` special characters "^", "$", "\", ".", "*", "+",
"?", "(", ")", "[", "]", "{", "}", and "|" in `string`.



**Arguments:**

@param string $string The string to escape.



**Return:**

@return string Returns the escaped string.

Example:
```php
<?php
 use function _\escapeRegExp;

escapeRegExp('[lodash](https://lodash.com/)')
// => '\[lodash\]\(https://lodash\.com/\)'

```
### kebabCase

Converts `string` to
[kebab case](https://en.wikipedia.org/wiki/Letter_case#Special_case_styles).



**Arguments:**

@param string $string The string to convert.



**Return:**

@return string Returns the kebab cased string.

Example:
```php
<?php
 use function _\kebabCase;

kebabCase('Foo Bar')
// => 'foo-bar'

kebabCase('fooBar')
// => 'foo-bar'

kebabCase('__FOO_BAR__')
// => 'foo-bar'

```
### lowerCase

Converts `string`, as space separated words, to lower case.



**Arguments:**

@param string $string The string to convert.



**Return:**

@return string Returns the lower cased string.

Example:
```php
<?php
 use function _\lowerCase;

lowerCase('--Foo-Bar--')
// => 'foo bar'

lowerCase('fooBar')
// => 'foo bar'

lowerCase('__FOO_BAR__')
// => 'foo bar'

```
### lowerFirst

Converts the first character of `string` to lower case.



**Arguments:**

@param string $string The string to convert.



**Return:**

@return string Returns the converted string.

Example:
```php
<?php
 use function _\lowerFirst;

lowerFirst('Fred')
// => 'fred'

lowerFirst('FRED')
// => 'fRED'

```
### pad

Pads `string` on the left and right sides if it's shorter than `length`.

Padding characters are truncated if they can't be evenly divided by `length`.

**Arguments:**

@param string $string The string to pad.

@param int $length The padding length.

@param string $chars The string used as padding.



**Return:**

@return string Returns the padded string.

Example:
```php
<?php
 use function _\pad;

pad('abc', 8)
// => '  abc   '

pad('abc', 8, '_-')
// => '_-abc_-_'

pad('abc', 2)
// => 'abc'

```
### padEnd

Pads `string` on the right side if it's shorter than `length`. Padding
characters are truncated if they exceed `length`.



**Arguments:**

@param string $string The string to pad.

@param int $length The padding length.

@param string $chars The string used as padding.



**Return:**

@return string Returns the padded string.

Example:
```php
<?php
 use function _\padEnd;

padEnd('abc', 6)
// => 'abc   '

padEnd('abc', 6, '_-')
// => 'abc_-_'

padEnd('abc', 2)
// => 'abc'

```
### padStart

Pads `string` on the left side if it's shorter than `length`. Padding
characters are truncated if they exceed `length`.



**Arguments:**

@param string $string ='' The string to pad.

@param int $length The padding length.

@param string $chars The string used as padding.



**Return:**

@return string Returns the padded string.

Example:
```php
<?php
 use function _\padStart;

padStart('abc', 6)
// => '   abc'

padStart('abc', 6, '_-')
// => '_-_abc'

padStart('abc', 2)
// => 'abc'
s
```
### parseInt

Converts `string` to an integer of the specified radix. If `radix` is
`undefined` or `0`, a `radix` of `10` is used unless `string` is a
hexadecimal, in which case a `radix` of `16` is used.

**Note:** This method uses PHP's built-in integer casting, which does not necessarily align with the
[ES5 implementation](https://es5.github.io/#x15.1.2.2) of `parseInt`.

**Arguments:**

@param int|float|string $string The string to convert.

@param int $radix The radix to interpret `string` by.



**Return:**

@return int Returns the converted integer.

Example:
```php
<?php
 use function _\parseInt;

parseInt('08')
// => 8

```
### repeat

Repeats the given string `n` times.



**Arguments:**

@param string $string The string to repeat.

@param int $n The number of times to repeat the string.



**Return:**

@return string Returns the repeated string.

Example:
```php
<?php
 use function _\repeat;

repeat('*', 3)
// => '***'

repeat('abc', 2)
// => 'abcabc'

repeat('abc', 0)
// => ''

```
### replace

Replaces matches for `pattern` in `string` with `replacement`.

**Note:** This method is based on
[`String#replace`](https://mdn.io/String/replace).

**Arguments:**

@param string $string The string to modify.

@param string $pattern The pattern to replace.

@param callable|string $ replacement The match replacement.



**Return:**

@return string Returns the modified string.

Example:
```php
<?php
 use function _\replace;

replace('Hi Fred', 'Fred', 'Barney')
// => 'Hi Barney'

```
### snakeCase

Converts `string` to
[snake case](https://en.wikipedia.org/wiki/Snake_case).



**Arguments:**

@param string $string The string to convert.



**Return:**

@return string Returns the snake cased string.

Example:
```php
<?php
 use function _\snakeCase;
snakeCase('Foo Bar')
// => 'foo_bar'

snakeCase('fooBar')
// => 'foo_bar'

snakeCase('--FOO-BAR--')
// => 'foo_bar'
```
### split

Splits `string` by `separator`.

**Note:** This method is based on
[`String#split`](https://mdn.io/String/split).

**Arguments:**

@param string $ string The string to split.

@param string $separator The separator pattern to split by.

@param int $limit The length to truncate results to.



**Return:**

@return array Returns the string segments.

Example:
```php
<?php
 use function _\split;

split('a-b-c', '-', 2)
// => ['a', 'b']

```
### startCase

Converts `string` to
[start case](https://en.wikipedia.org/wiki/Letter_case#Stylistic_or_specialised_usage).



**Arguments:**

@param string $string The string to convert.



**Return:**

@return string Returns the start cased string.

Example:
```php
<?php
 use function _\startCase;

startCase('--foo-bar--')
// => 'Foo Bar'

startCase('fooBar')
// => 'Foo Bar'

startCase('__FOO_BAR__')
// => 'FOO BAR'

```
### startsWith

Checks if `string` starts with the given target string.



**Arguments:**

@param string $string The string to inspect.

@param string $target The string to search for.

@param int $position The position to search from.



**Return:**

@return bool Returns `true` if `string` starts with `target`, else `false`.

Example:
```php
<?php
 use function _\startsWith;

startsWith('abc', 'a')
// => true

startsWith('abc', 'b')
// => false

startsWith('abc', 'b', 1)
// => true

```
### template

Creates a compiled template function that can interpolate data properties
in "interpolate" delimiters, HTML-escape interpolated data properties in
"escape" delimiters, and execute PHP in "evaluate" delimiters. Data
properties may be accessed as free variables in the template. If a setting
object is given, it takes precedence over `$templateSettings` values.



**Arguments:**

@param string $string The template string.

@param array $options The options array.
RegExp $options['escape'] = _::$templateSettings['escape'] The HTML "escape" delimiter.
RegExp $options['evaluate'] = _::$templateSettings['evaluate'] The "evaluate" delimiter.
array  $options['imports'] = _::$templateSettings['imports'] An object to import into the template as free variables.
RegExp $options['interpolate'] = _::$templateSettings['interpolate'] The "interpolate" delimiter.



**Return:**

@return callable Returns the compiled template function.

Example:
```php
<?php
 use function _\template;

// Use the "interpolate" delimiter to create a compiled template.
$compiled = template('hello <%= user %>!')
$compiled([ 'user' => 'fred' ])
// => 'hello fred!'

// Use the HTML "escape" delimiter to escape data property values.
$compiled = template('<b><%- value %></b>')
$compiled([ 'value' => '<script>' ])
// => '<b>&lt;script&gt;</b>'

// Use the "evaluate" delimiter to execute JavaScript and generate HTML.
$compiled = template('<% foreach($users as $user) { %><li><%- user %></li><% }%>')
$compiled([ 'users' => ['fred', 'barney'] ])
// => '<li>fred</li><li>barney</li>'

// Use the internal `print` function in "evaluate" delimiters.
$compiled = template('<% print("hello " + $user)%>!')
$compiled([ 'user' => 'barney' ])
// => 'hello barney!'

// Use backslashes to treat delimiters as plain text.
$compiled = template('<%= "\\<%- value %\\>" %>')
$compiled([ 'value' => 'ignored' ])
// => '<%- value %>'

// Use the `imports` option to import functions or classes with aliases.
$text = '<% all($users, function($user) { %><li><%- user %></li><% })%>'
$compiled = template($text, { 'imports': { '_\each': 'all' } })
$compiled([ 'users' => ['fred', 'barney'] ])
// => '<li>fred</li><li>barney</li>'

// Use custom template delimiters.
\_::$templateSettings['interpolate'] = '{{([\s\S]+?)}}'
$compiled = template('hello {{ user }}!')
$compiled([ 'user' => 'mustache' ])
// => 'hello mustache!'

// Use the `source` property to access the compiled source of the template
template($mainText)->source;

```
### toLower

Converts `string`, as a whole, to lower case



**Arguments:**

@param string $string The string to convert.



**Return:**

@return string Returns the lower cased string.

Example:
```php
<?php
 use function _\toLower;

toLower('--Foo-Bar--')
// => '--foo-bar--'

toLower('fooBar')
// => 'foobar'

toLower('__FOO_BAR__')
// => '__foo_bar__'

```
### toUpper

Converts `string`, as a whole, to upper case



**Arguments:**

@param string $string The string to convert.



**Return:**

@return string Returns the upper cased string.

Example:
```php
<?php
 use function _\toUpper;

toUpper('--foo-bar--')
// => '--FOO-BAR--'

toUpper('fooBar')
// => 'FOOBAR'

toUpper('__foo_bar__')
// => '__FOO_BAR__'
```
### trim

Removes leading and trailing whitespace or specified characters from `string`.



**Arguments:**

@param string $string The string to trim.

@param string $chars The characters to trim.



**Return:**

@return string Returns the trimmed string.

Example:
```php
<?php
 use function _\trim;

trim('  abc  ')
// => 'abc'

trim('-_-abc-_-', '_-')
// => 'abc'

```
### trimEnd

Removes trailing whitespace or specified characters from `string`.



**Arguments:**

@param string $string The string to trim.

@param string $chars The characters to trim.



**Return:**

@return string Returns the trimmed string.

Example:
```php
<?php
 use function _\trimEnd;
trimEnd('  abc  ')
// => '  abc'

trimEnd('-_-abc-_-', '_-')
// => '-_-abc'
```
### trimStart

Removes leading whitespace or specified characters from `string`.



**Arguments:**

@param string $string The string to trim.

@param string $chars The characters to trim.



**Return:**

@return string Returns the trimmed string.

Example:
```php
<?php
 use function _\trimStart;

trimStart('  abc  ')
// => 'abc  '

trimStart('-_-abc-_-', '_-')
// => 'abc-_-'

```
### truncate

Truncates `string` if it's longer than the given maximum string length.

The last characters of the truncated string are replaced with the omission
string which defaults to "...".

**Arguments:**

@param string $string The string to truncate.

@param array $options The options object.
length = 30 The maximum string length.
omission = '...' The string to indicate text is omitted.
separator The separator pattern to truncate to.



**Return:**

@return string Returns the truncated string.

Example:
```php
<?php
 use function _\truncate;

truncate('hi-diddly-ho there, neighborino')
// => 'hi-diddly-ho there, neighbo...'

truncate('hi-diddly-ho there, neighborino', [
  'length' => 24,
  'separator' => ' '
])
// => 'hi-diddly-ho there,...'

truncate('hi-diddly-ho there, neighborino', [
  'length' => 24,
  'separator' => '/,? +/'
])
// => 'hi-diddly-ho there...'

truncate('hi-diddly-ho there, neighborino', [
  'omission' => ' [...]'
])
// => 'hi-diddly-ho there, neig [...]'

```
### unescape

The inverse of `escape`this method converts the HTML entities
`&amp;`, `&lt;`, `&gt;`, `&quot;` and `&#39;` in `string` to
their corresponding characters.



**Arguments:**

@param string $string The string to unescape.



**Return:**

@return string Returns the unescaped string.

Example:
```php
<?php
 use function _\unescape;

unescape('fred, barney, &amp; pebbles')
// => 'fred, barney, & pebbles'

```
### upperCase

Converts `string`, as space separated words, to upper case.



**Arguments:**

@param string $string The string to convert.



**Return:**

@return string Returns the upper cased string.s

Example:
```php
<?php
 use function _\upperCase;

upperCase('--foo-bar')
// => 'FOO BAR'

upperCase('fooBar')
// => 'FOO BAR'

upperCase('__foo_bar__')
// => 'FOO BAR'

```
### upperFirst

Converts the first character of `string` to upper case.



**Arguments:**

@param string $string The string to convert.



**Return:**

@return string Returns the converted string.

Example:
```php
<?php
 use function _\upperFirst;

upperFirst('fred')
// => 'Fred'

upperFirst('FRED')
// => 'FRED'

```
### words

Splits `string` into an array of its words.



**Arguments:**

@param string $string The string to inspect.

@param string $pattern The pattern to match words.



**Return:**

@return array Returns the words of `string`.

Example:
```php
<?php
 use function _\words;

words('fred, barney, & pebbles')
// => ['fred', 'barney', 'pebbles']

words('fred, barney, & pebbles', '/[^, ]+/g')
// => ['fred', 'barney', '&', 'pebbles']

```