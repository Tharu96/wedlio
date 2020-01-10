<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>


<div class="container">
<table class="table table-hover table-responsive"  >

	<tr>
		
		<td>Photography</td>
		<td><input class="txt" type="text" name="txt"/></td>
	</tr>
	<tr>
		<td>Videography</td>
		<td><input class="txt" type="text" name="txt"/></td>
	</tr>
	<tr>
		<td>Bidal Salon</td>
		<td><input class="txt" type="text" name="txt"/></td>
	</tr>
	<tr>
		<td>Wedding Band</td>
		<td><input class="txt" type="text" name="txt"/></td>
	</tr>
	<tr>
		<td>Djs</td>
		<td><input class="txt" type="text" name="txt"/></td>
	</tr>
	<tr>
		<td>Wedding Cake</td>
		<td><input class="txt" type="text" name="txt"/></td>
	</tr>
	<tr>
		<td>Reception Venues</td>
		<td><input class="txt" type="text" name="txt"/></td>
	</tr>
	<tr id="summation">
		<td>Sum :</td>
		<td align="center"><span id="sum">0</span></td>
	</tr>
</table>
</div>

<script>
	$(document).ready(function(){

		//iterate through each textboxes and add keyup
		//handler to trigger sum event
		$(".txt").each(function() {

			$(this).keyup(function(){
				calculateSum();
			});
		});

	});

	function calculateSum() {

		var sum = 0;
		//iterate through each textboxes and add the values
		$(".txt").each(function() {

			//add only if the value is number
			if(!isNaN(this.value) && this.value.length!=0) {
				sum += parseFloat(this.value);
			}

		});
		//.toFixed() method will roundoff the final sum to 2 decimal places
		$("#sum").html(sum.toFixed(2));
	}
</script>
</body>
</html>