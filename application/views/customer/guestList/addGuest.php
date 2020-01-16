<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Add Customer Details</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<body>
<div class="container">
	<h1 class="page-header text-center">Add Guest Details</h1>
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			<h3>Add Form
				<span class="pull-right"><a href="<?php echo base_url('index.php/guestController/showGuestList');?>" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Back</a></span>
			</h3>
			<hr>
			<form method="POST" action="<?php echo base_url(); ?>index.php/guestController/insertGuest">
				<div class="form-group">
					<label>Name:</label>
					<input type="text" class="form-control" name="name">
				</div>
                <div class="form-group">
					<label>Number Of Guests:</label>
					<input type="number" class="form-control" name="numberOfGuests">
				</div>
				<div class="form-group">
					<label>Contact Number:</label>
					<input type="text" class="form-control" name="contactNumber">
				</div>
				<div class="form-group">
					<label>Address:</label>
					<input type="text" class="form-control" name="address">
				</div>
				<div class="form-group">
					<label>Email:</label>
					<input type="email" class="form-control" name="email">
				</div>
                <div class="form-group">
					<label>My Notes :</label>
					<input type="text" class="form-control" name="myNotes">
				</div>
				<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>
