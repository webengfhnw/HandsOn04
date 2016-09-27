<?php
// vgl. http://cupfullofcode.com/php-clone-and-shallow-vs-deep-copying
// Project2.php
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
$project_two = clone $project_one;
$project_one->setDescription("New Description for Project one");
echo $project_one->getDescription();
echo "<br>";
echo $project_two->getDescription();