<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Your App Title')</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0; 
            background-color: #f4f4f4; 
        }

        header, footer {
            background-color: cadetblue; 
            color: #805656; 
            padding: 10px;
            text-align: center;
            width: 100%; 
        }

        main {
            flex: 1; 
            display: flex;
            align-items: center; 
            justify-content: center;
        }

        .form-container {
            width: 400px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            box-sizing: border-box; 
        }

        .form-container div {
            margin-bottom: 15px;
        }


        .form-container label {
            display: block;
            margin-bottom: 5px;
            text-align: left;
        }


        .form-container input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 3px;
        }

        .profile-pic {
            width: 100%;
            max-width: 200px;
            height: auto;
        }

        .top-right {
            position: absolute;
            top: 10px;
            right: 10px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Your App</h1>
        <div class="top-right">
            @auth
                @if(auth()->user()->profile_pics)
                    <img src="{{ asset('storage/' . auth()->user()->profile_pics) }}" alt="Profile Picture" class="profile-pic">
                @else
                    @include('layouts.profilePics')
                @endif
            @endauth
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2024 Your App</p>
    </footer>
</body>
</html>
