<?php 
  $dbhost="localhost";
  $dbuser="root";
  $dbname="store";
  $dbpass="";
  $conn= mysqli_connect($dbhost,$dbuser,$dbpass);
  mysqli_select_db($conn,$dbname);
 ?>