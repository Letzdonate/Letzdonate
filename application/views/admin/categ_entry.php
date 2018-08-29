    <!-- START CONTENT -->
    <section id="content">
        <div class="container">
            <div class="section">
                <div id="input-fields">
                        <h4 class="header">Category Entry</h4>
                        <div class="row">
                        <form class="col s12" action="projectlist.html">
                            <div class="row">
                                <div class="input-field col s6">
                                    <input id="last_name" type="text" class="validate">
                                    <label for="last_name">Category name</label>
                                </div>
                                    <div class="input-field col s6">
                                    <input id="input_text" type="text" maxlength="133" length="133">
                                    <label for="input_text">Description*</label>
                                    </div>
                            </div>
                        
                            <br><br>
                            <div class="row">
                                <div class="col s12 right-align">
                                    <button class="btn waves-effect waves-light " type="submit" name="action">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END CONTENT -->
			
			
	<!-- //////////////////////////////////////////////////////////////////////////// -->
	<!-- START RIGHT SIDEBAR NAV-->
		<aside id="right-sidebar-nav">
	    </aside>
	<!-- END RIGHT SIDEBAR NAV-->
	<!-- //////////////////////////////////////////////////////////////////////////// -->
        </div>
        <!-- END WRAPPER -->
    </div>
    <!-- END MAIN -->
 
</body>
<script>
	function tgd(){
		var status = $('#scope').prop('checked');
		if(status == true){
			$('#tdate').hide();
		}else{
			$('#tdate').show();
		}
	}
</script>
</html>