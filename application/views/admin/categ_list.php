
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
						    <th>View</th>
                            <th>Delete</th>
                            <th>Category Name</th>
						    <th>Status</th>
                        </tr>
                    </thead>
                 
                    <tfoot>
                        <tr>
							<th>View</th>
                            <th>Delete</th>
                            <th>Category Name</th>
						    <th>Status</th>
                        </tr>
                    </tfoot>
                 
                    <tbody>
                        <?php foreach($get_categ_list as $categ_list): ?>
                        <tr>
							<td class="center-align"><a href="<?php echo base_url('index.php/CategoryCtrl/categ_view/'.$categ_list->id); ?>"><i class="mdi-action-visibility"></i></a></td>
							<td class="center-align"><a onclick="return confirm('Are You Sure, Want To Delete The Category Permanently');" href="<?php echo base_url('index.php/CategoryCtrl/categ_delete/'.$categ_list->id); ?>"><i class="mdi-action-delete"></i></a></td>
							<td><?=$categ_list->categ_name; ?></td>
							<td><?=$categ_list->status; ?></td>
                        </tr>
						<?php endforeach; ?>
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