@extends('layouts.header')


@section('styles')
    <style>
        header {
            height: 90px !important;
        }
    </style>
@endsection


@section('content')


<div class="container mt-5">
    <h1 class="text-center mb-5">ذكرى وتأسيس</h1>
    <div class="row mt-5">
        <div class="col-md-6">
            <h2>الذكرى الاولى لوفاته</h2>
            <span class="text-muted mb-3 d-block"> المؤسس و الرئيس السابق للحركة</span>
            <img src="{{asset('assets/imgs/memory.jpg')}}" alt="mostafa" class="img-fluid img-thumbnail  rounded-5">
        </div>

        <div class="col-md-6">
            <h3 class="mb-5">ملخص السيرة الذاتية للمرحوم الشيخ مصطفى بلمهدي</h3>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            من هو الشيخ مصطفى بلمهدي
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-0">
                                الشيخ المجاهد مصطفى بلمهدي،  يعد أحد مؤسسي التيار الوسطي المعتدل في الجزائر.
                                وقبل رحيله، اضطر بلمهدي إلى ترك العمل السياسيلاسباب صحية بعد تخليه عن رئاسة "حركة البناء الوطني"، التي أسسها مع مجموعة من قيادات العمل السباسي ممن عملوا مع مؤسس العمل الاسلامي في الجزائر الشيخ المجاهد محفوظ نحناح (توفي في يونيو/حزيران 2003.)
                            </p>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            نشأته
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-0">
                                و عن سيرته في طفولته فقد نشأ يتيماً منذ أن كان عمره 18 شهراً، وتحمل مسؤولية رعاية العائلة بعدما استشهد شقيقه خلال الاستعمار وكان عمره 14عاما.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            تاريخه
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-0">
                                المرحوم مصطفى _ هو ثالث ثلاثة: نحناح؛بوسلماني رحمهم الله جميعا_ من مواليد 1943 بالبليدة؛ أكمل دراسته الابتدائية بمدرسة الإرشاد التابعة للحركة الوطنية.
                            </p>

                            <ul>
                                <li>- شارك مع إخوانه المجاهدين ببلدته في ثورة التحرير المجيدة ضد الاستعمار الفرنسي.
                                </li>

                                <li>
                                    - بعد الاستقلال التحق بسلك التعليم الابتدائي،ثم كمدير مدرسة ابتدائية.
                                </li>
                                <li>    -ويعد الشيخ  أحد القيادات التاريخية للصحوة الاسلامية في الجزائر منذ منتصف الثمانينيات،</li>
                                <li>
                                    -عارض، رفقة عدد من قيادات التيار منهم: الشهيد الذبيح محمد بوسليماني(من ضحايا الارهاب) والشيخ محفوظ نحناح و الاخوة: الطاهر زيشي، رشيد كسور،علي بومعيزة،محمد حزي،محمد لقواسي،محمد بن ابراهيم وغيرهم... الميثاق الوطني والتوجهات الاشتراكية للرئيس الجزائري الراحل المرحوم هواري بومدين، ما دفع الأخير إلى اعتقالهم وزجهم في السجون..
                                </li>

                                <li>- بعد خروجه من السجن(سنة 1979 )  حاول أن يعود إلى التعليم فمُنع من ذلك، فلجأ إلى ممارسة التجارة.</li>

                                <li>   -- وبعد التعددية السياسية، شارك بلمهدي رفقة رفاقه في النضال، في تأسيس "جمعية الإرشاد والإصلاح" كإطار لتنظيم العمل التربوي و الدعوي ، قبل أن تليها خطوة تأسيس حزب سياسي باسم "حركة المجتمع الإسلامي عام 1990.</li>

                                <li>    عين لاحقاً المرحوم بلمهدي عضواً في مجلس الأمة(غرفة الشيوخ) "سيناتور" من طرف رئيس الجمهورية ،ما بين 1998 و 2001.</li>
                                <li>   وفي عام 2008، وقعت خلافات داخل الحركة اضطرته الى الانسحاب وتأسيس "حركة البناء الوطني" مع ثلة من القيادات.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>




        </div>
    </div>
</div>


@endsection

