<!---------------------------------------------------------------------------------------sec---------------------------------->
<div class="container-fluid">
	<div class="col-sm-12 section">
		<div class="col-sm-9 float-left single" style="padding:3%!important">
			<h2 id="" class="single-pro-head"><?php echo $get_single_project['proj_name']; ?></h2>
			<p class="single-italic-line">"<?php echo $get_single_project['proj_desc']; ?>"</p>
			<div class="col-sm-11 single-raised-box mx-auto d-block">
				<div class="col-sm-6 float-left text-center single-raised-border"><h3>Raised so far&nbsp&nbsp<span class="single-raised-rup"><?php echo $get_single_project['collected_amount']; ?></span></h3></div>
				<div class="col-sm-6 text-center"><h3><span class="single-target">Target <?php echo $get_single_project['proj_amount']; ?></h3></div>
			</div>
			<img class="img-responsive mx-auto d-block" src="<?php echo base_url();?>application/images/web/singleproject/single_project-02.jpg">
			<h3><?php echo $get_single_project['proj_name']; ?></h3>
			<p class="text-justify"><?php echo $get_single_project['story_paragraph1']; ?></p>
			<img class="img-responsive mx-auto d-block" src="<?php echo base_url();?>application/images/web/singleproject/single_project-03.jpg">
			<h3><?php echo $get_single_project['proj_name']; ?></h3>
			<p class="single-italic-line">"<?php echo $get_single_project['proj_desc']; ?>"</p>
			<p class="text-justify"><?php echo $get_single_project['story_paragraph2']; ?></p>
			<a href="#"><h3>Click Here to Save 11-Year-Old</h3></a>
		</div>
		<div class="col-sm-3 float-left single-sidebar">
			<div class="col-sm-12 float-left" style="padding:1%;">
				<img class="img-responsive" src="<?php echo base_url();?>application/images/web/singleproject/single_project-04.jpg">
				<div class="single-sidebar-box">
					<div class="col-sm-8 sec-4-pro-date"><?php echo $get_single_project['start_date']; ?></div>
					<p class="sec-4-pro-title"><?php echo $get_single_project['proj_name']; ?></p>
				</div>
				<button class="btn col-sm-12 single-btn mx-auto d-block" style="margin-top:5%!important;">Save This Cause Donate Now</button><br><br>
				<h5>Recent stories</h5>
				<hr class="pro-sidebar-catline float-left">
				<img class="img-responsive" src="<?php echo base_url();?>application/images/web/singleproject/single_project-05.jpg">
				<div class="single-sidebar-box">
					<div class="col-sm-8 sec-4-pro-date">Nov 02, 2017</div>
					<p class="sec-4-pro-title">19-year-old Medical Student Will Succumb To Cancer Without Treatment</p>
				</div>				
			</div>
		</div>
	</div>
</div>
