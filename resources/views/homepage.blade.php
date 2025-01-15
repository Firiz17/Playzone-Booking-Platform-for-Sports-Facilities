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
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .sidebar h1 img {
            width: 40px;
            height: 40px;
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

        .sidebar nav ul li.auth-links {
            margin-top: 50px;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.3);
        }

        .sidebar nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
        }

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

        h1, h2 {
            text-align: center;
            color: rgb(255, 255, 255);
            font-family: 'Playfair Display', serif;
            font-size: 30px;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .features {
            display: flex;
            justify-content: space-around;
            margin: 40px 0;
        }

        .feature-card {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 50px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 250px;
            text-align: center;
        }

        .feature-card img {
            width: 150px;
            height: 150px;
            margin-bottom: 15px;
            object-fit: cover;
        }

        .feature-card h3 {
            margin-bottom: 15px;
            font-size: 20px;
            color: #2E7D32;
        }

        .feature-card p {
            color: #333;
            font-size: 14px;
        }

        .cta-section {
            text-align: center;
            margin: 50px 0;
        }

        .cta-button {
            background-color: #2E7D32;
            color: white;
            padding: 15px 30px;
            font-size: 18px;
            text-decoration: none;
            border-radius: 6px;
            transition: background-color 0.3s ease;
        }

        .cta-button:hover {
            background-color: #1B5E20;
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
    </style>
</head>
@extends('layouts.layout');
@section('content')
<body>
    <main class="main-content">


        <div class="container">
            <h1>Welcome to Playzone</h1>


            <div class="features">
                <div class="feature-card">
                    <img src="{{ asset('images/court.jpg') }}" alt="Booking Icon">
                    <h3>Easy Booking</h3>
                    <p>Check real-time availability and book your facilities in just a few clicks.</p>
                </div>
                <div class="feature-card">
                    <img src="{{ asset('images/event5.jpg') }}" alt="Event Icon">
                    <h3>Upcoming Event</h3>
                    <p>Scroll through upcoming events featuring various types of sports.</p>
                </div>
                <div class="feature-card">
                    <img src="{{ asset('images/ratings.jpg') }}" alt="Review Icon">
                    <h3>Reviews & Ratings</h3>
                    <p>Leave and view ratings to help you make informed booking decisions.</p>
                </div>
            </div>

            <div class="cta-section">
                <h2>Ready to Book?</h2>
                <a href="#" class="cta-button">Book a Facility</a>
            </div>
        </div>
    </main>
@endsection
</body>
</html>
