@extends('layouts.header')


@section('styles')
    <style>
        header {
            min-height: 50vh !important;
        }
    </style>
@endsection



@section('addition')

    <img src="{{asset('storage/' . $post -> thumbnail)}}"
         class="object-fit-cover position-absolute start-50 top-50 translate-middle z-1 w-100 h-100 z-1"
         alt="">

@endsection

@section('content')
<!-- Start Content -->

<div class="section py-4">

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 overflow-hidden">

                <div class="post-description d-flex flex-column flex-sm-row  justify-content-between align-items-center mb-3 mb-sm-5 mt-sm-0 mt-5" style="font-size: 25px">
                    <div class="border-start border-5 border-primary ps-2 mb-3 mb-sm-0">
                        {{date_format($post ->created_at,'Y-m-d')}}
                    </div>

                </div>

                <div style="font-size: 20px" class="w-100" >
                    <p>{!!($post -> content)!!}</p>
                </div>

                <div class="d-flex flex-row-reverse justify-content-between align-items-center">
                    @if($next)
                    <a href="{{url('posts/'.$next->slug)}}" class="btn text-bg-primary btn-lg my-5"> المقال التالي</a>
                    @endif

                    @if($prev)

                    <a href="{{url('posts/'.$prev->slug)}}" class="btn text-bg-secondary btn-lg  my-5">المقال الأقدم</a>
                    @endif

                </div>
            </div>

            <div class="col-lg-4 col-sm-none p-0">
               @foreach($allPosts as $post)
                    <div class="card mb-3 border-0 overflow-hidden d-flex">
                        <div class="row g-0">
                            <a href="{{url('posts/' . $post -> slug)}}" class="stretched-link"></a>

                            <div class="col-md-4 rounded-3 overflow-hidden">
                                <img src="{{asset('storage/' . $post -> thumbnail)}}"
                                     class="img-fluid h-100 object-fit-cover rounded-start"
                                     alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body" >
                                    <h5 class="card-title fw-bold">{!! Str::limit(strip_tags($post -> name) ,30)!!}</h5>
                                    <p class="card-text fw-light">{!! Str::limit(strip_tags($post -> content) ,100)!!}</p>
                                    <p class="card-text"><small class="text-body-secondary">{{$post -> created_at}}</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>


</div>

</div>

</div>




@endsection
