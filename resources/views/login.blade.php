<!DOCTYPE html>
<html lang="en">

<head>
    <title>Selamat Datang !</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{URL('assets/images/joblink_logo.png')}}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{URL('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{URL('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{URL('assets/fonts/iconic/css/material-design-iconic-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{URL('assets/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{URL('assets/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{URL('assets/vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{URL('assets/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{URL('assets/vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{URL('assets/css/util.css')}}">
    <link rel="stylesheet" href="{{URL('assets/css/main.css')}}">
    <!--===============================================================================================-->

</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-t-85 p-b-20">

                    <span class="login100-form-title p-b-70">
                        Welcome
                    </span>
                    <span class="login100-form-avatar">
                        <img src="{{URL('assets/images/joblink_logo.png')}}" alt="AVATAR">
                    </span>

                    <div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate="Enter username">
                        <input class="input100" type="text" name="username" id="email">
                        <span class="focus-input100" data-placeholder="Email"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
                        <input class="input100" type="password" name="pass" id="password">
                        <span class="focus-input100" data-placeholder="Password"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" onclick="login()">
                            Login
                        </button>
                    </div>

                    <ul class="login-more p-t-190">
                        <li class="m-b-8">
                            <span class="txt1">
                                Forgot
                            </span>

                            <a href="#" class="txt2">
                                Username / Password?
                            </a>
                        </li>

                        <li>
                            <span class="txt1">
                                Don’t have an account?
                            </span>

                            <a href="#" class="txt2" onclick="register()">
                                Sign up
                            </a>
                        </li>
                    </ul>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="{{URL('assets/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{URL('assets/vendor/animsition/js/animsition.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{URL('assets/vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{URL('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{URL('assets/vendor/select2/select2.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{URL('assets/vendor/daterangepicker/moment.min.js')}}"></script>
    <script src="{{URL('assets/vendor/daterangepicker/daterangepicker.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{URL('assets/vendor/countdowntime/countdowntime.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{URL('assets/js/main.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

    <!--==================================FIREBASE============================================-->

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
       // Initialize Firebase
       firebase.initializeApp(config);

       firebase.auth().onAuthStateChanged(function(user) {
  if (user) {
    // User is signed in.
    let timerInterval
        Swal.fire(*+{
        title: 'Wait For Me',
        timer: 2000,
        onBeforeOpen: () => {
            Swal.showLoading()
            timerInterval = setInterval(() => {
            Swal.getContent().querySelector('strong')
                .textContent = Swal.getTimerLeft()
            }, 200)
        },
        onClose: () => {
            Swal.fire({
            position: 'center',
            type: 'success',
            title: 'Login Sukses',
            showConfirmButton: false,
            timer: 1000,
            onBeforeOpen: () => {
            timerInterval = setInterval(() => {
            Swal.getContent().querySelector('strong')
                .textContent = Swal.getTimerLeft()
            }, 100)
        },
            onClose: () => {
            clearInterval(timerInterval)
            window.location.href = "{{url('/home')}}";
        }
            })
        }
        }).then((result) => {
        if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.timer
        ) {
            console.log('I was closed by the timer')
        }
        })

    // ...
  } else {
    // User is signed out.
    // ...
  }
});



     function login(){

         var userEmail = $('#email').val();
         var userPass = $('#password').val();

       firebase.auth().signInWithEmailAndPassword(userEmail, userPass).catch(function(error) {
         // Handle Errors here.
         var errorCode = error.code;
         var errorMessage = error.message;


         window.alert("Error : " + errorMessage);
       });
     }



     function register(){
         window.location.href = "{{url('/daftar')}}";
     }

         </script>
</body>

</html>

