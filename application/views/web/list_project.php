<!---------------------------------------------------------------------------------------sec---------------------------------->
	
<div class="container-fluid">
	<div class="col-sm-12 section">
		<div class="col-sm-9 float-left project" style="padding:2%!important">
			<?php foreach ($get_project_images as $proj_active_list): ?>
			
			<a href="<?php echo base_url('single_project/'.$proj_active_list->id); ?>"><h3 id="" class="pro-project-head"><?=$proj_active_list->proj_name;?></h3></a>
					<div class="pro-project">
					<a href="<?php echo base_url('single_project/'.$proj_active_list->id); ?>">	<img class="img-responsive float-left col-sm-5 featuredimage" src="<?=$proj_active_list->fullpath;?>"> </a>
						<p class="pro-project-detail col-sm-7"><?=character_limiter($proj_active_list->story_paragraph1,380);?>   <a href="<?php echo base_url('single_project/'.$proj_active_list->id); ?>"><span class="readmore">Read More</span></a></p>
						<h5 class="pro-raised float-left">Raised so far  <span class="pro-raised-rup"><?=$proj_active_list->collected_amount ;?></span></h5>
						<h5 class="float-right"></h5>
					</div>
				<hr class="pro-hr">
			<?php endforeach;?>	
		</div>
		<div class="col-sm-3 float-left pro-sidebar">
			<div class="col-sm-12 float-left">
				<h5>Categories</h5>
				<hr class="pro-sidebar-catline float-left">
			</div>
			<div class="col-sm-12 float-left">
			<ul class="pro-sidebar-cat pad-0">
				<?php foreach($proj_category as $categ): ?>
					<a href="<?php echo base_url('stories/'.$categ->categ_name); ?>">
						<li><?php echo $categ->categ_name?> (<?=$categ->projectcount?>)</li>
					</a>
				<?php endforeach;?>
				
			</ul>
			</div>
			<div class="col-sm-12 float-left pro-recent">
				<h5>Recent</h5>
				<hr class="pro-sidebar-recline float-left">
			</div>
			<div class="col-sm-12 float-left">
				<?php foreach($get_recent_project as $recent_project): ?>
					<a href="<?php echo base_url('single_project/'.$recent_project->id)?>"><h5><?=$recent_project->proj_name?></h5>
					<p class="sidebar-pro-date"><?=$recent_project->proj_target_date;?></p></a>
					<hr class="pro-hr">
				<?php endforeach;?>
			</div>
		</div>
	</div>
</div>

</body>

</html>