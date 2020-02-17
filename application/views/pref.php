<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <?php include_once("navbar.php") ?>

   

<div id="slideshow" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
              
    <img class="d-block w-100" src="<?php echo base_url(); ?>assets/homepage/wedlio_img/floraheader.jpg" alt="First slide " class="responsive"
        style="background-repeat: no-repeat; 
						
							background-position: center;
							background-size:cover;">
    </div>
    <div class="carousel-item">
    <img class="d-block w-100" src="<?php echo base_url();?>assets/homepage/wedlio_img/floraheader.jpg" alt="First slide " class="responsive"
        style="background-repeat: no-repeat; 
						
							background-position: center;
							background-size:cover;">
    </div>
    <div class="carousel-item">
    <img class="d-block w-100" src="<?php echo base_url();?>assets/homepage/wedlio_img/floraheader.jpg" alt="First slide " class="responsive"
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
                            <h4 class="card-title">Meet Your Wedding Vendor Team</h4>
                            <h6 class="card-subtitle mb-2">Find and book the best wedding vendors with help from The
                                Wedlio.</h6>
                            <p class="card-text">Remember that every vendor is unique and that no two wedding
                                vendors' services, packages or pricing structures are exactly the same. </p>
                        </div>

                    </div>

                    <div class="row">
                        <div class='center'>
                            <div class="card">
                                <div class="card-header">
                                    <ul class="nav nav-tabs card-header-tabs" id="bologna-list" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#weddingphotography" role="tab"
                                                aria-controls="weddingphotography" aria-selected="false">Wedding
                                                Photography</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#receptions" role="tab" aria-controls="receptions"
                                                aria-selected="false">Reception Halls</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#florists" role="tab" aria-controls="florists"
                                                aria-selected="false">Florists</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#djandbands" role="tab" aria-controls="djandbands"
                                                aria-selected="false">Dj's and Bands</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="card-body">

                                    <div class="tab-content mt-5">

                                        <div class="tab-pane active" id="weddingphotography" role="tabpanel"
                                            aria-labelledby="weddingphotography-tab">
                                            <form action="<?php echo base_url(); ?>index.php/preferences/photography"
                                                method="post" id="weddingphotographypref">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"> <i class="fa fa-money"></i>
                                                            </span>
                                                        </div>
                                                        <input name="price" class="form-control" placeholder="Price"
                                                            type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"> <i
                                                                    class="fa fa-newspaper-o"></i> </span>
                                                        </div>
                                                        <input name="description" class="form-control"
                                                            placeholder="extra notes" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary btn-sm btn-block">
                                                        Submit</button>
                                                </div>
                                            </form>

                                        </div>

                                        <div class="tab-pane" id="receptions" role="tabpanel"
                                            aria-labelledby="receptions-tab">
                                            <form action="<?php echo base_url(); ?>index.php/preferences/reception"
                                                method="post" id="receptionpref">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"> <i class="fa fa-money"></i>
                                                            </span>
                                                        </div>
                                                        <input name="price" class="form-control" placeholder="Price"
                                                            type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"> <i class="fa fa-money"></i>
                                                            </span>
                                                        </div>
                                                        <input name="capacity" class="form-control"
                                                            placeholder="capacity" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"> <i
                                                                    class="fa fa-newspaper-o"></i> </span>
                                                        </div>
                                                        <input name="description" class="form-control"
                                                            placeholder="extra notes" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary btn-block">
                                                        Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane" id="florists" role="tabpanel"
                                            aria-labelledby="florists-tab">
                                            <form action="<?php echo base_url(); ?>index.php/preferences/florist"
                                                method="post" id="floristpref">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"> <i class="fa fa-money"></i>
                                                            </span>
                                                        </div>
                                                        <input name="price" class="form-control" placeholder="Price"
                                                            type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"> <i
                                                                    class="fa fa-newspaper-o"></i> </span>
                                                        </div>
                                                        <input name="description" class="form-control"
                                                            placeholder="extra notes" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary btn-block">
                                                        Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane" id="djandbands" role="tabpanel"
                                            aria-labelledby="djandbands-tab">
                                            <form action="<?php echo base_url(); ?>index.php/preferences/djandband"
                                                method="post" id="djandbandspref">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"> <i class="fa fa-money"></i>
                                                            </span>
                                                        </div>
                                                        <input name="price" class="form-control" placeholder="Price"
                                                            type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"> <i class="fa fa-money"></i>
                                                            </span>
                                                        </div>
                                                        <input name="weddinghours" class="form-control"
                                                            placeholder="wedding hours" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"> <i
                                                                    class="fa fa-newspaper-o"></i> </span>
                                                        </div>
                                                        <input name="description" class="form-control"
                                                            placeholder="extra notes" type="text">
                                                    </div>
                                                </div>
                                                <div>
                                                    <button type="submit" class="btn btn-primary btn-block">
                                                        Submit</button>
                                                </div>
                                            </form>
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