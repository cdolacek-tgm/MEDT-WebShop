<?php

require 'vendor/autoload.php';

class ProduktHandler
{
	$link = mysql_connect('localhost', 'root', '');
	//Unter der Vorraussetzung, dass die DB webshop heisst und der root user verw. wird
	
	//Registriert den Benutzer wenn er noch nicht angemeldet ist.
	//Autor: David Boeheim
	function put()
	{
		//David Boeheims arbeit :)
	}

	//Liefert ein Produkt anhand seiner ID zurueck
	//Autor: Daniel Herczeg
	function get()
	{
		mysql_select_db('webshop', $this->link);
		$erg = mysql_query('select * from products limit by 1', $this->link);
		//Bekommt nur das erste Element, muss noch implementiert werden
		
		while($row = mysql_fetch_array($erg))
		{
			echo $row['id']."; ".$row['beschr'];
		}
	}
	
	 // Liefert Produkte anhand deren ID zurueck
	 //Autor: Florian Dienesch
	 function getProdukte{
		$entries = json_decode( file_get_contents( "./produkte.txt" ) );
	
	       	if (isset($_GET["ID"])){
	            echo ($entries[$_GET["ID"]]);
	        }
	
	        foreach($entries[$_GET["ID"]] as $value){
                    echo ($value);
            	}
	}
}

ToroHook::add("404", function() {
	echo "404 - ATOMLOL! Seite nicht gefunden!";
});

Toro::serve(array(
	"/products.php" => "ProduktHandler", //PUT - Registrieren
	"/products/log/show.php" => "ProduktHandler", //GET - Anzeigen
));
?>
