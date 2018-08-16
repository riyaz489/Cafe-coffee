
<html>
<head>
<title></title>
                         <link rel="stylesheet" type="text/css" href="css/login.css"/>
                         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
                           
</head>


<body>

<button  style="margin-top:2%;position:absolute;margin-left:2%;"><i class="fas fa-reply"></i><a href="../index.php">Go Back</a></button>

<form  action="index.php" method="post">
<div class="login1" >
<div class="image" style="height:460px;width:460px; margin-top:-90px">

</div>


<div class="table" style="background-color: rgba(41,40,40,0.59);">
<?php
if(isset($_POST['s']))
{
$x=$_POST['username'];
$y=$_POST['password'];
require("../config.php");
$a=mysqli_query($con,"select * from user where user='$x' and pwd='$y'" );
$b=mysqli_num_rows($a);

if( $b>0)
{
$_SESSION['user']=$x;
header('location:welcome.php');
}
else
{
echo "<p style='color:white;position:absolute;margin: 10px 50px'>wrong user</p>";
}
}
?>
<center><p style="font-size:25px; color:#FFFFFF;">LOGIN FORM</p></center>
<span style="color:#FFFFFF;font-size:20px;margin-left:30px">User Name </span><input type="text" placeholder="Name"  required class="a" name="username"/><br/>
<br/>
<span style="color:#FFFFFF;font-size:20px;margin-left:30px;">Password </span><input  type="Password" placeholder="Password " required class="a" name="password"/><br/><br/>
 <input class="b" type="submit" name="s" value ="Sign up" /><br><br><a style="margin:0 40%; color:white;" href="new.php">Regisered here</a></div>



</div>
</div>
</form>

</body>`
</html>