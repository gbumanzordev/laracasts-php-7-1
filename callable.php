<?php
function trigger(callable $callback)
{
    $callback();
}

trigger(function () {
});

function dumpAll(iterable $items)
{
    foreach ($items as $item)
    {
        var_dump($item);
    }
}

class Collection implements IteratorAggregate {

    protected $items;

    public function __construct($items)
    {
        $this->items = $items;
    }

    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->items);
    }
}

$collection = new Collection(['one', 'two', 'three']);
dumpAll($collection);