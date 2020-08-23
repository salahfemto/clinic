<!DOCTYPE html>
<html lang="en">

<head>
   <base href="/">
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
   <title>لوحة التحكم</title>
   <link rel="icon" type="image/x-icon" href="assets/img/logo.png" />
   <link href="assets/css/loader.css" rel="stylesheet" type="text/css" />
   <script src="assets/js/loader.js"></script>

   <!-- BEGIN GLOBAL MANDATORY STYLES -->
   <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
   <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
   <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />

   <!-- END GLOBAL MANDATORY STYLES -->

   <link href="plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
   <link href="assets/css/dashboard/dash_2.css" rel="stylesheet" type="text/css" />

   <link href="https://fonts.googleapis.com/css2?family=Almarai&display=swap" rel="stylesheet">

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="assets/js/libs/jquery-3.1.1.min.js"></script>

   <link rel="stylesheet" type="text/css" href="plugins/table/datatable/datatables.css">
   <link rel="stylesheet" type="text/css" href="plugins/table/datatable/dt-global_style.css">



   <link href="assets/css/custom.css" rel="stylesheet" type="text/css" />

</head>

<body>
   <!-- BEGIN LOADER -->
   <div id="load_screen">
      <div class="loader">
         <div class="loader-content">
            <div class="spinner-grow align-self-center"></div>
         </div>
      </div>
   </div>
   <!--  END LOADER -->

   <!--  BEGIN NAVBAR  -->
   <div class="header-container fixed-top">
      <header class="header navbar navbar-expand-sm">

         <ul class="navbar-nav theme-brand flex-row  text-center">
            <li class="nav-item theme-logo">
               <a href="teacher">
                  <img src="assets/img/logo.png" class="navbar-logo" alt="logo">
               </a>
            </li>
            <li class="nav-item theme-text">
               <a href="teacher" class="nav-link"> Clinic </a>
            </li>
            <li class="nav-item toggle-sidebar">
               <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg
                     xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="feather feather-list">
                     <line x1="8" y1="6" x2="21" y2="6"></line>
                     <line x1="8" y1="12" x2="21" y2="12"></line>
                     <line x1="8" y1="18" x2="21" y2="18"></line>
                     <line x1="3" y1="6" x2="3" y2="6"></line>
                     <line x1="3" y1="12" x2="3" y2="12"></line>
                     <line x1="3" y1="18" x2="3" y2="18"></line>
                  </svg></a>
            </li>
         </ul>

      </header>
   </div>
   <!--  END NAVBAR  -->

   <!--  BEGIN MAIN CONTAINER  -->
   <div class="main-container" id="container">

      <div class="overlay"></div>
      <div class="search-overlay"></div>

      <!--  BEGIN SIDEBAR  -->
      <div class="sidebar-wrapper sidebar-theme">

         <nav id="sidebar">
            <div class="profile-info">
               <figure class="user-cover-image"></figure>
               <div class="user-info">
                  <img src="assets/img/avatar.svg" alt="avatar">
                  <h6 class="">{{ $user->name }}</h6>
                  <p class="">
                     @if($user->type == 1)
                     الدكتور
                     @else
                     المساعد
                     @endif
                  </p>
               </div>
            </div>

            <div class="shadow-bottom"></div>

            @include("includes.menu")

         </nav>

      </div>
      <!--  END SIDEBAR  -->

      <!--  BEGIN CONTENT AREA  -->
      <div id="content" class="main-content">
         <div class="layout-px-spacing">
            <div class="row layout-top-spacing">

               @if(\Session::has('error'))
               <div class="col-12 g">
                  <div class="alert alert-danger">
                     {!! \Session::get('error') !!}
                  </div>
               </div>
               @endif

               @if(\Session::has('success'))
               <div class="col-12 g">
                  <div class="alert alert-success">
                     {!! \Session::get('success') !!}
                  </div>
               </div>
               @endif