<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playzone - Book Your Sports Facility</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link href="css/layout.css" rel="stylesheet">

</head>
<body>
    <main class="main-content">
        <aside class="sidebar">
            <h1>
                PlayZone
            </h1>
            <nav>
                <ul>
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Facility</a></li>
                    {{-- <li><a href="#">Events</a></li>
                    <li><a href="{{route('facilities.index')}}">Facility</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href={{route('review.customerComment')}}>Comment</a></li>
                    <li class="auth-links"><a href="#">Login</a></li>
                    <li><a href="#">Register</a></li> --}}
                </ul>
            </nav>
        </aside>

       @yield('content');

    <footer class="footer">
        <p>&copy; 2025 PlayZone. All Rights Reserved.</p>
        <p><a href="#">Terms & Conditions</a> | <a href="#">Privacy Policy</a></p>
    </footer>
</body>
</html>
