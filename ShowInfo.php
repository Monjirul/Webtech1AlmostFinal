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

session_start();

?>


<h2>PASSPORT APPLICATION REVIEW ENROLMENT SUMMARY</h2>
<pre style="color:gray;">   Online Application ID :</pre>
<pre style="color:gray;">   Enrolment Date :<?php echo date("Y/m/d")?></pre>
<pre style="color:red;">   Reminder before submitting your application .</pre>
<pre>         * After you click submit,you are not allowed to modify your information.<br>
         *please visit BAGERHAT Branch on any working day within the next 15 days for biometric capture except government holiday</pre>

		 <form name="stage3" action="File.php" method="post">
		 <table>
  <col width="80">
  <col width="130">
  <col width="80">
    <col width="130">
    <tr>
    <td colspan="2" align="left"> <p style="color:blue;">Personal Information Summary</p> </td>
     
   <td colspan="2" align="left"> <p style="color:blue;">Passport Information Summary</p> </td> 

 </tr>
 
 
 
  <tr>
    <td>Name Of Applicant : <?php echo $_SESSION["ApName"]?></td>
    <td></td>
	<td>Applying in:</td>  
  </tr>
  <tr>
  <td>Second Part(Surname) : <?php echo $_SESSION["Sname"]?></td>
<td></td>  
  <td>Passport Type :   </td>   
  </tr>   
  
   <tr>
  <td>First Part(Given Name) : <?php echo $_SESSION["Gname"]?></td> 
  <td></td>
  <td>Application Type :   </td>   
  </tr>  
  
     <tr>
  <td>Gender: </td>
  <td></td>
  <td> <p style="color:blue;"> Contact Information Summary  </td> 
  </tr>  
   
     <tr>
  <td>Nationality: </td> 
  <td></td>
  <td>Mobile No :   </td>   
  </tr>  
  
    <tr>
  <td>Date of Birth: </td> 
  <td></td>
  <td>Present Address:  </td>   
  </tr>  
   
    <tr>
  <td>Place of Birth: </td> 
  <td></td>
  <td>Parmanent Address:  </td>   
  </tr> 

   <tr>
  <td>Father's Name : <?php echo $_SESSION["FatherName"]?></td> 
  <td></td>
  <td>Email:</td>   
  </tr>  
  
    <tr>
  <td>Mother's Name : <?php echo $_SESSION["Mname"]?></td>
  <td></td>
  <td> <p style="color:blue;"> Payment Information Summary  </td> 
  </tr>  
  
    <tr>
  <td>Spouse's Name: </td> 
  <td></td>
  <td>Payment Amount:  </td>   
  </tr>  
  
   <tr>
  <td>National ID No: </td> 
  <td></td>
  <td>Payment Date:  </td>   
  </tr>  
  
  <tr>
  <td>Birth ID No: </td> 
  <td></td>
  <td>Receipt No.:  </td>   
  </tr>  
  
  <tr>
  <td>Old Passport No: </td> 
  <td></td>
  <td>Bank Name:  </td>   
  </tr>  
  
    <tr>
  <td></td> 
  <td></td>
  <td>Bank Branch </td>   
  </tr>  

 <tr>
	
	
	
	<td><input type="button" value="PREVIOUS PAGE" onclick="window.location.href='Stage3.php'" /></td>
	<td></td>
	<td><input type="submit" value="Save "></td>
	</tr>


</table>
</form>
<pre style="color:red;">  Reminder:Bring old passport during collection of MRP; No correction after handover of delivery slip without fee.</pre> 
</form>

</body>
</html>