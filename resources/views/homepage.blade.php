@extends('layouts.app')

@section('title', 'PlayZone - Home')

@section('content')
    <h1 style="font-family: 'Playfair Display', serif; font-weight: 700; color: white; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);">Welcome to PlayZone</h1>

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
        <a href="{{ route('facilities.index') }}" class="cta-button">Book a Facility</a>
    </div>

    <style>
        .features {
            display: flex;
            justify-content: space-around;
            margin: 40px 0;
            flex-wrap: wrap;
            gap: 20px;
        }

        .feature-card {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 300px;
            text-align: center;
        }

        .feature-card img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .feature-card h3 {
            color: #2E7D32;
            margin-bottom: 10px;
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
            display: inline-block;
            background-color: #2E7D32;
            color: white;
            padding: 15px 30px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .cta-button:hover {
            background-color: #1B5E20;
        }

        h1 {
            text-align: center;
            margin-bottom: 40px;
            font-size: 2.5em;
        }

        h2 {
            color: #2E7D32;
            font-size: 2em;
        }
    </style>
@endsection
