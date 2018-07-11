<?php
session_start();
?>

<!DOCTYPE html>
<html>
<title>Stage1</title>
<head>
<style>

table {

    
 font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    border: 1px solid black;

}


</style>
</head>
<body>


<?php

$s2=array();
for($i=0;$i<41;$i++)
{
		 if(isset($_SESSION['Stage1'][$i])){
        $s2[$i]=$_SESSION['Stage1'][$i];
//		echo $s2[$i]."<br>";
	}
	else
	{

$s2[$i]="";
$_SESSION['Stage1'][$i]=$s2[$i];
	}
}

	  if(isset($_SESSION['Parvill'])){
		$Parvill=$_SESSION['Parvill'];
		//echo "active name";
	}
	else
	{
			$Parvill="";
		
	}
//echo '<pre>';
//var_dump($_SESSION);
//echo '</pre>';
 //echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';
?>

<!--
 $dob,0
 $BidNo,2
 $NID_NO,4
 $TID_NO,6
 $HeightCM,7
 $HeightInch,8
 $Village,15
 $Road,17 
 $Spname,20
 $Email,23
 $FatherName,35
 $Mname,36
 $Sname,38
 $Gname,39
 $ApName40


-->



<h2>PASSPORT APPLICATION STAGE-1</h2>
<pre style="color:red;">  Before filling up the online application form read the <a href="#">guidelines</a> carefully.</pre>
<pre>  Fields marked with <span style="color:#f00">(*)</span> are mandetory.</pre>

<br>


  <form name="stage1" action="S1Validation.php" method="post">
