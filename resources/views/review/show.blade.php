<!DOCTYPE html>
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
