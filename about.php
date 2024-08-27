<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>
  body{
    background: linear-gradient(120deg,  #94E3AA 0%, #E0F8E8 100%);
}
.bg-body-tertiary {
    --bs-bg-opacity: 1;
    background-color: #000 !important;
}
</style>
<body>
    <!-- Navbar -->
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
          
            <a class="nav-link active text "  style="color:#96e6a1;" aria-current="page" href="index.php">Home</a>
          
            <a class="nav-link "  style="color:#96e6a1;" href="login.php">Search Paper</a>
          
            <a class="nav-link"  style="color:#96e6a1;" href="about.php">About Us</a>

            <a class="nav-link"  style="color:#96e6a1;" href="feedback.php">Feedback</a>

          </div>

          <a class="btn btn-dark p-2" href="login.php">login</a>
        </div>
      
      </div>
    </div>
    <div class="container border rounded shadow my-5" style="background:black;">
    <div class="row">
      <div class="col-6">
        
      <div class="col-md-6 mx-5 my-5" style="border:2px solid white;background:black;">
                <h1 style="color:#96e6a1;">About Us</h1>
                <p class="my-5 text-white" style="font-size:25px;">We are the passionate web developer for a final year project we create a website  previous year question paper.This website is the platform on which students of different university like punjab univeristy, chandigarh univeristy etc gets the pyq of different stream. </p>
                <!-- <p class="my-5 text-white" style="font-size:20px;">we used html,css,boostrap as a frontend language for website. Php and javascript used as a backend of a website. </p> -->
            </div>

      </div>
  
      <div class="col-3">
      <!-- <img src="logo.png" alt="" width="50px" height="50px"> -->
      <!-- <div class="h1 py-3">  QPaper </div> -->
      <div class="card my-3 ">
    <img class="card-img-top" src="img/uday.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">UDAY SINGH BISHT</h5>
      <p class="card-text">FULL STACK WEB DEVELOPER</p>
 
    </div>
  </div>
  <button type="button" class="btn btn-primary mx-3">LINKEDIN</button>
  <button type="button" class="btn btn-danger"> GITHUB</button>
    </div>
    <div class="col-3">
      <div class="card my-3">
    <img class="card-img-top" src="img/rohit.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">UDAY SINGH BISHT</h5>
      <p class="card-text">FULL STACK WEB DEVELOPER</p>
 
    </div>
  </div>
  <button type="button" class="btn btn-primary mx-3">LINKEDIN</button>
  <button type="button" class="btn btn-danger"> GITHUB</button> 
 
</div>
     
  </div>
</div>
    <!-- Hero Section -->
  
    <!-- Include Bootstrap JS (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <footer id="footer" style="background:black;">
      <div class="container border-top py-5">

        <div class="h5"> Copyright &copy; <a href="https://github.com/Udaybisht124">Uday</a> and <a href="" class="">Rohit</a>  </div>
        
      </div>
    </footer>
  </body>
</html>
