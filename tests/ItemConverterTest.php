<?php

namespace Plum\PlumCollection;

use Mockery;

/**
 * ItemConverterTest
 *
 * @package   Plum\PlumCollection
 * @author    Florian Eckerstorfer <florian@eckerstorfer.co>
 * @copyright 2015 Florian Eckerstorfer
 * @group     unit
 */
class ItemConverterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ItemConverter
     */
    protected $converter;

    /**
     * @var \Cocur\Collection\CollectionInterface|\Mockery\MockInterface
     */
    protected $collection;

    public function setUp()
    {
        $this->collection = Mockery::mock('Cocur\Collection\CollectionInterface');
        $this->converter  = new ItemConverter($this->collection);
    }

    /**
     * @test
     * @covers Plum\PlumCollection\ItemConverter::convert()
     */
    public function convertConvertsArrayToItem()
    {
        $this->collection->shouldReceive('add')->once();
        $item = $this->converter->convert('foo');

        $this->assertInstanceOf('Cocur\Collection\Item', $item);
    }
}
