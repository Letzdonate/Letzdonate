    <!-- START CONTENT -->
    <section id="content">
        <div class="container">
            <div class="section">
                <div id="input-fields">
                <?php if ($this->session->flashdata('msg') != null) {?>
                    <?php if ($this->session->flashdata('msg') != 0) {?>
                        <div id="card-alert" class="card green alert">
                        <div class="card-content white-text">
                            <p><i class="mdi-navigation-check"></i> Password Changed Successfully</p>
                        </div>
                        <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        </div>
                    <?php } else {?>
                        <div id="card-alert" class="card red alert">
                        <div class="card-content white-text">
                            <p><i class="mdi-alert-error"></i> Password Not Saved : Something Went Wrong</p>
                        </div>
                        <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        </div>
                    <?php }?>
                <?php }?>
                        <h4 class="header">Change Password</h4>
                        <div class="row">
                        <?php echo form_open('LoginCtrl/change_password/'); ?>

                            <div class="row">
                                <div class="input-field col s6">
                                    <input id="oldpassword" name="oldpassword" type="text" class="validate">
                                    <label for="last_name">Old Password*</label>
                                    <span style="color: red; clear: both;text-shadow: lime;"><?php echo form_error('oldpassword'); ?></span>
                                </div>
                            </div>
                            <div class="row">
                                    <div class="input-field col s6">
                                    <input id="newpassword" name="newpassword" type="text" minlength="6">
                                    <label for="input_text">New Password*</label>
                                    <span style="color: red; clear: both;text-shadow: lime;"><?php echo form_error('newpassword'); ?></span>
                                    </div>
                            </div>
                            <div class="row">
                                    <div class="input-field col s6">
                                    <input id="confirmpass" name="confirmpass" type="text" minlength="6">
                                    <label for="input_text">Confirm Password*</label>
                                    <span style="color: red; clear: both;text-shadow: lime;"><?php echo form_error('confirmpass'); ?></span>
                                    </div>
                            </div>
    <br><br>
                            <div class="row">
                                <div class="col s6 right-align">
                                    <button class="btn waves-effect waves-light " type="submit" name="action">Submit</button>
                                </div>
                            </div>
                         <?php echo form_close(); ?>
                        </div>
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
	$(document).ready(function(){
        var timeout = 3000; // in miliseconds (3*1000)
        $('.alert').delay(timeout).fadeOut(300);
    });
</script>
</html>