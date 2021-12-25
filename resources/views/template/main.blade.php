@auth
<?php $user = Auth::user();
$name = ucwords($user->name);
$user_type = ucfirst($user->user_type);
$image_path = $user->img_path;
$outlet = 'Rural Ayruvedic Hospital Kesbawa';
\App::setLocale(Session::get('locale'));
?>


<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Smart Hospitals | @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- daterange picker -->
    <link rel="stylesheet" href="{{asset('bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet"
        href="{{asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    {{-- date picker start --}}
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    {{-- date picker end --}}



    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('bower_components/Ionicons/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/skins/skin-blue.min.css')}}">
    <link rel="stylesheet" href="{{asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
    <link rel="stylesheet"
        href="{{asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">


    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

    @yield('custom_style_sheets')
    <link rel="stylesheet" href="{{ URL::asset('/css/bsutility.css') }}">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <link rel="shortcut icon" type="image/png" href="{{asset('images/logo.png')}}" />

    <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>

    <style>
        @yield('custom_styles') .spinner {
            margin: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            width: 50px;
            height: 40px;
            text-align: center;
            font-size: 20px;
            z-index: 9999;
        }

        input[readonly],
        input[readonly="readonly"] {
            background-color: white !important;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 16px;
            font-weight: 300
        }

        .spinner>div {

            background-color: #2A98E5;
            height: 100%;
            width: 6px;
            display: inline-block;

            -webkit-animation: sk-stretchdelay 1.2s infinite ease-in-out;
            animation: sk-stretchdelay 1.2s infinite ease-in-out;
        }

        .spinner .rect2 {
            -webkit-animation-delay: -1.1s;
            animation-delay: -1.1s;
        }

        .spinner .rect3 {
            -webkit-animation-delay: -1.0s;
            animation-delay: -1.0s;
        }

        .spinner .rect4 {
            -webkit-animation-delay: -0.9s;
            animation-delay: -0.9s;
        }

        .spinner .rect5 {
            -webkit-animation-delay: -0.8s;
            animation-delay: -0.8s;
        }

        @-webkit-keyframes sk-stretchdelay {

            0%,
            40%,
            100% {
                -webkit-transform: scaleY(0.4)
            }

            20% {
                -webkit-transform: scaleY(1.0)
            }
        }

        @keyframes sk-stretchdelay {

            0%,
            40%,
            100% {
                transform: scaleY(0.4);
                -webkit-transform: scaleY(0.4);
            }

            20% {
                transform: scaleY(1.0);
                -webkit-transform: scaleY(1.0);
            }
        }

        #preloader {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background-color: #F9FDFF;
            background-position: center;
        }

        #preloader1 {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background-color: rgba(0, 0, 0, 0.56);
            background-position: center;
        }
    </style>



</head>

