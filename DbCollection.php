<?php

use Illuminate\Support\Collection;

/**
 * @template TKey of array-key
 * @template TValue of object
 * @extends Collection<TKey, TValue>
 */
class DbCollection extends Collection
{
    protected int $total;

    public function __construct(
        $items = [],
        int $total = 0,
    ) {
        $this->total = $total;
        parent::__construct($items);
    }

    public function getTotal(): int
    {
        return $this->total;
    }
}