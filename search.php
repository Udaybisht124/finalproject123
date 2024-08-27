
<?php
session_start();
// $con = mysqli_connect("sql209.infinityfree.com","	if0_36263164","EDCAWWyiFOKNOK","if0_36263164_userdata");

$con=mysqli_connect("localhost","root","","userdata");

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
        <a class="navbar-brand" href="#"><img src="img\logo.png" height="40" width="40"  alt=""><b style="color: #96e6a1;">QPaper</b></a>
        <!-- ( toggle button ) -->
        <div class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </div>
        <!-- (navbar) -->
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav w-auto mx-auto" id="navbar">
          
            <a class="nav-link"  aria-current="page" href="index.php" style="color:#96e6a1;">Home</a>
          
            <a class="nav-link " href="#search"  style="color:#96e6a1;">Search Paper</a>
          
            
            <a class="nav-link" href="feedback.php"  style="color:#96e6a1;">Feedback</a>

          </div>

          <a class="btn btn-dark p-2" href="logout.php">logout</a>
        </div>
      
      </div>
    </div>  <section id="content" class="">
      <!--
        search bar ------------------------
      -->
      <div class="p-5 bg-dark" id="search">
        <div class="container ">

          <div class="h2 py-3"  style="color:#96e6a1; font-weight:bold;"> Search Question Paper that you require </div>
          
          <!-- <input type="search" name="" id="searchbar" class="form-control bg-white" placeholder="Search PDF question paper ..."> -->
      
        
          <div class="container">
                <form action="#" class="row py-5">
                    <!-- ( form title ) -->
                 
                    <!-- ( field 1 ) -->
                    <div class="col-md-auto col-12 py-lg-0 py-3">
                        
                        <select class="form-select"  id="uni">
                            <option value="panjab university">panjab university</option>
                            <option value="chandigarh university">chandigarh university</option>
                            <option value="delhi university">delhi university</option>
               
               
                          </select>
                    
                    </div>
                    <!-- ( field 2 ) -->
                    <div class="col-md-auto col-12 py-lg-0 py-3">
                        
                        <select class="form-select" id="cour">
                            <option value="bca">BCA</option>
                            <option value="bcom">BCOM</option>
                            <option value="ba.bsc(general)">BA/BSC</option>
                        </select>
                    
                    </div>
                    <!-- ( field 3 ) -->
                    <div class="col-md-auto col-12 py-lg-0 py-3">
                        
                        <select class="form-select" id="sem">
                            <option>1st</option>
                            <option>2nd</option>
                            <option>3rd</option>
                            <option>4th</option>
                            <option>5th</option>
                            <option>6th</option>
                          </select>

                    </div>
                    <div class="col-md-auto col-12 py-lg-0 py-3">
                        
                        <select class="form-select" id="mon">
                            <option>may</option>
                            <option>december</option>
                           
                        </select>

                    </div>

                    <div class="col-md-auto col-12 py-lg-0 py-3">
                        
                        <select class="form-select" id="year">
                            <option>2018</option>
                            <option>2019</option>
                            <option>2020</option>
                            <option>2021</option>
                          </select>

                    </div>
                    <!-- ( button ) -->
                    <div class="col-md-auto col-12 py-lg-0 py-3">
                        <button class="btn btn-success" id="filter"> filter papers </button>
                    </div>

                </form>
            </div>
        </div>
        <!-- end -->
          
        </div>
      
      </div>
      
      <div class="container" id="containerDiv">

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