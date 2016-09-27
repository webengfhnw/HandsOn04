<?php
// DestructorClass.php
class DestructorClass
{
    function __construct()
    {
        print "In constructor\n";
        $this->name = "MyDestructableClass";
    }

    function __destruct()
    {
        print "Destroying " . $this->name . "\n";
    }
}

$obj = new DestructorClass();