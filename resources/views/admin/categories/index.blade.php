@extends('layouts.app')

@section('content')



    <div class="container">



        <h1 class="mb-4">التصنيفات</h1>




        <a href="{{url('categories/create')}}" class="btn btn-lg btn-primary mb-3">إضافة تصنيف</a>

        @if(session()->exists('success'))

            <div class="alert alert-success">
                {{session()->get('success')}}
            </div>

        @endif


        <div class="table-responsive ">
            <table class="table table-hover table-bordered table-primary text-center align-middle">
                <thead>
                <tr>
                    <td>#</td>
                    <td>الإسم</td>
                    <td>النوع</td>
                    <td>تم إنشاءه</td>
                    <td>تم تعديله</td>
                    <td>الإجراءات</td>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td>
                            @if($category->type === 'posts')
                                منشورات
                            @elseif($category->type === 'images')
                                صور
                            @else
                                فيديوهات
                            @endif
                        </td>
                        <td>{{$category->created_at}}</td>
                        <td>{{$category->updated_at}}</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    الإجراءات
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{route('categories.edit',$category)}}">تعديل</a></li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <form action="{{route('categories.destroy',$category)}}" onsubmit="return confirm('هل أنت متأكد ?')" method="POST">
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
