<html>
<body bgcolor="#008080">
<form action="" method="post">
<center>
<header><h1>Image Resizer</h1></header>
<hr>
<table border="4" bgcolor="#008080" width="30%" height="25%">
<tr>
<td colspan="2" align="center"><h1>Login Page</h1></td>
</tr>
<tr>
<td><label>Enter Username</label></td>
<td><input type="text" name="text" placeholder="Enter your username here" required/></td>
</tr>

<tr>
<td><label>password</label></td>
<td><input type="password" name="pass" placeholder="Enter your password" required/></td>
</tr>
<td colspan="2" align="center"><input type="submit" value="Submit" name="submitbtn"></td>
</tr>
</table>
</hr>
<a href="Registration.php">Register</a>
</center>
</form>
<?php
if(isset($_POST["submitbtn"]))
{
$text=$_POST['text'];
$pass=$_POST['pass'];
$query="SELECT ";
    echo"<script>window.location='index.php'</script>";
}
?>

</body>
</html>