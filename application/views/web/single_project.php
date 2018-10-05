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
				<img class="img-responsive mx-auto d-block defaultimage" src="<?php print_r($get_single_project_images[0]->fullpath);?>" alt="">
			<h3><?php echo $get_single_project['proj_name']; ?></h3>
			<p class="text-justify"><?php echo $get_single_project['story_paragraph1']; ?></p>
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
							<div class="carousel-item active">
									<img class="img-responsive mx-auto d-block defaultimage" src="<?php print_r($get_single_project_images[0]->fullpath);?>" alt="">
								</div>
							<?php foreach (array_slice($get_single_project_images,1) as $proj_images): ?>
								<div class="carousel-item">
									<img class="img-responsive mx-auto d-block defaultimage" src="<?=$proj_images->fullpath?>" alt="">
								</div>
							<?php endforeach;?>	
							</div>
							<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
			<h3><?php echo $get_single_project['proj_name']; ?></h3>
			<p class="single-italic-line">"<?php echo $get_single_project['proj_desc']; ?>"</p>
			<p class="text-justify"><?php echo $get_single_project['story_paragraph2']; ?></p>
			<?php if($get_single_project['story_paragraph3'] != ""){?>
				<p class="text-justify"><?php echo $get_single_project['story_paragraph3']; ?></p>
			<?php } ?>
			<a href="#"><h3>Click Here to Save 11-Year-Old</h3></a>
		</div>
		<div class="col-sm-3 float-left single-sidebar">
			<div class="col-sm-12 float-left" style="padding:1%;">
			<img class="d-block w-100 previmage" src="<?php print_r($get_single_project_images[0]->fullpath);?>" alt="">
				<div class="single-sidebar-box">
					<div class="col-sm-8 sec-4-pro-date"><?php echo $get_single_project['start_date']; ?></div>
					<p class="sec-4-pro-title"><?php echo $get_single_project['proj_name']; ?></p>
				</div>
				<button class="btn col-sm-12 single-btn mx-auto d-block" style="margin-top:5%!important;">Save This Cause Donate Now</button><br><br>
				<h5>Recent stories</h5>
				<hr class="pro-sidebar-catline float-left">
				<a href="<?php echo base_url('single_project/'.$get_recent_project['id']); ?>"><img class="img-responsive previmage" src="<?php print_r($get_recent_project['fullpath']);?>">
				<div class="single-sidebar-box">
					<div class="col-sm-8 sec-4-pro-date"><?php print_r($get_recent_project['start_date']);?></div>
					<p class="sec-4-pro-title"><?php print_r($get_recent_project['proj_name']); ?></p>
				</div></a>			
			</div>
		</div>
	</div>
</div>
