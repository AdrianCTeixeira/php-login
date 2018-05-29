<?php 
	
	if(!defined('__CONFIG__')){
		exit('Nao existe um arquivo de config');
	}

	//incluir o db.php
	include_once "classes/DB.php";

	$con = DB::getConnection();
 ?>