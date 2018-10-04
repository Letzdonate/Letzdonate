<!---------------------------------------------------------------------------------------aboutus banner--------------------------------->
<style>
	.successalert{
		position: relative;
		top: 58px;
		z-index: 5;
	}
	@media screen and (max-device-width: 800px){
		.successalert{
		position: relative;
		top: 58px;
		z-index: 5;
	}
	}
	</style>
<?php if ($this->session->flashdata('msg') != null) {?>
<div class="alert alert-danger successalert">
  <strong>Something Went Wrong Please Try Again!</strong> Sorry for the inconvienence.
</div>
<?php } ?>
<div class="login-wrap col-sm-5 mx-auto d-block">
	<div class="log-reg-wrap">
		<h2 class="text-center">Create Account</h2>
		<?php echo form_open('WebCtrl/register_insert'); ?>	
		<div class="form-group col-sm-6 float-left">
			<label for="firstname">First Name*</label>
			<input type="text" name="firstname" class="form-control1" id="firstname" placeholder="First name">
		</div>
		<div class="form-group col-sm-6 float-left">
			<label for="lastname">Last Name</label>
			<input type="text" name="lastname" class="form-control1" id="lastname" placeholder="Last name">
		</div>
		<div class="form-group col-sm-12 float-left">
			<label for="email">E-Mail*</label>
			<input type="text" name="email" class="form-control1" id="email" placeholder="Enter Mail id">
		</div>
		<div class="form-group col-sm-12 float-left">
			<label for="phone">Phone</label>
			<input type="text" name="phone" class="form-control1" id="phone" placeholder="Enter Phone Number">
		</div>
		<div class="form-group col-sm-12 float-left">
			<label for="password">Password*</label>
			<input type="password" name="password" class="form-control1" id="password" placeholder="Enter Password">
		</div>
		<div class="form-group col-sm-12 float-left">
			<label for="repassword">Re-enter Password*</label>
			<input type="password" name="cfmpassword" class="form-control1" id="repassword" placeholder="Re-enter Password">
		</div>
		
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
		<?php echo form_close(); ?>
		<p class="text-center">
		Already have an account?
		<a href="<?php echo base_url('login');?>">
			<span style="color:#4285F4">Sign in</span>
		</a>
		</p>
	</div>
</div>

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
	$(document).ready(function(){
        var timeout = 3000; // in miliseconds (3*1000)
        $('.alert').delay(timeout).fadeOut(300);
    });
	
</script>

</html>