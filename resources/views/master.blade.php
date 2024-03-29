<!DOCTYPE html>
<html lang="en">

<head>
    <title>JobLink &mdash; Pekerjaan Baik Menunggu Anda</title>
    <link rel="icon" type="image/png" href="{{URL('assets/images/joblink_logo.png')}}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Work+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{URL('assets/css/bootstrap.min.css')}}">
    <link href="{{URL('assets/font-awesome/css/all.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{URL('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{URL('assets/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{URL('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{URL('assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{URL('assets/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{URL('assets/css/animate.css')}}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">



    <link rel="stylesheet" href="{{URL('assets/fonts/flaticon/font/flaticon.css')}}">

    <link rel="stylesheet" href="{{URL('assets/css/aos.css')}}">

    <link rel="stylesheet" href="{{URL('assets/css/style.css')}}">

</head>

<body>

    <div class="site-wrap">

        <div class="site-mobile-menu">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div> <!-- .site-mobile-menu -->


        <div class="site-navbar-wrap js-site-navbar bg-white">

            <div class="container">
                <div class="site-navbar bg-light">
                    <div class="py-1">
                        <div class="row align-items-center">
                            <div class="col-2">
                                <h2 class="mb-0 site-logo"><a href="{{URL('home')}}">Job<strong
                                            class="font-weight-bold">Link</strong> </a></h2>
                            </div>
                            <div class="col-10">
                                <nav class="site-navigation text-right" role="navigation">
                                    <div class="container">
                                        <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#"
                                                class="site-menu-toggle js-menu-toggle text-black"><span
                                                    class="icon-menu h3"></span></a></div>

                                        <ul class="site-menu js-clone-nav d-none d-lg-block">
                                            <li><a href="#testimoni">Testimoni</a></li>
                                            <li><a href="#download">Download APK</a></li>
                                            <li><a href="#lowonganku">Lowonganku</a></li>
                                            <li><a href="{{URL('/assets/files/joblink.pdf')}}" target="_blank">Dokumentasi</a></li>
                                            <li><a onclick="logout()" href="#"><span
                                                        class="bg-primary text-white py-3 px-4 rounded">Logout</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        @yield('mainContent')



        <footer class="site-footer">
                <div class="container">


                  <div class="row">
                    <div class="col-md-4">
                      <h3 class="footer-heading mb-4 text-white">About</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat quos rem ullam, placeat amet.</p>
                      <p><a href="#" class="btn btn-primary pill text-white px-4">Read More</a></p>
                    </div>
                    <div class="col-md-6">
                      <div class="row">
                        <div class="col-md-6">
                          <h3 class="footer-heading mb-4 text-white">Quick Menu</h3>
                            <ul class="list-unstyled">
                              <li><a href="#">About</a></li>
                              <li><a href="#">Services</a></li>
                              <li><a href="#">Approach</a></li>
                              <li><a href="#">Sustainability</a></li>
                              <li><a href="#">News</a></li>
                              <li><a href="#">Careers</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                          <h3 class="footer-heading mb-4 text-white">Categories</h3>
                            <ul class="list-unstyled">
                              <li><a href="#">Full Time</a></li>
                              <li><a href="#">Freelance</a></li>
                              <li><a href="#">Temporary</a></li>
                              <li><a href="#">Internship</a></li>
                            </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row pt-5 mt-5 text-center">
                    <div class="col-md-12">
                      <p>
                      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                      Copyright &copy; <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All Rights Reserved | This template is made with <i class="icon-heart text-warning" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
                      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                      </p>
                    </div>

                  </div>
                </div>
              </footer>
    </div>

    <script src="{{URL('assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{URL('assets/js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{URL('assets/js/jquery-ui.js')}}"></script>
    <script src="{{URL('assets/js/popper.min.js')}}"></script>
    <script src="{{URL('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{URL('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{URL('assets/js/jquery.stellar.min.js')}}"></script>
    <script src="{{URL('assets/js/jquery.countdown.min.js')}}"></script>
    <script src="{{URL('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{URL('assets/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{URL('assets/js/aos.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


    <script src="{{URL('assets/js/mediaelement-and-player.min.js')}}"></script>

    <script src="{{URL('assets/js/main.js')}}"></script>

    <script type="text/javascript">
        AOS.init({
            duration : 1000,
        })
    </script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
                var mediaElements = document.querySelectorAll('video, audio'), total = mediaElements.length;

                for (var i = 0; i < total; i++) {
                    new MediaElementPlayer(mediaElements[i], {
                        pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
                        shimScriptAccess: 'always',
                        success: function () {
                            var target = document.body.querySelectorAll('.player'), targetTotal = target.length;
                            for (var j = 0; j < targetTotal; j++) {
                                target[j].style.visibility = 'visible';
                            }
                  }
                });
                }
            });
    </script>


    <script>
        // This example displays an address form, using the autocomplete feature
      // of the Google Places API to help users fill in the information.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }
      }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    </script>

    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&libraries=places&callback=initAutocomplete"
        async defer></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
        // Add smooth scrolling to all links
        $("a").on('click', function(event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function(){

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
            } // End if
        });
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
         storageBucket: "joblink-e7c44.appspot.com",
         messagingSenderId: "418211748871",
         appId: "1:418211748871:web:28279476df4743ed7b1ea2"

       };
       // Initialize Firebase
       firebase.initializeApp(config);

       firebase.auth().onAuthStateChanged(function(user) {
                if (user) {
                    // User is signed in.
                    var user = firebase.auth().currentUser;
                    firebase.database().ref('Users/' + user.uid + '/job').once('value').then(function(snapshot) {
                    var namaPerusahaan = (snapshot.val() && snapshot.val().namaPerusahaan) || 'Anonymous';
                    var posisi = (snapshot.val() && snapshot.val().posisi) || 'Anonymous';
                    var gaji = (snapshot.val() && snapshot.val().gaji) || 'Anonymous';
                    var waktuBekerja = (snapshot.val() && snapshot.val().waktuBekerja) || 'Anonymous';
                    var lokasi = (snapshot.val() && snapshot.val().lokasi) || 'Anonymous';
                    var deskripsi = (snapshot.val() && snapshot.val().deskripsi) || 'Anonymous';

                    $("#posisi2").html('<h2 class="mr-3 text-black h4">'+posisi+'</h2>');
                    $("#namaPerusahaan2").html('<span class="fl-bigmug-line-portfolio23">'+namaPerusahaan+'</span>');
                    $("#gaji2").val(gaji);
                    $("#waktuBekerja2").html('<span class="border border-warning text-warning py-2 px-4 rounded">'+waktuBekerja+'</span>');
                    $("#lokasi2").html('<span class="fl-bigmug-line-big104">'+lokasi+'</span>');
                    $("#deskripsi2").html('<p>'+deskripsi+'</p>');

                    });
                }
                else{
                    // window.location.href = "{{url('/login')}}";
                    // firebase.auth().signOut();
                }
                });

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
                    window.location.href = "{{url('home')}}"

                }
            });
       }

        var storageRef = firebase.storage().ref();
        var Foto = "";

        function previewFile(){
        var uploader = document.getElementById('uploader');
        var file =document.querySelector('input[type=file]').files[0];
        var uploadTask = storageRef.child('logo_perusahaan/' + file.name).put(file);

        uploadTask.on(firebase.storage.TaskEvent.STATE_CHANGED,
        function(snapshot) {
            var progress = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
            console.log('Upload is ' + progress + '% done');
            switch (snapshot.state) {
                case firebase.storage.TaskState.PAUSED:
                    console.log('Upload is paused');
                    break;
                case firebase.storage.TaskState.RUNNING:
                    console.log('Upload is running');
                    break;
            }
            }, function(error) {
                console.log('error while uploading')
            }, function() {
                var starsRef = storageRef.child('logo_perusahaan/'+ file.name);
                starsRef.getDownloadURL().then(function(url) {
                    // document.querySelector('#preview').src=url;
                    foto = url;
                    // $('#foto_field').attr('src', url);
                });
            });
        }

       function addjob(){
        firebase.auth().onAuthStateChanged(function(user) {
            if (user) {
                if($('#posisi').val() != "" && $('#waktuBekerja').val() != "" && $('#gaji').val() != ""
                && $('#lokasi').val() != "" && $('#namaPerusahaan').val() != "" && $('#deksripsi').val() != ""){
                firebase.database().ref().child('Users/' + user.uid + '/job').set({
                            posisi:$('#posisi').val(),
                            waktuBekerja:$('#waktuBekerja').val(),
                            gaji:$('#gaji').val(),
                            lokasi:$('#lokasi').val(),
                            foto:foto,
                            namaPerusahaan:$('#namaPerusahaan').val(),
                            deskripsi:$('#deskripsi').val()

                        }, function(error) {
            if (error) {
            // The write failed...
            Swal.fire({
            type: 'error',
            title: 'Oops...',
            text: 'Something went wrong!',
            footer: '<a href>Why do I have this issue?</a>'
            })
            } else {
            // Data saved successfully!
            Swal.fire({
            position: 'center',
            type: 'success',
            title: 'Berhasil Ditambahkan !',
            showConfirmButton: false,
            timer: 2000,
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
        });
            } else{
                Swal.fire({
            type: 'error',
            title: 'Gagal Menambah Data',
            text: 'Isi Semua Form !',
            })
            }
            } else {
            }
            });
       }

       function update(){
        firebase.auth().onAuthStateChanged(function(user){
            if (user) {
                firebase.database().ref().child('Users/' + user.uid + '/job').on('value', function(snapshot){
                    $('#posisi').val(snapshot.child('posisi').val());
                    $('#lokasi').val(snapshot.child('lokasi').val());
                    $('#gaji').val(snapshot.child('gaji').val());
                    $('#namaPerusahaan').val(snapshot.child('namaPerusahaan').val());
                    $('#waktuBekerja').val(snapshot.child('waktuBekerja').val());
                    $('#deskripsi').val(snapshot.child('deskripsi').val());
                });
            } else {

            }
        })
       }

       function editProfile(){
        firebase.auth().onAuthStateChanged(function(user){
            if (user) {
                firebase.database().ref().child('Users/' + user.uid).on('value', function(snapshot){
                    $('#password').val(snapshot.child('password').val());
                    $('#email').val(snapshot.child('email').val());
                });
            } else {

            }
        })
       }

       function dell(){

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
                        firebase.auth().onAuthStateChanged(function(user){
                        var dbRef = firebase.database().ref().child('Users/' + user.uid + '/job')
                        if (user) {
                            dbRef.remove()
                            Swal.fire({
                                title: 'Deleted',
                                type: 'success',
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Ok'
                            }).then((result2) => {
                                window.location.href = "{{url('/home')}}";
                            })
       }

       })
                    }
                    })
       }



    </script>
</body>

</html>
