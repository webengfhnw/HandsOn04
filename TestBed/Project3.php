<?php
// vgl. http://cupfullofcode.com/php-clone-and-shallow-vs-deep-copying
// Project3.php
class Person {

    protected $name;

    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    public function getName() {
        return $this->name;
    }

}

class Project {

    protected $leadDeveloper;

    public function setLeadDeveloper(Person $developer) {
        $this->leadDeveloper = $developer;

        return $this;
    }

    public function getLeadDeveloper() {
        return $this->leadDeveloper;
    }

}

$jacob = new Person();
$jacob->setName("Jacob");

$project_one = new Project();
$project_one->setLeadDeveloper($jacob);
$project_two = clone $project_one;

$matthew = new Person();
$matthew->setName("Matthew");
$project_two->setLeadDeveloper($matthew);

echo $project_one->getLeadDeveloper()->getName(); // Output: "Jacob"
echo "<br>";
echo $project_two->getLeadDeveloper()->getName(); // Output: "Matthew"