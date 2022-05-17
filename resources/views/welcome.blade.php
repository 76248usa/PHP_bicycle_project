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

//methods

function chain_length(){
  $chain_stay = 13;
  $teeth_front_chainring = 16;
  $teeth_rear = 10;
  $length = 2 * $chain_stay + $teeth_front_chainring/4 + 
  $teeth_rear/4 + 1;

 return "The bike chain is the most vital part in propelling a bike.
  It needs to be of the correct length. The length of this bicycle's chain
  is " . $length . " inches";
  }

function move(){
$distance = 33;
$timeVar = 3;

//Error handling
if($timeVar < 1) {
    throw new \Exception('Invalid time provided');
}

return "The bicycle moves at a speed of " .
$distance / $timeVar . " miles per hour.";
}

function gearsSwitch(){
$distance = 33;
$timeVar = 3;
$speed = $distance/$timeVar;

if ($speed > "10") {
  echo "Switch to third gear, you are going fast!";
} else {
  echo "Stay in a lower gear!";
}
}

function average_acceleration(){
$firstSpeed = 1;
$endSpeed = 33;
$ave_speed = $endSpeed - $firstSpeed;
$timeElapsed = 2;

//Error handling
if($timeElapsed < 1) {
    throw new \Exception('Time elapsed can not be less than 1');
}

$average_acceleration = $ave_speed/$timeElapsed;
return "The average acceleration during your current
trip was ".$average_acceleration." miles per hour.";
}

function calories_burned_during_bikeride(){
//calories = T * 60 * MET * 3.5 * W / 200

$bikeTime = 2;
$MET = 7.5;
$weight = 126;
$calories = $bikeTime * 60 * $MET * 3.5 * $weight / 200;
return "Great job! You burned ".$calories. " calories. <b>You deserve a
burger!</b>";

}

}

//Instantiate the class

$fiets = new Bicycle("Santa Cruz", "red", "one","one","two","two","three" );

echo "The brand name of the bike is ".$fiets->get_name().".";
echo "<br>";
echo "It is a bright " . $fiets->get_color() . " color.";
echo "<br>";
echo "It consists of ".$fiets->get_frameAmount(). " sturdy frame.";
echo "<br>";
echo "It has ".$fiets->get_handlesAmount()." solid, curved handlebar.";
echo "<br>";
echo "The bike has ".$fiets->get_wheelsAmount(). " wheels, as expected.";
echo "<br>";
echo "It has ".$fiets->get_pedalsAmount(). " clipless pedals.";
echo "<br>";
echo "It is an all-terrain bike with ".$fiets->get_gearsAmount(). " gears.";
echo "<br>";
echo $fiets->move();
echo "<br>";
echo $fiets->gearsSwitch();
echo "<br>";
echo $fiets->average_acceleration();
echo "<br>";
echo $fiets->chain_length();
echo "<br>";
echo $fiets->calories_burned_during_bikeride();

?>


      
                

               
                    
           
    
