<!DOCTYPE html>
<html>
<head>
    <!DOCTYPE html>
<html>
<head>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        .navbar-custom {
            background: #a8e063;
            background: -webkit-linear-gradient(to right, #56ab2f, #a8e063);
            background: linear-gradient(to right, #56ab2f, #a8e063);
        }
        .gradient-custom {
            /* fallback for old browsers */
            background: #a8e063;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to bottom right, #56ab2f, #a8e063);

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to bottom right, #56ab2f, #a8e063);
        }
        .comment-box {
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 20px; /* Increased margin-bottom to add more space between comments */
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
            margin-left: 40px; /* Adjust this value to change the indentation */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-custom">
        <a class="navbar-brand" href="#">PlayZone</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Background image -->
    <div
        class="p-5 text-center bg-image"
        style="
            background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/041.webp');
            height: 400px;
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

    <section class="gradient-custom">
        <div class="container my-5 py-5">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12 col-lg-10 col-xl-8">
                    <div class="card">
                        <div class="card-body p-4">
                            <h4 class="text-center mb-4 pb-2">Comments</h4>
                            @foreach ($comments as $comment)
                                <div class="row">
                                    <div class="col">
                                        <div class="d-flex flex-start comment-box">
                                            <div class="flex-grow-1 flex-shrink-1">
                                                <div>
                                                    <p class="mb-1">
                                                        {{ $comment->user->username }}
                                                        <span class="small">- {{ $comment->created_at }}</span>
                                                        <a href="{{ route('review.createComment', ['id' => $comment->id]) }}" class="btn btn-primary">
                                                            <i class="fas fa-reply fa-xs"></i><span class="small"> reply</span>
                                                        </a>
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

