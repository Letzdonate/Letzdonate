<!DOCTYPE html>
<html>
<head>
	<title>Letzdonate</title>
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link rel="shortcut icon" href="<?php echo base_url();?>application/images/web/logo-01.png">
	<link a href="<?php echo base_url();?>application/css/web/style.css" type="text/css" rel="stylesheet">
	<link a href="<?php echo base_url();?>application/css/web/css/bootstrap.css" type="text/css" rel="stylesheet">
	<link a href="<?php echo base_url();?>application/css/web/css/bootstrap.min.css" type="text/css" rel="stylesheet">
	<!-- <link a href="<?php echo base_url();?>application/css/web/mdb.css" type="text/css" rel="stylesheet"> -->
	<!-- <link a href="<?php echo base_url();?>application/css/web/mdb.min.css" type="text/css" rel="stylesheet"> -->
	<link a href="<?php echo base_url();?>application/css/web/bootstrap-grid.css" type="text/css" rel="stylesheet">
	<link a href="<?php echo base_url();?>application/css/web/bootstrap-grid.min.css" type="text/css" rel="stylesheet">
	<link a href="<?php echo base_url();?>application/css/web/bootstrap-reboot.css" type="text/css" rel="stylesheet">
	<link a href="<?php echo base_url();?>application/css/web/bootstrap-reboot.min.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="<?php echo base_url();?>application/js/web/jquery-3.2.1.slim.min.js"></script>
	<script src="<?php echo base_url();?>application/js/web/jquery.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>application/js/web/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>application/js/web/w3.js"></script>
	<script src="<?php echo base_url();?>application/js/web/common.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">	
</head>
<body>
<div class="container-fluid">

<nav class="navbar navbar-expand-lg fixed-top">
   <a href="<?php echo base_url();?>"><img class="navbar-brand" src="<?php echo base_url();?>application/images/web/logo-01.png" alt="logo" ></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav mx-auto">
	  
<!-------------------------------------------------------------------------------------dropdown------------------------------>	  
	 <li class="nav-item dropdown"> 
       <a class="nav-link text-dark" href="<?php echo base_url();?>"> 
          Home 
       </a>
       </li>
	   <li class="nav-item dropdown"> 
       <a class="nav-link text-dark" href="<?php echo base_url('stories');?>" > 
          Stories 
       </a>
       </li>
	  <li class="nav-item dropdown">
         <a class="nav-link text-dark"  href="<?php echo base_url('aboutus');?>"> 
          About 
        </a> 
       </li> 
 <!-------------------------------------------------------------------------------------dropdown------------------------------>	

      <li class="nav-item">
        <a class="nav-link text-dark"  href="<?php echo base_url('contact');?>">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="<?php echo base_url('login');?>" >
			<button class="btn">Donate Now</button>
        </a>
     </li>
	  <li class="nav-item">
        <a class="nav-link text-dark" href="<?php echo base_url('ngo_web_register');?>" >
          <button class="btn">New Fundraiser</button>
        </a>
     </li>
    </ul>
  </div>
</nav>
<div><!------------------------------------------------------------------------------container-fluid---->
</body>

</html>