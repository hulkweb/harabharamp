<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="author" content="Rahul Katre">

    <link rel="shortcut icon" href="https://mpbjym.org/bjym_logo.png" type="image/x-icon">
    <!-- Title Page-->
    <title>Register {{ $event->title }} </title>

    <!-- Icons font CSS-->
    <link href="/assets/user/vendor-/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="/assets/user/vendor-/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link
        href="/assets/user/https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="/assets/user/vendor-/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="/assets/user/vendor-/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="/assets/user/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-30 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div style="display:flex;margin:10px"> <img src="https://mpbjym.org/bjym_logo.png" height="100"
                    style="margin:auto"> </div>
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Registration <b> {{ $event->title }} </b></h2>
                    <form method="POST" action="{{ route('people_store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Name</label>
                                    <input class="input--style-4" type="text" name="name">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Whatsapp/Phone Number</label>
                                    <input class="input--style-4" type="number" name="phone" required>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">

                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Place </label>
                                    <input class="input--style-4" type="text" name="place" id="place"
                                        placeholder="Village/ Town , District">
                                </div>
                            </div>

                            <input type="hidden" name="event_id" value="{{ $event->id }}">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" checked="checked" name="gender" value="Male">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" name="gender" value="Female">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input class="input--style-4" type="hidden" name="pincode" value="00001">
                        <input class="input--style-4" type="hidden" name="email">



                        <div class="row row-space">
                            {{-- <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Upload Selfie/Pic</label>
                                    <input class="input--style-4" type="file" name="image">
                                </div>
                            </div> --}}

                        </div>

                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="/assets/user/vendor-/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="/assets/user/vendor-/select2/select2.min.js"></script>
    <script src="/assets/user/vendor-/datepicker/moment.min.js"></script>
    <script src="/assets/user/vendor-/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="/assets/user/js/global.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if ($success = Session::get('success'))
        <script>
            swal("Success", "{{ $success }}!", "success");
        </script>
    @endif

    @if ($errore = Session::get('errore'))
        <script>
            swal("Success", "{{ $errore }}!", "errore");
        </script>
    @endif
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>
    <script>
        var x = document.getElementById("demo");

        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                x.innerHTML = "Geolocation is not supported by this browser.";
            }
        }

        function showPosition(position) {
            var innerHTML = "Latitude: " + position.coords.latitude +
                "<br>Longitude: " + position.coords.longitude;
            $.get(
                `https://maps.googleapis.com/maps/api/geocode/json?latlng=${position.coords.latitude},${position.coords.longitude}&key=AIzaSyDvVTRDkVBKwGRLZLB4b-s_gANsV6zrtbY`,
                function(data) {
                    console.log(data['results'][0]['formatted_address']);
                    $("#place").val(data['results'][0]['formatted_address'])
                })
        }

        getLocation()
    </script>

    <style>
        #loader {
            animation: breath infinite 3s;
        }

        #preloader {
            top: 0;
            left: 0;
            height: 100vh;
            width: 100vw;
            display: flex;
            position: fixed;
            z-index: 10000;
            background: rgba(0, 0, 0, 0.4);
            display: none;
        }

        #container {
            margin: auto;
            text-align: center;
            height: 200px;
            width: 200px;
            background: white;
            border-radius: 5px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        @keyframes breath {
            0% {
                transform: scale(1)
            }

            50% {
                transform: scale(1.3)
            }

            100% {
                transform: scale(1)
            }
        }
    </style>
    <div id="preloader">
        <div id="container">
            <span>
                <img src="https://mpbjym.org/preloader.png" height="80" id="loader" alt="">
            </span>
            <p>कुछ क्षण प्रतीक्षा करे
                आपका प्रमाण पत्र बन रहा है।....</p>
        </div>
    </div>
    <script>
        var form = document.querySelector("form");
        var popup = document.querySelector("#preloader");
        form.addEventListener("submit", () => {
            popup.style.display = "flex";
        })
    </script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
{{-- <option value="0">Select</option>
	<option value="52">AGAR MALWA</option>
	<option value="50">ALIRAJPUR</option>
	<option value="47">ANUPPUR</option>
	<option value="46">ASHOKNAGAR</option>
	<option value="40">BADWANI</option>
	<option value="18">BALAGHAT</option>
	<option value="28">BETUL</option>
	<option value="3">BHIND</option>
	<option value="30">BHOPAL</option>
	<option value="48">BURHANPUR</option>
	<option value="10">CHHATARPUR</option>
	<option value="25">CHHINDWARA</option>
	<option value="11">DAMOH</option>
	<option value="5">DATIA</option>
	<option value="37">DEWAS</option>
	<option value="41">DHAR</option>
	<option value="20">DINDORI</option>
	<option value="7">GUNA</option>
	<option value="4">GWALIOR</option>
	<option value="27">HARDA</option>
	<option value="26">HOSHANGABAD</option>
	<option value="36">INDORE</option>
	<option value="21">JABALPUR</option>
	<option value="42">JHABUA</option>
	<option value="22">KATNI</option>
	<option value="38">KHANDWA</option>
	<option value="39">KHARGONE</option>
	<option value="19">MANDLA</option>
	<option value="44">MANDSAUR</option>
	<option value="2">MORENA</option>
	<option value="23">NARSINGHPUR</option>
	<option value="45">NEEMUCH</option>
	<option value="53">NIWARI</option>
	<option value="12">PANNAA</option>
	<option value="31">RAISEN</option>
	<option value="33">RAJGARH</option>
	<option value="43">RATLAM</option>
	<option value="14">REWA</option>
	<option value="8">SAGAR</option>
	<option value="13">SATNA</option>
	<option value="29">SEHORE</option>
	<option value="24">SEONI</option>
	<option value="17">SHAHDOL</option>
	<option value="34">SHAJAPUR</option>
	<option value="1">SHEOPUR</option>
	<option value="6">SHIVPURI</option>
	<option value="15">SIDHI</option>
	<option value="51">SINGOURLI</option>
	<option value="9">TIKAMGARH</option>
	<option value="35">UJJAIN</option>
	<option value="16">UMARIA</option>
	<option value="32">VIDISHA</option> --}}
