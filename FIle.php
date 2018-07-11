<?php

session_start();

?>
<?php



$my_file = 'Info.txt';
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);

$MainString=$_SESSION["ApName"]."\r\n".$_SESSION["Sname"].$_SESSION["Gname"]."\r\n".$_SESSION["FatherName"]."\r\n".$_SESSION["Mname"]."\r\n";

fwrite($handle,$MainString);

header("location:FileRead.php");

?>