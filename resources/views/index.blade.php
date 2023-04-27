@extends('layouts.header')


@section('addition')


    <!-- Start Landing Page -->
    <section class="landing-page w-100 h-100 position-absolute top-0 start-0 py-5 " id="home">
        <div class="position-absolute top-50 start-50 translate-middle z-2 text-center text-xl-start">
            <h1 class="title fw-bolder text-white mt-5 pt-3 text-center">حركة البناء الوطني</h1>
{{--
            <h2 class="display-6 fw-bolder text-white text-center" dir="ltr">National Mouvement ElBinaa</h2>
--}}

            <div class="d-flex  align-items-center align-items-lg-end  flex-column flex-lg-row">
                <span>
                    <h3 class=" fw-bold text-white title-1 text-lg-start">المؤتمر الثاني</h3>
{{--
                    <h3 class="display-4 fw-bold text-white">Second Congress</h3>
--}}
                </span>
                <img src="{{asset('assets/imgs/basmaa-white.svg')}}"
                     alt=""
                     width="85"
                     class="mx-2">
                <h4 class="text-white text-end fw-lighter">بصمتنا في عالم جديد</h4>
            </div>


            @if(date("Y/m/d") != "2023/05/06")
                <div class="btn btn-outline-light mt-4 fs-3  w-100">قريبا</div>
            @else
                <div class="btn btn-outline-light mt-4 fs-3  w-100">بدأ المؤتمر</div>
            @endif

            <div class="counter-down mt-5 flex-row">
                    <span  id="day" data-name="يوم"></span>
                    <span  id="hour" data-name="ساعة"></span>
                    <span  id="minute" data-name="دقيقة"></span>
                    <span id="second" data-name="ثانية"></span>
            </div>

            <div class="d-flex justify-content-between align-items-center mt-5 text-white align-items-center text-center flex-column flex-md-row">
                    <div>
                        <i class="fa-duotone fa-calendar-days fa-2x text-white mb-2"></i>
                        <h6 class="lh-lg">
                             06 ماي 2023
                             09 سا صباحا
                        </h6>

                    </div>

                <div>
                        <i class="fa-duotone fa-location-dot fa-2x text-white mb-2"></i>
                        <h6 class="lh-lg"> المركز الدولي للمؤتمرات <br> عبد اللطيف رحالي </h6>
                </div>
            </div>

        </div>


    </section>

    <!-- End Landing Page -->
@endsection


@section('content')

    <!--Start Video -->

    <section class="container">
        <div class="row py-5">
            <div class="col-12 col-lg-6  ">
                <h3 class="display-5 text-center">الفيديو الترويجي</h3>
                <iframe width="560" class="mx-auto d-block my-5 w-100 rounded-3 binaa-vid" height="300"
                        src="https://www.youtube-nocookie.com/embed/MvR7fc4YunA"
                        title="YouTube video player"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture; "
                        allowfullscreen>
                </iframe>
            </div>
            <div class="col-12 col-lg-6">
                <h3 class="display-5 text-center ">أنشودة المؤتمر</h3>
                    <div class="card my-5 flex-row d-flex align-items-center px-3 py-5 border-0 shadow-sm">
                        <div class="w-75 md-w" id="waveform"></div>
                        <div class="controls">
                            <button class="btn btn-dark audio-btn ms-3"
                                    style="width: 150px"
                                    onclick="wavesurfer.playPause()">
                                <i class="fa-duotone fa-play-pause"></i>
                            </button>
                        </div>
                    </div>
            </div>
        </div>
    </section>

    <!--End Video-->





@if(count($guests))
    <!-- Swiper -->
