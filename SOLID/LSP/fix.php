<?php
interface Drivable {
    public function drive();
}

class MotorVehicle implements Drivable {
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

class Bicycle implements Drivable {
    public function drive() {
        return "Pedaling";
    }
}

// Usage
function testDrive(Drivable $vehicle) {
    echo $vehicle->drive() . "\n";
}

$car = new MotorVehicle();
testDrive($car);

$bicycle = new Bicycle();
testDrive($bicycle);
?>


