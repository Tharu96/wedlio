
	
	<div class="flex-container">
	<div class="card text-center"  style="width: 30rem; margin:0 auto;" >
	<div class="card-body ">
		<h4 class="card-title text-center mb-4 mt-1">Sign in</h4>
		<hr>
		<!-- <p class="text-success text-center">Some message goes here</p> -->
		<form action="<?php echo base_url();?>index.php/login/login_validation" method="post">
		<div class="form-group">
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"> <i class="fa fa-user"></i> </span>
			</div>
			<input name="email" class="form-control" placeholder="Email or login" type="email">
		</div> 
		</div>
		<div class="form-group">
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
			</div>
			<input name ="password" class="form-control" placeholder="******" type="password">
		</div> 
		</div>
		<div class="form-group">
		<button type="submit" class="btn btn-primary btn-block"> Login  </button>
		</div> 
		<p class="text-center"><a href="#" class="btn">Forgot password?</a></p>
		</form>
	</div>
	</div> 
	</div>