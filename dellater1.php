<html>
<head>
	<title>Cart
	</title>
<style>
    a:visited {
  color: blue;
  text-decoration:none;
}
a:link{
  color: blue;
  text-decoration:none;
}

/* mouse over link */
a:hover {
  color: blue;
  text-decoration:none;
}

/* selected link */
a:active {
  color: blue;
  text-decoration:none;
}
#save
{
    background-color: orange;
    color:white;
    border-radius:10px;
    width:110px;
    height:30px;
    font-size: 16;
    border-color:orange;
}

 img.i
{
    height:25px;
    width:25px;
} 

#sav
{
    background-color: rgb(0, 0, 153);
    color:white;
    border-radius:10px;
    width:90px;
    height:30px;
    font-size: 16;
    border-color:rgb(0, 0, 153);
}
#delet
{
    background-color: red;
    color:white;
    border-radius:10px;
    width:70px;
    height:30px;
    font-size: 16;
    border-color:red;
}
</style>

</head>

<body bgcolor="#F1F3F6">
<a href='add2.php'><img src='arrow.jpg' class='i'></a>

<table  align="center" border=3px cellspacing=7>
        <tr>
            <th>Image</th>
            <th>Item Type</th>
            <th>Item Name</th>
            <th>Current Price</th>
            <th>Past Price</th>
            <th>Offer</th>
            <th>Count</th>
            <th>Net Price</th>
            <th>Delete</th>
            <th>Move to Cart</th>
            <th>Update Quantity</th>

<?php
error_reporting(0);
include("conn1.php");
session_start();
$query="select * from later where username='$_SESSION[user_name]'";
$data=mysqli_query($conn,$query);
$tot=mysqli_num_rows($data);
//echo $tot;
$s=0;
if($tot!=0)
{
    //echo "<br>Table has records";
    //$result=mysqli_fetch_assoc($data);
    while($result=mysqli_fetch_assoc($data))
    {
    ?>
        <tr> 
        <!--<td align='center'><?php echo $result['username']; ?></td>-->
        <td align='center'><?php echo "<img src='".$result[image]."' height='100' width='100'>"; ?></td>
        <td align='center'><?php echo $result['itemtype']; ?></td>
        <td align='center'><?php echo $result['itemname']; ?></td>
        <td align='center'><?php echo $result['price']; $s=$s+($result['count']*$result['nprice']);?></td>
        <!-- <td align='center'><?php echo $result['nprice'];?></td> -->
        <td align='center'><?php echo $result['pastprice']; ?></td>
        <td align='center'><?php echo $result['offer']; ?></td>
        <td align='center'><?php echo $result['count']; ?></td>
        <td align='center'><?php echo $result['count']*$result['nprice']; ?></td>
        <td align='center'><a href="delete6.php?item_name=<?php echo $result['itemname'];?>"><input type='submit' value='Delete' id="delet"/></a></td>
        <td align='center'><?php echo "<a href='addlater2.php?i=$result[image]&p=$result[price]&pp=$result[pastprice]&o=$result[offer]&m=$result[itemtype]&n=$result[itemname]&cnt=$result[count]&np=$result[nprice]'><input type='submit' value='Move to Cart' id='save'/></a>";?></td>
        <td align='center'><?php echo "<a href='u1.php?n=$result[itemname]&cnt=$result[count]'><input type='submit' value='Change' id='sav'/></a>";?></td>
        </tr>
    <?php
	}
    echo "<h2 align='center'>You have in all ",$tot," items in save for later</h2>";
    //echo "Welcome ",$_SESSION['user_name'];

}

?>
</tr>
</table>

<h3 align='center'><a href='add2.php'>Cart</a></h3>


</body>
</html>