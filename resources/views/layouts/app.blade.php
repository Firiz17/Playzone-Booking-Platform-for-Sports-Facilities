<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Playzone')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        :root {
            --field-green: #2e5108;
            --field-lines: #ffffff;
            --sideline-brown: #8b4513;
            --accent-gold: #ffd700;
            --yard-line-gray: #dedede;
            --shadow-dark: rgba(0, 0, 0, 0.2);
        }

        /* Global Styles */
        body {
            background: linear-gradient(45deg, var(--field-green), #1a3006);
            color: var(--field-lines);
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Sidebar */
      /* Sidebar */
      .sidebar {
    position: fixed;
    left: 0;
    top: 0;
    width: 256px;  /* Exactly 16rem/256px like in the image */
    height: 100vh;
    background-color: #15803d;  /* Adjusted to match the green in the image */
    padding: 1.5rem;
    z-index: 1000;
    display: flex;
    flex-direction: column;
}

.logo {
    color: white;
    font-size: 2rem;  /* Larger font size to match */
    font-weight: bold;
    margin-bottom: 2rem;
    padding-left: 0.5rem;
}

.nav-menu {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-direction: column;
    gap: 1rem;  /* Slightly tighter spacing */
}

.nav-menu li {
    margin: 0;
}

.nav-menu a {
    color: white;
    text-decoration: none;
    display: block;
    padding: 0.5rem 0.75rem;  /* More padding on left/right */
    border-radius: 0.375rem;
    transition: all 0.2s;
    font-size: 1rem;  /* Adjusted font size */
}

.nav-menu a:hover {
    background-color: #16a34a;  /* Lighter green on hover */
}

/* Auth links at bottom */
.auth-links {
    margin-top: auto;  /* Push to bottom */
    list-style: none;
    padding: 0;
    display: flex;
    flex-direction: column;
    gap: 1rem;
    padding-top: 1rem;  /* Added space from main nav */
}

.auth-links a {
    color: white;
    text-decoration: none;
    display: block;
    padding: 0.5rem 0.75rem;
    border-radius: 0.375rem;
    transition: all 0.2s;
    font-size: 1rem;
}

.auth-links a:hover {
    background-color: #16a34a;
}

        /* Main Content Area */
        .main-content {
            margin-left: 256px;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        /* Banner Image */
        .banner-image {
            width: 100%;
            height: 200px;
            background-image: url('/images/ftaklang.jpg');
            background-size: cover;
            background-position: center;
            position: relative;
        }

        /* Content Container */
        .container {
            width: 100%;
            max-width: 1400px;
            margin: 0 auto;
            padding: 20px;
            box-sizing: border-box;
            flex: 1;
        }

        /* Content Area with Green Background */
        .content-area {
            background-color: rgba(46, 81, 8, 0.9);
            border-radius: 10px;
            padding: 20px;
            margin-top: -50px;
            position: relative;
            z-index: 2;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        /* Footer */
        .footer {
            background: #1a3006;
            padding: 30px 0;
            margin-top: auto;
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
        }

        .footer-content {
            margin-left: 200px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 40px;
        }

        .footer-links {
            display: flex;
            gap: 20px;
        }

        .footer-links a {
            color: var(--field-lines);
            text-decoration: none;
            transition: color 0.2s;
        }

        .footer-links a:hover {
            color: var(--accent-gold);
        }

        .copyright {
            color: var(--field-lines);
            font-size: 0.9em;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .sidebar {
                width: 60px;
                padding: 10px;
            }

            .logo {
                font-size: 18px;
                margin-bottom: 20px;
            }

            .main-content {
                margin-left: 60px;
            }

            .footer-content {
                margin-left: 60px;
                flex-direction: column;
                gap: 20px;
                text-align: center;
            }

            .footer-links {
                flex-direction: column;
                gap: 10px;
            }
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="logo">PlayZone</div>
        <ul class="nav-menu">
            <li><a href="{{ route('homepage') }}">Home</a></li>
            <li><a href="">Bookings</a></li>
            <li><a href="">Events</a></li>
            <li><a href="{{ route('facilities.show') }}">Facility Management</a></li>
            <li><a href="">Contact Us</a></li>
        </ul>
        <ul class="auth-links">
            <li><a href="">Login</a></li>
            <li><a href="">Register</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Banner Image -->
        <div class="banner-image"></div>

        <!-- Main Container -->
        <div class="container">
            <div class="content-area">
                @yield('content')
            </div>
        </div>

        <!-- Footer -->
        <footer class="footer">
            <div class="footer-content">
                <div class="footer-links">
                    <a href="#">About Us</a>
                    <a href="#">Contact</a>
                    <a href="#">Terms of Service</a>
                    <a href="#">Privacy Policy</a>
                </div>
                <div class="copyright">
                    &copy; {{ date('Y') }} PlayZone. All rights reserved.
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
