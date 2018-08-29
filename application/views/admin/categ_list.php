
	 <!-- START CONTENT -->
	
		<div class="container">
          <div class="section">
				 <div id="table-datatables">
              <h4 class="header">Category List</h4>
              <div class="row">
                <div class="col s12 m12">
                  <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                    <thead>
                        <tr>
						    <th>Category Name</th> 
                            <th>View</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                 
                    <tfoot>
                        <tr>
							<th>Category Name</th> 
                            <th>View</th>
                            <th>Delete</th>
                        </tr>
                    </tfoot>
                 
                    <tbody>
                        <tr>
							<td>Education</td>
							<td class="center-align"><a href="#"><i class="mdi-action-visibility"></i></a></td>
							<td class="center-align"><a href="#"><i class="mdi-action-delete"></i></a></td>
                        </tr>
						 <tr>
							<td>Medical</td>
							<td class="center-align"><a href="#"><i class="mdi-action-visibility"></i></a></td>
							<td class="center-align"><a href="#"><i class="mdi-action-delete"></i></a></td>
                        </tr>
						<tr>
							<td>Hunger</td>
							<td class="center-align"><a href="#"><i class="mdi-action-visibility"></i></a></td>
							<td class="center-align"><a href="#"><i class="mdi-action-delete"></i></a></td>
                        </tr>
                    </tbody>
                  </table>
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
 
	 <script type="text/javascript" src="<?php echo base_url();?>application/js/custom-script.js"></script>
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