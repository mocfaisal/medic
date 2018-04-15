<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<meta charset="utf-8" />
	<title>Pages - Admin Dashboard UI Kit - Form Elements</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
	<link rel="apple-touch-icon" href="<?php echo base_url('assets');?>/pages/ico/60.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets');?>/pages/ico/76.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url('assets');?>/pages/ico/120.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url('assets');?>/pages/ico/152.png">
	<link rel="icon" type="image/x-icon" href="favicon.ico" />
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-touch-fullscreen" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="default">
	<meta content="" name="description" />
	<meta content="" name="author" />
	<link href="<?php echo base_url('assets');?>/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('assets');?>/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('assets');?>/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('assets');?>/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="<?php echo base_url('assets');?>/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="<?php echo base_url('assets');?>/plugins/switchery/css/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="<?php echo base_url('assets');?>/plugins/bootstrap3-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('assets');?>/plugins/bootstrap-tag/bootstrap-tagsinput.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('assets');?>/plugins/dropzone/css/dropzone.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('assets');?>/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css" media="screen">
	<link href="<?php echo base_url('assets');?>/plugins/summernote/css/summernote.css" rel="stylesheet" type="text/css" media="screen">
	<link href="<?php echo base_url('assets');?>/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" media="screen">
	<link href="<?php echo base_url('assets');?>/plugins/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" media="screen">
	<link href="<?php echo base_url('assets');?>/pages/css/pages-icons.css" rel="stylesheet" type="text/css">
	<link class="main-stylesheet" href="<?php echo base_url('assets');?>/pages/css/pages.css" rel="stylesheet" type="text/css" />
