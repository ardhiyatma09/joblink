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
        <h1>Daftarkan Admin Lain<h1>
                <div class="form">
                    <div class="login-form">
                        <input type="text" id="email" placeholder="Email" />
                        <input type="password" id="password" placeholder="Password" />
                        <button onclick="regis()">Daftar</button>
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

      function regis(){
        var userEmail = $('#email').val();
        var userPass = $('#password').val();


        firebase.auth().onAuthStateChanged(function(user) {
  if (user) {
    firebase.database().ref('Admin/' + user.uid).set({
        userid: user.uid,
        email: userEmail,
        password : userPass,
            }, function(error) {
            if (error) {
            // The write failed...
            alert("gagal");
            } else {
            // Data saved successfully!
            Swal.fire({
                    position: 'center',
                    type: 'success',
                    title: 'Berhasil Daftar',
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
                    firebase.auth().signOut();
                    window.location.href = "{{url('/dashboard')}}";
                }
                    })
            }
        });
    // ...
  } else {
    // ...
  }
});

        firebase.auth().createUserWithEmailAndPassword(userEmail, userPass).catch(function(error) {
            // Handle Errors here.
            var errorCode = error.code;
            var errorMessage = error.message;

            window.alert("Error : " + errorMessage);

       });

      }

    </script>
</body>

</html>
