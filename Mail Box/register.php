<!DOCTYPE html>
<head>
<title>Two Column Right Layout</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
   <div id="mainBody">
	  <div id="wrapper">
	      <div id="header">   </div>
		  <div id="content">
		       <div class="content"> 
			    Contact Us
			   </div>
			   <div class="right">   
			     
			  <form action="" method="post" > 
				<table><br /> <br />
				  <tr>
					<td colspan="2"> <h2>&nbsp; &nbsp; &nbsp; &nbsp; Enter Your Details</h2></td>
				   </tr>
				   <tr>
				     <td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Enter First Name &nbsp; &nbsp; &nbsp;</td>
					 <td><input type="text" name="first_name" required /> </td>
				   </tr>
				   <tr>
				      <td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Enter Last Name &nbsp; &nbsp; &nbsp;</td>
					  <td><input type="text" name="last_name" required /></td>
				   </tr>
				   <tr>
				      <td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Choose Your Username  &nbsp; &nbsp; &nbsp; </td>
					  <td><input type="text" name="username" required /></td>
				   </tr>
				   <tr>
					   <td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Create A Password &nbsp; &nbsp; &nbsp; </td>
					   <td><input type="password" name="password" required /></td>
				   </tr>	 
				   <tr>
				      <td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Confirm Your Password &nbsp; &nbsp; &nbsp; &nbsp; </td>
					  <td><input type="password" name="con_password" required /></td>
				   </tr>
				   <tr>
				       <td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Birthday &nbsp; &nbsp; &nbsp;</td>
					   <td> <input type="date" name="dob" required /></td>
				   </tr>						 
				   <tr>
					    <td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Gender &nbsp; &nbsp; &nbsp; </td>
						<td><input type="radio" name="gender" value="Male" required />Male
						    <input type="radio" name="gender" value="Female" required />Female</td>
				   </tr>
				   <tr>
				       <td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Mobile Phone &nbsp; &nbsp; &nbsp;</td>
					   <td> <input type="text" name="mobile" required /></td>
				   </tr>	
				   <tr>
				      <td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Country</td>
					  <td><select name="country">
                          <option>Select</option> 
                          <option>India</option> 
                          <option>Japan</option> 
                          <option>Russia</option> 
						  <option>England</option>   
                          </select>
					  </td>
				   </tr>  
				   <tr>
				      <td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="submit" name="registerbtn" value="Create Account"  height="40px" width="60px" /></td>
				   </tr>		 
				 </table>		
				</form>
					  
			   </div>
		  </div>
		  <div id="footer">   </div>
	  </div>
	</div>
</body>
</html>
<?php
$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$username = $_POST['username'];
$password = $_POST['password'];
$passwordConfirm = $_POST['con_password'];


if(password.){
}
$con = mysqli_connect("localhost","root","") or die("Not connected to mysql database");
$c = "create database emailserver";
$res = mysqli_query($con,$c);

$db = mysqli_select_db($con,"emailserver");

$c = "create table employee(firstname varchar(30)lastname varchar(30),username varchar(30),password varchar(30),ename varchar(30),designation varchar(20),salary int,city varchar(20),mob bigint)";
$res = mysqli_query($con,$c);

if($_POST['insert']){
  if(empty($eid) || empty($ename) || empty($designation) || empty($salary) || empty($city) || empty($mobile)){
     echo "<script> alert('All the Fields Are Not Filled. Please Fill and Try Again Later');</script>";
  }else{
     $insert_Query = "insert into employee values($eid,'$ename','$designation',$salary,'$city',$mobile)";
	 $res = mysqli_query($con,$insert_Query);
	 echo "<script>alert('Record Inserted');</script>";
  }
}





?>