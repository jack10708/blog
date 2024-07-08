<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('navbar/css/dashboard.css') }}"> <!-- Link to your CSS file -->

    <title>Travel Blog Post Manager</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #87CEEB, #E0F8FF);
            margin: 0;
            padding: 20px;
            min-height: 100vh;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 30px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
            color: #333;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
        .btn {
            padding: 6px 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-right: 5px;
        }
        .btn-edit {
            background-color: #ffd700;
            color: #333;
            text-decoration: none;

        }
        .btn-delete {
            background-color: #ff6b6b;
            color: white;
            text-decoration: none;
        }
        .btn:hover {
            opacity: 0.8;
        }
        .add-post {
            margin-top: 20px;
            text-align: center;
        }
        .btn-add {
            background-color: #4CAF50;
            color: white;
            text-decoration: none;

            padding: 10px 20px;
            font-size: 1em;
        }
        .status {
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 0.9em;
        }
        .status-published {
            background-color: #4CAF50;
            color: white;
        }
        .status-draft {
            background-color: #FFA500;
            color: white;
        }
        .image-preview {
            width: 100px;
            height: 60px;
            object-fit: cover;
            border-radius: 4px;
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
    <div class="container">
        <h1>{{$user=Auth()->user()->name}}</h1>
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($blog as $post )

                <tr>
                    <td>{{$blog->title}}</td>
                    <td>{{ Str::limit($blog->content, 30) }}</td>
                    <td><img src="/blogimage/{{$blog->image}}"  class="image-preview"></td>
                    <td><span class="status status-published">{{$blog->status}}</span></td>
                    <td>
                        <a href="{{route('user.edit',$blog->id)}}" class="btn btn-edit " onclick="get">Edit</a>
                        <a href="{{route('DeleteBlog',$blog->id)}}" class="btn btn-delete " onclick="return confirm('Are You Sure to delete this ?')">delete</a>
                    </td>
                </tr>

                @endforeach


            </tbody>
        </table>
        <div class="add-post">
            <a href="{{route('account.dashboard')}}" class="btn btn-add ">Back to Dashboard</a>
        </div>
    </div>
</body>
</html>
