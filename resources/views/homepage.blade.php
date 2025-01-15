@extends('layouts.layout')
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
{{-- </body>
</html> --}}
