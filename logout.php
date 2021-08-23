<?php
session_start();
session_unset();


?>
<html>
    <head>
        <title>logout</title>
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
        top:20;
        bottom:20;
        right:220;
        margin:auto;
        border-radius: 10px;
        padding:40px;
        

    }
    a:link {
  color: white;
  background-color: transparent;
  text-decoration: none;
}

a:visited {
  color: white;
  background-color: transparent;
  text-decoration: none;
}

a:hover {
  color: white;
  background-color: transparent;
  text-decoration: none;
}

a:active {
  color: white;
  background-color: transparent;
  text-decoration: none;
}
    body{
            
        }
    </style>
    </head>


<body>
    
    
        <table width=100% height=10% bgcolor="black">
            <tr>
                <td align="center"><font color="white" size=5>Quick Store</font></td>
            </tr>
        </table>

        <br><br><br><br><br><br>
        <div class="child">
            <h1 align="center"><font size=40 >Successfully Logged Out </font></h1>

        </div>
        <br><br><br><br><br>
        <table width=100% height=10% bgcolor="black">
            <tr>
                <td align="center" width=50%><font color="white" size=5>Thank You</font></td>
               <td align='center' width=50%><font color='white'><?php echo "<a href='home_page.php'>Home Page</a>"; ?></font></td>
                
            </tr>
        </table>
</body>
</html>