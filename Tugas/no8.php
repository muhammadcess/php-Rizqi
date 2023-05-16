<?php
class Circle {
    private $radius;

    public function setRadius($radius) {
        $this->radius = $radius;
    }

    public function getRadius() {
        return $this->radius;
    }

    public function calculateArea() {
        return pi() * $this->radius * $this->radius;
    }

    public static function createCircle($radius) {
        $circle = new Circle();
        $circle->setRadius($radius);
        return $circle;
    }

    public function pi() {
        return 3.14159265359;
    }
}

$circle1 = Circle::createCircle(10);
echo $circle1->calculateArea();
