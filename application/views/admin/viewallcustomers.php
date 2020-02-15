	<?php include_once("header.php") ?>
	<?php include_once("leftpanel.php") ?>
	<?php include_once("navbar.php") ?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<div class="content">
	    <div class="container-fluid">
	        <div class="row">
	            <div class="col-md-12">
	                <div class="card">
	                    <div class="card-header card-header-primary">
	                        <h4 class="card-title ">Customer Details</h4>
	                        <p class="card-category">Registered customers</p>
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
	                                    <th>
	                                        Address
	                                    </th>
	                                    <th>
	                                        Gender
	                                    </th>
	                                    <th>
	                                        Image
	                                    </th>
	                                    <th>
	                                        Date of Birth
	                                    </th>
	                                    <th>
	                                        Created At
	                                    </th>
	                                </thead>
	                                <tbody>
	                                    <tr class="tr-shadow">
	                                        <?php foreach ($h->result() as $row) { ?>

	                                        <td><?php echo $row->userId; ?></td>
	                                        <td><?php echo $row->firstName; ?></td>
	                                        <td><?php echo $row->lastName; ?></td>
	                                        <td><?php echo $row->contactNo; ?></td>
	                                        <td><?php echo $row->nic; ?></td>
	                                        <td><?php echo $row->address; ?></td>
	                                        <td><?php echo $row->gender; ?></td>
	                                        <td><?php echo $row->image; ?></td>
	                                        <td><?php echo $row->dateOfBirth; ?></td>
	                                        <td><?php echo $row->createdAt; ?></td>
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

	</script>
