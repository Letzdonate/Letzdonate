    <!-- START CONTENT -->
    <section id="content">
        <div class="container">
            <div class="section">
                <div id="input-fields">
                <?php if ($this->session->flashdata('msg') != null) {?>
                    <?php if ($this->session->flashdata('msg') != 0) {?>
                        <div id="card-alert" class="card green alert">
                        <div class="card-content white-text">
                            <p><i class="mdi-navigation-check"></i> Category Saved</p>
                        </div>
                        <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        </div>
                    <?php } else {?>
                        <div id="card-alert" class="card red alert">
                        <div class="card-content white-text">
                            <p><i class="mdi-alert-error"></i> Category Not Saved : Something Went Wrong</p>
                        </div>
                        <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        </div>
                    <?php }?>
                <?php }?>
                        <h4 class="header">Category Entry</h4>
                        <div class="row">
                        <?php echo form_open('CategoryCtrl/categ_insert_update/' . $id); ?>

                            <div class="row">
                                <div class="input-field col s6">
                                    <input id="categ_name" value = "<?php echo $categ_insert_update['categ_name']; ?>" name="categ_name" type="text" class="validate">
                                    <label for="last_name">Category Name*</label>
                                    <span style="color: red; clear: both;text-shadow: lime;"><?php echo form_error('categ_name'); ?></span>
                                </div>
                                    <div class="input-field col s6">
                                    <input id="categ_desc" value = "<?php echo $categ_insert_update['categ_desc']; ?>" name="categ_desc" type="text" maxlength="133" length="133">
                                    <label for="input_text">Description</label>
                                    <span style="color: red; clear: both;text-shadow: lime;"><?php echo form_error('categ_desc'); ?></span>
                                    </div>
                            </div>

                            <br><br>
                            <div class="row">
                                <div class="col s12 right-align">
                                    <button class="btn waves-effect waves-light " type="submit" name="action">Submit</button>
                                </div>
                            </div>
                        <?php echo form_close(); ?>
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