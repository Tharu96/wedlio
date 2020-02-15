<<<<<<< HEAD
<!DOCTYPE html>
=======
 <!DOCTYPE html>
>>>>>>> 0438689a3f0eb88e7634ae0e4a4028e409974674
 <html lang="en">

 <head>
     <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
     <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
     <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
     <link href="<?php echo base_url(); ?>assets/login/login.css" rel="stylesheet">

     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="icon" type="image/png" href="<?php echo base_url('assets/dashboard/img/favicon.jpg'); ?>">
     <meta http-equiv="x-ua-compatible" content="ie=edge">
     <title>Wedlio</title>
     <!-- Font Awesome -->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
     <!-- Bootstrap core CSS -->
     <link href="<?php echo base_url(); ?>assets/homepage/css/bootstrap.min.css" rel="stylesheet">
     <!-- Material Design Bootstrap -->
     <link href="<?php echo base_url(); ?>assets/homepage/css/mdb.min.css" rel="stylesheet">
     <!-- Your custom styles (optional) -->
     <link href="<?php echo base_url(); ?>assets/homepage/css/style.css" rel="stylesheet">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
         integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
         integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
     </script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
         integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
     </script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
         integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
     </script>


 </head>

 <body>
     <?php include_once("navbar.php") ?>

     <div class="flex-container">
         <div class="card text-center" style="width: 30rem; margin:0 auto;">
             <div class="card-body ">
                 <h4 class="card-title text-center mb-4 mt-1">Sign in</h4>
                 <hr>
                 <!-- <p class="text-success text-center">Some message goes here</p> -->
                 <form action="<?php echo base_url(); ?>index.php/login/login_validation" method="post">
                     <div class="form-group">
                         <div class="input-group">
                             <div class="input-group-prepend">
                                 <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                             </div>
                             <input name="email" class="form-control" placeholder="Email or login" type="email">
                         </div>
                     </div>
                     <div class="form-group">
                         <div class="input-group">
                             <div class="input-group-prepend">
                                 <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                             </div>
                             <input name="password" class="form-control" placeholder="******" type="password">
                         </div>
                     </div>
                     <div class="form-group">
                         <button type="submit" class="btn btn-primary btn-block"> Login </button>
                     </div>
                     <p class="text-center"><a href="#" class="btn">Forgot password?</a></p>
                 </form>
             </div>
         </div>
     </div>

     <?php include_once("footer.php") ?>