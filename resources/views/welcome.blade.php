<?php
class Bicycle {
//variables defined
private $name;
private $color;
public $frameAmount;
public $handlesAmount;
public $wheelsAmount;
public $pedalsAmount;
public $gearsAmount;

//constructor
function __construct($name, $color, $frameAmount, $handlesAmount,
$wheelsAmount, $pedalsAmount, $gearsAmount){
$this->name = $name;
$this->color = $color;
$this->frameAmount = $frameAmount;
$this->handlesAmount = $handlesAmount;
$this->wheelsAmount = $wheelsAmount;
$this->pedalsAmount = $pedalsAmount;
$this->gearsAmount = $gearsAmount;


}

//getter and setter methods

function get_name(){
return $this->name;
}

function get_color(){
return $this->color;
}

function get_frameAmount(){
return $this->frameAmount;
}

function get_handlesAmount(){
return $this->handlesAmount;
}

function get_wheelsAmount(){
return $this->wheelsAmount;
}

function get_pedalsAmount(){
return $this->pedalsAmount;
}

function get_gearsAmount(){
return $this->gearsAmount;
}

static function bike_detail(){

    return self::$wheelsAmount;
}

function move(){
$distance = 33;
$timeVar = 3;

//Error handling
if($timeVar < 1) {
    throw new \Exception('Invalid time provided');
}

return "The bicycle moves at a speed of " .
$distance / $timeVar . "miles per hour";
}

function gearsSwitch(){
$distance = 33;
$timeVar = 3;
$speed = $distance/$timeVar;

if ($speed > "10") {
  echo "Switch to third gear!";
} else {
  echo "Stay in a lower gear!";
}
}

function average_acceleration(){
$firstSpeed = 1;
$endSpeed = 33;
$ave_speed = $endSpeed - $firstSpeed;
$timeElapsed = 0;

//Error handling
if($timeElapsed < 1) {
    throw new \Exception('Time elapsed can not be less than 1');
}

$average_acceleration = $ave_speed/$timeElapsed;
return "Your average acceleration during your current
trip was ".$average_acceleration;
}

function calories_burned_during_bikeride(){
//calories = T * 60 * MET * 3.5 * W / 200

$bikeTime = 2;
$MET = 7.5;
$weight = 126;
$calories = $bikeTime * 60 * $MET * 3.5 * $weight / 200;
return "Great job! You burned ".$calories. " calories. You deserve a
burger!";

}

}

//Instantiate the class

$fiets = new Bicycle("Santa Cruz", "red", "1","2","2","2","3" );
echo $fiets->get_name();
echo "<br>";
echo "It is a bright " . $fiets->get_color() . " color";
echo "<br>";
echo $fiets->get_frameAmount();
echo "<br>";
echo $fiets->get_handlesAmount();
echo "<br>";
echo $fiets->get_wheelsAmount();
echo "<br>";
echo $fiets->get_pedalsAmount();
echo "<br>";
echo $fiets->get_gearsAmount();
echo "<br>";
echo $fiets->move();
echo "<br>";
echo $fiets->gearsSwitch();
echo "<br>";
echo $fiets->average_acceleration();
echo "<br>";
echo $fiets->calories_burned_during_bikeride();

//Class Inheritance


?>


      
                

               
                    
           
    
