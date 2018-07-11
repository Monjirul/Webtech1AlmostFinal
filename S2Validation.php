
<!DOCTYPE HTML>

<html>
	<head>
		<title>Login form</title>
	</head>
	
	<body>
	
	<?php
	
if (!empty($_POST["Office_No"])) {
    //echo "Yes, name is set";   
    $Office_No=$_POST["Office_No"];	
}
else{  
    $Office_No="";
}

if (!empty($_POST["Passport_No"])) {
    //echo "Yes, name is set";   
    $Passport_No=$_POST["Passport_No"];	
}
else{  
    $Passport_No="";
}

if (!empty($_POST["Residence_No"])) {
    //echo "Yes, name is set";   
    $Residence_No=$_POST["Residence_No"];	
}else{  
    $Residence_No="";
}



if (!empty($_POST["Place_of_Issue"])) {
    //echo "Yes, name is set";   
    $Place_of_Issue=$_POST["Place_of_Issue"];	
}else{  
    $Place_of_Issue="";
}

if (!empty($_POST["Mbl_No"])) {
    //echo "Yes, name is set";   
    $Mbl_No=$_POST["Mbl_No"];	
}else{  
    $Mbl_No="";
}

if (!empty($_POST["Is_res"])) {
    //echo "Yes, name is set";   
    $Is_res=$_POST["Is_res"];	
}else{  
    $Is_res="";
}

if (!empty($_POST["Re_Issue"])) {
    //echo "Yes, name is set";   
    $Re_Issue=$_POST["Re_Issue"];	
}else{  
    $Re_Issue="";
}

if (!empty($_POST["Ema_name"])) {
    //echo "Yes, name is set";   
    $Ema_name=$_POST["Ema_name"];	
}else{  
    $Ema_name="";
}

if (!empty($_POST["Ema_country"])) {
    //echo "Yes, name is set";   
    $Ema_country=$_POST["Ema_country"];	
}else{  
    $Ema_country="";
}

if (!empty($_POST["parma"])) {
    //echo "Yes, name is set";   
    $parma=$_POST["parma"];	
}else{  
    $parma="";
}


if (!empty($_POST["present"])) {
    //echo "Yes, name is set";   
    $present=$_POST["present"];	
}else{  
    $present="";
}


if (!empty($_POST["Vill_Add"])) {
    //echo "Yes, name is set";   
    $Vill_Add=$_POST["Vill_Add"];	
}else{  
    $Vill_Add="";
}


if (!empty($_POST["RBS"])) {
    //echo "Yes, name is set";   
    $RBS=$_POST["RBS"];	
}else{  
    $RBS="";
}

if (!empty($_POST["Dist"])) {
    //echo "Yes, name is set";   
    $Dist=$_POST["Dist"];	
}else{  
    $Dist="";
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

if (!empty($_POST["Ema_Mbl_No"])) {
    //echo "Yes, name is set";   
    $Ema_Mbl_No=$_POST["Ema_Mbl_No"];	
}else{  
    $Ema_Mbl_No="";
}


if (!empty($_POST["Relate"])) {
    //echo "Yes, name is set";   
    $Relate=$_POST["Relate"];	
}else{  
    $Relate="";
}



// Set session variables
session_start();
$_SESSION["Office_No"] = $Office_No;
$_SESSION["Passport_No"] = $Passport_No;
$_SESSION["Residence_No"] = $Residence_No;
$_SESSION["Mbl_No"] = $Mbl_No;
$_SESSION["Place_of_Issue"] = $Place_of_Issue;
$_SESSION["Is_res"] = $Is_res;
$_SESSION["Re_Issue"] = $Re_Issue;
$_SESSION["Ema_name"] = $Ema_name;
$_SESSION["Ema_country"] = $Ema_country;
$_SESSION["parma"] = $parma;
$_SESSION["present"] = $present;
$_SESSION["Vill_Add"] = $Vill_Add;
$_SESSION["RBS"] = $RBS;
$_SESSION["Dist"] = $Dist;
$_SESSION["PS"] = $PS;
$_SESSION["PO"] = $PO;
$_SESSION["Ema_Mbl_No"] = $Ema_Mbl_No;
$_SESSION["Relate"] = $Relate;
//echo "Session variables are set.";

//Session Array
$Stage2=array($Relate,$Ema_Mbl_No,$PO,$PS,$Dist,$RBS,$Vill_Add,$present,$present,$parma,$Ema_country,$Ema_name,$Re_Issue,$Is_res,$Place_of_Issue,$Mbl_No,$Residence_No,$Passport_No,$Office_No);
$_SESSION['Stage2']=$Stage2;


$link_address="Stage2.php";
 header("location:Stage3.php");
?>	
			
	
	</body>
</html>

