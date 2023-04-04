<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>حركة البناء الوطني | المؤتمر الثاني</title>
    <link rel="shortcut icon" href="imgs/logo-basmaa.svg" type="image/svg">



    <link href="{{asset('assets/dflip/css/dflip.min.css')}}" rel="stylesheet" >
    <link href="{{asset('assets/dflip/css/themify-icons.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.rtl.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/master.css')}}">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" ></script>
    <script src="{{asset('assets/dflip/js/metaboxes.min.js')}}"></script>
    <script src="{{asset('assets/dflip/js/dflip.min.js')}}"></script>

    @yield('styles')
</head>
<body class="position-relative">


<!-- Start Header -->
<header class="position-relative z-3">

    <img src="imgs/binaa-naskh.svg" alt="" class="position-absolute bottom-0 start-0 z-3 w-25 opacity-25 m-3">

    <!-- Start NavBar -->

    <nav class="navbar navbar-expand-lg bg-white bg-opacity-75  shadow-sm position-fixed top-0 start-0 w-100 z-3">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{asset('assets/imgs/logo-basmaa.svg')}}" alt="" class="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navBar" aria-controls="navBar" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-duotone fa-bars fa-2x text-primary"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{url('/') . '#home'}}">الرئيسية</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{url('/memory')}}">ذكرى</a>
                    </li>



                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{url('/') . '#about-congress'}}">عن المؤتمر</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{url('/') . '#guests'}}">ضيوف الشرف</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{url('/memory')}}">ألبوم</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{url('/') . "#documents"}}">الوثائق</a>
                    </li>



                </ul>

                <img src="{{asset('assets/imgs/logo-binaa.svg')}}" alt="" class="logo d-lg-block d-md-none">

            </div>
        </div>
    </nav>
    <!-- End NavBar -->


    @yield('addition')

    <!-- Start OffCanvas -->


    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="navBar" aria-labelledby="navBar">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">حركة البناء الوطني</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#home">الرئيسية</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#about-congress">عن المؤتمر</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#guests">ضيوف الشرف</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#documents">الوثائق</a>
                </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{url('/memory')}}">ذكرى</a>
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

<!-- Start Footer -->


<footer class="py-5">

    <div class="container text-center ">

        <img src="{{asset('assets/imgs/logo-binaa.svg')}}" alt="" class="logo mb-3">


        <div class="social-media">
            <a href="" class="text-decoration-none">
                <i class="fa-brands fa-facebook"></i>
            </a>

            <a href="" class="text-decoration-none">
                <i class="fa-brands fa-youtube"></i>
            </a>

            <a href="" class="text-decoration-none">
                <i class="fa-brands fa-instagram"></i>
            </a>
        </div>
        <p class="mt-3 ">جميع الحقوق محفوظة حركة البناء الوطني © 2023 </p>
        <p>تمت بواسطة <a href="https://www.facebook.com/donttryhacking.me0101"> قاسي أسامة</a> بكل  <i class="fa-duotone fa-heart text-danger"></i></p>

    </div>

</footer>


<!-- End Footer -->

<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/fontawesome/js/all.min.js')}}"></script>
<script src="{{asset('assets/js/app.js')}}"></script>
@yield('scripts')
</body>
</html>
