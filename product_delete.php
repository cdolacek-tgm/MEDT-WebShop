<?php

if(!$db = mysql_connect("adress", "user", "password", "webshop");)
{
  exit("Verbindungsfehler: ".mysqli_connect_error());
}

$prod = $_POST['id'];

$sql = "DELETE * from products WHERE id = '".$prod."'";

$result = mysql_query($sql, $db);

if (!$result) {
    echo "DB Fehler, konnte die Datenbank nicht abfragen\n";
    echo 'MySQL Error: ' . mysql_error();
    exit;
}

?>
