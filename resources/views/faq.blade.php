@extends('layouts.header')


@section('styles')
    <style>
        header {
            height: 90px !important;
        }
    </style>
@endsection


@section('content')
    {{--start accordion--}}
    <section class="container mt-5">
        <h4 class="text-center display-4 mb-5 ">اسئلني</h4>
        <div class="accordion">
            @foreach($faqs as $key => $faq)
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$key}}" aria-expanded="true" aria-controls="collapseOne">
                        {{$faq-> question}}
                    </button>
                </h2>
                <div id="collapse{{$key}}" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
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
