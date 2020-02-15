
<h3>Your Wedding Details</h3>
<br><br>
<<<<<<< HEAD

=======
<p><?php echo  $this->session->userdata('email'); ?></p>
>>>>>>> 0438689a3f0eb88e7634ae0e4a4028e409974674
<form action="" >

<div class="form-row">
	<div class="form-group col-md-6">
		<label for="inputfirstname">Engagement Date</label>
		<input class="form-control" type="date" value="2014-04-07" id="example-date-input">
	</div>
	<div class="form-group col-md-6">
    <label for="inputfirstname">Wedding Date</label>
		<input class="form-control" type="date" value="2014-04-07" id="example-date-input">
	</div>
</div>


<div class="form-row">
	<div class="form-group col-md-6">
		<label for="inputfirstname">Wedding City</label>
		<input class="form-control" type="text" value="" id="example-text-input" placeholder="Wedding City">
	</div>
	<div class="form-group col-md-6">
		<label for="inputfirstname">wedding District</label>
		<select class="form-control" id="sel1">
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
	<div class="form-group col-md-6">
		<label for="inputfirstname">Number Of wedding Guests</label>
		<select class="form-control" id="sel1">
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
    <label for="inputfirstname">Wedding Budget</label>
    <select class="form-control" id="sel1">
        <option>Rs: 0 - Rs: 500,000</option>
        <option>Rs: 500,000 - Rs: 750,000</option>
        <option>Rs: 750,000 - Rs: 1,000,000</option>
        <option>Rs: 1,000,000 - Rs: 1,500,000</option>
        <option>Rs: 1,500,000+</option>
      </select>
	</div>
</div>

<div class="form-row">
	<div class="form-group col-md-6">
		<label for="inputfirstname">Desired Ceremony Setting - Choose 1</label>
		<div class="radio">
        <label><input type="radio" name="optradio" checked>     Option 1</label>
        </div>
        <div class="radio">
        <label><input type="radio" name="optradio">     Option 2</label>
        </div>
        <div class="radio disabled">
        <label><input type="radio" name="optradio">     Option 3</label>
</div>
	</div>
</div>

</form>

<button type="button" class="btn btn-outline-info btn-rounded waves-effect">Back To Dashboard</button>


