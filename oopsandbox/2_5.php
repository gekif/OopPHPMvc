<?php

class User
{
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    // __get Magic Method
    public function __get($name)
    {
        if (property_exists($this, $name)) {
            return $this->$name;
        }
    }

    // __set Magic Method
    public function __set($name, $value)
    {
        if (property_exists($this, $name)) {
            $this->$name = $value;
        }
    }
}


$user1 = new User('John', 20);

//$user1->name = 'Fikar';

//echo $user1->name;

//echo $user1->getName();

//$user1->setName('Fikar');
//echo $user1->getName();

//echo $user1->__get('name');
//echo '<br>';
//echo $user1->__get('age');

$user1->__set('name', 'Fikar');
$user1->__set('age', 30);

echo $user1->__get('name');
echo '<br>';
echo $user1->__get('age');
