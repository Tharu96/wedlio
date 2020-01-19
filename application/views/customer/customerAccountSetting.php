<!-- <!DOCTYPE html>
<html lang="en">

	<head>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

	</head>
 
	<body> -->


<div class="m-5">
    <h2><b>Update Account</b></h2>

    <hr>
    <form onSubmit="return validate()" action="<?php echo base_url('index.php/customer/add_customer'); ?>" method="post"
        enctype="multipart/form-data" id="customerRegistration-form">

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputfirstname">First Name</label>
                <input type="text" class="form-control" name="firstname" id="inputfirstname" placeholder="First Name">
            </div>
            <div class="form-group col-md-6">
                <label for="inputlastName">Last Name</label>
                <input type="text" class="form-control" name="lastname" id="inputlastName" placeholder="Last Name">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputNIC">NIC</label>
                <input type="text" class="form-control" name="nic" id="inputNIC" placeholder="966592010v">
            </div>
            <div class="form-group col-md-6">
                <label for="dob">Date of Birth</label>
                <input type="date" class="form-control" name="dob" id="dob" placeholder="Date of Birth">
            </div>
        </div>


        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" name="address" id="inputAddress"
                    placeholder="1234, Galle Rd, Colombo 03">
            </div>
            <div class="form-group col-md-6">
                <label for="inputcontactNo">Contact No</label>
                <input type="text" class="form-control" name="contactno" id="inputcontactNo" placeholder="0112820187">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputgender">Gender</label> <br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male">
                    <label class="form-check-label" for="inlineRadio1">Male</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female">
                    <label class="form-check-label" for="inlineRadio2">Female</label>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="inputAddress">Image</label>
                <input type="file" class="form-control" name="image" id="inputimage" placeholder=" select image">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email">
            </div>
        </div>
        <hr>
        <b><h5><p>Change Your Password</p></h5></b>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputpassword1">Current Password</label>
                <input type="password" class="form-control" name="password" id="inputpassword" placeholder="Password">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputpassword1">New Password</label>
                <input type="password" class="form-control" name="password" id="inputpassword" placeholder="Password">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputpassword1">Confirm Password</label>
                <input type="password" class="form-control" name="password" id="inputpassword" placeholder="Password">
            </div>
        </div>
        <div class="form-row">
        <button type="button" class="btn btn-outline-danger btn-rounded waves-effect">Update</button>



    </form>




</div>

