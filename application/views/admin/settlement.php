<!DOCTYPE html>
<html lang="en">



<body>
  
    
	  <!-- START CONTENT -->
	
			<div class="container">
          <div class="section">
				 <div id="table-datatables">
              <h4 class="header">Settlement Transactions</h4>
              <div class="row">
                <div class="col s12 m12">
                  <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                    <thead>
                        <tr>
						    <th>Project Name</th> 
						    <th>NGO Name</th> 
                            <th>Expected Amount</th>
                            <th>Collected Amount</th>
                            <th>Transaction Reference Number</th>
							<th>Settlement Date</th>
                        </tr>
                    </thead>
                 
                    <tfoot>
                        <tr>
							<th>Project Name</th> 
						    <th>NGO Name</th> 
                            <th>Expected Amount</th>
                            <th>Collected Amount</th>
                            <th>Transaction Reference Number</th>
                            <th>Settlement Date</th>
                        </tr>
                    </tfoot>
                 
                    <tbody>
                        <tr>
							<td>Medical Emergency</td>
							<td>Rotary club Nanganallur</td>
							<td>100000</td>
							<td>50000</td>
							<td>LDSET1</td>
							<td>23/08/2018</td>
                        </tr>
						 <tr>
							<td>Education</td>
							<td>Lions Club Nanganallur</td>
							<td>200000</td>
							<td>120000</td>
							<td>LDSET2</td>
							<td>20/08/2018</td>
                        </tr>
						<tr>
							<td>Hunger</td>
							<td>Smiles India</td>
							<td>600000</td>
							<td>500000</td>
							<td>LDSET3</td>
							<td>10/08/2018</td>
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