<!--A Design by Jessy Ledama
Author: Jessy Ledama
Author URL: http://simitechnologies.co.ke
License: MIT 
-->
<!DOCTYPE html>
    <head>
        <title> Kenya Counties Data </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
        Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- bootstrap-css -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" >
        <!-- //bootstrap-css -->
        <!-- Custom CSS -->
        <link href="assets/css/style.css" rel='stylesheet' type='text/css' />
        <link href="assets/css/style-responsive.css" rel="stylesheet"/>
        <!-- font CSS -->
        <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <!-- font-awesome icons -->
        <link rel="stylesheet" href="assets/css/font.css" type="text/css"/>
        <link href="assets/css/font-awesome.css" rel="stylesheet"> 
        <link rel="stylesheet" href="assets/css/morris.css" type="text/css"/>
        <!-- calendar -->
        <link rel="stylesheet" href="assets/css/monthly.css">
        <!-- //calendar -->
        <!-- //font-awesome icons -->
        <script src="assets/js/jquery2.0.3.min.js"></script>
        <script src="assets/js/raphael-min.js"></script>
        <script src="assets/js/morris.js"></script>
    </head>
<body>
    <section id="container">
        <!--header start-->
        <header class="header fixed-top clearfix">
            <!--logo start-->
            <div class="brand">
                <a href="{{ route('data.index') }}" class="logo">
                    KENYA DATA
                </a>
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars"></div>
                </div>
            </div>
            <!--logo end-->
        </header>
        <!--header end-->

        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse">
                <!-- sidebar menu start-->
                <div class="leftside-navigation">
                    <ul class="sidebar-menu" id="nav-accordion">
                        <li>
                            <a class="active" href="{{ route('regions.index') }}">
                                <i class="fa fa-dashboard"></i>
                                <span>Regions</span>
                            </a>
                        </li>
                        
                        <li>
                            <a href="{{ route('counties.index') }}">
                                <i class="fa fa-bullhorn"></i>
                                <span>Counties </span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('subCounties.index') }}">
                                <i class="fa fa-bullhorn"></i>
                                <span>Sub Counties </span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('subCounties.index') }}">
                                <i class="fa fa-bullhorn"></i>
                                <span>Wards </span>
                            </a>
                        </li>
                    </ul>            
                </div>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->

        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
                <!-- //regions-->
                <div class="market-updates">
                    <div class="col-md-3 market-update-gd">
                        <div class="market-update-block clr-block-2">
                            <div class="col-md-4 market-update-right">
                                <i class="fa fa-eye"> </i>
                            </div>
                            <div class="col-md-8 market-update-left">
                                <h4>Regions</h4>
                                <h3>{{ $regionsCount }}</h3>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>

                    <!-- Counties -->
                    <div class="col-md-3 market-update-gd">
                        <div class="market-update-block clr-block-1">
                            <div class="col-md-4 market-update-right">
                                <i class="fa fa-users" ></i>
                            </div>
                            <div class="col-md-8 market-update-left">
                                <h4>Counties</h4>
                                <h3>{{ $countiesCount }}</h3>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>

                    <!-- Sub Counties -->
                    <div class="col-md-3 market-update-gd">
                        <div class="market-update-block clr-block-3">
                            <div class="col-md-4 market-update-right">
                                <i class="fa fa-usd"></i>
                            </div>
                            <div class="col-md-8 market-update-left">
                                <h4>Sub Counties</h4>
                                <h3>{{ $subCountiesCount }}</h3>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>

                    <!-- Wards -->
                    <div class="col-md-3 market-update-gd">
                        <div class="market-update-block clr-block-4">
                            <div class="col-md-4 market-update-right">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            </div>
                            <div class="col-md-8 market-update-left">
                                <h4> Wards </h4>
                                <h3>{{ $subCountiesCount }}</h3>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                <div class="clearfix"> </div>
                </div>	
                <!-- //market-->
                <div class="row">
                    <div class="panel-body">
                        <div class="col-md-12 w3ls-graph">
                            <!--agileinfo-grap-->
                                <div class="agileinfo-grap">
                                    <div class="agileits-box">
                                        <header class="agileits-box-header clearfix">
                                            <h3>Visitor Statistics</h3>
                                                <div class="toolbar">
                                                    
                                                    
                                                </div>
                                        </header>
                                        <div class="agileits-box-body clearfix">
                                            <div id="hero-area"></div>
                                        </div>
                                    </div>
                                </div>
            <!--//agileinfo-grap-->

                        </div>
                    </div>
                </div>
                <div class="agil-info-calendar">
                <!-- calendar -->
                <div class="col-md-6 agile-calendar">
                    <div class="calendar-widget">
                        <div class="panel-heading ui-sortable-handle">
                            <span class="panel-icon">
                            <i class="fa fa-calendar-o"></i>
                            </span>
                            <span class="panel-title"> Calendar Widget</span>
                        </div>
                        <!-- grids -->
                            <div class="agile-calendar-grid">
                                <div class="page">
                                    
                                    <div class="w3l-calendar-left">
                                        <div class="calendar-heading">
                                            
                                        </div>
                                        <div class="monthly" id="mycalendar"></div>
                                    </div>
                                    
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                    </div>
                </div>
                <!-- //calendar -->
                <div class="col-md-6 w3agile-notifications">
                    <div class="notifications">
                        <!--notification start-->
                        
                            <header class="panel-heading">
                                Notification 
                            </header>
                            <div class="notify-w3ls">
                                <div class="alert alert-info clearfix">
                                    <span class="alert-icon"><i class="fa fa-envelope-o"></i></span>
                                    <div class="notification-info">
                                        <ul class="clearfix notification-meta">
                                            <li class="pull-left notification-sender"><span><a href="#">Jonathan Smith</a></span> send you a mail </li>
                                            <li class="pull-right notification-time">1 min ago</li>
                                        </ul>
                                        <p>
                                            Urgent meeting for next proposal
                                        </p>
                                    </div>
                                </div>
                                <div class="alert alert-danger">
                                    <span class="alert-icon"><i class="fa fa-facebook"></i></span>
                                    <div class="notification-info">
                                        <ul class="clearfix notification-meta">
                                            <li class="pull-left notification-sender"><span><a href="#">Jonathan Smith</a></span> mentioned you in a post </li>
                                            <li class="pull-right notification-time">7 Hours Ago</li>
                                        </ul>
                                        <p>
                                            Very cool photo jack
                                        </p>
                                    </div>
                                </div>
                                <div class="alert alert-success ">
                                    <span class="alert-icon"><i class="fa fa-comments-o"></i></span>
                                    <div class="notification-info">
                                        <ul class="clearfix notification-meta">
                                            <li class="pull-left notification-sender">You have 5 message unread</li>
                                            <li class="pull-right notification-time">1 min ago</li>
                                        </ul>
                                        <p>
                                            <a href="#">Anjelina Mewlo, Jack Flip</a> and <a href="#">3 others</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="alert alert-warning ">
                                    <span class="alert-icon"><i class="fa fa-bell-o"></i></span>
                                    <div class="notification-info">
                                        <ul class="clearfix notification-meta">
                                            <li class="pull-left notification-sender">Domain Renew Deadline 7 days ahead</li>
                                            <li class="pull-right notification-time">5 Days Ago</li>
                                        </ul>
                                        <p>
                                            Next 5 July Thursday is the last day
                                        </p>
                                    </div>
                                </div>
                                <div class="alert alert-info clearfix">
                                    <span class="alert-icon"><i class="fa fa-envelope-o"></i></span>
                                    <div class="notification-info">
                                        <ul class="clearfix notification-meta">
                                            <li class="pull-left notification-sender"><span><a href="#">Jonathan Smith</a></span> send you a mail </li>
                                            <li class="pull-right notification-time">1 min ago</li>
                                        </ul>
                                        <p>
                                            Urgent meeting for next proposal
                                        </p>
                                    </div>
                                </div>
                                
                            </div>
                        
                        <!--notification end-->
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                    <!-- tasks -->
                    <div class="agile-last-grids">
                        <div class="col-md-4 agile-last-left">
                            <div class="agile-last-grid">
                                <div class="area-grids-heading">
                                    <h3>Monthly</h3>
                                </div>
                                <div id="graph7"></div>
                                <script>
                                // This crosses a DST boundary in the UK.
                                Morris.Area({
                                element: 'graph7',
                                data: [
                                    {x: '2013-03-30 22:00:00', y: 3, z: 3},
                                    {x: '2013-03-31 00:00:00', y: 2, z: 0},
                                    {x: '2013-03-31 02:00:00', y: 0, z: 2},
                                    {x: '2013-03-31 04:00:00', y: 4, z: 4}
                                ],
                                xkey: 'x',
                                ykeys: ['y', 'z'],
                                labels: ['Y', 'Z']
                                });
                                </script>

                            </div>
                        </div>
                        <div class="col-md-4 agile-last-left agile-last-middle">
                            <div class="agile-last-grid">
                                <div class="area-grids-heading">
                                    <h3>Daily</h3>
                                </div>
                                <div id="graph8"></div>
                                <script>
                                /* data stolen from http://howmanyleft.co.uk/vehicle/jaguar_'e'_type */
                                var day_data = [
                                {"period": "2016-10-01", "licensed": 3407, "sorned": 660},
                                {"period": "2016-09-30", "licensed": 3351, "sorned": 629},
                                {"period": "2016-09-29", "licensed": 3269, "sorned": 618},
                                {"period": "2016-09-20", "licensed": 3246, "sorned": 661},
                                {"period": "2016-09-19", "licensed": 3257, "sorned": 667},
                                {"period": "2016-09-18", "licensed": 3248, "sorned": 627},
                                {"period": "2016-09-17", "licensed": 3171, "sorned": 660},
                                {"period": "2016-09-16", "licensed": 3171, "sorned": 676},
                                {"period": "2016-09-15", "licensed": 3201, "sorned": 656},
                                {"period": "2016-09-10", "licensed": 3215, "sorned": 622}
                                ];
                                Morris.Bar({
                                element: 'graph8',
                                data: day_data,
                                xkey: 'period',
                                ykeys: ['licensed', 'sorned'],
                                labels: ['Licensed', 'SORN'],
                                xLabelAngle: 60
                                });
                                </script>
                            </div>
                        </div>
                        <div class="col-md-4 agile-last-left agile-last-right">
                            <div class="agile-last-grid">
                                <div class="area-grids-heading">
                                    <h3>Yearly</h3>
                                </div>
                                <div id="graph9"></div>
                                <script>
                                var day_data = [
                                {"elapsed": "I", "value": 34},
                                {"elapsed": "II", "value": 24},
                                {"elapsed": "III", "value": 3},
                                {"elapsed": "IV", "value": 12},
                                {"elapsed": "V", "value": 13},
                                {"elapsed": "VI", "value": 22},
                                {"elapsed": "VII", "value": 5},
                                {"elapsed": "VIII", "value": 26},
                                {"elapsed": "IX", "value": 12},
                                {"elapsed": "X", "value": 19}
                                ];
                                Morris.Line({
                                element: 'graph9',
                                data: day_data,
                                xkey: 'elapsed',
                                ykeys: ['value'],
                                labels: ['value'],
                                parseTime: false
                                });
                                </script>

                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                <!-- //tasks -->
                <div class="agileits-w3layouts-stats">
                            <div class="col-md-4 stats-info widget">
                                <div class="stats-info-agileits">
                                    <div class="stats-title">
                                        <h4 class="title">Browser Stats</h4>
                                    </div>
                                    <div class="stats-body">
                                        <ul class="list-unstyled">
                                            <li>GoogleChrome <span class="pull-right">85%</span>  
                                                <div class="progress progress-striped active progress-right">
                                                    <div class="bar green" style="width:85%;"></div> 
                                                </div>
                                            </li>
                                            <li>Firefox <span class="pull-right">35%</span>  
                                                <div class="progress progress-striped active progress-right">
                                                    <div class="bar yellow" style="width:35%;"></div>
                                                </div>
                                            </li>
                                            <li>Internet Explorer <span class="pull-right">78%</span>  
                                                <div class="progress progress-striped active progress-right">
                                                    <div class="bar red" style="width:78%;"></div>
                                                </div>
                                            </li>
                                            <li>Safari <span class="pull-right">50%</span>  
                                                <div class="progress progress-striped active progress-right">
                                                    <div class="bar blue" style="width:50%;"></div>
                                                </div>
                                            </li>
                                            <li>Opera <span class="pull-right">80%</span>  
                                                <div class="progress progress-striped active progress-right">
                                                    <div class="bar light-blue" style="width:80%;"></div>
                                                </div>
                                            </li>
                                            <li class="last">Others <span class="pull-right">60%</span>  
                                                <div class="progress progress-striped active progress-right">
                                                    <div class="bar orange" style="width:60%;"></div>
                                                </div>
                                            </li> 
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 stats-info stats-last widget-shadow">
                                <div class="stats-last-agile">
                                    <table class="table stats-table ">
                                        <thead>
                                            <tr>
                                                <th>S.NO</th>
                                                <th>PRODUCT</th>
                                                <th>STATUS</th>
                                                <th>PROGRESS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Lorem ipsum</td>
                                                <td><span class="label label-success">In progress</span></td>
                                                <td><h5>85% <i class="fa fa-level-up"></i></h5></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Aliquam</td>
                                                <td><span class="label label-warning">New</span></td>
                                                <td><h5>35% <i class="fa fa-level-up"></i></h5></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Lorem ipsum</td>
                                                <td><span class="label label-danger">Overdue</span></td>
                                                <td><h5 class="down">40% <i class="fa fa-level-down"></i></h5></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td>Aliquam</td>
                                                <td><span class="label label-info">Out of stock</span></td>
                                                <td><h5>100% <i class="fa fa-level-up"></i></h5></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">5</th>
                                                <td>Lorem ipsum</td>
                                                <td><span class="label label-success">In progress</span></td>
                                                <td><h5 class="down">10% <i class="fa fa-level-down"></i></h5></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">6</th>
                                                <td>Aliquam</td>
                                                <td><span class="label label-warning">New</span></td>
                                                <td><h5>38% <i class="fa fa-level-up"></i></h5></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
        </section>
        <!-- footer -->
        <div class="footer">
            <div class="wthree-copyright">
                <p>© 2022 Kenya Counties Data. All rights reserved.</p>
            </div>
        </div>
        <!-- / footer -->
    </section>
    <!--main content end-->