<body onload="startTime();setdate()" class="hold-transition skin-blue sidebar-mini">

    <script>
        $(document).ready(function () {
    $(document).ready(function () {

        $(document).ajaxSend(function(){
            $("#preloader1").fadeIn();
            $("#spinner").fadeIn();
        });

        $(document).ajaxComplete(function(){
            $("#preloader1").fadeOut();
            $("#spinner").fadeOut();
        });
    });

});

        function setdate(){
            var today = new Date();
            var dd = String(today.getDate()).padStart(2, '0');
            var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
            var yyyy = today.getFullYear();
            today =  dd+ '-'+ mm  + '-' + yyyy;
            document.getElementById("today").innerHTML=today;
        }

        function startTime() {
          var today = new Date();
          var h = today.getHours();
          var c = ((h > 12) ? 'pm' : 'am');
          h=h%12;
          if(h==0){
            h=12;
          }
          var m = today.getMinutes();
          var s = today.getSeconds();
          m = checkTime(m);
          s = checkTime(s);
          document.getElementById('time').innerHTML =
          h + ":" + m + ":" + s + " "+c;
          var t = setTimeout(startTime, 1000);
        }
        function checkTime(i) {
          if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
          return i;
        }
    </script>

    <div id="preloader"></div>
    <div style="display:none" id="preloader1"></div>
    <div id="spinner" class="spinner">
        <div class="rect1"></div>
        <div class="rect2"></div>
        <div class="rect3"></div>
        <div class="rect4"></div>
        <div class="rect5"></div>
    </div>

    <div class="wrapper">

        <!-- Main Header -->
        <header class="main-header skin-green">

            <!-- Logo -->
            <a href="/" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini">AQ</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg">DR. A.Q. KHAN </span>
            </a>

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <i class="fas fa-sliders-h"></i>
                    <span class="sr-only">Toggle Navigation</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->

                        <li class="nav-item mr-auto">
                            <p style="padding-top:1.3rem;font-weight:400;margin-right:1.5vw;color:ivory;font-size:1.7rem">
                                <span class="mr-3" id="today"></span><span id="time"></span></p>
                        </li>

                       {{-- <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                @if(\Session::get('locale')=='si')
                                සිං
                                @else
                                EN
                                @endif
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">Select The Language</li>
                                <li>
                                    <ul class="menu">
                                        <li><a class="text-muted" href="{{route('lang','en')}}">English</a></li>
                                        <li><a class="text-muted" href="{{route('lang','si')}}">සිංහල</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li> --}}


                        <!-- User Account Menu -->
                        <li class="dropdown user user-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!-- The user image in the navbar-->
                                <img src="{{asset("$image_path")}}" class="user-image" alt="User Image">
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span class="hidden-xs">{{ucwords($name)}}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- The user image in the menu -->
                                <li class="user-header">
                                    <img src="{{asset("$image_path")}}" class="img-circle" alt="User Image">

                                    <p>
                                        {{$name}}
                                        <small>{{$user_type}}</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                <h5 class="text-center"> DR ABDUL QADIR KHAN HOSPITAL</h5>
                                <!-- CHANGES HERE -->
                                <!-- <h5 class="text-center">{{$outlet}}</h5> -->
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="{{route('profile')}}" class="btn btn-default btn-flat">Profile</a>
                                    </div>

                                    <div class="pull-right">
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <input type="submit" href="#" class="btn btn-default btn-flat"
                                                value="Sign Out">
                                        </form>

                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                    </ul>
                </div>
            </nav>
        </header>

        <aside class="main-sidebar">

            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">

                <!-- Sidebar user panel (optional) -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="{{asset("$image_path")}}" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p>{{$name}}</p>
                        <!-- Status -->
                        <a href="#"><i class="fas fa-circle text-success"></i> Online</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->

                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header"> Main Menu</li>
                    <li class="{{Active::checkRoute('dash')}}"><a href="{{route('dash')}}">
                            <i class="fas fa-tachometer-alt"></i>
                            <span> Dashboard</span></a>
                    </li>

                    <li
                        class="treeview {{Active::checkRoute(['accountsView','ChartofaccountView','JournalvoucherView','GeneratesalaryView','MonthlytransactionfileView','IncometaxchallanView','StocktransferchallanView','CashbookView','BankbookView'])}}">
                        <a href="#"><i class="fa fa-file-invoice-dollar"></i><span> ACCOUNTS </span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="{{Active::checkRoute('accountsView')}}"><a href="{{route('accountsView')}}"><i
                                class="fa fa-file-invoice-dollar" ></i><span>ACCOUNT</span></a>
                            </li>
                            <li class="{{Active::checkRoute('ChartofaccountView')}}"><a href="{{route('ChartofaccountView')}}"><i
                                class="fa fa-file-invoice-dollar" ></i><span>CHART OF ACCOUNT</span></a>
                            </li>
                            <li class="{{Active::checkRoute('JournalvoucherView')}}"><a href="{{route('JournalvoucherView')}}"><i
                                class="fa fa-file-invoice-dollar" ></i><span>JOURNAL VOUCHER</span></a>
                            </li>
                            <li class="{{Active::checkRoute('GeneratesalaryView')}}"><a href="{{route('GeneratesalaryView')}}"><i
                                class="fa fa-file-invoice-dollar" ></i><span>GENERATE SALARY</span></a>
                            </li>
                            <li class="{{Active::checkRoute('MonthlytransactionfileView')}}"><a href="{{route('MonthlytransactionfileView')}}"><i
                                class="fa fa-file-invoice-dollar" ></i><span>MONTHLY TRANSACTION</span></a>
                            </li>
                            <li class="{{Active::checkRoute('IncometaxchallanView')}}"><a href="{{route('IncometaxchallanView')}}"><i
                                class="fa fa-file-invoice-dollar" ></i><span>INCOME TAX CHALLAN</span></a>
                            </li>
                            <li class="{{Active::checkRoute('StocktransferchallanView')}}"><a href="{{route('StocktransferchallanView')}}"><i
                                class="fa fa-file-invoice-dollar" ></i><span>STOCK TRANSFER CHALLAN</span></a>
                            </li>
                            <li class="{{Active::checkRoute('CashbookView')}}"><a href="{{route('CashbookView')}}"><i
                                class="fa fa-file-invoice-dollar" ></i><span>CASH BOOK</span></a>
                            </li>
                            <li class="{{Active::checkRoute('BankbookView')}}"><a href="{{route('BankbookView')}}"><i
                                class="fa fa-file-invoice-dollar" ></i><span>BANK BOOK</span></a>
                            </li>

                        </ul>
                    </li>

                    <li
                        class="treeview {{Active::checkRoute(['DailyattendancefileView','EmployeemasterfileView','DesignationfileView','HolidayfileView'])}}">
                        <a href="#"><i class="fa fa-users"></i><span> HRMS</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="{{Active::checkRoute('DailyattendancefileView')}}"><a href="{{route('DailyattendancefileView')}}"><i
                                class="fa fa-users" ></i><span> DAILY ATTENDANCE FILE </span></a>
                            </li>
                            <li class="{{Active::checkRoute('EmployeemasterfileView')}}"><a href="{{route('EmployeemasterfileView')}}"><i
                                class="fa fa-users" ></i><span> EMPLOYEE MASTER FILE </span></a>
                            </li>
                            <li class="{{Active::checkRoute('DesignationfileView')}}"><a href="{{route('DesignationfileView')}}"><i
                                class="fa fa-users" ></i><span> DESIGNATION FILE </span></a>
                            </li>
                            <li class="{{Active::checkRoute('HolidayfileView')}}"><a href="{{route('HolidayfileView')}}"><i
                                class="fa fa-users" ></i><span> HOLIDAY FILE </span></a>
                            </li>
                        </ul>
                    </li>

                    <li class="{{Active::checkRoute('HIMSView')}}"><a href="{{route('HIMSView')}}"><i
                                class="fa fa-briefcase-medical" ></i><span>HIMS</span></a>
                    </li>

                    <li
                        class="treeview {{Active::checkRoute(['PurchaseReturnView','PurchaseInvoiceView','PurchaseOrderView'])}}">
                        <a href="#"><i class="fa fa-store"></i><span> PURCHASE</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="{{Active::checkRoute('PurchaseReturnView')}}"><a href="{{route('PurchaseReturnView')}}"><i
                                class="fa fa-store" ></i><span> PURCHASE RETURN </span></a>
                            </li>
                            <li class="{{Active::checkRoute('PurchaseInvoiceView')}}"><a href="{{route('PurchaseInvoiceView')}}"><i
                                class="fa fa-store" ></i><span> PURCHASE INVOICE </span></a>
                            </li>
                            <li class="{{Active::checkRoute('PurchaseOrderView')}}"><a href="{{route('PurchaseOrderView')}}"><i
                                class="fa fa-store" ></i><span> PURCHASE ORDER </span></a>
                            </li>
                        </ul>
                    </li>

                    <li
                        class="treeview {{Active::checkRoute(['SalesReturnView','SalesInvoiceView','Receipt&refundView'])}}">
                        <a href="#"><i class="fa fa-cart-arrow-down"></i><span> Sales</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="{{Active::checkRoute('SalesReturnView')}}"><a href="{{route('SalesReturnView')}}"><i
                                class="fa fa-cart-arrow-down" ></i><span> Sales Return </span></a>
                            </li>
                            <li class="{{Active::checkRoute('SalesInvoiceView')}}"><a href="{{route('SalesInvoiceView')}}"><i
                                class="fa fa-cart-arrow-down"></i><span> Sales Invoice </span></a>
                            </li>
                            <li class="{{Active::checkRoute('Receipt&refundView')}}"><a href="{{route('Receipt&refundView')}}"><i
                                class="fa fa-cart-arrow-down"></i><span> Receipt & refund </span></a>
                            </li>
                        </ul>
                    </li>

                    <li
                        class="treeview {{Active::checkRoute(['InventoryView','StorefileView','ProductmasterfileView','StoreadjustmentView','ProductcategoryfileView'])}}">
                        <a href="#"><i class="fa fa-warehouse"></i><span> INVENTORY</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="{{Active::checkRoute('InventoryView')}}"><a href="{{route('InventoryView')}}"><i
                                class="fa fa-warehouse"></i><span> INVENTORY </span></a>
                            </li>
                            <li class="{{Active::checkRoute('StorefileView')}}"><a href="{{route('StorefileView')}}"><i
                                class="fa fa-warehouse" ></i><span>  STORE FILE  </span></a>
                            </li>
                            <li class="{{Active::checkRoute('ProductmasterfileView')}}"><a href="{{route('ProductmasterfileView')}}"><i
                                class="fa fa-warehouse" ></i><span> PRODUCT MASTER FILE </span></a>
                            </li>
                            <li class="{{Active::checkRoute('StoreadjustmentView')}}"><a href="{{route('StoreadjustmentView')}}"><i
                                class="fa fa-warehouse" ></i><span> STORE ADJUSTMENT </span></a>
                            </li>
                            <li class="{{Active::checkRoute('ProductcategoryfileView')}}"><a href="{{route('ProductcategoryfileView')}}"><i
                                class="fa fa-warehouse" ></i><span> PRODUCT CATEGORY FILE </span></a>
                            </li>
                        </ul>
                    </li>

                     
                    <li
                        class="treeview {{Active::checkRoute(['generalledgerView','OPDReportsView','SalesandPurchaseReportsView','StockReportsView','ChallanReportsView','FinancialReportsView'])}}">
                        <a href="#"><i class="fa fa-file-text"></i><span> REPORTS</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="{{Active::checkRoute('generalledgerView')}}"><a href="{{route('generalledgerView')}}"><i
                                class="fa fa-file-text" ></i><span> General Ledger Reports </span></a>
                            </li>
                            <li class="{{Active::checkRoute('OPDReportsView')}}"><a href="{{route('OPDReportsView')}}"><i
                                class="fa fa-file-text" ></i><span> OPD Reports </span></a>
                            </li>
                            <li class="{{Active::checkRoute('SalesandPurchaseReportsView')}}"><a href="{{route('SalesandPurchaseReportsView')}}"><i
                                class="fa fa-file-text" ></i><span> Sales and Purchase Reports </span></a>
                            </li>
                            <li class="{{Active::checkRoute('StockReportsView')}}"><a href="{{route('StockReportsView')}}"><i
                                class="fa fa-file-text" ></i><span> Stock Reports </span></a>
                            </li>
                            <li class="{{Active::checkRoute('ChallanReportsView')}}"><a href="{{route('ChallanReportsView')}}"><i
                                class="fa fa-file-text" ></i><span> Challan Reports </span></a>
                            </li>
                            <li class="{{Active::checkRoute('FinancialReportsView')}}"><a href="{{route('FinancialReportsView')}}"><i
                                class="fa fa-file-text" ></i><span> Financial Reports </span></a>
                            </li>
                        </ul>
                    </li>

                    <li
                        class="treeview {{Active::checkRoute(['AdministrationView','LabtestView','TherapyregistrationView','TherapeuticservicesView','AdmissiondetailsView','DayclosingView','AmbulancereceiptView','OPDslipView','LabtestapprovalView'])}}">
                        <a href="#"><i class="fa fa-users-cog"></i><span> ADMINISTRATION</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="{{Active::checkRoute('AdministrationView')}}"><a href="{{route('AdministrationView')}}"><i
                                class="fa fa-users-cog"></i><span> ADMINISTRATION </span></a>
                            </li>
                            <li class="{{Active::checkRoute('LabtestView')}}"><a href="{{route('LabtestView')}}"><i
                                class="fa fa-users-cog"></i><span> LAB TEST </span></a>
                            </li>
                            <li class="{{Active::checkRoute('TherapyregistrationView')}}"><a href="{{route('TherapyregistrationView')}}"><i
                                class="fa fa-users-cog"></i><span> THERAPY REGISTRATION </span></a>
                            </li>
                            <li class="{{Active::checkRoute('TherapeuticservicesView')}}"><a href="{{route('TherapeuticservicesView')}}"><i
                                class="fa fa-users-cog"></i><span> THERAPEUTIC SERVICES </span></a>
                            </li>
                            <li class="{{Active::checkRoute('AdmissiondetailsView')}}"><a href="{{route('AdmissiondetailsView')}}"><i
                                class="fa fa-users-cog"></i><span> ADMISSION DETAIL </span></a>
                            </li>
                            <li class="{{Active::checkRoute('DayclosingView')}}"><a href="{{route('DayclosingView')}}"><i
                                class="fa fa-users-cog"></i><span> DAY CLOSING </span></a>
                            </li>
                            <li class="{{Active::checkRoute('AmbulancereceiptView')}}"><a href="{{route('AmbulancereceiptView')}}"><i
                                class="fa fa-users-cog"></i><span> AMBULANCE RECEIPT </span></a>
                            </li>
                            <li class="{{Active::checkRoute('OPDslipView')}}"><a href="{{route('OPDslipView')}}"><i
                                class="fa fa-users-cog"></i><span> OPD SLIP </span></a>
                            </li>
                            <li class="{{Active::checkRoute('LabtestapprovalView')}}"><a href="{{route('LabtestapprovalView')}}"><i
                                class="fa fa-users-cog"></i><span> LAB TEST APPROVAL </span></a>
                            </li> 
                        </ul>
                    </li>

                    
                    {{-- more dropdown code here --}}

                   
                     
                     {{-- <li>
                        <a href="https://adminlte.io/themes/AdminLTE/index2.html" target="_blank">
                            <i class="fas fa-folder-plus"></i>
                            <span> Template</span>
                        </a>
                    </li> --}}
                </ul>

                <!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
        </aside>
        /*  */ 

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    @yield('content_title')
                    <small>@yield('content_description')</small>
                </h1>
                @yield('breadcrumbs')

            </section>

            <!-- Main content -->
            <section class="content container-fluid">
                @yield('main_content')
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="pull-right hidden-xs">
                Version 1.0
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; {{date('Y')}} <a href="#">DR AQ Hospital System</a>.</strong> All rights reserved.
        </footer>



        <div class="control-sidebar-bg"></div>
    </div>


    <script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.js')}}"></script>
    <script src="{{asset('bower_components/fastclick/lib/fastclick.js')}}"></script>
    <script src="{{asset('dist/js/adminlte.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js"></script>
    <script>
        $("#preloader").fadeOut();
    $("#spinner").fadeOut();
    </script>
    <!--Datepicker-->
    <script src="{{asset('bower_components/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>

    @yield('optional_scripts')

</body>

</html>

@endauth

@guest
"aaaa";
@endguest
