<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <title> SIM | Administración </title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <!--<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css"/>-->
        <link href="<?php echo URL_GOBALPG ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo URL_GOBALPG ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo URL_GOBALPG ?>/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
        <link href="<?php echo URL_GOBALPG ?>/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo URL_GOBALPG ?>/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo URL_GOBALPG ?>/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>
        
        <link rel="stylesheet" type="text/css" href="<?php echo URL_GOBALPG ?>/select2/select2.css"/>
        <link rel="stylesheet" href="<?php echo URL_GOBALPG ?>/data-tables/DT_bootstrap.css"/>
        
        <!-- END PAGE LEVEL PLUGIN STYLES -->
        <!-- BEGIN PAGE STYLES -->
        <link href="<?php echo URL_ADMINPCSS ?>/tasks.css" rel="stylesheet" type="text/css"/>
        <!-- END PAGE STYLES -->
        
        <!--[if lt IE 9]>
        <script src="<?php echo URL_GOBALPG ?>/respond.min.js"></script>
        <script src="<?php echo URL_GOBALPG ?>/excanvas.min.js"></script> 
        <![endif]-->
        <script src="<?php echo URL_GOBALPG ?>/jquery-1.11.0.min.js" type="text/javascript"></script>
        <script src="<?php echo URL_GOBALPG ?>/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
        <!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
        <script src="<?php echo URL_GOBALPG ?>/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
        <script src="<?php echo URL_GOBALPG ?>/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo URL_ADMINPJS ?>/jsGeneral.js" type="text/javascript"></script>
        
        <!-- BEGIN THEME STYLES -->
        <link href="<?php echo URL_GLOBALCSS ?>/components.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo URL_GLOBALCSS ?>/plugins.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo URL_ADMINLCSS ?>/layout.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo URL_ADMINLCSS ?>/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
        <link href="<?php echo URL_ADMINLCSS ?>/custom.css" rel="stylesheet" type="text/css"/>
        <!-- END THEME STYLES -->
        <link rel="shortcut icon" href="favicon.ico"/>
    </head>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->
    <!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
    <!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
    <!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
    <!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
    <!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
    <!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
    <!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
    <!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
    <!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
    <body class="page-header-fixed">
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="index.html">
                        <img src="<?php echo URL_ADMINLIMG ?>/logo/logoSIMSDSF.png" width="70px" alt="logo" class="logo-default"/>
                    </a>
                    <div class="menu-toggler sidebar-toggler hide">
                        <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
                    </div>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <div class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                </div>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN TOP NAVIGATION MENU -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <!-- BEGIN NOTIFICATION DROPDOWN -->
                        <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="fa fa-warning"></i>
                                <span class="badge badge-default">
                                    7 </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <p>
                                        You have 14 new notifications
                                    </p>
                                </li>
                                <li>
                                    <ul class="dropdown-menu-list scroller" style="height: 250px;">
                                        <li>
                                            <a href="#">
                                                <span class="label label-sm label-icon label-success">
                                                    <i class="fa fa-plus"></i>
                                                </span>
                                                New user registered. <span class="time">
                                                    Just now </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="label label-sm label-icon label-danger">
                                                    <i class="fa fa-bolt"></i>
                                                </span>
                                                Server #12 overloaded. <span class="time">
                                                    15 mins </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="label label-sm label-icon label-warning">
                                                    <i class="fa fa-bell-o"></i>
                                                </span>
                                                Server #2 not responding. <span class="time">
                                                    22 mins </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="label label-sm label-icon label-info">
                                                    <i class="fa fa-bullhorn"></i>
                                                </span>
                                                Application error. <span class="time">
                                                    40 mins </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="label label-sm label-icon label-danger">
                                                    <i class="fa fa-bolt"></i>
                                                </span>
                                                Database overloaded 68%. <span class="time">
                                                    2 hrs </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="label label-sm label-icon label-danger">
                                                    <i class="fa fa-bolt"></i>
                                                </span>
                                                2 user IP blocked. <span class="time">
                                                    5 hrs </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="label label-sm label-icon label-warning">
                                                    <i class="fa fa-bell-o"></i>
                                                </span>
                                                Storage Server #4 not responding. <span class="time">
                                                    45 mins </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="label label-sm label-icon label-info">
                                                    <i class="fa fa-bullhorn"></i>
                                                </span>
                                                System Error. <span class="time">
                                                    55 mins </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="label label-sm label-icon label-danger">
                                                    <i class="fa fa-bolt"></i>
                                                </span>
                                                Database overloaded 68%. <span class="time">
                                                    2 hrs </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="external">
                                    <a href="#">
                                        See all notifications <i class="m-icon-swapright"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- END NOTIFICATION DROPDOWN -->
                        <!-- BEGIN INBOX DROPDOWN -->
                        <li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="fa fa-envelope"></i>
                                <span class="badge badge-default">
                                    4 </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <p>
                                        You have 12 new messages
                                    </p>
                                </li>
                                <li>
                                    <ul class="dropdown-menu-list scroller" style="height: 250px;">
                                        <li>
                                            <a href="inbox14c8.html?a=view">
                                                <span class="photo">
                                                    <img src="<?php echo URL_ADMINLIMG ?>/avatar2.jpg" alt=""/>
                                                </span>
                                                <span class="subject">
                                                    <span class="from">
                                                        Lisa Wong </span>
                                                    <span class="time">
                                                        Just Now </span>
                                                </span>
                                                <span class="message">
                                                    Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="inbox14c8.html?a=view">
                                                <span class="photo">
                                                    <img src="<?php echo URL_ADMINLIMG ?>/avatar3.jpg" alt=""/>
                                                </span>
                                                <span class="subject">
                                                    <span class="from">
                                                        Richard Doe </span>
                                                    <span class="time">
                                                        16 mins </span>
                                                </span>
                                                <span class="message">
                                                    Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="inbox14c8.html?a=view">
                                                <span class="photo">
                                                    <img src="<?php echo URL_ADMINLIMG ?>/avatar1.jpg" alt=""/>
                                                </span>
                                                <span class="subject">
                                                    <span class="from">
                                                        Bob Nilson </span>
                                                    <span class="time">
                                                        2 hrs </span>
                                                </span>
                                                <span class="message">
                                                    Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="inbox14c8.html?a=view">
                                                <span class="photo">
                                                    <img src="<?php echo URL_ADMINLIMG ?>/avatar2.jpg" alt=""/>
                                                </span>
                                                <span class="subject">
                                                    <span class="from">
                                                        Lisa Wong </span>
                                                    <span class="time">
                                                        40 mins </span>
                                                </span>
                                                <span class="message">
                                                    Vivamus sed auctor 40% nibh congue nibh... </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="inbox14c8.html?a=view">
                                                <span class="photo">
                                                    <img src="<?php echo URL_ADMINLIMG ?>/avatar3.jpg" alt=""/>
                                                </span>
                                                <span class="subject">
                                                    <span class="from">
                                                        Richard Doe </span>
                                                    <span class="time">
                                                        46 mins </span>
                                                </span>
                                                <span class="message">
                                                    Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="external">
                                    <a href="inbox.html">
                                        See all messages <i class="m-icon-swapright"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- END INBOX DROPDOWN -->
                        <!-- BEGIN TODO DROPDOWN -->
                        <li class="dropdown dropdown-extended dropdown-tasks" id="header_task_bar">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="fa fa-tasks"></i>
                                <span class="badge badge-default">
                                    3 </span>
                            </a>
                            <ul class="dropdown-menu extended tasks">
                                <li>
                                    <p>
                                        You have 12 pending tasks
                                    </p>
                                </li>
                                <li>
                                    <ul class="dropdown-menu-list scroller" style="height: 250px;">
                                        <li>
                                            <a href="#">
                                                <span class="task">
                                                    <span class="desc">
                                                        New release v1.2 </span>
                                                    <span class="percent">
                                                        30% </span>
                                                </span>
                                                <span class="progress">
                                                    <span style="width: 40%;" class="progress-bar progress-bar-success" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">
                                                            40% Complete </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="task">
                                                    <span class="desc">
                                                        Application deployment </span>
                                                    <span class="percent">
                                                        65% </span>
                                                </span>
                                                <span class="progress progress-striped">
                                                    <span style="width: 65%;" class="progress-bar progress-bar-danger" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">
                                                            65% Complete </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="task">
                                                    <span class="desc">
                                                        Mobile app release </span>
                                                    <span class="percent">
                                                        98% </span>
                                                </span>
                                                <span class="progress">
                                                    <span style="width: 98%;" class="progress-bar progress-bar-success" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">
                                                            98% Complete </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="task">
                                                    <span class="desc">
                                                        Database migration </span>
                                                    <span class="percent">
                                                        10% </span>
                                                </span>
                                                <span class="progress progress-striped">
                                                    <span style="width: 10%;" class="progress-bar progress-bar-warning" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">
                                                            10% Complete </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="task">
                                                    <span class="desc">
                                                        Web server upgrade </span>
                                                    <span class="percent">
                                                        58% </span>
                                                </span>
                                                <span class="progress progress-striped">
                                                    <span style="width: 58%;" class="progress-bar progress-bar-info" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">
                                                            58% Complete </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="task">
                                                    <span class="desc">
                                                        Mobile development </span>
                                                    <span class="percent">
                                                        85% </span>
                                                </span>
                                                <span class="progress progress-striped">
                                                    <span style="width: 85%;" class="progress-bar progress-bar-success" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">
                                                            85% Complete </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="task">
                                                    <span class="desc">
                                                        New UI release </span>
                                                    <span class="percent">
                                                        18% </span>
                                                </span>
                                                <span class="progress progress-striped">
                                                    <span style="width: 18%;" class="progress-bar progress-bar-important" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">
                                                            18% Complete </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="external">
                                    <a href="#">
                                        See all tasks <i class="m-icon-swapright"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- END TODO DROPDOWN -->
                        <!-- BEGIN USER LOGIN DROPDOWN -->
                        <!-- BEGIN USER LOGIN DROPDOWN -->
                        <li class="dropdown dropdown-user">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img alt="" class="img-circle" src="<?php echo URL_ADMINLIMG ?>/avatar3_small.jpg"/>
                                <span class="username">
                                    Bob </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="extra_profile.html">
                                        <i class="fa fa-user"></i> My Profile </a>
                                </li>
                                <li>
                                    <a href="page_calendar.html">
                                        <i class="fa fa-calendar"></i> My Calendar </a>
                                </li>
                                <li>
                                    <a href="inbox.html">
                                        <i class="fa fa-envelope"></i> My Inbox <span class="badge badge-danger">
                                            3 </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-tasks"></i> My Tasks <span class="badge badge-success">
                                            7 </span>
                                    </a>
                                </li>
                                <li class="divider">
                                </li>
                                <li>
                                    <a href="extra_lock.html">
                                        <i class="fa fa-lock"></i> Lock Screen </a>
                                </li>
                                <li>
                                    <a href="login.html">
                                        <i class="fa fa-key"></i> Log Out </a>
                                </li>
                            </ul>
                        </li>
                        <!-- END USER LOGIN DROPDOWN -->
                        <!-- END USER LOGIN DROPDOWN -->
                    </ul>
                </div>
                <!-- END TOP NAVIGATION MENU -->
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->
        <div class="clearfix">
        </div>
        