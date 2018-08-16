<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Hanalei+Fill|Indie+Flower|Lobster" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" type="text/css" href="css/menu.css"/>
<link rel="stylesheet" type="text/css" href="css/projectcafe.css"/>
<link rel="stylesheet" type="text/css" href="css/menu1.css"/>


<title>Cafe Coffee</title>
<style>
  .ima{
    height:400px;
    width:780px;

  }
</style>
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
<br><br><br><br>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/js/bootstrap.min.js"></script>
<br>
<div class="container">
  <img class="img-fluid mx-auto d-block ima img-thumbnail" src="IMAGES/photo.jpg"  >


<div class="line " >
<center style=" filter: contrast(170%) brightness(180%);">The right place to have good rest !</center>
					
</div><br><br>
					
<div style="font-size:25px;font-family: 'Dancing Script', cursive; margin-left:4%; color:rgba(176, 239, 255, 0.99);" class="row" >
	<div class="col-sm-6 "><img class="img-fluid  mx-auto d-block" src="IMAGES/C4.PNG" ><p >The feeling of satisfaction and<br/> the desire to come back again<br/> won't leave you!</p></div>

	<div class="col "><img class="img-fluid  mx-auto d-block" src="IMAGES/c5.PNG" class="img1"><p >Only here you will meet the<br/> combination of exquisite cuisine, <br/>pleasant interior and great service!</p></div>
</div>	<br>	<br>	<br>	  
				  
<div  style="font-size:55px;font-family:'Hanalei Fill', cursive;  margin-bottom:50px; " class="row" >
  
	<div class="col-sm-4">
    <h1><center><a style="text-decoration:none;color:rgba(104, 82, 21, 0.99);filter:contrast(80%) brightness(200%);"   href="menu1.php">Food</a></center></h1><br>
  <img class="img-fluid  mx-auto d-block offer3" src="IMAGES/c24.PNG" style="height:150px; max-width=300px;">
</div>

		<div class="col-sm-4">			
    <h1><center><a style="text-decoration:none;color:rgba(104, 82, 21, 0.99);filter:contrast(80%) brightness(200%);" href="beverages.php">Beverages</a></center></h1><br>
  <img class="img-fluid  mx-auto d-block offer3" src="IMAGES/c25.PNG" style="height:150px; max-width=500px;">
</div>
					
					
  <div class="col-sm-4"><h1><center><a  style="text-decoration:none;color:rgba(104, 82, 21, 0.99);filter:contrast(80%) brightness(200%);" href="combo offers.php">Combo deals</a></center></h1><br>
  <img class="img-fluid  mx-auto d-block offer3" src="IMAGES/c27.PNG" style="height:150px; max-width=500px;">

</div>

 

</div>
</div>
<div style="width=100% !important;">
<?php
include ('footer.html');
?>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/js/bootstrap.min.js"></script>
</body>
</html>