<section class="my-5  bg-secondary-subtle ">
       <div class="container py-5">


           <div class="row ">
               <div class="col-12 col-md-6">
                   <h1 class="guest" id="guests">ضيوف الشرف</h1>
                   <hr>
                   <p class="lh-lg">
                       تتشرف الحركة في مؤتمرها الثاني
                       باستقبال"ضيوف الجزائر" <br> من مختلف القارات؛
                       اهلا و سهلا و مرحبا
                   </p>
               </div>

               <div class="col-12 col-md-6">
                   <div class="swiper">
                       <div class="swiper-wrapper">

                           @foreach($guests as $image)

                               <div class="card swiper-slide">
                                   <a
                                       href="{{asset('storage/'.$image->path)}}"
                                       data-fancybox
                                       data-caption="">
                                       <img src="{{asset('storage/'.$image->path)}}" class="card-img-top" alt="...">
                                   </a>
                               </div>



                           @endforeach

                       </div>
                       <div class="swiper-pagination"></div>
                   </div>
               </div>
           </div>
       </div>
</section>
{{-- end swiper--}}
@endif


    <!-- Start About Congress -->

    <section class="about position-relative my-5 py-5" id="about-congress">
        <div class="container py-4" id="about-congress">

            <h3 class="display-5 text-center">عن المؤتمر</h3>

            <div class="row mt-5 g-4">

                <div class="col-12 col-md-6 col-lg-4 ">
                    <div class="card text-center rounded-3  border-0 shadow-sm">
                        <div class="card-body p-5">
                            <i class="fa-duotone  fa-eye fa-4x text-center text-primary mb-3"></i>
                            <h5 class="card-title fw-bolder mb-3">الرؤية</h5>
                            <p class="card-text lh-lg">أن يكون مؤتمرنا الثاني منبراً للأنطلاقة نحو تثبيت المكتسبات السياسية، و المشاركة الفعالة.</p>
                        </div>
                    </div>

                </div>


                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card text-center rounded-3  border-0 shadow-sm">
                        <div class="card-body p-5">
                            <i class="fa-duotone fa-envelope fa-4x text-center text-primary mb-3"></i>
                            <h5 class="card-title fw-bolder mb-3">الرسالة</h5>
                            <p class="card-text lh-lg">إبراز أهمية العمل السياسي و النضال الحزبي، وأثرهما في تفعيل التنافسية الشريفة وسبل التنمية.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-center rounded-3  border-0 shadow-sm">
                        <div class="card-body p-5">
                            <i class="fa-duotone fa-question fa-4x text-center text-primary mb-3"></i>
                            <h5 class="card-title fw-bolder mb-3 ">من نحن</h5>
                            <p class="card-text lh-lg">
                                حزب وطني محافظ يعمل من أجل البناء المتكامل لتحقيق الإصلاح والتنمية الشاملة في إطار مرجعية الأمة الجزائرية ويسعى لرفاهية المجتمع وإسعاده.
                            </p>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <!-- End About Congress -->





    <!-- Start Documents -->

    <section class="documents bg-secondary-subtle py-5 my-5" id="documents">

        <div class="container">

            <h3 class="display-5 text-center">وثائق المؤتمر</h3>

            <div class="row mt-5 align-items-center">
                <div class="order-1 order-lg-0 col-lg-6">
                    <div class="row">

                        <div class="col-md-6 mb-3">
                            <div class="card text-center border-0 rounded-3 shadow-sm fency-border p-3">
                                <div class="card-body">
                                    <i class="fa-duotone fa-gavel fa-3x text-center text-primary  mb-3"></i>
                                    <h5 class="card-title fw-bolder mb-3 ">القانون الاساسي</h5>
                                    <a href="#" class="btn text-primary fw-bolder ">
                                        <i class="fa-duotone fa-download text-primary me-1"></i>
                                        تحميل
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="card text-center border-0 rounded-3 shadow-sm fency-border p-3">
                                <div class="card-body">
                                    <i class="fa-duotone fa-user-tie fa-3x text-center text-primary  mb-3"></i>
                                    <h5 class="card-title fw-bolder mb-3 ">خطاب رئيس الحركة </h5>
                                    <a href="#" class="btn text-primary fw-bolder ">
                                        <i class="fa-duotone fa-download text-primary me-1"></i>
                                        تحميل
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="card text-center border-0 rounded-3 shadow-sm fency-border p-3">
                                <div class="card-body">
                                    <i class="fa-duotone fa-scale-balanced fa-3x text-center text-primary  mb-3"></i>
                                    <h5 class="card-title fw-bolder mb-3 ">السياسة العامة</h5>

                                    <a href="#" class="btn text-primary fw-bolder ">
                                        <i class="fa-duotone fa-download text-primary me-1"></i>
                                        تحميل
                                    </a>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="card text-center border-0 rounded-3 shadow-sm fency-border p-3">
                                <div class="card-body">
                                    <i class="fa-duotone fa-file-lines fa-3x text-center text-primary  mb-3"></i>
                                    <h5 class="card-title fw-bolder mb-3 ">وثائق أخرى</h5>

                                    <a href="#" class="btn text-primary fw-bolder ">
                                        <i class="fa-duotone fa-download text-primary me-1"></i>
                                        تحميل
                                    </a>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-5 offset-lg-1 mb-lg-0 mb-5">
                    <img src="{{asset('assets/imgs/basma-1.svg')}}" alt="" class="img-fluid">
                </div>
        </div>
    </div>
