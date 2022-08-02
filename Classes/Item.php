<?php 

class Item{

    private $productName;
    private $price;
    private $qty;

    public function __construct($productName, $price, $qty){
        $this->productName = $productName;
        $this->price = $price;
        $this->qty = $qty;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getQty(){
        return $this->qty;
    }

}

?>