<table>
 
  <tr>
    <td><p style="color:blue;">Passport Application Information</p> </td>
    <td><pre>Date of Birth:          <span style="color:#f00">*</span> <input type="text" name ="dob" value="<?php echo $_SESSION['Stage1'][0] ?>"</pre></td>
    </tr>
  <tr>
    <td><pre>Applying in:<span style="color:#f00">*</span>          <select name="AppIn" >
    <option value="Bangladesh"> Bangladesh </option>
    <option value="Bahrain">Bahrain</option>
    <option value="Belgium">Belgium</option>
    <option value="Canada">Canada</option>
	<option value="Denmark">Denmark</option></pre>
	</td>
    <td><pre>Gender:<span style="color:#f00">*</span>                <input type="radio" name="gender" value="<?php echo $_SESSION['Stage1'][0] ?>" <br>
                        <input type="radio" name="gender" value="female"> Female<br>
                        <input type="radio" name="gender" value="others"> Others</pre>
  </td>
    
  </tr>
  <tr>
    <td>Applycation Type:<b>New Application</b></td>
    <td><pre>Birth Id No:<span style="color:#f00">*</span>            <input type="text" name ="BidNo" value="<?php echo $_SESSION['Stage1'][2] ?>" ></pre></td>
    
  </tr>
  <tr>
    <td><pre>Passport Type:<span style="color:#f00">*</span>        <select name="Ptype">
 <option value="">-SELECT-</option>
    <option value="A">A</option>
    <option value="B">B</option>
    <option value="C">C</option>
	<option value="D">D</option><pre>
	</td>
    <td><pre>National Id No.          <input type="text" name ="NID_NO" value="<?php echo $_SESSION['Stage1'][4] ?>" ></pre></td>
   
  </tr>
  <tr>
    <td><pre>Delivery Type:<span style="color:#f00">*</span>        <input type="radio" name="DType" value="Regular" checked> Regular<br>
                       <input type="radio" name="DType" value="Express"> Express</pre></td>
    <td><pre>Tax Id No                <input type="text" name ="TID_NO" value="<?php echo $_SESSION['Stage1'][6] ?>"></pre></td>
   
  </tr>
  <tr>
    <td><p style="color:blue;">Personal Information</p></td>
    <td><pre>Height:<span style="color:#f00">*</span>                 <input type="text" name ="HeightCM" value="<?php echo $_SESSION['Stage1'][7] ?>" >cm<input type="text" name ="HeightInch" value="<?php echo $_SESSION['Stage1'][8] ?>">inch</pre></td>
   
  </tr>
   <tr>
    <td><pre>Name Of <br>applicant:<span style="color:#f00">*</span>             <input type="text" name ="ApName" value="<?php echo $_SESSION['Stage1'][40] ?>"></pre></td>
	
    <td><pre>Religion:    <span style="color:#f00">*</span>           <select name="Religion">
    <option value="">-SELECT-</option>
    <option value="Muslim">Muslim</option>
    <option value="Hindu">Hindu</option>
    <option value="Christian">Christian</option>
	<option value="Other">Other</option></pre>
	 </td>
   
  </tr>
  <tr>
    <td><pre>First Part<br>(Given Name):          <input type="text" name ="Gname" value="<?php echo $_SESSION['Stage1'][39] ?>" ></pre></td>
    <td><pre>Email:  <span style="color:#f00">*</span>                <input type="text" name ="Email" value="<?php echo $_SESSION['Stage1'][23] ?>"></pre></td>
   
  </tr>
  <tr>
    <td><pre>Second Part<br>(Surname):<span style="color:#f00">*</span>            <input type="text" name ="Sname"  value="<?php echo $_SESSION['Stage1'][38] ?>"></pre></td>
    <td><p style="color:blue;">Citizenship Information</td>
   
  </tr>
  <tr>
    <td>Guardian <input type="checkbox" name="Guardian" value=""><span style="color:#f00">("Tick")</span> only if Applicant is legally adated</P>
    <td><pre>Nationlity:<span style="color:#f00">*</span>             <select name="Nationlity">
	 <option value="">-SELECT-</option>
    <option value="BANGLADESHI"> BANGLADESHI </option>
    <option value="Bahrain">Bahrain</option>
    <option value="Belgium">Belgium</option>
    <option value="Canada">Canada</option>
	<option value="Denmark">Denmark</option></pre></td>
   </tr>
   
   <tr>
    
    <td><pre>Father's Name:<span style="color:#f00">*</span>        <input type="text" name ="FatherName" value="<?php echo $_SESSION['Stage1'][35] ?>" ></pre></td>
  <td><pre>Citizenship Status:<span style="color:#f00">*</span>     <select name="C_Stat" value="<?php echo $_SESSION['Stage1'][0] ?>">
 <option value="">-SELECT-</option>   
   <option value="Month">BIRTH</option>
    <option value="saab">Other</option>
    </pre></td>
 
   
  </tr>
  <tr>
    <td><pre>Father's<br>Nationlity:<span style="color:#f00">*</span>           <select name="F_nation" >
     <option value="">-SELECT-</option>
	<option value="BANGLADESHI"> BANGLADESHI</option>
    <option value="Other">Other</option>
    </pre></td></td>
    <td><pre>Dual Citizenship :<span style="color:#f00">*</span>      <input type="radio" name="DCiti" value="" checked> Yes<br>
                         <input type="radio" name="DCiti" value=""> No</pre></td>
   
  </tr>
  <tr>
    <td><pre>Father's<br>Profession:<span style="color:#f00">*</span>           <select name="Fproff" >
     <option value="">-SELECT-</option>
    <option value="">-SELECT-</option>
    <option value="Govt">Govt Job</option>
    <option value="Private">Private Job</option></pre>
	
	</td>
    <td><p style="color:blue;">Present Address</p></td>
   
  </tr>
  
  <tr>
    
    <td><pre>Mother's Name:<span style="color:#f00">*</span>        <input type="text" name ="Mname" value="<?php echo $_SESSION['Stage1'][36] ?>"> </pre></td>
  <td><pre>Village/House:           <input type="text" name ="Village" value="<?php echo $_SESSION['Stage1'][15] ?>"><pre></td>
 
   
  </tr>
  <tr>
    <td><pre>Mother's<br>Nationlity:<span style="color:#f00">*</span>           <select name="Mnation">
 <option value="">-SELECT-</option>    
	<option value="BANGLADESHI"> BANGLADESHI</option>
    <option value="Other">Other</option>
    </pre></td></td>
     <td><pre>Rode/Block/Sector:       <input type="text" name ="Road" value="<?php echo $_SESSION['Stage1'][17] ?>"></pre></td>
   
  </tr>
  <tr>
    <td><pre>Mother's<br>Profession:<span style="color:#f00">*</span>           <select name="Mproff">
     <option value="">-SELECT-</option>
    <option value="Govt">Govt Job</option>
    <option value="Private">Private Job</option></pre>
	</td>
	<td><pre>District:<span style="color:#f00">*</span>               <select name="dist1">
    <option value="">-SELECT-</option>
    <option value="saab">gazipur</option>
    <option value="fiat">dhaka</option>
    </pre>
	</td>
    
