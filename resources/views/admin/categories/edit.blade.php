@extends('layouts.admindash')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Edit Category</h4>
            </div>
        </div>
    </div>

    <div class="row">
        @include('admin.include.alert')
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-2">Edit Category</h4>

                    <form action="{{ route('update.category', $category->id) }}" method="POST">
                        @csrf
                    
                        <div class="form-group">
                            <label for="name">Category Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $category->name }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Update Category</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
