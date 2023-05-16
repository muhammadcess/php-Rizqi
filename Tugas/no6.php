<?php
class Rectangle {
    private $length;
    private $width;

    public function setLength($length) {
        $this->length = $length;
    }

    public function setWidth($width) {
        $this->width = $width;
    }

    public function getLength() {
        return $this->length;
    }

    public function getWidth() {
        return $this->width;
    }


    public function calculateArea() {
        return $this->length * $this->width;
    }

    public static function createRectangle($length, $width) {
        $rectangle = new Rectangle;
        $rectangle->setLength($length);
        $rectangle->setWidth($width);
        return $rectangle;
    }
}

$rectangle1 = Rectangle::createRectangle(5, 8);
echo $rectangle1->calculateArea();
