<?php

namespace Plum\PlumCollection;

use Cocur\Collection\ArrayItem;
use Cocur\Collection\CollectionInterface;
use Plum\Plum\Converter\ConverterInterface;
use RuntimeException;

/**
 * ArrayItemConverter
 *
 * @package   Plum\PlumCollection
 * @author    Florian Eckerstorfer <florian@eckerstorfer.co>
 * @copyright 2015 Florian Eckerstorfer
 */
class ArrayItemConverter implements ConverterInterface
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
     * @return ArrayItem
     *
     * @throws RuntimeException if the given item is not an array
     */
    public function convert($item)
    {
        if (!is_array($item)) {
            throw new RuntimeException('The given item must be an array.');
        }
        $item = ArrayItem::createFromArray($item);
        $this->collection->add($item);

        return $item;
    }
}
