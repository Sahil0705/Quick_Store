<html>
<head>
	<title>Cart
	</title>
<style>
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
#dele
{
	background-color: green;
	color:white;
	border-radius:10px;
	width:70px;
	height:30px;
	font-size: 16;
	border-color:green;
	text-align: center;
}





</style>

</head>

<body>


<table  align="center" border=3px cellspacing=7>
        <tr>
            <th>Image</th>
            <th>Item Type</th>
            <th>Item Name</th>
            <th>Current Price</th>
            <th>Past Price</th>
            <th>Offer</th>
            <th>Remove</th>

<?php
error_reporting(0);
include("conn1.php");
session_start();
$query="select * from cart where username='$_SESSION[user_name]'";
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
        <td align='center'><?php echo $result['price']; $s=$s+$result['nprice'];?></td>
        <!-- <td align='center'><?php echo $result['nprice'];?></td> -->
        <td align='center'><?php echo $result['pastprice']; ?></td>
        <td align='center'><?php echo $result['offer']; ?></td>
        <td align='center'><a href="delete2.php?item_name=<?php echo $result['itemname'];?>"><input type='submit' value='Delete' id="delet"/></a></td>
        </tr>
    <?php
	}
    echo "<h2 align='center'>You have in all ",$tot," items in your cart</h2>";
    //echo "Welcome ",$_SESSION['user_name'];

}
else
{
    echo "<h2 align='center'>You have in all 0 items in your cart</h2>";
}
echo "<h2 align='center'>The total amount of your ",$tot," items is ",$s,"</h2>";
$_SESSION['amount']=$s;
//echo $_SESSION['amount'];

?>
</tr>
</table>
<?php
if($s!=0)
echo "<h2 align='center'><a href='Payments2.php'><input type='submit' name='buy' value='Buy' id='dele'></a></h2>";

?>
</body>
</html>