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
            background-image: url('images/field.jpg');
            background-size: cover;
            background-position: 80% center;
            background-attachment: fixed;
        }

        .main-content {
            display: flex;
            width: 100%;
        }

        .sidebar {
            background-color: #2E7D32;
            color: white;
            width: 20%;
            padding: 20px;
            min-height: 100vh;
        }

        .sidebar h1 {
            margin: 0 0 100px;
            font-size: 24px;
            text-align: center;
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            color: white;
        }

        .sidebar nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .sidebar nav ul li {
            margin-bottom: 20px;
            text-align: center;
        }

        .sidebar nav ul li a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.2s;
        }

        .nav-menu a:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        /* Main Content Area */
        .main-content {
            margin-left: 200px;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        /* Banner Image */
        .banner-image {
            width: 100%;
            height: 200px;
            background-image: url('/images/court2.jpg');
            background-size: cover;
            background-position: center;
            position: relative;
        }

        /* Content Container */
        .container {
            flex: 1;
            margin: 100px auto;
            padding: 10px;
            background-color: rgba(227, 255, 210, 0.85);
            border-radius: 900px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(8px);
            max-width: 1200px;
        }

        .footer {
            background-color: #2E7D32;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .footer a {
            color: white;
            text-decoration: none;
            font-size: 16px;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        .nav-separator {
            height: 1px;
            background-color: rgba(255, 255, 255, 0.2);
            margin: 30px 20px;
        }

        .auth-item {
            margin-top: 10px;
        }

        .auth-item a {
            color: #ffd700;
            transition: color 0.3s ease;
        }

        .auth-item a:hover {
            color: white;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="logo">PlayZone</div>
        <ul class="nav-menu">
            <li><a href="{{ route('homepage') }}">Home</a></li>
            <li><a href="{{ route('facilities.index') }}">Facilities</a></li>
            <li><a href="#">Settings</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Banner Image -->
        <div class="banner-image"></div>

        <div class="container">
            @yield('content')
        </div>
    </main>

    <footer class="footer">
        <p>&copy; {{ date('Y') }} PlayZone. All rights reserved.</p>
        <p>
            <a href="#">Terms & Conditions</a> | 
            <a href="#">Privacy Policy</a>
        </p>
    </footer>
</body>
</html>
