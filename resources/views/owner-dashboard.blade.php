<!-- resources/views/dashboard.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #a8d5a4;
            margin-left: 220px; /* Adjust space for left sidebar */
        }

        .sidebar {
            background-color: #3e7324;
            height: 100vh;
            width: 200px;
            position: fixed;
            left: 0;
            top: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 30px;
        }

        .sidebar-brand, .nav-link {
            color: white !important;
            margin-bottom: 15px;
            text-decoration: none;
            text-align: center;
        }

        .container-main {
            padding: 40px 20px;
            text-align: center;
        }

        .image-container img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .image-title {
            margin-top: 15px;
            font-size: 1.5em;
            font-weight: bold;
        }

        .stats-box {
            background-color: #e0e0e0;
            padding: 20px;
            border-radius: 10px;
            font-size: 1.2em;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

    <!-- Left Sidebar -->
    <nav class="sidebar">
        <a class="sidebar-brand" href="#">Playzone</a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Settings</a>
            </li>
        </ul>
    </nav>

    <!-- Main Content -->
    <div class="container-main">
        <div class="row">
            <div class="col-12">
                <div class="image-container">
                    <img src="img/badminton.jpg" alt="Badminton Court">
                </div>
                <div class="image-title">IOI BADMINTON COURT</div>
            </div>
        </div>

        <div class="row text-center mt-4">
            <div class="col-md-4">
                <div class="stats-box">
                    <div>TOTAL BOOKINGS</div>
                    <div>100 TIMES</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stats-box">
                    <div>MONTHLY REVENUE</div>
                    <div>RM1,789.50</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stats-box">
                    <div>REVIEWS</div>
                    <div>4 / 5</div>
                    <div>⭐⭐⭐⭐☆</div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

