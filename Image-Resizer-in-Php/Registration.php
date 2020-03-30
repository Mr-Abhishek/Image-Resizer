<html>
<body bgcolor="#008080">
<form action="" method="post">
<center>
<h1>Image Resizer</h1>
<hr>
<table border="4" bgcolor="#008080" width="50%" height="40%">
<tr>
<td colspan=2><center><h1 bgcolor="white">Registration Page</h1></td>
</tr>
<tr>
<td><label>Enter Username</label></td>
<td><input type="text" name="t1" required placeholder="Enter your username here"  /></td>
</tr>
<tr>
<td><label>Email</label></td>
<td><input type="text" name="t2" placeholder="Enter your Email here" required /></td>
</tr>
<tr>
<td><label>password</label></td>
<td><input type="password" name="t3" placeholder="Enter your password" required /></td>
</tr>
<tr>
<td><label>Enter your Number</label></td>
<td><input type="text" name="t4" placeholder="Enter your Mobile Number here" required /></td>
</tr>
<tr>
<td><label>Enter your Address</label></td>
<td><input type="text" name="t5"> </td>
<tr>
<td colspan="2" align="center"><input type="submit" value="submit" name="b1">&nbsp;&nbsp;   <input type="reset" value="Reset"></td>
</tr>
</table>
</hr>
</center>
</form>
</body>
</html>
<?php

include_once 'database.php';
if (isset($_POST['b1']))
{
	
	$username=$_POST['t1'];
	$email=$_POST['t2'];
	$password=$_POST['t3'];
	$contact=$_POST['t4'];
	$address=$_POST['t5'];
	//$cpass=$_POST['t6'];
	//$conn=mysqli_connect("localhost","root","","courier");
	//$db=mysqli_select_db("courier",$conn);
	$sql="insert into reg values('$username','$email','$password','$contact','$address')";
	//$rows=mysqli_num_rows($sql);
	if(mysqli_query($conn,$sql))
	{
		
		echo"<script>alert('Sign up successfull ');window.location='login.php';</script>";
	}
	else{
		echo"<script>alert('Invalid username or password ');window.location='index.php';</script>";
		
	}
}

?>