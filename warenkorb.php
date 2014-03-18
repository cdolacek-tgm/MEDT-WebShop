<html> 
<head> <title> Warenkorb </title>

 </head> 
<!-- warenkorb-->

<body> 
<h1> Warenkorb </h1> 
<?php 

session_start(); 
include "warenkorb_anzeigen" ;


?>

 
<p>
<a href = "warenkorb_bestellen.php?<?php print SID; ?>">Ab zur Kassa! </a> 
</p>


</body> 
</html> 

