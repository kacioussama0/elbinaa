<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content= "أن يكون مؤتمرنا الثاني منبراً للأنطلاقة نحو تثبيت المكتسبات السياسية، و المشاركة الفعالة." />
    <meta name="robots" content= "index, follow">
    <link rel="shortcut icon" href="{{asset('assets/imgs/logo-basmaa.svg')}}" type="image/svg">
    <title>حركة البناء الوطني | المؤتمر الثاني</title>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <link href="{{asset('assets/dflip/css/dflip.min.css')}}" rel="stylesheet" >
    <link href="{{asset('assets/dflip/css/themify-icons.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.rtl.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/master.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>
    <script src="{{asset('assets/dflip/js/metaboxes.min.js')}}"></script>
    <script src="{{asset('assets/dflip/js/dflip.min.js')}}"></script>

    @yield('styles')
</head>
<body class="position-relative">

<header class="position-relative">
    <!-- Start NavBar -->
    <img src="{{asset('assets/imgs/binaa-naskh.svg')}}"
         alt="elBinnaaLogo"
         class="position-absolute bottom-0 start-0 m-3 w-50 z-1">
    <nav class="navbar navbar-expand-lg bg-transparent">

        <div class="container">
            <a class="navbar-brand"
               href="{{url('/')}}">
                <img src="{{asset('assets/imgs/logo-binaa.svg')}}"
                     alt="elBinnaaLogo"
                     aria-label="elBinnaaLogo"
                     class="logo">
            </a>
            <button class="navbar-toggler"
                    type="button"
                    data-bs-toggle="offcanvas"
                    data-bs-target="#navBar"
                    aria-controls="navBar"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                <i class="fa-duotone fa-bars fa-2x text-white"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto  mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{url('/') . '#home'}}">الرئيسية</a>
                    </li>


                    <li class="nav-item dropdown ">
                        <a class="nav-link  dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            المؤتمر
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item text-dark" aria-current="page" href="{{url('/') . '#about-congress'}}">عن المؤتمر</a>

                            </li>
                            <li>
                                <a class="dropdown-item text-dark" aria-current="page" href="{{url('/') . "#documents"}}">الوثائق</a>
                            </li>

                            <li>
                                <a class="dropdown-item text-dark" aria-current="page" href="{{url('/') . "#documents"}}">النشرية</a>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{url('/memory')}}">ذكرى</a>
                    </li>



                    <li class="nav-item">
                    </li>


                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{url('/') . '#guests'}}">ضيوف الشرف</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{url('/album')}}">ألبوم</a>
                    </li>



                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{url('faq')}}">إسئلني</a>
                    </li>

                </ul>


            </div>
        </div>
    </nav>
    <!-- End NavBar -->


    @yield('addition')

    <!-- Start OffCanvas -->


    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="navBar" aria-labelledby="navBar">
        <div class="offcanvas-header">
            <img src="{{asset('assets/imgs/logo-binaa.svg')}}" width="45" height="45" alt="binaa logo">
            <h5 class="offcanvas-title guest fw-bolder" id="offcanvasWithBothOptionsLabel">حركة البناء الوطني</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 vstack gap-3">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('/')}}">
                        <i class="fa-duotone fa-home me-2"></i> الرئيسية</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#about-congress">
                        <i class="fa-duotone fa-bars-progress me-2"></i>عن المؤتمر</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#guests">
                        <i class="fa-duotone fa-user me-2"></i>ضيوف الشرف</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{url('memory')}}">
                        <i class="fa-duotone fa-hands-praying me-2"></i>الذكرى</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="#documents">
                        <i class="fa-duotone fa-files me-2"></i>الوثائق</a>
                </li>

            </ul>
        </div>
    </div>

    <!-- End OffCanvas -->

</header>
<!-- End Header -->

<main>
    @yield('content')
</main>


    <footer>
        <div class="">
            <div class="mt-3 mb-5 p-lg-5 p-sm-1 p-md-2">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12">
                            <div class="footer__widget mb-50">
                                <div>
                                        <h3 class="fw-bold">المؤتمر الثاني</h3>
                                </div>
                                <div class="footer__widget-body lh-lg">
                                    <p>                                        حزب وطني محافظ يعمل من أجل البناء المتكامل لتحقيق الإصلاح والتنمية الشاملة في إطار مرجعية الأمة الجزائرية ويسعى لرفاهية المجتمع وإسعاده.

                                    </p>

                                    <div class="footer__social mt-4">
                                        <ul class="p-0 text-decoration-none">
                                            <li><a href="https://www.facebook.com/Elbinaa.Elwatani.dz" aria-label="facebook" class="fb" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
                                            <li><a href="https://twitter.com/dz_elbinaa" aria-label="twitter" class="tw" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                                            <li><a href="https://www.youtube.com/@elbinaatv" aria-label="youtube" class="pin" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-2 offset-lg-1 col-md-6 col-sm-12">
                            <div class="footer__widget ">
                                <div class="footer__widget-head">
                                    <h3 class="footer__widget-title">اختصارات</h3>
                                </div>
                                <div class="footer__widget-body">
                                    <div class="footer__link">
                                        <ul class="p-0">
                                            <li class="list-unstyled align-items-center ">
                                                <i class="fa-duotone text-primary fa-hands-praying me-2"></i>
                                                <a href="{{url('memory')}}">الذكرى </a>
                                            </li>

                                            <br>

                                            <li class="d-inline-flex align-items-center ">
                                                <i class="fa-duotone text-primary fa-question me-2"></i>
                                                <a href="{{url('faq')}}">إسئلني</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-2 col-lg-3 col-md-6 col-sm-12">
                            <div class="footer__widget ">
                                <div class="footer__widget-head">
                                    <h3 class="footer__widget-title">تواصلوا معنا</h3>
                                </div>
                                <div class="footer__widget-body">
                                    <div class="footer__link">
                                        <ul class="p-0">
                                            <li class="contact__info-text-ltr d-inline-flex align-items-center ">
                                                <i class="fa-duotone text-primary fa-phone me-2"></i>
                                                <a style="direction: ltr;" href="tel:213540720803">0540720803</a>
                                            </li>
                                            <li class="d-inline-flex align-items-center my-2">
                                                <i class="fa-duotone text-primary fa-location-dot me-2"></i>
                                                <a href="https://rb.gy/z7kb4" target="_blank">
                                                    حركة البناء الوطني رقم 521 درارية، الجزائر</a>
                                            </li>
                                            <li class="d-inline-flex align-items-center ">
                                                <i class="fa-duotone text-primary fa-envelope me-2"></i>
                                                <a href="mailto:elbinaacongress@gmail.com">elbinaacongress@gmail.com</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-2 offset-lg-0 col-md-12 col-sm-12">
                            <div class="d-flex">
                                <a class="mx-auto align-self-center" href="">
                                    <img src="{{asset('assets/imgs/logo-binaa.svg')}}"
                                         alt="logo"
                                         class="img-fluid "
                                         width="95">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="footer__copyright text-center">
                                <p> جميع الحقوق محفوظة حركة البناء الوطني © <script>document.write(new Date().getFullYear())</script></p>
                                <p class="small skte text-muted"  title="قاسي اسامة و سقار زكرياء"> <i class="fa-duotone fa-heart text-danger"></i> من طرف SKTE</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="{{asset('assets/fontawesome/js/all.min.js')}}"></script>
<script src="{{asset('assets/js/app.js')}}"></script>
@yield('scripts')
</body>
</html>
