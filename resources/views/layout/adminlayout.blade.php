<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link href="../assets/common/img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
    <link href="../assets/common/img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
    <link href="../assets/common/img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
    <link href="../assets/common/img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
    <link href="../assets/common/img/favicon.png" rel="icon" type="image/png">
    <link href="favicon.ico" rel="shortcut icon">

    <!-- HTML5 shim and Respond.js for < IE9 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Vendors Styles -->
    <!-- v1.0.0 -->
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/jscrollpane/style/jquery.jscrollpane.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/ladda/dist/ladda-themeless.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/select2/dist/css/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/fullcalendar/dist/fullcalendar.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/cleanhtmlaudioplayer/src/player.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/cleanhtmlvideoplayer/src/player.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/bootstrap-sweetalert/dist/sweetalert.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/summernote/dist/summernote.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/owl.carousel/dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/ionrangeslider/css/ion.rangeSlider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/datatables/media/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/c3/c3.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/chartist/dist/chartist.min.css')}}">
    <!-- v1.4.0 -->
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/nprogress/nprogress.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/jquery-steps/demo/css/jquery.steps.css')}}">
    <!-- v1.4.2 -->
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/bootstrap-select/dist/css/bootstrap-select.min.css')}}">
    <!-- v1.7.0 -->
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/dropify/dist/css/dropify.min.css')}}">

    <!-- Clean UI Styles -->
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/common/css/source/main.css')}}">
    <!-- Vendors Scripts -->
    <!-- v1.0.0 -->
    <script src="{{asset('vendors/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendors/tether/dist/js/tether.min.js')}}"></script>
    <script src="{{asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('vendors/jquery-mousewheel/jquery.mousewheel.min.js')}}"></script>
    <script src="{{asset('vendors/jscrollpane/script/jquery.jscrollpane.min.js')}}"></script>
    <script src="{{asset('vendors/spin.js/spin.js')}}"></script>
    <script src="{{asset('vendors/ladda/dist/ladda.min.js')}}"></script>
    <script src="{{asset('vendors/select2/dist/js/select2.full.min.js')}}"></script>
    <script src="{{asset('vendors/html5-form-validation/dist/jquery.validation.min.js')}}"></script>
    <script src="{{asset('vendors/jquery-typeahead/dist/jquery.typeahead.min.js')}}"></script>
    <script src="{{asset('vendors/jquery-mask-plugin/dist/jquery.mask.min.js')}}"></script>
    <script src="{{asset('vendors/autosize/dist/autosize.min.js')}}"></script>
    <script src="{{asset('vendors/bootstrap-show-password/bootstrap-show-password.min.js')}}"></script>
    <script src="{{asset('vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('vendors/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')}}"></script>
    <script src="{{asset('vendors/fullcalendar/dist/fullcalendar.min.js')}}"></script>
    <script src="{{asset('vendors/cleanhtmlaudioplayer/src/jquery.cleanaudioplayer.js')}}"></script>
    <script src="{{asset('vendors/cleanhtmlvideoplayer/src/jquery.cleanvideoplayer.js')}}"></script>
    <script src="{{asset('vendors/bootstrap-sweetalert/dist/sweetalert.min.js')}}"></script>
    <script src="{{asset('vendors/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js')}}"></script>
    <script src="{{asset('vendors/summernote/dist/summernote.min.js')}}"></script>
    <script src="{{asset('vendors/owl.carousel/dist/owl.carousel.min.js')}}"></script>
    <script src="{{asset('vendors/ionrangeslider/js/ion.rangeSlider.min.js')}}"></script>
    <script src="{{asset('vendors/nestable/jquery.nestable.js')}}"></script>
    <script src="{{asset('vendors/datatables/media/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendors/datatables/media/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('vendors/datatables-fixedcolumns/js/dataTables.fixedColumns.js')}}"></script>
    <script src="{{asset('vendors/datatables-responsive/js/dataTables.responsive.js')}}"></script>
    <script src="{{asset('vendors/editable-table/mindmup-editabletable.js')}}"></script>
    <script src="{{asset('vendors/d3/d3.min.js')}}"></script>
    <script src="{{asset('vendors/c3/c3.min.js')}}"></script>
    <script src="{{asset('vendors/chartist/dist/chartist.min.js')}}"></script>
    <script src="{{asset('vendors/peity/jquery.peity.min.js')}}"></script>
    <!-- v1.0.1 -->
    <script src="{{asset('vendors/chartist-plugin-tooltip/dist/chartist-plugin-tooltip.min.js')}}"></script>
    <!-- v1.1.1 -->
    <script src="{{asset('vendors/gsap/src/minified/TweenMax.min.js')}}"></script>
    <script src="{{asset('vendors/hackertyper/hackertyper.js')}}"></script>
    <script src="{{asset('vendors/jquery-countTo/jquery.countTo.js')}}"></script>
    <!-- v1.4.0 -->
    <script src="{{asset('vendors/nprogress/nprogress.js')}}"></script>
    <script src="{{asset('vendors/jquery-steps/build/jquery.steps.min.js')}}"></script>
    <!-- v1.4.2 -->
    <script src="{{asset('vendors/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('vendors/chart.js/src/Chart.bundle.min.js')}}"></script>
    <!-- v1.7.0 -->
    <script src="{{asset('vendors/dropify/dist/js/dropify.min.js')}}"></script>

    <!-- Clean UI Scripts -->
    <script src="{{asset('vendors/common/js/common.js')}}"></script>
    <script src="{{asset('vendors/common/js/demo.temp.js')}}"></script>
	<style>
								.no-pade{padding: 0 !important;}
								.active-btn{background: green none repeat scroll 0 0 !important;}
								.inactive-btn{background-color: #f00 !important;}
								* {margin: 0; padding: 0;}

.tree ul {
	padding-top: 20px; position: relative;
	
	transition: all 0.5s;
	-webkit-transition: all 0.5s;
	-moz-transition: all 0.5s;
}

.tree li {
	float: left; text-align: center;
	list-style-type: none;
	position: relative;
	padding: 20px 5px 0 5px;
	
	transition: all 0.5s;
	-webkit-transition: all 0.5s;
	-moz-transition: all 0.5s;
}



.tree li::before, .tree li::after{
	content: '';
	position: absolute; top: 0; right: 50%;
	border-top: 2px solid #ccc;
	width: 50%; height: 20px;
}
.tree li::after{
	right: auto; left: 50%;
	border-left: 2px solid #ccc;
}


.tree li:only-child::after, .tree li:only-child::before {
	display: none;
}

.tree li:only-child{ padding-top: 0;}


.tree li:first-child::before, .tree li:last-child::after{
	border: 0 none;
}
.tree li:last-child::before{
	border-right: 2px solid #ccc;
	border-radius: 0 5px 0 0;
	-webkit-border-radius: 0 5px 0 0;
	-moz-border-radius: 0 5px 0 0;
}
.tree li:first-child::after{
	border-radius: 5px 0 0 0;
	-webkit-border-radius: 5px 0 0 0;
	-moz-border-radius: 5px 0 0 0;
}

.tree ul ul::before{
	content: '';
	position: absolute; top: 0; left: 50%;
	border-left: 2px solid #ccc;
	width: 0; height: 20px;
}

.tree li a{
	border: 2px solid #ccc;
	padding: 5px 12px;
	text-decoration: none;
	color: #fff;
	font-family: arial, verdana, tahoma;
	font-size: 14px;
	display: inline-block;
	background-color: #004da6;	
	border-radius: 5px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	
	transition: all 0.5s;
	-webkit-transition: all 0.5s;
	-moz-transition: all 0.5s;
}

.tree li a:hover, .tree li a:hover+ul li a {
	background: #c8e4f8; color: #000; border: 2px solid #94a0b4;
}
.tree li a:hover+ul li::after, 
.tree li a:hover+ul li::before, 
.tree li a:hover+ul::before, 
.tree li a:hover+ul ul::before{
	border-color:  #94a0b4;
}

.tree-struc .choose-port1 {
  float: left;
  font-size: 18px;
  font-weight: 700;
  margin-bottom: 25px;
  margin-right: 20px;
}
.tree-struc select {
  float: left;
  width: 250px;
}
							</style>
</head>
<body class="theme-dark menu-top menu-static colorful-enabled" ng-controller="MainCtrl">
<nav class="left-menu" left-menu>
    <div class="logo-container">
        <a href="{{url('admin/dashboard')}}" class="logo">
            <img src="{{asset('vendors/common/img/ppm_logo.png')}}" alt="Staging" />
            <img class="logo-inverse" src="{{asset('vendors/common/img/ppm_logo.png')}}" alt="Staging" />
        </a>
    </div>
    <div class="left-menu-inner scroll-pane">
        <ul class="left-menu-list left-menu-list-root list-unstyled">
          
			<li class="left-menu-list-submenu">
				<a class="left-menu-link" href="">
					<i class="left-menu-link-icon icmn-files-empty2 util-spin-delayed-pseudo"><!-- --></i>
					Blog Management
				</a>
				<ul class="left-menu-list list-unstyled">
					<li>
						<a class="left-menu-link" href="{{url('admin/blog')}}">
							Blog
						</a>
					</li>
					
				</ul>
			</li>
			
			<li class="left-menu-list-separator"><!-- --></li>
            <li class="left-menu-list-submenu">
                <a class="left-menu-link" href="javascript: void(0);">
                    <i class="left-menu-link-icon icmn-files-empty2 util-spin-delayed-pseudo"><!-- --></i>
                    User Management
                </a>
                <ul class="left-menu-list list-unstyled">
                    <li>
                        <a class="left-menu-link" href="{{url('admin/user')}}">
                            Users
                        </a>
                    </li>
                    
                </ul>
            </li>
			
            <li class="left-menu-list-separator"><!-- --></li>
            <li class="menu-top-hidden no-colorful-menu">
                <div class="left-menu-item">
                    Last Week Sales
                </div>
            </li>
            <li class="menu-top-hidden no-colorful-menu">
                <div class="example-left-menu-chart chartist-animated chartist-theme-dark"></div>
                <script>
                    $(function () {
                        // CSS STYLING & ANIMATIONS
                        var cssAnimationData = {
                                labels: ["S", "M", "T", "W", "T", "F", "S"],
                                series: [
                                    [11, 14, 24, 16, 20, 16, 24]
                                ]
                            },
                            cssAnimationOptions = {
                                fullWidth: !0,
                                chartPadding: {
                                    right: 2,
                                    left: 30
                                },
                                axisY: {
                                    position: 'end'
                                }
                            },
                            cssAnimationResponsiveOptions = [
                                [{
                                    axisX: {
                                        labelInterpolationFnc: function(value, index) {
                                            return index % 2 !== 0 ? !1 : value
                                        }
                                    }
                                }]
                            ];

                        new Chartist.Line(".example-left-menu-chart", cssAnimationData, cssAnimationOptions, cssAnimationResponsiveOptions);

                    });
                </script>
            </li>
            <li class="menu-top-hidden no-colorful-menu">
                <div class="left-menu-item">
                    Solar System
                </div>
            </li>
            <li class="menu-top-hidden">
                <div class="left-menu-item">
                    <span class="donut donut-success"></span> Jupiter
                </div>
            </li>
            <li class="menu-top-hidden">
                <div class="left-menu-item">
                    <span class="donut donut-primary"></span> Earth
                </div>
            </li>
            <li class="menu-top-hidden">
                <div class="left-menu-item">
                    <span class="donut donut-danger"></span> Mercury
                </div>
            </li>
        </ul>
    </div>
</nav>
<style>
.head-brd{
	border: 0px;
}
.por-struc{
	padding: 15px 100px 30px;
}
.choose-port {
  font-size: 18px;
  font-weight: 700;
  margin-bottom: 25px;
}
.submit-btn {
  text-align: center;
}
.btn12{
	padding: 7px 30px;
}
.por-struc .form-group {
  text-align: center;
}
</style>

			
<nav class="top-menu">
    <div class="menu-icon-container hidden-md-up">
        <div class="animate-menu-button left-menu-toggle">
            <div><!-- --></div>
        </div>
    </div>
    <div class="menu">
        <div class="menu-user-block">
            <div class="dropdown dropdown-avatar">
                <a href="javascript: void(0);" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <span class="avatar" href="javascript:void(0);">
                        <img src="{{asset('vendors/common/img/temp/avatars/1.jpg')}}" alt="Alternative text to the image">
                    </span>
                </a>
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="" role="menu">
                    <a class="dropdown-item" href="{{url('admin/profile/1/edit')}}"><i class="dropdown-icon icmn-user"></i> Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ url('admin/logout') }}"><i class="dropdown-icon icmn-exit"></i> Logout</a>
                </ul>
            </div>
        </div>
        <!--div class="menu-user-block menu-notifications">
            <div class="dropdown dropdown-avatar">
                <a href="javascript: void(0);" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <i class="menu-notification-icon icmn-bubbles7"></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="" role="menu">
                    <div class="notification-block">
                        <div class="item">
                            <i class="notification-icon icmn-star-full"></i>
                            <div class="inner">
                                <div class="title">
                                    <span class="pull-right">now</span>
                                    <a href="javascript: void(0);">Update Status: <span class="label label-danger font-weight-700">New</span></a>
                                </div>
                                <div class="descr">
                                    Failed to get available update data. To ensure the proper functioning of your application, update now.
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <i class="notification-icon icmn-stack3"></i>
                            <div class="inner">
                                <div class="title">
                                    <span class="pull-right">24 min ago</span>
                                    <a href="javascript: void(0);">Income: <span class="label label-default font-weight-700">$299.00</span></a>
                                </div>
                                <div class="descr">
                                    Failed to get available update data. To ensure the proper functioning of your application, update now.
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <i class="notification-icon icmn-bubbles5"></i>
                            <div class="inner">
                                <div class="title">
                                    <span class="pull-right">30 min ago</span>
                                    <a href="javascript: void(0);">Inbox Message</a>
                                </div>
                                <div class="descr">
                                    From: <a href="javascript: void(0);">David Bowie</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <i class="notification-icon icmn-pie-chart2"></i>
                            <div class="inner">
                                <div class="title">
                                    <span class="pull-right">now</span>
                                    <a href="javascript: void(0);">Update Status: <span class="label label-primary font-weight-700">New</span></a>
                                </div>
                                <div class="descr">
                                    Failed to get available update data. To ensure the proper functioning of your application, update now.
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <i class="notification-icon icmn-books"></i>
                            <div class="inner">
                                <div class="title">
                                    <span class="pull-right">24 min ago</span>
                                    <a href="javascript: void(0);">Income: <span class="label label-warning font-weight-700">$299.00</span></a>
                                </div>
                                <div class="descr">
                                    Failed to get available update data. To ensure the proper functioning of your application, update now.
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <i class="notification-icon icmn-cog util-spin-delayed-pseudo"></i>
                            <div class="inner">
                                <div class="title">
                                    <span class="pull-right">30 min ago</span>
                                    <a href="javascript: void(0);">Inbox Message</a>
                                </div>
                                <div class="descr">
                                    From: <a href="javascript: void(0);">David Bowie</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </ul>
            </div>
        </div-->
        <div class="menu-info-block">
            <!--div class="left">
                <div class="header-buttons">
                    <div class="dropdown">
                        <a href="javascript: void(0);" class="dropdown-toggle dropdown-inline-button" data-toggle="dropdown" aria-expanded="false">
                            <i class="dropdown-inline-button-icon icmn-folder-open"></i>
                            <span class="hidden-lg-down">Issues History</span>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="" role="menu">
                            <a class="dropdown-item" href="javascript:void(0)">Current search</a>
                            <a class="dropdown-item" href="javascript:void(0)">Search for issues</a>
                            <div class="dropdown-divider"></div>
                            <div class="dropdown-header">Opened</div>
                            <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon icmn-checkmark"></i> CLNUI-253 Project implemen...</a>
                            <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon icmn-checkmark"></i> CLNUI-234 Active history iss...</a>
                            <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon icmn-clock"></i> CLNUI-424 Ionicons intergrat...</a>
                            <a class="dropdown-item" href="javascript:void(0)">More...</a>
                            <div class="dropdown-divider"></div>
                            <div class="dropdown-header">Filters</div>
                            <a class="dropdown-item" href="javascript:void(0)">My open issues</a>
                            <a class="dropdown-item" href="javascript:void(0)">Reported by me</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0)">Import issues from CSV</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon icmn-cog"></i> Settings</a>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <a href="javascript: void(0);" class="dropdown-toggle dropdown-inline-button" data-toggle="dropdown" aria-expanded="false">
                            <i class="dropdown-inline-button-icon icmn-database"></i>
                            <span class="hidden-lg-down">Dashboards</span>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="" role="menu">
                            <div class="dropdown-header">Active</div>
                            <a class="dropdown-item" href="javascript:void(0)">Project Management</a>
                            <a class="dropdown-item" href="javascript:void(0)">User Inetrface Development</a>
                            <a class="dropdown-item" href="javascript:void(0)">Documentation</a>
                            <div class="dropdown-header">Inactive</div>
                            <a class="dropdown-item" href="javascript:void(0)">Marketing</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon icmn-cog"></i> Settings</a>
                        </ul>
                    </div>
                </div>
            </div-->
            <!--div class="left hidden-md-down">
                <div class="example-top-menu-chart">
                    <span class="title">Income:</span>
                    <span class="chart" id="topMenuChart">1,3,2,0,3,1,2,3,5,2</span>
                    <span class="count">425.00 USD</span>

                   
                    <script>
                        $(function () {

                            var topMenuChart = $("#topMenuChart").peity("bar", {
                                fill: ['#01a8fe'],
                                height: 22,
                                width: 44
                            });

                            setInterval(function() {
                                var random = Math.round(Math.random() * 10);
                                var values = topMenuChart.text().split(",");
                                values.shift();
                                values.push(random);
                                topMenuChart.text(values.join(",")).change()
                            }, 1000);

                        });
                    </script>
                   
                </div>
            </div-->
            <div class="right hidden-md-down margin-left-20">
                <div class="search-block">
                    <div class="form-input-icon form-input-icon-right">
                        <i class="icmn-search"></i>
                        <input type="text" class="form-control form-control-sm form-control-rounded" placeholder="Search...">
                        <button type="submit" class="search-block-submit "></button>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</nav>

