<?php

class UserRepository
{
    /**
     * @return DbCollection<int, User>
     */
    public function findUsers(): DbCollection
    {
        $items = [new User(), new User(), new User()];
        return new DbCollection($items, count($items));
    }
}