</section>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="assets/js/scripts.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="assets/js/jquery.scrollTo.js"></script>
<!-- morris JavaScript -->	
<script>
	$(document).ready(function() {
		//BOX BUTTON SHOW AND CLOSE
	   jQuery('.small-graph-box').hover(function() {
		  jQuery(this).find('.box-button').fadeIn('fast');
	   }, function() {
		  jQuery(this).find('.box-button').fadeOut('fast');
	   });
	   jQuery('.small-graph-box .box-close').click(function() {
		  jQuery(this).closest('.small-graph-box').fadeOut(200);
		  return false;
	   });
	   
	    //CHARTS
	    function gd(year, day, month) {
			return new Date(year, month - 1, day).getTime();
		}
		
		graphArea2 = Morris.Area({
			element: 'hero-area',
			padding: 10,
        behaveLikeLine: true,
        gridEnabled: false,
        gridLineColor: '#dddddd',
        axes: true,
        resize: true,
        smooth:true,
        pointSize: 0,
        lineWidth: 0,
        fillOpacity:0.85,
			data: [
				{period: '2015 Q1', iphone: 2668, ipad: null, itouch: 2649},
				{period: '2015 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
				{period: '2015 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
				{period: '2015 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
				{period: '2016 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
				{period: '2016 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
				{period: '2016 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
				{period: '2016 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
				{period: '2017 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
			
			],
			lineColors:['#eb6f6f','#926383','#eb6f6f'],
			xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
			pointSize: 2,
			hideHover: 'auto',
			resize: true
		});
		
	   
	});
	</script>
<!-- calendar -->
	<script type="text/javascript" src="assets/js/monthly.js"></script>
	<script type="text/javascript">
		$(window).load( function() {

			$('#mycalendar').monthly({
				mode: 'event',
				
			});

			$('#mycalendar2').monthly({
				mode: 'picker',
				target: '#mytarget',
				setWidth: '250px',
				startHidden: true,
				showTrigger: '#mytarget',
				stylePast: true,
				disablePast: true
			});

		switch(window.location.protocol) {
		case 'http:':
		case 'https:':
		// running on a server, should be good.
		break;
		case 'file:':
		alert('Just a heads-up, events will not work when run locally.');
		}

		});
	</script>
	<!-- //calendar -->
</body>
</html>
