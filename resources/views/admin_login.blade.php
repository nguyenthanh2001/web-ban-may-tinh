<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>LOGIN IN ADMIN</title>
  <!-- base:css -->
  <link rel="stylesheet" href="{{asset('public/backend/style/vendors/typicons/typicons.css')}}">
  <link rel="stylesheet" href="{{asset('public/backend/style/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('public/backend/style/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('public/frontend/images/gif_logo.gif')}}" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div style="background-color: #c2c9d3;" class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <!-- <div class="brand-logo">
                <center><img style="width: 60%; height: ;" src="{{asset('public/frontend/images/gif_logo.gif')}}" alt="logo" alt="logo"></center>
              </div> -->
              <h4>Hello! let's Sign in</h4>
			          <br>
                  <span>
                     <i style="color: red;">
                      <?php
                        $message = Session::get('message');
                        if($message){
                          echo '<span class="text-alert">'.$message.'</span>';
                          Session::put('message',null);
                        }
                  	  ?>
                    </i>
                </span>
              <form class="pt-3" action="{{URL::to('/admin-dashboard')}}" method="post">
			  	{{ csrf_field() }}
				  @foreach($errors->all() as $val)
					<ul>
						<li>{{$val}}</li>
					</ul>
				@endforeach
                <div class="form-group" >
					<label for="">Email</label>
                  <input  type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Your Emai" name="admin_email" value="trung@gmail.com">
                </div>
                <div class="form-group">
				<label for="">Password</label>
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Your Password" name="admin_password" value="123">
                </div>
                <div class="mt-3">
                  <!-- <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="../../index.html">SIGN IN</a> -->
				  <input class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit" value="SIGN IN" name="login">
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
                <div class="mb-2">
					<!-- <a href="{{url('/login-facebook')}}">Login Facebook</a> |
					<a href="{{url('/login-google')}}">Login Google</a> -->
                </div>
                <!-- dang ky admin -->
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="#" class="text-primary">Create</a>
                </div>
				{{-- <div class="g-recaptcha" data-sitekey="{{env('CAPTCHA_KEY')}}"></div>
				<br/>
				@if($errors->has('g-recaptcha-response'))
				<span class="invalid-feedback" style="display:block">
					<strong>{{$errors->first('g-recaptcha-response')}}</strong>
				</span>
				@endif --}}
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
  <!-- base:js -->
  <script src="{{asset('public/backend/style/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="{{asset('public/backend/style/js/off-canvas.js')}}"></script>
  <script src="{{asset('public/backend/style/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('public/backend/style/js/template.js')}}"></script>
  <script src="{{asset('public/backend/style/js/settings.js')}}"></script>
  <script src="{{asset('public/backend/style/js/todolist.js')}}"></script>
  <!-- endinject -->
</body>

</html>