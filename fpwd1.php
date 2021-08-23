<html>
<head>
	<title>
Login
</title>
</head>


<style>

table
{
	padding:30px;
	border-color:white;
	border-style:solid;
	border-width:3px;
	border-radius:25px;
	background:rgba(0,255,255,0.2);
}
#type1
{
	width:250px;
	height:21px;
	border:0;
	outline:0;
	background:transparent;
	border-bottom:2px solid black;
	color:black;
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
img.i
{
	height:25px;
	width:25px;
}
</style>
<body bgcolor="#F1F3F6">
	<a href='log.php'><img src='arrow.jpg' class='i'></a>
	<br><br><br><br>
<table align='center'>

<form method='GET' action=''>
	<tr><td>
<input type='password' name='pwd' placeholder='password' id='type1'></td></tr></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
<tr><td>
<input type='password' placeholder='reconfirm password' name='cpwd' id='type1'></td></tr></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
<tr><td align='center'><input type='submit'  value='submit' name='sub' id='btn'></td></tr>
</form>



<?php
include('conn1.php');
session_start();

if(isset($_GET['sub']))
{
	$pwd=$_GET['pwd'];
	$cpwd=$_GET['cpwd'];

	if($pwd==$cpwd)
	{
		$query="update signup set password='$pwd',confirm='$cpwd' where username='$_SESSION[username]'";
		$data=mysqli_query($conn,$query);
		if($data)
		{
			header('location:log.php');
			session_unset();
			echo "G";
		}
		else
		{
			echo "error1";
		}
	}
	else
	{
		echo "error";
	}
}

?>
</body>
</html>