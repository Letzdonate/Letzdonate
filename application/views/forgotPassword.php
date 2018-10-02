
<link href="<?php echo base_url(); ?>application/css/layouts/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">

<body class="cyan">
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->

  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">


	   <?php echo form_open('LoginCtrl/password_reset'); ?>
        <div class="row">
          <div class="input-field col s12 center">
            <img src="<?php echo base_url(); ?>application/images/logo.png" alt="Letzdonate" style="width:100%;background: #00bcd4;" class="responsive-img valign profile-image-login">
            <p class="center login-form-text">Letzdonate Forgot Password</p>
          </div>
        </div>
        <div class="row margin">
        <?php if ($this->session->flashdata('msg') != null) {?>
                    <?php if ($this->session->flashdata('msg') != 0) {?>
                        <div id="card-alert" class="card green alert">
                        <div class="card-content white-text">
                            <p><i class="mdi-navigation-check"></i> Password Sent To Mail Id</p>
                        </div>
                        <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        </div>
                    <?php } else {?>
                        <div id="card-alert" class="card red alert">
                        <div class="card-content white-text">
                            <p><i class="mdi-alert-error"></i> No Such Email Id </p>
                        </div>
                        <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        </div>
                    <?php }?>
                <?php }?>
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="username" autocomplete='off' name="Username" type="text">
            <label for="username" class="center-align">Email</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <button class="btn waves-effect waves-light col s12" type="submit">Reset Password</button>
          </div>
        </div>
         <div class="row">
          <div class="input-field col s6 m6 l6">
            <p class="margin medium-small"><a href="<?php echo base_url('admin'); ?>">Login</a></p>
          </div>
        <!--  <div class="input-field col s6 m6 l6">
              <p class="margin right-align medium-small"><a href="page-forgot-password.html">Forgot password ?</a></p>
          </div>   -->
        </div>
<?php echo form_close(); ?>


    </div>
  </div>

</body>
<script>
	$(document).ready(function(){
        var timeout = 3000; // in miliseconds (3*1000)
        $('.alert').delay(timeout).fadeOut(300);
    });
</script>
</html>