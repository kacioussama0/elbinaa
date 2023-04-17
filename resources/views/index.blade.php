@extends('layouts.header')


@section('addition')
    <!-- Start Landing Page -->
    <section class="landing-page w-100 h-100 position-absolute top-0 start-0 " id="home">
        <div class="position-absolute top-50 start-50 translate-middle z-2 text-center text-md-start">
            <h1 class="display-1 fw-bolder text-white ">المؤتمر الثاني</h1>
            <h4 class="text-white">بصمتنا في عالم جديد</h4>
            <div class="btn btn-outline-light mt-4  w-100"> قريبا</div>
            <div class="counter-down mt-5 flex-row-reverse ">
                    <span  id="day" data-name="يوم"></span>
                    <span  id="hour" data-name="ساعة"></span>
                    <span  id="minute" data-name="دقيقة"></span>
                    <span id="second" data-name="ثانية"></span>
            </div>

            <div class="d-flex justify-content-between align-items-center mt-5 text-white align-items-center text-center flex-column flex-md-row">
                    <div class="d-inline ">
                        <i class="fa-duotone fa-calendar-days fa-2x text-white mb-2"></i>
                        <h6 class="lh-lg">
                             06 ماي 2023.
                            <br> 10 سا صباحا
                        </h6>

                    </div>

                <div class="d-inline ">
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

    <section class="container-fluid bg-secondary-subtle">
        <div class="container py-5">
            <h3 class="display-5 text-center">الفيديو الترويجي</h3>
            <iframe
                     class="binaa-vid mt-5 w-100 rounded-3"
                     src="https://www.youtube.com/embed/MvR7fc4YunA?controls=0"
                     title="YouTube video player"
                     allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                     allowfullscreen>
            </iframe>
        </div>
    </section>

    <!--End Video-->

{{--
@if(count($guests))
    --}}
{{-- Start Guests --}}{{--


    <section>
        <div class="container" id="guests">
            <h3 class="text-center display-5 mb-5">ضيوف الشرف</h3>

            <div id="carouselExampleIndicators" class="carousel slide w-50 mx-auto rounded-3 overflow-hidden">
                <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                @foreach($guests->skip(1) as $key => $image)
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$key}}" aria-label="Slide {{$key + 1}}"></button>
                    @endforeach
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('storage/'.$guests[0]->path)}}" class="d-block w-100" alt="...">
                    </div>
                    @foreach($guests->skip(1) as $image)

                        <div class="carousel-item">
                            <img src="{{asset('storage/'.$image->path)}}" class="d-block w-100" alt="...">
                        </div>

                    @endforeach

                </div>


                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                          <span  aria-hidden="true">
                            <i class="fa-duotone fa-chevrons-right fa-3x"></i>
                          </span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                          <span  aria-hidden="true">
                            <i class="fa-duotone fa-chevrons-left fa-3x"></i>
                          </span>
                    <span class="visually-hidden">Next</span>
                </button>


            </div>

        </div>

    </section>

    --}}
{{-- End Guests --}}{{--


@endif
--}}



    <!-- Swiper -->
