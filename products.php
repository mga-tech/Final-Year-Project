<?php

include 'connection.php';



if(isset($_POST['book'])){
     
  echo '<script type=""text/javascript>';
echo 'alert("login first for booking");';
echo 'window.location.href = "login.php"';
echo '</script>';


}



 
 
 ?>




<!DOCTYPE html>
<html>
<head>
    <title>Online Tailor Website - suits</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/footer.css">

    <!-- Custom CSS -->
    <style>
    body {
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    min-height: 100vh;
    padding-top: 70px;
}
.category-container {
  margin-top: 50px;
}

.category-card {
  height: 350px;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  transition: box-shadow 0.3s ease-in-out;
  overflow: hidden;
  position: relative;
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
  cursor: pointer;
}

.category-card:hover {
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
  transform: scale(1.1);
}

.overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: rgba(0, 0, 0, 0.5);
  padding: 10px;
  font-size: 1.5rem;
  font-weight: bold;
  color: #fff;
  text-align: center;
  margin: 0;
  opacity: 0;
  transition: opacity 0.3s ease-in-out;
}

.category-card:hover .overlay {
  opacity: 1;
}

.view-suits {
    position: absolute;
    bottom: 100px;
  left: 210px;
  right: 0;
  transform: translate(-50%, -50%);
  display: none;
  background-color:skyblue;
  color: #000;
  border: limegreen;
  padding: 20px 10px;
  font-size: 1.2rem;
  border-radius: 20px;
  cursor: pointer;
  z-index: 1;
  font-weight: bold;
  text-decoration: none;
  
}

.category-card:hover .view-suits {
  display: block;
}

.category-card-title {
    position: absolute;
  bottom:50px;
  left: 0;
  right: 0;
  margin: 0;
  display: block;
  background-color: rgba(0, 0, 0, 0.8);
  padding: 20px;
  font-size: 1.2rem;
  font-weight: bold;
  color: #fff;
  text-align: center;
}
.category-card-price {
    position: absolute;
  bottom:0;
  left: 0;
  right: 0;
  margin: 0;
  display: block;
  background-color: rgba(0, 0, 0, 0.8);
  padding: 20px;
  font-size: 1.2rem;
  font-weight: bold;
  color: #fff;
  text-align: center;
}
.intro {
  background: url('images/ban2.jpeg') no-repeat center center fixed;
  background-size: cover;
  height: 100vh;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  color: white;
  text-align: center;
  font-size: 2em;
  font-weight: bold;
  animation: fadein 3s;
}
.social-media-icons {
  display: flex;
  justify-content: center;
  align-items: center;
}

.social-media-icons a {
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 0 10px;
  width: 80px;
  height: 80px;
  border-radius: 50%;
  background-color: #fff;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  transition: all 0.3s ease-in-out;
}

.social-media-icons a:hover {
  background-color: #007bff;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
}

.social-media-icons i {
  color: #555;
  font-size: 28px;
  transition: all 0.3s ease-in-out;
}

.social-media-icons a:hover i {
  color: #fff;
  transform: scale(1.1);
}
.col-md-3:hover {
  
    transform: scale(1.1);
    transition: all 0.3s ease-in-out;
  }
</style>




</head>
<body>
    <?php
        include 'nav.php';
    ?>
      

    <div class="container category-container" id="categories">
    <div class="row justify-content-center">
        <?php
            $id = $_GET['id'];
            // SQL query to fetch categories
            $sql = "SELECT * FROM `products` WHERE c_id='$id'";
            $result = mysqli_query($conn, $sql);

            // Check if categories exist
            if (mysqli_num_rows($result) > 0) {
                // Loop through each category
                while ($row = mysqli_fetch_array($result)) {
                    // Display category card
                    echo '<div class="col-lg-4 col-md-6 mb-4">';
                    echo '<div class="category-card" style="background-image: url(\'admin/products/'.$row['image'].'\');">';
                    echo '<div class="overlay">';
                    // Display category name
                    echo '<div class="category-card-title">' . $row['p_name'] . '</div>';
                    echo '<div class="category-card-price">' . $row['p_price'] . '</div>';

                    // Create a form around the "BOOK NOW" button
                    echo '<form action="products.php" method="POST">';
                    echo '<input type="hidden" name="product_id" value="' . $row['p_id'] . '">';
                    echo '<div class="view-suits">';
                    echo '<button type="submit" name="book" class="btn btn-success w-100 p-3">BOOK NOW</button>';
                    echo '</div>';
                    echo '</form>';

                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo '<div class="col-12 text-center">No categories found.</div>';
            }

            // Close database connection
            mysqli_close($conn);
        ?>
        </div>
    </div>
    </div>
  
    <div class=" why-us-container bg-light"> <h2 class="text-center">Why Stitch to Fit?</h2>
    <div style="display: flex; align-items: center; justify-content: center;">
  <img src="images/logo1.jpeg" alt="WhatsApp" style="width: 380px; height: 150px;">
</div>
        <div class="why-us-inner">
          <div class="row mt-5">
            <div class="col-md-1 col-sm-1 why-us-image"> <img class="" src="https://stitchtofit.co/frontend/assets/images/Professional designing &amp; tailoring experience.svg"> </div>
            <div class="col-md-11 col-sm-11 why-us-text">
              <h3>Professional designing &amp; tailoring experience</h3>
              <p>Our highly skilled and professional tailors have years of experience of making custom made dresses with the trendiest designs for men, women and children alike. Our experts work closely with the customers to ensure that they get to enjoy perfectly fitting dresses having the best and latest designs.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-1 col-sm-1 why-us-image"><img class="" src="https://stitchtofit.co/frontend/assets/images/freepickup_&amp;_delivery.svg"></div>
            <div class="col-md-11 col-sm-11 why-us-text">
              <h3>Free pickup &amp; timely delivery</h3>
              <p>Your dress material and the sample garment that fits you perfectly will be picked up by our representative as soon as you place an order. Your custom tailored outfit and the sample garment will be properly packaged and securely delivered at your doorstep within 7 days. You will avail both pickup and delivery services for free.</p>
            </div>
          </div>
          <div class="row mb-5">
            <div class="col-md-1 col-sm-1 why-us-image"><img class="" src="https://stitchtofit.co/frontend/assets/images/convenience.svg"></div>
            <div class="col-md-11 col-sm-11 why-us-text">
              <h3>Convenience</h3>
              <p>Enjoy a hassle free experience of getting your desired outfit stitched and delivered at your doorstep. With Stitch to Fit, your dream dress is just a phone call away.</p>
            </div>
          </div>
        </div>
      </div>
    <script>
        function scrollToCategories() {
            // Get the categories section
            const categories = document.getElementById("categories");
            // Scroll to the categories section
            categories.scrollIntoView({ behavior: "smooth" });
        }
    </script>
    </br>
   
    <footer>
  <div class="container">
    <div class="row">
      
      <div class="col-lg-6 col-md-6">
        <h4>Contact Us</h4>
        <ul class="list-unstyled">
          <li><i class="fa fa-phone"></i> 03134978900</li>
          <li><i class="fa fa-envelope"></i> TAILOR@GMAIL.COM</li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-6 d-flex justify-content-end align-items-center">
      <a href="https://wa.me/03134978900"><img src="images/whatsapp.png" alt="WhatsApp" style="width: 100px; height: 100px;" ></a>
      </div>
    </div>
  </div>
</footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>