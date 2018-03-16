<?php
  $var1=$GET['UserName'];
  $var2=$GET['Password'];
  $con=mysqli_connect("localhost","root","vishnu123","proweb");
  $res=mysqli_query($con,"select *from user");
  $a=mysqli_fetch_array($res);
  if($a)
    echo "User exists!";
  else
    echo "User doesn't exists";
 ?>

