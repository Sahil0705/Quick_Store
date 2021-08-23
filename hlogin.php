<?php
session_start();

?>
<html>
<head>
	<title>Quick Store</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		    .tooltip {
      position: relative;
      display: inline-block;
      border-bottom: 1px dotted black;
    }
    .tooltip .tooltiptext {
      visibility: hidden;
      width: 120px;
      background-color: darkblue;
      color: #fff;
      text-align: center;
      border-radius: 6px;
      padding: 5px 0;
     /* Position the tooltip */
      position: absolute;
      z-index: 1;
    }
    .tooltip:hover .tooltiptext {
      visibility: visible;
    }
		a#A:active {
  color: black;
  background-color: transparent;
  text-decoration: none;
}
a:link {
  color: black;
  background-color: transparent;
  text-decoration: none;
}

a#A:visited {
  color: black;
  background-color: transparent;
  text-decoration: none;
}

a#A:hover {
  color: black;
  background-color: transparent;
  text-decoration: none;
}

a#A:active {
  color: black;
  background-color: transparent;
  text-decoration: none;
}
		.checked
		{
			color:orange;
		}
	</style>
	<link rel ="stylesheet" type="text/css" href="home_page.css"/>
</head>
<body bgcolor="#F1F3F6">

	<table id='t1'>
		<tr>
			<td align='left'><font color='white' size=3><div class="dropdown1">
				<span align='center'><img src='Login21.jpg' width='45px' height="40px"></span>
				<div class="dropdown-content1">
					<p><a href='profile.php'>Profile</a></p>
					<p><a href='orders.php'>Your Orders</a></p>
					<p><a href='logout.php'>Sign Out</a></p>
				</div>
			</div></font></td>
			<td align='left' width='25%'><font color='white' size=4><?php echo "Welcome ".$_SESSION['user_name'];?></font></td>
			<td></td>
			<td align="right"><a href='add2.php'><img src='cart.png' id='cart'></a></td>
			
			
		</tr>
	</table>

	<table border="0" width="100%" height="8%" bgcolor="white">
		<tr>
			<th width='12.5%'><a href='#c1' id='A'>Electronics</a></th>
			<th width='12.5%'><a href='#c2' id='A'>TV & Aplliances</a></th>
			<th width='12.5%'><a href='#c3' id='A'>Men</a></th>
			<th width='12.5%'><a href='#c4' id='A'>Home & Furniture</a></th>
			<th width='12.5%'><a href='#c5' id='A'>Women</a></th>
			<th width='12.5%'><a href='#c6' id='A'>Baby & Kids</a></th>
			<th width='12.5%'><a href='#c7' id='A'>Sports</a></th>
		</tr>
	</table>

		<h1 align='center' id='c1'>Electronics</h1>

	<img src="Banner.jpeg" width="100%" height='60%'/>
