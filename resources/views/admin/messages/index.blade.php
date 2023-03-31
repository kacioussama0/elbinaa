@extends('layouts.app')

@section('content')



    <div class="container">



        <h1 class="mb-4">الرسائل</h1>

        @if(session()->exists('success'))

            <div class="alert alert-success">
                {{session()->get('success')}}
            </div>

        @endif


        <div class="table-responsive ">
            <table class="table table-hover table-bordered  text-center align-middle">
                <thead>
                <tr>
                    <td>الإسم</td>
                    <td>البريد</td>
                    <td>الموضوع</td>
                    <td>الرسالة</td>
                    <td>تم إنشاءه</td>
                    <td>تم تعديله</td>
                    <td>الإجراءات</td>
                </tr>
                </thead>
                <tbody>
                @foreach($messages as $message)
                    <tr>
                        <td>{{$message->name}}</td>
                        <td>{{$message->email}}</td>
                        <td>{{$message->subject}}</td>
                        <td>{{$message->message}}</td>
                        <td>{{$message->created_at}}</td>
                        <td>{{$message->updated_at}}</td>
                        <td>

                            <form action="{{route('messages.destroy',$message)}}" onsubmit="return confirm('هل أنت متأكد ?')" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">حذف</button>
                            </form>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>

@endsection
