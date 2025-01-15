<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <style>
        :root {
            --primary-green: #4CAF50;
            --light-green: #E8F5E9;
            --dark-green: #2E7D32;
            --white: #ffffff;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, var(--primary-green), var(--light-green));
            min-height: 100vh;
        }

        .container {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 250px;
            background-color: var(--dark-green);
            padding: 20px;
        }

        .sidebar-link {
            display: block;
            color: var(--white);
            text-decoration: none;
            padding: 12px 20px;
            margin-bottom: 10px;
            border-radius: 8px;
            transition: background-color 0.3s;
        }

        .sidebar-link:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .main-content {
            flex: 1;
            padding: 40px;
        }

        .payment-card {
            background-color: var(--white);
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
        }

        h1 {
            color: var(--dark-green);
            margin-bottom: 30px;
            font-size: 2em;
        }

        h2 {
            color: var(--dark-green);
            margin-bottom: 20px;
            font-size: 1.5em;
        }

        .booking-details {
            margin-bottom: 30px;
        }

        .detail-row {
            display: flex;
            margin-bottom: 15px;
            padding: 10px;
            background-color: var(--light-green);
            border-radius: 6px;
        }

        .detail-label {
            font-weight: bold;
            width: 120px;
            color: var(--dark-green);
        }

        .detail-value {
            flex: 1;
        }

        .total-price {
            font-size: 1.2em;
            font-weight: bold;
            padding: 15px;
            margin: 20px 0;
            background-color: var(--light-green);
            border-radius: 6px;
            color: var(--dark-green);
        }

        button {
            background-color: var(--primary-green);
            color: white;
            padding: 14px 28px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
            width: 100%;
        }

        button:hover {
            background-color: var(--dark-green);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <a href="#" class="sidebar-link">Home</a>
            <a href="#" class="sidebar-link">Bookings</a>
            <a href="#" class="sidebar-link">Dashboard</a>
        </div>

        <div class="main-content">
            <div class="payment-card">
                <h1>Payment Page</h1>

                <h2>Booking Details</h2>
                <div class="booking-details">
                    <div class="detail-row">
                        <span class="detail-label">Facility:</span>
                        <span class="detail-value">{{ $booking->facility->name }}</span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Location:</span>
                        <span class="detail-value">{{ $booking->facility->location }}</span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Start Time:</span>
                        <span class="detail-value">{{ $booking->start_time }}</span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">End Time:</span>
                        <span class="detail-value">{{ $booking->end_time }}</span>
                    </div>
                </div>

                <div class="total-price">
                    Total Price: ${{ $booking->facility->pricing }}
                </div>

                <form action="{{ route('payments.process', ['booking' => $booking->id]) }}" method="POST">
                    @csrf
                    <button type="submit">Pay Now</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
