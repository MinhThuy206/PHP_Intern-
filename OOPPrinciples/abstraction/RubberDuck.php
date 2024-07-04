<?php
require_once 'Duck.php';
require_once 'Flyable.php';
class RubberDuck extends Duck implements Flyable{

    public function quack()
    {
        // TODO: Implement quack() method.
        echo "Squeak\n";
    }

    public function fly()
    {
        echo "Can't fly \n";
    }
}
