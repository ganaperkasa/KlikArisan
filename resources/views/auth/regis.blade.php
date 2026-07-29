<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register - KlikArisan</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">

                <div class="brand-logo">
                  {{-- <img src="{{ asset('assets/images/logo.svg') }}"> --}}
                </div>
                <h4>New here?</h4>
                <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
                <form method="POST" action="{{ route('register.store') }}">
                    @csrf
                  <div class="form-group">
                    <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-control form-control-lg"  placeholder="Username">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control form-control-lg"  placeholder="Email">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <input type="password" id="password" name="password" class="form-control form-control-lg"  placeholder="Password">
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  {{-- <div class="mb-4">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input"> I agree to all Terms & Conditions </label>
                    </div>
                  </div> --}}
                  <div class="mt-3 d-grid gap-2">
                    <button type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" >SIGN UP</button>
                  </div>
                  <div class="text-center mt-4 font-weight-light"> Already have an account? <a href="{{ route('login') }}" class="text-primary">Login</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('assets/js/off-canvas.js') }}../../"></script>
    <script src="{{ asset('assets/js/misc.js') }}../../"></script>
    <script src="{{ asset('assets/js/settings.js') }}../../"></script>
    <script src="{{ asset('assets/js/todolist.js') }}../../"></script>
    <script src="{{ asset('assets/js/jquery.cookie.js') }}../../"></script>
    <!-- endinject -->
  </body>
</html>
