<?php

$a=$_POST['a'];
$b=$_POST['b'];

$c=$_POST['c'];

require("../config.php");
mysqli_query($con,"INSERT INTO  `user` (`id` ,`name` ,`user` ,`pwd`)VALUES (NULL ,  '$a',  '$b',  '$c');");
header("location:index.php");





?>