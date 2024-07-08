<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wanderlust Chronicles - Blog</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="navbar/css/home/homeblog.css">
<style>

/* blog.css */

/* Blog Hero */
.blog-hero {
    padding: 100px;
    text-align: center;
    background-color: #f5f5f5;
}

.blog-hero h1 {
    font-size: 48px;
    margin-bottom: 20px;
}

.blog-hero p {
    font-size: 24px;
    color: #666;
}

/* Blog Posts */
.blog-posts {
    padding: 50px;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
}

.blog-post {
    max-width: 300px;
    margin: 20px;
    background-color: #fff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    border-radius: 5px;
}

.blog-post img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.post-info {
    padding: 20px;
}

.post-info h3 {
    font-size: 24px;
    margin-bottom: 10px;
}

.post-info p {
    font-size: 16px;
    color: #666;
    margin-bottom: 20px;
}

.read-more {
    display: inline-block;
    padding: 10px 20px;
    background-color: #333;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.read-more:hover {
    background-color: #555;
}

</style>

</head>
<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <!-- Navigation menu from the home page -->
    </header>

    <div class="blog-hero">
        <h1>Wanderlust Chronicles Blog</h1>
        <p>Discover inspiring travel stories and destination guides</p>
    </div>

    <div class="blog-posts">

        @foreach ($blog as $blog )
        <div class="blog-post">
            <img src="/blogimage/{{$blog->image}}">
            <div class="post-info">
                <<h3>{{$blog->title}}</h3></h3>
                <p>{{$blog->content}}</p>
                <p>posted by:{{$blog->author}}</p>
                <a href="{{route('post.details',$blog->id)}}" class="read-more">Read More</a>
            </div>
        </div>
        @endforeach


    </div>

    <footer class="footer-distributed">
        <!-- Footer from the home page -->
    </footer>




</body>
</html>
