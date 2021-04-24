 <?php
 session_start();
$con= mysqli_connect('127.0.0.1','root','');
if(!$con)
{
  echo "Not Connected";
}
if(!mysqli_select_db($con,'animesh'))
{
  echo "Database not selected!!";
}
  $Id=uniqid();
  $mail=$_POST['email'];
  $name=$_POST['name'];
  $contact=$_POST['contact'];
  $password=$_POST['psw'];
  $age=$_POST['age'];
  $result=mysqli_query($con,"SELECT * FROM users WHERE email='$mail'");
  $row=mysqli_fetch_array($result);
  if($row['email']==$mail)
  {
    echo "<script> alert('The following EMAIL or CONTACT exists!!')</script>";
    echo "PRESS BACK";
  }
  else{
  $sql="INSERT INTO users (Id,email,name,contact,password,age) VALUES ('$Id','$mail','$name','$contact','$password','$age')";
  if (!mysqli_query($con,$sql)) {
    echo "NOT INSERTED";
  }
  else {
    //echo "Inserted";
  }

  //$mail=$_POST['email'];
  $result=mysqli_query($con,"SELECT * FROM users WHERE email='$mail' and password='$password'");
  $row=mysqli_fetch_array($result);
  $sql="CREATE TABLE `" . $row['Id'] . "`(product INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(product),name varchar(20))";
  if (!mysqli_query($con,$sql)) {
    echo "NOT INSERTED";
  }
  else {
    $_SESSION['uname']=$row['Id'];
    //echo $_SESSION['uname'];
    header("location:signin.html");
  }
  }
   ?>
