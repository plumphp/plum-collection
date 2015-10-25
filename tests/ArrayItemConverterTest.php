<?php

namespace Plum\PlumCollection;

use Mockery;

/**
 * ArrayItemConverterTest.
 *
 * @author    Florian Eckerstorfer <florian@eckerstorfer.co>
 * @copyright 2015 Florian Eckerstorfer
 * @group     unit
 */
class ArrayItemConverterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ArrayItemConverter
     */
    protected $converter;

    /**
     * @var \Cocur\Collection\CollectionInterface|\Mockery\MockInterface
     */
    protected $collection;

    public function setUp()
    {
        $this->collection = Mockery::mock('Cocur\Collection\CollectionInterface');
        $this->converter  = new ArrayItemConverter($this->collection);
    }

    /**
     * @test
     * @covers Plum\PlumCollection\ArrayItemConverter::convert()
     */
    public function convertConvertsArrayToItem()
    {
        $this->collection->shouldReceive('add')->once();
        $item = $this->converter->convert(['foo' => 'bar']);

        $this->assertInstanceOf('Cocur\Collection\ArrayItem', $item);
    }

    /**
     * @test
     * @covers                   Plum\PlumCollection\ArrayItemConverter::convert()
     * @expectedException        \RuntimeException
     * @expectedExceptionMessage must be an array
     */
    public function convertThrowsExceptionIfItemIsNotAnArray()
    {
        $this->converter->convert('foobar');
    }
}
