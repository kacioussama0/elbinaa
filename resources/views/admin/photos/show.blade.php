@extends('layouts.app')

@section('content')



    <div class="container">



        <h1 class="mb-4">الصور</h1>





        @if(session()->exists('success'))

            <div class="alert alert-success">
                {{session()->get('success')}}
            </div>

        @endif


        <div class="row">
            @foreach($categories as $category)
                <div class="col-md-6 mb-3">
                    <div class="card text-center rounded-5  border-1 shadow">
                        <h5 class="card-header fw-bolder mb-3 ">{{$category->name}}</h5>

                        <div class="card-body">
                            <div class="row mb-3 gy-3">
                                @foreach($category->files->take(6) as $image)
                                <div class="col-md-4">
                                    <img src="{{asset('storage/'.$image->path)}}" alt="" class="img-fluid rounded-3">
                                </div>
                                @endforeach
                            </div>
                            <a href="" class="btn btn-primary px-5">دخول</a>
                            <a href="#" class="btn btn-success px-5">عدد الصور :  {{count($category->files)}} صورة </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>

@endsection
