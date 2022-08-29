<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="/assets/admin/img/logo.png" type="image/png">
    <title>Hara Bhara Madhyapradesh - MPBJYM</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/vendors/linericon/style.css">
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="/assets/vendors/nice-select/css/nice-select.css">
    <!-- main css -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <style>
        @media (max-width: 767px) {
            .home_banner_area .banner_inner .banner_content .primary_btn {
                display: block !important;
            }
          .banner_inner .row{
              flex-direction: column-reverse;
          }
        }

        @media (max-width: 991px) {
            .home_right_img {
                display: block !important;
            }
            .banner_inner .row{
              flex-direction: column-reverse !important;
          }
        }
        @media(min-width:992px){
            .banner_content{
                padding-top: 3rem;
            }
        }
    </style>
</head>

<body>

    <!--================ Start Header Area =================-->
    <header class="header_area" style="border-bottom: 1px solid grey">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="/"><img src="/assets/img/hara_bhara_mp_logo.png"
                            height="100" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav justify-content-end">
                            <li class="nav-item active"><a class="nav-link" href="/">Home</a></li>


                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--================ End Header Area =================-->
    @yield('content')



    <!--================Footer Area =================-->
    <footer class="footer_area " style="background-color: #fff;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="footer_top flex-column">
                        <div class="footer_logo">
                            <a href="/">
                                <img src="assets/img/hara_bhara_mp_logo.png" height="120" alt="">
                            </a>
                            <p style="font-size: 14px;">भारतीय जनता युवा मोर्चा मध्यप्रदेश</p>

                            <h4>Follow Us</h4>
                        </div>
                        <div class="footer_social">
                            <a href="https://m.facebook.com/BJYM4MP"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="https://mpbjym.org/#"><i class="fa fa-instagram"></i></a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row footer_bottom justify-content-center">
                <p class="col-lg-8 col-sm-12 footer-text">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> - by MPBJYM
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </footer>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!--================End Footer Area =================-->
    @if ($success = Session::get('success'))
        <script>
            swal("Success", "Registered Successfully ! ", "success");
        </script>
    @endif

    @if ($errore = Session::get('errore'))
        <script>
            swal("Success", "Something Went Wrong !", "error");
        </script>
    @endif
    <!-- @if ($url = Session::get('success'))-->
    <!--    <script>-->
    <!--        const download = (path, filename) => {-->
    <!--            const anchor = document.createElement('a');-->
    <!--            anchor.href = path;-->
    <!--            anchor.setAttribute("download", "resume.pdf");-->
    <!--            document.body.appendChild(anchor);-->
    <!--            anchor.click();-->
    <!--            document.body.removeChild(anchor);-->

    <!--        };-->
    <!--        download('{{ $url }}', 'certificate.pdf');-->
          
    <!--    </script>-->
    <!--@endif-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/assets/js/jquery-3.2.1.min.js"></script>
    <script src="/assets/js/popper.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/stellar.js"></script>
    <script src="/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="/assets/vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="/assets/vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="/assets/vendors/isotope/isotope-min.js"></script>
    <script src="/assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="/assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="/assets/js/mail-script.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="/assets/js/gmaps.min.js"></script>

    <script src="/assets/js/theme.js"></script>
</body>

</html>
