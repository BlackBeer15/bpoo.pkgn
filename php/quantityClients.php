<?php 
	$file = __DIR__.'/intClients.txt';
	$intClients = file_get_contents($file);

	$intClients = intval($intClients);

	$intClients++;
	
	file_put_contents($file, $intClients);
?>