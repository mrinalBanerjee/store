
<!DOCTYPE html>
<html>
<head>
     <title>Banerjee Stores Department</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="style.css">
</head>
 <body>
<nav class="navbar navbar-dark bg-primary">
  <a class="navbar-brand font-weight-bold"   href="index.php">Banerjee Stores Department</a>
    <button class="navbar-toggler btn btn-link" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="border-color:#007AFF;">

    <span class="fas fa-bars" style="font-size:27px; color:#F5FFFF;"></span>
  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
<hr style="width:100%; color:#000;">
    <ul class="navbar-nav">

      <li class="nav-item ">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="PrivacyPolicy.html">Privacy Policy</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Disclaimer.html">Disclaimer</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admins/admin.php">BSD ADMIN</a>
      </li>
    </ul>
  </div>
</nav>

<section class="home">
   <div class="home-content">
     <div class="text">
       <div class="text-one">Hello,</div>
       <div class="text-two"> Wellcome to</div>
       <div class="text-three">Banerjee Stores Department </div>
       <div class="button">
       <button>BOOKING NOW</button>
     </div>
     </div>
   </div>
 </section>

<br/>
<form action="indexx.php" method="post">
  
  <div class="container p-3 my-3 border">
  <h1>Order Booking Form</h1> <br>
  Department Name: <input  class="form-control" type="text" name="Deptname"><br>
  item: <input class="form-control" type="text" name="item"><br>
  Quantity: <input class="form-control"  type="number" name="quantity" min="1" max="100"><br>
  Address: <input class="form-control" type="text" name="Address"><br>
  <input type="submit" class="btn btn-primary" name="sub">
  </form>
  </div>
  <br/>
  <!-- carousel -->
<section class="pt-5 pb-5">
  <div class="container">
    <div class="row">
        <div class="col-6">
            <h3 class="mb-3">OUR INVENTORY</h3>
        </div>
        <div class="col-6 text-right">
            <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                <i class="fa fa-arrow-left"></i>
            </a>
            <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                <i class="fa fa-arrow-right"></i>
            </a>
        </div>
        <div class="col-12">
            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">

                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="INVENTORY\0.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">FOOD & MEDECINE</h4>
                                       
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="INVENTORY\1.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">TOILETRIES</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="INVENTORY\2.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">HOUSEHOLD REQUISITES</h4>
                                       
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">

                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="INVENTORY\3.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">GENERAL ITEMS</h4>
                                       
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="INVENTORY\4.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">WATCHES & STATIONERY</h4>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="INVENTORY\5.jpg">
                                        <h4 class="card-title">Electronics & accessories</h4>
                                       
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    
            </div>
        </div>
    </div>
</div>
</section>
</br></br>
<footer class="bg-dark text-center text-white ">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    ?? 2020 Copyright:
    <a class="text-white" href="#">Banerjee store</a>
  </div>
  <!-- Copyright -->
</footer>
</body>
</html>
