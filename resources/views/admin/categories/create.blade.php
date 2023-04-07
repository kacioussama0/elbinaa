@extends('layouts.app')

@section('content')

   <div class="container">

       <h1 class="mb-4">إضافة مقال</h1>

       <div class="card">
           <div class="card-body">
               <form action="{{route('categories.store')}}" method="POST">
                   @csrf
                   <div>
                       <label for="name" class="form-label">الإسم</label>
                       <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}">
                       @error('name')
                        <div class="text-danger">{{$message}}</div>
                       @enderror
                   </div>

                   <div>
                       <label for="name" class="form-label">الإسم اللطيف</label>
                       <input type="text" name="slug" id="slug" class="form-control" value="{{old('slug')}}">
                       @error('slug')
                       <div class="text-danger">{{$message}}</div>
                       @enderror
                   </div>


                   <div>
                       <label for="type" class="form-label">النوع</label>
                       <select name="type" id="type" class="form-select">
                           <option value="" selected disabled>إختر النوع المناسب</option>
                           <option value="posts">مقال</option>
                           <option value="images">صور</option>
                           <option value="videos">فيديوهات</option>
                       </select>
                       @error('type')
                       <div class="text-danger">{{$message}}</div>
                       @enderror
                   </div>

                   <button type="submit" class="btn btn-success mt-3 w-100">إضافة</button>

               </form>
           </div>
       </div>

   </div>



@endsection


