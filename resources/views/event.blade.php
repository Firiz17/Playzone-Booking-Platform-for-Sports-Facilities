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
        <!-- Sidebar -->
        <aside class="sidebar">
            <h1>PlayZone</h1>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Events</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <!-- Filters -->
            <div class="filters">
                <select>
                    <option>Select Sports</option>
                </select>
                <select>
                    <option>Select Date</option>
                </select>
                <select>
                    <option>Select City</option>
                </select>
                <input type="text" placeholder="Search complex">
            </div>

            <!-- Event Cards -->
            <div class="event-cards">
                <!-- Event Card 1 -->
                <div class="card">
                    <img src="images/event1.jpg" alt="Event 1">
                    <div class="details">
                        <p><strong>Date:</strong> 15th January 2024</p>
                        <p><strong>Time:</strong> 4:00 PM - 9:00 PM</p>
                        <p><strong>Location:</strong> IIUM Main Field</p>
                        <p><strong>Prizes:</strong> RM 1,000 + Trophy + Medals</p>
                        <p><strong>Participant Slots Available:</strong> 8/12 Teams</p>
                        <button>JOIN NOW</button>
                    </div>
                </div>
                <!-- Event Card 2 -->
                <div class="card">
                    <img src="images/event2.jpg" alt="Event 2">
                    <div class="details">
                        <p><strong>Date:</strong> 10th February 2024</p>
                        <p><strong>Time:</strong> 8:00 AM - 5:00 PM</p>
                        <p><strong>Location:</strong> University Malaya Field</p>
                        <p><strong>Prizes:</strong> Medals + RM 2,000 Cash Prizes</p>
                        <p><strong>Participant Slots Available:</strong> 15/20 Events</p>
                        <button>JOIN NOW</button>
                    </div>
                </div>
                <!-- Event Card 3 -->
                <div class="card">
                    <img src="images/event3.jpg" alt="Event 3">
                    <div class="details">
                        <p><strong>Date:</strong> 20th March 2024</p>
                        <p><strong>Time:</strong> 10:00 AM - 4:00 PM</p>
                        <p><strong>Location:</strong> City Sports Complex</p>
                        <p><strong>Prizes:</strong> RM 500 + Trophies</p>
                        <p><strong>Participant Slots Available:</strong> 20/32 Players</p>
                        <button>JOIN NOW</button>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
