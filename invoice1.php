<?php
require('fpdf182\fpdf.php');
session_start();
include("conn1.php");
$query1="select * from signup where username='$_SESSION[user_name]'";
$data1=mysqli_query($conn,$query1);
$result1=mysqli_fetch_assoc($data1);
$query="select * from orders where username='$_SESSION[user_name]' and orderid=$_SESSION[orderid]";
$data=mysqli_query($conn,$query);
$query5="select count(orderid) as N from orders";
$data5=mysqli_query($query5);
$result5=mysqli_fetch_assoc($data5);
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',20);
$pdf->Cell(160,15,'Quick Store',0,0,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(25,15,'Invoice',0,1,'');
$pdf->Cell(25,6,'Order id : ',0,0,'');
$pdf->Cell(25,6,$result1['orderid'],0,1,'');
$pdf->Cell(25,6,'Date : ',0,0,'');
$pdf->Cell(25,6,date('d F Y'),0,1,'');
$pdf->Cell(25,6,'Time : ',0,0,'');
$pdf->Cell(25,6,date('h:m:s A'),0,1,'');
$pdf->Cell(25,6,'User id : ',0,0,'');
$pdf->Cell(25,6,$result1['username'],0,1,'');
$pdf->Cell(25,6,'Name : ',0,0,'');
$pdf->Cell(25,6,$result1['firstname']." ".$result1['lastname'],0,1,'');
$pdf->Cell(25,6,'Age : ',0,0,'');
$pdf->Cell(25,6,$result1['age'],0,1,'');
$pdf->Cell(25,6,'Contact : ',0,0,'');
$pdf->Cell(25,6,$result1['contact'],0,1,'');
$pdf->Cell(25,6,'Email id : ',0,0,'');
$pdf->Cell(25,6,$result1['emailid'],0,1,'');
$pdf->Cell(25,6,"",0,1,'');
$pdf->Cell(40,6,"Order Details : ",0,1,'');
$pdf->Cell(20,6,"",0,1,'');



	$pdf->Cell(15,10,'Sr. No',1,0,'C');
	$pdf->Cell(35,10,'Item Type',1,0,'C');
	$pdf->Cell(35,10,'Item Name',1,0,'C');
	$pdf->Cell(35,10,'Quantity',1,0,'C');
	$pdf->Cell(35,10,'Price',1,0,'C');
	$pdf->Cell(35,10,'Net Price',1,1,'C');

$i=0;
while($result=mysqli_fetch_assoc($data))
{
	$query2="select * from product where itemname='$result[itemname]'";
	$data2=mysqli_query($conn,$query2);
	$result2=mysqli_fetch_assoc($data2);
	$i=$i+1;
	$pdf->Cell(15,10,$i,1,0,'C');
	$pdf->Cell(35,10,$result['itemtype'],1,0,'C');
	$pdf->Cell(35,10,$result['itemname'],1,0,'C');
	$pdf->Cell(35,10,$result['count'],1,0,'C');
	$pdf->Cell(35,10,$result['price'],1,0,'C');
	$pdf->Cell(35,10,$result['count']*$result2['nprice'],1,1,'C');
}
if($i==0)
$pdf->Cell(35,10,'error',1,0,'C');
$pdf->Cell(20,6,"",0,1,'');
$pdf->Cell(20,6,"",0,1,'');
$pdf->SetFont('Arial','B',16);
$pdf->Cell(35,6,"Total Cost : ",0,0,'');
$pdf->Cell(30,6,$_SESSION['amount'],0,1,'');
$pdf->Cell(20,6,"",0,1,'');
$pdf->Cell(135,6,"Your Products will be delivered to this Address : ",0,0,'');
$pdf->Cell(30,6,$_SESSION['place'],0,0,'');
$pdf->output();

?>