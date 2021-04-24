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

    $name=$_POST['name'];

    $password=$_POST['psw'];
    $sql="INSERT INTO prajwal (Name,password) VALUES ('$name','$password')";
    if (!mysqli_query($con,$sql)) {
      echo "NOT INSERTED";
    }
    else {
      echo "Inserted";
    }
    header("location:signin.html");
?>
