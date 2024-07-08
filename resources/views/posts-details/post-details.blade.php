<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $blog->title }}</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f4f8;
            color: #333;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        .post {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .title {
            background-color: #3498db;
            color: #ffffff;
            padding: 20px;
            text-align: center;
        }
        h1 {
            margin: 0;
            font-size: 2.5em;
            font-weight: 700;
        }
        .image {
            text-align: center;
            background-color: #f9f9f9;
            padding: 20px 0;
        }
        img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .content {
            padding: 30px;
            text-align: justify;
        }
        .usertype {
            background-color: #f0f0f0;
            padding: 15px;
            text-align: right;
            font-style: italic;
        }
        .usertype p {
            margin: 5px 0;
        }
        /* .status {
            display: inline-block;
            padding: 3px 8px;
            background-color: #2ecc71;
            color: #ffffff;
            border-radius: 3px;
            font-size: 0.9em;
        } */
        .back-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #3498db;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }
        .back-button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="post">
            <div class="title">
                <h1>{{$blog->title}}</h1>
            </div>
            <div class="image">
                <img src="/blogimage/{{$blog->image}}" alt="Blog Image">
            </div>
            <div class="content">
                <p>{{$blog->content}}</p>
            </div>
            <div class="usertype">
                <p>Posted by <strong>{{$blog->author}}</strong></p>

            </div>
        </div>
        <a href="{{route('home')}}" class="back-button">Back to homepage</a>
    </div>
</body>
</html>
