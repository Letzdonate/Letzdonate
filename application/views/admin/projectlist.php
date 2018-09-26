<!DOCTYPE html>
<html lang="en">



<body>
  
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
                            <th>Project ID</th>
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
                 
                    <tfoot>
                        <tr>
                            <th>Project ID</th>
                            <th>Project Name</th>
                            <th>Category</th>
                            <th>NGO Name</th>
                            <th>Start date</th>
							<th>Project Scope</th>
							<th>Target Date</th>
                            <th>Target Amount</th>
                            <th>Collected Amount</th>
                        </tr>
                    </tfoot>
                 
                    <tbody>
                        <tr>
                            <td><a href="#">Letz1001</a></td>
                            <td>Hunger for Education</td>
                            <td>Education</td>
                            <td>Rotaract Club</td>
                            <td>17/08/2018</td>
							<td>Recurring</td>
							<td>-</td>
                            <td>1,00,00,000</td>
                            <td>50,0000</td>
                        </tr>
						 <tr>
                            <td><a href="#">Letz1002</a></td>
                            <td>Buliding healty India</td>
                            <td>Hunger</td>
                            <td>Rotaract Club</td>
                            <td>17/08/2018</td>
							<td>Target</td>
							<td>01/12/2018</td>
                            <td>10,00,000</td>
							<td>75,0000</td>
                        </tr>
						<tr>
                            <td><a href="#">Letz1003</a></td>
                            <td>Cancer Free Nation</td>
                            <td>Medical</td>
                            <td>Loins Club</td>
                            <td>17/08/2018</td>
							<td>Recurring</td>
							<td>-</td>
                            <td>5,10,00,000</td>
							<td>5,00,000</td>
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