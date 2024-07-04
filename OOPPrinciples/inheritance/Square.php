<?php
require_once 'Rectangle.php';
class Square extends Rectangle {
    public function __construct($width) {
        parent::__construct($width, $width);
    }

    public function __toString() {
        return "Square{width=" . $this->width . "}";
    }
}

$square = new Square(4);
echo $square->getArea();
?>
