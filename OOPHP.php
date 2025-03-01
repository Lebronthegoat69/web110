<?php

// Define a class with a constructor and a method
class Car {
    private $brand;
    private $model;
    // Constructor
    public function __construct($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
    }
    // Method to display car details
    public function getCarInfo() {
        return "Car: " . $this->brand . " " . $this->model;
    }
}
// Create an object of the Car class
$myCar = new Car("Toyota", "Camry");
// Output the car information
echo $myCar->getCarInfo();
?>
