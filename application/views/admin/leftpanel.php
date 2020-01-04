<div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="<?php echo base_url('assets/dashboardd/img/sidebar-1.jpg'); ?>">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
     
		  <div class="logo  d-flex justify-content-center"> 
			<a class="navbar-brand" href="<?php echo base_url();?>index.php/Welcome/dashboard" > <img src="<?php echo base_url('assets/dashboard/img/wedlio 600x300.jpg');?>" class="img-responsive" style="width:110px" alt="Logo" >
		</a>
      </div> 

      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="<?php echo base_url();?>index.php/Welcome/dashboard">
              <i class="material-icons">dashboard</i>
              <p>Admin Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url();?>index.php/Welcome/user">
              <i class="material-icons">account_circle</i>
              <p>User Profile</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url();?>index.php/Welcome/user_details" >
              <i class="material-icons">supervised_user_circle</i>
							<p>Users</p>
						</a>
							
							<li class="nav-item ">
            	<a class="nav-link" href="<?php echo base_url();?>index.php/Welcome/viewAllCustomers">
              <i class="material-icons">wc</i>
							<p>			Customers</p>
            	</a>
							</li>
							<li class="nav-item ">
            	<a class="nav-link" href="<?php echo base_url();?>index.php/Vendors">
              <i class="material-icons">emoji_people</i>
							<p>			Vendors</p>
            	</a>
							</li>
          </li>
					<li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url();?>index.php/Welcome/notification">
              <i class="material-icons">notifications</i>
              <p>Notifications</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url();?>index.php">
              <i class="material-icons">favorite</i>
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