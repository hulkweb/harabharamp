<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="Official Website of MadhyaPradesh Bhartiya Janta Yuva Morcha" />
    <meta name="author" content="" />
    <meta name="og:image" content="https://mpbjym.org/bjym_logo.png" />
    <title>MPBJYM</title>


    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="/assets/app/css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Roboto:400,500&display=swap"
        rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="/assets/app/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="/assets/app/css/responsive.css" rel="stylesheet" />
    <link rel="shortcut icon" href="bjym_logo.png" type="image/x-icon">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrious/4.0.2/qrious.min.js"></script>


    <link rel="stylesheet" href="/assets/app/css/custom.css">

    <link rel="stylesheet" href="/assets/app/css/card.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/app/css/bootstrap.css">
    <style>
        ::-webkit-scrollbar {
            width: 16px;
        }

        ::-webkit-scrollbar-thumb {
            color: #FB6003;
            background: green;
            height: 13px;
            border-radius: 10px;
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #f3f3f3;
        }

        #view {
            border: 2px solid #FB6003;
        }

        #view:hover {
            background: transparent !important;
            color: #FB6003;
            border-color: #FB6003 !important;
        }

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

        .modal {
            min-height: 100vh;
            min-width: 100vw;
            background-color: rgba(0, 0, 0, 0.4);
            position: fixed;
            left: 0;
            display: flex;
            justify-content: center;
            top: -100vh;
            transition: all 0.3s ease-in-out;
        }

        .modal .modal_body {
            padding: 10px;
            min-height: 400px;
            max-height: 100vh;
            min-width: 600px;
            background: linear-gradient(to bottom, #FB6003, #fb62039f);
            border-radius: 10px;
            color: #FFF;
        }

        .modal img {
            height: 250px;
            margin: auto;
        }

        #teams1 {
            margin-left: 3rem;
        }

        @media (max-width:700px) {
            .slider_detail-heading {
                opacity: 0;
            }

            #twitter {
                margin-top: 15px;
            }

            .modal img,
            #img_event {
                height: 150px;
            }

            .modal .modal_body {
                min-width: 350px;
            }

            #teams1 {
                margin-left: 1rem;
            }

        }

        canvas {
            height: 200px;
            margin: 10px;
        }

        #close {
            position: absolute;
            margin-right: 0px !important;

            padding: 3px 8px;
        }

        .social {
            color: #FB6003;
        }

        .owl-item {
            height: 260px;
        }

        .item {}

        .owl-item img {
            width: auto;
            height: 250px;
        }
    </style>
</head>