</section>

    <!-- End Documents -->


{{-- start schudel--}}

    <div class="container" >
        <div class="row scrollbar">
            <div class="col-md-12">
                <div class="page-header text-center" id="schedule">
                    <h1>برنامج المؤتمر</h1>
                </div>
                <div class="scroll"
                     style="display:inline-block;width:100%;">
                    <ul class="timeline timeline-horizontal">
                        <li class="timeline-item">
                            <div class="timeline-badge danger">من 9 صباحا</div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">حفل الإفتتاح</h4>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-item">
                            <div class="timeline-badge danger"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">اشغال المؤتمر</h4>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-item">
                            <div class="timeline-badge danger"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">الجلسة الأولى</h4>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-item">
                            <div class="timeline-badge danger"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">الجلسة الثانية</h4>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-item">
                            <div class="timeline-badge warning">على 15:30</div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">استراحة صلاة و غداء</h4>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-item">
                            <div class="timeline-badge info">على 18:30</div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">الجلسة الثالثة</h4>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-item">
                            <div class="timeline-badge info"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">الجلسة الرابعة</h4>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-item">
                            <div class="timeline-badge info"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">فعاليات مختلفة</h4>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-item">
                            <div class="timeline-badge primary">00:00</div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">إختتام</h4>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

{{-- start schudel--}}


    {{--Banner--}}

    <section  class="my-5 book-ads">
        <div class="image position-relative">
            <img src="{{asset('assets/imgs/banner.jpg')}}" alt="" style="height: 450px" class="w-100 object-fit-cover">
            <div class="container position-absolute start-50 top-50 translate-middle">
                    <h1 class="text-white display-1 fw-bolder mb-3"> المجلة <br>  الترويجية</h1>
                    <p class="text-white">
                        <span class="fw-bolder">عدد الصفحات :</span>
                        126 صفحة
                        <br>
                        <span class="fw-bolder">المؤلف :</span>
                        بأقلام اصدقائه و محبيه
                    </p>
               <div class="d-flex justify-content-start">
                <button class="btn btn-lg btn-light  text-primary">
                    <i class="fa-solid me-2 fa-bookmark"></i>
                    احجز نسختك
                </button>

               </div>

            </div>
        </div>
    </section>

    {{--Banner--}}


    <!-- Start Books -->

    <section class="books">

        <div class="container my-5 py-5">

            <h3 class="text-center display-5">النشرية</h3>

            <div class="row mt-5">

                <div class="col-sm-6 col-md-4 text-center" >
                    <div class="_df_thumb"
                         source="{{asset('assets/books/1.pdf')}}"
                         thumb="{{asset('assets/books/1.jpg')}}">
                        نشرية مؤتمرنا العدد رقم 01
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 text-center" >
                    <div class="_df_thumb"
                         source="{{asset('assets/books/2.pdf')}}"
                         thumb="{{asset('assets/books/2.jpg')}}">
                        نشرية مؤتمرنا العدد رقم 02
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 text-center" >
                    <div class="_df_thumb"
                         source="{{asset('assets/books/3.pdf')}}"
                         thumb="{{asset('assets/books/3.jpg')}}">
                        نشرية مؤتمرنا العدد رقم 03
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col  text-center" >
                    <div class="_df_thumb"
                         source="{{asset('assets/books/4.pdf')}}"
                         thumb="{{asset('assets/books/4.jpg')}}">
                        نشرية مؤتمرنا العدد رقم 04
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col  text-center" >
                    <div class="_df_thumb"
                         source="{{asset('assets/books/5.pdf')}}"
                         thumb="{{asset('assets/books/5.jpg')}}">
                        نشرية مؤتمرنا العدد رقم 05
                    </div>
                </div>

                <div class="col-sm-6 col-md-4  col  text-center" >
                    <div class="_df_thumb"
                         source="{{asset('assets/books/6.pdf')}}"
                         thumb="{{asset('assets/books/6.jpg')}}">
                        نشرية مؤتمرنا العدد رقم 06
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!-- End Books -->



    <!-- Start Participant -->

    <section class="bg-secondary-subtle py-5 my-5">

        <div class="container">

            <h3 class="display-5 text-center mb-5"> مهام المندوب في مؤتمرنا</h3>

                <div class="table-responsive mt-5">
                <table class="table fs-5 bg-white rounded-3">
                    <thead class="text-primary">
                        <tr class="fs-3">
                            <th>الحقوق</th>
                            <th>الواجبات </th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>المشاركة الفعّالة في جلسات المؤتمر</td>
                            <td>حمل وتعليق الشارة الخاصة بالمؤتمر(badge)</td>
                        </tr>

                        <tr>
                            <td>المناقشة وتقديم الرأي و المقترحات</td>
                            <td>استظهار الدعوة و البطاقة الوطنية عند الاقتضاء</td>
                        </tr>

                        <tr>
                            <td>التصويت على المشاريع</td>
                            <td>حضور الفعاليات وعدم المغادرة إلا بإذن مكتوب</td>
                        </tr>

                        <tr>
                            <td>الترشح</td>
                            <td>السلوك الإيجابي مع المنظمين وكل المندوبين</td>
                        </tr>

                        <tr>
                            <td>الانتخاب</td>
                            <td>المحافظة على المكان</td>
                        </tr>

                        <tr>
                            <td> خدمات ضرورية </td>
                            <td>الالتزام بقيم الحركة وادبياتها</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </section>

    <section class="py-4">
        <section class="container my-5">
            <h3 class="display-5 text-center">اللجنة الوطنية لتحضير المؤتمر الثاني</h3>

            <div class="mt-5">
                <table class="table table-responsive mx-auto">
                    <thead>
                        <tr class="text-primary text-center">
                            <th colspan="5">الحاج اسماعيل(رئيسا)</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>د.حسان بورنين</td>
                            <td>أ.مختار مناص</td>
                        </tr>

                        <tr>
                            <td>أ.علال بوشوك</td>
                            <td>أ.علي سعداوي</td>
                        </tr>

                        <tr>
                            <td>د.سعادة الشيخ</td>
                            <td>د.جميلة محمدي</td>
                        </tr>

                        <tr>
                            <td>د.أم انفال لطيفة</td>
                            <td>د.آسيا نحناح</td>
                        </tr>

                        <tr>
                            <td>د.عبد الحميد شبوطي</td>
                            <td>أ.عبد العزيز بن بردي</td>
                        </tr>

                        <tr>
                            <td>د.محمد تيجيني</td>
                            <td>أ.مهدي مفتاحي</td>
                        </tr>
                        <tr>
                            <td>أ.عبد الوهاب قلعي</td>
                            <td>أ.جمال الطاعني</td>
                        </tr>
                        <tr>
                            <td colspan="2">أ.سعيد نفيسي</td>

                        </tr>

                    </tbody>
                </table>
            </div>
        </section>
    </section>

    <!-- End Participant -->


    {{--Start Posts --}}
