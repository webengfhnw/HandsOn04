<?php
// StoreProductsGet.php
// "This method invoked when client attempt to read undefined method."
// see: http://clivern.com/working-with-php-interceptors/
class StoreProductsGet
{
    public function __get($property)
    {
        $method_name = "get{$property}";
        if (method_exists($this, $method_name))
            return $this->$method_name();
    }

    private function getPrice()
    {
        return "25$";
    }

    private function getName()
    {
        return "camera";
    }
}

$product = new StoreProductsGet();
print $product->Price;
print $product->Name;