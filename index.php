<?php

class UserRepositoryEmbed
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

$repo = new UserRepositoryEmbed();
$users = $repo->findUsers();

$users->get(0)->updateName('test'); // work
$users[0]->updateName('test'); // work
foreach ($users as $user) {
    $user->updateName('test'); // work
}

// Exactly the same class, but in a different file
$repo = new UserRepository();
$users = $repo->findUsers();

$users->get(0)->updateName('test'); // work
$users[0]->updateName('test'); // DONT WORK
foreach ($users as $user) {
    $user->updateName('test'); // work
}

