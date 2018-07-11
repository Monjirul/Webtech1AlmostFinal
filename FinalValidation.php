
<!DOCTYPE HTML>

<html>
	<head>
		<title>Login form</title>
	</head>
	
	<body>
	
	<?php
	session_start();

	$s1=0;
	$s2=0;
	$s3=0;
	
// Set session variables
$s3v=array($_SESSION["Amount"],$_SESSION["Pay_Date"],$_SESSION["Rec_No"] );
$s2v=array($_SESSION["Ema_name"],$_SESSION["Ema_country"],
$_SESSION["Dist"],$_SESSION["PS"],$_SESSION["PO"],$_SESSION["Ema_Mbl_No"] ,$_SESSION["Relate"]);

$_SESSION['Stage3']=$s3v;
$_SESSION['Stage2']=$s2v;

?>

<?php

for($i=0;$i<41;$i++)
{
		 if(isset($_SESSION['Stage1'][$i])){
			 if($_SESSION['Stage1'][$i]=="")
			 {
      if($i==4||$i==6||$i==15||$i==17||$i==20||$i==22||$i==24||$i==29||$i==39){
		  
	       }
	else
	{
$s1++;
	}
			 }
else{}
}
}
for($i=0;$i<7;$i++)
{
		 if(isset($_SESSION['Stage2'][$i])){
			 if($_SESSION['Stage2'][$i]=="")
			 {
		 $s2++;
			 }
			 else{
				 
			 }
		 }
	else
	{
	}
}

for($i=0;$i<3;$i++)
{
		 if(isset($_SESSION['Stage3'][$i])){
			 if($_SESSION['Stage3'][$i]=="")
			 {
		 $s3++;
			 }
			 else{}
		 }
	else
	{
	}
}

$Page1="Stage1.php";
$Page2="Stage2.php";
$Page3="Stage3.php";
if($s1>0||$s2>0||$s3>0)
{
	echo "$s1 Missing Information in"."<a href='$Page1'>Page1</a>"."<br>";
	echo "$s2 Missing Information in"."<a href='$Page2'>Page2</a>"."<br>";
	echo "$s3 Missing Information in"."<a href='$Page3'>Page3</a>"."<br>";
}
else
{
	echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';
	header("location:ShowInfo.php");
}

     $Review="ShowInfo.php";
	echo "<br>"."<br>"."Review Summary"."<a href='$Review'>Go</a>"."<br>";

//echo '<pre>';
//var_dump($_SESSION);
//echo '</pre>';
 //echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';
?>
				
	</body>
</html>

