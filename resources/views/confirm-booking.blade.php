<!-- resources/views/booking-success.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Successful</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #a8d5a4;
            margin-left: 220px; /* Adjust margin for left sidebar */
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
            padding-top: 30px;
            text-align: center;
        }
        .sidebar a {
            color: white;
            padding: 10px;
            text-decoration: none;
            display: block;
            font-weight: bold;
        }
        .sidebar a:hover {
            background-color: #2d5720;
        }
        .container {
            text-align: center;
            margin-top: 50px;
        }
        .details {
            font-size: 1.2em;
            margin-top: 20px;
        }
        .details span {
            font-weight: bold;
        }
        .confirmation-message {
            margin-top: 20px;
            font-size: 1.1em;
            color: white;
            background-color: #3e7324;
            padding: 10px;
            border-radius: 5px;
            display: inline-block;
        }
    </style>
</head>
<body>

    <!-- Left Sidebar -->
    <div class="sidebar">
        <a href="#">PlayZone</a>
        <a href="#">Home</a>
        <a href="#">Settings</a>
    </div>

    <!-- Main Content -->
    <div class="container">
        <h1 class="display-4 fw-bold">BOOKING SUCCESSFUL!</h1>
        <img src="img/badminton.jpg" alt="Badminton Court" class="img-fluid" style="max-width: 100%; height: auto; margin-top: 20px;">

        <div class="details text-start mt-4">
            <p><span>NAME:</span> Azmi Akmal</p>
            <p><span>DATE & TIME:</span> 22/6/2024 8.00 p.m.</p>
            <p><span>PLACE:</span> IOI Badminton Court</p>
            <p><span>PRICE:</span> RM80</p>
        </div>

        <div class="confirmation-message">
            AN EMAIL OF YOUR BOOKING HAS BEEN SENT
        </div>
    </div>

</body>
</html>
