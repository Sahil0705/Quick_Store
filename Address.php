<html>
<head>
	</head>
	<body>

<?php
include('conn1.php');
session_start();
$query1="select * from signup where username='$_SESSION[user_name]'";
$data1=mysqli_query($conn,$query1);
$result1=mysqli_fetch_assoc($data1);
?>

<form method='GET'>
	<table align='center'>
	<tr>
        <td colspan=2>Delivery Address</td>
    </tr>
    <tr>
        <td><input type="radio" name="G1" value="<?php echo $result1[address];?>"/><?php echo $result1[address];?></td>
    </tr>
    <tr>
        <td><input type="radio" name="G1" value="<?php echo $result1[address1];?>"/><?php echo $result1[address1];?></td>
    </tr>
    <tr>
    	<td colspan=2><input type='submit' name='sub' value='Set Address'/></td>
    </tr>
	</table>
</form>

<?php
if(isset($_GET['sub']))
{
	session_start();
	$_SESSION['place']=$_GET['G1'];
	header('location:Payments2.php');
}
?>

</body>
</html>