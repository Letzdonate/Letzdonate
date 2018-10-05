<!---------------------------------------------------------------------------------------banner--------------------------------->
<style>
	.successalert{
		position: relative;
		top: 58px;
		z-index: 5;
	}
	@media screen and (max-device-width: 800px){
		.successalert{
		position: relative;
		top: 58px;
		z-index: 5;
	}
	}
	</style>
<div class="container-fluid">
<?php if ($this->session->flashdata('msg') != null) {?>
<div class="alert alert-success successalert">
  <strong>Thanks For Your Interest Towards Us!</strong> Will get back to you shortly.
</div>
<?php } ?>
	<div class="col-sm-12" style="padding:0%!important;">
	
		<div id=""  style="z-index:1;" class="carousel slide banner" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item carousel-item-banner active">
					<img class="d-block w-100 img-responsive img" src="<?php echo base_url(); ?>application/images/web/homepage/Homepage-03.png" alt="First slide">
				</div>
				<div class="carousel-item carousel-item-banner">
					<img class="d-block w-100 img-responsive img" src="<?php echo base_url(); ?>application/images/web/homepage/Homepage-04.png" alt="Second slide">
				</div>
				<div class="carousel-item carousel-item-banner">
					<img class="d-block w-100 img-responsive img" src="<?php echo base_url(); ?>application/images/web/homepage/Homepage-05.png" alt="Second slide">
				</div>
				<div class="carousel-item carousel-item-banner">
					<img class="d-block w-100 img-responsive img" src="<?php echo base_url(); ?>application/images/web/homepage/Homepage-06.png" alt="Second slide">
				</div>
			</div>
		</div>
		
		<div class="col-sm-12 banner-bg">
		</div>
		
	</div>
</div>

<!---------------------------------------------------------------------------------------sec-1--------------------------------->

<div class="container-fluid emergency">
	<div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<div class="col-sm-11 mx-auto d-block">
					<?php foreach(array_slice($get_recent_projects,0,3) as $recentproj):?>
						<div class="col-sm-3 float-left em-box">
							<div class="col-sm-12 bg-light mx-auto b-block em-content img-drop">
								<img class="img-responsive float-left" src="<?=$recentproj->fullpath;?>">
								<div class="em-pro-deatils">
									<div class="project-title"><?=character_limiter($recentproj->proj_name,10);?></div>
									<div class="category"><?=$recentproj->proj_category;?></div>
									<div class="date"><?=$recentproj->start_date;?></div>
								</div>
							</div>
						</div>
					<?php endforeach;?>
				</div>
			</div>
			<div class="carousel-item">
				<div class="col-sm-11 mx-auto d-block">
					<?php foreach(array_slice($get_recent_projects,4,7) as $recentproj):?>
						<div class="col-sm-3 float-left em-box">
							<div class="col-sm-12 bg-light mx-auto b-block em-content img-drop">
								<img class="img-responsive float-left" src="<?=$recentproj->fullpath;?>">
								<div class="em-pro-deatils">
									<div class="project-title"><?=character_limiter($recentproj->proj_name,10);?></div>
									<div class="category"><?=$recentproj->proj_category;?></div>
									<div class="date"><?=$recentproj->start_date;?></div>
								</div>
							</div>
						</div>
					<?php endforeach;?>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev sec-1-prev" href="#carouselExampleControls1" data-slide="prev">
			<span class="carousel-control-prev-icon" style="color:black" aria-hidden="true"></span>
			<!-- <span class="sr-only">Previous</span> -->
		</a>
		<a class="carousel-control-next sec-1-next" href="#carouselExampleControls1" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<!-- <span class="sr-only">Next</span> -->
		</a>
	</div>
</div>



<!---------------------------------------------------------------------------------------sec-2--------------------------------->

<div class="container-fluid sec-2" style="padding:3% 3% 2% 3%!important">
	<h2>About</h2>
	<div class="col-sm-7 mx-auto d-block">
	<p>We serve as a donation marketplace and act as an intermediate between donors, NGOs and Individual Fundraisers. Requirements are posted on our website which we evaluate thoroughly before connecting the dots.</p>
	</div>
		<div class="col-sm-12" style="padding:2%">
			<div class="col-sm-4 float-left">
				<div class="sprite-icon-sec2 who mx-auto d-block"></div>
				<h4>Who we are</h4>
				<p>We provide the most transparent platform to create a mutually beneficial bond between the NGOs, Fundraisers and donors. Backed by flexible and seamless payment options, we do our bit to contributing for the needy.</p>
			</div>
			<div class="col-sm-4 float-left">
				<div class="sprite-icon-sec2 why mx-auto d-block"></div>
				<h4>Why us</h4>
				<p>Our procedures for contributions are 100% fraudulence free. We ensure that all transactions are processed after a stringent evaluation and that contributions serve its genuine purpose.</p>
			</div>
			<div class="col-sm-4 float-left">
				<div class="sprite-icon-sec2 what mx-auto d-block"></div>
				<h4>What we do</h4>
				<p>We reach out to active donors and help people in need with their requirements. We connect across various channels to contact the right people for the right kind of help.</p>
			</div>
		</div>
</div>

