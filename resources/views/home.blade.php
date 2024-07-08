<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wanderlust Chronicles</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="navbar/css/navbar.css">
    <link rel="stylesheet" href="navbar/css/blog.css">
    <link rel="stylesheet" href="navbar/css/latest.css">
    <link rel="stylesheet" href="navbar/css/footer.css">
    <link rel="stylesheet" href="navbar/css/header.css">
    <link rel="stylesheet" href="navbar/css/postcreate.css">
    <style>
        /* Background Wrapper Styles */
        .background-wrapper {
            background-image: url('navbar/img/trek.jpeg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            position: relative;
        }

        .approved-posts {
    padding: 40px 0;
    background-color: #f8f9fa;
}

.approved-posts h2 {
    text-align: center;
    margin-bottom: 30px;
}
    </style>
</head>
<body>

<div class="background-wrapper">
    <!--==================== HEADER ====================-->
<header class="header" id="header">
        <nav class="nav container">
            <img src="navbar/img/logo1.png" class="nav__logo ms-3" alt="logo">

           <div class="nav__menu" id="nav-menu">
              <ul class="nav__list mb-2">
                 <li class="nav__item">
                    <a href="{{route('home')}}" class="nav__link">
                       <i class="ri-arrow-right-up-line"></i>
                       <span>Home</span>
                    </a>
                 </li>

                 <li class="nav__item">
                    <a href="{{route('Bar.about_us')}}" class="nav__link">
                       <i class="ri-arrow-right-up-line"></i>
                       <span>About Us</span>
                    </a>
                 </li>

                 <li class="nav__item">
                    <a href="{{route('Bar.blog')}}" class="nav__link">
                       <i class="ri-arrow-right-up-line"></i>
                       <span>Blog</span>
                    </a>
                 </li>

                 <li class="nav__item">
                    <a href="{{route('Bar.explore')}}" class="nav__link">
                       <i class="ri-arrow-right-up-line"></i>
                       <span>Explore</span>
                    </a>
                 </li>

                 <li class="nav__item">
                    <a href="{{route('Bar.contact')}}" class="nav__link">
                       <i class="ri-arrow-right-up-line"></i>
                       <span>Contact</span>
                    </a>
                 </li>

              </ul>

              <!-- Close button -->
              <div class="nav__close" id="nav-close">
                 <i class="ri-close-large-line"></i>
              </div>
              <div class=" mbr-section-btn ">
                <a class="btn btn-primary  display-4 mb-3 " href="{{route('register')}}">Login/Register</a>

            </div>

           </div>

           <!-- Toggle button -->
           <div class="nav__toggle" id="nav-toggle">
              <i class="ri-menu-line"></i>
           </div>
        </nav>
</header>

    <div class="mid-header">
        <h2>Wanderlust Chronicles</h2>
        <h6>Embark on Journeys, Share Your Tales</h6>
    </div>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
          <h1>Discover the World's Hidden Gems</h1>
          <p>Embark on Journeys, Share Your Tales</p>
          <a href="#" class="cta-button">Start Exploring</a>
        </div>
    </section>
</div>

<section class="categories-search">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <!-- Your existing content (Featured Blog Posts and Latest Blog Posts) goes here -->
            </div>
            <div class="col-md-4">
                <!-- Search bar -->
                <div class="search-bar mb-4 mt-4">
                    <h3>Search Posts</h3>
                    <form action="#" method="GET">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search..." name="search">
                            <button class="btn btn-primary" type="submit">Search</button>
                        </div>
                    </form>
                </div>

                <!-- Categories table -->
                <!-- Categories table -->
<div class="categories-table">
    <h3>Categories</h3>
    <table class="table">
        <thead>
            <tr>
                <th>Category</th>
                <th>Posts</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td><a href="{{ route('category.posts', $category->id) }}">{{ $category->name }}</a></td>
                <td>{{ $category->posts_count }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Blog Posts Section -->
<section class="featured-posts">
    <h2>Featured Blog Posts</h2>
    <div class="posts-container">
        <div class="post">
            <img src="navbar/img/ktm.jpg" alt="Kathmandu">
            <div class="post-info">
                <h3>Exploring the Historic Kathmandu</h3>
                <p>Immerse yourself in the rich culture and heritage of Nepal's capital city, Kathmandu.</p>
                <a href="#post1" class="read-more">Read More</a>
            </div>
        </div>
        <div class="post">
            <img src="navbar/img/pokhara.jpg" alt="Pokhara">
            <div class="post-info">
                <h3>The Scenic Beauty of Pokhara</h3>
                <p>Discover the serene lakes, majestic mountains, and vibrant culture in Pokhara.</p>
                <a href="#post2" class="read-more">Read More</a>
            </div>
        </div>
        <div class="post">
            <img src="navbar/img/chitwan.jpg" alt="Chitwan">
            <div class="post-info">
                <h3>Wildlife Adventures in Chitwan</h3>
                <p>Experience the thrill of wildlife safaris and jungle walks in Chitwan National Park.</p>
                <a href="#post3" class="read-more">Read More</a>
            </div>
        </div>
        <div class="post">
            <img src="navbar/img/lumbini.jpg" alt="Lumbini">
            <div class="post-info">
                <h3>Lumbini: The Birthplace of Buddha</h3>
                <p>Visit the sacred site where Siddhartha Gautama, the Buddha, was born.</p>
                <a href="#post4" class="read-more">Read More</a>
            </div>
        </div>
        <div class="post">
            <img src="navbar/img/mt.jpg" alt="Mount Everest">
            <div class="post-info">
                <h3>Conquering Mount Everest</h3>
                <p>Follow the journey of climbers as they tackle the world's highest peak.</p>
                <a href="#post5" class="read-more">Read More</a>
            </div>
        </div>
        <div class="post">
            <img src="navbar/img/bhaktapur.jpg" alt="Bhaktapur">
            <div class="post-info">
                <h3>Historic Bhaktapur</h3>
                <p>Explore the well-preserved ancient city of Bhaktapur, known for its art and architecture.</p>
                <a href="#post6" class="read-more">Read More</a>
            </div>
        </div>

        <div class="posts-container">
            <div class="post">
                <img src="navbar/img/langtang.jpg" alt="Langtang Valley">
                <div class="post-info">
                    <h3>Hiking the Langtang Valley</h3>
                    <p>Experience the stunning landscapes and vibrant culture of Langtang Valley.</p>
                    <a href="#post1" class="read-more">Read More</a>
                </div>
            </div>
            <div class="post">
                <img src="navbar/img/patan.jpg" alt="Patan">
                <div class="post-info">
                    <h3>Cultural Wonders of Patan</h3>
                    <p>Explore the rich history and architectural marvels of Patan.</p>
                    <a href="#post2" class="read-more">Read More</a>
                </div>
            </div>
            <div class="post">
                <img src="navbar/img/annapurna.jpg" alt="Annapurna Circuit">
                <div class="post-info">
                    <h3>Adventures on the Annapurna Circuit</h3>
                    <p>Join the trekkers on the challenging yet rewarding Annapurna Circuit.</p>
                    <a href="#post3" class="read-more">Read More</a>
                </div>
            </div>
            <div class="post">
                <img src="navbar/img/Bardia National Park.jpg" alt="Bardia National Park">
                <div class="post-info">
                    <h3>Exploring Bardia National Park</h3>
                    <p>Discover the wildlife and natural beauty of Bardia National Park.</p>
                    <a href="#post4" class="read-more">Read More</a>
                </div>
            </div>
            <div class="post">
                <img src="navbar/img/Ghorepani Poon Hill.jpg" alt="Ghorepani Poon Hill">
                <div class="post-info">
                    <h3>Sunrise at Ghorepani Poon Hill</h3>
                    <p>Witness the breathtaking sunrise views from Ghorepani Poon Hill.</p>
                    <a href="#post5" class="read-more">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<main>
    <!-- Latest Blog Posts Section -->

<section class="latest-posts">
    <h2>Latest Blog Posts</h2>
    <div class="posts-container">
        @foreach($blog as $blog)
        <div class="post">
            <img src="/blogimage/{{$blog->image}}">

            <div class="post-info">
                <h3>{{ $blog->title }}</h3>
                <p>{{ \Illuminate\Support\Str::limit($blog->content, 100, $end='...') }}</p>
                <a href="{{route('post.details',$blog->id)}}" class="read-more" >Read More</a>
            </div>
        </div>
        @endforeach
    </div>
</section>






<footer class="footer-distributed">
    <div class="footer">
        <div class="footer-left col-md-4 d-flex">
            <h3>Company<span>logo</span></h3>

          </div>

          <div class="col-md-4 d-flex ">
              <p class="footer-links">
                  <a href="#">Home</a>
                  ·
                  <a href="#">Blog</a>
                  ·
                  <a href="#">About</a>
                  ·
                  <a href="#">Contact</a>
                </p>
                <p class="footer-company-name">Company Name © 2024</p>
          </div>

          <div class="footer-center col-md-4 d-flex">
            <div>
              <i class="fa fa-map-marker"></i>
              <p><span>444 S. Cedros Ave</span> Solana Beach, California</p>
            </div>

            <div>
              <i class="fa fa-phone"></i>
              <p>+1 555 123456</p>
            </div>

            <div>
              <i class="fa fa-envelope"></i>
              <p><a href="mailto:support@company.com">support@company.com</a></p>
            </div>
          </div>

          <div class="footer-right">
            <p class="footer-company-about">
              <span>About the company</span>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <div class="footer-icons">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-linkedin"></i></a>
              <a href="#"><i class="fa fa-github"></i></a>
            </div>
          </div>
    </div>
</footer>>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="navbar/js/footer.js"></script>
<script src="navbar/js/burger.js"></script>
<script>


</body>
</html>
