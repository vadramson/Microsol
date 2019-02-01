<?php 
    session_start();
  $_SESSION["login"];
  $_SESSION["acctid"];

?>


<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Microsol - Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link  href="dist/fonts/glyphicons-halflings-regular.svg">
  <link href="css/buttons.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
  <link rel="stylesheet" type="text/css" href="css/animate.min.css" />
  <link rel="stylesheet" type="text/css" href="css/lightbox.css" />
  <link rel="stylesheet" type="text/css" href="css/presets/preset1.css" />
  <link rel="stylesheet" type="text/css" href="css/DateTimePicker.css" />
  <link rel="stylesheet" type="text/css" href="css/presets/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="css/responsive" />
  <link rel="stylesheet" type="text/css" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" />
  <link rel="stylesheet" type="text/css" href="plugins/datatables/jquery.dataTables.min.css" />
  <!--<link href="css/ghpages-materialize.css" rel="stylesheet">-->
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">
  <link rel="stylesheet" href="dist/css/skins/skin-green.min.css">
  <link rel="stylesheet" href="dist/css/skins/skin-purple.min.css">
  <link rel="stylesheet" href="dist/css/skins/skin-red.min.css">
  <link rel="stylesheet" href="dist/css/skins/skin-yellow.min.css">
  
  <style>
      #modules{
          display: block;
          height: 800px;
          overflow-x: scroll;
          background-color: #000\9;
      }
  </style>
  
<!--   <style type="text/css">
			.content
			{
				background-image: url(images/bank.jpg) ; 
			}
                        .content-header
			{
				background-image: url(images/admin_bg.jpg) ; 
			}
		</style>-->
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  
  
  <?php
                   
//  
//        if (!($_SESSION["login"]) || !($_SESSION["password"]) || (($_SESSION["role"])!="ADMINISTRATOR")) {
//            header("location:../index.php");
//        }
//        elseif (!($_SESSION["login"]) || !($_SESSION["password"]) || (($_SESSION["role"])!="comptable")) {
//            header("location:../index.php");
//        }
        
        include_once('../ModelE/db.php');
//        include_once('Login.php');
        include_once('../ModelE/TownModelE/Town.php');
        include_once('../ModelE/TownModelE/TownManager.php');
        include_once('../ModelE/BranchModelE/Branch.php');
        include_once('../ModelE/BranchModelE/BranchManager.php');
        include_once('../ModelE/DptModelE/Department.php');
        include_once('../ModelE/DptModelE/DepartmentManager.php');
        include_once('../ModelE/AcctSetterModelE/AcctSetter.php');
        include_once('../ModelE/AcctSetterModelE/AcctSetterManager.php');
        include_once('../ModelE/Cy_SetterModelE/CySetter.php');
        include_once('../ModelE/Cy_SetterModelE/CySetterManager.php');
        include_once('../ModelE/LoanSetterModelE/LsSetter.php');
        include_once('../ModelE/LoanSetterModelE/LsManager.php');
        include_once('../ModelE/EmployeeModelE/Employee.php');
        include_once('../ModelE/EmployeeModelE/Assign.php');
        include_once('../ModelE/EmployeeModelE/EmployeeManager.php');
        include_once('../ModelE/CustomerModelE/Customer.php');
        include_once('../ModelE/CustomerModelE/CreateBkAccount.php');
        include_once('../ModelE/CustomerModelE/CustomerManager.php');
        include_once('../ModelE/CustomerModelE/BankAccountManager.php');
        include_once('../ModelE/CustomerModelE/CreateBankAccount.php');
        include_once('../ModelE/ConAccountModelE/ConAccount.php');
        include_once('../ModelE/ConAccountModelE/ConAccountManager.php');
        include_once('../ModelE/TravelModelE/Travel.php');
        include_once('../ModelE/TravelModelE/TravelManager.php');
        include_once('../ModelE/LeavesModelE/Leaves.php');
        include_once('../ModelE/LeavesModelE/LeavesManager.php'); 
        include_once('../ModelE/ExpenseModelE/Expense.php');
        include_once('../ModelE/ExpenseModelE/ExpenseManager.php');
        include_once('../ModelE/CurrencyElModelE/Currency.php');
        include_once('../ModelE/CurrencyElModelE/CurrencyManager.php');
        include_once('../ModelE/AssetslModelE/Assets.php');
        include_once('../ModelE/AssetslModelE/AssetsManager.php');
        include_once('../ModelE/BonusModelE/Bonus.php');
        include_once('../ModelE/BonusModelE/BonusManager.php');
        include_once('../ModelE/DeductionModelE/Deduction.php');
        include_once('../ModelE/DeductionModelE/DeductionManager.php');
        include_once('../ModelE/PayrollModelE/Payroll.php');
        include_once('../ModelE/PayrollModelE/PayrollManager.php');
        include_once('../ModelE/SecuritylModelE/Security.php');
        include_once('../ModelE/SecuritylModelE/SecurityManager.php');
        include_once('../ModelE/DepositelModelE/Deposit.php');
        include_once('../ModelE/DepositelModelE/DepositManager.php');
        include_once('../ModelE/WithdrawModelE/Withdraw.php');
        include_once('../ModelE/WithdrawModelE/WithdrawManager.php');
       
