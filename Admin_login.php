<?php

include("conn1.php");

session_start();




?>


<html>
<head>
<title>
Login
</title>
<style>

table
{
	background-color:black;
	border-color:white;
	border-style:solid;
	border-width:3px;
	border-radius:25px;
	background:rgba(0,0,0,0.6);
}
#type1
{
	width:250px;
	height:21px;
	border:0;
	outline:0;
	background:transparent;
	border-bottom:2px solid white;
	color:white;
	font-size:20px;
}
#btn
{
	width:190px;
	background-color:orange;
	height:30px;
	border-radius:5px;
	font-size:20px;
	border:0;
}
 #u
        {
            border-radius:5px;
            color:white;
            height:30px;
            width:70px;
            text-decoration:none;
        }
/* visited link */
a:visited {
  color: white;
  text-decoration:none;
}

/* mouse over link */
a:hover {
  color: white;
  text-decoration:none;
}

/* selected link */
a:active {
  color: white;
  text-decoration:none;
}
body
{
	background-repeat:no-repeat;
	background-size:cover;
}
</style>



</head>
<body background="22.jpeg">
<br/>


<form action="" method="POST">
<table width='25%' border='0px' cellspacing=30 align='center'>
	<tr>
		<td align="center"><img src="Admin_login.jpg" width="50%"/></td>
	<tr>
		<td><input type="text" placeholder="username" id="type1" name='un'></td>
	</tr>
	<tr>
		<td><input type="text" placeholder="***********" id="type1" name='pwd'></td>
	</tr>
	<tr>
		<td align="center"><input type="submit" name="submit" value="Login" id="btn"></td>
	</tr>
	<tr>
		<td align='center'><a href='fpwd.php' id="u">Forget Pasword</a></td>
	</tr>
		<tr>
		<td align='center'><a href='signup.php' id="u">Create a Account</a></td>
	</tr>
	</table>


</form>



</body>
</html>



<?php

if(isset($_POST['submit']))
{
	$un=$_POST['un'];
	$pwd=$_POST['pwd'];
	
	$query="select * from signup where username='$un' and password='$pwd'";
	
	$data=mysqli_query($conn,$query);
	$tot=mysqli_num_rows($data);
	$result=mysqli_fetch_assoc($data);
	//echo $tot;
	if($tot==1)
	{
		//echo "Login Ok";
		$_SESSION['user_name']=$un ; 
		header('location:hlogin.php');
	}
	else
	{
		echo "<font color='red'>Login Failed</font>";
	}
}

?>