<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<style>
table{
    border: 1px solid black;
	width:100%;
}
</style>
</head>
<body>

<?php
  if(isset($_SESSION["Office_No"])||isset($_SESSION["Passport_No"])||isset($_SESSION["Residence_No"])||isset($_SESSION["Mbl_No"])||isset($_SESSION["Place_of_Issue"])){
		 $Office_No=$_SESSION["Office_No"];
 $Passport_No=$_SESSION["Passport_No"];
 $Residence_No=$_SESSION["Residence_No"] ;
$Mbl_No=$_SESSION["Mbl_No"] ;
$Place_of_Issue=$_SESSION["Place_of_Issue"];
	}
	else
	{
 $Office_No="";
 $Passport_No="";
 $Residence_No="" ;
 $Mbl_No="" ;
$Place_of_Issue=""; 
	}
  
 if(isset($_SESSION["Is_res"])||isset($_SESSION["Re_Issue"])||isset($_SESSION["Ema_name"])||isset($_SESSION["Ema_country"])||isset($_SESSION["parma"])){
		$Is_res=$_SESSION["Is_res"] ;
$Re_Issue=$_SESSION["Re_Issue"] ;
 $Ema_name=$_SESSION["Ema_name"] ;
 $Ema_country=$_SESSION["Ema_country"] ;
 $parma=$_SESSION["parma"] ;
	}
	else
	{
 $Is_res="";
$Re_Issue="";
 $Ema_name="";
$Ema_country="";
 $parma=""; 
	}
	
	
	 if(isset($_SESSION["present"])||isset($_SESSION["Vill_Add"])||isset($_SESSION["RBS"])||isset($_SESSION["Dist"])||isset($_SESSION["PS"])){
		$present=$_SESSION["present"] ;
$Vill_Add=$_SESSION["Vill_Add"] ;
 $RBS=$_SESSION["RBS"] ;
 $Dist=$_SESSION["Dist"] ;
 $PS=$_SESSION["PS"] ;
	}
	else
	{
 $present="";
$Vill_Add="";
 $RBS="";
$PS="";
 $Dist=""; 
	}
	
	
		 if(isset($_SESSION["PO"])||isset($_SESSION["Ema_Mbl_No"])||isset($_SESSION["Relate"])){
$Vill_Add=$_SESSION["PO"] ;
 $Ema_Mbl_No=$_SESSION["Ema_Mbl_No"] ;
 $Relate=$_SESSION["Relate"] ;
	}
	else
	{
$PO="";
 $Ema_Mbl_No="";
 $Relate=""; 
	}
?>