<section class="page-content">
<div class="page-content-inner">

     @section('body')
            @show
</div>


<!-- Page Scripts -->
<script>

        $(function(){
            $('#example3').DataTable({
                scrollX: true,
                lengthMenu: [[50, 100, 200, -1], [50, 100, 200, "All"]],
                responsive: true,
                autoWidth: false
            });
        });
    
	
    $(function() {

        ///////////////////////////////////////////////////////////
        // COUNTERS
        $('.counter-init').countTo({
            speed: 1500
        });

        ///////////////////////////////////////////////////////////
        // ADJUSTABLE TEXTAREA
        autosize($('#textarea'));

        ///////////////////////////////////////////////////////////
        // CUSTOM SCROLL
        if (!cleanUI.hasTouch) {
            $('.custom-scroll').each(function() {
                $(this).jScrollPane({
                    autoReinitialise: true,
                    autoReinitialiseDelay: 100
                });
                var api = $(this).data('jsp'),
                        throttleTimeout;
                $(window).bind('resize', function() {
                    if (!throttleTimeout) {
                        throttleTimeout = setTimeout(function() {
                            api.reinitialise();
                            throttleTimeout = null;
                        }, 50);
                    }
                });
            });
        }

        ///////////////////////////////////////////////////////////
        // CALENDAR
        $('.example-calendar-block').fullCalendar({
            //aspectRatio: 2,
            height: 450,
            header: {
                left: 'prev, next',
                center: 'title',
                right: 'month, agendaWeek, agendaDay'
            },
            buttonIcons: {
                prev: 'none fa fa-arrow-left',
                next: 'none fa fa-arrow-right',
                prevYear: 'none fa fa-arrow-left',
                nextYear: 'none fa fa-arrow-right'
            },
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            viewRender: function(view, element) {
                if (!cleanUI.hasTouch) {
                    $('.fc-scroller').jScrollPane({
                        autoReinitialise: true,
                        autoReinitialiseDelay: 100
                    });
                }
            },
            defaultDate: '2016-05-12',
            events: [
                {
                    title: 'All Day Event',
                    start: '2016-05-01',
                    className: 'fc-event-success'
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: '2016-05-09T16:00:00',
                    className: 'fc-event-default'
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: '2016-05-16T16:00:00',
                    className: 'fc-event-success'
                },
                {
                    title: 'Conference',
                    start: '2016-05-11',
                    end: '2016-05-14',
                    className: 'fc-event-danger'
                }
            ],
            eventClick: function(calEvent, jsEvent, view) {
                if (!$(this).hasClass('event-clicked')) {
                    $('.fc-event').removeClass('event-clicked');
                    $(this).addClass('event-clicked');
                }
            }
        });

        ///////////////////////////////////////////////////////////
        // CAROUSEL WIDGET
        $('.carousel-widget').carousel({
            interval: 4000
        });

        $('.carousel-widget-2').carousel({
            interval: 6000
        });

        ///////////////////////////////////////////////////////////
        // DATATABLES
        $('#example1').DataTable({
            responsive: true,
            "lengthMenu": [[5, 25, 50, -1], [5, 25, 50, "All"]]
        });

        ///////////////////////////////////////////////////////////
        // CHART 1
        new Chartist.Line(".chart-line", {
            labels: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
            series: [
                [12, 9, 7, 8, 5],
                [2, 1, 3.5, 7, 3],
                [1, 3, 4, 5, 6]
            ]
        }, {
            fullWidth: !0,
            chartPadding: {
                right: 40
            },
            plugins: [
                Chartist.plugins.tooltip()
            ]
        });

        ///////////////////////////////////////////////////////////
        // CHART 2
        var overlappingData = {
                    labels: ["Jan", "Feb", "Mar", "Apr", "Mai", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                    series: [
                        [5, 4, 3, 7, 5, 10, 3, 4, 8, 10, 6, 8],
                        [3, 2, 9, 5, 4, 6, 4, 6, 7, 8, 7, 4]
                    ]
                },
                overlappingOptions = {
                    seriesBarDistance: 10,
                    plugins: [
                        Chartist.plugins.tooltip()
                    ]
                },
                overlappingResponsiveOptions = [
                    ["", {
                        seriesBarDistance: 5,
                        axisX: {
                            labelInterpolationFnc: function(value) {
                                return value[0]
                            }
                        }
                    }]
                ];

        new Chartist.Bar(".chart-overlapping-bar", overlappingData, overlappingOptions, overlappingResponsiveOptions);


    });
</script>
<!-- End Page Scripts -->
 
</section>

  <script>
            $(function(){

                $('.select2').select2();
                $('.select2-tags').select2({
                    tags: true,
                    tokenSeparators: [',', ' ']
                });

                $('.selectpicker').selectpicker();

            })
            
            $('.datepicker-only-init').datetimepicker({
				widgetPositioning: {
					horizontal: 'left'
				},
				icons: {
					time: "fa fa-clock-o",
					date: "fa fa-calendar",
					up: "fa fa-arrow-up",
					down: "fa fa-arrow-down"
				},
				format: 'YYYY-MM-DD'
			});
        </script>
        <!-- End Page Scripts -->

<div class="cwt__footer visible-footer">
    <!--div class="cwt__footer__top">
        <div class="row">
            <div class="col-lg-6">
                <div class="cwt__footer__title cwt__footer__title--light">
                    Check Out Preselected Demos
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="list-unstyled">
                            <li><a target="_blank" href="http://cleanuitemplate.com/version_angular/index.html#/dashboards/alpha" class="cwt__footer__link">Vertical Menu (Default)</a></li>
                            <li><a target="_blank" href="http://cleanuitemplate.com/version_angular/index_menu_shadow_superclean.html#/ecommerce/products-catalog" class="cwt__footer__link">Ecommerce Version</a></li>
                            <li><a target="_blank" href="http://cleanuitemplate.com/version_angular/index_horizontal_boxed_container.html#/dashboards/alpha" class="cwt__footer__link">Horizontal Menu + Boxed Container</a></li>
                            <li><a target="_blank" href="http://cleanuitemplate.com/version_angular/index_iconbar.html#/dashboards/alpha" class="cwt__footer__link">Iconbar Vertical Menu</a></li>
                            <li><a target="_blank" href="http://cleanuitemplate.com/version_angular/index_inverse.html#/dashboards/alpha" class="cwt__footer__link">Inverse Color Scheme</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul class="list-unstyled">
                            <li><a target="_blank" href="http://cleanuitemplate.com/version_angular/index_menu_shadow_superclean.html#/dashboards/alpha" class="cwt__footer__link">Super Clean Mode + Menu Shadow</a></li>
                            <li><a target="_blank" href="http://cleanuitemplate.com/version_angular/index_horizontal.html#/dashboards/alpha" class="cwt__footer__link">Horizontal Menu</a></li>
                            <li><a target="_blank" href="http://cleanuitemplate.com/version_angular/index_horizontal_compact.html#/dashboards/alpha" class="cwt__footer__link">Compact Horizontal Menu</a></li>
                            <li><a target="_blank" href="http://cleanuitemplate.com/version_angular/index_boxed.html#/dashboards/alpha" class="cwt__footer__link">Vertical Menu + Boxed</a></li>
                            <li><a target="_blank" href="http://cleanuitemplate.com/version_angular/index_horizontal_boxed.html#/dashboards/alpha" class="cwt__footer__link">Horizontal Menu + Boxed</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="cwt__footer__title">
                    Clean UI Admin Template
                </div>
                <div class="cwt__footer__description">
                    <p>Clean UI – a modern professional admin template, based on Bootstrap 4
                        framework. Clean UI is a powerful and super flexible tool, which suits best for any
                        kind of web application: Web Applications; CRM; CMS; Admin Panels; Dashboards; etc.
                        Clean UI is fully responsive, which means that it looks perfect on mobiles and
                        tablets</p>

                    <p>Clean UI is fully based on SASS pre-processor, includes 50+ commented SASS files.
                        Each file corresponds to a single component, layout, page, plugin or extension –
                        so you can easily find necessary piece of code and edit it for your needs.
                        The package includes both normal and minified CSS files, compiled from SASS</p>
                </div>
            </div>
        </div>
    </div-->
    <div class="cwt__footer__bottom">
        <div class="row">
            <div class="col-md-4">
			<img class="cwt__footer__company-logo" src="{{asset('vendors/common/img/ppm_logo.png')}}" target="_blank" title="PPM HUB">
			
                <a>
                  
                </a>
            </div>
            <div class="col-md-8">
                <div class="cwt__footer__company">
                    
                    <span>
                        © 2017 <a href="xyz.com.au" class="cwt__footer__link" target="_blank">Staging</a>
                        <br>
                        All rights reserved
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="main-backdrop"><!-- --></div>

</body>
</html>