<section class="container my-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <h1 class="guest">ضيوف الشرف</h1>
                <hr>
                <p>
                    تتشرف الحركة في مؤتمرها الثاني
                    باستقبال"ضيوف الجزائر" <br> من مختلف القارات؛
                    اهلا و سهلا و مرحبا
                </p>
            </div>

            <div class="col-12 col-md-6">
                <div class="swiper mySwiper absolutes">
                    <div class="swiper-wrapper">
                    <div class="card swiper-slide overflow-hidden">
                        <a
                           href="{{asset('assets/imgs/per6.jpeg')}}"
                           data-fancybox
                           data-caption=" حيقونة عباس">
                        <img src="{{asset('assets/imgs/per6.jpeg')}}" class="card-img-top" alt="...">
                        </a>
                    </div>
                    <div class="card swiper-slide overflow-hidden">
                        <a
                            href="{{asset('assets/imgs/per6.jpeg')}}"
                           data-fancybox
                           data-caption="Single image">
                            <img src="{{asset('assets/imgs/per6.jpeg')}}" class="card-img-top" alt="...">
                        </a>
                    </div>
                    <div class="card swiper-slide overflow-hidden">
                        <a
                            href="{{asset('assets/imgs/per6.jpeg')}}"
                           data-fancybox
                           data-caption="Single image">
                            <img src="{{asset('assets/imgs/per6.jpeg')}}" class="card-img-top" alt="...">
                        </a>
                    </div>
                    <div class="card swiper-slide overflow-hidden">
                        <a href="{{asset('assets/imgs/per6.jpeg')}}" data-fancybox data-caption="Single image">
                            <img src="{{asset('assets/imgs/per6.jpeg')}}" class="card-img-top" alt="...">
                        </a>
                    </div>
                    <div class="card swiper-slide overflow-hidden">
                        <a href="{{asset('assets/imgs/per6.jpeg')}}" data-fancybox data-caption="Single image">
                            <img src="{{asset('assets/imgs/per6.jpeg')}}" class="card-img-top" alt="...">
                        </a>
                    </div>
                    <div class="card swiper-slide overflow-hidden">
                        <a href="{{asset('assets/imgs/per6.jpeg')}}" data-fancybox data-caption="Single image">
                            <img src="{{asset('assets/imgs/per6.jpeg')}}" class="card-img-top" alt="...">
                        </a>
                    </div>
                    <div class="card swiper-slide overflow-hidden">
                        <a href="{{asset('assets/imgs/per6.jpeg')}}" data-fancybox data-caption="Single image">
                            <img src="{{asset('assets/imgs/per6.jpeg')}}" class="card-img-top" alt="...">
                        </a>
                    </div>
                    <div class="card swiper-slide overflow-hidden">
                        <a href="{{asset('assets/imgs/per6.jpeg')}}" data-fancybox data-caption="Single image">
                            <img src="{{asset('assets/imgs/per6.jpeg')}}" class="card-img-top" alt="...">
                        </a>
                    </div>
                    <div class="card swiper-slide overflow-hidden">
                        <a href="{{asset('assets/imgs/per6.jpeg')}}" data-fancybox data-caption="Single image">
                            <img src="{{asset('assets/imgs/per6.jpeg')}}" class="card-img-top" alt="...">
                        </a>
                    </div>
                </div>
                    <div class="swiper-pagination"></div>
                 </div>
            </div>
        </div>
</section>
{{-- end swiper--}}


    <!-- Start About Congress -->

    <section class="about position-relative my-5 bg-secondary-subtle" id="about-congress">
        <div class="container py-4" id="about-congress">

            <h3 class="display-5 text-center">عن المؤتمر</h3>

            <div class="row mt-5 g-4">

                <div class="col-12 col-md-6 col-lg-4 ">
                    <div class="card text-center rounded-3  ">
                        <div class="card-body p-5">
                            <i class="fa-duotone  fa-eye fa-4x text-center text-primary mb-3"></i>
                            <h5 class="card-title fw-bolder mb-3">الرؤية</h5>
                            <p class="card-text">أن يكون مؤتمرنا الثاني منبراً للأنطلاقة نحو تثبيت المكتسبات السياسية، و المشاركة الفعالة.</p>
                        </div>
                    </div>

                </div>


                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card text-center rounded-3 ">
                        <div class="card-body p-5">
                            <i class="fa-duotone fa-envelope fa-4x text-center text-primary mb-3"></i>
                            <h5 class="card-title fw-bolder mb-3">الرسالة</h5>
                            <p class="card-text">إبراز أهمية العمل السياسي و النضال الحزبي، وأثرهما في تفعيل التنافسية الشريفة وسبل التنمية.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-center rounded-3 ">
                        <div class="card-body p-5">
                            <i class="fa-duotone fa-question fa-4x text-center text-primary mb-3"></i>
                            <h5 class="card-title fw-bolder mb-3 ">من نحن</h5>
                            <p class="card-text">
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

    <section class="documents" id="documents">

        <div class="container py-4 my-5">

            <h3 class="display-5 text-center">وثائق المؤتمر</h3>

            <div class="row mt-5 align-items-center">
                <div class="order-1 order-lg-0 col-lg-6">
                    <div class="row">


                        <div class="col-md-6 mb-3">
                            <div class="card text-center border-0 rounded-3 shadow">
                                <div class="card-body">
                                    <i class="fa-duotone fa-gavel fa-3x text-center text-success  mb-3"></i>
                                    <h5 class="card-title fw-bolder mb-3 ">القانون الاساسي</h5>
                                    <a href="#" class="btn btn-primary px-5">تحميل</a>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6 mb-3">
                            <div class="card text-center border-0 rounded-3 shadow">
                                <div class="card-body">
                                    <i class="fa-duotone fa-shield-check fa-3x text-center text-success  mb-3"></i>
                                    <h5 class="card-title fw-bolder mb-3 ">البروتوكول </h5>
                                    <a href="#" class="btn btn-primary px-5">تحميل</a>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-12 mb-3">
                            <div class="card text-center border-0 rounded-3 shadow">
                                <div class="card-body">
                                    <i class="fa-duotone fa-scale-balanced fa-3x text-center text-success  mb-3"></i>
                                    <h5 class="card-title fw-bolder mb-3 ">السياسة العامة</h5>
                                    <a href="#" class="btn btn-primary px-5">تحميل</a>
                                </div>
                            </div>
                        </div>

                    </div>



                </div>

                <div class="col-lg-5 offset-lg-1 mb-lg-0 mb-5">
                    <img src="{{asset('assets/imgs/basmaa.svg')}}" alt="" class="img-fluid">
                </div>
        </div>
    </div>
