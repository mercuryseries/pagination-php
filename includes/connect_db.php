<?php 
	try{	
		$db = new PDO('mysql:host=localhost;dbname=tuto', 'root', '');
	} catch(PDOException $e){
		die('Erreur: '.$e->getMessage());
	}
?>