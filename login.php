<?php


error_reporting(0);
session_start();
session_start();
include 'connection.php';
if(isset($_POST['login'])){

$email=$_POST['email'];
$password=$_POST['password'];

$select=mysqli_query($conn,"SELECT *FROM register WHERE email='$email'AND password='$password'");
$row=mysqli_fetch_array($select);
$type= $row['type']  ;

$select2=mysqli_query($conn,"SELECT *FROM register WHERE email='$email'AND password='$password'");
$check_user=mysqli_num_rows($select2);
if($check_user==0){
    echo '<script type="text/javascript">';
echo 'alert("data is not found in database");';
echo 'window.location.href ="login.php"';
echo '</script>';
}
if($check_user==1){
  $_SESSION["status"]=$row["status"];
  $_SESSION["username"]=$row["username"];
  $_SESSION["password"]=$row["password"];
  $_SESSION["user_id"]=$row["id"];


    if($type=="admin"){
      session_start();
      $_SESSION["username"] = $username;
      $_SESSION["id"] = $id;
      $_SESSION["user_id"]=$row["id"];
      echo ("<SCRIPT LANGUAGE='JavaScript'>
      window.alert('admin is Login Successfully')
      window.location.href='admin/admin.php';
      </SCRIPT>");

      

}
    

    if($type=="user"){

      session_start();
                            $_SESSION["username"] = $username;
                            $_SESSION["id"] = $id;
                            $_SESSION["user_id"]=$row["id"];
                            echo ("<SCRIPT LANGUAGE='JavaScript'>
                            window.alert('user Login Successfully')
                            window.location.href='user/user.php';
                            </SCRIPT>");

                            

}
if($type=="admininstrator"){

  session_start();
                        $_SESSION["username"] = $username;
                        $_SESSION["id"] = $id;
                        $_SESSION["user_id"]=$row["id"];
                        echo ("<SCRIPT LANGUAGE='JavaScript'>
                        window.alert('admininstrator Login Successfully')
                        window.location.href='admininstrator/admininstrator.php';
                        </SCRIPT>");

                        

}
  
 
    
    

}
}

?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Login page</title>
    <link rel="stylesheet" href="css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
  body {
    background-image: url(images/BG.jfif);
    background-size: cover;
    background-position: center;
  }
</style>
  </head>
  <body>
    <?php

include 'nav.php';

?>

<form action="login.php" method="POST">

<section class="vh-120 " style="background-color: #9A616D;">
  <div class="container py-5 mt-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="images/register.jpg"
                alt="login form" class="img-fluid h-100" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form>

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0 text-end">                    <img src="images/ava.jpg" style="width:220px; height:200px;border-radius: 100%; ">
</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
<label class="form-label" for="form2Example17">LOGIN AS</label>
                  <select class="form-select mb-3" name="roll" aria-label="Default select example">
  <option value disabled selected>LOGIN AS</option>
  <option value="admin">ADMIN</option>
  <option value="user">USER</option>
</select>

                  <div class="form-outline mb-4">
                                        <label class="form-label" for="form2Example17">EMAIL</label>

                    <input type="text" id="form2Example17" name="email" class="form-control form-control-lg" />
                  </div>

                  

                  <div class="form-outline mb-4">
                                        <label class="form-label" for="form2Example27">PASSWORD</label>

                    <input type="password" name="password" id="form2Example27" class="form-control form-control-lg" />
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-primary btn-lg btn-block w-100" name="login" type="submit">Login</button>
                  </div>

                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="registration.php"
                      style="color: #393f81;">Register here</a></p>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>  

</body>
</html>