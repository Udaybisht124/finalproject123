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
        background: linear-gradient(120deg, #d4fc79 0%, #96e6a1 100%);
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

    <!-- Hero Section -->
    <div class="container d-flex mt-5">
        <div class="jumbotron  bg-dark">
            <h1 class="display-4" style="color:#96e6a1;">About Us</h1>
            <p class="lead text-white">We are a passionate group of developers creating amazing  websites. Currently we are creating a website for benefits of university level student known as previous year question paper in this we can use the html,css,boostrap and javascript as a fronted and php as backend.</p>
        </div>
    </div>

    <!-- Developer Cards -->
    <div class="container mt-5 ">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="img/uday.jpg" class="card-img-top py-5" alt="Developer 1" height="466px;">
                    <div class="card-body bg-dark">
                        <h5 class="card-title text-white">Uday singh Bisht</h5>
                        <p class="card-text text-success">Full Stack Web Developer</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 py-5">
                <div class="card">
                    <img src="img/rohit.jpg" class="card-img-top py-5" alt="Developer 1">
                    <div class="card-body bg-dark">
                        <h5 class="card-title text-white">Rohit</h5>
                        <p class="card-text text-success" >Full Stack Web Developer</p>
                    </div>
                </div>
            </div>

            <!-- Add more developer cards as needed -->
        </div>
    </div>

    <!-- Include Bootstrap JS (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
