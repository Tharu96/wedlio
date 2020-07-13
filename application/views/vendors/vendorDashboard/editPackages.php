<?php include_once("header.php") ?>
<?php include_once("leftpanel.php") ?>
<?php include_once("navbar.php") ?>


<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header card-header-primary">
						<h4 class="card-title">Edit Packages</h4>
						<p class="card-category"></p>
					</div>

					<div class="card-body">
					
					<!-- <?php echo form_open_multipart('Vendor/vendor_profile_update'); ?> -->
					<form method="POST" action="<?php echo base_url(); ?>index.php/Vendor/vendor_profile_update">
					<fieldset> 

						
							<div class="row">
								<div class="col-md-8">
									<div class="form-group">
										<label class="bmd-label-floating">Package Name</label>
										<div class="col-md-9">
										<input type="text" class="form-control" name="name">
										</div>
									</div>
								</div>
                            </div>
								<div class="col-md-6">
								<div class="form-group">
										<label class="bmd-label-floating">Price</label>
										<div class="col-md-9">
										<input type="text" class="form-control"  name="price">
										</div>
									</div>
								</div>
                                </div>
								<div class="col-md-6">
								<div class="form-group">
										<label class="bmd-label-floating">Description</label>
										<div class="col-md-9">
										<input type="text" class="form-control"  name="description">
										</div>
									</div>
								</div>
                                </div>
							
							
							<!-- <?php echo form_submit(['name' => 'submit', 'value' => 'Update Package', 'class'=>'btn btn-primary pull-right']); ?> -->
							<button type="submit" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-check"></span> Update Package</button>
							</fieldset>
							</form>
   							<?php echo form_close(''); ?>
							<div class="clearfix"></div>
					
					</div>
				</div>
			</div>