<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        .gradient-custom-2 {
            /* fallback for old browsers */
            background: #a8e063;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, #56ab2f, #a8e063);

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, #56ab2f, #a8e063);
        }

        @media (min-width: 768px) {
            .gradient-form {
                height: 100vh !important;
            }
        }

        @media (min-width: 769px) {
            .gradient-custom-2 {
                border-top-right-radius: .3rem;
                border-bottom-right-radius: .3rem;
            }
        }
    </style>
</head>
<body>
<section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
                <div class="card rounded-3 text-black">
                    <div class="row g-0">
                        <div class="col-lg-6">
                            <div class="card-body p-md-5 mx-md-4">

                                <div class="text-center">
                                    <img src="data:image/png;base64,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"
                                        style="width: 185px;" alt="logo">
                                    <h4 class="mt-1 mb-5 pb-1">PlayZone</h4>
                                </div>

                               <form action={{route("login.store")}} method="post">
                                @csrf
                                    <p>Please login to your account</p>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="text" name="username" class="form-control" placeholder="Enter username" />
                                        <label class="form-label" for="form2Example11">Username</label>
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="password" name="password" class="form-control" placeholder="Enter password" />
                                        <label class="form-label" for="form2Example22">Password</label>
                                    </div>

                                    <div class="text-center pt-1 mb-5 pb-1">
                                        <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Log in</button>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-center pb-4">
                                        <p class="mb-0 me-2">Don't have an account?</p>
                                        <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-danger" onclick="window.location.href='{{ route('signUp.create') }}'">Create new</button>
                                    </div>


                                </form>

                            </div>
                        </div>
                        <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                            <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                <h4 class="mb-4">Fun is not restricted to those who can't find the place</h4>
                                <p class="small mb-0">Explore many sports facilities available and book them</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- Font Awesome JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
</body>
</html>

