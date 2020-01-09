<html>
	<head>
		<title>Sum Html Textbox Values using jQuery/JavaScript</title>
		<!-- <style>
			body {
				font-family: sans-serif;
			}
			#summation {
				font-size: 18px;
				font-weight: bold;
				color:#174C68;
			}
			.txt {
				background-color: #FEFFB0;
				font-weight: bold;
				text-align: right;
			}
		</style> -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	</head>

	<body>

    <div class="container">
    <form>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Reception Venues</label>
            <div class="col-sm-10">
            <input type="email" class="txt" id="inputEmail3" placeholder="Email">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Videography</label>
            <div class="col-sm-10">
            <input type="email" class="txt" id="inputEmail3" placeholder="Email">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Photography</label>
            <div class="col-sm-10">
            <input type="email" class="txt" id="inputEmail3" placeholder="Email">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Wedding Bands</label>
            <div class="col-sm-10">
            <input type="email" class="txt" id="inputEmail3" placeholder="Email">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Bridal Salon</label>
            <div class="col-sm-10">
            <input type="email" class="txt" id="inputEmail3" placeholder="Email">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Djs</label>
            <div class="col-sm-10">
            <input type="email" class="txt" id="inputEmail3" placeholder="Email">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Florist</label>
            <div class="col-sm-10">
            <input type="email" class="txt" id="inputEmail3" placeholder="Email">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Sum : </label>
            <div class="col-sm-10">
            <input type="email" class="txt" id="sum" placeholder="Email">
            </div>
        </div>
        
        </form>
    </div>


	<tr id="summation">
		<td>&nbsp;</td>
		<td align="right">Sum :</td>
		<td align="center"><span id="sum">0</span></td>
	</tr>
</table>


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