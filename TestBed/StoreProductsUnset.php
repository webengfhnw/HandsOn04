<?php
// StoreProductsUnset.php
// This method sets property value to null.
// It is invoked when unset() is called on an undefined property
// see: http://clivern.com/working-with-php-interceptors/
class StoreProductsUnset
{
    private $Name;
    private $Price;

    public function __unset($property) {
        $method_name = "unset{$property}";
        if (method_exists($this, $method_name))
            return $this->$method_name();
    }

    private function unsetPrice() {
        $this->Price = null;
    }

    private function unsetName() {
        $this->Name = null;
    }

}

$product = new StoreProductsUnset;
var_dump($product);
unset($product->Name);
var_dump($product);