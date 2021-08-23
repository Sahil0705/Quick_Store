<?php
session_start();
include('conn1.php');
$i=$_GET['i'];
$p=$_GET['p'];
$pp=$_GET['pp'];
$o=$_GET['o'];
$m=$_GET['m'];
$n=$_GET['n'];
$cnt=$_GET['cnt'];
$np=$_GET['np'];

  $filename=$_FILES["$i"]["name"];
    $tempname=$_FILES["$i"]["tmp_name"];
    $folder=$i;
    move_uploaded_file($tempname,$folder);
    echo $folder;


  	$query="insert into later values ('$_SESSION[user_name]','$folder','$m','$n','$p',$np,'$pp','$o',$cnt)";
  	$query1="delete from cart where username='$_SESSION[user_name]' and itemname='$n'";
  	$data=mysqli_query($conn,$query);
  	$data1=mysqli_query($conn,$query1);
if($data==1 and $data1==1)
{
	echo "Data inserted";
	header('location:add2.php');

}
else
{
	echo "Data not inserted";
}
?>
