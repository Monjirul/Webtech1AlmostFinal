
<!DOCTYPE HTML>

<html>
	<head>
		<title>Login form</title>
	</head>
	
	<body>
	
	<?php
	
	if (!empty($_POST["Parvill"])) {
    //echo "Yes, name is set";   
    $Parvill=$_POST["Parvill"];	
}
else{  
    $Parvill=" ";
}
	
	
if (!empty($_POST["ApName"])) {
    //echo "Yes, name is set";   
    $ApName=$_POST["ApName"];	
}
else{  
    $ApName="";
}

if (!empty($_POST["Gname"])) {
    //echo "Yes, name is set";   
    $Gname=$_POST["Gname"];	
}
else{  
    $Gname="";
}

if (!empty($_POST["Sname"])) {
    //echo "Yes, name is set";   
    $Sname=$_POST["Sname"];	
}else{  
    $Sname="";
}



if (!empty($_POST["gender"])) {
    //echo "Yes, name is set";   
    $gender=$_POST["gender"];	
}else{  
    $gender="";
}

if (!empty($_POST["Mname"])) {
    //echo "Yes, name is set";   
    $Mname=$_POST["Mname"];	
}else{  
    $Mname="";
}

if (!empty($_POST["FatherName"])) {
    //echo "Yes, name is set";   
    $FatherName=$_POST["FatherName"];	
}else{  
    $FatherName="";
}

//----------------

if (!empty($_POST["dob"])) {
    //echo "Yes, name is set";   
    $dob=$_POST["dob"];	
}
else{  
    $dob="";
}

if (!empty($_POST["AppIn"])) {
    //echo "Yes, name is set";   
    $AppIn=$_POST["AppIn"];	
}
else{  
    $AppIn="";
}

if (!empty($_POST["BidNo"])) {
    //echo "Yes, name is set";   
    $BidNo=$_POST["BidNo"];	
}else{  
    $BidNo="";
}



if (!empty($_POST["Ptype"])) {
    //echo "Yes, name is set";   
    $Ptype=$_POST["Ptype"];	
}else{  
    $Ptype="";
}

if (!empty($_POST["NID_NO"])) {
    //echo "Yes, name is set";   
    $NID_NO=$_POST["NID_NO"];	
}else{  
    $NID_NO="";
}

if (!empty($_POST["DType"])) {
    //echo "Yes, name is set";   
    $DType=$_POST["DType"];	
}else{  
    $DType="";
}

//----------------

if (!empty($_POST["TID_NO"])) {
    //echo "Yes, name is set";   
    $TID_NO=$_POST["TID_NO"];	
}
else{  
    $TID_NO="";
}

if (!empty($_POST["HeightCM"])) {
    //echo "Yes, name is set";   
    $HeightCM=$_POST["HeightCM"];	
}
else{  
    $HeightCM="";
}

if (!empty($_POST["HeightInch"])) {
    //echo "Yes, name is set";   
    $HeightInch=$_POST["HeightInch"];	
}else{  
    $HeightInch="";
}



if (!empty($_POST["Religion"])) {
    //echo "Yes, name is set";   
    $Religion=$_POST["Religion"];	
}else{  
    $Religion="";
}

if (!empty($_POST["Guardian"])) {
    //echo "Yes, name is set";   
    $Guardian=$_POST["Guardian"];	
}else{  
    $Guardian="";
}

if (!empty($_POST["Nationlity"])) {
    //echo "Yes, name is set";   
    $Nationlity=$_POST["Nationlity"];	
}else{  
    $Nationlity="";
}


//----------------

if (!empty($_POST["F_nation"])) {
    //echo "Yes, name is set";   
    $F_nation=$_POST["F_nation"];	
}
else{  
    $F_nation="";
}

if (!empty($_POST["DCiti"])) {
    //echo "Yes, name is set";   
    $DCiti=$_POST["DCiti"];	
}
else{  
    $DCiti="";
}

if (!empty($_POST["Fproff"])) {
    //echo "Yes, name is set";   
    $Fproff=$_POST["Fproff"];	
}else{  
    $Fproff="";
}



if (!empty($_POST["Village"])) {
    //echo "Yes, name is set";   
    $Village=$_POST["Village"];	
}else{  
    $Village="";
}

if (!empty($_POST["Mnation"])) {
    //echo "Yes, name is set";   
    $Mnation=$_POST["Mnation"];	
}else{  
    $Mnation="";
}

if (!empty($_POST["Road"])) {
    //echo "Yes, name is set";   
    $Road=$_POST["Road"];	
}else{  
    $Road="";
}



//----------------

if (!empty($_POST["Mproff"])) {
    //echo "Yes, name is set";   
    $Mproff=$_POST["Mproff"];	
}
else{  
    $Mproff="";
}

if (!empty($_POST["dist1"])) {
    //echo "Yes, name is set";   
    $dist1=$_POST["dist1"];	
}
else{  
    $dist1="";
}

if (!empty($_POST["Spname"])) {
    //echo "Yes, name is set";   
    $Spname=$_POST["Spname"];	
}else{  
    $Spname="";
}



if (!empty($_POST["ps1"])) {
    //echo "Yes, name is set";   
    $ps1=$_POST["ps1"];	
}else{  
    $ps1="";
}