<br/><br/><br/>
	<?php
		include("conn1.php");
		error_reporting(0);
		$query="select * from product where itemtype='Mobile'";
		$data=mysqli_query($conn,$query);
		$tot=mysqli_num_rows($data);

		if($tot!=0)
		{
		?>
			<table width='100%' bgcolor="white" border=0>
			<tr>
				<td colspan='5'><h2><b>Mobiles</b></h2><hr></td>
					</tr>
					<tr></tr><tr></tr><tr></tr><tr></tr>
					<tr>
			<?php
			while($result=mysqli_fetch_assoc($data))
			{
			?>
				<td width="25%" align='center'>
				<?php echo "<img src='".$result[image]."' height='160' width='180' id='zook'>";
					echo "<br><br/><font color='green'>From</font>&nbsp;&nbsp;<font color='green'><b>",$result['price'],"/-</b></font>";
					echo "<b><br/>Upto ",$result['offer'],"% Off</b>"; echo "<br/><br/><a href='proceed.php?i=$result[image]&p=$result[price]&np=$result[nprice]&pp=$result[pastprice]&o=$result[offer]&m=$result[itemtype]&n=$result[itemname]'><input type='button' value='Show Details' style='width:130px; height:30px; background-color:2874F0; color:white; border-color:2874F0;'></a>"?> </td>
			<?php
			}?>
			</tr>

			</table>
		<?php
		}
		else
		{
			echo "No Records Found";
		}

		?>
		<br/><br/>

		<?php
		include("conn1.php");
		error_reporting(0);
		$query="select * from product where itemtype='Laptop & Notebooks'";
		$data=mysqli_query($conn,$query);
		$tot=mysqli_num_rows($data);

		if($tot!=0)
		{
		?>
			<table width='100%' bgcolor="white" border=0>
			<tr>
				<td colspan='5'><h2><b>Laptops & Notebooks</b></h2><hr></td>
					</tr>
					<tr></tr><tr></tr><tr></tr><tr></tr>
					<tr>
			<?php
			while($result=mysqli_fetch_assoc($data))
			{
			?>
				<td width="25%" align='center'>
				<?php echo "<img src='".$result[image]."' height='160' width='180' id='zook'>";
					echo "<br><br/><font color='green'>From</font>&nbsp;&nbsp;<font color='green'><b>",$result['price'],"/-</b></font>";
					echo "<b><br/>Upto ",$result['offer'],"% Off</b>"; echo "<br/><br/><a href='proceed.php?i=$result[image]&p=$result[price]&np=$result[nprice]&pp=$result[pastprice]&o=$result[offer]&m=$result[itemtype]&n=$result[itemname]'><input type='button' value='Show Details' style='width:130px; height:30px; background-color:2874F0; color:white; border-color:2874F0;'></a>"?> </td>
			<?php
			}?>
			</tr>

			</table>
		<?php
		}
		else
		{
			echo "No Records Found";
		}

		?>
		<br/>

		<h1 align='center' id='c2'>TV & Appliances</h1>

		<?php
		include("conn1.php");
		error_reporting(0);
		$query="select * from product where itemtype='TV & Appliances'";
		$data=mysqli_query($conn,$query);
		$tot=mysqli_num_rows($data);

		if($tot!=0)
		{
		?>
			<table width='100%' bgcolor="white" border=0>
			<tr>
				<td colspan='5'><h2><b>Fridge, Mixers & TV</b></h2><hr></td>
					</tr>
					<tr></tr><tr></tr><tr></tr><tr></tr>
					<tr>
			<?php
			while($result=mysqli_fetch_assoc($data))
			{
			?>
				<td width="25%" align='center'>
				<?php echo "<img src='".$result[image]."' height='160' width='180' id='zook'>";
					echo "<br><br/><font color='green'>From</font>&nbsp;&nbsp;<font color='green'><b>",$result['price'],"/-</b></font>";
					echo "<b><br/>Upto ",$result['offer'],"% Off</b>"; echo "<br/><br/><a href='proceed.php?i=$result[image]&p=$result[price]&np=$result[nprice]&pp=$result[pastprice]&o=$result[offer]&m=$result[itemtype]&n=$result[itemname]'><input type='button' value='Show Details' style='width:130px; height:30px; background-color:2874F0; color:white; border-color:2874F0;'></a>"?> </td>
			<?php
			}?>
			</tr>

			</table>
		<?php
		}
		else
		{
			echo "No Records Found";
		}

		?>
		<br/><br/>

		<?php
		include("conn1.php");
		error_reporting(0);
		$query="select * from product where itemtype='Radio, Chargers & AC'";
		$data=mysqli_query($conn,$query);
		$tot=mysqli_num_rows($data);

		if($tot!=0)
		{
		?>
			<table width='100%' bgcolor="white" border=0>
			<tr>
				<td colspan='5'><h2><b>Radio, Chargers & AC</b></h2><hr></td>
					</tr>
					<tr></tr><tr></tr><tr></tr><tr></tr>
					<tr>
			<?php
			while($result=mysqli_fetch_assoc($data))
			{
			?>
				<td width="25%" align='center'>
				<?php echo "<img src='".$result[image]."' height='160' width='180' id='zook'>";
					echo "<br><br/><font color='green'>From</font>&nbsp;&nbsp;<font color='green'><b>",$result['price'],"/-</b></font>";
					echo "<b><br/>Upto ",$result['offer'],"% Off</b>"; echo "<br/><br/><a href='proceed.php?i=$result[image]&p=$result[price]&np=$result[nprice]&pp=$result[pastprice]&o=$result[offer]&m=$result[itemtype]&n=$result[itemname]'><input type='button' value='Show Details' style='width:130px; height:30px; background-color:2874F0; color:white; border-color:2874F0;'></a>"?> </td>
			<?php
			}?>
			</tr>

			</table>
		<?php
		}
		else
		{
			echo "No Records Found";
		}

		?>
		<br/>
		<h1 align='center' id='c3'>Men</h1>
		<br/>
		<table width=100%>
			<tr>
				<td width='50%'><img src='Banner1.jpeg' width='565px' height='270px'></td>
				<td width=50%><img src='Banner2.jpeg' width=550px height=280px></td>
			</tr>
		</table>
		
		<br/>
		

		<?php
		include("conn1.php");
		error_reporting(0);
		$query="select * from product where itemtype='Shirts & Wallets'";
		$data=mysqli_query($conn,$query);
		$tot=mysqli_num_rows($data);

		if($tot!=0)
		{
		?>
			<table width='100%' bgcolor="white" border=0>
			<tr>
				<td colspan='5'><h2><b>Shirts & Wallets</b></h2><hr></td>
					</tr>
					<tr></tr><tr></tr><tr></tr><tr></tr>
					<tr>
			<?php
			while($result=mysqli_fetch_assoc($data))
			{
			?>
				<td width="25%" align='center'>
				<?php echo "<img src='".$result[image]."' height='160' width='180' id='zook'>";
					echo "<br><br/><font color='green'>From</font>&nbsp;&nbsp;<font color='green'><b>",$result['price'],"/-</b></font>";
					echo "<b><br/>Upto ",$result['offer'],"% Off</b>"; echo "<br/><br/><a href='proceed.php?i=$result[image]&p=$result[price]&np=$result[nprice]&pp=$result[pastprice]&o=$result[offer]&m=$result[itemtype]&n=$result[itemname]'><input type='button' value='Show Details' style='width:130px; height:30px; background-color:2874F0; color:white; border-color:2874F0;'></a>"?> </td>
			<?php
			}?>
			</tr>

			</table>
		<?php
		}
		else
		{
			echo "No Records Found";
		}

		?>
		<br/>
		

		<?php
		include("conn1.php");
		error_reporting(0);
		$query="select * from product where itemtype='Jeans'";
		$data=mysqli_query($conn,$query);
		$tot=mysqli_num_rows($data);

		if($tot!=0)
		{
		?>
			<table width='100%' bgcolor="white" border=0>
			<tr>
				<td colspan='5'><h2><b>Jeans</b></h2><hr></td>
					</tr>
					<tr></tr><tr></tr><tr></tr><tr></tr>
					<tr>
			<?php
			while($result=mysqli_fetch_assoc($data))
			{
			?>
				<td width="25%" align='center'>
				<?php echo "<img src='".$result[image]."' height='160' width='180' id='zook'>";
					echo "<br><br/><font color='green'>From</font>&nbsp;&nbsp;<font color='green'><b>",$result['price'],"/-</b></font>";
					echo "<b><br/>Upto ",$result['offer'],"% Off</b>"; echo "<br/><br/><a href='proceed.php?i=$result[image]&p=$result[price]&np=$result[nprice]&pp=$result[pastprice]&o=$result[offer]&m=$result[itemtype]&n=$result[itemname]'><input type='button' value='Show Details' style='width:130px; height:30px; background-color:2874F0; color:white; border-color:2874F0;'></a>"?> </td>
			<?php
			}?>
			</tr>

			</table>
		<?php
		}
		else
		{
			echo "No Records Found";
		}

		?>
		<br/>

		<h1 align='center' id='c5'>Women</h1>

		<?php
		include("conn1.php");
		error_reporting(0);
		$query="select * from product where itemtype='earring & bangles'";
		$data=mysqli_query($conn,$query);
		$tot=mysqli_num_rows($data);

		if($tot!=0)
		{
		?>
			<table width='100%' bgcolor="white" border=0>
			<tr>
				<td colspan='5'><h2><b>Earring & Bangles</b></h2><hr></td>
					</tr>
					<tr></tr><tr></tr><tr></tr><tr></tr>
					<tr>
			<?php
			while($result=mysqli_fetch_assoc($data))
			{
			?>
				<td width="25%" align='center'>
				<?php echo "<img src='".$result[image]."' height='160' width='180' id='zook'>";
					echo "<br><br/><font color='green'>From</font>&nbsp;&nbsp;<font color='green'><b>",$result['price'],"/-</b></font>";
					echo "<b><br/>Upto ",$result['offer'],"% Off</b>"; echo "<br/><br/><a href='proceed.php?i=$result[image]&p=$result[price]&np=$result[nprice]&pp=$result[pastprice]&o=$result[offer]&m=$result[itemtype]&n=$result[itemname]'><input type='button' value='Show Details' style='width:130px; height:30px; background-color:2874F0; color:white; border-color:2874F0;'></a>"?> </td>
			<?php
			}?>
			</tr>

			</table>
		<?php
		}
		else
		{
			echo "No Records Found";
		}

		?>
		<br/>

		<?php
		include("conn1.php");
		error_reporting(0);
		$query="select * from product where itemtype='purses & watches'";
		$data=mysqli_query($conn,$query);
		$tot=mysqli_num_rows($data);

		if($tot!=0)
		{
		?>
			<table width='100%' bgcolor="white" border=0>
			<tr>
				<td colspan='5'><h2><b>Purses & Watches</b></h2><hr></td>
					</tr>
					<tr></tr><tr></tr><tr></tr><tr></tr>
					<tr>
			<?php
			while($result=mysqli_fetch_assoc($data))
			{
			?>
				<td width="25%" align='center'>
				<?php echo "<img src='".$result[image]."' height='160' width='180' id='zook'>";
					echo "<br><br/><font color='green'>From</font>&nbsp;&nbsp;<font color='green'><b>",$result['price'],"/-</b></font>";
					echo "<b><br/>Upto ",$result['offer'],"% Off</b>"; echo "<br/><br/><a href='proceed.php?i=$result[image]&p=$result[price]&np=$result[nprice]&pp=$result[pastprice]&o=$result[offer]&m=$result[itemtype]&n=$result[itemname]'><input type='button' value='Show Details' style='width:130px; height:30px; background-color:2874F0; color:white; border-color:2874F0;'></a>"?> </td>
			<?php
			}?>
			</tr>

			</table>
		<?php
		}
		else
		{
			echo "No Records Found";
		}

		?>
		<br/>
		<h1 align='center' id='c4'>Home & Furniture</h1>
		<br/>
		<table width=100%>
			<tr>
				<td width='50%'><img src='Banner3.jpeg' width='565px' height='300px'></td>
				<td width=50%><img src='Banner4.jpeg' width=550px height=300px></td>
			</tr>
		</table>
		<br/>
		
		<?php
		include("conn1.php");
		error_reporting(0);
		$query="select * from product where itemtype='chairs & sofa'";
		$data=mysqli_query($conn,$query);
		$tot=mysqli_num_rows($data);

		if($tot!=0)
		{
		?>
			<table width='100%' bgcolor="white" border=0>
			<tr>
				<td colspan='5'><h2><b>Chairs & Sofa</b></h2><hr></td>
					</tr>
					<tr></tr><tr></tr><tr></tr><tr></tr>
					<tr>
			<?php
			while($result=mysqli_fetch_assoc($data))
			{
			?>
				<td width="25%" align='center'>
				<?php echo "<img src='".$result[image]."' height='160' width='180' id='zook'>";
					echo "<br><br/><font color='green'>From</font>&nbsp;&nbsp;<font color='green'><b>",$result['price'],"/-</b></font>";
					echo "<b><br/>Upto ",$result['offer'],"% Off</b>"; echo "<br/><br/><a href='proceed.php?i=$result[image]&p=$result[price]&np=$result[nprice]&pp=$result[pastprice]&o=$result[offer]&m=$result[itemtype]&n=$result[itemname]'><input type='button' value='Show Details' style='width:130px; height:30px; background-color:2874F0; color:white; border-color:2874F0;'></a>"?> </td>
			<?php
			}?>
			</tr>

			</table>
		<?php
		}
		else
		{
			echo "No Records Found";
		}

		?>
		<br/>

		<?php
		include("conn1.php");
		error_reporting(0);
		$query="select * from product where itemtype='beds & shelves'";
		$data=mysqli_query($conn,$query);
		$tot=mysqli_num_rows($data);

		if($tot!=0)
		{
		?>
			<table width='100%' bgcolor="white" border=0>
			<tr>
				<td colspan='5'><h2><b>Beds & Shelves</b></h2><hr></td>
					</tr>
					<tr></tr><tr></tr><tr></tr><tr></tr>
					<tr>
			<?php
			while($result=mysqli_fetch_assoc($data))
			{
			?>
				<td width="25%" align='center'>
				<?php echo "<img src='".$result[image]."' height='160' width='180' id='zook'>";
					echo "<br><br/><font color='green'>From</font>&nbsp;&nbsp;<font color='green'><b>",$result['price'],"/-</b></font>";
					echo "<b><br/>Upto ",$result['offer'],"% Off</b>"; echo "<br/><br/><a href='proceed.php?i=$result[image]&p=$result[price]&np=$result[nprice]&pp=$result[pastprice]&o=$result[offer]&m=$result[itemtype]&n=$result[itemname]'><input type='button' value='Show Details' style='width:130px; height:30px; background-color:2874F0; color:white; border-color:2874F0;'></a>"?> </td>
			<?php
			}?>
			</tr>

			</table>
		<?php
		}
		else
		{
			echo "No Records Found";
		}

		?>
		<br/>

		<h1 align='center' id='c6'>Baby & Kids</h1>
		<table width=100%>
			<tr>
				<td width='50%'><img src='Banner5.jpeg' width='565px' height='270px'></td>
				<td width=50%><img src='Banner6.jpeg' width=550px height=280px></td>
			</tr>
		</table>
		<br/>
		<?php
		include("conn1.php");
		error_reporting(0);
		$query="select * from product where itemtype='toys'";
		$data=mysqli_query($conn,$query);
		$tot=mysqli_num_rows($data);

		if($tot!=0)
		{
		?>
			<table width='100%' bgcolor="white" border=0>
			<tr>
				<td colspan='5'><h2><b>Toys for kids</b></h2><hr></td>
					</tr>
					<tr></tr><tr></tr><tr></tr><tr></tr>
					<tr>
			<?php
			while($result=mysqli_fetch_assoc($data))
			{
			?>
				<td width="25%" align='center'>
				<?php echo "<img src='".$result[image]."' height='160' width='180' id='zook'>";
					echo "<br><br/><font color='green'>From</font>&nbsp;&nbsp;<font color='green'><b>",$result['price'],"/-</b></font>";
					echo "<b><br/>Upto ",$result['offer'],"% Off</b>"; echo "<br/><br/><a href='proceed.php?i=$result[image]&p=$result[price]&np=$result[nprice]&pp=$result[pastprice]&o=$result[offer]&m=$result[itemtype]&n=$result[itemname]'><input type='button' value='Show Details' style='width:130px; height:30px; background-color:2874F0; color:white; border-color:2874F0;'></a>"?> </td>
			<?php
			}?>
			</tr>

			</table>
		<?php
		}
		else
		{
			echo "No Records Found";
		}

		?>
		<br/>

		<?php
		include("conn1.php");
		error_reporting(0);
		$query="select * from product where itemtype='games'";
		$data=mysqli_query($conn,$query);
		$tot=mysqli_num_rows($data);

		if($tot!=0)
		{
		?>
			<table width='100%' bgcolor="white" border=0>
			<tr>
				<td colspan='5'><h2><b>Games</b></h2><hr></td>
					</tr>
					<tr></tr><tr></tr><tr></tr><tr></tr>
					<tr>
			<?php
			while($result=mysqli_fetch_assoc($data))
			{
			?>
				<td width="25%" align='center'>
				<?php echo "<img src='".$result[image]."' height='160' width='180' id='zook'>";
					echo "<br><br/><font color='green'>From</font>&nbsp;&nbsp;<font color='green'><b>",$result['price'],"/-</b></font>";
					echo "<b><br/>Upto ",$result['offer'],"% Off</b>"; echo "<br/><br/><a href='proceed.php?i=$result[image]&p=$result[price]&np=$result[nprice]&pp=$result[pastprice]&o=$result[offer]&m=$result[itemtype]&n=$result[itemname]'><input type='button' value='Show Details' style='width:130px; height:30px; background-color:2874F0; color:white; border-color:2874F0;'></a>"?> </td>
			<?php
			}?>
			</tr>

			</table>
		<?php
		}
		else
		{
			echo "No Records Found";
		}

		?>
		<br/>
		<h1 align='center' id='c7'>Sports</h1>

		<table width=100%>
			<tr>
				<td width='50%'><img src='Banner7.jpeg' width='565px' height='330px'></td>
				<td width=50%><img src='Banner8.jpeg' width=550px height=330px></td>
			</tr>
		</table>
		<br/>
		<?php
		include("conn1.php");
		error_reporting(0);
		$query="select * from product where itemtype='cricket & football'";
		$data=mysqli_query($conn,$query);
		$tot=mysqli_num_rows($data);

		if($tot!=0)
		{
		?>
			<table width='100%' bgcolor="white" border=0>
			<tr>
				<td colspan='5'><h2><b>Cricket & Football</b></h2><hr></td>
					</tr>
					<tr></tr><tr></tr><tr></tr><tr></tr>
					<tr>
			<?php
			while($result=mysqli_fetch_assoc($data))
			{
			?>
				<td width="25%" align='center'>
				<?php echo "<img src='".$result[image]."' height='160' width='180' id='zook'>";
					echo "<br><br/><font color='green'>From</font>&nbsp;&nbsp;<font color='green'><b>",$result['price'],"/-</b></font>";
					echo "<b><br/>Upto ",$result['offer'],"% Off</b>"; echo "<br/><br/><a href='proceed.php?i=$result[image]&p=$result[price]&np=$result[nprice]&pp=$result[pastprice]&o=$result[offer]&m=$result[itemtype]&n=$result[itemname]'><input type='button' value='Show Details' style='width:130px; height:30px; background-color:2874F0; color:white; border-color:2874F0;'></a>"?> </td>
			<?php
			}?>
			</tr>

			</table>
		<?php
		}
		else
		{
			echo "No Records Found";
		}

		?>
		<br/>

		<?php
		include("conn1.php");
		error_reporting(0);
		$query="select * from product where itemtype='Carrom,TT & Chess'";
		$data=mysqli_query($conn,$query);
		$tot=mysqli_num_rows($data);

		if($tot!=0)
		{
		?>
			<table width='100%' bgcolor="white" border=0>
			<tr>
				<td colspan='5'><h2><b>Carrom,TT & Chess</b></h2><hr></td>
					</tr>
					<tr></tr><tr></tr><tr></tr><tr></tr>
					<tr>
			<?php
			while($result=mysqli_fetch_assoc($data))
			{
			?>
				<td width="25%" align='center'>
				<?php echo "<img src='".$result[image]."' height='160' width='180' id='zook'>";
					echo "<br><br/><font color='green'>From</font>&nbsp;&nbsp;<font color='green'><b>",$result['price'],"/-</b></font>";
					echo "<b><br/>Upto ",$result['offer'],"% Off</b>"; echo "<br/><br/><a href='proceed.php?i=$result[image]&p=$result[price]&np=$result[nprice]&pp=$result[pastprice]&o=$result[offer]&m=$result[itemtype]&n=$result[itemname]'><input type='button' value='Show Details' style='width:130px; height:30px; background-color:2874F0; color:white; border-color:2874F0;'></a>"?> </td>
			<?php
			}?>
			</tr>

			</table>
		<?php
		}
		else
		{
			echo "No Records Found";
		}

		?>
		<br/>

</body>
</html>