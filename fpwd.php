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
<input type='text' name='un' placeholder='username' id='type1'></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
<tr><td><input type='text' placeholder='favourite movie' name='mov' id='type1'></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
<tr><td><input type='number' placeholder='favourite number' name='quant' id='type1'></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
<tr><td align='center'><input type='submit' value='Proceed' name='sub' id='btn'></td></tr><tr><td></td></tr>
</form>
</table>



<?php
include('conn1.php');
if(isset($_GET['sub']))
{
	session_start();
	$_SESSION['username']=$_GET['un'];
	$mov=$_GET['mov'];
	$quant=$_GET['quant'];


	$query="select * from signup where username='$_SESSION[username]'";
	$data=mysqli_query($conn,$query);
	$result=mysqli_fetch_assoc($data);

	if($mov==$result['movie'] and $quant==$result['quantity'])
	{
		header('location:fpwd1.php');		
	}
	else
	{
		echo "error";
	}
}
?>
</body>
</html>