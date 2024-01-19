<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Your App Title')</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
        }

        main {
            display: flex;
            justify-content: space-between;
            padding: 20px;
        }

        main > div {
            flex: 1;
            margin-right: 20px;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .profile-pic {
            width: 100%;
            max-width: 200px;
            height: auto;
        }
    </style>
</head>
<body>
    <header>
        <h1>Your App</h1>
    </header>

    <main>
        <div>
            @yield('content')
        </div>

        <div>
            @auth
                @if(auth()->user()->profile_pics)
                    <img src="{{ asset('storage/' . auth()->user()->profile_pics) }}" alt="Profile Picture" class="profile-pic">
                @else
                    @include('layouts.profilePics')
                @endif
            @endauth
        </div>
    </main>

    <footer>
        <p>&copy; 2024 Your App</p>
    </footer>
</body>
</html>
