<?php
class Student {
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

    public static function createStudent($name, $age) {
        $student = new Student;
        $student->setName($name);
        $student->setAge($age);
        return $student;
    }
}
$student1 = Student::createStudent('John', 20);
echo $student1->getName(); // Output: "John"
echo $student1->getAge(); // Output: "20"

