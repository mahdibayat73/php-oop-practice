<?php 

class Car {
    public $color;
    public $brand;

    public function __construct($color, $brand) {
        $this->color = $color;
        $this->brand = $brand;
    }

    public function drive() {
        echo "Driving a $this->color $this->brand";
    }
}

$car1 = new Car("red", "BMW");
$car1->drive();