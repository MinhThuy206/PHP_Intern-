<?php

require_once 'Mallard.php';
require_once 'RubberDuck.php';
class TestDrive
{
    private $mallard;
    private $rubberDuck;

    public function __construct()
    {
        $this->mallard = new Mallard();
        $this->rubberDuck = new RubberDuck();
    }


    public function getMallard()
    {
        return $this->mallard;
    }

    public function getRubberDuck()
    {
        return $this->rubberDuck;
    }
}

$duck = new TestDrive();
$mallard = $duck->getMallard();
$mallard->fly();

$rubberDuck = $duck->getRubberDuck();
$rubberDuck->fly();
$rubberDuck->swim();

// Tính trừu tượng ẩn đi các thông tin cho người dùng được thể hiện qua từ khóa abstract với class và method hoặc
// qua interface. Một class có thể implements từ nhiều interface nhưng chỉ có thể extends từ 1 class
?>


