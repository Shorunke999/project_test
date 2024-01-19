<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Your App Title')</title>
</head>
<body>
    <header>
    </header>

    <main>
        <div>
            @yield('content')
        </div>

        <div class="col-md-3">
            @auth
                @if(auth()->user()->profile_pics)
                    <img src="{{ asset('storage/' . auth()->user()->profile_pics) }}" alt="Profile Picture" class="img-fluid">
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
