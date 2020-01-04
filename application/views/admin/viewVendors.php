<?php include_once("header.php") ?>
<?php include_once("leftpanel.php") ?>
<?php include_once("navbar.php") ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
	function deleteBranch(id) {
		console.log("here")
    $.post('<?php echo base_url();?>index.php/Registration/addVendor', {"tempId" : id }, function(data){

		console.log(data)
       //Your controller method would echo a 1 for success
       if (data == 1) {
           $("#user_" + id).fadeOut();
		
           //show some kind of message
       }
    });
}
</script>

<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header card-header-primary">
							<h4 class="card-title ">Pending Requests</h4>
							<p class="card-category"> Pending Vendor Registration Requests</p>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table">
									<thead class=" text-primary">
										<th>
											User ID
										</th>
										<th>
											First Name
										</th>
										<th>
											Last Name
										</th>
										<th>
											Contact No
										</th>
										<th>
											NIC
										</th>
										<!-- <th>
											Image 
										</th> -->
										<th>
											Address
										</th>
										<th>
											Username
										</th>
										<th>
											Status
										</th>
										<th>
											User Role
										</th>
										<th>
											Business Reg No
										</th>
										<th>
											Business Name
										</th>
										<th>
											Category
										</th>
										<!-- <th>
											User Role
										</th> -->
									</thead>
									<tbody>
									<tr class="tr-shadow">
									
										<?php foreach ($h->result() as $row){?>
										<tr id="user_<?= $row->tempId ?>">
										<td><?php echo $row->tempId;?></td>
										<td><?php echo $row->firstName;?></td>
										<td><?php echo $row->lastName;?></td>
										<td><?php echo $row->contactNo;?></td>
										<td><?php echo $row->NIC;?></td>
										<td><?php echo $row->address;?></td>
										<td><?php echo $row->username;?></td>
										<td><?php echo $row->status;?></td>
										<td><?php echo $row->user_role;?></td>
										<td><?php echo $row->businessRegNo;?></td>
										<td><?php echo $row->businessName;?></td>
										<td><?php echo $row->categoryId;?></td>
										

										<td>
											<p style="margin:0;">
												
												
													<button type="button" class="btn btn-outline-primary btn-sm" id="accept" style="border:0;">
													Accept<a href='javascript:deleteBranch(<?= $row->tempId; ?>)'></a>
													</button>
												

												<a href="">
													<button type="button" class="btn btn-outline-danger btn-sm" id="cancel" style="border:0;" onclick="return confirm('Are you sure you want to cancel?')">
													Cancel
													</button>
												</a>
											</p>                        
										</td>
										</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="card card-plain">
						<div class="card-header card-header-primary">
							<h4 class="card-title mt-0"> Accepted Requests</h4>
							<p class="card-category"> Succeccfully Registered Vendors </p>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-hover">
									<thead class="">
										<th>
											UserId
										</th>
										<th>
											Business Reg No
										</th>
										<th>
											Business Name
										</th>
										<th>
											Description
										</th>
										<th>
											Business Address
										</th>
										<th>
											District
										</th>
										<th>
											Business Contact No
										</th>
										<th>
											Business Email
										</th>
										<th>
											Category
										</th>
									
									</thead>
									<tbody>
										<tr class="tr-shadow">
										<?php foreach ($k->result() as $row){?>
										<tr>
										<td><?php echo $row->userId;?></td>
										<td><?php echo $row->businessRegNo;?></td>
										<td><?php echo $row->businessName;?></td>
										<td><?php echo $row->description;?></td>
										<td><?php echo $row->businessAddress;?></td>
										<td><?php echo $row->district;?></td>
										<td><?php echo $row->businessContactNo;?></td>
										<td><?php echo $row->businessEmail;?></td>
										<td><?php echo $row->categoryId;?></td>
										
										</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include_once("footer.php") ?>
