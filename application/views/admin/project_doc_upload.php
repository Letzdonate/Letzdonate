<!DOCTYPE html>
<html lang="en">


	 <!-- START CONTENT -->
	
		<div class="container">
          <div class="section">
				<div class="section">
				<div class="row">
            <div class="col s12 m12 l12">
              <div class="card-panel">
                <h4 class="header2">Project Document Upload</h4>
                <div class="row">
                   <?php echo form_open_multipart('ProjectCtrl/proj_doc_upload'); ?>
					 <div class="row">
					 <div class="file-field input-field col s4">
					 <label>Image</label>
					 </div>
                    <div class="file-field input-field col s6">
                        <div class="btn">
                          <span>Browse</span>
                          <input type="file" name="images[]" multiple>
                        </div>
                        <div class="file-path-wrapper">
                          <input class="file-path validate" type="text" placeholder="Select multiple Images using shift or ctrl">
                        </div>
                      </div>
                    </div>
					<div class="row">
					<div class="file-field input-field col s4">
					 <label>Documents</label>
					 </div>
                    <div class="file-field input-field col s6">
                        <div class="btn">
                          <span>Browse</span>
                          <input type="file" name="document[]" multiple>
                        </div>
                        <div class="file-path-wrapper">
                          <input class="file-path validate" type="text" placeholder="Select multiple Documents using shift or ctrl">
                        </div>
                      </div>
                    </div>
					<input type="hidden" name="proj_id" value="<?php echo $id ?>"/>
					 <div class="row">
                        <div class="input-field col s12">
                          <button class="btn cyan waves-effect waves-light right" type="submit" value="files" name="action">Submit
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

	