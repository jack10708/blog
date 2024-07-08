<!DOCTYPE html>
<html>
<head>
    <title>Edit Blog </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('navbar/css/dashboard.css') }}"> <!-- Link to your CSS file -->

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
        }
        h1 {
            margin-bottom: 20px;
            color: #333;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
            font-weight: bold;
        }
        input[type="text"],
        input[type="file"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }
        textarea {
            height: 150px;
        }
        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #0056b3;
        }
        .fa {
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">TravelBlogs</div>
        <div class="container">
            <nav>
                <ul>
                    <li><a href="{{route('account.dashboard')}}">Home</a></li>
                    <li><a href="{{route('user.create')}}">Create Blog</a></li>
                    <li><a href="{{route('user.my_blog')}}">My Blogs</a></li>
                    <li><a href="{{route('user.manage_blog')}}">Manage Blog</a></li>
                </ul>
            </nav>
        </div>
        <div class="user-profile">
            <img src="profile.jpg" alt="Profile Picture">
            <div class="dropdown">
                <a href="#">My Profile</a>
                <a href="#">Logout</a>
            </div>
        </div>
    </header>
    <h1>Edit Blog </h1>
    @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @if(session('status'))
        <div>{{ session('status') }}</div>
    @endif


        <div class="form-container">
            <form action="{{ route('user.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
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
                    <img height="60px" src="/blogimage/{{$blog->image }}" >

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
</body>
</html>