</section>



    <!-- End Documents -->


    <!-- Start Books -->

    <section class="books bg-secondary-subtle">

        <div class="container my-5 py-4">

            <h3 class="text-center display-5">النشرية</h3>

            <div class="row bord">

                <div class="col-sm-6 col-md-4 col  text-center" >
                    <div class="_df_thumb" source="{{asset('assets/books/1.pdf')}}"  thumb="{{asset('assets/books/1.jpg')}}">
                        نشرية مؤتمرنا العدد رقم 01
                    </div>
                </div>

                <div class="col-sm-6 col-md-4  col  text-center" >
                    <div class="_df_thumb" source="{{asset('assets/books/2.pdf')}}"  thumb="{{asset('assets/books/2.jpg')}}">
                        نشرية مؤتمرنا العدد رقم 02
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col  text-center" >
                    <div class="_df_thumb" source="{{asset('assets/books/3.pdf')}}"  thumb="{{asset('assets/books/3.jpg')}}">
                        نشرية مؤتمرنا العدد رقم 03
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col  text-center" >
                    <div class="_df_thumb" source="{{asset('assets/books/4.pdf')}}"  thumb="{{asset('assets/books/4.jpg')}}">
                        نشرية مؤتمرنا العدد رقم 04
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col  text-center" >
                    <div class="_df_thumb" source="{{asset('assets/books/5.pdf')}}"  thumb="{{asset('assets/books/5.jpg')}}">
                        نشرية مؤتمرنا العدد رقم 05
                    </div>
                </div>

                <div class="col-sm-6 col-md-4  col  text-center" >
                    <div class="_df_thumb" source="{{asset('assets/books/6.pdf')}}"  thumb="{{asset('assets/books/6.jpg')}}">
                        نشرية مؤتمرنا العدد رقم 06
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!-- End Books -->



    <!-- Start Participant -->


    <section>

        <div class="container my-5">
            <h3 class="display-5 text-center">مهام المندوب</h3>

            <div class="mt-5">
                <table class="table table-responsive mx-auto">
                    <thead>
                        <tr class="text-primary">
                            <th>الحقوق</th>
                            <th>الواجبات </th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>المشاركة الفعّالة في جلسات المؤتمر</td>
                            <td>حمل وتعليق الشارة الخاصة بالمؤتمر(پاچ)</td>
                        </tr>

                        <tr>
                            <td>المناقشة وتقديم الرأي و المقترحات</td>
                            <td>استظهار البطاقة الوطنية عمد الاقتضاء</td>
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
                            <td> واجب </td>
                            <td>الالتزام بقيم الحركة وادبياتها</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </section>






    <section class="bg-secondary-subtle py-4">
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
                            <td>حسان بورنين</td>
                            <td>مختار مناص</td>
                        </tr>

                        <tr>
                            <td>علال بوشوك</td>
                            <td>علي سعداوي</td>
                        </tr>

                        <tr>
                            <td>سعادة الشيخ</td>
                            <td>جميلة محمدي</td>
                        </tr>

                        <tr>
                            <td>أم انفال لطيفة</td>
                            <td>آسيا نحناح</td>
                        </tr>

                        <tr>
                            <td>عبد الحميد شبوطي</td>
                            <td>عبد العزيز بن بردي</td>
                        </tr>

                        <tr>
                            <td>محمد تيجيني</td>
                            <td>مهدي مفتاحي</td>
                        </tr>
                        <tr>
                            <td>عبد الوهاب قلعي</td>
                            <td>جمال الطاعني</td>
                        </tr>
                        <tr>
                            <td>سعيد نفيسي</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </section>
    </section>


    <!-- End Participant -->




    <!-- Start Congress Place -->

    <section>

        <div class="container my-5">

            <h3 class="text-center display-5">التعريف بالمركز</h3>

            <div class="row align-items-center mt-5 text-lg-start text-center">
                <div class="col-lg-4 order-1 offset-lg-1">
                    <img src="{{asset('assets/imgs/CiC.png')}}" alt="" class="img-fluid w-25 mb-3">
                    <p>مركز الجزائر الدولي للمؤتمرات - عبد اللطيف رحال هو مجمع متعدد الاستخدامات مخصّص لإستضافة أكبر الاجتماعات الدولية في الجزائر، يتربع على مساحة 28 هكتارا، ويتواجد في الضاحية الغربية لمدينة الجزائر على مسار الطريق الوطني رقم 11 ببلدية سطاوالي.</p>
                    <div class="chiffres">
                        <h3 class="text-success">قاعة المحاضرات</h3>

                            <div class="d-flex justify-content-between align-items-center mt-4">
                            <span>
                                <i class="fa-duotone fa-users fa-2x"></i>
                                <p class="mt-2">6000 شخص</p>
                            </span>

                                <span>
                                <i class="fa-duotone fa-layer-group fa-2x"></i>
                                <p class="mt-2">287.500 متر<sup>2</sup></p>
                            </span>

                            </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-lg-0 mb-5">
                    <div id="carouselExample" class="carousel slide w-100  rounded-3 border-5 border-success overflow-hidden">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{asset('assets/imgs/1.jpg')}}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('assets/imgs/2.jpg')}}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('assets/imgs/3.jpg')}}" class="d-block w-100" alt="...">
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
    </section>

    <!-- End Congress Place -->

    {{-- schedule start--}}
    <section class="bg-secondary-subtle py-3">
    <section class="container ">
        <h3 class="text-center display-5 mb-3 "> برنامج المؤتمر</h3>

        <div class="scheduleContainer mt-4 overflow-auto">

            <!-- TIMES -->
            <div class="time start-800"><div class="marker quran"></div>10:00</div>
            <div class="time start-830"><div class="marker quran"></div>10:30</div>
            <div class="time start-900"><div class="marker speaking"></div>11:00</div>
            <div class="time start-930"><div class="marker video"></div>11:30</div>
            <div class="time start-1000"><div class="marker video"></div>12:00</div>
            <div class="time start-1030"><div class="marker speaking"></div>12:30</div>
            <div class="time start-1100"><div class="marker speaking"></div>13:00</div>
            <div class="time start-1130"><div class="marker speaking"></div>13:30</div>
            <div class="time start-1200"><div class="marker speaking"></div>14:00</div>
            <div class="time start-1230"><div class="marker work"></div>14:30</div>
            <div class="time start-1300"><div class="marker speaking"></div>15:00</div>
            <div class="time start-1330"><div class="marker speaking"></div>15:30</div>
            <div class="time start-1400"><div class="marker eating-prayers"></div>16:00</div>
            <div class="time start-1430"><div class="marker eating-prayers"></div>16:30</div>
            <div class="time start-1500"><div class="marker eating-prayers"></div>17:00</div>
            <div class="time start-1530"><div class="marker eating-prayers"></div>17:30</div>
            <div class="time start-1600"><div class="marker eating-prayers"></div>18:00</div>
            <div class="time start-1630"><div class="marker work"></div>18:30</div>
            <div class="time start-1700"><div class="marker work"></div>19:00</div>
            <div class="time start-1730"><div class="marker speaking"></div>19:30</div>
            <div class="time start-1800"><div class="marker speaking"></div>20:00</div>
            <div class="time start-1830"><div class="marker speaking"></div>20:30</div>
            <div class="time start-1900"><div class="marker speaking"></div>21:00</div>
            <div class="time start-1930"><div class="marker vote"></div>22:30</div>
            <div class="time start-2000"><div class="marker vote"></div>23:00</div>
            <div class="time start-2030"><div class="marker vote"></div>23:30</div>
            <div class="time start-2100"><div class="marker"></div>00:00</div>
            <div class="time start-2130 invisible">21:30</div>

            <!-- EVENTS -->
            <div class="event b-quran lh-lg start-800 end-830 length-4"> الافتتاح بالقران الكريم <br> و النشيد الوطني <br> انشودة المؤتمر </div>
            <div class="event b-speaking start-900 length-4">خطاب رئيس اللجنة الوطنية(الحاج إسماعيل)</div>
            <div class="event b-video start-930 end-1000 length-4">فيديو1 | الذكرى الاولى<span>/</span></div>
            <div class="event b-speaking start-1030 end-1100 length-1">كلمات الضيوف(من الداخل والخارج) <span>/</span></div>
            <div class="event b-speaking start-1030 end-1100 length-3">فيديو2 | الانجازات<span>/</span></div>

            <div class="event b-speaking start-1130 end-1200 length-4">خطاب رئيس الحركة(ع.بن قرينة)<span>/</span></div>
            <div class="event b-work start-1230 end-1300 length-1">جدول الاعمال <span>/</span></div>
            <div class="event b-work start-1230 end-1300 length-1">لنظام الداخلي <span>/</span></div>
            <div class="event b-speaking start-1230 end-1300 length-1">مكتب المؤتمر<span>/</span></div>

            <div class="event b-speaking start-1230 end-1300 length-1"> تقديم تقرير عن الحركة من طرف رئيس الحركة (الادبي والمالي) والمصادقة عليه
                <span>/</span></div>
            <div class="event b-speaking start-1330 end-1330 length-4"> عرض ومناقشة القانون الاساسي، والمصادقة عليه

                <span>/</span></div>

            <div class="event b-eating-prayers text-dark start-1400 end-1600 length-4">رفع الجَلسة (الغداء و الصلوات)<span>/</span></div>

            <div class="event b-work start-1630 end-2030 length-1">إستئناف الاشغال <span>/</span></div>
            <div class="event b-speaking start-1630 end-2030 length-2">عرض ومناقشة السياسة العامة، والمصادقة عليها
                <span>/</span></div>
            <div class="event b-vote start-1630 end-2030 length-1">الانتخابات <span>/</span></div>

            <div class="event text-dark border start-2100 end-2100 length-4">الاختتام <span>/</span></div>

        </div>

    </section>
    </section>

    {{-- schedule start--}}


    <!-- Start Contact Us -->
