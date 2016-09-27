<?php
// StoreProducts.php
// "This method invoked when client attempt to set value to undefined property .
//  This solution used mostly if you declare class property as private
//  and need to pass it’s value to custom filters before set ."
// see: http://clivern.com/working-with-php-interceptors/
class StoreProductsSet
{
    private $Name;
    private $Price;

    public function __set($property, $value)
    {
        $method_name = "set{$property}";
        if (method_exists($this, $method_name))
            return $this->$method_name($value);
    }

    private function setPrice($price)
    {
        $this->Price = $price;
    }

    private function setName($name)
    {
        if (!is_null($name))
            $this->Name = $name;
    }
}

$product = new StoreProductsSet;
$product->Price = "25$";
$product->Name = "Camera";
var_dump($product);