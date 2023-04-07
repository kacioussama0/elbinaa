@extends('layouts.header')


@section('addition')
    <!-- Start Landing Page -->
    <section class="landing-page w-100 h-100 position-absolute top-0 start-0 " id="home">
        <div class="position-absolute top-50 start-50 translate-middle z-2 text-center text-md-start">
            <h1 class="display-1 fw-bolder text-white ">المؤتمر الثاني</h1>
            <h3 class="text-white">بصمتنا في عالم جديد</h3>
            <div class="btn  text-bg-success mt-4 bg-gradient w-100"> ...قريبا</div>
            <div class="counter-down mt-5">
                <span  id="day" data-name="يوم"></span>
                <span  id="hour" data-name="ساعة"></span>
                <span  id="minute" data-name="دقيقة"></span>
                <span id="second" data-name="ثانية"></span>
            </div>

            <div class="d-flex justify-content-between align-items-center mt-5 text-white align-items-center text-center flex-column flex-md-row">
                    <span>
                        <i class="fa-duotone fa-calendar-days fa-2x text-white mb-2"></i>
                        <h6>
                            06 ماي 2023.
                            10 سا صباحا
                        </h6>

                    </span>

                <span>
                        <i class="fa-duotone fa-location-dot fa-2x text-white mb-2"></i>
                        <h6> المركز الدولي للمؤتمرات عبد اللطيف رحالي </h6>
                </span>
            </div>

        </div>


    </section>

    <!-- End Landing Page -->
@endsection


@section('content')

    <!--Start Video -->

    <section>

        <div class="container my-5">

            <h3>الفيديو الترويجي</h3>

            <iframe  height="700" class="mt-5 w-100 rounded-5" src="https://www.youtube.com/embed/MvR7fc4YunA?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>

    </section>

    <!--End Video-->

@if(count($guests))
    {{-- Start Guests --}}

    <section>

        <div class="container" id="guests">

            <h3 class="text-center mb-5">ضيوف الشرف</h3>

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

    {{-- End Guests --}}