<section class="mt-5 py-3">
    <div class="contact-infos mb-5 container ">
        <h3 class=" text-center display-5">تواصلو معنا</h3>

            <div class="row pt-5 m-0">
                <div class="col-lg-5 order-lg-0 order-1 mt-lg-0 mt-5">
                    <div class="card shadow border-0">
                        <div class="card-body p-2 vstack p-md-4">
                            <div class="d-flex mb-3 align-items-center">
                                <i class="fa-duotone fa-map me-2 fa-1x"></i>
                                <span>
                                <a href="https://rb.gy/z7kb4"
                                   target="_blank"
                                   class="text-decoration-none">
                                    حركة البناء الوطني رقم 521 درارية، الجزائر
                                </a>
                                </span>
                            </div>
                            <p>
                                <i class="fa-duotone fa-phone me-2 fa-1x"></i>
                                <a href="tel:+00213540720803"
                                   class="text-decoration-none">
                                    00213540720803
                                </a>
                            </p>
                            <p>
                                <i class="fa-duotone fa-at me-2 fa-1x"></i>
                                <a href="mailto:elbinaacongress@gmail.com"
                                   class="text-decoration-none" >
                                    elbinaacongress@gmail.com
                                </a>
                            </p>

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
                            height="500"
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





    </script>

@endsection

