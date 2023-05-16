<?php
class Car {
    private $brand;
    private $year;

    public function setBrand($brand) {
        $this->brand = $brand;
    }

    public function setYear($year) {
        $this->year = $year;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function getYear() {
        return $this->year;
    }

    public function getInfo() {
        return "Brand: " . $this->brand . ", Year: " . $this->year;
    }

    public static function createCar($brand, $year) {
        $car = new Car();
        $car->setBrand($brand);
        $car->setYear($year);
        return $car;
    }
}

$car1 = Car::createCar('Toyota', 2020);
echo $car1->getInfo();
