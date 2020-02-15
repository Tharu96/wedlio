<!DOCTYPE html>
<html lang="en">

<head>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
	<link href="<?php echo base_url(); ?>assets/login/login.css" rel="stylesheet">
</head>

<body>
	<?php include_once("navbar.php") ?>
	<div class="container">
		<div class="row">
			<div class="m-4">
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="<?php echo base_url(); ?>assets/vendors/photo.jpg" alt="Wedding Photographers">
					<div class="card-body">
						<a class="card-text" href= "<?php echo base_url(); ?>index.php/customer/photographers/"><b>Wedding Photographers</b></a>
					</div>
				</div>
			</div>
			<div class="m-4">
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="<?php echo base_url(); ?>assets/vendors/video.jpg" alt="Wedding videographers">
					<div class="card-body">
						<p class="card-text"><b>Wedding Videographers</b></p>
					</div>
				</div>
			</div>
			<div class="m-4">
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="<?php echo base_url(); ?>assets/vendors/reception.jpg" alt="Wedding receptions">
					<div class="card-body">
						<p class="card-text"><b>Wedding Reception Halss</b></p>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="m-4">
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="<?php echo base_url(); ?>assets/vendors/bands.jpg" alt="Wedding Bands">
					<div class="card-body">
						<p class="card-text"><b>Wedding Bands</b></p>
					</div>
				</div>
			</div>
			<div class="m-4">
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="<?php echo base_url(); ?>assets/vendors/flower.jpg" alt="Wedding videographers">
					<div class="card-body">
						<p class="card-text"><b>Wedding Florists</b></p>
					</div>
				</div>
			</div>
			<div class="m-4">
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="<?php echo base_url(); ?>assets/vendors/bridal salons.jpg" alt="Wedding receptions">
					<div class="card-body">
						<p class="card-text"><b>Bridal Salons</b></p>
					</div>
				</div>
			</div>
		</div>


	</div>

	
	<?php include_once("footer.php") ?>

</body>

</html>
