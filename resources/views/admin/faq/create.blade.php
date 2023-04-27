@extends('layouts.app')

@section('content')
   <div class="container">

       @if($errors->any())

           <div class="alert alert-danger">

               <ul>
                   @foreach($errors->all() as $error)

                       <li>{{$error}}</li>

                   @endforeach

               </ul>

           </div>

       @endif
       <form action="{{route('faq.store')}}" method="POST">


           @csrf

           <div class="form-group mb-3">
               <label for="question" class="form-label">السؤال</label>
               <input type="text" name="question" id="question" class="form-control" placeholder="أدخل سؤال" value="{{old('question')}}">
           </div>





           <div class="form-group mb-3">
               <label for="answer" class="form-label">جواب السؤال</label>
               <textarea name="answer" id="answer"  class="form-control">
                {{old('answer')}}
            </textarea>
           </div>

           <button class="btn btn-primary w-100">إضافة سؤال</button>

       </form>

   </div>
@endsection


