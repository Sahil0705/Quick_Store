<?php

include("conn1.php");
error_reporting(0);
session_start();

$query="delete from cart where username='$_SESSION[user_name]'";

$data=mysqli_query($conn,$query);

if($data)
{
    echo "Record deleted";
}
else
{
    echo "Record Not deleted";
}

header('location:Last.php');

?>