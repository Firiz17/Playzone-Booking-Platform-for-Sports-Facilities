{{-- <!DOCTYPE html>
<html>
<head>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
        }
        .navbar-custom {
            background: #a8e063;
            background: -webkit-linear-gradient(to right, #56ab2f, #a8e063);
            background: linear-gradient(to right, #56ab2f, #a8e063);
        }
        .navbar-brand, .nav-link {
            font-family: 'Roboto', sans-serif;
            color: black !important;
        }
        .gradient-custom {
            /* fallback for old browsers */
            background: #a8e063;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to bottom right, #56ab2f, #a8e063);

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to bottom right, #56ab2f, #a8e063);
            margin: 0;
            padding: 0;
        }
        .comment-box {
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .username {
            font-weight: bold;
            margin-bottom: 5px;
        }
        .comment {
            margin-left: 20px;
        }
        .reply {
            margin-left: 40px;
        }
        .bg-image {
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
<header>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-body navbar-custom">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">PlayZone</a>
      <button
        data-mdb-collapse-init
        class="navbar-toggler"
        type="button"
        data-mdb-target="#navbarExample01"
        aria-controls="navbarExample01"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarExample01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/event">Event</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->

  <!-- Background image -->
  <div
    class="p-5 text-center bg-image"
    style="
      background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/041.webp');
      height: 400px;
      margin: 0;
      padding: 0;
    "
  >
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white">
          <h1 class="mb-3">(Name of sports place)</h1>
          <h4 class="mb-3"> Rating={{$rating}}/5</h4>
          <br>
          <h4 class="mb-3"> Total Reviews={{$review}}</h4>
          <a data-mdb-ripple-init class="btn btn-outline-light btn-lg" href="#!" role="button"
          >Call to action</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Background image -->
</header>

    <section class="gradient-custom">
        <div class="container my-5 py-5">
            <div class="text-right mb-4">
                <!-- Button to redirect to create comment page -->
                <a href="{{ route('review.createCommentCust') }}" class="btn btn-primary">Add a Comment</a>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-12 col-lg-10 col-xl-8">
                    <div class="card">
                        <div class="card-body p-4">
                            <h4 class="text-center mb-4 pb-2">Comments and Ratings</h4>
                            @foreach ($comments as $comment)
                            <div class="row">
                                <div class="col">
                                    <div class="d-flex flex-start comment-box">
                                        <div class="flex-grow-1 flex-shrink-1">
                                            <div>
                                                <p class="mb-1">
                                                    {{ $comment->user->username }}
                                                    <span class="small">- {{ $comment->created_at }}</span>
                                                    <span class="small">- Rating {{ $comment->reviews }}</span>
                                                </p>
                                                <p class="small mb-0">{{ $comment->comments }}</p>
                                            </div>

                                            <!-- Display replies under the comment -->
                                            @foreach ($comment->replies as $reply)
                                                <div class="d-flex flex-start mt-4 reply">
                                                    <div class="flex-grow-1 flex-shrink-1">
                                                        <p class="mb-1">
                                                            {{ $reply->user->username }} (Owner)
                                                            <span class="small">- {{ $reply->created_at }}</span>
                                                        </p>
                                                        <p class="small mb-0">{{ $reply->comments }}</p>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrap.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Font Awesome JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
</body>
</html>
 --}}
 <!DOCTYPE html>
<html>
<head>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            background-color: #333;
            font-family: 'Poppins', sans-serif;
        }

        /* Sidebar styles */
        .sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #2E7D32;
            padding-top: 20px;
            z-index: 1000;
            display: flex;
            flex-direction: column;
        }

        .sidebar-brand {
            color: white;
            font-size: 32px;
            padding: 20px;
            margin-bottom: 50px;
            text-align: center;
            font-weight: 600;
        }

        .nav-menu {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .nav-item {
            padding: 12px 20px;
            color: white;
            display: block;
            text-decoration: none;
            transition: all 0.3s;
            font-size: 18px;
        }

        .nav-item:hover {
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
            text-decoration: none;
            transform: translateX(10px);
        }

        .auth-section {
            margin-top: auto;
            padding: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* Main content area */
        .main-content {
            margin-left: 250px;
            min-height: 100vh;
        }

        /* Header image section */
        .header-image {
            width: 100%;
            height: 300px;
            object-fit: cover;
            display: block;
        }

        .header-container {
            width: 100%;
            height: 300px;
            background-color: #444;
            margin-bottom: 20px;
            position: relative;
        }

        /* Button styles */
        .button-container {
            display: flex;
            gap: 15px;
            margin-bottom: 30px;
        }

        .add-comment-btn, .book-now-btn {
            background-color: #FFA500;
            color: black;
            border: none;
            padding: 8px 20px;
            border-radius: 20px;
            font-weight: 500;
            transition: background-color 0.3s;
            display: inline-block;
            font-size: 14px;
            text-decoration: none;
        }

        .book-now-btn {
            background-color: #4CAF50;
            color: white;
        }

        .add-comment-btn:hover {
            background-color: #FFB124;
            color: black;
            text-decoration: none;
        }

        .book-now-btn:hover {
            background-color: #45a049;
            color: white;
            text-decoration: none;
        }

        /* Rest of the styles remain the same */
        .main-container {
            background: rgba(0, 100, 0, 0.9);
            border-radius: 15px;
            padding: 30px;
            margin: 20px;
        }

        .title {
            color: white;
            font-size: 24px;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .inner-container {
            background: rgba(0, 80, 0, 0.8);
            border-radius: 10px;
            padding: 20px;
        }

        .comment-box {
            background-color: white;
            border-radius: 10px;
            padding: 15px 20px;
            margin-bottom: 20px;
            border: none;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .rating-stars {
            color: #ffd700;
            font-size: 18px;
        }

        .reply {
            margin-left: 40px;
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 10px 15px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <!-- Sidebar Navigation -->
    <div class="sidebar">
        <div class="sidebar-brand">PlayZone</div>
        <nav class="nav-menu">
            <a href="#" class="nav-item">Home</a>
            <a href="#" class="nav-item">Bookings</a>
            <a href="#" class="nav-item">Events</a>
            <a href="#" class="nav-item">Facility Management</a>
            <a href="#" class="nav-item">Contact Us</a>
        </nav>
        <div class="auth-section">
            <a href="#" class="nav-item">Login</a>
            <a href="#" class="nav-item">Register</a>
        </div>
    </div>

    <!-- Main Content Area -->
    <div class="main-content">
        <!-- Header Image Section -->
        <div class="header-container">
            <!-- Replace src with your actual image path -->
            <img src="your-image-path-here.jpg" alt="Header Image" class="header-image">
        </div>

        <!-- Comments Section -->
        <div class="main-container">
            <h1 class="title">COMMENT SECTION</h1>

            <div class="button-container">
                <a href="{{ route('review.createCommentCust') }}" class="add-comment-btn">
                    + Add New Comment
                </a>
                <a href="#" class="book-now-btn">
                    Book Now
                </a>
            </div>

            <div class="inner-container">
                @foreach ($comments as $comment)
                <div class="comment-box">
                    <div class="d-flex flex-start">
                        <div class="flex-grow-1 flex-shrink-1">
                            <div>
                                <p class="mb-1">
                                    {{ $comment->user->username }}
                                    <span class="small">- {{ $comment->created_at }}</span>
                                    <span class="rating-stars">
                                        @for ($i = 1; $i <= 5; $i++)
                                            <i class="fas fa-star {{ $i <= $comment->reviews ? 'active' : '' }}"></i>
                                        @endfor
                                    </span>
                                </p>
                                <p class="small mb-0">{{ $comment->comments }}</p>
                            </div>

                            @foreach ($comment->replies as $reply)
                                <div class="d-flex flex-start mt-4 reply">
                                    <div class="flex-grow-1 flex-shrink-1">
                                        <p class="mb-1">
                                            {{ $reply->user->username }} (Owner)
                                            <span class="small">- {{ $reply->created_at }}</span>
                                        </p>
                                        <p class="small mb-0">{{ $reply->comments }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
