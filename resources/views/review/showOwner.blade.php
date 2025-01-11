<!DOCTYPE html>
<html>
<head>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        .gradient-custom {
            /* fallback for old browsers */
            background: #4facfe;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to bottom right, rgba(79, 172, 254, 1), rgba(0, 242, 254, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to bottom right, rgba(79, 172, 254, 1), rgba(0, 242, 254, 1));
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



    <section class="gradient-custom">
        <div class="container my-5 py-5">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12 col-lg-10 col-xl-8">
                    <div class="card">
                        <div class="card-body p-4">
                            <h4 class="text-center mb-4 pb-2">Nested comments section</h4>
                        @foreach ($comments as $comment)
                            <div class="row">
                                <div class="col">
                                    <div class="d-flex flex-start comment-box">
                                        <div class="flex-grow-1 flex-shrink-1">
                                            <div>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <p class="mb-1">
                                                        {{$comment->user->username}} <span class="small">- {{$comment->created_at}}&nbsp;&nbsp;&nbsp;&nbsp;-Rating: {{$comment->reviews}}</span>
                                                    </p>
                                                    <a href="#!"><i class="fas fa-reply fa-xs"></i><span class="small"> reply</span></a>
                                                </div>
                                                <p class="small mb-0">
                                                    {{$comment->comments}}
                                                </p>
                                            </div>

                                            <div class="d-flex flex-start mt-4 reply">
                                                <div class="flex-grow-1 flex-shrink-1">
                                                    <div>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <p class="mb-1">
                                                                Simona Disa <span class="small">- 3 hours ago</span>
                                                            </p>
                                                        </div>
                                                        <p class="small mb-0">
                                                            Letters, as opposed to using 'Content here, content here', making it look like readable English.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Font Awesome JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>

</body>
</html>
