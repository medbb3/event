<?php 

 use PHPUnit\Framework\TestCase;
 require_once 'src/sortie.php';

 class sortieTest extends TestCase {
 	public function testsortie()
 	{
           $result= sortie(3);
           $this->assertEquals(2, $result);
 	}
 }