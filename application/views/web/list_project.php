<!---------------------------------------------------------------------------------------sec---------------------------------->
	
<div class="container-fluid">
	<div class="col-sm-12 section">
		<div class="col-sm-9 float-left project" style="padding:2%!important">
			<?php foreach ($get_proj_active_list as $proj_active_list): ?>
				<h3 id="" class="pro-project-head"><?=$proj_active_list->proj_name;?></h3>
					<div class="pro-project">
						<img class="img-responsive float-left col-sm-5" src="<?php echo base_url();?>application/images/web/project/Project-02.jpg">
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
				<a href="#"><li>Education (322)</li></a>
				<li>Medical (256)</li>
				<li>Necessity (183)</li>
				<li>Hunger (412)</li>
			</ul>
			</div>
			<div class="col-sm-12 float-left pro-recent">
				<h5>Recent</h5>
				<hr class="pro-sidebar-recline float-left">
			</div>
			<div class="col-sm-12 float-left">
				<h5>The girl with Cancer wishes to go home..</h5>
				<p class="sidebar-pro-date">32 days to go</p>
			</div>
		</div>
	</div>
</div>

</body>

</html>