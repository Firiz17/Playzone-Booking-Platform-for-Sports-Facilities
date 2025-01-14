<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlayZone</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .container {
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
            margin: 0 0 20px;
            font-size: 24px;
            text-align: center;
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
            font-size: 18px;
        }

        .main-content {
            width: 80%;
            padding: 20px;
            background-color: #f5f5f5;
        }

        .filters {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
            justify-content: center;
        }

        .filters select, .filters input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .event-cards {
            display: flex;
            gap: 20px;
            justify-content: center;
        }

        .card {
            background-color: white;
            border: 1px solid #ccc;
            border-radius: 10px;
            width: 30%;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .card img {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }

        .card .details {
            padding: 15px;
            text-align: center;
        }

        .card .details p {
            margin: 10px 0;
            font-size: 14px;
            color: #333;
        }

        .card .details button {
            background-color: #2E7D32;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .card .details button:hover {
            background-color: #1B5E20;
        }

        .filters select {
            background-color: #2E7D32;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
            outline: none;
        }

        .filters select:hover {
            background-color: rgb(199, 255, 170);
        }

        .filters select:focus {
            outline: 2px solid rgb(255, 255, 255);
        }

        .filters select:not(:last-child) {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <h1>PlayZone</h1>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Bookings</a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </nav>
        </aside>
        <main class="main-content">
            <div class="filters">
                <select>
                    <option disabled selected>Select Sports</option>
                    <option value="football">Football</option>
                    <option value="basketball">Basketball</option>
                    <option value="badminton">Badminton</option>
                    <option value="volleyball">Volleyball</option>
                    <option value="tennis">Tennis</option>
                </select>
                <select>
                    <option>Select Month</option>
                    <option value="01">January</option>
                    <option value="02">February</option>
                    <option value="03">March</option>
                    <option value="04">April</option>
                    <option value="05">May</option>
                    <option value="06">June</option>
                    <option value="07">July</option>
                    <option value="08">August</option>
                    <option value="09">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
                <select>
                    <option>Select City</option>
                    <option value="gombak">Gombak</option>
                    <option value="kuala-lumpur">Kuala Lumpur</option>
                    <option value="shah-alam">Wangsa Maju</option>
                    <option value="penang">Setapak</option>
                    <option value="johor">Batu Caves</option>
                </select>
                <input type="text" placeholder="Search complex">
            </div>
            <div class="event-cards">
                <div class="card">
                    <img src="images/event1.jpg" alt="event 1">
                    <div class="details">
                        <p><strong>Date:</strong> 15th January 2025</p>
                        <p><strong>Time:</strong> 4:00 PM - 9:00 PM</p>
                        <p><strong>Location:</strong> IIUM Main Field</p>
                        <p><strong>Prizes:</strong> RM 1,000 + Trophy + Medals</p>
                        <p><strong>Participant Slots Available:</strong> 8/12 Players</p>
                        <a href="{{ route('joinevent') }}">
                            <button>JOIN NOW</button>
                        </a>
                    </div>
                </div>
                <div class="card">
                    <img src="images/event2.jpg" alt="Event 2">
                    <div class="details">
                        <p><strong>Date:</strong> 10th February 2025</p>
                        <p><strong>Time:</strong> 8:00 AM - 5:00 PM</p>
                        <p><strong>Location:</strong> University Malaya Field</p>
                        <p><strong>Prizes:</strong> Medals + RM 2,000 Cash Prizes</p>
                        <p><strong>Participant Slots Available:</strong> 15/20 Players</p>
                        <a href="{{ route('joinevent') }}">
                            <button>JOIN NOW</button>
                        </a>
                    </div>
                </div>
                <div class="card">
                    <img src="images/event3.jpg" alt="Event 3">
                    <div class="details">
                        <p><strong>Date:</strong> 20th March 2025</p>
                        <p><strong>Time:</strong> 10:00 AM - 4:00 PM</p>
                        <p><strong>Location:</strong> City Sports Complex</p>
                        <p><strong>Prizes:</strong> RM 500 + Trophies</p>
                        <p><strong>Participant Slots Available:</strong> 20/32 Players</p>
                        <a href="{{ route('joinevent') }}">
                            <button>JOIN NOW</button>
                        </a>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>

