<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join Event</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
   
   <style>
    body {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    background-image: url('images/field.jpg');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
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

.container {
    width: 50%; /* Reduced width to make the container smaller */
    margin: 30px auto; /* Reduced margin to move the form upwards */
    padding: 20px; /* Reduced padding to make the form smaller */
    background-color: rgba(227, 255, 210, 0.85); /* Lightened semi-transparent background */
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    backdrop-filter: blur(8px); /* Adding blur effect behind the container */
}

h1 {
    text-align: center;
    color:rgb(255, 255, 255);
    font-family: 'Playfair Display', serif;
    font-size: 30px; 
    margin-bottom: 20px;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Adding shadow for contrast */
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-bottom: 8px;
    font-weight: 600;
    color: #2E7D32;
    font-size: 16px; /* Smaller label font size */
}

input, select, button {
    margin-bottom: 15px; /* Reduced space between inputs */
    padding: 10px; /* Reduced padding */
    border: 1px solid #ccc;
    border-radius: 6px;
    font-size: 14px; /* Smaller font size */
    transition: all 0.3s ease;
}

input:focus, select:focus {
    outline: none;
    border: 1px solid #2E7D32;
    box-shadow: 0 0 5px rgba(46, 125, 50, 0.7);
}

button {
    background-color: #2E7D32;
    color: white;
    border: none;
    cursor: pointer;
    font-size: 16px; /* Smaller button font size */
    padding: 12px; /* Smaller button padding */
    border-radius: 6px;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #1B5E20;
}


.success-message {
    color: #2E7D32;
    text-align: center;
    margin-top: 20px;
    font-size: 16px; 
    font-weight: 600;
}

.main-content {
            display: flex;
            width: 100%;
        }
</style>
</head>
<body>
<main class="main-content">
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
    <div class="container">
    
        <h1>Join Event</h1>
        <form action="/submit-event-registration" method="POST">
            @csrf <!-- Laravel CSRF token for form security -->
            
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your full name" required>
            
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
            
            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
            
            <label for="team">Team Name</label>
            <input type="text" id="team" name="team" placeholder="Enter your team name (optional)">
            
            <label for="event">Select Event</label>
            <select id="event" name="event" required>
                <option value="" disabled selected>Select an event</option>
                <option value="football">Football</option>
                <option value="basketball">Basketball</option>
                <option value="badminton">Badminton</option>
                <option value="volleyball">Volleyball</option>
                <option value="tennis">Tennis</option>
            </select>

            <button type="submit">SUBMIT</button>
        </form>
        
        @if (session('success'))
        <div class="success-message">
            {{ session('success') }}
        </div>
        @endif
    </div>
    </main>
</body>
</html>
