@extends('home_pages.app')
@section('content')
    <div class="Sign">
        <div class="login">
            <form class="form-login" method="post">
                @csrf
                <fieldset>
                    <legend>
                        Forget your account
                    </legend>
                    <div class="form-group">
                        <div class="input-icon">
                            <i class="fa fa-user-o"> </i>
                            <input style="font-size: 40%px; color: rgba(0, 0, 0, 0.473);" type="email" id="id" name="email" placeholder="Enter Email " required>
                        </div>
                    </div>

                    <br>
                    <br>
                    <div class=" submit-area ">
                        <input type="submit" name="submit" value="Forget" class="tm-submit-area" />
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection
