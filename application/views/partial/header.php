<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
		<meta name="author" content="GeeksLabs">
		<meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
		<!-- <link rel="shortcut icon" href="<?php //echo base_url('asset/img/favicon.png')?>"/> -->
		<title>Sistem Kepegawaian</title>
		<link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap.min.css')?>">  <!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap-theme.css')?>"/><!-- bootstrap theme -->
<!--external css-->
		<!-- font icon -->
		<link rel="stylesheet" href="<?php echo base_url('asset/css/elegant-icons-style.css')?>"/>
		<link rel="stylesheet" href="<?php echo base_url('asset/css/font-awesome.min.css')?>"/>
		<!-- full calendar css-->
		<!-- <link rel="stylesheet" href="<?php //echo base_url('asset/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css')?>"/>
		<link rel="stylesheet" href="<?php //echo base_url('asset/assets/fullcalendar/fullcalendar/fullcalendar.css')?>"/> -->
	  	<!-- easy pie chart-->
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('asset/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')?>"/>
		<!-- owl carousel -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/owl.carousel.css')?>"/>
		<link rel="stylesheet" href="<?php echo base_url('asset/css/jquery-jvectormap-1.2.2.css')?>"/>
		<!-- Custom styles -->
		<!-- <link rel="stylesheet" href="<?php //echo base_url('asset/css/fullcalendar.css')?>"/> -->
		<link rel="stylesheet" href="<?php echo base_url('asset/css/widgets.css')?>"/>
		<link rel="stylesheet" href="<?php echo base_url('asset/css/style.css')?>"/>
		<link rel="stylesheet" href="<?php echo base_url('asset/css/style-responsive.css')?>"/>
		<link rel="stylesheet" href="<?php echo base_url('asset/css/xcharts.min.css')?>"/>
		<link rel="stylesheet" href="<?php echo base_url('asset/css/jquery-ui-1.10.4.min.css')?>"/>
			
		<script src="<?php echo base_url('asset/js/jquery.js')?>"/></script>
		<script src="<?php echo base_url('asset/js/jquery-ui-1.10.4.min.js')?>"/></script>
		<script src="<?php echo base_url('asset/js/jquery-1.8.3.min.js')?>"/></script>
		<script type="text/javascript" src="<?php echo base_url('asset/js/jquery-ui-1.9.2.custom.min.js')?>"/></script>
		<!-- bootstrap -->
		<script src="<?php echo base_url('asset/js/bootstrap.min.js')?>"/></script>
		<!-- nice scroll -->
		<script src="<?php echo base_url('asset/js/jquery.scrollTo.min.js')?>"/></script>
		<script type="text/javascript" src="<?php echo base_url('asset/js/jquery.nicescroll.js')?>"/></script>
		<!-- charts scripts -->
		<script src="<?php echo base_url('asset/assets/jquery-knob/js/jquery.knob.js')?>"/></script>
		<script type="text/javascript" src="<?php echo base_url('asset/js/jquery.sparkline.js')?>"/></script>
		<script src="<?php echo base_url('asset/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')?>"/></script>
		<!-- <script src="<?php echo base_url('asset/assets/js/owl.carousel.js')?>"></script> -->
		<!-- jQuery full calendar -->
		<!-- <script src="<?php //echo base_url('asset/assets/js/fullcalendar.min.js')?>"/></script> -->
		<!-- Full Google Calendar - Calendar -->
		<!-- <script src="<?php //echo base_url('asset/assets/fullcalendar/fullcalendar/fullcalendar.js')?>"/></script> -->
		<!--script for this page only-->
		<!-- <script src="<?php //echo base_url('asset/js/calendar-custom.js')?>"/></script> -->
		<script src="<?php echo base_url('asset/js/jquery.rateit.min.js')?>"/></script>
		<!-- custom select -->
		<script src="<?php echo base_url('asset/js/jquery.customSelect.min.js')?>"/></script>
		<script src="<?php echo base_url('asset/assets/chart-master/Chart.js')?>"/></script>
		<!--custome script for all page-->
		<script src="<?php echo base_url('asset/js/scripts.js')?>"/></script>
		<!-- custom script for this page-->
		<script src="<?php echo base_url('asset/js/sparkline-chart.js')?>"/></script>
		<script src="<?php echo base_url('asset/js/easy-pie-chart.js')?>"/></script>
		<script src="<?php echo base_url('asset/js/jquery-jvectormap-1.2.2.min.js')?>"/></script>
		<script src="<?php echo base_url('asset/js/jquery-jvectormap-world-mill-en.js')?>"/></script>
		<script src="<?php echo base_url('asset/js/xcharts.min.js')?>"/></script>
		<script src="<?php echo base_url('asset/js/jquery.autosize.min.js')?>"/></script>
		<script src="<?php echo base_url('asset/js/jquery.placeholder.min.js')?>"/></script>
		<script src="<?php echo base_url('asset/js/gdp-data.js')?>"/></script>
		<script src="<?php echo base_url('asset/js/morris.min.js')?>"/></script>
		<script src="<?php echo base_url('asset/js/sparklines.js')?>"/></script>
		<script src="<?php echo base_url('asset/js/charts.js')?>"/></script>
		<script src="<?php echo base_url('asset/js/jquery.slimscroll.min.js')?>"/></script>
		
	</head>
	
	<body>
		<section id="container" class="">
			<header class="header dark-bg">
				<div class="toggle-nav">
					<div class="icon-reorder tooltips" data-original-title="Minimize" data-placement="bottom">
						<i class="icon_menu"></i>
					</div>
				</div>

				<a class="logo" href="<?php echo base_url('Utama')?>"/>
					SIS
					<span class="lite">
						KEP
					</span>
				</a>

				<div class="nav search-row" id="top_menu">
        			<ul class="nav top-menu"><!--  search form start -->
          				<li>
            				<form class="navbar-form">
              					<input class="form-control" placeholder="Search" type="text">
            				</form>
          				</li>
        			</ul><!--  search form end -->
      			</div>

      			<div class="top-nav notification-row">
        			<!-- notificatoin dropdown start-->
        			<ul class="nav pull-right top-menu">
          				<!-- user login dropdown start-->
          				<li class="dropdown">
            				<a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            	<span class="profile-ava">
                                	<img alt="" src="<?php echo base_url('asset/img/dian_small.jpg')?>"/>
                            	</span>
                            	<span class="username">Dian Adi Pratama</span>
                            	<b class="caret"></b>
                        	</a>
            
            				<ul class="dropdown-menu extended logout">
              					<div class="log-arrow-up"></div>
              					<li class="eborder-top">
                					<a href="#"><i class="icon_profile"></i> My Profile</a>
              					</li>
              					
              					<li>
                					<a href="#"><i class="icon_mail_alt"></i> My Inbox</a>
              					</li>
              					
              					<li>
                					<a href="#"><i class="icon_clock_alt"></i> Timeline</a>
              					</li>
              					
              					<li>
                					<a href="#"><i class="icon_chat_alt"></i> Chats</a>
              					</li>
              					
              					<li>
                					<a href="login.html"><i class="icon_key_alt"></i> Log Out</a>
              					</li>
              					
              					<li>
                					<a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
              					</li>
              					
              					<li>
                					<a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
              					</li>
            				</ul>
          				</li>
        			</ul>
      			</div>
			</header>