</head>
<body class="fixed-header ">
	<!-- BEGIN SIDEBPANEL-->
	<nav class="page-sidebar" data-pages="sidebar">
		<!-- BEGIN SIDEBAR MENU TOP TRAY CONTENT-->
		<div class="sidebar-overlay-slide from-top" id="appMenu">
			<div class="row">
				<div class="col-xs-6 no-padding">
					<a href="#" class="p-l-40"><img src="<?php echo base_url('assets');?>/img/demo/social_app.svg" alt="socail">
					</a>
				</div>
				<div class="col-xs-6 no-padding">
					<a href="#" class="p-l-10"><img src="<?php echo base_url('assets');?>/img/demo/email_app.svg" alt="socail">
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6 m-t-20 no-padding">
					<a href="#" class="p-l-40"><img src="<?php echo base_url('assets');?>/img/demo/calendar_app.svg" alt="socail">
					</a>
				</div>
				<div class="col-xs-6 m-t-20 no-padding">
					<a href="#" class="p-l-10"><img src="<?php echo base_url('assets');?>/img/demo/add_more.svg" alt="socail">
					</a>
				</div>
			</div>
		</div>
		<!-- END SIDEBAR MENU TOP TRAY CONTENT-->
		<!-- BEGIN SIDEBAR MENU HEADER-->
		<div class="sidebar-header">
			<img src="<?php echo base_url('assets');?>/img/logo_white.png" alt="logo" class="brand" data-src="<?php echo base_url('assets');?>/img/logo_white.png" data-src-retina="<?php echo base_url('assets');?>/img/logo_white_2x.png" width="78" height="22">
			<div class="sidebar-header-controls">
				<button type="button" class="btn btn-xs sidebar-slide-toggle btn-link m-l-20 hidden-md-down" data-pages-toggle="#appMenu"><i class="fa fa-angle-down fs-16"></i>
				</button>
				<button type="button" class="btn btn-link hidden-md-down" data-toggle-pin="sidebar"><i class="fa fs-12"></i>
				</button>
			</div>
		</div>
		<!-- END SIDEBAR MENU HEADER-->
		<!-- START SIDEBAR MENU -->
		<div class="sidebar-menu">
			<!-- BEGIN SIDEBAR MENU ITEMS-->
			<ul class="menu-items">
				<li class="m-t-30 ">
					<a href="index.html" class="detailed">
						<span class="title">Dashboard</span>
						<span class="details">12 New Updates</span>
					</a>
					<span class="bg-success icon-thumbnail"><i class="pg-home"></i></span>
				</li>
				<li class="">
					<a href="email.html" class="detailed">
						<span class="title">Email</span>
						<span class="details">234 New Emails</span>
					</a>
					<span class="icon-thumbnail"><i class="pg-mail"></i></span>
				</li>
				<li class="">
					<a href="social.html"><span class="title">Social</span></a>
					<span class="icon-thumbnail"><i class="pg-social"></i></span>
				</li>
				<li>
					<a href="javascript:;"><span class="title">Calendar</span>
						<span class=" arrow"></span></a>
						<span class="icon-thumbnail"><i class="pg-calender"></i></span>
						<ul class="sub-menu">
							<li class="">
								<a href="calendar.html">Basic</a>
								<span class="icon-thumbnail">c</span>
							</li>
							<li class="">
								<a href="calendar_lang.html">Languages</a>
								<span class="icon-thumbnail">L</span>
							</li>
							<li class="">
								<a href="calendar_month.html">Month</a>
								<span class="icon-thumbnail">M</span>
							</li>
							<li class="">
								<a href="calendar_lazy.html">Lazy load</a>
								<span class="icon-thumbnail">La</span>
							</li>
							<li class="">
								<a href="http://pages.revox.io/dashboard/2.1.0/doc/#calendar" target="_blank">Documentation</a>
								<span class="icon-thumbnail">D</span>
							</li>
						</ul>
					</li>
					<li class="">
						<a href="builder.html">
							<span class="title">Builder</span>
						</a>
						<span class="icon-thumbnail"><i class="pg-layouts"></i></span>
					</li>
					<li>
						<a href="javascript:;"><span class="title">Layouts</span>
							<span class=" arrow"></span></a>
							<span class="icon-thumbnail"><i class="pg-layouts2"></i></span>
							<ul class="sub-menu">
								<li class="">
									<a href="default_layout.html">Default</a>
									<span class="icon-thumbnail">dl</span>
								</li>
								<li class="">
									<a href="secondary_layout.html">Secondary</a>
									<span class="icon-thumbnail">sl</span>
								</li>
								<li class="">
									<a href="boxed_layout.html">Boxed</a>
									<span class="icon-thumbnail">bl</span>
								</li>
								<li class="">
									<a href="rtl_layout.html">RTL</a>
									<span class="icon-thumbnail">rl</span>
								</li>
							</ul>
						</li>
						<li>
							<a href="javascript:;"><span class="title">UI Elements</span>
								<span class=" arrow"></span></a>
								<span class="icon-thumbnail">Ui</span>
								<ul class="sub-menu">
									<li class="">
										<a href="color.html">Color</a>
										<span class="icon-thumbnail">c</span>
									</li>
									<li class="">
										<a href="typography.html">Typography</a>
										<span class="icon-thumbnail">t</span>
									</li>
									<li class="">
										<a href="icons.html">Icons</a>
										<span class="icon-thumbnail">i</span>
									</li>
									<li class="">
										<a href="buttons.html">Buttons</a>
										<span class="icon-thumbnail">b</span>
									</li>
									<li class="">
										<a href="notifications.html">Notifications</a>
										<span class="icon-thumbnail">n</span>
									</li>
									<li class="">
										<a href="modals.html">Modals</a>
										<span class="icon-thumbnail">m</span>
									</li>
									<li class="">
										<a href="progress.html">Progress &amp; Activity</a>
										<span class="icon-thumbnail">pa</span>
									</li>
									<li class="">
										<a href="tabs_accordian.html">Tabs &amp; Accordions</a>
										<span class="icon-thumbnail">ta</span>
									</li>
									<li class="">
										<a href="sliders.html">Sliders</a>
										<span class="icon-thumbnail">s</span>
									</li>
									<li class="">
										<a href="tree_view.html">Tree View</a>
										<span class="icon-thumbnail">tv</span>
									</li>
									<li class="">
										<a href="nestables.html">Nestable</a>
										<span class="icon-thumbnail">ns</span>
									</li>
								</ul>
							</li>
							<li class="open active">
								<a href="javascript:;">
									<span class="title">Forms</span>
									<span class=" open  arrow"></span>
								</a>
								<span class="icon-thumbnail"><i class="pg-form"></i></span>
								<ul class="sub-menu">
									<li class="">
										<a href="form_elements.html">Form Elements</a>
										<span class="icon-thumbnail">fe</span>
									</li>
									<li class="">
										<a href="form_layouts.html">Form Layouts</a>
										<span class="icon-thumbnail">fl</span>
									</li>
									<li class="">
										<a href="form_wizard.html">Form Wizard</a>
										<span class="icon-thumbnail">fw</span>
									</li>
								</ul>
							</li>
							<li class="">
								<a href="cards.html">
									<span class="title">Cards</span>
								</a>
								<span class="icon-thumbnail"><i class="pg-grid"></i></span>
							</li>
							<li class="">
								<a href="views.html">
									<span class="title">Views</span>
								</a>
								<span class="icon-thumbnail"><i class="pg pg-ui"></i></span>
							</li>
							<li>
								<a href="javascript:;"><span class="title">Tables</span>
									<span class=" arrow"></span></a>
									<span class="icon-thumbnail"><i class="pg-tables"></i></span>
									<ul class="sub-menu">
										<li class="">
											<a href="tables.html">Basic Tables</a>
											<span class="icon-thumbnail">bt</span>
										</li>
										<li class="">
											<a href="datatables.html">Data Tables</a>
											<span class="icon-thumbnail">dt</span>
										</li>
									</ul>
								</li>
								<li>
									<a href="javascript:;"><span class="title">Maps</span> 
										<span class=" arrow"></span></a>
										<span class="icon-thumbnail"><i class="pg-map"></i></span>
										<ul class="sub-menu">
											<li class="">
												<a href="google_map.html">Google Maps</a>
												<span class="icon-thumbnail">gm</span>
											</li>
											<li class="">
												<a href="vector_map.html">Vector Maps</a>
												<span class="icon-thumbnail">vm</span>
											</li>
										</ul>
									</li>
									<li class="">
										<a href="charts.html"><span class="title">Charts</span></a>
										<span class="icon-thumbnail"><i class="pg-charts"></i></span>
									</li>
									<li>
										<a href="javascript:;"><span class="title">Extra</span>
											<span class=" arrow"></span></a>
											<span class="icon-thumbnail"><i class="pg-bag"></i></span>
											<ul class="sub-menu">
												<li class="">
													<a href="invoice.html">Invoice</a>
													<span class="icon-thumbnail">in</span>
												</li>
												<li class="">
													<a href="404.html">404 Page</a>
													<span class="icon-thumbnail">pg</span>
												</li>
												<li class="">
													<a href="500.html">500 Page</a>
													<span class="icon-thumbnail">pg</span>
												</li>
												<li class="">
													<a href="blank_template.html">Blank Page</a>
													<span class="icon-thumbnail">bp</span>
												</li>
												<li class="">
													<a href="login.html">Login</a>
													<span class="icon-thumbnail">l</span>
												</li>
												<li class="">
													<a href="register.html">Register</a>
													<span class="icon-thumbnail">re</span>
												</li>
												<li class="">
													<a href="lock_screen.html">Lockscreen</a>
													<span class="icon-thumbnail">ls</span>
												</li>
												<li class="">
													<a href="gallery.html">Gallery</a>
													<span class="icon-thumbnail">gl</span>
												</li>
												<li class="">
													<a href="timeline.html">Timeline</a>
													<span class="icon-thumbnail">t</span>
												</li>
											</ul>
										</li>
										<li class="">
											<a href="javascript:;"><span class="title">Menu Levels</span>
												<span class="arrow"></span></a>
												<span class="icon-thumbnail"><i class="pg-menu_lv"></i></span>
												<ul class="sub-menu">
													<li>
														<a href="javascript:;">Level 1</a>
														<span class="icon-thumbnail">L1</span>
													</li>
													<li>
														<a href="javascript:;"><span class="title">Level 2</span>
															<span class="arrow"></span></a>
															<span class="icon-thumbnail">L2</span>
															<ul class="sub-menu">
																<li>
																	<a href="javascript:;">Sub Menu</a>
																	<span class="icon-thumbnail">Sm</span>
																</li>
																<li>
																	<a href="ujavascript:;">Sub Menu</a>
																	<span class="icon-thumbnail">Sm</span>
																</li>
															</ul>
														</li>
													</ul>
												</li>
												<li class="">
													<a href="http://pages.revox.io/dashboard/2.2.0/docs/" target="_blank"><span class="title">Docs</span></a>
													<span class="icon-thumbnail"><i class="pg-note"></i></span>
												</li>
												<li class="">
													<a href="http://changelog.pages.revox.io/" target="_blank"><span class="title">Changelog</span></a>
													<span class="icon-thumbnail">Cl</span>
												</li>
											</ul>
											<div class="clearfix"></div>
										</div>
										<!-- END SIDEBAR MENU -->
									</nav>
									<!-- END SIDEBAR -->
									<!-- END SIDEBPANEL-->
									<!-- START PAGE-CONTAINER -->
									<div class="page-container ">
										<!-- START HEADER -->
										<div class="header ">
											<!-- START MOBILE SIDEBAR TOGGLE -->
											<a href="#" class="btn-link toggle-sidebar hidden-lg-up pg pg-menu" data-toggle="sidebar">
											</a>
											<!-- END MOBILE SIDEBAR TOGGLE -->
											<div class="">
												<div class="brand inline   ">
													<img src="<?php echo base_url('assets');?>/img/logo.png" alt="logo" data-src="<?php echo base_url('assets');?>/img/logo.png" data-src-retina="<?php echo base_url('assets');?>/img/logo_2x.png" width="78" height="22">
												</div>
												<!-- START NOTIFICATION LIST -->
												<ul class="hidden-md-down notification-list no-margin hidden-sm-down b-grey b-l b-r no-style p-l-30 p-r-20">
													<li class="p-r-10 inline">
														<div class="dropdown">
															<a href="javascript:;" id="notification-center" class="header-icon pg pg-world" data-toggle="dropdown">
																<span class="bubble"></span>
															</a>
															<!-- START Notification Dropdown -->
															<div class="dropdown-menu notification-toggle" role="menu" aria-labelledby="notification-center">
																<!-- START Notification -->
																<div class="notification-panel">
																	<!-- START Notification Body-->
																	<div class="notification-body scrollable">
																		<!-- START Notification Item-->
																		<div class="notification-item unread clearfix">
																			<!-- START Notification Item-->
																			<div class="heading open">
																				<a href="#" class="text-complete pull-left">
																					<i class="pg-map fs-16 m-r-10"></i>
																					<span class="bold">Carrot Design</span>
																					<span class="fs-12 m-l-10">David Nester</span>
																				</a>
																				<div class="pull-right">
																					<div class="thumbnail-wrapper d16 circular inline m-t-15 m-r-10 toggle-more-details">
																						<div><i class="fa fa-angle-left"></i>
																						</div>
																					</div>
																					<span class=" time">few sec ago</span>
																				</div>
																				<div class="more-details">
																					<div class="more-details-inner">
																						<h5 class="semi-bold fs-16">“Apple’s Motivation - Innovation <br>
																							distinguishes between <br>
																						A leader and a follower.”</h5>
																						<p class="small hint-text">
																							Commented on john Smiths wall.
																							<br> via pages framework.
																						</p>
																					</div>
																				</div>
																			</div>
																			<!-- END Notification Item-->
																			<!-- START Notification Item Right Side-->
																			<div class="option" data-toggle="tooltip" data-placement="left" title="mark as read">
																				<a href="#" class="mark"></a>
																			</div>
																			<!-- END Notification Item Right Side-->
																		</div>
																		<!-- START Notification Body-->
																		<!-- START Notification Item-->
																		<div class="notification-item  clearfix">
																			<div class="heading">
																				<a href="#" class="text-danger pull-left">
																					<i class="fa fa-exclamation-triangle m-r-10"></i>
																					<span class="bold">98% Server Load</span>
																					<span class="fs-12 m-l-10">Take Action</span>
																				</a>
																				<span class="pull-right time">2 mins ago</span>
																			</div>
																			<!-- START Notification Item Right Side-->
																			<div class="option">
																				<a href="#" class="mark"></a>
																			</div>
																			<!-- END Notification Item Right Side-->
																		</div>
																		<!-- END Notification Item-->
																		<!-- START Notification Item-->
																		<div class="notification-item  clearfix">
																			<div class="heading">
																				<a href="#" class="text-warning-dark pull-left">
																					<i class="fa fa-exclamation-triangle m-r-10"></i>
																					<span class="bold">Warning Notification</span>
																					<span class="fs-12 m-l-10">Buy Now</span>
																				</a>
																				<span class="pull-right time">yesterday</span>
																			</div>
																			<!-- START Notification Item Right Side-->
																			<div class="option">
																				<a href="#" class="mark"></a>
																			</div>
																			<!-- END Notification Item Right Side-->
																		</div>
																		<!-- END Notification Item-->
																		<!-- START Notification Item-->
																		<div class="notification-item unread clearfix">
																			<div class="heading">
																				<div class="thumbnail-wrapper d24 circular b-white m-r-5 b-a b-white m-t-10 m-r-10">
																					<img width="30" height="30" data-src-retina="<?php echo base_url('assets');?>/img/profiles/1x.jpg" data-src="<?php echo base_url('assets');?>/img/profiles/1.jpg" alt="" src="<?php echo base_url('assets');?>/img/profiles/1.jpg">
																				</div>
																				<a href="#" class="text-complete pull-left">
																					<span class="bold">Revox Design Labs</span>
																					<span class="fs-12 m-l-10">Owners</span>
																				</a>
																				<span class="pull-right time">11:00pm</span>
																			</div>
																			<!-- START Notification Item Right Side-->
																			<div class="option" data-toggle="tooltip" data-placement="left" title="mark as read">
																				<a href="#" class="mark"></a>
																			</div>
																			<!-- END Notification Item Right Side-->
																		</div>
																		<!-- END Notification Item-->
																	</div>
																	<!-- END Notification Body-->
																	<!-- START Notification Footer-->
																	<div class="notification-footer text-center">
																		<a href="#" class="">Read all notifications</a>
																		<a data-toggle="refresh" class="portlet-refresh text-black pull-right" href="#">
																			<i class="pg-refresh_new"></i>
																		</a>
																	</div>
																	<!-- START Notification Footer-->
																</div>
																<!-- END Notification -->
															</div>
															<!-- END Notification Dropdown -->
														</div>
													</li>
													<li class="p-r-10 inline">
														<a href="#" class="header-icon pg pg-link"></a>
													</li>
													<li class="p-r-10 inline">
														<a href="#" class="header-icon pg pg-thumbs"></a>
													</li>
												</ul>
												<!-- END NOTIFICATIONS LIST -->
												<a href="#" class="search-link hidden-md-down" data-toggle="search"><i class="pg-search"></i>Type anywhere to <span class="bold">search</span></a>
											</div>
											<div class="d-flex align-items-center">
												<!-- START User Info-->
												<div class="pull-left p-r-10 fs-14 font-heading hidden-md-down">
													<span class="semi-bold">David</span> <span class="text-master">Nest</span>
												</div>
												<div class="dropdown pull-right hidden-md-down">
													<button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														<span class="thumbnail-wrapper d32 circular inline">
															<img src="<?php echo base_url('assets');?>/img/profiles/avatar.jpg" alt="" data-src="<?php echo base_url('assets');?>/img/profiles/avatar.jpg" data-src-retina="<?php echo base_url('assets');?>/img/profiles/avatar_small2x.jpg" width="32" height="32">
														</span>
													</button>
													<div class="dropdown-menu dropdown-menu-right profile-dropdown" role="menu">
														<a href="#" class="dropdown-item"><i class="pg-settings_small"></i> Settings</a>
														<a href="#" class="dropdown-item"><i class="pg-outdent"></i> Feedback</a>
														<a href="#" class="dropdown-item"><i class="pg-signals"></i> Help</a>
														<a href="#" class="clearfix bg-master-lighter dropdown-item">
															<span class="pull-left">Logout</span>
															<span class="pull-right"><i class="pg-power"></i></span>
														</a>
													</div>
												</div>
												<!-- END User Info-->
												<a href="#" class="header-icon pg pg-alt_menu btn-link m-l-10 sm-no-margin d-inline-block" data-toggle="quickview" data-toggle-element="#quickview"></a>
											</div>
										</div>
										<!-- END HEADER -->
										<!-- START PAGE CONTENT WRAPPER -->
										<div class="page-content-wrapper ">
											<!-- START PAGE CONTENT -->
											<div class="content ">
												<!-- START JUMBOTRON -->
												<div class="jumbotron" data-pages="parallax">
													<div class=" container-fluid   container-fixed-lg sm-p-l-0 sm-p-r-0">
														<div class="inner">
															<!-- START BREADCRUMB -->
															<ol class="breadcrumb">
																<li class="breadcrumb-item"><a href="#">Home</a></li>
																<li class="breadcrumb-item active">Form Elements</li>
															</ol>
															<!-- END BREADCRUMB -->
															<div class="row">
																<div class="col-xl-7 col-lg-6 "></div>
																<div class="col-xl-5 col-lg-6 "></div>
															</div>
														</div>
													</div>
												</div>
												<!-- END JUMBOTRON -->
												<!-- START CONTAINER FLUID -->
												<div class=" container-fluid   container-fixed-lg"></div>
												<!-- END CONTAINER FLUID -->
												<!-- START CONTAINER FLUID -->
												<div class=" container-fluid   container-fixed-lg"></div>
												<!-- END CONTAINER FLUID -->
												<!-- START CONTAINER FLUID -->
												<div class=" container-fluid   container-fixed-lg"></div>
												<!-- END CONTAINER FLUID -->
												<!-- START CONTAINER FLUID -->
												<div class=" container-fluid   container-fixed-lg"></div>
												<!-- END CONTAINER FLUID -->
												<!-- START CONTAINER FLUID -->
												<div class=" container-fluid   container-fixed-lg"></div>
												<!-- END CONTAINER FLUID -->
												<!-- START CONTAINER FLUID -->
												<div class=" container-fluid   container-fixed-lg"></div>
												<!-- END CONTAINER FLUID -->
												<!-- START CONTAINER FLUID -->
												<div class=" container-fluid   container-fixed-lg">
													<!-- START card -->
													<div class="card card-default">
														<div class="card-header ">
															<div class="card-title">Date Controls
															</div>
															<div class="tools">
																<a class="collapse" href="javascript:;"></a>
																<a class="config" data-toggle="modal" href="#grid-config"></a>
																<a class="reload" href="javascript:;"></a>
																<a class="remove" href="javascript:;"></a>
															</div>
														</div>
														<div class="card-block">
															<div class="row">
																<div class="col-lg-4">
																	<h5>Simple Date
																		<span class="semi-bold">Picker</span>
																	</h5>
																	<p>Date picker is powered by boostrap date picker, this is customized in way that it suites our theme and design, Have a look!</p>
																	<br>
																	<div id="datepicker-component" class="input-group date col-md-8 p-l-0">
																		<input type="text" class="form-control"><span class="input-group-addon"><i
																			class="fa fa-calendar"></i></span>
																		</div>
																		<br>
																		<div class="form-group form-group-default input-group col-md-10">
																			<div class="form-input-group">
																				<label>Check In</label>
																				<input type="email" class="form-control" placeholder="Pick a date" id="datepicker-component2">
																			</div>
																			<div class="input-group-addon">
																				<i class="fa fa-calendar"></i>
																			</div>
																		</div>
																	</div>
																	<div class="col-lg-4">
																		<h5>Date
																			<span class="semi-bold">Range</span>
																		</h5>
																		<p>Date range can be set by the same plugin, this is use full when taking two dates at a time
																		</p>
																		<br>
																		<div class="input-daterange input-group" id="datepicker-range">
																			<input type="text" class="input-sm form-control" name="start" />
																			<div class="input-group-addon">to</div>
																			<input type="text" class="input-sm form-control" name="end" />
																		</div>
																		<br>
																		<div class="input-prepend input-group">
																			<span class="add-on input-group-addon"><i
																				class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
																				<input type="text" style="width: 100%" name="reservation" id="daterangepicker" class="form-control" value="08/01/2013 1:00 PM - 08/01/2013 1:30 PM" />
																			</div>
																			<br>
																			<div class="row">
																				<div class="col-md-6">
																					<div class="input-group bootstrap-timepicker">
																						<input id="timepicker" type="text" class="form-control">
																						<span class="input-group-addon"><i class="pg-clock"></i></span>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-lg-4">
																			<h5>Advance
																				<span class="semi-bold">Settings</span>
																			</h5>
																			<p>Some advance setting that you can do with this calender, like to start from years an disable sections of dates</p>
																			<br>
																			<div id="datepicker-embeded"></div>
																		</div>
																	</div>
																</div>
															</div>
															<!-- END card -->
														</div>
														<!-- END CONTAINER FLUID -->
														<!-- START CONTAINER FLUID -->
														<div class=" container-fluid   container-fixed-lg"></div>
														<!-- END CONTAINER FLUID -->
														<!-- START CONTAINER FLUID -->
														<div class=" container-fluid   container-fixed-lg"></div>
														<!-- END CONTAINER FLUID -->
														<!-- START CONTAINER FLUID -->
														<div class=" container-fluid   container-fixed-lg m-t-20"></div>
														<!-- END CONTAINER FLUID -->
													</div>
													<!-- END PAGE CONTENT -->
													<!-- START COPYRIGHT -->
													<!-- START CONTAINER FLUID -->
													<!-- START CONTAINER FLUID -->
													<div class=" container-fluid  container-fixed-lg footer">
														<div class="copyright sm-text-center">
															<p class="small no-margin pull-left sm-pull-reset">
																<span class="hint-text">Copyright &copy; 2017 </span>
																<span class="font-montserrat">REVOX</span>.
																<span class="hint-text">All rights reserved. </span>
																<span class="sm-block"><a href="#" class="m-l-10 m-r-10">Terms of use</a> <span class="muted">|</span> <a href="#" class="m-l-10">Privacy Policy</a></span>
															</p>
															<p class="small no-margin pull-right sm-pull-reset">
																Hand-crafted <span class="hint-text">&amp; made with Love</span>
															</p>
															<div class="clearfix"></div>
														</div>
													</div>
													<!-- END COPYRIGHT -->
												</div>
												<!-- END PAGE CONTENT WRAPPER -->
											</div>
											<!-- END PAGE CONTAINER -->
											<!--START QUICKVIEW -->
											<div id="quickview" class="quickview-wrapper" data-pages="quickview">
												<!-- Nav tabs -->
												<ul class="nav nav-tabs">
													<li class="" data-target="#quickview-notes" data-toggle="tab">
														<a href="#">Notes</a>
													</li>
													<li data-target="#quickview-alerts" data-toggle="tab">
														<a href="#">Alerts</a>
													</li>
													<li class="active" data-target="#quickview-chat" data-toggle="tab">
														<a href="#">Chat</a>
													</li>
												</ul>
												<a class="btn-link quickview-toggle" data-toggle-element="#quickview" data-toggle="quickview"><i class="pg-close"></i></a>
												<!-- Tab panes -->
												<div class="tab-content">
													<!-- BEGIN Notes !-->
													<div class="tab-pane no-padding" id="quickview-notes">
														<div class="view-port clearfix quickview-notes" id="note-views">
															<!-- BEGIN Note List !-->
															<div class="view list" id="quick-note-list">
																<div class="toolbar clearfix">
																	<ul class="pull-right ">
																		<li>
																			<a href="#" class="delete-note-link"><i class="fa fa-trash-o"></i></a>
																		</li>
																		<li>
																			<a href="#" class="new-note-link" data-navigate="view" data-view-port="#note-views" data-view-animation="push"><i class="fa fa-plus"></i></a>
																		</li>
																	</ul>
																	<button class="btn-remove-notes btn btn-xs btn-block hide"><i class="fa fa-times"></i> Delete</button>
																</div>
																<ul>
																	<!-- BEGIN Note Item !-->
																	<li data-noteid="1">
																		<div class="left">
																			<!-- BEGIN Note Action !-->
																			<div class="checkbox check-warning no-margin">
																				<input id="qncheckbox1" type="checkbox" value="1">
																				<label for="qncheckbox1"></label>
																			</div>
																			<!-- END Note Action !-->
																			<!-- BEGIN Note Preview Text !-->
																			<p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
																			<!-- BEGIN Note Preview Text !-->
																		</div>
																		<!-- BEGIN Note Details !-->
																		<div class="right pull-right">
																			<!-- BEGIN Note Date !-->
																			<span class="date">12/12/14</span>
																			<a href="#" data-navigate="view" data-view-port="#note-views" data-view-animation="push"><i class="fa fa-chevron-right"></i></a>
																			<!-- END Note Date !-->
																		</div>
																		<!-- END Note Details !-->
																	</li>
																	<!-- END Note List !-->
																	<!-- BEGIN Note Item !-->
																	<li data-noteid="2">
																		<div class="left">
																			<!-- BEGIN Note Action !-->
																			<div class="checkbox check-warning no-margin">
																				<input id="qncheckbox2" type="checkbox" value="1">
																				<label for="qncheckbox2"></label>
																			</div>
																			<!-- END Note Action !-->
																			<!-- BEGIN Note Preview Text !-->
																			<p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
																			<!-- BEGIN Note Preview Text !-->
																		</div>
																		<!-- BEGIN Note Details !-->
																		<div class="right pull-right">
																			<!-- BEGIN Note Date !-->
																			<span class="date">12/12/14</span>
																			<a href="#"><i class="fa fa-chevron-right"></i></a>
																			<!-- END Note Date !-->
																		</div>
																		<!-- END Note Details !-->
																	</li>
																	<!-- END Note List !-->
																	<!-- BEGIN Note Item !-->
																	<li data-noteid="2">
																		<div class="left">
																			<!-- BEGIN Note Action !-->
																			<div class="checkbox check-warning no-margin">
																				<input id="qncheckbox3" type="checkbox" value="1">
																				<label for="qncheckbox3"></label>
																			</div>
																			<!-- END Note Action !-->
																			<!-- BEGIN Note Preview Text !-->
																			<p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
																			<!-- BEGIN Note Preview Text !-->
																		</div>
																		<!-- BEGIN Note Details !-->
																		<div class="right pull-right">
																			<!-- BEGIN Note Date !-->
																			<span class="date">12/12/14</span>
																			<a href="#"><i class="fa fa-chevron-right"></i></a>
																			<!-- END Note Date !-->
																		</div>
																		<!-- END Note Details !-->
																	</li>
																	<!-- END Note List !-->
																	<!-- BEGIN Note Item !-->
																	<li data-noteid="3">
																		<div class="left">
																			<!-- BEGIN Note Action !-->
																			<div class="checkbox check-warning no-margin">
																				<input id="qncheckbox4" type="checkbox" value="1">
																				<label for="qncheckbox4"></label>
																			</div>
																			<!-- END Note Action !-->
																			<!-- BEGIN Note Preview Text !-->
																			<p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
																			<!-- BEGIN Note Preview Text !-->
																		</div>
																		<!-- BEGIN Note Details !-->
																		<div class="right pull-right">
																			<!-- BEGIN Note Date !-->
																			<span class="date">12/12/14</span>
																			<a href="#"><i class="fa fa-chevron-right"></i></a>
																			<!-- END Note Date !-->
																		</div>
																		<!-- END Note Details !-->
																	</li>
																	<!-- END Note List !-->
																	<!-- BEGIN Note Item !-->
																	<li data-noteid="4">
																		<div class="left">
																			<!-- BEGIN Note Action !-->
																			<div class="checkbox check-warning no-margin">
																				<input id="qncheckbox5" type="checkbox" value="1">
																				<label for="qncheckbox5"></label>
																			</div>
																			<!-- END Note Action !-->
																			<!-- BEGIN Note Preview Text !-->
																			<p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
																			<!-- BEGIN Note Preview Text !-->
																		</div>
																		<!-- BEGIN Note Details !-->
																		<div class="right pull-right">
																			<!-- BEGIN Note Date !-->
																			<span class="date">12/12/14</span>
																			<a href="#"><i class="fa fa-chevron-right"></i></a>
																			<!-- END Note Date !-->
																		</div>
																		<!-- END Note Details !-->
																	</li>
																	<!-- END Note List !-->
																</ul>
															</div>
															<!-- END Note List !-->
															<div class="view note" id="quick-note">
																<div>
																	<ul class="toolbar">
																		<li><a href="#" class="close-note-link"><i class="pg-arrow_left"></i></a>
																		</li>
																		<li><a href="#" data-action="Bold" class="fs-12"><i class="fa fa-bold"></i></a>
																		</li>
																		<li><a href="#" data-action="Italic" class="fs-12"><i class="fa fa-italic"></i></a>
																		</li>
																		<li><a href="#" class="fs-12"><i class="fa fa-link"></i></a>
																		</li>
																	</ul>
																	<div class="body">
																		<div>
																			<div class="top">
																				<span>21st april 2014 2:13am</span>
																			</div>
																			<div class="content">
																				<div class="quick-note-editor full-width full-height js-input" contenteditable="true"></div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<!-- END Notes !-->
													<!-- BEGIN Alerts !-->
													<div class="tab-pane no-padding" id="quickview-alerts">
														<div class="view-port clearfix" id="alerts">
															<!-- BEGIN Alerts View !-->
															<div class="view bg-white">
																<!-- BEGIN View Header !-->
																<div class="navbar navbar-default navbar-sm">
																	<div class="navbar-inner">
																		<!-- BEGIN Header Controler !-->
																		<a href="javascript:;" class="inline action p-l-10 link text-master" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
																			<i class="pg-more"></i>
																		</a>
																		<!-- END Header Controler !-->
																		<div class="view-heading">
																			Notications
																		</div>
																		<!-- BEGIN Header Controler !-->
																		<a href="#" class="inline action p-r-10 pull-right link text-master">
																			<i class="pg-search"></i>
																		</a>
																		<!-- END Header Controler !-->
																	</div>
																</div>
																<!-- END View Header !-->
																<!-- BEGIN Alert List !-->
																<div data-init-list-view="ioslist" class="list-view boreded no-top-border">
																	<!-- BEGIN List Group !-->
																	<div class="list-view-group-container">
																		<!-- BEGIN List Group Header!-->
																		<div class="list-view-group-header text-uppercase">
																			Calendar
																		</div>
																		<!-- END List Group Header!-->
																		<ul>
																			<!-- BEGIN List Group Item!-->
																			<li class="alert-list">
																				<!-- BEGIN Alert Item Set Animation using data-view-animation !-->
																				<a href="javascript:;" class="align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
																					<p class="">
																						<span class="text-warning fs-10"><i class="fa fa-circle"></i></span>
																					</p>
																					<p class="p-l-10 overflow-ellipsis fs-12">
																						<span class="text-master">David Nester Birthday</span>
																					</p>
																					<p class="p-r-10 ml-auto fs-12 text-right">
																						<span class="text-warning">Today <br></span>
																						<span class="text-master">All Day</span>
																					</p>
																				</a>
																				<!-- END Alert Item!-->
																				<!-- BEGIN List Group Item!-->
																			</li>
																			<!-- END List Group Item!-->
																			<!-- BEGIN List Group Item!-->
																			<li class="alert-list">
																				<!-- BEGIN Alert Item Set Animation using data-view-animation !-->
																				<a href="#" class="align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
																					<p class="">
																						<span class="text-warning fs-10"><i class="fa fa-circle"></i></span>
																					</p>
																					<p class="p-l-10 overflow-ellipsis fs-12">
																						<span class="text-master">Meeting at 2:30</span>
																					</p>
																					<p class="p-r-10 ml-auto fs-12 text-right">
																						<span class="text-warning">Today</span>
																					</p>
																				</a>
																				<!-- END Alert Item!-->
																			</li>
																			<!-- END List Group Item!-->
																		</ul>
																	</div>
																	<!-- END List Group !-->
																	<div class="list-view-group-container">
																		<!-- BEGIN List Group Header!-->
																		<div class="list-view-group-header text-uppercase">
																			Social
																		</div>
																		<!-- END List Group Header!-->
																		<ul>
																			<!-- BEGIN List Group Item!-->
																			<li class="alert-list">
																				<!-- BEGIN Alert Item Set Animation using data-view-animation !-->
																				<a href="javascript:;" class="p-t-10 p-b-10 align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
																					<p class="">
																						<span class="text-complete fs-10"><i class="fa fa-circle"></i></span>
																					</p>
																					<p class="col overflow-ellipsis fs-12 p-l-10">
																						<span class="text-master link">Jame Smith commented on your status<br></span>
																						<span class="text-master">“Perfection Simplified - Company Revox"</span>
																					</p>
																				</a>
																				<!-- END Alert Item!-->
																			</li>
																			<!-- END List Group Item!-->
																			<!-- BEGIN List Group Item!-->
																			<li class="alert-list">
																				<!-- BEGIN Alert Item Set Animation using data-view-animation !-->
																				<a href="javascript:;" class="p-t-10 p-b-10 align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
																					<p class="">
																						<span class="text-complete fs-10"><i class="fa fa-circle"></i></span>
																					</p>
																					<p class="col overflow-ellipsis fs-12 p-l-10">
																						<span class="text-master link">Jame Smith commented on your status<br></span>
																						<span class="text-master">“Perfection Simplified - Company Revox"</span>
																					</p>
																				</a>
																				<!-- END Alert Item!-->
																			</li>
																			<!-- END List Group Item!-->
																		</ul>
																	</div>
																	<div class="list-view-group-container">
																		<!-- BEGIN List Group Header!-->
																		<div class="list-view-group-header text-uppercase">
																			Sever Status
																		</div>
																		<!-- END List Group Header!-->
																		<ul>
																			<!-- BEGIN List Group Item!-->
																			<li class="alert-list">
																				<!-- BEGIN Alert Item Set Animation using data-view-animation !-->
																				<a href="#" class="p-t-10 p-b-10 align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
																					<p class="">
																						<span class="text-danger fs-10"><i class="fa fa-circle"></i></span>
																					</p>
																					<p class="col overflow-ellipsis fs-12 p-l-10">
																						<span class="text-master link">12:13AM GTM, 10230, ID:WR174s<br></span>
																						<span class="text-master">Server Load Exceeted. Take action</span>
																					</p>
																				</a>
																				<!-- END Alert Item!-->
																			</li>
																			<!-- END List Group Item!-->
																		</ul>
																	</div>
																</div>
																<!-- END Alert List !-->
															</div>
															<!-- EEND Alerts View !-->
														</div>
													</div>
													<!-- END Alerts !-->
													<div class="tab-pane active no-padding" id="quickview-chat">
														<div class="view-port clearfix" id="chat">
															<div class="view bg-white">
																<!-- BEGIN View Header !-->
																<div class="navbar navbar-default">
																	<div class="navbar-inner">
																		<!-- BEGIN Header Controler !-->
																		<a href="javascript:;" class="inline action p-l-10 link text-master" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
																			<i class="pg-plus"></i>
																		</a>
																		<!-- END Header Controler !-->
																		<div class="view-heading">
																			Chat List
																			<div class="fs-11">Show All</div>
																		</div>
																		<!-- BEGIN Header Controler !-->
																		<a href="#" class="inline action p-r-10 pull-right link text-master">
																			<i class="pg-more"></i>
																		</a>
																		<!-- END Header Controler !-->
																	</div>
																</div>
																<!-- END View Header !-->
																<div data-init-list-view="ioslist" class="list-view boreded no-top-border">
																	<div class="list-view-group-container">
																		<div class="list-view-group-header text-uppercase">
																		a</div>
																		<ul>
																			<!-- BEGIN Chat User List Item  !-->
																			<li class="chat-user-list clearfix">
																				<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
																					<span class="thumbnail-wrapper d32 circular bg-success">
																						<img width="34" height="34" alt="" data-src-retina="<?php echo base_url('assets');?>/img/profiles/1x.jpg" data-src="<?php echo base_url('assets');?>/img/profiles/1.jpg" src="<?php echo base_url('assets');?>/img/profiles/1x.jpg" class="col-top">
																					</span>
																					<p class="p-l-10 ">
																						<span class="text-master">ava flores</span>
																						<span class="block text-master hint-text fs-12">Hello there</span>
																					</p>
																				</a>
																			</li>
																			<!-- END Chat User List Item  !-->
																		</ul>
																	</div>
																	<div class="list-view-group-container">
																		<div class="list-view-group-header text-uppercase">b</div>
																		<ul>
																			<!-- BEGIN Chat User List Item  !-->
																			<li class="chat-user-list clearfix">
																				<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
																					<span class="thumbnail-wrapper d32 circular bg-success">
																						<img width="34" height="34" alt="" data-src-retina="<?php echo base_url('assets');?>/img/profiles/2x.jpg" data-src="<?php echo base_url('assets');?>/img/profiles/2.jpg" src="<?php echo base_url('assets');?>/img/profiles/2x.jpg" class="col-top">
																					</span>
																					<p class="p-l-10 ">
																						<span class="text-master">bella mccoy</span>
																						<span class="block text-master hint-text fs-12">Hello there</span>
																					</p>
																				</a>
																			</li>
																			<!-- END Chat User List Item  !-->
																			<!-- BEGIN Chat User List Item  !-->
																			<li class="chat-user-list clearfix">
																				<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
																					<span class="thumbnail-wrapper d32 circular bg-success">
																						<img width="34" height="34" alt="" data-src-retina="<?php echo base_url('assets');?>/img/profiles/3x.jpg" data-src="<?php echo base_url('assets');?>/img/profiles/3.jpg" src="<?php echo base_url('assets');?>/img/profiles/3x.jpg" class="col-top">
																					</span>
																					<p class="p-l-10 ">
																						<span class="text-master">bob stephens</span>
																						<span class="block text-master hint-text fs-12">Hello there</span>
																					</p>
																				</a>
																			</li>
																			<!-- END Chat User List Item  !-->
																		</ul>
																	</div>
																	<div class="list-view-group-container">
																		<div class="list-view-group-header text-uppercase">c</div>
																		<ul>
																			<!-- BEGIN Chat User List Item  !-->
																			<li class="chat-user-list clearfix">
																				<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
																					<span class="thumbnail-wrapper d32 circular bg-success">
																						<img width="34" height="34" alt="" data-src-retina="<?php echo base_url('assets');?>/img/profiles/4x.jpg" data-src="<?php echo base_url('assets');?>/img/profiles/4.jpg" src="<?php echo base_url('assets');?>/img/profiles/4x.jpg" class="col-top">
																					</span>
																					<p class="p-l-10 ">
																						<span class="text-master">carole roberts</span>
																						<span class="block text-master hint-text fs-12">Hello there</span>
																					</p>
																				</a>
																			</li>
																			<!-- END Chat User List Item  !-->
																			<!-- BEGIN Chat User List Item  !-->
																			<li class="chat-user-list clearfix">
																				<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
																					<span class="thumbnail-wrapper d32 circular bg-success">
																						<img width="34" height="34" alt="" data-src-retina="<?php echo base_url('assets');?>/img/profiles/5x.jpg" data-src="<?php echo base_url('assets');?>/img/profiles/5.jpg" src="<?php echo base_url('assets');?>/img/profiles/5x.jpg" class="col-top">
																					</span>
																					<p class="p-l-10 ">
																						<span class="text-master">christopher perez</span>
																						<span class="block text-master hint-text fs-12">Hello there</span>
																					</p>
																				</a>
																			</li>
																			<!-- END Chat User List Item  !-->
																		</ul>
																	</div>
																	<div class="list-view-group-container">
																		<div class="list-view-group-header text-uppercase">d</div>
																		<ul>
																			<!-- BEGIN Chat User List Item  !-->
																			<li class="chat-user-list clearfix">
																				<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
																					<span class="thumbnail-wrapper d32 circular bg-success">
																						<img width="34" height="34" alt="" data-src-retina="<?php echo base_url('assets');?>/img/profiles/6x.jpg" data-src="<?php echo base_url('assets');?>/img/profiles/6.jpg" src="<?php echo base_url('assets');?>/img/profiles/6x.jpg" class="col-top">
																					</span>
																					<p class="p-l-10 ">
																						<span class="text-master">danielle fletcher</span>
																						<span class="block text-master hint-text fs-12">Hello there</span>
																					</p>
																				</a>
																			</li>
																			<!-- END Chat User List Item  !-->
																			<!-- BEGIN Chat User List Item  !-->
																			<li class="chat-user-list clearfix">
																				<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
																					<span class="thumbnail-wrapper d32 circular bg-success">
																						<img width="34" height="34" alt="" data-src-retina="<?php echo base_url('assets');?>/img/profiles/7x.jpg" data-src="<?php echo base_url('assets');?>/img/profiles/7.jpg" src="<?php echo base_url('assets');?>/img/profiles/7x.jpg" class="col-top">
																					</span>
																					<p class="p-l-10 ">
																						<span class="text-master">david sutton</span>
																						<span class="block text-master hint-text fs-12">Hello there</span>
																					</p>
																				</a>
																			</li>
																			<!-- END Chat User List Item  !-->
																		</ul>
																	</div>
																	<div class="list-view-group-container">
																		<div class="list-view-group-header text-uppercase">e</div>
																		<ul>
																			<!-- BEGIN Chat User List Item  !-->
																			<li class="chat-user-list clearfix">
																				<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
																					<span class="thumbnail-wrapper d32 circular bg-success">
																						<img width="34" height="34" alt="" data-src-retina="<?php echo base_url('assets');?>/img/profiles/8x.jpg" data-src="<?php echo base_url('assets');?>/img/profiles/8.jpg" src="<?php echo base_url('assets');?>/img/profiles/8x.jpg" class="col-top">
																					</span>
																					<p class="p-l-10 ">
																						<span class="text-master">earl hamilton</span>
																						<span class="block text-master hint-text fs-12">Hello there</span>
																					</p>
																				</a>
																			</li>
																			<!-- END Chat User List Item  !-->
																			<!-- BEGIN Chat User List Item  !-->
																			<li class="chat-user-list clearfix">
																				<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
																					<span class="thumbnail-wrapper d32 circular bg-success">
																						<img width="34" height="34" alt="" data-src-retina="<?php echo base_url('assets');?>/img/profiles/9x.jpg" data-src="<?php echo base_url('assets');?>/img/profiles/9.jpg" src="<?php echo base_url('assets');?>/img/profiles/9x.jpg" class="col-top">
																					</span>
																					<p class="p-l-10 ">
																						<span class="text-master">elaine lawrence</span>
																						<span class="block text-master hint-text fs-12">Hello there</span>
																					</p>
																				</a>
																			</li>
																			<!-- END Chat User List Item  !-->
																			<!-- BEGIN Chat User List Item  !-->
																			<li class="chat-user-list clearfix">
																				<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
																					<span class="thumbnail-wrapper d32 circular bg-success">
																						<img width="34" height="34" alt="" data-src-retina="<?php echo base_url('assets');?>/img/profiles/1x.jpg" data-src="<?php echo base_url('assets');?>/img/profiles/1.jpg" src="<?php echo base_url('assets');?>/img/profiles/1x.jpg" class="col-top">
																					</span>
																					<p class="p-l-10 ">
																						<span class="text-master">ellen grant</span>
																						<span class="block text-master hint-text fs-12">Hello there</span>
																					</p>
																				</a>
																			</li>
																			<!-- END Chat User List Item  !-->
																			<!-- BEGIN Chat User List Item  !-->
																			<li class="chat-user-list clearfix">
																				<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
																					<span class="thumbnail-wrapper d32 circular bg-success">
																						<img width="34" height="34" alt="" data-src-retina="<?php echo base_url('assets');?>/img/profiles/2x.jpg" data-src="<?php echo base_url('assets');?>/img/profiles/2.jpg" src="<?php echo base_url('assets');?>/img/profiles/2x.jpg" class="col-top">
																					</span>
																					<p class="p-l-10 ">
																						<span class="text-master">erik taylor</span>
																						<span class="block text-master hint-text fs-12">Hello there</span>
																					</p>
																				</a>
																			</li>
																			<!-- END Chat User List Item  !-->
																			<!-- BEGIN Chat User List Item  !-->
																			<li class="chat-user-list clearfix">
																				<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
																					<span class="thumbnail-wrapper d32 circular bg-success">
																						<img width="34" height="34" alt="" data-src-retina="<?php echo base_url('assets');?>/img/profiles/3x.jpg" data-src="<?php echo base_url('assets');?>/img/profiles/3.jpg" src="<?php echo base_url('assets');?>/img/profiles/3x.jpg" class="col-top">
																					</span>
																					<p class="p-l-10 ">
																						<span class="text-master">everett wagner</span>
																						<span class="block text-master hint-text fs-12">Hello there</span>
																					</p>
																				</a>
																			</li>
																			<!-- END Chat User List Item  !-->
																		</ul>
																	</div>
																	<div class="list-view-group-container">
																		<div class="list-view-group-header text-uppercase">f</div>
																		<ul>
																			<!-- BEGIN Chat User List Item  !-->
																			<li class="chat-user-list clearfix">
																				<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
																					<span class="thumbnail-wrapper d32 circular bg-success">
																						<img width="34" height="34" alt="" data-src-retina="<?php echo base_url('assets');?>/img/profiles/4x.jpg" data-src="<?php echo base_url('assets');?>/img/profiles/4.jpg" src="<?php echo base_url('assets');?>/img/profiles/4x.jpg" class="col-top">
																					</span>
																					<p class="p-l-10 ">
																						<span class="text-master">freddie gomez</span>
																						<span class="block text-master hint-text fs-12">Hello there</span>
																					</p>
																				</a>
																			</li>
																			<!-- END Chat User List Item  !-->
																		</ul>
																	</div>
																	<div class="list-view-group-container">
																		<div class="list-view-group-header text-uppercase">g</div>
																		<ul>
																			<!-- BEGIN Chat User List Item  !-->
																			<li class="chat-user-list clearfix">
																				<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
																					<span class="thumbnail-wrapper d32 circular bg-success">
																						<img width="34" height="34" alt="" data-src-retina="<?php echo base_url('assets');?>/img/profiles/5x.jpg" data-src="<?php echo base_url('assets');?>/img/profiles/5.jpg" src="<?php echo base_url('assets');?>/img/profiles/5x.jpg" class="col-top">
																					</span>
																					<p class="p-l-10 ">
																						<span class="text-master">glen jensen</span>
																						<span class="block text-master hint-text fs-12">Hello there</span>
																					</p>
																				</a>
																			</li>
																			<!-- END Chat User List Item  !-->
																			<!-- BEGIN Chat User List Item  !-->
																			<li class="chat-user-list clearfix">
																				<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
																					<span class="thumbnail-wrapper d32 circular bg-success">
																						<img width="34" height="34" alt="" data-src-retina="<?php echo base_url('assets');?>/img/profiles/6x.jpg" data-src="<?php echo base_url('assets');?>/img/profiles/6.jpg" src="<?php echo base_url('assets');?>/img/profiles/6x.jpg" class="col-top">
																					</span>
																					<p class="p-l-10 ">
																						<span class="text-master">gwendolyn walker</span>
																						<span class="block text-master hint-text fs-12">Hello there</span>
																					</p>
																				</a>
																			</li>
																			<!-- END Chat User List Item  !-->
																		</ul>
																	</div>
																	<div class="list-view-group-container">
																		<div class="list-view-group-header text-uppercase">j</div>
																		<ul>
																			<!-- BEGIN Chat User List Item  !-->
																			<li class="chat-user-list clearfix">
																				<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
																					<span class="thumbnail-wrapper d32 circular bg-success">
																						<img width="34" height="34" alt="" data-src-retina="<?php echo base_url('assets');?>/img/profiles/7x.jpg" data-src="<?php echo base_url('assets');?>/img/profiles/7.jpg" src="<?php echo base_url('assets');?>/img/profiles/7x.jpg" class="col-top">
																					</span>
																					<p class="p-l-10 ">
																						<span class="text-master">janet romero</span>
																						<span class="block text-master hint-text fs-12">Hello there</span>
																					</p>
																				</a>
																			</li>
																			<!-- END Chat User List Item  !-->
																		</ul>
																	</div>
																	<div class="list-view-group-container">
																		<div class="list-view-group-header text-uppercase">k</div>
																		<ul>
																			<!-- BEGIN Chat User List Item  !-->
																			<li class="chat-user-list clearfix">
																				<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
																					<span class="thumbnail-wrapper d32 circular bg-success">
																						<img width="34" height="34" alt="" data-src-retina="<?php echo base_url('assets');?>/img/profiles/8x.jpg" data-src="<?php echo base_url('assets');?>/img/profiles/8.jpg" src="<?php echo base_url('assets');?>/img/profiles/8x.jpg" class="col-top">
																					</span>
																					<p class="p-l-10 ">
																						<span class="text-master">kim martinez</span>
																						<span class="block text-master hint-text fs-12">Hello there</span>
																					</p>
																				</a>
																			</li>
																			<!-- END Chat User List Item  !-->
																		</ul>
																	</div>
																	<div class="list-view-group-container">
																		<div class="list-view-group-header text-uppercase">l</div>
																		<ul>
																			<!-- BEGIN Chat User List Item  !-->
																			<li class="chat-user-list clearfix">
																				<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
																					<span class="thumbnail-wrapper d32 circular bg-success">
																						<img width="34" height="34" alt="" data-src-retina="<?php echo base_url('assets');?>/img/profiles/9x.jpg" data-src="<?php echo base_url('assets');?>/img/profiles/9.jpg" src="<?php echo base_url('assets');?>/img/profiles/9x.jpg" class="col-top">
																					</span>
																					<p class="p-l-10 ">
																						<span class="text-master">lawrence white</span>
																						<span class="block text-master hint-text fs-12">Hello there</span>
																					</p>
																				</a>
																			</li>
																			<!-- END Chat User List Item  !-->
																			<!-- BEGIN Chat User List Item  !-->
																			<li class="chat-user-list clearfix">
																				<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
																					<span class="thumbnail-wrapper d32 circular bg-success">
																						<img width="34" height="34" alt="" data-src-retina="<?php echo base_url('assets');?>/img/profiles/1x.jpg" data-src="<?php echo base_url('assets');?>/img/profiles/1.jpg" src="<?php echo base_url('assets');?>/img/profiles/1x.jpg" class="col-top">
																					</span>
																					<p class="p-l-10 ">
																						<span class="text-master">leroy bell</span>
																						<span class="block text-master hint-text fs-12">Hello there</span>
																					</p>
																				</a>
																			</li>
																			<!-- END Chat User List Item  !-->
																			<!-- BEGIN Chat User List Item  !-->
																			<li class="chat-user-list clearfix">
																				<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
																					<span class="thumbnail-wrapper d32 circular bg-success">
																						<img width="34" height="34" alt="" data-src-retina="<?php echo base_url('assets');?>/img/profiles/2x.jpg" data-src="<?php echo base_url('assets');?>/img/profiles/2.jpg" src="<?php echo base_url('assets');?>/img/profiles/2x.jpg" class="col-top">
																					</span>
																					<p class="p-l-10 ">
																						<span class="text-master">letitia carr</span>
																						<span class="block text-master hint-text fs-12">Hello there</span>
																					</p>
																				</a>
																			</li>
																			<!-- END Chat User List Item  !-->
																			<!-- BEGIN Chat User List Item  !-->
																			<li class="chat-user-list clearfix">
																				<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
																					<span class="thumbnail-wrapper d32 circular bg-success">
																						<img width="34" height="34" alt="" data-src-retina="<?php echo base_url('assets');?>/img/profiles/3x.jpg" data-src="<?php echo base_url('assets');?>/img/profiles/3.jpg" src="<?php echo base_url('assets');?>/img/profiles/3x.jpg" class="col-top">
																					</span>
																					<p class="p-l-10 ">
																						<span class="text-master">lucy castro</span>
																						<span class="block text-master hint-text fs-12">Hello there</span>
																					</p>
																				</a>
																			</li>
																			<!-- END Chat User List Item  !-->
																		</ul>
																	</div>
																	<div class="list-view-group-container">
																		<div class="list-view-group-header text-uppercase">m</div>
																		<ul>
																			<!-- BEGIN Chat User List Item  !-->
																			<li class="chat-user-list clearfix">
																				<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
																					<span class="thumbnail-wrapper d32 circular bg-success">
																						<img width="34" height="34" alt="" data-src-retina="<?php echo base_url('assets');?>/img/profiles/4x.jpg" data-src="<?php echo base_url('assets');?>/img/profiles/4.jpg" src="<?php echo base_url('assets');?>/img/profiles/4x.jpg" class="col-top">
																					</span>
																					<p class="p-l-10 ">
																						<span class="text-master">mae hayes</span>
																						<span class="block text-master hint-text fs-12">Hello there</span>
																					</p>
																				</a>
																			</li>
																			<!-- END Chat User List Item  !-->
																			<!-- BEGIN Chat User List Item  !-->
																			<li class="chat-user-list clearfix">
																				<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
																					<span class="thumbnail-wrapper d32 circular bg-success">
																						<img width="34" height="34" alt="" data-src-retina="<?php echo base_url('assets');?>/img/profiles/5x.jpg" data-src="<?php echo base_url('assets');?>/img/profiles/5.jpg" src="<?php echo base_url('assets');?>/img/profiles/5x.jpg" class="col-top">
																					</span>
																					<p class="p-l-10 ">
																						<span class="text-master">marilyn owens</span>
																						<span class="block text-master hint-text fs-12">Hello there</span>
																					</p>
																				</a>
																			</li>
																			<!-- END Chat User List Item  !-->
																			<!-- BEGIN Chat User List Item  !-->
																			<li class="chat-user-list clearfix">
																				<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
																					<span class="thumbnail-wrapper d32 circular bg-success">
																						<img width="34" height="34" alt="" data-src-retina="<?php echo base_url('assets');?>/img/profiles/6x.jpg" data-src="<?php echo base_url('assets');?>/img/profiles/6.jpg" src="<?php echo base_url('assets');?>/img/profiles/6x.jpg" class="col-top">
																					</span>
																					<p class="p-l-10 ">
																						<span class="text-master">marlene cole</span>
																						<span class="block text-master hint-text fs-12">Hello there</span>
																					</p>
																				</a>
																			</li>
																			<!-- END Chat User List Item  !-->
																			<!-- BEGIN Chat User List Item  !-->
																			<li class="chat-user-list clearfix">
																				<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
																					<span class="thumbnail-wrapper d32 circular bg-success">
																						<img width="34" height="34" alt="" data-src-retina="<?php echo base_url('assets');?>/img/profiles/7x.jpg" data-src="<?php echo base_url('assets');?>/img/profiles/7.jpg" src="<?php echo base_url('assets');?>/img/profiles/7x.jpg" class="col-top">
																					</span>
																					<p class="p-l-10 ">
																						<span class="text-master">marsha warren</span>
																						<span class="block text-master hint-text fs-12">Hello there</span>
																					</p>
																				</a>
																			</li>
																			<!-- END Chat User List Item  !-->
																			<!-- BEGIN Chat User List Item  !-->
																			<li class="chat-user-list clearfix">
																				<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
																					<span class="thumbnail-wrapper d32 circular bg-success">
																						<img width="34" height="34" alt="" data-src-retina="<?php echo base_url('assets');?>/img/profiles/8x.jpg" data-src="<?php echo base_url('assets');?>/img/profiles/8.jpg" src="<?php echo base_url('assets');?>/img/profiles/8x.jpg" class="col-top">
																					</span>
																					<p class="p-l-10 ">
																						<span class="text-master">marsha dean</span>
																						<span class="block text-master hint-text fs-12">Hello there</span>
																					</p>
																				</a>
																			</li>
																			<!-- END Chat User List Item  !-->
																			<!-- BEGIN Chat User List Item  !-->
																			<li class="chat-user-list clearfix">
																				<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
																					<span class="thumbnail-wrapper d32 circular bg-success">
																						<img width="34" height="34" alt="" data-src-retina="<?php echo base_url('assets');?>/img/profiles/9x.jpg" data-src="<?php echo base_url('assets');?>/img/profiles/9.jpg" src="<?php echo base_url('assets');?>/img/profiles/9x.jpg" class="col-top">
																					</span>
																					<p class="p-l-10 ">
																						<span class="text-master">mia diaz</span>
																						<span class="block text-master hint-text fs-12">Hello there</span>
																					</p>
																				</a>
																			</li>
																			<!-- END Chat User List Item  !-->
																		</ul>
																	</div>
																	<div class="list-view-group-container">
																		<div class="list-view-group-header text-uppercase">n</div>
																		<ul>
																			<!-- BEGIN Chat User List Item  !-->
																			<!-- BEGIN Chat User List Item  !-->
																			<li class="chat-user-list clearfix">
																				<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
																					<span class="thumbnail-wrapper d32 circular bg-success">
																						<img width="34" height="34" alt="" data-src-retina="<?php echo base_url('assets');?>/img/profiles/1x.jpg" data-src="<?php echo base_url('assets');?>/img/profiles/1.jpg" src="<?php echo base_url('assets');?>/img/profiles/1x.jpg" class="col-top">
																					</span>
																					<p class="p-l-10 ">
																						<span class="text-master">noah elliott</span>
																						<span class="block text-master hint-text fs-12">Hello there</span>
																					</p>
																				</a>
																			</li>
																			<!-- END Chat User List Item  !-->
																		</ul>
																	</div>
																	<div class="list-view-group-container">
																		<div class="list-view-group-header text-uppercase">p</div>
																		<ul>
																			<!-- BEGIN Chat User List Item  !-->
																			<li class="chat-user-list clearfix">
																				<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
																					<span class="thumbnail-wrapper d32 circular bg-success">
																						<img width="34" height="34" alt="" data-src-retina="<?php echo base_url('assets');?>/img/profiles/2x.jpg" data-src="<?php echo base_url('assets');?>/img/profiles/2.jpg" src="<?php echo base_url('assets');?>/img/profiles/2x.jpg" class="col-top">
																					</span>
																					<p class="p-l-10 ">
																						<span class="text-master">phyllis hamilton</span>
																						<span class="block text-master hint-text fs-12">Hello there</span>
																					</p>
																				</a>
																			</li>
																			<!-- END Chat User List Item  !-->
																		</ul>
																	</div>
																	<div class="list-view-group-container">
																		<div class="list-view-group-header text-uppercase">r</div>
																		<ul>
																			<!-- BEGIN Chat User List Item  !-->
																			<li class="chat-user-list clearfix">
																				<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
																					<span class="thumbnail-wrapper d32 circular bg-success">
																						<img width="34" height="34" alt="" data-src-retina="<?php echo base_url('assets');?>/img/profiles/3x.jpg" data-src="<?php echo base_url('assets');?>/img/profiles/3.jpg" src="<?php echo base_url('assets');?>/img/profiles/3x.jpg" class="col-top">
																					</span>
																					<p class="p-l-10 ">
																						<span class="text-master">raul rodriquez</span>
																						<span class="block text-master hint-text fs-12">Hello there</span>
																					</p>
																				</a>
																			</li>
																			<!-- END Chat User List Item  !-->
																			<!-- BEGIN Chat User List Item  !-->
																			<li class="chat-user-list clearfix">
																				<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
																					<span class="thumbnail-wrapper d32 circular bg-success">
																						<img width="34" height="34" alt="" data-src-retina="<?php echo base_url('assets');?>/img/profiles/4x.jpg" data-src="<?php echo base_url('assets');?>/img/profiles/4.jpg" src="<?php echo base_url('assets');?>/img/profiles/4x.jpg" class="col-top">
																					</span>
																					<p class="p-l-10 ">
																						<span class="text-master">rhonda barnett</span>
																						<span class="block text-master hint-text fs-12">Hello there</span>
																					</p>
																				</a>
																			</li>
																			<!-- END Chat User List Item  !-->
																			<!-- BEGIN Chat User List Item  !-->
																			<li class="chat-user-list clearfix">
																				<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
																					<span class="thumbnail-wrapper d32 circular bg-success">
																						<img width="34" height="34" alt="" data-src-retina="<?php echo base_url('assets');?>/img/profiles/5x.jpg" data-src="<?php echo base_url('assets');?>/img/profiles/5.jpg" src="<?php echo base_url('assets');?>/img/profiles/5x.jpg" class="col-top">
																					</span>
																					<p class="p-l-10 ">
																						<span class="text-master">roberta king</span>
																						<span class="block text-master hint-text fs-12">Hello there</span>
																					</p>
																				</a>
																			</li>
																			<!-- END Chat User List Item  !-->
																		</ul>
																	</div>
																	<div class="list-view-group-container">
																		<div class="list-view-group-header text-uppercase">s</div>
																		<ul>
																			<!-- BEGIN Chat User List Item  !-->
																			<li class="chat-user-list clearfix">
																				<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
																					<span class="thumbnail-wrapper d32 circular bg-success">
																						<img width="34" height="34" alt="" data-src-retina="<?php echo base_url('assets');?>/img/profiles/6x.jpg" data-src="<?php echo base_url('assets');?>/img/profiles/6.jpg" src="<?php echo base_url('assets');?>/img/profiles/6x.jpg" class="col-top">
																					</span>
																					<p class="p-l-10 ">
																						<span class="text-master">scott armstrong</span>
																						<span class="block text-master hint-text fs-12">Hello there</span>
																					</p>
																				</a>
																			</li>
																			<!-- END Chat User List Item  !-->
																			<!-- BEGIN Chat User List Item  !-->
																			<li class="chat-user-list clearfix">
																				<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
																					<span class="thumbnail-wrapper d32 circular bg-success">
																						<img width="34" height="34" alt="" data-src-retina="<?php echo base_url('assets');?>/img/profiles/7x.jpg" data-src="<?php echo base_url('assets');?>/img/profiles/7.jpg" src="<?php echo base_url('assets');?>/img/profiles/7x.jpg" class="col-top">
																					</span>
																					<p class="p-l-10 ">
																						<span class="text-master">sebastian austin</span>
																						<span class="block text-master hint-text fs-12">Hello there</span>
																					</p>
																				</a>
																			</li>
																			<!-- END Chat User List Item  !-->
																			<!-- BEGIN Chat User List Item  !-->
																			<li class="chat-user-list clearfix">
																				<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
																					<span class="thumbnail-wrapper d32 circular bg-success">
																						<img width="34" height="34" alt="" data-src-retina="<?php echo base_url('assets');?>/img/profiles/8x.jpg" data-src="<?php echo base_url('assets');?>/img/profiles/8.jpg" src="<?php echo base_url('assets');?>/img/profiles/8x.jpg" class="col-top">
																					</span>
																					<p class="p-l-10 ">
																						<span class="text-master">sofia davis</span>
																						<span class="block text-master hint-text fs-12">Hello there</span>
																					</p>
																				</a>
																			</li>
																			<!-- END Chat User List Item  !-->
																		</ul>
																	</div>
																	<div class="list-view-group-container">
																		<div class="list-view-group-header text-uppercase">t</div>
																		<ul>
																			<!-- BEGIN Chat User List Item  !-->
																			<li class="chat-user-list clearfix">
																				<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
																					<span class="thumbnail-wrapper d32 circular bg-success">
																						<img width="34" height="34" alt="" data-src-retina="<?php echo base_url('assets');?>/img/profiles/9x.jpg" data-src="<?php echo base_url('assets');?>/img/profiles/9.jpg" src="<?php echo base_url('assets');?>/img/profiles/9x.jpg" class="col-top">
																					</span>
																					<p class="p-l-10 ">
																						<span class="text-master">terrance young</span>
																						<span class="block text-master hint-text fs-12">Hello there</span>
																					</p>
																				</a>
																			</li>
																			<!-- END Chat User List Item  !-->
																			<!-- BEGIN Chat User List Item  !-->
																			<li class="chat-user-list clearfix">
																				<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
																					<span class="thumbnail-wrapper d32 circular bg-success">
																						<img width="34" height="34" alt="" data-src-retina="<?php echo base_url('assets');?>/img/profiles/1x.jpg" data-src="<?php echo base_url('assets');?>/img/profiles/1.jpg" src="<?php echo base_url('assets');?>/img/profiles/1x.jpg" class="col-top">
																					</span>
																					<p class="p-l-10 ">
																						<span class="text-master">theodore woods</span>
																						<span class="block text-master hint-text fs-12">Hello there</span>
																					</p>
																				</a>
																			</li>
																			<!-- END Chat User List Item  !-->
																			<!-- BEGIN Chat User List Item  !-->
																			<li class="chat-user-list clearfix">
																				<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
																					<span class="thumbnail-wrapper d32 circular bg-success">
																						<img width="34" height="34" alt="" data-src-retina="<?php echo base_url('assets');?>/img/profiles/2x.jpg" data-src="<?php echo base_url('assets');?>/img/profiles/2.jpg" src="<?php echo base_url('assets');?>/img/profiles/2x.jpg" class="col-top">
																					</span>
																					<p class="p-l-10 ">
																						<span class="text-master">todd wood</span>
																						<span class="block text-master hint-text fs-12">Hello there</span>
																					</p>
																				</a>
																			</li>
																			<!-- END Chat User List Item  !-->
																			<!-- BEGIN Chat User List Item  !-->
																			<li class="chat-user-list clearfix">
																				<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
																					<span class="thumbnail-wrapper d32 circular bg-success">
																						<img width="34" height="34" alt="" data-src-retina="<?php echo base_url('assets');?>/img/profiles/3x.jpg" data-src="<?php echo base_url('assets');?>/img/profiles/3.jpg" src="<?php echo base_url('assets');?>/img/profiles/3x.jpg" class="col-top">
																					</span>
																					<p class="p-l-10 ">
																						<span class="text-master">tommy jenkins</span>
																						<span class="block text-master hint-text fs-12">Hello there</span>
																					</p>
																				</a>
																			</li>
																			<!-- END Chat User List Item  !-->
																		</ul>
																	</div>
																	<div class="list-view-group-container">
																		<div class="list-view-group-header text-uppercase">w</div>
																		<ul>
																			<!-- BEGIN Chat User List Item  !-->
																			<li class="chat-user-list clearfix">
																				<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
																					<span class="thumbnail-wrapper d32 circular bg-success">
																						<img width="34" height="34" alt="" data-src-retina="<?php echo base_url('assets');?>/img/profiles/4x.jpg" data-src="<?php echo base_url('assets');?>/img/profiles/4.jpg" src="<?php echo base_url('assets');?>/img/profiles/4x.jpg" class="col-top">
																					</span>
																					<p class="p-l-10 ">
																						<span class="text-master">wilma hicks</span>
																						<span class="block text-master hint-text fs-12">Hello there</span>
																					</p>
																				</a>
																			</li>
																			<!-- END Chat User List Item  !-->
																		</ul>
																	</div>
																</div>
															</div>
															<!-- BEGIN Conversation View  !-->
															<div class="view chat-view bg-white clearfix">
																<!-- BEGIN Header  !-->
																<div class="navbar navbar-default">
																	<div class="navbar-inner">
																		<a href="javascript:;" class="link text-master inline action p-l-10 p-r-10" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
																			<i class="pg-arrow_left"></i>
																		</a>
																		<div class="view-heading">
																			John Smith
																			<div class="fs-11 hint-text">Online</div>
																		</div>
																		<a href="#" class="link text-master inline action p-r-10 pull-right ">
																			<i class="pg-more"></i>
																		</a>
																	</div>
																</div>
																<!-- END Header  !-->
																<!-- BEGIN Conversation  !-->
																<div class="chat-inner" id="my-conversation">
																	<!-- BEGIN From Me Message  !-->
																	<div class="message clearfix">
																		<div class="chat-bubble from-me">
																			Hello there
																		</div>
																	</div>
																	<!-- END From Me Message  !-->
																	<!-- BEGIN From Them Message  !-->
																	<div class="message clearfix">
																		<div class="profile-img-wrapper m-t-5 inline">
																			<img class="col-top" width="30" height="30" src="<?php echo base_url('assets');?>/img/profiles/avatar_small.jpg" alt="" data-src="<?php echo base_url('assets');?>/img/profiles/avatar_small.jpg" data-src-retina="<?php echo base_url('assets');?>/img/profiles/avatar_small2x.jpg">
																		</div>
																		<div class="chat-bubble from-them">
																			Hey
																		</div>
																	</div>
																	<!-- END From Them Message  !-->
																	<!-- BEGIN From Me Message  !-->
																	<div class="message clearfix">
																		<div class="chat-bubble from-me">
																			Did you check out Pages framework ?
																		</div>
																	</div>
																	<!-- END From Me Message  !-->
																	<!-- BEGIN From Me Message  !-->
																	<div class="message clearfix">
																		<div class="chat-bubble from-me">
																			Its an awesome chat
																		</div>
																	</div>
																	<!-- END From Me Message  !-->
																	<!-- BEGIN From Them Message  !-->
																	<div class="message clearfix">
																		<div class="profile-img-wrapper m-t-5 inline">
																			<img class="col-top" width="30" height="30" src="<?php echo base_url('assets');?>/img/profiles/avatar_small.jpg" alt="" data-src="<?php echo base_url('assets');?>/img/profiles/avatar_small.jpg" data-src-retina="<?php echo base_url('assets');?>/img/profiles/avatar_small2x.jpg">
																		</div>
																		<div class="chat-bubble from-them">
																			Yea
																		</div>
																	</div>
																	<!-- END From Them Message  !-->
																</div>
																<!-- BEGIN Conversation  !-->
																<!-- BEGIN Chat Input  !-->
																<div class="b-t b-grey bg-white clearfix p-l-10 p-r-10">
																	<div class="row">
																		<div class="col-1 p-t-15">
																			<a href="#" class="link text-master"><i class="fa fa-plus-circle"></i></a>
																		</div>
																		<div class="col-8 no-padding">
																			<input type="text" class="form-control chat-input" data-chat-input="" data-chat-conversation="#my-conversation" placeholder="Say something">
																		</div>
																		<div class="col-2 link text-master m-l-10 m-t-15 p-l-10 b-l b-grey col-top">
																			<a href="#" class="link text-master"><i class="pg-camera"></i></a>
																		</div>
																	</div>
																</div>
																<!-- END Chat Input  !-->
															</div>
															<!-- END Conversation View  !-->
														</div>
													</div>
												</div>
											</div>
											<!-- END QUICKVIEW-->
											<!-- START OVERLAY -->
											<div class="overlay hide" data-pages="search">
												<!-- BEGIN Overlay Content !-->
												<div class="overlay-content has-results m-t-20">
													<!-- BEGIN Overlay Header !-->
													<div class="container-fluid">
														<!-- BEGIN Overlay Logo !-->
														<img class="overlay-brand" src="<?php echo base_url('assets');?>/img/logo.png" alt="logo" data-src="<?php echo base_url('assets');?>/img/logo.png" data-src-retina="<?php echo base_url('assets');?>/img/logo_2x.png" width="78" height="22">
														<!-- END Overlay Logo !-->
														<!-- BEGIN Overlay Close !-->
														<a href="#" class="close-icon-light overlay-close text-black fs-16">
															<i class="pg-close"></i>
														</a>
														<!-- END Overlay Close !-->
													</div>
													<!-- END Overlay Header !-->
													<div class="container-fluid">
														<!-- BEGIN Overlay Controls !-->
														<input id="overlay-search" class="no-border overlay-search bg-transparent" placeholder="Search..." autocomplete="off" spellcheck="false">
														<br>
														<div class="inline-block">
															<div class="checkbox right">
																<input id="checkboxn" type="checkbox" value="1" checked="checked">
																<label for="checkboxn"><i class="fa fa-search"></i> Search within page</label>
															</div>
														</div>
														<div class="inline-block m-l-10">
															<p class="fs-13">Press enter to search</p>
														</div>
														<!-- END Overlay Controls !-->
													</div>
													<!-- BEGIN Overlay Search Results, This part is for demo purpose, you can add anything you like !-->
													<div class="container-fluid">
														<span>
															<strong>suggestions :</strong>
														</span>
														<span id="overlay-suggestions"></span>
														<br>
														<div class="search-results m-t-40">
															<p class="bold">Pages Search Results</p>
															<div class="row">
																<div class="col-md-6">
																	<!-- BEGIN Search Result Item !-->
																	<div class="">
																		<!-- BEGIN Search Result Item Thumbnail !-->
																		<div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
																			<div>
																				<img width="50" height="50" src="<?php echo base_url('assets');?>/img/profiles/avatar.jpg" data-src="<?php echo base_url('assets');?>/img/profiles/avatar.jpg" data-src-retina="<?php echo base_url('assets');?>/img/profiles/avatar2x.jpg" alt="">
																			</div>
																		</div>
																		<!-- END Search Result Item Thumbnail !-->
																		<div class="p-l-10 inline p-t-5">
																			<h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on pages</h5>
																			<p class="hint-text">via john smith</p>
																		</div>
																	</div>
																	<!-- END Search Result Item !-->
																	<!-- BEGIN Search Result Item !-->
																	<div class="">
																		<!-- BEGIN Search Result Item Thumbnail !-->
																		<div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
																			<div>T</div>
																		</div>
																		<!-- END Search Result Item Thumbnail !-->
																		<div class="p-l-10 inline p-t-5">
																			<h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> related topics</h5>
																			<p class="hint-text">via pages</p>
																		</div>
																	</div>
																	<!-- END Search Result Item !-->
																	<!-- BEGIN Search Result Item !-->
																	<div class="">
																		<!-- BEGIN Search Result Item Thumbnail !-->
																		<div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
																			<div><i class="fa fa-headphones large-text "></i>
																			</div>
																		</div>
																		<!-- END Search Result Item Thumbnail !-->
																		<div class="p-l-10 inline p-t-5">
																			<h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> music</h5>
																			<p class="hint-text">via pagesmix</p>
																		</div>
																	</div>
																	<!-- END Search Result Item !-->
																</div>
																<div class="col-md-6">
																	<!-- BEGIN Search Result Item !-->
																	<div class="">
																		<!-- BEGIN Search Result Item Thumbnail !-->
																		<div class="thumbnail-wrapper d48 circular bg-info text-white inline m-t-10">
																			<div><i class="fa fa-facebook large-text "></i>
																			</div>
																		</div>
																		<!-- END Search Result Item Thumbnail !-->
																		<div class="p-l-10 inline p-t-5">
																			<h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on facebook</h5>
																			<p class="hint-text">via facebook</p>
																		</div>
																	</div>
																	<!-- END Search Result Item !-->
																	<!-- BEGIN Search Result Item !-->
																	<div class="">
																		<!-- BEGIN Search Result Item Thumbnail !-->
																		<div class="thumbnail-wrapper d48 circular bg-complete text-white inline m-t-10">
																			<div><i class="fa fa-twitter large-text "></i>
																			</div>
																		</div>
																		<!-- END Search Result Item Thumbnail !-->
																		<div class="p-l-10 inline p-t-5">
																			<h5 class="m-b-5">Tweats on<span class="semi-bold result-name"> ice cream</span></h5>
																			<p class="hint-text">via twitter</p>
																		</div>
																	</div>
																	<!-- END Search Result Item !-->
																	<!-- BEGIN Search Result Item !-->
																	<div class="">
																		<!-- BEGIN Search Result Item Thumbnail !-->
																		<div class="thumbnail-wrapper d48 circular text-white bg-danger inline m-t-10">
																			<div><i class="fa fa-google-plus large-text "></i>
																			</div>
																		</div>
																		<!-- END Search Result Item Thumbnail !-->
																		<div class="p-l-10 inline p-t-5">
																			<h5 class="m-b-5">Circles on<span class="semi-bold result-name"> ice cream</span></h5>
																			<p class="hint-text">via google plus</p>
																		</div>
																	</div>
																	<!-- END Search Result Item !-->
																</div>
															</div>
														</div>
													</div>
													<!-- END Overlay Search Results !-->
												</div>
												<!-- END Overlay Content !-->
											</div>
											<!-- END OVERLAY -->
											<!-- BEGIN VENDOR JS -->
											<script src="<?php echo base_url('assets');?>/plugins/pace/pace.min.js" type="text/javascript"></script>
											<script src="<?php echo base_url('assets');?>/plugins/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
											<script src="<?php echo base_url('assets');?>/plugins/modernizr.custom.js" type="text/javascript"></script>
											<script src="<?php echo base_url('assets');?>/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
											<script src="<?php echo base_url('assets');?>/plugins/tether/js/tether.min.js" type="text/javascript"></script>
											<script src="<?php echo base_url('assets');?>/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
											<script src="<?php echo base_url('assets');?>/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
											<script src="<?php echo base_url('assets');?>/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
											<script src="<?php echo base_url('assets');?>/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>
											<script src="<?php echo base_url('assets');?>/plugins/jquery-actual/jquery.actual.min.js"></script>
											<script src="<?php echo base_url('assets');?>/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
											<script type="text/javascript" src="<?php echo base_url('assets');?>/plugins/select2/js/select2.full.min.js"></script>
											<script type="text/javascript" src="<?php echo base_url('assets');?>/plugins/classie/classie.js"></script>
											<script src="<?php echo base_url('assets');?>/plugins/switchery/js/switchery.min.js" type="text/javascript"></script>
											<script src="<?php echo base_url('assets');?>/plugins/bootstrap3-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
											<script type="text/javascript" src="<?php echo base_url('assets');?>/plugins/jquery-autonumeric/autoNumeric.js"></script>
											<script type="text/javascript" src="<?php echo base_url('assets');?>/plugins/dropzone/dropzone.min.js"></script>
											<script type="text/javascript" src="<?php echo base_url('assets');?>/plugins/bootstrap-tag/bootstrap-tagsinput.min.js"></script>
											<script type="text/javascript" src="<?php echo base_url('assets');?>/plugins/jquery-inputmask/jquery.inputmask.min.js"></script>
											<script src="<?php echo base_url('assets');?>/plugins/bootstrap-form-wizard/js/jquery.bootstrap.wizard.min.js" type="text/javascript"></script>
											<script src="<?php echo base_url('assets');?>/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
											<script src="<?php echo base_url('assets');?>/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
											<script src="<?php echo base_url('assets');?>/plugins/summernote/js/summernote.min.js" type="text/javascript"></script>
											<script src="<?php echo base_url('assets');?>/plugins/moment/moment.min.js"></script>
											<script src="<?php echo base_url('assets');?>/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
											<script src="<?php echo base_url('assets');?>/plugins/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
											<script src="<?php echo base_url('assets');?>/plugins/bootstrap-typehead/typeahead.bundle.min.js"></script>
											<script src="<?php echo base_url('assets');?>/plugins/bootstrap-typehead/typeahead.jquery.min.js"></script>
											<script src="<?php echo base_url('assets');?>/plugins/handlebars/handlebars-v4.0.5.js"></script>
											<!-- END VENDOR JS -->
											<!-- BEGIN CORE TEMPLATE JS -->
											<script src="<?php echo base_url('assets');?>/pages/js/pages.min.js"></script>
											<!-- END CORE TEMPLATE JS -->
											<!-- BEGIN PAGE LEVEL JS -->
											<script src="<?php echo base_url('assets');?>/js/form_elements.js" type="text/javascript"></script>
											<script src="<?php echo base_url('assets');?>/js/scripts.js" type="text/javascript"></script>
											<!-- END PAGE LEVEL JS -->
										</body>
										</html>