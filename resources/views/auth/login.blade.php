

<!DOCTYPE html>
<html lang="en">
<head>
    @include('theme.includes.compatibility')
  <meta name="description" content="">
  <title>Login</title>

  @include('theme.includes.style')
</head>
<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="blank-page" style="background-image: url('theme/assets/images/banner/01.png');">
<!-- BEGIN: Content-->
  <div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div>
        <div class="content-header row">
        </div>
        <div class="content-body">
            <div class="auth-wrapper auth-v1 px-2">
                <div class="auth-inner py-2">
                    <!-- Login v1 -->
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="text-center">
                                <h1>Login to System</h1>
                                <p class="card-text mb-2">Please sign-in to your account.</p>
                            </div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="login-email" class="form-label">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="ovais@example.com" aria-describedby="login-email" tabindex="1" autofocus />
                                </div>

                                @error('email')

                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                                <div class="form-group pass-reg">
                                    <div class="d-flex justify-content-between">
                                        <label for="login-password">Password</label>
                                        <a href="page-auth-forgot-password-v1.php">
                                            <small>Forgot Password?</small>
                                        </a>
                                    </div>
                                    <div class="input-group input-group-merge form-password-toggle">
                                        <input type="password" class="form-control form-control-merge @error('password') is-invalid @enderror" id="password" name="password" tabindex="2" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="login-password" />
                                        <div class="input-group-append">
                                            <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                        </div>
                                    </div>
                                </div>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="remember-me" tabindex="3" />
                                        <label class="custom-control-label" for="remember-me"> Remember Me </label>
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-block" tabindex="4">Sign in</button>
                            </form>

                            <p class="text-center mt-2 pass-reg">
                                <span>Not a Member?</span>
                                <a href="#">
                                    <span>Register Now</span>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- END: Content-->
@include('theme.includes.footer')
</body>
</html>
