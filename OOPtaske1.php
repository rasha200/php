<?php
class car{
public $make;
private $model;
protected $VIN;

function __construct($make, $model, $VIN){
    $this->make = $make;
    $this->model = $model;
    $this->VIN = $VIN;
}

function __destruct(){
    echo "the car object is destroyed";
}

function setmake($make){
    $this->make = $make;
}

function setmodel($model){
    $this->model = $model;
}

function setVIN($VIN){
    $this->VIN = $VIN;
}

function getmake(){
   return $this->make ;
}

function getmodel(){
    return $this->model ;
}

function getVIN(){
    return $this->VIN ;
}



function getDetails(){
    $details = "make: {$this->make}, model: {$this->model}, VIN: {$this->VIN}";
    return $details;
    
}

function __toString() {
    return $this->getDetails();
}
}


$Mycar = new car("Toyota", "Corolla", "VIN1234567890");
echo $Mycar->getmake();
echo "<br>";
echo $Mycar->getmodel();
echo "<br>";
echo $Mycar->getVIN();
echo "<br>";
echo $Mycar->getDetails();
echo "<br>";



$Mycar->setmake("Ford");
$Mycar->setmodel("Mustang");
$Mycar->setVIN("VIN1122334455");


echo $Mycar->getmake();
echo "<br>";
echo $Mycar->getmodel();
echo "<br>";
echo $Mycar->getVIN();
echo "<br>";








class Inventory{
 public $cars = [];

 function addcars(car $car){
   
    $this->cars[]=$car;
 }

 function removecar($VIN){
    foreach($this->cars as $index=>$y){
        if($y->getVIN() == $VIN){
            unset($this->cars[$index]);
            return;
        }
    }
 }


function list(){
    foreach($this->cars as $y){
        echo $y;
    }
}

}

$inventory = new Inventory();
$car1 = new car( "Honda", "Accord", "1HGCM82633A123456");
$car2 = new car("Toyota", "Camry", "1HGCM82633A654321");

$inventory->addcars($car1);
$inventory->addcars($car2);
echo "<br>";
echo "<br>";
$inventory->list();

$inventory->removecar("1HGCM82633A123456");
echo "<br>";
echo "<br>";
$inventory->list();
echo "<br>";
echo "<br>";


?>