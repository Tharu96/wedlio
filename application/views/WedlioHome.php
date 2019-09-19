<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>

  <!-- Start your project here-->

  <!--Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light white ">
    <a class="navbar-brand" href="#">
      <img src="img/assets/WEDLIO5.png" height="50" alt="mdb logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarColor03">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
          <a class="nav-link" href="#">PLANNING TOOLS <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">WEDDING VISION</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">LOCAL VENDORS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">GALLERY</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">BUDGETER
          </a>
          <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        
      </ul>
      <ul class="navbar-nav ml-auto font-weight-bold">
          <li class="nav-item">
              <a class="nav-link pink-text" href="#">SIGN UP</a>
            </li>
            <li class="nav-item">
              <a class="nav-link pink-text" href="#">LOG IN</a>
            </li>
        
      </ul>
    </div>
  </nav>
  
  <!--/.Navbar -->


  

  <!--Carousel Wrapper-->
<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-1z" data-slide-to="1"></li>
      <li data-target="#carousel-example-1z" data-slide-to="2"></li>
      
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
      <!--First slide-->
      <div class="carousel-item active">
        <img class="d-block w-100" src="img/assets/t7 small.jpg" alt="First slide "
        style="background-repeat: no-repeat; 
							width:100%;
							height:600px;
							background-position: center;
							background-size:cover;">
      </div>
      <!--/First slide-->
      <!--Second slide-->
      <div class="carousel-item">
        <img class="d-block w-100" src="img/assets/t8 small.jpg" alt="Second slide"
        style="background-repeat: no-repeat; 
        width:100%;
        height:600px;
        background-position: center;
        background-size:cover;">
        
      </div>
      <!--/Second slide-->
      <!--Third slide-->
      <div class="carousel-item">
        <img class="d-block w-100" src="img/assets/t15 small.jpg" alt="Third slide"
        style="background-repeat: no-repeat; 
        width:100%;
        height:600px;
        background-position: center;
        background-size:cover;">
      </div>
      <!--/Third slide-->
      
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
  </div>
  <!--/.Carousel Wrapper-->
  
  <main class="mt-5">    
        <div class="container">
            <!--Section: Best Features-->
            <section id="best-features" class="text-center">

                <!-- Heading -->
                <h2 class="mb-5 font-weight-bold">Wedding Planning Has Never Been Easier</h2>

                <!--Grid row-->
                <div class="row d-flex justify-content-center mb-4">

                    <!--Grid column-->
                    <div class="col-md-8">

                        <!-- Description -->
                        <p class="grey-text">Sign up for WEDLIO and get access to your all-in-one wedding planner.</p>

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-4 mb-5">
                        <i class="far fa-heart fa-3x pink-text"></i>
                        <i class="fa fa-heart fa-3x pink-text"></i>
                        <h4 class="my-4 font-weight-bold">Wedding Vision</h4>
                        <p class="grey-text">Define your wedding style and get matched with local vendors.</p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-4 mb-1">
                        <i class="fas fa-store fa-3x pink-text"></i>
                        <h4 class="my-4 font-weight-bold">Local Vendors</h4>
                        <p class="grey-text">Find the top-rated local vendors for your style and budget.</p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-4 mb-1">
                    <i class="fas fa-dollar-sign fa-3x pink-text"></i>
                        <h4 class="my-4 font-weight-bold">Budgeter</h4>
                        <p class="grey-text">Get a personalized spending plan based on your unique budget.</p>
                    </div>
                    <!--Grid column-->

                     <!--Grid column-->
                     <div class="col-md-4 mb-1">
                     <i class="fas fa-tasks fa-3x pink-text"></i>
                        <h4 class="my-4 font-weight-bold">Checklist</h4>
                        <p class="grey-text">Always know what to do, when, with your 24/7 wedding planner.</p>
                    </div>
                    <!--Grid column-->

                     <!--Grid column-->
                     <div class="col-md-4 mb-1">
                     <i class="fas fa-user-friends fa-3x pink-text"></i>
                        <h4 class="my-4 font-weight-bold">Vendor List</h4>
                        <p class="grey-text">Streamline your vendor contacts and get pro recommendations.</p>
                    </div>
                    <!--Grid column-->

                     <!--Grid column-->
                     <div class="col-md-4 mb-1">
                     <i class="fas fa-star fa-3x pink-text"></i>
                        <h4 class="my-4 font-weight-bold">Planning Tools</h4>
                        <p class="grey-text">The who, what, when and where of your wedding day in one timeline.</p>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </section>
            <!--Section: Best Features-->
          </div>
    

  <?php include_once("footer.php")?>
  <!-- Start your project here-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>
