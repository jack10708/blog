<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Blog Dashboard</title>
    <link rel="stylesheet" href="{{ asset('navbar/css/dashboard.css') }}"> <!-- Link to your CSS file -->
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

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
        }
        h1 {
            margin-bottom: 30px;
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






     <!-- Featured Blog Posts Section -->
     <section class="featured-posts">
        <h1>My Blogs</h1>
        <div class="posts-container">
        @foreach ($blog as $blog )
        <div class="post">
            <img src="/blogimage/{{$blog->image}}" >
            <div class="post-info">
                <h3 class="post-title">{{$blog->title}}</h3>
                <p>{{ \Illuminate\Support\Str::limit($blog->content, 100, $end='...') }}</p>
                <div class="space">
                    <p class="post-author">posted by: {{$blog->author}}</p>
                    <p class="status">{{$blog->status}}</p>
                </div>
                <a href="{{route('post.details',$blog->id)}}" class="read-more">Read More</a>
            </div>
        </div>

        @endforeach

        </div>
    </section>