<section class="bg-secondary-subtle py-5 my-5">

    <div class="container">

        <div class="swiper">
            <!-- Additional required wrapper -->
            @foreach($catPosts as $category)
            <h3 class="display-5 text-center mb-5">{{$category->name}}</h3>
            <div class="swiper-wrapper">
                <!-- Slide 1 -->

                @foreach($category->posts as $post)

                <div class=" swiper-slide">
                    <a href="{{url('posts/' . $post -> slug)}}" class="stretched-link"></a>
                    <div class="card Catpost h-100 position-relative text-bg-dark border-0 shadow-sm overflow-hidden" style="max-height: 25rem">
                        <img src="{{asset('storage/' . $post -> thumbnail)}}"
                             class="card-img " alt="...">
                        <div class="card-img-overlay ">
                            <p class="card-text card-content">{!! Str::limit(strip_tags($post -> content) ,150)!!}</p>
                            <p class="card-title">{!! Str::limit(strip_tags($post -> name) ,50)!!}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endforeach
        </div>
    </div>
</section>
    {{--End Posts --}}


    <!-- Start Congress Place -->

        <div class="container my-5 py-5">
            <h3 class="text-center display-5">التعريف بالمركز</h3>

            <div class="row align-items-center mt-5 text-lg-start text-center">
                <div class="col-lg-4 order-1 offset-lg-1">
                    <img src="{{asset('assets/imgs/CiC.png')}}" alt="" class="img-fluid w-25 mb-3">
                    <p>مركز الجزائر الدولي للمؤتمرات - عبد اللطيف رحال هو مجمع متعدد الاستخدامات مخصّص لإستضافة أكبر الاجتماعات الدولية في الجزائر، يتربع على مساحة 28 هكتارا، ويتواجد في الضاحية الغربية لمدينة الجزائر على مسار الطريق الوطني رقم 11 ببلدية سطاوالي.</p>
                    <div class="chiffres">
                        <h3 class="text-success">قاعة المحاضرات</h3>

                            <div class="d-flex justify-content-between align-items-center mt-4">
                                <div>
                                    <i class="fa-duotone fa-users fa-2x"></i>
                                    <p class="mt-2">6000 شخص</p>
                                </div>
                                <div>
                                    <i class="fa-duotone fa-layer-group fa-2x"></i>
                                    <p class="mt-2">287.500 متر<sup>2</sup></p>
                                </div>
                            </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-lg-0 mb-5">
                    <div id="carouselExample" class="carousel slide w-100  rounded-3 border-5 border-success overflow-hidden">
                        <div class="carousel-inner" style="max-height: 250px">
                            <div class="carousel-item active">
                                <img src="{{asset('assets/imgs/1.jpg')}}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('assets/imgs/2.jpg')}}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('assets/imgs/3.jpg')}}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('assets/imgs/4.jpg')}}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('assets/imgs/5.jpg')}}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('assets/imgs/6.jpg')}}" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                          <span  aria-hidden="true">
                            <i class="fa-duotone fa-chevrons-right fa-3x"></i>
                          </span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                          <span  aria-hidden="true">
                            <i class="fa-duotone fa-chevrons-left fa-3x"></i>
                          </span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
