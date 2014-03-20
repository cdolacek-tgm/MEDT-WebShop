<head>
<title>bestellstatus</title>
</head>
<body>
<form name="bestellstatus" method="POST" action="bestellstatus.php">

<?php

	session_start();
	
		if(isset($_POST['speichern'])){
			
			
				
				$connection=mysql_connect('localhost', 'root', '');
				$query='INSERT INTO bestellung VALUES("'
					. $_SESSION['bestellstatus'] . '")';
				
					
				$result=db_query($query,$connection);
	
	}

	function db_query($select, $connection) {
		$error = false;
		$result = mysql_query($select, $connection) or $error = true;
	
		if($error){
		$_SESSION['error'] .= 'MySQL-ERROR-QUERY: '.mysql_error().'<br>';
		}
	
		return $result;
	}


$connection=mysql_connect('localhost', 'root', '');

$data='SELECT bestellID,status FROM bestellung';

$result=mysql_query($data,$connection);

while($row=mysql_fetch_object($result)){
?>


<table border='1'>
<tr>
	<td>Bestell Nummer</td>
	<td>Bestellstatus</td>
	
</tr>

<tr>
 <td> <?php echo $row -> bestellID; ?> </td>
 <td> <select name="Status" size="3">
      <option>In Bearbeitung</option>
      <option>Teilweise abgeschlossen</option>
      <option>Komplett abgeschlossen</option>
      <option>Zur Lieferung bereit</option>
      <option>Ausgeliefert</option>
      <option>Storniert</option>
      <option>Abgeschlosen</option>
    </select>
</td>
</tr>

</table>

<input type="submit" name="speichern" value="Speichern">	

</form>
</body>
</html>
