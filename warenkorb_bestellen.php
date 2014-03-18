<html> 
<head> <title> Kassa </title>

 </head> 
<!-- kassa-->

<body> 
<h1> Kassa </h1> 

<form type = "POST" action ="warenkorb_bestellen.php">

<p> 
<?php 
session_start(); 

include "warenkorb_anzeigen"; 
echo "</p><br>Bitte Lieferdaten angeben<br><br>"; 

if (isset($_POST['bestellen'])) { 
	$email = strip_tags($_POST['email']); 
	$name = strip_tags($_POST['name']); 
	$str = strip_tags($_POST['str']); 
	$plz = strip_tags($_POST['plz']); 
	$ort = strip_tags($_POST['ort']); 
} 
?> 

Email Adresse<br> 
<input type = "text" name = "email" /> <br>

Name<br> 
<input type = "text" name = "name" /> <br>

Strasse<br> 
<input type = "text" name = "str" /> <br>

Plz<br> 
<input type = "text" name = "plz" /> <br>

Ort<br> 
<input type = "text" name = "ort" /> <br>

<input type = "submit" name = "ok" /> 

</form>


</body> 
</html> 

