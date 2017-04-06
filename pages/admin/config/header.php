<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

 <!-- BEGIN HEAD -->
<head>
  <meta charset="UTF-8" />
  <title>BCORE Admin Dashboard Template | Advance Forms</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
    <!-- GLOBAL STYLES -->
    <base href="http://localhost/pmb/assets/" />
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/theme.css" />
    <link rel="stylesheet" href="css/MoneAdmin.css" />
    <link rel="stylesheet" href="plugins/Font-Awesome/css/font-awesome.css" />
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->

    <link href="css/jquery-ui.css" rel="stylesheet" />
    <link rel="stylesheet" href="plugins/uniform/themes/default/css/uniform.default.css" />
    <link rel="stylesheet" href="plugins/inputlimiter/jquery.inputlimiter.1.0.css" />
    <link rel="stylesheet" href="plugins/chosen/chosen.min.css" />
    <link rel="stylesheet" href="plugins/colorpicker/css/colorpicker.css" />
    <link rel="stylesheet" href="plugins/tagsinput/jquery.tagsinput.css" />
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css" />
    <link rel="stylesheet" href="plugins/datepicker/css/datepicker.css" />
    <link rel="stylesheet" href="plugins/timepicker/css/bootstrap-timepicker.min.css" />
    <link rel="stylesheet" href="plugins/switch/static/stylesheets/bootstrap-switch.css" />

    <!-- END PAGE LEVEL  STYLES -->
   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>
     <!-- END HEAD -->
     <!-- BEGIN BODY -->
<body class="padTop53 " >
    <!-- MAIN WRAPPER -->
    <div id="wrap">
        <!-- HEADER SECTION -->
        <div id="top">
            <nav class="navbar navbar-inverse navbar-fixed-top " style="padding-top: 10px;">
                <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
                    <i class="icon-align-justify"></i>
                </a>
                <!-- LOGO SECTION -->
                <header class="navbar-header">
                    <a href="index.html" class="navbar-brand">
                    <img src="img/logo1.png" alt="" /></a>
                </header>
                <!-- END LOGO SECTION -->
                <ul class="nav navbar-top-links navbar-right">

                    <!-- MESSAGES SECTION -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <span class="label label-success">2</span>    <i class="icon-envelope-alt"></i>&nbsp; <i class="icon-chevron-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-messages">
                            <li>
                                <a href="#">
                                    <div>
                                       <strong>John Smith</strong>
                                        <span class="pull-right text-muted">
                                            <em>Today</em>
                                        </span>
                                    </div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing.
                                        <br />
                                        <span class="label label-primary">Important</span>

                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>Raphel Jonson</strong>
                                        <span class="pull-right text-muted">
                                            <em>Yesterday</em>
                                        </span>
                                    </div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing.
                                         <br />
                                        <span class="label label-success"> Moderate </span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>Chi Ley Suk</strong>
                                        <span class="pull-right text-muted">
                                            <em>26 Jan 2014</em>
                                        </span>
                                    </div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing.
                                         <br />
                                        <span class="label label-danger"> Low </span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>Read All Messages</strong>
                                    <i class="icon-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--END MESSAGES SECTION -->

                    <!--ADMIN SETTINGS SECTIONS -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="icon-user "></i>&nbsp; <i class="icon-chevron-down "></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="icon-user"></i> User Profile </a>
                            </li>
                            <li><a href="#"><i class="icon-gear"></i> Settings </a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="login.html"><i class="icon-signout"></i> Logout </a>
                            </li>
                        </ul>
                    </li>
                    <!--END ADMIN SETTINGS -->
                </ul>
            </nav>
        </div>
        <!-- END HEADER SECTION -->

        <!-- MENU SECTION -->
       <div id="left">
            <div class="media user-media well-small">
                <a class="user-link" href="#">
                    <img class="media-object img-thumbnail user-img" alt="User Picture" src="img/user.gif" />
                </a>
                <br />
                <div class="media-body">
                    <h5 class="media-heading"> Joe Romlin</h5>
                    <ul class="list-unstyled user-info">
                        <li>
                             <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> Online
                        </li>
                    </ul>
                </div>
                <br />
            </div>

            <ul id="menu" class="collapse">
                <li class="panel ">
                    <a href="index.html" ><i class="icon-table"></i> Dashboard</a>
                    <a href="index.html" ><i class="icon-table"></i> Dashboard</a>
                    <a href="index.html" ><i class="icon-table"></i> Dashboard</a>
                    <a href="index.html" ><i class="icon-table"></i> Dashboard</a>
                    <a href="index.html" ><i class="icon-table"></i> Dashboard</a>
                    <a href="index.html" ><i class="icon-table"></i> Dashboard</a>
                    <a href="index.html" ><i class="icon-table"></i> Dashboard</a>
                    <a href="index.html" ><i class="icon-table"></i> Dashboard</a>
                </li>
            </ul>
        </div>
        <!--END MENU SECTION -->

       <!--PAGE CONTENT -->
        <div id="content">
          <div class="inner">
              <div class="row">
