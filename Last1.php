<html>
    <head>
        <title>Payment</title>
    </head>
    <style> 
    .child{
        background-color: plum;
        text-align: center;
        width:200px;
        height:20px;
        width:400px;
        height:120px;
        left: 220;
        top:220;
        bottom:220;
        right:220;
        margin:auto;
        border-radius: 10px;
        padding:40px;
        

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

    body{
            
        }
    </style>
    </head>


<body><?php session_start();?>
    
    
        <table width=100% height=10% bgcolor="black"><tr>
           <td align='center'><a href='hlogin.php'><font color='white' id='A'>Main Home Page</font></a></td>
            
                <td align="center"><font color="white" size=5><?php echo $_SESSION['user_name'];?></font></td>
            </tr>
        </table>

        <br><br><br><br><br><br>
        <div class="child">
            <h1 align="center"><font size=40 >Payment Success ! </font></h1>

        </div>
        <br><br><br><br><br>
        <table width=100% height=10% bgcolor="black">
            <tr>
                <td align="center"><font color="white" size=5>Thank You</font></td>
                <td><a href='invoice2.php'><font color='white' id='A'>Invoice</font></a></td>
                <td><a href='logout.php'><font color='white' id='A'>Log Out</font></a></td>
            </tr>
        </table>
</body>
</html>