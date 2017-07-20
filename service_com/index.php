<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>Inbox - Ace Admin</title>

        <meta name="description" content="Mailbox with some customizations as described in docs" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        <!-- bootstrap & fontawesome -->
        <link rel="stylesheet" href="../includes/bootstrap-3.3.7/css/bootstrap.min.css" />
        <link rel="stylesheet" href="../includes/font-awesome-4.7.0/css/font-awesome.min.css" />

        <!-- page specific plugin styles -->

        <!-- text fonts -->
        <link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

        <!-- ace styles -->
        <link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

        <!--[if lte IE 9]>
                <link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
        <![endif]-->
        <link rel="stylesheet" href="assets/css/ace-skins.min.css" />
        <link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

        <!--[if lte IE 9]>
          <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
        <![endif]-->

        <!-- inline styles related to this page -->
        <script src="../includes/jquery-3.1.1.min.js"></script
        <!-- ace settings handler -->
        <script src="assets/js/ace-extra.min.js"></script>

        <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

        <!--[if lte IE 8]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body class="no-skin">
        <div id="navbar" class="navbar navbar-default          ace-save-state">
            <div class="navbar-container ace-save-state" id="navbar-container">
                <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
                    <span class="sr-only">Toggle sidebar</span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>
                </button>

                <div class="navbar-header pull-left">
                    <a href="index.html" class="navbar-brand">
                        <small>
                            <i class="fa fa-leaf"></i>
                            Ace Admin
                        </small>
                    </a>
                </div>

                <div class="navbar-buttons navbar-header pull-right" role="navigation">
                    <ul class="nav ace-nav">
                        <li class="grey dropdown-modal">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="ace-icon fa fa-tasks"></i>
                                <span class="badge badge-grey">4</span>
                            </a>

                            <ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                                <li class="dropdown-header">
                                    <i class="ace-icon fa fa-check"></i>
                                    4 Tasks to complete
                                </li>

                                <li class="dropdown-content">
                                    <ul class="dropdown-menu dropdown-navbar">
                                        <li>
                                            <a href="#">
                                                <div class="clearfix">
                                                    <span class="pull-left">Software Update</span>
                                                    <span class="pull-right">65%</span>
                                                </div>

                                                <div class="progress progress-mini">
                                                    <div style="width:65%" class="progress-bar"></div>
                                                </div>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <div class="clearfix">
                                                    <span class="pull-left">Hardware Upgrade</span>
                                                    <span class="pull-right">35%</span>
                                                </div>

                                                <div class="progress progress-mini">
                                                    <div style="width:35%" class="progress-bar progress-bar-danger"></div>
                                                </div>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <div class="clearfix">
                                                    <span class="pull-left">Unit Testing</span>
                                                    <span class="pull-right">15%</span>
                                                </div>

                                                <div class="progress progress-mini">
                                                    <div style="width:15%" class="progress-bar progress-bar-warning"></div>
                                                </div>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <div class="clearfix">
                                                    <span class="pull-left">Bug Fixes</span>
                                                    <span class="pull-right">90%</span>
                                                </div>

                                                <div class="progress progress-mini progress-striped active">
                                                    <div style="width:90%" class="progress-bar progress-bar-success"></div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="dropdown-footer">
                                    <a href="#">
                                        See tasks with details
                                        <i class="ace-icon fa fa-arrow-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="purple dropdown-modal">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="ace-icon fa fa-bell icon-animated-bell"></i>
                                <span class="badge badge-important">8</span>
                            </a>

                            <ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
                                <li class="dropdown-header">
                                    <i class="ace-icon fa fa-exclamation-triangle"></i>
                                    8 Notifications
                                </li>

                                <li class="dropdown-content">
                                    <ul class="dropdown-menu dropdown-navbar navbar-pink">
                                        <li>
                                            <a href="#">
                                                <div class="clearfix">
                                                    <span class="pull-left">
                                                        <i class="btn btn-xs no-hover btn-pink fa fa-comment"></i>
                                                        New Comments
                                                    </span>
                                                    <span class="pull-right badge badge-info">+12</span>
                                                </div>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="btn btn-xs btn-primary fa fa-user"></i>
                                                Bob just signed up as an editor ...
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <div class="clearfix">
                                                    <span class="pull-left">
                                                        <i class="btn btn-xs no-hover btn-success fa fa-shopping-cart"></i>
                                                        New Orders
                                                    </span>
                                                    <span class="pull-right badge badge-success">+8</span>
                                                </div>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <div class="clearfix">
                                                    <span class="pull-left">
                                                        <i class="btn btn-xs no-hover btn-info fa fa-twitter"></i>
                                                        Followers
                                                    </span>
                                                    <span class="pull-right badge badge-info">+11</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="dropdown-footer">
                                    <a href="#">
                                        See all notifications
                                        <i class="ace-icon fa fa-arrow-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="green dropdown-modal">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="ace-icon fa fa-envelope icon-animated-vertical"></i>
                                <span class="badge badge-success">5</span>
                            </a>

                            <ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                                <li class="dropdown-header">
                                    <i class="ace-icon fa fa-envelope-o"></i>
                                    5 Messages
                                </li>

                                <li class="dropdown-content">
                                    <ul class="dropdown-menu dropdown-navbar">
                                        <li>
                                            <a href="#" class="clearfix">
                                                <img src="assets/images/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
                                                <span class="msg-body">
                                                    <span class="msg-title">
                                                        <span class="blue">Alex:</span>
                                                        Ciao sociis natoque penatibus et auctor ...
                                                    </span>

                                                    <span class="msg-time">
                                                        <i class="ace-icon fa fa-clock-o"></i>
                                                        <span>a moment ago</span>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" class="clearfix">
                                                <img src="assets/images/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
                                                <span class="msg-body">
                                                    <span class="msg-title">
                                                        <span class="blue">Susan:</span>
                                                        Vestibulum id ligula porta felis euismod ...
                                                    </span>

                                                    <span class="msg-time">
                                                        <i class="ace-icon fa fa-clock-o"></i>
                                                        <span>20 minutes ago</span>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" class="clearfix">
                                                <img src="assets/images/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
                                                <span class="msg-body">
                                                    <span class="msg-title">
                                                        <span class="blue">Bob:</span>
                                                        Nullam quis risus eget urna mollis ornare ...
                                                    </span>

                                                    <span class="msg-time">
                                                        <i class="ace-icon fa fa-clock-o"></i>
                                                        <span>3:15 pm</span>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" class="clearfix">
                                                <img src="assets/images/avatars/avatar2.png" class="msg-photo" alt="Kate's Avatar" />
                                                <span class="msg-body">
                                                    <span class="msg-title">
                                                        <span class="blue">Kate:</span>
                                                        Ciao sociis natoque eget urna mollis ornare ...
                                                    </span>

                                                    <span class="msg-time">
                                                        <i class="ace-icon fa fa-clock-o"></i>
                                                        <span>1:33 pm</span>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" class="clearfix">
                                                <img src="assets/images/avatars/avatar5.png" class="msg-photo" alt="Fred's Avatar" />
                                                <span class="msg-body">
                                                    <span class="msg-title">
                                                        <span class="blue">Fred:</span>
                                                        Vestibulum id penatibus et auctor  ...
                                                    </span>

                                                    <span class="msg-time">
                                                        <i class="ace-icon fa fa-clock-o"></i>
                                                        <span>10:09 am</span>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="dropdown-footer">
                                    <a href="inbox.html">
                                        See all messages
                                        <i class="ace-icon fa fa-arrow-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="light-blue dropdown-modal">
                            <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                                <img class="nav-user-photo" src="assets/images/avatars/user.jpg" alt="Jason's Photo" />
                                <span class="user-info">
                                    <small>Welcome,</small>
                                    Jason
                                </span>

                                <i class="ace-icon fa fa-caret-down"></i>
                            </a>

                            <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                                <li>
                                    <a href="#">
                                        <i class="ace-icon fa fa-cog"></i>
                                        Settings
                                    </a>
                                </li>

                                <li>
                                    <a href="profile.html">
                                        <i class="ace-icon fa fa-user"></i>
                                        Profile
                                    </a>
                                </li>

                                <li class="divider"></li>

                                <li>
                                    <a href="#">
                                        <i class="ace-icon fa fa-power-off"></i>
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div><!-- /.navbar-container -->
        </div>

        <div class="main-container ace-save-state" id="main-container">
            <script type="text/javascript">
                try {
                    ace.settings.loadState('main-container')
                } catch (e) {
                }
            </script>

            <div id="sidebar" class="sidebar                  responsive                    ace-save-state">
                <script type="text/javascript">
                    try {
                        ace.settings.loadState('sidebar')
                    } catch (e) {
                    }
                </script>

                <div class="sidebar-shortcuts" id="sidebar-shortcuts">
                    <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                        <button class="btn btn-success">
                            <i class="ace-icon fa fa-signal"></i>
                        </button>

                        <button class="btn btn-info">
                            <i class="ace-icon fa fa-pencil"></i>
                        </button>

                        <button class="btn btn-warning">
                            <i class="ace-icon fa fa-users"></i>
                        </button>

                        <button class="btn btn-danger">
                            <i class="ace-icon fa fa-cogs"></i>
                        </button>
                    </div>

                    <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                        <span class="btn btn-success"></span>

                        <span class="btn btn-info"></span>

                        <span class="btn btn-warning"></span>

                        <span class="btn btn-danger"></span>
                    </div>
                </div><!-- /.sidebar-shortcuts -->

                <ul class="nav nav-list">
                    <li class="">
                        <a href="index.html">
                            <i class="menu-icon fa fa-tachometer"></i>
                            <span class="menu-text"> Dashboard </span>
                        </a>

                        <b class="arrow"></b>
                    </li>
  <li class="">
                        <a href="?m=main&p=job-list">
                            <i class="menu-icon fa fa-tachometer"></i>
                            <span class="menu-text"> job </span>
                        </a>

                        <b class="arrow"></b>
                    </li>
                    <li class="">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-desktop"></i>
                            <span class="menu-text">
                                UI &amp; Elements
                            </span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">
                            <li class="">
                                <a href="#" class="dropdown-toggle">
                                    <i class="menu-icon fa fa-caret-right"></i>

                                    Layouts
                                    <b class="arrow fa fa-angle-down"></b>
                                </a>

                                <b class="arrow"></b>

                                <ul class="submenu">
                                    <li class="">
                                        <a href="top-menu.html">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Top Menu
                                        </a>

                                        <b class="arrow"></b>
                                    </li>

                                    <li class="">
                                        <a href="two-menu-1.html">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Two Menus 1
                                        </a>

                                        <b class="arrow"></b>
                                    </li>

                                    <li class="">
                                        <a href="two-menu-2.html">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Two Menus 2
                                        </a>

                                        <b class="arrow"></b>
                                    </li>

                                    <li class="">
                                        <a href="mobile-menu-1.html">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Default Mobile Menu
                                        </a>

                                        <b class="arrow"></b>
                                    </li>

                                    <li class="">
                                        <a href="mobile-menu-2.html">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Mobile Menu 2
                                        </a>

                                        <b class="arrow"></b>
                                    </li>

                                    <li class="">
                                        <a href="mobile-menu-3.html">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Mobile Menu 3
                                        </a>

                                        <b class="arrow"></b>
                                    </li>
                                </ul>
                            </li>

                            <li class="">
                                <a href="typography.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Typography
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="elements.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Elements
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="buttons.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Buttons &amp; Icons
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="content-slider.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Content Sliders
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="treeview.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Treeview
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="jquery-ui.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    jQuery UI
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="nestable-list.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Nestable Lists
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="#" class="dropdown-toggle">
                                    <i class="menu-icon fa fa-caret-right"></i>

                                    Three Level Menu
                                    <b class="arrow fa fa-angle-down"></b>
                                </a>

                                <b class="arrow"></b>

                                <ul class="submenu">
                                    <li class="">
                                        <a href="#">
                                            <i class="menu-icon fa fa-leaf green"></i>
                                            Item #1
                                        </a>

                                        <b class="arrow"></b>
                                    </li>

                                    <li class="">
                                        <a href="#" class="dropdown-toggle">
                                            <i class="menu-icon fa fa-pencil orange"></i>

                                            4th level
                                            <b class="arrow fa fa-angle-down"></b>
                                        </a>

                                        <b class="arrow"></b>

                                        <ul class="submenu">
                                            <li class="">
                                                <a href="#">
                                                    <i class="menu-icon fa fa-plus purple"></i>
                                                    Add Product
                                                </a>

                                                <b class="arrow"></b>
                                            </li>

                                            <li class="">
                                                <a href="#">
                                                    <i class="menu-icon fa fa-eye pink"></i>
                                                    View Products
                                                </a>

                                                <b class="arrow"></b>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-list"></i>
                            <span class="menu-text"> Tables </span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">
                            <li class="">
                                <a href="tables.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Simple &amp; Dynamic
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="jqgrid.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    jqGrid plugin
                                </a>

                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>

                    <li class="">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-pencil-square-o"></i>
                            <span class="menu-text"> Forms </span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">
                            <li class="">
                                <a href="form-elements.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Form Elements
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="form-elements-2.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Form Elements 2
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="form-wizard.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Wizard &amp; Validation
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="wysiwyg.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Wysiwyg &amp; Markdown
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="dropzone.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Dropzone File Upload
                                </a>

                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>

                    <li class="">
                        <a href="widgets.html">
                            <i class="menu-icon fa fa-list-alt"></i>
                            <span class="menu-text"> Widgets </span>
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="calendar.html">
                            <i class="menu-icon fa fa-calendar"></i>

                            <span class="menu-text">
                                Calendar

                                <span class="badge badge-transparent tooltip-error" title="2 Important Events">
                                    <i class="ace-icon fa fa-exclamation-triangle red bigger-130"></i>
                                </span>
                            </span>
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="gallery.html">
                            <i class="menu-icon fa fa-picture-o"></i>
                            <span class="menu-text"> Gallery </span>
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="active open">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-tag"></i>
                            <span class="menu-text"> More Pages </span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">
                            <li class="">
                                <a href="profile.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    User Profile
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="active">
                                <a href="inbox.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Inbox
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="pricing.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Pricing Tables
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="invoice.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Invoice
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="timeline.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Timeline
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="search.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Search Results
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="email.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Email Templates
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="login.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Login &amp; Register
                                </a>

                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>

                    <li class="">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-file-o"></i>

                            <span class="menu-text">
                                Other Pages

                                <span class="badge badge-primary">5</span>
                            </span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">
                            <li class="">
                                <a href="faq.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    FAQ
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="error-404.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Error 404
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="error-500.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Error 500
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="grid.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Grid
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="blank.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Blank Page
                                </a>

                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>
                </ul><!-- /.nav-list -->

                <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
                    <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
                </div>
            </div>

           
                        <?php
