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

    // SET MANUFACTURER
    public function setManufacturer($manufacturer){
        $this->manufacturer = $manufacturer;
    }

    // GET MANUFACTURER
    public function getManufacturer(){
        return $this->manufacturer;
    }

    // SET NUMBER OF SEATS
    public function setNumSeats($numSeats){
        $this->numSeats = $numSeats;
    }

    // GET NUMBER OF SEATS
    public function getNumSeats(){
        return $this->numSeats;
    }

    // SET NUMBER OF PEDALS
    public function setNumPedals($numPedals){
        $this->numPedals = $numPedals;
    }

    // GET NUMBER OF PEDALS
    public function getNumPedals(){
        return $this->NumPedals;
    }

    // SET COLOR
    public function setColor($color){
        $this->color = $color;
    }

    // GET COLOR
    public function getcolor(){
        return $this->color;
    }

    // SET FRAME SIZE
    public function setFrameSize($frameSize){
        $this->frameSize = $frameSize;
    }

    // GET FRAME SIZE
    public function getFrameSize(){
        return $this->frameSize;
    }

    // SET NUMBER OF GEARS
    public function setNumGears($numGears){
        $this->numGears = $numGears;
    }

    // GET NUMBER OF GEARS
    public function getNumGears(){
        return $this->numGears;
    }

    // SET MODEL YEAR
    public function setModelYear($modelYear){
        $this->modelYear = $modelYear;
    }

    // GET MODEL YEAR
    public function getmodelYear(){
        return $this->modelYear;
    }

    // DESCRIBE BICYCLE
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

echo 'I am a ' . $myBike->getManufacturer() . ' bicycle with ' . $myBike->getNumGears() . 'gears. <br><br>';

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

echo 'I am ' . $newBike->getManufacturer() . '  a bicycle with ' . $newBike->getNumGears() . 'gears. <br><br>';