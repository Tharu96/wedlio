<!-- <!DOCTYPE html>
<html lang="en">

<head>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

</head>

<body> -->
<?php include_once("header.php") ?>
<?php include_once("navbar.php") ?>

<div class="m-5">
    <h2><b>Create Account</b></h2><br>
    <p>Thank you for your interest in becoming a vendor/supplier for us. </p>
    <p>If you wish to apply for this status, please fill out this online Vendor/Supplier Registration Form</p>
    <hr>
    <p>Your Account Will Be Created After The Veryfication By The System Administrators.</p>
    <hr>
    <p>Personnal Information Relevant To The Person Representing The Company</p>

    <hr>
    <br>
    <form onSubmit="return validate()" action="<?php echo base_url(); ?>index.php/vendor/add_vendor_temp" method="post"
        enctype="multipart/form-data" id="customerRegistration-form">

        <div class="form-row">
            <div class="form-group col-sm-6">
                <label for="inputfirstname">First Name</label>
                <input type="text" class="form-control" name="firstname" id="inputfirstname" placeholder="First Name">
            </div>
            <div class="form-group col-sm-6">
                <label for="inputlastName">Last Name</label>
                <input type="text" class="form-control" name="lastname" id="inputlastName" placeholder="Last Name">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-sm-6">
                <label for="inputNIC">NIC</label>
                <input type="text" class="form-control" name="nic" id="inputNIC" placeholder="966592010v">
            </div>
            <div class="form-group col-sm-6">
                <label for="inputcontactNo">Contact No</label>
                <input type="text" class="form-control" name="contactno" id="inputcontactNo" placeholder="0112820187">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-sm-6">
                <label for="inputcontactemail">Contact Email</label>
                <input type="email" class="form-control" name="contactemail" id="inputEmail4" placeholder="Email">
            </div>
        </div>



        <!-- <div class="form-row"> -->
        <!-- <div class="form-group col-md-6">	 -->
        <!-- <label for="inputgender">Gender</label>	<br>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male">
							<label class="form-check-label" for="inlineRadio1">Male</label>
						</div> -->

        <!-- <div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female">
							<label class="form-check-label" for="inlineRadio2">Female</label>
						</div>					 -->
        <!-- </div> -->



        <br>
        <hr><br>
        <div class="form-row">
            <p>Information Relevant To The Business To Be Displayed In the Website</p>
        </div>
        <br>
        <div class="form-row">
            <div class="form-group col-sm-12">
                <label for="inputbusinessName">Business Name</label>
                <!-- required -->
                <input type="text" class="form-control" name="businessname" id="inputbusinessName"
                    placeholder="ABC & co.">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-sm-12">
                <label for="inputfirstname">Business Description (Services that your business provide)</label>
                <!-- not required -->
                <input type="text" class="form-control" name="businessdescription" id="inputdescription"
                    placeholder="Services that your company provide. Eg. Photography/Videography">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-sm-12">
                <label for="inputfirstname">Company Description (company founding year, company size, company audience,
                    geographical target.)</label>
                <!-- not required -->
                <input type="text" class="form-control" name="companydescription" id="inputdescription"
                    placeholder="E-business targetting consumers worldwide">
            </div>
        </div>

        <div class="form-row">

            <div class="form-group col-sm-6">
                <label for="inputEmail4">Company Website</label>
                <input type="url" class="form-control" name="companywebsite" id="inputEmail4" placeholder="abc.com">
            </div>


        </div>

        <div class="form-row">
            <div class="form-group col-sm-6">
                <label for="inputBusinessEmail">Business Email</label>
                <input type="email" class="form-control" name="businessemail" id="inputEmail4" placeholder="Email">
            </div>
            <div class="form-group col-sm-6">
                <label for="inputbusinessphone">Business Contact Number</label>
                <!-- not required -->
                <input type="text" class="form-control" name="businesscontactno" id="inputbusinessContactNo"
                    placeholder="01128759462">
            </div>

        </div>

        <div class="form-row">
            <div class="form-group col-sm-6">
                <label for="inputaddress">Business Address</label>
                <!-- not required -->
                <input type="text" class="form-control" name="businessaddress" id="inputbusinessaddress"
                    placeholder="123, Galle Rd, Colombo 03">
            </div>

            <div class="form-group col-sm-6">
                <label for="inputdistrict">District</label>
                <!-- required -->
                <select class="form-control" id="sel1" name="district">
                    <option value="1">Ampara</option>
                    <option value="2">Anuradhapura</option>
                    <option value="3">Badulla</option>
                    <option value="4">Batticaloa</option>
                    <option value="5">Colombo</option>
                    <option value="6">Galle</option>
                    <option value="7">Gampaha</option>
                    <option value="8">Hambantota</option>
                    <option value="9">Jaffna</option>
                    <option value="10">Kalutara</option>
                    <option value="11">Kandy</option>
                    <option value="12">Kegalle</option>
                    <option value="13">Kilinochchi</option>
                    <option value="14">Kurunegala</option>
                    <option value="15">Mannar</option>
                    <option value="16">Mathale</option>
                    <option value="17">Matara</option>
                    <option value="18">Monaragala</option>
                    <option value="19">Mullaitivu</option>
                    <option value="20">Nuwara Eliya</option>
                    <option value="21">Polonnaruwa</option>
                    <option value="22">Puttalam</option>
                    <option value="23">Ratnapura</option>
                    <option value="24">Trincomalee</option>
                    <option value="25">Vavuniya</option>

                </select>
            </div>

        </div>


        <div class="form-row">
            <div class="form-group col-sm-6">
                <label for="inputpassword1">Password</label>
                <input type="password" class="form-control" name="password" id="inputpassword" placeholder="Password">
            </div>
            <div class="form-group col-sm-6">
                <label for="inputconfirmPassword1">Confirm Password</label>
                <input type="password" class="form-control" name="confirmpassword" id="confirmpassword"
                    placeholder="Confirm Password">
            </div>
        </div>

        <div class="form-row">
            <button type="submit" class="btn btn-primary">Sign in</button>
            <button type="button" class="btn btn-danger">Reset</button>
        </div>

    </form>
</div>

<?php include_once("footer.php") ?>
</body>

<script>
function validate() {
    if (document.getElementById("inputpassword").value != document.getElementById("confirmpassword").value) {
        alert("Passwords Do Not Match");
        return false;
    }






















}
</script>

</html>