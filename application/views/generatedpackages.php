
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
    <?php include_once("navbar.php") ?>

   

<div id="slideshow" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
              
    <img class="d-block w-100" src="<?php echo base_url(); ?>assets/homepage/wedlio_img/chamathkaraflora.jpg" alt="First slide " class="responsive"
        style="background-repeat: no-repeat; 
						
							background-position: center;
							background-size:cover;">
    </div>
    <div class="carousel-item">
    <img class="d-block w-100" src="<?php echo base_url();?>assets/homepage/wedlio_img/chamathkaraflora.jpg" alt="First slide " class="responsive"
        style="background-repeat: no-repeat; 
						
							background-position: center;
							background-size:cover;">
    </div>
    <div class="carousel-item">
    <img class="d-block w-100" src="<?php echo base_url();?>assets/homepage/wedlio_img/chamathkaraflora.jpg" alt="First slide " class="responsive"
        style="background-repeat: no-repeat; 
						
							background-position: center;
							background-size:cover;">
    </div>

  </div> <!-- carousel-inner -->
</div> <!-- slideshow -->

    <div class="flex-container" style="min-height:100%; position:relative;">
        <div class="row">

            <div class="card " style="margin: 0 auto; float: none; margin-bottom: 10px; width: 800px;">
                <!-- <img class="card-img-top" src="<?php echo base_url();?>assets/img/vendorpref1.jpg" alt="Card image cap"> -->
                <div class="card-body">
                    <div class="row">
                        <div class="card-body">
                            <h4 class="card-title">Top Wedding Vendors for your selction</h4>
                            <h6 class="card-subtitle mb-2">Find and book the best wedding vendors with help from The
                                Wedlio.</h6>
                            <p class="card-text">Remember that every vendor is unique and that no two wedding
                                vendors' services, packages or pricing structures are exactly the same. </p>
                        </div>

                    </div>
                    

                    <div class="row">
                        <div class='center'>
                            <div class="card">
                              

                                <div class="card-body">

                                    <div class="tab-content mt-5">
                                        <div class="card-deck">
                                            <?php if(!empty($packages)){ foreach($packages as $row){ ?>
                                            <div class="card">
                                                <div class="card-body">
                                                   

                                                    <h4 class="my-4 font-weight-bold"><?php echo $row['name']; ?></h4>
                                                    <h5 class="my-4 font-weight-bold pink-text">RS.<?php echo $row['price'];?></h5>
                                                        <?php
                                                        $splitDes=explode(",",$row['description']);
                                                        foreach ($splitDes as $key => $value) {
                                                        echo "* ".$value."<br>";
                                                        }
                                                        ?>
                                                        <a class="btn btn-unique btn-sm" href="#"><?php echo  $row['name']; ?></a>
                        
                                                </div>
                                            </div>
                                            <?php } }else{ ?>
                                            <p>Product(s) not found...</p>
                                            <?php } ?>
                                        </div>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>


    <div class="row">
        <div style="; bottom:0; width:100%;">
            <?php include_once("footer.php") ?>
        </div>

    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <script>
    $('#bologna-list a').on('click', function(e) {
        e.preventDefault()
        $(this).tab('show')
    })
    </script>


</body>


</html>
                                        
   