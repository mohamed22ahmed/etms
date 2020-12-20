@extends('home_pages.app')
@section('content')
    <div class="Sign">

        <div class="login">
            <form class="form-login" method="post">
                @csrf
                <fieldset>
                    <legend>
                        Sign in to your account
                    </legend>
                    <div class="form-group">
                        <div class="input-icon">
                            <i class="fa fa-user-o"> </i>
                            <input style="font-size: 40%px; color: rgba(0, 0, 0, 0.473);" type="email" id="id" name="email" placeholder="Enter Email " required>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="input-icon">
                            <i class="fa fa-key"></i>
                            <input type="password" id="password" name="password" placeholder="Enter Password" />
                            <span class="eye" onclick="myFunction()">
                                <i id="hide1" class="fa fa-eye"></i>
                                <i id="hide2" class="fa fa-eye-slash"></i>
                            </span>

                            <a href="/forget_password">Forget Password?</a>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="input-icon">
                            <select name="mbrGroup" style="width:260px" class="form-control">
                                <option value="1">Training Department Stuff</option>
                                <option value="2">Trainer</option>
                                <option value="3">Trainee</option>
					        </select>
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
                        <input type="submit" name="submit" value="Login" class="tm-submit-area" />
                    </div>
            </form>
            <br>
            <div class="message">
                Dont have an account yet?
                <a href="/signup">  Create an account</a>
            </div>
            </fieldset>
            </form>
        </div>
    </div>
@endsection
