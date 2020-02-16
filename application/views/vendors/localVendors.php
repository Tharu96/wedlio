
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>WEDLIO</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url();?>assets/homepage/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="<?php echo base_url();?>assets/homepage/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="<?php echo base_url();?>assets/homepage/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- Start your project here-->
	<?php include_once("navbar.php")?>


<div id="slideshow" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img class="d-block w-100" src="<?php echo base_url(); ?>assets/homepage/wedlio_img/<?php echo $headerImagePath?>" alt="First slide " class="responsive"
        style="background-repeat: no-repeat; 
						
							background-position: center;
							background-size:cover;">
    </div>
    <div class="carousel-item">
    <img class="d-block w-100" src="<?php echo base_url();?>assets/homepage/wedlio_img/<?php echo $headerImagePath?>" alt="First slide " class="responsive"
        style="background-repeat: no-repeat; 
						
							background-position: center;
							background-size:cover;">
    </div>
    <div class="carousel-item">
    <img class="d-block w-100" src="<?php echo base_url();?>assets/homepage/wedlio_img/<?php echo $headerImagePath?>" alt="First slide " class="responsive"
        style="background-repeat: no-repeat; 
						
							background-position: center;
							background-size:cover;">
    </div>

  </div> <!-- carousel-inner -->
</div> <!-- slideshow -->





<main class="mt-5">    
        <div class="container">
            <!--Section: Best Features-->
            <section id="best-features" class="text-center">

                <!-- Heading -->
                <h2 class="mb-5 font-weight-bold">Top Wedding Vendors in WEDLIO</h2>

                <!--Grid row-->
                <div class="row d-flex justify-content-center mb-4">

                    <!--Grid column-->
                    <div class="col-md-8">

                        <!-- Description -->
                        <p>Sign up for WEDLIO and get access to your all-in-one wedding planner.</p>

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                <?php if(!empty($vendors)){ foreach( $vendors as $vendor){ ?>
                        
                        <div class="col-md-4 mb-5">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top img-fluid" src="<?php echo base_url('uploads/'.$vendor->image); ?>"class="responsive"alt="Card image cap">
                                <div class="card-body">
                                <a class="btn btn-unique btn-sm" href="<?php echo base_url(); ?>index.php/Welcome/load_vendor_Accounts/<?php echo $vendor->userId ?>"><?php echo $vendor->businessName?></a>
                            
                            
                                </div>
                            </div>
                        </div>
                        <?php }
                        }
                        else{ ?>
                            <p>Vendor not Found...</P>
                        <?php } ?>
                        </div>
                        <!--Grid column-->
                </div>
                <!--Grid row-->

            </section>
            <!--Section: Best Features-->
          </div>
    



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
                        <p>Sign up for WEDLIO and get access to your all-in-one wedding planner.</p>

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
                        <p>Define your wedding style and get matched with local vendors.</p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-4 mb-1">
                        <i class="fas fa-store fa-3x pink-text"></i>
                        <h4 class="my-4 font-weight-bold">Local Vendors</h4>
                        <p >Find the top-rated local vendors for your style and budget.</p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-4 mb-1">
                    <i class="fas fa-dollar-sign fa-3x pink-text"></i>
                        <h4 class="my-4 font-weight-bold">Budgeter</h4>
                        <p>Get a personalized spending plan based on your unique budget.</p>
                    </div>
                    <!--Grid column-->

                     <!--Grid column-->
                     <div class="col-md-4 mb-1">
                     <i class="fas fa-tasks fa-3x pink-text"></i>
                        <h4 class="my-4 font-weight-bold">Checklist</h4>
                        <p>Always know what to do, when, with your 24/7 wedding planner.</p>
                    </div>
                    <!--Grid column-->

                     <!--Grid column-->
                     <div class="col-md-4 mb-1">
                     <i class="fas fa-user-friends fa-3x pink-text"></i>
                        <h4 class="my-4 font-weight-bold">Vendor List</h4>
                        <p>Streamline your vendor contacts and get pro recommendations.</p>
                    </div>
                    <!--Grid column-->

                     <!--Grid column-->
                     <div class="col-md-4 mb-1">
                     <i class="fas fa-star fa-3x pink-text"></i>
                        <h4 class="my-4 font-weight-bold">Planning Tools</h4>
                        <p>The who, what, when and where of your wedding day in one timeline.</p>
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
  <script type="text/javascript" src="<?php echo base_url();?>assets/homepage/js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/homepage/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/homepage/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/homepage/js/mdb.min.js"></script>
</body>

</html>
