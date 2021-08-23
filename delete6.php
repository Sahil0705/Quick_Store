<?php

include("conn1.php");
error_reporting(0);
session_start();

$item_name=$_GET['item_name'];
$query="delete from later where itemname='$item_name' and username='$_SESSION[user_name]'";

$data=mysqli_query($conn,$query);

if($data)
{
    echo "Record deleted";
    header('location:dellater1.php');
}
else
{
    echo "Record Not deleted";
}



?>