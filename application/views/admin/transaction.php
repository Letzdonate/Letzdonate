<!DOCTYPE html>
<html lang="en">



<body>
   
	 <!-- START CONTENT -->
	
		<div class="container">
          <div class="section">
				 <div id="table-datatables">
              <h4 class="header">Transactions</h4>
              <div class="row">
                <div class="col s12 m12">
                  <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                    <thead>
                        <tr>
						    <th>Trans ID</th> 
						    <th>Donor Name</th> 
						    <th>Project Name</th> 
						    <th>NGO Name</th> 
                            <th>Donation Type</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                 
                    <tfoot>
                        <tr>
							<th>Trans ID</th> 
						    <th>Donor Name</th> 
						    <th>Project Name</th> 
						    <th>NGO Name</th> 
                            <th>Donation Type</th>
                            <th>Amount</th>
                        </tr>
                    </tfoot>
                 
                    <tbody>
                        <tr>
							<td>LD123</td>
							<td>Suryanand</td>
							<td>Hunger for Education</td>
							<td>Rotary club Nanganallur</td>
							<td>One Time</td>
							<td>500</td>
                        </tr>
						 <tr>
							<td>LD128</td>
							<td>Kumaran</td>
							<td>Buliding healty India</td>
							<td>Lions club Nanganallur</td>
							<td>One Time</td>
							<td>5000</td>
                        </tr>
						<tr>
							<td>LD129</td>
							<td>Gnanavel</td>
							<td>Cancer Free Nation</td>
							<td>Smile India	</td>
							<td>Recurring</td>
							<td>500</td>
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