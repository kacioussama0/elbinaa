@extends('layouts.app')

@section('content')



    <div class="container">



        <h1 class="mb-4">المقالات</h1>




        <a href="{{url('posts/create')}}" class="btn btn-lg btn-primary mb-3">إضافة مقال</a>

        @if(session()->exists('success'))

            <div class="alert alert-success">
                {{session()->get('success')}}
            </div>

        @endif


        <div class="table-responsive ">
            <table class="table table-hover table-bordered table-primary text-center align-middle">
                <thead>
                <tr>
                    <td>الإسم</td>
                    <td>الصورة</td>
                    <td>التصنيف</td>
                    <td>تم إنشاءه</td>
                    <td>تم تعديله</td>
                    <td>الإجراءات</td>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{$post->name}}</td>
                        <td><img src="{{asset('storage/' . $post -> thumbnail)}}" alt="" style="width: 150px"></td>
                        <td>
                            {{$post -> category -> name}}
                        </td>
                        <td>{{$post->created_at}}</td>
                        <td>{{$post->updated_at}}</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    الإجراءات
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{route('posts.edit',$post)}}">تعديل</a></li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <form action="{{route('posts.destroy',$post)}}" onsubmit="return confirm('هل أنت متأكد ?')" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn p-0">حذف</button>
                                            </form>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>

@endsection
