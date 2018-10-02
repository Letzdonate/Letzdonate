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
                   <?php echo form_open_multipart('NgoRegCtrl/ngoreg_insert_update/'.$id); ?>
                    <div class="row">
                      <div class="input-field col s6">
                        <input id="ngo_name" type="text" name="ngo_name" value = "<?php echo $ngo_insert_update['name'];?>">
                        <label for="ngo_name">Organisation Name</label>
						<span style="color: red; clear: both;text-shadow: lime;"><?php echo form_error('ngo_name'); ?></span>
                      </div>
                    
                      <div class="input-field col s6">
                        <input id="ngo_regno" type="text" name="ngo_regno" value = "<?php echo $ngo_insert_update['ngo_regno'];?>">
                        <label for="ngo_regno">Organisation Register No.*</label>
						<span style="color: red; clear: both;text-shadow: lime;"><?php echo form_error('ngo_regno'); ?></span>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s6">
                        <input id="email5" type="email" name="email" value = "<?php echo $ngo_insert_update['email'];?>">
                        <label for="email">Email</label>
						<span style="color: red; clear: both;text-shadow: lime;"><?php echo form_error('email'); ?></span>
                      </div>
					  <div class="input-field col s6">
                        <input id="phone" type="text" name="phone" value = "<?php echo $ngo_insert_update['phone'];?>">
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
                        <input id="door" type="text" name="door" value = "<?php echo $ngo_insert_update['door'];?>">
                        <label for="door">Door No.</label>
						<span style="color: red; clear: both;text-shadow: lime;"><?php echo form_error('door'); ?></span>
                      </div>
					  <div class="input-field col s3">
                        <input id="street" type="text" name="street" value = "<?php echo $ngo_insert_update['street'];?>">
                        <label for="street">Street</label>
						<span style="color: red; clear: both;text-shadow: lime;"><?php echo form_error('street'); ?></span>
                      </div>
					  <div class="input-field col s3">
                        <input id="area" type="text" name="area" value = "<?php echo $ngo_insert_update['area'];?>">
                        <label for="area">Area</label>
						<span style="color: red; clear: both;text-shadow: lime;"><?php echo form_error('area'); ?></span>
                      </div>
                      <div class="input-field col s3">
                        <input id="city" type="text" name="city" value = "<?php echo $ngo_insert_update['city'];?>">
                        <label for="city">City</label>
						<span style="color: red; clear: both;text-shadow: lime;"><?php echo form_error('city'); ?></span>
                      </div>
                    </div>
                    
                    <div class="row">
                       <div class="input-field col s4">
                        <input id="state" type="text" name="state" value = "<?php echo $ngo_insert_update['state'];?>">
                        <label for="state">State</label>
						<span style="color: red; clear: both;text-shadow: lime;"><?php echo form_error('state'); ?></span>
                      </div>
					  <div class="input-field col s4">
                        <input id="country" type="text" name="country" value = "<?php echo $ngo_insert_update['country'];?>">
                        <label for="country">Country</label>
						<span style="color: red; clear: both;text-shadow: lime;"><?php echo form_error('country'); ?></span>
                      </div>
					  <div class="input-field col s4">
                        <input id="pincode" type="text" name="pincode" value = "<?php echo $ngo_insert_update['pincode'];?>">
                        <label for="pincode">Pincode</label>
						<span style="color: red; clear: both;text-shadow: lime;"><?php echo form_error('pincode'); ?></span>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s4">
                        <input id="contact_person" type="text" name="contact_person" value = "<?php echo $ngo_insert_update['contact_person'];?>">
                        <label for="contact_person">Contact Person*</label>
						<span style="color: red; clear: both;text-shadow: lime;"><?php echo form_error('contact_person'); ?></span>
                      </div>
					  <div class="input-field col s4">
                        <input id="contact_person_phone" type="text"name="contact_person_phone" value = "<?php echo $ngo_insert_update['contact_person_phone'];?>">
                        <label for="contact_person_phone">Contact Person Phone* </label>
						<span style="color: red; clear: both;text-shadow: lime;"><?php echo form_error('contact_person_phone'); ?></span>
                      </div>
					  <div class="input-field col s4">
                        <input id="contact_person_role" type="text"name="contact_person_role" value = "<?php echo $ngo_insert_update['contact_person_role'];?>">
                        <label for="contact_person_role">Role of Contact Person</label>
						<span style="color: red; clear: both;text-shadow: lime;"><?php echo form_error('contact_person_role'); ?></span>
                      </div>
                    </div>
					 <div class="row">
                      <div class="input-field col s6">
                        <input id="fblink" type="text"name="fblink" value = "<?php echo $ngo_insert_update['fblink'];?>">
                        <label for="fblink">social media link (fb)</label>
						<span style="color: red; clear: both;text-shadow: lime;"><?php echo form_error('fblink'); ?></span>
                      </div>
                    
                    </div>
					 <div class="row">
                      
                      <div class="input-field col s12">
					  <textarea id="comments" class="materialize-textarea" name="comments"><?php echo $ngo_insert_update['comments'];?></textarea>
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
					  <input name="kycdoc" type="radio" value="upload_doc" id="upload_doc" <?php if($ngo_insert_update['kycdoc']=="upload_doc") echo 'checked="checked"'; ?>/>
                      <label for="upload_doc">Upload Documents</label>
                      </div>
					  <div class="input-field col s3">
					  <input name="kycdoc" type="radio" id="physical_collect" value="physical_collect" <?php if($ngo_insert_update['kycdoc']=="physical_collect") echo 'checked="checked"'; ?>/>
                      <label for="physical_collect">Physical Collection</label>
                      </div>
					  <div class="input-field col s3">
					  <input name="kycdoc" type="radio" id="mail_serv" value="mail_serv" <?php if($ngo_insert_update['kycdoc']=="mail_serv") echo 'checked="checked"'; ?>/>
                      <label for="mail_serv">Mail Service</label>
                      </div>
					  <span style="color: red; clear: both;text-shadow: lime;"><?php echo form_error('kycdoc');?></span>
                    </div>
					<br>
					 <div class="row">
                      <div class="input-field col s4">
                    <select name="status">
                      <option value="" disabled >--Select--</option>
                      <option value="Active"<?php if($ngo_insert_update['status']=="Active") echo 'selected="selected"'; ?>>Approved</option>
					  <option value="Inactive"<?php if($ngo_insert_update['status']=="Inactive") echo 'selected="selected"'; ?>>Inactive</option>
                      <option value="Pending"<?php if($ngo_insert_update['status']=="Pending") echo 'selected="selected"'; ?>>Pending</option>
                      <option value="Hold"<?php if($ngo_insert_update['status']=="Hold") echo 'selected="selected"'; ?>>Hold</option>
                    </select>
                    <label>Status</label>
                  </div>
                    
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
			<?php if($id != ""){?>
			 <div class="section">
				 <div id="striped-table">
              <h4 class="header">KYC Document List</h4><a href="<?php echo base_url('index.php/NgoRegCtrl/ngo_doc_view/'.$id); ?>"><i class="mdi-content-create"></i></a>
              <div class="row">
                <div class="col s12 m12">
                  <table class="striped" cellspacing="0">
                    <thead>
                        <tr>
                            <th>File Name</th>
                            <th>View</th>
                        </tr>
                    </thead>
                    <tbody>
					<?php foreach($ngo_doc_list as $ngo_list): ?>
                        <tr>
							<td><?=$ngo_list->filename; ?></td>
							<td class="center-align"><a href="<?php echo $ngo_list->fullPath; ?>" target="_blank"><i class="mdi-action-visibility"></i></a></td>
                        </tr>
						<?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div> 
			</div>
			<?php } ?>
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