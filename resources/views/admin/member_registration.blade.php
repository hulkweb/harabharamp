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
            <form action="{{ route('member_store') }}" method="post" enctype="multipart/form-data">
                <div class="box_general padding_bottom">
                    <div class="header_box version_2">
                        <h2><i class="fa fa-file"></i>पंचायत प्रभारी रजिस्ट्रेशन</h2>
                    </div>
                    @csrf

                    {{-- <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email <span class="text-danger">*</span></label>
                                <input type="text" name="email" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Password <span class="text-danger">*</span></label>
                                <input type="password" name="password" class="form-control" placeholder="Name@123"
                                    required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Birthday / जन्म दिनांक <span class="text-danger">*</span></label>
                                <input type="date" name="birthday" class="form-control" placeholder="Hotel Mariott"
                                    required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Position / पद <span class="text-danger">*</span></label>
                                <div class="styled-select">
                                    <select name="position_id" required>
                                        <option value="">---select---</option>
                                        @foreach ($positions as $position)
                                            <option value='{{ $position->id }}'>{{ $position->title }}</option>
                                        @endforeach


                                    </select>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>District <span class="text-danger">*</span></label>
                                <div class="styled-select">
                                    <select name="district" id="" onchange="checkDist(this.value)" required>
                                       
                                        @foreach ($districts as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Assembly / विधानसभा <span class="text-danger">*</span></label>
                                <div class="styled-select">
                                    <select name="parliament" onchange="checkAssembly(this.value)" required
                                        id="Assembly">
                                        <option value="">---select---</option>


                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Mandal Name / मंडल <span class="text-danger">*</span></label>
                                <div class="styled-select">
                                    <select name="mandal" required id="mandal">
                                        <option value="">---select---</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Place <span class="text-danger">*</span> </label>
                                <input type="text" name="geoloc" id="place" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name / नाम <span class="text-danger">*</span> </label>
                                <input type="text" name="name" class="form-control" placeholder="" required>
                            </div>
                        </div>
                        <input type="hidden" name="member" value="1">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Whatsapp <span class="text-danger"></span></label>
                                <input type="number" name="whatsapp" id="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Phone <span class="text-danger">*</span></label>
                                <input type="number" name="phone" id="" class="form-control" required>
                                <small id="errore"></small>
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for=""></label>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <p><button type="button" class="btn_1 medium var" id="verify">GET OTP</button></p>

                                    </div>
                                    <div class="col-sm-8">
                                        <input type="number" name="otp" id="otp_num" class="form-control"
                                            placeholder="Enter Otp" onkeyup="checkOtp(this.value)" required>
                                        <small id="errore_otp"></small>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                    <!-- /row-->
                    <p><button type="submit" class="btn_1 medium disabled" disabled>Register</button>
                    </p>
                </div>
                <!-- /box_general-->
                <!-- /box_general-->
            </form>
        </div>
        <!-- /.container-fluid-->
    </div>
    <!-- /.container-wrapper-->

    @include('partials.footer')

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

    <script src="/js/_chunk.js"></script>
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

        function checkDist(district) {
            $.ajax({
                url: '/get_assembly',
                type: 'post',
                data: {

                    district: district,

                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {

                    data.map(e => {
                        $("#Assembly").html($("#Assembly").html() +
                            `<option value="${e['id']}">${e['assembly']}</option>`)
                    })
                }
            });
        }

        function checkAssembly(assembly) {
            $.ajax({
                url: '/get_mandal',
                type: 'post',
                data: {

                    assembly: assembly,

                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {

                    data.map(e => {
                        $("#mandal").html($("#mandal").html() +
                            `<option value="${e['id']}">${e['mandal']}</option>`)
                    })
                }
            });
        }
    </script>

</body>

</html>
