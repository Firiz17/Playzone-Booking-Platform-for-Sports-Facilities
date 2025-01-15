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
        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            width: 200px;
            height: 100vh;
            background-color: #245024;
            padding: 20px;
            z-index: 1000;
        }

        .logo {
            color: white;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 40px;
        }

        .nav-menu {
            list-style: none;
            padding: 0;
        }

        .nav-menu li {
            margin-bottom: 15px;
        }

        .nav-menu a {
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
            <li><a href="{{ route('facilities.show') }}">Facilities</a></li>
            <li><a href="#">Settings</a></li>
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
