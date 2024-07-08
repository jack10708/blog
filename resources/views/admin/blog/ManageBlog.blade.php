

@extends('layouts.admindash')


@section('content')

<head>
    <style>
        .header-title{
            text-align: center;
            font-size: 30px;
        }

        .truncate {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 150px; /* Adjust the width as needed */
        }
    </style>
</head>
   <!-- Start Content-->
   <div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Manage Blogs</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="header-title mb-5">
                        <h3 class="header-title">All Blogs</h3>
                    </div>
                    @if (session('success'))
                        <div class="alert alert-danger">
                            {{ session('success') }}
                        </div>
                    @endif


                    <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                        <thead>
                            <tr>

                                <th>Title</th>
                                <th>content</th>
                                <th>Post by</th>
                                <th>Status</th>
                                <th>Image</th>
                                <th>Usertype</th>
                                <th>Delete</th>
                                <th>Edit</th>
                                <th>Status
                                    Accept
                                </th>
                                <th>Status
                                    reject</th>



                            </tr>
                        </thead>

@foreach ($blog as $blog )
                        <tbody>
                            <tr>

                                <td>{{$blog->title}}</td>
                                <td>
                                    <div class="truncate" data-tippy-content="{{ $blog->content }}">{{ Str::limit($blog->content, 50) }}</div>
                                </td>
                                <td>{{$blog->author}}</td>
                                <td>{{$blog->status}}</td>
                                <td>
                                    <img src="/blogimage/{{$blog->image }}" alt="Blog Image" style="max-width: 100px;">
                                </td>
                                <td>{{$blog->usertype}}</td>
                                <td>
                                    <a href="{{route('DeleteBlog',$blog->id)}}" class="btn btn-danger" onclick="return confirm('Are You Sure to delete this ?')">Delete</a>
                                </td>
                                <td>
                                    <a href="{{route('EditBlog',$blog->id)}}" class="btn btn-success">Edit</a>
                                </td>
                                <td>
                                    <a href="{{route('AcceptBlog',$blog->id)}}" class="btn btn-primary" onclick="return confirm('Are You Sure to accept this ?')">Accept</a>
                                </td>
                                <td>
                                    <a href="{{route('RejectBlog', $blog->id)}}" class="btn btn-warning" onclick="return confirm('Are You Sure to reject this ?')">Reject</a>
                                </td>


                            </tr>

                        </tbody>
@endforeach

                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>





</div> <!-- container -->

@endsection
