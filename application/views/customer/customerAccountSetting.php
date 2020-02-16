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
<?php extract($accountData); ?>
<?php echo $nic; ?>
    <hr>

    <form onSubmit="return validate()" action="<?php echo base_url(); ?>index.php/updateCustomerController/updateAccount/<?php echo  $this->session->userdata('id'); ?>" method="post"
        enctype="multipart/form-data" id="customerRegistration-form">

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputfirstname">First Name</label>
                <input type="text" class="form-control" name="firstname" value="<?php echo $firstName; ?>" placeholder="First Name">
            </div>
            <div class="form-group col-md-6">
                <label for="inputlastName">Last Name</label>
                <input type="text" class="form-control" name="lastname" value="<?php echo $lastName; ?>" placeholder="Last Name">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputNIC">NIC</label>
                <input type="text" class="form-control" name="nic" value="<?php echo $nic; ?>" placeholder="NIC">
            </div>
            <div class="form-group col-md-6">
                <label for="dob">Date of Birth</label>
                <input type="date" class="form-control" name="dob" value="<?php echo $dateOfBirth; ?>" placeholder="Date of Birth">
            </div>
        </div>


        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" name="address" value="<?php echo $address; ?>"
                    placeholder="Address">
            </div>
            <div class="form-group col-md-6">
                <label for="inputcontactNo">Contact No</label>
                <input type="text" class="form-control" name="contactno" value="<?php echo $contactNo; ?>" placeholder="Contact Number">
            </div>
        </div>



        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputgender">Gender</label> <br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="<?php echo $gender; ?>">
                    <label class="form-check-label" for="inlineRadio1">Male</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="<?php echo $gender; ?>">
                    <label class="form-check-label" for="inlineRadio2">Female</label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-5 col-md-12" style="background-color: #eee;">
                <img class="d-block w-100" src="<?php echo base_url();?>assets/homepage/wedlio_img/<?php echo $image?>" alt="Customer Photo" class="img-responsive" >
            </div>
        </div><br>

        <div class="form-row">
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
        <button type="submit" class="btn btn-outline-danger btn-rounded waves-effect">UPDATE</button>



    </form>




</div>

