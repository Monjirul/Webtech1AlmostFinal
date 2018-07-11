
<!DOCTYPE HTML>

<html>
	<head>
		<title>Login form</title>
	</head>
	
	<body>
	
	<?php
	
if (!empty($_POST["Pay_Type"])) {
    //echo "Yes, name is set";   
    $Pay_Type=$_POST["Pay_Type"];	
}

if (!empty($_POST["Skip_Pay"])) {
    //echo "Yes, name is set";   
    $Skip_Pay=$_POST["Skip_Pay"];	
}
else{  
    $Skip_Pay="";
}

if (!empty($_POST["Currency"])) {
    //echo "Yes, name is set";   
    $Currency=$_POST["Currency"];	
}else{  
    $Currency="";
}



if (!empty($_POST["Pay_Date"])) {
    //echo "Yes, name is set";   
    $Pay_Date=$_POST["Pay_Date"];	
}else{  
    $Pay_Date="";
}

if (!empty($_POST["Rec_No"])) {
    //echo "Yes, name is set";   
    $Rec_No=$_POST["Rec_No"];	
}else{  
    $Rec_No="";
}

if (!empty($_POST["PS"])) {
    //echo "Yes, name is set";   
    $PS=$_POST["PS"];	
}else{  
    $PS="";
}

if (!empty($_POST["PO"])) {
    //echo "Yes, name is set";   
    $PO=$_POST["PO"];	
}else{  
    $PO="";
}


if (!empty($_POST["Amount"])) {
    //echo "Yes, name is set";   
    $Amount=$_POST["Amount"];	
}else{  
    $Amount="";
}

// Set session variables
session_start();
$_SESSION["Pay_Type"] = $Pay_Type;
//$_SESSION["Skip_Pay"] = $Skip_Pay;
$_SESSION["Currency"] = $Currency;
$_SESSION["Pay_Date"] = $Pay_Date;
$_SESSION["Rec_No"] = $Rec_No;
$_SESSION["PS"] = $PS;
$_SESSION["PO"] = $PO;
$_SESSION["Amount"] = $Amount;
 header("location:FinalValidation.php");

//echo "Session variables are set.";
//$link_address="Stage3.php";
//echo "<a href='$link_address'>Back</a>";
?>	
			
	
	</body>
</html>

