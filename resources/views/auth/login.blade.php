<!DOCTYPE html>
<html lang="en" data-topbar-color="dark">

    <head>
        <meta charset="utf-8" />
        <title>Login to admin Sternics</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />

        <!-- App favicon -->
        <link
            rel="shortcut icon"
            href="{{ asset('assets/images/Sternics-sm.png') }}"
            type="image/x-icon"
        />

		<!-- Theme Config Js -->
		<script src="assets/js/head.js"></script>

		<!-- Bootstrap css -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="app-style" />

		<!-- App css -->
		<link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

		<!-- Icons css -->
		<link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    </head>

    <body class="authentication-bg authentication-bg-pattern">
        <div class="mt-5 mb-5 account-pages">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                        <div class="card bg-pattern">

                            <div class="p-4 card-body">
                                
                                <div class="m-auto text-center w-75">
                                    <div class="auth-brand">
                                        <a href="index.html" class="text-center logo logo-dark">
                                            <span class="logo-lg">
                                                <img src="{{ asset('assets/images/Sternics-sm-black.png') }}" alt="logo" height="40">
                                            </span>
                                        </a>
                    
                                        <a href="index.html" class="text-center logo logo-light">
                                            <span class="logo-lg">
                                                <img src="{{ asset('assets/images/Sternics-sm.png') }}" alt="logo" height="40">
                                            </span>
                                        </a>
                                    </div>
                                    <p class="mt-3 mb-4 text-muted">Enter your email address and password to access admin panel.</p>
                                </div>

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Email address</label>
                                        <input class="form-control" type="email" id="email" required placeholder="Enter your email" name="email" :value="old('email')" autofocus autocomplete="username">
                                    </div>

                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="password" class="form-control" placeholder="Enter your password" id="password" name="password" required autocomplete="current-password">
                                            <div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center d-grid">
                                        <button class="btn btn-primary" type="submit"> Log In </button>
                                    </div>

                                </form>

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->


        <footer class="footer footer-alt">
            2025 - <script>document.write(new Date().getFullYear())</script> &copy; PT Thoward First International
        </footer>

        <!-- Authentication js -->
        <script src="assets/js/pages/authentication.init.js"></script>

    </body>
</html>