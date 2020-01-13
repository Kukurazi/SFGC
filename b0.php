<meta charset="utf-8"> 
<?php

error_reporting( E_ERROR );   		

if (isset($_POST['name1']))			{$name1			= $_POST['name1'];		if ($name1 == '')	{unset($name1);}}
if (isset($_POST['email1']))		{$email1		= $_POST['email1'];		if ($email1 == '')	{unset($email1);}}
if (isset($_POST['sab']))			{$sab			= $_POST['sab'];		if ($sab == '')		{unset($sab);}}

if (isset($name1) ) {
$name1=stripslashes($name1);
$name1=htmlspecialchars($name1);
}
if (isset($email1) ) {
$email1=stripslashes($email1);
$email1=htmlspecialchars($email1);
}


$address="SamLibry@yandex.ru";
 
$note_text="Имя : $name1 \r\n Email : $email1 \r\n ;

if (isset($name1)  &&  isset ($sab) ) {
mail($address,$note_text,"Content-type:text/plain; windows-1251"); 

echo "<p style='color:#009900;'>Thank You for your subscription!</p>";
}

?>