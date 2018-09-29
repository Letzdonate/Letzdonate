<!DOCTYPE html>
<html lang="en">


<body>
   
	 <!-- START CONTENT -->
	
		<div class="container">
		<div class="section">
		<div class="row">
            <div class="col s12 m12 l12">
            
                      <div class="input-field col s3">
					  <input name="ngo" type="radio" checked="checked" value="approved" id="approved"/>
                      <label for="approved">Approved</label>
                      </div>
					  <div class="input-field col s3">
					  <input name="ngo" type="radio" id="pending" value="pending" />
                      <label for="pending">Pending</label>
                      </div>
					  <div class="input-field col s3">
					  <input name="ngo" type="radio" id="hold" value="hold"/>
                      <label for="hold">Hold</label>
                      </div>
					   <div class="input-field col s3">
					  <input name="ngo" type="radio" id="inactive" value="inactive"/>
                      <label for="inactive">Inactive</label>
                      </div>
                    </div>
					</div>
					
		 </div>
          <div class="section approved">
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
                    <tbody >
					<?php foreach($get_ngo_active_list as $ngo_active_list): ?>
                        <tr>
							<td class="center-align"><a href="<?php echo base_url('index.php/NgoRegCtrl/ngoreg_view/'.$ngo_active_list->id); ?>"><i class="mdi-action-visibility"></i></a></td>
							<td><?=$ngo_active_list->name; ?></td>
							<td><?=$ngo_active_list->email; ?></td>
							<td><?=$ngo_active_list->phone; ?></td>
							<td><?=$ngo_active_list->contact_person; ?></td>
							<td><?=$ngo_active_list->contact_person_phone; ?></td>
							
                        </tr>
						<?php endforeach; ?>
                    </tbody> 
                  </table>
                </div>
              </div>
            </div> 
			</div>
			<div class="section pending">
				 <div id="table-datatables">
              <h4 class="header">NGO List</h4>
              <div class="row">
                <div class="col s12 m12">
                  <table id="data-table-simple1" class="responsive-table display" cellspacing="0">
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
					 <tbody >
					<?php foreach($get_ngo_pending_list as $ngo_pending_list): ?>
                        <tr>
							<td class="center-align"><a href="<?php echo base_url('index.php/NgoRegCtrl/ngoreg_view/'.$ngo_pending_list->id); ?>"><i class="mdi-action-visibility"></i></a></td>
							<td><?=$ngo_pending_list->name; ?></td>
							<td><?=$ngo_pending_list->email; ?></td>
							<td><?=$ngo_pending_list->phone; ?></td>
							<td><?=$ngo_pending_list->contact_person; ?></td>
							<td><?=$ngo_pending_list->contact_person_phone; ?></td>
							
                        </tr>
						<?php endforeach; ?>
                    </tbody>

                  </table>
                </div>
              </div>
            </div> 
			</div>
			<div class="section hold">
				 <div id="table-datatables">
              <h4 class="header">NGO List</h4>
              <div class="row">
                <div class="col s12 m12">
                  <table id="data-table-simple2" class="responsive-table display" cellspacing="0">
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
                   
					 <tbody >
					<?php foreach($get_ngo_hold_list as $ngo_hold_list): ?>
                        <tr>
							<td class="center-align"><a href="<?php echo base_url('index.php/NgoRegCtrl/ngoreg_view/'.$ngo_hold_list->id); ?>"><i class="mdi-action-visibility"></i></a></td>
							<td><?=$ngo_hold_list->name; ?></td>
							<td><?=$ngo_hold_list->email; ?></td>
							<td><?=$ngo_hold_list->phone; ?></td>
							<td><?=$ngo_hold_list->contact_person; ?></td>
							<td><?=$ngo_hold_list->contact_person_phone; ?></td>
							
                        </tr>
						<?php endforeach; ?>
                    </tbody>
					
                  </table>
                </div>
              </div>
            </div> 
			</div>
			<div class="section inactive">
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
                    
					 <tbody>
					<?php foreach($get_ngo_inactive_list as $ngo_inactive_list): ?>
                        <tr>
							<td class="center-align"><a href="<?php echo base_url('index.php/NgoRegCtrl/ngoreg_view/'.$ngo_inactive_list->id); ?>"><i class="mdi-action-visibility"></i></a></td>
							<td><?=$ngo_inactive_list->name; ?></td>
							<td><?=$ngo_inactive_list->email; ?></td>
							<td><?=$ngo_inactive_list->phone; ?></td>
							<td><?=$ngo_inactive_list->contact_person; ?></td>
							<td><?=$ngo_inactive_list->contact_person_phone; ?></td>
							
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
		<script>
		$( document ).ready(function() {
			if ($("input[name='ngo']:checked").val() == 'approved') {
			$('.approved').show();
			$('.pending').hide();
			$('.hold').hide();
			$('.inactive').hide();
			 }
		$('input:radio[name="ngo"]').change(
		function(){
			
        if ($(this).val() == 'approved') {
			$('.approved').show();
			$('.pending').hide();
			$('.hold').hide();
			$('.inactive').hide();
            
        }
        else if($(this).val() == 'pending') {
			$('.approved').hide();
			$('.pending').show();
			$('.hold').hide();
			$('.inactive').hide();
            
        }
		 else if($(this).val() == 'hold') {
           $('.approved').hide();
			$('.pending').hide();
			$('.hold').show();
			$('.inactive').hide();
        }
		else
		{
			$('.approved').hide();
			$('.pending').hide();
			$('.hold').hide();
			$('.inactive').show();
		}
    });
		});
		</script>