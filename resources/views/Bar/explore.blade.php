
@extends('layouts.app')

<style>


        /* Explore Hero */
        .explore-hero {
            padding: 100px;
            text-align: center;
            background-image: url('navbar/img/explore_hero.jpg');
            background-size: cover;
            background-position: center;
            color: #fff;
        }

        .explore-hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .explore-hero p {
            font-size: 24px;
        }

        /* Destination Categories */
        .destination-categories {
            padding: 50px;
            text-align: center;
        }

        .destination-categories h2 {
            font-size: 36px;
            margin-bottom: 40px;
        }

        .categories {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .category {
            margin: 20px;
            max-width: 300px;
            background-color: #f5f5f5;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .category img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .category h3 {
            font-size: 24px;
            margin: 20px;
        }

        .category p {
            font-size: 16px;
            color: #666;
            margin: 0 20px 20px;
        }

        .explore-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 20px;
            transition: background-color 0.3s ease;
        }

        .explore-btn:hover {
            background-color: #555;
        }
</style>
</head>
<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <!-- Navigation menu from the home page -->
    </header>

    <div class="explore-hero">
        <h1>Explore the World</h1>
        <p>Discover new destinations and plan your next adventure</p>
    </div>

    <div class="destination-categories">
        <h2>Popular Destinations</h2>
        <div class="categories">
            <div class="category">
                <img src="navbar/img/category_mountains.jpg" alt="Mountains">
                <h3>Mountain Treks</h3>
                <p>Embark on challenging hikes and experience the majesty of towering peaks.</p>
                <a href="#" class="explore-btn">Explore</a>
            </div>
            <div class="category">
                <img src="navbar/img/category_beaches.jpg" alt="Beaches">
                <h3>Coastal Escapes</h3>
                <p>Relax on pristine beaches and bask in the warmth of tropical paradises.</p>
                <a href="#" class="explore-btn">Explore</a>
            </div>
            <div class="category">
                <img src="navbar/img/category_cities.jpg" alt="Cities">
                <h3>Cultural Immersion</h3>
                <p>Dive into the rich histories and vibrant cultures of cities around the world.</p>
                <a href="#" class="explore-btn">Explore</a>
            </div>
        </div>
    </div>



</body>
