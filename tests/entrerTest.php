<?php 

 use PHPUnit\Framework\TestCase;
 require_once 'src/entrer.php';

 class entrerTest extends TestCase {
 	public function testentrer()
 	{
           $result= entrer(3);
     
           $this->assertEquals(4, $result);
 	}
 }