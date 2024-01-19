<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Your App Title')</title>
    <!-- Add your common styles, scripts, or meta tags here -->
</head>
<body>
    <header>
        <!-- Your header content goes here -->
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Your footer content goes here -->
        <p>&copy; 2024 Your App</p>
    </footer>
</body>
</html>
