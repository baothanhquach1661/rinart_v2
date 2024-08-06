<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-vertical-style="overlay" data-theme-mode="light" data-header-styles="light" data-menu-styles="light" data-toggled="close">

<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Rinart &amp; Login </title>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
	<meta name="keywords" content="admin dashboard,admin template,admin,dashboard,bootstrap dashboard,bootstrap html template,dashboard template,bootstrap admin template,html admin template,dashboard html css,bootstrap admin,dashboard css,admin panel bootstrap,bootstrap dashboard template">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('backend/assets/images/brand-logos/favicon.ico')}}" type="image/x-icon">

    <!-- Main Theme Js -->
    <script src="{{ asset('backend/assets/js/authentication-main.js')}}"></script>

    <!-- Bootstrap Css -->
    <link id="style" href="{{ asset('backend/assets/libs/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" >

    <!-- Style Css -->
    <link href="{{ asset('backend/assets/css/styles.min.css')}}" rel="stylesheet" >

    <!-- Icons Css -->
    <link href="{{ asset('backend/assets/css/icons.min.css')}}" rel="stylesheet" >

    <!--- Toastr css -->
    <link href="{{ asset('backend/assets/css/toastr.min.css')}}" rel="stylesheet" >


</head>

<body class="sign-in-basic-page">

    <div class="container px-3">
        <div class="row justify-content-center align-items-center authentication authentication-basic h-100">
            <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-6 col-sm-8 col-12">
                <div class="my-4 d-flex justify-content-center">
                    <a href="index.html">
                        <img src="{{ asset('backend/assets/images/brand-logos/desktop-dark.png') }}" alt="logo" class="">
                    </a>
                </div>
                <div class="card custom-card">
                    <div class="card-body p-4 pb-3">
                        <form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
                            @csrf
                            <h4 class="fw-semibold mb-4 text-center">Sign In</h4>
                            <div class="input-box mb-3" data-bs-validate="Valid email is required: ex@abc.xyz">
                                <input type="email" name="email" value="{{ old('email') }}" class="form-control form-control-lg" required>
                                <span class="authentication-input-icon"><i class="ri-mail-fill text-default fs-15 op-7"></i></span>
                            </div>
                            <div class="input-group input-box mb-3">
                                <input name="password" type="password" class="form-control form-control-lg" id="signin-password" required>
                                <span class="authentication-input-icon"><i class="ri-lock-2-fill text-default fs-15 op-7"></i></span>
                                <button type="button" aria-label="button" class="btn btn-light" onclick="createpassword('signin-password',this)" id="button-addon2"><i class="ri-eye-off-line align-middle"></i></button>
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input name="remember" class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label text-muted fw-normal" for="defaultCheck1">
                                        Remember password ?
                                    </label>
                                </div>
                            </div>
                            <div class="col-xl-12 d-grid mb-3">
                                <button type="submit" class="btn btn-lg btn-primary">Sign In</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{ asset('backend/assets/js/custom-switcher.min.js')}}"></script>

    <!-- Show Password JS -->
    <script src="{{ asset('backend/assets/js/show-password.js')}}"></script>

    <!-- Toast JS -->
    <script src="{{ asset('backend/assets/js/Toasts.js') }}"></script>
    <!-- Toastr JS -->
    <script src="{{ asset('backend/assets/js/toastr.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            @if($errors->any())
                @foreach ($errors->all() as $error)
                    toastr.error("{{ $error }}")
                @endforeach
            @endif
        });
    </script>


</body>

</html>




