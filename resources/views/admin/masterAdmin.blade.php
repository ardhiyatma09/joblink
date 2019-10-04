<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{URL('assets/images/joblink_logo.png')}}">
    <link rel="icon" type="image/png" href="{{URL('assets/images/joblink_logo.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        @yield('title_area')
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="{{URL('assets/css/material-dashboard.css?v=2.1.1')}}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{URL('assets/demo/demo.css')}}" rel="stylesheet" />
</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <a href="{{URL('home')}}" class="simple-text logo-normal">
                    JobLink
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li @if (Request::segment(1)=='dashboard' ) class="nav-item active" @endif>
                        <a class="nav-link" href="{{URL('dashboard')}}">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li @if (Request::segment(1)=='user' ) class="nav-item active" @endif>
                        <a class="nav-link" href="{{URL('user')}}">
                            <i class="material-icons">person</i>
                            <p>Daftar User</p>
                        </a>
                    </li>
                    <li @if (Request::segment(1)=='list' ) class="nav-item active" @endif>
                        <a class="nav-link" href="{{URL('list')}}">
                            <i class="material-icons">content_paste</i>
                            <p>Job List</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{URL('regisadmin')}}">
                            <i class="material-icons">person</i>
                            <p>Register Admin Baru</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                <div class="container-fluid">

                    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <i class="material-icons">dashboard</i>
                                    <p class="d-lg-none d-md-block">
                                        Stats
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">notifications</i>
                                    <span class="notification">5</span>
                                    <p class="d-lg-none d-md-block">
                                        Some Actions
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Mike John responded to your email</a>
                                    <a class="dropdown-item" href="#">You have 5 new tasks</a>
                                    <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                                    <a class="dropdown-item" href="#">Another Notification</a>
                                    <a class="dropdown-item" href="#">Another One</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">person</i>
                                    <p class="d-lg-none d-md-block">
                                        Account
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                    <a class="dropdown-item" href="#">Profile</a>
                                    <a class="dropdown-item" href="#">Settings</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" onclick="logout()">Logout</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->


            @yield('mainContent')


            <footer class="footer">
                <div class="container-fluid">
                    <nav class="float-left">
                        <ul>
                            <li>
                                <a href="https://www.creative-tim.com">
                                    Creative Tim
                                </a>
                            </li>
                            <li>
                                <a href="https://creative-tim.com/presentation">
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href="http://blog.creative-tim.com">
                                    Blog
                                </a>
                            </li>
                            <li>
                                <a href="https://www.creative-tim.com/license">
                                    Licenses
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright float-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>, made with <i class="material-icons">favorite</i> by
                        <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="{{URL('assets/js/jquery.min.js')}}"></script>
    <script src="{{URL('assets/js/popper.min.js')}}"></script>
    <script src="{{URL('assets/js/bootstrap-material-design.min.js')}}"></script>
    <script src="{{URL('assets/js/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{URL('assets/js/material-dashboard.js?v=2.1.1')}}" type="text/javascript"></script>
    <script src="{{URL('assets/demo/demo.js')}}"></script>
    {{-- <script>
        $('.nav').on('click','li', function(){
            $('.nav li.nav-item active').removeClass('nav-item active');
            $(this).addClass('nav-item active')
        });
    </script> --}}
    <script>
        $(document).ready( function () {
            $('#table_id').DataTable();
        } );
    </script>
    <script>
        $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
    </script>

    <!--======================FIREBASE====================-->
    <script src="https://www.gstatic.com/firebasejs/5.10.1/firebase.js"></script>
    <script>
        // Initialize Firebase
       var config = {
       apiKey: "AIzaSyBcaAkENiVZNLLYf8SSsFoGtNlihqW3wvU",
       authDomain: "joblink-e7c44.firebaseapp.com",
       databaseURL: "https://joblink-e7c44.firebaseio.com",
       projectId: "joblink-e7c44",
       storageBucket: "",
       messagingSenderId: "418211748871",
       appId: "1:418211748871:web:28279476df4743ed7b1ea2"

     };
     firebase.initializeApp(config);
     // Initialize Firebase

     firebase.initializeApp(config);

    //    firebase.auth().onAuthStateChanged(function(user) {
    //             if (user) {

    //             }
    //             else{
    //                 window.location.href = "{{url('/loginAdmin')}}";
    //             }
    //             });

       function logout(){
        $.ajax({
                type: "get",
                url: "{{url('logout')}}",
                data: {
                    _token: "{{csrf_token()}}",
                    id: 1
                },
                processData: false,
                contentType: false,
                success: function (data) {
                    firebase.auth().signOut();
                    window.location.href = "{{url('dashboard')}}"

                }
            });
       }

     function dell(userid){
        Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                    if (result.value) {
                        var dbRef = firebase.database().ref('Users/'+userid)
                            dbRef.remove()
                            Swal.fire({
                                title: 'Deleted',
                                type: 'success',
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Ok'
                            }).then((result2) => {
                                window.location.href = "{{url('/user')}}";
                            })
                    }
                    })
       }

    </script>
</body>

</html>
