<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playzone - Book Your Sports Facility</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">

    <style>
        body {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    height: 100vh;
    display: flex;
    flex-direction: column;
}

.main-content {
    display: flex;
    flex: 1;
    height: 100vh;
    overflow: hidden;
}

.sidebar {
    background-color: #2E7D32;
    color: white;
    width: 20%;
    padding: 20px;
    height: 100vh; /* Ensures the sidebar fills the height */
    position: fixed; /* Makes the sidebar stick */
    left: 0;
    top: 0;
    overflow-y: auto; /* Enables scrolling for long content */
}

.container {
    flex: 1;
    margin: 100px auto;
    padding: 20px;
    background-color: rgba(227, 255, 210, 0.85);
    border-radius: 30px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    backdrop-filter: blur(8px);
    max-width: 1200px;
    margin-left: 22%; /* Adjusted to prevent overlap with sidebar */
}

    </style>
</head>
<body>
    <main class="main-content">
        <aside class="sidebar">
            <h1>
                PlayZone
            </h1>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Bookings</a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">Facility Management</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href={{route('review.customerComment')}}>Comment</a></li>
                    <li class="auth-links"><a href="#">Login</a></li>
                    <li><a href="#">Register</a></li>
                </ul>
            </nav>
        </aside>

       @yield('content');

    {{-- <footer class="footer">
        <p>&copy; 2025 PlayZone. All Rights Reserved.</p>
        <p><a href="#">Terms & Conditions</a> | <a href="#">Privacy Policy</a></p>
    </footer> --}}
</body>
</html>