if (!empty($_POST["Spnation"])) {
    //echo "Yes, name is set";   
    $Spnation=$_POST["Spnation"];	
}else{  
    $Spnation="";
}

if (!empty($_POST["Po1"])) {
    //echo "Yes, name is set";   
    $Po1=$_POST["Po1"];	
}else{  
    $Po1="";
}

//----------------

if (!empty($_POST["SpProff"])) {
    //echo "Yes, name is set";   
    $SpProff=$_POST["SpProff"];	
}
else{  
    $SpProff="";
}

if (!empty($_POST["M_stat"])) {
    //echo "Yes, name is set";   
    $M_stat=$_POST["M_stat"];	
}
else{  
    $M_stat="";
}

if (!empty($_POST["addCheck"])) {
    //echo "Yes, name is set";   
    $addCheck=$_POST["addCheck"];	
}else{  
    $addCheck="";
}



if (!empty($_POST["ApProff"])) {
    //echo "Yes, name is set";   
    $ApProff=$_POST["ApProff"];	
}else{  
    $ApProff="";
}

if (!empty($_POST["ContOfBirth"])) {
    //echo "Yes, name is set";   
    $ContOfBirth=$_POST["ContOfBirth"];	
}else{  
    $ContOfBirth="";
}

if (!empty($_POST["Prbs1"])) {
    //echo "Yes, name is set";   
    $Prbs1=$_POST["Prbs1"];	
}else{  
    $Prbs1="";
}

//---------------

if (!empty($_POST["Bdist"])) {
    //echo "Yes, name is set";   
    $Bdist=$_POST["Bdist"];	
}
else{  
    $Bdist="";
}

if (!empty($_POST["Pdist1"])) {
    //echo "Yes, name is set";   
    $Pdist1=$_POST["Pdist1"];	
}
else{  
    $Pdist1="";
}

if (!empty($_POST["PPS1"])) {
    //echo "Yes, name is set";   
    $PPS1=$_POST["PPS1"];	
}else{  
    $PPS1="";
}



if (!empty($_POST["PPO1"])) {
    //echo "Yes, name is set";   
    $PPO1=$_POST["PPO1"];	
}else{  
    $PPO1="";
}

if (!empty($_POST["Email"])) {
    //echo "Yes, name is set";   
    $Email=$_POST["Email"];	
}else{  
    $Email="";
}


// Set session variables
session_start();
$_SESSION["ApName"] = $ApName;
$_SESSION["Gname"] = $Gname;
$_SESSION["Sname"] = $Sname;
$_SESSION["gender"] = $gender;
$_SESSION["Mname"] = $Mname;
$_SESSION["FatherName"] = $FatherName;

$_SESSION["PPO1"] = $PPO1;
$_SESSION["PPS1"] = $PPS1;
$_SESSION["Pdist1"] = $Pdist1;
$_SESSION["Bdist"] = $Bdist;



$_SESSION["Prbs1"] = $Prbs1;
$_SESSION["ContOfBirth"] = $ContOfBirth;
$_SESSION["ApProff"] = $ApProff;
$_SESSION["addCheck"] = $addCheck;
$_SESSION["M_stat"] = $M_stat;
$_SESSION["SpProff"] = $SpProff;




$_SESSION["PS1"] = $PS1;
$_SESSION["Spnation"] = $Spnation;
$_SESSION["ps1"] = $ps1;
$_SESSION["Spname"] = $Spname;
$_SESSION["dist1"] = $dist1;
$_SESSION["Mproff"] = $Mproff;

$_SESSION["Road"] = $Road;
$_SESSION["Mnation"] = $Mnation;
$_SESSION["Village"] = $Village;
$_SESSION["Fproff"] = $Fproff;
$_SESSION["DCiti"] = $DCiti;
$_SESSION["F_nation"] = $F_nation;


$_SESSION["Nationlity"] = $Nationlity;
$_SESSION["Guardian"] = $Guardian;
$_SESSION["Religion"] = $Religion;
$_SESSION["HeightInch"] = $HeightInch;
$_SESSION["HeightCM"] = $HeightCM;
$_SESSION["TID_NO"] = $TID_NO;


$_SESSION["DType"] = $DType;
$_SESSION["NID_NO"] = $NID_NO;
$_SESSION["Ptype"] = $Ptype;
$_SESSION["BidNo"] = $BidNo;
$_SESSION["AppIn"] = $AppIn;
$_SESSION["dob"] = $dob;
$_SESSION["Po1"] = $Po1;
$_SESSION["Email"] = $Email;

$Stage1=array($dob,$AppIn,$BidNo,$Ptype,$NID_NO,$DType,$TID_NO,$HeightCM,$HeightInch,$Religion,
$Guardian,$Nationlity,$F_nation,$DCiti,$Fproff,$Village,$Mnation,$Road,$Mproff,$dist1,
$Spname,$ps1,$Spnation,$Po1,$SpProff,$M_stat,$addCheck,$ApProff,$ContOfBirth,$Prbs1,
$Bdist,$Pdist1,$PPS1,$Email,$PPO1,$FatherName,$Mname,$gender,$Sname,$Gname,$ApName);
$_SESSION['Stage1']=$Stage1;


//echo "Session variables are set.";
//$link_address="Stage2.php";
 header("location:Stage2.php");
?>	
			
	
	</body>
</html>

