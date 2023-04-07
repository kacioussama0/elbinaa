@extends('layouts.header')


@section('styles')
    <style>
        header {
            height: 90px !important;
        }
    </style>
@endsection


@section('content')
    <section style="background-color: #F0F2F5;">
        <div class="container py-5">
            <h2 class="display-6 text-center">ملخص السيرة الذاتية للمرحوم الشيخ مصطفى بلمهدي</h2>
            <div class="main-timeline-2 mt-5">
                <div class="timeline-2 ">
                    <div class="card border-0 shadow">
                        <img src="{{asset('assets/imgs/per1.jpeg')}}" class="card-img-top"
                             alt="Responsive image">
                        <div class="card-body p-3 lh-lg">
                            <h4 class=" mb-2"> الشيخ المجاهد مصطفى بلمهدي مواليد</h4>
                            <p class="text-lighter mb-3"><i class="far fa-clock " aria-hidden="true"></i> 1943</p>
                            <p class="mb-0">لمرحوم مصطفى _ هو ثالث ثلاثة: <span class="text-primary">نحناح</span> ؛ <span class="text-primary">بوسلماني</span> رحمهم الله جميعا_ من مواليد 1943 بالبليدة؛ أكمل دراسته الابتدائية بمدرسة الإرشاد التابعة للحركة الوطنية.</p>
                            <ul>
                                <li>شارك مع إخوانه المجاهدين ببلدته في ثورة التحرير المجيدة ضد الاستعمار الفرنسي.</li>
                                <li>عد الاستقلال التحق بسلك التعليم الابتدائي،ثم كمدير مدرسة ابتدائية.</li>
                                <li>ويعد الشيخ  أحد القيادات التاريخية للصحوة الاسلامية في الجزائر منذ منتصف الثمانينيات،</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="timeline-2 right-2">
                    <div class="card border-0 shadow">
                        <img src="{{asset('assets/imgs/per2.jpeg')}}" class="card-img-top"
                             alt="Responsive image">
                        <div class="card-body p-3 lh-lg ">
                            <h4 class="fw-bold mb-2">حركة المجتمع الإسلامي عام </h4>
                            <p class="text-muted mb-4"><i class="far fa-clock" aria-hidden="true"></i> 1990</p>
                            <div class="mb-0">
                                <ul>
                                    <li>عارض، رفقة عدد من قيادات التيار منهم: الشهيد الذبيح محمد بوسليماني(من ضحايا الارهاب) والشيخ محفوظ نحناح و الاخوة: الطاهر زيشي، رشيد كسور،علي بومعيزة،محمد حزي،محمد لقواسي،محمد بن ابراهيم وغيرهم... الميثاق الوطني والتوجهات الاشتراكية للرئيس الجزائري الراحل المرحوم هواري بومدين، ما دفع الأخير إلى اعتقالهم وزجهم في السجون</li>
                                    <li>بعد خروجه من السجن(سنة 1979 )  حاول أن يعود إلى التعليم فمُنع من ذلك، فلجأ إلى ممارسة التجارة.</li>
                                    <li>وبعد التعددية السياسية، شارك بلمهدي رفقة رفاقه في النضال، في تأسيس "جمعية الإرشاد والإصلاح" كإطار لتنظيم العمل التربوي و الدعوي ، قبل أن تليها خطوة تأسيس حزب سياسي باسم "حركة المجتمع الإسلامي عام 1990.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="timeline-2 ">
                    <div class="card border-0 shadow">
                        <img src="{{asset('assets/imgs/per3.jpeg')}}" class="card-img-top"
                             alt="Responsive image">
                        <div class="card-body p-4 lh-lg">
                            <h4 class="fw-bold mb-2">غرفة الشيوخ</h4>
                            <p class="text-muted mb-3"><i class="far fa-clock" aria-hidden="true"></i> 1998 و 2001</p>
                            <p class="mb-0">    عين لاحقاً المرحوم بلمهدي عضواً في مجلس الأمة(غرفة الشيوخ) "سيناتور" من طرف رئيس الجمهورية ،ما بين 1998 و 2001.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="timeline-2 right-2">
                    <div class="card border-0 shadow">
                        <img src="{{asset('assets/imgs/per4.jpeg')}}" class="card-img-top"
                             alt="Responsive image">
                        <div class="card-body p-4">
                            <h4 class="fw-bold mb-2">تأسيس حركة البناء الوطني</h4>
                            <p class="text-muted mb-3"><i class="far fa-clock me-2" aria-hidden="true"></i>2013</p>
                            <p class="mb-0">   وفي عام 2008، وقعت خلافات داخل الحركة اضطرته الى الانسحاب وتأسيس "حركة البناء الوطني" مع ثلة من القيادات في عام 2013.</p>
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
                            <p class="text-muted mb-3"><i class="far fa-clock me-2" aria-hidden="true"></i>07 ماي 2022</p>
                            <p class="mb-0"> توفي رحمهة الله السنة الماضية (2022)، وشاء القدر أن يتوفى في يوم مولده (السابع من مايو/أيار)".</p>
                        </div>
                    </div>
                </div>
                <div class="timeline-2 right-2">
                    <div class="card border-0 shadow overflow-hidden">
                        <div class="card-body p-4 lh-lg">
                            <h4 class="fw-bold mb-2">شخصيات مهمة في جنازته</h4>
                            <p class="text-muted"><i class="far fa-hands-praying me-2" aria-hidden="true"></i>رحمة الله عليه</p>
                            <ul style="padding: 1rem !important">
                                <li>الامين العام لحزب جبهة التحرير الوطني.
                                    الاستاذ ابو الفضل بعجي</li>
                                <li>الشيح محمد مكركب</li>
                                <li>الاستاذ سمير العربي</li>
                                <li>النائب لخضر بن خلاف(اطار بحركة التنمية و العدالة)</li>
                                <li>الشيخ عبد الله جاب الله (رئيس حركة التنمية و العدالة)</li>
                                <li>الاستاذ عبد القادر بن قرينة (رئيس حركة البناء الوطني)</li>
                                <li>الدكتور عبد الرزاق مقري (رئيس حركة مجتمع السلم -سابقا)</li>
                                <li>الحاج طاهر زيشي و الحاج</li>
                                <li>الاستاذ عبد الحميد مداود و الاستاذ محمد جمعة</li>
                            </ul>
                            <h6 class="text-center text-primary my-1">رؤساء الاحزاب الكبرى في الجزائر:</h6>
                            <ul style="padding: 1rem !important">
                                <li>ابو الفضل بعجي</li>
                                <li>عبد القادر بن قرينة</li>
                                <li>عبد العزيز بلعيد</li>
                                <li>الوزير الهاشمي جعبوب</li>
                                <li>المجاهد عبد الهادي السايح</li>
                                <li>الوزير مع الصحفي القدير نور الدين ختال</li>
                                <li>الشيخ جلول حجيمي (رئيس نقابة الائمة)</li>
                                <li>الشيخ الدكتور احمد بوساق</li>
                                <li>مع فضيلة الاستاذ نصر الدين سالم شريف</li>
                                <li>فضيلة الشيخ البروفيسور عبد الله جاب الله</li>
                                <li>الاستاذ الدكتور احمد بوساق</li>
                                <li>الشيخ الحاج الطيب عزيز</li>
                                <li>نجل الشيخ محفوظ نحناح الاستاذ نور الدين</li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
