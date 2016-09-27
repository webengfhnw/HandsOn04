<?php
// vgl. http://cupfullofcode.com/php-clone-and-shallow-vs-deep-copying
// Project1.php
class Project {

    protected $description;

    public function setDescription($description) {
        $this->description = $description;

        return $this;
    }

    public function getDescription() {
        return $this->description;
    }

}

$project_one = new Project();
$project_one->setDescription("This is my first test project");
$project_two = $project_one;
$project_two->setDescription("A new description for my copied project");
echo $project_one->getDescription();