<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlayZone</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <h1>PlayZone</h1>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Events</a></li>
                </ul>
            </nav>
        </aside>
        <main class="main-content">
            <div class="filters">
                <select name="sport-category">
                    <option>Select Sports</option>
                </select>
                <select name="date">
                    <option>Select Date</option>
                </select>
                <select name="city">
                    <option>Select City</option>
                </select>
                <input type="text" placeholder="Search complex">
            </div>
            <div class="event-cards">
                <div class="card">
                    <img src="images/event1.jpg" alt="Event 1">
                    <div class="details">
                        <p><strong>Date:</strong> 15th January 2024</p>
                        <p><strong>Time:</strong> 4:00 PM - 9:00 PM</p>
                        <p><strong>Location:</strong> IIUM Main Field</p>
                        <p><strong>Prizes:</strong> RM 1,000 + Trophy + Medals</p>
                        <p><strong>Slots Available:</strong> 8/12 Teams</p>
                        <button>JOIN NOW</button>
                    </div>
                </div>
                <!-- Add more event cards similarly -->
            </div>
        </main>
    </div>
</body>
</html>
