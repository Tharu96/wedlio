<head></head>
<body>
	<div class="wrapper ">
		<div class="sidebar" data-color="purple" data-background-color="black" data-image="<?php echo base_url('assets/dashboard/img/sidebar-1.jpg'); ?>">
			<!--
		Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

		Tip 2: you can also add an image using data-image tag
	-->
			<div class="logo  d-flex justify-content-center">
				<a class="navbar-brand" href="<?php echo base_url(); ?>index.php/Welcome/dashboard"> <img src="<?php echo base_url('assets/dashboard/img/wedlio 600x300.jpg'); ?>" class="img-responsive" style="width:110px" alt="Logo">
				</a>
			</div>
			<div class="sidebar-wrapper">
				<ul class="nav">
					<li class="nav-item  ">
						<a class="nav-link" href="<?php echo base_url(); ?>index.php/Welcome/dashboard">
							<i class="material-icons">dashboard</i>
							<p>Admin Dashboard</p>
						</a>
					</li>
					<li class="nav-item ">
						<a class="nav-link" href="<?php echo base_url(); ?>index.php/Welcome/user">
							<i class="material-icons">account_circle</i>
							<p>User Profile</p>
						</a>
					</li>
					<li class="nav-item ">
						<a class="nav-link" href="<?php echo base_url(); ?>index.php/Welcome/user_details">
							<i class="material-icons">supervised_user_circle</i>
							<p>Users</p>
						</a>
						<b>
							<hr></b>
					<li class="nav-item ">
						<a class="nav-link" href="<?php echo base_url(); ?>index.php/Welcome/viewAllCustomers">
							<i class="material-icons">supervised_user_circle</i>
							<p> Customers</p>
						</a>
					</li>
					<li class="nav-item ">
						<a class="nav-link" href="<?php echo base_url(); ?>index.php/Welcome/viewAllVendors">
							<i class="material-icons">supervised_user_circle</i>
							<p> Vendors</p>
						</a>
					</li>
					</li>
					<li class="nav-item ">
						<a class="nav-link" href="./notifications.html">
							<i class="material-icons">notifications</i>
							<p>Notifications</p>
						</a>
					</li>
					<!-- <li class="nav-item ">
			<a class="nav-link" href="./typography.html">
				<i class="material-icons">library_books</i>
				<p>Typography</p>
			</a>
			</li> -->
					<li class="nav-item ">
						<a class="nav-link" href="<?php echo base_url(); ?>index.php">
							<i class="material-icons">bubble_chart</i>
							<p>Wedlio Home Page</p>
						</a>
					</li>
					<!-- <li class="nav-item ">
			<a class="nav-link" href="./map.html">
				<i class="material-icons">location_ons</i>
				<p>Maps</p>
			</a>
			</li>
			
			<li class="nav-item ">
			<a class="nav-link" href="./rtl.html">
				<i class="material-icons">language</i>
				<p>RTL Support</p>
			</a>
			</li>
			<li class="nav-item active-pro ">
			<a class="nav-link" href="./upgrade.html">
				<i class="material-icons">unarchive</i>
				<p>Upgrade to PRO</p>
			</a>
			</li> -->
			</ul>
		</div>
	</div>
	<div class="main-panel">
		<!-- Navbar -->
		<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
			<div class="container-fluid">
				<div class="navbar-wrapper">
					<a class="navbar-brand" href="#pablo">Table List</a>
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
					<span class="sr-only">Toggle navigation</span>
					<span class="navbar-toggler-icon icon-bar"></span>
					<span class="navbar-toggler-icon icon-bar"></span>
					<span class="navbar-toggler-icon icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-end">
					<form class="navbar-form">
						<div class="input-group no-border">
							<input type="text" value="" class="form-control" placeholder="Search...">
							<button type="submit" class="btn btn-white btn-round btn-just-icon">
								<i class="material-icons">search</i>
								<div class="ripple-container"></div>
							</button>
						</div>
					</form>
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="#pablo">
								<i class="material-icons">dashboard</i>
								<p class="d-lg-none d-md-block">
									Stats
								</p>
							</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="material-icons">notifications</i>
								<span class="notification">5</span>
								<p class="d-lg-none d-md-block">
									Some Actions
								</p>
							</a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="#">Mike John responded to your email</a>
								<a class="dropdown-item" href="#">You have 5 new tasks</a>
								<a class="dropdown-item" href="#">You're now friend with Andrew</a>
								<a class="dropdown-item" href="#">Another Notification</a>
								<a class="dropdown-item" href="#">Another One</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="material-icons">account_circle</i>
								<p class="d-lg-none d-md-block">
									Account
								</p>
							</a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
								<a class="dropdown-item" href="#">Profile</a>
								<a class="dropdown-item" href="#">Settings</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- End Navbar -->

</body>
