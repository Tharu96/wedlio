
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
    <img class="d-block w-100" src="<?php echo base_url();?>assets/homepage/wedlio_img/<?php echo $vendor_details->headerImagePath?>" alt="First slide " class="responsive"
        style="background-repeat: no-repeat; 
						
							background-position: center;
							background-size:cover;">
    </div>
    <div class="carousel-item">
    <img class="d-block w-100" src="<?php echo base_url();?>assets/homepage/wedlio_img/<?php echo $vendor_details->headerImagePath?>" alt="First slide " class="responsive"
        style="background-repeat: no-repeat; 
						
							background-position: center;
							background-size:cover;">
    </div>
    <div class="carousel-item">
    <img class="d-block w-100" src="<?php echo base_url();?>assets/homepage/wedlio_img/<?php echo $vendor_details->headerImagePath?>" alt="First slide " class="responsive"
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
                
                <!--Grid row-->
                <div class="row d-flex justify-content-center mb-4">

                    <!--Grid column-->
                    <div class="col-md-8">

                        <!-- Description -->
                        

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Section: testimonials-->
<section id="testimonials" class="text-center py-5" style="background-color: #eee;">

<!-- Container -->
<div class="container">

    <!-- Section heading -->
    <h2 class="h1-responsive font-weight-bold mb-5"><?php echo $vendor_details->businessName?></h2>

    <!-- Carousel Wrapper -->
    <div id="carousel-example-1" class="carousel no-flex testimonial-carousel slide carousel-fade"
        data-ride="carousel" data-interval="false">
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <!--First slide-->
            <div class="carousel-item active">
                <div class="testimonial">
                    <!--Avatar-->
                    <div class="avatar mx-auto mb-4">
                        <img src="<?php echo base_url();?>assets/homepage/wedlio_img/<?php echo $vendor_details->DpPath?>" class="rounded-circle img-fluid"
                            alt="First sample avatar image">
                    </div>
                    <!--Content-->
                    <p>
                        <i class="fas fa-quote-left"></i><?php echo $vendor_details->companydescription?>
                    </p>
                    <h4 class="font-weight-bold"><?php echo $vendor_details->firstName ?><?php echo " "?><?php echo $vendor_details->lastName ?></h4>
                    <h6 class="font-weight-bold my-3">Founder <?php echo $vendor_details->businessName ?></h6>
                    <!--Review-->
                    <i class="fas fa-star amber-text"> </i>
                    <i class="fas fa-star amber-text"> </i>
                    <i class="fas fa-star amber-text"> </i>
                    <i class="fas fa-star amber-text"> </i>
                    <i class="fas fa-star-half-full amber-text"> </i>
                </div>
            </div>
            <!--First slide-->
            
        </div>
        <!--Slides-->
       
    </div>
    <!-- Carousel Wrapper -->

</div>
<!-- Container -->

</section>
<!--Section: testimonials-->
<hr class="my-5">

<div class="row">
                    <?php if(!empty($vendor_packages)){ foreach( $vendor_packages as $vendor_package){ ?>
                        
                    <div class="col-md-4 mb-5">
                        <div class="card" style="width: 18rem;">
                        <h4 class="my-4 font-weight-bold"><?php echo $vendor_package->name?></h4>
                        <h5 class="my-4 font-weight-bold pink-text">RS.<?php echo $vendor_package->price?></h5>
                            
                           
                            <?php
                                
                                $splitDes=explode(",",$vendor_package->description);
                                foreach ($splitDes as $key => $value) {
                                echo "* ".$value."<br>";
                                }
                            ?>
                            <div class="card-body">
                            
                            <a class="btn btn-unique btn-sm" href="#"><?php echo $vendor_package->name?></a>
                            
                            
                            </div>
                        </div>
                    </div>
                    <?php }
                    }
                    else{ ?>
                        <p>Package not Found...</P>
                    <?php } ?>
                    </div>
                    <!--Grid column-->

                </div>


            <!--Section: Contact-->
            <section id="contact">

                <!-- Heading -->
                <h2 class="mb-5 font-weight-bold text-center">Contact us</h2>

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-lg-5 col-md-12">
                        <!-- Form contact -->
                        <form class="p-5 grey-text">
                            <div class="md-form form-sm"> <i class="fa fa-user prefix pink-text"></i>
                                <input type="text" id="form3" class="form-control form-control-sm ">
                                <label for="form3">Your name</label>
                            </div>
                            <div class="md-form form-sm"> <i class="fa fa-envelope prefix pink-text"></i>
                                <input type="text" id="form2" class="form-control form-control-sm">
                                <label for="form2">Your email</label>
                            </div>
                            <div class="md-form form-sm"> <i class="fa fa-tag prefix pink-text"></i>
                                <input type="text" id="form32" class="form-control form-control-sm">
                                <label for="form34">Subject</label>
                            </div>
                            <div class="md-form form-sm"> <i class="fa fa-pencil prefix pink-text"></i>
                                <textarea type="text" id="form8" class="md-textarea form-control form-control-sm" rows="4"></textarea>
                                <label for="form8">Your message</label>
                            </div>
                            <div class="text-center mt-4">
                                <button class="btn btn-unique">Send <i class="fa fa-paper-plane-o ml-1 pink-text"></i></button>
                            </div>
                        </form>
                        <!-- Form contact -->
                    </div>
                    <!--Grid column-->
                    <div class="col-lg-5 col-md-12">
                        <!--Section: Gallery-->
            <section id="gallery">



<!--Grid row-->
<div class="row">

    <!--Grid column-->
    <div class="col-md-6 mb-4">

        <!--Carousel Wrapper-->
        <div id="carousel-example-1z" class="carousel slide carousel-fade carousel-fade" data-ride="carousel">
            <!--Indicators-->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                <li data-target="#carousel-example-1z" data-slide-to="2"></li>
            </ol>
            <!--/.Indicators-->
            <!--Slides-->
            <div class="carousel-inner z-depth-1-half" role="listbox">
                <!--First slide-->
                <div class="carousel-item active">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(130).jpg"
                        alt="First slide">
                </div>
                <!--/First slide-->
                <!--Second slide-->
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(129).jpg"
                        alt="Second slide">
                </div>
                <!--/Second slide-->
                <!--Third slide-->
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(70).jpg"
                        alt="Third slide">
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

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-md-6">

        <!--Excerpt-->
        <a href="" class="teal-text">
            <h6 class="pb-1"><i class="fa fa-heart"></i><strong> Lifestyle </strong></h6>
        </a>
        <h4 class="mb-3"><strong>Find Us</strong></h4>
        <p><?php echo $vendor_details->companyAddress?>

        <?php echo $vendor_details->companyWebsite ?>
            
        <p><?php echo $vendor_details->contactNo?></p>

        <p><?php echo $vendor_details->contactEmail?></p>
        

    </div>
    <!--Grid column-->

</div>
<!--Grid row-->

</section>
<!--Section: Gallery-->


                    </div>
                    <!--Grid column-->
</div>
    


<hr class="my-5">
  <main class="mt-5">    
        <div class="container">
            <!--Section: Best Features-->
            <section id="best-features" class="text-center">

                <!-- Heading -->
                

                <!--Grid row-->
                <div class="row d-flex justify-content-center mb-4">

                    <!--Grid column-->
                    <div class="col-md-8">

                        
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
