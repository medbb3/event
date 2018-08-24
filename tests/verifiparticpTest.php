 <?php 

 use PHPUnit\Framework\TestCase;
 require_once 'src/verifparticip.php';

 class verifTest extends TestCase {
 	public function testverifparticipentvide()
 	{
           $result= verifparticip(10,0);
           $this->expectOutputString("Salle est vide");


 	}
 	public function testverifparticipentplein()
 	{
           $result= verifparticip(10,11);
           $this->expectOutputString("Impossible la salle est plein");


 	}
 	public function testverifparticipentmax()
 	{
           $result= verifparticip(10,10);
           $this->expectOutputString(" Attention la salle atteind son maximun 10 personne");


 	}


 }