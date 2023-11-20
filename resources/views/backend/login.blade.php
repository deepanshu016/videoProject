<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">
<head>

    <meta charset="utf-8" />
    <title>Sign In | Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Sign In | Admin Pane" name="description" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('public/backend/images/favicon.ico') }}">
    <!-- Layout config Js -->
    <script src="{{ asset('public/backend/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('public/backend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('public/backend/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('public/backend/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('public/backend/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/backend/css/toastr.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>

<div class="auth-page-wrapper pt-5">
    <!-- auth page bg -->
    <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
        <div class="bg-overlay"></div>

        <div class="shape">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 120">
                <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
            </svg>
        </div>
    </div>

    <!-- auth page content -->
    <div class="auth-page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mt-sm-5 mb-4 text-white-50">
                        <div>
                            <a href="index.html" class="d-inline-block auth-logo">
                               <span>Event Management </span>
                            </a>
                        </div>
                        <p class="mt-3 fs-15 fw-medium">Admin Login</p>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card mt-4">

                        <div class="card-body p-4">
                            <div class="text-center mt-2">
                                <h5 class="text-primary">Welcome Back !</h5>
                                <p class="text-muted">Sign in to continue to Events.</p>
                            </div>
                            <div class="p-2 mt-4">
                                <form action="{{ url('admin/login') }}" method="POST" class="all-form">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Email</label>
                                        <input type="text" class="form-control" name="email" placeholder="Enter Email">
                                        <span class="text-danger" id="email"></span>
                                    </div>

                                    <div class="mb-3">
                                        <div class="float-end">
                                            <a href="£" class="text-muted">Forgot password?</a>
                                        </div>
                                        <label class="form-label" for="password-input">Password</label>
                                        <div class="position-relative auth-pass-inputgroup mb-3">
                                            <input type="password" class="form-control pe-5" placeholder="Enter password" name="password" id="password">

                                            <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted shadow-none" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                        </div>
                                        <span class="text-danger" id="password"></span>
                                    </div>

{{--                                    <div class="form-check">--}}
{{--                                        <label class="form-check-label" for="auth-remember-check">Remember me</label>--}}
{{--                                    </div>--}}

                                    <div class="mt-4">
                                        <button class="btn btn-success w-100" type="submit">Sign In</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <!-- end card body -->
                    </div>

                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end auth page content -->

    <!-- footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <p class="mb-0 text-muted">&copy;
                            <script>document.write(new Date().getFullYear())</script> Event.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->
</div>
<!-- end auth-page-wrapper -->

<!-- JAVASCRIPT -->
<script src="{{ asset('public/backend/js/jquery.min.js') }}"></script>
<script src="{{ asset('public/backend/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('public/backend/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('public/backend/libs/node-waves/waves.min.js') }}"></script>
<script src="{{ asset('public/backend/libs/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('public/backend/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
<script src="{{ asset('public/backend/js/plugins.js') }}"></script>
<!-- particles js -->
<script src="{{ asset('public/backend/libs/particles.js') }}/particles.js') }}'"></script>
<!-- particles app js -->
<script src="{{ asset('public/backend/js/pages/particles.app.js') }}"></script>
<!-- password-addon init -->
<script src="{{ asset('public/backend/js/pages/password-addon.init.js') }}"></script>
<script src="{{ asset('public/backend/js/toastr.js') }}"></script>
<script src="{{ asset('public/backend/js/custom.js') }}"></script>
@include("notify")
</body>
</html>
