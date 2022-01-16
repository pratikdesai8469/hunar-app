<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hunar | Login</title>
    <!-- css links start -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">
    <!-- css links end -->
</head>

<body>
    <div class="rl-box">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 p-0">
                    <div class="rlb-left">
                        <div class="rlbl-img">
                            <!-- <img src="./assets/images/rl-im.jpg" class="img-fluid" alt=""> -->
                        </div>
                        <div class="rbl-tag">
                            <span>If you are new?
                                {!! link_to_route('register','Create New') !!}
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="rlb-right">
                        <h5 class="rlbr-title">Login</h5>
                        <h6 class="rlbr-subtitle font-xl">Login to continue with <span>Hunarbook.</span></h6>

                        <!-- register form start -->
                        <div class="rl-form">
                            {!! Form::open(['url' => 'login', 'method' => 'post']) !!}
                                <div class="row g-3">
                                    <!-- form fields -->
                                    <div class="col-12 form-col">
                                        <div class="form-col-box">
                                            <span class="form-icon">
                                                <img src="{{ asset('frontend/assets/images/icons/Email.svg') }}"
                                                    class="img-fluid" alt="">
                                            </span>
                                            {!! Form::email('email',old('email'),['class' => 'form-control', 'placeholder' => 'Email Address', 'id' => 'email']) !!}
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 form-col">
                                        <div class="form-col-box">
                                            <span class="form-icon">
                                                <img src="{{ asset('frontend/assets/images/icons/Lock.svg') }}"
                                                    class="img-fluid" alt="">
                                            </span>
                                            {!! Form::password('password',['class' => 'form-control', 'placeholder' => 'Password', 'id' => 'password']) !!}
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            {!! link_to_route('password.request','Forgot?','',['class' => 'forgot-password font-md']) !!}
                                        </div>
                                    </div>

                                    <!-- terms & conditions -->
                                    <div class="col-12">
                                        <div class="check-captcha">
                                            <div class="form-check">
                                                {!! Form::checkbox('remember','', old('remember') ? true : false, ['class' => 'form-check-input', 'id' => 'gridCheck']) !!}
                                                {!! Form::label('gridCheck','Remember me', ['class' => 'form-check-label']) !!}
                                            </div>
                                            {{-- <div class="add-captcha">
                                                <div class="g-recaptcha"
                                                    data-sitekey="6Ld_Pl0dAAAAAMeDko7woSvjsQIl0vdGpN4wEWSm"></div>
                                            </div> --}}
                                        </div>
                                    </div>

                                    <!-- button -->
                                    <div class="col-12 form-col">
                                        {!! Form::button('Create Account',['type' => 'submit', 'class' => 'btn-base btn-bottlegreen w-100 font-lg']) !!}
                                    </div>

                                    <!-- or section -->
                                    <div class="col-12 position-relative">
                                        <hr class="or-line">
                                        <span class="or-circle">OR</span>
                                    </div>

                                    <!-- login with social media starts-->
                                    <!-- <div class="col-12"> -->
                                    <div class="social-login sl-google w-100 font-xl">
                                        <a href="javascript:void(0)">Login with <b>Google</b></a>
                                        <div class="sl-icon">
                                            <img src="{{ asset('frontend/assets/images/icons/Google.svg') }}"
                                                class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="social-login sl-facebook w-100 font-xl my-2">
                                        <a href="javascript:void(0)">Login with <b>Facebook</b></a>
                                        <div class="sl-icon">
                                            <img src="{{ asset('frontend/assets/images/icons/Facebook.svg') }}"
                                                class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="social-login sl-apple w-100 font-xl mt-0">
                                        <a href="javascript:void(0)">Login with <b>Apple</b></a>
                                        <div class="sl-icon">
                                            <img src="{{ asset('frontend/assets/images/icons/Apple_Logo.svg') }}"
                                                class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <!-- login with social media ends-->
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
                <!-- register form end -->
            </div>
        </div>
    </div>
    </div>
    </div>


    <!-- js links start -->
    <script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <!-- js links end -->

    <!-- captcha code -->
    <script src="https://www.google.com/recaptcha/api.js" async></script>

    <script type="module">
        // Import the functions you need from the SDKs you need
        import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.3/firebase-app.js";
        import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.6.3/firebase-analytics.js";
        // TODO: Add SDKs for Firebase products that you want to use
        // https://firebase.google.com/docs/web/setup#available-libraries

        // Your web app's Firebase configuration
        // For Firebase JS SDK v7.20.0 and later, measurementId is optional
        const firebaseConfig = {
          apiKey: "AIzaSyClq73Vsle8f9i_ne_vhLP4VDkmFEYEMyM",
          authDomain: "hunar-fd156.firebaseapp.com",
          databaseURL: "https://hunar-fd156-default-rtdb.firebaseio.com",
          projectId: "hunar-fd156",
          storageBucket: "hunar-fd156.appspot.com",
          messagingSenderId: "344038295630",
          appId: "1:344038295630:web:e173628af7417c7fe85b1f",
          measurementId: "G-GDDN7GK13W"
        };

        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
        const analytics = getAnalytics(app);
      </script>

</body>

</html>
