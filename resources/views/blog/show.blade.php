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
                    <li><a href="{{route('user.my_blog')}}">My Blogs</a></li>
                    <li><a href="{{route('user.create')}}">Create Blog</a></li>
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
<body>
    <h1>{{ $blog->title }}</h1>
    <h2>Posted by:{{ $blog->author }}</h2>
    <p>{{ $blog->content }}</p>
    <img src="/blogimage/'{{$blog->image }}" >
</body>
</html>
