

@extends('layouts.admindash')
<head>
    <style>
        .page-title{
            text-align: center;

        }
        .header-title{
            text-align: center;
        }
    </style>
</head>

@section('content')


   <div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Add Category</h4>
            </div>
        </div>
    </div>


    <div class="row">
      @include('admin.include.alert')
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-2">Fill THE FORM</h4>

                    <form action="{{route('store.category')}}" method="POST" enctype="multipart/form-data">

                        @csrf


                        <div class="form-group">
                            <label for="category">Category Name:</label>
                            <input type="text" name="category" class="form-control" required>


                        </div>

                        <button type="submit" class="btn btn-primary">Add category</button>
                    </form>




                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div>
    <!-- end row -->





</div> <!-- container -->

@endsection
