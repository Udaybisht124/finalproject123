

<?php
session_start();
// $server="sql209.infinityfree.com";
// $username="if0_36263164";
// $password="EDCAWWyiFOKNOK";
// $dbname="if0_36263164_feedback1";

// $con = mysqli_connect("sql209.infinityfree.com","if0_36263164","EDCAWWyiFOKNOK","if0_36263164_feedback1");
// $con=mysqli_connect("	sql209.infinityfree.com","	if0_36263164","EDCAWWyiFOKNOK","if0_36263164_feedback1");
$con=mysqli_connect("localhost","root","","feedback1");
if (!$con)
{
    die("Connection failed: " . mysqli_connect_error());
}

// $userprofile=$_SESSION['name'];
// if($userprofile == true){

// }
// else{
//   header('location:login.php');
// }

?>
<?php
// $server="sql209.infinityfree.com";
// $username="if0_36263164";
// $password="EDCAWWyiFOKNOK";
// $dbname="if0_36263164_feedback1";
// $con = mysqli_connect($server,$username,$password,$dbname) or die("error coming to create a connection");
// $con=mysqli_connect("	sql209.infinityfree.com","	if0_36263164","EDCAWWyiFOKNOK","if0_36263164_feedback1");
// $con = mysqli_connect("sql209.infinityfree.com","if0_36263164","EDCAWWyiFOKNOK","if0_36263164_feedback1");
$con=mysqli_connect("localhost","root","","feedback1");
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $feedback=$_POST['feedback'];
    
    // checking if the password and confirm password fields match
        $sql="insert into user_feedback1 (name,email,feedback)values('$name','$email','$feedback')";

        // inserting the record into the database
        if(mysqli_query($con,$sql)){
          $message = "Your Feedback are Submitted Successfully!";

          // Display an alert box using JavaScript
          echo "<script>alert('$message');</script>";   // Redirect to dashboard
        
      }
        else{
            echo"error in doing feedback";
        }
    
}
mysqli_close($con);
?>





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
  body{
    background: linear-gradient(120deg,  #94E3AA 0%, #E0F8E8 100%);
}
.bg-body-tertiary {
    --bs-bg-opacity: 1;
    background-color: #000 !important;
}

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

#footer {
    /* background: var(--black); */
    background: black;
}
</style>


<body class="">

    <!--
      -------------------------------
      | navbar login with nav links |
      -------------------------------
    -->
    <div class="navbar navbar-expand-md bg-warning bg-body-tertiary">
      <div class="container">
        <!-- ( brandname ) -->
        <a class="navbar-brand" href="home.php"><img src="img\logo.png" height="40" width="40"  alt=""><b style="color:#96e6a1;">QPaper</b></a>
        <!-- ( toggle button ) -->
        <div class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </div>
        <!-- (navbar) -->
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav w-auto mx-auto">
          
            <a class="nav-link active " style="color:#96e6a1;" aria-current="page" href="index.php">Home</a>
          
            <!-- <a class="nav-link" href="login.php">Search Paper</a> -->
          
            <!-- <a class="nav-link" href="about.php">About Us</a>  -->

            <!-- <a class="nav-link" href="feedback.php">Feedback</a> -->


          </div>
<!-- 
          <a class="btn btn-dark p-2" href="logout.php"><b>logout</b></a> -->
        </div>
      
      </div>
    </div>

  <div class="container border rounded shadow my-5">
    <div class="row">
      <div class="col-6">
        
        <img src="img\3.png" class="my-5" alt="">

      </div>
      <div class="col"></div>

      <div class="col-4">
      <!-- <img src="logo.png" alt="" width="50px" height="50px"> -->
      <!-- <div class="h1 py-3">  QPaper </div> -->

      <div class="w-100 py-3 "></div>
      <div class="h3 py-3 mx-5 text-success"><b>FEEDBACK!</b> </div>
      <form action="" method="post" class="border-top my-3 ">
        
        <!-- username -->
        <div class="input-box d-flex my-3">
        <span class="icon material-symbols-outlined">person</span>
        <input type="text"  name="name"placeholder="username" class="form-control" required>

        </div>
        <!-- email  -->
        <div class="input-box d-flex my-3">
        <span class="icon material-symbols-outlined">passkey</span>
        <input type="text" name="email" placeholder="email" class="form-control" required>

        </div>
  <!-- feedback -->
  <div class="input-box d-flex my-3">
       <textarea name="feedback" placeholder="enter your feedback" cols="60" rows="10"></textarea>
        </div>
        <input type="submit" value="SUBMIT" name="submit" class="btn btn-dark">
          </form>

      </div>

      <div class="col"></div>

    </div>
  </div>
  <footer id="footer">
      <div class="container border-top py-5">

        <div class="h5"> Copyright &copy; <a href="https://github.com/Udaybisht124">Uday</a> and <a href="" class="">Rohit</a>  </div>
        
      </div>
    </footer>

