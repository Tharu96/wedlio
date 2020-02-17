
<h3>Your Wedding Details</h3>
<br><br>

<?php extract($customerData); ?>
<?php extract($weddingData); ?>



<form method="POST" action="<?php echo base_url(); ?>index.php/updateCustomerController/update/<?php echo  $this->session->userdata('id'); ?>">
<div class="form-row">
	<div class="form-group col-md-6">
		<label >Engagement Date</label>
		<input class="form-control" type="date" value="<?php echo $engagementDate; ?>" name="engagementDate">
	</div>
	<div class="form-group col-md-6">
    <label >Wedding Date</label>
		<input class="form-control" type="date" value="<?php echo $weddingDate; ?>" name="weddingDate">
	</div>
</div>
<div class="form-row">
	<div class="form-group col-md-6">
		<label >Wedding City</label>
		<input class="form-control" type="text" value="<?php echo $weddingCity; ?>"  name="weddingCity">
	</div>
	<div class="form-group col-md-6">
		<label >wedding District</label>
		<select class="form-control" name="weddingDistrict" >
			<option value=<?php echo $weddingDistrict; ?> selected ><?php echo $weddingDistrict; ?></option>
            <option value="Ampara">Ampara</option>
		    <option value="Anuradhapura">Anuradhapura</option>
		    <option value="Badulla">Badulla</option>
		    <option value="Batticaloa">Batticaloa</option>
		    <option value="Colombo">Colombo</option>
		    <option value="Galle">Galle</option>
		    <option value="Gampaha">Gampaha</option>
		    <option value="Hambantota">Hambantota</option>
		    <option value="Jaffna">Jaffna</option>
			<option value="Kalutara">Kalutara</option>
			<option value="Kandy">Kandy</option>
			<option value="Kegalle">Kegalle</option>
			<option value="Kilinochchi">Kilinochchi</option>
			<option value="Kurunegala">Kurunegala</option>
			<option value="Mannar">Mannar</option>
			<option value="Mathale">Mathale</option>
			<option value="Matara">Matara</option>
			<option value="Monaragala">Monaragala</option>
			<option value="Mullaitivu">Mullaitivu</option>
			<option value="Nuwara Eliya">Nuwara Eliya</option>
			<option value="Polonnaruwa">Polonnaruwa</option>
			<option value="Puttalam">Puttalam</option>
			<option value="Ratnapura">Ratnapura</option>
			<option value="Trincomalee">Trincomalee</option>
			<option value="Vavuniya">Vavuniya</option>
      </select>
	</div>
</div>

<div class="form-row">
	<div class="form-group col-md-6">
		<label>Number Of wedding Guests</label>
		<select class="form-control" name="numberOfWeddingGuests" >
		<option value=<?php echo $numberOfWeddingGuests; ?> selected ><?php echo $numberOfWeddingGuests; ?></option>
        <option>0-50</option>
        <option>51-100</option>
        <option>101-150</option>
        <option>151-200</option>
        <option>201-300</option>
        <option>300+</option>
      </select>
	</div>
</div>

<div class="form-row">
	<div class="form-group col-md-6">
    <label>Wedding Budget</label>
    <select class="form-control" name="weddingBudget">
		<option value=<?php echo $weddingBudget; ?> selected ><?php echo $weddingBudget; ?></option>
        <option>Rs:0-Rs:500,000</option>
        <option>Rs:500,000-Rs:750,000</option>
        <option>Rs:750,000-Rs:1,000,000</option>
        <option>Rs:1,000,000-Rs:1,500,000</option>
        <option>Rs:1,500,000+</option>
      </select>
	</div>
</div>


<button type="submit" class="btn btn-outline-info btn-rounded waves-effect"> UPDATE </button>
</form>
<button type="button" class="btn btn-outline-info btn-rounded waves-effect"><a href="<?php echo base_url(); ?>index.php/Home/CustomerDashboard" >Back To Dashboard</a> </button>

