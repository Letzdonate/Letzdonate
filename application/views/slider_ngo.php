<body>
    <!-- Start Page Loading -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START HEADER -->
    <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="navbar-color">
                <div class="nav-wrapper">
                    <ul class="left">
                      <li><h1 class="logo-wrapper"><a href="#" class="brand-logo darken-1">LetzDonate</a></h1></li>
                    </ul>
                    <div class="header-search-wrapper hide-on-med-and-down">
                        <!-- <i class="mdi-action-search"></i> -->
                        <!-- <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize"/> -->
                    </div>
                    <ul class="right hide-on-med-and-down">
                       <!--  <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light translation-button"  data-activates="translation-dropdown"><img src="images/flag-icons/United-States.png" alt="USA" /></a>
                        </li>
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                        </li>-->
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light notification-button" data-activates="notifications-dropdown"><i class="mdi-navigation-expand-more"></i>

                        </a>
                        </li>
                      <!--  <li><a href="#" data-activates="chat-out" class="waves-effect waves-block waves-light chat-collapse"><i class="mdi-communication-chat"></i></a>
                        </li> -->

                    </ul>
                    <!-- translation-button
                    <ul id="translation-dropdown" class="dropdown-content">
                      <li>
                        <a href="#"><img src="<?php echo base_url(); ?>application/images/flag-icons/United-States.png" alt="English" />  <span class="language-select">English</span></a>
                      </li>
                      <li>
                        <a href="#!"><img src="<?php echo base_url(); ?>application/images/flag-icons/France.png" alt="French" />  <span class="language-select">French</span></a>
                      </li>
                      <li>
                        <a href="#!"><img src="<?php echo base_url(); ?>application/images/flag-icons/China.png" alt="Chinese" />  <span class="language-select">Chinese</span></a>
                      </li>
                      <li>
                        <a href="#!"><img src="<?php echo base_url(); ?>application/images/flag-icons/Germany.png" alt="German" />  <span class="language-select">German</span></a>
                      </li>

                    </ul>
                    <!-- notifications-dropdown -->
                    <ul id="notifications-dropdown" class="dropdown-content">

                         <li><a href="<?php echo base_url('logout'); ?>"><i class="mdi-hardware-keyboard-tab"></i> Logout</a></li>

                      <li class="divider"></li>
                      <!-- <li>
                        <a href="#!"><i class="mdi-action-add-shopping-cart"></i> A new order has been placed!</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
                      </li>
                      <li>
                        <a href="#!"><i class="mdi-action-stars"></i> Completed the task</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
                      </li>
                      <li>
                        <a href="#!"><i class="mdi-action-settings"></i> Settings updated</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">4 days ago</time>
                      </li>
                      <li>
                        <a href="#!"><i class="mdi-editor-insert-invitation"></i> Director meeting started</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">6 days ago</time>
                      </li>
                      <li>
                        <a href="#!"><i class="mdi-action-trending-up"></i> Generate monthly report</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">1 week ago</time>
                      </li> -->
                    </ul>
                </div>
            </nav>
        </div>
        <!-- end header nav-->
    </header>
    <!-- END HEADER -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START MAIN -->
    <div id="main">
        <!-- START WRAPPER -->
        <div class="wrapper">

            <!-- START LEFT SIDEBAR NAV-->
            <aside id="left-sidebar-nav">
            <ul id="slide-out" class="side-nav fixed leftside-navigation">
                <li class="user-details cyan darken-2">
					<div class="row">
						<div class="col col s4 m4 l4">
							<img src="<?php echo base_url();?>application/images/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
						</div>
						<div class="col col s8 m8 l8">
							<ul id="profile-dropdown" style="width:150px !important;" class="dropdown-content">
                                <li><a href="<?php echo base_url('index.php/NgoRegCtrl/ngoreg_view/'.$this->session->userdata('user_id')) ?>"><i class="mdi-action-face-unlock"></i>My Profile</a>
                                </li>
                                <li><a href="<?php echo base_url('change'); ?>"><i class="mdi-action-lock-outline"></i> Change Password</a>
								</li>
                                <li><a href="<?php echo base_url('logout'); ?>"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
								</li>

							</ul>
							<a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">John Doe<i class="mdi-navigation-arrow-drop-down right"></i></a>
							<p class="user-roal"></p>
						</div>
					</div>
				</li>
                
				 <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-av-queue"></i> Project Management</a>
                            <div class="collapsible-body">
                                <ul>
                                   <li><a href="<?php echo base_url('projectentry');?>">Project Entry</a>
                                    </li>
                                    <li><a href="<?php echo base_url('projectlist');?>">Project List</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
				<li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-swap-vert-circle"></i> Reports</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="#">Transaction History</a>
                                    </li>
									<li><a href="#">Recurring Report</a>
                                    </li>
									<li><a href="#">Settlement Report</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
                <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
            </aside>

