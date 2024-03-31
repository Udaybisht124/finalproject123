
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Anta&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="./css/style.css">
<style>
  

.input-box
{
  border: 1px solid var(--primary);
  border-radius:5px;
}
.icon
{
  font-size:2em;
  padding:0 5px;
}

.image:hover
{
    box-shadow: 0 0  40px var(--black);
}
.image> img
{
    height: 500px;
    background-color:black;
}
</style>


<body>

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
          <div class="navbar-nav w-auto mx-auto">
          
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          
            <a class="nav-link" href="home.php">Search Paper</a>
          
            <a class="nav-link" href="about.php">About Us</a>

            <a class="nav-link" href="feedback.php">Feedback</a>

          </div>

          <a class="btn btn-dark p-2" href="logout.php">logout</a>
        </div>
      
      </div>
    </div>
    <div class="container">
        <div class="row my-5">
            <div class="col-md-12">
                <h1 class="text-success mx-5"> About Us</h1>
                <h1 style="font-size:25px;"> We are a student of bca final year studing at pggc11 chandigarh and we make this website only for student of different universities. We use html,css,javascript,boostrap  languages for front-end development of a website and php language  as a back-end.
</h1>
                <h1 class="text-success">THANKS FOR VISITING OUR WEBSITES AND SUPPORTS US.</h1>
            </div>
     
                <div class="row">
                    <div class="col-md-6  image my-5">
                        <img src="img\uday.jpg" height="300" width="300"class="img mx-5">
                        <h3 class="mx-5"><b>UDAYSINGHSBISHT</b></h3>
                        <p class="mx-5">BCA 3RD YEAR STUDENT </p>
                        <div class="mx-5">
                        <a href="https://www.linkedin.com/in/uday-singh-bisht-web-developer-65613a26a/" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">LinkedIn</a>
                        <a href="https://github.com/Udaybisht124" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Github</a>
                           
                       </div>
</div>
                    <div class="col-md-6 my-5 image">
                        <img src="img\rohit.jpg" height="300" width="300" class="img mx-5">
                        <h3><b>ROHIT SINGLA</b></h3>
                        <p>BCA 3RD YEAR STUDENT</p>
                        <a href="about.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">LinkedIn</a>
                        <a href="about.php" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Github</a> </div>
                </div>
            </div>
        </div>
    </div>
    </footer>


</body>
</html>