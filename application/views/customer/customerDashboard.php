<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url();?>assets/homepage/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="<?php echo base_url();?>assets/homepage/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="<?php echo base_url();?>assets/homepage/css/style.css" rel="stylesheet">
</head>
<?php extract($weddingData); ?>
<?php extract($customerData); ?>
                                


            <!--Section: Contact-->
            <section id="contact" style="background-color: #eee;">

                <!-- Heading -->
                <h2 class="mb-5 font-weight-bold text-center"> Welcome Back <?php echo $firstName; ?> </h2>



                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-lg-5 col-md-12" style="background-color: #eee;">
                    <h3><p style="text-align:left;">
                    Your Wedding Details
                    <span style="float:right;">
                    <a href="<?php echo base_url(); ?>index.php/updateCustomerController/updateCustomer/<?php echo $this->session->userdata('id'); ?>" >UPDATE</a></span></p></h3>
                    <div class="carousel-item active">
                    <img class="d-block w-100" src="<?php echo base_url(); ?>assets/homepage/wedlio_img/danukadp.jpg" 
                        alt="First slide">
                    </div>
                    </div>

                    <!--Grid column-->
                    <div class="col-lg-5 col-md-12" style="background-color: #eee;">
                        <!--Section: Gallery-->
                    <section id="gallery">
                        <!--Grid row-->
                        <div class="row">

                  
                        <form class="p-5 grey-text">
                            <div class="md-form form-sm"> <i class="fas fa-map-marker-alt prefix pink-text"></i> 
                                <input type="text" id="form3" class="form-control form-control-sm " value=<?php echo $weddingDistrict; ?>,<?php echo $weddingCity; ?>>
                
                            </div>
                            <div class="md-form form-sm"> <i class="far fa-calendar-alt prefix pink-text"></i> 
                                <input type="text" id="form2" class="form-control form-control-sm" value=<?php echo $weddingDate; ?>>
                                
                            </div>
                        </form>

          </div>
          </div>

          </section>
          <hr class="my-5">

          <!--Section: Contact-->
          <section id="contact" style="background-color: #eee;">

        <!-- Heading -->
        <h2>Planning Progress</h2>
        <br>
        <ul class="vertical-nav-menu">
            <li>
            <a href="<?php echo base_url();?>index.php/main/index"><h4>
            <i class="fas fa-tasks prefix pink-text"></i>
            Your Vendors
            </h4></a>
            </li> <br>
            <li>
            <a href="<?php echo base_url();?>index.php/main/index"><h4>
            <i class="fas fa-tasks prefix pink-text"></i>
            Guest List
            </h4></a>
            </li> <br>
            <li>
            <a href="<?php echo base_url();?>index.php/main/index"><h4>
            <i class="fas fa-tasks prefix pink-text"></i>
            Budgeter
            </h4></a>
            </li> <br>
         

        </div>

        </section>
        <hr class="my-5">