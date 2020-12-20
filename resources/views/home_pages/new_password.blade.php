@extends('home_pages.app')
@section('content')
    <div class="Sign">
        <div class="login">
            <form class="form-login" method="post">
                @csrf
                <fieldset>
                    <legend>
                        New Password
                    </legend>
                    <div class="form-group">
                        <div class="input-icon">
                            <i class="fa fa-user-o"> </i>
                            <input style="font-size: 40%px; color: rgba(0, 0, 0, 0.473);" type="password" id="id" name="password" placeholder="Enter New Password " required>
                        </div>
                    </div>

                    <br>
                    <br>
                    <div class=" submit-area ">
                        <input type="submit" name="submit" value="Confirm" class="tm-submit-area" />
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection
