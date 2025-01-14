@vite(['resources/css/app.css', 'resources/js/app.js'])


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Playzone')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="{{ asset('css/football-theme.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <style>
        :root {
    --field-green: #2e5108;
    --field-lines: #ffffff;
    --sideline-brown: #8b4513;
    --accent-gold: #ffd700;
    --yard-line-gray: #dedede;
    --shadow-dark: rgba(0, 0, 0, 0.2);
}

/* Global Styles */
body {
    background: linear-gradient(45deg, var(--field-green), #1a3006);
    color: var(--field-lines);
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    min-height: 100vh;
}

.container {
    width: 100%;
    max-width: 1400px;
    margin: 0 auto;
    padding: 20px;
    box-sizing: border-box;
}

/* Header Styles */
.header-container {
    background-color: var(--field-green);
    width: 100%;
    padding: 20px;
    margin-bottom: 30px;
}

h1 {
    text-align: center;
    color: var(--accent-gold);
    text-transform: uppercase;
    letter-spacing: 2px;
    text-shadow: 2px 2px var(--shadow-dark);
    margin: 0;
    padding: 20px 0;
}

/* Card Styles */
.facility-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    padding: 20px;
    width: 100%;
    max-width: 1400px;
    margin: 0 auto;
}

.facility-card {
    background: linear-gradient(to bottom, var(--sideline-brown), #613109);
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 4px 8px var(--shadow-dark);
    position: relative;
    overflow: hidden;
    height: 100%;
}

.facility-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 50%;
    width: 2px;
    height: 100%;
    background: var(--yard-line-gray);
    opacity: 0.3;
}

/* Form Styles */
.form-group {
    margin-bottom: 20px;
    position: relative;
    width: 100%;
}

.form-control {
    width: 100%;
    padding: 12px;
    border: 2px solid var(--field-lines);
    background: rgba(255, 255, 255, 0.1);
    border-radius: 5px;
    color: var(--field-lines);
    transition: all 0.3s ease;
    box-sizing: border-box;
}

.form-control:focus {
    outline: none;
    border-color: var(--accent-gold);
    box-shadow: 0 0 5px var(--accent-gold);
}

/* Add New Facility Button */
.add-facility-button {
    display: flex;
    justify-content: flex-end;
    padding: 20px;
    max-width: 1400px;
    margin: 0 auto;
}

.btn {
    display: inline-block;
    padding: 12px 24px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    text-transform: uppercase;
    font-weight: bold;
    transition: all 0.3s ease;
}

.btn-primary {
    background-color: var(--accent-gold);
    color: var(--field-green);
}

.btn-danger {
    background-color: #dc3545;
    color: white;
}

.btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 8px var(--shadow-dark);
}

/* Action Buttons Container */
.action-buttons {
    display: flex;
    gap: 10px;
    margin-top: 15px;
    width: 100%;
}

/* Facility Info Styles */
.facility-info {
    margin-bottom: 15px;
}

.facility-info label {
    color: var(--accent-gold);
    display: block;
    margin-bottom: 5px;
}

.facility-value {
    color: var(--field-lines);
    font-size: 1.1em;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .facility-grid {
        grid-template-columns: 1fr;
        padding: 10px;
    }

    .container {
        padding: 10px;
    }
}
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Playzone</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            {{-- <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('facilities.index') }}">Facilities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('facilities.create') }}">Add Facility</a>
                    </li>
                </ul>
            </div> --}}
        </div>
    </nav>

    <main class="container mt-4">
        @yield('content')
    </main>

    <footer class="text-center mt-4">
        <p>&copy; {{ date('Y') }} Playzone. All rights reserved.</p>
    </footer>
</body>
</html>
