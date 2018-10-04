<!---------------------------------------------------------------------------------------aboutus banner--------------------------------->
<div class="ngo-wrap">
	<h2 class="text-center">NGO Registration</h2>
	
	<div class="col-sm-10 mx-auto d-block">
		<form>
			<div class="basic-details">
				<div class="form-group col-sm-6 float-left">
					<label for="organizationname">Organization Name*</label>
					<input type="text" class="form-control" name="ngo_name" id="organizationname" placeholder="Enter organization name">
				</div>
				<div class="form-group col-sm-6 float-left">
					<label for="email">Email address*</label>
					<input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
				</div>
				<div class="form-group col-sm-6 float-left">
					<label for="phonenumber">Phone Number*</label>
					<input type="text" class="form-control" name="phone" id="phonenumber" placeholder="Enter valid mobile number">
				</div>
				<div class="form-group col-sm-6 float-left">
					<label for="phonenumber">Register Number*</label>
					<input type="text" name="ngo_regno" class="form-control" id="phonenumber" placeholder="Enter register number">
				</div>
			</div>
			<div class="address">
				<h6 class="ngo-field-titles"><b>Address</b></h6>
				<div class="form-group col-sm-6 float-left">
					<label for="doorno">Door No</label>
					<input type="text" class="form-control" name="door" id="doorno" placeholder="Door no / street name">
				</div>
				<div class="form-group col-sm-6 float-left">
					<label for="street">Street name</label>
					<input type="text" class="form-control" name="street" id="street" placeholder="Street name">
				</div>
				<div class="form-group col-sm-6 float-left">
					<label for="area">Area</label>
					<input type="text" class="form-control" name="area" id="area" placeholder="State">
				</div>
				<div class="form-group col-sm-6 float-left">
					<label for="city">City</label>
					<input type="text" class="form-control" name="city" id="doorno" placeholder="State">
				</div>
				<div class="form-group col-sm-6 float-left">
					<label for="state">State</label>
					<input type="text" class="form-control" name="state" id="state" placeholder="City">
				</div>
				<div class="form-group col-sm-6 float-left">
					<label for="country">Country</label>
					<input type="text" class="form-control" name="country" id="doorno" placeholder="Country">
				</div>
				<div class="form-group col-sm-6 float-left">
					<label for="pincode">Postal Code</label>
					<input type="text"  class="form-control" name="pincode" id="pincode" placeholder="Postal Code">
				</div>
			</div>
			
			<div class="contactdetails">
				<h6 class="ngo-field-titles"><b>Contact Details</b></h6>
				<div class="form-group col-sm-6 float-left">
					<label for="contactpersonname">Contact Person Name*</label>
					<input type="text" class="form-control" name="contact_person" id="contactpersonname" placeholder="Contact Person Name">
				</div>
				<div class="form-group col-sm-6 float-left">
					<label for="contactpersonnumber">Contact Person Number*</label>
					<input type="text" class="form-control" name="contact_person_phone" id="contactpersonnumber" placeholder="Contact Person Number">
				</div>
				<div class="form-group col-sm-6 float-left">
					<label for="roleofcontact">Role of Contact Person</label>
					<input type="text"  class="form-control" name="contact_person_role" id="roleofcontact" placeholder="Role of Contact Person">
				</div>
			</div>
			
			<div class="kyc">
				<h6 class="ngo-field-titles"><b>Kyc Documents</b></h6>
				<div class="form-check-inline ngo-field-titles">
					<label class="form-check-label">
						<input type="radio" id="upload" class="form-check-input" name="optradio">Upload Documents
					</label>
				</div>
				<div class="form-check-inline ngo-field-titles">
				  <label class="form-check-label">
					<input type="radio" id="physical" class="form-check-input" name="optradio">Physical Collection
				  </label>
				</div>
				<div class="form-check-inline ngo-field-titles">
				  <label class="form-check-label">
					<input type="radio" id="mail" class="form-check-input" name="optradio">Mail Service
				  </label>
				</div>
			
			<div class="socialmedia">
				<h6 class="ngo-field-titles"><b>Social Media Links</b></h6>
				<div class="form-group col-sm-6 float-left">
					<label for="socialurl">Paste your URL here</label>
					<input type="text" name="fblink" class="form-control" id="socialurl" placeholder="Social Media Link">
				</div>
				<!-- <div class="form-group col-sm-3 float-left">
					<label for="socialmediatype">Type Social</label>
					<select class="form-control" id="socialmediatype">
					  <option>- Select -</option>
					  <option>Facebook</option>
					  <option>Instagram</option>
					  <option>Linkedin</option>
					  <option>Twitter</option>
					  <option>Vimeo</option>
					</select>
				</div> -->
			</div>
			
			<div class="form-group col-sm-12">
				<label for="comments">Comments / Questions</label>
				<textarea class="form-control" name="comments" id="comments" placeholder="Comments / Questions" rows="3"></textarea>
			</div>
			
			<button class="ngo-btn mx-auto d-block"><a href="<?php echo base_url('uploaddoc');?>" >Submit</a></button>
			
		</form>
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