@extends('auth.layout.sidebar')
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    

    <!-- vendor css -->
    <link rel="stylesheet" href="css/style.css" />

</head>
<body class="">
    <header class="navbar pcoded-header navbar-expand-lg navbar-light header-dark">
		
			
        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
            <a href="#!" class="b-brand">
            </a>
            <a href="#!" class="mob-toggler">
                <i class="feather icon-more-vertical"></i>
            </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="#!" class="pop-search"><i class="feather icon-search"></i></a>
                    <div class="search-bar">
                        <input type="text" class="form-control border-0 shadow-none" placeholder="Search here">
                        <button type="button" class="close" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li>
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                            <i class="icon feather icon-bell"></i>
                            <span class="badge badge-pill badge-danger">5</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right notification">
                            <div class="noti-head">
                                <h6 class="d-inline-block m-b-0">Notifications</h6>
                                <div class="float-right">
                                    <a href="#!" class="m-r-10">mark as read</a>
                                    <a href="#!">clear all</a>
                                </div>
                            </div>
                            <ul class="noti-body">
                                <li class="n-title">
                                    <p class="m-b-0">NEW</p>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>John Doe</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>5 min</span></p>
                                            <p>New ticket Added</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="noti-footer">
                                <a href="#!">show all</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown drp-user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="feather icon-user"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            <div class="pro-head">
                                <img src="" class="img-radius" alt="User-Profile-Image">
                                <span>John Doe</span>
                                <a href="auth-signin.html" class="dud-logout" title="Logout">
                                    <i class="feather icon-log-out"></i>
                                </a>
                            </div>
                            <ul class="pro-body">
                                <li><a href="user-profile.html" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        
    
</header>
<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Dashboard</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#!"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Dashboard</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="card-columns" style="display: flex; flex-wrap: wrap; justify-content: space-around; align-items: stretch;">
            <div class="card" style="width: 300px; margin: 10px; padding: 20px; border: 1px solid #ccc; border-radius: 5px; text-align: center;">
              <img class="img-fluid card-img-top" src="https://psmag.com/.image/ar_1:1%2Cc_fill%2Ccs_srgb%2Cfl_progressive%2Cq_auto:good%2Cw_1200/MTMxODI3Mjk4OTkwMDgyMDU4/shutterstock_125158133jpg.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Project Ideas To Stimulate Your Creativity</h5>
                <p class="card-text">Completing creative projects can help you relax and develop your skills. When you have free time, consider working on creative projects that can benefit you personally and professionally. You can try dozens of projects that are quick and easy to complete.</p>
              </div>
            </div>
            <div class="card" style="width: 300px; margin: 10px; padding: 20px; border: 1px solid #ccc; border-radius: 5px; text-align: center;">
              <img class="img-fluid card-img-top" src="https://scontent.fhan15-2.fna.fbcdn.net/v/t39.30808-6/365510167_679482324213284_7201273950306337203_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=5f2048&_nc_ohc=10fPelVv3swAX8my-2Y&_nc_ht=scontent.fhan15-2.fna&oh=00_AfDJbZ5Y5YgJfPxt6hK6BA3XQYY6So75OC_jmSQLXpRoQQ&oe=6600BB76" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Student Commendation Awards</h5>
                <p class="card-text">
	
                    Student Voice Commendation
                    Awarded to a student or students who promote student interests through engagement with the University. The student will champion the student voice and promote positive change.</p>
              </div>
            </div>
            <div class="card" style="width: 300px; margin: 10px; padding: 20px; border: 1px solid #ccc; border-radius: 5px; text-align: center;">
              <img class="img-fluid card-img-top" src="https://avatars.githubusercontent.com/u/20041501?v=4" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Teacher Appreciation</h5>
                <p class="card-text">Have you ever thought that teachers have spent their entire lives awarding Certificates of Merit to students? What are the silent contributions of teachers? Where will it be recorded? More than a thank you, FPT Edu wishes to accompany students to create "special gifts" for teachers on November 20.</p>
              </div>
            </div>
          </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<!-- [ Main Content ] end -->

    <!-- Required Js -->
    <script src="{{ 'js/vendor-all.min.js' }}" defer></script>
    <script src="{{ 'js/plugins/bootstrap.min.js' }}" defer></script>
    <script src="{{ 'js/pcoded.min.js' }}" defer></script>

<!-- Apex Chart -->
<script src="{{ 'js/plugins/apexcharts.min.js' }}" defer></script>


<!-- custom-chart js -->
<script src="{{ 'js/pages/dashboard-main.js' }}" defer></script>
</body>

</html>
