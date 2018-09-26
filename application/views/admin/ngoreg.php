<!DOCTYPE html>
<html lang="en">



<body>
  
	 <!-- START CONTENT -->
	
		<div class="container">
          <div class="section">
				<div class="section">
				<div class="row">
            <div class="col s12 m12 l12">
              <div class="card-panel">
                <h4 class="header2">NGO Registration</h4>
                <div class="row">
                   <?php echo form_open_multipart('NgoRegCtrl/ngoreg_insert_update/'); ?>
                    <div class="row">
                      <div class="input-field col s6">
                        <input id="ngo_name" type="text" name="ngo_name">
                        <label for="ngo_name">Organisation Name</label>
						<span style="color: red; clear: both;text-shadow: lime;"><?php echo form_error('ngo_name'); ?></span>
                      </div>
                    
                      <div class="input-field col s6">
                        <input id="ngo_regno" type="text" name="ngo_regno">
                        <label for="ngo_regno">Organisation Register No.*</label>
						<span style="color: red; clear: both;text-shadow: lime;"><?php echo form_error('ngo_regno'); ?></span>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s6">
                        <input id="email5" type="email" name="email">
                        <label for="email">Email</label>
						<span style="color: red; clear: both;text-shadow: lime;"><?php echo form_error('email'); ?></span>
                      </div>
					  <div class="input-field col s6">
                        <input id="phone" type="text" name="phone">
                        <label for="phone">Phone</label>
						<span style="color: red; clear: both;text-shadow: lime;"><?php echo form_error('phone'); ?></span>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col s6">
                        <label><h5>Address</h5></label>
                      </div>
                    </div>
                    <div class="row">
                       <div class="input-field col s3">
                        <input id="door" type="text" name="door">
                        <label for="door">Door No.</label>
						<span style="color: red; clear: both;text-shadow: lime;"><?php echo form_error('door'); ?></span>
                      </div>
					  <div class="input-field col s3">
                        <input id="street" type="text" name="street">
                        <label for="street">Street</label>
						<span style="color: red; clear: both;text-shadow: lime;"><?php echo form_error('street'); ?></span>
                      </div>
					  <div class="input-field col s3">
                        <input id="area" type="text" name="area">
                        <label for="area">Area</label>
						<span style="color: red; clear: both;text-shadow: lime;"><?php echo form_error('area'); ?></span>
                      </div>
                      <div class="input-field col s3">
                        <input id="city" type="text" name="city">
                        <label for="city">City</label>
						<span style="color: red; clear: both;text-shadow: lime;"><?php echo form_error('city'); ?></span>
                      </div>
                    </div>
                    
                    <div class="row">
                       <div class="input-field col s4">
                        <input id="state" type="text" name="state">
                        <label for="state">State</label>
						<span style="color: red; clear: both;text-shadow: lime;"><?php echo form_error('state'); ?></span>
                      </div>
					  <div class="input-field col s4">
                        <input id="country" type="text" name="country">
                        <label for="country">Country</label>
						<span style="color: red; clear: both;text-shadow: lime;"><?php echo form_error('country'); ?></span>
                      </div>
					  <div class="input-field col s4">
                        <input id="pincode" type="text" name="pincode">
                        <label for="pincode">Pincode</label>
						<span style="color: red; clear: both;text-shadow: lime;"><?php echo form_error('pincode'); ?></span>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s4">
                        <input id="contact_person" type="text" name="contact_person">
                        <label for="contact_person">Contact Person*</label>
						<span style="color: red; clear: both;text-shadow: lime;"><?php echo form_error('contact_person'); ?></span>
                      </div>
					  <div class="input-field col s4">
                        <input id="contact_person_phone" type="text"name="contact_person_phone">
                        <label for="contact_person_phone">Contact Person Phone* </label>
						<span style="color: red; clear: both;text-shadow: lime;"><?php echo form_error('contact_person_phone'); ?></span>
                      </div>
					  <div class="input-field col s4">
                        <input id="contact_person_role" type="text"name="contact_person_role">
                        <label for="contact_person_role">Role of Contact Person</label>
						<span style="color: red; clear: both;text-shadow: lime;"><?php echo form_error('contact_person_role'); ?></span>
                      </div>
                    </div>
					 <div class="row">
                      <div class="input-field col s6">
                        <input id="fblink" type="text"name="fblink">
                        <label for="fblink">social media link (fb)</label>
						<span style="color: red; clear: both;text-shadow: lime;"><?php echo form_error('fblink'); ?></span>
                      </div>
                    
                    </div>
					 <div class="row">
                      
                      <div class="input-field col s12">
					  <textarea id="comments" class="materialize-textarea" name="comments"></textarea>
                            <label for="comments">Comments/Questions</label>
							<span style="color: red; clear: both;text-shadow: lime;"><?php echo form_error('comments'); ?></span>
                      </div>
                    </div>
					 <div class="row">
                      <div class="col s6">
                        <label><h5>KYC Documents</h5></label>
                      </div>
                    </div>
					<div class="row">
                      <div class="input-field col s3">
					  <input name="kycdoc" type="radio" value="upload_doc" id="upload_doc" />
                      <label for="upload_doc">Upload Documents</label>
                      </div>
					  <div class="input-field col s3">
					  <input name="kycdoc" type="radio" id="physical_collect" value="physical_collect" />
                      <label for="physical_collect">Physical Collection</label>
                      </div>
					  <div class="input-field col s3">
					  <input name="kycdoc" type="radio" id="mail_serv" value="mail_serv" />
                      <label for="mail_serv">Mail Service</label>
                      </div>
					  <span style="color: red; clear: both;text-shadow: lime;"><?php echo form_error('kycdoc'); ?></span>
                    </div>
					 <div class="row">
                        <div class="input-field col s12">
                          <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                            <i class="mdi-content-send right"></i>
                          </button>
                        </div>
                      </div>
                   <?php echo form_close(); ?>
                </div>
              </div>
            </div>
          </div>
				</div>
			</div>
		</div>

	<!-- END CONTENT -->
			
			
			<!-- //////////////////////////////////////////////////////////////////////////// -->
            <!-- START RIGHT SIDEBAR NAV-->
<aside id="right-sidebar-nav">
	    </aside>
		  <!-- END RIGHT SIDEBAR NAV-->
		<!-- //////////////////////////////////////////////////////////////////////////// -->
          <!-- data-tables -->
    
    <script type="text/javascript">
        /*Show entries on click hide*/
        $(document).ready(function(){
            $(".dropdown-content.select-dropdown li").on( "click", function() {
                var that = this;
                setTimeout(function(){
                if($(that).parent().hasClass('active')){
                        $(that).parent().removeClass('active');
                        $(that).parent().hide();
                }
                },100);
            });
        });
    </script>