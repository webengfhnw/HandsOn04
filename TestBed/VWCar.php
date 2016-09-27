<?php
// VWCar.php
include_once "Car.php";
include_once "Vehicle.php";

class VWCar implements Car, Vehicle
{
    private $model;
    private $hasWheels;

    public function getModel()
    {
        return $this->model;
    }

    public function setModel($name)
    {
        $this->model = $name;
    }

    public function getHasWheels()
    {
        // if hasWeeks is true, return "has wheels"
        // else return "no wheels"
        return ($this->hasWheels) ? "has wheels" : "no wheels";
    }

    public function setHasWheels($bool)
    {
        $this->hasWheels = $bool;
    }
}