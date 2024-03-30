
<?php
session_start();
$server="	sql303.infinityfree.com";
$username="if0_36269640";
$password="DazRQB5zqRzvdhp";
$dbname="if0_36269640_userdata";
$con = mysqli_connect($server,$username,$password,$dbname);

if (!$con)
{
    die("Connection failed: " . mysqli_connect_error());
}

$userprofile=$_SESSION['name'];
if($userprofile == true){

}
else{
  header('location:login.php');
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Uday & Rohit</title>

  <!-- style -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  
  <link rel="stylesheet" href="css/style.css">
  <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
  
</head>

<body>

  
  <main id="main">




    
    <div class="w-100">
    <!--
      -------------------------------
      | navbar login with nav links |
      -------------------------------
    -->
    <div class="navbar navbar-expand-md bg-warning bg-body-tertiary">
      <div class="container">
        <!-- ( brandname ) -->
        <a class="navbar-brand" href="#"><img src="img\logo.png" height="40" width="40"  alt=""><b>QPaper</b></a>
        <!-- ( toggle button ) -->
        <div class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </div>
        <!-- (navbar) -->
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav w-auto mx-auto" id="navbar">
          
            <a class="nav-link"  aria-current="page" href="index.php">Home</a>
          
            <a class="nav-link " href="#search">Search Paper</a>
          
            <a class="nav-link" href="#">About Us</a>

            <a class="nav-link" href="feedback.php">Feedback</a>

          </div>

          <a class="btn btn-dark p-2" href="logout.php">logout</a>
        </div>
      
      </div>
    </div>\  <section id="content" class="">
      <!--
        search bar ------------------------
      -->
      <div class="p-5 bg-light" id="search">
        <div class="container ">

          <div class="h2 py-3 "> Search Question Paper that you require </div>
          
          <input type="search" name="" id="searchbar" class="form-control bg-white" placeholder="Search PDF question paper ...">
        
        </div>  </div>
      
      <div class="container">

        <div id="main_data_container">
          <!-- target by id and fetch data -->
        </div>

      </div>
    </section>

    <!--
      footer section ===============================================================
    -->
    <footer id="footer">
      <div class="container border-top py-5">

        <div class="h5"> Copyright &copy; <a href="https://github.com/Udaybisht124">Uday</a> and <a href="" class="">Rohit</a>  </div>
        
      </div>
    </footer>

  </main>

  <!-- script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="js\data.js"></script>
  <script src="js\script.js"></script>
  <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
</body>
</html>