<!---------------------------------------------------------------------------------------sec-3--------------------------------->
<div class="container-fluid sec-3" style="padding:3%!important">
	<h2 class="text-center" style="padding-bottom:2%">Big or Small, Your Cause Matters</h2>
	<div class="col-sm-12" style="padding:0px;">
		<div class="col-sm-6 float-left education sec-3-im">
			<h3 class="sec-3-content">You could help someone become independent with formal EDUCATION</h3>
		</div>
		<div class="col-sm-6 float-left sec-mobile" >
			<div class="col-sm-12 bg-success medical sec-3-im">
				<h3 class="sec-3-content">Your simple gesture of care may support many LIVES</h3>
			</div>

			<div class="col-sm-12" style="clear:both;padding:0px;">
				<div class="col-sm-6 bg-light float-left" style="padding:2.5% 1% 0% 0%;">
					<div class="col-sm-12 bg-success necessity sec-3-im">
						<h3 class="sec-3-content">Let them have their daily NECESSITIES</h3>
					</div>
				</div>
				<div class="col-sm-6 bg-light float-left" style="padding:2.5% 0% 0% 1%">
					<div class="col-sm-12 bg-success hunger sec-3-im">
						<h3 class="sec-3-content">Eradicate<br>HUNGER</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!---------------------------------------------------------------------------------------sec-4--------------------------------->

<div class="container-fluid sec-4" style="padding:2%!important;">
	<h2 class="text-center">Stories of Crowdfunding</h2>
	<div id="carouselExampleControls2" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<div class="col-sm-11 mx-auto d-block" style="padding:0%!important;">
					<?php foreach(array_slice($get_recent_projects, 0, 4) as $recentproj): ?>
						<div class="col-sm-3 float-left pad-2">
							<div class="stories-box">
								<img class="img-responsive previmage" src="<?=$recentproj->fullpath;?>">
								<div class="col-sm-8 sec-4-pro-date"><?=$recentproj->start_date;?></div>
								<p class="sec-4-pro-title"><?=character_limiter($recentproj->proj_name,15);?></p>
							</div>
						</div>
					<?php endforeach;?>
				</div>
			</div>
			<div class="carousel-item">
				<div class="col-sm-11 mx-auto d-block" style="padding:0%!important;">
				<?php foreach(array_slice($get_recent_projects, 4, 7) as $recentproj): ?>
						<div class="col-sm-3 float-left pad-2">
							<div class="stories-box">
								<img class="img-responsive previmage" src="<?=$recentproj->fullpath;?>">
								<div class="col-sm-8 sec-4-pro-date"><?=$recentproj->start_date;?></div>
								<p class="sec-4-pro-title"><?=character_limiter($recentproj->proj_name,15);?></p>
							</div>
						</div>
					<?php endforeach;?>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev sec-1-prev" href="#carouselExampleControls2" data-slide="prev">
			<span class="carousel-control-prev-icon" style="color:black" aria-hidden="true"></span>
		</a>
		<a class="carousel-control-next sec-1-next" href="#carouselExampleControls2" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
		</a>
	</div>
</div>

<!---------------------------------------------------------------------------------------sec-5--------------------------------->
<div class="container-fluid sec-5 pad-2" style="padding:3%!important;">
	<h2 class="text-center text-white">Raised so far</h2>
	<div class="col-sm-12 mx-auto d-block">
		<div class="col-sm-4 float-left sec-5-col">
			<div class="sec-5-singleblock">
				<div class="mx-auto d-block" style="width:170px">
					<div class="sprite-icon-sec5 medi-icon float-left"></div>
					<h3 class=" sec-5-h3 float-left">6 Cr </h3>
				</div>
			</div>
			<hr style="width:100%; height:0.6px; background:#FFF;">
			<div class="sec-5-singleblock">
				<div class="mx-auto d-block" style="width:210px">
					<div class="sprite-icon-sec5 nece-icon float-left"></div>
					<h3 class=" sec-5-h3 float-left">2.7 Cr </h3>
				</div>
			</div>
			<hr class="d-none-web" style="width:100%; height:0.6px; background:#FFF;">
		</div>
		<div class="col-sm-4 float-left sec-5-col">
			<div class="sec-5-singleblock">
				<div class="mx-auto d-block" style="width:210px">
					<div class="sprite-icon-sec5 edu-icon float-left"></div>
					<h3 class=" sec-5-h3 float-left">4.3 Cr </h3>
				</div>
			</div>
			<hr style="width:100%; height:0.6px; background:#FFF;">
			<div class="sec-5-singleblock">
				<div class="mx-auto d-block" style="width:170px">
					<div class="sprite-icon-sec5 hun-icon float-left"></div>
					<h3 class=" sec-5-h3 float-left">4 Cr </h3>
				</div>
			</div>
			<hr class="d-none-web" style="width:100%; height:0.6px; background:#FFF;">
		</div>
		<div class="col-sm-4 float-left">
			<div class="sec-5-lastblock">
				<div class="mx-auto d-block" style="width:200px">
					<h2 class=" text-center">+ 17 Cr<br>Funds Raised </h2>
				</div>
			</div>
		</div>


	</div>
</div>

<!---------------------------------------------------------------------------------------sec-6--------------------------------->

<section class="pad-3 sec-6">
	<div class="container" style="pad-3">
		<div class="col-sm-10 float-left">
			<h3 class="text-dark">SUSTAINABLE FUNDRAISING LIKE NEVER BEFORE</h3>
			<p class="text-dark" style="font-size:22px;">A recurring donations platform for your sustainability</p>
		</div>
		<div class="col-sm-2 float-left pad-2">
			<a href="login.html" target="_blank" ><button class="btn btn-web" style="margin-top:0px!important;">Donate Now</button><a>
		</div>
	</div>

</section>
<script>
	$(document).ready(function(){
        var timeout = 3000; // in miliseconds (3*1000)
        $('.alert').delay(timeout).fadeOut(300);
    });
</script>