<?php include_once("header.php") ?>
<?php include_once("leftpanel.php") ?>
<?php include_once("navbar.php") ?>




<div class="content">
	<div class="container-fluid">
    <div class="row">
		<div class="col-md-4">

        <?php if(!empty($packages)){ foreach( $packages as $package){ ?>
                
                <div class="col-md-8 mb-5">
                    <div class="card" style="width: 18rem;">
                        <!-- <img class="card-img-top img-fluid" src="<?php echo base_url('uploads/'.$vendor->image); ?>"class="responsive"alt="Card image cap"> -->
                        <div class="card-body">
                        <!-- <a class="btn btn-unique btn-sm" href="<?php echo base_url(); ?>index.php/Welcome/load_vendor_Accounts/<?php echo $vendor->userId ?>"><?php echo $vendor->businessName?></a> -->
                            <h6 class="card-category text-gray"><?php echo $package->name?></h6>
                            <h4 class="card-title"><?php echo  $package->price?></h4>
                            <p class="card-description">
                                
                            <?php
                                
                                $splitDes=explode(",",$package->description);
                                foreach ($splitDes as $key => $value) {
                                echo "* ".$value."<br>";
                                }
                            ?>
                           
                            </p>
                            <a href="<?php echo base_url(); ?>index.php/Vendor/edit_packages/<?php echo $package->pkgId ?>" class="btn btn-primary btn-round">Edit</a>
							<a href="<?php echo base_url(); ?>index.php/Vendor/delete_packages/<?php echo $package->pkgId ?>" class="btn btn-primary btn-round" onclick="return confirm('Are you sure you want to delete?')">Delete</a>
                        
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
        

		<div class="col-md-8">
                        <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Add Packages</h4>
                            <p class="card-category"></p>
                        </div>

                        <div class="card-body">
                        
                        
                        <form method="POST" action="<?php echo base_url(); ?>index.php/Vendor/add_packages">
                        <fieldset> 

                        
                            <div class="row">
                                <div class="col-md-8">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Package Name</label>
                                    <div class="col-md-9">
                                    <input type="text" class="form-control" value="" name="name">
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Package Price</label>
                                    <div class="col-md-9">
                                    <input type="text" class="form-control" name="price" required>
                                    </div>
                                </div>
                                </div>
                            </div>

							<div class="row">
                                <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Description</label>
                                    <div class="col-md-9">
                                    <input type="text" class="form-control" name="description" required>
                                    </div>
                                </div>
                                </div>
                            </div>

							      

                            <button type="submit" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-check"></span>Add Package</button>
                            </fieldset>
                            </form>
                                <?php echo form_close(''); ?>
                            <div class="clearfix"></div>
                        
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
 