<body>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v13.0&appId=3124587504531261&autoLogAppEvents=1"
        nonce="K4Zl65od"></script>
    <!-- end header section -->
    @include('partials.header')
    <!-- slider section -->
    <section class=" slider_section">
        <div id="carouselExampleIndicators" class="carousel slide vert" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
            </ol>
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <div class="slider_box" id="slide_0">
                        <div class="fixed_company-detail">
                            <p>

                            </p>
                        </div>
                        <div class="slider-detail">
                            <div class="slider_detail-heading">
                                <h2>

                                    Hon’ble Prime Minister
                                </h2>
                                <h1>
                                    SHRI NARENDRA MODI
                                </h1>
                            </div>
                            <div class="slider_detail-text">
                                <p>

                                </p>
                            </div>
                            <div class="slider_detail-btn">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="slider_box" id="slide_1">
                        <div class="fixed_company-detail">
                            <p>

                            </p>
                        </div>
                        <div class="slider-detail">
                            <div class="slider_detail-heading">
                                <h2>
                                    Hon’ble BJP National President
                                </h2>
                                <h1>
                                    SHRI J.P. NADDA
                                </h1>
                            </div>
                            <div class="slider_detail-text">
                                <p>

                                </p>
                            </div>
                            <div class="slider_detail-btn">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="slider_box" id="slide_2">
                        <div class="fixed_company-detail">
                            <p>

                            </p>
                        </div>
                        <div class="slider-detail">
                            <div class="slider_detail-heading">
                                <h2>
                                    Hon’ble BJYM National President
                                </h2>
                                <h1>
                                    SHRI TEJASVI SURYA
                                </h1>
                            </div>
                            <div class="slider_detail-text">
                                <p>

                                </p>
                            </div>
                            <div class="slider_detail-btn">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="slider_box" id="slide_3">
                        <div class="fixed_company-detail">
                            <p>

                            </p>
                        </div>
                        <div class="slider-detail">
                            <div class="slider_detail-heading">
                                <h2>
                                    Hon’ble CM MadhyaPradesh
                                </h2>
                                <h1>
                                    SHRI SHIVRAJ SINGH <br style="height: 4px"> CHOUHAN JI
                                </h1>
                            </div>
                            <div class="slider_detail-text">
                                <p>

                                </p>
                            </div>
                            <div class="slider_detail-btn">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="slider_box" id="slide_4">
                        <div class="fixed_company-detail">
                            <p>

                            </p>
                        </div>
                        <div class="slider-detail">
                            <div class="slider_detail-heading">
                                <h2>
                                    Hon’ble State President
                                </h2>
                                <h1>
                                    SHRI V.D. SHARMA
                                </h1>
                            </div>
                            <div class="slider_detail-text">
                                <p>

                                </p>
                            </div>
                            <div class="slider_detail-btn">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="slider_box" id="slide_5">
                        <div class="fixed_company-detail">
                            <p>

                            </p>
                        </div>
                        <div class="slider-detail">
                            <div class="slider_detail-heading">
                                <h2>
                                    BJYM State President
                                </h2>
                                <h1>
                                    SHRI VAIBHAV PAWAR
                                </h1>
                            </div>
                            <div class="slider_detail-text">
                                <p>

                                </p>
                            </div>
                            <div class="slider_detail-btn">

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <!-- end slider section -->

    <!-- welcome section -->
    <section class="welcome_section layout_padding" id="about">
        <div class="container">
            <div class="row">
                <div class=" col-md-6">
                    <div>
                        <img class="img-fluid" src="/assets/app/images/mpbjym.jpeg" alt="" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="welcome_detail">
                        <div class="outer">
                            <h2 class="grad">
                                ABOUT BJYM
                            </h2>
                        </div>

                        <p class="big">

                            1978 में स्थापित, भारतीय जनता युवा मोर्चा (BJYM), दुनिया का सबसे बड़ा युवा राजनीतिक संगठन
                            है। इसका मूल
                            संगठन, भारतीय जनता पार्टी (भाजपा) दुनिया की सबसे बड़ी राजनीतिक पार्टी है।
                            <br>
                            लोकसभा में सांसद (बैंगलोर दक्षिण), श्री तेजस्वी सूर्य भाजयुमो के वर्तमान अध्यक्ष हैं
                            <br>
                            श्री वैभव पंवार भारतीय जनता युवा मोर्चा मध्यप्रदेश के प्रदेश अध्यक्ष है।
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid" style="overflow:hidden" id="team">
        <div class="outer">
            <h2 class="grad">
                MPBJYM TEAM
            </h2>
        </div>
        <br>
        <br>
        <div class="container">
            <div class="row" id="teams1">
                <div class="col-sm-6 m-auto p-4">
                    <div class="card_custom">
                        <div class="flip-card">
                            <div class="flip-card__container">
                                <div class="card-front">
                                    <div class="card-front__tp card-front__tp--city">
                                        <h2 class="card-front__heading text-capitalize">Shri Vaibhav Pawar</h2>
                                        <p class="text-capitalize">State President</p>
                                    </div>

                                    <div class="card-front__bt">
                                        <p class="card-front__text-view card-front__text-view--city"
                                            style="font-size: 16px">
                                            View
                                        </p>
                                    </div>
                                </div>
                                <div class="card-back">
                                    <img src="/assets/app/images/vaibhav_pawar.jpg" height="" class="img-fluid"
                                        alt="">
                                </div>
                            </div>
                        </div>

                        <div class="inside-page">
                            <div class="inside-page__container">
                                <h3 class="inside-page__heading inside-page__heading--city">
                                    Shri Vaibhav Pawar
                                </h3>
                                <p class="inside-page__text">
                                    <a href="https://twitter.com/vaibhavpawarmp?s=11&t=2V2-RxU8FTrDpOGF-5jUOw"
                                        class="btn btn-secondary rounded-circle"> <i class="fa fa-twitter "
                                            aria-hidden="true"></i>
                                    </a>
                                    <a href="https://m.facebook.com/profile.php?id=100050465530957"
                                        class="btn btn-secondary rounded-circle"> <i class="fa fa-facebook "
                                            aria-hidden="true"></i>
                                    </a>
                                    <a href="#" class="btn btn-secondary rounded-circle"> <i
                                            class="fa fa-instagram " aria-hidden="true"></i> </a>


                                </p>
                                <!-- <a href="#" class="inside-page__btn inside-page__btn--city">View deals</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex container">
            <a href="mpbjym-team" class="btn btn btn-primary rounded-pill ml-auto " id="view"
                style="background: linear-gradient(-45deg, var(--orange) 40%, pink,var(--orange) 40%);">View
                More...</a>
        </div>
    </section>
    <br><br><br>
    <h2>
        <div class="outer">
            <h2 class="grad p-2">
                OUR PRESIDENT
            </h2>
        </div>
    </h2>
    <section class="layout_padding story_section my-4" style="height:auto" id="president">
        <div class="container">
            <div class="row">
                <div class=" col-md-6" style="box-shadow: 0 0.5rem 1rem #fb62039f !important;">
                    <div>
                        <img class="img-fluid" src="/assets/app/images/vaibhav_pawar.jpg" alt="" />
                    </div>
                </div>
                <div class=" col-md-6">
                    <div class="story_detail" style="height:auto">

                        <h2>
                            <div class="outer">
                                <h2 class="grad p-2">
                                    श्री वैभव पवार जी
                                </h2>
                            </div>
                        </h2>
                        <h3 class="text-center" style="font-size:21px ;font-weight: 700;">
                            प्रदेश अध्यक्ष , भारतीय जनता युवा मोर्चा (म.प्र. )
                        </h3>
                        <br>
                        <p style="font-size:16px ;font-weight: 500;">
                            भारतीय जनता युवा मोर्चा एक ऐसा नाम है जिसे जितना भी आत्मसात किया जाए उतना कम है यह केवल एक
                            मोर्चा नहीं
                            बल्कि एक ऐसी संस्था है जिसमें मेरे जैसे करोड़ों कार्यकर्ताओं को अपनी नेतृत्व क्षमता सीखने
                            सिखाने और दिखाने
                            का अवसर मिला है चाहे वह सेवा भाव का नेतृत्व या सामाजिक समरसता का नेतृत्व हो संगठनात्मक
                            कार्यों का नेतृत्व
                            या ऐसे ही अन्य क्षेत्रों में सेवा रूपी नेतृत्व का अवसर मिला
                            <br>
                            माननीय मुख्यमंत्री श्री शिवराज सिंह चौहान जी भाजपा की यशस्वी प्रदेश अध्यक्ष श्री विष्णु दत्त
                            शर्मा जी एवं
                            भाजपा के संगठन पदाधिकारियों का समय-समय पर मार्गदर्शन प्राप्त हुआ जिससे युवा मोर्चा को और
                            ताकत मिली
                            राष्ट्रीय कार्यक्रमों और अभियानों को धरातल पर ले जाने के लिए युवा मोर्चा की राष्ट्रीय
                            अध्यक्ष श्री तेजस्वी
                            सूर्या जी ने जिस तरह पथ प्रदर्शन किया उसे सेवा कार्य की एक नई ऊर्जा का संचार हुआ विगत 1 वर्ष
                            में भाजपा
                            जनता युवा मोर्चा ने विभिन्न कार्यक्रमों के माध्यम से विभिन्न क्षेत्र में कार्य करने वाली
                            युवा वर्ग तक
                            पहुंचने का प्रयास किया
                        </p>
                        <p class="inside-page__text">
                            <a href="https://twitter.com/vaibhavpawarmp?s=11&t=2V2-RxU8FTrDpOGF-5jUOw"
                                class="btn btn-secondary rounded-circle"> <i class="fa fa-twitter "
                                    aria-hidden="true"></i>
                            </a>
                            <a href="https://m.facebook.com/profile.php?id=100050465530957"
                                class="btn btn-secondary rounded-circle"> <i class="fa fa-facebook "
                                    aria-hidden="true"></i>
                            </a>
                            <a href="#" class="btn btn-secondary rounded-circle"> <i class="fa fa-youtube "
                                    aria-hidden="true"></i>
                            </a>
                            <a href="#" class="btn btn-secondary rounded-circle"> <i class="fa fa-instagram "
                                    aria-hidden="true"></i>
                            </a>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Team ENd -->
    <!-- service section -->
    <br><br>
    <section class="container events" id="events">
        <div class="outer">
            <h2 class="grad">
                Events
            </h2>
        </div>
        <div class="container-fluid">
            <div class="row">


                @foreach ($events as $event)
                    <div class="col-sm-6 p-4">
                        <div class="card"
                            style="box-shadow:0px 6px 6px  #ff750485;border-radius: 10px;min-height: 200px;background: linear-gradient(to bottom,
            var(--orange),
            green);color: white;">
                            <div class="row">
                                <div class="col-sm-4 d-flex">
                                    <img src="/uploads/events/{{ $event->image }}" alt="" id="img_event"
                                        class="img-fluid rounded m-auto">
                                </div>
                                <div class="col-sm-8">
                                    <h4 class="py-1 text-center">{{ $event->title }}</h4>
                                    <p class="m-1 text-center"><strong class="mr-4">
                                            Time:</strong>{{ date('d M Y', strtotime($event->from_date)) }} </p>
                                    <p class="m-1 text-center"><strong class="mr-4"> Place:</strong>
                                        {{ $event->place }} </p>
                                    <p class="oveflow-hidden m-1 text-center"
                                        style="  text-overflow: ellipsis;
                                                        white-space: nowrap;
                                                        overflow: hidden;
                                                    ">
                                        {{ $event->details }} </p>

                                </div>
                            </div>
                            <div class="row">

                                <div class="col-sm-8 d-flex p-2">
                                    <canvas id="qr-code-{{ $event->id }}" class="m-auto"></canvas>

                                </div>
                                <div class="col-sm-4 d-flex p-1 pt-2">
                                    <a href="form?id={{ $event->id }}"
                                        class="btn btn-light rounded-pill delete  m-auto">Register</a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        var qr;
                        (function() {
                            qr = new QRious({
                                element: document.getElementById('qr-code-{{ $event->id }}'),
                                size: 200,
                                value: '{{ $actual_link }}{{ $event->id }}'
                            });
                        })
                        ();

                        function generateQRCode() {

                            qr.set({
                                foreground: 'black',
                                size: 200,
                                value: '{{ $actual_link }}{{ $event->id }'
                            });
                        }
                    </script>
                @endforeach




            </div>
        </div>
        <div class="d-flex container">
            <a href="#" class="btn btn btn-primary rounded-pill ml-auto " id="view"
                style="background: linear-gradient(-45deg, var(--orange) 40%, pink,var(--orange) 40%);">View
                More...</a>
        </div>
        <br><br>
    </section>
    <!-- security section -->

    <section class="security_section layout_padding" id="gallery">
        <div class="outer">
            <h2 class="grad">
                MEDIA COVERAGE
            </h2>
        </div>
        <div class="container">


            <div class="security_containe ">
                <div class="carousel-wrap">
                    <div class="owl-carousel">
                        <div class="item">
                            <div class="p-2 inner_item">
                                <img src="/assets/app/images/news-1.jpg" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="p-2 inner_item">
                                <img src="/assets/app/images/news-2.jpg" class="img-fluid img-responsive"
                                    alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="p-2 inner_item">
                                <img src="/assets/app/images/news-3.jpg" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="p-2 inner_item">
                                <img src="/assets/app/images/news-4.jpg" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="p-2 inner_item">
                                <img src="/assets/app/images/news-5.jpg" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="p-2 inner_item">
                                <img src="/assets/app/images/news-6.jpg" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- end security section -->
    <section class="service_section ">
        <br>
        <br>
        <div class="container">
            <h2>
                <div class="outer">
                    <h2 class="grad p-2">
                        SOCIAL MEDIA
                    </h2>
                </div>
            </h2>

        </div>

        <br>
        <br>
        <div class="container social">

            <div class="row">
                <div class="col-sm-5 m-auto p-2" style="border:2px solid #4267B2;border-radius:10px">
                    <div class="fb-page" data-href="https://www.facebook.com/BJYM4MP" data-tabs="timeline"
                        data-width="350" data-height="500" data-small-header="false"
                        data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/BJYM4MP" class="fb-xfbml-parse-ignore"><a
                                href="https://www.facebook.com/BJYM4MP">BJYM Madhya Pradesh</a></blockquote>
                    </div>
                </div>
                <div class="col-sm-5 m-auto  p-2" id="twitter"
                    style="height:530px;overflow-y:scroll;border:2px solid #00acee;border-radius:10px;padding-top:10px;">
                    <a class="twitter-timeline" href="https://twitter.com/MPBJYM?ref_src=twsrc%5Etfw">Tweets by
                        MPBJYM</a>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>

            </div>
        </div>
    </section>
    <!-- end service section -->
    <br><br>

    <section class="service_section ">
        <br>
        <br>
        <div class="container">
            <h2>
                <div class="outer">
                    <h2 class="grad p-2">
                        JOIN BJP
                    </h2>
                </div>
            </h2>

        </div>

        <br>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-sm-10 p-4 m-auto"
                    style="box-shadow:0px 6px 6px  #ff750485;border-radius: 10px;min-height: 200px;background: linear-gradient(to bottom,
            var(--orange),
            green);color: white;">
                    <form action="#" method="post" enctype="multipart/form-data">
                        <div class="box_general padding_bottom">
                            <div class="header_box version_2 p-1">
                                <h4><i class="fa fa-user mx-2"></i>Member Registration</h4>
                                <hr>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name / नाम</label>
                                        <input type="text" name="name" class="form-control" placeholder=""
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Upload Image / फोटो</label> <br>
                                        <input type="file" name="image" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email </label>
                                        <input type="text" name="email" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Birthday / जन्म दिनांक </label>
                                        <input type="date" name="birthday" class="form-control"
                                            placeholder="Hotel Mariott" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Position / पद</label>
                                        <input type="text" name="position" class="form-control" required>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Place / स्थान</label>
                                        <input type="text" name="place" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Pincode </label>
                                        <input type="text" name="pincode" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label> Phone</label>
                                        <input type="number" name="phone" id="" class="form-control"
                                            required>
                                        <small id="errore"></small>
                                    </div>
                                </div>
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label for=""></label>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <p><button type="button" class="btn btn-primary rounded-pill"
                                                        id="verify">Verify</button></p>

                                            </div>
                                            <div class="col-sm-8">
                                                <input type="number" name="otp" id="otp_num"
                                                    class="form-control" placeholder="Enter Otp"
                                                    onkeyup="checkOtp(this.value)" required>

                                                <small id="errore_otp"></small>
                                            </div>

                                        </div>


                                    </div>
                                </div>
                            </div>

                            <!-- /row-->
                            <p><button name="signup" type="submit"
                                    class="btn_1 btn btn-primary rounded-pill disabled" disabled>Register</button></p>
                        </div>
                        <!-- /box_general-->
                        <!-- /box_general-->
                    </form>
                </div>
            </div>

        </div>
    </section>
    @include('partials.footer')
    <span style="position: fixed;bottom:3rem;right:3rem;z-index:100"><a href="https://wa.me/7373830606"
            class="btn rounded-circle bg-light shadow p-1" style="height:3rem;width: 3rem;display:flex"><i
                class="fa fa-whatsapp fa-2x m-auto" aria-hidden="true" style="color: #075E54;"></i></a></span>

    <!-- footer section -->
    <div class="modal">
        <div class="row m-auto">
            <div class="col-sm-6 col-11 bg-light modal_body m-auto">
                <button class="btn btn-sm btn-light rounded-circle" id="close"><i class="fa fa-times text-danger"
                        aria-hidden="true"></i></button>
                <h3 class="p-1 text-center text-bold pl-4">
                    75 लाख पेड़ों का महा वृक्षारोपण
                </h3>

                <div class="d-flex">
                    <img src="http://mpbjym.org/admin/uploads/m.jpg" alt=""
                        class="img-fluid img-reponsive rounded m-auto">

                </div>

                <p class="p-1 m-0 text-center w-100"> <strong>Date:</strong> &nbsp;20 Jul 2022 </p>
                <p class="p-1 m-0 text-center w-100">



                <blockquote class="text-center">
                    25 अगस्त 2022 से 2 अक्टूबर तक विश्व के सबसे बड़े युवा संगठन भारतीय जनता युवा मोर्चा मध्यप्रदेश द्वारा
                    चलाए जा रहे 75 लाख वृक्षो के महा वृक्षारोपण अभियान का हिस्सा बनने के लिए अभी रजिस्टर करें
                </blockquote>
                <b class="text-center d-block">75 लाख वृक्षो के महा वृक्षारोपण अभियान से जुड़ने के लिए Missed Call दे।
                    <br> <i class="fa fa-phone"></i> :9111003009 </b>



                </p>
                <div class="d-flex"> <a href="https://mpbjym.chhavinirman.in/register?event=2"
                        class="btn btn-light rounded-pill mx-auto my-3">Register</a></div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="/assets/app/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="/assets/app/js/bootstrap.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js">
    </script>
    <script src="/assets/app/js/script.js"></script>
    <script type="text/javascript">
        $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            navText: [],
            autoplay: true,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        });
    </script>
    <!-- devbyrahukatre -->
    <script>
        $(".nav_search-btn").click(function() {
            if ($(".nav_search-input").hasClass("d-none")) {
                event.preventDefault();
                $(".nav_search-input")
                    .animate({
                            left: "-1000px"
                        },
                        "1000000"
                    )
                    .removeClass("d-none");
            } else {
                $(".nav_search-input")
                    .animate({
                            left: "0px"
                        },
                        "1000000"
                    )
                    .addClass("d-none");
            }
        });
    </script>




    <script>
        $(document).ready(function() {
            setTimeout(() => {
                $(".modal").css("top", "0");
            }, 3000);

            $("#close").click(function() {
                $(".modal").css("top", "-100vh");
            })
        });



        var otp = Math.floor(Math.random() * 999999) + 111111;
        $("#verify").click(function() {
            if ($("input[name=phone]").val().toString().length > 9) {
                $("#errore").hide()

                $.post("otp.php", {
                        send_otp: true,
                        mobile: $("input[name=phone]").val(),
                        otp: otp
                    },
                    function(data, status) {
                        if (data == 'success') {
                            $("#otp_num").show()
                            alert(`OTP has been Sent to you mobile`)
                        } else if (data == 'after') {
                            alert(`Try After 24 hours`)

                        }
                    }
                )

            } else {
                $("#errore").show()
                $("#errore").html(` <i class="fa fa-times text-danger"></i>  Please Enter Correct Mobile Number`)
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
            background: rgba(255, 255, 255, 0.344);
            display: none;
        }

        #container {
            margin: auto;
            text-align: center;
            height: 150px;
            width: 150px;
            background: white;
            border-radius: 5px;
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
            <img src="https://mpbjym.org/preloader.png" height="80" id="loader" style="margin:auto"
                alt="">
            <p>प्रमाण पत्र बन रहा है ....</p>
        </div>
    </div>
    <script>
        var form = document.querySelector("form");
        var popup = document.querySelector("#preloader");
        form.addEventListener("submit", () => {
            popup.getElementsByClassName.display = "block";
        })
    </script>
</body>

</html>
