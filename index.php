
<?php
session_start();
// $con = mysqli_connect("sql209.infinityfree.com","if0_36263164","EDCAWWyiFOKNOK","if0_36263164_userdata");
$con=mysqli_connect("localhost","root","","userdata");
if (!$con)
{
    die("Connection failed: " . mysqli_connect_error());
}

// $_SESSION["name"] = $name;
        
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
<style>
body{
  background: linear-gradient(120deg, #E0F8E8 0%, #94E3AA 100%);
}
.bg-body-tertiary {
    --bs-bg-opacity: 1;
    background-color: #000 !important;
}

#footer {
    /* background: var(--black); */
    background: black;
}
</style>
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
        <a class="navbar-brand" href="#"><img src="img\logo.png" height="40" width="40"  alt=""><b style="color:#96e6a1;">QPaper</b></a>
        <!-- ( toggle button ) -->
        <div class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </div>
        <!-- (navbar) -->
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav w-auto mx-auto" id="navbar">
          
            <a class="nav-link active text "  style="color:#96e6a1;" aria-current="page" href="#main">Home</a>
          
            <a class="nav-link "  style="color:#96e6a1;" href="login.php">Search Paper</a>
          
            <a class="nav-link"  style="color:#96e6a1;" href="about.php">About Us</a>

            <a class="nav-link"  style="color:#96e6a1;" href="feedback.php">Feedback</a>
           
            <a class="nav-link"  style="color:#96e6a1;" href="contactus.php">Contact Us</a>
          </div>

          <a class="btn btn-dark p-2" href="login.php">login</a>
        </div>
      
      </div>
    </div>
    <!--
      header section ==============================================================
    -->
    <header class=" border-bottom" id="header">

      <div class="container py-5">
      <div class="row">
        <div class="col"></div>
      </div>
      
      <div class="row">
        <div class="col-6 d-grid align-items-center">
          
          <div>

            <div class="h1 pb-5 text-dark"> PREVIOUS YEAR QUESTION PAPERS</div>
            
            <div class="lead text-success">Here we can provide a previous year question papers for different universities for benifits of a student.</div>
          
            <a href="login.php" class="btn btn-outline-dark mt-5 px-3"> Search Paper </a>
          
          </div>

        </div>
        <div class="col-6 text-center">
          <img src="img\3.png" class="my-5" style="background:none;" alt="" width="500px" height="500px" >
        </div>

      </div>
      <marquee direction="right"><P class="text-dark" style="font-size:2rem;"><b>HELLO WE ARE MAKING THIS WEBSITE ONLY FOR STUDENT BENEFITS OF UNIVERSITY LEVEL</b></P></marquee>
    </header>
<div>   

</div>

<!--
    university section ========================================================================================================================
-->
<section id="university">


  
  <div class="container py-5  ">

<h1 style="font-size:40px;"><span class="h1 text-success" style="text-decoration:underline; text-decoration-color:black;">AVAILABLE</span> <span class="text-dark" style="text-decoration:underline;text-decoration-color:black;">UNIVERSITIES</span> </H1>
<br><br>
    <div class="d-flex  gap-2">

      <div class="card" style="width:50rem;">
        <img src="img\puimg.jpeg" class="card-img-top" alt="...">
        <div class="card-body bg-dark">
          <h5 class="card-title text-white"><b>PANJAB UNIVERSITY</b></h5>
          <p class="card-text " style="color:white;">This is the best univeristy in Chandigarh</p>
          
          <a href="https://pu.ac.in/" class="btn btn-secondary text-white">Read More</a>
        </div>
      </div>
      
      <div class="card" style="width:50rem;">
        <img src="img\chdchuni.jpeg" class="card-img-top" alt="...">
        <div class="card-body bg-dark">
          <h5 class="card-title text-white"><b>CHANDIGARH UNIVERSITY</b>
          </h5>
          <p class="card-text text-white">This is the best univeristy in Punjab</p>
          
          <a href="https://www.cuchd.in/" class="btn btn-secondary text-white">Read More</a>
        </div>
      </div>
      
      <div class="card" style="width:50rem;">
        <img src="img\delhi-university.jpg" class="card-img-top" alt="...">
        <div class="card-body bg-dark" >
          <h5 class="card-title text-white"><b>DELHI UNIVERSITY</b></h5>
          <p class="card-text text-white">This is the best univeristy in delhi.</p>
          
          <a href="https://www.du.ac.in/" class="btn btn-secondary text-white">Read More</a>
        </div>
      </div>
     
      <div class="card " style="width:50rem;">
        <img src="img\pupat.png" class="card-img-top" alt="...">
        <div class="card-body bg-dark ">
          <h5 class="card-title text-white"><b>PANJABI UNIVERSITY PATIALA</b></h5>
          <p class="card-text text-white">This is the best univeristy in located at Panjab</p>
          
          <a href="http://punjabiuniversity.ac.in/" class="btn btn-secondary text-white">Read More</a>
        </div>
        
      </div>
      
      <div class="card" style="width:50rem;">
        <img src="img\nitkuru.jpeg" class="card-img-top" alt="...">
        <div class="card-body bg-dark">
          <h5 class="card-title text-white"><b>NIT KURUKSHETRA</b></h5>
          <p class="card-text text-white">This is the best university located at Haryana Kurukshetra</p>
          
          <a href="https://nitkkr.ac.in/" class="btn btn-secondary text-white">Read More</a>
        </div>
      </div>
      
      
    </div>
  </div>
</section>
    <!--
      content section =======================================================
    -->
  
<!-- Setup and start animation! -->

<footer id="footer">
      <div class="container border-top py-5">

        <div class="h5"> Copyright &copy; <a href="https://github.com/Udaybisht124">Uday</a> and <a href="" class="">Rohit</a>  </div>
        
      </div>
    </footer>

</body>

</html>