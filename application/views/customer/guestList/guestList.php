<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Customer Detaile</title>
	<link rel="stylesheet" href="<?echo base_url('assets/css/main.css');?>"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">


</head>
<body>


<div class="container">
	<h1 class="page-header text-center">Guest Details</h1>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<a href="<?php echo base_url('index.php/guestController/addGuest') ?>" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New</a><br><br>
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>Name</th>
                        <th>Number Of Guest</th>
						<th>Contact Number</th>
						<th>Address</th>
                        <th>Email</th>
						<th>My Notes</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach($guestArray as $guest){
						?>
						<tr>
							<td><?php echo $guest->name; ?></td>
							<td><?php echo $guest->numberOfGuests; ?></td>
							<td><?php echo $guest->contactNumber; ?></td>
							<td><?php echo $guest->address; ?></td>
                            <td><?php echo $guest->email; ?></td>
                            <td><?php echo $guest->myNotes; ?></td>
							<td><a href="<?php echo base_url(); ?>index.php/guestController/editGuest/<?php echo $guest->id; ?>" class="btn btn-success">
                            <span class="glyphicon glyphicon-edit"></span> Edit</a>
                            <a href="<?php echo base_url(); ?>index.php/guestController/deleteGuest/<?php echo $guest->id; ?>" class="btn btn-danger">
                            <span class="glyphicon glyphicon-trash"></span> Delete</a></td>
						</tr>
						<?php
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>
</body>
</html>