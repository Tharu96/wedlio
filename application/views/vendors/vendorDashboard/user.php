<?php include_once("header.php") ?>
<?php include_once("leftpanel.php") ?>
<?php include_once("navbar.php") ?>


<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header card-header-primary">
						<h4 class="card-title">Edit Profile</h4>
						<p class="card-category">Complete your profile</p>
					</div>

					<div class="card-body">
					
					<!-- <?php echo form_open_multipart('Vendor/vendor_profile_update'); ?> -->
					<form method="POST" action="<?php echo base_url(); ?>index.php/Vendor/vendor_profile_update/<?php echo $userId ?>">
					<fieldset> 

						
							<div class="row">
								<div class="col-md-8">
									<div class="form-group">
										<label class="bmd-label-floating">Business Name</label>
										<div class="col-md-9">
										<input type="text" class="form-control" value="<?php echo $businessName; ?>" name="businessName">
										</div>
									</div>
								</div>

								<div class="col-md-6">
								<div class="form-group">
										<label class="bmd-label-floating">First Name</label>
										<div class="col-md-9">
										<input type="text" class="form-control" value="<?php echo $firstName; ?>" name="firstName">
										</div>
									</div>
								</div>

								<div class="col-md-6">
								<div class="form-group">
										<label class="bmd-label-floating">Last Name</label>
										<div class="col-md-9">
										<input type="text" class="form-control" value="<?php echo $lastName; ?>" name="lastName">
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
								<div class="form-group">
										<label class="bmd-label-floating">Company Website</label>
										<div class="col-md-9">
										<input type="text" class="form-control" value="<?php echo $companyWebsite; ?>" name="companyWebsite">
										</div>
									</div>
								</div>
								<div class="col-md-12">
								<div class="form-group">
										<label class="bmd-label-floating">Company Address</label>
										<div class="col-md-9">
										<input type="text" class="form-control" value="<?php echo $companyAddress; ?>" name="companyAddress">
										</div>

									</div>
								</div>
							</div>
							
								<div class="col-md-12">
								<div class="form-group">
								<label class="bmd-label-floating">Business Description</label>
										<div class="col-md-9">
										<input type="text" class="form-control" value="<?php echo $businessDescription; ?>" name="businessDescription">
										</div>
									</div>
								</div>

								<div class="col-md-12">
								<div class="form-group">
										<label class="bmd-label-floating">Email</label>
										<div class="col-md-9">
										<input type="email" class="form-control" value="<?php echo $contactEmail; ?>" name="contactEmail">
										</div>
									</div>
								</div>
							
							<div class="row">
								<div class="col-md-6">
								<div class="form-group">
										<label class="bmd-label-floating">Business Contact No</label>
										<div class="col-md-9">
										<input type="text" class="form-control" value="<?php echo $businessContactNo; ?>" name="businessContactNo">
										</div>
									</div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								<label class="bmd-label-floating">Contact No</label>
										<div class="col-md-9">
										<input type="text" class="form-control" value="<?php echo $contactNo; ?>" name="contactNo">
										</div>
									</div>
								</div>
							</div>
							<div class="row">
							<?php echo form_upload(['name'=>'userfile','value'=>'Save']); ?>
        					<?php echo form_error('userfile','<div class="text-danger">', '</div>' ); ?>
       				 		<br><hr>
							</div>
							
							<!-- <?php echo form_submit(['name' => 'submit', 'value' => 'Update Profile', 'class'=>'btn btn-primary pull-right']); ?> -->
							<button type="submit" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-check"></span> Update Profile</button>
							</fieldset>
							</form>
   							<?php echo form_close(''); ?>
							<div class="clearfix"></div>
					
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card card-profile">
					<div class="card-avatar">
						<a href="#pablo">
						<img src="<?php echo base_url();?>assets/homepage/wedlio_img/<?php echo $DpPath?>" class="rounded-circle img-fluid">
						</a>
					</div>
					<div class="card-body">
						<h6 class="card-category text-gray">CEO / Co-Founder</h6>
						<h4 class="card-title"><?php echo $firstName?><?php echo " "?><?php echo $lastName?></h4>
						<p class="card-description">
						<?php echo $companydescription?>
						</p>
						<a href="#pablo" class="btn btn-primary btn-round">Edit</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<footer class="footer">
	<div class="container-fluid">
		<nav class="float-left">
			<ul>
				<li>
					<a href="https://www.creative-tim.com">
						Creative Tim
					</a>
				</li>
				<li>
					<a href="https://creative-tim.com/presentation">
						About Us
					</a>
				</li>
				<li>
					<a href="http://blog.creative-tim.com">
						Blog
					</a>
				</li>
				<li>
					<a href="https://www.creative-tim.com/license">
						Licenses
					</a>
				</li>
			</ul>
		</nav>
		<div class="copyright float-right">
			&copy;
			<script>
				document.write(new Date().getFullYear())
			</script>, made with <i class="material-icons">favorite</i> by
			<a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
		</div>
	</div>
