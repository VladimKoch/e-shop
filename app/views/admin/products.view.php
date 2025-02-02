<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Admin | Tools</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=ADMIN?>css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?=ADMIN?>font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?=ADMIN?>css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="<?=ADMIN?>js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="<?=ADMIN?>lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="<?=ADMIN?>css/style.css" rel="stylesheet">
    <link href="<?=ADMIN?>css/style-responsive.css" rel="stylesheet">

    <script src="<?=ADMIN?>js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="<?=PATH?>admin/admin" class="logo"><b>Admin Site</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="<?=PATH?>admin/admin">
                            <i class="fa fa-tasks"></i>
                            <span class="badge bg-theme">4</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 4 pending tasks</p>
                            </li>
                            <li>
                                <a href="<?=PATH?>admin/admin">
                                    <div class="task-info">
                                        <div class="desc">DashGum Admin Panel</div>
                                        <div class="percent">40%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="<?=PATH?>admin/admin">
                                    <div class="task-info">
                                        <div class="desc">Database Update</div>
                                        <div class="percent">60%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="<?=PATH?>admin/admin">
                                    <div class="task-info">
                                        <div class="desc">Product Development</div>
                                        <div class="percent">80%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="<?=PATH?>admin/admin">
                                    <div class="task-info">
                                        <div class="desc">Payments Sent</div>
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                            <span class="sr-only">70% Complete (Important)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="external">
                                <a href="#">See All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="<?=PATH?>admin/admin">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-theme">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 5 new messages</p>
                            </li>
                            <li>
                                <a href="<?=PATH?>admin/admin">
                                    <span class="photo"><img alt="avatar" src="<?=ADMIN?>img/ui-zac.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Zac Snider</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Hi mate, how is everything?
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?=PATH?>admin/admin">
                                    <span class="photo"><img alt="avatar" src="<?=ADMIN?>img/ui-divya.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Divya Manian</span>
                                    <span class="time">40 mins.</span>
                                    </span>
                                    <span class="message">
                                     Hi, I need your help with this.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?=PATH?>admin/admin">
                                    <span class="photo"><img alt="avatar" src="<?=ADMIN?>img/ui-danro.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Dan Rogers</span>
                                    <span class="time">2 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Love your new Dashboard.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?=PATH?>admin/admin">
                                    <span class="photo"><img alt="avatar" src="<?=ADMIN?>img/ui-sherman.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Dj Sherman</span>
                                    <span class="time">4 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Please, answer asap.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?=PATH?>admin/admin">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="login">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile"><img src="<?=ADMIN?>img/ja.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"><?=isset($_SESSION['name'])?$_SESSION['name']:""?></h5>
              	  	
                  <li class="mt">
                      <a class="active" href="<?=PATH?>admin">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <li class="mt">
                      <a class="" href="<?=PATH?>home">
                          <i class="fa fa-home"></i>
                          <span>Home</span>
                      </a>
                  </li>


                  <li class="sub_menu">
                      <a class="" href="<?=PATH?>admin/orders">
                          <i class="fa fa-reorder fa-fw"></i>
                          <span>Orders</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?=PATH?>admin/orders/settings">settings</a></li>
                          <li><a  href="<?=PATH?>admin/orders/panels">Panels</a></li>
                      </ul>
                  </li>
                  <li class="sub_menu">
                      <a class="" href="javascript:;">
                          <i class="fa fa-user"></i>
                          <span>Profiles</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?=PATH?>admin/profiles">Profiles</a></li>
                          <li><a  href="<?=PATH?>admin/panels">Panels</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="<?=PATH?>admin/products" >
                          <i class="fa fa-barcode"></i>
                          <span>Products</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?=PATH?>admin/products/add">Add new product</a></li>
                          <li><a  href="<?=PATH?>admin/products/edit">Edit product</a></li>
                          <li><a  href="<?=PATH?>admin/products/delete">Delete product</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-list-alt"></i>
                          <span>Categories</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?=PATH?>admin/new_category">Add new Category</a></li>
                          <li><a  href="<?=PATH?>admin/buttons">Buttons</a></li>
                          <li><a  href="<?=PATH?>admin/panels">Panels</a></li>
                      </ul>
                  </li>
            

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Components</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?=PATH?>admin/calendar">Calendar</a></li>
                          <li><a  href="<?=PATH?>admin/gallery">Gallery</a></li>
                          <li><a  href="<?=PATH?>admin/todo_list">Todo List</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Extra Pages</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?=PATH?>admin/blank_page">Blank Page</a></li>
                          <li><a  href="<?=PATH?>admin/lock_screen">Lock Screen</a></li>
                      </ul>
                  </li>
             
            
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Graphs</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?=PATH?>admin/morris">Morris</a></li>
                          <li><a  href="<?=PATH?>admin/chartjs">Chartjs</a></li>
                      </ul>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      

      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
         
			
		</section><!--/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014 - Alvarez.is
              <a href="blank.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?=ADMIN?>js/jquery.js"></script>
    <script src="<?=ADMIN?>js/bootstrap.min.js"></script>
    <script src="<?=ADMIN?>js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="<?=ADMIN?>js/jquery.ui.touch-punch.min.js"></script>
    <script class="include" type="text/javascript" src="<?=ADMIN?>js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?=ADMIN?>js/jquery.scrollTo.min.js"></script>
    <script src="<?=ADMIN?>js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="<?=ADMIN?>js/common-scripts.js"></script>

    <!--script for this page-->
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
