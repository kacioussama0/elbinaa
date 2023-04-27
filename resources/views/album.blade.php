@extends('layouts.header')


@section('styles')
    <style>
        header {
            min-height: 90px !important;
        }
    </style>
@endsection


@section('content')

    <section class="container py-5 overflow-hidden">
        <h1 class="display-1 mb-5 text-center">ألبومات</h1>
        @foreach($categories as $category)
            <h3 class="display-1 text-primary mt-5 mb-3">
                {{$category->name}}
            </h3>
        <div class="col-12">
            <div class="swiper">
                <div class="swiper-wrapper">

                    @foreach($category -> files as $photo)

                        <div class="card swiper-slide">
                            <a
                                href="{{asset('storage/'.$photo->path)}}"
                                data-fancybox
                                data-caption="">
                                <img src="{{asset('storage/'.$photo->path)}}" class="card-img-top" alt="..." style="height: 500px">
                            </a>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
        @endforeach

    </section>

@endsection
