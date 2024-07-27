<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
<meta name="author" content="NobleUI">
<meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

<title>ADMIN LOGIN</title>

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
<!-- End fonts -->

<!-- core:css -->
<link rel="stylesheet" href="{{ asset('backend/assets/vendors/core/core.css') }}">
<!-- endinject -->

<!-- Plugin css for this page -->
<!-- End plugin css for this page -->

<!-- inject:css -->
<link rel="stylesheet" href="{{ asset('backend/assets/fonts/feather-font/css/iconfont.css') }}">
<link rel="stylesheet" href="{{ asset('backend/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
<!-- endinject -->

<!-- Layout styles -->
<link rel="stylesheet" href="{{ asset('backend/assets/css/demo2/style.css') }}">
<!-- End layout styles -->

<link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.png') }}" />
</head>
<body>
<div class="main-wrapper">
<div class="page-wrapper full-page">
<div class="page-content d-flex align-items-center justify-content-center">

<div class="row w-100 mx-0 auth-page">
<div class="col-md-8 col-xl-6 mx-auto">
<div class="card">
<div class="row">
<div class="col-md-12 ps-md-0">
<div class="auth-form-wrapper px-4 py-5">
<a href="#" class="noble-ui-logo logo-light d-block mb-2" style="text-align: center">JAGORONI<span> TV</span></a>

<h5 class="text-muted fw-normal mb-4" style="text-align: center">LOG IN TO JTV ADMIN DASHBOARD.</h5>


<form class="forms-sample" method="POST" action="{{ route('login') }}">
@csrf

<div class="mb-3">
<label for="email" class="form-label">EMAIL</label>
<input type="email" name="email" id="login" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Enter Your Email" required autocomplete="email" autofocus>
    @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="mb-3">
<label for="userPassword" class="form-label">PASSWORD</label>
<input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" autocomplete="current-password" placeholder="Enter Your Password" required>
    @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-check mb-3">
    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    <label class="form-check-label" for="remember">
        {{ __('Remember Me') }}
    </label>
</div>

<div>
<button type="submit" class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0">     {{ __('Login') }}</button>
</div>

</form>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<!-- core:js -->
<script src="{{ asset('backend/assets/vendors/core/core.js') }}"></script>
<!-- endinject -->

<!-- Plugin js for this page -->
<!-- End plugin js for this page -->

<!-- inject:js -->
<script src="{{ asset('backend/assets/vendors/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/template.js') }}"></script>
<!-- endinject -->

<!-- Custom js for this page -->
<!-- End custom js for this page -->

</body>
</html>

{{-- @endsection --}}