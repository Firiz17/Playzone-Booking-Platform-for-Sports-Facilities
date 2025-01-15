<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book a Facility</title>
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

        .booking-form {
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

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: bold;
        }

        select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 16px;
            margin-bottom: 20px;
        }

        select:focus {
            outline: none;
            border-color: var(--primary-green);
            box-shadow: 0 0 0 2px rgba(76, 175, 80, 0.2);
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
            <div class="booking-form">
                <h1>Book a Facility</h1>
                <form action="{{ route('bookings.store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="facility">Facility:</label>
                        <select name="facility" id="facility">
                            <option value="">Select a facility</option>
                            <option value="1">IOI Badminton Court</option>
                            <option value="2">Basketball Court</option>
                            <option value="3">Turf Field</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="start_time">Start Time:</label>
                        <select name="start_time" id="start_time" required>
                            <option value="">Select a start time</option>
                            @foreach($timeSlots as $time)
                                <option value="{{ $time }}">{{ $time }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="end_time">End Time:</label>
                        <select name="end_time" id="end_time" required>
                            <option value="">Select an end time</option>
                            @foreach($timeSlots as $time)
                                <option value="{{ $time }}">{{ $time }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <button type="submit">Book Facility</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
