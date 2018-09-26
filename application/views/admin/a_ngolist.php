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
                        <tr>
							<td class="center-align"><a href="#"><i class="mdi-action-visibility"></i></a></td>
                           <td>Rotary club of nanganallur</td>
							<td>rcnanganallur@gmail.com</td>
							<td>9874563210</td>
							<td>JOHN</td>
							<td>7896541230</td>
							
                        </tr>
						 <tr>
							<td class="center-align"><a href="#"><i class="mdi-action-visibility"></i></a></td>
                            <td>Lions club of nanganallur</td>
							<td>lcnanganallur@gmail.com</td>
							<td>9874563212</td>
							<td>PETER</td>
							<td>7896541584</td>
                        </tr>
						<tr>
							<td class="center-align"><a href="#"><i class="mdi-action-visibility"></i></a></td>
                            <td>Smile India</td>
							<td>smileindia@gmail.com</td>
							<td>9874012365</td>
							<td>DEXTER</td>
							<td>8056054814</td>
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