=
    <!-- End Congress Place -->


    <!-- Start Contact Us -->

<section class="mt-5 py-3 bg-secondary-subtle">
    <div class="contact-infos mb-5 container ">
        <h3 class=" text-center display-5">تواصلوا معنا</h3>

            <div class="row pt-5 m-0">
                <div class="col-lg-5 order-lg-0 order-1 mt-lg-0 mt-5">
                    <div class="card shadow border-0">
                        <div class="card-body p-2 vstack p-md-4">

                            <div id="alert"></div>
                            <form action="" method="POST" id="messages">
                                <div>
                                    <label for="name" class="form-label">الإسم الكامل</label>
                                    <input type="text" name="name" id="name" class="form-control" value="">
                                    <span class="text-danger"></span>
                                </div>

                                <div>
                                    <label for="email" class="form-label">البريد الإلكتروني</label>
                                    <input type="email" name="email" id="email" class="form-control" value="">
                                    <span class="text-danger"></span>
                                </div>

                                <div>
                                    <label for="subject" class="form-label">الموضوع</label>
                                    <input type="text" name="subject" id="subject" class="form-control" value="">
                                    <span class="text-danger"></span>
                                </div>

                                <div>
                                    <label for="message" class="form-label">الرسالة</label>
                                    <textarea name="message" id="message" class="form-control"></textarea>
                                    <span class="text-danger"></span>
                                </div>

                                <button type="button" class="btn btn-primary mt-3 w-100" id="send">إرسال</button>
                            </form>
                        </div>
                    </div>

                </div>

                <div class=" col-lg-7 p-0 rounded-3 overflow-hidden">
                    <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12784.23117225001!2d2.8938568!3d36.769181!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x128fbb1f42a26a4b%3A0x9249d33297a3820a!2z2KfZhNmF2LHZg9iyINin2YTYr9mI2YTZiiDZhNmE2YXYpNiq2YXYsdin2Kog2LnYqNivINin2YTZhNi32YrZgSDYsdit2KfZhA!5e0!3m2!1sar!2sdz!4v1679792420128!5m2!1sar!2sdz"
                            height="420"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
        </div>
    </div>
