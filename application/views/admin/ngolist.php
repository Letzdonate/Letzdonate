<!DOCTYPE html>
<html lang="en">


<body>
   
	 <!-- START CONTENT -->
	
		<div class="container">
          <div class="section">
				 <div id="table-datatables">
              <h4 class="header">NGO List</h4>
              <div class="row">
                <div class="col s12 m12">
                  <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                    <thead>
                        <tr>
							<th>View</th>
                            <th>NGO Name</th> 
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Contact Person</th>
							<th>Contact Person Phone</th>
                        </tr>
                    </thead>
                 
                    <tfoot>
                        <tr>
							<th>View</th>
                            <th>NGO Name</th> 
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Contact Person</th>
							<th>Contact Person Phone</th>
                        </tr>
                    </tfoot>
                 
                    <tbody>
					<?php foreach($get_ngo_list as $ngo_list): ?>
                        <tr>
							<td class="center-align"><a href="<?php echo base_url('index.php/NgoRegCtrl/ngoreg_view/'.$ngo_list->id); ?>"><i class="mdi-action-visibility"></i></a></td>
							<td><?=$ngo_list->ngo_name; ?></td>
							<td><?=$ngo_list->email; ?></td>
							<td><?=$ngo_list->phone; ?></td>
							<td><?=$ngo_list->contact_person; ?></td>
							<td><?=$ngo_list->contact_person_phone; ?></td>
							
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