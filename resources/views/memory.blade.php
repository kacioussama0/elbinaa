@extends('layouts.header')


@section('styles')
    <style>
        header {
            min-height: 70vh !important;
        }
    </style>
@endsection



@section('addition')

    <h2 class="memory-title text-center display-1 text-white position-absolute start-50 top-50 translate-middle z-3">ملخص السيرة الذاتية للمرحوم الشيخ مصطفى بلمهدي</h2>
    <img src="{{asset('assets/imgs/memory-cover.jpg')}}"
         class="object-fit-cover position-absolute start-50 top-50 translate-middle z-2 w-100 h-100 z-1"
         alt="">

@endsection

@section('content')
    <section style="background-color: #F0F2F5;">
        <div class="container py-5">
            <div class="main-timeline-2 mt-5">
                <div class="timeline-2 ">
                    <div class="card border-0 shadow">
                        <img src="{{asset('assets/imgs/per1.webp')}}" class="card-img-top"
                             alt="Responsive image">
                        <div class="card-body p-3 lh-lg">
                            <h4 class=" mb-2"> الشيخ المجاهد مصطفى بلمهدي مواليد</h4>
                            <p class="text-lighter mb-3"><i class="fa-duotone fa-clock " aria-hidden="true"></i> 1943</p>
                            <p class="mb-0">لمرحوم مصطفى _ هو ثالث ثلاثة: <span class="text-primary">نحناح</span> ؛ <span class="text-primary">بوسلماني</span> رحمهم الله جميعا_ من مواليد 1943 بالبليدة؛ أكمل دراسته الابتدائية بمدرسة الإرشاد التابعة للحركة الوطنية.</p>
                            <ul>
                                <li>شارك مع إخوانه المجاهدين ببلدته (ولاية البليدة تبعد عن الجزائر العاصمة بنحو 50 كلم) في ثورة التحرير المجيدة ضد الاستعمار الفرنسي 1954 - 1962.</li>
                                <li>بعد الاستقلال التحق بسلك التعليم الابتدائي، ثم كمدير مدرسة ابتدائية.</li>
                                <li>ويعد الشيخ أحد القيادات التاريخية للصحوة الإسلامية والعمل الإسلامي في الجزائر</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="timeline-2 right-2">
                    <div class="card border-0 shadow">
                        <img src="{{asset('assets/imgs/per2.webp')}}" class="card-img-top"
                             alt="Responsive image">
                        <div class="card-body p-3 lh-lg ">
                            <h4 class="fw-bold mb-2">النضال والعمل السياسي العلني</h4>
                            <p class="text-muted mb-4"><i class="fa-duotone fa-clock" aria-hidden="true"></i> 1990</p>
                            <div class="mb-0">
                                <ul>
                                    <li>عارض، رفقة عدد من قيادات التيار الإسلامي منهم: الشهيد الذبيح محمد بوسليماني (من ضحايا الارهاب) والشيخ محفوظ نحناح و الاخوة: الطاهر زيشي، رشيد كسور، علي بومعيزي، محمد حزي، محمد لقواسي، محمد بن ابراهيم، محمد قراط، عبد الكريم رايس وغيرهم... الميثاق الوطني (1976) والتوجهات الاشتراكية للرئيس الجزائري الراحل المرحوم هواري بومدين، ما دفعه إلى اعتقالهم وزجهم في السجون</li>
                                    <li>بعد خروجه من السجن(سنة 1979) حاول أن يعود إلى التعليم فمُنع من ذلك، فلجأ إلى ممارسة التجارة.</li>
                                    <li>وبعد التعددية السياسية، شارك بلمهدي رفقة أصحابه في النضال العلني ، في تأسيس "جمعية الإرشاد والإصلاح" كإطار لتنظيم العمل التربوي و الدعوي ، ثم  تأسيس حزب سياسي باسم "حركة المجتمع الإسلامي عام 1990 تحت رئاسة الشيخ محفوظ نحناح رحمه الله.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="timeline-2 ">
                    <div class="card border-0 shadow">
                        <img src="{{asset('assets/imgs/per3.webp')}}" class="card-img-top"
                             alt="Responsive image">
                        <div class="card-body p-4 lh-lg">
                            <h4 class="fw-bold mb-2">الإنخراط في المؤسسات الرسمية للدولة</h4>
                            <p class="text-muted mb-3"><i class="fa-duotone fa-clock" aria-hidden="true"></i> 1998 و 2001</p>
                            <p class="mb-0">    عين لاحقاً المرحوم بلمهدي عضواً في مجلس الأمة(غرفة الشيوخ) "سيناتور" من طرف رئيس الجمهورية، ما بين 1998 و 2001.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="timeline-2 right-2">
                    <div class="card border-0 shadow">
                        <img src="{{asset('assets/imgs/per4.webp')}}" class="card-img-top"
                             alt="Responsive image">
                        <div class="card-body p-4">
                            <h4 class="fw-bold mb-2">تأسيس حركة البناء الوطني</h4>
                            <p class="text-muted mb-3"><i class="fa-duotone fa-clock me-2" aria-hidden="true"></i>2013</p>
                            <p class="mb-0 lh-lg">   وفي عام 2008، وقعت خلافات داخل الحركة اضطرته الى الانسحاب وتأسيس "حركة البناء الوطني" مع ثلة من القيادات في عام 2013.</p>
                        </div>
                    </div>
                </div>
                <div class="timeline-2 ">
                    <div class="card border-0 shadow overflow-hidden">
                        <iframe
                            height="250"
                            src="https://www.youtube.com/embed/8izZrOn9uA4"
                            title="ذكرى وفات مصطفى بلمهدي"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen>
                        </iframe>
                        <div class="card-body p-4 lh-lg">
                            <h4 class="fw-bold mb-2">ذكرى وفاته</h4>
                            <p class="text-muted mb-3"><i class="fa-duotone fa-clock me-2" aria-hidden="true"></i>07 ماي 2022</p>
                            <p class="mb-0"> توفي رحمهة الله السنة الماضية (2022)، وشاء القدر أن يتوفى في يوم مولده (السابع من مايو/أيار)".</p>
                        </div>
                    </div>
                </div>
                <div class="timeline-2 right-2">
                    <div class="card border-0 shadow overflow-hidden">
                        <div class="card-body p-4 lh-lg">
                            <h4 class="fw-bold mb-2">من الشخصيات المهمة في جنازته</h4>
                            <p class="text-muted"><i class="fa-duotone fa-hands-praying me-2" aria-hidden="true"></i>رحمة الله عليه</p>
                            <ul style="padding: 1rem !important">
                                <li>الامين العام لحزب جبهة التحرير الوطني.
                                    الاستاذ ابو الفضل بعجي</li>
                                <li>الشيخ عبد الله جاب الله (رئيس حركة التنمية و العدالة)</li>
                                <li>الدكتور عبد العالي حساني (رئيس حركة مجتمع السلم -حاليا)</li>
                                <li>الدكتور عبد الرزاق مقري (رئيس حركة مجتمع السلم -سابقا)</li>

                                <li>الدكتور عبد العزيز بلعيد (رئيس جبهة المستقبل)</li>
                                <li>الأستاذ جمال بن عبد السلام</li>
                                <li>الشيح محمد مكركب</li>
                                <li>الاستاذ سمير العربي</li>
                                <li>النائب لخضر بن خلاف</li>
                                <li>الدكتور عبد القادر سماري</li>
                                <li>الأستاذ محمد دويبي</li>
                                <li>الحاج طاهر زيشي</li>
                                <li>الحاج عبد الحميد هيشور</li>
                                <li>الاستاذ عبد الحميد مداود و الاستاذ محمد جمعة</li>
                                <li>معالي الوزير الهاشمي جعبوب</li>
                                <li>المجاهد عبد الهادي السايح</li>
                                <li> الصحفي القدير نور الدين ختال</li>
                                <li>الشيخ جلول حجيمي (رئيس نقابة الائمة)</li>
                                <li>الشيخ الدكتور احمد بوساق</li>
                                <li>مع فضيلة الاستاذ نصر الدين سالم شريف</li>
                                <li>فضيلة الشيخ البروفيسور عبد الله جاب الله</li>
                                <li>الاستاذ الدكتور احمد بوساق</li>
                                <li>الشيخ الحاج الطيب عزيز</li>
                                <li>نجل الشيخ محفوظ نحناح الاستاذ نور الدين</li>
                            </ul>
{{--
                            <h6 class="text-center text-primary my-1">رؤساء الاحزاب الكبرى في الجزائر:</h6>
--}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
