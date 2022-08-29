<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        footer.sticky-footer {
            width: 100% !important;
        }

        #otp_num {
            display: none;
        }

        #errore {
            font-size: 12px;
            color: red;
            display: none;
        }

        #errore_otp {
            font-size: 12px;
            color: red;
            display: none;
        }

        .disabled,
        .disabled:hover {
            background: gray;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class=" sticky-footer" id="page-top">
    <!-- Navigation-->


    <!-- /Navigation-->
    <div class="content-wrapper" style="width: auto !important;margin:auto !important">
        <div class="container">
            <div class="d-flex mb-4 pb-0"><img src="/assets/admin/img/logo.png" height="80" class="mx-auto"
                    alt=""></div>
            <!-- Breadcrumbs-->
            <!-- <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Add Event</li>
            </ol> -->

            <div class="box_general padding_bottom">
                <div class="header_box version_2">
                    <h2><i class="fa fa-file"></i>पंचायत </h2>
                </div>

                <table class="table table-responsiv table-bordred">
                    <thead>
                        <th>पंचायत</th>
                        <th> मंडल</th>
                        <th>विधांसभा</th>
                        <th>जिला</th>
                        {{-- <th>Edit</th> --}}
                    </thead>
                    <tbody>

                        <tr>
                            <td>{{ $panchayat->name }}</td>
                            <td>{{ $panchayat->mandal }}</td>
                            <td>{{ $panchayat->parliament }}</td>
                            <td>{{ $panchayat->district }}</td>
                            {{-- <td> <a href="/panchayat_samiti_edit/{{ $panchayat->id }}"
                                            class="btn btn-success">Edit</a> </td> --}}
                        </tr>

                    </tbody>

                </table>

            </div>

            <br>
            <br>
            <form action="{{ route('panchayat_samiti_post') }}" method="post" enctype="multipart/form-data"
                id="form">
                <div class="box_general padding_bottom">
                    <div class="header_box version_2">
                        <h2><i class="fa fa-file"></i>पंचायत समिति </h2>
                    </div>
                    @csrf


                    {{-- <div class="row">
                        <div class="col-md-6">
                            <label>पंचायत / वार्ड का नाम <span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control"
                                placeholder="पंचायत / वार्ड का नाम" required>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                <input type="number" value="{{ auth()->user()->phone }}" name="phone" id=""
                                    required style="opacity: 0">
                                <p><button type="button" class="btn_1 medium var" id="add_panchayat">
                                        पंचायत समिति जोडे</button></p>
                            </div>
                        </div>
                    </div> --}}
                  

                    <div id="table_samiti">
                        <table class="table table-responsive table-bordred">
                            <thead>
                                <th>NUM</th>
                                <th>Name</th>
                                <th> Phone</th>
                                <th>Dated</th>

                                {{-- <th>Edit</th> --}}
                            </thead>
                            <tbody>
                                @foreach ($voluntiers as $i => $voluntier)
                                    <tr>
                                        <td>{{ $i +1}}</td>
                                        <td>{{ $voluntier->name }}</td>
                                        <td>{{ $voluntier->phone }}</td>
                                        <td>{{ date('d M Y', $voluntier->creted_at) }}</td>

                                        {{-- <td> <a href="/panchayat_samiti_edit/{{ $panchayat->id }}"
                                                    class="btn btn-success">Edit</a> </td> --}}
                                    </tr>
                                @endforeach
                            </tbody>

                    </div>
                    


                    {{-- <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Place</label>
                                <input type="text" name="place" id="place" class="form-control" required>
                                <small id="errore"></small>
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for=""></label>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <p><button type="button" class="btn_1 medium var" id="verify">Verify
                                            </button></p>

                                    </div>
                                    <div class="col-sm-7">
                                        <input type="number" name="otp" id="otp_num" class="form-control"
                                            placeholder="Enter Otp" onkeyup="checkOtp(this.value)" required>
                                        <small id="errore_otp"></small>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div> --}}

                    <!-- /row-->
                    {{-- <p><button type="submit" id="submit" class="btn_1 medium disabled" disabled>Register</button>
                    </p> --}}
                </div>
                <!-- /box_general-->
                <!-- /box_general-->
            </form>
        </div>
        <!-- /.container-fluid-->
    </div>
    <!-- /.container-wrapper-->

    @include('partials.footer')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="/assets/admin/vendor/jquery/jquery.min.js"></script>
    <script src="/assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="/assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->

    <!-- Custom scripts for all pages-->
    <!-- <script src="/assets/admin/js/admin.js"></script> -->
    <!-- Custom scripts for this page-->
    <script src="/assets/admin/vendor/dropzone.min.js"></script>
    <script src="/assets/admin/vendor/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>
    <script>
        var x = document.getElementById("demo");
        var map = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        var first = "";
        $("#add_panchayat").click(function() {
            map.map(e => {
                if (e == 1) {
                    first = "पंचायत समिति अध्यक्ष "
                } else {
                    first = `सदस्य ${e} `
                }
                $("#table_samiti").html($("#table_samiti").html() +
                    `<div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>  ${first} का नाम <span class="text-danger">*</span></label>
                                    <input type="text" name="name_${e}" class="form-control" placeholder="Name" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> ${first} का फोन<span class="text-danger">*</span></label>
                                    <input type="number" name="phone_${e}" class="form-control" placeholder="Phone" >
                                </div>
                            </div>
                        </div>`
                );
            })
            $("#add_panchayat").attr('disabled', "true");
        });

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
        $("#submits").click(function() {
            swal("Success", "Created Succefully", "success");
            swal("Success", "Created Succefully", "success");
            setTimeout(() => {
                location.replace('https://mpbjym.chhavinirman.in/panchayat_samiti')
            }, 1000);
        })
        var form = document.getElementById("form");
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    @if ($success = Session::get('success'))
        <script>
            swal("Success", "{{ $success }}!", "success");
        </script>
    @endif

    @if ($errore = Session::get('errore'))
        <script>
            swal("Error", "{{ $errore }}!", "error");
        </script>
    @endif

    <!--================End Footer Area =================-->

    <script src="/js/_chunk.js"></script>
</body>

</html>