?>
  
  
  
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-menu">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="indexadmin.php" class="logo">
<!--       mini logo for sidebar mini 50x50 pixels 
      <span class="logo-mini"><b>A</b>LT</span>
       logo for regular state and mobile devices 
      <span class="logo-lg"><b>Micro</b>Sol</span>-->
<img src="images/logo.gif" class="img-circle" alt="User Image">
    
    </a>
        
    
      
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
<!--      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="glyphicon glyphicon-list">Toggle navigation</span>
      </a>-->
      <a href="#" class="sidebar-toggle"  data-toggle="offcanvas"><i class="fa fa-gears"></i> <span class="glyphicon glyphicon-menu-hamburger"> Toggle Sidebar </span></a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <!-- Menu toggle button -->
            
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the messages -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <!-- User Image -->
                        <img src="images/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <!-- Message title and timestamp -->
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <!-- The message -->
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
                <!-- /.menu -->
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- /.messages-menu -->
           
          <!-- Notifications Menu -->
          <li class="dropdown notifications-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- Inner Menu: contains the notifications -->
                <ul class="menu">
                  <li><!-- start notification -->
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <!-- end notification -->
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks Menu -->
          <li class="dropdown tasks-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- Inner menu: contains the tasks -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <!-- Task title and progress text -->
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <!-- The progress bar -->
                      <div class="progress xs">
                        <!-- Change the css width attribute to simulate progress -->
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="images/user2-160x160.jpg" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">
                  <?php echo $_SESSION["login"] ;?>  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
              </span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="images/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Vadrama NDISANG - Web Developer
                  <small>Employee since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="button glow button-primary">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="../index.php?lock" class="button glow button-caution" >Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
              <a href="#"  data-toggle="control-sidebar"><i class="fa fa-gears"></i> <span class="glyphicon glyphicon-menu-hamburger"> </span></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="images/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION["login"]  ;?></p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" id="modules">

        <li class="treeview">
            <a href="#" class="active"><i class="fa fa-link"></i> <span class="glyphicon glyphicon-menu-hamburger"> Manage Towns</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="indexadmin.php?page=<?php echo base64_encode('TownVIeW/addtown');?>"> <span>Add Town </span></a></li>
            <li><a href="indexadmin.php?page=<?php echo base64_encode('TownVIeW/consulttown');?>"><span>View Towns </span></a></li>
          </ul>
        </li>
        <li class="treeview">
            <a href="#"><i class="fa fa-link"></i> <span class="glyphicon glyphicon-menu-hamburger"> Manage Branches</span> <i class="fa fa-angle-left pull-right"></i></a>
           <ul class="treeview-menu">
            <li><a href="indexadmin.php?page=<?php echo base64_encode('BranchVIeW/addbranch');?>"> <span>Add Branch </span></a></li>
            <li><a href="indexadmin.php?page=<?php echo base64_encode('BranchVIeW/consultbranch');?>"><span>View Branches </span></a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span class="glyphicon glyphicon-menu-hamburger"> Manage Departments</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="indexadmin.php?page=<?php echo base64_encode('DptVIeW/adddpt');?>"> <span>Add Department </span></a></li>
            <li><a href="indexadmin.php?page=<?php echo base64_encode('DptVIeW/consultdpt');?>"><span>View Departments </span></a></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span class="glyphicon glyphicon-menu-hamburger"> Account Setters </span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="indexadmin.php?page=<?php echo base64_encode('AcctSetterVIeW/addacctsetter');?>"> <span>Add Account Types </span></a></li>
            <li><a href="indexadmin.php?page=<?php echo base64_encode('AcctSetterVIeW/consultacctsetter');?>"><span>View Account Types </span></a></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span class="glyphicon glyphicon-menu-hamburger"> Control Account </span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="indexadmin.php?page=<?php echo base64_encode('ConAcct_VIeW/addconAcct');?>"> <span>Add Control Account </span></a></li>
            <li><a href="indexadmin.php?page=<?php echo base64_encode('ConAcct_VIeW/consultconAcct');?>"><span>View Control Account </span></a></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span class="glyphicon glyphicon-menu-hamburger"> Currency Setters </span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="indexadmin.php?page=<?php echo base64_encode('CurrencyVIeW/addcurrency');?>"> <span>Add Currency </span></a></li>
            <li><a href="indexadmin.php?page=<?php echo base64_encode('CurrencyVIeW/consultcurrency');?>"><span>View Currencies </span></a></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span class="glyphicon glyphicon-menu-hamburger"> Loan Setters </span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="indexadmin.php?page=<?php echo base64_encode('LoanSetterVIeW/addloansetter');?>"> <span>Add Loan Type </span></a></li>
            <li><a href="indexadmin.php?page=<?php echo base64_encode('LoanSetterVIeW/consultloansetter');?>"><span>View Loan Types </span></a></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span class="glyphicon glyphicon-menu-hamburger"> Manage Employee </span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="indexadmin.php?page=<?php echo base64_encode('EmployeeVIeW/addemployee');?>"> <span>Enter Employee Details </span></a></li>
            <li><a href="indexadmin.php?page=<?php echo base64_encode('EmployeeVIeW/assignemployee');?>"><span>Assign Employee </span></a></li>
            <li><a href="indexadmin.php?page=<?php echo base64_encode('EmployeeVIeW/consultemployee');?>"><span>View Employees </span></a></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span class="glyphicon glyphicon-menu-hamburger"> Manage Customers </span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="indexadmin.php?page=<?php echo base64_encode('CustomerVIeW/addcustomer');?>"> <span>Enter Customer Details </span></a></li>
            <li><a href="indexadmin.php?page=<?php echo base64_encode('CustomerVIeW/createCustomerAccount');?>"><span>Enter Bank Account Details </span></a></li>
            <li><a href="indexadmin.php?page=<?php echo base64_encode('CustomerVIeW/createBankAccount');?>"><span>Create Bank Account </span></a></li>
            <li><a href="indexadmin.php?page=<?php echo base64_encode('CustomerVIeW/consultcustomer');?>"><span>View Account Holders </span></a></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span class="glyphicon glyphicon-menu-hamburger"> Manage Travel Orders </span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="indexadmin.php?page=<?php echo base64_encode('TravelVIeW/addtravelRequest');?>"><span> Add Travel Request </span></a></li>
            <li><a href="indexadmin.php?page=<?php echo base64_encode('TravelVIeW/consultravelRequest');?>"><span>View Travel Requests </span></a></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span class="glyphicon glyphicon-menu-hamburger"> Manage Leaves </span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="indexadmin.php?page=<?php echo base64_encode('LeavesVIeW/addLeave');?>"><span> Add Leaves Request </span></a></li>
            <li><a href="indexadmin.php?page=<?php echo base64_encode('LeavesVIeW/consultLeave');?>"><span>View Leaves Requests </span></a></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span class="glyphicon glyphicon-menu-hamburger"> Manage Requisitions </span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="indexadmin.php?page=<?php echo base64_encode('ExpenseVIeW/addExpense');?>"><span> Add Requisition </span></a></li>
            <li><a href="indexadmin.php?page=<?php echo base64_encode('ExpenseVIeW/consultExpense');?>"><span>View Requisitions </span></a></li>
          </ul>
        </li>
        
        <li class="treeview">
            <a href="#"><i class="fa fa-link"></i> <span data-toggle = "tooltip" data-placement = "top" title=" Buy and Sell Foreign Currency" class="glyphicon glyphicon-menu-hamburger"> Currency Exchange </span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="indexadmin.php?page=<?php echo base64_encode('CurrencyEXVIeW/buyCurrency');?>"><span> Buy Currency </span></a></li>
            <li><a href="indexadmin.php?page=<?php echo base64_encode('CurrencyEXVIeW/currencyhistory');?>"><span>Currency History </span></a></li>
          </ul>
        </li>
        
        <li class="treeview">
            <a href="#"><i class="fa fa-link"></i> <span data-toggle = "tooltip" data-placement = "top" title=" Buy and Sell Assets " class="glyphicon glyphicon-menu-hamburger"> Manage Assets </span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="indexadmin.php?page=<?php echo base64_encode('AssetsVIeW/buyAssets');?>"><span> Buy Assets </span></a></li>
            <li><a href="indexadmin.php?page=<?php echo base64_encode('AssetsVIeW/saleAssets');?>"><span>Sale Assets </span></a></li>
            <li><a href="indexadmin.php?page=<?php echo base64_encode('AssetsVIeW/viewAssets');?>"><span>View Assets </span></a></li>
          </ul>
        </li>
        
         <li class="treeview">
            <a href="#"><i class="fa fa-link"></i> <span data-toggle = "tooltip" data-placement = "top" title=" Buy and Sell Securities " class="glyphicon glyphicon-menu-hamburger"> Manage Securities </span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="indexadmin.php?page=<?php echo base64_encode('SecurityVIeW/buySecurity');?>"><span> Buy Security </span></a></li>
            <li><a href="indexadmin.php?page=<?php echo base64_encode('SecurityVIeW/saleSecurity');?>"><span>Sale Security </span></a></li>
            <li><a href="indexadmin.php?page=<?php echo base64_encode('SecurityVIeW/viewSecurity');?>"><span>View Security </span></a></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span class="glyphicon glyphicon-menu-hamburger"> Manage Bonuses </span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="indexadmin.php?page=<?php echo base64_encode('BonusVIeW/addbonus');?>"><span> Add Bonus </span></a></li>
            <li><a href="indexadmin.php?page=<?php echo base64_encode('BonusVIeW/consultbonus');?>"><span>View Bonus </span></a></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span class="glyphicon glyphicon-menu-hamburger"> Manage Deductions </span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="indexadmin.php?page=<?php echo base64_encode('DeductionVIeW/adddeduction');?>"><span> Add Deduction </span></a></li>
            <li><a href="indexadmin.php?page=<?php echo base64_encode('DeductionVIeW/consultdeduction');?>"><span>View Deductions </span></a></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span class="glyphicon glyphicon-menu-hamburger"> Manage Payroll </span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="indexadmin.php?page=<?php echo base64_encode('PayrollVIeW/calPayroll');?>"><span> Calculate Payroll </span></a></li>
            <li><a href="indexadmin.php?page=<?php echo base64_encode('PayrollVIeW/consultPayroll');?>"><span>View Payroll </span></a></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span class="glyphicon glyphicon-menu-hamburger"> Manage Deposits </span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="indexadmin.php?page=<?php echo base64_encode('DepositVIeW/depositView');?>"><span> Deposit Money </span></a></li>
            <li><a href="indexadmin.php?page=<?php echo base64_encode('DepositVIeW/depositHistory');?>"><span>Deposit History </span></a></li>
          </ul>
        </li>
        
         <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span class="glyphicon glyphicon-menu-hamburger"> Manage Withdrawals </span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="indexadmin.php?page=<?php echo base64_encode('WithdrawVIeW/withdrawView');?>"><span> Make Withdrawals </span></a></li>
            <li><a href="indexadmin.php?page=<?php echo base64_encode('WithdrawVIeW/withdrawView_byCheque');?>"><span> Cash Checque </span></a></li>
            <li><a href="indexadmin.php?page=<?php echo base64_encode('WithdrawVIeW/withdrawHistory');?>"><span>Withdrawals History </span></a></li>
          </ul>
        </li>
        
	<li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span class="glyphicon glyphicon-menu-hamburger"> Multilevel 2</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
              <li><a href="#"> <span class="glyphicon glyphicon-menu-hamburger"> Link in level 2 </span></a></li>
            <li><a href="#">Link in level 2</a></li>
	    <li><a href="#">Link in level 2</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-image: url('images/bckg.jpg');">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Administrator Dash Board
        <small>Exploit the options on the left side bar to Work! </small>
      </h1>
        <!--<a href="javascript:history.go(-1)"> <button type="button" class="btn btn-success"> Back </button> </a>-->
      <ol class="breadcrumb">
          <li><a href="javascript:history.go(-1)"><i data-toggle = "tooltip" data-placement = "left" title="click here to return to previous page" class="button button-pill button-primary">  Back </i></a></li>
        <!--<li class="active"> <a href="javascript:history.go(+1)"> Next </a></li>-->
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->
      
      <?php
     
       if (isset($_REQUEST["page"])) {
                        $page = base64_decode($_REQUEST["page"]) . ".php";
                        if (file_exists($page)) {
                            @include($page);
                        } else {
//                            echo "Cette page n'est plus sur votre serveur";
                            header("location: 404admin.php ");
                        }
                    } else  {
//                        @include("../Vue/pagedegarde.php");
                    }


//      @include("profilvue/profil.php");
//      @include("Modal/modal.php");

?>
      
      

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      <strong> Designed by <a href="#"> vadramsonsolutions </a></strong> 
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">UNIVERS BINAIRE</a>.</strong> 
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
<!--    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>-->
    <!-- Tab panes -->
    <!--<div class="tab-content">-->
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
<!--        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript::;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>-->
        <!-- /.control-sidebar-menu -->

        <!--<h3 class="control-sidebar-heading">Tasks Progress</h3>-->
<!--        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript::;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>-->
        <!-- /.control-sidebar-menu -->

      </div>
  </aside>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <!--<div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>-->
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
<!--      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
           /.form-group 
        </form>
      </div>-->
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <!--<div class="control-sidebar-bg"></div>-->
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.0 -->
<script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="plugins/fastclick/fastclick.min.js"></script>
<script src="plugins/ckeditor/lang/fr-ca.js"></script>
<script src="plugins/chartjs/Chart.min.js"></script>
<script src="plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script> 
<script src="dist/js/demo.js"></script>
<script src="js/script1.js"></script>
<script src="js/buttons.js"></script>
<script src="js/datetimepicker_css.js"></script>
<script src="js/send_message.js"></script>



 
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->


</body>
</html>
