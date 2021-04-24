<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Movie Suggestion Box</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=ZCOOL+QingKe+HuangYou" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1 style="color:red; background-color:black;"><center>MOVIE SUGGESTION BOX</center></h1>
    <hr>
      <div class="container" align="center">
        <div class="jumbotron">
          <h1 class="display-4">Sign Up To Continue</h1>
          <p class="lead">Please fill in this form to create an account.</p>
          <hr class="my-4" style="background-color:rgb(32, 170, 34);">
          <form name="f1" onsubmit="return validateform()" method="post" action="database.php">

          <label for="name"><br>Name : </label>
         <input type="text" placeholder="Enter Name" name="name" required></input><br>

         <label for="email"><br>Email : </label>
         <input type="text" placeholder="Enter Email" name="email" required></input><br>

          <label for="contact"><br>Contact : </label>
         <input type="text" placeholder="Enter contact" name="contact" required></input><br>

         <label for="psw"><br>Password : </label>
         <input type="password" placeholder="Enter Password" name="psw" id="password" required></input><br>

         <label for="psw-repeat"><br>Repeat Password : </label>
         <input type="password" placeholder="Repeat Password" name="psw-repeat" id="repeat" required></input><br>

         <label for="age"><br>Age : </label>
         <input type="text" placeholder="Age" name="age" id="age" length="5" required></input><br>


         <p>By creating an account you agree to our <a href="terms.html">Terms & Privacy</a>.</p>
         <p><button type="submit"value="insert" class="btn btn-outline-success">Next</button></p>
         Already have an account? <a href="signin.html">Log in</a>.

         </form>
        </div>
      </div>
  </body>
  <script type="text/javascript" src="sign.js">

  </script>
</html>
