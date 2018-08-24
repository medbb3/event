<?php 


function sessionisset()

{
	if (!isset($_SESSION['participant'])){
		$_SESSION['participant'] =0;
	}
	
}