<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <title>Edit Profile</title>
    <style>
        .form-container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f8f8f8;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-title {
            text-align: center;
            margin-bottom: 20px;
        }
        #profile-picture {
            max-width: 200px;
            display: block;
            margin: 0 auto 20px;
            border-radius: 50%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        textarea,
        input[type="text"],
        input[type="file"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 20px;
        }
        button[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1 class="form-title">Edit Profile</h1>

            <img id="profile-picture" src="" alt="Profile Picture">

        <form action="" method="POST" enctype="multipart/form-data">
            @csrf


            <label for="bio">Bio</label>
            <textarea name="bio" id="bio"></textarea>

            <label for="location">Location</label>
            <input type="text" name="location" id="location" value="">

            <label for="profile_picture">Profile Picture</label>
            <input type="file" name="profile_picture" id="profile_picture">

            <label for="current_password">Current Password</label>
            <input type="password" name="current_password" id="current_password">

            <label for="new_password">New Password</label>
            <input type="password" name="new_password" id="new_password">

            <label for="new_password_confirmation">Confirm New Password</label>
            <input type="password" name="new_password_confirmation" id="new_password_confirmation">

            <button type="submit">Save Changes</button>
        </form>
    </div>

    @if(session('success'))
        <div id="successMessage" class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var successMessage = document.getElementById('successMessage');
            if (successMessage) {
                setTimeout(function() {
                    successMessage.style.display = 'none';
                }, 5000); // 5 seconds
            }
        });
    </script>
</body>
</html>
