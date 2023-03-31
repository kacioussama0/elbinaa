@extends('layouts.app')

@section('content')

    <div class="container">

        <h1 class="mb-4">إضافة تصنيف</h1>

        <div class="card">
            <div class="card-body">
                <form action="{{route('categories.update',$category)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div>
                        <label for="name" class="form-label">الإسم</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{$category->name}}">
                        @error('name')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div>
                        <label for="name" class="form-label">الإسم اللطيف</label>
                        <input type="text" name="slug" id="slug" class="form-control" value="{{$category->slug}}">
                        @error('slug')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>


                    <div>
                        <label for="type" class="form-label">النوع</label>
                        <select name="type" id="type" class="form-select">
                            <option value="" selected disabled>إختر النوع المناسب</option>
                            <option value="posts" @if($category->type == 'posts') selected @endif  >مقال</option>
                            <option value="images" @if($category->type == 'images') selected @endif >صور</option>
                            <option value="videos" @if($category->type == 'videos') selected @endif >فيديوهات</option>
                        </select>
                        @error('type')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-success mt-3 w-100">تعديل</button>

                </form>
            </div>
        </div>

    </div>


@endsection
