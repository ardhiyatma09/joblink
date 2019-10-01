<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Admin | Joblink</title>

    <link rel="stylesheet" href="{{URL('assets/css/style2.css')}}">
</head>

<body>
    <div class="login-page">
        <h1>Login Untuk Admin<h1>
                <div class="form">
                    <div class="login-form">
                        <input type="text" id="email" placeholder="Email" />
                        <input type="password" id="password" placeholder="Password" />
                        <button onclick="login()">login</button>
                    </div>
                </div>
    </div>
    <!--===============================================================================================-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="{{URL('assets/vendor/jquery/jquery-3.2.1.min.js')}}"></script>

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

//       firebase.auth().onAuthStateChanged(function(user) {
//   if (user) {
//     // User is signed in.
//     let timerInterval
//         Swal.fire({
//         title: 'Wait For Me',
//         timer: 2000,
//         onBeforeOpen: () => {
//             Swal.showLoading()
//             timerInterval = setInterval(() => {
//             Swal.getContent().querySelector('strong')
//                 .textContent = Swal.getTimerLeft()
//             }, 200)
//         },
//         onClose: () => {
//             Swal.fire({
//             position: 'center',
//             type: 'success',
//             title: 'Login Sukses',
//             showConfirmButton: false,
//             timer: 1000,
//             onBeforeOpen: () => {
//             timerInterval = setInterval(() => {
//             Swal.getContent().querySelector('strong')
//                 .textContent = Swal.getTimerLeft()
//             }, 100)
//         },
//             onClose: () => {
//             clearInterval(timerInterval)
//             window.location.href = "{{url('/dashboard')}}";
//         }
//             })
//         }
//         }).then((result) => {
//         if (
//             /* Read more about handling dismissals below */
//             result.dismiss === Swal.DismissReason.timer
//         ) {
//             console.log('I was closed by the timer')
//         }
//         })
//     // ...
//   } else {
//     // User is signed out.
//     // ...
//   }
// });

firebase.auth().onAuthStateChanged(function(user) {
        if (user) {
            var user = firebase.auth().currentUser;
            firebase.database().ref('Admin/' + user.uid).once('value').then(function(snapshot) {
            var status = (snapshot.val() && snapshot.val().status) || 'Anonymous';
            if (status == "admin") {
            $.ajax({
                type: "get",
                url: "{{url('loginPost')}}",
                data: {
                    _token: "{{csrf_token()}}",
                    email: email,
                    userId: user.uid,
                    password: password
                },
                processData: false,
                contentType: false,
                success: function (data) {
					// console.log(data);
					if(data == 1){
                        let timerInterval
                Swal.fire({
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
                    window.location.href = "{{url('dashboard')}}";
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
                    }else{

                 	 }
                    }
            });
        }else{
            Swal.fire({
            type: 'error',
            title: 'Akun bukan admin...',
            text: 'Anda hanya bisa login dengan akun admin!',
            })
        }
        });



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

    </script>
</body>

</html>
