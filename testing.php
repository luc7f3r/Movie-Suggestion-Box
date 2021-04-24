<?php
$con= mysqli_connect('127.0.0.1','root','');
if(!$con)
{
  echo "Not Connected";
}
if(!mysqli_select_db($con,'animesh'))
{
  echo "Database not selected!!";
}

  $mail=$_POST['email'];
  $sql="CREATE TABLE $mail(product int not null auto_increment,primary key(product))";
  if (!mysqli_query($con,$sql)) {
    echo "NOT INSERTED";
  }
  else {
    echo "Inserted";
  }
 ?>
