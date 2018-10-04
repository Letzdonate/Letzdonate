<!---------------------------------------------------------------------------------------aboutus banner--------------------------------->
<div class="login-wrap col-sm-5 mx-auto d-block">
	<div class="log-reg-wrap">
		<h2 class="text-center">Login</h2>
		
		<div class="form-group col-sm-12 float-left">
			<label for="email">E-Mail</label>
			<input type="text" class="form-control1" id="email" placeholder="Enter your email">
		</div>
		<div class="form-group col-sm-12 float-left">
			<label for="password">Password</label>
			<input type="password" class="form-control1" id="password" placeholder="Enter Password">
		</div>
		<a href="<?php echo base_url('donor_register');?>">New User? <span style="color:#4285F4">Signup</span></a>
		<a class="float-right" href="<?php echo base_url('donor_forgotpassword');?>"><span style="color:#4285F4">Forgot Password</span></a>
		
		<button class="col-sm-8 ngo-btn mx-auto d-block">Submit</button>
		<div class="divider mx-auto">
			<hr>
		</div>			  
		<!-- <button type="submit" class="col-sm-8 ngo-btn mx-auto d-block" style="background:#4285F4;">
			<img class="float-left" src="<?php echo base_url();?>application/images/web/icons/7_Login-02.png"/> Sign in with Google
		</button>
		<button type="submit" class="col-sm-8 ngo-btn mx-auto d-block fb-btn" style="background:#4867AA;">
			<img class="float-left" src="<?php echo base_url();?>application/images/web/icons/7_Login-03.png"/>Sign in with Facebook
		</button> -->
	</div>
</div>

</body>
<script>
	$(document).ready(function(){
		$("#uploaddocs").hide();
		
		$("#upload").click(function(){
		$("#uploaddocs").show();
		});
		$("#physical").click(function(){
		$("#uploaddocs").hide();
		});
		$("#mail").click(function(){
		$("#uploaddocs").hide();
		});		
	});
</script>

</html>