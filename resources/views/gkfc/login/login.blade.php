<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GKFC | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/adminlte.min.css')}}">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="{{ asset('AdminLTE/index2.html')}}"><b>GKFC</a>
    </div>
    <!-- Session Status -->
    {{-- <x-auth-session-status class="mb-4" :status="session('status')" /> --}}

    <!-- Validation Errors -->    
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form method="POST" action="{{ route('login') }}">
          @csrf        
          <div class="input-group mb-3">                          
              <x-input placeholder="Please Enter Email" id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />          
            {{-- <input type="email" class="form-control" placeholder="Email"> --}}
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">            
            <x-input placeholder="Please Enter Password" id="password" class="form-control" type="password" name="password" autocomplete="current-password" />
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <x-auth-validation-errors class="mb-4 text-danger" :errors="$errors" />
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">                
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                <label for="remember_me">
                  Remember Me
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              {{-- <button type="submit" class="">Sign In</button> --}}
              <x-button class="btn btn-primary btn-block">{{ __('Log in') }}</x-button>
            </div>
            <!-- /.col -->
          </div>
        </form>
        
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js')}}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('AdminLTE/dist/js/adminlte.min.js')}}"></script>
</body>

</html>