@endif

    <!-- Start About Congress -->

    <section class="about position-relative overflow-hidden" id="about-congress">
        <div class="container py-4 my-5" id="about-congress">

            <h2>عن المؤتمر</h2>

            <div class="row mt-5 g-4">

                <div class="col-12 col-md-6 col-lg-4 ">
                    <div class="card text-center rounded-5  border-1  shadow ">
                        <div class="card-body p-5">
                            <i class="fa-duotone  fa-eye fa-4x text-center text-primary mb-3"></i>
                            <h5 class="card-title fw-bolder mb-3">الرؤية</h5>
                            <p class="card-text">أن يكون مؤتمرنا الثاني منبراً للأنطلاقة نحو تثبيت المكتسبات السياسية،و المشاركة الفعالة.</p>
                        </div>
                    </div>

                </div>


                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card text-center rounded-5  border-1  shadow">
                        <div class="card-body p-5">
                            <i class="fa-duotone fa-envelope fa-4x text-center text-primary mb-3"></i>
                            <h5 class="card-title fw-bolder mb-3">الرسالة</h5>
                            <p class="card-text">إبراز أهمية العمل السياسي و النضال الحزبي،وأثرهما في تفعيل التنافسية الشريفة وسبل التنمية.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-center rounded-5  border-1 shadow">
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

            <h3>وثائق المؤتمر</h3>

            <div class="row mt-5 align-items-center">
                <div class="order-1 order-lg-0 col-lg-6">
                    <div class="row">


                        <div class="col-md-6 mb-3">
                            <div class="card text-center rounded-5  border-1 shadow">
                                <div class="card-body">
                                    <i class="fa-duotone fa-gavel fa-3x text-center text-success  mb-3"></i>
                                    <h5 class="card-title fw-bolder mb-3 ">القانون الاساسي</h5>
                                    <a href="#" class="btn btn-primary px-5">تحميل</a>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6 mb-3">
                            <div class="card text-center rounded-5  border-1 shadow">
                                <div class="card-body">
                                    <i class="fa-duotone fa-shield-check fa-3x text-center text-success  mb-3"></i>
                                    <h5 class="card-title fw-bolder mb-3 ">البروتوكول </h5>
                                    <a href="#" class="btn btn-primary px-5">تحميل</a>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-12 mb-3">
                            <div class="card text-center rounded-5  border-1 shadow">
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

        </div>
        </div>

    </section>

    <!-- End Documents -->


    <!-- Start Books -->

    <section class="books">

        <div class="container my-5">

            <h3>النشرية</h3>

            <div class="row">

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

            <h3>مهام المندوب</h3>

            <div class="table-responsive mt-5 rounded-3">

                <table class="table rounded-3 table-bordered table-striped table-hover">
                    <thead class="table-dark">
                    <tr class="display-6 fw-bolder">
                        <th>الحقوق</th>
                        <th>الواجبات </th>
                    </tr>
                    </thead>

                    <tbody>

                    <tr>
                        <td>المشاركة الفعّالة في جلسات المؤتمر.</td>
                        <td>حمل وتعليق الشارة الخاصة بالمؤتمر(پاچ).</td>
                    </tr>

                    <tr>
                        <td>المناقشة وتقديم الرأي و المقترحات</td>
                        <td>استظهار البطاقة الوطنية عمد الاقتضاء.</td>
                    </tr>

                    <tr>
                        <td>التصويت على المشاريع</td>
                        <td>حضور الفعاليات  وعدم المغادرة إلا بإذن مكتوب.</td>
                    </tr>

                    <tr>
                        <td>الترشح.</td>
                        <td>السلوك الإيجابي مع المنظمين وكل المندوبين.</td>
                    </tr>

                    <tr>
                        <td>الانتخاب</td>
                        <td >المحافظة على المكان.</td>

                    </tr>


                    <tr>
                        <td>/</td>
                        <td>الالتزام بقيم الحركة وادبياتها</td>
                    </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </section>


    <!-- End Participant -->




    <!-- Start Congress Place -->


    <section>

        <div class="container my-5">

            <h3>التعريف بالمركز</h3>

            <div class="row align-items-center mt-5 text-lg-start text-center">
                <div class="col-lg-4 order-1 offset-lg-1">
                    <img src="{{asset('assets/imgs/CiC.png')}}" alt="" class="img-fluid w-25 mb-3">
                    <p>مركز الجزائر الدولي للمؤتمرات - عبد اللطيف رحال هو مجمع متعدد الاستخدامات مخصّص لإستضافة أكبر الاجتماعات الدولية في الجزائر، يتربع على مساحة 28 هكتارا، ويتواجد في الضاحية الغربية لمدينة الجزائر على مسار الطريق الوطني رقم 11 ببلدية سطاوالي.</p>
                    <div class="chiffres">
                        <h4 class="text-success">قاعة المحاضرات</h3>

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
                    <div id="carouselExample" class="carousel slide w-100  rounded-5 border-5 border-success overflow-hidden">
                        <div class="carousel-inner  rounded-5">
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


    <!-- Start Contact Us -->
    <section class="mt-5 py-3">
        <div class="contact-infos mb-5 container ">
            <h3 class=" text-center">تواصلو معنا</h3>

            <div class="row  pt-5 m-0">

                <div class="col-lg-5 order-lg-0 order-1 mt-lg-0 mt-5">
                    <div class="card shadow border-0">
                        <div class="card-body p-2  p-md-4">
                            <p>
                                <i class="fa-duotone fa-map me-2 fa-1x"></i>
                                حركة البناء الوطني رقم 521 درارية، الجزائر
                            </p>
                            <p>
                                <i class="fa-duotone fa-phone me-2 fa-1x"></i>

                                00213540720803
                            </p>
                            <p>
                                <i class="fa-duotone fa-at me-2 fa-1x"></i>

                                elbinaacongress@gmail.com
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

                <div class=" col-lg-7 p-0 rounded-5 overflow-hidden">
                    <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12784.23117225001!2d2.8938568!3d36.769181!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x128fbb1f42a26a4b%3A0x9249d33297a3820a!2z2KfZhNmF2LHZg9iyINin2YTYr9mI2YTZiiDZhNmE2YXYpNiq2YXYsdin2Kog2LnYqNivINin2YTZhNi32YrZgSDYsdit2KfZhA!5e0!3m2!1sar!2sdz!4v1679792420128!5m2!1sar!2sdz"  height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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