</tr>
<tr>
    
    <td><pre>Spouse's Name:       <input type="text" name ="Spname" value="<?php echo $_SESSION['Stage1'][20] ?>"></pre></td>
  <td><pre>Police Station:<span style="color:#f00">*</span>         <select name="ps1" >
     <option value="">-SELECT-</option>
    <option value="a">a</option>
    <option value="c">b</option>
    <option value="b">c</option>
	<option value="d">d</option></pre></td>
 
   
  </tr>
  <tr>
    <td><pre>Spouse's<br>Nationlity:           <select name="Spnation">
 <option value="">-SELECT-</option>   
   <option value="BANGLADESHI"> BANGLADESHI</option>
    <option value="saab">Others</option>
    </pre></td></td>
   <td><pre>Post Office:<span style="color:#f00">*</span>            <select name="Po1">
    <option value="">-SELECT-</option>
    <option value="tj">tejgaon</option>
    <option value="mh">mohakhali</option>
    </pre></td>
   
  </tr>
  <tr>
    <td><pre>Spouse's<br>Profession:          <select name="SpProff">
    <option value="">-SELECT-</option>
    <option value="Govt">Govt Job</option>
    <option value="Private">Private Job</option></pre>
	</td>
    <td><p style="color:blue;">Permanent Address</p></td>
   
  </tr>
  
   
    <tr>
    <td><pre>Marital Status:<span style="color:#f00">*</span>       <select name="M_stat">
     <option value="">-SELECT-</option>
	<option value="Married">Married</option>
    <option value="UnMarried">UnMarried</option>
    </pre></td>
  <td><pre> <input type="checkbox" name="addCheck" value="">  Same as above</pre> </td>
  
  <tr>
    <td><pre>Applicant's<br>Profession:<span style="color:#f00">*</span>           <select name="ApProff">
    <option value="">-SELECT-</option>
    <option value="Govt">Govt Job</option>
    <option value="Private">Private Job</option></pre></td></td>
    <td><pre>Village/House:           <input type="text" name ="Parvill"  value="<?php echo $Parvill ?>"><pre></td>
   
  </tr>
  <tr>
    <td><pre>Country of<br>Birth:<span style="color:#f00">*</span>                <select name="ContOfBirth">
 <option value="">-SELECT-</option>
<option value="BANGLADESHI"> BANGLADESH</option>
    <option value="saab">Others</option>
    </pre>
	</td>
	<td><pre>Rode/Block/Sector:       <input type="text" name ="Prbs1" value="<?php echo $_SESSION['Stage1'][0] ?>"></pre></td>
    
</tr>
<tr>
    
    <td><pre>Birth District:<span style="color:#f00">*</span>       <select name="Bdist">
     <option value="">-SELECT-</option>
	<option value="saab">gazipur</option>
    <option value="fiat">dhaka</option>
    </pre>
	</td>
	<td><pre>District:<span style="color:#f00">*</span>               <select name="Pdist1">
 <option value="">-SELECT-</option>
    <option value="saab">Bahrain</option>
     <option value="saab">gazipur</option>
    <option value="fiat">dhaka</option></pre>
	</td>
  
 </tr>
 <tr>
    <td></td>
 <td><pre>Police Station:<span style="color:#f00">*</span>         <select name="PPS1">
 <option value="">-SELECT-</option>
    <option value="T">T</option>
    <option value="S">S</option>
    <pre></td>
  </tr>
  <tr>
    <td></td>
   <td><pre>Post Office:<span style="color:#f00">*</span>            <select name="PPO1">
     <option value="">-SELECT-</option>
	<option value="PO">PO</option>
    <option value="PO2">PO@</option>
    <pre></td>
   
  </tr>
  
  <tr>
	
	<td><input type="button" value="save and continue in future" onclick="window.location.href='Stage1.php'" /></td>
	<td><input type="submit" value="Save & Next"></td>
	
	</tr> 
</table>
</form>

</body> 
</html>