<!DOCTYPE html>
<html lang="en">

<head>
    

<body>
    
	 <!-- START CONTENT -->
	
		<div class="container">
          <div class="section">
				 <div id="table-datatables">
              <h4 class="header">Projects Approval</h4>
              <div class="row">
                <div class="col s12 m12">
                  <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                    <thead>
                        <tr>
							<th>View</th>
                            <th>Project ID</th>
                            <th>Project Name</th>
                            <th>Category</th>
                            <th>NGO Name</th>
                            <th>Start date</th>
							<th>Status</th>
							
							
                        </tr>
                    </thead>
                 
                    <tfoot>
                        <tr>
							<th>View</th>
                            <th>Project ID</th>
                            <th>Project Name</th>
                            <th>Category</th>
                            <th>NGO Name</th>
                            <th>Start date</th>
							<th>Status</th>
                        </tr>
                    </tfoot>
                 
                    <tbody>
                        <tr>
							<td class="center-align"><a href="#"><i class="mdi-action-visibility"></i></a></td>
                            <td>Letz1001</td>
                            <td>Hunger for Education</td>
                            <td>Education</td>
                            <td>Rotaract Club</td>
                            <td>17/08/2018</td>
							<td>Pending</td>
						</tr>
						 <tr>
							<td class="center-align"><a href="#"><i class="mdi-action-visibility"></i></a></td>
                            <td>Letz1002</td>
                            <td>Buliding healty India</td>
                            <td>Hunger</td>
                            <td>Rotaract Club</td>
                            <td>17/08/2018</td>
							<td>Pending</td>
					  </tr>
						<tr>
							<td class="center-align"><a href="#"><i class="mdi-action-visibility"></i></a></td>
                            <td>Letz1003</td>
                            <td>Cancer Free Nation</td>
                            <td>Medical</td>
                            <td>Loins Club</td>
                            <td>17/08/2018</td>
							<td>Pending</td>
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