<h2>PASSPORT APPLICATION-STAGE 2</h2>
<pre style="color:gray;">   Online Application ID :</pre>
<pre>   Fields marked with <span style="color:#f00">(*)</span> are mandetory.</pre>
<form name="stage2" action="S2Validation.php" method="post">
<table>
  <col width="80">
  <col width="130">
  <col width="80">
    <col width="130">
    <tr>
    <td colspan="2" align="left"> <p style="color:blue;">Applicant Contact Information</p> </td>
     
   <td colspan="2" align="left"> <p style="color:blue;">Old Passport Information</p> </td>   
  </tr>
  <tr>
    <td>Office No : </td><td><input type="text" name ="Office_No" value="<?php echo  $Office_No; ?>" size ="35" ></td>
    <td>Passport No:</td> <td><input type="text" name ="Passport_No" value="<?php echo  $Passport_No; ?>" size ="35" ></td>  
  </tr>
  <tr>
  <td>Residence No: </td><td><input type="text" name ="Residence_No" value="<?php echo  $Residence_No; ?>" size ="35"></td> 
  <td>Place of Issue:   </td><td> <input type="text" name ="Place_of_Issue " value="<?php echo  $Place_of_Issue; ?>" size ="35"></td>   
  </tr>
  
  <tr>
    <td>Mobile No: </td><td><input type="text" name="Mbl_No" value="<?php echo  $Mbl_No; ?>" size ="35"></td>	
             <td>Date of Issue:  </td><td><input type="text" name="Is_res" size ="35"></td>					
			  </tr>
			  <tr>
	<td colspan="2" align="left"><p style="color:blue;">Emergency Contact Person's Details</p></td>
	<td>Re-Issue Reason:  </td><td> <select  name="Re_Issue" value="<?php echo  $Re_Issue; ?>" width="230" style="width: 230px">
    <option placeholder="select"> select </option>
    <option value="l">lost</option>
    <option value="s">stolen</option>
	 </tr>
	   <td>Name: <span style="color:#f00">*</span> </td><td><input type="text" name ="Ema_name" value="<?php echo  $Ema_name; ?>" size ="35"></td> 
	 <tr>
	 
  <td>Country: <span style="color:#f00">*</span> </td><td> <select  name="Ema_country" value="<?php echo  $Ema_country; ?>"  width="230" style="width: 230px">
    <option placeholder="Month"> Bangladesh </option>
    <option value="saab">Bahrain</option>
    <option value="fiat">Belgium</option>
    <option value="audi">Canada</option>
	<option value="saab">Denmark</option>
	</td>
	
	 </tr>
	 <tr>
  <td><input type="checkbox" name="parma" value="parma"> </td><td>Same as permanent address</td>
  </tr>
	 <tr>
  <td><input type="checkbox" name="present" value="present" checked></td><td>Same as present address</td>
    </tr>
	 
	  </tr>
	   <td>Village/House:</td><td><input type="text" name ="Vill_Add" value="<?php echo  $Vill_Add; ?>" size ="35"></td> 
	 <tr>
	 </tr>
	   <td>Road/Block/Sector:</td><td><input type="text" name ="RBS" value="<?php echo  $RBS; ?>" size ="35"></td> 
	 <tr>
	 
	 	 <tr>
	 
  <td>District: <span style="color:#f00">*</span> </td><td> <select  name="Dist" value="<?php echo  $Dist; ?>"  width="230" style="width: 230px">
    <option placeholder="Month"> Gazipur </option>
    <option value="saab">Bahrain</option>
    <option value="fiat">Belgium</option>
    <option value="audi">Canada</option>
	<option value="saab">Denmark</option>
	</td>
	
	 </tr>
	 

	 <tr>
	   <td>Police Station: <span style="color:#f00">*</span> </td><td> <select  name="PS" value="<?php echo  $PS; ?>"  width="230" style="width: 230px">
    <option placeholder="Month"> Dhaka </option>
    <option value="saab">Bahrain</option>
    <option value="fiat">Belgium</option>
    <option value="audi">Canada</option>
	<option value="saab">Denmark</option>
	</td>
	
		 <tr>
	 
  <td>Post Office: <span style="color:#f00">*</span> </td><td> <select  name="PO" value="<?php echo  $PO; ?>" width="230" style="width: 230px">
    <option placeholder="Month"> Bangladesh </option>
    <option value="saab">Bahrain</option>
    <option value="fiat">Belgium</option>
    <option value="audi">Canada</option>
	<option value="saab">Denmark</option>
	</td>
	
	</tr>
	
	
	<tr>
    <td>Contact No: <span style="color:#f00">*</span></td><td><input type="text" value="<?php echo  $Ema_Mbl_No; ?>" name="Ema_Mbl_No" size ="35"></td>	
	</tr>
	
	<tr>
    <td>Email: </td><td><input type="text" name="Ema_email" size ="35"></td>	
	</tr>
	
	<tr>
	
	<td>Relationship: <span style="color:#f00">*</span> </td><td> <select  name="Relate" value="<?php echo  $Relate; ?>"  width="230" style="width: 230px">
    <option placeholder="Month"> Father </option>
    <option value="saab">Mother</option>
    <option value="fiat">Sister</option>
    <option value="audi">Brother</option>
	<option value="saab">Spouse</option>
	</td>
	 </tr>
	<tr>
	<td></td>
	<td></td>
	<td><input type="button" value="PREVIOUS PAGE" onclick="window.location.href='Stage1.php'" /></td>
	<td><input type="submit" value="Save & Next"></td>
	
	</tr> 
</table>


</body>
</html>
