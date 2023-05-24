<!doctype html>
<html lang="zxx">

<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Links of CSS files -->
        <link rel="stylesheet" href="{{asset('theme/assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('theme/assets/css/jquery-ui.min.css')}}">
        <link rel="stylesheet" href="{{asset('theme/assets/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('theme/assets/css/boxicons.min.css')}}">
        <link rel="stylesheet" href="{{asset('theme/assets/css/flaticon.css')}}">
        <link rel="stylesheet" href="{{asset('theme/assets/css/magnific-popup.min.css')}}">
        <link rel="stylesheet" href="{{asset('theme/assets/css/odometer.min.css')}}">
        <link rel="stylesheet" href="{{asset('theme/assets/css/nice-select.min.css')}}">
        <link rel="stylesheet" href="{{asset('theme/assets/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('theme/assets/css/slick.min.css')}}">
        <link rel="stylesheet" href="{{asset('theme/assets/css/rangeSlider.min.css')}}">
        <link rel="stylesheet" href="{{asset('theme/assets/css/meanmenu.min.css')}}">
        <link rel="stylesheet" href="{{asset('theme/assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('theme/assets/css/responsive.css')}}">

        <title>Wakazi Industries Limited - All Your Artisans in One Place</title>

        <link rel="icon" type="image/png" href="assets/img/favicon.png">
    </head>
    <body>

        <!-- Start Login Area -->
        <section class="login-area">
            <div class="row m-0">
                <div class="col-lg-6 col-md-12 p-0">
                    <div class="login-image">
                        <img src="{{url('/')}}/uploads/images/electrician-emmanuel-ikwuegbu-8005397.jpg" alt="image">
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 p-0">
                    <div class="login-content">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <div class="login-form">
                                    <div class="logo">
                                        <a href="{{url('/')}}"><img style="max-width:200px" src="{{url('/')}}/uploads/WAKAZIMOCKLOGO.png" alt="image"></a>
                                    </div>

                                    <h3>Welcome Back</h3>
                                    <p>New to Wakazi? <a href="{{url('/')}}/register">Sign up</a></p>

                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" placeholder="Your Email Address" class="form-control" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <input type="password" placeholder="Your Password" class="form-control" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <button type="submit">Login</button>

                                        <div class="forgot-password">
                                            <a href="#">Forgot Password?</a>
                                        </div>

                                        <div class="connect-with-social">
                                            <button type="submit" class="facebook"><i class='bx bxl-facebook'></i> Connect with Facebook</button>
                                            <button type="submit" class="twitter"><i class='bx bxl-twitter'></i> Connect with Twitter</button>
                                            {{-- <button type="submit" class="gmail"><i class='bx bxl-google'></i> Connect with Gmail</button> --}}
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Login Area -->

        <!-- Links of JS files -->
        <script src="{{asset('theme/assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('theme/assets/js/popper.min.js')}}"></script>
        <script src="{{asset('theme/assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('theme/assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('theme/assets/js/magnific-popup.min.js')}}"></script>
        <script src="{{asset('theme/assets/js/appear.min.js')}}"></script>
        <script src="{{asset('theme/assets/js/odometer.min.js')}}"></script>
        <script src="{{asset('theme/assets/js/jquery-ui.min.js')}}"></script>
        <script src="{{asset('theme/assets/js/parallax.min.js')}}"></script>
        <script src="{{asset('theme/assets/js/slick.min.js')}}"></script>
        <script src="{{asset('theme/assets/js/rangeSlider.min.js')}}"></script>
        <script src="{{asset('theme/assets/js/nice-select.min.js')}}"></script>
        <script src="{{asset('theme/assets/js/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('theme/assets/js/meanmenu.min.js')}}"></script>
        <script src="{{asset('theme/assets/js/wow.min.js')}}"></script>
        <script src="{{asset('theme/assets/js/form-validator.min.js')}}"></script>
        <script src="{{asset('theme/assets/js/contact-form-script.js')}}"></script>
        <script src="{{asset('theme/assets/js/ajaxchimp.min.js')}}"></script>
        <script src="{{asset('theme/assets/js/main.js')}}"></script>
    </body>

</html>
