<?php
class Vehicle {
    public function startEngine() {
        return "Engine started";
    }

    public function stopEngine() {
        return "Engine stopped";
    }

    public function drive() {
        return "Driving";
    }
}

class Car extends Vehicle {

}

class Bicycle extends Vehicle {
    public function startEngine() {
        throw new Exception("Bicycles do not have engines");
    }

    public function stopEngine() {
        throw new Exception("Bicycles do not have engines");
    }

    public function drive() {
        return "Pedaling";
    }
}

// Usage
function testDrive(Vehicle $vehicle) {
    echo $vehicle->startEngine() . "\n";
    echo $vehicle->drive() . "\n";
    echo $vehicle->stopEngine() . "\n";
}

$car = new Car();
testDrive($car);

$bicycle = new Bicycle();
testDrive($bicycle);
?>

<!--lớp Bicycle không tuân thủ nguyên tắc Liskov vì phương thức startEngine và stopEngine không áp dụng được cho xe đạp.-->


