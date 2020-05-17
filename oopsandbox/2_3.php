<?php

// Define a class
class User {
    // Properties (attributes)
    public $name;

    // Methods (functions)
    public function sayHello()
    {
//        return 'Hello';
        return $this->name . ' Says Hello';
    }
}


// Instantiate a user object from the user class
$user1 = new User();

$user1->name = 'Fikar';

echo $user1->name;
echo '<br>';
echo $user1->sayHello();

echo '<br>';

// Create a new user
$user2 = new User();

$user2->name = 'Febrina';

echo $user2->name;
echo '<br>';
echo $user2->sayHello();
