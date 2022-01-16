<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hunar | Register</title>

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
                            <span>If you are existing?
                                {!! link_to_route('login','Login Now') !!}
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="rlb-right">
                        <h5 class="rlbr-title">Create Account</h5>

                        <!-- register form start -->
                        <div class="rl-form">
                            {!! Form::open(['url' => 'store', 'method' => 'post']) !!}
                                <div class="row g-3">
                                    <div class="col-12 form-col">
                                        <div class="form-col-box">
                                            <span class="form-icon">
                                                <img src="{{ asset('frontend/assets/images/icons/Email.svg') }}" class="img-fluid" alt="">
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
                                                <img src="{{ asset('frontend/assets/images/icons/Lock.svg') }}" class="img-fluid" alt="">
                                            </span>
                                            {!! Form::password('password',['class' => 'form-control', 'placeholder' => 'Password', 'id' => 'password']) !!}
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 form-col">
                                        <div class="form-col-box">
                                            <span class="form-icon">
                                                <img src="{{ asset('frontend/assets/images/icons/Lock.svg') }}" class="img-fluid" alt="">
                                            </span>
                                            {!! Form::password('password_confirmation',['class' => 'form-control', 'placeholder' => 'Confirm Password', 'id' => 'password_confirmation']) !!}
                                        </div>
                                    </div>

                                    <!-- terms & conditions -->
                                    <div class="col-12">
                                        <div class="form-check">
                                            {!! Form::checkbox(null,null,null,['class' => 'form-check-input', 'id' => 'gridCheck']) !!}
                                            {!! Form::label('gridCheck','I accept Terms & Conditions',['class' => 'form-check-label']) !!}
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

                                    <!-- login with social media -->
                                    <!-- <div class="col-12"> -->
                                    <div class="social-login sl-google w-100 font-xl">
                                        <a href="javascript:void(0)">Login with <b>Google</b></a>
                                        <div class="sl-icon">
                                            <img src="{{ asset('frontend/assets/images/icons/Google.svg') }}" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="social-login sl-facebook w-100 font-xl my-2">
                                        <a href="javascript:void(0)">Login with <b>Facebook</b></a>
                                        <div class="sl-icon">
                                            <img src="{{ asset('frontend/assets/images/icons/Facebook.svg') }}" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="social-login sl-apple w-100 font-xl mt-0">
                                        <a href="javascript:void(0)">Login with <b>Apple</b></a>
                                        <div class="sl-icon">
                                            <img src="{{ asset('frontend/assets/images/icons/Apple_Logo.svg') }}" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div>

                            {!! Form::close() !!}
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

</body>

</html>
