<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <title>Profile</title>
    <style>
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }
        #profile-picture {
            max-width: 200px;
            border-radius: 50%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        .info {
            font-size: 18px;
            line-height: 1.5;
            margin-bottom: 20px;
        }
        #edit-link {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }
        #edit-link:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Profile</h1>
        <p class="info"><strong>Name:</strong> {{ auth()->user()->name }}</p>


            <p class="info"><strong>Bio:</strong> </p>
            <p class="info"><strong>Location:</strong> </p>

                <img id="profile-picture" src="">


        <p><a id="edit-link" href="{{ route('user.edit') }}">Edit Profile</a></p>
        <p><a id="edit-link" href="{{ route('account.dashboard') }}">Dashboard</a></p>
    </div>
</body>
</html>
