<!DOCTYPE html>
<html lang="en">



<body>
   
			<!-- START CONTENT -->
		
				<div class="container">
				 <div class="card-panel">
				  <div class="section">
						<div id="input-fields">
							 <h4 class="header">Project Entry</h4>
							 <div class="row">
								 <?php echo form_open_multipart('ProjectCtrl/project_insert_update/'.$id); ?>
									<div class="row">
										<div class="input-field col s6">
										  <input id="proj_name" type="text" class="validate" name="proj_name" value = "<?php echo $project_insert_update['proj_name'];?>">
										  <label for="proj_name">Project Title</label>
										  	<span style="color: red; clear: both;text-shadow: lime;"><?php echo form_error('proj_name'); ?></span>
										</div>
										 <div class="input-field col s6">
											<select name="proj_category">
											<option value=""disabled>--Select--</option>
											  <?php foreach($proj_category as $categ): ?>
										<option value="<?php echo $categ->id?>" <?php if($project_insert_update['proj_category']==$categ->id) echo 'selected="selected"'; ?>><?php echo $categ->categ_name?></option>
										<?php endforeach;?>
											</select>
											<!---->
											<label>Project category</label>
												<span style="color: red; clear: both;text-shadow: lime;"><?php echo form_error('proj_category'); ?></span>
										 </div>
									</div>
									
									<div class="row">
										<div class="input-field col s12">
											<input id="proj_desc" type="text" name="proj_desc" maxlength="133" length="133" value = "<?php echo $project_insert_update['proj_desc'];?>">
											<label for="proj_desc">Description*</label>
												<span style="color: red; clear: both;text-shadow: lime;"><?php echo form_error('proj_desc'); ?></span>
										</div>						 	
									</div> 
									<div class="row">
										<div class="col s6">
											<label><h5>Story</h5></label>
										</div>					 	
									</div>
									
									<br>
									<div class="row">
										<div class="input-field col s12">
											<textarea id="paragraph1" class="materialize-textarea" name="paragraph1" length=""><?php echo $project_insert_update['story_paragraph1'];?></textarea>
											<label for="paragraph1">Paragraph 1</label>
												<span style="color: red; clear: both;text-shadow: lime;"><?php echo form_error('paragraph1'); ?></span>
										</div>						 	
									</div>
									<div class="row">
										<div class="input-field col s12">
											<textarea id="paragraph2" class="materialize-textarea" name="paragraph2" length=""><?php echo $project_insert_update['story_paragraph2'];?></textarea>
											<label for="paragraph2">Paragraph 2</label>
												<span style="color: red; clear: both;text-shadow: lime;"><?php echo form_error('paragraph2'); ?></span>
										</div>						 	
									</div>
									<div class="row">
										<div class="input-field col s12">
											<textarea id="paragraph3" class="materialize-textarea" name="paragraph3" length=""><?php echo $project_insert_update['story_paragraph3'];?></textarea>
											<label for="paragraph3">Paragraph 3</label>
										</div>						 	
									</div>
									<div class="row">
										<div class="input-field col s4">
										  <div class="switch">
											<label><span>Scope : </span>
											  Target
											  <input onchange="tgd()" id="proj_scope" type="checkbox" value="Recurring" name="proj_scope"<?php if($project_insert_update['proj_scope']=="Recurring") echo 'checked="checked"'; ?>">
											  <span class="lever"></span> Recurring
											</label>
										  </div>
										</div>
										
										<div class="input-field col s4">
										  <input id="proj_amount" type="text" name="proj_amount" class="validate" value = "<?php echo $project_insert_update['proj_amount'];?>">
										  <label for="proj_amount">Amount</label>
										  	<span style="color: red; clear: both;text-shadow: lime;"><?php echo form_error('proj_amount'); ?></span>
										</div>
										
										<div id="tdate" class="input-field col s4">
											<input id="proj_target_date" type="date" class="datepicker" name="proj_target_date" value = "<?php echo $project_insert_update['proj_target_date'];?>">
											<label for="proj_target_date">Target Date</label>
										</div>
									</div>
									<br><br>
									<div class="row">
										<div class="col s12 right-align">
										  <button class="btn waves-effect waves-light " type="submit" name="action">Submit</button>
										</div>
									</div>
								<?php echo form_close(); ?>
							</div>
						</div>
					</div>
					</div>
				<?php if($id != ""){?>
				 <div class="card-panel">
			 <div class="section">
				 <div id="striped-table">
              <h4 class="header">Project Images</h4><a href="<?php echo base_url('index.php/ProjectCtrl/proj_doc_upload_view/'.$id); ?>"><i class="mdi-content-create"></i></a>
              <div class="row">
                <div class="col s12 m12">
                  <table class="striped" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Image Name</th>
                            <th>View</th>
                        </tr>
                    </thead>
                    <tbody>
					<?php foreach($proj_img_list as $img_list): ?>
                        <tr>
							<td><?=$img_list->filename; ?></td>
							<td class="center-align"><a href="<?php echo $img_list->fullpath; ?>" target="_blank"><i class="mdi-action-visibility"></i></a></td>
                        </tr>
						<?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div> 
			</div>
			</div>
			 <div class="card-panel">
			<div class="section">
				 <div id="striped-table">
              <h4 class="header">Ptoject Document</h4>
              <div class="row">
                <div class="col s12 m12">
                  <table class="striped" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Document Name</th>
                            <th>View</th>
                        </tr>
                    </thead>
                    <tbody>
					<?php foreach($proj_doc_list as $doc_list): ?>
                        <tr>
							<td><?=$doc_list->filename; ?></td>
							<td class="center-align"><a href="<?php echo $doc_list->fullpath; ?>" target="_blank"><i class="mdi-action-visibility"></i></a></td>
                        </tr>
						<?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div> 
			</div>
			</div>
			<?php } ?>
				</div>
					
			<!-- END CONTENT -->
 
</body>
<script>
	function tgd(){
		var status = $('#proj_scope').prop('checked');
		if(status == true){
			$('#tdate').hide();
		}else{
			$('#tdate').show();
		}
	}
	$(document).ready(function(){
		var status = $('#proj_scope').prop('checked');
		if(status == true){
			$('#tdate').hide();
		}else{
			$('#tdate').show();
		}
	});
</script>
</html>