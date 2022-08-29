<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="noindex">
    <meta name="server" content="app.spp.co">
    <!-- Favicon -->
    <link rel="icon" href="/assets/img/logo.png" sizes="32x32">

    <title>Dashboard || MPBJYM</title>

    <link rel="stylesheet" href="https://use.typekit.net/qhc0gdo.css">
    <link rel="stylesheet" href="/css/19-10/spp_clients.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="https://kit.fontawesome.com/51761b1c6c.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrious/4.0.2/qrious.min.js"></script>
    <style type="text/css" data-css-vars>
        :root {}

        .breadcrumb {
            padding: 10px;
            background: #dfe9f4;
            border: transparent;
            border-radius: 5px;
            margin-top: 10px;
        }
    </style>
</head>

<body class="">
    <div id="loading" class="ajax-loader">Loading...</div>

    <div class="container-fluid">
        <div class="row">
            <aside class="col sidebar"
                style="background: rgb(86,86,88);
            background: linear-gradient(180deg,rgb(238, 94, 5) -20%, rgb(238, 94, 5) 59%,rgb(238, 94, 5) 100%);">
                <div class="sidebar-sticky">
                    <a href="/admin" class="navbar-brand d-none d-sm-block" data-pjax="data-pjax">
                        <img src="/assets/img/logo.png" height="80" alt="">
                    </a>

                    <ul class="nav flex-column" role="navigation">
                        <li class="nav-item title">Activity</li>
                        <li class="nav-item">
                            <a href="/admin" class="nav-link " title="Dashboard" data-pjax>

                                <span>
                                    <i class="fas fa-home fa-fw"></i>

                                    Dashboard
                                </span>
                            </a>
                        </li>
                        @if (auth()->user()->admin)
                            <li class="nav-item">
                                <a href="{{ route('events') }}" class="nav-link" title="Members" data-pjax>

                                    <span>
                                        <i class="fas fa-person-booth fa-fw"></i>

                                        Events
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('event_add') }}" class="nav-link" title="Members" data-pjax>

                                    <span>
                                        <i class="fas fa-plus fa-fw"></i>

                                        Add Events
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('members') }}" class="nav-link" title="Members" data-pjax>
                                    <span>
                                        <i class="fas fa-person-booth fa-fw"></i>

                                        Members
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('member_add') }}" class="nav-link " title="Customer" data-pjax>

                                    <span>
                                        <i class="fas fa-plus fa-fw"></i>

                                        Add Member
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item title">Links</li>
                            <li class="nav-item">

                                <a href="{{ route('parliaments') }}" class="nav-link " title=" All Links" data-pjax>
                                    <span>
                                        <i class="fas fa-shopping-cart fa-fw"></i>
                                        Vidhan Sabha
                                    </span>
                                </a>

                            </li>
                            <li class="nav-item">

                                <a href="{{ route('positions') }}" class="nav-link " title="  Track Usage" data-pjax>

                                    <span>
                                        <i class="fas fa-shopping-cart fa-fw"></i>

                                        All positions
                                    </span>
                                </a>

                            </li>
                            <li class="nav-item">

                                <a href="{{ route('position_add') }}" class="nav-link " title="  Track Usage" data-pjax>

                                    <span>
                                        <i class="fas fa-shopping-cart fa-fw"></i>

                                        Add positions
                                    </span>
                                </a>

                            </li>
                            <li class="nav-item">

                                <a href="{{ route('settings') }}" class="nav-link  " title="Create Coupon" data-pjax>

                                    <span>
                                        <i class="fas fa-file fa-fw"></i>

                                        Settings
                                    </span>
                                </a>

                            </li>
                             <li class="nav-item title">Peoples</li>
                        <li class="nav-item">

                            <a href="{{ route('peoples') }}" class="nav-link " title=" All Links" data-pjax>

                                <span>
                                    <i class="fas fa-shopping-cart fa-fw"></i>

                                    All Peoples
                                </span>
                            </a>

                        </li>
                        @endif
                        {{-- Mandal Team Area --}}
                       
                        <li class="nav-item">

                            <a href="{{ route('voluntiers') }}" class="nav-link " title=" All Links" data-pjax>

                                <span>
                                    <i class="fas fa-shopping-cart fa-fw"></i>

                                    All voluntiers
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">

                            <a href="{{ route('voluntier_add') }}" class="nav-link " title=" All Links" data-pjax>

                                <span>
                                    <i class="fas fa-shopping-cart fa-fw"></i>

                                    Add voluntiers
                                </span>
                            </a>
                        </li>



                        <li class="nav-item">

                            <a href="{{ route('panchayats') }}" class="nav-link  " title="Create Coupon" data-pjax>

                                <span>
                                    <i class="fas fa-file fa-fw"></i>

                                    Panchayats
                                </span>
                            </a>

                        </li>
                        <li class="nav-item">

                            <a href="{{ route('panchayat_add') }}" class="nav-link  " title="Create Coupon"
                                data-pjax>

                                <span>
                                    <i class="fas fa-file fa-fw"></i>

                                    Add Panchayat
                                </span>
                            </a>

                        </li>



                    </ul>
                </div>

                <footer></footer>
            </aside>
            <main class="col">

                <nav class="navbar navbar-light navbar-expand">

                    <button id="sidebar-collapse" class="navbar-toggler d-block d-lg-none mr-2" type="button">

                        <span class="navbar-toggler-icon"></span>
                    </button>


                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item d-flex align-items-center mr-3">
                        </li>

                        <li class="nav-item dropdown notifications" id="notification-menu"></li>




                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle d-flex align-items-center"
                                data-toggle="dropdown">

                                @if (auth()->user()->avatar)
                                    <img src='/uploads/avatars/{{ auth()->user()->avatar }}' class='rounded-circle'
                                        height="40">
                                @else<div class="avatar css-avatar">
                                        <span>{{ auth()->user()->name[0] }} </span>
                                    </div>
                                @endif



                                <span class="d-none d-lg-block ml-1">{{ auth()->user()->name }}</span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="{{ route('profile') }}" class="dropdown-item" data-pjax>Your
                                    account</a>
                                <a href="{{ route('logout') }}" class="dropdown-item">
                                    Sign out
                                </a>
                            </div>
                        </li>



                    </ul>
                </nav>
                @yield('content')
        </div>



    </div>
    </main>
    </div>
    </div>
    <footer class="pt-3">&nbsp;</footer>

    <div class="modal" id="spp-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content"></div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
    @if (auth()->user()->admin)
        <script>
            $(document).ready(function() {
                $('#dataTable').DataTable({
                    dom: 'Bfrtip',
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ]
                });
            });
        </script>
    @endif

    <script src="/js/jquery.pjax.js?v=08-10"></script>
    <script src="/js/27-10/spp_clients.js"></script>


    <script>
        $(".btn_1").attr('class', 'btn btn-primary')
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
</body>

</html>
