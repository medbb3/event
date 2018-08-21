<?php 

declare(strict_types=1);

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

die;
echo "<pre>";
$a =1;
$b=2;
function add(int $a , int $b) : int {
	/*    global $a; $b ;   annule le passage par reference	*/
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