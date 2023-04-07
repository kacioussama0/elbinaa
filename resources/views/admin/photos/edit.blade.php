@extends('layouts.app')

@section('content')

    <div class="container">

        <h1 class="mb-4">تعديل مقال</h1>

        <div class="card">
            <div class="card-body">
                <form action="{{route('posts.update',$post)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">الإسم</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{$post -> name}}">
                        @error('name')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label">الإسم اللطيف</label>
                        <input type="text" name="slug" id="slug" class="form-control" value="{{$post -> slug}}">
                        @error('slug')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>





                    <div class="mb-3">
                        <label for="category_id" class="form-label">التصنيف</label>
                        <select name="category_id" id="category_id" class="form-select">
                            <option value="" selected disabled>إختر التصنيف المناسب</option>
                            @foreach($categories as $category)
                                <option value="{{$category -> id}}" @if($category->id  == $post -> category -> id) selected @endif>{{$category->name}}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>


                    <div class="mb-3">
                        <label for="thumbnail" class="form-label">الصورة</label>
                        <input type="file" name="thumbnail" id="thumbnail" class="form-control" >
                        @error('thumbnail')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>


                    <img src="{{asset('storage/' . $post -> thumbnail)}}" alt="" style="width: 200px" class="rounded-5 my-3">


                    <div class="mb-3">
                        <label for="content" class="form-label">المحتوى</label>
                        <textarea name="content" id="content">{{$post->content}}</textarea>
                        @error('content')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>


                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="published" name="published" value="1" @if($post->published) checked @endif>
                        <label class="form-check-label" for="published" >منشور</label>
                        @error('published')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>



                    <button type="submit" class="btn btn-success mt-3 w-100">تعديل</button>

                </form>
            </div>
        </div>

    </div>



    <script src="{{asset('assets/ckeditor/build/ckeditor.js')}}"></script>


    <script>ClassicEditor
            .create( document.querySelector( '#content' ), {

                licenseKey: '',

                ckfinder: {
                    // uploadUrl: "// route('posts.uploadImage') . '?_token=' . csrf_token()",

                }

            } )
            .then( editor => {
                window.editor = editor;




            } )
            .catch( error => {
                console.error( 'Oops, something went wrong!' );
                console.error( 'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:' );
                console.warn( 'Build id: qiybqic1scos-2mtgwv7b85hg' );
                console.error( error );
            } );
    </script>


@endsection