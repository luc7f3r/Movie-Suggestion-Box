<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=ZCOOL+QingKe+HuangYou" rel="stylesheet">
  </head>
  <body style="background-color: #383838">
  <h1 style="color:red; background-color: #383838;"><center>MOVIE SUGGESTION BOX</center></h1>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="homepage.php"> <img src="logo2.png" width="30" height="30" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="homepage.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Genres
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="action.php">Action</a>
          <a class="dropdown-item" href="comedy.php">Comedy</a>
          <a class="dropdown-item" href="fantasy.php">Fantasy</a>
          <a class="dropdown-item" href="history.php">History</a>
          <a class="dropdown-item" href="animation.php">Animation</a>
          <a class="dropdown-item" href="romance.php">Romance</a>
          <a class="dropdown-item" href="adventure.php">Adventure</a>
          <a class="dropdown-item" href="sci.php">Sci-Fi</a>
          <a class="dropdown-item" href="thriller.php">Thriller</a>
        </div>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="recomend.php">Recommendations<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="logout.php">LOGOUT<span class="sr-only">(current)</span></a>
      </li>
    </ul>
      <form class="form-inline my-2 my-lg-0" action="search.php" method="post">
        <input class="form-control mr-sm-2" type="search"  name="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-primary" type="submit" >Search</button>
      </form>
    </div>
  </nav><br>
  <div class="container" align="center">
  <table class="table table-striped table-dark">
<thead>
  <tr>
    <th scope="col">Id</th>
    <th scope="col">Movie Title</th>
    <th scope="col">Source</th>
  </tr>
</thead>
<tbody>
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
    //echo $_SESSION['uname'];
    $sql="SELECT name FROM `".$_SESSION['uname']."`";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0)
    {
      while($row=mysqli_fetch_assoc($result))
      {
        $searchq= $row['name'];
        $searchq= preg_replace("#[^0-9a-z]#i","",$searchq);
        $querry= mysqli_query($con,"SELECT * fROM moviebase WHERE original_title LIKE '%$searchq%' OR homepage LIKE '%$searchq%'") or die("CAnt search");
        $count=mysqli_num_rows($querry);
        if ($count==0) {
          echo "<h3 color:White> NO Results for".$searchq."</h3>";
        }
        else {
          while($row=mysqli_fetch_array($querry))
          {
            $title= $row['original_title'];
            $site= $row['homepage'];
            $id=$row['id'];
            echo "<tr><td>".$id."</td><td>".$title."</td><td>".'<a href= "'.$site.'">'.$site.'</a>'."</td></tr>";
            //echo '<div>'.$title.'     '.'<a href= "'.$site.'">'.$site.'</a>'.'</div>';
      }
    }
  }
  echo "</tbody>";
  echo "</table>";
}
   ?>

  </body>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>
