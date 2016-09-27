<?php
// AbstractClass.php
abstract class AbstractClass
{
    // Force Extending class to define this method
    public function printOut()
    {
        print $this->getValue() . "\n";
    }

    abstract protected function getValue();

    // Common method

    abstract protected function prefixValue($prefix);
}

class ConcreteClass extends AbstractClass
{
    public function prefixValue($prefix)
    {
        return "{$prefix}ConcreteClass";
    }

    protected function getValue()
    {
        return "ConcreteClass";
    }
}

$class1 = new ConcreteClass;
$class1->printOut();
echo $class1->prefixValue('FOO_') . "\n";