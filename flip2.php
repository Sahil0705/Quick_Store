<?php
error_reporting(0);
include("conn1.php");
?>


<html>
    <body>

<form action="" method="POST" enctype="multipart/form-data">
Itemtype<input type="text" name="itemtype"/><br><br>
Itemname<input type="text" name="itemname"/><br><br>
File<input type="file" name="upload_file"/><br><br>
Price<input type="text" name="price"/><br><br>
Nprice<input type="number" name="nprice"/><br><br>
Past Price<input type="text" name="past"/><br><br>
Offer<input type="number" name="offer"/><br><br>
<input type="submit" value="Upload" name="submit"/><br><br>
<input type='reset' value="Reset"/>
</form>

</body>
</html>


<?php

if($_POST['submit'])
{
	$type=$_POST['itemtype'];
	$name=$_POST['itemname'];
    $filename=$_FILES["upload_file"]["name"];
    $tempname=$_FILES["upload_file"]["tmp_name"];
    $folder="gallery/".$filename;
    move_uploaded_file($tempname,$folder);
    echo $folder;
    /*$_FILES["upload_file"]
    echo $_FILES["upload_file"];
    print_r($_FILES["upload_file"]);*/
    $price=$_POST['price'];
    $nprice=$_POST['nprice'];
    $past=$_POST['past'];
    $offer=$_POST['offer'];







}   

if($filename!="")
{
    $query = "insert into product values ('$folder','$type','$name','$price','$nprice','$past','$offer')";
    $data = mysqli_query($conn,$query);

    if($data)
    {
        echo "Inserted";
        header('location:hlogin.php');
    }
    else
    {
        echo "Not inserted";
    }

}

?>