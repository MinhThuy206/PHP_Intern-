<?php
require_once 'Animal.php';
class Cat extends Animal {
    public function quack()
    {
        echo "Meow";
    }
}

$animal = new Cat("May");
$animal->quack();