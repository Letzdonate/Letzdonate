<!DOCTYPE html>
<html lang="en">


	 <!-- START CONTENT -->

		<div class="container">
          <div class="section">
				<div class="section">
				<div class="row">
            <div class="col s12 m12 l12">
              <div class="card-panel">
                <h4 class="header2">NGO KYC Document Upload</h4>
                <div class="row">
                   <?php echo form_open_multipart('NgoRegCtrl/ngo_doc_insert_update'); ?>
					 <div class="row">
					 <div class="file-field input-field col s4">
					 <label>Proof of Registration</label>
					 </div>
                    <div class="file-field input-field col s6">
                        <div class="btn">
                          <span>Browse</span>
                          <input type="file" name="proof_of_reg">
                        </div>
                        <div class="file-path-wrapper">
                          <input class="file-path validate" type="text" placeholder="Proof of Registration">
                        </div>
                      </div>
                    </div>
					<div class="row">
					<div class="file-field input-field col s4">
					 <label>PAN Card of the NGO</label>
					 </div>
                    <div class="file-field input-field col s6">
                        <div class="btn">
                          <span>Browse</span>
                          <input type="file" name="pan_ngo">
                        </div>
                        <div class="file-path-wrapper">
                          <input class="file-path validate" type="text" placeholder="PAN Card of the NGO">
                        </div>
                      </div>
                    </div>
					<div class="row">
					<div class="file-field input-field col s4">
					 <label>Latest Audited Balance Sheet</label>
					 </div>
                    <div class="file-field input-field col s6">
                        <div class="btn">
                          <span>Browse</span>
                          <input type="file" name="labs">
                        </div>
                        <div class="file-path-wrapper">
                          <input class="file-path validate" type="text" placeholder="Latest Audited Balance Sheet">
                        </div>
                      </div>
                    </div>
					<div class="row">
					<div class="file-field input-field col s4">
					 <label>Form 12-A for IT Exemption</label>
					 </div>
                    <div class="file-field input-field col s6">
                        <div class="btn">
                          <span>Browse</span>
                          <input type="file" name="form_12A">
                        </div>
                        <div class="file-path-wrapper">
                          <input class="file-path validate" type="text" placeholder="Form 12-A for IT Exemption">
                        </div>
                      </div>
                    </div>
					<div class="row">
					<div class="file-field input-field col s4">
					 <label>FCRA registration if applicable</label>
					 </div>
                    <div class="file-field input-field col s6">
                        <div class="btn">
                          <span>Browse</span>
                          <input type="file" name="fcra">
                        </div>
                        <div class="file-path-wrapper">
                          <input class="file-path validate" type="text" placeholder="FCRA registration if applicable">
                        </div>
                      </div>
                    </div>
					<input style="display:none;"type="text" name="userid" value="<?php echo $id ?>"/>
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

