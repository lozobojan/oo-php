<?php 

class Vehicle{

    // properties
    // access modifier (public, private, protected)
    private $id;
    private $registration;
    public const REG_LENGTH = 7;

    // constructor
    public function __construct($id, $registration){
        $this->id = $id;
        $this->registration = $registration;
    }

    // methods
    // getter
    public function getId(){
        return $this->id;
    }
    public function getRegistration(){
        return $this->registration;
    }

    // setter
    public function setId($id){
        $this->id = $id;
    }
    public function setRegistration($registration){
        if(strlen($registration) != self::REG_LENGTH){
            echo "Wrong format...";
            return;
        }
        $this->registration = $registration;
    }

    public function __destruct(){
        // echo "destructing...";
    }

}

class Car extends Vehicle{

    private $color;

    public function __construct($id, $registration, $color){
        parent::__construct($id, $registration);
        $this->color = $color;
    }

}


// instantiating
// $v = new Vehicle;
// $v->setRegistration("PGAB123");
// $v->setId(1);
// var_dump($v);

// echo "<br/>";

// constructor
// $v2 = new Vehicle(1, "PGAB123");
// var_dump($v2);

// $c1 = new Car(10, "BDCC123", "red");
// var_dump($c1);

// var_dump(Vehicle::REG_LENGTH);

// $v = new Vehicle(1, "");
// $v->setRegistration("PGAB");
// $v->setId(1);
// var_dump($v);

?>