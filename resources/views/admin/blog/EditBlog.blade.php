@extends('layouts.admindash')

<head>
    <style>
        .page-title {
            text-align: center;
        }



        .container {
            align-items: center;
        }

        .form-container {
            display: flex;
            justify-content: center;
        }

        .form-wrapper {
            max-width: 600px;
            width: 100%;
        }


    </style>
</head>

@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Update Blog</h4>
            </div>
        </div>
    </div>

    <div class="row">
        @include('admin.include.alert')
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif



                    <div class="form-container">
                        <form class="form-wrapper" action="{{route('EditBlog',$blog->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="title">Title:</label>
                                <input type="text" id="title" name="title" value="{{$blog->title}}" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <label for="content">content:</label>
                                <textarea class="form-control" value="{{$blog->content}}" id="content" name="content"  rows="5" >{{$blog->content}}</textarea>
                            </div>

                            <div class="image mb-4">
                                <label for="image">old Image:</label><br>
                                <img height="60px" src="/blogpic/{{$blog->image }}" >

                            </div>

                            <div class="form-group mb-3">
                                <label for="image">Update Image:</label>
                                <input type="file" id="image" name="image" class="form-control-file">
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary waves-effect waves-light" name="save">Update</button>
                            </div>
                        </form>
                    </div>
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div>
    <!-- end row -->

</div> <!-- container -->
@endsection
