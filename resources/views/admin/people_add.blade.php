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
                        <h2><i class="fa fa-file"></i>People Registration</h2>
                    </div>
                    @csrf
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
                                <label>Upload Selfie / फोटो</label> <br>
                                <input type="file" name="image" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email <span class="text-danger">*</span></label>
                                <input type="text" name="email" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Password <span class="text-danger">*</span></label>
                                <input type="password" name="password" class="form-control" required>
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
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Place / स्थान <span class="text-danger">*</span></label>
                                <input type="text" name="place" class="form-control"
                                    placeholder="Village/Town , District" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Pincode <span class="text-danger">*</span> </label>
                                <input type="text" name="pincode" class="form-control" required>
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
                                        <p><button type="button" class="btn_1 medium var" id="verify">Verify
                                                Number</button></p>

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

    <script>
        var otp = Math.floor(Math.random() * 999999) + 111111;
        $("#verify").click(function() {
            if ($("input[name=phone]").val().toString().length > 9) {
                $("#otp_num").show()


                $.ajax({
                    url: 'otp',
                    type: 'post',
                    data: {
                        send_otp: true,
                        mobile: $("input[name=phone]").val(),
                        otp: otp
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data) {
                        if (data == 'success') {
                            alert(`Please Enter Otp ${otp}`)
                        }
                    }
                });


            } else {
                $("#errore").show()
                $("#errore").html(` <i class="fa fa-times text-danger"></i>  Please Enter A Correct Mobile Number`)
            }
        })

        function checkOtp(val) {
            if (val == otp) {
                $("#errore_otp").show()
                $("#errore_otp").css('color', "green")
                $("#errore_otp").html(`<i class="fa fa-check text-success" aria-hidden="true"></i> OTP Verified`)
                $(".btn_1").css('background', '#004DDA')
                $(".btn_1").removeAttr("disabled")
                $(".btn_1").removeClass("disabled")
                $("#verify").css("background", "gray")

            } else {
                $("#errore_otp").show()

                $("#errore_otp").html(`<i class="fa fa-times text-danger" aria-hidden="true"></i> Please Enter Correct OTP`)
            }
        }
    </script>
</body>

</html>
