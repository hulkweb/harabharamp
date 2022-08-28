<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title>MPBJYM </title>

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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrious/4.0.2/qrious.min.js"></script>
    <!-- WYSIWYG Editor -->
    <link rel="stylesheet" href="js/editor/summernote-bs4.css">
</head>

<body class="fixed-nav sticky-footer" id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-default fixed-top" id="mainNav" style="background: rgb(86,86,88);
    background: linear-gradient(180deg,#FF9933 -20%, #FF9933 59%,#FF9933 100%);">
        <a class="navbar-brand" href="./"><img src="img/logo.png" alt="" height="50"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                    <a class="nav-link" href="/admin">
                        <i class="fa fa-fw fa-dashboard"></i>
                        <span class="nav-link-text">Dashboard</span>
                    </a>
                </li>

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title=""
                    data-original-title="Events">
                    <a class="nav-link" href="/admin/events">
                        <i class="fa fa-fw fa-calendar-check-o"></i>
                        <span class="nav-link-text">All Events </span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Add listing">
                    <a class="nav-link" href="/admin/event_add">
                        <i class="fa fa-fw fa-plus-circle"></i>
                        <span class="nav-link-text">Add Event</span>
                    </a>
                </li>

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title=""
                    data-original-title="Members">
                    <a class="nav-link" href="/admin/members">
                        <i class="fa fa-fw fa-users"></i>
                        <span class="nav-link-text">All Members </span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Add Member">
                    <a class="nav-link" href="/admin/member_add">
                        <i class="fa fa-fw fa-plus-circle"></i>
                        <span class="nav-link-text">Add Member</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Add listing">
                    <a class="nav-link" href="/admin/position_add">
                        <i class="fa fa-fw fa-plus-circle"></i>
                        <span class="nav-link-text">Add Position</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title=""
                    data-original-title="Events">
                    <a class="nav-link" href="/admin/voluntiers">
                        <i class="fa fa-fw fa-map"></i>
                        <span class="nav-link-text">All voluntier </span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Add listing">
                    <a class="nav-link" href="/admin/voluntier_add">
                        <i class="fa fa-fw fa-plus-circle"></i>
                        <span class="nav-link-text">Add voluntier</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Add listing">
                    <a class="nav-link" href="/admin/panchayat_add">
                        <i class="fa fa-fw fa-plus-circle"></i>
                        <span class="nav-link-text">Add panchayat</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Users">
                    <a class="nav-link" href="/admin/panchayats">
                        <i class="fa fa-fw fa-users"></i>
                        <span class="nav-link-text">Panchayat</span>
                    </a>
                </li>

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Users">
                    <a class="nav-link" href="/admin/settings">
                        <i class="fa fa-fw fa-users"></i>
                        <span class="nav-link-text">Settings</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Users">
                    <a class="nav-link" href="/admin/peoples">
                        <i class="fa fa-fw fa-users"></i>
                        <span class="nav-link-text">Peoples</span>
                    </a>
                </li>

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="My profile">
                    <a class="nav-link" href="/admin/profile">
                        <i class="fa fa-fw fa-user"></i>
                        <span class="nav-link-text">My Profile</span>
                    </a>
                </li>

            </ul>
            <ul class="navbar-nav sidenav-toggler">
                <li class="nav-item">
                    <a class="nav-link text-center" id="sidenavToggler">
                        <i class="fa fa-fw fa-angle-left"></i>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <form class="form-inline my-2 my-lg-0 mr-lg-2">
                        <div class="input-group">
                            <input class="form-control search-top" type="text" placeholder="Search for...">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                        <i class="fa fa-fw fa-sign-out"></i>Logout</a>
                </li>
            </ul>
        </div>
    </nav>


    <!-- /Navigation-->
    <div class="content-wrapper">
        @yield('content')
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
    <a class="scroll-to-top rounded" href="#page-top">
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
                    <a class="btn btn-primary" href="logout">Logout</a>
                </div>
            </div>
        </div>
    </div>
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

    <!-- Bootstrap core JavaScript-->
    <script src="/assets/admin/vendor/jquery/jquery.min.js"></script>
    <script src="/assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="/assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="/assets/admin/vendor/chart.js/Chart.min.js"></script>
    <script src="/assets/admin/vendor/datatables/jquery.dataTables.js"></script>
    <script src="/assets/admin/vendor/datatables/dataTables.bootstrap4.js"></script>
    <script src="/assets/admin/vendor/jquery.selectbox-0.2.js"></script>
    <script src="/assets/admin/vendor/jquery.magnific-popup.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="/assets/adminjs/admin.js"></script>
    <!-- Custom scripts for this page-->
    <script src="/assets/admin/vendor/dropzone.min.js"></script>
    <script src="/assets/admin/vendor/bootstrap-datepicker.js"></script>
    <script>
        $('input.date-pick').datepicker();
    </script>
    <!-- WYSIWYG Editor -->
    <script src="js/editor/summernote-bs4.min.js"></script>
    <script>
        $('.editor').summernote({
            fontSizes: ['10', '14'],
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough']],
                ['fontsize', ['fontsize']],
                ['para', ['ul', 'ol', 'paragraph']]
            ],
            placeholder: 'Write here ....',
            tabsize: 2,
            height: 200
        });
    </script>

</body>

</html>
