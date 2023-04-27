@extends('layouts.header')


@section('styles')
    <style>
        header {
            min-height: 70vh !important;
        }
    </style>
@endsection

@section('addition')

    <h2 class="memory-title text-center display-1 text-white position-absolute start-50 top-50 translate-middle z-2">
        <i class="fa-solid fa-comments-question fa-1x text-success"></i>
        اسئلني
    </h2>
    <img src="{{asset('assets/imgs/landing-bg.jpg')}}"
         class="object-fit-cover position-absolute start-50 top-50 translate-middle w-100 h-100"
         alt="">

@endsection



@section('content')
    {{--start accordion--}}
    <section class="container mt-5">

        <div class="accordion my-5" id="faq">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{$faqs[0]-> id}}" aria-expanded="true" aria-controls="collapse-{{$faqs[0]-> id}}">
                        {{$faqs[0]-> question}}
                    </button>
                </h2>
                <div id="collapse-{{$faqs[0]-> id}}" class="accordion-collapse collapse show" data-bs-parent="#faq">
                    <div class="accordion-body">
                        {{$faqs[0]-> answer}}
                    </div>
                </div>
            </div>

            @foreach($faqs-> skip(1) as $faq)

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{$faq-> id}}" aria-expanded="false" aria-controls="collapse-{{$faq-> id}}">
                        {{$faq-> question}}
                    </button>
                </h2>
                <div id="collapse-{{$faq-> id}}" class="accordion-collapse collapse" data-bs-parent="#faq">
                    <div class="accordion-body">
                        {{$faq-> answer}}
                    </div>
                </div>
            </div>



        @endforeach

        </div>
    </section>
    {{--ends accordion--}}
@endsection
