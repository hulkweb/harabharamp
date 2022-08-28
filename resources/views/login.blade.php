<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title>MPBJYM </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicons-->
    <link rel="shortcut icon" href="/assets/admin/img/favicon.png" type="image/png">


    <!-- Bootstrap core CSS-->
    <link href="/assets/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Main styles -->
    <link href="/assets/admin/css/admin.css" rel="stylesheet">
    <!-- Icon fonts-->
    <link href="/assets/admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Plugin styles -->
    <link href="/assets/admin/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Your custom styles -->
    <link href="/assets/admin/css/custom.css" rel="stylesheet">
    <link href="/assets/admin/css/date_picker.css" rel="stylesheet">
    <link href="/assets/admin/vendor/dropzone.css" rel="stylesheet">

    <!-- WYSIWYG Editor -->
    <link rel="stylesheet" href="/assets/admin/js/editor/summernote-bs4.css">
    <style>
        footer.sticky-footer {
            width: 100% !important;
        }
    </style>
</head>

<body class="fixed-nav sticky-footer" id="page-top">
    <!-- Navigation-->
    <?php # include 'partials/siderbar.php';
    ?>

    <!-- /Navigation-->
    <div class="content-wrapper" style="width: auto !important;margin:auto !important">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <!-- <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/assets/admin/#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Add Event</li>
            </ol> -->
            <form action="{{ route('member_login_post') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-4 m-auto">
                        <div class="box_general padding_bottom">
                            <div class="header_box version_2">
                                <h2><i class="fa fa-user"></i> पंचायत प्रभारी लॉग इन</h2>
                            </div>


                            <div class="form-group">
                                <label>Phone</label>
                                <input type="number" name="phone" class="form-control" placeholder="Phone ">
                            </div>

                            <div class="form-group">
                                <label for=""></label>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <p><button type="button" class="btn btn-primary rounded-pill"
                                                id="verify">Get OTP</button></p>

                                    </div>
                                    <div class="col-sm-8">
                                        <input type="number" name="otp" id="otp_num" class="form-control"
                                            placeholder="Enter Otp" onkeyup="checkOtp(this.value)" required>
                                        <small id="errore_otp"></small>
                                    </div>
                                </div>
                            </div>
                            <p><button name="login" type="submit" class="btn_1 medium bg-secondary"
                                    disabled>Login</button>
                            </p>

                        </div>
                    </div>
                    <!-- /row-->
                </div>
                <!-- /box_general-->
                <!-- /box_general-->
            </form>
        </div>
        <!-- /.container-fluid-->
    </div>
    <!-- /.container-wrapper-->
    <footer class="sticky-footer">
        <div class="container">
            <div class="text-center">
                <small>Copyright © MPBJYM</small>
            </div>
        </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="/assets/admin/#page-top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="/assets/admin/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>
    {{-- <style>
        #loader {
            animation: breath infinite 5s;
        }

        #preloader {
            top: 0;
            left: 0;
            height: 100vh;
            width: 100vw;
            display: flex;
            position: fixed;
            z-index: 1000;
            background: white;
        }

        @keyframes breath {
            0% {
                transform: scale(1)
            }

            50% {
                transform: scale(1.2)
            }

            100% {
                transform: scale(1)
            }
        }
    </style>
    <div id="preloader">
        <img src="https://mpbjym.org/preloader.png" height="120" id="loader" style="margin:auto"
            alt="">
    </div>
    <script>
        window.onload = function() {

            document.querySelector("#preloader").style.display = "none";
        }
    </script> --}}
    <!-- Bootstrap core JavaScript-->
    <script src="/assets/admin/vendor/jquery/jquery.min.js"></script>
    <script src="/assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="/assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->

    <!-- Custom scripts for all pages-->
    <script src="/assets/admin/js/admin.js"></script>
    <!-- Custom scripts for this page-->
    <script src="/assets/admin/vendor/dropzone.min.js"></script>
    <script src="/assets/admin/vendor/bootstrap-datepicker.js"></script>
    <script></script>
    <script src="/js/_chunk.js"></script>
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
</body>

</html>
