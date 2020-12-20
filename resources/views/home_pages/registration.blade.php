@extends('home_pages.app')
@section('content')
    <div class="content center">
        <form name="SignUp" id="SignUp" action="/signup" class="Signup" method="post">@csrf
            <fieldset>
                <legend>
                    Sign Up
                </legend>
                <p>
                    Enter your personal details below:
                </p>
                <div class="form-group">
                    <input type="text" name="fname" id="firstName" class="form-c rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Enter your first name" required>
                </div>
                <div class="form-group">
                    <input type="text" name="lname" id="lastName" class="form-c rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Enter your last name" required>
                </div>
                <div class="form-group">
                    <input type="text" name="major" id="major" class="form-c rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Enter yor Major " required>
                </div>
                <div class="form-group">
                    <input type="text" name="course_id" id="courseID" class="form-c rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Course ID " required>
                </div>
                <div class="form-group">
                    <i class="fa fa-phone"></i>
                    <input type="text" name="phone" id="phone" class="form-c rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Phone Number" required>
                </div>
                <div class="form-group">
                    <label class="block">  Gender </label>
                    <div class="clip-radio radio-primary">
                        <input type="radio" id="rg-female" name="gender" value="1">
                        <label for="rg-female"> Female </label>
                        <i class="fa fa-female"></i>
                        <input type="radio" id="rg-male" name="gender" value="2">
                        <label for="rg-male"> Male</label>
                        <i class="fa fa-male"></i>
                    </div>
                    <br>
                    <br>
                </div>
                <div class="form-group">
                    <i class="fa fa-envelope-o"></i>
                    <input type="text" name="email" class="form-c rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Enter you email" required>
                </div>
                <div class="form-group">
                    <div class="input-icon">
                        <i class="fa fa-key"></i>
                        <input type="password" id="password" name="password" class="form-c rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Enter Password" required>
                        <span class="eye" onclick="myFunction()">
                                <i id="hide1" class="fa fa-eye"></i>
                                <i id="hide2" class="fa fa-eye-slash"></i>
                            </span>
                    </div>
                </div>
                <script>
                    function myFunction() {
                        var x = document.getElementById("password");
                        var y = document.getElementById("hide1");
                        var z = document.getElementById("hide2");

                        if (x.type === "password") {
                            x.type = "text";
                            y.style.display = "block";
                            z.style.display = "none";
                        } else {
                            x.type = "password";
                            y.style.display = "none";
                            z.style.display = "block";
                        }
                    }
                </script>
                <br>
                <br>
                <div class=" submit-area ">
                    <button type="submit " class="tm-submit-area"> Create </button>
                </div>
                <br>
                <div class="message">
                    Already have an account?
                    <a href="/login">  Sign In </a>
                </div>
            </fieldset>
        </form>
    </div>
@endsection
