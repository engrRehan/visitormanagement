<?php
function connection(){
  $con=mysqli_connect("localhost", "root", "12@12345", "visitor_management");
  if(mysqli_connect_errno()){
      echo "Connection Fail".mysqli_connect_error();
  }
  return $con;
}

  ?>
