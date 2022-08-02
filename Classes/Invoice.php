<?php 

class Invoice{

    private $customer;
    private $date;
    private $items;
    public const TAX_RATE = 0;

    private $connString = "mysql:host=localhost;dbname=invoices";
    private $pdo;

    public function __construct($customer, $date, $items){
        $this->customer = $customer;
        $this->date = $date;
        $this->items = $items;

        $this->pdo = new PDO($this->connString, "root", "");
    }

    public function getPrice(){
        $sum = 0;
        foreach($this->items as $item){
            $sum += ($item->getPrice() * $item->getQty()) * (1 + self::TAX_RATE / 100);
        }
        return number_format($sum, 2);
    }

    public function save(){
        $date = date('Y-m-d', strtotime($this->date));
        $sql = "INSERT INTO invoice (customer, date) values (:c, :d)";

        return $this->pdo->prepare($sql)->execute([
            'c' => $this->customer,
            'd' => $date
        ]);
    }

}

?>