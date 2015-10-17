<h1 align="center">
    <img src="http://cdn.florian.ec/plum-logo.svg" alt="Plum" width="300">
</h1>

> PlumCollection integrates [Cocur\Collection](https://github.com/cocur/collection) into Plum. Plum is a data
processing pipeline for PHP.

[![Latest Version](https://img.shields.io/packagist/v/plumphp/plum-collection.svg)](https://packagist.org/packages/plumphp/plum-collection)
[![Build Status](https://img.shields.io/travis/plumphp/plum-collection.svg?style=flat)](https://travis-ci.org/plumphp/plum-collection)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/g/plumphp/plum-collection.svg?style=flat)](https://scrutinizer-ci.com/g/plumphp/plum-collection/?branch=master)
[![Code Coverage](https://img.shields.io/scrutinizer/coverage/g/plumphp/plum-collection.svg?style=flat)](https://scrutinizer-ci.com/g/plumphp/plum-collection/?branch=master)

Developed by [Florian Eckerstorfer](https://florian.ec) in Vienna, Europe.


Installation
------------

You can install PlumCollection using [Composer](http://getcomposer.org).

```shell
$ composer require plumphp/plum-collection
```


Usage
-----

Please refer to the [Plum documentation](https://github.com/plumphp/plum/blob/master/docs/index.md) for more
information about using Plum in general.

PlumCollection provides converts to convert items into elements of a collection.

### `ItemConverter`

`Plum\PlumCollection\ItemConverter` converts the given item into an instance of `Cocur\Collection\Item` and adds it to
the collection.

```php
use Plum\PlumCollection\ItemConverter;
use Cocur\Collection\Collection;

$collection = new Collection();
$converter = new ItemConverter($collection);

$converter->convert('foobar'); // -> Cocur\Collection\Item
$collection->count(); // -> 1
```

### `ArrayItemConverter`

`Plum\PlumCollection\ArrayItemConverter` converts the given item into an instance of `Cocur\Collection\ArrayItem` and
adds it to the collection.

```php
use Plum\PlumCollection\ArrayItemConverter;
use Cocur\Collection\Collection;

$collection = new Collection();
$converter = new ArrayItemConverter($collection);

$converter->convert(['foo' => 'bar']); // -> Cocur\Collection\ArrayItem
$collection->count(); // -> 1
```


Change Log
----------

### Version 0.1.1 (17 May 2015)

- Update dependency to Cocur\Collection

### Version 0.1 (28 April 2015)

- Initial release


License
-------

The MIT license applies to plumphp/plum-collection. For the full copyright and license information,
please view the [LICENSE](https://github.com/plumphp/plum-collection/blob/master/LICENSE) file distributed with this
source code.
