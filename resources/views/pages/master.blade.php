<!doctype html>

<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Dashboard | JSOFT Themes | JSOFT-Admin</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="JSOFT Admin - Responsive HTML5 Template">
		<meta name="author" content="JSOFT.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{url('frontend/assets/vendor/bootstrap/css/bootstrap.css')}}" />
		<link rel="stylesheet" href="{{url('frontend/assets/vendor/font-awesome/css/font-awesome.css')}}" />
		<link rel="stylesheet" href="{{url('frontend/assets/vendor/magnific-popup/magnific-popup.css')}}" />
		<link rel="stylesheet" href="{{url('frontend/assets/vendor/bootstrap-datepicker/css/datepicker3.css')}}" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="{{url('frontend/assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css')}}" />
		<link rel="stylesheet" href="{{url('frontend/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css')}}" />
		<link rel="stylesheet" href="{{url('frontend/assets/vendor/morris/morris.css')}}" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{url('frontend/assets/stylesheets/theme.css')}}" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="{{url('frontend/assets/stylesheets/skins/default.css')}}" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{url('frontend/assets/stylesheets/theme-custom.css')}}">

		<!-- Head Libs -->
		<script src="{{url('frontend/assets/vendor/modernizr/modernizr.js')}}"></script>

	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="../" class="logo">
						<img src="{{url('frontend/assets/images/logo.png')}}" height="35" alt="JSOFT Admin" />
					</a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
			
				<!-- start: search & user box -->
				<div class="header-right">
			
					<form action="pages-search-results.html" class="search nav-form">
						<div class="input-group input-search">
							<input type="text" class="form-control" name="q" id="q" placeholder="Search...">
							<span class="input-group-btn">
								<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
							</span>
						</div>
					</form>
			
					<span class="separator"></span>
			
					<ul class="notifications">
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
								<i class="fa fa-tasks"></i>
								<span class="badge">3</span>
							</a>
			
							<div class="dropdown-menu notification-menu large">
								<div class="notification-title">
									<span class="pull-right label label-default">3</span>
									Tasks
								</div>
			
								<div class="content">
									<ul>
										<li>
											<p class="clearfix mb-xs">
											<span class="message pull-left">Like</span>
											<span class="message pull-right text-dark">90%</span>
											</p>
											<div class="progress progress-xs light">
												<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
											</div>
										</li>
			
										<li>
											<p class="clearfix mb-xs">
											<span class="message pull-left">DisLike</span>
											<span class="message pull-right text-dark">50%</span>
											</p>
											<div class="progress progress-xs light">
												<div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
											</div>
										</li>
			
										<li>
											<p class="clearfix mb-xs">
												<span class="message pull-left">Comment</span>
												<span class="message pull-right text-dark">33%</span>
											</p>
											<div class="progress progress-xs light mb-xs">
												<div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%;"></div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</li>
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
								<i class="fa fa-envelope"></i>
								<span class="badge">4</span>
							</a>
			
							<div class="dropdown-menu notification-menu">
								<div class="notification-title">
									<span class="pull-right label label-default">4</span>
									Contact Person
								</div>
			
								<div class="content">
									<ul>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="{{url('frontend/assets/images/!sample-user.jpg')}}" alt="Yuniar Ayu" class="img-circle" />
												</figure>
												<span class="title">Yuniar Ayu</span>
												<span class="message">Lorem ipsum dolor sit.</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="{{url('frontend/assets/images/!sample-user.jpg')}}" alt="Malvina Sania" class="img-circle" />
												</figure>
												<span class="title">Malvina Sania</span>
												<span class="message truncate">Truncated message. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam, nec venenatis risus. Vestibulum blandit faucibus est et malesuada. Sed interdum cursus dui nec venenatis. Pellentesque non nisi lobortis, rutrum eros ut, convallis nisi. Sed tellus turpis, dignissim sit amet tristique quis, pretium id est. Sed aliquam diam diam, sit amet faucibus tellus ultricies eu. Aliquam lacinia nibh a metus bibendum, eu commodo eros commodo. Sed commodo molestie elit, a molestie lacus porttitor id. Donec facilisis varius sapien, ac fringilla velit porttitor et. Nam tincidunt gravida dui, sed pharetra odio pharetra nec. Duis consectetur venenatis pharetra. Vestibulum egestas nisi quis elementum elementum.</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="{{url('frontend/assets/images/!sample-user.jpg')}}" alt="Putri Maunatul" class="img-circle" />
												</figure>
												<span class="title">Putri Maunatul</span>
												<span class="message">Lorem ipsum dolor sit.</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="{{url('frontend/assets/images/!sample-user.jpg')}}" alt="Sani Destiani" class="img-circle" />
												</figure>
												<span class="title">Sani Destiani</span>
												<span class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam.</span>
											</a>
										</li>
									</ul>
			
									<hr />
			
									<div class="text-right">
										<a href="#" class="view-more">View All</a>
									</div>
								</div>
							</div>
						</li>
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
								<i class="fa fa-bell"></i>
								<span class="badge">3</span>
							</a>
			
							<div class="dropdown-menu notification-menu">
								<div class="notification-title">
									<span class="pull-right label label-default">3</span>
									Alerts
								</div>
			
								<div class="content">
									<ul>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fa fa-thumbs-down bg-danger"></i>
												</div>
												<span class="title">Server is Down!</span>
												<span class="message">Just now</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fa fa-lock bg-warning"></i>
												</div>
												<span class="title">User Locked</span>
												<span class="message">15 minutes ago</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fa fa-signal bg-success"></i>
												</div>
												<span class="title">Connection Restaured</span>
												<span class="message">10/10/2014</span>
											</a>
										</li>
									</ul>
			
									<hr />
			
									<div class="text-right">
										<a href="#" class="view-more">View All</a>
									</div>
								</div>
							</div>
						</li>
					</ul>
			
					<span class="separator"></span>
			
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src="{{url('frontend/assets/images/!logged-user.jpg')}}" alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/!logged-user.jpg" />
							</figure>
							<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@JSOFT.com">
								<span class="name">Yuniar Ayu</span>
								<span class="role">administrator</span>
							</div>
			
							<i class="fa custom-caret"></i>
						</a>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">
				
					<div class="sidebar-header">
						<div class="sidebar-title">
							Navigation
						</div>
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>
				
					<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">
									<li class="nav-active">
										<a href="/dashboard">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Dashboard</span>
										</a>
									</li>
									<li>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-copy" aria-hidden="true"></i>
											<span>Input Data</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="/input">
													 Input Rumah Sakit
												</a>
											</li>
											<li>
												<a href="/fasilitas">
													 Input Fasilitas
												</a>
											</li>
											<li>
												<a href="/jenis">
													 Input Jenis
												</a>
											</li>
										</ul>
									</li>
									
									<li class="nav-parent">
										<a>
											<i class="fa fa-map-marker" aria-hidden="true"></i>
											<span>Maps</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="maps-google-maps.html">
													 RSUD Malingping
												</a>
											</li>
											<li>
												<a href="maps-google-maps-builder.html">
													 RSUD Misi
												</a>
											</li>
											<li>
												<a href="maps-vector.html">
													 RSUD Kartini
												</a>
											</li>
											<li>
												<a href="maps-vector.html">
													 RSUD
												</a>
											</li>
										</ul>
									</li>
									<li class="nav-parent">
										<ul class="nav nav-children">
											<li>
												<a href="layouts-default.html">
													 Default
												</a>
											</li>
											<li>
												<a href="layouts-boxed.html">
													 Boxed
												</a>
											</li>
											<li>
												<a href="layouts-menu-collapsed.html">
													 Menu Collapsed
												</a>
											</li>
											<li>
												<a href="layouts-scroll.html">
													 Scroll
												</a>
											</li>
										</ul>
									</li>
									
									<li>
										<a href="http://themeforest.net/item/JSOFT-responsive-html5-template/4106987?ref=JSOFT" target="_blank">
											<i class="fa fa-external-link" aria-hidden="true"></i>
											<span>Front-End <em class="not-included">(Not Included)</em></span>
										</a>
									</li>
								</ul>
							</nav>
				
							<hr class="separator" />
				
							<div class="sidebar-widget widget-tasks">
							</div>
				
							<hr class="separator" />
				
							
						</div>
				
					</div>
				
				</aside>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>MEJORATE</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Input Data</span></li>
							</ol>

					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>
				
					<div class="row">
						<div class="col-lg-16 col-md-20">
							@yield('content')
						</div>
						
					</div>
					<!-- end: page -->
				</section>
			</div>

			<aside id="sidebar-right" class="sidebar-right">
				<div class="nano">
					<div class="nano-content">
						<a href="#" class="mobile-close visible-xs">
							Collapse <i class="fa fa-chevron-right"></i>
						</a>
			
						<div class="sidebar-right-wrapper">
			
							<div class="sidebar-widget widget-calendar">
								<h6>Upcoming Tasks</h6>
								<div data-plugin-datepicker data-plugin-skin="dark" ></div>
			
								<ul>
									<li>
										<time datetime="2014-04-19T00:00+00:00">04/19/2014</time>
										<span>Company Meeting</span>
									</li>
								</ul>
							</div>
			
						</div>
					</div>
				</div>
			</aside>
		</section>

		<!-- Vendor -->
		<script src="{{url('frontend/assets/vendor/jquery/jquery.js') }}"></script>
		<script src="{{url('frontend/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>
		<script src="{{url('frontend/assets/vendor/bootstrap/js/bootstrap.js') }}"></script>
		<script src="{{url('frontend/assets/vendor/nanoscroller/nanoscroller.js') }}"></script>
		<script src="{{url('frontend/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
		<script src="{{url('frontend/assets/vendor/magnific-popup/magnific-popup.js') }}"></script>
		<script src="{{url('frontend/assets/vendor/jquery-placeholder/jquery.placeholder.js') }}"></script>
		
		<!-- Specific Page Vendor -->
		<script src="{{url('frontend/assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js') }}"></script>
		<script src="{{url('frontend/assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js') }}"></script>
		<script src="{{url('frontend/assets/vendor/jquery-appear/jquery.appear.js') }}"></script>
		<script src="{{url('frontend/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js') }}"></script>
		<script src="{{url('frontend/assets/vendor/jquery-easypiechart/jquery.easypiechart.js') }}"></script>
		<script src="{{url('frontend/assets/vendor/flot/jquery.flot.js') }}"></script>
		<script src="{{url('frontend/assets/vendor/flot-tooltip/jquery.flot.tooltip.js') }}"></script>
		<script src="{{url('frontend/assets/vendor/flot/jquery.flot.pie.js') }}"></script>
		<script src="{{url('frontend/assets/vendor/flot/jquery.flot.categories.js') }}"></script>
		<script src="{{url('frontend/assets/vendor/flot/jquery.flot.resize.js') }}"></script>
		<script src="{{url('frontend/assets/vendor/jquery-sparkline/jquery.sparkline.js') }}"></script>
		<script src="{{url('frontend/assets/vendor/raphael/raphael.js') }}"></script>
		<script src="{{url('frontend/assets/vendor/morris/morris.js') }}"></script>
		<script src="{{url('frontend/assets/vendor/gauge/gauge.js') }}"></script>
		<script src="{{url('frontend/assets/vendor/snap-svg/snap.svg.js') }}"></script>
		<script src="{{url('frontend/assets/vendor/liquid-meter/liquid.meter.js') }}"></script>
		<script src="{{url('frontend/assets/vendor/jqvmap/jquery.vmap.js') }}"></script>
		<script src="{{url('frontend/assets/vendor/jqvmap/data/jquery.vmap.sampledata.js') }}"></script>
		<script src="{{url('frontend/assets/vendor/jqvmap/maps/jquery.vmap.world.js') }}"></script>
		<script src="{{url('frontend/assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js') }}"></script>
		<script src="{{url('frontend/assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js') }}"></script>
		<script src="{{url('frontend/assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js') }}"></script>
		<script src="{{url('frontend/assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js') }}"></script>
		<script src="{{url('frontend/assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js') }}"></script>
		<script src="{{url('frontend/assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js') }}"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="{{url('frontend/assets/javascripts/theme.js') }}"></script>
		
		<!-- Theme Custom -->
		<script src="{{url('frontend/assets/javascripts/theme.custom.js') }}"></script>
		
		<!-- Theme Initialization Files -->
		<script src="{{url('frontend/assets/javascripts/theme.init.js') }}"></script>


		<!-- Examples -->
		<script src="{{url('frontend/assets/javascripts/dashboard/examples.dashboard.js') }}"></script>
	</body>
</html>