</section>

    <!-- End Contact Us -->


@endsection

@section('scripts')

    <script src="https://unpkg.com/wavesurfer.js"></script>



    <script>

        const validateEmail = (email) => {
            return String(email)
                .toLowerCase()
                .match(
                    /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
                );
        };

        let btn = $('#send');
        btn.click(()=> {
            let alert = $('#alert')

            let name = $('#name');
            let subject = $('#subject');
            let email = $('#email');
            let message = $('#message');
            let error = 0;

            if(name.val().length == 0) {
                name.next('span').text('هذا الحقل مطلوب');
            }else {
                name.next('span').text('')
            }

            if(subject.val().length == 0) {
                subject.next('span').text('هذا الحقل مطلوب')
            }else {
                subject.next('span').text('')
            }

            if(email.val().length == 0) {
                email.next('span').text('هذا الحقل مطلوب')

            }else if(!validateEmail(email.val())) {
                email.next('span').text('البريد الإلكتروني غير صالح')
            }
            else {
                email.next('span').text('')
            }

            if(message.val().length == 0) {
                message.next('span').text('هذا الحقل مطلوب')
            }else {
                message.next('span').text('')
            }

                $.ajax('{{url('messages')}}', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{csrf_token()}}'
                    },
                    data: {
                        'name': name.val(),
                        'subject': subject.val(),
                        'email': email.val(),
                        'message': message.val()
                    },
                    success: ((response) => {
                        console.log(response.status)
                    }),
                    statusCode: {
                        422: () => {
                            alert.html(`<div class="alert alert-danger">حدث خطأ ما</div>`)
                        },
                        200: () => {
                            alert.html(`<div class="alert alert-success">تم إرسال الرسالة بنجاح</div>`)
                            name.val('');
                            email.val('');
                            subject.val('');
                            message.val('');
                        }
                    }
                })

            })


        let wavesurfer = WaveSurfer.create({
            container: '#waveform',
            waveColor: '#D9DCFF',
            progressColor: '#4353FF',
            cursorColor: '#4353FF',
            barWidth: 3,
            barheight: 1,
            autoCenter: true,
            barRadius: 3,
            cursorWidth: 1,
            height: 50,
            width: 150,
            barGap: 3,
        });


        wavesurfer.load('{{asset('assets/js/1.mp3')}}');
        wavesurfer.play();


    </script>

@endsection

