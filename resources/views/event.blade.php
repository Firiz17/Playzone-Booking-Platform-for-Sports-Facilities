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
            width: 250px;
            background-color: #2E7D32;
            color: white;
            padding: 20px;
            min-height: 100vh;
        }

        .sidebar h1 {
            text-align: center;
            margin-bottom: 50px;
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            color: white;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li {
            margin-bottom: 20px;
            text-align: center;
        }

        .sidebar ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            transition: color 0.3s ease;
        }

        .nav-separator {
            height: 1px;
            background-color: rgba(255, 255, 255, 0.2);
            margin: 30px 20px;
        }

        .auth-item a {
            color: #ffd700;
            transition: color 0.3s ease;
        }

        .auth-item a:hover {
            color: white;
        }

        .main-content {
            width: 80%;
            padding: 20px;
            background-color:rgb(203, 203, 203);
        }

        .filters {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
            justify-content: center;
        }

        .filters select, .filters input, .filters button {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .event-cards {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
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

        .filters button {
            background-color: #2E7D32;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .filters button:hover {
            background-color: #1B5E20;
        }

        .join-now-button {
            display: inline-block;
            background-color: #2E7D32;
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 5px;
            font-size: 16px;
            text-align: center;
            cursor: pointer;
        }

        .join-now-button:hover {
            background-color: #1B5E20;
        }
    </style>
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <h1>PlayZone</h1>
            <nav>
                <ul>
                    <li><a href="{{ route('homepage') }}">Home</a></li>
                    <li><a href="{{ route('event.show') }}">Events</a></li>
                    <li><a href="{{ route('facilities.show') }}">Facilities</a></li>
                    <li class="nav-separator"></li>
                    {{-- <li class="auth-item"><a href="{{ route('login.create') }}">Login</a></li> --}}

                </ul>
            </nav>
        </aside>
        <main class="main-content">
            <div class="filters">
                <select name="sports">
                    <option value="all" selected>All Sports</option>
                    <option value="football">Football</option>
                    <option value="basketball">Basketball</option>
                    <option value="badminton">Badminton</option>
                    <option value="volleyball">Volleyball</option>
                    <option value="tennis">Tennis</option>
                </select>
                <select name="month">
                    <option value="all">All Months</option>
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
                <select name="city">
                    <option value="all">All Cities</option>
                    <option value="gombak">Gombak</option>
                    <option value="kuala-lumpur">Kuala Lumpur</option>
                    <option value="shah-alam">Shah Alam</option>
                    <option value="penang">Penang</option>
                    <option value="johor">Johor</option>
                </select>
                <input type="text" id="complexSearch" placeholder="Search complex">
                <button id="searchButton">Search</button>
            </div>
            <div class="event-cards" id="event-cards">
                <!-- Event cards will be populated here -->
            </div>
        </main>
    </div>

    <script>
        const events = [
            {
                id: 1,
                sport: "football",
                date: "2025-01-15",
                city: "gombak",
                imgSrc: "images/event1.jpg",
                time: "4:00 PM - 9:00 PM",
                location: "IIUM Main Field",
                prizes: "RM 1,000 + Trophy + Medals",
                slotsAvailable: "8/12 Players"
            },
            {
                id: 2,
                sport: "volleyball",
                date: "2025-02-10",
                city: "kuala-lumpur",
                imgSrc: "images/event2.jpg",
                time: "8:00 AM - 5:00 PM",
                location: "University Malaya Field",
                prizes: "Medals + RM 2,000 Cash Prizes",
                slotsAvailable: "15/20 Players"
            },
            {
                id: 3,
                sport: "badminton",
                date: "2025-03-20",
                city: "shah-alam",
                imgSrc: "images/event3.jpg",
                time: "10:00 AM - 4:00 PM",
                location: "City Sports Complex",
                prizes: "RM 500 + Trophies",
                slotsAvailable: "20/32 Players"
            },
            {
                id: 4,
                sport: "volleyball",
                date: "2025-04-05",
                city: "penang",
                imgSrc: "images/event4.jpg",
                time: "9:00 AM - 1:00 PM",
                location: "Penang Sports Arena",
                prizes: "RM 600 + Medals",
                slotsAvailable: "6/8 Players"
            },
            {
                id: 5,
                sport: "tennis",
                date: "2025-05-10",
                city: "kuala-lumpur",
                imgSrc: "images/event5.jpg",
                time: "2:00 PM - 6:00 PM",
                location: "Kuala Lumpur Tennis Club",
                prizes: "RM 1,500 + Trophies",
                slotsAvailable: "4/6 Players"
            },
            {
                id: 6,
                sport: "football",
                date: "2025-06-12",
                city: "shah-alam",
                imgSrc: "images/event6.jpg",
                time: "4:00 PM - 9:00 PM",
                location: "Shah Alam Football Field",
                prizes: "RM 800 + Medals",
                slotsAvailable: "10/16 Players"
            },
            {
                id: 7,
                sport: "basketball",
                date: "2025-07-22",
                city: "johor",
                imgSrc: "images/event7.jpg",
                time: "8:00 AM - 4:00 PM",
                location: "Johor Basketball Stadium",
                prizes: "RM 1,000 + Trophies",
                slotsAvailable: "12/20 Players"
            },
            {
                id: 8,
                sport: "badminton",
                date: "2025-08-18",
                city: "gombak",
                imgSrc: "images/event8.jpg",
                time: "9:00 AM - 1:00 PM",
                location: "IIUM Sports Hall",
                prizes: "RM 500 + Medals",
                slotsAvailable: "10/16 Players"
            },
            {
                id: 9,
                sport: "volleyball",
                date: "2025-09-25",
                city: "penang",
                imgSrc: "images/event9.jpg",
                time: "10:00 AM - 3:00 PM",
                location: "Penang Beach Volleyball Court",
                prizes: "RM 1,000 + Trophies",
                slotsAvailable: "8/10 Players"
            },
        ];

        function filterEvents() {
            const sport = document.querySelector('select[name="sports"]').value;
            const month = document.querySelector('select[name="month"]').value;
            const city = document.querySelector('select[name="city"]').value;
            const searchQuery = document.getElementById('complexSearch').value.toLowerCase();

            const filteredEvents = events.filter(event => {
                const eventDate = new Date(event.date);
                const eventMonth = (eventDate.getMonth() + 1).toString().padStart(2, '0');

                return (sport === "all" || event.sport === sport) &&
                    (month === "all" || eventMonth === month) &&
                    (city === "all" || event.city === city) &&
                    (event.location.toLowerCase().includes(searchQuery));
            });

            displayEvents(filteredEvents);
        }

        function displayEvents(eventsToDisplay) {
            const eventCards = document.getElementById('event-cards');
            eventCards.innerHTML = "";

            if (eventsToDisplay.length === 0) {
                eventCards.innerHTML = "<p>No events found matching your criteria.</p>";
            }

            eventsToDisplay.forEach(event => {
                const eventCard = document.createElement('div');
                eventCard.classList.add('card');
                eventCard.innerHTML = `
                    <img src="${event.imgSrc}" alt="event">
                    <div class="details">
                        <p><strong>Date:</strong> ${event.date}</p>
                        <p><strong>Time:</strong> ${event.time}</p>
                        <p><strong>Location:</strong> ${event.location}</p>
                        <p><strong>Prizes:</strong> ${event.prizes}</p>
                        <p><strong>Participant Slots Available:</strong> ${event.slotsAvailable}</p>
                        <a href="/joinevent/${event.id}" class="join-now-button">JOIN NOW</a>
                    </div>
                `;
                eventCards.appendChild(eventCard);
            });
        }

        window.onload = function() {
            displayEvents(events);
        };

        document.getElementById('searchButton').addEventListener('click', filterEvents);
    </script>
</body>
</html>
