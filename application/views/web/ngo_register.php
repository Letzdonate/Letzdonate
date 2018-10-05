<!---------------------------------------------------------------------------------------aboutus banner--------------------------------->
<div class="ngo-wrap">
	<h2 class="text-center">NGO Registration</h2>
	
	<div class="col-sm-10 mx-auto d-block">
	<?php echo form_open_multipart('NgoRegCtrl/ngoreg_insert_update/'.$id); ?>
			<div class="basic-details">
				<div class="form-group col-sm-6 float-left">
					<label for="organizationname">Organization Name*</label>
					<input type="text" class="form-control" name="ngo_name" id="organizationname" value = "<?php echo $ngo_insert_update['name']; ?>" placeholder="Enter organization name">
					<span style="color: red; clear: both;text-shadow: lime;"><?php echo form_error('ngo_name'); ?></span>
				</div>
				<div class="form-group col-sm-6 float-left">
					<label for="email">Email address*</label>
					<input type="email" name="email" class="form-control" id="email"value = "<?php echo $ngo_insert_update['email']; ?>" placeholder="name@example.com">
					<span style="color: red; clear: both;text-shadow: lime;"><?php echo form_error('email'); ?></span>
				</div>
				<div class="form-group col-sm-6 float-left">
					<label for="phonenumber">Phone Number*</label>
					<input type="text" class="form-control" name="phone" id="phonenumber" value = "<?php echo $ngo_insert_update['phone']; ?>" placeholder="Enter valid mobile number">
					<span style="color: red; clear: both;text-shadow: lime;"><?php echo form_error('phone'); ?></span>
				</div>
				<div class="form-group col-sm-6 float-left">
					<label for="phonenumber">Register Number*</label>
					<input type="text" name="ngo_regno" class="form-control"value = "<?php echo $ngo_insert_update['ngo_regno']; ?>" id="phonenumber" placeholder="Enter register number">
					<span style="color: red; clear: both;text-shadow: lime;"><?php echo form_error('ngo_regno'); ?></span>
				</div>
			</div>
			<div class="address">
				<h6 class="ngo-field-titles"><b>Address*</b></h6>
				<div class="form-group col-sm-6 float-left">
					<label for="doorno">Door No</label>
					<input type="text" class="form-control" value = "<?php echo $ngo_insert_update['door']; ?>" name="door" id="doorno" placeholder="Door no / street name">
					<span style="color: red; clear: both;text-shadow: lime;"><?php echo form_error('door'); ?></span>
				</div>
				<div class="form-group col-sm-6 float-left">
					<label for="street">Street name</label>
					<input type="text" class="form-control"value = "<?php echo $ngo_insert_update['street']; ?>" name="street" id="street" placeholder="Street name">
					<span style="color: red; clear: both;text-shadow: lime;"><?php echo form_error('street'); ?></span>
				</div>
				<div class="form-group col-sm-6 float-left">
					<label for="area">Area</label>
					<input type="text" class="form-control" value = "<?php echo $ngo_insert_update['area']; ?>" name="area" id="area" placeholder="Area">
					<span style="color: red; clear: both;text-shadow: lime;"><?php echo form_error('area'); ?></span>
				</div>
				<div class="form-group col-sm-6 float-left">
					<label for="city">City</label>
					<input type="text" class="form-control" value = "<?php echo $ngo_insert_update['city']; ?>" name="city" id="city" placeholder="City">
					<span style="color: red; clear: both;text-shadow: lime;"><?php echo form_error('city'); ?></span>
				</div>
				<div class="form-group col-sm-6 float-left">
					<label for="state">State</label>
					<input type="text" class="form-control"value = "<?php echo $ngo_insert_update['state']; ?>" name="state" id="state" placeholder="State">
					<span style="color: red; clear: both;text-shadow: lime;"><?php echo form_error('state'); ?></span>
				</div>
				<div class="form-group col-sm-6 float-left">
					<label for="country">Country</label>
					<input type="text" class="form-control" value = "<?php echo $ngo_insert_update['country']; ?>" name="country" id="doorno" placeholder="Country">
					<span style="color: red; clear: both;text-shadow: lime;"><?php echo form_error('country'); ?></span>
				</div>
				<div class="form-group col-sm-6 float-left">
					<label for="pincode">Postal Code</label>
					<input type="text"  class="form-control" value = "<?php echo $ngo_insert_update['pincode']; ?>" name="pincode" id="pincode" placeholder="Postal Code">
					<span style="color: red; clear: both;text-shadow: lime;"><?php echo form_error('pincode'); ?></span>
				</div>
			</div>
			
			<div class="contactdetails">
				<h6 class="ngo-field-titles"><b>Contact Details</b></h6>
				<div class="form-group col-sm-6 float-left">
					<label for="contactpersonname">Contact Person Name*</label>
					<input type="text" class="form-control" value = "<?php echo $ngo_insert_update['contact_person']; ?>" name="contact_person" id="contactpersonname" placeholder="Contact Person Name">
					<span style="color: red; clear: both;text-shadow: lime;"><?php echo form_error('contact_person'); ?></span>
				</div>
				<div class="form-group col-sm-6 float-left">
					<label for="contactpersonnumber">Contact Person Number*</label>
					<input type="text" class="form-control" value = "<?php echo $ngo_insert_update['contact_person_phone']; ?>" name="contact_person_phone" id="contactpersonnumber" placeholder="Contact Person Number">
					<span style="color: red; clear: both;text-shadow: lime;"><?php echo form_error('contact_person_phone'); ?></span>
				</div>
				<div class="form-group col-sm-6 float-left">
					<label for="roleofcontact">Role of Contact Person*</label>
					<input type="text"  class="form-control" value = "<?php echo $ngo_insert_update['contact_person_role']; ?>" name="contact_person_role" id="roleofcontact" placeholder="Role of Contact Person">
					<span style="color: red; clear: both;text-shadow: lime;"><?php echo form_error('contact_person_role'); ?></span>
				</div>
			</div>
			
			<div class="kyc">
				<h6 class="ngo-field-titles"><b>Kyc Documents*</b></h6>
				<div class="form-check-inline ngo-field-titles">
					<label class="form-check-label">
						<input type="radio" id="upload" checked="checked" class="form-check-input"<?php if ($ngo_insert_update['kycdoc'] == "upload_doc") {
    echo 'checked="checked"';
}
?> value="upload_doc" name="kycdoc">Upload Documents
					</label>
				</div>
				<div class="form-check-inline ngo-field-titles">
				  <label class="form-check-label">
					<input type="radio" id="physical" class="form-check-input" <?php if ($ngo_insert_update['kycdoc'] == "physical_collect") {
    echo 'checked="checked"';
}
?> value="physical_collect" name="kycdoc">Physical Collection
				  </label>
				</div>
				<div class="form-check-inline ngo-field-titles">
				  <label class="form-check-label">
					<input type="radio" id="mail" class="form-check-input" <?php if ($ngo_insert_update['kycdoc'] == "mail_serv") {
    echo 'checked="checked"';
}
?> value="mail_serv" name="kycdoc">Mail Service
				  </label>
				  <span style="color: red; clear: both;text-shadow: lime;"><?php echo form_error('kycdoc'); ?></span>
				</div>
			
			<div class="socialmedia">
				<h6 class="ngo-field-titles"><b>Social Media Links*</b></h6>
				<div class="form-group col-sm-6 float-left">
					<label for="socialurl">Paste your URL here</label>
					<input type="text" name="fblink" class="form-control" id="socialurl" placeholder="Social Media Link">
					<span style="color: red; clear: both;text-shadow: lime;"><?php echo form_error('fblink'); ?></span>
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
			
			<button type="submit" class="ngo-btn mx-auto d-block">Submit</button>
			
			<?php echo form_close(); ?>
	</div>
	
</div>

</body>

</html>