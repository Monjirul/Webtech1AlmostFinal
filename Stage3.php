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
  if(isset($_SESSION['Pay_Type'])){
		$Pay_Type=$_SESSION['Pay_Type'];
		//echo "active name";
	}
	else
	{
		$Pay_Type="";
	}
  
  if(isset($_SESSION['Skip_Pay'])){
		$Skip_Pay=$_SESSION['Skip_Pay'];
		//echo "active name";
	}
	else
	{
		$Skip_Pay="";
	}
	
	
	  if(isset($_SESSION['Currency'])){
		$Currency=$_SESSION['Currency'];
		//echo "active name";
	}
	else
	{
		echo " currency not set";
		//$Currency="";
	}
	
	  if(isset($_SESSION['Pay_Date'])){
		$Pay_Date=$_SESSION['Pay_Date'];
		//echo "active name";
	}
	else
	{
		$Pay_Date="";
	}
	
	
		  if(isset($_SESSION['Rec_No'])){
		$Rec_No=$_SESSION['Rec_No'];
		//echo "active name";
	}
	else
	{
		$Rec_No="";
	}
	
	
	  if(isset($_SESSION['PS'])){
		$PS=$_SESSION['PS'];
		//echo "active name";
	}
	else
	{
		$PS="";
	}
	  if(isset($_SESSION['PO'])){
		$PO=$_SESSION['PO'];
		//echo "active name";
	}
	else
	{
		$PO="";
	}
	
	  if(isset($_SESSION['Amount'])){
		$Amount=$_SESSION['Amount'];
		//echo "active name";
	}
	else
	{
		$Amount="";
	}

?>
<h2>PASSPORT APPLICATION-STAGE 3</h2>
<pre style="color:gray;">   Online Application ID :</pre>
<pre>   Fields marked with <span style="color:#f00">(*)</span> are mandetory.</pre>
<form name="stage3" action="S3Validation.php" method="post">
<table>
  <col width="80">
  <col width="130">
  <col width="80">
  <col width="130">
    <tr>
    <td colspan="2" align="left"> <p style="color:blue;">Payment Information</p> </td>    
    </tr>
  
  <tr>  
 <td></td> 
 <td><input type="radio" name="Pay_Type" value="Online" > Online</td> 
 
  </tr>
	 

  <tr>
  <td>Payment Type :</td> 
   <td><input type="radio" name="Pay_Type" value="Non_Online" checked> Non-Online</td>
  </tr> 
  
   <tr>
  <td><input type="checkbox" name="Skip_Pay" value="Skip_Pay"> Skip Payment</td>
  </tr>
  
   <tr>
	 
    <td>Amount: <span style="color:#f00">*</span> </td><td> <select  name="Currency" value="<?php echo  $Currency; ?>" width="80" style="width: 80px">
    <option placeholder="Month"> BDT </option>
    <option value="saab">USD</option>
    <option value="fiat">Euro</option>
    <option value="audi">Pound</option>
	<option value="saab">Rupee</option>
	<input type="number" name="Amount"  value="<?php echo  $Amount; ?>"size ="15">
	</td>
	<td></td>	
	 </tr>
  
  	<tr>
    <td>Date Of Payment: <span style="color:#f00">*</span></td><td><input type="text" name="Pay_Date" value="<?php echo  $Pay_Date; ?>" size ="35"></td>	
	</tr>
	
	<tr>
    <td>Recept No: <span style="color:#f00">*</span></td><td><input type="text" name="Rec_No" value="<?php echo  $Rec_No; ?>" size ="35"></td>	
	</tr>
  
    <tr>
	<td>Name Of Bank:  </td><td> <select  name="PS"  value="<?php echo  $PS; ?>" width="230" style="width: 230px">
    <option placeholder="Month"> Dhaka </option>
    <option value="saab">Bahrain</option>
    <option value="fiat">Belgium</option>
    <option value="audi">Canada</option>
	<option value="saab">Denmark</option>
	</td>
	
	<tr>	 
    <td>Name Of Branch: </td><td> <select  name="PO" value="<?php echo  $PO; ?>" width="230" style="width: 230px">
    <option placeholder="Month"> Bangladesh </option>
    <option value="saab">Bahrain</option>
    <option value="fiat">Belgium</option>
    <option value="audi">Canada</option>
	<option value="saab">Denmark</option>
	</td>
	
	</tr>
	
	
	<tr>
	
	<td></td>
	<td></td>
	
	<td><input type="button" value="PREVIOUS PAGE" onclick="window.location.href='Stage2.php'" /></td>
	<td><input type="submit" value="Save & Exit"></td>
	</tr>
  
  
</table>
	</form>

</body>
</html>
