<?php
require_once 'Duck.php';
require_once 'Flyable.php';
class Mallard extends Duck implements Flyable{

    public function quack()
    {
        echo "Quack\n";
    }

    public function fly()
    {
        echo "fly\n";
    }
}
?>
