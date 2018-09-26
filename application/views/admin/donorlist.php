<!DOCTYPE html>
<html lang="en">

<head>
   

<body>
   
	 <!-- START CONTENT -->
	
		<div class="container">
          <div class="section">
				 <div id="table-datatables">
              <h4 class="header">Donor List</h4>
              <div class="row">
                <div class="col s12 m12">
                  <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                    <thead>
                        <tr>
						    <th>Donor Name</th> 
                            <th>Email</th>
                            <th>Phone</th>
							<th>Donated(No. of Projects)</th>
                        </tr>
                    </thead>
                 
                    <tfoot>
                        <tr>
							<th>Donor Name</th> 
                            <th>Email</th>
                            <th>Phone</th>
							<th>Donated(No. of Projects)</th>
                        </tr>
                    </tfoot>
                 
                    <tbody>
                        <tr>
							<td>JOHN</td>
							<td>rcnanganallur@gmail.com</td>
							<td>9874563210</td>
							<td>2</td>
                        </tr>
						 <tr>
							<td>PETER</td>
							<td>lcnanganallur@gmail.com</td>
							<td>9874563212</td>	
							<td>1</td>	
                        </tr>
						<tr>
							<td>DEXTER</td>
							<td>smileindia@gmail.com</td>
							<td>9874012365</td>
							<td>6</td>
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