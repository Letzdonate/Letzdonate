<!DOCTYPE html>
<html lang="en">



<body>
   
			<!-- START CONTENT -->
			<section id="content">
				<div class="container">
				  <div class="section">
						<div id="input-fields">
							 <h4 class="header">Project Entry</h4>
							 <div class="row">
								<form class="col s12" action="projectlist.html">
									<div class="row">
										<div class="input-field col s6">
										  <input id="last_name" type="text" class="validate">
										  <label for="last_name">Project Title</label>
										</div>
										 <div class="input-field col s6">
											<select>
											  <option value="" disabled selected>Choose your option</option>
											  <option value="1">Education</option>
											  <option value="2">Medical</option>
											  <option value="3">Hunger</option>
											</select>
											<label>Project category</label>
										 </div>
									</div>
									
									<div class="row">
										<div class="input-field col s12">
											<input id="input_text" type="text" maxlength="133" length="133">
											<label for="input_text">Description*</label>
										</div>						 	
									</div> 
									
									<div class="row">
										<div class="input-field col s12">
											<textarea id="textarea1" class="materialize-textarea" length=""></textarea>
											<label for="textarea1">Story*</label>
										</div>						 	
									</div>
									<div class="row">
										<div class="input-field col s6">
										  <div class="switch">
											<label><span>Scope : </span>
											  Target
											  <input onchange="tgd()" id="scope" type="checkbox">
											  <span class="lever"></span> Recurring
											</label>
										  </div>
										</div>
										
										<div class="input-field col s6">
										  <input id="amount" type="text" class="validate">
										  <label for="amount">Amount</label>
										</div>
										
										<div id="tdate" class="input-field col s6">
											<input id="tgdate" type="date" class="datepicker">
											<label for="tgdate">Target Date</label>
										</div>
									</div>
									
									<div class="row">
										<div class="input-field col s6">
										<label><span>Project files : </span></label><br>
											<div class="file-field input-field">
												<div class="btn">
												  <span>File</span>
												  <input type="file" multiple>
												</div>
												<div class="file-path-wrapper">
												  <input class="file-path validate" type="text" placeholder="Upload one or more files">
												</div>
											</div>
										</div>
										<div class="input-field col s6">
										<label><span>Project images : </span></label><br>
											<div class="file-field input-field">
												<div class="btn">
												  <span>File</span>
												  <input type="file" multiple>
												</div>
												<div class="file-path-wrapper">
												  <input class="file-path validate" type="text" placeholder="Upload one or more files">
												</div>
											</div>
										</div>
									</div>
									<br><br>
									<div class="row">
										<div class="col s12 right-align">
										  <button class="btn waves-effect waves-light " type="submit" name="action">Submit</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- END CONTENT -->
			
			
	<!-- //////////////////////////////////////////////////////////////////////////// -->
	<!-- START RIGHT SIDEBAR NAV-->
		<aside id="right-sidebar-nav">
	    </aside>
	<!-- END RIGHT SIDEBAR NAV-->
	<!-- //////////////////////////////////////////////////////////////////////////// -->
        </div>
        <!-- END WRAPPER -->
    </div>
    <!-- END MAIN -->
 
</body>
<script>
	function tgd(){
		var status = $('#scope').prop('checked');
		if(status == true){
			$('#tdate').hide();
		}else{
			$('#tdate').show();
		}
	}
</script>
</html>