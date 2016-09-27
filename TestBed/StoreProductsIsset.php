<?php
// phpStoreProductsIsset.php
// This method invoked when client call isset() function on an undefined property.
// see: http://clivern.com/working-with-php-interceptors/
class StoreProductsIsset
{
    private $Name;
    private $Price;
    private $Stock;

    public function __isset($property) {
        $method_name = "get{$property}";
        return ((method_exists($this, $method_name)));
    }

    private function getPrice() {
        return $this->Price;
    }

    private function getName() {
        return $this->Name;
    }
}

$product = new StoreProductsIsset();
var_dump(isset($product->Name)); //return true
var_dump(isset($product->Price)); //return true
var_dump(isset($product->Stock)); //return false