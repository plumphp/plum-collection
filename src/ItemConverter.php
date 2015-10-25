<?php

namespace Plum\PlumCollection;

use Cocur\Collection\CollectionInterface;
use Cocur\Collection\Item;
use Plum\Plum\Converter\ConverterInterface;

/**
 * ItemConverter.
 *
 * @author    Florian Eckerstorfer <florian@eckerstorfer.co>
 * @copyright 2015 Florian Eckerstorfer
 */
class ItemConverter implements ConverterInterface
{
    /**
     * @var CollectionInterface
     */
    protected $collection;

    /**
     * @param CollectionInterface $collection
     *
     * @codeCoverageIgnore
     */
    public function __construct(CollectionInterface $collection)
    {
        $this->collection = $collection;
    }

    /**
     * @param mixed $item
     *
     * @return Item
     */
    public function convert($item)
    {
        $item = Item::create($item);
        $this->collection->add($item);

        return $item;
    }
}
