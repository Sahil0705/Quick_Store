<?php
include("conn1.php");
error_reporting(0);
	session_start();
   	echo "<img src='$_SESSION[image]'/>",$_SESSION['type'],
   	$_SESSION['name'],
    $_SESSION['price'],
    $_SESSION['nprice'],
    $_SESSION['past'],
    $_SESSION['offer'];

    $filename=$_FILES["$_SESSION[image]"]["name"];
    $tempname=$_FILES["$_SESSION[image]"]["tmp_name"];
    $folder=$_SESSION[image];
    move_uploaded_file($tempname,$folder);
    echo $folder;


  	$query="insert into cart values ('$_SESSION[user_name]','$folder','$_SESSION[type]','$_SESSION[name]','$_SESSION[price]','$_SESSION[nprice]','$_SESSION[past]','$_SESSION[offer]')";



  	$data=mysqli_query($conn,$query);


  	if($data==1)
  	{
  		echo "Data inserted";
  		header('location:add2.php');
  	}
  	else
  	{
  		echo "Not inserted";
  		header('location:Page3.php');	
  	}
  	


?>


