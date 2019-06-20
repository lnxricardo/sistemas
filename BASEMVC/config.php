<?php 
require 'environment.php';
global $db;
$config = [];

if(ENVIRONMENT == "development"){
	define("BASE_URL", "http://portal.solus/");	
	$config['dbname'] = 'mvc';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'ricardo';
	$config['dbpass'] = '123';


}else{	
	$config['dbname'] = 'mvc';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'ricardo';
	$config['dbpass'] = '123';
}



try {

	$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
} catch (PDOException $e) {
	echo "Erro: ".$e->getMessage();
	exit;
}


 ?>