// Application 
                        $app = (isset($_GET['m']) ? $_GET['m'] : 'main');
                        $file = (isset($_GET['p']) ? $_GET['p'] : 'dashboard');

                        if (file_exists('modules/' . $app . '/' . $file . '.php')) {
                            include 'modules/' . $app . '/' . $file . '.php';
                        } else {
                            echo '404,ไม่พบหน้าที่ท่านเรียก';
                        }
                        ?>
                   
            </div><!-- /.main-content -->

            <div class="footer">
                <div class="footer-inner">
                    <div class="footer-content">
                        <span class="bigger-120">
                            <span class="blue bolder">Ace</span>
                            Application &copy; 2013-2014
                        </span>

                        &nbsp; &nbsp;
                        <span class="action-buttons">
                            <a href="#">
                                <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                            </a>

                            <a href="#">
                                <i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
                            </a>

                            <a href="#">
                                <i class="ace-icon fa fa-rss-square orange bigger-150"></i>
                            </a>
                        </span>
                    </div>
                </div>
            </div>

            <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
            </a>
        </div><!-- /.main-container -->

        <!-- basic scripts -->

        <!--[if !IE]> -->
        <script src="assets/js/jquery-2.1.4.min.js"></script>

        <!-- <![endif]-->

        <!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
        <script type="text/javascript">
                    if ('ontouchstart' in document.documentElement)
                        document.write("<script src='assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
        </script>
        <script src="../includes/bootstrap-3.3.7/js/bootstrap.min.js"></script>

        <!-- page specific plugin scripts -->
        <script src="assets/js/bootstrap-tag.min.js"></script>
        <script src="assets/js/jquery.hotkeys.index.min.js"></script>
        <script src="assets/js/bootstrap-wysiwyg.min.js"></script>

        <!-- ace scripts -->
        <script src="assets/js/ace-elements.min.js"></script>
        <script src="assets/js/ace.min.js"></script>

        <!-- inline scripts related to this page -->
        <script type="text/javascript">
                    jQuery(function ($) {

                        //handling tabs and loading/displaying relevant messages and forms
                        //not needed if using the alternative view, as described in docs
                        $('#inbox-tabs a[data-toggle="tab"]').on('show.bs.tab', function (e) {
                            var currentTab = $(e.target).data('target');
                            if (currentTab == 'write') {
                                Inbox.show_form();
                            } else if (currentTab == 'inbox') {
                                Inbox.show_list();
                            }
                        })



                        //basic initializations
                        $('.message-list .message-item input[type=checkbox]').removeAttr('checked');
                        $('.message-list').on('click', '.message-item input[type=checkbox]', function () {
                            $(this).closest('.message-item').toggleClass('selected');
                            if (this.checked)
                                Inbox.display_bar(1);//display action toolbar when a message is selected
                            else {
                                Inbox.display_bar($('.message-list input[type=checkbox]:checked').length);
                                //determine number of selected messages and display/hide action toolbar accordingly
                            }
                        });


                        //check/uncheck all messages
                        $('#id-toggle-all').removeAttr('checked').on('click', function () {
                            if (this.checked) {
                                Inbox.select_all();
                            } else
                                Inbox.select_none();
                        });

                        //select all
                        $('#id-select-message-all').on('click', function (e) {
                            e.preventDefault();
                            Inbox.select_all();
                        });

                        //select none
                        $('#id-select-message-none').on('click', function (e) {
                            e.preventDefault();
                            Inbox.select_none();
                        });

                        //select read
                        $('#id-select-message-read').on('click', function (e) {
                            e.preventDefault();
                            Inbox.select_read();
                        });

                        //select unread
                        $('#id-select-message-unread').on('click', function (e) {
                            e.preventDefault();
                            Inbox.select_unread();
                        });

                        /////////

                        //display first message in a new area
                        $('.message-list .message-item:eq(0) .text').on('click', function () {
                            //show the loading icon
                            $('.message-container').append('<div class="message-loading-overlay"><i class="fa-spin ace-icon fa fa-spinner orange2 bigger-160"></i></div>');

                            $('.message-inline-open').removeClass('message-inline-open').find('.message-content').remove();

                            var message_list = $(this).closest('.message-list');

                            $('#inbox-tabs a[href="#inbox"]').parent().removeClass('active');
                            //some waiting
                            setTimeout(function () {

                                //hide everything that is after .message-list (which is either .message-content or .message-form)
                                message_list.next().addClass('hide');
                                $('.message-container').find('.message-loading-overlay').remove();

                                //close and remove the inline opened message if any!

                                //hide all navbars
                                $('.message-navbar').addClass('hide');
                                //now show the navbar for single message item
                                $('#id-message-item-navbar').removeClass('hide');

                                //hide all footers
                                $('.message-footer').addClass('hide');
                                //now show the alternative footer
                                $('.message-footer-style2').removeClass('hide');


                                //move .message-content next to .message-list and hide .message-list
                                $('.message-content').removeClass('hide').insertAfter(message_list.addClass('hide'));

                                //add scrollbars to .message-body
                                $('.message-content .message-body').ace_scroll({
                                    size: 150,
                                    mouseWheelLock: true,
                                    styleClass: 'scroll-visible'
                                });

                            }, 500 + parseInt(Math.random() * 500));
                        });


                        //display second message right inside the message list
                        $('.message-list .message-item:eq(1) .text').on('click', function () {
                            var message = $(this).closest('.message-item');

                            //if message is open, then close it
                            if (message.hasClass('message-inline-open')) {
                                message.removeClass('message-inline-open').find('.message-content').remove();
                                return;
                            }

                            $('.message-container').append('<div class="message-loading-overlay"><i class="fa-spin ace-icon fa fa-spinner orange2 bigger-160"></i></div>');
                            setTimeout(function () {
                                $('.message-container').find('.message-loading-overlay').remove();
                                message
                                        .addClass('message-inline-open')
                                        .append('<div class="message-content" />')
                                var content = message.find('.message-content:last').html($('#id-message-content').html());

                                //remove scrollbar elements
                                content.find('.scroll-track').remove();
                                content.find('.scroll-content').children().unwrap();

                                content.find('.message-body').ace_scroll({
                                    size: 150,
                                    mouseWheelLock: true,
                                    styleClass: 'scroll-visible'
                                });

                            }, 500 + parseInt(Math.random() * 500));

                        });



                        //back to message list
                        $('.btn-back-message-list').on('click', function (e) {

                            e.preventDefault();
                            $('#inbox-tabs a[href="#inbox"]').tab('show');
                        });



                        //hide message list and display new message form
                        /**
                         $('.btn-new-mail').on('click', function(e){
                         e.preventDefault();
                         Inbox.show_form();
                         });
                         */




                        var Inbox = {
                            //displays a toolbar according to the number of selected messages
                            display_bar: function (count) {
                                if (count == 0) {
                                    $('#id-toggle-all').removeAttr('checked');
                                    $('#id-message-list-navbar .message-toolbar').addClass('hide');
                                    $('#id-message-list-navbar .message-infobar').removeClass('hide');
                                } else {
                                    $('#id-message-list-navbar .message-infobar').addClass('hide');
                                    $('#id-message-list-navbar .message-toolbar').removeClass('hide');
                                }
                            }
                            ,
                            select_all: function () {
                                var count = 0;
                                $('.message-item input[type=checkbox]').each(function () {
                                    this.checked = true;
                                    $(this).closest('.message-item').addClass('selected');
                                    count++;
                                });

                                $('#id-toggle-all').get(0).checked = true;

                                Inbox.display_bar(count);
                            }
                            ,
                            select_none: function () {
                                $('.message-item input[type=checkbox]').removeAttr('checked').closest('.message-item').removeClass('selected');
                                $('#id-toggle-all').get(0).checked = false;

                                Inbox.display_bar(0);
                            }
                            ,
                            select_read: function () {
                                $('.message-unread input[type=checkbox]').removeAttr('checked').closest('.message-item').removeClass('selected');

                                var count = 0;
                                $('.message-item:not(.message-unread) input[type=checkbox]').each(function () {
                                    this.checked = true;
                                    $(this).closest('.message-item').addClass('selected');
                                    count++;
                                });
                                Inbox.display_bar(count);
                            }
                            ,
                            select_unread: function () {
                                $('.message-item:not(.message-unread) input[type=checkbox]').removeAttr('checked').closest('.message-item').removeClass('selected');

                                var count = 0;
                                $('.message-unread input[type=checkbox]').each(function () {
                                    this.checked = true;
                                    $(this).closest('.message-item').addClass('selected');
                                    count++;
                                });

                                Inbox.display_bar(count);
                            }
                        }

                        //show message list (back from writing mail or reading a message)
                        Inbox.show_list = function () {
                            $('.message-navbar').addClass('hide');
                            $('#id-message-list-navbar').removeClass('hide');

                            $('.message-footer').addClass('hide');
                            $('.message-footer:not(.message-footer-style2)').removeClass('hide');

                            $('.message-list').removeClass('hide').next().addClass('hide');
                            //hide the message item / new message window and go back to list
                        }

                        //show write mail form
                        Inbox.show_form = function () {
                            if ($('.message-form').is(':visible'))
                                return;
                            if (!form_initialized) {
                                initialize_form();
                            }


                            var message = $('.message-list');
                            $('.message-container').append('<div class="message-loading-overlay"><i class="fa-spin ace-icon fa fa-spinner orange2 bigger-160"></i></div>');

                            setTimeout(function () {
                                message.next().addClass('hide');

                                $('.message-container').find('.message-loading-overlay').remove();

                                $('.message-list').addClass('hide');
                                $('.message-footer').addClass('hide');
                                $('.message-form').removeClass('hide').insertAfter('.message-list');

                                $('.message-navbar').addClass('hide');
                                $('#id-message-new-navbar').removeClass('hide');


                                //reset form??
                                $('.message-form .wysiwyg-editor').empty();

                                $('.message-form .ace-file-input').closest('.file-input-container:not(:first-child)').remove();
                                $('.message-form input[type=file]').ace_file_input('reset_input');

                                $('.message-form').get(0).reset();

                            }, 300 + parseInt(Math.random() * 300));
                        }




                        var form_initialized = false;
                        function initialize_form() {
                            if (form_initialized)
                                return;
                            form_initialized = true;

                            //intialize wysiwyg editor
                            $('.message-form .wysiwyg-editor').ace_wysiwyg({
                                toolbar:
                                        [
                                            'bold',
                                            'italic',
                                            'strikethrough',
                                            'underline',
                                            null,
                                            'justifyleft',
                                            'justifycenter',
                                            'justifyright',
                                            null,
                                            'createLink',
                                            'unlink',
                                            null,
                                            'undo',
                                            'redo'
                                        ]
                            }).prev().addClass('wysiwyg-style1');



                            //file input
                            $('.message-form input[type=file]').ace_file_input()
                                    .closest('.ace-file-input')
                                    .addClass('width-90 inline')
                                    .wrap('<div class="form-group file-input-container"><div class="col-sm-7"></div></div>');

                            //Add Attachment
                            //the button to add a new file input
                            $('#id-add-attachment')
                                    .on('click', function () {
                                        var file = $('<input type="file" name="attachment[]" />').appendTo('#form-attachments');
                                        file.ace_file_input();

                                        file.closest('.ace-file-input')
                                                .addClass('width-90 inline')
                                                .wrap('<div class="form-group file-input-container"><div class="col-sm-7"></div></div>')
                                                .parent().append('<div class="action-buttons pull-right col-xs-1">\
                                                <a href="#" data-action="delete" class="middle">\
                                                        <i class="ace-icon fa fa-trash-o red bigger-130 middle"></i>\
                                                </a>\
                                        </div>')
                                                .find('a[data-action=delete]').on('click', function (e) {
                                            //the button that removes the newly inserted file input
                                            e.preventDefault();
                                            $(this).closest('.file-input-container').hide(300, function () {
                                                $(this).remove()
                                            });
                                        });
                                    });
                        }//initialize_form

                        //turn the recipient field into a tag input field!
                        /**	
                         var tag_input = $('#form-field-recipient');
                         try { 
                         tag_input.tag({placeholder:tag_input.attr('placeholder')});
                         } catch(e) {}
                         
                         
                         //and add form reset functionality
                         $('#id-message-form').on('reset', function(){
                         $('.message-form .message-body').empty();
                         
                         $('.message-form .ace-file-input:not(:first-child)').remove();
                         $('.message-form input[type=file]').ace_file_input('reset_input_ui');
                         
                         var val = tag_input.data('value');
                         tag_input.parent().find('.tag').remove();
                         $(val.split(',')).each(function(k,v){
                         tag_input.before('<span class="tag">'+v+'<button class="close" type="button">&times;</button></span>');
                         });
                         });
                         */

                    });
        </script>
    </body>
</html>
