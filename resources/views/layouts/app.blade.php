<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your App</title>
</head>
<body>
    @include('layouts.menu') <!-- Include the menu layout -->
    
    <div class="container">
        @yield('content') <!-- This is where the content of other views will be injected -->
    </div>
</body>
</html>