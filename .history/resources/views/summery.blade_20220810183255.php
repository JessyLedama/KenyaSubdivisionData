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
<body id="container">
    
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

            <!-- Summery -->
            <div class="market-updates">
                <div class="col-md-3 market-update-gd">
                    <div class="market-update-block clr-block-2">
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
                        <div class="col-md-8 market-update-left">
                            <h4> Wards </h4>
                            <h3>{{ $subCountiesCount }}</h3>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>	

            <!-- Regions List-->
            <div class="row">
                <div class="panel-body">
                    <div class="col-md-12 w3ls-graph">
                        <div class="agileinfo-grap">
                            <div class="agileits-box">
                                <header class="agileits-box-header clearfix">
                                    <h3>Regions List</h3>
                                </header>

                                <div class="agileits-box-body clearfix">
                                    <table>
                                        <thead>
                                            <th>Region name</th>
                                        </thead>
                                        <tbody>
                                            @foreach($regions as $region)
                                                <tr>
                                                    <td> {{ $region->name }} </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Counties -->
            <div class="col-md-6 agile-calendar">
                <div class="calendar-widget">
                    <div class="panel-heading ui-sortable-handle">
                        <span class="panel-title"> Counties List</span>
                    </div>
                    <!-- grids -->
                    <div class="agile-calendar-grid">
                        <div class="page">
                            <table>
                                <thead>
                                    <th>County name</th>
                                    <th> County Code </th>
                                </thead>
                                <tbody>
                                    @foreach($counties as $county)
                                        <tr>
                                            <td> {{ $county->county_name }} </td>
                                            <td> {{ $county->county_code }} </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sub Counties -->
            <div class="col-md-6 w3agile-notifications">
                <div class="notifications">
                    <!--Sub Counties-->
                    <header class="panel-heading">
                            Sub Counties List
                    </header>
                    <div class="notify-w3ls">
                        <table>
                            <thead>
                                <th>County name</th>
                                <th> County Code </th>
                            </thead>
                            <tbody>
                                @foreach($subCounties as $subCounty)
                                    <tr>
                                        <td> {{ $subCounty->name }} </td>
                                        <td> {{ $subCounty->county->county_name }} </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!--Sub Counties end-->
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
    <script type="text/javascript" src="assets/js/monthly.js"></script>
</body>
</html>
