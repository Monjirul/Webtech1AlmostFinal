<?php
$array1=array();
$array2=array();
$array2[0]="Name Of Emergency Contact";
$array2[1]="Country Of Emergency Contact";

$file = "./Info.txt";
$test1=file_get_contents($file);
$lines = explode ("\n",$test1);

//foreach($lines as $newline)
//{
	//echo '<b>' . $newline .'</b><br>';
//}
foreach ($lines as $line_num => $file) {
    $array1{$line_num} = htmlspecialchars($file) ;
//	 echo "array1{$line_num}</b> : " . htmlspecialchars($lines) . "<br />\n";
}
$a1size=sizeof($array1);

for($i=0;$i<$a1size;$i++)
{
	echo $array1[$i]."<br>";
	
}
?>