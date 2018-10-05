<!-- START CONTENT -->
	
		<div class="container">
          <div class="section">
				 <div id="table-datatables">
              <h4 class="header">Projects List</h4>
              <div class="row">
                <div class="col s12 m12">
                  <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Project Name</th>
                            <th>Category</th>
                            <th>NGO Name</th>
                            <th>Start date</th>
							<th>Project Scope</th>
							<th>Target Date</th>
							 <th>Target Amount</th>
							 <th>Collected Amount</th>
                        </tr>
                    </thead>
                 
                    <!-- Approved List -->
                    <tbody class="approved">
                        <?php foreach ($get_proj_active_list as $proj_active_list): ?>
                            <tr>
                                <td class="center-align"><a href="<?php echo base_url('index.php/ProjectCtrl/project_view/' . $proj_active_list->id); ?>"><i class="mdi-action-visibility"></i></a></td>
                                <td><?=$proj_active_list->proj_name;?></td>
                                <td><?=$proj_active_list->proj_category;?></td>
                                <td><?=$proj_active_list->ngo;?></td>
                                <td><?=$proj_active_list->start_date;?></td>
                                <td><?=$proj_active_list->proj_scope;?></td>
                                <td><?=$proj_active_list->proj_target_date;?></td>
                                <td><?=$proj_active_list->proj_amount;?></td>
                                <td><?=$proj_active_list->collected_amount;?></td>
                            </tr>
                        <?php endforeach;?>
                    </tbody>

                    <!-- Approved List -->
                    <!-- Pending List -->

                    <tbody class="pending">
                        <?php foreach ($get_proj_pending_list as $proj_pending_list): ?>
                        <tr>
                                <td class="center-align"><a href="<?php echo base_url('index.php/ProjectCtrl/project_view/' . $proj_pending_list->id); ?>"><i class="mdi-action-visibility"></i></a></td>
                                <td><?=$proj_pending_list->proj_name;?></td>
                                <td><?=$proj_pending_list->proj_category;?></td>
                                <td><?=$proj_pending_list->ngo;?></td>
                                <td><?=$proj_pending_list->start_date;?></td>
                                <td><?=$proj_pending_list->proj_scope;?></td>
                                <td><?=$proj_pending_list->proj_target_date;?></td>
                                <td><?=$proj_pending_list->proj_amount;?></td>
                                <td><?=$proj_pending_list->collected_amount;?></td>
                            </tr>
                        <?php endforeach;?>
                    </tbody>

                    <!-- Pending List -->
                    <!-- Completed List -->

                    <tbody class="hold">
                        <?php foreach ($get_proj_completed_list as $proj_hold_list): ?>
                            <tr>
                                <td class="center-align"><a href="<?php echo base_url('index.php/ProjectCtrl/project_view/' . $proj_hold_list->id); ?>"><i class="mdi-action-visibility"></i></a></td>
                                <td><?=$proj_hold_list->proj_name;?></td>
                                <td><?=$proj_hold_list->proj_category;?></td>
                                <td><?=$proj_hold_list->ngo;?></td>
                                <td><?=$proj_hold_list->start_date;?></td>
                                <td><?=$proj_hold_list->proj_scope;?></td>
                                <td><?=$proj_hold_list->proj_target_date;?></td>
                                <td><?=$proj_hold_list->proj_amount;?></td>
                                <td><?=$proj_hold_list->collected_amount;?></td>
                            </tr>
                        <?php endforeach;?>
                    </tbody>

                    <!-- Completed List -->
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