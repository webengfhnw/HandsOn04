<?php

// vgl. http://cupfullofcode.com/php-clone-and-shallow-vs-deep-copying
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

// Project4.php
$jacob = new Person();
$jacob->setName("Jacob");

$project_one = new Project();
$project_one->setLeadDeveloper($jacob);
$project_two = clone $project_one;

$project_two->getLeadDeveloper()->setName("Matthew");

echo $project_one->getLeadDeveloper()->getName(); // Output: "Matthew" -> clone does not work anymore!!
// we have to implement the magical method "__clone"