</footer>
</div>
</div>
<div class="fixed-plugin">
	<div class="dropdown show-dropdown">
		<a href="#" data-toggle="dropdown">
			<i class="fa fa-cog fa-2x"> </i>
		</a>
		<ul class="dropdown-menu">
			<li class="header-title"> Sidebar Filters</li>
			<li class="adjustments-line">
				<a href="javascript:void(0)" class="switch-trigger active-color">
					<div class="badge-colors ml-auto mr-auto">
						<span class="badge filter badge-purple" data-color="purple"></span>
						<span class="badge filter badge-azure" data-color="azure"></span>
						<span class="badge filter badge-green" data-color="green"></span>
						<span class="badge filter badge-warning" data-color="orange"></span>
						<span class="badge filter badge-danger" data-color="danger"></span>
						<span class="badge filter badge-rose active" data-color="rose"></span>
					</div>
					<div class="clearfix"></div>
				</a>
			</li>
			<li class="header-title">Images</li>
			<li class="active">
				<a class="img-holder switch-trigger" href="javascript:void(0)">
					<img src="<?php echo base_url('assets/dashboard/img/sidebar-1.jpg'); ?>" alt="">
				</a>
			</li>
			<li>
				<a class="img-holder switch-trigger" href="javascript:void(0)">
					<img src="<?php echo base_url('assets/dashboard/img/sidebar-2.jpg'); ?>" alt="">
				</a>
			</li>
			<li>
				<a class="img-holder switch-trigger" href="javascript:void(0)">
					<img src="<?php echo base_url('assets/dashboard/img/sidebar-3.jpg'); ?>" alt="">
				</a>
			</li>
			<li>
				<a class="img-holder switch-trigger" href="javascript:void(0)">
					<img src="<?php echo base_url('assets/dashboard/img/sidebar-4.jpg'); ?>" alt="">
				</a>
			</li>
			<li class="button-container">
				<a href="https://www.creative-tim.com/product/material-dashboard" target="_blank" class="btn btn-primary btn-block">Free Download</a>
			</li>
			<!-- <li class="header-title">Want more components?</li>
            <li class="button-container">
                <a href="https://www.creative-tim.com/product/material-dashboard-pro" target="_blank" class="btn btn-warning btn-block">
                  Get the pro version
                </a>
            </li> -->
			<li class="button-container">
				<a href="https://demos.creative-tim.com/material-dashboard/docs/2.1/getting-started/introduction.html" target="_blank" class="btn btn-default btn-block">
					View Documentation
				</a>
			</li>
			<li class="button-container github-star">
				<a class="github-button" href="https://github.com/creativetimofficial/material-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
			</li>
			<li class="header-title">Thank you for 95 shares!</li>
			<li class="button-container text-center">
				<button id="twitter" class="btn btn-round btn-twitter"><i class="fa fa-twitter"></i> &middot; 45</button>
				<button id="facebook" class="btn btn-round btn-facebook"><i class="fa fa-facebook-f"></i> &middot; 50</button>
				<br>
				<br>
			</li>
		</ul>
	</div>
</div>
<!--   Core JS Files   -->
<?php include_once("footer.php") ?>



