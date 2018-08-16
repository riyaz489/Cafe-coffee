<html>
<head>
								<title></title>
								<link rel="stylesheet" type="text/css" href="css/menu.css"/>
								<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
                                <link rel="stylesheet" type="text/css" href="css/menu1.css"/>
								
								
								
				</head>
				
  <body>
			
  <nav class="navbar navbar-expand-lg navbar-light " style="background-color:  rgba(218, 255, 148, 0.742);">
        <a class="navbar-brand" href="index.php">
            <img src="IMAGES/logo.png" width="90" height="50" class="d-inline-block align-top" alt="">

        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about us.php">About Cafe</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="SPECIALS.php">Specials</a>
                </li><li class="nav-item">
                    <a class="nav-link" href="EVENTS.php">Events</a>
                </li><li class="nav-item">
                    <a class="nav-link" href="admin/index.php">Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact us.php">Contacts</a>
                </li>
                <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="menu1.php" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Menu
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="menu1.php">Foods</a>
          <a class="dropdown-item" href="combo offers.php">Combo Offers</a>
          <a class="dropdown-item" href="beverages.php">Beverages</a>
        </div>
      </li>
            </ul>
        </div>
    </nav>
<!--end navbar-->
<br><br>

				
<div class="maindiv">
	<div class="leftdiv">
				
				<center><a style="text-decoration:none;color:#000000;" href="hot coffee.php"><p  class="leftdiv1">Hot Coffee</p></a></center>
				<center><a style="text-decoration:none;color:#000000;" href="cold coffee.php"><p  class="leftdiv1">Cold Coffee</p></a></center>
				
					<center><a style="text-decoration:none;color:#000000;" href="frappe.php"><p  class="leftdiv1">Frappe</p></a></center>
				<center><a style="text-decoration:none;color:#000000;" href="frosteals.php"><p  class="leftdiv1">frosteals</p></a></center>
								
    </div>
	<div class="rightdiv">
	<?php
	require("config.php");
$x=mysqli_query($con,"select * from beverages where menu_type='1'");
while($y=mysqli_fetch_array($x))
{
?>
				<div class="rightdiv1">
					<div class="rightdiv1a"><img src="<?php echo 'img/'.$y[3]; ?>" style="height:279px; width:279px; "></div>
					<div class="rightdiv1b"><center><p><?php echo $y[2]; ?>(&nbsp;<img src="IMAGES/download.png" style="height:11px; width:13px;"><?php echo $y[4]; ?>)</p></center></div>
				</div>
				
<?php
}
?>				
				
				
				
				
				
	</div>
</div>
				
							
</body>
</html>			