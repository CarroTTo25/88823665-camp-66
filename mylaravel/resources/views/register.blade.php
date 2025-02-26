@extends('layouts.default')
@section('content')
<div class="register-box">
    <div class="register-logo">
      <a href="../index2.html"><b>Admin</b>LTE</a>
    </div>
    <!-- /.register-logo -->
    <div class="card">
      <div class="card-body register-card-body">
        <p class="register-box-msg">Register a new membership</p>
        <form action="{{ url('/register')}}"onsubmit = "return myfunction()" method="post">
            @csrf
          <div class="input-group mb-3">
            <input type="text" name = "name" id = "name" class="form-control" placeholder="Full Name">
            <div class="input-group-text"><span class="bi bi-person"></span></div>
          </div>
          <div class="input-group mb-3">
            <input type="email" name = "email" id = "email" class="form-control" placeholder="Email">
            <div class="input-group-text"><span class="bi bi-envelope"></span></div>
          </div>
          <div class = "valid-feedback">
            OK
        </div>

          <div class = "valid-feedback" id="invalid-name">
            กรุณาระบบข้อมูล name
        </div>
          <div class="input-group mb-3">
            <input type="password" name = "password" id = "pass" class="form-control" placeholder="Password">
            <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
          </div>
          <!--begin::Row-->
          <div class="row">
            <div class="col-8">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id = "mycheckbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  I agree to the <a href="#">terms</a>
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Sign In</button>
              </div>
            </div>
            <!-- /.col -->
          </div>
          <!--end::Row-->
        </form>
        <!--button class="btn" onclick="myfunction()">Click Me</button-->
        <div class="social-auth-links text-center mb-3 d-grid gap-2">
          <p>- OR -</p>
          <a href="#" class="btn btn-primary">
            <i class="bi bi-facebook me-2"></i> Sign in using Facebook
          </a>
          <a href="#" class="btn btn-danger">
            <i class="bi bi-google me-2"></i> Sign in using Google+
          </a>
        </div>
        <!-- /.social-auth-links -->
        <p class="mb-0">
          <a href="login.html" class="text-center"> I already have a membership </a>
        </p>
      </div>
      <!-- /.register-card-body -->
    </div>
  </div>
@endsection

@section('scripts')
    <script>
       let $myval
       var myval2 = "value of myval2"
       const myvar3 = ""
      // console.log("Hello world");
      // alert("hello world")
       /**/
       //
       //AlERT("Hello World")
       function myfunction() {
    let name = $('#name');
    let email = $('#email');
    let pass = $('#pass');
    let mycheckbox = $('#mycheckbox');
    let isValid = true;

    // Validate name
    if (name.val().trim() === "") {
        name.addClass('is-invalid');
        $('#invalid-name').html("<b><u>กรุณากรอกชื่อ</u></b>");
        isValid = false;
    } else {
        name.removeClass('is-invalid');
    }

    // Validate email
    let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email.val())) {
        email.addClass('is-invalid');
        isValid = false;
    } else {
        email.removeClass('is-invalid');
    }

    // Validate password
    let passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/;
    if (!passwordPattern.test(pass.val())) {
        pass.addClass('is-invalid');
        isValid = false;
    } else {
        pass.removeClass('is-invalid');
    }

    // Validate checkbox
    if (!mycheckbox.prop('checked')) {
        alert('กรุณายอมรับเงื่อนไข');
        isValid = false;
    }

    return isValid;
}


        //myfunction()


    </script>
    <script>
        console.log(myval2)
    </script>
@endsection
