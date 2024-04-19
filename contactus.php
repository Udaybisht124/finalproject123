<?php
$con=mysqli_connect("localhost","root","","contact");
// $con = mysqli_connect("sql209.infinityfree.com","if0_36263164","EDCAWWyiFOKNOK","if0_36263164_contact");
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $message=$_POST['message'];
    
        $sql="insert into user_contact (name,email,message,number)values('$name','$email','$message','$number')";

        // inserting the record into the database
        if(mysqli_query($con,$sql)){
          $message = "Your message are Submitted Successfully!";

          // Display an alert box using JavaScript
          echo "<script>alert('$message');</script>";   // Redirect to dashboard
        
      }
        else{
            echo"error";
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

     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
     <link rel="stylesheet" href="./css/style.css">
<style>
body{
        background: linear-gradient(120deg, #d4fc79 0%, #96e6a1 100%);
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
textarea{
border:none;
outline:none;
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
        <a class="navbar-brand" href="#"><img src="img\logo.png" height="40" width="40"  alt=""><b style="color:#96e6a1;">QPaper</b></a>
        <!-- ( toggle button ) -->
        <div class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </div>
        <!-- (navbar) -->
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav w-auto mx-auto">
          
            <a class="nav-link active" aria-current="page" href="index.php" style="color:#96e6a1;">Home</a>
          

          </div>

          <!-- <a class="btn btn-dark p-2" href="logout.php">logout</a> -->
        </div>
      
      </div>
    </div>

  <div class="container border rounded shadow my-5">
    <div class="row">
      <div class="col-6">
        
        <img src="img\3.png" class="my-5" alt="">

      </div>


      <div class="col-4" style="border:none;">

      

      <div class="w-100 py-3 "></div>

      <form action="" method="post" class="border-top my-3 ">

        <div class="h3 py-3">Contact Us </div>
        
        <!-- username -->
        <div class="input-box d-flex my-3">
        <span class="material-symbols-outlined">
person
</span>
        <input type="text"  name="name" placeholder="name" class="form-control" required>

        </div>
   <!-- email -->
   <div class="input-box d-flex my-3">
   <span class="material-symbols-outlined">
mail
</span>
        <input type="email"  name="email" placeholder="email" class="form-control" required>

        </div>
<!-- number -->
<div class="input-box d-flex my-3">
<span class="material-symbols-outlined">
call
</span>
        <input type="text"  name="number" placeholder="number" class="form-control" required>

        </div>
<!-- message -->
<div class="input-box d-flex my-3">
    
       <textarea name="message" placeholder="message" id="" cols="90" rows="10"></textarea>
</div>
<input type="submit" value="submit" name="submit" class="btn btn-dark">
        
      </div>
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


</body>
</html>