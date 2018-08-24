<?php 
declare(strict_types=1);


$integer=5;
switch ($integer) {
	 case 1:
		echo 'vous avez tapé 1';
		break;
	case 2:
		echo 'vous avez tapé 2';
		break;
	case 3:
		echo 'vous avez tapé 3';
		break;
	
	default:
		echo 'je ne conprend pas';
		break;
}


session_start();
$reload=0;
if (!isset($_SESSION['reload'])){
	$_SESSION['reload'] =$reload;
} else {
	$reload=$_SESSION['reload'];
}
$reload++;
echo $reload;
$_SESSION['reload']=$reload;







$mailer = 'service de mail';
$showMyName = function($name) use ($mailer){
	$mailer = 'nouveau mail';
};
$showMyName('mohamed');
echo $mailer,




$letters =['a','b','c'];
$letters = array_map(
	function($lettre) { 
		return strtoupper($lettre);
	}
    , $letters);
echo "<pre>";
var_dump($letters);
echo "<pre>";


function test(){
	echo 'test';
}

$call = function(){
	echo 'test';
};

$call();



function increment(int $a) : int{
/*	$a++;
  return $a;*/
  return ++$a;

}

echo increment(7);

function incriment2(){
	static $a=0;
	echo $a;
	$a++;
}

incriment2();
incriment2();
incriment2();
incriment2();




echo "<pre>";
$a =1;
$b=2;
function add(int $a , int $b) : int {
	    global $a; $b ;  /* annule le passage par reference*/	
	return $a =$a + $b;
}

$c = add ($a,$b);
echo "<pre>";
echo $a;
echo "<pre>";
echo $c;

/* include 'sub.php';   inclure un script */


echo "<pre>";

function printName(string $name) : string {
	return strtoupper($name);
}

$name = printName('mohamed');

var_dump($name);

function sum(int $a,  int $b) : ?int {
  if ($a > 0 && $b >0) {
  	return $a+$b;
  } 
  else { 
  	return null;
  }

}

echo "<pre>";
echo sum(5,3);
echo "<pre>";
echo sum( (int) 2.4,(int) 1.5);
echo "<pre>";


function division(int $a, int $b): ?int  {

	if ($b!=0){
		return ($a/$b);
	} else {
		return null;
	}
}

$res = division(10,0);

echo "<pre>";
if ($res === null) {
	echo " impossible de diviser par 0";
} else {
	echo $res;
}
echo "<pre>";








