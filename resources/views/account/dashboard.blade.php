<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Blog</title>
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

    <main>
        <section class="welcome-section">
            <h1>Welcome, [User's Name]!</h1>
            <p>"Travel is the only thing you buy that makes you richer."</p>
        </section>



        <!-- Featured Blog Posts Section -->
        <section class="featured-posts">
            <h2>Featured Blog Posts</h2>
            <div class="posts-container">
            @foreach ($blog as $blog )
            <div class="post">
                <img src="/blogimage/{{$blog->image}}" >
                <div class="post-info">
                    <h3 class="post-title">{{$blog->title}}</h3>
                    <p>{{ \Illuminate\Support\Str::limit($blog->content, 100, $end='...') }}</p>
                    <p class="post-author">{{$blog->author}}</p>
                    <a href="{{route('post.details',$blog->id)}}" class="read-more">Read More</a>
                </div>
            </div>

            @endforeach

            </div>
        </section>
    </main>
</body>
</html>
