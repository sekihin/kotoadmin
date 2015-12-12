<!doctype html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Supr admin</title>
    <meta name="author" content="SuggeElson" />
    <meta name="description" content="Supr admin template - new premium responsive admin template. This template is designed to help you build the site administration without losing valuable time.Template contains all the important functions which must have one backend system.Build on great twitter boostrap framework" />
    <meta name="keywords" content="admin, admin template, admin theme, responsive, responsive admin, responsive admin template, responsive theme, themeforest, 960 grid system, grid, grid theme, liquid, masonry, jquery, administration, administration template, administration theme, mobile, touch , responsive layout, boostrap, twitter boostrap" />
    <meta name="application-name" content="Supr admin template" />

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Force IE9 to render in normla mode -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- Le styles -->
    <!-- Use new way for google web fonts 
    http://www.smashingmagazine.com/2012/07/11/avoiding-faux-weights-styles-google-web-fonts -->
    <!-- Headings -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css' />  -->
    <!-- Text -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css' /> --> 
    <!--[if lt IE 9]>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:700" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Droid+Sans:400" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Droid+Sans:700" rel="stylesheet" type="text/css" />
    <![endif]-->

    <!-- Core stylesheets do not remove -->
    <link id="bootstrap" href="{{ URL::asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('css/bootstrap/bootstrap-theme.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('css/supr-theme/jquery.ui.supr.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ URL::asset('css/icons.css') }}" rel="stylesheet" type="text/css" />

    <!-- Plugin stylesheets -->
    <link href="{{ URL::asset('plugins/misc/qtip/jquery.qtip.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('plugins/forms/uniform/uniform.default.css') }}" type="text/css" rel="stylesheet" />

    <!-- Main stylesheets -->
    <link href="{{ URL::asset('css/main.css') }}" rel="stylesheet" type="text/css" />

    <!-- Custom stylesheets ( Put your own changes here ) -->
    <link href="{{ URL::asset('css/custom.css') }}" rel="stylesheet" type="text/css" />

    <!--[if IE 8]><link href="{{ URL::asset('css/ie8.css') }}" rel="stylesheet" type="text/css" /><![endif]-->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script type="text/javascript" src="{{ URL::asset('js/libs/excanvas.min.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('js/libs/html5.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('js/libs/respond.min.js') }}"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/favicon.ico" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ URL::asset('images/apple-touch-icon-144-precomposed.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ URL::asset('images/apple-touch-icon-114-precomposed.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ URL::asset('images/apple-touch-icon-72-precomposed.png') }}" />
    <link rel="apple-touch-icon-precomposed" href="{{ URL::asset('images/apple-touch-icon-57-precomposed.png') }}" />
    
    <!-- Windows8 touch icon ( http://www.buildmypinnedsite.com/ )-->
    <meta name="application-name" content="Supr"/> 
    <meta name="msapplication-TileColor" content="#3399cc"/> 

    <!-- Load modernizr first -->
    <script type="text/javascript" src="{{ URL::asset('js/libs/modernizr.js') }}"></script>
</head>

<body>
    <!-- loading animation -->
    <div id="qLoverlay"></div>
    <div id="qLbar"></div>

    <div id="header">
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header"> <a class="navbar-brand" href="dashboard.html">Supr.<span class="slogan">admin</span></a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon16 icomoon-icon-arrow-4"></span> </button>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-right usernav">
                    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="icon16 icomoon-icon-bell"></span><span class="notification">3</span> </a>
                        <ul class="dropdown-menu">
                            <li class="menu">
                                <ul class="notif">
                                    <li class="header"><strong>Notifications</strong> (3) items</li>
                                    <li> <a href="#"> <span class="icon"><span class="icon16 icomoon-icon-user-plus"></span></span> <span class="event">1 User is registred</span> </a> </li>
                                    <li> <a href="#"> <span class="icon"><span class="icon16 icomoon-icon-bubble-3"></span></span> <span class="event">Jony add 1 comment</span> </a> </li>
                                    <li> <a href="#"> <span class="icon"><span class="icon16 icomoon-icon-new"></span></span> <span class="event">admin Julia added post with a long description</span> </a> </li>
                                    <li class="view-all"><a href="#">View all notifications <span class="icon16 icomoon-icon-arrow-right-8"></span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown"> <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"> <img src="images/avatar.jpg" alt="" class="image" /> <span class="txt">admin@supr.com</span> <b class="caret"></b> </a>
                        <ul class="dropdown-menu">
                            <li class="menu">
                                <ul>
                                    <li><a href="#"><span class="icon16 icomoon-icon-user-plus"></span>Edit profile</a></li>
                                    <li><a href="#"><span class="icon16 icomoon-icon-bubble-2"></span>Approve comments</a></li>
                                    <li><a href="#"><span class="icon16 icomoon-icon-plus"></span>Add user</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="index.html"><span class="icon16 icomoon-icon-exit"></span><span class="txt"> Logout</span></a></li>
                </ul>
            </div>
            <!-- /.nav-collapse -->
        </nav>
        <!-- /navbar -->
    </div>
    <!-- End #header -->

    <div class="wrapper">
        @section('sidebar')
            <div id="sidebarbg" class=""></div>
            <div class="collapseBtn leftbar"> <a href="#" class="tipR" title="Hide sidebar"><i class="s16 minia-icon-list-3"></i></span></a> </div>
            <div id="sidebar" class="page-sidebar collapse-sidebar">
                <div class="shortcuts">
                    <ul>
                        <li><a href="support.html" title="Support section" class="tip"><span class="icon24 icomoon-icon-support"></span></a></li>
                        <li><a href="#" title="Database backup" class="tip"><span class="icon24 icomoon-icon-database"></span></a></li>
                        <li><a href="charts.html" title="Sales statistics" class="tip"><span class="icon24 icomoon-icon-pie-2"></span></a></li>
                        <li><a href="#" title="Write post" class="tip"><span class="icon24 icomoon-icon-pencil"></span></a></li>
                    </ul>
                </div>
                <!-- End search -->
                <div class="sidenav">
                    <div class="sidebar-widget" style="margin: -1px 0 0 0;">
                        <h5 class="title" style="margin-bottom:0">Navigation</h5>
                    </div>
                    <!-- End .sidenav-widget -->
                    <div class="mainnav">
                        <ul>
                            <li><a href="dashboard.html"><span class="icon16 icomoon-icon-dashboard"></span>Dashboard</a></li>
                            <li> <a href="#"><span class="icon16 icomoon-icon-truck"></span>Manage Purchase</a>
                                <ul class="sub">
                                    <li><a href="#"><span class="icon16 icomoon-icon-gift"></span>Supplier</a>
                                        <ul class="sub">
                                            <li><a href="#"><span class="icon16 icomoon-icon-arrow-right-3"></span>Add Supplier</a></li>
                                            <li><a href="#"><span class="icon16 icomoon-icon-arrow-right-3"></span>Manage Supplier</a></li>
                                        </ul>
                                    </li>
                                    <li> <a href="#"><span class="icon16 silk-icon-credit-card"></span>Purchase<span class="notification red">new</span></a>
                                        <ul class="sub">
                                            <li><a href="#"><span class="icon16 icomoon-icon-arrow-right-3"></span>New Purchase</a></li>
                                            <li><a href="#"><span class="icon16 icomoon-icon-arrow-right-3"></span>Purchase History</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li> <a href="#"><span class="icon16 icomoon-icon-grid-3"></span>Product</a>
                                <ul class="sub">
                                    <li><a href="#"><span class="icon16 icomoon-icon-arrow-right-3"></span>Add Product</a></li>
                                    <li><a href="#"><span class="icon16 icomoon-icon-arrow-right-3"></span>Manage Product</a></li>
                                    <li><a href="#"><span class="icon16 icomoon-icon-arrow-right-3"></span>Barcode Print</a></li>
                                    <li><a href="#"><span class="icon16 icomoon-icon-arrow-right-3"></span>Damage Product</a></li>
                                    <li><a href="#"><span class="icon16 icomoon-icon-arrow-right-3"></span>Category</a>
                                        <ul class="sub">
                                            <li><a href="#"><span class="icon16 icomoon-icon-arrow-right-3"></span>Product Category</a></li>
                                            <li><a href="#"><span class="icon16 icomoon-icon-arrow-right-3"></span>Sub Category</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li> <a href="#"><span class="icon16 icomoon-icon-cart"></span>Order Process</a>
                                <ul class="sub">
                                    <li><a href="#"><span class="icon16 icomoon-icon-cart-plus"></span>New Order</a></li>
                                    <li><a href="#"><span class="icon16 icomoon-icon-calculate-2"></span>Manage Order</a></li>
                                    <li><a href="#"><span class="icon16 icomoon-icon-copy-2"></span>Manage Invoice</a></li>
                                </ul>
                            </li>
                            <li> <a href="#"><span class="icon16 icomoon-icon-user"></span>Customer</a>
                                <ul class="sub">
                                    <li><a href="#"><span class="icon16 icomoon-icon-user-plus-2"></span>Add Customer</a></li>
                                    <li><a href="#"><span class="icon16 icomoon-icon-vcard"></span>Manage Customer</a></li>
                                </ul>
                            </li>
                            <li> <a href="#"><span class="icon16 icomoon-icon-stats"></span>Report</a>
                                <ul class="sub">
                                    <li><a href="#"><span class="icon16 icomoon-icon-stats-up"></span>Sales Report</a></li>
                                    <li><a href="#"><span class="icon16 icomoon-icon-bars"></span>Purchase Report</a></li>
                                </ul>
                            </li>
                            <li> <a href="#"><span class="icon16 icomoon-icon-paper-plane"></span>Email Campaign</a>
                                <ul class="sub">
                                    <li><a href="#"><span class="icon16 icomoon-icon-mail-2"></span>New campaign</a></li>
                                    <li><a href="#"><span class="icon16 icomoon-icon-file-4"></span>Manage Campaign</a></li>
                                    <li><a href="#"><span class="icon16 icomoon-icon-megaphone"></span>Camaign Result</a></li>
                                </ul>
                            </li>
                            <li> <a href="#"><span class="icon16 icomoon-icon-cogs"></span>Settings</a>
                                <ul class="sub">
                                    <li><a href="#"><span class="icon16 icomoon-icon-briefcase-3"></span>Business Profile</a></li>
                                    <li><a href="#"><span class="icon16 icomoon-icon-folder-open-2"></span>Manage Tax Rules</a></li>
                                </ul>
                            </li>
                            <li> <a href="#"><span class="icon16 icomoon-icon-users"></span>Employee</span></a>
                                <ul class="sub">
                                    <li><a href="#"><span class="icon16 icomoon-icon-list"></span>Employee List</a></li>
                                    <li><a href="#"><span class="icon16 icomoon-icon-user-plus"></span>Add Employee</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End sidenav -->
                <!-- End .sidenav-widget -->
            </div>
            <!-- End #sidebar -->
        @show
        @yield('content')
    </div>

    <!-- Le javascript
    ================================================== -->
    <!-- Important plugins put in all pages -->
    <script type="text/javascript" src="{{ URL::asset('js/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery/jquery-migrate-1.2.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery/plugins/jquery.mousewheel.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery/plugins/jRespond.min.js') }}"></script>

    <!-- Charts plugins -->
    <script type="text/javascript" src="{{ URL::asset('js/jquery/plugins/charts/sparkline/jquery.sparkline.min.js') }}"></script><!-- Sparkline plugin -->
    <!-- Misc plugins -->
    <script type="text/javascript" src="{{ URL::asset('js/jquery/plugins/misc/qtip/jquery.qtip.min.js') }}"></script>
    <!-- Custom tooltip plugin -->
    <script type="text/javascript" src="{{ URL::asset('js/jquery/plugins/misc/totop/jquery.ui.totop.min.js') }}"></script>

    <!-- Search plugin -->
    <script type="text/javascript" src="{{ URL::asset('js/jquery/plugins/misc/search/tipuesearch_set.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery/plugins/misc/search/tipuesearch_data.js') }}"></script><!-- JSON for searched results -->
    <script type="text/javascript" src="{{ URL::asset('js/jquery/plugins/misc/search/tipuesearch.js') }}"></script>

    <!-- Form plugins -->
    <script type="text/javascript" src="{{ URL::asset('js/jquery/plugins/forms/uniform/jquery.uniform.min.js') }}"></script>

    <!-- Init plugins -->
    <script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script><!-- Core js functions -->
    <script type="text/javascript" src="{{ URL::asset('js/empty.js') }}"></script><!-- Init plugins only for page -->
</body>
</html>