
	 <!-- START CONTENT -->
	
		<div class="container">
          <div class="section">
				<div class="section">
				<div class="row">
            <div class="col s12 m12 l12">
              <div class="card-panel">
                <h4 class="header2">NGO Registration</h4>
                <div class="row">
                  <form class="col s12">
                    <div class="row">
                      <div class="input-field col s6">
                        <input id="org_name" type="text">
                        <label for="org_name">Organisation Name</label>
                      </div>
                    
                      <div class="input-field col s6">
                        <input id="org_regno" type="text">
                        <label for="org_regno">Organisation Register No.*</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s4">
                        <input id="email5" type="email">
                        <label for="email">Email</label>
                      </div>
					  <div class="input-field col s4">
                        <input id="phone" type="text">
                        <label for="phone">Phone</label>
                      </div>
					  <div class="input-field col s4">
                        <input id="pan" type="text">
                        <label for="pan">PAN Card</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col s6">
                        <label><h5>Address</h5></label>
                      </div>
                    </div>
                    <div class="row">
                       <div class="input-field col s4">
                        <input id="door" type="text">
                        <label for="door">Door No.</label>
                      </div>
					  <div class="input-field col s4">
                        <input id="street" type="text">
                        <label for="street">Street</label>
                      </div>
					  <div class="input-field col s4">
                        <input id="city" type="text">
                        <label for="city">CIty</label>
                      </div>
                      
                    </div>
                    
                    <div class="row">
                       <div class="input-field col s4">
                        <input id="state" type="text">
                        <label for="state">State</label>
                      </div>
					  <div class="input-field col s4">
                        <input id="country" type="text">
                        <label for="country">Country</label>
                      </div>
					  <div class="input-field col s4">
                        <input id="pincode" type="text">
                        <label for="pincode">Pincode</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s4">
                        <input id="contact_person" type="text">
                        <label for="contact_person">Contact Person*</label>
                      </div>
					  <div class="input-field col s4">
                        <input id="contact_person_phone" type="text">
                        <label for="contact_person_phone">Contact Person Phone* </label>
                      </div>
					  <div class="input-field col s4">
                        <input id="contact_person_role" type="text">
                        <label for="contact_person_role">Role of Contact Person</label>
                      </div>
                    </div>
					 <div class="row">
                      <div class="input-field col s6">
                        <input id="fblink" type="text">
                        <label for="fblink">social media links (fb)</label>
                      </div>
                    <div class="file-field input-field col s6">
                        <div class="btn">
                          <span>File</span>
                          <input type="file" multiple>
                        </div>
                        <div class="file-path-wrapper">
                          <input class="file-path validate" type="text" placeholder="kyc document">
                        </div>
                      </div>
                    </div>
					 <div class="row">
                      
                      <div class="input-field col s12">
					  <textarea id="comments" class="materialize-textarea"></textarea>
                            <label for="comments">Comments/Questions</label>
                      </div>
                    </div>
					 <div class="row">
                        <div class="input-field col s12">
                          <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                            <i class="mdi-content-send right"></i>
                          </button>
                        </div>
                      </div>
                  </form>
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
    <script type="text/javascript" src="js/plugins/data-tables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/data-tables/data-tables-script.js"></script>
	 <script type="text/javascript" src="js/custom-script.js"></script>
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