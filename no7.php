<?php
class Person {
    private $name;
    private $age;

    public function setName($name) {
        $this->name = $name;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function getInfo() {
        return "Name: " . $this->name . ", Age: " . $this->age;
    }

    public static function createPerson($name, $age) {
        $person = new Person();
        $person->setName($name);
        $person->setAge($age);
        return $person;
    }
}

$person1 = Person::createPerson('Sarah', 25);
echo $person1->getInfo();
