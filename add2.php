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
body
{
    background-repeat:no-repeat;
    background-size:cover;
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




  img.i
{
    height:25px;
    width:25px;
}
</style>

</head>

<body bgcolor="#F1F3F6">

<a href='hlogin.php'><img src='arrow.jpg' class='i'></a>
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
            <th>Remove</th>
            <th>Save for later</th>
            <th>Update Quantity</th>

<?php
error_reporting(0);
include("conn1.php");
session_start();
$query="select * from cart where username='$_SESSION[user_name]'";
$query1="select * from signup where username='$_SESSION[user_name]'";
$data=mysqli_query($conn,$query);
$data1=mysqli_query($conn,$query1);
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
        <td align='center'><?php echo $result['offer'],"%"; ?></td>
        <td align='center'><?php echo $result['count']; ?></td>
        <td align='center'><?php echo $result['count']*$result['nprice']; ?></td>
        <td align='center'><a href="delete2.php?item_name=<?php echo $result['itemname'];?>"><input type='submit' value='Delete' id="delet"/></a></td>
         <td align='center'><?php echo "<a href='addlater1.php?i=$result[image]&p=$result[price]&pp=$result[pastprice]&o=$result[offer]&m=$result[itemtype]&n=$result[itemname]&cnt=$result[count]&np=$result[nprice]'><input type='submit' value='Save for later' id='save'/></a>";?></td>
         <td align='center'><?php echo "<a href='u.php?n=$result[itemname]&cnt=$result[count]'><input type='submit' value='Change' id='sav'/></a>";?></td>

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
echo "<h2 align='center'><a href='Address.php'><input type='submit' name='buy' value='Proceed' id='dele'></a></h2>";



?>
<h3 align='center'><a href='dellater1.php'>Save for later</a></h3>
</body>
</html>