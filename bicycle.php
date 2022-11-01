<?php
class Bicycle{

    private $manufacturer = 'Trek';
    private $numWheels = 2;
    private $color = 'black';
    private $numSeats = 1;
    private $numPedals = 2;
    private $frameSize = 18;
    private $numGears = 18;
    private $modelYear = 2022;

    public function setManufacturer($manufacturer){
        $this->manufacturer = $manufacturer;
    }

    public function getManufacturer(){
        return $this->manufacturer;
    }

    public function setNumSeats($numSeats){
        $this->numSeats = $numSeats;
    }

    public function getNumSeats(){
        return $this->numSeats;
    }

    public function setNumPedals($numPedals){
        $this->numPedals = $numPedals;
    }

    public function getNumPedals(){
        return $this->NumPedals;
    }

    public function setColor($color){
        $this->color = $color;
    }

    public function getcolor(){
        return $this->color;
    }

    public function setFrameSize($frameSize){
        $this->frameSize = $frameSize;
    }

    public function getFrameSize(){
        return $this->frameSize;
    }

    public function setNumGears($numGears){
        $this->numGears = $numGears;
    }

    public function getNumGears(){
        return $this->numGears;
    }

    public function setModelYear($modelYear){
        $this->modelYear = $modelYear;
    }

    public function getmodelYear(){
        return $this->modelYear;
    }

    public function describe(){
        return "Hello, I am a " . $this->manufacturer . " bicycle." .
            " I have " . $this->numWheels . " wheels." . 
            " I have " . $this->numSeats . " seat(s)." .
            " I have " . $this->numPedals . " pedals." .
            " My frame color is " . $this->color . "." .
            " My frame size is " . $this->frameSize . " inches." . 
            " I have " . $this->numGears . " gears." .
            " I was built in " . $this->modelYear . ".<br><br>";
    }
}

echo "-- BICYCLE # 1 --" . "<br><br>";
$myBike = new Bicycle();
echo $myBike->describe();

echo "-- BICYCLE # 2 --" . "<br><br>";
$newBike = new Bicycle();
$newBike->setManufacturer('Cannondale');
$newBike->setNumSeats(2);
$newBike->setNumPedals(4);
$newBike->setColor('yellow');
$newBike->setFrameSize(20); 
$newBike->setNumGears(24);
$newBike->setModelYear(1974);
echo $newBike->describe();