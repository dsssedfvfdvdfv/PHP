<?php 
class Car{
    private $make;
    private $model;
    private $year;

    public function __construct($make = "Unknown", $model = "Unknown", $year = 0) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }
  
    public function setMake($make) {
        $this->make = $make;
    }
    public function getMake() {
        return $this->make;
    }
    public function setModel($model) {
        $this->model = $model;
    }
    public function getModel() {
        return $this->model;
    }
    public function setYear($year){
        $this->year=$year;
    }
    public function getYear(){
        return $this->year;
    }
    public function printCarInfo(){
        echo "Thông tin xe: ".$this->year." " .$this->make . " " .$this->model. "<br>";
    }
}
$myCar = new Car();
$myCar->setMake('BMW');
$myCar->setModel('I8');
$myCar->setYear(2022);
echo "Thông tin xe: ".$myCar->getYear()." " .$myCar->getMake(). " " .$myCar->getModel(). "<br>";


class ElectricCar extends Car{
    private $battery;

    public function __construct($make="Unknow",$model="UnKnow",$year=0,$battery=0) {
       parent::__construct($make,$model,$year);
        $this->battery=$battery;
    }

    public function setBattery($battery){
        $this->battery=$battery;
    }
    public function getBattery(){
        return $this->battery;
    }
    public function printBatteryInfo() {
        echo "Dung lượng pin: " . $this->battery . " kWh<br>";
    }
}
$myElectricCar=new ElectricCar("Tesla","Model 5",2024,100);
$myElectricCar->printCarInfo();
$myElectricCar->printBatteryInfo();

?>